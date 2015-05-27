<?php
defined('_JEXEC') OR defined('_VALID_MOS') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class frontEnd {
	public static function introduction($subscriberId, $listId,$lisType) {
		$my = JFactory::getUser();

		if ($subscriberId>0 ) {
			frontHTML::showPanel();
		} else {
			if ($GLOBALS[JNEWS.'show_lists'] ){
				frontEnd::showLists($subscriberId, $listId, $lisType, 'show', '');
			}
		}

   }

	public static function showLists($subscriberId, $listId,$lisType,$action, $task ) {
		$Itemid= JRequest::getInt('Itemid');
		
		if(empty($Itemid)) $Itemid = $GLOBALS[JNEWS.'itemidAca'];
		
		// we initialize the listType with one
		if(empty($lisType)) $lisType = 1;

		$mainframe = JFactory::getApplication();
		$my = JFactory::getUser();
		$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;

		if(version_compare(JVERSION,'1.6.0','<')){
			$listsAddEdit = jNews_Lists::getIDswithacclevel($my->gid);
		}else{
			$groups = JAccess::getGroupsByUser($my->id);
			$listsAddEdit = jNews_Lists::getIDswithacclevel($groups);
		}

		if ( !empty($my->id)) {
			$ownedlists = jNews_Lists::getOwnedlists( $my->id );//UPDATE321
			
			$lists = jNews_Lists::getLists(0, 0, true );
			$access = false;
			foreach( $lists as $list ) {
				$bit = jnews::checkPermissions( $list->acc_level );
				if ( $bit ) {
					$access = true;
					break;
				}
			}
			
			if( ( !$access && empty($listsAddEdit) && empty($ownedlists) && !jnews::checkPermissions('admin')) && !jnews::checkPermissions($gid) ){
				frontHTML::showPanel();
				return true;
			}
		}
		
		//for popup window
	 	JHTML::_( 'behavior.modal' );

		switch ($task) {

			case 'new':
			case 'add':
				$access = 'admin';
				$id = 0;
				if($GLOBALS[JNEWS.'enable_jsub']){
					if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
					if(!empty($ownedlists)) $access = strtolower($my->usertype);
					$id = $my->id;
				}
				if (jnews::checkPermissions($access) || jnews::checkPermissions($gid) ) { //traces
					$task='save';
					$subscriber = jNews_Subscribers::getSubscriberInfoFromUserId($my->id);

					if(version_compare(JVERSION,'1.6.0','<')){ //j15
						$acl = JFactory::getACL();
						$groups = $acl->get_group_children_tree( null, 'USERS', false );
					}else{ //j16
						$db = JFactory::getDBO();
						$db->setQuery('SELECT a.*, a.title as text, a.id as value  FROM #__usergroups AS a ORDER BY a.lft ASC');
						$groups = $db->loadObjectList();
					}
	
					$allGroupIds = array();
					foreach($groups as $oneGroup){
						$allGroupIds[] = $oneGroup->value;
					}

					$newList = new stdClass;
					$newList->id = '';
					$newList->html = 1;
					$newList->new_letter = 1;
					$newList->list_name = '';
					$newList->list_desc = '';
					if(empty($subscriber)){
						$newList->sendername = '';
						$newList->senderemail = '';
						$newList->bounceadres = '';//$GLOBALS[JNEWS.'sendmail_from'];
					}else{
						$newList->sendername = $subscriber->name;
						$newList->senderemail = $subscriber->email;
						$newList->bounceadres = $subscriber->email;
					}
					$newList->hidden = 1;
					$newList->auto_add = 0;
					$newList->list_type = $lisType;
					$newList->delay_min = 1;
					$newList->delay_max = 7;
					$newList->user_choose = 0;
					$newList->cat_id = '0:0';
					$newList->follow_up ='';
					$newList->notify_id =0;
					$newList->owner = $my->id;
					$newList->acc_level = '24,25,7,8';
					$newList->acc_id =implode(',',$allGroupIds);
					$newList->published = 1;
					$newList->start_date = date( 'Y-m-d',  jnews::getNow( 0, true ) );
					$newList->next_date = jnews::getNow( 0, true );
					$newList->subscribemessage = _JNEWS_DEFAULT_SUBSCRIBE_MESS;
					$newList->unsubscribemessage = _JNEWS_DEFAULT_UNSUBSCRIBE_MESS;
					$newList->notifyadminmsg = _JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION;
					$newList->subnotifymsg = _JNEWS_SUBSDEFAULT_NOTIFYMSG;
					$newList->subnotifysend = 1;
					$newList->unsubscribesend = 1;
					$newList->unsubscribenotifyadmin = 1;
					$newList->footer = 1;

					$linkForm = 'option='.JNEWS_OPTION;
					$linkForm = jNews_Tools::completeLink( $linkForm, false, false );
					
					$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );
					
					$forms['main'] = "<form action='$mainLink' method='post' name='adminForm' enctype='multipart/form-data' onsubmit='submitbutton();return false;'> \n " ;
					$show = jNews_ListType::showType($lisType , 'editlist');

					// menus for list edit
					// menu save
					$linkForm = jNews_Tools::completeLink( $linkForm, true );
					$linkForm = '#';
					$menuSave = new stdClass;
					$menuSave->popup = new stdClass;
$menuSave->popup->isPop = false;
					$menuSave->link = $linkForm	;
					$menuSave->action = 'save';
					$menuSave->onclick = new stdClass;
$menuSave->onclick->custom = false;
					$menuSave->onclick->js = '';
					$menuSave->title = _JNEWS_SAVE;

					// menu cancel
					$menuCancel = new stdClass;
					$menuCancel->popup = new stdClass;
$menuCancel->popup->isPop = false;
					$menuCancel->link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=list&Itemid='.$Itemid, false );
					$menuCancel->action = 'cancel';
					$menuCancel->onclick = new stdClass;
$menuCancel->onclick->custom = true;
					$menuCancel->onclick->js = '';
					$menuCancel->title = _JNEWS_CANCEL;
					
					$link = 'option='.JNEWS_OPTION;
					$link = jNews_Tools::completeLink($link,false);
					$menuCpanel = new stdClass;
					$menuCpanel->popup = new stdClass;
$menuCpanel->popup->isPop = false;
			$menuCpanel->popup->isPop = false;
					$menuCpanel->link = $link;
					$menuCpanel->action = 'cpanel';
					$menuCpanel->onclick = new stdClass;
$menuCpanel->onclick->custom = false;
					$menuCpanel->onclick->js = '';
					$menuCpanel->title = _JNEWS_MENU_CPANEL;

					$menuA = array();
					$menuA['save'] = $menuSave;
					$menuA['cancel'] = $menuCancel;
					$menuA['cpanel'] = $menuCpanel;

					frontHTML::formStart( _JNEWS_EDIT_A.@constant( $GLOBALS[JNEWS.'listname'.$lisType] ).' '._JNEWS_LIST  , $newList->html , 'listedit',$menuA );
		       		jNews_ListsHTML::editList($newList, $forms, $show, $lisType);

					$go[] = jnews::makeObj('list_id', $newList->id);
					$go[] = jnews::makeObj('act', $action);
					$go[] = jnews::makeObj('task', '');
					$go[] = jnews::makeObj( 'listype', JRequest::getInt('listype') );
					
					frontHTML::formEndFN(null, $go);

				}
				break;

			case 'edit':
				$access = 'admin';
				$id = 0;
				if($GLOBALS[JNEWS.'enable_jsub']){
					if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
					if(!empty($ownedlists)) $access = strtolower($my->usertype);
					$id = $my->id;
				}
				if (jnews::checkPermissions($access) || jnews::checkPermissions($gid) ) {//traces
					$task = 'update';
					$list = jNews_Lists::getLists($listId, $lisType, $subscriberId, '', false, false, false);
					$listEdit = $list[0];
					$listEdit->new_letter = 0 ;
					if (!empty($listEdit)) {
						$linkForm = 'option='.JNEWS_OPTION;
						$linkForm = jNews_Tools::completeLink( $linkForm, false, false);
						
						$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );
						$forms['main'] = "<form action='$mainLink' method='post' name='adminForm' enctype='multipart/form-data' onsubmit='submitbutton();return false;'> \n " ;
						
						$show = jNews_ListType::showType($listEdit->list_type , 'editlist');
						// menus for list edit
						// menu save
						$linkForm = 'option='.JNEWS_OPTION.'&act=list&listid='.$listId.'&listype='.$lisType.'&siteend=1&Itemid='.$Itemid;
						$linkForm = jNews_Tools::completeLink($linkForm,false);
						$menuSave = new stdClass;
						$menuSave->popup = new stdClass;
$menuSave->popup->isPop = false;
						$menuSave->link = $linkForm;
						$menuSave->action = 'save';
						$menuSave->onclick = new stdClass;
$menuSave->onclick->custom = false;
						$menuSave->onclick->js = '';
						$menuSave->title = _JNEWS_SAVE;

						// menu cancel
						$menuCancel = new stdClass;
						$menuCancel->popup = new stdClass;
$menuCancel->popup->isPop = false;
						$menuCancel->link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=list&Itemid='.$Itemid, false );
						$menuCancel->action = 'cancel';
						$menuCancel->onclick = new stdClass;
$menuCancel->onclick->custom = true;
						$menuCancel->onclick->js = '';
						$menuCancel->title = _JNEWS_CANCEL;
						
						$link = 'option='.JNEWS_OPTION;
						$link = jNews_Tools::completeLink($link,false);
						$menuCpanel = new stdClass;
						$menuCpanel->popup = new stdClass;
$menuCpanel->popup->isPop = false;
			$menuCpanel->popup->isPop = false;
						$menuCpanel->link = $link;
						$menuCpanel->action = 'cpanel';
						$menuCpanel->onclick = new stdClass;
$menuCpanel->onclick->custom = false;
						$menuCpanel->onclick->js = '';
						$menuCpanel->title = _JNEWS_MENU_CPANEL;

						$menuA = array();

						if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
							if(class_exists('jNews_Social')){
								$menuA['save'] = $menuSave;
								$menuA['cancel'] = $menuCancel;
							}
						}

						$menuA['cpanel'] = $menuCpanel;

						frontHTML::formStart( _JNEWS_EDIT_A.@constant( $GLOBALS[JNEWS.'listname'.$lisType] ).' '._JNEWS_LIST  , $listEdit->html , 'listedit',$menuA );
			       		jNews_ListsHTML::editList($listEdit, $forms, $show, $lisType);

						$go[] = jnews::makeObj('list_id', $listEdit->id);
						$go[] = jnews::makeObj('act', $action);
						$go[] = jnews::makeObj('task', 'update');

						frontHTML::formEndFN(null, $go);
					}
				}

				break;

				case 'save':

					JRequest::checkToken() or die( 'Invalid Token' );
					if(empty($listId)){
						if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
							if(class_exists('jNews_Social')){
								$status = jNews_Social::createFrontendList($action,$task,$lisType);
							}
						}
						$msgtype = ($status) ? 'ok' : 'no';
						$message= jnews::printYN( $msgtype ,  _JNEWS_LIST_ADDED , _JNEWS_ERROR );
						
						if($mainframe->isAdmin()){
						   	jNews_Tools::redirect('index.php?option='.JNEWS_OPTION.'&act=list&listype='.$lisType.'&siteend=1');
						}else{
						   	$mainLink = JRoute::_('index.php?option='.JNEWS_OPTION.'&act=list&listype='.$lisType.'&siteend=1');
						   	jNews_Tools::redirect($mainLink);
						}
						echo $message;
					}else{
						$lisType = jNews_Lists::getListType($listId);
						$message = jnews::printYN( jNews_Lists::updateListFromEdit($listId, '', false, $lisType) ,  _JNEWS_LIST_UPDATED , _JNEWS_ERROR );
//						jNews_Tools::redirect('index.php?option='.JNEWS_OPTION.'&act=list&listype='.$lisType.'&siteend=1');
						
						if($mainframe->isAdmin()){
						   	jNews_Tools::redirect('index.php?option='.JNEWS_OPTION.'&act=list&listype='.$lisType.'&siteend=1');
						}else{
						   	$mainLink = JRoute::_('index.php?option='.JNEWS_OPTION.'&act=list&listype='.$lisType.'&siteend=1');
						   	jNews_Tools::redirect($mainLink);
						}
						
						echo $message;
						$listId = 0;
					}
					break;

				case 'ownerslists':
					$ownerid = JRequest::getVar('ownerid', 0);
					$item = JRequest::getInt('Itemid');

					$ownerslists = jNews_Lists::getSpecifiedLists( 0 , '', $ownerid );
					$module = new jnews_module();
					$module->lists = $ownerslists;
	          		$module->showListName = true;
	          		$module->defaultchecked= true;
	          		$module->dropdown = false;
	          		$module->shownamefield=true;

					$HTML = $module->create();
					echo $HTML;

				break;

				case 'make':
				case 'forms':

						if (class_exists('jNews_CreateForm')) {
							jNews_CreateForm::taskOptions($task);
							$showLists = false;
						} else {
							$showLists = true;
						}
					break;

				case 'cpanel':
						jNews_Tools::redirect('index.php?option='.JNEWS_OPTION );
					break;

			default:
				$my = JFactory::getUser();
		   		$show = jNews_ListType::showType($lisType , 'showListsFront');

		   		$msgtype = JRequest::getVar('msg', '');
		   		if(!empty($msgtype)) {
		   			if($msgtype == 'no'){
		   				echo jnews::printM($msgtype , _JNEWS_ERROR );
		   			}else{
		   				echo jnews::printM($msgtype , _JNEWS_LIST_ADDED );
		   			}
		   		}

		   		$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );

				$forms['main'] = '<form method="post" action="'. $mainLink .'" onsubmit="submitbutton();return false;" name="mosForm" >'."\n\r";//$link
				$forms['main'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';
				$order = 'listnameA';

				$id = 0;
				if($GLOBALS[JNEWS.'enable_jsub']){
					if(!empty($my->id))$ownedlists = jNews_Lists::getOwnedlists($my->id);
					if(!empty($ownedlists)) $id = $my->id;
				}
				
				if ( jnews::checkPermissions('admin') || jnews::checkPermissions($gid) || !empty($listsAddEdit) ) {
					if ($mainframe->isAdmin()){
						$lists = jNews_Lists::getLists($listId, $lisType, $subscriberId, $order, false, false, false);
					}else{
						$lists = jNews_Lists::getLists( $listId, $lisType, $subscriberId, $order, false, true, false, false, true );
					}
				}else{
					if ($mainframe->isAdmin()){
						if ($lisType==0) {
							$lists1 = jNews_Lists::getLists($listId, 1, $subscriberId, $order, false, true, false);
							$lists2 = jNews_Lists::getLists($listId, 2, $subscriberId, $order, false, true, false);
							$lists7 = jNews_Lists::getLists($listId, 7, $subscriberId, $order, false, true, false);
							$lists = array_merge($lists1, $lists2, $lists7);
						} elseif ( $lisType==1 OR $lisType==2 OR $lisType==7) {
							$lists = jNews_Lists::getLists($listId, $lisType, $subscriberId, $order, false, true, false);
						} else {
							$lists = '';
						}
					}else{
						if ($lisType==0) {
							//get the owned list of the logged user
							$ownedlists = 0;
							if($GLOBALS[JNEWS.'enable_jsub']){
								$my	= JFactory::getUser();
								if(!empty($my->id))$ownedlists = jNews_Lists::getOwnedlists($my->id);
								if(!empty($ownedlists)) $access=true;
							}
							$lists1 = jNews_Lists::getLists($listId, 1, $subscriberId, $order, false, true, false, false, true,'','', $ownedlists, $my->id);
							$lists2 = jNews_Lists::getLists($listId, 2, $subscriberId, $order, false, true, false, false, true);
							$lists7 = jNews_Lists::getLists($listId, 7, $subscriberId, $order, false, true, false, false, true);
							$lists = array_merge($lists1, $lists2, $lists7);
						} elseif ( $lisType==1 OR $lisType==2 OR $lisType==7) {
							$lists = jNews_Lists::getLists($listId, $lisType, $subscriberId, $order, false, true, false, false, true);
						} else {
							$lists = '';
						}

					}
				}
				
				if ( !empty($lists) || jnews::checkPermissions($gid) ) {
					$menuA = null;
					if( $my->id > 0 ){
						$link = 'option='.JNEWS_OPTION;
						$link = jNews_Tools::completeLink($link,false);
						$menuCpanel = new stdClass;
						$menuCpanel->popup = new stdClass;
$menuCpanel->popup->isPop = false;
			$menuCpanel->popup->isPop = false;
						$menuCpanel->link = $link;
						$menuCpanel->action = 'cpanel';
						$menuCpanel->onclick = new stdClass;
$menuCpanel->onclick->custom = false;
						$menuCpanel->onclick->js = '';
						$menuCpanel->title = _JNEWS_MENU_CPANEL;

						$menuShare = new stdClass;
						$menuForms = new stdClass;
						$menuNew = new stdClass;

						$itemId=$GLOBALS[JNEWS.'itemidAca'];
						if( ( $GLOBALS[JNEWS.'enable_jsub'] && (!empty($ownedlists) ) || jnews::checkPermissions('admin') ) || jnews::checkPermissions($gid)) {
							$linkShare = 'option='.JNEWS_OPTION.'&act=list&task=ownerslists&ownerid='.$my->id.'&Itemid='.$itemId;
							$linkShare = jNews_Tools::completeLink($linkShare,false);
							$menuShare = new stdClass;
							$menuShare->popup = new stdClass;
$menuShare->popup->isPop = false;
							$menuShare->link = $linkShare;
							$menuShare->action = 'share';
							$menuShare->onclick = new stdClass;
$menuShare->onclick->custom = false;
							$menuShare->onclick->js = '';
							$menuShare->title = 'Share';

							$menuBack = new stdClass;
							$menuBack->popup = new stdClass;
							$menuBack->popup = new stdClass;
$menuBack->popup->isPop = false;
							$menuBack->link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=list&Itemid='.$Itemid, false );
							$menuBack->action = 'back';
							$menuBack->onclick = new stdClass;
							$menuBack->onclick->custom = true;
							$menuBack->onclick->js = '';
							$menuBack->title = _JNEWS_MENU_BACK;
							
							$menuDelete = new stdClass;
							$menuDelete->popup = new stdClass;
$menuDelete->popup->isPop = false;
							$menuDelete->link = '#';
							$menuDelete->action = 'delete';
							$menuDelete->onclick = new stdClass;
$menuDelete->onclick->custom = false;
							$menuDelete->onclick->js = '';
							$menuDelete->title = _JNEWS_DELETE;

							$menuForms = new stdClass;
							$menuNew = new stdClass;

							if( $GLOBALS[JNEWS.'enable_jsub'] && (!empty($ownedlists) ) ){

								$linkForm = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=list&task=make' , false, false, true );
								$menuForms->link = $linkForm;
								$menuForms->popup = new stdClass;
$menuForms->popup->isPop = true;
								$menuForms->popup->rel = true;
								$menuForms->popup->x = 750;
								$menuForms->popup->y = 500;
								$menuForms->action = 'form';
								$menuForms->title = 'Create Form';

								$linknew = 'option=com_jsubscription&view=jsubscription&task=listing&Itemid='.$itemId;
								$menuNew = new stdClass;
								$menuNew->popup = new stdClass;
$menuNew->popup->isPop = false;
								$menuNew->action = 'new';
								$menuNew->onclick = new stdClass;
$menuNew->onclick->custom = true;
								$menuNew->onclick->js = '';
								$menuNew->title = 'New';
								$menuNew->link = $linknew;

							}else{
								if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
									if(class_exists('jNews_Social')){
//									if($lisType == 1){
										$linkForm =  jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=list&task=make' , true, false, true );
										$menuForms->link = $linkForm;
										$menuForms->popup = new stdClass;
$menuForms->popup->isPop = true;
										$menuForms->popup->rel = true;
										$menuForms->popup->x = 750;
										$menuForms->popup->y = 500;
										$menuForms->action = 'form';
										$menuForms->title = 'Create Form';

//										$linknew = 'option='.JNEWS_OPTION.'&act=list&task=new&listype='.$lisType.'&siteend=1&Itemid='.$itemId;
										$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );
										$menuNew = new stdClass;
										$menuNew->popup = new stdClass;
$menuNew->popup->isPop = false;
//										$linknew = jNews_Tools::completeLink($linknew,false);
										$linknew = '#';	// #
										$menuNew->action = 'new';
										$menuNew->onclick = new stdClass;
$menuNew->onclick->custom = true;
										$menuNew->onclick->js = "javascript: submitbutton('new')";
										$menuNew->title = 'New';
										$menuNew->link = $linknew;
									}
//								}
								}
							}

							$menuUnpub = new stdClass;
							$menuUnpub->popup = new stdClass;
$menuUnpub->popup->isPop = false;
							$menuUnpub->link = '#';
							$menuUnpub->action = 'unpublished';
							$menuUnpub->onclick = new stdClass;
$menuUnpub->onclick->custom = true;
							$menuUnpub->onclick->js = 'javascript:history.go(-1)';
							$menuUnpub->title = 'Unpublished';

							$menuPub = new stdClass;
							$menuPub->popup = new stdClass;
$menuPub->popup->isPop = false;
							$menuPub->link = '#';
							$menuPub->action = 'published';
							$menuPub->onclick = new stdClass;
$menuPub->onclick->custom = true;
							$menuPub->onclick->js = 'javascript:history.go(-1)';
							$menuPub->title = 'Published';

							$menuCopy = new stdClass;
							$menuCopy->popup = new stdClass;
$menuCopy->popup->isPop = false;
							$menuCopy->link = '#';
							$menuCopy->action = 'copy';
							$menuCopy->onclick = new stdClass;
$menuCopy->onclick->custom = true;
							$menuCopy->onclick->js = 'javascript:history.go(-1)';
							$menuCopy->title = 'Copy';

							$menuDivider = new stdClass;
							$menuDivider->divider = true;

						}

						$menuA = array();
						if($lisType=='2'){
//							4445574
//							$menuA['form'] = $menuForms;
							$menuA['new'] = $menuNew;
//							$menuA['back'] = $menuBack;
							$menuA['cpanel']=$menuCpanel;
						}else{
							if($GLOBALS[JNEWS.'enable_jsub']) $menuA['share'] = $menuShare;
							$menuA['form'] = $menuForms;
							$menuA['new'] = $menuNew;
	//						$menuA['edit']=$menuEdit;
//							$menuA['back'] = $menuBack;
							$menuA['cpanel']=$menuCpanel;
						}
					}

					if($lisType == 1) $title = _JNEWS_EMAIL_LISTS;
					else $title = 'Auto-responders';

					if(empty($my->id)) $title = _JNEWS_SUBSCRIBE_LIST2;
					if(empty($ownedlists) && !empty($my->id)) $title = _JNEWS_SUBSCRIBE_LIST2;

					$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
					
					frontHTML::formStart( $title  , 0 , '', $menuA );

					frontHTML::FEmenu();

					if ($show['list_type']) $show['list_type'] = jNews_ListType::checkOthers();

					$setSort = new stdClass;
					$setSort->orderDir='';
					$setSort->orderValue='';

					if ( class_exists('jNews_Pro') ) {

						$id =0;
						if($GLOBALS[JNEWS.'enable_jsub']){
							if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
							if(!empty($ownedlists)) $id = $my->id;
						}

						$access = false;

						foreach( $lists as $list ) {
							$bit = jnews::checkPermissions($list->acc_level); 
							if ( $bit ) {
								$access = true;
								break;
							}
						}

						$my	= JFactory::getUser();

						//owner of the list to access the list
						if($GLOBALS[JNEWS.'enable_jsub']){
							if(!empty($my->id))$ownedlists = jNews_Lists::getOwnedlists($my->id);
							if(!empty($ownedlists)) {
								$access=true;
								$usertype=strtolower($my->usertype);
							}
						}

						if ( $access ) {
							jNews_Pro::showListingLists($lists , $action , 'edit' , $forms, $show, $my->id);
							$go[] = jnews::makeObj( 'listype', JRequest::getInt('listype') );							
						} else {
							jNews_ListsHTML::showListingLists($lists , $action , 'edit' , $forms, $show,'', 0, null, null, $setSort );
							$go[] = jnews::makeObj( 'listype', JRequest::getInt('listype') );
							//we prompt a message that there is no list available
//							if(empty($lists)) jnews::printM( 'blue' , _JNEWS_NO_LISTS_AVAILABLE );
						}
					} else {
						jNews_ListsHTML::showListingLists($lists , $action , 'edit' , $forms, $show,'', 0, null, null, $setSort );
					}
					$go[] = jnews::makeObj('act', $action);
					
					frontHTML::formEnd( '', $go );
				}else{
 					frontHTML::FEmenu();
				}
				
				break;
		}

   }

	public static function mailingOptions( $action, $task, $listId, $mailingId, $subscriberId, $listType, $artId, $contentType, $blogId, $blogType, $dealId, $dealType, $tmplid, $flexiid, $flexitype, $captchaWidth=80, $captchaHeight=25, $captchaBGColor='', $captchaFTColor='' ) {

		$Itemid= JRequest::getInt('Itemid');

		if(empty($Itemid)) $Itemid = $GLOBALS[JNEWS.'itemidAca'];
		
		if(empty($lisType)) $lisType = 1;

		$acl = JFactory::getACL();
		$database = JFactory::getDBO();
		$my	= JFactory::getUser();
		$new=false;

   		$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
		$gids =  array();
		$gids = explode(',', $gid);
		if( empty($gids) ) $gids = $gid;
		
		if(version_compare(JVERSION,'1.6.0','<')){
			$listsAddEdit = jNews_Lists::getIDswithacclevel($my->gid);
		}else{
			$groups = JAccess::getGroupsByUser($my->id);
			$listsAddEdit = jNews_Lists::getIDswithacclevel($groups);
		}
		
		//for popup window
	 	JHTML::_( 'behavior.modal' );

		if($listType<1){

			$dropLlistPost = JRequest::getVar('droplist');
			if ( !empty($dropLlistPost) ) { $maliste = explode( '-', $dropLlistPost ); $listType = $maliste[0]; $listId = $maliste[1]; }
			elseif ($listId>0){
				$maliste = jNews_Lists::getLists($listId,0,null,'listnameA',false,false,false,false);
				$listType = $maliste[0]->list_type;
			}

		}

		switch ($task) {

			case 'refreshcaptcha':
				$newcode = jNews_Captcha::generateCode('5');
				$newesc = jNews_Captcha::encryptData( $newcode, crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code']));
				$newdecrypt = jNews_Captcha::decryptData($newesc, crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code']));
				$newpath= JNEWS_JPATH_LIVE_NO_HTTPS.'/index.php?option='.JNEWS_OPTION.'&act=captcha&tmpl=component&width='.$captchaWidth.'&height='.$captchaHeight.'&bgcolor='.$captchaBGColor.'&ftcolor='.$captchaFTColor.'&characters=5&esc='. $newesc.'&encpwd='.crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code']);

				echo '<div id="newcode">'. $newdecrypt .'</div>';
				echo '<div id="newesc">'. $newesc .'</div>';
				echo '<div id="newdecrypt">'. $newdecrypt .'</div>';
				echo '<div id="newpath">'. $newpath .'</div>';
				exit;
				break;

			case ('blogContent'):
				$artId = $blogId;
				$contentType = $blogType;
				
			case 'flexicontent':
				$session =& JFactory::getSession();
				
				if($flexitype == 'country'){
					$flexCategoriesCountries = $session->get('flexi_countries', array(), 'JNEWLSETTER');
					
					if(isset($flexCategoriesCountries[$flexiid])){
						unset($flexCategoriesCountries[$flexiid]);
					}else{
						$flexCategoriesCountries[$flexiid] =  $flexiid;
					}
					
					//we set this value in the session
					$session->set('flexi_countries', $flexCategoriesCountries,'JNEWLSETTER');
				}else{
					$flexCategoriesIndustries = $session->get('flexi_industries', array(), 'JNEWLSETTER');
					
					if(isset($flexCategoriesIndustries[$flexiid])){
						unset($flexCategoriesIndustries[$flexiid]);
					}else{
						$flexCategoriesIndustries[$flexiid] =  $flexiid;
					}
					//we set this value in the session
					$session->set('flexi_industries', $flexCategoriesIndustries,'JNEWLSETTER');
				}	
				break;		
			
			case 'articleContent':
				jNews_Mailing::getContent( $artId, $contentType, $task, $tmplid );
				break;

			case ('dealContent'):
				jNews_Mailing::getDeal( $dealId, $dealType, $tmplid);
				break;

			case 'listpanel':
					$listType = JRequest::getVar( 'listype' );
					if( $listType == 1 || $listType == 7 ) frontHTML::showPanel('list');
					break;
			
			case 'cancel':
				frontEnd::showMailingsFront( $task, $action , $subscriberId, $listId, $listType, false, _JNEWS_MENU_MAILING);
				break;
			case 'delete':
					JRequest::checkToken() or die( 'Invalid Token' );
					if( empty($mailingId) ){
						echo '<script> javascript:alert("'. _JNEWS_DELETE_MAILING .'"); javascript:history.go(-1); </script>';
					} else {
						$d['mailing'] = jNews_Mailing::getOneMailing('', $mailingId, '', $new);
						echo jnews::printYN( jNews_Mailing::delete( $d ) , @constant( $GLOBALS[JNEWS.'listname'.$d['mailing']->list_type] ). _JNEWS_SUCCESS_DELETED , _JNEWS_ERROR );
						frontEnd::showMailingsFront( $task, $action , $subscriberId, $listId, $listType, false, _JNEWS_MENU_MAILING);
					}
					break;

			case 'togle':
					// defined toggle for publish and unpublish of mailings
					$id = JRequest::getVar( 'mailingid' );
					$col = JRequest::getVar( 'col' );
					$mailingId = ( !empty( $id ) && !empty($col) ) ? $id : $mailingId;
					$task = ( !empty( $mailingId ) && !empty($col) ) ? $col : $task;

					switch($task){
						case 'publishMailing':
	   						$mailing = jNews_Mailing::getOneMailing('', $mailingId, '', $new);
	   						jNews_Mailing::publishMailing($mailingId);
	   						break;
	   					case 'unpublishMailing':
					   		$mailing = jNews_Mailing::getOneMailing('', $mailingId, '', $new);
					   		jNews_Mailing::unpublishMailing($mailingId);
					   		break;
					   	default: break;
					}

					echo '<script> javascript:history.go(-1); </script>';
					break;

			case 'edit':
				
				if($GLOBALS[JNEWS.'enable_jsub']){
					if(!empty($my->id))$ownedlists = jNews_Lists::getOwnedlists($my->id);
					if(!empty($ownedlists) || jnews::checkPermissions('admin') ){
						if( empty($mailingId) ){
							echo '<script> javascript:alert("'. _JNEWS_SELECT_MAILING .'"); javascript:history.go(-1); </script>';
						} else {
							frontEnd::mailingEdit($subscriberId, $mailingId, $listId, $listType, 'mailing');//savemailing
						}
					}
				}else{

					//edit a mailing
					$canAccess = false;
					if (  class_exists('jNews_Pro') && !empty($listId) ) {
						$list = jNews_Lists::getOneList( $listId );
						$accessAuthorizedA = explode(',',$list->acc_id);
						if ( !is_array($accessAuthorizedA) || $accessAuthorizedA[0] != 'all' ) {
							
							if(version_compare(JVERSION,'1.6.0','<')){ //j15
								$usergid = $my->gid;
							}else{ //j16
								$usergid =JAccess::getGroupsByUser($my->id, false);
							}
		
							if (is_array($accessAuthorizedA)){
								if(is_array($usergid)) {
									$canAccess = array_intersect($usergid,$accessAuthorizedA);
								}else{
									if ( !in_array( $usergid,$accessAuthorizedA) ) $canAccess=false;
								}
							}else{
								if(is_array($usergid)) {
									$canAccess = array_intersect($usergid,$accessAuthorizedA);
								}else{
									if($usergid != $accessAuthorizedA) $canAccess=false;
								}
							}
						}
							
					}	

					//cehck if I am the owner of the list
					$archivemailing = jNews_Mailing::getOneMailing( 0, $mailingId, 0, $new);

					if ( $archivemailing->author_id == $my->id ) $canAccess = true;

					if( $canAccess || jnews::checkPermissions('admin') || jnews::checkPermissions($gid) || !empty($listsAddEdit ) ){
						if( empty($mailingId) ){
							echo '<script> javascript:alert("'. _JNEWS_SELECT_MAILING .'"); javascript:history.go(-1); </script>';
						} else {
							frontEnd::mailingEdit($subscriberId, $mailingId, $listId, $listType, 'mailing', $canAccess );//savemailing
						}
					}
				}

				break;

			case 'new':
			case 'add':
				
				if($GLOBALS[JNEWS.'enable_jsub']){
					if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
					if(!empty($ownedlists) || jnews::checkPermissions('admin') ){
						frontEnd::mailingEdit($subscriberId, $mailingId, $listId, $listType, 'mailing');//savemailing
					}
				}else{
					
					//$list = jNews_Lists::getOneList($listId);
					$canAccess = false;
					if (  class_exists('jNews_Pro') && !empty($listId) ) {
						$list = jNews_Lists::getOneList( $listId );
						$accessAuthorizedA = explode(',',$list->acc_id);
						if ( !is_array($accessAuthorizedA) || $accessAuthorizedA[0] != 'all' ) {
							
							if(version_compare(JVERSION,'1.6.0','<')){ //j15
								$usergid = $my->gid;
							}else{ //j16
								$usergid =JAccess::getGroupsByUser($my->id, false);
							}
		
							if (is_array($accessAuthorizedA)){
								if(is_array($usergid)) {
									$canAccess = array_intersect($usergid,$accessAuthorizedA);
								}else{
									if ( !in_array( $usergid,$accessAuthorizedA) ) $canAccess=false;
								}
							}else{
								if(is_array($usergid)) {
									$canAccess = array_intersect($usergid,$accessAuthorizedA);
								}else{
									if($usergid != $accessAuthorizedA) $canAccess=false;
								}
							}
						}
							
					}							
					
					
					if( $canAccess || jnews::checkPermissions('admin') || jnews::checkPermissions($gid) || !empty($listsAddEdit) ){
						frontEnd::mailingEdit($subscriberId, $mailingId, $listId, $listType, 'mailing', true );//savemailing
					}
				}
				break;

			case 'archive':
				
				if (  class_exists('jNews_Pro')  ) {
					$list = jNews_Lists::getOneList( $listId );
					$listIds = explode(',',$list->acc_id);
					if ( !is_array($listIds) || $listIds[0] != 'all' ) {
						
						if(version_compare(JVERSION,'1.6.0','<')){ //j15
							$usergid = $my->gid;
						}else{ //j16
							$usergid =JAccess::getGroupsByUser($my->id, false);
						}
	
						if (is_array($listIds)){
							if(is_array($usergid)) {
								$canAccess = array_intersect($usergid,$listIds);
								if( empty($canAccess) ) break;
							}else{
								if ( !in_array( $usergid,$listIds) ) break;
							}
						}else{
							if(is_array($usergid)) {
								$canAccess = array_intersect($usergid,$listIds);
								if( empty($canAccess) ) break;
							}else{
								if($usergid != $listIds) break;
							}
						}
					}
						
				}

				frontEnd::showMailingsFront( $task, $action, $subscriberId, $listId, $listType, true, _JNEWS_MENU_VIEW_ARCHIVE . ' ');
				break;

			
			case 'save':
				JRequest::checkToken() or die( 'Invalid Token' );
				$message = jnews::printYN( jNews_Mailing::saveMailing($mailingId, $listId) ,  _JNEWS_MAILING_SAVED , _JNEWS_ERROR );
				frontEnd::showMailingsFront($task, $action, $subscriberId, $listId, $listType, false, _JNEWS_MENU_MAILING);
			break;	
			
			case 'savepreview':
				JRequest::checkToken() or die( 'Invalid Token' );
				$message = jnews::printYN( jNews_Mailing::saveMailing($mailingId, $listId) ,  _JNEWS_MAILING_SAVED , _JNEWS_ERROR );
				
			case 'preview':
			case 'view':
				if ($mailingId != 0) {

					if($listId > 0) {
						$archivemailing = jNews_Mailing::getMailingView($mailingId,$listId);
					}else{
						$archivemailing = jNews_Mailing::getMailingView($mailingId);
					}


					$list = jNews_Lists::getOneList($listId);
					$acc_level = $list->acc_level;

					jNews_ProcessMail::replaceClass($archivemailing->htmlcontent,$archivemailing->textonly);
					if( !empty( $archivemailing->template_id ) ) {
						jNews_Templates::includeStyles( $archivemailing->htmlcontent, $archivemailing->template_id );
					}

					$archivemailing->htmlcontent = str_replace('{tag:subscriptions}','',$archivemailing->htmlcontent);

					$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );
					
					$forms['main'] = '<form method="post" action="'.$mainLink.'" onsubmit="submitbutton();return false;" name="mosForm" >'."\n\r";
					$forms['main'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';

					//for view it online view
					$currentUrl= JURI::current();

				$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
				
				if(version_compare(JVERSION,'1.6.0','<')){
					$listsAddEdit = jNews_Lists::getIDswithacclevel($my->gid);
				}else{
					$groups = JAccess::getGroupsByUser($my->id);
					$listsAddEdit = jNews_Lists::getIDswithacclevel($groups);
				}
				
				

				if( (jnews::checkPermissions('admin') || jnews::checkPermissions($gid) || !empty($listsAddEdit)) ) {

					$menuA = array();
					$onlyPreview = JRequest::getInt( 'onlypreview' );
					if ( !$onlyPreview ) {
						
						
						//menu Preview
						$menuNew = new stdClass;
						$menuNew->popup = new stdClass;
$menuNew->popup->isPop = false;
						$menuNew->action = 'view';
						$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=view&mailingid='.$mailingId . '&onlypreview=1' );
						$menuNew->link = $linkBut;
						$menuNew->onclick = new stdClass;
$menuNew->onclick->custom = true;
						$menuNew->onclick->js = '';
						$menuNew->title = _JNEWS_VIEW_BROWSER;
						$menuA['view'] = $menuNew;
						
						//menu edit
						$menuNew = new stdClass;
						$menuNew->popup = new stdClass;
$menuNew->popup->isPop = false;
						$menuNew->action = 'edit';
						$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=edit&mailingid='.$mailingId.'&listype='.$listType );
						$menuNew->link = $linkBut;
						$menuNew->onclick = new stdClass;
$menuNew->onclick->custom = true;
						$menuNew->onclick->js = '';
						$menuNew->title = 'Edit';
						$menuA['edit'] = $menuNew;
						
						//menu send
						$menuSend = new stdClass;
						$menuSend->popup = new stdClass;
$menuSend->popup->isPop = true;
						$menuSend->popup->rel = true;
						$menuSend->popup->x = 750;
						$menuSend->popup->y = 500;
						$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=sendready&mailingid='.$mailingId.'&listype='.$listType, true, false, true );
						$menuSend->link = $linkBut;
						$menuSend->action = 'sendready';
						$menuSend->onclick = new stdClass;
$menuSend->onclick->custom = false;
						$menuSend->onclick->js = "";
						$menuSend->title = _JNEWS_MENU_SEND;
						$menuA['sendready'] = $menuSend;
						
						// menu back
						$menuBack = new stdClass;
						$menuBack->popup = new stdClass;
							$menuBack->popup = new stdClass;
$menuBack->popup->isPop = false;
						$menuBack->link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing', false );
						$menuBack->action = 'back';
						$menuBack->onclick = new stdClass;
							$menuBack->onclick->custom = true;
						$menuBack->onclick->js = '';
						$menuBack->title = _JNEWS_MENU_BACK;
						$menuA['back'] = $menuBack;

					}
						
						frontHTML::formStart(_JNEWS_NEWSLETTER_ARCHIVE, 0,'', $menuA );
				   }else{
						//can be improved where we check if user can edit
						if ( empty($archivemailing->visible) || ( empty($archivemailing->published) && $task == 'view' ) ) {
							echo '<center>Access to this mailing is restricted!<center>';
							break;
						}
					   	
				   		frontHTML::formStart(_JNEWS_NEWSLETTER_ARCHIVE, 0,'', null );
				   }
				   
				   
					jNews_MailingsHTML::viewMailing($archivemailing, $forms);
					$go[] = jnews::makeObj('act', 'mailing');
					$go[] = jnews::makeObj('task', 'viewmailing');
					$go[] = jnews::makeObj('listid', $archivemailing->list_id);
					frontHTML::formEnd('', $go);
				} else {
					frontHTML::FEmenu();
					frontEnd::showMailingsFront( $task, $action , $subscriberId, $listId, $listType, false, _JNEWS_MENU_MAILING);
				}
				break;

			case ('sendready'):
				//we update the senddate of the newsletter
				jNews_Mailing::updatesenddate($mailingId);
			
				jNews_MailingsHTML::sendReady($mailingId, $listId, $listType);
				break;

			case ('send'):
				if ( !require_once( JNEWSPATH_CLASS . 'class.queue.php' ) ) return false;
				$queueC = new jNews_Queue;
				$queueC->checkForNewsletters( $mailingId );
				$queueCount = jNews_Queue::getQueueCount( $mailingId );
				$totalSub = JRequest::setVar( 'totalsend', $queueCount );
				$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=continuesend&mailingid='.$mailingId.'&totalsend='.$totalSub, true, false, true );
				jNews_Tools::redirect( $linkBut ); //this line was commented out, we need this so that when we click the send button in the frontend the status of the sending will be displayed
				break;

			case ('continuesend'):
		    	if ( require_once( JNEWSPATH_CLASS . 'class.queue.php' ) ) {
					$queueC = new jNews_Queue;
					$totalSend = JRequest::getVar( 'totalsend',0,'','int');
					$alreadySent = JRequest::getVar( 'alreadysent',0,'','int');
					$queueC->start = $alreadySent;
					$queueC->total = $totalSend;
					$queueC->pause = $GLOBALS[JNEWS.'pause_time'];
					$queueC->sendQueue( false, $mailingId, false , true );
		    	}
				ob_start();
				exit;
				break;

			case 'unpublished':
				JRequest::checkToken() or die( 'Invalid Token' );
				jNews_Mailing::unpublishMailing($mailingId);
				frontEnd::showMailingsFront( $task, $action , $subscriberId, $listId, $listType, false, _JNEWS_MENU_MAILING);
				break;

			case 'copy':
				JRequest::checkToken() or die( 'Invalid Token' );
				$message = jnews::printYN( jNews_Mailing::copyMailing($mailingId) ,  _JNEWS_MAILING_COPY , _JNEWS_ERROR );
				if(empty($listId) OR $listId == 0) $lsid = jNews_Mailing::getListId($mailingId);

				jNews_Mailing::insertListMailings($listId);
				frontEnd::showMailingsFront( $task, $action , $subscriberId, $listId, $listType, false, _JNEWS_MENU_MAILING);
				break;

			case 'cpanel':
				jNews_Tools::redirect('index.php?option='.JNEWS_OPTION );
			break;
			
			default:
				$viewarchive = false;
				if(empty($my->id)) $viewarchive = true;
				frontEnd::showMailingsFront( $task, $action , $subscriberId, $listId, $listType, $viewarchive, _JNEWS_MENU_MAILING );
				break;
		}

   	return true;

   }

  public static function checkMailingSave( &$mailingType ) {
	$listIdA = JRequest::getVar( 'aca_mailing_addto', array() );
	$mySess = JFactory::getSession();
	if (empty($mailingType)) $mailingType = $mySess->get('listype', '', 'LType');
	$found = false;
	foreach( $listIdA as $listids => $values ){
		if( $values == 1 ){
			$found = true;
			break;
		}
	} 
	if( !$found ) {
		$text = ( $mailingType == 2 ) ? _JNEWS_SELCT_MAILINGCAMPAIGN : _JNEWS_SELCT_MAILINGLIST;
		echo "<script> alert('".addslashes($text)."'); window.history.go(-1);</script>\n";
		return false;
	}
	return true;
 }

	public static function updateFrontSubscription($subscriberId) {
		$message = jNews_Subscribers::updateReceiveHtml($subscriberId);
		//$status = jNews_ListsSubs::updateOneSuscription($subscriberId);
		$status = jNews_ListsSubs::getListidsSubscribedInfo($subscriberId);
		return jnews::printYN($status , _JNEWS_UPDATED_SUCCESSFULLY, _JNEWS_ERROR);
	}

	
	public static function newSubscriber( $name, $email, $confirm=false, $modsub=null ) {
		
		if ( empty($name) || $name == _JNEWS_NAME ) $name = $email;
		if ( !empty($modsub->email) && ( empty($modsub->name) || $modsub->name == _JNEWS_NAME ) ) $modsub->name = $modsub->email;
		
		
		$database = JFactory::getDBO();
		$acl = JFactory::getACL();
		$rHTML = JRequest::getVar('receive_html', '0', 'request' );
		
		$timezone = JRequest::getVar('timezone', '00:00:00' );
		$lang6 = JRequest::getVar('lang', 'eng' );
		$p = JRequest::getVar('passwordA','');
		
		if($modsub == null || empty($modsub)){
			$modsub = new stdClass;
			$modsub->red_subscription = 1;
			$modsub->mod_message = 0;
			$modsub->effect = 2;
			$receivedHTML = JRequest::getVar( 'receive_html', 0 );
			$modsub->receive_html = ( ( isset($receivedHTML) &&
			 ( ( is_bool($receivedHTML) && $receivedHTML )
			  || ( is_string($receivedHTML) && ( $receivedHTML == 'true' || $receivedHTML == '1' ) )
			  || ( is_int($receivedHTML) && $receivedHTML )
			  ) )  ? 1 : 0 );
		}

		//get the listid variable from subscription via url
		$l=JRequest::getVar('listid','');
		if(!empty($l)){
			$result = jNews_Lists::doListsExists($l);
			if(!$result){
				$message = jnews::printM('red' , _JNEWS_SUBSCRIPTION_NOT_AVAIL_LIST );
				return $message;//return message if ever one of the listids enter does not exist
			}
		}

		if($GLOBALS[JNEWS.'level'] > 2){
			$column1=JRequest::getVar('column1','');
			$column2=JRequest::getVar('column2','');
			$column3=JRequest::getVar('column3','');
			$column4=JRequest::getVar('column4','');
			$column5=JRequest::getVar('column5','');
		}
		
		if($GLOBALS[JNEWS.'level'] > 1){
			$security=JRequest::getVar('security_code','');
			$captcha=JRequest::getVar('security_captcha','');
		}
		
		$fromSubscribe=JRequest::getVar('fromSubscribe','');
		$fromFrontend=JRequest::getVar('fromFrontend','');

		if(!$modsub->red_subscription ){
			if($modsub != null){
				$fromFrontend = 1;
				$p = $modsub->passwordA;
				$name = $modsub->name;
				$email = $modsub->email;
			}
		}

		$canInsert=false;
		$message='';

		if( $p==$GLOBALS[JNEWS.'url_pass'] && empty($fromSubscribe) && empty($fromFrontend) ) {
			$fromURL=true;
		}else{
			$fromURL=false;
		}

		if($fromSubscribe){
				$canInsert=true;
		}elseif($fromFrontend){//check if the request is coming from the frontend
				$canInsert=true;
		}elseif($fromURL){//check if the request to insert subscriber is directly from entering the URL
				$canInsert=true;
		}else{
			if(!$modsub->red_subscription ){
				if ( $modsub->module_message || $modsub->effect == 2 ) $message = '<div id=mod_message>'. _JNEWS_URL_MES. '</div>';
				else $message = '<div id=mod_message><span style="color:red;">'. _JNEWS_URL_MES. '</span></div>';
			}else{
				$message .=jnews::printM('red' , _JNEWS_URL_MES);
			}
		}

		if( $canInsert ) {
			$newSubscriber = new stdClass;
			$newSubscriber->id =  0;
			$newSubscriber->user_id =  0 ;
			$newSubscriber->name =  addslashes($name) ;
			$newSubscriber->email =  $email ;
			$newSubscriber->receive_html = ( isset($modsub->rhtml) ? $modsub->rhtml : ( isset($modsub->receive_html) ? $modsub->receive_html : null ) );

			if($GLOBALS[JNEWS.'level'] > 2){
				$newSubscriber->column1 =  $column1;
				$newSubscriber->column2 =  $column2;
				$newSubscriber->column3 =  $column3;
				$newSubscriber->column4 =  $column4;
				$newSubscriber->column5 =  $column5;
			}
			
			if ( !$modsub->red_subscription ){
				if( $modsub != null ) {
					$newSubscriber->name = addslashes($modsub->name);
					$newSubscriber->email = $modsub->email;
					if ( !isset($newSubscriber->receive_html) ) $newSubscriber->receive_html = ( isset($modsub->rhtml) ? $modsub->rhtml : ( isset($modsub->receive_html) ? $modsub->receive_html : null ) );

					if($GLOBALS[JNEWS.'level'] > 2){
						$newSubscriber->column1 =  $modsub->column1;
						$newSubscriber->column2 =  $modsub->column2;
						$newSubscriber->column3 =  $modsub->column3;
						$newSubscriber->column4 =  $modsub->column4;
						$newSubscriber->column5 =  $modsub->column5;
					}
				}
			}

			if ($GLOBALS[JNEWS.'require_confirmation'] && (!$confirm)) $newSubscriber->confirmed =  0;
			else $newSubscriber->confirmed =  1;

			$newSubscriber->ip =  jNews_Subscribers::getIP();
			$newSubscriber->blacklist =  0;
			$newSubscriber->timezone = $timezone;
			$newSubscriber->language_iso = $lang6;
			$newSubscriber->params = '';
			$newSubscriber->subscribe_date = time();
			
			jnews::objectHTMLSafe( $newSubscriber );
			$confirmation = true;

			if( empty($modsub->subscribedlists) ) $modsub->subscribedlists=null;
			//check if the subscirber already exist
			$data = array();
			$data['email'] = $newSubscriber->email;
			jNews_Subscribers::getSubscriberIdFromEmail( $data );
			$alreadyExist = ( !empty($data['subscriberId']) ) ? true : false;
			
			if ( !jNews_Subscribers::saveSubscriber( $newSubscriber, $newSubscriber->id, !$alreadyExist, $modsub->subscribedlists, $modsub->red_subscription) ) {
				if ( jNews_Subscribers::getSubscriberIdFromEmail($data) ) {
					$confirmation = false;
				} else {
					return jnews::printM( 'blue' , _JNEWS_ERROR );
				}
			}

			if ( $GLOBALS[JNEWS.'require_confirmation'] && $confirmation && !$confirm && !jNews_Subscribers::userConfirmed($newSubscriber->email) ) {
				$needConfirm = true;
			}else{
				$needConfirm = false;
			}
			
			if ($needConfirm) {
				if ( !$modsub->red_subscription ) {
					if( $modsubmodule_message || $modsub->effect == 2 ) $message ='<div id=mod_message>'._JNEWS_COMFIRM_SUBSCRIPTION.'</div>';
					else $message = '<div id=mod_message>'. str_replace( array( '<br />', '<br>' ), '' , _JNEWS_COMFIRM_SUBSCRIPTION ) . '</div>';	// <span style="color:blue;"></span>
				}else{
					$message = jnews::printM( 'blue' , _JNEWS_COMFIRM_SUBSCRIPTION );
				}
			} else {
				$message2Show = $alreadyExist ? _JNEWS_SUCCESS_ALREADY_SUB : _JNEWS_SUCCESS_ADD_LIST;
				if( !$modsub->red_subscription ){
					if ( $modsub->module_message || $modsub->effect == 2 ) $message ='<div id=mod_message>'. $message2Show. '</div>';
					else $message = '<div id=mod_message><span style="color:green;">'. $message2Show. '</span></div>';
				}else{
					$message = jnews::printM( 'green' , $message2Show );
				}
			}

			//we send the subscription notification to the list owner if it is turn to yes
			if ( $GLOBALS[JNEWS.'level'] > 2 ) {

				//get listname/s subscribed to
				$query = 'SELECT * from `#__jnews_lists` WHERE `id` in (';
				$query .='SELECT `list_id` from `#__jnews_listssubscribers` WHERE `subscriber_id` = (';
				$query .='SELECT `id` from `#__jnews_subscribers` WHERE `subscribe_date`='.$newSubscriber->subscribe_date ;
				$query .='))';
				$database->setQuery($query);
				$SubscribedList = $database->loadObjectList();

				if ( !empty($SubscribedList) ) {

					foreach( $SubscribedList as $list ) {

						if( ($list->subnotifysend==1) && !empty($list->subnotifymsg) && !empty($list->owner) ) {
							$my = JFactory::getUser( $list->owner );
							jNews_ProcessMail::sendNotification( $list->subnotifymsg, $newSubscriber, $my, $list, _JNEWS_SUBS_NOTIFYSUBJECT );
						}
						
						if ( !empty($GLOBALS[JNEWS.'subscribe_notification']) ) {
							$listOfAdminA = explode( ',', $GLOBALS[JNEWS.'subscribe_notification'] );
							if ( !empty($listOfAdminA) ) {
								foreach( $listOfAdminA as $oneAdmin ) {
									if ( empty($oneAdmin) ) continue;
									$owner = new stdClass;
									$owner->name = $oneAdmin;
									$owner->email = $oneAdmin;
									jNews_ProcessMail::sendNotification( _JNEWS_SUBSDEFAULT_NOTIFYMSG, $newSubscriber, $owner, $list, _JNEWS_SUBS_NOTIFYSUBJECT );
								}
							}
						}

					}

				}

			}

		}
		
  	return $message;

}

	 public static function subscriptions( $subscriber, $subscriberId, $listId, $action ) {

		$Itemid= JRequest::getInt('Itemid');
		if (!empty($subscriberId)) {
			$qid[0] = $subscriberId;
		    $subscriber = jNews_Subscribers::getSubscribersFromId($qid, false);
		    $queues = jNews_ListsSubs::getSubscriberLists($subscriberId);
		} else {
			$subscriber = new stdClass;
			$subscriber->id =  '' ;
			$subscriber->user_id =  0 ;
			$subscriber->name =  '' ;
			$subscriber->email =  '' ;
			$subscriber->ip = jNews_Subscribers::getIP() ;
			$subscriber->receive_html =  1 ;
			$subscriber->confirmed =  1;
			$subscriber->blacklist =  0;
			$subscriber->timezone = '00:00:00';
			$subscriber->language_iso = 'eng';
				
			$newSubscriber = new stdClass;
			$newSubscriber->params = '';

			//column
			if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
				$newSubscriber->column1='';
				$newSubscriber->column2='';
				$newSubscriber->column3='';
				$newSubscriber->column4='';
				$newSubscriber->column5='';
			}//end check of version pro

			$subscriber->subscribe_date = time();
            $queues = '';
		}

		if(!empty($subscriber->user_id)){
			if ($subscriber->user_id>0) {
				$access = jnews::checkPermissions('admin');
			} else {
				$access = false;
			}
		}

			$lists = jNews_Lists::getLists( $listId, 0, $subscriberId, '', false , true, false );
			$doShowSubscribers = false;

			$mainLink = 'option='.JNEWS_OPTION;
			$selectLink = 'option='.JNEWS_OPTION.'&act='.$action;
			$mainLink = jNews_Tools::completeLink($mainLink,false);
			$selectLink = jNews_Tools::completeLink($selectLink,false);
			
			$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );//88855441

			$forms['main'] = '<form method="post" action="'. $mainLink . '" onsubmit="submitbutton();return false;" name="mosForm" >'."\n\r";
			$forms['select'] = '<form method="post" action="'. $selectLink . '"  name="jNewsFilterForm">';

			$forms['main'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';
			$forms['select'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';

			//menu cancel
			$menuCancel = new stdClass;
			$menuCancel->popup = new stdClass;
			$menuCancel->popup = new stdClass;
$menuCancel->popup->isPop = false;
			$menuCancel->link = '#';
			$menuCancel->action = 'cancel';
			$menuCancel->onclick = new stdClass;
			$menuCancel->onclick = new stdClass;
$menuCancel->onclick->custom = true;
			$menuCancel->onclick->js = 'javascript:history.go(-1)';
			$menuCancel->title = _JNEWS_CANCEL;

			//menu save
			$menuSave = new stdClass;
			$menuSave->popup = new stdClass;
			$menuSave->popup = new stdClass;
$menuSave->popup->isPop = false;
			$menuSave->link = '#';
			$menuSave->action = 'save';
			$menuSave->onclick = new stdClass;
			$menuSave->onclick = new stdClass;
$menuSave->onclick->custom = false;
			$menuSave->onclick->js = '';
			$menuSave->title = _JNEWS_SAVE;

//			$link = 'option='.JNEWS_OPTION;
//			$link = jNews_Tools::completeLink($link,false);
//			$menuCpanel = new stdClass;
//			$menuCpanel->popup = new stdClass;
$menuCpanel->popup->isPop = false;
			$menuCpanel->popup->isPop = false;
//			$menuCpanel->link = $link;
//			$menuCpanel->action = 'cpanel';
//			$menuCpanel->onclick = new stdClass;
$menuCpanel->onclick->custom = false;
//			$menuCpanel->onclick->js = '';
//			$menuCpanel->title = _JNEWS_MENU_CPANEL;

			$menuA = array();
			$menuA['save'] = $menuSave;
			//$menuA['cancel'] = $menuCancel;
//			$menuA['cpanel'] = $menuCpanel;

			frontHTML::formStart( _JNEWS_SUBSCRIPTIONS, 0, 'name_email', $menuA);
			if(empty($access)) $access=29;
		    echo jNews_SubscribersHTML::editSubscriber($subscriber, $lists, $queues, $forms, $access, true, false );
			$go[] = jnews::makeObj('act', $action);
			if(empty($subscriber->id)) $subscriber->id=0;
			$go[] = jnews::makeObj('subscriber_id', $subscriber->id);
			if(empty($subscriber->user_id)) $subscriber->user_id=0;
			$go[] = jnews::makeObj('user_id', $subscriber->user_id);

			//frontHTML::formEnd(_JNEWS_SAVE, $go);
			frontHTML::formEnd(null, $go);

   return true;
   }

	 //next to check
	 public static function changeSubscriptions($subscriber, $subscriberId, $cle='', $action) {
		$Itemid= JRequest::getInt('Itemid');
		$db = JFactory::getDBO();

		if (!empty($subscriberId) AND !empty($cle)) {
			//$qid[0] = $subscriberId;
		    //$subscriber = jNews_Subscribers::getSubscribersFromId($qid, false);
		    $confirmed = false;
		    if ( md5($subscriber->email) == $cle ) {
			    $subsListsA = jNews_ListsSubs::getSubscriberLists($subscriberId);

				$confirmed = true;

				if ($subscriber->user_id>0) {
					$access = jnews::checkPermissions('admin');
				} else {
					$access = false;
				}

				if ($subscriberId>0) $author = 0;

				//we get the lists subscribed by the subscriberId
				$query = 'SELECT L.`list_name`, L.`list_desc`, L.`acc_level`, L.`id`,L.`list_type` FROM `#__jnews_lists` AS L ' .
						 'LEFT JOIN `#__jnews_listssubscribers` AS LS ON  L.`id` = LS.`list_id` ' ;
			    $query .='WHERE LS.`subscriber_id`='.$subscriberId.' AND L.`hidden`!=0 AND L.`published`!=0';
				$query .= jnews::orderBy('list_idA');
				$db->setQuery($query);
				$lists = $db->loadObjectList();

				$doShowSubscribers = false;
				$mainLink = 'option='.JNEWS_OPTION;
				$selectLink = 'option='.JNEWS_OPTION.'&act='.$action;
				$mainLink = jNews_Tools::completeLink($mainLink,false);
				$selectLink = jNews_Tools::completeLink($selectLink,false);

				$forms['main'] = '<form method="post" action="'. $mainLink . '" onsubmit="submitbutton();return false;" name="mosForm" >'."\n\r";
				$forms['select'] = '<form method="post" action="'. $selectLink . '"  name="jNewsFilterForm">'."\n\r";


				$forms['main'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';
				$forms['select'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';
				$forms['main'] .= '<input type="hidden" name="confirmed" value="'.$confirmed.'" />';
				frontHTML::formStart( _JNEWS_SUBSCRIPTIONS, 0, 'name_email');
			    echo jNews_SubscribersHTML::editSubscriber($subscriber, $lists, $subsListsA, $forms, $access, true, false);
				$go[] = jnews::makeObj('act', $action);
				$go[] = jnews::makeObj('subscriber_id', $subscriber->id);
				$go[] = jnews::makeObj('user_id', $subscriber->user_id);
				frontHTML::formEnd(_JNEWS_CHANGE_SUBSCRIPTIONS, $go);
				return true;
			} else {
			 	return false;
			}
		} else {
			return false;
		}

   }

	public static function confirmRegistration($d) {
		if (!empty($d['subscriberId']) AND !empty($d['cle'])) {
			$qid[0] = $d['subscriberId'];
		    $subscriber = jNews_Subscribers::getSubscribersFromId($qid, false);
		    if ( md5($subscriber->email) == $d['cle'] ) {
				$subscriber->confirmed = 1;
				$subscriber->name = addslashes($subscriber->name);
				 jNews_Subscribers::saveSubscriber($subscriber, $subscriber->id, false );//&$subscriberId
		    }

		    if ( !require_once( JNEWSPATH_CLASS . 'class.queue.php' ) ) return false;
		    jNews_Queue::updateSuspendedQueue($subscriber->id);

		}
		return true;
   }

	public static function remove($subscriber, $subscriberId, $cle='') {
		
		$db = JFactory::getDBO();
		$listUnsubA=array(); //unsubscribe listIds
		$allAvailableListsA = JRequest::getVar('sub_list_id', '');
		$unsubListValA = JRequest::getVar('unsubscribed', '');

		foreach ($allAvailableListsA as $key=> $unsublist){
			if(!empty($unsubListValA[$key])==1){
				$listidUnsubA[]=$unsublist;
			}
		}

		if (!empty($subscriberId) AND !empty($cle)) {
			   
			if ( md5($subscriber->email) == $cle ) {
				if ( !empty($listidUnsubA) ) {
					$query = 'UPDATE `#__jnews_listssubscribers` SET ';
					$query .= ' `unsubdate`='.time();
					$query .= ' ,`unsubscribe`=1';
					$query .= ' WHERE `subscriber_id`= '.$subscriberId;
					$query .= ' AND `list_id` IN ('.implode(',',$listidUnsubA).')';
					$db->setQuery($query);
					$result = $db->query();

					$query = 'SELECT * FROM `#__jnews_lists` WHERE `id` IN ('.implode(',',$listidUnsubA).')';
					$db->setQuery($query);
					$listsO = $db->loadObjectList();
					
				}

				//check if we have subscription to any auto-responder
				$query = 'SELECT `id` FROM `#__jnews_lists` ';
				$query .= ' WHERE `list_type`= 2 ';
				$query .= ' AND `id` IN ('.implode(',',$listidUnsubA).')';
				$db->setQuery( $query );
				$autoRespondListA = $db->loadResultArray();

				if ( !empty($autoRespondListA) ) {
					$query = 'DELETE FROM `#__jnews_queue` ';
					$query .= ' WHERE `subscriber_id`= '.$subscriberId;
					$query .= ' AND `mailing_id` IN ( SELECT `mailing_id` FROM `#__jnews_listmailings` WHERE `list_id` IN ('.implode(',',$autoRespondListA).') )'; 
					$db->setQuery($query);
					$db->query();
				}
				
				foreach ($listsO as $key=>$list ) {

					//we send the unsubscription notification to the subscriber if it is turn to yes
					if ($list->unsubscribesend ==1) {
						jNews_ProcessMail::sendUnsubcribeEmail($subscriber, $subscriberId, $list );
					}

					//we send the unsubscription notification to the list owner if it is turn to yes
					if (  $GLOBALS[JNEWS.'level'] > 2 && ($list->unsubscribenotifyadmin == 1) && !empty($list->notifyadminmsg) && !empty($list->owner) ) {
						$my = JFactory::getUser( $list->owner );
						jNews_ProcessMail::sendNotification($list->notifyadminmsg, $subscriber, $my, $list, _JNEWS_UNSUBS_NOTIFYSUBJECT );
					}
					
					if ( !empty($GLOBALS[JNEWS.'unsubscribe_notification']) ) {
						$listOfAdminA = explode( ',', $GLOBALS[JNEWS.'unsubscribe_notification'] );
						if ( !empty($listOfAdminA) ) {
							foreach( $listOfAdminA as $oneAdmin ) {
								if ( empty($oneAdmin) ) continue;
								$owner = new stdClass;
								$owner->name = $oneAdmin;
								$owner->email = $oneAdmin;
								jNews_ProcessMail::sendNotification( _JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION, $newSubscriber, $owner, $list, _JNEWS_UNSUBS_NOTIFYSUBJECT );
							}
						}
					}

				}

			}

		}

	return $result;

   }
   
   public static function unsubscribeall( $subscriber, $subscriberId, $cle='' ) {
   		$my =  &JFactory::getUser();
   	
		if ((!empty($subscriberId) AND !empty($cle)) || !empty($my->id)) {
			   if ( md5($subscriber->email) == $cle || !empty($my->id) ) {
					//we unsubscribe the user to all lists
					$db = JFactory::getDBO();
					
					$query = 'SELECT * FROM `#__jnews_lists`';
					$query .= ' WHERE `id` IN (SELECT `list_id` FROM `#__jnews_listssubscribers` WHERE `subscriber_id`='.$subscriberId.' AND `unsubscribe`=0)';
					$db->setQuery($query);
					$listsO = $db->loadObjectList();
					
					if(!empty($listsO)){
						foreach ($listsO as $key=>$list){
				
							//we send the unsubscription notification to the subscriber if it is turn to yes
							if ($list->unsubscribesend ==1) {
								jNews_ProcessMail::sendUnsubcribeEmail($subscriber, $subscriberId, $list);
							}
					
							//we send the unsubscription notification to the list owner if it is turn to yes
							if (  $GLOBALS[JNEWS.'level'] > 2 && ($list->unsubscribenotifyadmin == 1) && !empty($list->notifyadminmsg) && !empty($list->owner) ) {
								$my = JFactory::getUser( $list->owner );
								jNews_ProcessMail::sendNotification($list->notifyadminmsg, $subscriber, $my, $list, _JNEWS_UNSUBS_NOTIFYSUBJECT );
							}
							
							if ( !empty($GLOBALS[JNEWS.'unsubscribe_notification']) ) {
								$listOfAdminA = explode( ',', $GLOBALS[JNEWS.'unsubscribe_notification'] );
								if ( !empty($listOfAdminA) ) {
									foreach( $listOfAdminA as $oneAdmin ) {
										if ( empty($oneAdmin) ) continue;
										$owner = new stdClass;
										$owner->name = $oneAdmin;
										$owner->email = $oneAdmin;
										jNews_ProcessMail::sendNotification( _JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION, $newSubscriber, $owner, $list, _JNEWS_UNSUBS_NOTIFYSUBJECT );
									}
								}
							}
														
						}
					}
					
					$query = 'UPDATE `#__jnews_listssubscribers` SET `unsubscribe`=1, `unsubdate`='.time().' WHERE `subscriber_id`='.$subscriberId;
					$db->setQuery($query);
					$result = $db->query();
			   }
		}
		
		return $result;
   	
   }


	public static function unsubscribe( $subscriber, $subscriberId, $cle='', $mailingId, $action) {
		$Itemid= JRequest::getInt('Itemid');
		$db = JFactory::getDBO();
		
		echo '<div class="jNewsUnsubscribe">';
		if (!empty($subscriberId) AND !empty($cle)) {
			$i=0;
		  	if ( md5($subscriber->email) == $cle ) { //$subscriber
				frontHTML::formStart( _JNEWS_SUBSCRIPTIONS, 0, 'unsubscribe');

				$query = 'SELECT L.`list_name`, L.`list_desc`, L.`hidden` ,L.`acc_level`, L.`id`, LM.`list_id`,L.`list_type` FROM `#__jnews_lists` AS L ' .
						'LEFT JOIN `#__jnews_listmailings` AS LM ON L.`id` = LM.`list_id` ' .
						'LEFT JOIN `#__jnews_listssubscribers` AS LS ON  L.`id` = LS.`list_id` ' .
			    		'WHERE LM.`mailing_id`='.$mailingId.' AND LS.`subscriber_id`='.$subscriberId ;
			    $query .= ' AND LS.`unsubscribe`= 0';
//			    $query .= ' AND ( L.`hidden`!=0 AND L.`published`!=0 )';//7788744
				$query .= ' AND ( L.`published`!=0 )';
				$query .= jnews::orderBy('list_idA');
				$db->setQuery($query);
				$lists = $db->loadObjectList();
				
				if(empty($lists)){ //invisible or unpublished
					jnews::printM('ok' , _JNEWS_LISTS_UNSUBMSG);
					return false;
				}

				$checked = 1;
				$checkedPrint = ($checked != 0) ? 'checked="checked"' : '';

				$mainLink = 'option='.JNEWS_OPTION;
				$mainLink = jNews_Tools::completeLink($mainLink,false,false);

				echo '<form method="post" action="'. $mainLink . '" onsubmit="submitbutton();return false;" name="mosForm" >'."\n\r";
				echo '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';
//7788744
				if ( !empty($lists) ) {
					
				
					foreach( $lists as $list ){
						
	//					if($list->hidden == 1){//if the list is hidden we don't go to the view
	//						$link = 'option='.JNEWS_OPTION.'&act='.$action.'&subscriber=' . $subscriberId . '&cle=' . $cle. '&Itemid=' . $Itemid;
	//						$link = jNews_Tools::completeLink($link,false);
	//						return true;
	//					}
						
						$i++;
						$checkedPrint = ($checked != 0) ? 'checked="checked"' : '';
	                    echo "\n".'<input id="wz_3'.$i.'" type="checkbox" class="inputbox" value="1" name="unsubscribed['.$i.']" '.$checkedPrint.' />';
	                    echo "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" />';
	                    echo "\n".'<span class="aca_list_name"';
	                    echo '>'.jNews_Tools::toolTip( $list->list_desc, $list->list_name, '', '', $list->list_name,'', 1).'</span>';
	                    echo '<br>';
					}
				}
				echo '<br>';
				$link = 'option='.JNEWS_OPTION.'&act=change&subscriber=' . $subscriberId . '&cle=' . $cle. '&Itemid=' . $Itemid;
				$link = jNews_Tools::completeLink($link,false);
				?>
		   		<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
				<input type="hidden" name="act" value="<?php echo $action; ?>" />
		   		<input type="hidden" name="task" value="" />
		    	<input type="hidden" name="boxchecked" value="0" />
		   		<input type="hidden" name="subscriber_id" value="<?php echo $subscriber->id; ?>" />
		   		<input type="hidden" name="cle" value="<?php echo md5($subscriber->email); ?>" />
		   		<div class="subscribe">
				<?php
				if ( $i==1 ) echo _JNEWS_UNSUBSCRIBE_MESSAGE .'<br /><br />';
				else echo _JNEWS_UNSUBSTOLISTS_MESSAGE;
				?></div><?php
				frontHTML::formEndUnsubscribe($link, $cle, $subscriberId);
				
				//for unsubscribe all
				if($GLOBALS[JNEWS.'show_unsubscribe_all']){
					$link = 'option='.JNEWS_OPTION.'&act=unsubscribeall&subscriber=' . $subscriberId . '&cle=' . $cle. '&Itemid=' . $Itemid;
					$link = jNews_Tools::completeLink($link,false);
					echo '<a href="'.$link.'"> '._JNEWS_UNSUBSCRIBE_ALL_OR.'</a>';
					echo '<br /><br /><br />';
					
				}
				
				
			} else {
			 	return false;
			}
		} else {
			return false;
		}
		echo '</div>';
   }//enfct

	 public static function showSubscriberLists($subscriberId, $action) {
		
	 	$lists = jNews_Lists::getLists(0, 0, $subscriberId, '', false , true, false);
		if ($subscriberId==0) {
			$subscriber ='';
			$queues = '';
			jNews_SubscribersHTML::showSubscriberLists($subscriber, $lists, $queues, true);
		} else {
			frontEnd::subscriptions('',$subscriberId, 0, 'save');
		}
		
	    return true;
	    
   }


	 public static function showMailingsFront( $task, $action, $subscriberId, $listId, $listType='', $viewArchive, $pageTile) {
		$Itemid= JRequest::getInt('Itemid');

		if(empty($Itemid)) $Itemid = $GLOBALS[JNEWS.'itemidAca'];
		
		$gidAdmins = array(24,25,7,8);
		$my = JFactory::getUser();

		if(version_compare(JVERSION,'1.6.0','>=')){ //j16
   			$usergid =JAccess::getGroupsByUser($my->id, false);
			$my->gid = $usergid[0];
   		}

		
		$start = JRequest::getVar('start', '0' );
		$emailsearch = JRequest::getVar( 'emailsearch', '', '', 'STRING' );$emailsearch = htmlentities( $emailsearch, ENT_COMPAT );
		$order = JRequest::getVar('order', 'idD' );
		$dropList = JRequest::getVar('droplist', 'ZZZZ' );
		$my = JFactory::getUser();
		$accessGrant = false;

		 $limit = JRequest::getInt( 'limit' );
		 if ( empty($limit) || $limit > 100 ) $limit = 20;
		 
 	     $total = 0;
		 if ($dropList=='ZZZZ') $dropList = $listType .'-'. $listId;
 	     $total = 0;

		$dropListValues = explode ('-', $dropList);
		$listType = $dropListValues[0];
		$listId = $dropListValues[1];

		$id = 0;
		if($GLOBALS[JNEWS.'enable_jsub']){
			if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
			if(!empty($ownedlists)) $id = $my->id;
		}

		$allowed = false;
		if ( class_exists('jNews_Pro') && $listId>0 ) {
			$list = jNews_Lists::getOneList($listId);
			$allowed = jnews::checkPermissions( $list->acc_level );
		} elseif ( class_exists('jNews_Pro') && empty($listId) ) {
			//check all list
			$myQ = 'SELECT `acc_level` FROM `#__jnews_lists` ';
			$db = JFactory::getDBO();
			$db->setQuery( $myQ );
			$listsAccessHere = $db->loadObjectList();
			$allowed = false;
			if ( !empty($listsAccessHere) ) {
				foreach( $listsAccessHere as $oneAcessL ) {
					if ( jnews::checkPermissions($oneAcessL->acc_level) ) {
						$allowed = true;
						break;
					}
				}//endfoerach
			}
		} else $allowed = in_array( $my->gid, $gidAdmins );

		if(!empty($my->id)) $ownedlists=jNews_Lists::getOwnedlists($my->id);

		$accessGrant = ( !empty($ownedlists) ) ? true : $allowed;


		if ( $accessGrant || $GLOBALS[JNEWS.'level'] > 2 ) {
			//we don't filter the newsletters by lists yet - 8889955
			if ( empty($listType) ) $listType = array( 1, 7);
			$mailings = jNews_Mailing::getMailings($listId, $listType, $start, $limit, $emailsearch, $order, false, $viewArchive);
		} else {
			if ($listType==1 || $listType==2 || $listType==7 ) {
				$mailings = jNews_Mailing::getMailings($listId, $listType, $start, $limit, $emailsearch, $total, $order, true, $viewArchive);
			} elseif ($listType==0) {
				$mailings1 = jNews_Mailing::getMailings( $listId, 1, $start, $limit, $emailsearch, $total, $order, true, $viewArchive );
				$mailings2 = jNews_Mailing::getMailings( $listId, 2, $start, $limit, $emailsearch, $total, $order, true, $viewArchive );
				$mailings7 = jNews_Mailing::getMailings( $listId, 7, $start, $limit, $emailsearch, $total, $order, true, $viewArchive );
				$mailings = array_merge($mailings1, $mailings2, $mailings7);
			} else {
				$mailings = '';
			}
		}

		if ($listId==0) {
	      $lists['title'] = jNews_ListType::chooseType($task, $action, $listType , 'titles', '', _JNEWS_MENU_MAILING);
	    } else {
			$listing = jNews_Lists::getLists($listId, 0, $subscriberId, '', false, false, true);
			$listType = ( $listType>0 ) ? $listType : '0' ;
			$lists['title'] = _JNEWS_NEWSLETTER_ARCHIVE;
	   }
	   
	   //we check if the user has access to addedit mailing to a list
	 	if(version_compare(JVERSION,'1.6.0','<')){
			$listsAddEdit = jNews_Lists::getIDswithacclevel($my->gid, $listId);
		}else{
			$groups = JAccess::getGroupsByUser($my->id);
			$listsAddEdit = jNews_Lists::getIDswithacclevel($groups, $listId);
		}
				
		$haveaccesstoList = true;
		$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
		if( !$allowed && empty($listsAddEdit) && !empty($my->id) && !jnews::checkPermissions('admin') && !jnews::checkPermissions($gid) ) {
			$haveaccesstoList = false;
		}

		if($haveaccesstoList){
			$dropDownList = jNews_ListType::getMailingDropList($listId, $listType, $order);
			if (!empty($dropDownList) ) $lists['droplist'] = JHTML::_('select.genericlist', $dropDownList, 'droplist', 'class="inputbox" size="1" onchange="document.jNewsFilterForm.submit();"', 'id', 'name', $dropList );
		}

		$linkMain = 'index.php?option='.JNEWS_OPTION.'&act=' . $action;
		$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );

		$forms['main'] = '<form method="post" action="'. $mainLink . '" enctype="multipart/form-data" onsubmit="submitbutton();return false;" name="adminForm" >'."\n\r";//$linkMain
		$forms['select'] = '<form method="post" action="'. $linkMain . '"  name="jNewsFilterForm">'."\n\r";

		$forms['main'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';
		$forms['select'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';

		$show = jNews_ListType::showType($listType , 'showMailings');
		$show['index'] = 'index';
		$show['select']=false;
		$show['send'] =false;
		$show['buttons'] = true;

		if ( class_exists('jNews_Pro') && !$viewArchive) {
			$show['admin'] = true;
			$show['status'] = true;
		}
		
		$mailingType = ( $listType == 7 ) ? 1 : $listType;

		$db = JFactory::getDBO();
		$query = 'SELECT * FROM `#__jnews_lists` WHERE `hidden` = 1 AND `published` = 1 AND ';
		if ( is_array($mailingType) ) {
			$query .= '  `list_type` IN (' . jnews::implode( ',', $mailingType ) . ') ';
		} else {
			$query .= ' `list_type`='.intval($mailingType);
		}				

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

		$menuA = null;
		
		if( ( $my->id > 0 && jnews::checkPermissions('all')) && $haveaccesstoList ) {
			if ( $GLOBALS[JNEWS.'level'] > 2 ) {

				if( ( empty($ownedlists) || !in_array($my->gid, $gidAdmins) ) && !$access ) $accessGrant = false;
				else $accessGrant = true;

				if( $accessGrant){

					$show['select']= true;
					$show['send'] = true;

					// menu new
					$link = 'option='.JNEWS_OPTION.'&act=mailing&task=new&listid='.$listId.'&listype='.$listType.'&Itemid='.$Itemid;
					$link = jNews_Tools::completeLink($link,false);
					$menuNew = new stdClass;
					$menuNew->popup = new stdClass;
$menuNew->popup->isPop = false;
//					$menuNew->link = $link;
					$menuNew->link = '#';
					$menuNew->action = 'new';
					$menuNew->onclick = new stdClass;
$menuNew->onclick->custom = false;
					$menuNew->onclick->js = '';
					$menuNew->title = _JNEWS_NEW;
					//menu edit
					$menuEdit = new stdClass;
					$menuEdit->popup = new stdClass;
$menuEdit->popup->isPop = false;
					$menuEdit->link = '#';
					$menuEdit->action = 'edit';
					$menuEdit->onclick = new stdClass;
$menuEdit->onclick->custom = false;
					$menuEdit->onclick->js = '';
					$menuEdit->title = _JNEWS_MENU_EDIT;

					//menu delete
					$menuDelete = new stdClass;
					$menuDelete->popup = new stdClass;
$menuDelete->popup->isPop = false;
					$menuDelete->link = '#';
					$menuDelete->action = 'delete';
					$menuDelete->onclick = new stdClass;
$menuDelete->onclick->custom = false;
					$menuDelete->onclick->js = '';
					$menuDelete->title = _JNEWS_DELETE;

					$menuPreview = new stdClass;
					$menuPreview->popup = new stdClass;
$menuPreview->popup->isPop = false;
					$menuPreview->link = '#';
					$menuPreview->action = 'preview';
					$menuPreview->onclick = new stdClass;
$menuPreview->onclick->custom = true;
					$menuPreview->onclick->js = 'javascript:if(document.adminForm.boxchecked.value==0){alert(\'Please make a selection from the mailings to preview\');}else{  submitbutton(\'preview\')}';
					$menuPreview->title = 'Preview';

					$menuCopy = new stdClass;
					$menuCopy->popup = new stdClass;
$menuCopy->popup->isPop = false;
					$menuCopy->link = '#';
					$menuCopy->action = 'copy';
					$menuCopy->onclick = new stdClass;
$menuCopy->onclick->custom = false;
					$menuCopy->onclick->js = '';
					$menuCopy->title = 'Copy';

					$menuUnpub = new stdClass;
					$menuUnpub->popup = new stdClass;
$menuUnpub->popup->isPop = false;
					$menuUnpub->link = '#';
					$menuUnpub->action = 'unpublished';
					$menuCopy->onclick = new stdClass;
$menuCopy->onclick->custom = false;
					$menuUnpub->onclick->js = '';
					$menuUnpub->title = 'Unpublished';

					$menuDivider = new stdClass;
					$menuDivider->divider = true;
				} else {
					$menuNew = new stdClass;
					$menuEdit = new stdClass;
					$menuDelete = new stdClass;
					$menuCopy = new stdClass;
					$menuUnpub = new stdClass;
					$menuSend = new stdClass;
					$menuPreview = new stdClass;
					$menuDivider = new stdClass;
				}
			}else{
					$menuNew = new stdClass;
					$menuEdit = new stdClass;
					$menuDelete = new stdClass;
					$menuCopy = new stdClass;
					$menuUnpub = new stdClass;
					$menuSend = new stdClass;
					$menuPreview = new stdClass;
					$menuDivider = new stdClass;
			}

			// menu cpanel
			$link = 'option='.JNEWS_OPTION;
			$link = jNews_Tools::completeLink($link,false);
			$menuCpanel = new stdClass;
			$menuCpanel->popup = new stdClass;
$menuCpanel->popup->isPop = false;
			$menuCpanel->popup->isPop = false;
			$menuCpanel->link = $link;
			$menuCpanel->action = 'cpanel';
			$menuCpanel->onclick = new stdClass;
			$menuCpanel->onclick->custom = true;
			$menuCpanel->onclick->js = "javascript: submitbutton('cpanel')";
			$menuCpanel->title = _JNEWS_MENU_CPANEL;

			$menuA = array();
			if($listType != 7) $menuA['unpublished'] = $menuUnpub;
			$menuA['preview'] = $menuPreview;
//			$menuA['divider1'] = $menuDivider;
			$menuA['new'] = $menuNew;
			$menuA['edit'] = $menuEdit;
			if($listType != 7) $menuA['copy'] = $menuCopy;
//			$menuA['divider'] = $menuDivider;
			$menuA['delete'] = $menuDelete;
//			$menuA['divider1'] = $menuDivider;

		}

		//menu back
		if( $listType == 2 ) $link = 'option='.JNEWS_OPTION.'&act=list&Itemid='.$Itemid;
		$link = 'option='.JNEWS_OPTION.'&Itemid='.$Itemid;
		$link = jNews_Tools::completeLink($link,false,false);
		$menuBack = new stdClass;
		$menuBack->popup = new stdClass;
							$menuBack->popup = new stdClass;
$menuBack->popup->isPop = false;
		$menuBack->link = $link;
		$menuBack->action = 'back';
		$menuBack->onclick = new stdClass;
		$menuBack->onclick->custom = false;
		$menuBack->onclick->js = '';
		$menuBack->title = _JNEWS_MENU_BACK;

		$menuBack = new stdClass;
		$menuA['cpanel'] = $menuBack;

		$title = ( !empty($lists['title']) ) ? $lists['title'] : '';

		if( in_array($my->gid, $gidAdmins) OR !empty($ownedlists) OR $accessGrant) {
			if($listType == 1) $title = 'Newsletters';
			if($listType == 7) $title = 'Smart-Newsletters';
			if($listType == 2) $title = 'Auto-responders';
		}

	   	$app = JFactory::getApplication();
		$setSort = new stdClass;

		if($listType=='2'){ //autoresponder
			$key= JNEWS_OPTION.'.mailing2';
			$column='delay';
			$direction='asc';
		}elseif($listType=='7'){ //smartnewsletter
			$key= JNEWS_OPTION . '.mailing7';
			$column='id';
			$direction='desc';
		}else{ //newsletter
			$key= JNEWS_OPTION . '.mailing1';
			$column='send_date';
			$direction='desc';
		}

		$setSort->orderValue = $app->getUserStateFromRequest( $key.'filter_order', 'filter_order', $column,'cmd' );
		$setSort->orderDir	= $app->getUserStateFromRequest( $key.'filter_order_Dir', 'filter_order_Dir', $direction,'word' );

		$setLimit = new stdClass;
		$setLimit->start = $start;
		$setLimit->end = $limit;
		$setLimit->total = $total;

		frontHTML::formStart( $title , 0, 'show_mailing', $menuA );

		frontHTML::FEmenu();
		jNews_MailingsHTML::showMailingList($mailings, $lists, $start, $limit, $total, $emailsearch, $listId, $listType, $forms, $show, $action,$setLimit,$setSort );
//		$go[] = jnews::makeObj('act', 'mailing');
		$go[] = jnews::makeObj('filter_order', $setSort->orderValue);
		$go[] = jnews::makeObj('filter_order_Dir', $setSort->orderDir);
		backHTML::formEnd($go);

	    return true;

   }

	 public static function mailingEdit($subscriberId, $mailingId, $listId, $listType='', $action, $grantCAnAccess=false ) {
		global $my, $Itemid;
		$issue_nb = JRequest::getVar('issue_nb', '0' );
		$my	= JFactory::getUser();

		if(version_compare(JVERSION,'1.6.0','>=')){ //j16
   			$usergid =JAccess::getGroupsByUser($my->id, false);
			$my->gid = $usergid[0];
   		}

		$accessGrant = false;

		if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);

		$new=0;
		if ( class_exists('jNews_Pro') ) {

 			if ($issue_nb == 0) {
 				$issue_nb = jNews_Mailing::countMailings($listId, '');
				$issue_nb++;
 			}

			if ($listId>0) {
				$list = jNews_Lists::getOneList($listId);
				$mailing = jNews_Mailing::getOneMailing($list, $mailingId, $issue_nb, $new);
				$acc_level = $list->acc_level;
			} else {
				if(!empty($ownedlists)){
					//code 856412
//					$listId = $ownedlists[0];
					$list = jNews_Lists::getOneList($listId);
					$mailing = jNews_Mailing::getOneMailing($list, $mailingId, $issue_nb, $new);
					$acc_level = $list->acc_level;
				}else{
					$listId = jNews_Lists::getIDacclevel($my->gid);
					$list = jNews_Lists::getOneList($listId);
					$mailing = jNews_Mailing::getOneMailing($list, $mailingId, $issue_nb, $new);
					$acc_level = $list->acc_level;
				}
			}

			$id = 0;
			if($GLOBALS[JNEWS.'enable_jsub']){
				if(!empty($my->id)) $ownedlists= jNews_Lists::getOwnedlists($my->id);
				if(!empty($ownedlists)) $id = $my->id;
			}

			
			if ( jnews::checkPermissions($acc_level ) ) $accessGrant = true;

		} else {
			if ( $subscriberId<>0 && jnews::checkPermissions('admin') ) {
				$accessGrant = true;
			}
		}

		if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
			if(class_exists('jNews_Social') && !$GLOBALS[JNEWS.'enable_jsub'])  $accessGrant = true;
		}

		if ( $accessGrant || $grantCAnAccess ) {

 			if ($issue_nb == 0) {
 				$issue_nb = jNews_Mailing::countMailings($listId, '');
				$issue_nb++;
 			}

			if ( empty($mailing) ) {
				if ($mailingId>0 ) {
					$mailing = jNews_Mailing::getOneMailing('', $mailingId, $issue_nb, $new);
				} else if ($listId>0) {
					$list = jNews_Lists::getOneList($listId);
					$mailing = jNews_Mailing::getOneMailing($list, $mailingId, $issue_nb, $new);
				} else {
					return false;
				}
			}

			$mainLink = 'option='.JNEWS_OPTION.'&act=mailing&listid='.$listId.'&listype='.$listType.'&Itemid='.$Itemid;
			$mainLink = jNews_Tools::completeLink($mainLink,false, false);
			
			$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );
			$forms['main'] = '<form method="post" enctype="multipart/form-data" action="'. $mainLink . '" onsubmit="submitbutton();return false;" name="adminForm" >'."\n\r";


			$forms['main'] .= '<input type="hidden" name="Itemid" value="'.$Itemid.'" />';
			$show = jNews_ListType::showType($mailing->mailing_type , 'editmailing');
			$menuA= null;
			if ( $GLOBALS[JNEWS.'level'] > 1 ) {

				//menu object start here
				//to create the template menu
				$listype = JRequest::getInt('listype', 0, 'request');

				$menuTag = new stdClass;
				$menuTag->link = 'administrator/' . jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags', true, false, true );

				if($listype == 7) {
					$delaymax = JRequest::getInt('delay_max', 0, 'request');
					$notifyID = JRequest::getInt('notify_id', 0, 'request');
					$catid = JRequest::getVar('cat_id', 0, 'request');
					$menuTag->link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags&listype='.$listype.'&cat_id='.$catid.'&delay_max='.$delaymax.'&notify_id='.$notifyID , false, false, true );
				}else{
					$menuTag->link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags' , false, false, true );
				}

				$menuTag->popup = new stdClass;
$menuTag->popup->isPop = true;
				$menuTag->popup->rel = true;
				$menuTag->popup->x = 750;
				$menuTag->popup->y = 500;
				$menuTag->action = 'tags';
				$menuTag->title = _JNEWS_MAILING_TAG;

				//to create the template menu
				$menuTemplate = new stdClass;
				$menuTemplate->link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=templates&task=assign' , false, false, true );
				$menuTemplate->popup = new stdClass;
$menuTemplate->popup->isPop = true;
				$menuTemplate->popup->rel = true;
				$menuTemplate->popup->x = 640;
				$menuTemplate->popup->y = 480;
				$menuTemplate->action = 'template';
				$menuTemplate->title = _JNEWS_LIST_T_TEMPLATE;

				//to create cancel menu
				$menuCancel = new stdClass;
				$menuCancel->popup = new stdClass;
$menuCancel->popup->isPop = false;
				$menuCancel->link = '#';
				$menuCancel->action = 'cancel';
				$menuCancel->onclick = new stdClass;
$menuCancel->onclick->custom = false;
				$menuCancel->onclick->js = '';
				$menuCancel->title = _JNEWS_CANCEL;

				//to create save menu
				$linksave ='option='.JNEWS_OPTION.'&act=mailing&listid='.$listId.'&listype='.$listType.'&Itemid='.$Itemid;
				if($listId==0)$linksave ='option='.JNEWS_OPTION.'&act=mailing&listype='.$listType.'&Itemid='.$Itemid;
				$linksave = jNews_Tools::completeLink($linksave, false);
				$menuSave = new stdClass;
				$menuSave->popup = new stdClass;
$menuSave->popup->isPop = false;
				$menuSave->link = '#';
				$menuSave->action = 'save';
				$menuSave->onclick = new stdClass;
$menuSave->onclick->custom = false;
				$menuSave->onclick->js = '';
				$menuSave->title = _JNEWS_SAVE;

				//to create preview menu
				$menuPreview = new stdClass;
				$menuPreview->popup = new stdClass;
$menuPreview->popup->isPop = false;
				$menuPreview->link = '#';
				$menuPreview->action = 'savepreview';
				$menuPreview->onclick = new stdClass;
$menuPreview->onclick->custom = false;
				$menuPreview->onclick->js = '';
				$menuPreview->title = 'Preview';

				//to create send menu
				$menuSend = new stdClass;
				$menuSend->popup = new stdClass;
$menuSend->popup->isPop = true;
				$menuSend->popup->rel = true;
				$menuSend->popup->x = 750;
				$menuSend->popup->y = 500;
				$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=sendready&mailingid='.$mailingId.'&listype='.$listType, true, false, true );
				$menuSend->link = $linkBut;
				$menuSend->action = 'sendready';
				$menuSend->onclick = new stdClass;
$menuSend->onclick->custom = false;
				$menuSend->onclick->js = "";
				$menuSend->title = _JNEWS_MENU_SEND;

				//to create the divider
				$menuDivider = new stdClass;
				$menuDivider->divider = true;

				$menuA = array();
				if( empty($mailingId) ) $menuA['template'] = $menuTemplate;
				$menuA['tags'] = $menuTag;
				$menuA['divider1'] = $menuDivider;
				$menuA['preview'] = $menuPreview;
				$menuA['save'] = $menuSave;
				if($listType == 1 && $mailingId != 0) $menuA['send'] = $menuSend;
				$menuA['divider'] = $menuDivider;
				$menuA['cancel'] = $menuCancel;

			}

    	    frontHTML::formStart( _JNEWS_EDIT_A. @constant( $GLOBALS[JNEWS.'listname'.$mailing->mailing_type] ) ,$mailing->html, 'edit_mailing', $menuA);
			jNews_MailingsHTML::editMailing($mailing, $new, $listId, $forms, $show, $listType);
			$go[] = jnews::makeObj('act', $action);
			$go[] = jnews::makeObj('listype', $listType);
			frontHTML::formEnd( _CMN_SAVE .' '. @constant( $GLOBALS[JNEWS.'listname'.$mailing->mailing_type] ), $go);

		} else {
		 	echo jnews::printM('red' , _NOT_AUTH);
		}

	    return true;

   }

	public static function assignTemplate(){
		$templatesearch = JRequest::getVar('templatesearch', '' );

		$link =  jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true );//second para from false to true

		$forms['main'] = " <form action='$link' method='post' name='adminForm'> \n" ;
		$paginationStart = JRequest::getVar( 'pg' );

		if( !empty($paginationStart) ){
			$limitstart = 0;
			$limitend = $paginationStart;
		}else{
			$app = JFactory::getApplication();
			$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
			$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
		}

		$limittotal = jNews_Templates::countTemplates(1, 1);
		$setLimit = new stdClass;
		$setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
		$setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
		$setLimit->end = ( !empty($limitend) ) ? $limitend: 20;
		$templates = jNews_Templates::getTemplates(true, false, $templatesearch, $setLimit->start, $setLimit->end, null, 1);

		jNews_TemplatesHTML::assignTemplate($templates, $forms, $setLimit, $templatesearch);

		return true;
	}

	public static function assignTag($action, $task){
		$doc = JFactory::getDocument();
        $doc->addStyleSheet( JNEWS_URL_ADMIN . 'cssadmin/jnews.css' );
      	$mailing = new stdClass;

        if($GLOBALS[JNEWS.'level'] > 2){
	        $mailing->delay_max = JRequest::getInt('delay_max', 0, 'request');
	        $mailing->notify_id = JRequest::getInt('notify_id', 0, 'request');
	        $mailing->cat_id = JRequest::getVar('cat_id', 0, 'request');
        }

		jNews_TagsHTML::menuTags($mailing);
		switch ($task) {

			case ('datetime'):
				jNews_TagsHTML::datetimeTags();
				break;

			case ('subscription'):
				jNews_TagsHTML::subscriptionTags();
				break;

			case ('subscriber'):
				jNews_TagsHTML::subscriberTags();
				break;

			case ('mod')://joomla module
				 if($GLOBALS[JNEWS.'level'] > 1){
					$link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION , false, false, true );
					$forms['main'] = " <form action='$link' method='post' name='adminForm'> \n" ;
					jNews_TagsHTML::modTags($forms);
				 }else{
				 	echo 'This functionality in only available for Plus and PRO version.';
				 }
				break;

			case ('content')://joomla content
				$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true );
				$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::contentTags($forms);
				break;

			case ('smart')://smart news
				if($GLOBALS[JNEWS.'level'] > 2){
					jNews_Autonews::selectCat($mailing);
				}else{
				 	echo 'This functionality in only available for PRO version.';
				 }
				break;

			case ('site'):
				$link =  jNews_Tools::completeLink( 'option='.JNEWS_OPTION , false, false, true );
				$forms['main'] = " <form action='$link' method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::siteTags($forms);
				break;

			case ('lyften'): //for lyften blog
				jNews_TagsHTML::lyftenblog();
				break;

			case ('deals'): //for lyften blog
				jNews_TagsHTML::deals();
				break;

			case ('jomsocial'):
				jNews_TagsHTML::jomsocialTags();
				break;
				
			case ('share'):// jomsocial
				jNews_TagsHTML::shareTags();
				break;
			
			case ('k2content'):
				jNews_TagsHTML::k2contentTags();
				break;
				
			case ('virtuemartproduct'):
				$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true );
				$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::virtuemartproduct($forms);
				break;

			default:
				$link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION , false, false, true );
				$forms['main'] = " <form action='$link' method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::subscriptionTags($forms);

		}

		return true;


	}

	public static function fwdtofriend($action, $task){

		jimport( 'joomla.html.parameter' );
		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews');
		$plugin = JPluginHelper::getPlugin('jnews', 'forwardtofriend');
		$params = new JParameter( $plugin->params );
		if($task== 'sendtofriend'){

			$new = false;
			$mailingID = JRequest::getInt('mailingid');
			$html = JRequest::getInt('html');
			$html1 = $html ? 'true' : 'false';
			$mailing = new stdClass;
			$mailing = jNews_Mailing::getOneMailing('', $mailingID, '', $new, $html1);//&$new
			$mailing->fromname = JRequest::getVar('fromName');
		 	$mailing->fromemail = JRequest::getVar('fromEmail');
		 	$mailing->frombounce = JRequest::getVar('fromEmail');
		 	$mailing->id = $mailingID;
		 	$mailing->issue_nb = 0;
		 	$mailing->images = '';
		 	$mailing->attachments = '';
			$receiversNames = JRequest::getVar('toName',array(),'','array');
			$receiversEmails = JRequest::getVar('toEmail',array(),'','array');

			$message = new stdClass;
			$message->dflt = JRequest::getVar('message');
			$message->inEmail = JRequest::getVar('inEmailMessage');
			//need to get it from the URL/request
			$list = new stdClass;
			$list->id = JRequest::getInt('listid');
			$list->html =$html;
			$botResult = $mainframe->triggerEvent('jnewsbot_sendtofriend', array($mailing, $message, $receiversNames, $receiversEmails, $list));
			if (empty($plugin)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews: Forward to friend</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
		}else{
			$botResult = $mainframe->triggerEvent('jnewsbot_fwdtofriend', array($params));
			if (empty($plugin)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews: Forward to friend</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';

   		}
	}

	public static function showSubscribersFE($listId = 0, $action, $task, $front = false){
		$my = JFactory::getUser();
		if(empty($my->id)) return true;

		$userId= JRequest::getVar('userid',0);
		$Itemid= JRequest::getInt('Itemid');
		$listId = JRequest::getvar('listid', 0);
		$linkForm = 'option='.JNEWS_OPTION;
		$linkForm = jNews_Tools::completeLink($linkForm,false,false);
		$linkForm = '#';
		
		$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );

		$forms['main'] = "<form action='$mainLink' method='post' name='adminForm' enctype='multipart/form-data' onsubmit='submitbutton();return false;'> \n " ;//$linkForm

		// menu cpanel
		$menuCpanel = new stdClass;
		$menuCpanel->popup = new stdClass;
$menuCpanel->popup->isPop = false;
			$menuCpanel->popup->isPop = false;
		$menuCpanel->link = $linkForm;
		$menuCpanel->action = 'cpanel';
		$menuCpanel->onclick = new stdClass;
			$menuCpanel->onclick->custom = true;
		$menuCpanel->onclick->js = "javascript: submitbutton('cpanel')";
		$menuCpanel->title = _JNEWS_MENU_CPANEL;

		$linkDelete = 'option='.JNEWS_OPTION.'&act=subscribers&task=delete';
		$linkDelete = jNews_Tools::completeLink($linkDelete,false,false);
		$menuDelete = new stdClass;
		$menuDelete->popup = new stdClass;
$menuDelete->popup->isPop = false;
		$menuDelete->link = '#';
		$menuDelete->action = 'delete';
		$menuDelete->onclick = new stdClass;
$menuDelete->onclick->custom = true;

		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
			$menuDelete->onclick->js = "javascript:if(document.adminForm.boxchecked.value==0){alert('Please make a selection from the list to delete');}else{ hideMainMenu(); submitbutton('delete')}";
		}else{
			$menuDelete->onclick->js = "javascript:if(document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('delete')}";
		}

		$menuDelete->title = _JNEWS_DELETE;

		$linkImport = 'option='.JNEWS_OPTION.'&act=subscribers&task=import';
		$linkImport = jNews_Tools::completeLink($linkImport,false);
		$menuImport = new stdClass;
		$menuImport->popup = new stdClass;
$menuImport->popup->isPop = false;
//		$menuImport->link = $linkImport;
		$menuImport->link = '#';
		$menuImport->action = 'import';
		$menuImport->onclick = new stdClass;
$menuImport->onclick->custom = true;
		$menuImport->onclick->js ="javascript: submitbutton('import')";
		$menuImport->title = "Import";

		$linkNew = 'option='.JNEWS_OPTION.'&act=subscribers&task=new';
		$linkNew = jNews_Tools::completeLink($linkNew,false);
		$menuNew = new stdClass;
		$menuNew->popup = new stdClass;
$menuNew->popup->isPop = false;
		$menuNew->link = '#';
		$menuNew->action = 'new';
		$menuNew->onclick = new stdClass;
$menuNew->onclick->custom = false;
		$menuNew->onclick->js = '';
		$menuNew->title = 'Add';

		$linkSave = 'option='.JNEWS_OPTION.'&act=subscribers&task=doNew';
		$linkSave = jNews_Tools::completeLink($linkSave,false);
		$menuSave = new stdClass;
		$menuSave->popup = new stdClass;
$menuSave->popup->isPop = false;
		$menuSave->link = '#';
		$menuSave->action = 'doNew';
		$menuSave->onclick = new stdClass;
$menuSave->onclick->custom = false;
		$menuSave->onclick->js = '';
		$menuSave->title = _JNEWS_SAVE;

		$linkUpdateOne = 'option='.JNEWS_OPTION.'&act=subscribers&task=updateOneSub';
		$linkUpdateOne = jNews_Tools::completeLink($linkUpdateOne,false);
		$menuUpdateOne = new stdClass;
		$menuUpdateOne->popup = new stdClass;
$menuUpdateOne->popup->isPop = false;
		$menuUpdateOne->link = '#';
		$menuUpdateOne->action = 'updateOneSub';
		$menuUpdateOne->onclick = new stdClass;
$menuUpdateOne->onclick->custom = true;
		$menuUpdateOne->onclick->js ="javascript: submitbutton('updateOneSub')";
		$menuUpdateOne->title = "Update";

		$menuBack = new stdClass;
		$menuBack->popup = new stdClass;
							$menuBack->popup = new stdClass;
$menuBack->popup->isPop = false;
		$menuBack->link = '#';
		$menuBack->action = 'back';
		$menuBack->onclick = new stdClass;
							$menuBack->onclick->custom = true;
		$menuBack->onclick->js = 'javascript:history.go(-1)';
		$menuBack->title = _JNEWS_MENU_BACK;

		$menuDivider = new stdClass;
		$menuDivider->divider = true;

		$menuA = array();
		if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
		if( class_exists('jNews_Social') && ($task != 'import') && ($task != 'show') && ($task != 'new') ) {
				$menuA['delete'] = $menuDelete;
//				$menuA['divider'] = $menuDivider;
				$menuA['import'] = $menuImport;
				$menuA['new'] = $menuNew;
//				$menuA['divider'] = $menuDivider;
		}
//		}

//		if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
			if( class_exists('jNews_Social') && $task == 'show' ) $menuA['updateOneSub'] = $menuUpdateOne;
//		}
		
//		if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
			if( class_exists('jNews_Social') && $task == 'new' ) $menuA['doNew'] = $menuSave;
		}

