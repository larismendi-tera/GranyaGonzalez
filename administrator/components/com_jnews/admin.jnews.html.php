<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class backHTML {

	 public static function formStart($javascriptType='', $html = 0, $images=null) {
		$editor = JFactory::getEditor();

		 echo '<script language="javascript" type="text/javascript">';
		 switch ($javascriptType) {
			case 'edit_mailing':
			?>

			function submitbutton(pressbutton) {
				var form = document.adminForm;
				if (pressbutton == 'show' || pressbutton == 'cpanel') {
					submitform( pressbutton );
					return;
				}

				if (form.subject.value == "" && pressbutton != 'cancel' ){					
					alert( "Mailing must have a title" );
				} else {
					<?php
					if($html != 0) {
//						echo $editor->save( 'content' );
						echo $editor->save( 'jnewsContent' );
					 }
					?>
					if(pressbutton){
						if (pressbutton == 'saveSend') {
							if (!confirm('Are you sure you want to proceed?')){return;}
							form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=mailing';
						}
						form.task.value=pressbutton;
					}
					form.submit();
				}
			}
		<?php
				break;
				
			case 'show_mailing':
				$mailingtype=JRequest::getVar( 'listype' );
			?>
			function checkcid(myField) {
				myField.checked = true;
				isChecked(true);
			}
			function submitbutton(pressbutton) {
				var form = document.adminForm;
				if (pressbutton == 'cancel') {
				    form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=mailing&listype=<?$mailingtype?>';
				}

				if (pressbutton == 'deletequeue') {
					if (!confirm('Are you sure you want to delete the entries of this mailing from the Queue?')){return;}
					form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=mailing';
				}
				submitform( pressbutton );
			}
			<?php
				break;
			case 'template':
			?>
				function submitbutton(pressbutton) {
					var form = document.adminForm;
					if (pressbutton == 'cancel' || pressbutton == 'cpanel') {
					submitform( pressbutton );
					return;
					}
					if (pressbutton == 'save' || pressbutton == 'apply' || pressbutton=='sendtest'){
						if(form.template_namekey.value == "" || form.template_namekey.value == ""){
							alert( "<?php echo _JNEWS_TEMPLATE_ALERT; ?>" );
						}else{
							submitform( pressbutton );
						}

						return;
					}

				}

			<?php
				break;
			case 'addsubsback':
			?>
				function submitbutton(pressbutton) {

					var form = document.adminForm;
					var place = form.email.value.indexOf("@",1);
					var point = form.email.value.indexOf(".",place+1);

					if (pressbutton == 'cancelSub' || pressbutton == 'cpanel') {
						submitform( pressbutton );
						return;
					}
					if (pressbutton == 'doNew'){
						if(form.email.value == ""){
							alert( "<?php echo _JNEWS_DONEW_SUBSCRIBERB; ?>" );
						}else{

							if (form.email.value == "" || form.email.value == "<?php echo addslashes(_JNEWS_EMAIL); ?>"){
    							alert( "<?php echo addslashes(_JNEWS_REGWARN_MAIL); ?> " );
							} else {
        						if ((place > -1)&&(form.email.value.length >2)&&(point > 1)){
            						submitform( pressbutton );
       							 } else {
            						alert( "<?php echo addslashes(_JNEWS_REGWARN_MAIL); ?>");
        						}
							}
						}
						return;
					}

				}

			<?php
				break;
			case 'addsubsfront':
			?>
				function submitbutton(pressbutton) {
					submitform( pressbutton );
				}

				function checkEmail(email) {
					var place = email.indexOf("@",1);
					var point = email.indexOf(".",place+1);
					if ((place > -1)&&(email.length >2)&&(point > 1))  return true;
					else {
						alert( "<?php echo addslashes(_JNEWS_REGWARN_MAIL); ?>");
						return false;
					}

				}

			<?php if( version_compare(JVERSION,'1.6.0','<') ){ //j15 ?>
				function addmorefields(){
					var tr = $('tr1');
					var parent = tr.getParent();
					var myNewElement = new Element('tr');
					var count = $('count');
					var mycount = count.value;
					myNewElement.setProperty('id', 'tr'+mycount);
					var mychild = tr.getChildren();
					var newchild = mychild.clone();
					myNewElement.adopt(newchild);

					var jnewsname = $('jnewsname');
					var jnewsnamevalue = jnewsname.value;

					var name = myNewElement.getElement('td input#name');
					if(name != null) {
						name.setProperty('name', 'name'+mycount);
						name.setProperty('value', jnewsnamevalue);
					}

					var jnewsemail = $('jnewsemail');
					var jnewsemailvalue = jnewsemail.value;

					var email = myNewElement.getElement('td input#email');
					if(email != null){
						email.setProperty('name', 'email'+mycount);
						email.setProperty('value', jnewsemailvalue);
					}

					var jnewscolumn1 = $('jnewscolumn1');
					var jnewscolumn1value = jnewscolumn1.value;

					var column1 = myNewElement.getElement('td input#column1');
					if(column1 != null){
						column1.setProperty('name', 'column1'+mycount);
						column1.setProperty('value', jnewscolumn1value);
					}

					var jnewscolumn2 = $('jnewscolumn2');
					var jnewscolumn2value = jnewscolumn2.value;

					var column2 = myNewElement.getElement('td input#column2');
					if(column2 != null){
						column2.setProperty('name', 'column2'+mycount);
						column2.setProperty('value', jnewscolumn2value);
					}

					var jnewscolumn3 = $('jnewscolumn3');
					var jnewscolumn3value = jnewscolumn3.value;

					var column3 = myNewElement.getElement('td input#column3');
					if(column3 != null){
						column3.setProperty('name', 'column3'+mycount);
						column3.setProperty('value', jnewscolumn3value);
					}

					var jnewscolumn4 = $('jnewscolumn4');
					var jnewscolumn4value = jnewscolumn4.value;

					var column4 = myNewElement.getElement('td input#column4');
					if(column4 != null){
						column4.setProperty('name', 'column4'+mycount);
						column4.setProperty('value', jnewscolumn4value);
					}

					var jnewscolumn5 = $('jnewscolumn5');
					var jnewscolumn5value = jnewscolumn5.value;

					var column5 = myNewElement.getElement('td input#column5');
					if(column5 != null){
						column5.setProperty('name', 'column5'+mycount);
						column5.setProperty('value', jnewscolumn5value);
					}

					var confirmed = myNewElement.getElement('input#confirmed');
					if(confirmed != null)confirmed.setProperty('name', 'confirmed'+mycount);

					var receive_html = myNewElement.getElement('input#receive_html');
					if(receive_html != null)receive_html.setProperty('name', 'receive_html'+mycount);

					var blacklist = myNewElement.getElement('input#blacklist');
					if(blacklist != null)blacklist.setProperty('name', 'blacklist'+mycount);


					parent.adopt(myNewElement);


					newcount = parseInt(mycount) + 1;
					count.setProperty('value', newcount);

				}
			<?php }else{ //j16 ?>
				function addmorefields(){
					var tr = $('tr1');
					var parent = tr.getParent();
					var myNewElement = new Element('tr');
					var count = $('count');
					var mycount = count.value;
					myNewElement.setProperty('id', 'tr'+mycount);


					for (var i = 0, k = tr.childNodes.length; i < k; i++){
						var child = Element.clone(tr.childNodes[i], true, true);
						if (child) myNewElement.grab(child);
					}

					parent.adopt(myNewElement);

					var jnewsname = $('jnewsname');
					var jnewsnamevalue = jnewsname.value;

					var name = document.getElement('tbody tr#tr'+mycount+' td input#name');
					if(name != null) {

						name.setProperty('name', 'name'+mycount);
						name.setProperty('value', jnewsnamevalue);
					}

					var jnewsemail = $('jnewsemail');
					var jnewsemailvalue = jnewsemail.value;

					var email = document.getElement('tbody tr#tr'+mycount+' td input#email');
					if(email != null){
						email.setProperty('name', 'email'+mycount);
						email.setProperty('value', jnewsemailvalue);
					}

					var jnewscolumn1 = $('jnewscolumn1');
					var jnewscolumn1value = jnewscolumn1.value;

					var column1 = document.getElement('tbody tr#tr'+mycount+' td input#column1');
					if(column1 != null){
						column1.setProperty('name', 'column1'+mycount);
						column1.setProperty('value', jnewscolumn1value);
					}

					var jnewscolumn2 = $('jnewscolumn2');
					var jnewscolumn2value = jnewscolumn2.value;

					var column2 = document.getElement('tbody tr#tr'+mycount+' td input#column2');
					if(column2 != null){
						column2.setProperty('name', 'column2'+mycount);
						column2.setProperty('value', jnewscolumn2value);
					}

					var jnewscolumn3 = $('jnewscolumn3');
					var jnewscolumn3value = jnewscolumn3.value;

					var column3 = document.getElement('tbody tr#tr'+mycount+' td input#column3');
					if(column3 != null){
						column3.setProperty('name', 'column3'+mycount);
						column3.setProperty('value', jnewscolumn3value);
					}

					var jnewscolumn4 = $('jnewscolumn4');
					var jnewscolumn4value = jnewscolumn4.value;

					var column4 = document.getElement('tbody tr#tr'+mycount+' td input#column4');
					if(column4 != null){
						column4.setProperty('name', 'column4'+mycount);
						column4.setProperty('value', jnewscolumn4value);
					}

					var jnewscolumn5 = $('jnewscolumn5');
					var jnewscolumn5value = jnewscolumn5.value;

					var column5 = document.getElement('tbody tr#tr'+mycount+' td input#column5');
					if(column5 != null){
						column5.setProperty('name', 'column5'+mycount);
						column5.setProperty('value', jnewscolumn5value);
					}

					var confirmed = document.getElement('tbody tr#tr'+mycount+' input#confirmed');
					if(confirmed != null)confirmed.setProperty('name', 'confirmed'+mycount);

					var receive_html = document.getElement('tbody tr#tr'+mycount+' input#receive_html');
					if(receive_html != null)receive_html.setProperty('name', 'receive_html'+mycount);

					var blacklist = document.getElement('tbody tr#tr'+mycount+' input#blacklist');
					if(blacklist != null)blacklist.setProperty('name', 'blacklist'+mycount);

					newcount = parseInt(mycount) + 1;
					count.setProperty('value', newcount);

				}
			<?php 
				}
			
				break;
			case 'configpanel':
			?>
			function submitbutton(pressbutton) {
				var form = document.adminForm;
				if (pressbutton == 'cancel') {
					submitform( pressbutton );
					return;
				}
				if (pressbutton == 'sendQueue') {
					form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=mailing';
				}
				submitform( pressbutton );
			}
			<?php
				break;
			case 'editlist':
				?>
				function submitbutton(pressbutton) {
					var form = document.adminForm;
					if (pressbutton == 'cancel') {
						submitform( pressbutton );
						return;
					}
				<?php
					if ($GLOBALS[JNEWS.'listHTMLeditor'] == '1') {
						echo $editor->save( 'list_desc' );
					}
					if($html) {
						$editor->save( 'subscribemessage' );
						$editor->save( 'unsubscribemessage' );
						$editor->save( 'notifyadminmsg' );
					}
				?>
					submitform( pressbutton );
				}
				<?php
				break;
			default:
			?>
			function submitbutton(pressbutton) {
 				var form = document.adminForm;
				if (pressbutton == 'cancel') {
					submitform( pressbutton );
					return;
				}
				submitform( pressbutton );
			}
			<?php
				break;
		 	};
		echo '</script>';
	 }

	 public static function formEnd($values = '') {

		if (!empty($values)) {
			foreach ($values as $value) {
				echo '<input type="hidden" name="'.$value->name.'" value="'.$value->value.'" />'."\n\r";
			}
		}
		echo '<input type="hidden" name="option" value="'.JNEWS_OPTION.'" />'."\n\r";
		echo '<input type="hidden" name="task" value="" />'."\n\r";
    	echo '<input type="hidden" name="boxchecked" value="0" />'."\n\r";
    	echo JHTML::_( 'form.token' );
		echo '</form>'."\n\r";

	 }


	public static function _header($title, $img , $message, $task, $action ) {
		$mainframe = JFactory::getApplication();
		$GLOBALS[JNEWS . 'titlteHeader'] = $title;
		$GLOBALS[JNEWS . 'titlteImg'] = $img;
	     $message = jnews::messageMgmt($action, $task, $message);

		backHTML::_header15( $title, $img , $message, $task, $action );

 	 if ($GLOBALS[JNEWS.'show_guide'] == 1) {
		if($mainframe->isAdmin()){
	  		echo '<div id="jNewsWizard"></div>';
	 	}
	 }
	}


	 public static function _header15($title, $img , $message, $task, $action ) {
		$mainframe = JFactory::getApplication();
		
	  $document= JFactory::getDocument();
      $document->addStyleSheet( JNEWS_URL_ADMIN . 'cssadmin/jnews.css' );
		
?>
         <div id="jnews">
<?php if (!empty($message)) { ?>
         <table class="adminheading" width="99%">
         <tr>
               <td>
               	<center>
                  <table style="width: 100%; text-align: center; margin-left: auto; margin-right: auto;">
                     <tr>
                     <td class="none" align="center"><?php echo $message;?></td>
                     <td  width="120px" align="right"><a href="index.php?option=<?php echo JNEWS_OPTION; ?>" target="_blank"><img src="components/<?php echo JNEWS_OPTION; ?>/images/jnewsletter.png" alt="jNews Logo" border="0" align="right" /></a></td>
                     </tr>
                  </table>
               	</center>
                </td>
         </tr>
         </table>
<?php 
		} 
?>
         </div>
<?php

	}



	public static function _footer() {
		backHTML::_footerSignature();
	}


	 public static function _footerSignature() {
		echo '<div style="clear:both;"></div>';
		echo '<br /><div align="center" class="footer"><span class="footer">'. jnews::version() .
				', <a href="http://www.joobi.co" target="_blank" class="footer">Joomla extensions</a> powered by Joobi.';
		echo '</span></div>';
    }

	public static function footerCountsQueue($start, $limit,$mailingsearch,$total,$colspan,$action){
 	$ranges = array(5, 10, 15, 20, 25, 50, 100, 150, 200);

	?>
		<center>
	<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="adminlist">
		<tr>
			<th colspan="<?php echo $colspan; ?>" align="center">
				<a href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=<?php echo $action; ?>&start=0&limit=<?php echo $limit;?>&mailingsearch=<?php echo $mailingsearch; ?> class="pageNav"><< </a>&nbsp;
		<?php
			if (($limit * 5) < $start) {
					$i = $start - 50;
				} else {
					$i = 0;
				}
				$last = 10 + (intval($i / $limit) + 1);
				for ($j = (intval($i / $limit) + 1); $i < $total && $j <= $last; $i += $limit, $j++) {
					if($i == $start) {
						echo $j . '&nbsp;';
					} else {
	?>
				<a href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=<?php echo $action; ?>&start=<?php echo $i; ?>&limit=<?php echo $limit;?>&mailingsearch=<?php echo $mailingsearch; ?>" class="pageNav"><?php echo $j;?></a>&nbsp;
	<?php
				}
			}
			if (($total - $limit) < 0) {
				$laststart = 0;
			} else {
				$laststart = $total - $limit;
			}
	?>
		<a href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=<?php echo $action; ?>&start=<?php echo $laststart;?>&limit=<?php echo $limit;?>&mailingsearch=<?php echo $mailingsearch; ?>" class="pageNav"> >></a>&nbsp;
			</th>
		</tr>
		<tr>
			<td colspan="<?php echo $colspan;?>" align="center">
				<form action="index.php" method="post" name="selectForm">
					<select name="limit" class="inputbox" size="1" onchange="document.selectForm.submit();">
	<?php
			foreach( $ranges as $i ){
	?>
			<option value="<?php echo $i;?>" <?php if($i == $limit) { echo "selected=\"selected\""; } ?>><?php echo $i;?></option>
	<?php
			}
	?>
					</select>
					<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
					<input type="hidden" name="act" value="<?php echo $action; ?>" />
					<input type="hidden" name="task" value="" />
					<input type="hidden" name="userid" value="" />
			    	<input type="hidden" name="boxchecked" value="0" />
					<input type="hidden" name="start" value="<?php echo $start; ?>" />
					<input type="hidden" name="emailsearch" value="<?php echo $mailingsearch;?>" />
				&nbsp;

	<?php
			if (($start + $limit) > $total) {
				$through = $total;
			} else {
				$through = $start + $limit;
			}
			echo _JNEWS_RESULTS . ' ' . ($start + 1) . ' - ' . ($through) . ' of ' . $total; ?>
				</form>
			</td>
		</tr>
	</table>
	</center>
	<?php
	}

	 public static function footerCounts($start, $limit, $emailsearch, $total, $colspan, $action, $listId, $listType) {

	?>
	<center>
	<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="adminlist">
		<tr>
			<th colspan="<?php echo $colspan; ?>" align="center">
				<a href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=<?php echo $action; ?>&start=0&limit=<?php echo $limit;?>&emailsearch=<?php echo $emailsearch; ?>&listype=<?php echo $listType; ?>&listid=<?php echo $listId; ?>" class="pageNav"><< </a>&nbsp;
	<?php
			if (($limit * 5) < $start) {
				$i = $start - 50;
			} else {
				$i = 0;
			}
			$last = 10 + (intval($i / $limit) + 1);
			for ($j = (intval($i / $limit) + 1); $i < $total && $j <= $last; $i += $limit, $j++) {
				if($i == $start) {
					echo $j . '&nbsp;';
				} else {
	?>
				<a href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=<?php echo $action; ?>&start=<?php echo $i; ?>&limit=<?php echo $limit;?>&emailsearch=<?php echo $emailsearch; ?>&listype=<?php echo $listType; ?>&listid=<?php echo $listId; ?>" class="pageNav"><?php echo $j;?></a>&nbsp;
	<?php
				}
			}
			if (($total - $limit) < 0) {
				$laststart = 0;
			} else {
				$laststart = $total - $limit;
			}
	?>
				<a href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=<?php echo $action; ?>&start=<?php echo $laststart;?>&limit=<?php echo $limit;?>&emailsearch=<?php echo $emailsearch; ?>&listype=<?php echo $listType; ?>&listid=<?php echo $listId; ?>" class="pageNav"> >></a>&nbsp;
			</th>
		</tr>
		<tr>
			<td colspan="<?php echo $colspan;?>" align="center">
				<form action="index.php" method="post" name="selectForm">
					<select name="limit" class="inputbox" size="1" onchange="document.selectForm.submit();">
	<?php
			for($i = 15 ; $i <= 90; $i += 15) {
	?>
						<option value="<?php echo $i;?>" <?php if($i == $limit) { echo "selected=\"selected\""; } ?>><?php echo $i;?></option>
	<?php
			}
	?>
					</select>
					<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
					<input type="hidden" name="act" value="<?php echo $action; ?>" />
					<input type="hidden" name="task" value="" />
					<input type="hidden" name="userid" value="" />
			    	<input type="hidden" name="boxchecked" value="0" />
					<input type="hidden" name="listid" value="<?php echo $listId; ?>" />
					<input type="hidden" name="listype" value="<?php echo $listType; ?>" />
					<input type="hidden" name="start" value="<?php echo $start; ?>" />
					<input type="hidden" name="emailsearch" value="<?php echo $emailsearch;?>" />
				</form>
				&nbsp;
	<?php
			if (($start + $limit) > $total) {
				$through = $total;
			} else {
				$through = $start + $limit;
			}
			echo _JNEWS_RESULTS . ' ' . ($start + 1) . ' - ' . ($through) . ' of ' . $total; ?>
			</td>
		</tr>
	</table>
	</center>
	<?php
	 }

	 public static function controlPanel() {
 		unset($GLOBALS["task"]);
 		unset($_REQUEST["task"]);

    	$doc = JFactory::getDocument();
       	$doc->addStyleSheet(JNEWS_URL_ADMIN . 'cssadmin/jnews.css');

	?>
<div align="center" class="centermain">
<div id="jnews">
		<table class="">
            <tr>
         	<td width="58%" valign="top">
				<?php echo backHTML::iconsPanel(); ?>
			</td>
			<td width="42%" valign="top">

			<div style="width=100%;">

			<script type="text/javascript">
				function checkcid(myField) {
					myField.checked = true;
					isChecked(true);
				}
			</script>

			<form action="index.php" method="post" name="adminForm">
				<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
				<input type="hidden" name="act" value="jnews" />
				<input type="hidden" name="task" value="" />
				<input type="hidden" name="userid" value="" />
		    	<input type="hidden" name="boxchecked" value="0" />

			<?php
			$tabs = new MosTabsjNews(1);

			$tabs->startPane( 'acaControlPanel' );
			$tabs->startTab( _JNEWS_MENU_TAB_SUM , "acaControlPanel.Summary");
			?>
			<table class="<?php echo jnews::myTheme(); ?>">
			<tbody>
				<thead>
					<tr>
					 <th class="title" style="text-align: center;"><?php echo '#'; ?></th>
					 <th class="title" style="text-align: center;"><?php echo _JNEWS_MENU_TAB_LIST; ?></th>
					 <th class="title" style="text-align: center;"><?php echo _JNEWS_MENU_MAILING_TITLE; ?></th>
					</tr>
				</thead>
			 <?php
			$html = '';
			$totalist = 0;
			$totalmail = 0;
			$totalsub = $GLOBALS[JNEWS.'act_totalsubcribers0'];
			$totalsent = 0;
			$nb = explode(',', $GLOBALS[JNEWS.'activelist']);
			$size = sizeof($nb);
			
			$countOfLists[1] = jNews_Lists::countLists(1);
			$countOfLists[2] = jNews_Lists::countLists(2);
			$countOfLists[7] = jNews_Mailing::countMails(7, true );

			$countOfMailings[1] = jNews_Mailing::countMails(1);
			$countOfMailings[2] = jNews_Mailing::countMails(2);
			$countOfMailings[7] = jNews_Mailing::countMails(7);
			
			for($i = 0; $i < $size; $i ++) {
				$index = $nb[$i];
				if ($GLOBALS[JNEWS.'listshow'.$index]>0 AND $GLOBALS[JNEWS.'listype'.$index] == 1) {
					$row = ($i + 1) % 2;
					$html .= '<tr class="row'.$row.'">';
					$html .= '<td><b>'.@constant( $GLOBALS[JNEWS.'listnames'.$index] ).'</b></td>';
//					$html .= '<td style="text-align: center; ">' .$GLOBALS[JNEWS.'act_totallist'.$index].'1 </td>';
					$html .= '<td style="text-align: center; ">' .$countOfLists[$index].' </td>';
					//if the value to be is less than 0 we will display 0
					if($GLOBALS[JNEWS.'act_totalmailing'.$index] > 0){
//						$html .= '<td style="text-align: center; ">' .$GLOBALS[JNEWS.'act_totalmailing'.$index].' </td>';
						$html .= '<td style="text-align: center; ">' .$countOfMailings[$index].' </td>';
					}else{
						$html .= '<td style="text-align: center; ">0</td>';
					}
//					$html .= '<td style="text-align: center; ">' .$GLOBALS[JNEWS.'totalmailingsent'.$index].' </td>';
					$html .= '</tr>';
//					$totalist = $totalist + $GLOBALS[JNEWS.'act_totallist'.$index];
					$totalist = array_sum($countOfLists);
//					$totalmail = $totalmail + $GLOBALS[JNEWS.'act_totalmailing'.$index];
					$totalmail = array_sum($countOfMailings);
					$totalsent = $totalsent + $GLOBALS[JNEWS.'totalmailingsent'.$index];
					if ($GLOBALS[JNEWS.'act_totalsubcribers'.$index]>$totalsub) $totalsub = $GLOBALS[JNEWS.'act_totalsubcribers'.$index];
				}
			}

			$html .= '<tr>';
			$html .= '<td style="background-color: #CCFFFF;"><b>'._JNEWS_CP_TOTAL.'</b></td>';
			$html .= '<td style="text-align: center; text-decoration: bold; background-color: #CCFFFF; border-top: 1px solid #000; ">' .$totalist.' </td>';
			$html .= '<td style="text-align: center; text-decoration: bold; background-color: #CCFFFF; border-top: 1px solid #000; ">' .$totalmail.' </td>';
//			$html .= '<td style="text-align: center; text-decoration: bold; background-color: #CCFFFF; border-top: 1px solid #000; ">' .$totalsent.' </td>';
			//$html .= '<td style="text-align: center; ">' .$totalsub.' </td>';
			$html .= '</tr>';
			echo $html;
			?>
			 </tbody></table>
			 <br />
			<?php

			if (class_exists('jNews_Auto')) echo jNews_Auto::showQueue();
			$tabs->endTab();

			$tabs->startTab( _JNEWS_MENU_SUBSCRIBERS , "acaControlPanel.Subscribers");
			$emailsearch = '';
      		$listId = 0;

			$limittotal = jNews_Subscribers::getSubscribersCount( $listId );
			$setLimitSubs = jnews::setLimitPagination($limittotal);

			?>
			<input type="hidden" name="listid" value="<?php echo $listId; ?>" />
			<input type="hidden" name="start" value="<?php echo $setLimitSubs->start; ?>" />
			<input type="hidden" name="limit" value="<?php echo $setLimitSubs->end; ?>" />
			<input type="hidden" name="listsearch" value="<?php echo $emailsearch;?>" />

			<div style="margin-top: 10px;"><?php echo jnews::setTop('', '', $setLimitSubs ); ?></div>

			<table class="<?php echo jnews::myTheme(); ?>">
				<thead>
					<tr>
						<th class="title">#</th>
						<th class="title" style="text-align: left;"><?php echo _JNEWS_INPUT_NAME; ?></th>
						<th class="title" style="text-align: left;"><?php echo _JNEWS_INPUT_EMAIL; ?></th>
						<th class="title" style="text-align: center;"><?php echo _JNEWS_SIGNUP_DATE; ?></th>
					</tr>
				</thead>
				<?php
				$subscribers = jNews_Subscribers::getSubscribers($setLimitSubs->start, $setLimitSubs->end, $emailsearch, $setLimitSubs->total, $listId, '', 0, 0, 'sub_dateD', 0, 0, null, 0 );
				$i = 0;
				foreach ($subscribers as $subscriber) {
					$i++;		
					if ( !jNews_Subscribers::validEmail($subscriber->email) ) continue;
					
				?>
				<tr class="row<?php echo ($i + 2) % 2;?>">
				<td><center><?php echo $i + $setLimitSubs->start; ?></center></td>
				<td style="text-align: left;">
				<a href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=subscribers&task=show&userid=<?php echo $subscriber->id; ?>" >
				<?php echo $subscriber->name; ?></a></td>
				<td style="text-align: left;"><?php echo $subscriber->email; ?></td>
				<td style="text-align: center;">
				<?php 
//					echo JHTML::_( 'date', $subscriber->subscribe_date,  '%x' ); 
					echo date( 'l, jS F Y h:i:s A', jnews::getNow( 0, true, $subscriber->subscribe_date ) ); 
				?>
				</td>
				</tr>
				<?php }  ?>
			</table>

			<?php

			$tabs->endTab();
			$tabs->startTab( _JNEWS_MENU_TAB_LIST , "acaControlPanel.Lists");
			$listsearch = '';
			$lists = jNews_Lists::getLists(0, 0, 1, '', false , false, false);
			$limittotal = count($lists);
			$setLimitLists = jnews::setLimitPagination($limittotal);
			?>

			<input type="hidden" name="listid" value="<?php echo $listId; ?>" />
			<input type="hidden" name="start" value="<?php echo $setLimitLists->start; ?>" />
			<input type="hidden" name="limit" value="<?php echo $setLimitLists->end; ?>" />
			<input type="hidden" name="listsearch" value="<?php echo $listsearch;?>" />

			<div style="margin-top: 10px;"><?php echo jnews::setTop('', '', $setLimitLists ); ?></div>

			<table class="<?php echo jnews::myTheme(); ?>">
				<thead>
				<tr>
					<th class="title">#</th>
					<th class="title" width="65%"  style="text-align: left;"><?php echo _JNEWS_LIST_NAME; ?></th>
					<th class="title" width="25%"  style="text-align: left;"><?php echo _JNEWS_LIST_TYPE; ?></th>
					<th class="title"  style="text-align: center;">ID</th>
				</tr>
				</thead>
			<?php
			$lists = jNews_Lists::getLists(0, 0, 1, 'listtypeA', false, false, false, false, false, $listsearch, $setLimitLists, 0, 0 );
			$i = 0;
			foreach ($lists as $list) {
				$i++;
				$link = 'index.php?option='.JNEWS_OPTION.'&act=mailing&task=show&listid='. $list->id;
				?>
				<tr class="row<?php echo ($i + 2) % 2;?>">
					<td><?php echo $i + $setLimitLists->start; ?></td>
					<td  style="text-align: left;">
						<a href="<?php echo $link; ?>">
							<?php echo $list->list_name;?></a>
					</td>
					<td  style="text-align: left;"><?php if( $list->list_type == 1 ) { echo _JNEWS_LIST; } else { echo _JNEWS_AR; }  ?></td>
					<td  style="text-align: center;"><?php echo $list->id; ?></td>
					</tr>
			<?php } ?>
			<tr>
				<th colspan="4">
				</th>
			</tr>
			</table>
			<?php $tabs->endTab(); ?>
			<?php $tabs->endPane(); ?>
			</form>
		</div>
		<div style="clear:both; float:left; margin-top: 10px;">
		<?php
		 	echo jnews::printM('ok', _JNEWS_SERVER_LOCAL_TIME.' : '. date( 'l, j F Y H:i:s', jnews::getNow( 0, true ) ) );	// - date('Z')
 		 ?>
		</div>
   <td>
   </tr>
   </table>
   </div>
</div>
<?php
	 }

	 public static function iconsPanel() {

		$my	= JFactory::getUser();

		echo '<div id="cpanel">';

	    $link = 'index.php?option='.JNEWS_OPTION.'&act=list&pg=20';
	    backHTML::quickiconButton( $link, 'header/lists.png', _JNEWS_MENU_LIST , false, 'admin' );

		$link = 'index.php?option='.JNEWS_OPTION.'&act=subscribers&pg=20';
   	    backHTML::quickiconButton( $link, 'header/subscribers.png', _JNEWS_MENU_SUBSCRIBERS, false, 'admin'  );

		$nb = explode(',', $GLOBALS[JNEWS.'activelist']);
		$size = sizeof($nb);

		for($i = 0; $i < $size; $i ++) {
			$index = $nb[$i];
			if ($GLOBALS[JNEWS.'listshow'.$index]>0
		 	AND $GLOBALS[JNEWS.'listype'.$index] == 1 AND $index != 2) {
				$link = 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype='.$index.'&pg=20'; //$index
				backHTML::quickiconButton( $link, 'header/'.$GLOBALS[JNEWS.'listlogo'.$index], @constant($GLOBALS[JNEWS.'listname'.$index]) , false, 'admin' );
			}
		}

		if($GLOBALS[JNEWS.'level'] > 1){
			$link = 'index.php?option='.JNEWS_OPTION.'&act=arlist&listype=2&pg=20';
   	    	backHTML::quickiconButton( $link, 'header/'.$GLOBALS[JNEWS.'listlogo2'], @constant($GLOBALS[JNEWS.'listnames2']), _JNEWS_MENU_SUBSCRIBERS, false, 'admin'  );
		}
		$link = 'index.php?option=com_media';
		backHTML::quickiconButton( $link, 'header/media_manager.png', _JNEWS_MENU_MEDIA , false, 'admin' );

		$link = 'index.php?option='.JNEWS_OPTION.'&act=statistics';
	
		if($GLOBALS[JNEWS.'level'] > 1){
			backHTML::quickiconButton( $link, 'header/statistics.png', _JNEWS_MENU_STATS , false, 'admin' );
		}else{
			backHTML::quickiconButton( $link, 'header/statistics.png', _JNEWS_MENU_STATS_REPORTS , false, 'admin' );
		}

		$link = 'index.php?option='.JNEWS_OPTION.'&act=queue&pg=20';
		backHTML::quickiconButton( $link, 'header/queue.png', _JNEWS_MENU_QUEUE , false, 'admin' );

		$link = 'index.php?option='.JNEWS_OPTION.'&act=templates&pg=20';
		backHTML::quickiconButton( $link, 'header/templates.png', _JNEWS_MENU_TEMPLATE , false, 'admin' );

		$link = 'index.php?option='.JNEWS_OPTION.'&act=configuration';
		backHTML::quickiconButton( $link, 'header/configuration.png', _JNEWS_MENU_CONF , false, 'admin' );

		$link = JNEWS_HOME_SITE."/index.php?option=com_jlinks&controller=redirect&link=support_jnews";
		backHTML::quickiconButton( $link, 'header/help.png', _JNEWS_MENU_HELP, true, 'Registered' );

		$link = 'http://demo.joobi.co/';
		backHTML::quickiconButton( $link, 'header/education_center.png', _JNEWS_MENU_LEARN , true, 'Registered' );

		$link = JNEWS_HOME_SITE."/index.php?option=com_jlinks&controller=redirect&link=live-chat";
		backHTML::quickiconButton( $link, 'header/live_support.gif', _JNEWS_MENU_LIVE_SUPPORT, true, 'Registered' );

		$link = 'index.php?option='.JNEWS_OPTION.'&act=about';
		backHTML::quickiconButton( $link, 'header/about.png', _JNEWS_MENU_ABOUT , false, 'Registered' );

		echo '</div>';

	 }


	 public static function controlPanelBottonStart($title , $img) {
       $mainframe = JFactory::getApplication();
		$doc6= JFactory::getDocument();
		$doc6->addStyleSheet( JNEWS_JPATH_LIVE . '/components/'.JNEWS_OPTION.'/css/jnews.css' );       
		?>
		<div align="center" class="centermain">
		<div id="jnews">
				<table class="panelheading" border="0">
				<?php if( $mainframe->isAdmin() ) { ?>
				<tr>
					<th class="jnews" style=" height: 55px; background: url(administrator/images/<?php echo $img; ?>) no-repeat left;">
					<?php echo  $title;?></th>
				</tr>
				<?php }else{ ?>
				<tr>
					<th class="jnews" style=" height: 55px; background: url(<?php echo JNEWSCOMP_AIMG.$img; ?>) no-repeat left;">
					<?php echo  $title;?></th>
				</tr>
				<?php } ?>
				</table>
				<table class="panelheading">
		            <tr>
		         	<td width="58%" valign="top">
			<div id="cpanel">
		<?php
	 }


	public static function controlPanelBottomEnd() {
		?>
			</div>
			</td>
		 	</tr>
		 	</table>
		 	</div></div>
	 	<?php
	 }
	public static function switchContentStart() {
			$switchcontentcss = 'div.jnewsmenucontainer {
							    cursor:hand;
							    cursor:pointer;
							    float:left;
							    margin: 1px;
							    border: 1px solid #000;
							    background-color: #000;
							}
							';
        	$doc = JFactory::getDocument();
         	$doc->addScript(JNEWS_URL_INCLUDES.'switchcontent.js');
         	$doc->addStyleDeclaration($switchcontentcss);
		?>
			<table width="100%">
				<tbody>
					<tr>
						<td>
	 	<?php
	 }
	 /**
	  * <p>Funtion to create the header/menu of the swicth content</p>
	  * @para string $title - the label/title of the header/menu
	  */
	 public static function switchContentMenu($title) {
		?>
		<div id="jnewscontent1-title" class="jnewsmenucontainer"><?php echo $title; ?></div><div style="clear:both;"/>
	 	<?php
	 }
	 /**
	  * <p>Function to create the html of the content</p>
	  */
	 public static function switchContent($html) {
		?>
			<div id="jnewscontent1" class="jnewswitch">
				<div><?php echo $html; ?></div>
			</div>
	 	<?php
	 }
	 public static function switchContentEnd() {
		?>
		<script type="text/javascript">
		var jNewsSwitchContent=new switchcontent("jnewswitch", "div") //Limit scanning of switch contents to just "div" elements
		jNewsSwitchContent.setStatus('<img src="http://www.roast-horse.com/tutorials/_tutorials/css_js_collapse_menu/_images/expandbutton-open.gif" /> ', '<img src="http://www.roast-horse.com/tutorials/_tutorials/css_js_collapse_menu/_images/expandbutton-close.gif" /> ')
		jNewsSwitchContent.setColor('white', 'blue')
		jNewsSwitchContent.setPersist(true)
		jNewsSwitchContent.collapsePrevious(true) //Only one content open at any given time
		jNewsSwitchContent.init()
		</script>
						</td>
					</tr>
				</tbody>
			</table>
	 	<?php
	 }
	public static function about(){

		echo '<table width="100%" align="left"><tr>';
		echo '<td>';
		echo '<form action="index.php" method="post" name="adminForm">';
		jnews::beginingOfTable('jnewstable');
		jnews::miseEnPage('Description', '', constant('_JNEWS_DESC_' .strtoupper($GLOBALS[JNEWS.'type'])));
		jnews::miseEnPage('Project Manager', '', 'Evelyn Lopez');
		jnews::miseEnPage('Developers','','Mary Michelle Piquero, Gerald R. Zalsos, Ebony Grace Ursua, Mary Grace Arabis, Gino Tayo, <br/>Glenn Jaime Chan, Adel Fomar Dulanas, Lalene Cababat, Jhen Bontilao');
		jnews::miseEnPage('Contributor','', 'Amir Ben Avraham, Christelle Gesset & Adrien Baborier');
		jnews::miseEnPage('Captcha Contributor','','Sorin Rosen');
		jnews::miseEnPage('Designer', '', 'Rochel Abrasaldo');
		jnews::miseEnPage('CB Integration', '', 'Mikko R&ouml;nkk&ouml;');
		jnews::miseEnPage('Add-ons', '', 'Kyle Witt');
		jnews::miseEnPage('Language Translation', '', '');
		jnews::miseEnPage('Brazilian_portuguese', '', 'Navsoft');
		jnews::miseEnPage('Danish', '', 'Joergen Floes');
		jnews::miseEnPage('Dutch', '', 'Tromp Wezelman & Bart Bevers');
		jnews::miseEnPage('Finnish', '', 'Tero Kankaanperä');
		jnews::miseEnPage('French', '', 'Christelle Gesset');
		jnews::miseEnPage('German', '', 'David Freund & Frank Jansen');
		jnews::miseEnPage('Hebrew', '', 'Eszter Somos & Adam Segev');
		jnews::miseEnPage('Hungarian', '', 'Zolt&aacute;n Varanka');
		jnews::miseEnPage('Italian', '', 'Maria Luisa Rossari');
		jnews::miseEnPage('Norwegian', '', '<a href="http://www.timeoffice.com" target="_blank">Irma Rustad</a>');
		jnews::miseEnPage('Polish', '', 'Andrzej Herzberg');
		jnews::miseEnPage('Portuguese', '', 'Ricardo Sim&otilde;es');
		jnews::miseEnPage('Simplified Chinese', '', '<a href="http://www.joomlagate.com" target="_blank">Baijianpeng</a>');
		jnews::miseEnPage('Spanish', '', '<a href="http://www.eaid.org" target="_blank">Jorge Pasco</a>');
		jnews::miseEnPage('Swedish', '', 'Janne Karlsson');
		jnews::miseEnPage('Turkish','','Anonymous');
		jnews::miseEnPage('CSS class to style attribute','','<a href="http://classes.verkoyen.eu/css_to_inline_styles" target="_NEW">http://classes.verkoyen.eu/css_to_inline_styles</a>');
		jnews::miseEnPage(' ', '', '   ');
		jnews::miseEnPage(_JNEWS_VERSION, '', jnews::version());
		jnews::miseEnPage(' ', '', '   ');
		jnews::miseEnPage(_JNEWS_DESC_HOME, '', '<a href="'.$GLOBALS[JNEWS.'homesite'].'" target="_blank">'.JNEWS_HOME_SITE.'</a>');
		jnews::miseEnPage(_JNEWS_MENU_HELP, '', '<a href="'.JNEWS_HOME_SITE.'/index.php?option=com_content&Itemid=67&catid=93&id=8241&lang=en&view=article" target="_blank">Documentation</a>');
		jnews::miseEnPage(_JNEWS_MENU_LIVE_SUPPORT, '', '<a href="'.JNEWS_HOME_SITE.'/live-support" target="_blank">Help</a>');
		jnews::miseEnPage(_JNEWS_MENU_LEARN, '', '<a href="http://demo.joobi.co/" target="_blank">Education Center</a>');
		jnews::miseEnPage('Copyrights', '', 'jNews <i>Your Communciation Partner</i>, &copy; Joobi Limited');
		jnews::miseEnPage( _JNEWS_LICENSE , '', '<a href="http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=single-license" target="_blank">&copy; Joobi Limited</a>');
		jnews::endOfTable();
		backHTML::formEnd();
		echo '</td>';
		echo '<td width="380px">';
		$logo='jnews_logo'. (!empty($GLOBALS[JNEWS.'type'])?'_'.strtolower($GLOBALS[JNEWS.'type']):'').'.png';
		echo '<a href="http://www.joobi.co" target="_blank"><img src="http://www.joobi.co/images/'.$logo.'" alt="jNews Logo" border="0" align="center" /></a>';
		echo '</td>';
		echo '</tr></table>';

	 }

	public static function installPRO($button='',$return=''){

		$doc = JFactory::getDocument();
       	$css = 'div.acaInstallList ul { list-style-image:url('.JNEWS_PATH_ADMIN_IMAGES.'bullet_01.png);padding-left:180px;}';
		$doc->addStyleDeclaration($css);
		$type = ( isset($GLOBALS[JNEWS.'type']) ) ? $GLOBALS[JNEWS.'type'] : 'News';
		$html = '';
		$html .= '<div style="float:left;padding-left: 30px; width:470px; margin-right: 10px;">';
		$logo = 'jnews_logo_'. strtolower( $type ).'.png';
		$html .= '<a href="http://www.joobi.co" target="_blank"><img style="padding-right: 20px;" src="http://www.joobi.co/images/'.$logo.'" alt="jNews Logo" border="0" align="center" /></a><br>';

		$html .= '<p style="font-size: 1em; text-align: justify;">'._JNEWS_INSTALL_DESC.'</p><br><br>';
		$html .= $button;
		$html .= $return;
		$html .= '</div>';
		$html .= '<div style="float:left; padding-left: 30px; width:470px;">';
		$proStore = '';
		$proStore = '<div style="height: 195px; margin-top: 20px;" class="acaInstallList"><img style="padding-right: 10px" src="http://www.joobi.co/images/jnews_pro.jpg" align="left">';
		$proStore .= '<br><b>'._JNEWS_THINK_PRO.'</b><br>';
		$proStore .= '<ul><li>'._JNEWS_THINK_PRO_1.'</li><li>'._JNEWS_THINK_PRO_2.'</li><li>'._JNEWS_THINK_PRO_3.'</li><li>'._JNEWS_THINK_PRO_4.'</li><li>'._JNEWS_THINK_PRO_5.'</li><li>'._JNEWS_THINK_PRO_6.'</li></ul>';
		$proStore .= '<a target="_blank" href="http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=jNewsPro">';
		$proStore .= '<div style="background-image: url('.JNEWS_PATH_ADMIN_IMAGES.'btn_white.png); background-repeat:no-repeat; height: 41px; width: 131px; border: none; float:right; padding:10px 0 0 20px; ">';
		$proStore .= '<span style="font-size: 13px; color:#333"><b>Click Here</b></span></div></a></div>';
		$html .= $proStore;
		$html .= '</div>';

		echo $html;

	 }

	public static function installPlus($button='',$return=''){
		$doc = JFactory::getDocument();
        $doc->addStyleSheet(JNEWS_JPATH_LIVE.'/components/'.JNEWS_OPTION.'/modules/css/gray.css');

		$css = 'div.acaInstallList ul { list-style-image:url('.JNEWS_PATH_ADMIN_IMAGES.'bullet_01.png);padding-left:180px;}';
		$doc->addStyleDeclaration($css);
		$type = ( isset($GLOBALS[JNEWS.'type']) ) ? $GLOBALS[JNEWS.'type'] : 'News';
		$html = '';
		$html .= '<div style="float:left;padding-left: 30px; width:470px; margin-right: 10px;">';
		$logo = 'jnews_logo_'. strtolower( $type ).'.png';
		$html .= '<a href="http://www.joobi.co" target="_blank"><img style="padding-right: 20px;" src="http://www.joobi.co/images/'.$logo.'" alt="jNews Logo" border="0" align="center" /></a><br>';
		$html .= '<p style="font-size: 1.3em; text-align: justify;">'._JNEWS_INSTALL_DESC.'</p><br><br><br><br>';
		$html .= $button;
		$html .= $return;
		$html .= '</div>';

		$plusStore = '<div style="height: 195px;" class="acaInstallList"><img style="padding-right: 10px" alt="jNews PLUS" src="http://www.joobi.co/images/jnews_plus.jpg" align="left">';
		$plusStore .= '<br><b>'._JNEWS_THINK_PLUS.'</b><br>';
		$plusStore .= '<ul><li>'._JNEWS_THINK_PLUS_1.'<li>'._JNEWS_THINK_PLUS_2.'<li>'._JNEWS_THINK_PLUS_3.'<li>'._JNEWS_THINK_PLUS_4.'<br></ul>';
		$plusStore .= '<a target="_blank" href="http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=jNewsPLus">';
		$plusStore .= '<div style="background-image: url('.JNEWS_PATH_ADMIN_IMAGES.'btn_white.png); background-repeat:no-repeat; height: 41px; width: 131px; border: none; float:right; padding:10px 0 0 20px; ">';
		$plusStore .= '<span style="font-size: 13px; color:#333"><b>Click Here</b></span></div></a></div>';

		$proStore = '';
		$proStore = '<div style="height: 195px; margin-top: 20px;" class="acaInstallList"><img style="padding-right: 20px;" alt="jNews PRO" src="http://www.joobi.co/images/jnews_pro.jpg" align="left">';
		$proStore .= '<br><b>'._JNEWS_THINK_PRO.'</b><br>';
		$proStore .= '<ul><li>'._JNEWS_THINK_PRO_1.'</li><li>'._JNEWS_THINK_PRO_2.'</li><li>'._JNEWS_THINK_PRO_3.'</li><li>'._JNEWS_THINK_PRO_4.'</li><li>'._JNEWS_THINK_PRO_5.'</li><li>'._JNEWS_THINK_PRO_6.'</li></ul>';
		$proStore .= '<a target="_blank" href="http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=jNewsPro">';
		$proStore .= '<div style="background-image: url('.JNEWS_PATH_ADMIN_IMAGES.'btn_white.png); background-repeat:no-repeat; height: 41px; width: 131px; border: none; float:right; padding:10px 0 0 20px; ">';
		$proStore .= '<span style="font-size: 13px; color:#333"><b>Click Here</b></span></div></a></div>';

		$html .= $plusStore;
		$html .= $proStore;
		$html .= '</div>';
		echo $html;


	 }

	 public static function showStatistics($listStats, $mailing, $globalStats, $html_read, $html_unread, $text, $listId) {


?>
<form action="index.php" method="post" name="adminForm">
<table class="<?php echo jnews::myTheme(); ?>">
	<tr>
		<th colspan="2" class="title"><?php echo _JNEWS_MAILING_LIST_DETAILS; ?>:</th>
	</tr>
	<tr>
		<td width="200" align="left"><?php echo @constant( $GLOBALS[JNEWS.'listname'.$listStats->list_type] ); ?>:</td>
		<td align="left"><?php echo $listStats->list_name; ?></td>
	</tr>
	<tr>
		<td width="200" align="left"><?php echo _JNEWS_DESCRIPTION; ?>:</td>
		<td align="left"><?php echo $listStats->list_desc; ?></td>
	</tr>
	<tr>
		<td width="200" align="left"><?php echo _JNEWS_LIST_ISSUE; ?>:</td>
		<td align="left"><?php echo $mailing->issue_nb; ?></td>
	</tr>
	<tr>
		<td width="200" align="left"><?php echo _JNEWS_SUBJECT; ?>:</td>
		<td align="left"><?php echo $mailing->subject;?></td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<?php
		  $stat_tabs = new MosTabsjNews(0);

		  $stat_tabs->startPane('acaStats');
		  $stat_tabs->startTab(_JNEWS_GLOBALSTATS, 'acaStats');
?>
	<table width="100%" cellpadding="4" cellspacing="0" border="0" align="center" class="<?php echo jnews::myTheme(); ?>">
<?php

		 if($listStats->html == 1) {

?>
		<tr>
			<td width="200" align="left"><?php echo _JNEWS_SEND_IN_HTML_FORMAT; ?>:</td>
			<td align="left"><?php echo $globalStats->html_sent; ?></td>
		</tr>
		<tr>
			<td width="200" align="left"><?php echo _JNEWS_VIEWS_FROM_HTML; ?>:</td>
			<td align="left"><?php echo $globalStats->html_read; ?></td>
		</tr>
<?php
		 }
?>
		<tr>
			<td width="200" align="left"><?php echo _JNEWS_SEND_IN_TEXT_FORMAT; ?>:</td>
			<td align="left"><?php echo $globalStats->text_sent; ?></td>
		</tr>
	</table>
<?php
		  $stat_tabs->endTab();
		  $stat_tabs->startTab(_JNEWS_DETAILED_STATS, 'acaStats.detail');
?>

			<table width="100%" cellpadding="4" cellspacing="0" border="1" align="center" class="<?php echo jnews::myTheme(); ?>">
				<thead>
					<tr>
						<th class="title"><?php echo _JNEWS_HTML_READ; ?></th>
						<th class="title"><?php echo _JNEWS_HTML_UNREAD; ?></th>
						<th class="title"><?php echo _JNEWS_TEXT_ONLY_SENT; ?></th>
					</tr>
				</thead>
					<tr>
						<td valign="top" align="left" width="33%">
<?php

		 if (sizeof($html_read) > 0) {

			 foreach ($html_read as $htmlread){
				 echo $htmlread->name . ' (' . $htmlread->email . ')<br />';
			 }
		 }
?>
						</td>
						<td valign="top" align="left" width="33%">
<?php

		 if (sizeof($html_unread) > 0) {

			 foreach ($html_unread as $htmlunread){
				 echo $htmlunread->name . ' (' . $htmlunread->email . ')<br />';
			 }
		 }
?>
						</td>
						<td valign="top" align="left" width="33%">
<?php

		 if (sizeof($text) > 0) {

			 foreach ($text as $atext){
				 echo $atext->name . ' (' . $atext->email . ')<br />';
			 }
		 }
?>
						</td>
					</tr>
				</table>

<?php
		  $stat_tabs->endTab();
		  $stat_tabs->endpane();
?>
   	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="act" value="statistics" />
	<input type="hidden" name="listid" value="<?php echo $listId; ?>" />
	<input type="hidden" name="mailingid" value="<?php echo $mailing->mailing_id; ?>" />
	<input type="hidden" name="tab" value="<?php echo $tab; ?>" />
</form>
<?php
	 }


	public static function showCompsList($update) {

		$link = jNews_Tools::completeLink('option='.JNEWS_OPTION.'&act=subscribers&task=import');
		?>
		</table>
		If you want to import a list of subscribers from a file, <a href="<?php echo $link; ?>">please click here.</a>
		<br/>
		<?php
		if ($update->otherComponent) {
				?>
				<table width="100%" cellpadding="4" cellspacing="0" border="0" align="left" class="adminlist">
					<tr>
						<th colspan="4"><?php echo _JNEWS_CHECK_COMP; ?></th>
					</tr>
				<?php

				 foreach ($update->otherComponent as $component) {
					$moreLink = '<a href="'.$component->homePath.'" traget="_blank">'. _JNEWS_MORE_INFO . '</a>';
					$tryitLink = '<a href="'.$component->download.'" traget="_blank">'. _JNEWS_TRY_IT . '</a>';
				?>
					<tr>
						<td>
						<?php
							echo $component->longVersion;
							echo '<br />'.$component->desc;
						 ?>
						</td>
					<td>
					<?php
						echo $tryitLink;
					 ?>
					</td>
					<td>
					<?php
						echo $moreLink;
					 ?>
					</td>
					</tr>
				<?php
				}
				?>
				</table>
				<?php
		}
	}


	public static function showUpdateOptions($update) {


 if ((!empty($update->needAdd)) || (!empty($update->needRemove)) || (!empty($update->needUpdate))) {
		?>
		<form action="index.php" method="post" name="adminForm">
		<table width="100%" cellpadding="4" cellspacing="0" border="0" align="left" class="adminlist">
			<tr>
				<th colspan="4"><?php echo _JNEWS_NEED_UPDATED; ?></th>
			</tr>
			<tr class="row0">
				<td>&nbsp;</td>
				<td><?php echo _JNEWS_FILENAME; ?></td>
				<td><center><?php echo _JNEWS_CURRENT_VERSION; ?></center></td>
				<td><center><?php echo _JNEWS_NEWEST_VERSION; ?></center></td>
			</tr>
		<?php

		 	 foreach ($update->needUpdate as $file) {
		?>
			<tr>
				<td><input type="checkbox" name="needUpdated[]" value="<?php echo $file; ?>" checked="checked" class="inputbox" /></td>
				<td><?php echo $file; ?></td>
				<td><center><?php echo $update->local[$file]; ?></center></td>
				<td><center><?php echo $update->globalVersion[$file]; ?></center></td>
			</tr>
		<?php
		 	 }
		?>
			<tr>
				<th colspan="4"><?php echo _JNEWS_NEED_ADDED; ?></th>
			</tr>
			<tr class="row0">
				<td>&nbsp;</td>
				<td><?php echo _JNEWS_FILENAME; ?></td>
				<td><center><?php echo _JNEWS_CURRENT_VERSION; ?></center></td>
				<td><center><?php echo _JNEWS_NEWEST_VERSION; ?></center></td>
			</tr>
		<?php

		 	 foreach ($update->needAdd as $file) {
		?>
			<tr>
				<td><input type="checkbox" name="needAdded[]" value="<?php echo $file; ?>" checked="checked" class="inputbox" /></td>
				<td><?php echo $file; ?></td>
				<td>&nbsp;</td>
				<td><center><?php echo $update->globalVersion[$file]; ?></center></td>
			</tr>
		<?php
		 	 }
		?>
			<tr>
				<th colspan="4"><?php echo _JNEWS_NEED_REMOVED; ?></th>
			</tr>
			<tr class="row0">
				<td>&nbsp;</td>
				<td><?php echo _JNEWS_FILENAME; ?></td>
				<td><center><?php echo _JNEWS_CURRENT_VERSION; ?></center></td>
				<td><center><?php echo _JNEWS_NEWEST_VERSION; ?></center></td>
			</tr>
		<?php

		 	 foreach ($update->needRemove as $file) {
		?>
			<tr>
				<td><input type="checkbox" name="needRemoved[]" value="<?php echo $file; ?>" checked="checked" class="inputbox" /></td>
				<td><?php echo $file; ?></td>
				<td><center><?php echo $update->local[$file]; ?></center></td>
				<td>&nbsp;</td>
			</tr>
		<?php
		 	 }
		?>
		</table>
			<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
			<input type="hidden" name="act" value="update" />
		   	<input type="hidden" name="boxchecked" value="0" />
			<input type="hidden" name="task" value="doUpdate" />
			<input type="hidden" name="updatepath" value="<?php echo strtolower( $update->local['component'] . DS . $update->local['type'] ) . DS . $update->globalVersion['version'] . DS ; ?>" />
		</form>
		<br />
		<?php
		 }

}


	public static function _upgrade() {
		$config['news1'] = false;
		$config['news2'] = false;
		$config['news3'] = false;

		$exist = jnews::checkExisting();
		if (!empty($exist['news1'])) $config['news1'] = true;
		if (!empty($exist['news2'])) $config['news2'] = true;
		if (!empty($exist['news3'])) $config['news3'] = true;

		$mess ='';
		if ($config['news1'] OR $config['news2'] OR $config['news3']) {
		$mess = jnews::printM('blue' , _JNEWS_UPGRADE_MESS). '<br />';
		}

		if ($config['news1']) {
			$mess .=  '<a href="index.php?option='.JNEWS_OPTION.'&act=update&task=new1">';
			$mess .= jnews::printM('ok' ,_JNEWS_UPGRADE_FROM.'Anjel');
			$mess .=  '</a><br />';
		}

		if ($config['news2']) {
			$mess .=  '<a href="index.php?option='.JNEWS_OPTION.'&act=update&task=new2">';
			$mess .= jnews::printM('ok' ,_JNEWS_UPGRADE_FROM.'Letterman');
			$mess .=  '</a><br />';
		}

		if ($config['news3']) {
			$mess .=  '<a href="index.php?option='.JNEWS_OPTION.'&act=update&task=new3">';
			$mess .= jnews::printM('ok' ,_JNEWS_UPGRADE_FROM.'YaNC');
			$mess .=  '</a><br />';
		}
		echo $mess;
	}


	public static function quickiconButton( $link, $image, $text, $external=false, $accessLevel='' , $frontEnd=false) {
		if ( jnews::checkPermissions($accessLevel)) {
			if ( $frontEnd ) {
			    $link = JRoute::_($link);
			}
		?>
		<div style="float:left;">
			<div class="icon">
				<a href="<?php echo $link; ?>" <?php if ($external) echo 'target="_blank"'; ?>>
				<?php jNews_Tools::showIcon($image,$text); ?>
					<span><?php echo $text; ?></span>
				</a>
			</div>
		</div>
		<?php
		}
	}
 }
