<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co
function subscribers( $action, $task, $userid, $listId, $cid, $front=false ) {
	$Itemid= JRequest::getInt('Itemid');
	$mainframe = JFactory::getApplication();

	$newSubscriber=null;
	$subscriberId = JRequest::getInt('subscriber_id');
	$message = JRequest::getVar('message', '');
	$css = '.icon-48-subscribers { background-image:url('.JNEWS_PATH_ADMIN_IMAGES2 .'header/subscribers.png)}';
	$doc = JFactory::getDocument();
	$doc->addStyleDeclaration($css, $type = 'text/css');
	$img = 'subscribers.png';
	$emailField=JRequest::getVar('email', '');
	$new=true; //new subscriber
	$my	= JFactory::getUser();

	//START OF DATA FROM REQUEST
	$subscriber = new stdClass;
	$subscriber->user_id = JRequest::getInt('user_id');
	$subscriber->name = JRequest::getVar('name', '');
	$subscriber->email = JRequest::getVar('email', '', '', 'STRING' );
	if ( !jNews_Subscribers::validEmail($subscriber->email) ) $subscriber->email='';
	$subscriber->receive_html = JRequest::getInt('receive_html', 0);

	if(empty($subscriberId)){//if it is a new user the confirmed depends if the require confirmation is turned on
		if ($GLOBALS[JNEWS.'require_confirmation'] == '1') {
			$subscriber->confirmed = 0;
		}else{
			$subscriber->confirmed = JRequest::getInt('confirmed');
		}
	}else{
		$subscriber->confirmed = JRequest::getInt('confirmed');
	}

	$subscriber->blacklist = JRequest::getVar('blacklist', 0);
	$subscriber->timezone = JRequest::getVar('timezone', '');
	$subscriber->language_iso = JRequest::getVar('language_iso', '');

	if (empty($subscriber->ip)) $subscriber->ip = jNews_Subscribers::getIP();
	if ($subscriber->ip == '0.0.0.0') $subscriber->ip = '0';

	$subscriber->subscribe_date = time();
	$subscriber->params = JRequest::getVar('params', '');
	//column
	if($GLOBALS[JNEWS.'level'] > 2){
		$subscriber->column1=JRequest::getVar('column1','');
		$subscriber->column2=JRequest::getVar('column2','');
		$subscriber->column3=JRequest::getVar('column3','');
		$subscriber->column4=JRequest::getVar('column4','');
		$subscriber->column5=JRequest::getVar('column5','');
	}//end check of version pro
	//END OF DATA FROM REQUEST

	$doShowSubscribers = true;
	switch ($task) {
		case ('updateOneSub'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$doShowSubscribers = true;
			$new=false;
			
			//we addslashes the name incase an ' is entered in the name
			$subscriber->name = addslashes($subscriber->name);
			
		  	$message = jnews::printYN( jNews_Subscribers::saveSubscriber($subscriber,$subscriberId,$new) ,  _JNEWS_UPDATED_SUCCESSFULLY , _JNEWS_ERROR );
		    backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message  , $task, $action );
		break;

		case ('deleteOneSub'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$doShowSubscribers = true;
		  	$message = jnews::printYN( jNews_Subscribers::deleteSubscriber($subscriberId) ,  _JNEWS_SUBSCRIBER_DELETED , _JNEWS_ERROR );
		    backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message  , $task, $action );
			break;

		case ('cancelSub'):
			$doShowSubscribers = true;
		    backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message  , $task, $action );
			break;

		case ('edit'):
			foreach ($cid as $id) {
				jNews_Tools::redirect('index.php?option='.JNEWS_OPTION.'&act=subscribers&task=show&userid='.$id);
			}
			break;
			
		case ('show'):
			$doShowSubscribers = false;
			$qid[0] = $userid;
		    $subscriber = jNews_Subscribers::getSubscribersFromId($qid, false);
		    $lists = jNews_Lists::getLists(0, 0, 1 , '', false, false);
            $queues = jNews_ListsSubs::getSubscriberLists($userid);
	    	$forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n" ;
		    backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message , $task, $action );
		    backHTML::formStart('', 0 ,'' );
		    echo jNews_SubscribersHTML::editSubscriber($subscriber, $lists, $queues, $forms, jnews::checkPermissions('admin'), false, false );
			$go[] = jnews::makeObj('act', $action);
			$go[] = jnews::makeObj('subscriber_id', $subscriber->id);
			$go[] = jnews::makeObj('user_id', $subscriber->user_id);
			backHTML::formEnd($go);
		break;

		case ('new'):
		case ('add'):
			$doShowSubscribers = false;
			$newSubscriber = new stdClass;
			$newSubscriber->id =  '' ;
			$newSubscriber->user_id =  0 ;
			$newSubscriber->name =  '' ;
			$newSubscriber->email =  '' ;
			$newSubscriber->ip = jNews_Subscribers::getIP();
			$newSubscriber->receive_html =  1 ;
			$newSubscriber->confirmed =  1;
			$newSubscriber->blacklist =  0;
			$newSubscriber->timezone = '00:00:00';
			$newSubscriber->language_iso = 'eng';
			$newSubscriber->params = '';
			$newSubscriber->subscribe_date =  time();
			//column
			if($GLOBALS[JNEWS.'level'] > 2){ //check if the version of jnews is pro
				$newSubscriber->column1='';
				$newSubscriber->column2='';
				$newSubscriber->column3='';
				$newSubscriber->column4='';
				$newSubscriber->column5='';
			}
		    $lists = jNews_Lists::getLists(0, 0, 1 , '', false, false);
            $queues = '';


            $forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n" ;

            if( $mainframe->isAdmin() || $GLOBALS[JNEWS.'use_backendview'] ){
            	backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message, $task, $action );
		    	backHTML::formStart('addsubsback' , 0 ,'' );
		    	echo jNews_SubscribersHTML::editSubscriber($newSubscriber, $lists, $queues, $forms, jnews::checkPermissions('admin'), false, false );
            }else{
            	backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message, $task, $action );
		    	backHTML::formStart('addsubsfront' , 0 ,'' );
		    	echo jNews_SubscribersHTML::editSubscriberFE($newSubscriber, $lists, $queues, $forms, jnews::checkPermissions('admin'), false, false );
            }

			$go[] = jnews::makeObj('act', $action);
			$go[] = jnews::makeObj('subscriber_id', $newSubscriber->id);
			$go[] = jnews::makeObj('user_id', $newSubscriber->user_id);
			backHTML::formEnd($go);

			break;

		case ('doNew'):
				JRequest::checkToken() or die( 'Invalid Token' );
				$doShowSubscribers = true;
			   if( $mainframe->isAdmin() || $GLOBALS[JNEWS.'use_backendview']){
			   		$message = jnews::printYN( jNews_Subscribers::saveSubscriber( $subscriber, $subscriberId,$new) ,  _JNEWS_NEW_SUBSCRIBER , _JNEWS_ERROR );
			    	backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message, $task, $action );
			   	}else{
					$status = jNews_Subscribers::importBis();
			   		if($mainframe->isAdmin()){
			   			jNews_Tools::redirect('index.php?option='.JNEWS_OPTION.'&act=subscribers&mid=2');
			   		}else{
			   			$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION.'&act=subscribers&mid=2' );
			   			jNews_Tools::redirect($mainLink);
			   		}
			   	}
			break;

		case ('delete'):
			JRequest::checkToken() or die( 'Invalid Token' );
			if (!is_array( $cid ) || count( $cid ) < 1) {
					echo "<script> alert('Select an item to delete'); window.history.go(-1);</script>\n";
					return false;
			} else {
				$status = true;
				foreach ($cid as $id) {
					if ( !jNews_Subscribers::deleteSubscriber($id) ) $status = false;
				}
		  		$message = jnews::printYN( $status ,  _JNEWS_SUBSCRIBER_DELETED , _JNEWS_ERROR );
		   		backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message  , $task, $action );
			}
			break;

		case ('update'):
			JRequest::checkToken() or die( 'Invalid Token' );
			if (!is_array( $cid ) || count( $cid ) < 1) {
				echo "<script> alert('Select an item to update'); window.history.go(-1);</script>\n";
				return false;
			} else {
				foreach ($cid as $id) {
						$changes = JRequest::getVar( $id, array(0));

					if (!isset($changes['receive_html'])) {
						$changes['receive_html'] = 0;
					}
					if (!isset($changes['confirmed'])) {
						$changes['confirmed'] = 0;
					}
				}
			}
			$message = jnews::print_message (_JNEWS_UPDATED_SUCCESSFULLY , 1 );
			break;

		case ('export'):
			$doShowSubscribers = false;
			backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img, $message, $task, $action );
			jNews_SubscribersHTML::export( $action, $listId );
			break;

		case ('doExport'):
		  	$message = jnews::printYN( jNews_Subscribers::export($listId),  _EXPORT , _JNEWS_ERROR );
		    backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img, $message, $task, $action );
			break;

		case ('import'):
			$doShowSubscribers = false;
			backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message, $task, $action  );
			$lists = jNews_Lists::getLists('', 0, '', '', false, true, true,false,false);
			jNews_SubscribersHTML::import($action, $lists, $listId);
			break;

		case ('doImport'):
			JRequest::checkToken() or die( 'Invalid Token' );
		  	$message = jNews_Subscribers::importBis();
		    backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message, $task, $action );
		    $message = ( !empty($message) && $message !== true ) ? $message : ( $message===false ? 'Import failed' : _JNEWS_IMPORT_FINISHED );
			if ( $mainframe->isAdmin() ) {
			   	jNews_Tools::redirect('index.php?option='.JNEWS_OPTION.'&act=subscribers', $message );
			} else {
			   	$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION.'&act=subscribers&mid=2' );
			   	jNews_Tools::redirect($mainLink);
			}
		    
		    break;

		case ('subscribeAll'):
		case ('unsubscribeAll'):
			JRequest::checkToken() or die( 'Invalid Token' );
			break;

		case ('cancel'):
			if ($listId != 0) {
				$listId = 0;
			} else {
				jNews_Tools::redirect('index.php?option='.JNEWS_OPTION);
			}
			backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message, $task, $action  );
			break;

		case ('cpanel'):
	  		$mainframe = JFactory::getApplication();
	  		if($mainframe->isAdmin()) {
				backHTML::controlPanel();
	  		}else{
	  			jNews_Tools::redirect('index.php?option='.JNEWS_OPTION);
	  		}
			$doShowSubscribers = 0;
			break;

		case ('toggle'):
			$subid = JRequest::getVar( 'subid' );
			$column = JRequest::getVar( 'col' );

			if( !empty($subid) && !empty($column) ){
				$passObj = new stdClass;
				$passObj->tableName = '#__jnews_subscribers';
				$passObj->columnName = $column;
				$passObj->whereColumn = 'id';
				$passObj->whereColumnValue = $subid;

				jnews::toggle( $passObj );

				// change suspend status if column toggled is confirmed
				if( $column == 'confirmed' ){
					$passObj = new stdClass;
					$passObj->tableName = '#__jnews_queue';
					$passObj->columnName = 'suspend';
					$passObj->whereColumn = 'subscriber_id';
					$passObj->whereColumnValue = $subid;

					jnews::toggle( $passObj );
				}
			}

			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=subscribers&listid='.$listId );
			break;
		default :
		    backHTML::_header( _JNEWS_MENU_SUBSCRIBERS , $img , $message, $task, $action  );
			break;
	 }

	 if ($doShowSubscribers) {
  		$limit = -1;
  		$emailsearch = JRequest::getVar( 'emailsearch', '', '', 'STRING' );$emailsearch = htmlentities( $emailsearch, ENT_COMPAT );
		$paginationStart = JRequest::getVar( 'pg' );
		$lll = JRequest::getVar( 'limitstart' );
		if ( empty($lll) ) JRequest::setVar( 'limitstart', 0, 'int' );
		$app = JFactory::getApplication();
		$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
		$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
		$subscirberTypeID = JRequest::getVar('subtype', 1 );
		
		if ( empty( $listId ) && in_array( $subscirberTypeID, array(1,2) ) ) $subscirberTypeID=0;
		if ( !empty( $listId ) && in_array( $subscirberTypeID, array(3,4) ) ) $subscirberTypeID=0;
		
		if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);
		
