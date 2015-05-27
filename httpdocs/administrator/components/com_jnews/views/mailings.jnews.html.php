<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_MailingsHTML {
	public static function previewMailingHTML($mailingId, $listId, $listType, $html){
	?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}
		submitform( pressbutton );
	}
</script>
<span class="sectionname"><?php echo _JNEWS_PREVIEW_EMAIL_TEST; ?>:</span><br />
<br />
<form action="index.php" method="POST" name="adminForm">
	<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
	<input type="hidden" name="listype" value="<?php echo $listType; ?>" />
	<input type="hidden" name="act" value="mailing" />
	<input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="mailingid" value="<?php echo $mailingId; ?>" />
	<input type="hidden" name="listid" value="<?php echo $listId; ?>" />
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="contentpane">
		<tr>
			<td align="left"><?php echo _JNEWS_INPUT_NAME; ?></td>
			<td align="left"><input type="text" name="name" size=50 class="inputbox" value="<?php
			$my	= JFactory::getUser();
			echo trim($my->name);
			?>"/></td>
		</tr>
		<tr>
			<td align="left"><?php echo _JNEWS_INPUT_EMAIL; ?></td>
			<td align="left"><input type="text" name="emailaddress" class="inputbox" size=50 value="<?php
			echo trim($my->email);
			?>"/></td>
		</tr>
		<tr>
			<td align="left" colspan="2"><?php echo  _JNEWS_SEND_IN_HTML;
			if($html){ ?>
				<input type="checkbox" value="1" name="html" class="inputbox" checked="checked" /></td>
			<?php }else{ ?>
				<input type="checkbox" value="1" name="html" class="inputbox"/></td>
			<?php } ?>
    	</tr>
	</table>
</form>
<br />
<?php
	 }


