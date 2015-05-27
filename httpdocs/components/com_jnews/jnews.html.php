<?php
defined('_JEXEC') OR defined('_VALID_MOS') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class frontHTML {

	 public static function formStart($title='', $html=0, $javascriptType='', $menu=null ) {

	 	$my = JFactory::getUser();
	 if(!$GLOBALS[JNEWS.'disabletooltip']){
		JHTML::_('behavior.tooltip');
	 }

	$doc6= JFactory::getDocument();
	$doc6->addStyleSheet( JNEWS_JPATH_LIVE . '/components/'.JNEWS_OPTION.'/css/jnews.css' ); 	 
	$doc6->addStyleSheet( JNEWS_JPATH_LIVE . '/components/'.JNEWS_OPTION.'/css/toolbar.css' ); 	 
		
	 ?>
<script language="javascript" type="text/javascript">
	<?php switch ($javascriptType) {
		case 'listedit':
			?>
			function submitbutton(task) {
					var form = document.adminForm;
					form.task.value = task;
					form.submit();
				}
			<?php
			break;
		case 'name_email':		
			?>
			function submitbutton(task) {
				var form = document.mosForm;

				if (form.name.value == "") {
					alert( "<?php echo addslashes(_JNEWS_REGWARN_NAME);?>" );
				} else if (form.email.value == "") {
					alert( "<?php echo addslashes(_JNEWS_REGWARN_MAIL);?>" );
<?php 
$mainframe = JFactory::getApplication();
if ( !$mainframe->isAdmin() && class_exists('jNews_Captcha') && $GLOBALS[JNEWS.'level'] > 2 && empty($my->id) ) {
?>			
				} else if(form.security_code.value == "") {
					alert( "<?php echo addslashes(_JNEWS_REGWARN_CAPTCHA) ?>" );
				} else if(form.security_code.value != form.captcode.value) {
					alert( "<?php echo addslashes(_JNEWS_CAPTCHA_MSG) ?>" );
<?php 
}//endif
?>					
				} else {
					form.task.value = task;
					form.submit();
				}
			}
			<?php
			break;
		case 'edit_mailing':
			$editor = JFactory::getEditor();
			?>
			function submitbutton(pressbutton) {
				var form = document.adminForm;

				if (pressbutton == 'sendNewsletter') {
					if (!confirm('Are you sure you want to proceed?')){return;}
					form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=mailing';
				}
				submitform( pressbutton );
			}
			<?php
				break;
		case 'show_mailing':
			?>
				function checkcid(myField) {
					myField.checked = true;
					isChecked(true);
				}

				function submitbutton(task) {
					var form = document.adminForm;
						form.task.value = task;
						form.submit();
				}
			<?php
				break;
		case 'unsubscribe':
				?>
				function submitbutton(task) {
					var form = document.mosForm;
						form.task.value = task;
						form.submit();
				}
				<?php
				break;
		case 'cron':
			?>
			function submitbutton(task) {
				var form = document.mosForm;

				if (form.siteurl.value.length < 14) {
					alert( "<?php echo addslashes(_JNEWS_CRON_SITE_URL) ;?>" );
				} else {

					form.task.value = task;
					form.submit();
				}
			}
			<?php
			break;
			default:
			?>
				function submitbutton(task) {
					var form = document.mosForm;
						form.task.value = task;
						form.submit();
				}
			<?php
				break;
		 }; 
		 ?>
</script>

		 <div id="joobitoolbar-box">
			 <div class="toolbar" style="float: right;">
				 <?php
				 frontHTML::frontMenu($menu);
				 ?>
			 </div>
			 <div class="componentheading"><?php
			 
			 	if($title == _JNEWS_EMAIL_LISTS OR $title == _JNEWS_MENU_SUBSCRIBERS OR $title == _JNEWS_MENU_NEWSLETTERS OR $title == _JNEWS_MENU_AUTONEWS OR $title == _JNEWS_MENU_AUTOS OR $title == _JNEWS_MENU_STATS_REPORTS OR $title == _JNEWS_LEADS_REP){
					if($title == _JNEWS_EMAIL_LISTS) $img = 'lists.png';
					if($title == _JNEWS_MENU_SUBSCRIBERS ) $img = 'subscribers.png';
					if($title == _JNEWS_MENU_NEWSLETTERS ) $img = 'newsletter.png';
					if($title == _JNEWS_MENU_AUTONEWS ) $img = 'smartnewsletter.png';
					if($title == _JNEWS_MENU_AUTOS ) $img = 'autoresponder.png';
					if($title == _JNEWS_MENU_STATS_REPORTS ) $img = 'statistics.png';
					if($title == _JNEWS_LEADS_REP) $img = 'leadreport.png';
					echo '<div class="list-image-jnews" style="background-image:url('. JNEWS_PATH_ADMIN_IMAGES2.'header/'.$img .');  background-position: 0 10px; background-repeat: no-repeat; height: 60px; text-align: center; width: 48px;">'.$title.'</div>';
				}
			 ?>
			 </div>
		 </div>
		 <div style="clear: both;"></div>
 		<?php
 	 }

	public static function formEndFN($button='', $values='') {
		$Itemid= JRequest::getInt('Itemid');
		echo '<div style="clear:both;"></div>';
		if (!empty($values)) {
			foreach ($values as $value) {
				echo '<input type="hidden" name="'.$value->name.'" value="'.$value->value.'" />';
			}
		}
		echo '<input type="hidden" name="option" value="'.JNEWS_OPTION.'" />';
    	echo '<input type="hidden" name="boxchecked" value="0" />';
       	echo '<input type="hidden" name="Itemid" value="'.$Itemid.'" />' ;
		if (!empty($button)) echo '<input type="submit" value="'.$button.'" class="button"/>';
		echo JHTML::_( 'form.token' );
		echo '</form> ';
	}

	 public static function formEnd($button='', $values=array() ) {
	 	$Itemid= JRequest::getInt('Itemid');
		echo '<div style="clear:both;"></div>';
	
		if (!empty($values)) {
			foreach ($values as $value) {
				echo '<input type="hidden" name="'.$value->name.'" value="'.$value->value.'" />';
			}
		}
		echo '<input type="hidden" name="option" value="'.JNEWS_OPTION.'" />';
		echo '<input type="hidden" name="task" value="" />';
    	echo '<input type="hidden" name="boxchecked" value="0" />';
    	echo '<input type="hidden" name="Itemid" value="'.$Itemid.'" />' ;
		if (!empty($button)) echo '<input type="submit" value="'.$button.'" class="button"/>';
		echo JHTML::_( 'form.token' );
		echo '</form> ';
	 }

	 public static function formEndYesNo($link, $cle, $subscriberId, $listId) {
		echo '<input type="submit" class="button" value="'._CMN_YES.'" /> '."\n\r";
		echo '<input type="hidden" name="listid" value="'.$listId.'" /> '."\n\r";
		echo '<input type="hidden" name="subscriber" value="'.$subscriberId.'" /> '."\n\r";
		echo '<input type="hidden" name="cle" value="'.$cle.'" /> '."\n\r";
		echo '<br /><br /><a href="'.$link.'"> ' . _JNEWS_SUBSCRIPTION_OR . '</a>' ;
		echo JHTML::_( 'form.token' );
		echo '</form> ';
	 }

/**
 * This function is used in Unsubscribe button
 */
	 public static function formEndUnsubscribe($link, $cle, $subscriberId) {
		echo '<input type="submit" class="button" value="'._JNEWS_UNSUBSCRIBE.'" /> '."\n\r";
		echo '<input type="hidden" name="subscriber" value="'.$subscriberId.'" /> '."\n\r";
		echo '<input type="hidden" name="cle" value="'.$cle.'" /> '."\n\r";
		echo JHTML::_( 'form.token' );
		echo '</form> ';
	 }

	 public static function _header($message) {
		echo '<div Style="text-align:center;">';
		echo $message;
		echo '</div>';
	 }

	public static function _footer() {
		if ( $GLOBALS[JNEWS.'show_footer'] ) {
			backHTML::_footerSignature();
		}
    }

    
	public static function showPanel($pageUsed='main') {
		
		$Itemid= JRequest::getInt('Itemid');
		if(empty($Itemid)) $Itemid = $GLOBALS[JNEWS.'itemidAca'];
		$database = JFactory::getDBO();
		$acl = JFactory::getACL();
		$my	= JFactory::getUser();
		$ex_groups = array();

		$gid = @$GLOBALS[JNEWS.'list_creatorfe'];
		
		if ( !empty($my->id) ) {

			if ( !empty($my->username) ) {
				$greeting_message = _HI.' '. $my->username;
			} else {
				$greeting_message = '';
			}

			$doc6= JFactory::getDocument();
			$doc6->addStyleSheet( JNEWS_JPATH_LIVE . '/components/'.JNEWS_OPTION.'/css/menu.css' ); 	 
				
			$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;

			frontHTML::FEmenu();
			backHTML::controlPanelBottonStart( _JNEWS_UCP_USER_MENU , 'usermenu.png');

			switch( $pageUsed ) {
				case 'list':
					$listId = JRequest::getVar( 'listid' );

				    // newsletter button
			    	$link = 'option='.JNEWS_OPTION.'&act=mailing&listid='. $listId .'&listype=1&Itemid='.$Itemid;
			    	$link = jNews_Tools::completeLink($link,false);
			    	backHTML::quickiconButton( $link, 'newsletterFE.png', _JNEWS_NEWSLETTER , false, 'all' , false);

			    	// smart newsletter button
			    	$link = 'option='.JNEWS_OPTION.'&act=mailing&listid='. $listId .'&listype=7&Itemid='.$Itemid;
			    	$link = jNews_Tools::completeLink($link,false);
			    	backHTML::quickiconButton( $link, 'smartnewsletterFE.png', _JNEWS_AUTONEWS , false, 'all' , false);
					break;
				default :
					$link = 'option='.JNEWS_OPTION.'&act=show&Itemid='.$Itemid;
					$link = jNews_Tools::completeLink($link,false);

					backHTML::quickiconButton( $link, 'my_subscriptions48.png', _JNEWS_UCP_USER_CONTACT ,  false, 'all' , false); //come back here
					//$proceedToCheck = true;
					break;
			}

			if ( class_exists('jNews_Pro') ) {

				$my	= JFactory::getUser();
				$ownedlists = jNews_Lists::getOwnedlists( $my->id );

				if(version_compare(JVERSION,'1.6.0','<')){ //j15
					$usergid = $my->gid;
				}else{ //j16
					$usergid = JAccess::getGroupsByUser( $my->id, false );
				}

				$ex_groups = explode(',',$gid);

				if ( is_array($usergid) ) $canAccess = array_intersect( $usergid, $ex_groups );

				if ( in_array( $usergid, $ex_groups) || !empty($canAccess) ) {

				    if( $GLOBALS[JNEWS.'level'] > 2 && version_compare(JVERSION,'1.6.0','>') ) {
					    $link = 'option='.JNEWS_OPTION.'&act=list&mid=1&listype=1&Itemid='.$Itemid;
					    $link = jNews_Tools::completeLink($link,false);
					    backHTML::quickiconButton( $link, 'addedit.png', _JNEWS_MENU_LIST , false, 'all' , false);
				    }
	
					$listId = JRequest::getVar( 'listid' );
					$act = JRequest::getVar( 'act', '', '', 'WORD' );
					$task = JRequest::getVar('task');
					if( empty($listId) || ($act =='mailing' && $task == 'save') ){
						// list button
				    	$link = 'option='.JNEWS_OPTION.'&act=list&listype=1&mid=1&Itemid='.$Itemid;
				    	$link = jNews_Tools::completeLink($link,false);
						backHTML::quickiconButton( $link, 'addedit.png', _JNEWS_MENU_LIST , false, $usergid , false);

					   if(empty($listId)){
						    if($GLOBALS[JNEWS.'enable_jsub']){
								if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
								if(!empty($ownedlists)){
									$listId = $ownedlists[0];
								}else{
									$listId = jNews_Lists::getIDacclevel(18, $my->id);
								}
							}else{
								$listId = jNews_Lists::getIDacclevel(18, $my->id);
							}
							
							frontHTML::cpanelHTML($listId, $Itemid);
					    }

					}
					
				} else {
					$lists = jNews_Lists::getLists(0, 0, true );
					$access = false;

					$id = 0;
					if($GLOBALS[JNEWS.'enable_jsub']){
						if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
						if(!empty($ownedlists)) $id = $my->id;
					}

					foreach( $lists as $list ) {

						$bit = jnews::checkPermissions( $list->acc_level );
						if ( $bit ) {
							$access = true;
							break;
						}
					}

				    $link = 'option='.JNEWS_OPTION.'&act=list&mid=1&listype=1&Itemid='.$Itemid;
				    $link = jNews_Tools::completeLink($link,false);
				    if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);

				    if(empty($listId)){
					    if($GLOBALS[JNEWS.'enable_jsub']){
							if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
							if(!empty($ownedlists)){
								$listId = $ownedlists[0];
							}else{
								$listId = jNews_Lists::getIDacclevel( 18, $my->id );
							}
						}else{
							$listId = jNews_Lists::getIDacclevel( 18, $my->id );
						}
				    }

					if($GLOBALS[JNEWS.'enable_jsub']){
						if ($access && !empty($ownedlists)) {
							backHTML::quickiconButton( $link, 'addedit.png', _JNEWS_MENU_LIST , false, 'all' , false);
							frontHTML::cpanelHTML($listId, $Itemid);
						}
					}else{
						$creatorFe = jnews::checkPermissions($gid); //traces
						if ($access || $creatorFe ) {
							backHTML::quickiconButton( $link, 'addedit.png', _JNEWS_MENU_LIST , false, 'all');
							frontHTML::cpanelHTML($listId, $Itemid);
						}
					}
				}
				
			} else {

			    if( $GLOBALS[JNEWS.'level'] > 2 ) {
				    $link = 'option='.JNEWS_OPTION.'&act=list&mid=1&listype=1&Itemid='.$Itemid;
				    $link = jNews_Tools::completeLink($link,false);
				    backHTML::quickiconButton( $link, 'addedit.png', _JNEWS_MENU_LIST , false, 'all' , false);
			    }

			}

			
			backHTML::controlPanelBottomEnd();
			if (class_exists('jNews_Auto')) jNews_Auto::otherPanel();

		} elseif ($GLOBALS[JNEWS.'show_lists']) {
	 		$subscriberId = JRequest::getInt('subscriber');
			$subscriber = jNews_Subscribers::getSubscribersFromId( array($subscriberId), false );
			frontEnd::changeSubscriptions($subscriberId, md5($subscriber->email), '', 'save');
		}
		
	}


