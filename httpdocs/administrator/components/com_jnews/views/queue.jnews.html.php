<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>queue view</p>
* <p>This class contains functions to create the queue view</p>
* @author Joobi Limited <wwww.joobi.co>
*/
class jNews_QueueHTML {

	public static function showMailingQueue($mailingq=null,$lists=null, $form, $start,$limit,$mailingsearch,$setLimit=null, $setSort=null){
	$listId = null;
		?>

		<script language="javascript" type="text/javascript">
		<!--
			function jnewsselectall(){
				var i = 0;
				allcheck = document.getElementById("selectallcheck");
				if(allcheck.checked) checkedvalue = 1;
				else checkedvalue = 0;

				while(myelement = document.getElementById("cid["+i+"]")){
					myelement.checked = checkedvalue;
					i++;
				}

				if(checkedvalue){
					document.getElementById("boxcount").value = i;
				}else{
					document.getElementById("boxcount").value = 0;
				}
			}

		 //-->
		</script>
		<?php
		if(empty($mailingq)){
			echo '<center>'. jnews::printYN( true , _JNEWS_Q_M1 , _JNEWS_ERROR).'</center>';
		}

		if ($listId==0) {
	     	$message = _JNEWS_MESSAGE_QUEUE;
	   	} else {
	   		$lt_name=jNews_Lists::getLists($listId, 0, null, '', false, false,  true, false, false, '');
		    $message =  _JNEWS_SUSCRIB_LIST_UNIQUE."<span style='color: rgb(51, 51, 51);'>".@$lt_name[0]->list_name."</span>";
	   	}

		if(!isset($action))  $action = JRequest::getVar( 'act', '', '', 'WORD' );
		$mySepList = array();
		$mySepList[0] = new stdClass;
		$mySepList[0]->subject = 'All Mailings';
		$mySepList[0]->id = 0;
		$myMailingQueA = jNews_Mailing::getMailingsForQueue();
		if ( empty($myMailingQueA) || !is_array($myMailingQueA) ) $myMailingQueA = array();
		$lt = array_merge( $mySepList, $myMailingQueA );
		$mailingId = JREquest::getVar('mailingid', '');
		$dropDown = JHTML::_('select.genericlist', $lt, 'mailingid', '' .
				'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'id', 'subject', $mailingId );

		$filter = _JNEWS_FILTER_MAILING.$dropDown;
		$hidden = '<input type="hidden" name="option" value="'.JNEWS_OPTION.'" />';
	    $hidden .= '<input type="hidden" name="act" value="'.$action.'" />';
	    $hidden .= '<input type="hidden" name="limit" value="'.$limit.'" />';
		?>

	<?php
		echo $form['main'];

		// top portion before the table list
		// for search
		$toSearch = new stdClass;
		$toSearch->forms = $form['select'];
		$toSearch->hidden = $hidden;
		$toSearch->listsearch = $mailingsearch;
		$toSearch->id = 'mailingsearch';

		echo jnews::setTop( $toSearch, $message, $setLimit, $filter );
	?>
		<table class="<?php echo jnews::myTheme(); ?>">
			<thead><tr>
				<th width="2%" class="title">#</th>
				<th width="2%" class="title"><input type="checkbox" id="selectallcheck" name="allchecked" onclick="jnewsselectall();"></th>
				<th width="22%" class="title"><?php echo JHTML::_('grid.sort', _JNEWS_QUEUE_SUBJECT, 'm.subject', $setSort->orderDir,$setSort->orderValue); ?></th>
				<th width="22%" class="title"><?php echo JHTML::_('grid.sort', _JNEWS_QUEUE_EMAIL, 's.email', $setSort->orderDir,$setSort->orderValue); ?></th>
				<th width="22%" class="title"><?php echo JHTML::_('grid.sort', _JNEWS_SENDDATE, 'q.send_date', $setSort->orderDir, $setSort->orderValue ); ?></th>
				<th width="3%" class="title"><center><?php echo JHTML::_('grid.sort', _JNEWS_QUEUE_PRIOR, 'q.priority', $setSort->orderDir,$setSort->orderValue); ?></center></th>
				<th width="2%" class="title"><center><?php echo JHTML::_('grid.sort', _JNEWS_QUEUE_ATT, 'q.attempt', $setSort->orderDir,$setSort->orderValue); ?></center></th>
				<th width="3%" class="title"><?php echo JHTML::_('grid.sort', 'Suspend', 'q.suspend', $setSort->orderDir,$setSort->orderValue); ?></th>
				<th width="3%" class="title"><?php echo JHTML::_('grid.sort', 'Blocked', 'q.block', $setSort->orderDir,$setSort->orderValue); ?></th>
				<th width="3%" class="title"><?php echo JHTML::_('grid.sort', 'ID', 'q.qid', $setSort->orderDir,$setSort->orderValue); ?></th>
			</thead></tr>
			<?php
				$i=$start;
				jNews_QueueHTML::_displayQueue($mailingq,$i);
		?>
		</table>
		<?php
		echo '<br />';
		echo jnews::setLegend();
	}//endfunction

/**
	 * This public static function is used to process the queue manually
	 */
	public static function processQueueHTML( $queuedMails=null, $nextQueuedMails=null, $scheduledMails=null, $mailingid=null, $sendButton=false, $SmartNewsMessageHTML='' ) {

	 	$doc = JFactory::getDocument();
		$doc->addStyleSheet( JNEWS_URL_ADMIN.'cssadmin/jnews.css');
		?>
		<form action="<?php echo jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true ); ?>" method="post" name="adminForm" autocomplete="off">
		<div><fieldset class="adminform">
		<legend><?php echo _JNEWS_QUEUE_STATUSSEND ?></legend>
		<?php 
		if( empty($queuedMails) && empty($nextQueuedMails) && empty($scheduledMails) ) {
			jnews::displayInfo(_JNEWS_QUEUE_EMPTYINFO,'info');
		}

		if(!empty($queuedMails) ){ ?>
		<fieldset class="adminform">
			<legend><?php echo _JNEWS_QUEUE_READYTOSEND; ?></legend>
			<table class="adminlist" cellspacing="1" align="center">
			<tbody>
			<?php	$k = 0;
				$total = 0;
				foreach($queuedMails as $key => $queuedMail) {
					$total += $queuedMail->totalSubs;
					?>
					<tr class="<?php echo "row$k"; ?>">
						<td>
							<?php
								echo '<strong><i>'.$queuedMail->subject.'</i></strong> '. _JNEWS_NEWSLETTER_BE_READY_SENT .' <strong><i>'.$queuedMail->totalSubs . ' ' . _JNEWS_NEWSLETTER_BE_SUBCRIBERS . '</i></strong>';
							 ?>
						</td>
					</tr>
					<?php
						$k = 1 - $k;
					} ?>
				</tbody>
			</table>
			<br/>
			<input type="hidden" name="totalsend" value="<?php echo $total; ?>" />
			<input type="submit" onclick="document.adminForm.task.value = 'continuesend';" value="<?php echo _JNEWS_MENU_SEND; ?>">
		</fieldset>
		<?php }

		if(!empty($scheduledMails)){
			$sendButton = true;
		?>
		<fieldset class="adminform">
			<legend><?php echo _JNEWS_QUEUE_SCHEDULED; ?></legend>
			<table class="adminlist" cellspacing="1" align="center">
			<tbody>
			<?php	$k = 0;
				$mailingids = array();
				foreach($scheduledMails as $scheduledMail) {
					if($scheduledMail->send_date < time() ) $sendButton = true; ?>
					<tr class="<?php echo "row$k"; ?>">
						<td>
							<?php
							echo '<strong><i>'.$scheduledMail->subject.'</i></strong> will be processed after <strong><i>'.date('D, d M Y H:i:s', jnews::getNow( 0, true, $scheduledMail->send_date ) ).'</i></strong>';
							 ?>
						</td>
					</tr>
					<?php
						$k = 1 - $k;
						$mailingids[] = $scheduledMail->id;
					} ?>
				</tbody>
			</table>
			<?php if($sendButton) { ?><br/><input onclick="document.adminForm.task.value = 'generate';" type="submit" value="<?php echo 'Generate'; ?>"><?php } ?>
		</fieldset>
	<?php }

	if(!empty($nextQueuedMails)){ ?>

		<fieldset class="adminform">
			<legend><?php echo _JNEWS_QUEUE_SCHEDULED.' '.date('D, d M Y H:i:s', jnews::getNow( 0, true ) ); ?></legend>
			<table class="adminlist" cellspacing="1" align="center">
			<tbody>
			<?php	$k = 0;
				foreach($nextQueuedMails as $mailingid => $nextQueuedMail) {?>
					<tr class="<?php echo "row$k"; ?>">
						<td>
							<?php
								echo '<strong><i>'.$nextQueuedMail->subject.'</i></strong> ' . _JNEWS_NEWSLETTER_BE_SENT ;	
								echo ' <strong><i>'.$nextQueuedMail->totalSubs.' '. _JNEWS_NEWSLETTER_BE_SUBCRIBERS .'</i></strong>';
								echo '<br/>';
								echo JText::sprintf( _JNEWS_NEWSLETTER_BE_NEXT, date('D, d M Y H:i:s', jnews::getNow( 0, true, $nextQueuedMail->send_date ) ) );
							 ?>
						</td>
					</tr>
					<?php
						$k = 1 - $k;
					} ?>
				</tbody>
			</table>
		</fieldset>
	<?php }

		if ( !empty($SmartNewsMessageHTML) ) { 
		?>
		<fieldset class="adminform">
			<legend><?php echo 'Smart-Newsletter Status'; ?></legend>
			<table class="adminlist" cellspacing="1" align="center">
			<tbody>
					<tr class="<?php echo "row0"; ?>">
						<td>
							<?php
							echo $SmartNewsMessageHTML;
							 ?>
						</td>
					</tr>
				</tbody>
			</table>
			<br/>
		</fieldset>
		<?php 
		}	
	
	?>
	</fieldset>
	</div>
	<div class="clr"></div>
	<input type="hidden" name="mailingid" value="<?php echo $mailingid; ?>" />
	<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
	<input type="hidden" name="task" value="continuesend" />
	<input type="hidden" name="act" value="mailing" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<?php
	}

	public static function _displayQueue($mailingq,$i){
		
		if ( empty($mailingq) ) return true;
		foreach($mailingq as  $mailingQ){
		?>
			<tr class="row<?php echo ($i + 1) % 2;?>">
				<td><center><?php echo $i+1;?></center></td>
				<td><center><input type="checkbox" id="cid[<?php echo $i; ?>]" name="cid[<?php echo $i; ?>]" value="<?php echo $mailingQ->qid;?>" onclick="isChecked(this.checked);"></center></td>
				<td><?php $subject= jNews_Mailing::getMailingsSubject($mailingQ->mailing_id);
				echo $subject;
				?></td>
				<td><?php $email = jNews_ListsSubs::getSubscriberMail($mailingQ->subscriber_id);
				echo $email;
				?></td>
				<td ><div align="center"><?php
				if($mailingQ->send_date==0){
						echo '0000-00-00 00:00:00';
				}else{
						echo date('D, d M Y H:i:s', jnews::getNow( 0, true, $mailingQ->send_date ) );
				}
				?></div></td>
				<td><center><?php echo $mailingQ->priority;?></center></td>
				<td><center><?php echo $mailingQ->attempt;?></center></td>
				<td><center><?php echo $mailingQ->suspend;?></center></td>
				<td><center><?php 
				
				if($mailingQ->block){
					$img = '16/block.png';
					?>
					<img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$img; ?>" border="0" alt="" />
					<?php 
					jnews::getLegend( 'block.png', _JNEWS_QUEUE_BLOCK );
				}else{
					$img = '16/unblock.png';
					?>
					<img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$img; ?>" border="0" alt="" />
					<?php 
					jnews::getLegend( 'unblock.png', _JNEWS_QUEUE_UNBLOCK );
				}
				?></center></td>
				<td><center><?php echo $mailingQ->qid;?></center></td>
			</tr>
		<?php $i=$i+1;
		}

	}

 }


