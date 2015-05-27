<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_Subscribers {

	public static function userConfirmed($email){
		$db = JFactory::getDBO();
		$email = htmlspecialchars($email,ENT_QUOTES);
		$query = "SELECT confirmed FROM `#__jnews_subscribers` WHERE email = '$email' LIMIT 1" ;
		$db->setQuery($query);
		$confirmed = $db->loadResult();
		if(empty($confirmed)) return false;
		return true;
	}

	public static function getSubscribersFromId($qid, $objList = false) {
		$db = JFactory::getDBO();
		static $subscribersA = array();

		if (!empty($qid)) {
			$qids = implode (',', $qid);

			if ( empty($qids) ) return '';
			$query = "SELECT A.*, B.username FROM `#__jnews_subscribers` as A LEFT JOIN `#__users` as B on A.user_id = B.id WHERE A.`id` IN ( $qids )" ;

			$db->setQuery($query);
			$subscribersA = $db->loadObjectList();
			$subscriber = new stdClass;
			
			if (count($subscribersA)==1 AND !$objList) {

				foreach( $subscribersA[0] as $myProperty => $mysubc ) {
					$subscriber->$myProperty = $mysubc;
				}

			} else {
				$subscriber = $subscribersA;
			}
			return $subscriber;
		} else {
			return '';
		}
	 }


	 public static function getSubscriberId($date) {
		$db = JFactory::getDBO();
		$subsIds=array();
		if ( isset($subsIds[$date]) ) return $subsIds[$date];
		$query = 'SELECT `id` FROM `#__jnews_subscribers` WHERE `subscribe_date` = \'' . $date . '\'';
		$db->setQuery($query);
		$subsIds[$date] = $db->loadResult();
		return $subsIds[$date];
	 }

	 public static function getSubscriberIdFromEmail(&$d) {
		static $subsIds=array();
		$db = JFactory::getDBO();
		if (!empty($d['email'])) {
			if( empty($subsIds[$d['email']]) ) {
				$query = 'SELECT `id` FROM `#__jnews_subscribers` WHERE `email` = \'' . $d['email']. '\'';
				$db->setQuery($query);
				$subsIds[$d['email']] = $db->loadResult();
			}
			$d['subscriberId'] = $subsIds[$d['email']];
		}
		return $d;
	 }

	public static function getSubscriberIdFromUserId($userId){
		$db = JFactory::getDBO();
		static $subsIds=array();
		if ( isset($subsIds[$userId]) ) return $subsIds[$userId];
		if (!empty($userId)){
			$query = 'SELECT `id` FROM `#__jnews_subscribers` WHERE `user_id` = \'' . $userId . '\' LIMIT 1';
			$db->setQuery($query);
			$subsIds[$userId] = $db->loadResult();
		}
		return $subsIds[$userId];
	 }


	public static function getSubscriberInfoFromUserId($userId) {
		$db = JFactory::getDBO();
		$subscribers=array();
		if ( isset($subscribers[$userId]) ) return $subscribers[$userId];
		if (!empty($userId))  {
			$query = 'SELECT * FROM `#__jnews_subscribers` WHERE `user_id` = \'' . $userId . '\' LIMIT 1';
	     	$db->setQuery($query);
			$subscribers[$userId] = $db->loadObject();
		}
		return $subscribers[$userId];
	 }

	public static function getSubscribers( $start=-1, $limit=-1, $emailsearch, &$total, $listId, $mailingId, $blackList=0, $confirmed=0, $order='', $mailId='', $ownedlists=0, $setSort=null, $subType=0, $countUser=false ) {//added one parameter mailid
		$db = JFactory::getDBO();
		$my	= JFactory::getUser();
		$flag = false;
		$limitFlag = false;

		$mainframe = JFactory::getApplication();

		if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
			$gid = JAccess::getGroupsByUser($my->id, false);
			$my->gid = $gid[0];
		}

		$gidAdmins = array(24,25,7,8);

		$query = ( $countUser ) ? 'SELECT COUNT(M.id) ' : 'SELECT DISTINCT M.*,U.username ';
		
		//for multiple lists
	    if ($listId == 0) {
	    	$query .= ' FROM `#__jnews_subscribers` AS M  LEFT JOIN `#__users` as U ON M.user_id = U.id ';

	    	if( ( !$mainframe->isAdmin() ) AND ($ownedlists != 0 AND !empty($ownedlists)) AND !in_array($my->gid,$gidAdmins)){
	    		$query .='LEFT JOIN `#__jnews_listssubscribers` AS N ON N.subscriber_id=M.id WHERE N.list_id IN ('.implode($ownedlists, ',').')';
	    	}else{
	    		if( !$mainframe->isAdmin() AND ($ownedlists == 0 OR empty($ownedlists) ) )  return;
	    	}
	    } else {
	    	 $query .= ' FROM `#__jnews_subscribers` AS M LEFT JOIN `#__users` as U ON M.user_id = U.id LEFT JOIN `#__jnews_listssubscribers` AS N' ;
	    	 $query .= ' ON  M.id = N.subscriber_id  WHERE ';
	    	 if(!empty($mailId)){
				$lists= jNews_Mailing::getMailingList($mailId);
				$query .= 'N.list_id IN (';
				$query .= 'SELECT `list_id` FROM `#__jnews_listmailings` WHERE `mailing_id`='. $mailId.')';
			 }else{ //if the mailing is sent to one or more lists
			 	if(is_array($listId)){
			 		$lsId= (count($listId)>1) ? implode(',',$listId) : $listId[0];
			 		if(!empty($ownedlists)) $lsId = $ownedlists;
			 		$query .= 'N.list_id IN ('.$lsId.')';
			 	}else{
			 		$query .= 'N.list_id ='.$listId;
			 	}
			 }
	    	
			$flag = true;
	    }
	    
		 //type of subscirber to show used in the listing
		 switch( $subType ) {
		 	case 1:
		 		if ( !$flag ) $query .=' LEFT JOIN `#__jnews_listssubscribers` AS N ON N.subscriber_id=M.id ';
		 		$query .= ( $flag ) ? ' AND ' : ' WHERE ';
		 		$query .= ' N.unsubscribe = 0 ';
		 		$flag = true;
		 		break;
		 	case 2:
		 		if ( !$flag ) $query .=' LEFT JOIN `#__jnews_listssubscribers` AS N ON N.subscriber_id=M.id ';
		 		$query .= ( $flag ) ? ' AND ' : ' WHERE ';
		 		$query .= ' N.unsubscribe = 1 ';
		 		$flag = true;
		 		break;
		 	case 3:	//waiting confirmation
		 		$query .= ( $flag ) ? ' AND ' : ' WHERE ';
		 		$flag = true;
		 		$query .= ' M.confirmed = 0 ';
		 		break;
		 	case 4:	// blocked
		 		$query .= ( $flag ) ? ' AND ' : ' WHERE ';
		 		$flag = true;
		 		$query .= ' M.blacklist = 1 ';
		 		break;
		 	case '0':
		 	default:
		 		break;
		 }
	    
	    
		if ( $mailingId>0 AND $flag ) $query .= ' AND N.mailing_id = '.$mailingId;
		
		if ($blackList == 1) {
			$query .= ( $flag ) ? ' AND ' : ' WHERE ';
			if ($confirmed == 1) {
				$query .= ' M.blacklist = 0 AND M.confirmed = 1  ';
				$flag = true;
			} else {
				$query .= ' M.blacklist = 0 ';
				$flag = true;
			}
		}

		if (!empty($emailsearch)) {
			if ($flag){
				$query .= ' AND ( M.email LIKE \'%' . $emailsearch . '%\' OR M.name LIKE \'%' . $emailsearch . '%\' ';
				if ( is_numeric($emailsearch) ) $query .= ' OR M.id='. $emailsearch .' ';
				$query .= ' ) ';
			}else{
					if($mainframe->isAdmin()){
						$query .= ' WHERE ( M.email LIKE \'%' . $emailsearch . '%\' OR M.name LIKE \'%' . $emailsearch . '%\' ';
					}else{
					if( ( $ownedlists != 0 || !empty($ownedlists) && $listId == 0) && $flag )
													$query .= ' AND ( M.email LIKE \'%' . $emailsearch . '%\' OR M.name LIKE \'%' . $emailsearch . '%\' ';
						else{
							$query .= ' WHERE ( M.email LIKE \'%' . $emailsearch . '%\' OR M.name LIKE \'%' . $emailsearch . '%\' ';
						}//endelse
					}//endelse
					if( is_numeric($emailsearch) ) $query .= ' OR M.id='. $emailsearch .' ';
					$query .= ' ) ';
			}
		}

		if ( $listId != 0 && !$countUser ) $query .= ' GROUP BY M.id ';

		// no sorting or limit if we count
		if ( !$countUser ) {
			if( !empty($setSort) ) {
				$query .= "ORDER BY `$setSort->orderValue` $setSort->orderDir";
			}else{
				if (!empty($order)) $query .= jnews::orderBy($order);
			}
			
			if ($start != -1 && $limit != -1) {
				$query .= ' LIMIT ' . $start . ', ' . $limit;
				$limitFlag = true;
			}
			
		}
		$db->setQuery($query);
		
		if ( !$countUser ) {
			$subscribers = $db->loadObjectList();
		} else {
			$subscribers = $db->loadResult();
		}
		return $subscribers;
	 }

	public static function getUserType($userId) {
		$db = JFactory::getDBO();
		$db->setQuery( "SELECT `usertype` FROM #__users WHERE `id` =".$userId );
		$userType = $db->loadResult();
		return $userType;
	}


	 /**
	  * This public static function will save the subscriber information every new subscription or update subscription
	  * @param listids - listid subscribed from the module if the saving of subscriber is via ajax
	  * @param redirect - if to redirect the page or not
	  */
	 public static function saveSubscriber( $subscriber, &$subscriberId, $newSubscriber=false, $listids=null, $redirect=false ) {

		$subscriber->receive_html = ( ( isset($subscriber->receive_html) &&
		 ( ( is_bool($subscriber->receive_html) && $subscriber->receive_html )
		  || ( is_string($subscriber->receive_html) && ( $subscriber->receive_html == 'true' || $subscriber->receive_html == '1' ) )
		  || ( is_int($subscriber->receive_html) && $subscriber->receive_html )
		  ) )  ? 1 : 0 );	 	
	 		 	
	 	$db = JFactory::getDBO();
		$xf = new jNews_Config(); //dashboard summary

		jnews::objectHTMLSafe( $subscriber );
		$d['confirm'] = true;
		$d['email'] = $subscriber->email;
 		if(empty($subscriber->ip))$subscriber->ip='';
		if ( $newSubscriber ) {
			$query = "INSERT IGNORE INTO `#__jnews_subscribers` (`name`,`email` ,`ip`, `receive_html` , `confirmed` ";
			$query .= " , `subscribe_date` , `language_iso` , `timezone`, `blacklist`";//" , `params`";
			if($GLOBALS[JNEWS.'level'] > 2){
				$query .= " , `column1`";
				$query .= " , `column2`";
				$query .= " , `column3`";
				$query .= " , `column4`";
				$query .= " , `column5`";
			}
			if(!empty($subscriber->user_id)){
				$query .= " , `user_id` ";
			}
			$query .= ") VALUES (" .
			 " '$subscriber->name' , " .
			 " '$subscriber->email' , " .
			 " '$subscriber->ip' , " .
			 " '$subscriber->receive_html' , " .
			 " '$subscriber->confirmed' , " .
			 " '$subscriber->subscribe_date', " .
			 " '$subscriber->language_iso', " .
			 " '$subscriber->timezone', " .
			 " '$subscriber->blacklist' " ;

			if($GLOBALS[JNEWS.'level'] > 2){//check if the version is pro
			 	 //$query .=" '$subscriber->params' , ";
			 	 $query .= ",";
				 if (array_key_exists('column1', $subscriber)) {$query .=  " '$subscriber->column1',  ";}else{$query .=  " '',  ";}
				 if (array_key_exists('column2', $subscriber)) {$query .=  " '$subscriber->column2',  ";}else{$query .=  " '',  ";}
				 if (array_key_exists('column3', $subscriber)) {$query .=  " '$subscriber->column3',  ";}else{$query .=  " '',  ";}
				 if (array_key_exists('column4', $subscriber)) {$query .=  " '$subscriber->column4',  ";}else{$query .=  " '',  ";}
				 if (array_key_exists('column5', $subscriber)) {$query .=  " '$subscriber->column5'  ";}else{$query .=  " '' ";}
			}

			if(!empty($subscriber->user_id)){
				$query .= " , ".intval($subscriber->user_id);
			}
			$query .= ")" ;
			$db->setQuery($query);
			$db->query();

			//get the subscriber id which is newly inserted
			//Update dashboard summary
			if ( jNews_Subscribers::getSubscriberIdFromEmail($d) ) {
				$d['confirm'] = false;
				$xf->plus('totalsubcribers0', 1);
				$xf->plus('act_totalsubcribers0', 1);
			}

			//subscriber_id from the inserted subscriber
			if ($d['subscriberId']>0) {
				$subscriberId = $d['subscriberId'];
				$subscriber->id = $d['subscriberId'];	
			} else {
				$subscriber->id = 0;
				$subscriberId = 0;
			}
			
//TODO: Add an option either to require confirmation during site registration once the sync users plugin is turn on
//added condition  empty($subscriber->user_id) so that it will not send confirmation email during registration
			if ( $newSubscriber && ($GLOBALS[JNEWS.'require_confirmation'] == '1') && empty($subscriber->user_id) ) {
				//added $subscriber
				jNews_ProcessMail::sendConfirmationEmail( $subscriber, $subscriberId );
			}

		} else { //Update Subscriber
			
			if( empty($subscriber->id) ) $subscriber->id=& $subscriberId;
			$query = "UPDATE IGNORE `#__jnews_subscribers` SET ";
			$query .=" `name` = '$subscriber->name' , ";
			$query .=" `email` = '$subscriber->email' , ";

		   	if($GLOBALS[JNEWS.'level'] > 2){
			   	if(!empty($subscriber->column1)){
					$query .=" `column1` = '$subscriber->column1' , ";
			   	}
			   	if(!empty($subscriber->column2)){
					$query .=" `column2` = '$subscriber->column2' , ";
			   	}
				if(!empty($subscriber->column3)){
					$query .=" `column3` = '$subscriber->column3' , ";
			   	}
			   	if(!empty($subscriber->column4)){
					$query .=" `column4` = '$subscriber->column4' , ";
			   	}
			   	if(!empty($subscriber->column5)){
					$query .=" `column5` = '$subscriber->column5' , ";
			   	}
		   	}

			$query.= " `receive_html` = $subscriber->receive_html  , ";
			$query.= " `confirmed` =  $subscriber->confirmed  , " .
					 " `timezone` = '$subscriber->timezone' , ";
			$query.= " `language_iso` = '$subscriber->language_iso' , ";
			$query.= " `blacklist` = $subscriber->blacklist ";
			//$query.= " `params` = '$subscriber->params'  " .
			$query .= " WHERE `id` = $subscriber->id ";
	 		$db->setQuery($query);
			$db->query();
		}

		$subscriberInfo = jNews_ListsSubs::getListidsSubscribedInfo( $subscriber->id, $listids, $redirect );

		return true;
	 }

	/**
	 * This public static function is used for CB Integration and FE Subscription
	 */
	public static function updateCBFESubscriber($userId=0, $user=null, $confirmed='0' ) {
		$oneSubscriber = new stdClass;

		 $oneSubscriber->name = JRequest::getVar('name', '');
		 $oneSubscriber->receive_html = JRequest::getInt('receive_html');
		 $oneSubscriber->confirmed = JRequest::getInt('confirmed');
		 $oneSubscriber->blacklist = JRequest::getVar('blacklist', 0);
		 $oneSubscriber->timezone = JRequest::getVar('timezone', '');
		 $oneSubscriber->language_iso = JRequest::getVar('language_iso', '');
		 $oneSubscriber->params = JRequest::getVar('params', '');
		 $oneSubscriber->email = JRequest::getVar('email', '');
		 $oneSubscriber->subscribe_date = time();
		 //update column 1
		 if($GLOBALS[JNEWS.'level'] > 2){
			 $oneSubscriber->column1 = JRequest::getVar('column1', '');
			 $oneSubscriber->column2 = JRequest::getVar('column2', '');
			 $oneSubscriber->column3 = JRequest::getVar('column3', '');
			 $oneSubscriber->column4 = JRequest::getVar('column4', '');
			 $oneSubscriber->column5 = JRequest::getVar('column5', '');
		 }

	 if ( isset($user) ) {
		$oneSubscriber->email = $user->email;
		if ( empty($oneSubscriber->email) OR !jNews_Subscribers::validEmail($oneSubscriber->email)) {
			echo '<br />'.jnews::printM('red' , _JNEWS_EMAIL_INVALID );
			echo "<script> alert('".addslashes(_JNEWS_EMAIL_INVALID)."'); window.history.go(-1);</script>\n";
			return false;
		}
		$oneSubscriber->user_id = $user->id;
	 	$oneSubscriber->id = jNews_Subscribers::getSubscriberIdFromUserId($user->id);
		$subscriberId = $oneSubscriber->id;
		if(!empty($user->name)){
			$oneSubscriber->name = $user->name;
		}

		if($oneSubscriber->confirmed OR $confirmed) $oneSubscriber->confirmed = 1;
		if(isset($user->receive_html)){
			$oneSubscriber->receive_html = $user->receive_html;
		}

	 } elseif ($userId!=0) {
		$oneSubscriber->user_id = $userId;
		$subscriberId = jNews_Subscribers::getSubscriberIdFromUserId($userId);
	 	$oneSubscriber->id = $subscriberId;
	 } else {
		$oneSubscriber->user_id = JRequest::getInt('id');
		$subscriberId = JRequest::getInt('subscriber_id');
		if(empty($oneSubscriber->id)) $oneSubscriber->id= $subscriberId; //newly added
		 }

		jnews::objectHTMLSafe( $oneSubscriber );
	    return jNews_Subscribers::saveSubscriber($oneSubscriber, $subscriberId,false);

	}


	/**
	 * This public static function is used by jnews_cb plugin
	 */
	 public static function updateCBSubscribers( $force=false, $install=false ) {
		$db = JFactory::getDBO();

		$time = ( isset($GLOBALS[JNEWS.'last_sub_update']) && $GLOBALS[JNEWS.'last_sub_update']>0 ) ? $GLOBALS[JNEWS.'last_sub_update'] : 200000;
		$newTask= mktime(date("H")-1, date("i"), date("s"), date("m"), date("d"),  date("Y"));

		if ( $force OR ( $newTask > $GLOBALS[JNEWS.'last_sub_update'] ) ) {

			$query = 'UPDATE IGNORE `#__jnews_subscribers` as S LEFT JOIN `#__users` AS U ON U.`id` = S.`user_id` SET S.`name` = U.`name`, S.`email` = U.`email`, S.`confirmed` = 1 - U.`block`  WHERE U.`id` > 0 AND S.`user_id` > 0';
			$db->setQuery($query);
			$db->query();

			$xf = new jNews_Config();
			$newtime= mktime(date("H", $time), date("i", $time), date("s", $time), date("m", $time), date("d", $time)-2 ,  date("Y", $time));
			if ( $install ) $newtime=0;
			$oneDay = date( 'Y-m-d H:i:s', $newtime );

		    $query = 'SELECT M.* FROM `#__users` AS M ' .
		    		' LEFT JOIN `#__jnews_subscribers` AS N ON M.email = N.email ';
	    	$query .= ' WHERE M.registerDate > \'' . $oneDay .'\'';
	    	$query .= ' AND  N.id IS NULL AND M.block=0 ';

		    $db->setQuery($query);
		    $rows = $db->loadObjectList();

		    if ( !empty($rows) ) {
			   foreach ($rows as $row) {
		 			$query = "INSERT INTO `#__jnews_subscribers` (`user_id`,`subscribe_date`, `name`,`email`,`confirmed`)";
		 			$query .= " VALUES ( $row->id , '$row->registerDate', '".addslashes($row->name)."', '".addslashes($row->email)."' , 1 ) ";
				    $db->setQuery($query);
		   		 	$db->query();
					$xf->plus('totalsubcribers0', 1);
					$xf->plus('act_totalsubcribers0', 1);

			     	$lists = jNews_Lists::getLists(0, 0, null, '', true, false, false);

			     	if (!empty($lists)) {
					   foreach ($lists as $list) {
						   	 $qid[0] = jNews_Subscribers::getSubscriberId($row->registerDate);
						   	 $subscriber = jNews_Subscribers::getSubscribersFromId($qid, false);
						   	 $subId = array();
						  	 //if ( isset($subscriber->id) ) {
							   	 //$subId[0] =  $subscriber->id;
							   	// jNews_Queue::insertQueuesForNews($subId, $list->id, 29 );
							   	////$subscriberInfo=jNews_ListsSubs::getListidsSubscribedInfo($subscriber->id);
							   	//jNews_Queue::updateQueues($subId, '', $list->id, @$list->acc_id, true);
						   	// }
					   }
			     	}
		  	 	}
		    }

		    $query = 'SELECT M.* FROM `#__jnews_subscribers` AS M ' .
		    		' LEFT JOIN `#__users` AS N ON N.id = M.user_id ' ;

	    	$query .= ' WHERE N.registerDate > \'' . $oneDay .'\'';
	    	$query .= ' AND M.subscribe_date > \'' . $oneDay .'\'';
		    $query .= ' AND  N.id IS NULL  AND M.user_id>0 ORDER BY N.id ';
		    $db->setQuery($query);
		    $rows = $db->loadObjectList();

		    if ( !empty($rows)) {
			     foreach ($rows as $row) {
				    $query = 'DELETE FROM `#__jnews_subscribers` WHERE `id` = ' . $row->id;
		   		 	$db->setQuery($query);
			     	$db->query();
					$xf->plus('act_totalsubcribers0', -1);
				    jNews_ListsSubs::removeSubscription($row->id,'');
		   		 }
		    }

		    $query = 'SELECT N.id, N.name , N.email , N.block  FROM `#__users` AS N ' .
		    		' LEFT JOIN `#__jnews_subscribers` AS M ON N.id = M.user_id ' ;

	    	$query .= ' WHERE  N.registerDate > \'' . $oneDay .'\'';
	    	$query .= ' AND M.subscribe_date > \'' . $oneDay .'\'';
	    	$query .= ' AND M.name != N.name  OR M.email != N.email OR N.block = M.confirmed ';

		    $db->setQuery($query);
		    $rows = $db->loadObjectList();

		    if ( !empty($rows) ) {
			     foreach ($rows as $row) {
			    	if ($row->block ==1) $status=0; 
			    	else $status=1;
				    $query = "UPDATE IGNORE `#__jnews_subscribers` SET `name` ='" .addslashes($row->name) ."' " .
				    		", `email` = '" .addslashes($row->email). "' " .
				    				", `confirmed` ='" .$status ."'  WHERE `user_id` = " . $row->id;
		   		 	$db->setQuery($query);
			     	$db->query();
		   		 }

		    }

		    $query = 'SELECT N.id , N.email FROM `#__users` AS N ' ;
		    $query .= 'LEFT JOIN `#__jnews_subscribers` AS M ON N.email = M.email ' ;

	    	$query .= ' WHERE N.registerDate > \'' . $oneDay .'\'';
	    	$query .= ' AND M.subscribe_date > \'' . $oneDay .'\'';
	    	$query .= ' AND M.user_id = 0 AND N.block = 0 ';

		    $db->setQuery($query);
		    $rows = $db->loadObjectList();
		    if ( !empty($rows)) {
			     foreach ($rows as $row) {
				    $query = "UPDATE `#__jnews_subscribers` AS S SET `user_id` = " .$row->id ;
				    $query .= " WHERE S.email = '$row->email'" ;
		   		 	$db->setQuery($query);
		   		 }

		    }
			$xf->update('last_sub_update', time() );
			return true;
		}
	}


	 public static function syncSubscribers($onlyAdd = false) {
		$db = JFactory::getDBO();

		$xf = new jNews_Config();

		$query = 'UPDATE IGNORE `#__jnews_subscribers` as S LEFT JOIN `#__users` AS U ON U.`id` = S.`user_id` SET S.`name` = U.`name`, S.`email` = U.`email`, S.`confirmed` = 1 - U.`block` WHERE U.`id` > 0 AND S.`user_id` > 0';
		$db->setQuery($query);
		$db->query();

	    $query = 'SELECT M.* FROM `#__users` AS M ' .
	    		' LEFT JOIN `#__jnews_subscribers` AS N ON M.email = N.email ' .
	    		' WHERE N.id IS NULL AND M.block=0 AND M.registerDate<>\'0000-00-00 00:00:00\' ';

	    $db->setQuery($query);
	    $rows = $db->loadObjectList();
	    if ( !empty($rows) ) {
		   foreach ($rows as $row) {
	 			$query = "INSERT INTO `#__jnews_subscribers` (`user_id`,`subscribe_date`, `name`,`email`,`confirmed`)";
	 			$query .= " VALUES ( $row->id , '$row->registerDate', '".addslashes($row->name)."', '".addslashes($row->email)."' , 1 ) ";
			    $db->setQuery($query);
	   		 	$db->query();

				$xf->plus('totalsubcribers0', 1);
				$xf->plus('act_totalsubcribers0', 1);
	  	 	}

	    }

	    if($onlyAdd) return true;


	    $query = 'SELECT M.* FROM `#__jnews_subscribers` AS M ' .
	    		' LEFT JOIN `#__users` AS N ON N.id = M.user_id ' .
	    		' WHERE N.id IS NULL AND M.user_id>0 ';	// ORDER BY N.id
	    $db->setQuery($query);
	    $rows = $db->loadObjectList();
	    if ( !empty($rows)) {
		     foreach ($rows as $row) {
			    $query = 'DELETE FROM `#__jnews_subscribers` WHERE `id` = ' . $row->id;
	   		 	$db->setQuery($query);
		     	$db->query();
				$xf->plus('act_totalsubcribers0', -1);
			    jNews_Queue::deleteSubsQueue($row->id , '');
	   		 }
	    }

	    $query = 'SELECT N.id, N.name , N.email , N.block  FROM `#__users` AS N ' .
	    		' LEFT JOIN `#__jnews_subscribers` AS M ON N.id = M.user_id ' .
	    		' WHERE M.name != N.name  OR M.email != N.email OR N.block = M.confirmed';
	    $db->setQuery($query);
	    $rows = $db->loadObjectList();
	    if ( !empty($rows) ) {
		     foreach ($rows as $row) {
		    	if ($row->block ==1) $status=0; else $status=1;
			    $query = "UPDATE IGNORE `#__jnews_subscribers` SET `name` ='" .$row->name ."' " .
			    		", `email` = '" .$row->email. "' " .
			    				", `confirmed` ='" .$status ."'  WHERE `user_id` = " . $row->id;
	   		 	$db->setQuery($query);
		     	$db->query();
	   		 }
	    }

	    $query = 'SELECT N.id , N.email FROM `#__users` AS N ' ;
	    $query .= 'LEFT JOIN `#__jnews_subscribers` AS M ON N.email = M.email ' ;
	    $query .= ' WHERE M.user_id = 0 AND N.block = 0 ';
	    $db->setQuery($query);
	    $rows = $db->loadObjectList();
	    if ( !empty($rows) ) {
		     foreach ($rows as $row) {
			    $query = "UPDATE `#__jnews_subscribers` AS S SET `user_id` = " .$row->id ;
			    $query .= " WHERE S.email = '$row->email'" ;
	   		 	$db->setQuery($query);
		     	$db->query();
	   		 }

	    }

		return true;
	}

	 public static function updateReceiveHtml($subscriberId) {
		$db = JFactory::getDBO();
		$htmlReceive =  JRequest::getInt('receive_html');

		if ($subscriberId >0 ) {
		   	$query = "UPDATE `#__jnews_subscribers` SET ".
			" `receive_html` = $htmlReceive " .
			" WHERE `id` = $subscriberId";//$subscriberIdmport finished ";
	 		$db->setQuery($query);
			$db->query();
		}

		return '';
    }

	 public static function deleteSubscriber($subId) {
		$db = JFactory::getDBO();
		if(empty($subId)) return '';

		$query = 'DELETE FROM `#__jnews_subscribers` WHERE `id` = ' . $subId;
		$db->setQuery($query);
		$db->query();

		//we also need to delete the subscribers in the listssubscribers table
		$query = 'DELETE FROM `#__jnews_listssubscribers` WHERE `subscriber_id` = ' . $subId;
		$db->setQuery($query);
		$db->query();

		$query = 'DELETE FROM `#__jnews_queue` WHERE `subscriber_id` = ' . $subId;
		$db->setQuery($query);
		$db->query();

		$xf = new jNews_Config();
		$xf->plus( 'act_totalsubcribers0', -1 );
		
		jNews_ListsSubs::removeSubscription($subId,'');
		return true;
		
	 }


	public static function importBis() {
		@set_time_limit( 0 );
		$returnMessage = '';
		//If memory_limit less than 128M
	 	$limit= jnews::convertToBytes(@ini_get('memory_limit'));
		if($limit < jnews::convertToBytes('128M') ){
			@ini_set('memory_limit','128M');
		}

		$allAvailableListsA = JRequest::getVar('sub_list_id', '');
		$list2SubcribeToA = JRequest::getVar('subscribed', '');

		$filename = $_FILES['importfile']['name'];

		if( !empty($filename)){ //if we import a file
			$path = JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'upload_url'];
			$path = str_replace(array('/','\\'),DS,$path);
			
			if (!is_writable($path)) {
				$returnMessage .= '<br/>The file could not be imported because the folder is not writable.';
				$returnMessage .= '<br/>Please make sure the path "'.JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'upload_url'] . '" is writable';
				return $returnMessage;	
			}
				
			if ( !@move_uploaded_file($_FILES['importfile']['tmp_name'], $path . $filename)) {
				$path .= DS;
				if ( !@move_uploaded_file($_FILES['importfile']['tmp_name'], $path . $filename)) {
					$returnMessage .=  _JNEWS_ERROR_MOVING_UPLOAD ;
					$returnMessage .= '<br/>Please make sure the path "'.JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'upload_url'] . '" is writable';
					return $returnMessage;
				}
			}
			$import = file_get_contents($path . $filename);
			$import = str_replace(array("\r\n","\r"),"\n",$import);
			$allLinesA = explode( "\n", $import );
			
		}else{ //if we add subscribers in frontend through rows

			//the flag is true coz we add subscribers in frontend through rows
			$saveSubsInRows = true;

			//we get the number of rows
			$rows=JRequest::getVar('count','');
			$nRows = intval($rows) - 1;
			if ( $nRows==0 ) $nRows = intval( $GLOBALS[JNEWS.'create_newsubsrows'] );

			//we get the value of each element from the rows
			for( $count = 1; $count <= $nRows; $count++ ) {
				$allLinesA[$count] = JRequest::getVar('name'.$count,'').', '.JRequest::getVar('email'.$count,''). ', '.JRequest::getVar('receive_html'.$count,'').', ' .
					JRequest::getVar('confirmed'.$count,'').', '.JRequest::getVar('column1'.$count,'').', '.JRequest::getVar('column2'.$count,'').', ' .
					JRequest::getVar('column3'.$count,'').', '.JRequest::getVar('column4'.$count,'').', '.JRequest::getVar('column5'.$count,'');
			}

		}

		if ( empty($allLinesA) ) return false;
		
		$db = JFactory::getDBO();
		
		$insertQuery='';
		$selectQuery='';
		$firstValue=true;
		$time = time();
		$totalInsert = 0;
		$allSubscribersIDA=array();

		foreach( $allLinesA as $line ) {
			$line = trim($line);
			if (empty($line)) continue;

			$line = str_replace( ';', ',', $line );
			$subscriberA = explode( ',', $line );
			$email = trim( $subscriberA[1],' "\'');

			if ( !jNews_Subscribers::validEmail($email) ) {
				if(!$saveSubsInRows){ //if import of file is done
					echo '<br />'.jnews::printM('red', _JNEWS_EMAIL_INVALID . ': ' . $email );
					continue;
				}else continue;
			}

			if($GLOBALS[JNEWS.'level'] > 2){
				$column4 = ( !empty($subscriberA[4]) ) ? $subscriberA[4] : '';
				$column5 = ( !empty($subscriberA[5]) ) ? $subscriberA[5] : '';
				$column6 = ( !empty($subscriberA[6]) ) ? $subscriberA[6] : '';
				$column7 = ( !empty($subscriberA[7]) ) ? $subscriberA[7] : '';
				$column8 = ( !empty($subscriberA[8]) ) ? $subscriberA[8] : '';
				$ip= ( !empty($subscriberA[9]) ) ? $subscriberA[9] : '';
			}

			if ( !$firstValue ) $insertQuery .= ',';
			$comfirmation = ( $GLOBALS[JNEWS.'require_confirmation'] ) ? 0 : (int)trim($subscriberA[3],' "\'');
			
			$insertQuery .= '(\''.  addslashes(trim($subscriberA[0],' "\'') ) . '\',\''.$email.'\','.$comfirmation.','.(int)trim($subscriberA[2],' "\'').',\''.$time.'\',\''.$column4.'\',\''.$column5.'\',\''.$column6.'' .
					'\',\''.$column7.'\',\''.$column8.'\',\''.$ip.'\')';
			
			if ( !$firstValue ) $selectQuery .= ',';
			$selectQuery .= '\''.$email.'\'';
			$firstValue=false;
			$totalInsert++;
			
			if ( $totalInsert % 50 == 0 ) {
				if ( empty($insertQuery) ) continue;
				$db = JFactory::getDBO();
				$query = 'INSERT IGNORE `#__jnews_subscribers` (`name`,`email`,`confirmed`,`receive_html`,`subscribe_date`,`column1`,`column2`,`column3`,`column4`,`column5`,`ip`) VALUES ' . $insertQuery;
				$db->setQuery($query);
				$db->query();
				$firstValue=true;
				$insertQuery='';
				//get the id of the subscribers
				$query = 'SELECT `id` FROM `#__jnews_subscribers` WHERE `email` IN (' . $selectQuery .')';
				$db->setQuery($query);
				$allSubscribersIDA = array_merge($allSubscribersIDA,$db->loadResultArray());
				$selectQuery='';
			}else{
				if ( empty($insertQuery) ) return false;
				$db = JFactory::getDBO();
				$query = 'INSERT IGNORE `#__jnews_subscribers` (`name`,`email`,`confirmed`,`receive_html`,`subscribe_date`,`column1`,`column2`,`column3`,`column4`,`column5`,`ip`) VALUES ' . $insertQuery;
				$db->setQuery($query);
				$db->query();
			}
		}

		//send confirmation email if required
		if ( $GLOBALS[JNEWS.'require_confirmation'] && !empty($list2SubcribeToA) ) {
			
			$list4Message = $allAvailableListsA[key($list2SubcribeToA)];
			$myList = jNews_Lists::getOneList( $list4Message );

			$myList->subscribemessage = trim( $myList->subscribemessage );
			if ( empty($myList->subscribemessage) || substr_count($myList->subscribemessage, '{tag:confirm}') <1 ) {
				$Sub_TAG = '{tag:confirm}';//'[CONFIRM]';
			} else {
				$Sub_TAG = '';
			}		
			
			$mailing = new stdClass;
			
		 	if ( !empty( $myList->subscribemessage ) ) {
		 		$mailing->htmlcontent = $myList->subscribemessage;
				$mailing->textonly = $myList->subscribemessage;
		 	} else {	// default message
		 		$mailing->textonly = 'Please confirm your subscription to our website by clicking on the following link.';
		 		$mailing->htmlcontent = '<br />' . $mailing->textonly . '<br /><br />';
		 	}
			
		 	$mailing->textonly .= $Sub_TAG;
		 	$mailing->htmlcontent .= $Sub_TAG;
			
			//insert the mailing in the mailing table
			$mailing->mailing_type = 1;
			$mailing->template_id = 0;
			$mailing->senddate = $time;
			$mailing->subject = _JNEWS_SUBSCRIBE_SUBJECT_MESS;
			$mailing->attachments = '';
			$mailing->images = '';
			$mailing->published = 1;
			$mailing->html = 1;
			$mailing->visible = 0;
			$mailing->fromname = '';
			$mailing->fromemail = '';
			$mailing->frombounce = '';
			$mailing->author_id = 0;
			$mailing->delay = 0;
			$mailing->follow_up = 0;
			$mailing->cat_id = 0;
			$mailing->delay_min = 0;
			$mailing->delay_max = 0;
			$mailing->notify_id = 0;
			$mailing->next_date = 0;
			$mailing->start_date = $time-2;
			$mailing->issue_nb = 0;
			$mailing->createdate = $time;
			$mailing->acc_level = 0;
			$mailingID = jNews_Mailing::insertMailingData($mailing);

			//enter the emails in the queue
			$query = 'INSERT IGNORE INTO `#__jnews_queue` (`subscriber_id`,`mailing_id`,`send_date`,`priority`) ';
			$query .= 'SELECT `id`,'.intval($mailingID).','. $time .',1';
			$query .= ' FROM `#__jnews_subscribers` ';
			$query .= 'WHERE `subscribe_date`=' . $time. ' AND `confirmed`=0';			
			$db->setQuery($query);
			$db->query();

		}

		if ( !empty($selectQuery) ) {
			//get the id of the subscribers
			$query = 'SELECT `id` FROM `#__jnews_subscribers` WHERE `email` IN (' . $selectQuery .')';
			$db->setQuery($query);
			$allSubscribersIDA = array_merge($allSubscribersIDA,$db->loadResultArray());
		}

		if( !empty($allAvailableListsA) ) { //if lists in checkbox are not empty
			if ( empty($list2SubcribeToA) ) {
				jnews::printM('red', 'You need to select at least one list. Emails have been imported but not subscribed.' );
				if ( $GLOBALS[JNEWS.'require_confirmation'] ) {
					return 'The confirmation email cannot be sent because there is not list selected to subscribe the users.';
				} else {
					return _JNEWS_IMPORT_FINISHED;
				}
			}

			foreach( $list2SubcribeToA as $oneneedList => $noneed ) {
				$listId = $allAvailableListsA[$oneneedList];
				$query = 'INSERT IGNORE `#__jnews_listssubscribers` (`list_id`,`subscriber_id`,`subdate`) VALUES ';
				$firstTime = true;
				if(!empty($allSubscribersIDA)){
					foreach( $allSubscribersIDA as $oneSubcriber ) {
						if ( !$firstTime ) $query .=',';
						$query .= '('.$listId.','.$oneSubcriber.','.$time.')';
						$firstTime=false;

						if ( jNews_Lists::getListType($listId) == 2 ) {
							//we add directly the imported subscribers to the queue if they are imported to an autoresponder type of list
							jNews_ListsSubs::subscribeARtoQueue( $oneSubcriber, $listId );
						}

					}
					$db->setQuery($query);
					$db->query();
				}
			}
		}else{ //otherwise we get the value from dropdown box
			$listId = JRequest::getVar('opted_list','');
			$query = 'INSERT IGNORE `#__jnews_listssubscribers` (`list_id`,`subscriber_id`,`subdate`) VALUES ';
			$firstTime = true;
			if(!empty($allSubscribersIDA)){
				foreach( $allSubscribersIDA as $oneSubcriber ) {
					if ( !$firstTime ) $query .=',';
					$query .= '('.$listId.','.$oneSubcriber.','.$time.')';
					$firstTime=false;
					if ( jNews_Lists::getListType($listId) == 2 ) {
						//we add directly the imported subscribers to the queue if they are imported to an autoresponder type of list
						jNews_ListsSubs::subscribeARtoQueue( $oneSubcriber, $listId );
					}
				}
				$db->setQuery($query);
				$db->query();
			}

		}

		if($saveSubsInRows ){ //if adding subscribers in frontend through rows
			jnews::printM('green' , count($allSubscribersIDA).' subscribers successfully added!' );
		}else{ //otherwise we import subscribers
			jnews::printM('green' , count($allSubscribersIDA).' subscribers successfully imported!' );
		}

		return _JNEWS_IMPORT_FINISHED;

	 }

	public static function export($listId) {
			$total=0;
			$doShowSubscribers = false;
			@set_time_limit(0);
			
			$subtype = JRequest::getVar( 'subtype', 0 );

			//If memory_limit less than 128M
		 	$limit= jnews::convertToBytes(@ini_get('memory_limit'));
			if($limit < jnews::convertToBytes('128M') ){
				@ini_set('memory_limit','128M');
			}

			if (ereg('Opera(/| )([0-9].[0-9]{1,2})', $HTTP_USER_AGENT)) {
				$UserBrowser = 'Opera';
			} elseif (ereg('MSIE ([0-9].[0-9]{1,2})', $HTTP_USER_AGENT)) {
				$UserBrowser = 'IE';
			} else {
				$UserBrowser = '';
			}

			$mime_type = ($UserBrowser == 'IE' || $UserBrowser == 'Opera') ? 'application/octetstream' : 'application/octet-stream';
			$filename = "subscribers_list_" .$listId. "_" . date("Y.d.m");

			ob_end_clean();
			ob_start();

	        // header of the imported file
			$export='';

			//confirmed is set to 2 so that it will also take those unconfirmed subscribers
			$subscribers = jNews_Subscribers::getSubscribers( -1, -1, '', $total, $listId, '', 1 , 2, 'name', '', 0, null, $subtype );//added one parameter for mailid

			foreach ($subscribers AS $subscriber) {

				if(get_magic_quotes_runtime()) {
					$subscriber->name = stripslashes($subscriber->name);
					$subscriber->email = stripslashes($subscriber->email);
				}
				$export .= $subscriber->name . '' ;
				$export .= ',' . $subscriber->email . '' ;
				$export .= ',' . $subscriber->receive_html . '' ;
				$export .= ',' . $subscriber->confirmed . '';
				//export column1 - column5
				if($GLOBALS[JNEWS.'level'] > 2){
					if( !empty($subscriber->column1) ) $export .= ','. $subscriber->column1 . '' ;
					if( !empty($subscriber->column2) ) $export .= ','. $subscriber->column2 . '' ;
					if( !empty($subscriber->column3) ) $export .= ','. $subscriber->column3 . '' ;
					if( !empty($subscriber->column4) ) $export .= ','. $subscriber->column4 . '' ;
					if( !empty($subscriber->column5) ) $export .= ','. $subscriber->column5 . '' ;
				}

				if(!empty($subscriber->ip)) $export .= ','. $subscriber->ip;

				$export .= "\r\n" ;

			}

			header('Content-Type: ' . $mime_type);
			header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');

			if ($UserBrowser == 'IE') {
				header('Content-Disposition: inline; filename="' . $filename . '.csv"');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
			} else {
				header('Content-Disposition: attachment; filename="' . $filename . '.csv"');
				header('Pragma: no-cache');
			}

			print $export;
			exit();
			return true;
	 }

	 public static function updateUserstojNews( $force=false ) {
		$db = JFactory::getDBO();

		$time = ( isset($GLOBALS[JNEWS.'last_sub_update']) && $GLOBALS[JNEWS.'last_sub_update']>0 ) ? $GLOBALS[JNEWS.'last_sub_update'] : 10000;
		$newTask= mktime(date("H")-1, date("i"), date("s"), date("m"), date("d")-1 ,  date("Y"));

		if ( $force || ( $newTask > $GLOBALS[JNEWS.'last_sub_update'] ) ) {
			$xf = new jNews_Config();

			$newtime= mktime(date("H", $time)-1, date("i", $time), date("s", $time), date("m", $time), date("d", $time) ,  date("Y", $time));
			$oneDay = date( 'Y-m-d H:i:s', $newtime );

		    $query = 'SELECT M.* FROM `#__users` AS M ' .
		    		' LEFT JOIN `#__jnews_subscribers` AS N ON M.email = N.email ';

	    	$query .= ' WHERE M.registerDate > \'' . $oneDay .'\'';
	    	$query .= ' AND  N.id IS NULL AND M.block=0 ';

		    $db->setQuery($query);
		    $rows = $db->loadObjectList();


		    if ( !empty($rows) ) {
			   foreach ($rows as $row) {
		 			$query = "INSERT INTO `#__jnews_subscribers` (`user_id`,`subscribe_date`, `name`,`email`,`confirmed`)";
		 			$query .= " VALUES ( $row->id , '$row->registerDate', '$row->name', '$row->email' , 1 ) ";
				    $db->setQuery($query);
		   		 	$db->query();

					$xf->plus('totalsubcribers0', 1);
					$xf->plus('act_totalsubcribers0', 1);

		  	 	}

		    }
		}
	 }

	 public static function validEmail($email,$fullCheck = false) {
		if(!preg_match("/^[a-z0-9]([a-z0-9_+\-\.])*@([a-z0-9\-]+\.)+[a-z]{2,7}$/i", $email)) return false;

		if(!$fullCheck OR !$GLOBALS[JNEWS.'fullcheck']) return true;

		// gets domain name
		list($user,$domain)=preg_split('/@/',$email);

		// checks for if MX records in the DNS
		//This public static function does not exist on windows... that's why there is a check first
		//We need to add a dot at the end of the domain name
		if(function_exists('checkdnsrr') AND !checkdnsrr($domain.'.', 'MX')) {
			return false;
		}

		return true;
	 }

	/**
	 * This public static function is used to get the IP of the user
	 */
	public static function getIP(){
		$ip = '';
		if( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) AND strlen($_SERVER['HTTP_X_FORWARDED_FOR'])>6 ){
	        $ip = strip_tags($_SERVER['HTTP_X_FORWARDED_FOR']);
	    }elseif( !empty($_SERVER['HTTP_CLIENT_IP']) AND strlen($_SERVER['HTTP_CLIENT_IP'])>6 ){
			 $ip = strip_tags($_SERVER['HTTP_CLIENT_IP']);
		}elseif(!empty($_SERVER['REMOTE_ADDR']) AND strlen($_SERVER['REMOTE_ADDR'])>6){
			 $ip = strip_tags($_SERVER['REMOTE_ADDR']);
	    }
		return strip_tags($ip);

	}

	/**
	 * This public static function is used to get the users of the site who has access to the backend to specify the sender of the mailings
	 * @params $orderBy
	 * @params $limit
	 * @return $usersA as object
	 */
	public static function getUsers( $orderBy, $limit=100, $id=0 ){

		static $db=null;
		if( !isset( $db ) ) $db = JFactory::getDBO();

		$query='SELECT `name`, `email` FROM `#__users` AS U ';

		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
			$query .='WHERE ';
			if(!empty($id)) $query .= 'U.id = ' .$id .' AND ';
			$query .='U.gid IN (23,24,25) ORDER BY '.$orderBy. ' LIMIT '.$limit;
		}else{ //j16
			$query .= 'LEFT JOIN `#__user_usergroup_map` AS UGM ON U.id=UGM.user_id WHERE UGM.group_id IN (6,7,8)';
			if(!empty($id)) $query .= 'AND U.id = ' .$id;
		}

		$db->setQuery( $query );
		$usersA = $db->loadObjectList();

		return $usersA;
	}

