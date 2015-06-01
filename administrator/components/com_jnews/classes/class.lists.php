<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_Lists {

	/**
	 * Get the access level of a certain list
	 * @param int $listId
	 * @return string the access level of the list
	 */
	 public static function getAccessLevel($listIds){
	 	$accessLevel = '';

	 	$db = JFactory::getDBO();

		$db = JFactory::getDBO();
		$db->setQuery('SELECT acc_level from #__jnews_lists WHERE id IN ('.jnews::implode(',',$listIds).')');
		$accessLevel = $db->loadResultArray();

		return array_unique($accessLevel);
	 }

	public static function getIDacclevel($acc_level, $ownerId=0){
		$db = JFactory::getDBO();
		$query = "SELECT `id` FROM `#__jnews_lists` WHERE `acc_level` LIKE '%$acc_level%' ";
		$query .= " AND `owner` IN (SELECT `id` FROM `#__users`)";
		$db->setQuery( $query );
		$lists = $db->loadResult();
		return $lists;
	}
	
	/**
	 * this to get the lists that a user has given an access to add edit
	 * @param $acc_level - array(joomla16) or just a string(joomla 15)
	 * @param $listId -int
	 * */
	public static function getIDswithacclevel($acc_level, $listId='' ) {
		$db = JFactory::getDBO();
		$query = "SELECT `id` FROM `#__jnews_lists` WHERE ";
		if(is_array($acc_level)) {
			$query .= "( `acc_level` LIKE '%" . implode( ",%' OR `acc_level` LIKE '%", $acc_level ) . ",%' )";			
		}
		else $query .= "`acc_level` LIKE '%$acc_level%' ";
		
		if(!empty($listId)){
			$query .= ' AND `id` = '. $listId;
		}
		
		$query .= ' AND `published`='. 1;
		$db->setQuery( $query );
		$listsA = $db->loadResultArray();

		return $listsA;
	}

	public static function getLists( $listId, $listType, $author=null, $order='listnameA', $autoAdd=false, $onlyPublished=true, $onlyName=false, $notification=false, $onlyVisible=false, $listsearch='', $setLimit=null, $setSort=null, $ownedlists=0, $ownerid=0 ) {
		$db = JFactory::getDBO();
		$acl = JFactory::getACL();
		$my	= JFactory::getUser();
		$mainframe = JFactory::getApplication();

		$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
		$gids =  array();
		$gids = explode(',', $gid);
		if( empty($gids) ) $gids = $gid;

		if ($onlyName) $query = 'SELECT `id` AS id, `list_name` AS list_name, `list_desc` AS list_desc, `list_type` AS list_type, `hidden` FROM `#__jnews_lists` ';//added hidden maria
		else $query = 'SELECT * FROM `#__jnews_lists` ';
		$where = array();
		if ($listId>0) {
			$where[] = ' `id`='.intval($listId);
		}

		if ( $listType>0 ) {
//			$where[] = ' `list_type`='.intval($listType);
			if ( is_array($listType) ) {
				$where[] = '  `list_type` IN (' . jnews::implode( ',', $listType ) . ') ';
			} else {
				$where[] = ' `list_type`='.intval($listType);
			}
		}

		if ($autoAdd) $where[] = ' `auto_add`=1 ';
		if ($onlyPublished == true) $where[] = ' `published`=1 ';
		if ($onlyVisible == true) $where[] = ' `hidden`=1 ';

		if (!empty($listsearch)) {
			if( is_numeric( $listsearch ) ) $where[] = ' `id`='. $listsearch;
			else $where[] = ' (list_name LIKE \'%' . $listsearch . '%\' OR sendername LIKE \'%' . $listsearch . '%\')';
		}

		if (  class_exists('jNews_Pro') && isset($author) ) {
			static $accIds = array();

			if ( !isset($accIds[$my->id]) ) {

				if( $mainframe->isAdmin() ) {
						if(version_compare(JVERSION,'1.6.0','<')){
						$acl = JFactory::getACL();
						$usergroups = $acl->get_group_children_tree( null, 'USERS', false );
					}else{
						$db->setQuery('SELECT a.*, a.title as text, a.id as value  FROM #__usergroups AS a ORDER BY a.lft ASC');
						$usergroups = $db->loadObjectList();
					}

					foreach($usergroups as $usergroup){
						$allgroups[]=$usergroup->value;
					}

					$accIds[$my->id] = implode(',',$allgroups);
					$subaccess = $accIds[$my->id];
					//$where[] = " (`acc_id` IN ($subaccess) OR `acc_id` LIKE '%all%' )"; //we should not have this where clause since this is the backend 8855445
				}else{
					if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
						$my->gid = JAccess::getGroupsByUser($my->id, false);
						$accIds[$my->id] = $my->gid[0];
					}else{
						$accIds[$my->id] = $my->gid;
					}
					$subaccess = $accIds[$my->id];
					$where[] = " (`acc_id` LIKE '%$subaccess,%' OR `acc_id` LIKE '%all%' )";
				}
			}
		}

		if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);

		$gidAdmins = array(24,25,7,8);
		if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
			$gid = JAccess::getGroupsByUser($my->id, false);
			$my->gid = $gid[0];
		}

		if(JRequest::getVar( 'act', '', '', 'WORD' ) != 'show'){//we don't filter the lists in the "My Subscriptions"
			//filter lists by ownerid
			if(!empty($my->id) && !$mainframe->isAdmin() && !in_array($my->gid,$gidAdmins)  && !empty($ownedlists)) {
				$allUserAccessA = jNews_Lists::getUserGroups( $my );//$my->getAuthorisedGroups();
				$where[] = "( `acc_level` LIKE '%" . implode( ",%' OR `acc_level` LIKE '%", $allUserAccessA ) . ",%' OR `owner`=".$my->id.")";				
			}
			
			//filter lists by acclevel
			if(!empty($my->id) && !$mainframe->isAdmin() && !in_array($my->gid,$gidAdmins)  && empty($ownedlists)) {
				$allUserAccessA = jNews_Lists::getUserGroups( $my );//$my->getAuthorisedGroups();
				$where[] = "( `acc_level` LIKE '%" . implode( ",%' OR `acc_level` LIKE '%", $allUserAccessA ) . ",%' )";
			}
			
			if(!$mainframe->isAdmin() && (!empty($ownedlists) OR $ownedlists!=0) && !empty($my->id) && !in_array($my->gid,$gidAdmins) && in_array($my->gid,$gids) ) {
				$allUserAccessA = jNews_Lists::getUserGroups( $my );//$my->getAuthorisedGroups();
				$where[] = " ( `acc_level` LIKE '%" . implode( ",%' OR `acc_level` LIKE '%", $allUserAccessA ) . ",%' )";
			}
		}
		
		if(JRequest::getVar( 'act', '', '', 'WORD' ) == 'show'){
			//filter lists by acclevel
			if(!empty($my->id) && !$mainframe->isAdmin() && !in_array($my->gid,$gidAdmins) ){
				$where[] = "(`acc_id` LIKE '%$my->gid,%' OR `acc_id` LIKE '%all%')";
			} 
		}
		
		$wheretag = (count( $where ) ? ' WHERE '. implode( ' AND ', $where ) : '');

		$query .= $wheretag;

		//sorting of columns
		if( !empty($setSort) ){
			$query .= " ORDER BY `$setSort->orderValue` $setSort->orderDir";
		}else{
			$query .= ( class_exists('jnews') ) ? jnews::orderBy($order) : '';
		}

		if( !empty($setLimit) ){
			$limitStart = ( !empty($setLimit->start) ) ? $setLimit->start : 0;//$setLimit->start;
			$limitEnd = ( !empty($setLimit->end) ) ? $setLimit->end : '-1';
			$db->setQuery($query, $limitStart, $limitEnd);
		}else{
			$db->setQuery($query);
		}

		$lists = $db->loadObjectList();
		if(!empty($lists)){
			foreach ($lists as $key => $list){
				$lists[$key]->list_name = stripslashes($lists[$key]->list_name);
				$lists[$key]->list_desc = stripslashes($lists[$key]->list_desc);
			}
		}

		return $lists;
		
	}

	
	public static function getUserGroups( $my ) {
		if(version_compare(JVERSION,'1.6.0','<')){
			$acl = JFactory::getACL();
			$usergroups = $acl->get_group_children_tree( null, 'USERS', false );
			$allUserAccessA=array();
			foreach($usergroups as $usergroup){
				$allUserAccessA[]=$usergroup->value;
			}
		}else{
			$allUserAccessA = $my->getAuthorisedGroups();
		}
		
		return $allUserAccessA;
		
	}
	
	public static function getSpecifiedLists( $listIds, $useAccess=true ) {
		$db = JFactory::getDBO();
		$acl = JFactory::getACL();
		$my	= JFactory::getUser();
		$mainframe = JFactory::getApplication();

		$myexplode = explode( ',', $listIds );
		if ( !empty($myexplode) ) {
			foreach( $myexplode as $myexp ) {
				$escapedArray[] = intval($myexp);
			}
		} else {
			$escapedArray = array();
			$escaped = '';
		}

		$escaped = jnews::implode( ',', $escapedArray );

		if ($listIds==0) {
			$query = "SELECT * FROM `#__jnews_lists` WHERE `published` = 1 " ;
		} elseif (!empty($escaped)) {
			$query = "SELECT * FROM `#__jnews_lists` WHERE `id` IN ( $escaped ) AND `published` = 1 " ;
		} else {
			return '';
		}

		if(!$mainframe->isAdmin() ){
			if (  class_exists('jNews_Pro') && $useAccess ) {
				if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
					$my->gid = JAccess::getGroupsByUser($my->id, false);
				}

				if( ( $my->gid != 24 && $my->gid != 25 ) && ( $my->gid != 7 && $my->gid != 8 ) ){			
					if ( is_array($my->gid) ) $where[] = " `acc_id` LIKE '%" .$my->gid[0] . ",%' ";
					else $where[] = " `acc_id` LIKE '%$my->gid,%' ";
				}

			}
		}
		
		$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
		$gids =  array();
		$gids = explode(',', $gid);
		if( empty($gids) ) $gids = $gid;
		
		$gidAdmins = array(24,25,7,8);
		if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
			$gid = JAccess::getGroupsByUser($my->id, false);
			$my->gid = $gid[0];
		}
		
		//we filter lists to show only lists having the access to be subscribed by a certain user access
		if(!empty($my->id) && !$mainframe->isAdmin() && !in_array($my->gid,$gidAdmins) ) $query .= " AND (`acc_id` LIKE '%$my->gid,%' OR `acc_id` LIKE '%all%')";
		
		$db->setQuery( $query );
		$lists = $db->loadObjectList();

		if(!empty($lists)){
			foreach ($lists as $key => $list){
				$lists[$key]->list_name = stripslashes($lists[$key]->list_name);
				$lists[$key]->list_desc = stripslashes($lists[$key]->list_desc);
				$lists[$key]->layout = stripslashes($lists[$key]->layout);
				$lists[$key]->subscribemessage = stripslashes($lists[$key]->subscribemessage);
				$lists[$key]->unsubscribemessage = stripslashes($lists[$key]->unsubscribemessage);
				$lists[$key]->notifyadminmsg=stripslashes($lists[$key]->notifyadminmsg);
				$lists[$key]->subnotifysend = stripslashes($lists[$key]->subnotifysend);
				$lists[$key]->subnotifymsg=stripslashes($lists[$key]->subnotifymsg);
			}
		}
		return $lists;
	}

	public static function getNotifLists( &$list, $type, $catId ) {
		$db = JFactory::getDBO();

		if ( $type!=0 AND $catId > 0 ) {
			$query = "SELECT * FROM `#__jnews_lists` WHERE `notification` = $type  AND `notify_id` = $catId " ;
		} else {
			return false;
		}

		$db->setQuery($query);
		$list = $db->loadObjectList();
		if(!empty($list)){
			foreach ($list as $key => $listdetail){
				$list[$key]->list_name = stripslashes($list[$key]->list_name);
				$list[$key]->list_desc = stripslashes($list[$key]->list_desc);
				$list[$key]->layout = stripslashes($list[$key]->layout);
				$list[$key]->subscribemessage = stripslashes($list[$key]->subscribemessage);
				$list[$key]->unsubscribemessage = stripslashes($list[$key]->unsubscribemessage);
				$lists[$key]->notifyadminmsg=stripslashes($lists[$key]->notifyadminmsg);
				$lists[$key]->subnotifysend = stripslashes($lists[$key]->subnotifysend);
				$lists[$key]->subnotifymsg=stripslashes($lists[$key]->subnotifymsg);
			}
		}

		if ( !empty( $list ) ) {
			return true;
		} else {
			return false;
		}
	}

	public static function getOneList($listId, $listType=0) {
		$db = JFactory::getDBO();

		if ($listId>0) {
			$query = 'SELECT * FROM `#__jnews_lists` WHERE `id` = '.intval($listId);
			if (!empty($listType))' AND `list_type` ='.intval($listType);
			$db->setQuery($query);
			$list = $db->loadObject();
		} else {
			$list = '';
		}

		if(empty($list)) {
			$list = new stdClass;
			$list->id = '';
			$list->list_name = '';
			$list->list_desc = '';
			$list->sendername = '';
			$list->senderemail = '';
			$list->bounceadres = '';
			$list->layout = '';
			$list->template = 0;
			$list->html = 1;
			$list->hidden = 1;
			$list->list_type = 0;
			$list->auto_add = 0;
			$list->user_choose = 0;
			$list->cat_id = '0:0';
			$list->delay_min = 0;
			$list->delay_max = 0;
			$list->follow_up = 0;
			$list->owner = '';
			$list->acc_level = 25;
			$list->acc_id = 29;
			$list->published = 0;
			$list->subscribemessage = '';
			$list->unsubscribemessage = '';
			$list->notifyadminmsg='';
			$list->unsubscribesend = 1;
			$list->unsubscribenotifyadmin = 1;
			$list->subnotifysend = 1;
			$list->footer = 1;
			$list->notify_id = 0;
			$list->notification = 0;
			$list->start_date = date( 'Y-m-d',  time() );
			$list->next_date = time();
		}

		$list->list_name = stripslashes($list->list_name);
		$list->list_desc = stripslashes($list->list_desc);
		$list->sendername = stripslashes($list->sendername);
		$list->senderemail = stripslashes($list->senderemail);
		$list->bounceadres = stripslashes($list->bounceadres);
		$list->layout = stripslashes($list->layout);
		$list->subscribemessage = stripslashes($list->subscribemessage);
		$list->unsubscribemessage = stripslashes($list->unsubscribemessage);
		$list->notifyadminmsg=stripslashes($list->notifyadminmsg);
		$list->subnotifymsg= ( !empty($list->subnotifymsg) ) ? stripslashes($list->subnotifymsg) : '';

		return $list;
	}

	public static function checkStatus($listId) {
         $list = jNews_Lists::getOneList($listId);
         if ( $list->published )  $status = true; else  $status = false;
	    return $status;
	}

	public static function updateListFromEdit($listId, $status, $new, $listType=1) {
		$my	= JFactory::getUser();
		$mainframe = JFactory::getApplication();

		if(version_compare(JVERSION,'1.6.0','>=')){ //j16
			$usergid =JAccess::getGroupsByUser($my->id, false);
			$my->gid = $usergid[0];
		}

		$listUpdated = new stdClass;
		$total = 0;
		$listUpdated->id = $listId;

		$issue_nb = JRequest::getVar('issue_nb', '0' );
		$listUpdated->list_name = JRequest::getVar('list_name', '', 'request','string', JREQUEST_ALLOWRAW );
		$listUpdated->list_desc = JRequest::getVar('list_desc', '', 'request','string', JREQUEST_ALLOWRAW );
		$listUpdated->sendername = addslashes( JRequest::getVar('sendername' , '') );
		$listUpdated->senderemail = JRequest::getVar('senderemail' , '');
		$listUpdated->bounceadres = JRequest::getVar('bounceadres' , '');
		$listUpdated->layout = JRequest::getVar('layout', '', 'request','string', JREQUEST_ALLOWRAW );
		$listUpdated->template = JRequest::getInt('templatelist', 0 );
		$listUpdated->subscribemessage = JRequest::getVar('subscribemessage', '', 'request','string', JREQUEST_ALLOWRAW );
		$listUpdated->unsubscribemessage = JRequest::getVar('unsubscribemessage', '', 'request', 'string',JREQUEST_ALLOWRAW );
		$listUpdated->notifyadminmsg = JRequest::getVar('notifyadminmsg', '', 'request', 'string',JREQUEST_ALLOWRAW );
		$listUpdated->unsubscribesend = JRequest::getVar('unsubscribesend', 1);
		$listUpdated->unsubscribenotifyadmin = JRequest::getVar('unsubscribenotifyadmin', 1);
		$listUpdated->subnotifysend = JRequest::getVar('subnotifysend', 1);
		$listUpdated->subnotifymsg = JRequest::getVar('subnotifymsg', '', 'request', 'string',JREQUEST_ALLOWRAW );
		$listUpdated->html = JRequest::getVar('html', 1);
		$listUpdated->hidden = JRequest::getVar('hidden', 0);
		$listUpdated->list_type = $listType;
		$listUpdated->auto_add = JRequest::getVar( 'auto_add', 0 );
		$listUpdated->user_choose = JRequest::getVar( 'user_choose', 0 );
		$listUpdated->cat_id = implode(',',JRequest::getVar('cat_id',array()));
		$listUpdated->delay_min = JRequest::getVar('delay_min', 0);
		$listUpdated->delay_max = JRequest::getVar('delay_max', 0);
		$listUpdated->follow_up = JRequest::getVar('follow_up', 0);
		$listUpdated->notify_id = ($listUpdated->list_type=='7') ? JRequest::getVar('notify_id', 0) : 0;

		if($mainframe->isAdmin()) {
			$listUpdated->acc_level = JRequest::getVar('acc_level', '25,24,8,7');
		}else{
			$listUpdated->acc_level = JRequest::getVar('acc_level', $my->gid);
		}

		$listUpdated->acc_id = JRequest::getVar('acc_id', 'all');
		$listUpdated->footer = JRequest::getVar('footer', 1);
		$listUpdated->start_date = JRequest::getVar('start_date', '');
		$listUpdated->next_date = JRequest::getVar('next_date', 0);
		$listUpdated->owner = $my->id;
		$listUpdated->notification =  0;
		if ($status =='') {
			$listUpdated->published = JRequest::getVar('published', 0);
		} else {
			$listUpdated->published = $status;
		}

		if ($listUpdated->published == 0 AND ( $listUpdated->list_type == 2 OR $listUpdated->list_type == 3 )){
			$published = 0;
		}
		else{
			$published =$listUpdated->published;
		}
		if (!empty($listUpdated->hidden)){
			$visible = $listUpdated->hidden;
		}
		else{
			$visible =0;
		}

		if ($new) $published = $listUpdated->published;

		if (!jNews_Lists::updateList($listId, $listUpdated, $listUpdated->published, $new)) return false;

		$allMainListA = JRequest::getVar('aca_mailing_addto', array() );
		if ($listUpdated->list_type==2 && !empty($allMainListA) ) {//auto-responder
			$db = JFactory::getDBO();
			$query = 'DELETE FROM `#__jnews_followup` WHERE `followup_id` = ' . $listId;
			$db->setQuery($query);
			$db->query();
			$runQuery = false;
			$query = 'INSERT INTO `#__jnews_followup` (`followup_id`, `list_id`) VALUES ';
			foreach( $allMainListA as $oneMainList=>$checked ) {
				if ( $checked ) {
					$query .='('.$listId.','.$oneMainList.'),';
					$runQuery = true;
				}
			}//endofreach
			if ( $runQuery ) {
				$query = rtrim( $query, ',');
				$db->setQuery($query);
				$db->query();
			}

		}
		return true;
	 }


	 public static function updateListFromList($listId, $status, $new) {

		$listUpdated = jNews_Lists::getOneList($listId);
		$listUpdated->published = $status;

		if ($status) {
			$d['published'] = 1;
		} else {
			$d['published'] = 0;
		}
		$d['list_id'] = $listId;

		return jNews_Lists::updatePublish($d);

	 }

	 public static function updateList($listId, $listUpdated, $status, $new) {
		$total = 0;
		@set_time_limit(0);

		//If memory_limit less than 128M
 		$limit= jnews::convertToBytes(@ini_get('memory_limit'));
		if($limit < jnews::convertToBytes('128M') ){
			@ini_set('memory_limit','128M');
		}

		if ( $listUpdated->list_type !='7' AND $listUpdated->delay_min > $listUpdated->delay_max ) { $listUpdated->delay_min  = $listUpdated->delay_max;}

	    if ( !jNews_Lists::updateListData($listUpdated) ) {
	         return false;
	    } else {
		  	if ($listUpdated->auto_add == 2) {
		  		$subscribers = jNews_Subscribers::getSubscribers( -1 , -1 , '' , $total , 0, '', 1, 1,'','' );//added one parameter for mailid
			    $subId = jnews::convertObjectToIdList($subscribers , 'id');
			    if(!empty($subId)){
			    	jNews_Queue::insertQueuesForNews($subId, $listId, $listUpdated->acc_id);
			    }

	         } elseif ($status =='' AND $listUpdated->list_type == 2) {
				$queues = jNews_Queue::getAllOneList($listId);

		      $qid = jnews::convertObjectToIdList($queues , 'qid');
		      if ( !jNews_Queue::updatePublished($qid, $status) ) return false;
	         } else {
	         	if (class_exists('jNews_Auto'))
	         		jNews_Auto::updateListNb($listUpdated->list_type, $listUpdated->id);
	         }
		 }

		if($listUpdated->published==0) jnews::printM('blue',_JNEWS_LIST_UNPUBMSG);
		if($listUpdated->hidden==0) jnews::printM('blue',_JNEWS_LIST_INVIMSG);

		 return true;
	 }


	public static function updateListData($listUpdated) {
		$db = JFactory::getDBO();

		$listUpdated->acc_id = trim($listUpdated->acc_id);
		if ( empty($listUpdated->acc_id) ) $listUpdated->acc_id = 'all';
		
		$query = "UPDATE `#__jnews_lists` SET ".
		" `list_name` = '".addslashes($listUpdated->list_name)."', ".
		" `list_desc` = '".addslashes($listUpdated->list_desc)."', ".
		" `sendername` = '".trim($listUpdated->sendername)."', ".
		" `senderemail` = '".trim($listUpdated->senderemail)."', ".
		" `bounceadres` = '".trim($listUpdated->bounceadres)."', ".
		" `layout` = '".addslashes($listUpdated->layout)."', ".
		" `template` = '$listUpdated->template', ".
		" `subscribemessage` = '".addslashes($listUpdated->subscribemessage)."', ".
		" `unsubscribemessage` = '".addslashes($listUpdated->unsubscribemessage)."', ".
		" `notifyadminmsg` = '".addslashes($listUpdated->notifyadminmsg)."', ".
		" `unsubscribesend` = '$listUpdated->unsubscribesend', ".
		" `unsubscribenotifyadmin` = '$listUpdated->unsubscribenotifyadmin', ".
		" `subnotifysend` = '$listUpdated->subnotifysend', ".
		" `subnotifymsg` = '".addslashes($listUpdated->subnotifymsg)."', ".
		" `html` = '$listUpdated->html',".
		" `hidden` = '$listUpdated->hidden', ".
		" `list_type` = '$listUpdated->list_type', ".
		" `auto_add` = '$listUpdated->auto_add',".
		" `user_choose` = '$listUpdated->user_choose',".
		" `cat_id` = '$listUpdated->cat_id',".
		" `delay_min` = '$listUpdated->delay_min',".
		" `delay_max` = '$listUpdated->delay_max',".
		" `follow_up` = '$listUpdated->follow_up',".
		" `owner` = '$listUpdated->owner',".
		" `acc_level` = '$listUpdated->acc_level',".
		" `acc_id` = '$listUpdated->acc_id' ,".
		" `footer` = '$listUpdated->footer' ,".
		" `notification` = '$listUpdated->notification' ,".
		" `notify_id` = '$listUpdated->notify_id' ,".
		" `published` = '$listUpdated->published'";
		$query .= " WHERE `id` = ".intval($listUpdated->id);
 		$db->setQuery($query);
		$db->query();
		return true;

    }

	/**
	 * We update the List Type on frontend which has been changed along the way,
	 * Which should not happen in the first place
	 * @param int $listId the list id
	 * @param int $listType the type of the list
	 * @return bool [true|false] should be successfully updated
	 */
	public static function updateListType($listId,$listType=1){
		$db = JFactory::getDBO();
		$status = false;
		if(!empty($listId) && $listType) {
			$db->setQuery("UPDATE `#__jnews_lists` SET `list_type`=$listType WHERE `id`=$listId");
			$db->query();
			$status=true;
		}

		return $status;
	}