//		$limittotal = jNews_Subscribers::getSubscribersCount( $listId );
		$ztozto = null;
    	$limittotal = jNews_Subscribers::getSubscribers( 0, 0, $emailsearch, $ztozto, $listId, '','','','sub_dateD','', $ownedlists, '', $subscirberTypeID, true );//added one parameter for mailid

    	$setLimit = new stdClass;
		$setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
		$setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
		$setLimit->end = ( !empty($limitend) ) ? $limitend: 20;

		$setSort = new stdClass;
		$setSort->orderValue = $app->getUserStateFromRequest( JNEWS_OPTION.'.subscribers.filter_order', 'filter_order', 'subscribe_date','cmd' );
		$setSort->orderDir	= $app->getUserStateFromRequest( JNEWS_OPTION.'.subscribers.filter_order_Dir', 'filter_order_Dir', 'desc',	'word' );

		if(empty($limitstart)) $limitstart =0;

		if ( $setLimit->end > 200 )  $setLimit->end = 200;
		if( $setLimit->total == $setLimit->end ) $setLimit->start = 0;
		
    	$subscribers = jNews_Subscribers::getSubscribers($setLimit->start, $setLimit->end, $emailsearch, $setLimit->total, $listId, '','','','sub_dateD','', $ownedlists, $setSort, $subscirberTypeID );//added one parameter for mailid

		if ($listId != 0) {
			$showAdmin = true;
		} else {
			$showAdmin = false;
		}
		$dropDownList =  jNews_ListType::getListsDropList(0, '', '');
		$subTypeA = array();
		$subTypeA[0] = new stdClass;
		$subTypeA[0]->id = 0;
		$subTypeA[0]->subtype = _JNEWS_SUB_LISTTYPE_ALL;
		if ($listId != 0) {
			$subTypeA[1] = new stdClass;
			$subTypeA[1]->id = 1;
			$subTypeA[1]->subtype = _JNEWS_SUB_LISTTYPE_ONLY_SUBCRIBED;
			$subTypeA[2] = new stdClass;
			$subTypeA[2]->id = 2;
			$subTypeA[2]->subtype = _JNEWS_SUB_LISTTYPE_ONLY_UNSUBCRIBED;
		} else {
			$subTypeA[3] = new stdClass;
			$subTypeA[3]->id = 3;
			$subTypeA[3]->subtype = _JNEWS_SUB_LISTTYPE_ONLY_WAITINGCONF;
			$subTypeA[4] = new stdClass;
			$subTypeA[4]->id = 4;
			$subTypeA[4]->subtype = _JNEWS_SUB_LISTTYPE_ONLY_BLOCKED;
		}
		
	    $lists['listid'] = JHTML::_('select.genericlist', $dropDownList, 'listid', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'id', 'list_name', $listId );
		$lists['subscirberType'] = JHTML::_('select.genericlist', $subTypeA, 'subtype', 'class="inputbox" size="1" onchange="document.adminForm.submit();"', 'id', 'subtype', $subscirberTypeID );
	    
		if ( $mainframe->isAdmin() ) {
	    	$forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n" ;
		}else{
			if(empty($setLimit->start)) $setLimit->start = 0;
			$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION );
			
			$forms['main'] = "<form action='".$mainLink."' method='post' name='adminForm'> \n" ;
		}
		$forms['select'] = " <form method='post' name='jNewsFilterForm'> \n" ;
		
	    backHTML::formStart('show_mailing' , 0  ,'' );
	    
		jNews_SubscribersHTML::showSubscribers($subscribers, $action, $listId, $lists, $setLimit->start, $setLimit->end, $setLimit->total, $showAdmin, $listId, $emailsearch, $forms, $setLimit, $front, $setSort);

	 }

	return true;

 }