/**
 * 
 * Enter description here ...
 * @param unknown_type $listId
 * @param unknown_type $includeUnsub 0 = All, 1 =Just Subscriber , 2= ONLY Unsubsriber
 * @param unknown_type $includeConf
 * @param unknown_type $includeBlack
 */
	public static function getSubscribersCount( $listId=0, $includeUnsub=true, $includeConf=false, $includeBlack=false ) {
		static $db=null;
		if( !isset( $db ) ) $db = JFactory::getDBO();

		$query = "SELECT count(`A`.`id`) FROM `#__jnews_subscribers` AS `A`";
		if( !empty($listId) ) {
			$query .= " LEFT JOIN `#__jnews_listssubscribers` AS `B` ON `A`.`id` = `B`.`subscriber_id` WHERE `B`.`list_id` = ". $listId;
			if( $includeUnsub === true || $includeUnsub == 1 ) $query .= ' AND B.`unsubscribe` = 0';
			elseif ( $includeUnsub == 2 )  $query .= ' AND B.`unsubscribe` = 1';
			if( $includeConf ) $query .= ' AND A.`confirmed` = 1';
			if( $includeBlack) $query .= ' AND A.`blacklist` = 0';
		}

    	$db->setQuery( $query );
    	$result = $db->loadResult();

    	$result = ( !empty($result) ) ? $result : 0;
    	return $result;
	}

	public static function isSubConfirmed( $subId ){
		static $resultA=array();

		if ( empty($subId) ) return false;

		if( isset( $resultA[$subId] ) ) return $resultA[$subId];

		$db = JFactory::getDBO();
		$query = ' SELECT `id` FROM `#__jnews_subscribers` WHERE `confirmed` = 1 AND `id` ='. $subId;
		$db->setQuery( $query );
    	$result = $db->loadResult();
    	$resultA[$subId] = ( !empty($result) ) ? true : false;
    	return $resultA[$subId];
	}

	public static function isConfirmed($subId){
		static $suspendA = array();

		if ( empty($subId) ) return 1;
		if ( isset($suspendA[$subId]) ) return $suspendA[$subId];

		$db = JFactory::getDBO();
		$suspend=0;
		$query='SELECT `confirmed` from `#__jnews_subscribers` WHERE `id`='.$subId ;
		$db->setQuery($query);
		$confirmed=$db->loadResult();

		if($confirmed==0){
			$suspend=1;
		}

		$suspendA[$subId] = $suspend;
		return $suspend;

	}

 } 