/**
	 * This public static function is used for the view of sendReady for manual sending
	 */
	 public static function sendReady($mailingId, $listId, $listType){
		?>
		<div id="manualsend"></div>
		<?php JHTML::_( 'behavior.modal' ); 
		$formLink3 = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=send', true, false, true ); 
		?>
		<form class="modal" action="<?php echo $formLink3; ?>" method="post" name="adminForm" autocomplete="off">
			<div>
			<fieldset class="adminform">
			<legend>
				<?php echo 'Sending Status'; ?>
			</legend>
			<?php
			$doc = JFactory::getDocument();
			$doc->addStyleSheet( JNEWS_URL_ADMIN.'cssadmin/jnews.css');

			if( empty($mailingId) || ($mailingId==0) ) {
				$warning = 'Please select a newsletter to be sent.';
				jnews::displayInfo($warning,'warning');
				return;
			}

			$queueCount = jNews_Queue::getQueueCount( $mailingId );
			$new = false;
			$mailing = jNews_Mailing::getOneMailing('', $mailingId, '', $new);
			if( empty($queueCount) ){
			if( empty($listId) ) $listIds = jNews_Mailing::getMailingList( $mailingId );
			if(!empty($listIds)){
			?>
			<br/>
			<fieldset class="adminform">
			<legend>
				<?php echo $mailing->subject .' will be sent to '; ?>
			</legend>
			<br/>
				<table class="adminlist" cellspacing="1" align="center">
					<tbody>
						<?php
							$listNames = jNews_Mailing::getMailingListName( $listIds );

							foreach($listNames as $key => $listName){
								if(isset($listIds[$key]) ) {?>
									<tr><td><?php echo $listName .' ( '.jNews_Subscribers::getSubscribersCount( $listIds[$key] , true, true, true ).' subscribers ) '; ?></td></tr>
								<?php }
							}
						?>
					</tbody>
				</table>
				<br/>
			</fieldset>
			<?php }else {
					$warning = $mailing->subject.' will be sent to none of the created Lists.';
					jnews::displayInfo($warning,'warning');
				}
			}else{
				$info= 'There are '.$queueCount.' in the queue for the Newsletter '.$mailing->subject. ' <br/>Do you want to continue sending this newsletter?';
				jnews::displayInfo($info,'info');
			?><input type="hidden" name="totalsend" value="<?php echo $queueCount; ?>" />
			<?php } ?>
			<br/>
			<input type="submit" value="<?php echo empty($queueCount) ? _JNEWS_MENU_SEND : _JNEWS_MENU_CONTINUE; ?>">
			<input type="hidden" name="mailingid" value="<?php echo $mailingId; ?>" />
			<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
			<input type="hidden" name="task" value="<?php echo empty($queueCount) ? 'send' : 'continuesend'; ?>" />
			<input type="hidden" name="act" value="mailing" />
		<?php echo JHTML::_( 'form.token' ); ?>
		</div>
		</form>
		<?php
	 }


	 public static function showMailingList($mailings, &$lists, $start, $limit, $total, $emailsearch, $listId, $listType, $forms, $show, $action, $setLimit=null, $setSort=null) {

		$Itemid= JRequest::getInt('Itemid');
		$mainframe = JFactory::getApplication();

		$my	= JFactory::getUser();
		$mainPath = JNEWS_PATH_ADMIN_IMAGES2.'header/';
		$css = '.icon-48-newsletter { background-image:url('.$mainPath .'newsletter.png)}';
		$doc = JFactory::getDocument();
		$doc->addStyleDeclaration($css, $type = 'text/css');
		$img = 'newsletter.png';

		$item = ( !empty($Itemid)) ? '&Itemid=' . $Itemid : '';

    	$hidden = '<input type="hidden" name="listid" value="'.$listId.'" />';
    	$hidden .= '<input type="hidden" name="act" value="'.$action.'" />';
    	$hidden .= '<input type="hidden" name="limit" value="'.$limit.'" />';

		echo $forms['main'];

		// top portion before the table list
		// for search
		$toSearch = new stdClass;
		$toSearch->forms = $forms['select'];
		$toSearch->hidden = $hidden;
		$toSearch->listsearch = $emailsearch;
		$toSearch->id = 'emailsearch';

		$title = ( !empty($lists['title']) ) ? $lists['title'] : '';

		echo jnews::setTop($toSearch, $title, $setLimit );
		 ?>

	<table class="<?php echo jnews::myTheme(); ?>">
		<thead>
			<tr>
				<th width="40" height="20" align="center" class="title"><center>#</center></th>
				 <?php if ($show['select']) { ?>
				<th width="32"  align="center" class="title">&nbsp;</th>
				 <?php } if ($show['status']) { ?>
				<th  width="40" class="title" align="center"><center><?php echo JHTML::_('grid.sort', _JNEWS_PUBLISHED, 'published', $setSort->orderDir,$setSort->orderValue); ?></center></th>
				 <?php }
				 
				if ( empty($listType) || $listType ==0 ) {
					$listType = JRequest::getVar('listype', 0);//listType to listype
				}
				 if($listType==2){ $show['delay']=true;
				 	if ($show['delay']) {
				 ?>
				<th width="80"  class="title" align="center"><center><?php echo JHTML::_('grid.sort', _JNEWS_LIST_DELAY, 'delay', $setSort->orderDir,$setSort->orderValue); ?></center></th>
				 <?php } }if($listType==1 OR $listType ==7){
				 if ($show['sentdate']) { ?>
				<th width="140"  class="title"><?php echo JHTML::_('grid.sort', _JNEWS_LIST_DATE, 'send_date', $setSort->orderDir, $setSort->orderValue ); ?></th>
				 <?php } } ?>
				<th class="title" align="left"><?php echo JHTML::_('grid.sort', _JNEWS_LIST_SUB, 'subject', $setSort->orderDir,$setSort->orderValue); ?></th>
				<?php if($mainframe->isAdmin()){?>
				 <?php if ($show['status']) { ?>
				<th  width="40" class="title" align="center"><center><?php echo JHTML::_('grid.sort', _JNEWS_VISIBLE, 'visible', $setSort->orderDir,$setSort->orderValue); ?></center></th>
				<?php }  } ?>
				<?php if( ( !empty($show['send']) && ($show['send']) ) || $mainframe->isAdmin() ) {
				if($listType==1){ ?>
					<th width="100" class="title" align="left"><?php echo _JNEWS_SENDBTN; ?></th>
				<?php } } if($mainframe->isAdmin()){ ?>
				<th width="100" class="title" align="left"><?php echo _JNEWS_DELETEBTN; ?></th>
				 <?php  } 
	 			
				if($mainframe->isAdmin()) { 
				 ?><th width="140"  class="title"><?php echo JHTML::_('grid.sort', _JNEWS_CREATE_DATE, 'createdate', $setSort->orderDir,$setSort->orderValue); ?></th><?php 
				}
				 if ($show['id']) { 
				?>
				<th width="40" class="title"><center><?php echo JHTML::_('grid.sort', 'ID', 'id', $setSort->orderDir,$setSort->orderValue); ?></center></th>
				<?php } ?>
			</tr>
		</thead>
	<?php

		 if (!empty($mailings)) {

			 $i = 0;
			 foreach ($mailings as $mailing) {
	?>
	<tr class="row<?php echo ($i + 1) % 2;?>">
		<td  height="20" align="center"><center><?php echo $i + 1 + $start; ?></center></td>
		 <?php if ($show['select'])  { ?>
		<td  align="center"><input type="radio" id="cb<?php echo $i;?>" name="mailingid" value="<?php echo $mailing->id; ?>" onclick="isChecked(this.checked);" /></td>
		 <?php
		 }
		 if ($show['status']) {

				 switch ($mailing->published) {
				 	case '1':
						 $img = '16/status_g.png';
						 jnews::getLegend( 'status_g.png', _JNEWS_VISIBLE .'/'. _JNEWS_TEMPLATE_PUBLISH );
				 		break;
				 	case '2':
						$img = '16/status_y.png';
						jnews::getLegend( 'status_y.png', _JNEWS_SCHEDULED );
				 		break;
				 	default:
						$img = '16/status_r.png';
						jnews::getLegend( 'status_r.png',_JNEWS_NOTVISIBLE .'/'. _JNEWS_UNPUBLISHED );
				 		break;
				 }

		$publishStatus = ( !empty($mailing->published) && ( $mailing->published == 1 ) ) ? 'unpublishMailing' : 'publishMailing';
		?>
		<td  align="center"><center><img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$img; ?>" width="12" height="12" border="0" alt="" /></center></td>
		<?php
		 }
		 
		if($listType==2){
			if ($show['delay']) {
		 $delay = $mailing->delay / 1440;
		  ?>
		<td  align="center"><?php echo $delay; ?></td>
		 <?php } }if($listType==1 OR $listType ==7 ){
		 	if ($show['sentdate']) { ?>
		<td width="200"><div align="center"><?php
			if($mailing->send_date == 0 OR $mailing->send_date ==1){
				echo '0000-00-00 00:00:00';
			}else{
				echo date('D, d M Y H:i:s', jnews::getNow( 0, true, $mailing->send_date ) );
			}
		}
		
		?></div></td>
		 <?php } 
		$backendLink = ($show['index'] == 'index') ? false : true;
		if ((!$show['admin']) OR ( $mailing->published == 1 AND ($mailing->mailing_type == 1 or $mailing->mailing_type == 7 or $mailing->mailing_type == 2))) {
			$link = 'option='.JNEWS_OPTION.'&act=' . $action . '&task=view&listid='.$listId.'&mailingid=' .$mailing->id . '&listype=' .$mailing->mailing_type . $item ;
		} else {
			$link = 'option='.JNEWS_OPTION.'&act=' . $action . '&task=edit&mailingid=' .$mailing->id . '&listid=' . $listId . '&listype=' .$mailing->mailing_type . $item;
		}
		$link = jNews_Tools::completeLink( $link, true, true, false );
		
		?>
		<td align="left">
		<?php
		if($mainframe->isAdmin()){
			echo '<a  href="'.$link.'" >';
			echo $mailing->subject;
			echo '</a>';
		}else{
			 if ( $GLOBALS[JNEWS.'level'] > 1 || $mailing->published == 1 ) {
			 	$archiveLinkType = ( !empty($GLOBALS[JNEWS.'archive_link']) ? $GLOBALS[JNEWS.'archive_link'] : '');
				switch( $archiveLinkType ) {
					case 'popup':
						$link .= '&tmpl=component';
						echo '<a href="#" onClick="window.open(\''.$link.'\', \'Detail\', \'toolbar=0,scrollbars=1,location=0,statusbar=1,menubar=0,resizable=1,width=800,height=600,left=150,top=150\');" >';
						echo $mailing->subject;
						echo '</a>';
						break;
					case 'newpage':
						echo '<a  href="'.$link.'" target="_blank">';
						echo $mailing->subject;
						echo '</a>';
						break;
					case 'standard':
					default;
						echo '<a  href="'.$link.'" >';
						echo $mailing->subject;
						echo '</a>';					
						break;
				}
			 	
			 }else{
			 	echo $mailing->subject;
			 }
		}
		?>
		</td>
		 <?php if($mainframe->isAdmin()){ if ($show['status']) {

			 if ($mailing->visible == 1) {

				 $img = '16/status_g.png';
				 jnews::getLegend( 'status_g.png', _JNEWS_VISIBLE .'/'. _JNEWS_TEMPLATE_PUBLISH );
			 } else {

				 $img = '16/status_r.png';
				 jnews::getLegend( 'status_r.png',_JNEWS_NOTVISIBLE .'/'. _JNEWS_UNPUBLISHED );
			 }
			 $delQimg='delete_queue.png';
		?>
		<td align="center"><center>
			<a href="<?php
			$listidmailing = JRequest::getVar('listid');
			$listtypemailing = JRequest::getInt('listype');
			echo jnews::createToggleLink( 'mailing', 'visible', 'mailingid' , $mailing->id, 'toggle', $listidmailing,  $listtypemailing); ?>"> <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$img; ?>" width="12" height="12" border="0" alt="" /> </a>
		</center></td>
		 <?php }  } ?>
		<?php if( ( !empty($show['send']) && ($show['send']) ) || $mainframe->isAdmin() ) {
			if($listType==1){?>
		<td align="center"><center>
			<?php JHTML::_( 'behavior.modal' );
			
			//we check here if we are in the fe or be
			$sendready = true;
			if(!$mainframe->isAdmin()) $sendready = false;
			$linkFomr5 = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=sendready&mailingid='.$mailing->id.'&listype='.$mailing->mailing_type, $sendready, false, true );
			?>
			<a class="modal" href="<?php echo $linkFomr5; ?>" rel="{handler: 'iframe', size: {x: 750, y: 500}}">
			<img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.'message_sent.png'; ?>"width="18" height="18" border="0" alt=""/> </a>
		</center></td>
		<?php } } if($mainframe->isAdmin()){ ?>
<script language="javascript" type="text/javascript">
	function deleteQueue(url){
		if(!confirm("Are you sure you want to delete the entries of this mailing from the Queue?")){
			return false;
		}else{
			window.location = url;
		}
	}
</script>
		<td align="center"><center>
			<a onclick="deleteQueue('<?php echo 'index.php?option='.JNEWS_OPTION.'&act=mailing&task=deletequeue&mailingid='.$mailing->id.'&listype='.$mailing->mailing_type; ?>')" href="#"> <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$delQimg; ?>"width="18" height="18" border="0" alt=""/> </a>
		</center></td>
		 <?php } 
		  if($mainframe->isAdmin()){ ?>
		 <td align="center"><?php 
		 	if($mailing->createdate <= 0)
		 		echo '0000-00-00 00:00:00';
			else echo date('D, d M Y H:i:s', jnews::getNow( 0, true, $mailing->createdate ) );
		 ?>
		 </td><?php 
		  }
		 
		 
		 if ($show['id']) { ?>
		<td align="center"><center><?php echo $mailing->id; ?></center></td>
		<?php } ?>
	</tr>
	<?php
			$i++;
			 }
		 }
	?>
	</table>
    <input type="hidden" name="act" value="<?php echo $action; ?>" />
    <input type="hidden" name="listid" value="<?php echo $listId; ?>" />
    <input type="hidden" name="listype" value="<?php echo $listType; ?>" />
	<?php

	echo '<br />';
	echo jnews::setLegend();
	 }


	 public static function editMailing($mailingEdit, $new, $listId, $forms, $show, $isEdit=false) {
		$lists = array();
		$mainframe = JFactory::getApplication();
		
		if ( !class_exists('JHtmlBehavior') ) jimport('joomla.html.html.behavior');
		$mailingIdchk=JRequest::getVar('mailingid',0);

		$folders 	= array();
		$my	= JFactory::getUser();
		$folders[] 	= JHTML::_('select.option', '/' );
		$lists['published'] = JHTML::_('select.booleanlist', 'published', 'class="inputbox"', $mailingEdit->published );
		$lists['visible'] = JHTML::_('select.booleanlist', 'visible', 'class="inputbox"', $mailingEdit->visible );
		if($mailingIdchk==0)$mailingEdit->html=1; //for default value of HTML mailing?
		$lists['html_mailings'] = JHTML::_('select.booleanlist', 'html_mailings','onchange="updateEditor(this.value)"', $mailingEdit->html);

		$images = $mailingEdit->images;
		if (!isset($mailingEdit->list_id)) $mailingEdit->list_id = $listId;

		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
			$imgfolders = '/images/stories';
		}else{ //j16
			$imgfolders = '/images/sampledata';
		}

		$pathA 		= JNEWS_JPATH_ROOT_NO_ADMIN .$imgfolders;
		$pathL 		= JNEWS_JPATH_LIVE .$imgfolders;
		$images 	= array();

		jNews_MailingsHTML::ReadImages( $pathA, '/', $folders, $images );

		if ( !isset($images['/'] ) ) {
			$images['/'][] = JHTML::_('select.option',  '' );
		}
		$javascript	= "onchange=\"previewImage( 'imagefiles', 'view_imagefiles', '$pathL/' )\"";
		$lists['imagefiles']	= JHTML::_('select.genericlist',   $images['/'], 'imagefiles', 'class="inputbox" size="10" multiple="multiple" '. $javascript , 'value', 'text', null );

		$javascript 	= "onchange=\"changeDynaList( 'imagefiles', folderimages, document.adminForm.folders.options[document.adminForm.folders.selectedIndex].value, 0, 0);  previewImage( 'imagefiles', 'view_imagefiles', '$pathL/' );\"";
		$lists['folders'] 	= JHTML::_('select.genericlist',   $folders, 'folders', 'class="inputbox" size="1" '. $javascript, 'value', 'text', '/' );

		$images2 = array();
		foreach( $mailingEdit->images as $file ) {
			$temp = explode( '|', $file );
			if( strrchr($temp[0], '/') ) {
				$filename = substr( strrchr($temp[0], '/' ), 1 );
			} else {
				$filename = $temp[0];
			}
			$images2[] = JHTML::_('select.option',  $file, $filename );
		}

		$javascript	= "onchange=\"previewImage( 'imagelist', 'view_imagelist', '$pathL/' ); showImageProps( '$pathL/' ); \"";
		$lists['imagelist'] = JHTML::_('select.genericlist',   $images2, 'imagelist', 'class="inputbox" size="10" '. $javascript, 'value', 'text' );

	  	$lists['_align'] = JHTML::_('list.positions', '_align' );
		$lists['_caption_align'] = JHTML::_('list.positions', '_caption_align' );

		$pos[] = JHTML::_('select.option', 'bottom', _CMN_BOTTOM );
		$pos[] = JHTML::_('select.option', 'top', _CMN_TOP );
		$lists['_caption_position'] = JHTML::_('select.genericlist', $pos, '_caption_position', 'class="inputbox" size="1"', 'value', 'text' );

		backHTML::formStart('edit_mailing', $mailingEdit->html, $images);
		echo $forms['main'];

		if ( $mainframe->isAdmin() ){
			jNews_MailingsHTML::layoutBE($mailingEdit, $lists, $show, $isEdit);
		}else{
			jNews_MailingsHTML::layoutFE($mailingEdit, $lists, $show, $isEdit);
		}
		echo JHTML::_('behavior.keepalive');
		?>
		<input type="hidden" name="images" value="" />
		<input type="hidden" name="html" value="<?php echo $mailingEdit->html; ?>" />
		<input type="hidden" name="new_list" value="<?php echo $new; ?>" />
		<input type="hidden" name="listid" value="<?php echo $listId; ?>" />
		<input type="hidden" name="listype" value="<?php echo $mailingEdit->mailing_type; ?>" />
		<input type="hidden" name="mailingid" value="<?php echo $mailingEdit->id; ?>" />
		<input type="hidden" name="issue_nb" value="<?php echo $mailingEdit->issue_nb; ?>" />
	    <input type="hidden" name="userid" value="<?php echo $my->id; ?>" />
	    <?php
	 }

	public static function lists($mailingEdit, $list, $show, $lType, $arId, $indicate=false, $isEdit=false) {

	$mainframe = JFactory::getApplication();

	$listType = JRequest::getVar( 'listype' );
	if( !isset( $mailingEdit->list_type ) )
	{
		$mySess = JFactory::getSession();
		if( !empty($mySess) ) $mailingEdit->list_type = $mySess->get('listype', '', 'LType');

	}
	$listType = ( !empty($listType) ) ? $listType : $mailingEdit->list_type;
	$typeList = ( !empty($listType) && ( $listType == 2 ) ) ? 2 : 1;

?>
	<div style="padding: 2px;"><span style="font-size: 12px;"><?php
								if($lType != 2 ){
									//echo _JNEWS_SUBS_LIST;
								//}else{
									if( $typeList == 2 ) {
										echo _JNEWS_SUBS_LIST_CAMPAIGN;
									} else {
										echo _JNEWS_SUBS_LIST_LABEL;
								 	}//edif
								}
								?></span></div>
	<table class="<?php echo jnews::myTheme(); ?>">
		<thead>
				<tr>
					<th class="title">
						#
					</th>
					<th class="title">
						<?php echo _JNEWS_LIST_NAME; ?>
					</th>
					<th class="title" style="min-width:200px;">
						<?php echo _JNEWS_SUBS_LIST_RECEIVE; ?>
					</th>
				</tr>
		</thead>
		<tbody>

		<?php
			$my = JFactory::getUser();
			$ownedlists = 0;
			if($GLOBALS[JNEWS.'enable_jsub']) $ownedlists = jNews_Lists::getOwnedlists($my->id);
			if(jnews::checkPermissions('admin')){
				if($lType==2){
					$lists = jNews_Lists::getLists('', 1, '', '', false, true, true,false,false);
				}else{
					$lists = jNews_Lists::getLists('', $typeList, '', '', false, true, true,false,false);
				}
			}else{
				if($lType==2){
					$lists = jNews_Lists::getLists('', 1, '', '', false, true, true,false,false,'','',$ownedlists,$my->id);
				}else{
					$lists = jNews_Lists::getLists('', $typeList, '', '', false, true, true,false,false,'','',$ownedlists,$my->id);
				}
			}
			$k = 0;
			$i = 0;
			//$listId=JRequest::getVar('listId');

			if( empty($listId) ) $listId=JRequest::getVar('listid');

			$ls = array();
			$myKey=null;
			foreach($lists as $key => $list){
				if( $list->id==$listId) {
					$myKey = $key;
					break;
				}
			}
			if ( isset($myKey) ) {
				$ls[]=$lists[$myKey];
				unset($lists[$myKey]);
				$lists = array_merge( $ls, $lists);
			}

			$listsA=array();
			if(!$mainframe->isAdmin()){
				foreach($lists as $list){
					if(empty($list->params)) {
						$listsA[] = $list;
					}
				}
			}else{
				$listsA = $lists;
			}

			foreach($listsA as $list){
		?>
				<tr class="<?php echo "row$k"; ?>">
					<td width="5%">
						<center>
							<?php
								echo $i+1;
							 ?>
					 	</center>
					</td>
					<td>
						<?php

						$getMailingId = ( !empty($mailingEdit->id) ) ? $mailingEdit->id : JRequest::getVar( 'mailingid' );
						$result = jNews_Mailing::mailingListFound( $getMailingId, $list->id );
						$result = ( $result ) ? 1 : 0;
						if( $result == 0 ){
							$lstID = JRequest::getVar( 'listid' );
							$result = ( $lstID == $list->id ) ? 1 : 0;
						}

						//check if this view will be displayed upon the creation of new list
						if($lType == 2 ){
							$result = jNews_Lists::followupListFound( $arId, $list->id );
						}

						//public static function booleanlist( $name, $attribs = null, $selected = null, $yes='yes', $no='no', $id=false )
						$text = '<b>List ID: </b>'.$list->id;
						$text .= '<br/>'.str_replace(array("'",'"'),array("&#039;",'&quot;'),$list->list_desc);
						$title = str_replace(array("'",'"'),array("&#039;",'&quot;'),$list->list_name);
						//echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
						echo JHTML::_('tooltip', $text, $title, 'tooltip.png', $title);
						?>
					</td>
					<td  width="100px" nowrap="nowrap">
						<center>
							<?php
							//if the listid in the request is equal to this listid the default value of the radio button should be yes
							if($listId==$list->id){
								echo JHTML::_('select.booleanlist', "aca_mailing_addto[".$list->id."]" , 'class="inputbox"',1,'Yes','No');
							}else{
								echo JHTML::_('select.booleanlist', "aca_mailing_addto[".$list->id."]" , 'class="inputbox"',$result,'Yes','No');
							}
							?>
						</center>
					</td>
				</tr>
			<?php
					$k = 1-$k;
					$i++;
				}
				if (count($lists>3)){
			?>
				<tr>
					<td colspan="3" align="center" nowrap="nowrap">
						<script language="javascript" type="text/javascript">
							function updateStatus(statusval){
								<?php foreach($lists as $row){?>
								window.document.getElementById('aca_mailing_addto[<?php echo $row->id; ?>]'+statusval).checked = true;
								<?php } ?>
							}
						</script>
						<div style="float:right; font-size: 12px;"><a title="Click to select all list" href="#" onclick="updateStatus(1);"><?php echo _JNEWS_SUBS_LIST_TOALL; ?></a> | <a href="#" onclick="updateStatus(0);"><?php echo _JNEWS_SUBS_LIST_TONONE; ?></a></div>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
		<?php
	 }
	 

	public static function subject( $mailingEdit, $lists, $show ) {

	?>	
	<fieldset class="jnewscss jnewshead">
		<table class="jnewstabletable" cellspacing="1" border="0">
			<tbody>
				<tr>
					<td width="110px" class="key">
						<span class="editlinktip">
							<?php
								$tip = _JNEWS_INFO_LIST_SUBJET ;
								$title = _JNEWS_SUBJECT;
								echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
							?>
							</span>
						</td>
						<td>
							<?php
							 	$text = str_replace('"', '&quot;' , $mailingEdit->subject);
							 	if (function_exists('htmlspecialchars_decode')) {
							 		$text = htmlspecialchars_decode( $text , ENT_NOQUOTES);
							 	} elseif (function_exists('html_entity_decode')) {
							 		$text = html_entity_decode( $text , ENT_NOQUOTES);
							 	}
								echo ' <input type="text" name="subject" class="inputbox" size="40" maxlength="110" value="' .  $text  .'" />' ;
							 ?>
						</td>
					</tr>

					<?php if (JRequest::getVar( 'act', '', '', 'WORD' )=='mailing' AND JRequest::getInt('listype')==2 /*$show['delay']*/) { ?>
							<tr>
								<td class="key">
									<span class="editlinktip">
									<?php
										$tip = _JNEWS_ARINFO_LIST_DELAY ;
										$title = _JNEWS_AUTO_DELAY;
										echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
									?>
									</span>
								</td>
								<td>
								<?php
								$mailid = JRequest::getVar( 'mailingid' );
								$delay = ( !empty($mailid) ) ? $mailingEdit->delay / 1440 : jNews_Mailing::countMailings(0, 2);
								?>
									<input type="text" name="delay" class="inputbox" size="5" maxlength="10" value="<?php echo $delay; ?>" />
								</td>
							</tr>
					<?php } ?>
					<?php if (JRequest::getVar( 'act', '', '', 'WORD' )=='mailing' AND JRequest::getInt('listype')==1 /*$show['pub_date'] AND $GLOBALS[JNEWS.'listype2']=='1'*/ AND class_exists('jNews_Auto')) { ?>
						<tr>
							<td class="key">
								<span class="editlinktip">
								<?php
									$tip = _JNEWS_INFO_LIST_DATE ;
									$title = _JNEWS_LIST_DATE;
									$tip .= '<br/>(Actual server time is '. date('Y-m-d H:i:s',jnews::getNow( 0, true ) ) .' )';
									echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
								?>
								</span>
							</td>
							<td>
							<?php
							 	 if (!isset($doc)) $doc = JFactory::getDocument();
				             	 $doc->addStyleSheet( JNEWS_URL_INCLUDES .'calendar2/css/calendar.css' );
				             	 $doc->addScript( JNEWS_URL_INCLUDES .'calendar2/js/calendar.js' );
				             	 if($mailingEdit->send_date == 0) $mailingEdit->send_date = date('Y-m-d H:i:s', jnews::getNow( 0, true ) );//'0000-00-00 00:00:00';	jnews::getNow()
				             	 elseif($mailingEdit->id == 0) $mailingEdit->send_date = date('Y-m-d H:i:s', jnews::getNow( 0, true ) );	// jnews::getNow()
								 else $mailingEdit->send_date = date( 'Y-m-d H:i:s', jnews::getNow( 0, true, $mailingEdit->send_date ) );
						    ?>
							<input id="acaCalendar" type="text" value="<?php echo $mailingEdit->send_date; ?>" name="senddate">
							<input title="<?php echo _JNEWS_DATETIME; ?>" type="button" class="calendarDash" value="" onclick="displayCalendar(document.getElementById('acaCalendar'),'yyyy-mm-dd hh:ii',this,true)">
							</td>
						</tr>
					<?php } ?>
						<?php if ($show['published']) {?>
						<tr>
							<td width="80" class="key">
								<span class="editlinktip">
								<?php
									$tip = _JNEWS_INFO_LIST_PUB ;
									$title = _JNEWS_PUBLISHED;
									echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
								?>
								</span>
							</td>
							<td><?php echo $lists['published']; ?></td>
						</tr>
					<?php } ?>
					<?php if ($show['hide']) {?>
						<tr>
							<td width="80" class="key">
								<span class="editlinktip">
								<?php
									$tip = _JNEWS_INFO_MAILING_VISIBLE;
									$title = _JNEWS_VISIBLE_FRONT;
									echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
								?>
								</span>
							</td>
							<td><?php echo $lists['visible']; ?></td>
						</tr>
					<?php } ?>
					<?php
					 $javascript = "function updateEditor(htmlvalue){";
					 $javascript .= 'if(htmlvalue == \'0\'){window.document.getElementById("htmlfieldset").style.display = \'none\'}else{window.document.getElementById("htmlfieldset").style.display = \'block\'}';
					 $javascript .= '}';
		             $javascript .='window.addEvent(\'load\', function(){ updateEditor('.$mailingEdit->html.'); });';
		             $doc = JFactory::getDocument();
		             $doc->addScriptDeclaration($javascript);
					?>
					<tr>
						<td width="185" class="key">
							<span class="editlinktip">
							<?php
								$tip = _JNEWS_INFO_LIST_HTML;
								$title = _JNEWS_HTML_MAILING;
								echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
							?>
						</td>
						<td>
							<?php echo $lists['html_mailings'];?>
						</td>
					</tr>
					<?php
					 //}
					  ?>
					</tbody>
					</table>
					</fieldset>

	<?php
	 }

	public static function senderinfo($mailingEdit, $lists, $show) {
	?>
	<?php if ($show['sender_info']) {?>

	<table class="jnewstable" cellspacing="1">
		<tbody>
		<tr>
			<td width="150px" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_SENDER_NAME ;
					$title = _JNEWS_SENDER_NAME;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
			<?php
//				$userSender=jNews_Subscribers::getUsers( 'gid', '50',$mailingEdit->author_id ); //if empty sender name and sender email
//				if(empty($mailingEdit->fromname)) $mailingEdit->fromname=$userSender[0]->name;
//				if(empty($mailingEdit->fromemail)) $mailingEdit->fromemail=$userSender[0]->email;

				$text = str_replace('"', '&quot;' , $mailingEdit->fromname);
			 	if (function_exists('htmlspecialchars_decode')) {
			 		$text = htmlspecialchars_decode( $text , ENT_NOQUOTES);
			 	} elseif (function_exists('html_entity_decode')) {
			 		$text = html_entity_decode( $text , ENT_NOQUOTES);
			 	}
				echo '<input type="text" name="fromname" class="inputbox" size="20" maxlength="64" value="' . $text  .'" />';

			?>
				<?php // clickable image for sender list
				?>
				&nbsp;<img src="components/<?php echo JNEWS_OPTION; ?>/images/16/profile.png" id="popbtn" name="popbtn" onClick="document.getElementById('poplist').style.display = 'inline'; document.getElementById('popbtn').style.display = 'none';" title="<?php echo _JNEWS_SENDER_LIST_INFO; ?>" style="position:absolute;">

				<?php //Select tag with script
				?>
				<select id="poplist" name="poplist" style="display:none;position:absolute;" onChange="document.getElementById('poplist').style.display = 'none'; document.getElementById('popbtn').style.display = 'inline';">

				<?php //create a default sender value for NONE/NULL
				?>
				<option value="1" onClick="document.adminForm.fromname.value=''; document.adminForm.fromemail.value='';"> </option>
			<?php
				// 2nd parameter of this public static function should be a preference
				// we need to limit it so that it wouldnt cause any problems when loading a bunch of datas e.g hundreds or thousands of users
				$usersA=jNews_Subscribers::getUsers( 'gid', '50' );
				// create options for list
				if( !empty($usersA) ){
					foreach( $usersA as $user ){
						$name = $user->name;
						$email = $user->email;

						$selected = ( (isset($mailingEdit->fromname) && ($mailingEdit->fromname==$name)) && (isset($mailingEdit->fromemail) && ($mailingEdit->fromemail==$email)) ) ? true : false;
				?>
						<option value="<?php  echo $user->name; ?>" onClick="document.adminForm.fromname.value='<?php echo $name; ?>'; document.adminForm.fromemail.value='<?php echo $email; ?>';" <?php if($selected) {echo 'selected';} ?>> <?php echo $user->name .' ('. $user->email .')'; ?> </option>
				<?php
					} 
				}
			 ?>
			 	</select>
			</td>
		</tr>
		<tr>
			<td width="150px" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_SENDER_EMAIL ;
					$title = _JNEWS_SENDER_EMAIL;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input type="text" name="fromemail" class="inputbox" size="20" maxlength="64" value="<?php echo $mailingEdit->fromemail; ?>" />
			</td>
		</tr>
		<tr>
			<td width="150px" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_SENDER_BOUNCED ;
					$title = _JNEWS_SENDER_BOUNCE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input type="text" name="frombounce" class="inputbox" size="20" maxlength="64" value="<?php echo $mailingEdit->frombounce; ?>" />
			</td>
		</tr>
		<tr>
			<td width="150px" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_JNEWS_OWNER ;
					$title = _JNEWS_OWNER;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $mailingEdit->author_id; ?>
			</td>
		</tr>
		</tbody>
	</table>
	<?php
	 }
	}

	public static function layoutFE( $mailingEdit, $lists, $show, $isEdit=false ) {

		$tagjs = "function insertTag(tag){ 
			try{
				status=jInsertEditorText(tag,'jnewsContent');				
				return true;
			} catch(err){
				alert('Your editor does not enable jNews to automatically insert the tag, please copy/paste it manually in your Newsletter'); return false;
			}
		}";
		$editor = JFactory::getEditor();
		$script = "function changeTemplate(newbody,newaltbody,templateid){
			if(newbody.length>2){" . jnews::EditorSetContent($editor, 'jnewsContent', 'newbody') . ";}
			var jnewstextarea =$('altbody'); if(newaltbody.length>2){jnewstextarea.setHTML(newaltbody);}
			var jnewstemplateid =$('template_id'); jnewstemplateid.value = templateid;}";

		$doc = JFactory::getDocument();
		$doc->addScriptDeclaration($script.$tagjs);

		if(!empty($_SESSION['skip_subscribers'.$mailingEdit->id])){
			echo 'If you click on the Send button, the process will skip the first '.$_SESSION['skip_subscribers'.$mailingEdit->id].' subscribers';
		}
	?>
	<!--<fieldset class="jnewscss">-->
	<!--<legend><?php echo @constant( $GLOBALS[JNEWS.'listname'.$mailingEdit->mailing_type] ).' '. _JNEWS_CONTENT ; ?></legend>-->
	<table class="jnewstable" cellspacing="1" width="100%" border="0">
		<tbody>
		<tr>
			<td valign="top">

		<?php
		$mailingType = JRequest::getVar( 'listype' );
		$listId = JRequest::getVar( 'listid' );
		$list_template_id = jNews_Lists::getListTemplate($listId);

		if ( $mailingEdit->mailing_type=='7' || $mailingType=='7' AND class_exists('jNews_Autonews') ){
				jNews_MailingsHTML::smartNewsHead($mailingEdit, $lists, $show);
			}else{
				jNews_MailingsHTML::subject($mailingEdit, $lists, $show);
			}

		if( empty($mailingEdit->id) ){

			if ( !empty($mailingEdit->template_id) ) {
				$template = jNews_Templates::loadOneTemplate('*', $mailingEdit->template_id);
			}else{
				if ( !empty($list_template_id) ) {
					$template = jNews_Templates::loadOneTemplate('*', $list_template_id);
				}else{
					$template = jNews_Templates::loadOneTemplate('*', '', 'template_id', 'DESC', true );
				}
				$mailingEdit->template_id = $template->template_id;
			}

			$mailingEdit->htmlcontent = ( isset( $template->body ) ) ? $template->body : '';
			$mailingEdit->textonly = ( isset( $template->altbody ) ) ? $template->altbody : '';
		}

		 ?>
			</td>
			<td valign="top" width="330px">
			<?php
			$config_tabs = new MosTabsjNews(0);
			$config_tabs->startPane('acaMailingOptions');

			$config_tabs->startTab(_JNEWS_LIST_T_SENDER, 'acaMailingOptions.general');
			jNews_MailingsHTML::senderinfo($mailingEdit, $lists, $show);
			$config_tabs->endTab();

			$config_tabs->startTab(_JNEWS_LIST_T_LIST, 'acaMailingOptions.general');
			jNews_MailingsHTML::lists($mailingEdit, $lists, $show, 0, 0, false,$isEdit);	//added another parameter for the list type ---mary
			$config_tabs->endTab();

			if ($GLOBALS[JNEWS.'show_jcalpro'] and class_exists('jNews_Pro')) {
				$config_tabs->startTab(_JNEWS_SHOW_JCALPRO, 'acaMailingOptions.jcalpro');
				jNews_MailingsHTML::jcalpro();
				$config_tabs->endTab();
			}

			if ($show['attachement'] ) {
				$config_tabs->startTab( _JNEWS_ATTACHMENTS, 'acaMailingOptions.attachement' );
				jNews_MailingsHTML::attachement( $mailingEdit, null, null );
				$config_tabs->endTab();
			}

			$config_tabs->endPane();
			?>
			</td>
		</tr>
		<?php
		//global $mainframe;
		$mainframe = JFactory::getApplication();
		if($mainframe->isAdmin()){
		if ($show['htmlcontent']) {
		 	echo '<tr><td colspan="2">';
			echo '<fieldset class="jnewscss" id="htmlfieldset">';
			echo '<legend>';
			echo _JNEWS_HTML_VERSION ;
			echo '</legend>';
			echo $editor->display( 'jnewsContent',  $mailingEdit->htmlcontent, '100%', '600', '80', '30' ) ;
			echo '</fieldset>';
			echo '</td></tr>';
		}
?>
<?php
	if (($show['textcontent'])) { ?>
		<tr>
			<td colspan="2">
				<fieldset class="jnewscss">
				<legend><?php echo _JNEWS_NONHTML_VERSION; ?></legend>
				<textarea name="altbody" id="altbody" rows="20" cols="70" style="width: 100%; height: 400px;">
					<?php echo strip_tags($mailingEdit->textonly) ; ?>
				</textarea>
				</fieldset>
			</td>
			<td>
			</td>
		</tr>
	<?php } ?>

	<!--</fieldset>-->
	<input type="hidden" id="template_id" name="template_id" value="<?php echo $mailingEdit->template_id; ?>" />
	<?php }else{
		?><tr>
			<td colspan="2"><?php
			$config_tabs = new MosTabsjNews(1);
		 	$config_tabs->startPane('acaMailingOptionsHola');
		 	 if ($show['htmlcontent']) {
		 	$config_tabs->startTab(_JNEWS_HTML_VERSION, 'acaMailingOptionsHola.general');
			echo $editor->display( 'jnewsContent',  $mailingEdit->htmlcontent, '100%', '1000', '80', '30' ) ;
			$config_tabs->endTab();
		 	 }
			if (($show['textcontent'])) {
			$config_tabs->startTab(_JNEWS_NONHTML_VERSION, 'acaMailingOptionsHola.general');?>
			<?php echo _JNEWS_NONHTML_VERSION; ?></legend>
				<textarea name="altbody" id="altbody" rows="20" cols="70" style="width: 100%; height: 400px;">
					<?php echo strip_tags($mailingEdit->textonly) ;?></textarea>
					<?php
			$config_tabs->endTab();
			}
			?></td></tr><?php
	}
	?>

	</tbody>
	</table>

	<?php

	}


	public static function layoutBE( $mailingEdit, $lists, $show, $isEdit=false ) {

		$tagjs = "function insertTag(tag){ 
		try{
			status=jInsertEditorText(tag,'jnewsContent'); 				
			return true;
		} catch(err){
			alert('Your editor does not enable jNews to automatically insert the tag, please copy/paste it manually in your Newsletter'); return false;
		}
		}";
		$editor = JFactory::getEditor();
		$script = "function changeTemplate(newbody,newaltbody,templateid){
			if(newbody.length>2){".jnews::EditorSetContent( $editor, 'jnewsContent', 'newbody' ).";}
			var jnewstextarea =$('altbody'); if(newaltbody.length>2){jnewstextarea.setHTML(newaltbody);}
			var jnewstemplateid =$('template_id'); jnewstemplateid.value = templateid;
		
			}
			";
		
		$doc = JFactory::getDocument();
		$doc->addScriptDeclaration($script.$tagjs);

		if(!empty($_SESSION['skip_subscribers'.$mailingEdit->id])){
			echo 'If you click on the Send button, the process will skip the first '.$_SESSION['skip_subscribers'.$mailingEdit->id].' subscribers';
		}
	?>
	<!--<fieldset class="jnewscss">-->
	<!--<legend><?php echo @constant( $GLOBALS[JNEWS.'listname'.$mailingEdit->mailing_type] ).' '. _JNEWS_CONTENT ; ?></legend>-->
	<table class="jnewstable" cellspacing="1" width="100%" border="0">
		<tbody>
		<tr>
			<td valign="top">

		<?php
		$mailingType = JRequest::getVar( 'listype' );
		$listId = JRequest::getVar( 'listid' );
		$list_template_id = jNews_Lists::getListTemplate($listId);

		if ( $mailingEdit->mailing_type=='7' || $mailingType=='7' AND class_exists('jNews_Autonews') ){
				jNews_MailingsHTML::smartNewsHead($mailingEdit, $lists, $show);
			}else{
				jNews_MailingsHTML::subject($mailingEdit, $lists, $show);
			}

		if( empty($mailingEdit->id) ){

			if ( !empty($mailingEdit->template_id) ) {
				$template = jNews_Templates::loadOneTemplate('*', $mailingEdit->template_id);
			}else{
				if(!empty($list_template_id)) {
					$template = jNews_Templates::loadOneTemplate('*', $list_template_id, 'template_id', 'DESC', false);
				}else{
					$template = jNews_Templates::loadOneTemplate('*', '', 'template_id', 'DESC', true );
				}
				$mailingEdit->template_id = $template->template_id;
			}

			$mailingEdit->htmlcontent = ( isset( $template->body ) ) ? $template->body : '';
			$mailingEdit->textonly = ( isset( $template->altbody ) ) ? $template->altbody : '';
		}

		 if ($show['htmlcontent']) {
			echo '<fieldset class="jnewscss" id="htmlfieldset">';
			echo '<legend>';
			echo _JNEWS_HTML_VERSION ;
			echo '</legend>';
			echo $editor->display( 'jnewsContent',  $mailingEdit->htmlcontent, '100%', '600', '80', '30' );
			echo '</fieldset>';
		}

		 ?>
			</td>
			<td valign="top" width="330px" rowspan="2">
			<?php
		
			
			$config_tabs = new MosTabsjNews(0);
			
			$config_tabs->startPane('acaMailingOptions');

			$config_tabs->startTab( _JNEWS_LIST_T_LIST, 'acaMailingOptions.general' );
			jNews_MailingsHTML::lists( $mailingEdit, $lists, $show, 0, 0, false, $isEdit );//added another parameter for the list type ---mary
			$config_tabs->endTab();

			$config_tabs->startTab( _JNEWS_LIST_T_SENDER, 'acaMailingOptions.general' );
			jNews_MailingsHTML::senderinfo( $mailingEdit, $lists, $show );
			$config_tabs->endTab();


			if ($GLOBALS[JNEWS.'show_jcalpro'] and class_exists('jNews_Pro')) {
				$config_tabs->startTab( _JNEWS_SHOW_JCALPRO, 'acaMailingOptions.jcalpro' );
				jNews_MailingsHTML::jcalpro();
				$config_tabs->endTab();
			}

			if ($show['attachement'] ) {
				$config_tabs->startTab( _JNEWS_ATTACHMENTS, 'acaMailingOptions.attachement' );
				jNews_MailingsHTML::attachement($mailingEdit, null, null);
				$config_tabs->endTab();
			}

			$config_tabs->endPane();
			?>
			</td>
		</tr>


	<?php if (($show['textcontent'])) {?>
		<tr>
			<td>
				<fieldset class="jnewscss">
				<legend><?php echo _JNEWS_NONHTML_VERSION; ?></legend>
				<textarea name="altbody" id="altbody" rows="20" cols="70" style="width: 100%; height: 400px;">
					<?php echo strip_tags($mailingEdit->textonly) ; ?>
				</textarea>
				</fieldset>
			</td>
			<td>
			</td>
		</tr>
	<?php } ?>
		</tbody>
	</table>
	<!--</fieldset>-->
	<input type="hidden" id="template_id" name="template_id" value="<?php echo $mailingEdit->template_id; ?>" />
	<?php
	}


	public static function insertTemplate($editor) {

	?>
		<table style="border: 1px solid #000; width: 100%;" cellpadding="10" cellspacing="5">
			<tbody>
				<tr>
					<td>
	<?php
			$applyEditor = $editor->setContent( $editor->_name, 'newbody' );
			$script = "function changeTemplate(newbody,newaltbody,template_id){
			if(newbody.length>2){".$applyEditor."}
			var vartextarea =$('altbody'); if(newaltbody.length>2){vartextarea.setHTML(newaltbody);}
			var vartempid =$('tempid'); vartempid.value = tempid;}
			";
				
			$doc = JFactory::getDocument();
			$doc->addScriptDeclaration( $script );

			$templates = jNews_Templates::getTemplates( false, false, '', -1, 3 );
			$i=0;
			if ( !empty($templates) ) {
			foreach($templates as $template){
				$imgPath = $template->thumbnail;
				$img = jnews::imageResize($imgPath, 100, 100, $template->thumbnail);
				$html = '';
				$html = '<a href="#" onclick="changeTemplate(document.getElementById(\'jnewshtmlcontent\').innerHTML, document.getElementById(\'jnewsaltbody\').innerHTML, '.$template->template_id.');">';
				$html .= '<div style="margin:5px; float: left; border: 1px solid #000;">'.$img.'</div>';
				$html .= '<div id="jnewshtmlcontent" style="display:none;">'.$template->body.'</div>';
				$html .= '<div id ="jnewsaltbody" style="display:none;">'.$template->altbody.'</div>';
				$html .= '</a>';
				echo $html;
				$i=$i+1;
			}
			}
	?>
					</td>
				</tr>
			</tbody>
		</table>
	<?php
	
	}

	
	public static function attachement($mailingEdit, $lists, $show) {
		$js = "function deleteattach(rem, reml, url){
	";
	if( version_compare(JVERSION,'1.6.0','<') ){//1.5
	$js .="
 				var ajax = new Ajax(url,
 					{data: 'rem='+rem+'&reml='+reml,
 					method: 'POST',
 					onComplete : function(result){
 							var myElement = document.getElementById(rem);
							myElement.remove();
						}
 					}
 				);
 				ajax.request();
 			";
	}else{
		$js .="
		var ajax = new Request({
		url : url,
		data: 'rem='+rem+'&reml='+reml,
		method: 'POST',
		onComplete : function(result){ 
				var myElement = document.getElementById(rem);
				myElement.destroy();
			}
		});
		ajax.send();
 			";
	}
	$js .= "}";
	
	$urlcomm = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=deleteattach', false, false, true );
	
	$doc = JFactory::getDocument();
				$doc->addScriptDeclaration( $js );		
		
		foreach($mailingEdit->attachments as $attach => $k){
			$mailingEdit->attachments[$attach] = basename($k);
		}

		$path = JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'upload_url'];

		$arr = array(null);
		// Get the files and folders
		jimport('joomla.filesystem.folder');
		$files2		= JFolder::files($path, '.', true, true);
		$folders	= JFolder::folders($path, '.', true, true);
		// Merge files and folders into one array
		$files = array_merge($files2, $folders);
		// Sort them all
		asort($files);

		// check deleted attachments
		$rem = JRequest::getVar( 'rem' );
		if( !empty($rem) ){
			
			// get the lenght of the previous url
			$reml = JRequest::getVar( 'reml' );

			jNews_Attachment::deleteAttachment($rem);
			jNews_Attachment::deleteAttachmentQuery($rem);

			if( version_compare(JVERSION,'1.6.0','<') ){ //j15
				// create delete link for attachment files
				$urlInstances = JURI::getInstance();
				$uri = $urlInstances->_uri;
			}else{
				$urlInstances = JURI::getInstance();
				$uri = $urlInstances->toString();
			}

			if( isset($uri) && !empty($uri) ){
				$url = $uri;
				$url = substr( $url, 0, '-'.(int)$reml );

				// refresh or reload page with the extra url [previous]
				jNews_Tools::redirect( $url );
			}
		}

		if(sizeof($files) > 0){

			if( version_compare(JVERSION,'1.6.0','<') ){ //j15
				$delImgPath = JNEWS_JPATH_LIVE .DS. 'administrator' .DS. 'images' .DS. 'delete_f2.png';
			}else{ //j16
				$delImgPath = JNEWS_JPATH_LIVE .DS. 'administrator' .DS. 'components' .DS. JNEWS_OPTION .DS. 'images' .DS. 'delete_queue.png';
			}
			
			$urlExtraLength = 0;

			foreach( $files as $file ){
				$file = basename($file);

				if( version_compare(JVERSION,'1.6.0','<') ){ //j15
					// create delete link for attachment files
					$urlInstances = JURI::getInstance();
					$uri = $urlInstances->_uri;
				}else{
//					$uri = JURI::getInstance()->toString();
					$urlInstances = JURI::getInstance();
					$uri = $urlInstances->toString();					
				}
				
				if( !empty($uri) ){
					$url = $uri;

					$urlExtra = "&rem=". $file ."&reml=";
					$urlExtraMain = $urlExtra;

					// we need to get the extra url length
					$urlExtraLength = strlen( $urlExtra );

					// now we need to add the length count
					$urlExtra .= $urlExtraLength;

					// we need to get the extra url length again with its length count
					$urlExtraLength = strlen( $urlExtra );

					// we need to set the length count again [ now with its full count] and set it as our final url
					$url .= $urlExtraMain.$urlExtraLength;
					$link = '<a href="'. $url .'">';
				}else{
					$url = "Link Error";
					$link = '<a href="'. $url .'" onClick="window.alert("wee");">';
				}

				if(in_array($file, $mailingEdit->attachments)){
//					echo "<input name='attachments[]' type='checkbox' value='".$file."' checked> ". $file ." ". $link ." <img src='". $delImgPath ."'  title='Delete ". $file ."' style='width:16px;height:16px;'></a> <br>";
					echo "<div id='".$file."'><input name='attachments[]' type='checkbox' value='".$file."' checked> ". $file ." "." <img src='". $delImgPath ."' onclick='deleteattach(\"".$file."\",\"".$urlExtraLength."\",\"".$urlcomm."\")'  title='Delete ". $file ."' style='width:16px;height:16px;'> </div>";
				}else{
					//wwe comment this one this one because we ewill not show the index.html
//					echo "<input name='attachments[]' type='checkbox' value='".$file."'> ". $file ." ". $link ." <img src='". $delImgPath ."' title='Delete ". $file ."' style='width:16px;height:16px;'></a> <br>";
				}
			} 
		}

		echo "<br><br>";

		?>
		<script src="<?php echo JNEWS_URL_INCLUDES; ?>multifile.js"></script>

		<input id="my_file_element" type="file" name="file_1" >
		</input>

		<br /><b><?php echo _JNEWS_FILES ; ?>:</b>

		<div id="files_list"></div>
		<script>

			var multi_selector = new MultiSelector( document.getElementById( 'files_list' ), 10 );
			multi_selector.addElement( document.getElementById( 'my_file_element' ) );
		</script>

	<?php

	}


	public static function viewHeading( $mailing ) {
	?>
		<table width="100%" cellpadding="4" cellspacing="0" border="0" align="left" class="adminlist">
		<tr>
			<th width="100px" align="left">
				<strong><?php echo _JNEWS_SUBJECT; ?>:</strong>
			</th>
			<th align="left">
				<?php echo $mailing->subject; ?>
			</th>
		</tr>
		<tr>
			<th align="left">
				<strong><?php echo _JNEWS_LIST_DATE; ?>:</strong>
			</th>
			<th align="left">
				<?php
					if(is_numeric($mailing->send_date) && $mailing->send_date != 0 ) {
						$mailing->send_date = date( 'Y-m-d H:i:s',  $mailing->send_date );
					}else{
						$mailing->send_date = $mailing->send_date;
					}
					
					if($mailing->send_date==0) $mailing->send_date='0000-00-00 00:00:00';
					echo $mailing->send_date;
				?>
			</th>
		</tr>
		<tr>
			<th align="left">
				<strong><?php echo _JNEWS_LIST_ISSUE; ?>:</strong>
			</th>
			<th  align="left">
				<?php echo $mailing->issue_nb; ?>
			</th>
		</tr>

		<tr>
			<th width="100%" align="left" colspan="2">
				<strong><?php echo _JNEWS_CONTENT; ?>:</strong>
			</th>
		</tr>
		</table>
	<?php
	}

	 public static function viewMailing($mailing, $forms) {
	 	echo $forms['main'];

		if ( $mailing->html ) { 
		?>
			<fieldset class="adminform" width="100%" id="htmlfieldset">
			<legend><?php echo _JNEWS_HTML_VERSION; ?></legend>
			<div class="newsletter_content" ><?php echo $mailing->htmlcontent; ?></div>
			</fieldset>
		<?php 
		} else {
		?>	
			<fieldset class="adminform" >
			<legend><?php echo _JNEWS_NONHTML; ?></legend>
			<textarea style="width:100%" rows="20" readonly><?php echo jNews_ProcessMail::htmlToText($mailing->textonly); ?></textarea>
			</fieldset>
		<?php 	
		}

		echo '<div class="clr"></div>';
		
		$act = JRequest::getVar( 'act', '', '', 'WORD' );
		$task = JRequest::getVar( 'task' );
		if ( $act!= 'mailing' && $task!='view' ) {
		?>
			<fieldset class="adminform" >
			<legend><?php echo _JNEWS_NONHTML; ?></legend>
			<textarea style="width:100%" rows="20" readonly><?php echo jNews_ProcessMail::htmlToText($mailing->textonly); ?></textarea>
			</fieldset>
			<div class="clr"></div>
		<?php	
		}
		
		if(!empty($mailing->attachments)) { ?>
		<table width="100%" cellpadding="4" cellspacing="0" border="0" align="left" class="adminlist">
		<tr>
			<th align="left" valign="top">
				<strong><?php echo _JNEWS_ATTACHED_FILES; ?>:</strong>
			</th>
			<td align="left">
				<?php
				foreach ($mailing->attachments as $file) {
					echo '<a href="'.JNEWS_JPATH_LIVE.$GLOBALS[JNEWS.'upload_url'].DS.basename($file).'" target="_blank">'.basename($file).'</a><br />';
				}
				?>
			</td>
		</tr>
		</table>
		<?php
		 }

	}

	public static function jcalpro(){
		$db = JFactory::getDBO();

		$tip =  _JNEWS_JCALTAGS_DESC_TIPS;
		$title =  _JNEWS_JCALTAGS_DESC ;
		$desc = "<span class=\"editlinktip\">" . jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ) . "</span>";
		$tip =  _JNEWS_JCALTAGS_START_TIPS;
		$title =  _JNEWS_JCALTAGS_START ;
		$start = "<span class=\"editlinktip\">" . jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ) . "</span>";
		$tip =  _JNEWS_JCALTAGS_READMORE_TIPS;
		$title =  _JNEWS_JCALTAGS_READMORE ;
		$read = "<span class=\"editlinktip\">" . jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ) . "</span>";

		 $query = "SELECT `cat_id`,`cat_name` FROM #__jcalpro2_categories";
		 $db->setQuery($query);
		 $jcalcats = $db->loadObjectList();

		$events = array();
		$year = intval(date('Y'));
		 if(!empty($jcalcats)){
		 	foreach($jcalcats as $jcalcat){
				 $query = "SELECT `extid`, `title` ,`start_date` FROM #__jcalpro2_events where `cat` = ".$jcalcat->cat_id." AND (`start_date` >= '".$year."' OR `end_date` >= '".$year."' ) ORDER BY `start_date` DESC";
				 $db->setQuery($query);
				 $events[$jcalcat->cat_id] = $db->loadObjectList();
			}
		 }

