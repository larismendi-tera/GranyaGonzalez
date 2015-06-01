<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_ListsSubs {

/**
	 * This public static function is used to store 1 subscriber in 1 or more lists the listssubscriber table
	 */
	public static function saveToListSubscribers($subscriber) {

	    if(!empty($subscriber->list_id)) $listids=$subscriber->list_id;
	    else return false; //no list id to be inserted we return
	    
	    if(!empty($subscriber->id)) $subscriber_id=$subscriber->id;
	    else return false; //no subscriber id to be inserted we return
	    
	    $subdate=(!empty($subscriber->subdate)) ? $subscriber->subdate : time();
		$unsubdate = (!empty($subscriber->unsubdate)) ? $subscriber->unsubdate : 0;
        $unsubscribe= (!empty($subscriber->unsubscribe)) ? $subscriber->unsubscribe : 0;
        $params = (!empty($subscriber->params)) ? $subscriber->params : '';
        
        $db = JFactory::getDBO();
        
		$query = 'INSERT IGNORE INTO `#__jnews_listssubscribers` (`list_id`,`subscriber_id`,`subdate`,`unsubdate`,`unsubscribe`, `params`)';
		if(count($listids)>1){ //if listid more than 1
			$query .=' VALUES ('.implode( ','.$subscriber_id.','.$subdate.','.$unsubdate.','.$unsubscribe.',"'.$params.'"),(', $listids) .','.$subscriber_id.','.$subdate.','.$unsubdate.','.$unsubscribe.',"'.$params.'")';
		}else{
			$listid= (is_array($listids)) ? $listids[0] : $listids;
			$query.='VALUES ( '.$listid.','.$subscriber_id.','.$subdate.','.$unsubdate.','.$unsubscribe.',"'.$params.'")';
		}
		
		$db->setQuery($query);
		$db->query();
		
		//this is mainly update query is mainly for the flexicontent subscription
		//we update the entry having the listid and subscriberid
		//we only have one listid for the flexicontent subscription
		if(!empty($subscriber->flexicontentFlag) AND isset($subscriber->flexicontentFlag)){
			if($subscriber->flexicontentFlag){
				if(!is_array($listids)){
					$query = 'UPDATE `#__jnews_listssubscribers` SET `params`=\''.$params .'\' WHERE `list_id`='.$listids.' AND `subscriber_id`='.$subscriber_id;
					$db->setQuery($query);
					$db->query();
				}
			}
		}
		
		return true;
	}


/**
	 * This public static function is to get the listId(s) subscribed by users(s) during new subscription
	 * @param redirect - this is a param passed from the module to do redirect of the page after subscription
	 */
	public static function getListidsSubscribedInfo( $subscriberId, $modlistids=null, $redirect=false ) {

		$subscriber = '';
		$subsListInfo = new stdClass;
		$subsListInfo->user_id = $subscriberId;
		
		$status = true;

		$db = JFactory::getDBO();
		$acl = JFactory::getACL();
		$my	= JFactory::getUser();

		$listIds = JRequest::getVar('listid', '0' );
		
		if ( !$redirect && $modlistids != null ) {
			$listIds = $modlistids;
		}

		if ( !empty($listIds) ) {
			$accessName = '';
			$userid = JRequest::getInt('userid');
			$idslists = explode(",", $listIds);

			if($modlistids != null){
				unset($idslists[0]);
			}

			foreach($idslists as $i => $listId){
				$listId = intval($listId);
				if($listId<=0) break;

				$list = jNews_Lists::getOneList($listId);

				if ( empty($list)) {
					echo jnews::printM( 'red' , 'List not defined for ID:' .$listId );
					continue;
				}

				$listIds = explode(',',$list->acc_id);

				if(version_compare(JVERSION,'1.6.0','<')){ //j15
					$usergid = $my->gid;
				}else{ //j16
					$usergid =JAccess::getGroupsByUser($my->id, false);
				}

				if (is_array($listIds)){
					if(is_array($usergid)) {
						$canAccess = array_intersect($usergid,$listIds);
						if( empty($canAccess) ) $status = false;
					}else{
						if ( !in_array( $usergid,$listIds) ) $status = false;
					}
				}else{
					if(is_array($usergid)) {
						$canAccess = array_intersect($usergid,$listIds);
						if( empty($canAccess) ) $status = false;
					}else{
						if($usergid != $listIds) $status = false;
					}
				}

				if( $status ) echo jnews::printM('red' , JNEWS_NO_LIST_PERM );

				$subsListInfo->sub_list_id[$i] = $listId;
				$subsListInfo->subscribed[$i] = 1;
				$subsListInfo->acc_level[$i] = $list->acc_id;
			}

		} else {
			$subsListInfo->sub_list_id = JRequest::getVar('sub_list_id', 0 );
			$subsListInfo->subscribed = JRequest::getVar('subscribed', 0 );
			if( $subsListInfo->subscribed == 0 ) {
				$subsListInfo->subscribed = array();
				if(!empty($subsListInfo->sub_list_id)){
					foreach($subsListInfo->sub_list_id as $key=>$value){
						$subsListInfo->subscribed[$key] = 0;

					}
				}
			}

			$subsListInfo->acc_level = JRequest::getInt('acc_level', 29);
			if(!empty($subsListInfo->sub_list_id)){
				foreach($subsListInfo->sub_list_id as $key=>$value){
					if(empty($subsListInfo->subscribed[$key]) or $subsListInfo->subscribed[$key] != 1){
						$subsListInfo->subscribed[$key] = 0;
					}
				}
			}
		}

		if ( !empty($subsListInfo->subscribed) && $subsListInfo->user_id > 0 ) {
			jNews_ListsSubs::updateSubscriptionToLists($subsListInfo);
		}

		return true;

	 }


/**
	 * This public static function will save entries to listSubscibers
	 * @param object $subsListInfo subcriberInfo
	 * -> user_id
	 * ->array sub_list_id  all lists IDs
	 * ->array subscribed only subscribed
	 * ->acc_level
	 */
	public static function updateSubscriptionToLists( $suscription ) {
		if ( empty($suscription->sub_list_id) ) return false;
		
		$db = JFactory::getDBO();
		$listidSubsA=array(); //subscribe lists
		$listidUnsubsA=array(); //unsubscribe lists

		$mainframe = JFactory::getApplication();

		
		//cehck if one of the list is attached to an auto-responder
		//if so make sure we subscribe to it
		$query = 'SELECT `followup_id` FROM `#__jnews_followup`  ';
		$query .=' WHERE `list_id` IN ( '. implode( $suscription->sub_list_id, ',') . ')';
		$db->setQuery($query);
		$attachedList2AutoResponderA = $db->loadResultArray();

		if ( !empty( $attachedList2AutoResponderA ) ) {
			foreach( $attachedList2AutoResponderA as $oneAutoList ) {
				if ( !in_array( $oneAutoList, $suscription->sub_list_id ) ) {
					$suscription->sub_list_id[] = $oneAutoList;
					$suscription->subscribed[] = 1;
				}
			}
		}
		
		//get the current state of subscriptions
		$query = 'SELECT `unsubscribe`,`list_id` FROM `#__jnews_listssubscribers`  ';
		$query .=' WHERE `subscriber_id`= '.$suscription->user_id;
		$db->setQuery($query);
		$existingSubcriptionsA = $db->loadObjectList('list_id');

		foreach( $suscription->subscribed as $oneID => $checked ) {
			$listID2 = (int)$suscription->sub_list_id[$oneID];
			if ( isset($existingSubcriptionsA[$listID2]) ) {
				if ( $existingSubcriptionsA[$listID2]->unsubscribe ) {	//currently unsubscribed
					if ( $checked ) $listidSubsA[] = $listID2;
				} else {	//already subscribed
					if ( !$checked ) $listidUnsubsA[] = $listID2;
				}
			} else {
				if ( $checked ) $listidSubsA[] = $listID2;
			}
		}//endfroeach

		//we check if frontend or not
		if(!$mainframe->isAdmin()){

			//we check if current subscription is not empty
			if(!empty($listidSubsA)){

				if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
					//we check if the social class file exists for the implementation of master lists
					if(class_exists('jNews_Social')){
	
						//we check if configuration for master lists is enabled
						if( $GLOBALS[JNEWS.'use_masterlists'] ){
	
							if( ($GLOBALS[JNEWS.'level'] > 1) ){
	
								//we validate if the user can be subscribed to the list then we return the masterlistid
								//1 - MasterLists for all Potential Users
								$listidSubsA[] = jNews_Social::includeMasterListIds($suscription->user_id,1,$listidSubsA);
								//3 - MasterLists for all Registered Subscribers
								$listidSubsA[] = jNews_Social::includeMasterListIds($suscription->user_id,2,$listidSubsA);
							}
							if( ($GLOBALS[JNEWS.'level'] > 2) ){
	
								//we validate if the user can be subscribed to the list then we return the masterlistid
								//3 - MasterLists for all Front-end Subscribers
								$listidSubsA[] = jNews_Social::includeMasterListIds($suscription->user_id,3,$listidSubsA);
							}
	
							//we remove here the masterlistids from the $listidUnsubsA
							//so that masterlist entries won't get updated to unsubscribe
							foreach($listidUnsubsA as $key => $lsidunsub){
								if(in_array( $lsidunsub, $listidSubsA )) unset($listidUnsubsA[$key]);
							}
	
						}
					}
				}
			}
		}

		//update
		jNews_ListsSubs::_applyChangedSubscription($suscription->user_id, $listidSubsA, $listidUnsubsA);
		$allListsForAR = array();
		if ( !empty($listidSubsA) ) {
			foreach( $listidSubsA as $id ) $allListsForAR[$id] = true;
		}
		if ( !empty($listidUnsubsA) ) {
			foreach( $listidUnsubsA as $id ) $allListsForAR[$id] = false;
		}

		if ( empty($allListsForAR) ) return true;

		$allListsForARkeysA = array_keys($allListsForAR);

		//we need to separate the ARs from the Lists (From the Subscriptions that were changed)
		$query = 'SELECT `id` FROM `#__jnews_lists` WHERE `list_type`=1 AND `id` IN ('.implode(',', $allListsForARkeysA ).')';
		$db->setQuery($query);
		$listA = $db->loadResultArray();

		if ( !empty($listA) ) {

			$changedARA = array_diff( $allListsForARkeysA, $listA );
			//we get the records from  the followup table
			$query = 'SELECT * FROM `#__jnews_followup` WHERE `list_id` IN ('.implode(',', $listA).')';
			$db->setQuery($query);
			$followupLists = $db->loadObjectList();

			if ( empty($followupLists) ) {

				$query = 'SELECT `id` FROM `#__jnews_lists` WHERE `list_type`=2 AND `id` IN ('.implode(',', $allListsForARkeysA ).')';
				$db->setQuery($query);
				$subscribeARA = $db->loadResultArray();

				$query = 'SELECT `id` FROM `#__jnews_lists` WHERE `list_type`=2 AND `id` NOT IN ('.implode(',', $allListsForARkeysA ).')';
				$db->setQuery($query);
				$unsubscribeARA = $db->loadResultArray();

			} else {

				$subscribeARA = array();
				$unsubscribeARA = array();
				jNews_ListsSubs::_resolveListAndARConflicts( $subscribeARA, $unsubscribeARA, $followupLists, $allListsForAR, $changedARA );
			}

		} else {

			$subscribeARA = $listidSubsA;
			$unsubscribeARA = $listidUnsubsA;

		}

		if ( !empty($subscribeARA) ) jNews_ListsSubs::subscribeARtoQueue( $suscription->user_id, $subscribeARA );
		if ( !empty($unsubscribeARA) ) jNews_ListsSubs::unsubscribeARtoQueue( $suscription->user_id, $unsubscribeARA );

	    return true;

	 }


	public static function _resolveListAndARConflicts( &$subscribeARA, &$unsubscribeARA, $followupLists, $allListsForAR, $changedARA ) {
		$finalChangedARA = array();

		$followupListsA = array();
		//we assign the objectlist to a dimensional array
		foreach($followupLists as $followupList){
			$followupListsA[$followupList->followup_id][] = $followupList->list_id;
		}

		if ( $GLOBALS[JNEWS.'priord_list']==0 ) {

			$ARFollowUpFRomListA = array_keys($followupListsA);
			$noConflictingARA = array_diff( $ARFollowUpFRomListA, $changedARA );
			if ( !empty($noConflictingARA) ) {
				foreach( $noConflictingARA as $oneNoConflict ) {
					if ( !empty($followupListsA[$oneNoConflict]) ) {
						foreach( $followupListsA[$oneNoConflict] as $ListID ) {
							jNews_ListsSubs::_checkAssignAR(  $finalChangedARA, $oneNoConflict, $allListsForAR[$ListID] );
						}
					}
				}
			}

			//solve intersection
			$intersectionARA = array_intersect( $ARFollowUpFRomListA, $changedARA );
			if ( !empty($intersectionARA) ) {
				foreach( $intersectionARA as $oneIntersec ) {
					if ( !empty($followupListsA[$oneIntersec]) ) {
						foreach( $followupListsA[$oneIntersec] as $ListID ) {
							jNews_ListsSubs::_checkAssignAR(  $finalChangedARA, $oneIntersec, $allListsForAR[$ListID] );
						}
					}
				}
			}

			//need to solve the conflicting one
			$orinalARnoConflictA = array_diff( $changedARA, $intersectionARA);
			if ( !empty($orinalARnoConflictA) ) {
				foreach( $orinalARnoConflictA as $oneAR ) {
					$finalChangedARA[$oneAR] = $allListsForAR[$oneAR];
				}
			}

		} else {

			$allFollowUpKeys = array_keys( $followupListsA );
			if ( !empty($allFollowUpKeys) ) {
				foreach( $allFollowUpKeys as $oneAR ) {
					if ( !empty($followupListsA[$oneAR]) ) {
						foreach( $followupListsA[$oneAR] as $ListID ) {
							jNews_ListsSubs::_checkAssignAR( $finalChangedARA, $oneAR, $allListsForAR[$ListID] );
						}
					}
				}
			}

			if ( !empty($changedARA) ) {
				foreach( $changedARA as $oneAR ) {
					if ( !isset($finalChangedARA[$oneAR]) ) $finalChangedARA[$oneAR] = $allListsForAR[$oneAR];
				}
			}

		}


		//process result $finalChangedARA
		if ( !empty($finalChangedARA) ) {
				foreach( $finalChangedARA as $oneAR => $value ) {
					if ( $value ) $subscribeARA[] = $oneAR;
					else $unsubscribeARA[] = $oneAR;
				}
		}
		return true;

	}


	public static function _checkAssignAR(  &$finalChangedARA, $AR, $value ) {
		static $doNothing = array();

		if ( isset($doNothing[$AR]) ) return true;

		if ( !isset($finalChangedARA[$AR]) ) $finalChangedARA[$AR] = $value;

		if ( $value != $finalChangedARA[$AR] ) {
			if ( $GLOBALS[JNEWS.'priord_subs']==1 ) {
				$finalChangedARA[$AR] = true;
			} elseif (  $GLOBALS[JNEWS.'priord_subs']==2 ) {
				$finalChangedARA[$AR] = false;
			} else {
				unset($finalChangedARA[$AR]);
				$doNothing[$AR] = true;
			}
		}

	}



	public static function unsubscribeARtoQueue( $subscriberID, $unsubscribeARA ){
		$db = JFactory::getDBO();

		$selectQuery = 'SELECT `mailing_id` FROM `#__jnews_listmailings` ';
		$selectQuery .=' WHERE `list_id` IN ('.implode(',',$unsubscribeARA).')';

		$query = 'DELETE FROM `#__jnews_queue` WHERE `subscriber_id` = ' . $subscriberID;
		$query .=' AND `mailing_id` IN ( '.$selectQuery.')';
		$db->setQuery($query);
		$db->query();

	 }


	public static function subscribeARtoQueue( $subscriberID, $subscribeARA ) {
		$db = JFactory::getDBO();

		$confirmed=jNews_Subscribers::isConfirmed($subscriberID);
//		$time = jnews::getNow();
		$time = time();
		
		//we check to make sure we are not wrong with the values passed
		if( is_array($subscribeARA) ){
			$list2Subscribe = ( count($subscribeARA >1 ) ) ? implode(',',$subscribeARA): $subscribeARA[0];
		} else {
			$list2Subscribe = $subscribeARA;
		}

		$selectQuery = 'SELECT '.$subscriberID.',A.`mailing_id`,'.$time.' + B.`delay`*60,1,'.$confirmed.',2';
		$selectQuery .= ' FROM `#__jnews_listmailings` as A LEFT JOIN `#__jnews_mailings` as B on A.`mailing_id` = B.`id`';
		$selectQuery .= ' WHERE A.`list_id` IN ('.$list2Subscribe.') AND B.`published` = 1';
		$query = 'INSERT IGNORE INTO `#__jnews_queue` (`subscriber_id`,`mailing_id`,`send_date`,`priority`,`suspend`,`type`) '.$selectQuery;
		$db->setQuery($query);
		$db->query();
		/**we call this public static function to add a flag in the queue that the subscriber had already received all of the mailings in the queue
		 *from the subscribed AR
		*/
		jNews_ListsSubs::flagAR( $subscriberID, $subscribeARA );

	}


