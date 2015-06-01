<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class jNews_ListsHTML {

	 public static function showListingLists($lists, $action, $task, $forms, $show, $listsearch='', $limit=0, $setLimit=null, $totalSubs=null, $setSort=null, $totalUnSubs=null ) {
		$Itemid= JRequest::getInt('Itemid');

		$mainframe = JFactory::getApplication();
		$my	= JFactory::getUser();

		$loggedin = false;
		if ($my->id >0) {
			$loggedin = true;
		 }

		if(empty($Itemid) AND !$mainframe->isAdmin() and !empty($GLOBALS[JNEWS.'itemidAca'])){
			$Itemid = $GLOBALS[JNEWS.'itemidAca'];
		}

		if(!empty($Itemid)){
			$item = '&Itemid=' . $Itemid;
		}else{
			$item ='';
		}

		echo $forms['main'];

		// top portion before the table list
		if( $mainframe->isAdmin() ) {
			// for search
			$toSearch = new stdClass;
			$toSearch->listsearch = $listsearch;
			$toSearch->id = 'listsearch';

			echo jnews::setTop( $toSearch, null, $setLimit /*, $filter*/ );
		}

		echo '<table class="' . jnews::myTheme() . '"><thead><tr>';

		echo '<th width="2%" class="title">#</td>';
		if ($show['select']) echo '<th width="3%" style="text-align:center;" class="title"></th>' ;
		echo '<th width="30%" class="title"><center>'. JHTML::_('grid.sort',  _JNEWS_LIST_NAME , 'list_name', $setSort->orderDir,$setSort->orderValue).'</th>';
		if ($show['sender']) echo '<th width="20%" class="title"><center>'. JHTML::_('grid.sort',  _JNEWS_LIST_SENDER , 'sendername', $setSort->orderDir,$setSort->orderValue) . '</center> </th>' ;
		if ($show['sender_email']) echo ' <th width="15%" class="title"><center>'.  _JNEWS_SENDER_EMAIL . '</center></th>';
		if ($show['mailings_link']) echo '<th width="17%" class="title"><center>' . _JNEWS_MENU_MAILING_TITLE . '</center></th>' ;
		if ($show['mailings_sub']) {
			echo '<th width="17%" class="title"><center>' . _JNEWS_SUBSCRIBER_CONFIG . '</center></th>';
			echo '<th width="17%" class="title"><center>' . _JNEWS_UNSUBSCRIBER_CONFIG . '</center></th>';
		}
		if ($show['visible']) echo '<th width="5%" class="title"><center>' . JHTML::_('grid.sort',  _JNEWS_VISIBLE , 'hidden', $setSort->orderDir,$setSort->orderValue). '</center></th>' ;
		if ($show['published']) echo '<th width="5%" class="title"><center>'.JHTML::_('grid.sort',  _JNEWS_PUBLISHED , 'published', $setSort->orderDir,$setSort->orderValue).  '</center></th>' ;
		if ($show['buttons']) {
			if($GLOBALS[JNEWS.'allow_unregistered'] OR $loggedin){
				echo '<th class="title" width="90"><center>' .  _JNEWS_SUBSCRIB . '</center></th>' ;
			}
			if ($GLOBALS[JNEWS.'show_archive']=='1') {
				echo '<th class="title" width="90"><center>' .  _JNEWS_VIEW_ARCHIVE . '</center></th>' ;
			}
		}
		if ($show['id']) echo '<th width="2%" class="title">'.JHTML::_('grid.sort', 'ID' , 'id', $setSort->orderDir,$setSort->orderValue).'</th>';
		echo '</tr></thead>';
		$i = 0;
		$ctr= 0; //total subs
		
		if ( !empty($lists) ) {
	 	
		foreach ($lists as $list) {
			$i++;
			if ( $list->list_type == 1 or $list->list_type == 7 ) {//mariap
				$linkArchive = 'option='.JNEWS_OPTION.'&act=mailing&listid=' .$list->id . '&listype=' .$list->list_type .'&task=archive' . $item ;
			} else {
				$linkArchive = '#';
			}

		?>
		<tr class="row<?php echo ($i + 2) % 2; ?>">
			<?php $num = ( isset($setLimit->start) ) ? $i + $setLimit->start : $i; echo '<td width="2%" class="title"><center>'.$num.'</center></td>'; ?>
			<?php 	if ($show['select']) { ?>
			<td><center><input type="radio" name="listid" value="<?php echo $list->id; ?>" onclick="isChecked(this.checked);" /></center></td>
			<?php }

			if ($show['index'] == 'index') {
				if ( $mainframe->isAdmin() ){
					if ( jnews::checkPermissions('admin' ) ) {
						$link = 'option='.JNEWS_OPTION.'&act=' . $action . '&task=' .$task . '&listid=' . $list->id . $item;
					} else {
						$link = $linkArchive;
					}
				}else{
					if ( jnews::checkPermissions( 'admin' ) ) {
						$link = 'option='.JNEWS_OPTION.'&act=' . $action . '&task=' .$task . '&listid=' . $list->id.'&listype='.$list->list_type. $item;
					} else {
						$link = $linkArchive;
					}
				}
				$link = jNews_Tools::completeLink($link,false);
			} else {
				if ($mainframe->isAdmin()){
					$link = 'option='.JNEWS_OPTION.'&act=' . $action . '&task=' .$task . '&listid=' . $list->id;
					$link = jNews_Tools::completeLink($link);
				}else{
					$link = 'option='.JNEWS_OPTION.'&act=' . $action . '&task=' .$task . '&listid=' . $list->id.'&listype='.$list->list_type;
					$link = jNews_Tools::completeLink($link);
				}
			}
			?>
			<td>
				<span class="aca_letter_names" <?php if ($link == "#" OR $link == "administrator/#" ){echo " onclick='return false;' ";} ?>>
				<?php
					echo jNews_Tools::toolTip( $list->list_desc , $list->list_name, '' , '',  $list->list_name , $link, 1 );
				 ?>
				</span>
			</td>

			<?php
			if ($show['sender']) echo '<td>' . $list->sendername . '</td>';
			if ($show['sender_email']) echo ' <td width="20%" class="title">'.  $list->senderemail . '</td>';
			if ($show['mailings_link']) {

				$ltype = ( isset($list->list_type) && ( $list->list_type == 2 ) ) ? 2 : 1;

				if ($show['index'] == 'index') {
					$link =  'option='.JNEWS_OPTION.'&act=mailing&task=show&listid=' . $list->id;
					if( !empty($ltype) ) $link .= '&listype='. $ltype;
					$link .= $item;
					$link = jNews_Tools::completeLink($link,false);
				} else {
					$link = 'option='.JNEWS_OPTION.'&act=mailing&task=show&listid=' . $list->id;
					if( !empty($ltype) ) $link .= '&listype='. $ltype;
					$link = jNews_Tools::completeLink($link);
				}

				//for autoresponder list only we need to filter the autoresponders to their associated list
				if($action=='arlist')
					$link = 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype=2&listid=' . $list->id;//listType to listype
			 ?>
				<td><center><a href="<?php echo $link; ?>"> <?php echo _JNEWS_MALING_EDIT_VIEW; ?></a></center></td>
			<?php }
			if ($show['mailings_sub']) {

				if ($show['index'] == 'index') {
					$link = 'option='.JNEWS_OPTION.'&act=subscribers&listid=' . $list->id . '&subtype=1' . $item;
					$link = jNews_Tools::completeLink($link,false);
					$linkUnsubscribed = 'option='.JNEWS_OPTION.'&act=subscribers&listid=' . $list->id . '&subtype=2' . $item;
					$linkUnsubscribed = jNews_Tools::completeLink($linkUnsubscribed,false);
				} else {
					$link = 'option='.JNEWS_OPTION.'&act=subscribers&listid=' . $list->id . '&subtype=1';
					$link = jNews_Tools::completeLink($link);
					$linkUnsubscribed = 'option='.JNEWS_OPTION.'&act=subscribers&listid=' . $list->id . '&subtype=2';
					$linkUnsubscribed = jNews_Tools::completeLink($linkUnsubscribed);
				}
			 ?>
				<td><center><a href="<?php echo $link; ?>">
				<?php
					echo _JNEWS_SUBCRIBERS_VIEW. " ( $totalSubs[$ctr] ) ";
				?>
					</center>
				</td>
				<td><center><a href="<?php echo $linkUnsubscribed; ?>">
				<?php
					echo _JNEWS_UNSUBCRIBERS_VIEW. " ( $totalUnSubs[$ctr] ) ";	// $totalSubs[$ctr]
				?>
					</center>
				</td>
			<?php
				$ctr++; 
			}
			if ($show['visible']) {

				 if ($list->hidden == 1) {
					 $img = '16/status_g.png';
					 jnews::getLegend( 'status_g.png', _JNEWS_VISIBLE .'/'. _JNEWS_TEMPLATE_PUBLISH );
				 } else {
					 $img = '16/status_r.png';
					 jnews::getLegend( 'status_r.png',_JNEWS_NOTVISIBLE .'/'. _JNEWS_UNPUBLISHED );
			}
			?>
			<td height="20"><center>
			<?php if($mainframe->isAdmin()){ ?>
				<a href="<?php
				$act = JRequest::getVar( 'act', 'list', '', 'WORD' );
				echo jnews::createToggleLink( $act, 'hidden', 'listid' , $list->id ); ?>"> <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$img; ?>" width="12" height="12" border="0" alt="" /> </a>
			<?php }else{ ?>
				<img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$img; ?>" width="12" height="12" border="0" alt="" />
			<?php } ?>
			</center></td>
			<?php }
				if ($show['published']) {
			 ?>
			<td align="center"><center>
				<?php
						if ($list->published == 1) {
							$img = '16/status_g.png';
						  	$alt = 'Published';
						  	jnews::getLegend( 'status_g.png', _JNEWS_VISIBLE .'/'. _JNEWS_TEMPLATE_PUBLISH );
						} else if ($list->published == 2) {
							$img = '16/status_y.png';
							  $alt = 'Scheduled';
							  jnews::getLegend( 'status_y.png', _JNEWS_SCHEDULED );
						} else {
							$img = '16/status_r.png';
							 $alt = 'Unpublished';
							 jnews::getLegend( 'status_r.png', _JNEWS_NOTVISIBLE .'/'. _JNEWS_UNPUBLISHED );
						}
					$status = ( !empty($list->published) && ( $list->published == 1 ) ) ? 'unpublish' : 'publish';
				if($mainframe->isAdmin()){ ?>
					<a href="<?php 
					$act = JRequest::getVar( 'act', 'list', '', 'WORD' );
					echo jnews::createToggleLink( $act, $status, 'listid' , $list->id, 'togle' );  ?>"> <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES. $img ;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /> </a>
				<?php }else{ ?>
					 <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
				<?php } ?>
			</center></td>
			<?php }

			?>


	<?php
		if ($show['buttons']) {
			$backendLink = $show['index'] == 'index' ? false : true;

			if($GLOBALS[JNEWS.'allow_unregistered'] OR $loggedin){

				$link = 'index.php?option='.JNEWS_OPTION.'&act=subone&listid=' .$list->id . $item ;
				$link = JRoute::_($link);

				$img = 'folder_add_f2.png';
				echo '<td align="center" height="24"><center>';
				echo '<a href="' . $link. '" >'."\n\r" ;
				echo '<img src="'. JNEWS_JPATH_LIVE .'/components/' .JNEWS_OPTION. '/images/' . $img. '" width="20" height="20" border="0" alt="" /></a></center></td>'."\n\r" ;
			}
			if (($list->list_type == 1 or $list->list_type == 7/*changed from 2 to 7*/) && $GLOBALS[JNEWS.'show_archive']=='1' ) {

				$linkArchive = 'option='.JNEWS_OPTION.'&act=mailing&listid=' .$list->id . '&listype=' .$list->list_type .'&task=archive' . $item;
				$linkArchive = jNews_Tools::completeLink($linkArchive,true);

				$img = 'move_f2.png';
				echo '<td height="24"><center>';
				echo '<a href="' . $linkArchive. '" >'."\n\r" ;
				echo '<img src="'. JNEWS_JPATH_LIVE .'/components/' .JNEWS_OPTION. '/images/' . $img. '" width="20" height="20" border="0" alt="'._JNEWS_VIEW_ARCHIVE.'" /></a></center></td>'."\n\r" ;
			} elseif($GLOBALS[JNEWS.'show_archive']=='1'){//ifthe list is an autoresponder don't need to show the archives
				echo '<td height="24"><center>-</center></td>'."\n\r";
			}
		}
		if ($show['id']) echo '<td width="2%" class="title"><center>' . $list->id . '</center></td>';
		echo '	</tr>'."\n\r";

	}
	
	}
	
	echo '</table>';

	echo '<br />';
	echo jnews::setLegend();
}

	 public static function prepList($listEdit, $listType) {

		$lists = array();
		$jour = array();

		$listEdit->unsubscribesend = ( isset($listEdit->unsubscribesend) ) ? $listEdit->unsubscribesend : '';
		$listEdit->unsubscribenotifyadmin = ( isset($listEdit->unsubscribenotifyadmin) ) ? $listEdit->unsubscribenotifyadmin : '';

		$mainframe = JFactory::getApplication();

		$my	= JFactory::getUser();
		$acl = JFactory::getACL();

		$jour[] = JHTML::_('select.option','1800','Every 30 minutes');
		$jour[] = JHTML::_('select.option','3600','Every hour');
		$jour[] = JHTML::_('select.option','43200','Every 12 hours');
		$jour[] = JHTML::_('select.option', '1', _JNEWS_AUTO_DAY_CH1 );
		$jour[] = JHTML::_('select.option', '3', _JNEWS_AUTO_DAY_CH3 );
		$jour[] = JHTML::_('select.option', '5', _JNEWS_AUTO_DAY_CH5 );
		$jour[] = JHTML::_('select.option', '6', _JNEWS_AUTO_DAY_CH6 );
		$jour[] = JHTML::_('select.option', '7', _JNEWS_AUTO_DAY_CH7 );
		$jour[] = JHTML::_('select.option', '8', _JNEWS_AUTO_DAY_CH8 );
		$jour[] = JHTML::_('select.option', '9', _JNEWS_AUTO_DAY_CH9 );

		$auto_option[] = JHTML::_('select.option', '0', _JNEWS_AUTO_OPTION_NO_SYNC );
		$auto_option[] = JHTML::_('select.option', '1', _JNEWS_AUTO_OPTION_NEW );
		
		//we get all of the templates available and published
		$templates = jNews_Templates::getTemplatesForPicklist();
		$list_templates = array();
		foreach($templates as $oneTemplate){
			$list_templates[] = JHTML::_('select.option', $oneTemplate->template_id, $oneTemplate->name );
		}//enfor
		
		$templateID = ( !empty( $listEdit->template ) ) ? $listEdit->template : '';
		$lists['list_templates'] = JHTML::_('select.genericlist', $list_templates, 'templatelist', 'class="inputbox"','value', 'text', $templateID );

		if($mainframe->isAdmin()){
			if($listEdit->new_letter == 1 && $listType <> 2) $auto_option[] = JHTML::_('select.option', '2', _JNEWS_AUTO_OPTION_ALL );
		}

		$lists['delay_min'] = JHTML::_('select.genericlist', $jour, 'delay_min', 'class="inputbox" size="1"', 'value', 'text', $listEdit->delay_min );

		$lists['auto_add'] = JHTML::_('select.genericlist', $auto_option,'auto_add', 'class="inputbox"','value', 'text',$listEdit->auto_add);

		$lists['published'] = JHTML::_('select.booleanlist', 'published', 'class="inputbox"', $listEdit->published );
		$lists['hidden'] = JHTML::_('select.booleanlist', 'hidden', 'class="inputbox"', $listEdit->hidden );

		$lists_option = jNews_ListType::getListOption(2);
		$lists['list_type'] = jNews_ListsHTML::aca_radioList($lists_option,'list_type', 'class="inputbox"',$listEdit->list_type);

		$lists['html_mailings'] = JHTML::_('select.booleanlist', 'html', 'class="inputbox"', $listEdit->html );
		$lists['unsubscribesend'] = JHTML::_('select.booleanlist', "unsubscribesend" , 'class="inputbox"', $listEdit->unsubscribesend );
		$lists['subnotifysend'] = JHTML::_('select.booleanlist', "subnotifysend" , 'class="inputbox"', $listEdit->subnotifysend );
		$lists['unsubscribenotifyadmin'] = JHTML::_('select.booleanlist', "unsubscribenotifyadmin" , 'class="inputbox"', $listEdit->unsubscribenotifyadmin );
		$lists['footer'] = JHTML::_('select.booleanlist', "footer" , 'class="inputbox"', $listEdit->footer );

		return $lists;

	}


	 public static function editList($listEdit, $forms, $show, $listType=1) {
	 	if ( !class_exists('JHtmlBehavior') ) jimport('joomla.html.html.behavior');
	 	
	 	$lists = jNews_ListsHTML::prepList($listEdit, $listType);
		$html = $listEdit->html;
		if ($listEdit->footer=='0') $show['unsusbcribe'] = false;
	 	echo $forms['main'];

		$config_tabs = new MosTabsjNews(0);
		 $config_tabs->startPane('acaListEdit');
		 $config_tabs->startTab(_JNEWS_LIST_T_GENERAL, 'acaListEdit.general');
		jNews_ListsHTML::description($listEdit, $lists, $show, $html, $listType);
		$config_tabs->endTab();

		if ($show['unsusbcribe'] OR $show['auto_subscribe'] OR $GLOBALS[JNEWS.'require_confirmation']
		 OR ($show['email_unsubcribe'] AND class_exists('jNews_Auto')) ) {
		$config_tabs->startTab(_JNEWS_LIST_T_SUBSCRIPTION, 'acaListEdit.subscriber');
		jNews_ListsHTML::subscription($listEdit, $lists, $show, $html, $listType);
		$config_tabs->endTab();
		}

		if( $GLOBALS[JNEWS.'level'] > 2 ){

			//list notifications
			if ($show['unsusbcribe'] OR $show['auto_subscribe'] OR $GLOBALS[JNEWS.'require_confirmation']
			 OR ($show['email_unsubcribe'] AND class_exists('jNews_Auto')) ) {
				$config_tabs->startTab(_JNEWS_LIST_T_ADMIN_NOTIFICATION, 'acaListEdit.subscriber');
				jNews_ListsHTML::notification($listEdit, $lists, $show, $html);
				$config_tabs->endTab();
			}

		}

		if ( class_exists('jNews_Auto') && $show['access'] ) {
			$config_tabs->startTab('Front-end Management', 'acaListEdit.pro');
			jNews_ListsHTML::frontendManagement($listEdit, $lists, $show, $html);
			$config_tabs->endTab();
		}

		if ( $listType=='2' AND class_exists('jNews_Autoresponder') ){
			$config_tabs->startTab(_JNEWS_AUTORESP, 'acaListEdit.autorespond');
			jNews_Autoresponder::edit($listEdit, $lists, $show, $listEdit->html );
			$config_tabs->endTab();
		 }

		$config_tabs->endPane();
		echo JHTML::_('behavior.keepalive');
	 }


	public static function description($listEdit, $lists, $show, $html, $listType) {

	$editor = JFactory::getEditor();
	static $db=null;
	if( !isset( $db ) )$db = JFactory::getDBO();
	?>
	<fieldset class="jnewscss">
	<table class="jnewstable" width="100%"  cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
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
	<?php if ($show['hide']) {?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_MAILING_VISIBLE;
					$title = _JNEWS_VISIBLE_FRONT;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			<td><?php echo $lists['hidden']; ?></td>
			</tr>

	<?php } else { echo '<input type="hidden" name="hidden" value="' .$listEdit->hidden .'" />'; } ?>
	 		<?php
		if($listType == 2){
			?>
	 	<tr>
	 		<td width="185%" class="key">
	 			<span class="editlinktip">
	 			<?php
	 				$tip = _JNEWS_SUBS_LIST_TIPS;
					$title = _JNEWS_SUBS_LIST2;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
	 			</span>
	 		</td>

			<td width="90%">
			<table width = "50%"><tr><td>
			<?php
				require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'views'.DS.'mailings.jnews.html.php');
				jNews_MailingsHTML::lists(null, $lists, $show, $listType, $listEdit->id, true);
			 ?>
			 </td></tr></table>
			</td>	 	</tr>
			<?php
			}
			?>

		</tbody>
	</table>
	</fieldset>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_LIST_T_GENERAL; ?></legend>
	<table class="jnewstable" width="100%" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_NAME;
					$title = _JNEWS_LIST_NAME;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
			<?php
			 	$text = str_replace('"', '&quot;' , $listEdit->list_name);
			 	if (function_exists('htmlspecialchars_decode')) {
			 		$text = htmlspecialchars_decode( $text , ENT_NOQUOTES);
			 	} elseif (function_exists('html_entity_decode')) {
			 		$text = html_entity_decode( $text , ENT_NOQUOTES);
			 	}
				echo ' <input type="text" name="list_name" class="inputbox" size="50" maxlength="64" value="' . $text .'" />' ;
			 ?>
			</td>
		</tr>
		<?php 
		if ($GLOBALS[JNEWS.'listHTMLeditor'] == '1') {
		?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
				
					$tip = _JNEWS_INFO_LIST_DESC ;
					$title = _JNEWS_LIST_DESC;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
			<?php
				
					echo $editor->display( 'list_desc',  $listEdit->list_desc , '100%', '200', '75', '10' ) ;
				
			?>
			</td>
		</tr>
		<?php 
		}else{
			echo jnews::printM('notice' , _JNEWS__LIST_HTML_EDITOR );
		}
		?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_ASSIGN_LIS_TEMPLATE_TIPS;
					$title = _JNEWS_ASSIGN_LIS_TEMPLATE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
			<?php
				echo $lists['list_templates'];
			 ?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
<?php if ($show['sender_info']) {?>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_LIST_T_SENDER; ?></legend>
	<table class="jnewstable" width="100%" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_SENDER_NAME ;
					$title = _JNEWS_SENDER_NAME;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
			<?php
				//if empty sender name and sender email
//				$userSender=jNews_Subscribers::getUsers( 'gid', '50',$listEdit->owner );
//				if(empty($listEdit->sendername)) $listEdit->sendername=$userSender[0]->name;
//				if(empty($listEdit->senderemail)) $listEdit->senderemail=$userSender[0]->email;

			 	$text = str_replace('"', '&quot;' , $listEdit->sendername);
			 	if (function_exists('htmlspecialchars_decode')) {
			 		$text = htmlspecialchars_decode( $text , ENT_NOQUOTES);
			 	} elseif (function_exists('html_entity_decode')) {
			 		$text = html_entity_decode( $text , ENT_NOQUOTES);
			 	}
				echo ' <input type="text" name="sendername" class="inputbox" size="40" maxlength="64" value="' . $text .'" />' ;
			?>

				&nbsp;<img src="components/<?php echo JNEWS_OPTION; ?>/images/16/profile.png" id="popbtn" name="popbtn" onClick="document.getElementById('poplist').style.display = 'inline'; document.getElementById('popbtn').style.display = 'none';" title="<?php echo _JNEWS_SENDER_LIST_INFO; ?>" style="position:absolute;">
				<select id="poplist" name="poplist" style="display:none;position:relative;" onChange="document.getElementById('poplist').style.display = 'none'; document.getElementById('popbtn').style.display = 'inline';">
				<option value="0" onClick="document.adminForm.sendername.value=''; document.adminForm.senderemail.value='';"> </option>
			<?php
				// 2nd parameter of this public static function should be a preference
				// we need to limit it so that it wouldnt cause any problems when loading a bunch of datas e.g hundreds or thousands of users
				$usersA=jNews_Subscribers::getUsers( 'gid', '50' );

				// create options for list
				if( !empty($usersA) ){
					foreach( $usersA as $user ){
						$name = $user->name;
						$email = $user->email;

						$selected = ( (isset($listEdit->sendername) && ($listEdit->sendername==$name)) && (isset($listEdit->senderemail) && ($listEdit->senderemail==$email)) ) ? true : false;
				?>
						<option value="<?php echo $user->name; ?>" onClick="document.adminForm.sendername.value='<?php echo $name; ?>'; document.adminForm.senderemail.value='<?php echo $email; ?>';" <?php if($selected) {echo 'selected';} ?>> <?php echo $user->name .' ('. $user->email .')'; ?> </option>
				<?php
					} 
				}
			 ?>
			 	</select>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_SENDER_EMAIL ;
					$title = _JNEWS_SENDER_EMAIL;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input type="text" name="senderemail" class="inputbox" size="40" maxlength="64" value="<?php echo $listEdit->senderemail; ?>" />
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_SENDER_BOUNCED ;
					$title = _JNEWS_SENDER_BOUNCE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input type="text" name="bounceadres" class="inputbox" size="40" maxlength="64" value="<?php echo $listEdit->bounceadres; ?>" />
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_JNEWS_OWNER ;
					$title = _JNEWS_OWNER;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $listEdit->owner; ?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<?php } else {
		echo '<input type="hidden" name="sendername" value="' .$listEdit->sendername .'" />';
		echo '<input type="hidden" name="senderemail" value="' .$listEdit->senderemail .'" />';
		echo '<input type="hidden" name="bounceadres" value="' .$listEdit->bounceadres .'" />';
		}
	}


	public static function layout($listEdit, $lists, $show, $html) {

		$editor = JFactory::getEditor();

	?>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_LIST_T_LAYOUT; ?></legend>
	<table class="jnewstable" width="100%" cellspacing="1">
		<tbody>
		<?php if ($show['htmlmailing']) {?>
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
				<?php echo _JNEWS_HTML_MAILING_DESC; ?><br /><br />
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td width="185" class="key" style="vertical-align: top;">
				<span class="editlinktip">
				<?php
					$tip =  _JNEWS_INFO_LIST_LAYOUT;
					$title = _JNEWS_LIST_T_TEMPLATE ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span><br />
				<strong><?php echo _JNEWS_USABLE_TAGS; ?></strong><br />
				<?php echo _JNEWS_CONTENTREP; ?>
			</td>
			<td>
				<?php
				 if ($html) {
					echo $editor->display( 'layout',  $listEdit->layout , '100%', '600', '75', '20' ) ;
				 } else {
					 echo '<textarea name="layout" rows="20" cols="80">' . $listEdit->layout . '</textarea>';
				 }
				?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<?php
	}



	public static function subscription($listEdit, $lists, $show, $html, $listType) {
		$mainframe = JFactory::getApplication();
		$editor = JFactory::getEditor();

 if ( $show['access'] OR $show['auto_subscribe'] ) {?>
	<fieldset class="jnewscss">
	<table class="jnewstable" width="100%" cellspacing="1">
		<tbody>
	<?php if ($show['auto_subscribe']) {?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_JNEWS_AUTO_SUB;
					$title = _JNEWS_AUTO_ADD_NEW_USERS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['auto_add'];?>
				<?php if( $mainframe->isAdmin() ) { ?>
					<?php if ($listEdit->new_letter == 1) { ?>
					<span style=" color: rgb(255, 0, 0); font-weight: bold;">
					<?php if($listType != 2)
						echo _JNEWS_INFO_LIST_WARNING;
						?></span>
					<?php } ?><br /><br />
			   <?php } ?>
			</td>
		</tr>
<?php } ?>
		</tbody>
	</table>
	</fieldset>
<?php }

	if ($GLOBALS[JNEWS.'require_confirmation']) { ?>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_SUB_SETTINGS; ?></legend>
	<table class="jnewstable"  width="100%" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key" style="vertical-align: top;">
			<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_SUB_MESS;
					$title = _JNEWS_SUBMESSAGE;
				?>
				<?php echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ); ?>
				</span><br />
				<strong><?php echo _JNEWS_USABLE_TAGS; ?></strong><br />
				<?php echo _JNEWS_NAME_AND_CONFIRM; ?>
			</td>
			<td>
				<?php
				 if ($html) {
					echo $editor->display( 'subscribemessage',  $listEdit->subscribemessage , '100%', '200', '75', '20' ) ;
				 } else {
					 echo '<textarea name="subscribemessage" rows="20" cols="75">' . $listEdit->subscribemessage . '</textarea>';
				 }
				?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<?php }

	//unsubscribe settings
	if ( true || $show['unsusbcribe']) { ?>
	<fieldset class="jnewscss">
	<legend><span class="editlinktip"><?php echo _JNEWS_UNSUB_SETTINGS; ?></span></legend>
	<table class="jnewstable" width="100%"  cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SEND_UNSUBCRIBE_TIPS;
					$title = _JNEWS_SEND_UNSUBCRIBE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['unsubscribesend']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key" style="vertical-align: top;">
			<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_UNSUB_MESS;
					$title = _JNEWS_UNSUB_MESSAGE;
				?>
				<?php echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ); ?>
				</span><br />
				<strong><?php echo _JNEWS_USABLE_TAGS; ?></strong><br />
				<?php echo _JNEWS_NAMEREP; ?><br />
				<?php echo _JNEWS_FIRST_NAME_REP; ?>
			</td>
			<td>
				<?php
				 if ($html) {
					echo $editor->display( 'unsubscribemessage',  $listEdit->unsubscribemessage , '100%', '200', '75', '20' ) ;
				 } else {
					 echo '<textarea name="unsubscribemessage" rows="20" cols="75">' . $listEdit->unsubscribemessage . '</textarea>';
				 }
				?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<?php }//end unsubscribe settings
	}

	/**
	 * Front-end Management Tab
	 */
	public static function frontendManagement($listEdit, $lists, $show, $html) {
		$mainframe = JFactory::getApplication();
		?>
		<fieldset class="jnewscss">
		<table class="jnewstable" cellspacing="1">
			<tbody>
					<tr>
						<td width="185" class="key">
						<span class="editlinktip">
						<?php
						$tip = _JNEWS_INFO_LIST_ACCESS;
						$title = 'List Subscription Access';
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
						?>
						</span>
						</td>
						<td>
						<fieldset style="width:200px">
							<?php echo jnews::displayAccessRoles('acc_id',$listEdit->acc_id);?>
						</fieldset>
						</td>
					</tr>
			</tbody>
		</table>
		</fieldset>
		<?php if ( $mainframe->isAdmin() && $GLOBALS[JNEWS.'level'] > 2){ ?>
		<fieldset class="jnewscss">
		<table class="jnewstable" cellspacing="1">
			<tbody>
					<tr>
							<td width="185" class="key">
							<span class="editlinktip">
							<?php
								$tip = _JNEWS_INFO_LIST_ACCESS_EDIT;
								$title = 'Mailing Add/Edit Access';
								echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
							?>
							</span>
							</td>

							<td>
							<fieldset style="width:200px">
								<?php echo jnews::displayAccessRoles('acc_level',$listEdit->acc_level);?>
							</fieldset>
							</td>
					</tr>
			</tbody>
		</table>
		</fieldset>
		<?php }
	}

	//public static function that sends notification to the admin if the user unsubcribes to the list
	public static function notification($listEdit, $lists, $show, $html) {

		$editor = JFactory::getEditor(); ?>
		<fieldset class="jnewscss">
		<legend><span class="editlinktip"><?php echo _JNEWS_SUBSCRIPTION_SETTINGS; ?></span></legend>
		<table class="jnewstable" width="100%"  cellspacing="1">
			<tbody>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						$tip = _JNEWS_SUBSCRIPTION_NOTIFY_TIPS;
						$title =_JNEWS_SUBSCRIPTION_NOTIFY;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['subnotifysend']; ?>
					<br /><br />
				</td>
			</tr>
			<tr>
				<td width="185" class="key" style="vertical-align: top;">
				<span class="editlinktip">
					<?php
						$tip = _JNEWS_SUBNOTIFY_MSG_TIPS;
						$title = _JNEWS_SUBNOTIFY_MSG;
					?>
					<?php echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ); ?>
					</span><br />
				</td>
				<td>
					<?php
					 if ($html) {
					 	echo $editor->display( 'subnotifymsg',  $listEdit->subnotifymsg, '100%', '110', '75', '20' ) ;
					 }
					?>
				</td>
			</tr>
			</tbody>
		</table>
		</fieldset>

		<?php if ( true || $show['unsusbcribe']) { ?>
		<fieldset class="jnewscss">
		<legend><span class="editlinktip"><?php echo _JNEWS_UNSUB_SETTINGS; ?></span></legend>
		<table class="jnewstable" width="100%"  cellspacing="1">
			<tbody>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						$tip = _JNEWS_SEND_UNSUBNOTIFY_TIPS;
						$title =_JNEWS_UNSUB_NOTIFYMSG;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['unsubscribenotifyadmin']; ?>
					<br /><br />
				</td>
			</tr>
			<tr>
				<td width="185" class="key" style="vertical-align: top;">
				<span class="editlinktip">
					<?php
						$tip = _JNEWS_INFO_AMIN_UNSUB_NOTIFY;
						$title = _JNEWS_UNSUB_ADMINMESSAGE;
					?>
					<?php echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ); ?>
					</span><br />
				</td>
				<td>
					<?php
					 if ($html) {
					 	echo $editor->display( 'notifyadminmsg',  $listEdit->notifyadminmsg, '100%', '110', '75', '20' ) ;
					 }
					?>
				</td>
			</tr>
			</tbody>
		</table>
		</fieldset>
		<?php }

	}//end public static function notification

	public static function aca_radioList( &$arr, $tag_name, $tag_attribs, $selected=null, $key='value', $text='text' ) {
		reset( $arr );
		$html = "";
		for ($i=0, $n=count( $arr ); $i < $n; $i++ ) {
			$k = $arr[$i]->$key;
			$t = $arr[$i]->$text;
			$dis = $arr[$i]->dis;
			$id = ( isset($arr[$i]->id) ? @$arr[$i]->id : null);

			$extra = '';
			$extra .= $id ? " id=\"" . $arr[$i]->id . "\"" : '';
			if (is_array( $selected )) {
				foreach ($selected as $obj) {
					$k2 = $obj->$key;
					if ($k == $k2) {
						$extra .= " selected=\"selected\"";
						break;
					}
				}
			} else {
				$extra .= ($k == $selected ? " checked=\"checked\"" : '');
			}
			$disable = ($dis) ? ' DISABLED ' : '';
			$html .= "\n\t<input type=\"radio\" name=\"$tag_name\" id=\"$tag_name$k\" value=\"".$k."\"$extra $tag_attribs $disable />";
			$html .= "\n\t<label for=\"$tag_name$k\">$t</label>";
		}
		$html .= "\n";

		return $html;
	}
 }