public static function updateMailingData($listUpdated) {
		$db = JFactory::getDBO();

		$query = "UPDATE `#__jnews_mailings` SET ".
		" `cat_id` = '$listUpdated->cat_id',".
		" `delay_min` = '$listUpdated->delay_min',".
		" `delay_max` = '$listUpdated->delay_max',".
		" `published` = '$listUpdated->published'";
		if ( isset($listUpdated->next_date) ){
			if(!is_numeric($listUpdated->next_date)) $listUpdated->next_date = strtotime($listUpdated->next_date);
			$query .= ", `next_date` = '$listUpdated->next_date' ";
		}
		if ( isset($listUpdated->start_date) ) $query .= ", `start_date` = '$listUpdated->start_date' ";

		$query .= " WHERE `id` = ".intval($listUpdated->id);
 		$db->setQuery($query);
		$db->query();

		return true;

    }


	public static function updatePublish($d) {
		$db = JFactory::getDBO();
	 	$query = "UPDATE `#__jnews_lists` SET ";
		$query .= " `published` = ".$d['published'] ;
		$query .= " WHERE `id` = ".$d['list_id'];
 		$db->setQuery($query);
		$db->query();
	 	return true;
    }

	public static function copyList($listId) {
		$db = JFactory::getDBO();

		$xf = new jNews_Config();
		$list = jNews_Lists::getOneList($listId);
		$copyList = $list;
		$ii = 0;
		$time = time();
		$listname = $copyList->list_name.'_'.$time;
		$copyList->published = 0;
        $copyList->list_name = $listname;

			$query = "INSERT INTO `#__jnews_lists` (`list_name`,`list_desc` , `sendername` , `senderemail`, `bounceadres`, `layout` ," .
					" `template` , `subscribemessage`, 	`unsubscribemessage`,`notifyadminmsg` ,	`unsubscribesend` , `unsubscribenotifyadmin`, `subnotifysend`,`subnotifymsg`, `html` ," .
					" `hidden` , `list_type`, `auto_add` ,	`user_choose` ,  `cat_id` , 	`delay_min` ," .
					" 	`delay_max`, 	`follow_up` , 	`owner` , `acc_level` ,	`acc_id` ,	`published`,	`footer`,	`notify_id`	) " .
				"\n VALUES ( '".addslashes($copyList->list_name)."', '".addslashes($copyList->list_desc)."', ".
				"'".$copyList->sendername."', ".
				"'".$copyList->senderemail."', ".
				"'".$copyList->bounceadres."', ".
				"'".addslashes($copyList->layout)."', ".
				"'".$copyList->template."', ".
				"'".addslashes($copyList->subscribemessage)."', ".
				"'".addslashes($copyList->unsubscribemessage)."', ".
				"'".addslashes($copyList->notifyadminmsg)."', ".
				"'".$copyList->unsubscribesend."', ".
				"'".addslashes($copyList->subnotifymsg)."', ".
				"'".$copyList->subnotifysend."', ".
				"'".$copyList->unsubscribenotifyadmin."', ".
				"'".$copyList->html."', ".
				"'".$copyList->hidden."', ".
				"'".$copyList->list_type."', ".
				"'".$copyList->auto_add."', ".
				"'".$copyList->user_choose."', ".
				"'".$copyList->cat_id."', ".
				"'".$copyList->delay_min."', ".
				"'".$copyList->delay_max."', ".
				"'".$copyList->follow_up."', ".
				"'".$copyList->owner."', ".
				"'".$copyList->acc_level."', ".
				"'".$copyList->acc_id."', ".
				"'".$copyList->published."', ".
				"'".$copyList->footer."', ".
				"'".$copyList->notify_id."' )";

			$db->setQuery($query);
			$db->query();
			$listname = $listname.$ii ;

  			$xf->plus('totallist0', 1);
			$xf->plus('act_totallist0', 1);
			$xf->plus('totallist1', 1);
			$xf->plus('act_totallist1', 1);
        	return true;
	}

	public static function deleteList($listId) {
		$db = JFactory::getDBO();
		$total = 0;

		$xf = new jNews_Config();
		$list = jNews_Lists::getOneList($listId);
		$query = 'DELETE FROM `#__jnews_lists` WHERE `id` = ' . $listId;
		$db->setQuery($query);
		$db->query();

		//delete mailings in listmailings where listid=listid
		$query = 'DELETE FROM `#__jnews_listmailings` WHERE `list_id` = ' . $listId;
		$db->setQuery($query);
		$db->query();

		//delete listsubscribers in listsubscribers where listid=listid
		$query = 'DELETE FROM `#__jnews_listssubscribers` WHERE `list_id` = ' . $listId;
		$db->setQuery($query);
		$db->query();

		//delete entries in the followup
		$query = 'DELETE FROM `#__jnews_followup` WHERE `followup_id` = ' . $listId;//for autoresponders
		$query .= ' OR `list_id`='. $listId;//for lists
		$db->setQuery($query);
		$db->query();

        return true;

	}
	

