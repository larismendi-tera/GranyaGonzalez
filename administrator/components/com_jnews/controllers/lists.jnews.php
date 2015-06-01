<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 function lists( $action, $task, $listId, $listType ){
	$db = JFactory::getDBO();
	$my	= JFactory::getUser();
	$css = '.icon-48-lists { background-image:url('.JNEWS_PATH_ADMIN_IMAGES2 .'header/lists.png)}';
	$doc = JFactory::getDocument();
	$doc->addStyleDeclaration($css, $type = 'text/css');
	$img = 'lists.png';
	$listsearch = JRequest::getVar('listsearch', '' );
	$message ='' ;
	$xf = new jNews_Config();

	$showLists = true;
	$checkToggle = false;

	// defined toggle for publish and unpublish of mailings
	if( !empty($task) && ( $task == 'togle' ) ){
		$checkToggle= true;
		$id = JRequest::getVar( 'listid' );
		$col = JRequest::getVar( 'col' );

		$listId = ( !empty( $id ) && !empty($col) ) ? $id : $listId;
		$task = ( !empty( $listId ) && !empty($col) ) ? $col : $task;
	}

	switch ($task) {

		case ('new'):
		case ('add'):
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
			$showLists = false;
			$newList->id = '';
			$newList->html = 1;
			$newList->new_letter = 1;
			$newList->list_name = '';
			$newList->list_desc = '';
			$newList->template = '';

			if(empty($subscriber)){
				$newList->sendername = '';
				$newList->senderemail = '';
				$newList->bounceadres = '';//$GLOBALS[JNEWS.'sendmail_from'];
			}else{
				$newList->sendername = '';//$subscriber->name;
				$newList->senderemail = '';//$subscriber->email;
				$newList->bounceadres = '';//$subscriber->email;
			}

			$newList->hidden = 1;
			$newList->auto_add = 0;
			$newList->list_type = $listType;
			$newList->delay_min = 1;
			$newList->delay_max = 7;
			$newList->user_choose = 0;
			$newList->cat_id = '0:0';
			$newList->follow_up ='';
			$newList->notify_id =0;
			$newList->owner = $my->id;
			$newList->acc_level = '24,25,7,8';
			$newList->acc_id = implode(',',$allGroupIds);
			$newList->published = 1;
			$newList->start_date = date( 'Y-m-d',  time() );
			$newList->next_date = jnews::getNow();
			$newList->subscribemessage = _JNEWS_DEFAULT_SUBSCRIBE_MESS;
			$newList->unsubscribemessage =  _JNEWS_DEFAULT_UNSUBSCRIBE_MESS;
			$newList->notifyadminmsg =  _JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION;
			$newList->subnotifymsg = _JNEWS_SUBSDEFAULT_NOTIFYMSG;
			$newList->subnotifysend = 1;
			$newList->unsubscribesend = 1;
			$newList->unsubscribenotifyadmin = 1;
			$newList->footer = 1;
		    $forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n " ;
			$show = jNews_ListType::showType($newList->list_type , 'editlist');

			if($listType==1) backHTML::_header( _JNEWS_NEW.' '._JNEWS_LIST , $img , $message , $task, $action  );
			else backHTML::_header( _JNEWS_NEW.' '._JNEWS_AUTORESP. ' '._JNEWS_LIST , $img , $message , $task, $action  );

			backHTML::formStart('editlist', $newList->html, '' );
       		jNews_ListsHTML::editList($newList, $forms, $show, $listType);
			$go[] = jnews::makeObj('act', $action);
			$go[] = jnews::makeObj('listid', $newList->id);
			backHTML::formEnd($go);
			break;

		case ('doNew'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$listname = JRequest::getVar('list_name', '');
			$now = jnews::getNow();
   			$query = "SELECT `id` FROM `#__jnews_lists` WHERE `list_name`= '".addslashes($listname)."' ";
	     	$db->setQuery($query);
			$lId = $db->loadResult();
			if ($lId>0) {
				echo "<script> alert(' This list already exist, please choose another name. '); window.history.go(-1);</script>\n";
				return false;
			} else {
				$query = "INSERT INTO `#__jnews_lists` (`list_name`,`createdate`) VALUES ( '".addslashes($listname)."'  , '$now' )" ;
				$db->setQuery($query);
				$db->query();
			}

   			$query = "SELECT * FROM `#__jnews_lists` WHERE `list_name`= '".addslashes($listname)."' ";
	     	$db->setQuery($query);

					$mynewlist = $db->loadObject();

			$mynewlist->list_name = stripslashes($mynewlist->list_name);
			$mynewlist->list_desc = stripslashes($mynewlist->list_desc);
			$mynewlist->template = $mynewlist->template;
			$mynewlist->layout = stripslashes($mynewlist->layout);
			$mynewlist->subscribemessage = stripslashes($mynewlist->subscribemessage);
			$mynewlist->unsubscribemessage = stripslashes($mynewlist->unsubscribemessage);
			$mynewlist->notifyadminmsg = stripslashes($mynewlist->notifyadminmsg);
			$mynewlist->subnotifysend = stripslashes($mynewlist->subnotifysend);
			$mynewlist->subnotifymsg = stripslashes($mynewlist->subnotifymsg);

	     	$listId = $mynewlist->id;
	     	$message = jnews::printYN( jNews_Lists::updateListFromEdit($listId, '', true, $listType) ,  _JNEWS_LIST_ADDED , _JNEWS_ERROR );
			$xf->plus('totallist0', 1);
			$xf->plus('act_totallist0', 1);
			$xf->plus('totallist'. $listType , 1);
			$xf->plus('act_totallist'. $listType , 1);
			break;

		case ('edit'):
			if ($listId == 0) {
				echo "<script> alert('".addslashes(_JNEWS_SELECT_LIST)."'); window.history.go(-1);</script>\n";
				return false;
			} else {
				$showLists = false;

				$query = 'SELECT * FROM `#__jnews_lists` WHERE `id` = ' . intval($listId);
				$db->setQuery($query);
				$listEdit = $db->loadObject();

				if($listEdit->acc_id == 'all'){
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

					$listEdit->acc_id = implode(',',$allGroupIds);

				}

				$listEdit->list_name = stripslashes($listEdit->list_name);
				$listEdit->list_desc = stripslashes($listEdit->list_desc);
				$listEdit->template = $listEdit->template;
				$listEdit->layout = stripslashes($listEdit->layout);
				$listEdit->subscribemessage = stripslashes($listEdit->subscribemessage);
				$listEdit->unsubscribemessage = stripslashes($listEdit->unsubscribemessage);
				$listEdit->notifyadminmsg = stripslashes($listEdit->notifyadminmsg);
				$listEdit->subnotifysend = stripslashes($listEdit->subnotifysend);
				$listEdit->subnotifymsg = stripslashes($listEdit->subnotifymsg);
         		$listEdit->new_letter = 0;
			    $forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n " ;
				$show = jNews_ListType::showType($listEdit->list_type , 'editlist');
	         	backHTML::_header( _JNEWS_EDIT_A. @constant( $GLOBALS[JNEWS.'listname'.$listEdit->list_type] ).' '._JNEWS_LIST , $img , $message , $task, $action );
				backHTML::formStart('listedit', $listEdit->html, '' );
	       		jNews_ListsHTML::editList($listEdit, $forms, $show, $listType);
				$go[] = jnews::makeObj('act', $action);
				$go[] = jnews::makeObj('listid', $listEdit->id);
				backHTML::formEnd($go);
			}
			break;

		case ('update'):
				JRequest::checkToken() or die( 'Invalid Token' );
		     	$message = jnews::printYN( jNews_Lists::updateListFromEdit($listId, '', false,$listType) ,  _JNEWS_LIST_UPDATED , _JNEWS_ERROR );
			break;

		case ('delete'):
				JRequest::checkToken() or die( 'Invalid Token' );
				$query = "SELECT list_name FROM #__jnews_lists WHERE id = $listId";
				$db->setQuery($query);
				$listName = $db->loadResult();
           		$message = jnews::printYN( jNews_Lists::deleteList($listId) ,  '"' .$listName .'"'. _JNEWS_LIST. _JNEWS_SUCCESS_DELETED , _JNEWS_ERROR );
			break;

	   	case ('copy'):
	   			JRequest::checkToken() or die( 'Invalid Token' );
	         	$message = jnews::printYN( jNews_Lists::copyList($listId) ,  _JNEWS_LIST_COPY , _JNEWS_ERROR );
			 break;

	   	case ('publish'):
	   			if(!$checkToggle) JRequest::checkToken() or die( 'Invalid Token' );
	      		$message = jnews::printYN( jNews_Lists::updateListFromList($listId, true, false) ,  _JNEWS_PUBLISHED , _JNEWS_ERROR );
				if($listType==1)
					jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=list&listype='.$listType );
				else
					jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=arlist&listype='.$listType );
			break;

	   	case ('unpublish'):
	   		if(!$checkToggle) JRequest::checkToken() or die( 'Invalid Token' );
			$message = jnews::printYN( jNews_Lists::updateListFromList($listId, false, false) ,  _JNEWS_UNPUBLISHED , _JNEWS_ERROR );
			if($listType==1)
				jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=list&listype='.$listType.'&listid='. $listId );
			else
				jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=arlist&listype='.$listType.'&listid='. $listId );
			break;

		case ('forms'):
		case ('make'):
			if (class_exists('jNews_CreateForm')) {
				jNews_CreateForm::taskOptions($task);
				$showLists = false;
			} else {
				$showLists = true;
			}
			break;

	  case ('cpanel'):
			backHTML::controlPanel();
			return true;
			break;

		case ('toggle'):
				$listid = JRequest::getVar( 'listid' );
				$column = JRequest::getVar( 'col' );

				if( !empty($listid) && !empty($column) ){
					$passObj = new stdClass;
					$passObj->tableName = '#__jnews_lists';
					$passObj->columnName = $column;
					$passObj->whereColumn = 'id';
					$passObj->whereColumnValue = $listid;
					jnews::toggle( $passObj );
				}

				if($listType==1)jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=list&listype=1' );
				else jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=arlist&listype=2' );
				break;
	}

	if ($showLists) {
		$limit = -1;
		//Title header
		if($listType==1)
   			backHTML::_header( _JNEWS_MENU_LIST , $img , $message , $task, $action );
   		else
   			backHTML::_header( _JNEWS_ARLIST , $img , $message , $task, $action );

   		$show = jNews_ListType::showType(0 , 'showListsBack');
		$forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n" ;

		backHTML::formStart('show_mailing' , ''  ,'' );
		$paginationStart = JRequest::getVar( 'pg' );

		$app = JFactory::getApplication();

		if( !empty($paginationStart) ){
			$limitstart = 0;
			$limitend = $paginationStart;
		}else{
			$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
			$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
		}

		$limittotal = jNews_Lists::getListCount( $listType );
		$limittotal = $limittotal[0];
		$setLimit = new stdClass;
		$setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
		$setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
		$setLimit->end = ( !empty($limitend) ) ? $limitend : $limittotal;

		// recheck start
		if( $setLimit->total == $setLimit->end ) $setLimit->start = 0;

		$setSort = new stdClass;

		if($listType=='2'){ //autoresponder
			$key= JNEWS_OPTION . '.arlist';
			$column='id';
			$direction='desc';
		}else{ //newsletter
			$key= JNEWS_OPTION . '.list';
			$column='list_name';
			$direction='asc';
		}

		$setSort->orderValue = $app->getUserStateFromRequest( $key.'filter_order', 'filter_order', $column,'cmd' );
		$setSort->orderDir	= $app->getUserStateFromRequest( $key.'filter_order_Dir', 'filter_order_Dir', $direction,'word' );

		if($listType==2){
?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'delete') {
			var $ok = confirm('Are you sure you want to delete?\r\nAll of the mailings attached in this auto-responder will be deleted as well.');
			if ( $ok == true ){
				form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=arlist&task=delete';
			}else{
				return;
			}
		}
		submitform( pressbutton );
	}
</script>
<?php 
		}

		$listing = jNews_Lists::getLists(0, $listType, 1, '', false, false, false, false, false, $listsearch, $setLimit, $setSort);

		if( isset($setLimit->total) && !empty($listsearch) ){
			$lists = jNews_Lists::getLists(0, $listType, 1, '', false, false,  false, false, false, $listsearch,$setSort );
			$setLimit->total = ( !empty($lists) ) ? count( $lists ) : $setLimit->total;
		}

	 	$totalSubs = array();
	 	$totalUnSubs = array();
	 	$db = JFactory::getDBO();

		if ( !empty($listing) ) {
			foreach($listing as $list){
				$totalSubs[] = jNews_Subscribers::getSubscribersCount( $list->id, true );
				$totalUnSubs[] = jNews_Subscribers::getSubscribersCount( $list->id, 2 );
			}
		}

		jNews_ListsHTML::showListingLists( $listing, $action , 'edit' , $forms, $show, $listsearch, $setLimit->end, $setLimit , $totalSubs, $setSort, $totalUnSubs );

		$go[] = jnews::makeObj('act', $action);
		$go[] = jnews::makeObj('filter_order', $setSort->orderValue);
		$go[] = jnews::makeObj('filter_order_Dir', $setSort->orderDir);
		backHTML::formEnd($go);
		return true;
		
	}

 }