//		$menuA['back'] = $menuBack;
		$menuA['cpanel'] = $menuCpanel;

		frontHTML::formStart( _JNEWS_SUBSCRIBERS  , 0, '', $menuA );

		$go[] = jnews::makeObj('list_id', 18);
		$go[] = jnews::makeObj('itemid', $Itemid);
		$go[] = jnews::makeObj('act', $action);
		$go[] = jnews::makeObj('task', '');
		
		frontHTML::FEmenu();

		$cid = JRequest::getVar('cid', 0);

		require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'subscribers.jnews.php');
		require_once( JNEWSPATH_ADMIN . 'views'.DS.'subscribers.jnews.html.php' );

		subscribers( $action, $task, $userId, $listId, $cid, true);

		frontHTML::formEndFN(null, $go);
		return true;
	}

	public static function statisticsFE($action, $task, $listId, $listType='', $mailingId, $message, $Itemid){
			$my = JFactory::getUser();
			if(empty($my->id)) return true;

			$linkForm = 'option='.JNEWS_OPTION;
			$linkForm = jNews_Tools::completeLink($linkForm,false);
			
			$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );
			
		    $forms['main'] = "<form action='$mainLink' method='post' name='adminForm' enctype='multipart/form-data' onsubmit='submitbutton();return false;'> \n " ;//$linkForm
			// menu cpanel
			$menuCpanel = new stdClass;
			$menuCpanel->popup = new stdClass;