/** public static function that will get the an entry in the jnews list depend on the type passed
    	 * Ive created this public static function to avoid problems regarding the current structure of jnews
    	 * because ive modifications has been done in the current structure and i need this entry for the previous structure of jnews to work
    	 * @param int $mailType - mailing type
    	 * @return int $id - mailing id
    	*/
	public static function getListFirstEntry( $mailType=0 ) {
		static $db=null;
		if( !isset( $db ) ) $db = JFactory::getDBO();
		if( !empty($listType) ) $query = 'SELECT `id` FROM `#__jnews_mailings` WHERE `mailing_type`='. $mailType;
		else $query = 'SELECT `id` FROM `#__jnews_mailings` LIMIT 1';
		$db->setQuery($query);
		$result = $db->loadResult();

		return $result;
	}

/** public static function that will check if the list table is empty/published or not
	 * @return boolean $returnValue - will return true if theres at list one list published or existed
	*/
	public static function checkListNotEmpty($listType=1) {
		static $db=null;
		if( !isset( $db ) ) $db = JFactory::getDBO();
		$query = "SELECT `id` FROM `#__jnews_lists` WHERE `published` = 1 AND `list_type` = ". $listType;
		$db->setQuery($query);
		$result = $db->loadResult();

		$returnValue = ( !empty($result) ) ? true : false;
		return $returnValue;
	}

	public static function getListCount( $listType=0 ) {
		static $db=null;
		if( !isset($db) ) $db = JFactory::getDBO();

		$query = "SELECT count(`id`) FROM `#__jnews_lists` ";
		if( !empty($listType) ) $query .= "WHERE `list_type` =". $listType;
		$db->setQuery( $query );
		$result = $db->loadResultArray();

		$count = ( !empty($result) ) ? $result : 0;
		return $count;
	}

	public static function getListType($listId){
		static $listType=array();
		if( isset($listType[$listId]) ) return $listType[$listId];

		$db = JFactory::getDBO();
		$query = 'SELECT `list_type` FROM `#__jnews_lists` WHERE `id`='.$listId;
		$db->setQuery( $query );
		$listType[$listId]=$db->loadResult();
		return $listType[$listId];
	}