?>
<script type="text/javascript">
<!--

var events = new Array;

<?php
if(!empty($events)){
	$i = 0;
	foreach($events as $cat => $eventcat){
		if(!empty($eventcat)){
			foreach ($eventcat as $event){
				echo 'events['.$i.'] = new Array(\''.$cat.'\',\''.$event->extid.'\',\''.addslashes($event->title).' ('.$event->start_date.')\');'."\n";
				$i++;
			}
		}
	}
}
?>
var formname = 'adminForm';
if(!document.adminForm){
	formname = 'mosForm';
}

public static function updatejCalCat(){

	var catid = eval('document.'+formname+'.jcal_cat.value');
	var list = eval( 'document.'+formname+'.jcal_event');

	var i = 0;
	// empty the list
	for (i in list.options.length) {
		list.options[i] = null;
	}
	i = 0;
	for (a in events) {
		if (events[a][0] == catid) {
			opt = new Option();
			opt.value = events[a][1];
			opt.text = events[a][2];
			list.options[i++] = opt;
		}
	}
	list.length = i;

}

public static function updatejCaltag(){
	var eventid = eval('document.'+formname+'.jcal_event.value');
	var start = eval('document.'+formname+'.jcal_start');
	var desc = eval('document.'+formname+'.jcal_desc');
	var read = eval('document.'+formname+'.jcal_read');
	var tag = eval('document.'+formname+'.jcal_tag');

	for (i=0;i<start.length;i++) {
        if (start[i].checked) {
             var start_value = start[i].value;
        }
    }
	for (i=0;i<desc.length;i++) {
        if (desc[i].checked) {
             var desc_value = desc[i].value;
        }
    }
	for (i=0;i<read.length;i++) {
        if (read[i].checked) {
             var read_value = read[i].value;
        }
    }

	tag.value = "{jcalevent:" + eventid + "|" + start_value + "|" + desc_value + "|" + read_value + "}";
}
//-->
</script>

		<table class="jnewscss_bots" width="100%">
			<tr>
				<td style="vertical-align: top;" colspan="2">
				<?php
					$tip = _JNEWS_JCALTAGS_TITLE_TIPS;
					$title = _JNEWS_JCALTAGS_TITLE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
					<input class="inputbox" type="text" onfocus="this.select();" size="20" name="jcal_tag"/>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $start ?>
				</td>
				<td>
	                <input type="radio" name="jcal_start" value="0" onclick="updatejCaltag();" />
	                <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES; ?>16/status_r.png" width="12" height="12" border="0" alt="No" />
	                <input type="radio" name="jcal_start" value="1" checked="checked" onclick="updatejCaltag();" />
	                <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES; ?>16/status_g.png" width="12" height="12" border="0" alt="Yes" />
	             </td>
			</tr>
			<tr>
				<td>
					<?php echo $desc ?>
				</td>
				<td>
					<input type="radio" name="jcal_desc" value="0"  onclick="updatejCaltag();" />
	                <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES; ?>16/status_r.png" width="12" height="12" border="0" alt="No" />
	                <input type="radio" name="jcal_desc" value="1"  checked="checked" onclick="updatejCaltag();" />
	                <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES; ?>16/status_g.png" width="12" height="12" border="0" alt="Yes" />
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $read ?>
				</td>
				<td>
					<input type="radio" name="jcal_read" value="0" onclick="updatejCaltag();" />
	                <img src="<?php echo JNEWS_JPATH_LIVE; ?>/administrator/images/publish_x.png" width="12" height="12" border="0" alt="No" />
	                <input type="radio" name="jcal_read" value="1" checked="checked" onclick="updatejCaltag();" />
	                <img src="<?php echo JNEWS_JPATH_LIVE; ?>/administrator/images/tick.png" width="12" height="12" border="0" alt="Yes" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