$menuCpanel->popup->isPop = false;
			$menuCpanel->popup->isPop = false;
			$menuCpanel->link = $linkForm;
			$menuCpanel->action = 'cpanel';
			$menuCpanel->onclick = new stdClass;
			$menuCpanel->onclick->custom = true;
			$menuCpanel->onclick->js = "javascript: submitbutton('cpanel')";
			$menuCpanel->title = _JNEWS_MENU_CPANEL;

			$menuGenerate = new stdClass;
			$menuGenerate->popup = new stdClass;
$menuGenerate->popup->isPop = false;
			$menuGenerate->link = '#';
			$menuGenerate->action = 'generate';
			$menuGenerate->onclick = new stdClass;
$menuGenerate->onclick->custom = true;
			$menuGenerate->onclick->js = "javascript: submitbutton('generate')";
			$menuGenerate->title = _JNEWS_BUTTON_GENERATE;

			$menuRefresh = new stdClass;
			$menuRefresh->popup = new stdClass;
$menuRefresh->popup->isPop = false;
			$menuRefresh->link = '#';
			$menuRefresh->action = 'refresh';
			$menuRefresh->onclick = new stdClass;
$menuRefresh->onclick->custom = true;
			$menuRefresh->onclick->js = "javascript: submitbutton('refresh')";
			$menuRefresh->title = _JNEWS_BUTTON_REFRESH;

			$menuA = array();

			$menuA['refresh'] = $menuRefresh;
			$menuA['generate'] = $menuGenerate;
			$menuA['cpanel'] = $menuCpanel;

			frontHTML::formStart( _JNEWS_MENU_STATS_REPORTS  , 0, '', $menuA );

			$go[] = jnews::makeObj('list_id', $listId);
			$go[] = jnews::makeObj('act', $action);
			$go[] = jnews::makeObj('task', '');//save

			frontHTML::FEmenu();

			require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'statistics.jnews.php');
			statistics( $listId, '', $mailingId, $message, $task, $action );

			frontHTML::formEndFN(null, $go);

		return true;
	}