/** this public static function is to check if ever the listid/s entered for subscription via url is an existing listid
 * returns false if one of the passed listid does not exists
 * otherwise return true
 * */
	public static function doListsExists($l){
		$li=explode(',',$l);
		$result=true;

		$db = JFactory::getDBO();

		foreach($li as $list){
			$query = 'SELECT `id` FROM `#__jnews_lists` WHERE `id`='.$list;
			$db->setQuery( $query );
			$db->query( );
			$exists=$db->loadResult();

			if(empty($exists)){
				$result=false;
				break;
			}
		}

		return $result;
	}


	public static function followupListFound( $arId, $listId ){
		$db = JFactory::getDBO();

		if( empty($arId) || empty( $listId ) )
    			return false;

		$query = 'SELECT `list_id` FROM `#__jnews_followup` WHERE `followup_id`='. $arId. ' AND `list_id`='. $listId;
   		$db->setQuery( $query );
   		$result = $db->loadResult();
		$returnValue = ( !empty($result) ) ? true : false;
		return $returnValue;
	}

	//@params id of the user logged in
	//returns the list ids owned by this user
	public static function getOwnedlists($id){
		$db = JFactory::getDBO();
		$query = "SELECT `id` FROM `#__jnews_lists` WHERE `owner`=".$id;
		$db->setQuery( $query );
		$ownedlists = $db->loadResultArray();
		return $ownedlists;
	}

	//@params id of the user logged in
	//returns the list ids owned by this user
	public static function getFEListsByOwner($id){
		$db = JFactory::getDBO();
		$query = "SELECT `id`,`list_name` FROM `#__jnews_lists` WHERE `owner`=".$id." AND `siteend` = 1 ORDER BY `list_type`";
		$db->setQuery( $query );
		$ownedlists = $db->loadObjectList();
		return $ownedlists;
	}

	//get one list id that is published and visible
	public static function getlistFE(){
		$db = JFactory::getDBO();
		$query = "SELECT `id` FROM `#__jnews_lists` WHERE `list_type`= 1 AND `published`=1 AND `hidden`=1 LIMIT 1";
		$db->setQuery( $query );
		$list = $db->loadResult();
		return $list;
	}

	//get the followup of a list
	public static function getFollowup($listId){
		$db = JFactory::getDBO();
		$query = 'SELECT `follow_up` FROM `#__jnews_lists` WHERE `id`='.$listId.' LIMIT 1';
		$db->setQuery( $query );
		$followup = $db->loadResult();
		return $followup;
	}
	
	/**
	 * 
	 * we count the number of lists
	 * @param - $type
	 */
	public static function countLists($type = 1){
		static $count = array();
		
		if(!isset($count[$type])){
			$db = JFactory::getDBO();
			$query = 'SELECT count(`id`) FROM `#__jnews_lists` WHERE `list_type`='.$type;// AND `published` = 1';
			$db->setQuery($query);
			$db->query($query);
			$count[$type] = $db->loadResult();
		}
		
		return $count[$type];
	}
	
	/**
	 * 
	 * we get the template id of a list
	 * @param  $lsid
	 */
	public static function getListTemplate($lsid){
		if(empty($lsid)) return '';
		
		static $template = array();
		
		if(!isset($template[$lsid])){
			$db = JFactory::getDBO();
			$query = 'SELECT `template` FROM `#__jnews_lists` WHERE `id`='.$lsid.' AND `published` = 1';
			$db->setQuery($query);
			$db->query($query);
			$template[$lsid] = $db->loadResult();
		}
		
		return $template[$lsid];
	}
	
 } 