/**
	 * This public static function is used for deletion or removal of subscribers subscribed to lists
	 */
	public static function removeSubscription($subscriber_id,$listids=0){
		$db = JFactory::getDBO();

		if ($subscriber_id>0) {
			$query = 'DELETE FROM `#__jnews_listssubscribers` WHERE `subscriber_id` = ' . $subscriber_id;
			if ($listids>0) $query .=' AND `list_id` ='.$listids;

			$db->setQuery($query);
			$db->query();
			$db->getErrorMsg();

			if( @require_once( JNEWSPATH_CLASS . 'class.queue.php') ) {
				if(class_exists('jNews_Queue')) jNews_Queue::deleteSubsQueue($subscriber_id,$listids);
			}
		}
    return true;
  }

	  public static function getSubscriberLists($userId) {
		$db = JFactory::getDBO();
		if ($userId>0) {
		    $query = 'SELECT LS.*, L.list_name, L.list_desc, L.acc_level, L.id, L.hidden, L.published,L.list_type FROM `#__jnews_lists` AS L LEFT JOIN `#__jnews_listssubscribers` AS LS' .
		    		' ON  L.id = LS.list_id  WHERE LS.subscriber_id='.$userId;
		    $query .= ' AND LS.`unsubscribe`= 0';
			$query .= jnews::orderBy('list_idA');
			$db->setQuery($query);
			$queue = $db->loadObjectList();

			return $queue;
		}else {
			return '';
		}
	 }

	 public static function getSubscriberMail($id){
		static $email=array();

		if ( isset($email[$id]) ) return $email[$id];

		$db = JFactory::getDBO();
		$query='SELECT email from `#__jnews_subscribers` where id='. $id;

		$db->setQuery($query);
		$email[$id] = $db->loadResult();
		
		return $email[$id];
	 }

	 public static function _applyChangedSubscription($subscriberId, $subscribeA, $unsubscribeA){
	 	$db = JFactory::getDBO();
		if ( !empty($unsubscribeA) ) {
			$query = 'UPDATE `#__jnews_listssubscribers` SET ';
			$query .= ' `unsubdate`='.time();
			$query .= ' ,`unsubscribe`=1';
			$query .=' WHERE `subscriber_id`= '.$subscriberId.' AND `list_id` IN ('.implode(',',$unsubscribeA).')';
			$db->setQuery($query);
			$db->query();
		}

		if ( !empty($subscribeA) ) {
			$query = 'UPDATE `#__jnews_listssubscribers` SET ';
			$query .= ' `unsubscribe`=0';
			$query .=' WHERE `subscriber_id`= '.$subscriberId.' AND `list_id` IN ('.implode(',',$subscribeA).')';
			$db->setQuery($query);
			$db->query();

	  		$query = 'INSERT IGNORE INTO `#__jnews_listssubscribers` (`list_id`,`subscriber_id`,`subdate`,`unsubdate`,`unsubscribe`)';
			$query .=' VALUES ('.implode( ','.$subscriberId.','.time().','.'0,0),(', $subscribeA) .','.$subscriberId.','.time().','.'0,0)';
			$db->setQuery($query);
			$db->query();

		}
	 }

	 public static function flagAR( $subscriberID, $subscribeARA ){
	 	$db = JFactory::getDBO();

	 	foreach( $subscribeARA as $subscribeAR){
	 		//get the id of the ar with the max delay in subscribeARA
	 		$maxDelayAR = jNews_Mailing::maxDelayAR( $subscribeAR );

	 		if(empty($maxDelayAR)) return true;

			//we insert an entry in the queue that will flag that the last mail in the ar has been already sent to the user
			//here insert in the delay column  the listid of the AR so that we will no longer get the listid of the mailing through another query
			$time = time();
			$senddate = $time+$maxDelayAR->delay*60;
			$query = 'INSERT IGNORE INTO `#__jnews_queue`(subscriber_id, type, mailing_id, delay, send_date,suspend)';
			$query .= 'VALUES('.$subscriberID.',8,'.$maxDelayAR->id.','.$subscribeAR.','.$senddate.',1)';
			$db->setQuery($query);
	 		$db->query();
	 	} 
	 	return false;
	 }

	 public static function processTypeEightfromQueue(){
	 	$ARtoUnsubA = array();
	 	$followupToSubscribeA = array();
	 	//get entries in the queue where type =8
	 	$typeEightinQueue = jNews_Queue::typeEight();
	 	if(empty($typeEightinQueue)) return false;

	 	foreach($typeEightinQueue as $oneTypeEight){
	 		$subscriberId = $oneTypeEight->subscriber_id;
	 		$ARtoUnsubA[0] = $oneTypeEight->delay;//we use the delay column of the queue saving the AR id being subscribed of the subscriber
	 		$mailId = $oneTypeEight->mailing_id;

	 		//we get the followup of the listid saved in the delay column
	 		$followupid=jNews_Lists::getFollowup($ARtoUnsubA[0]);
	 		$followupToSubscribeA[0]=$followupid;
			//$subs=jNews_ListsSubs::getSubs($subscriberId);

			//we unsubscribe the user from the list using the data saved in the delay column in the queue
	 		jNews_ListsSubs::_applyChangedSubscription($subscriberId,'',$ARtoUnsubA);

	 		//we delete this type 8 entry in the queue
		 	$db = JFactory::getDBO();
	 		$query = 'DELETE FROM `#__jnews_queue` WHERE `type`=8 AND `subscriber_id`='.$subscriberId.' AND `mailing_id`='.$mailId;
	 		$db->setQuery($query);
			$db->query();
	 		
	 		//we subscribe the user to the followup
	 		if($followupToSubscribeA[0]!=0 && !empty($followupToSubscribeA[0])){
		 		jNews_ListsSubs::_applyChangedSubscription($subscriberId,$followupToSubscribeA,'');

		 		$followupType = jNews_Lists::getListType($followupid);
		 		if($followupType==2){
		 			//we add entries in the queue if the type is equal 2
		 			jNews_ListsSubs::subscribeARtoQueue( $subscriberId, $followupToSubscribeA );
		 		}
	 		}
			//$subs=jNews_ListsSubs::getSubs($subscriberId);
	 	}
	 	return true;
	 }

	 //get the list subscription of a user
	 public static function getSubs($subscriberId){
	 	$db = JFactory::getDBO();

	 	$query = 'SELECT * FROM `#__jnews_listssubscribers` WHERE `subscriber_id`='.$subscriberId;
	 	$db->setQuery($query);
	 	$db->query();
	 	$subs = $db->loadObjectList('list_id');
	 	return $subs;
	 }

}