<?php
	 	echo '<select class="inputbox" onchange="updatejCalCat();" size="1" name="jcal_cat">';
		 if(!empty($jcalcats)){
		 	foreach($jcalcats as $jcalcat){
				echo '<option value="'.$jcalcat->cat_id.'">'.$jcalcat->cat_name.'</option>';
		 	}
		 }

		echo '</select>';
?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<select name="jcal_event" class="inputbox" size="30" onchange="updatejCaltag();">
					<?php
					if(!empty($jcalcats)){
						 if(!empty($events[$jcalcats[0]->cat_id])) {
							 foreach ($events[$jcalcats[0]->cat_id] AS $event) {
								 echo '<option value="' . $event->extid . '">' . $event->title.' ('.$event->start_date.') </option>' . "\n";
							 }
						 }
 					}
					?>
					</select>
				</td>
			</tr>
		</table>
<?php
	}

	public static function ReadImages( $imagePath, $folderPath, &$folders, &$images ){

		jimport( 'joomla.filesystem.folder' );
		$imgFiles = JFolder::files( $imagePath );

		if ( !empty($imgFiles) ) {
			foreach ($imgFiles as $file){
				$ff_ 	= $folderPath.DS.$file;
				$ff 	= $folderPath.DS.$file;
				$i_f 	= $imagePath .'/'. $file;

				if ( is_dir( $i_f ) && $file <> 'CVS' && $file <> '.svn') {
					$folders[] = JHTML::_('select.option',  $ff_ );
					jNews_MailingsHTML::ReadImages( $i_f, $ff_, $folders, $images );
				} else if(preg_match( "/bmp|gif|jpg|jpeg|png/i", $file ) && is_file( $i_f )){
					// leading / we don't need
					$imageFile = substr( $ff, 1 );
					$images[$folderPath][] = JHTML::_('select.option',  $imageFile, $file );
				}
			}
		}

	}

	/**
	 * <p>public static function to create the header or the subject area of the smart newsletter</p>
	 */
 	public static function smartNewsHead($mailingEdit, $lists, $show){
		$option = array();
		$my	= JFactory::getUser();
		$acl = JFactory::getACL();
		//$gtree = $acl->get_group_children_tree( null, 'USERS', false );
		$option[] = JHTML::_('select.option','1800','Every 30 minutes');
		$option[] = JHTML::_('select.option','3600','Every hour');
		$option[] = JHTML::_('select.option','43200','Every 12 hours');
		$option[] = JHTML::_('select.option', '1', _JNEWS_AUTO_DAY_CH1 );
		$option[] = JHTML::_('select.option', '3', _JNEWS_AUTO_DAY_CH3 );
		$option[] = JHTML::_('select.option', '5', _JNEWS_AUTO_DAY_CH5 );
		$option[] = JHTML::_('select.option', '6', _JNEWS_AUTO_DAY_CH6 );
		$option[] = JHTML::_('select.option', '7', _JNEWS_AUTO_DAY_CH7 );
		$option[] = JHTML::_('select.option', '8', _JNEWS_AUTO_DAY_CH8 );
		$option[] = JHTML::_('select.option', '9', _JNEWS_AUTO_DAY_CH9 );

		$auto_option[] = JHTML::_('select.option', '0', _JNEWS_AUTO_OPTION_NONE );
		$auto_option[] = JHTML::_('select.option', '1', _JNEWS_AUTO_OPTION_NEW );

		if( isset($mailingEdit->new_letter) && $mailingEdit->new_letter == 1) $auto_option[] = JHTML::_('select.option', '2', _JNEWS_AUTO_OPTION_ALL );

		if( !isset($lists['delay_min']) ) $lists['delay_min'] = null;
		$lists['delay_min'] = JHTML::_('select.genericlist', $option, 'delay_min', 'class="inputbox" size="1"', 'value', 'text', ( isset($mailingEdit->delay_min) ) ? $mailingEdit->delay_min : 1 );

		$lists['catid'] = ( !empty($mailingEdit->cat_id) ? $mailingEdit->cat_id : '' );
		$lists['notify_id'] = ( !empty($mailingEdit->notify_id) ? $mailingEdit->notify_id : '' );
		$lists['delay_max'] = ( !empty($mailingEdit->delay_max) ? $mailingEdit->delay_max : '' );
		$lists['smart_date'] = ( !empty($mailingEdit->smart_date) ? $mailingEdit->smart_date : '' );
		
		if(!empty($mailingEdit->delay_max)) JRequest::setVar('delay_max', $mailingEdit->delay_max);
		if(!empty($mailingEdit->notify_id)) JRequest::setVar('notify_id', $mailingEdit->notify_id);
		if(!empty($mailingEdit->cat_id)) {
			JRequest::setVar('cat_id', base64_encode($mailingEdit->cat_id));
		}
//		if(!empty($mailingEdit->template_id))JRequest::setVar('template_id', base64_encode($mailingEdit->template_id));

		jNews_Autonews::edit($mailingEdit, $lists, $show);

 	}

 }