/**
    * <p>Function to create the frontend menu</p>
    * @param array $menus - array of object menu to be created
    */
   public static function frontMenu( $menus='' ) {

		if (empty($menus)) return true;
   		$html = '<div class="toolbar" style="float:right; margin-top: 15px;">';
   		$html .= '<table class="toolbar"><tbody><tr>';
   		foreach($menus as $menu){

   			if(empty($menu->divider)) $menu->divider = false;
			if(empty($menu->popup->isPop)) {
				$menu->popup = new stdClass;
				$menu->popup->isPop = false;
			}
			if(empty($menu->onclick->custom)) {
				$menu->onclick = new stdClass;
				$menu->onclick->custom = false;
			}
			if(empty($menu->action)) $menu->action= '';
			if(empty($menu->title)) $menu->title= '';
			if(empty($menu->link)) $menu->link= '';

			$html .= ($menu->divider) ? '<td class="divider">' : '<td>';

			if ($menu->popup->isPop){
				//$menu->popup->x = 640;
				//$menu->popup->y = 480;
				$rel = (($menu->popup->rel)) ? 'rel="{handler: \'iframe\', size: {x: '.$menu->popup->x.', y: '.$menu->popup->y.'}}" ' : '';
				$html .= '<a title="'.$menu->title.'" class="toolbar modal"  '.$rel.' href="'.$menu->link.'">';
				$html .= '<center><div class="jpng-16-menu-'.$menu->action.'"></div></center><div class="button-text">'.$menu->title.'</div></a>';
			}else{
				$actionIcon = $menu->action;
				//for the savepreview, we also use the same icon for the preview
				if($actionIcon == 'savepreview' || $actionIcon == 'view' ) $actionIcon = 'preview';				
				$onclick = ($menu->onclick->custom) ? ' onclick="'.$menu->onclick->js.'" ' : ' onclick="javascript: submitbutton(\''.$menu->action.'\')" ' ;
				$html .= '<a '.$onclick.' title="'.$menu->title.'" class="toolbar"  href="'.$menu->link.'" >';
				$html .= '<center><div class="jpng-16-menu-'.$actionIcon.'"></div></center><div class="button-text">'.$menu->title.'</div></a>';
			}
			$html .= '</td>';
   		}

		$html .= '</tr></tbody></table>';
		$html .= '</div>';
		echo $html;
		return true;

   }

		 /**
    * <p>Function to create the frontend menu</p>
    * @param array $menus - array of object menu to be created
    */
   public static function frontMenuButtons($menus = ''){

		if (empty($menus)) return true;
   		$html = '<div class="toolbar" style="float:right; margin-top: 15px;">';
   		$html .= '<table class="toolbar"><tbody><tr>';
   		foreach($menus as $menu){

   			if(empty($menu->divider)) $menu->divider = false;
			
			if(empty($menu->popup->isPop)) {
				$menu->popup = new stdClass;
				$menu->popup->isPop = false;
			}
			if(empty($menu->onclick->custom)) {
				$menu->onclick = new stdClass;
				$menu->onclick->custom = false;
			}
			if(empty($menu->action)) $menu->action= '';
			if(empty($menu->title)) $menu->title= '';
			if(empty($menu->link)) $menu->link= '';			
			

			$html .= ($menu->divider) ? '<td class="divider">' : '<td>';

			if ($menu->popup->isPop){
				$rel = (($menu->popup->rel)) ? 'rel="{handler: \'iframe\', size: {x: '.$menu->popup->x.', y: '.$menu->popup->y.'}}" ' : '';
				$html .= '<a class="modal" '.$rel.' href="'.$menu->link.'"> <button type="button" onclick="return false">'.$menu->title.'</button></a>';
			}else{
				$onclick = ($menu->onclick->custom) ? ' onclick="'.$menu->onclick->js.'" ' : ' onclick="javascript: submitbutton(\''.$menu->action.'\')" ' ;
				$html .='<button type="button" '.$onclick.'>'.$menu->title.'</button>';
			}
			$html .= '</td>';

   		}

		$html .= '</tr></tbody></table>';
		$html .= '</div>';
		echo $html;
		return true;

   }

   public static function cpanelHTML($listId, $Itemid){

   	if(empty($Itemid)) $Itemid = $GLOBALS[JNEWS.'itemidAca'];

   	$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
			
	if(jnews::checkPermissions('admin') || jnews::checkPermissions($gid)){
		//subscribers button
		$link = 'option='.JNEWS_OPTION.'&act=subscribers&mid=2&Itemid='.$Itemid;//.'&listid='.$listId;
    	$link = jNews_Tools::completeLink($link,false);
    	backHTML::quickiconButton( $link, 'addusers.png', _JNEWS_SUBSCRIBERS , false, 'all' , false);
	}
//		if(class_exists('jNews_Social')){//8254465 - the buttons should be available in pro and sp
			
			
				//add the newsletter button and smartnewsletter button in the cpanel
				// newsletter button
		    	$link = 'option='.JNEWS_OPTION.'&act=mailing&mid=3&listype=1&Itemid='.$Itemid;
		    	$link = jNews_Tools::completeLink($link,false);
		    	backHTML::quickiconButton( $link, 'newsletterFE.png', _JNEWS_NEWSLETTER , false, 'all' , false);
	
		    	// smart newsletter button
		    	if($GLOBALS[JNEWS.'allow_sn']){
			    	$link = 'option='.JNEWS_OPTION.'&act=mailing&mid=4&listid='. $listId .'&listype=7&Itemid='.$Itemid;
			    	$link = jNews_Tools::completeLink($link,false);
			    	backHTML::quickiconButton( $link, 'smartnewsletterFE.png', _JNEWS_AUTONEWS , false, 'all' , false);
		    	}
		    	
//			}
//		}

//		88744551 - auto-responder action should be list not mailing
    	//autoresponder button
		if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
			if(class_exists('jNews_Social') && $GLOBALS[JNEWS.'allow_fe_autoresponder'] ){	//8254465
			    if( ( jnews::checkPermissions('admin') || jnews::checkPermissions($gid) ) ) {
			
		    		$link = 'option='.JNEWS_OPTION.'&act=list&mid=5&listype=2&Itemid='.$Itemid;
		    		$link = jNews_Tools::completeLink($link,false);
		    		backHTML::quickiconButton( $link, 'autoresponderFE.png', _JNEWS_MENU_AUTOS , false, 'all' , false);
		    	}
			}
		}

    	if(jnews::checkPermissions('admin') || jnews::checkPermissions($gid)) {
			//statistics and reports button
    		$link = 'option='.JNEWS_OPTION.'&act=statistics&mid=6&listype=1&listid='. $listId .'&Itemid='.$Itemid;
    		$link = jNews_Tools::completeLink($link,false);
    		backHTML::quickiconButton( $link, 'statistics.png', _JNEWS_MENU_STATS_REPORTS , false, 'all' , false);
	
		}

   		return true;

   }

   public static function FEmenu(){
   	
   		$my = JFactory::getUser();
   		
   		//we check if the user is an admin, is an owner of a list and has access to any list
   		$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;

 		if( version_compare(JVERSION,'1.6.0','<') ){
			$listsAddEdit = jNews_Lists::getIDswithacclevel($my->gid);
		}else{
			$groups = JAccess::getGroupsByUser($my->id);
			$listsAddEdit = jNews_Lists::getIDswithacclevel($groups);
		}
 					
		if(!jnews::checkPermissions('admin') && !jnews::checkPermissions($gid) && empty($listsAddEdit)) return '';
   	

		$Itemid= JRequest::getInt('Itemid');
   		if(empty($Itemid)) $Itemid = $GLOBALS[JNEWS.'itemidAca'];
   		$active = JRequest::getVar('mid', '0');

		if($my->id <= 0) return true;

   		$status = false;

   		if(version_compare(JVERSION,'1.6.0','>=')){ //j15
   			$usergid =JAccess::getGroupsByUser($my->id, false);
			$my->gid = $usergid[0];
   		}

		$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
		
		$gids =  array();
		$gids = explode(',', $gid);
		if( empty($gids) ) $gids = $gid;

   		$ownedlists = jNews_Lists::getOwnedlists($my->id);
   		if(empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
   		if( $GLOBALS[JNEWS.'type'] !='PRO' ) return false;

   		if( !$status ){
   			if ( ( (!empty($my->id) || !empty($ownedlists)) && jnews::checkPermissions('all') ) || in_array($my->gid,$gids) ) $status = true;
   		}

   		if( !$status ) {

   			$db = JFactory::getDBO();
			$query= 'SELECT * FROM `#__jnews_lists` WHERE `hidden` = 1 AND `published` = 1';
			$db->setQuery( $query );
			$lists = $db->loadObjectList();

			$access = false;

			foreach( $lists as $list ) {
				$bit = jnews::checkPermissions($list->acc_level);
				if ( $bit ) {
					$access = true;
					break;
				}
			}

			$gidAdmins = array(24,25,7,8);
   			if( jnews::checkPermissions($gid) || in_array($my->gid, $gidAdmins ) || $access)  $status = true;

   		}

        if( $status ) {
			$doc6= JFactory::getDocument();
			$doc6->addStyleSheet( JNEWS_JPATH_LIVE . '/components/'.JNEWS_OPTION.'/css/menu.css' ); 	 
        	$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
        	
        ?>
		<div class="m">
		<ul id="submenu">
			<li><a <?php echo ($active==1)?'class="active"':'';?> href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=list&listype=1&mid=1&Itemid=<?php echo $Itemid;?>"><?php echo _JNEWS_EMAIL_LISTS; ?></a></li>
			<?php 

			if( !empty($ownedlists) || jnews::checkPermissions('admin') || jnews::checkPermissions($gid) ) {
			if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
				if(  class_exists('jNews_Social') ) {			
				?>
				<li><a <?php 
				echo ($active==2)?'class="active"':'';?> href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=subscribers&mid=2&Itemid=<?php echo $Itemid;?>"><?php echo _JNEWS_MENU_SUBSCRIBERS; ?></a></li>
				<?php 
	        	}
			}
	        	
			}
			
//			if(class_exists('jNews_Social')) { //8254465
			?>
			<li><a <?php echo ($active==3)?'class="active"':'';?> href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=mailing&listype=1&mid=3&Itemid=<?php echo $Itemid;?>"><?php echo _JNEWS_MENU_NEWSLETTERS; ?></a></li>
			<?php  
			if ( $GLOBALS[JNEWS.'allow_sn'] ) { 
			?>
				<li><a <?php echo ($active==4)?'class="active"':'';?> href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=mailing&listype=7&mid=4&Itemid=<?php echo $Itemid;?>"><?php echo _JNEWS_MENU_AUTONEWS; ?></a></li>
			<?php 
			}  
//        }

			if(class_exists('jNews_Social') && $GLOBALS[JNEWS.'allow_fe_autoresponder'] ){			
			?>
			<li><a <?php 
//	88744551 - auto-responder should be list not mailing
			echo ( $active==5 ) ?'class="active"':'';?> href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=list&listype=2&mid=5&Itemid=<?php echo $Itemid;?>"><?php echo _JNEWS_MENU_AUTOS; ?></a></li>
			<?php 
			}
			
//			if(class_exists('jNews_Social')) { //8254465
			if( !empty($ownedlists) || jnews::checkPermissions('admin') || jnews::checkPermissions($gid) ) {
			?>
				<li><a <?php 
				echo ($active==6)?'class="active"':'';?> href="index.php?option=<?php echo JNEWS_OPTION; ?>&act=statistics&mid=6&Itemid=<?php echo $Itemid;?>"><?php echo _JNEWS_MENU_STATS_REPORTS; ?></a></li>
			<?php 
        }
//        }endif social
        ?>
		</ul>
		<div class="clr"></div>
		</div>
		<?php 
        }

   		return true;

   }

 }