/**
 *
 * @param string $action
 * @param string $task
 * to display the redirect  on the view
 */
	public static function leads( $action, $task ) {

		if ( empty($GLOBALS[JNEWS.'show_jlinks']) ) return true;

		$acajLinkey = 'jnewslink5wroot';
		$acajNewsKey = 'jnewsKa2f6gpw';
		$acajAutoKey = 'jnewsK9dfn7lws';
		$acajSmartKey = 'jnewsK8kd92hf';
		$acajMailKey = 'jnewsKo02j6d4u5aco';

		static $ezlinks = false;
		static $loaded = false;

			//TODO put priority if easylinks and jlinks exist or add checking if easylinks is installed instead of jlinks
		if ( !$loaded ){

			if ( !defined('JOOBI_SECURE') ) define( 'JOOBI_SECURE', true );

			$joobiEntryPoint = __FILE__ ;
			if(defined('JPATH_ROOT'))	$path = JPATH_ROOT;
			elseif(isset($mosConfig_absolute_path)) $path = $mosConfig_absolute_path;

			$status = false;
			//if EasyLinks or jLinks is not installed on the website there is no need to proceed
			if ( file_exists( $path.DS.'administrator'.DS.'components'.DS.'com_jlink'.DS.'y.php') )  {
				//Prioritize Easy Links	loading
				$status = @include( $path.DS.'administrator'.DS.'components'.DS.'com_jlink'.DS.'y.php' );
				if ( !$status && !defined('INSTALLER_FOLDER') ) {
					echo "We were unable to load Easy Links library.";
				} else {
					$ezlinks = true;
				}
			}

			//if Easylinks is not installed or is installed but file include was not successful
			if (!$ezlinks){

				//if jLinks is not installed on the website there is no need to proceed
				if ( !file_exists( $path.DS.'joobi'.DS.'entry.php' ) ) return true;
				$status = @include( $path.DS.'joobi'.DS.'entry.php' );
				if ( !$status && !defined('INSTALLER_FOLDER') ) {
					echo "We were unable to load Joobi library.";
				}

			}

			//file include trials failed
			if (!$status) return true;

			$loaded = true;
		}

		switch($task){
			case 'show':
				$linkForm = 'option='.JNEWS_OPTION.'&act=leads&mid=7&type=50';
				$linkForm = jNews_Tools::completeLink($linkForm,false);

				$menuBack = new stdClass;
				$menuBack->popup = new stdClass;
							$menuBack->popup = new stdClass;
$menuBack->popup->isPop = false;
				$menuBack->link = $linkForm;
				$menuBack->action = 'back';
				$menuBack->onclick = new stdClass;
							$menuBack->onclick->custom = true;
				$menuBack->onclick->js = 'javascript:history.go(-1)';
				$menuBack->title = _JNEWS_MENU_BACK;

				frontHTML::formStart( _JNEWS_LEADS_REP  , 0, '', $menuA );
				
				$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;

				frontHTML::FEmenu();
				
				frontHTML::formEndFN(null, '');

				$params= new stdClass;
				$params->controller = 'redirect-history';
				$params->task = 'show';
				$params->option = JNEWS_OPTION;
				$params->level = 50;
				$params->wid = WGet::extension( 'redirect.node', 'wid' );
				$this->layout = WView::get('redirect_historylist', 'html', null, '', $params );

				$view = $this->layout->make();
				break;

			default: //default task = listing
				$linkForm = 'option='.JNEWS_OPTION;
				$linkForm = jNews_Tools::completeLink($linkForm,false);

				$menuCpanel = new stdClass;
				$menuCpanel->popup = new stdClass;
$menuCpanel->popup->isPop = false;
			$menuCpanel->popup->isPop = false;
				$menuCpanel->link = $linkForm;
				$menuCpanel->action = 'cpanel';
				$menuCpanel->onclick = new stdClass;
			$menuCpanel->onclick->custom = true;
				$menuCpanel->onclick->js = 'javascript:history.go(-1)';
				$menuCpanel->title = _JNEWS_MENU_CPANEL;
				$menuA['cpanel'] = $menuCpanel;

				frontHTML::formStart( _JNEWS_LEADS_REP  , 0, '', $menuA );
				
				frontHTML::FEmenu();
				
				frontHTML::formEndFN(null, '');

				$params= new stdClass;
				$params->controller = 'redirect';
				$params->task = 'listing';
				$params->option = JNEWS_OPTION;
				$params->wid = WGet::extension( 'redirect.node', 'wid' );
				$this->layout = WView::get('redirects_listing', 'html', null, '', $params );

				$view = $this->layout->make();
				$view = str_replace('option=com_jcenter&controller=redirect-history', 'option='.JNEWS_OPTION.'&act=leads&task=show&mid=7',$view);
				$view = str_replace('option=com_jcenter&controller=redirect&task=edit', 'option='.JNEWS_OPTION.'&act=leads&mid=7&type=50',$view);

		}
		WPage::addScript( JOOBI_JS. 'rootscript.js' );
		echo $view;
		return true;
	}

}