<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_Queue {

var $maxQueue = 60;
var $startTime = 0;
var $timeLimit = 0;
var $maxExetime = 0;

var $sentHTML = array();
var $sentText = array();
var $sentFailed = array();
var $sentSuccess = 0;
var $recurringError = 0;
var $start = 0;
var $pause = 0;
var $total = 0;
var $limitEmails = 0;

function jNews_Queue( $time=0 ) {

	$this->maxQueue = $GLOBALS[JNEWS.'cron_max_emails'];
	$this->limitEmails = $GLOBALS[JNEWS.'emails_between_pauses'];

	//If memory_limit less than 128M
 	$limit= jnews::convertToBytes(@ini_get('memory_limit'));
	if($limit < jnews::convertToBytes('128M') ){
		@ini_set('memory_limit','128M');
	}

	@ini_set('max_execution_time',0);
	@ini_set('default_socket_timeout',10);
	@ignore_user_abort(true);

	$this->startTime = time();

	if ( empty($time) ) $time = time();
	$limit = ini_get('max_execution_time');

	if(!empty($limit)) $this->maxExetime = $time + $limit-5;
	else $this->maxExetime = $time + 300;	// 5 mins by default

	$this->db= JFactory::getDBO();

}

/** Check if there is newsletter ready to be sent and insert all subscribers in the queue
 * @param int $mailingId
 * @return true if there is not and we can conitnue processing the queue , false if there is and we dont want to process the queue any more until next time
 */
	function checkForNewsletters( $mailingId=null ) {
		$db = JFactory::getDBO();
		$time = time();	//jnews::getNow()
		if ( !isset($mailingId) ) {
			$query = 'SELECT `id`,`send_date` FROM `#__jnews_mailings` WHERE published = 2 AND send_date <= '.$time.' ORDER BY send_date ASC';
			$db->setQuery($query);
			$allReadyMailing = $db->loadObjectList();
			if ( empty($allReadyMailing) ) return true;
		} else {
			$mailingObj=null;
			$allReadyMailing = array();
			$mailingObj->id=$mailingId;
			$mailingObj->send_date = $time - 5;
			$allReadyMailing[] = $mailingObj;
		}

		$allMailingIDs = array();
		foreach( $allReadyMailing as $oneMailing ) {
			$allMailingIDs[] = $oneMailing->id;

			if(empty($oneMailing->id)) continue;

			$queryS = 'SELECT A.`list_id` FROM `#__jnews_listmailings` as A ';
			$queryS .= 'LEFT JOIN `#__jnews_lists` as B on B.`id` = A.`list_id` WHERE A.`mailing_id`='.intval($oneMailing->id);
			$queryS .= ' AND B.published = 1';

			$query = 'INSERT IGNORE INTO `#__jnews_queue` (`subscriber_id`,`mailing_id`,`send_date`,`priority`) ';
			$query .= 'SELECT DISTINCT A.subscriber_id,'.intval($oneMailing->id).','. $oneMailing->send_date .','.$GLOBALS[JNEWS.'sched_prior'];
			$query .= ' FROM `#__jnews_listssubscribers` as A ';
			$query .= 'LEFT JOIN `#__jnews_subscribers` as B ON A.subscriber_id = B.id ';
			$query .= 'WHERE B.`blacklist` =0 AND B.confirmed=1 ';
			$query .= 'AND A.`list_id` IN ('.$queryS.') AND A.`unsubscribe`=0 ';

			$db->setQuery($query);
			$db->query();
			// if we need to know how many subscribers got inserted $db->getAffectedRows();

		}

		$query = 'UPDATE `#__jnews_mailings` SET `published`=1 WHERE `id` IN ('. jnews::implode( ',',$allMailingIDs ) .')';
		$db->setQuery($query);
		$db->query();

		return false;
	}


/** Send element stored in the queue
 * @return bool if the queue still have values to be sent then return true ( for manual send ) otherwise return false
 */
	function sendQueue( $showHTML=false, $mailingId=null, $onlyAutoRsponder=false, $manualSend=false ) {
		$showHTML=true;
		$stillProcess = null;

		$maxTask = ( $manualSend ) ? $this->limitEmails : $this->maxQueue;
		if ( $maxTask < 1 ) $maxTask = 1;
		if ( $maxTask > 1000 ) $maxTask = 1000; //8889990
		$arPRiority = empty($GLOBALS[JNEWS.'ar_prior']) ? 1 : $GLOBALS[JNEWS.'ar_prior']; 
		
		
		//get all the queue
		$query = 'SELECT A.qid,A.subscriber_id,A.attempt, A.params as `qparams`, A.delay as `qdelay`, B.* FROM `#__jnews_queue` as A';
		$query .= ' LEFT JOIN `#__jnews_mailings` as B on A.mailing_id = B.id ';
		$query .= ' WHERE A.send_date <= '. time() .' AND B.published > 0 AND A.type != 8';
		if ( !empty($mailingId) ) $query .= ' AND A.mailing_id = '.$mailingId;
		if ( $onlyAutoRsponder && $GLOBALS[JNEWS.'level'] > 1 ) $query .= ' AND A.`priority` = '.$arPRiority;
		
		//do not select the suspend
		$query .= ' AND `suspend`= 0';//filter for unconfirmed subscribers
		$query .= ' AND `block` = 0';//filter the entries are still being processed from the last sending/processing of the queue
		$query .= ' ORDER BY A.`priority` ASC, A.send_date ASC';
		$query .= ' LIMIT '.$maxTask;
		
		$this->db->setQuery($query);
		$allQueuedA = $this->db->loadObjectList();
		$error = $this->db->getErrorMsg();
	
		if(!empty($error)){
			//prompt message if an error occured while retrieving entries from the queue
			echo '<br><br><span style="font-weight:bold; font-style:italic; color:blue;">'._JNEWS_QUEUE_PROCESS_ERROR.'<span><br><br>';
			echo $error;
		}
			
		if ( empty($allQueuedA) ){
			echo '<br><br><span style="font-weight:bold; font-style:italic; color:blue;">'._JNEWS_NO_MAILINGS_YET.'<span>';// prompt message if there is nothing to send
			return false;
		}
		
		//we update the retrieved allQueuedA to blocked so that  the entries will not be processed double
		foreach($allQueuedA as $oneQueue){
			$this->updateQueueBlock($oneQueue->qid, 1);
		} 
		
		$totalSubscribers = count($allQueuedA);

		//make an array of all subscribers and all mailings
		$mySubcribersA = array();
		$subscribersPerMailingsA = array();
		foreach( $allQueuedA as $oneQueue ) {
			$mySubcribersA[$oneQueue->subscriber_id] = true;
		}

		//get all the subcribers
		$query = 'SELECT A.`id`,A.`user_id`,A.`name`,A.`email`,A.`receive_html`,A.`confirmed`,A.`blacklist`, B.`id` AS \'user\' ';
		
		if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
			if($GLOBALS[JNEWS.'show_column1'])
				$query .= ',A.`column1`';
			if($GLOBALS[JNEWS.'show_column2'])
				$query .= ',A.`column2`';
			if($GLOBALS[JNEWS.'show_column3'])
				$query .= ',A.`column3`';
			if($GLOBALS[JNEWS.'show_column4'])
				$query .= ',A.`column4`';
			if($GLOBALS[JNEWS.'show_column5'])
				$query .= ',A.`column5`';
		}
		
		$query .= ' FROM `#__jnews_subscribers` AS A  ';
		
		$query .= ' LEFT JOIN  `#__users` AS B ON A.id=B.id';
		$query .= ' WHERE A.`id` IN (' . jnews::implode( ',', array_keys($mySubcribersA) ) .' )';
		$this->db->setQuery($query);
		$allSubcribersA = $this->db->loadObjectList('id');

		if ( empty($allSubcribersA) ) return false;

		$mailerC = new jNews_ProcessMail();

		$queueToBeDelted=array();
		$queueToBeAttempted=array();
		$queueSuccessfullySent=array();
		$addToStatisticsA = array();
		$log_detailed = '';
		$message = '';
		$screenMsg = '';

		$maxAttempt = ( $GLOBALS[JNEWS.'max_attempts'] <1 ) ? 1 : $GLOBALS[JNEWS.'max_attempts'];
		if($this->total==0) $this->total = jNews_Queue::getQueueCount( $mailingId );

		//for manual sending processing
		if($manualSend){
			if(!headers_sent() AND ob_get_level() > 0){
				@ob_end_flush();
			}

			$url = JURI::base(). jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=continuesend&mailingid='.$mailingId.'&totalsend='.$this->total.'&alreadysent=', true, false, true );

			$screenMsg = "<div style='position:fixed; top:3px;left:3px;color:orange; padding : 3px;'>";
			$screenMsg.= "<span id='waitinginfo' style='padding:10px;margin:5px;font-size:16px;font-weight:bold;display:none;background-color:#FFF8C6; color:red;'> </span>";

			$screenMsg.= '<i>'._JNEWS_SENDING_EMAIL.' <span id="emailcounter"/><strong>'.$this->start.'</strong></span> out of <strong>'. $this->total. '</strong>... </i>';
			$screenMsg.= "</div><div id='details' style='display:none; position:fixed; bottom:3px;left:3px;background-color : white; border : 1px solid grey; padding : 3px;'> </div><br /><br />";

			$screenMsg.= '<script type="text/javascript" language="javascript">';
			$screenMsg.= 'var myEmailCounter = document.getElementById("emailcounter");';
			$screenMsg.= 'var details = document.getElementById("details");
var waitinginfo = document.getElementById("waitinginfo");
function setDetails(message){ details.style.display = \'block\';details.innerHTML=message; }
function setWaitingInfo(waitingtime){ waitinginfo.style.display = \'\';waitinginfo.innerHTML="Waiting "+waitingtime+" seconds..."; }
function setEmailCounter(val){ myEmailCounter.innerHTML=val;}
var waitingtime = '.intval($this->pause).';
function setWaitingTime(){
	setWaitingInfo(waitingtime);
	if(waitingtime > 0){
		waitingtime = waitingtime - 1;
		setTimeout(\'setWaitingTime()\',1000);
	}else{
		document.location.href=\''.$url.'\'+myEmailCounter.innerHTML;
	}
}
</script>';

			echo $screenMsg;

			if(function_exists('ob_flush')) @ob_flush();
			else @flush();

		}

		//we assign counter for the current email being processed
		$counterEmail = $this->start;

		//we determine if the mailings on the queue is lesser than the limit given per batch of manual sending
		if( count($allQueuedA) < $maxTask ){
			$stillProcess = false;
		}
		
		//get the size of the queue
		foreach( $allQueuedA as $oneQueue ) {
			
			$counterEmail++;

			if($manualSend){
				echo '<script type="text/javascript" language="javascript">setEmailCounter('. $counterEmail .')</script>';
				if(function_exists('ob_flush')) @ob_flush();
				@flush();
			}

			//attachements
			if (!empty($oneQueue->attachments)) {
				$oneQueue->attachments = explode("\n", $oneQueue->attachments);
				array_pop($oneQueue->attachments);
			} else {
				$oneQueue->attachments = array();
			}

			//images
			if (!empty($oneQueue->images)) {
				$oneQueue->images = explode("\n", $oneQueue->images);
			} else {
				$oneQueue->images = array();
			}

			//5 is maximun attempt
			if ( $oneQueue->attempt >= $maxAttempt ) {
				$queueToBeDelted[] = $oneQueue->qid;
				continue;
			}

			if ( !isset($this->sentHTML[$oneQueue->id]) ) $this->sentHTML[$oneQueue->id]=0;
			if ( !isset($this->sentText[$oneQueue->id]) ) $this->sentText[$oneQueue->id]=0;
			if ( !isset($this->sentFailed[$oneQueue->id]) ) $this->sentFailed[$oneQueue->id]=0;
			$emailSentStatus = $mailerC->send( $oneQueue, $allSubcribersA[$oneQueue->subscriber_id] );

			if ( !empty($allSubcribersA[$oneQueue->subscriber_id]->email) ) {
				if( $GLOBALS[JNEWS.'save_log'] ){
	
					if(!$emailSentStatus) {
						 $log_detailed .= '['.$oneQueue->id.'] '.$oneQueue->subject.' : '.$allSubcribersA[$oneQueue->subscriber_id]->email . ' -> ' .
						_JNEWS_MESSAGE_NOT . "\r\n" . _JNEWS_MAILER_ERROR . ': ' . $mailerC->ErrorInfo . "\r\n";
					}else{
						 $log_detailed .= '['.$oneQueue->id.'] '.$oneQueue->subject.' : '.$allSubcribersA[$oneQueue->subscriber_id]->email . ' -> ' .
						_JNEWS_MESSAGE_SENT_SUCCESSFULLY . "\r\n";
					}
				}else{
					$log_detailed .= '['.$oneQueue->id.'] '.$oneQueue->subject.' : '.$allSubcribersA[$oneQueue->subscriber_id]->email . ' -> ' .
					_JNEWS_MESSAGE_SENT_SUCCESSFULLY . "\r\n";
				}
			}
			

			//Screen message for manual sending
			if($manualSend){
				if($emailSentStatus){
					$message = '<strong><i>'.$oneQueue->subject.'</i></strong> '._JNEWS_MSG_SENT_SUCCESS.' <strong><i>'.$allSubcribersA[$oneQueue->subscriber_id]->name .' ( '. $allSubcribersA[$oneQueue->subscriber_id]->email.' )</i></strong>' . "\r\n";
				}else{
					$message = '<i>'._JNEWS_ATTEMPTED.' '.$oneQueue->subject.' to '.$allSubcribersA[$oneQueue->subscriber_id]->name .' ( '. $allSubcribersA[$oneQueue->subscriber_id]->email.' )'.".\r\n"._JNEWS_RESCHEDULED."\r\n\r\n"._JNEWS_REACHED_MAX_ATTEMPT."</i>\r\n\r\n";
				}

				$this->_displayDetails($message,$emailSentStatus,$counterEmail);

			}

			if ( $emailSentStatus ) {//succeess send
				$query = 'DELETE FROM `#__jnews_queue` WHERE `qid`='.$oneQueue->qid;
				$this->db->setQuery($query);
				$this->db->query();
				if ( $mailerC->html ) $this->sentHTML[$oneQueue->id]++;
				else $this->sentText[$oneQueue->id]++;

				//user statistics
				if ($GLOBALS[JNEWS.'enable_statistics'] && $GLOBALS[JNEWS.'statistics_per_subscriber'] ) {
					$addToStatisticsA[$oneQueue->id][$oneQueue->subscriber_id] = (int)$mailerC->html;
				}
				$this->sentSuccess++;
				$this->recurringError = 0;
				
				$queueSuccessfullySent[] = $oneQueue->qid;//we save the successfully sent qids so that we can differentiate from the allqueue what qids that were not processed because the max execution time has been reached
			} else {// failed send
				$queueToBeAttempted[] = $oneQueue->qid;
				$this->sentFailed[$oneQueue->id]++;
				$this->recurringError++;
			}

			$time = time();
			if ( $this->maxExetime!=0 && $this->maxExetime <= $time ) {
				$stillProcess = true;
				break;
			}

			if ( $this->recurringError > 2 && $this->sentSuccess > 3 ) {
				$stillProcess = false;
				break;
			}

			if ( $this->recurringError > 5 || connection_aborted() ) {
				$stillProcess = false;
				break;
			}

		}

		//we close the processing of emails
		$mail = JFactory::getMailer();
		$mailerC->close($mail);

		if(!empty($this->total) && $counterEmail >= $this->total){
			$stillProcess = false;
		}

		//update queue with try + 1;
		if ( !empty($queueToBeAttempted) ) {
			$query = 'UPDATE `#__jnews_queue` SET `attempt`=`attempt`+1,`send_date`=`send_date`+`attempt`*25299+4000, `block`= 0 WHERE `qid` IN ('.jnews::implode( ',', $queueToBeAttempted ).')';//we will also update the block to 0 so that it will be processed again
			$this->db->setQuery($query);
			$this->db->query();
		}

		//delete the queue when the emails are sent successfully after x number of attempts
		if ( !empty($queueToBeDelted) ) {
			$query = 'DELETE FROM `#__jnews_queue` WHERE `qid` IN ('.jnews::implode( ',', $queueToBeDelted ).')';
			$this->db->setQuery($query);
			$this->db->query();
		}

		//unblock again the queue that were not sent because the timeout has been reached so that they will be processed again
		if ( !empty($allQueuedA) ) {
			foreach($allQueuedA as $oneQueue){
				if(!in_array($oneQueue->qid,$queueSuccessfullySent)){
					$query = 'UPDATE `#__jnews_queue` SET `block` = 0 WHERE `qid` ='.$oneQueue->qid;
					$this->db->setQuery($query);
					$this->db->query();
				}
			}
		}

		//we update and increment the statistics
		if ($GLOBALS[JNEWS.'enable_statistics'] ) $this->_updateStatsGlobal( $allQueuedA );
		if ( !empty($addToStatisticsA) ) $this->_insertStats( $addToStatisticsA );
		
		//we prompt message that the mailing has been sent successfully for each batch
//		echo '<br><br><span style="font-weight:bold; font-style:italic; color:green;">'.$oneQueue->subject.' successfully sent to subscribers.'.'</span> ';

		//mailing reports
		$this->_writeLogs( $log_detailed );
		
		if ( isset($stillProcess) ) {

			//manual sending
			if($stillProcess && $manualSend ) echo '<script type="text/javascript" language="javascript">setWaitingTime();</script>';
			else {
				echo '<br><br><span style="font-weight:bold; font-style:italic; color:green;">'._JNEWS_THE_MAILING.$oneQueue->subject._JNEWS_SENT_ALL.'</span> ';
			
//					$subject = 'jNews Mailing Notification - Status: End';
//					$content = 'The mailing '.$oneQueue->subject.' has been successfully sent.';
//					if( version_compare(JVERSION,'1.6.0','<') ){ //j15
//						$this->db->setQuery( "SELECT * FROM `#__users` WHERE `gid` = 25 ORDER BY `id` ASC LIMIT 1" );
//					}else{
//						$this->db->setQuery( "SELECT * FROM `#__users` AS U LEFT JOIN `#__user_usergroup_map` AS UGM ON U.id =UGM.user_id  WHERE `group_id` = 8 ORDER BY `id` ASC LIMIT 1" );
//					}
//					$admin = $this->db->loadObject();
//					
//					JUTility::sendMail($admin->email, $admin->username, $admin->email, $subject, $content );
			}
			return ( $stillProcess ? true : false);
		} else {

			//manual sending
			if($manualSend && ( $maxTask < $this->total ) ) echo '<script type="text/javascript" language="javascript">setWaitingTime();</script>';
			else {
				echo '<br><br><span style="font-weight:bold; font-style:italic; color:green;">'._JNEWS_THE_MAILING.$oneQueue->subject._JNEWS_SENT_ALL.'</span> ';
			
//					$subject = 'jNews Mailing Notification - Status: End';
//					$content = 'The mailing '.$oneQueue->subject.' has been successfully sent.';
//					if( version_compare(JVERSION,'1.6.0','<') ){ //j15
//						$this->db->setQuery( "SELECT * FROM `#__users` WHERE `gid` = 25 ORDER BY `id` ASC LIMIT 1" );
//					}else{
//						$this->db->setQuery( "SELECT * FROM `#__users` AS U LEFT JOIN `#__user_usergroup_map` AS UGM ON U.id =UGM.user_id  WHERE `group_id` = 8 ORDER BY `id` ASC LIMIT 1" );
//					}
//					$admin = $this->db->loadObject();
//					
//					JUTility::sendMail($admin->email, $admin->username, $admin->email, $subject, $content );
			}
			return ( $this->maxQueue > count($allQueuedA) ) ? false : true;
		}

	}


	 function getAllOneList($listId) {
		$db = JFactory::getDBO();
		if ($listId>0) {
			$query = 'SELECT * FROM `#__jnews_queue` WHERE `mailing_id` IN(';
			$query .= 'SELECT `mailing_id` FROM `#__jnews_listmailings` WHERE `list_id`='.$listId;
			$query .= ')';
			$query .= ' ORDER BY `qid` ';
			$db->setQuery($query);
			$queue = $db->loadObjectList();
			return $queue;
       }
	 }


	 function updatePublished($qid, $value=0) {
		$db = JFactory::getDBO();
		if (!empty($qid)) {
			$qids = implode (',', $qid);
			$textVal = ($value) ? '1' : '0';
		    $query = "UPDATE `#__jnews_queue` SET `published` = '$textVal' WHERE `qid` IN ( $qids ) ";
	 	  	$db->setQuery($query);
		  	$db->query();
			return true;
		 }
	    return true;
	 }

	//Used by class.mailing
	 function update_subs_to_mailing($list_id, $mailing_id, $date, $issue, $acc_level) {
		$db = JFactory::getDBO();
		$query = 'UPDATE `#__jnews_queue` SET ';
		if (!empty($date))   $query .= ' `send_date` = \'' . $date . '\', ' ;
		if (!empty($issue))  $query .= ' `issue_nb` = ' . $issue . ', ' ;
	 	if ($acc_level != 0) $query .= ' `acc_level` = ' . $acc_level . ', ' ;
	 	$query .= '	`published` = 2 ';

	 	if ($mailing_id > 0) {
			$query .= ' WHERE `mailing_id` ='.$mailing_id;
		} else {
		    return true;
		}

		$db->setQuery($query);
	 	$db->query();

		return true;
	 }

	 static function insertQueuesForNews( $subId, $listId, $acc_level ) {
		$mailing_ids=array();
		$mailing_ids=jNews_Mailing::getListMailing( $listId );
		$status = true;

		if(is_array($subId)){
			for ($k=0 ;$k < count($subId); $k++){
		 		if(is_array($mailing_ids)){
						for($i=0;$i<sizeOf($mailing_ids);$i++){
							// check subscribers confirmed status
							$result = jNews_Subscribers::isSubConfirmed($subId[$k]);
				            $queue = new stdClass;
				            $queue->id = 0;
				            $queue->subscriber_id = $subId[$k];
				            $queue->list_id = $listId;
				            $queue->type = 1;
				            $queue->mailing_id = $mailing_ids[$i];
	 						$queue->send_date = jNews_Mailing::getSendDate($mailing_ids[$i]);
				            $queue->suspend = ( !empty($result) ) ? 1 : 0;
				            $queue->delay = 0;
				            $queue->acc_level = $acc_level;
				            $queue->issue_nb = 0;
				            $queue->published = 0;
							$queue->priority = 0;
							$queue->attempt = 0;
				            jNews_Queue::insertIntoQueue($queue);
						}
						$subscriber = new stdClass;
						$subscriber->list_id=$listId;
						$subscriber->id=$subId[$k];
						jNews_ListsSubs::saveToListSubscribers($subscriber);
		 		}else{
					 	// check subscribers confirmed status
						$result = jNews_Subscribers::isSubConfirmed($subId[$k]);

					 	$queue = new stdClass;
			            $queue->id = 0;
			            $queue->subscriber_id = $subId[$k];
			            $queue->list_id = $listId;
			            $queue->type = 1;
 			            $queue->mailing_id = $mailing_ids;
						$queue->send_date = jNews_Mailing::getSendDate($mailing_ids);
			            $queue->suspend = ( !empty($result) ) ? 1 : 0;
			            $queue->delay = 0;
			            $queue->acc_level = $acc_level;
			            $queue->issue_nb = 0;
			            $queue->published = 0;
						$queue->priority = 0;
						$queue->attempt = 0;
						$subscriber = new stdClass;
				        $subscriber->list_id=$listId;
				        $subscriber->id=$subId[$k];
				        jNews_ListsSubs::saveToListSubscribers($subscriber);
			            jNews_Queue::insertIntoQueue($queue);
				}
			}
		 	}else{
				if(is_array($mailing_ids)){
					// check subscribers confirmed status
					$result = jNews_Subscribers::isSubConfirmed($subId);
					for($i=0;$i<sizeOf($mailing_ids);$i++){
			            $queue = new stdClass;
			            $queue->id = 0;
			            $queue->subscriber_id = $subId;
			            $queue->list_id = $listId;
			            $queue->type = 1;
			            $queue->mailing_id = $mailing_ids[$i];
						$queue->send_date = jNews_Mailing::getSendDate($mailing_ids[$i]);
			            $queue->suspend = ( !empty($result) ) ? 1 : 0;
						if($GLOBALS[JNEWS.'require_confirmation']){
							$queue->suspend = 1;
						}else{
							$queue->suspend = 0;
						}
			            $queue->delay = 0;
			            $queue->acc_level = $acc_level;
			            $queue->issue_nb = 0;
			            $queue->published = 0;
						$queue->priority = 0;
						$queue->attempt = 0;
			            jNews_Queue::insertIntoQueue($queue);
					}
						$subscriber = new stdClass;
						$subscriber->list_id=$listId;
						$subscriber->id=$subId;
						jNews_ListsSubs::saveToListSubscribers($subscriber);
				}else{
					// check subscribers confirmed status
					$result = jNews_Subscribers::isSubConfirmed($subId);
					$queue = new stdClass;
				    $queue->id = 0;
				    $queue->subscriber_id = $subId;
				    $queue->list_id = $listId;
				    $queue->type = 1;
	 			    $queue->mailing_id = $mailing_ids;
					$queue->send_date = jNews_Mailing::getSendDate($mailing_ids);
				    $queue->suspend = ( !empty($result) ) ? 1 : 0;
				    $queue->delay = 0;
				    $queue->acc_level = $acc_level;
				    $queue->issue_nb = 0;
				    $queue->published = 0;
					$queue->priority = 0;
					$queue->attempt = 0;
					$subscriber = new stdClass;
					$subscriber->list_id=$listId;
					$subscriber->id=$subId;
					jNews_ListsSubs::saveToListSubscribers($subscriber);
				    jNews_Queue::insertIntoQueue($queue);
				}
			}
		return $status;
    }

	 function insertIntoQueue($queue) {
		static $alradyProceesed = array();


		$db = JFactory::getDBO();
		if ( $queue->subscriber_id<0 ) return false;
		//Added by Grace for the pending of queue
		$queue->published = ($queue->send_date > time() ) ? 2 : 0;

		//Note: know what's the use of this line
		if(empty($queue->list_id)){//this is for the smartnewsletter
			$queue->published=2;
		}

		$confirmed=jNews_Subscribers::isConfirmed($queue->subscriber_id);
		$queue->suspend=$confirmed;

		$key=serialize($queue);
		if ( isset($alradyProceesed[$key]) ) return true;
		$alradyProceesed[$key] = true;

		//if (!$exist){
			$query = 'INSERT IGNORE INTO `#__jnews_queue` (`type` , `subscriber_id` ,  `mailing_id`, `issue_nb`,' .
					' `send_date`, `suspend` , `delay`, `acc_level`, `published`, `priority`, `attempt`) VALUES ('
			. intval($queue->type) . ', '
			. intval($queue->subscriber_id) . ' , '
			. intval($queue->mailing_id) . ', '
			. intval($queue->issue_nb) . ', \''
			. $queue->send_date . '\', '
			. $queue->suspend . ' , '
			. $queue->delay . ' , '
			. $queue->acc_level . ' , '
			. $queue->published . ' , '
			. $queue->priority . ' , '
			. $queue->attempt.')';
			$db->setQuery($query);
			$db->query();

			// ONLY FOR AUTO-RESPONDERS --- ONLY FOR AUTO-RESPONDERS --- ONLY FOR AUTO-RESPONDERS --- ONLY FOR AUTO-RESPONDERS --- ONLY FOR AUTO-RESPONDERS --- ONLY FOR AUTO-RESPONDERS ---
			if(!empty($queue->list_id)) {
				$type = jNews_Lists::getListType($queue->list_id);

				if($type==2){
					$delays = jNews_Mailing::getMailingInfoz( $queue->mailing_id, 'delay' );
						$newQueue->delay = $delays;
						$newQueue->send_date = time() + ( $delays*60 );// jnews::getNow( $delays );
						$newQueue->published = 2;
						$arPRiority = empty($GLOBALS[JNEWS.'ar_prior']) ? 1 : $GLOBALS[JNEWS.'ar_prior']; 
						$newQueue->priority = $arPRiority;

						$query='UPDATE `#__jnews_queue` SET `send_date`='.$newQueue->send_date;
						$query .= ' , `delay`='. $newQueue->delay;
						$query .= ' , `published`='.$newQueue->published;
						$query .= ' , `priority`='. $newQueue->priority;

						$query .= ' , `suspend`='. $confirmed;
						$query .= ' WHERE `subscriber_id` = '.$queue->subscriber_id ;
						$query .= ' and `mailing_id` = '.$queue->mailing_id ;

						$db->setQuery($query);
						$db->query();
				}
			  return true;
			}//end if
			return true;
		//}
	 }


	//Used by queue controller
	public static function getMailingqueue($mailingsearch, $mailingId, $start, $limit, $setSort=null){
		$count = false;
	 	$db = JFactory::getDBO();
		$query = 'SELECT q.* FROM #__jnews_queue AS q LEFT JOIN #__jnews_mailings AS m on q.mailing_id = m.id ';
		$query .= ' LEFT JOIN #__jnews_subscribers AS s on q.subscriber_id = s.id ';
		$query .= ' WHERE q.type < 7 ';
		if (empty($mailingId) && empty($mailingsearch) ) $query .= 'AND 1';

		if(!empty($mailingId)){
			$query .= ' AND q.`mailing_id` = '. $mailingId;
		}

		if(!empty($mailingsearch)){
			$query .= ' AND (m.subject LIKE \'%'. $mailingsearch.'%\' ';
			$query .= ' OR s.`email` LIKE \'%'. $mailingsearch.'%\' )';
		}

		if( !empty($setSort) ) {
			$query .= " ORDER BY $setSort->orderValue $setSort->orderDir";
		}else{
			$query .= ' ORDER BY q.`block`, q.`send_date`, `published` DESC';
		}

		$db->setQuery($query, $start, $limit);
		$mailingQueue=$db->loadObjectList();

		return $mailingQueue;
	 }


	function getSubscriberLists($userId) {
		$db = JFactory::getDBO();
		if ($userId>0) {
			$query = 'SELECT * FROM `#__jnews_queue` WHERE `subscriber_id`='.$userId;
			$query .= jnews::orderBy('list_idA');
			$db->setQuery($query);
			$queue = $db->loadObjectList();
			return $queue;
		}else {
			return '';
		}
	 }

	 static function deleteSubsQueue($subscriber_id , $listId=0) {
		$db = JFactory::getDBO();
	 	if ($listId==0){
			$query = 'DELETE FROM `#__jnews_queue` WHERE `subscriber_id` = ' . $subscriber_id;
			$db->setQuery($query);
			$db->query();
			return true;
	   }else{
		//get mailing id fron the list (listmailing table)
		$mailing_ids=jNews_Mailing::getListMailingToDelete( $listId );

		//if not empty $mailing_ids
		if(!empty($mailing_ids)){
			foreach($mailing_ids as $mailing_id){
				jNews_Queue::_deleteSubsQueuePriv($subscriber_id,$mailing_id,$listId);
			}
		}
	   }
  	}
  	

	 public static function getQueueCount( $mailingId=0 ){
		static $resultA = array();
		if ( isset($resultA[$mailingId]) ) return $resultA[$mailingId];
		$db = JFactory::getDBO();

		$query = "SELECT count(`qid`) FROM `#__jnews_queue` ";
		if( !empty($mailingId) ) $query .= "WHERE `mailing_id` = ". $mailingId;
		$db->setQuery( $query );
		$resultA[$mailingId] = $db->loadResult();
		return $resultA[$mailingId];
	 }


	 //this function is to insert a mailing with type 7 in the queue
	 function addSNinQueue( $mailingId, $delay_min, $start_date, $next_date ){ //modified for smartnewsletter added next_date
	 	$db = JFactory::getDBO();

		$send_date =  intval($delay_min) + intval($start_date);

		$query = 'INSERT IGNORE INTO `#__jnews_queue` (`subscriber_id`,`type` , `mailing_id`, `issue_nb`,`send_date`, `suspend` , `delay`, `acc_level`, `published`, `priority`, `attempt`) VALUES(';
		$query.= '0,';
		$query.= '7,';
		$query.= intval($mailingId) . ',';
		$query.= '1,';	// start date
		$query.= $send_date .',';
		$query.= '0,';
		$query.= $next_date .','; //modified for smartnewsletter
		$query.= '29,';
		$query.= '2,';
		$query.= '2,';
		$query.= '0)';
		$db->setQuery($query);
		$db->query();

		return true;
	 }

	 function typeEight(){
 		$db = JFactory::getDBO();

 		$query = 'SELECT * FROM `#__jnews_queue` WHERE `type`=8 AND send_date<='.time();
 		$db->setQuery($query);
		$db->query();
		$typeEight = $db->loadObjectList('qid');

		return $typeEight;
	 }


	//count subscribers per mailing
 	function queueStatus( $mailingid=0, $all=false ) {
 		$db = JFactory::getDBO();
		$query = 'SELECT a.mailing_id, COUNT(a.subscriber_id) as totalSubs, min(a.send_date) as send_date, b.subject FROM `#__jnews_queue` as a';
		$query .= ' LEFT JOIN `#__jnews_mailings` as b on a.mailing_id = b.id';
		$query .= ' WHERE b.published > 0';
		if ( !$all ) {
			$query .= ' AND a.send_date < '. time(); //jnews::getNow();
			if ( !empty($mailingid)) $query .= ' AND a.mailing_id = '.$mailingid;
		}
		$query .= ' AND a.`suspend` = 0';
		$query .= ' GROUP BY a.mailing_id';
		$db->setQuery($query);
		$queueStatus = $db->loadObjectList('mailing_id');
		return $queueStatus;
	}

	function getScheduled() {
		$db = JFactory::getDBO();
		$db->setQuery('SELECT * FROM `#__jnews_mailings` WHERE published = 2 ORDER BY send_date ASC');
		$result = $db->loadObjectList();
		return $result;
	}

	function updateSuspendedQueue($subscriberId){
		if(empty($subscriberId)) return;

		$db = JFactory::getDBO();
		$db->setQuery('UPDATE `#__jnews_queue` SET `suspend` = 0 WHERE `suspend` = 1 AND subscriber_id = '.$subscriberId);
		$db->query();

		return true;
	}  
  
	function _displayDetails($message,$status = '',$num = ''){
		$this->messages[] = strip_tags($message);
		if(!empty($num)){
			$color = $status ? 'green' : 'red';
			echo '<br/>'.$num.' : <font color="'.$color.'">'.$message.'</font>';
		}else{
			echo '<script type="text/javascript" language="javascript">setDetails(\''. $message .'\')</script>';
		}
		if(function_exists('ob_flush')) @ob_flush();
		@flush();
	}

	 function _insertStats( $addToStatisticsA ) {

		$time = time();

		if ( empty($addToStatisticsA) ) return true;
		foreach( $addToStatisticsA as $mailingID => $subcribersA ) {

			$query = 'REPLACE INTO `#__jnews_stats_details` (`mailing_id`,`subscriber_id`,`sentdate`,`html`) VALUES ';
			if ( empty($subcribersA) ) continue;
			foreach( $subcribersA as $subID => $HTML ) {			
				$queryA[] = '('.$mailingID.','.$subID.",$time,".$HTML.')';
			}

			$query .= implode( ',', $queryA );

			$this->db->setQuery($query);
			$this->db->query();

		}

	 }

	 function _updateStatsGlobal( $allQueuedA ) {
		$alreadyUpdated = array();
		$time = time();

		foreach( $allQueuedA as $one ) {
			if ( isset($alreadyUpdated[$one->id]) ) continue;
			//Update the table stats_global for the statistics
			$totalsent = @$this->sentHTML[$one->id] + @$this->sentText[$one->id];
			if ( empty($totalsent) ) continue;
			$alreadyUpdated[$one->id] = true;

			$queryA = array();
			$query = "UPDATE `#__jnews_stats_global` SET `sent` = `sent` + $totalsent,";
			if (!empty($this->sentHTML[$one->id])) $queryA[] = " `html_sent`=`html_sent`+".$this->sentHTML[$one->id];
			if (!empty($this->sentText[$one->id])) $queryA[] = " `text_sent`=`text_sent`+".$this->sentText[$one->id];
			if (!empty($this->sentFailed[$one->id])) $queryA[] = " `failed`=`failed`+".$this->sentFailed[$one->id];
			$query .= implode( ',', $queryA );
			$query .= ",`sentdate` = '$time' ";
			$query .= " WHERE `mailing_id`=".$one->id;
			$this->db->setQuery($query);
			$this->db->query();
		}
	 }//edfct


/**
	* Manual send process updating the Stats Global Record
	*/
	 function _manaulsendUpdateSG( $mailingId, $html_sent, $text_sent, $html_read=false) {
		$database = JFactory::getDBO();

		$time = time();
		$totalsent = $html_sent + $text_sent;

		$query = 'UPDATE `#__jnews_stats_global` SET `sent` = `sent` + '.$totalsent.' ,`html_sent` = `html_sent` + ' . $html_sent;
		$query .= ' , `text_sent` = `text_sent` + ' . $text_sent;
		if ($html_read) $query .= ' , `html_read` = `html_read` + 1 ';
		$query .= ' , `sentdate` = \'' . $time . '\'';
		$query .= ' WHERE `mailing_id` = \'' . $mailingId . '\'';

		$database->setQuery($query);
		$database->query();
	 }

	//End send process updating hte stats global record
	 function _writeLogs( $log_detailed ) {
		$HTMLSent = 0;
		$TextSent = 0;

		$HTMLSentAll = $this->sentHTML;
		$TextSentAll = $this->sentText;

		if ( !empty($HTMLSentAll) ) {
			foreach( $HTMLSentAll as $oneList ) {
				$HTMLSent = $HTMLSent + $oneList;
			}//enforeach
		}
		$TextSent = 0;
		if ( !empty($TextSentAll) ) {
			foreach( $TextSentAll as $oneList ) {
				$TextSent = $TextSent + $oneList;
			}//enforeach
		}

//		$timeNow = jnews::getNow( 0, true );
		$timeNow = time();
		$totalstr = $timeNow - $this->startTime;
		$log_simple = 'Time to send: ' . $totalstr . ' ' ._JNEWS_SECONDS . "\r\n";
		$log_simple .= 'Number of subscribers: ' . ( $HTMLSent + $TextSent ) . "\r\n";
		$log_simple .= 'HTML format: ' . $HTMLSent . "\r\n";
		$log_simple .= 'Text format: ' . $TextSent . "\r\n";

		$format = defined('_DATE_FORMAT_LC') ? _DATE_FORMAT_LC : JText::_('DATE_FORMAT_LC');
		
		$log_detailed = "\r\n" ."\r\n" .'*** '. JHTML::_( 'date', 'now',  $format ) .' ***'."\r\n" . $log_detailed;

		$log_detailed = $log_simple . 'Details: ' . "\r\n" . $log_detailed . "\r\n";
		if ($GLOBALS[JNEWS.'send_log_simple']) {
			$send = $log_simple;
		} else {
			$send = $log_detailed;
		}

		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
			$this->db->setQuery( "SELECT * FROM `#__users` WHERE `gid` = 25 ORDER BY `id` ASC LIMIT 1" );
		}else{
			$this->db->setQuery( "SELECT * FROM `#__users` AS U LEFT JOIN `#__user_usergroup_map` AS UGM ON U.id =UGM.user_id  WHERE `group_id` = 8 ORDER BY `id` ASC LIMIT 1" );
		}
		$admin = $this->db->loadObject();

		if ($GLOBALS[JNEWS.'send_log']) {
			if ( !empty( $GLOBALS[JNEWS.'send_log_email'] ) ) {
				
				$listOfAdminA = explode( ',', $GLOBALS[JNEWS.'send_log_email'] );
				
				if ( !empty($listOfAdminA) ) {
					foreach( $listOfAdminA as $oneAdmin ) {
						if ( empty($oneAdmin) ) continue;
						JUTility::sendMail( $oneAdmin, $oneAdmin, $oneAdmin, 'jNews mailing report', $send );
					}
				} else {
					JUTility::sendMail( $admin->email, $admin->username, $admin->email, 'jNews mailing report', $send );	
				}
					
			} else {
				JUTility::sendMail( $admin->email, $admin->username, $admin->email, 'jNews mailing report', $send );	
			
			}
			
		} elseif ( $GLOBALS[JNEWS.'send_log_closed'] == 1 && connection_aborted() ) {

			if ( !empty( $GLOBALS[JNEWS.'send_log_email'] ) ) {
				
				$listOfAdminA = explode( ',', $GLOBALS[JNEWS.'send_log_email'] );
				if ( !empty($listOfAdminA) ) {
					foreach( $listOfAdminA as $oneAdmin ) {
						if ( empty($oneAdmin) ) continue;
						JUTility::sendMail( $oneAdmin, $oneAdmin, $oneAdmin, 'jNews mailing report', $send );
					}
				} else {
					JUTility::sendMail( $admin->email, $admin->username, $admin->email, 'jNews mailing report', $send );	
				}
				
			} else {
				JUTility::sendMail( $admin->email, $admin->username, $admin->email, 'jNews mailing report', $send );	
				
			}
			
		}

		if ($GLOBALS[JNEWS.'save_log']) {
			if ($GLOBALS[JNEWS.'save_log_simple']) {
				@file_put_contents(JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'save_log_file'], $log_simple, FILE_APPEND);
			} else {
				@file_put_contents(JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'save_log_file'], $log_detailed, FILE_APPEND);
			}
		}
	 }
	

	//This is a private function called by delete SubsQueue function
	static function _deleteSubsQueuePriv($subscriber_id,$mailing_ids,$listID){
		static $alreadyProssed = array();

		$key = $subscriber_id .'.' .$mailing_ids .'.' .$listID;
		if( isset($alreadyProssed[$key]) ) return true;
		$alreadyProssed[$key] = true;

		$db = JFactory::getDBO();
		$status=true;
		$listIds =jNews_Mailing::getMailingList( $mailing_ids );

		$key = array_search($listID,$listIds);

		unset($listIds[$key]);
			if(!empty($listIds)){
				if(is_array($listIds)){
					foreach($listIds as $listId){
						if (!empty($listssubscribers)){
							if (!$listssubscribers->unsubscribe){
								$status=  false;
							}
						}
					}
				}else{
					$status= (!empty($listssubscribers)) ? true:false;
				}
			}//end if
		if($status){
			if ($subscriber_id>0) {
				static $myResultA = array();
				$myKey = $subscriber_id . '.' . $mailing_ids;
				if ( isset($myResultA[$myKey]) ) return true;
				$myResultA[$myKey] = true;
				$query = 'DELETE FROM `#__jnews_queue` WHERE `subscriber_id` = ' . $subscriber_id;
				$query .= ' AND `mailing_id` = ' . $mailing_ids;
				$db->setQuery($query);
				$db->query();
				return true;
			}
		}
	}
		 
	 
	/**
	 * 
	 * Enter this function updates sendate of the the mailing in the queuue to Now
	 * @param int $mailingid - id of the mailing to be updated
	 */
	function updateSenddateToNow($mailingid){
		if(empty($mailingid)) return false;
		
		$db = JFactory::getDBO();
		
		$query = 'UPDATE `#__jnews_queue` SET `send_date`='.time().' WHERE `mailing_id`='.$mailingid;
		$db->setQuery($query);
		$db->query();
		
		return true;
	}
	
	/**
	 * 
	 * we update the value of the block column here for a certain id
	 * @param int $qid id of the queue
	 * @param tinyint $value 1 and 0
	 */
	function updateQueueBlock($qid, $value = 0){
		if(empty($qid)) return '';
		
		$db = JFactory::getDBO();
		
		if(!is_array($qid))
			$query = 'UPDATE `#__jnews_queue` SET `block`='.$value.' WHERE `qid`='.$qid;
		else 
			$query = 'UPDATE `#__jnews_queue` SET `block`='.$value.' WHERE `qid` IN('.implode(',',$qid).')';
		$db->setQuery($query);
		$db->query();
		
		return true;
	}
	
	/**
	* get the mailing id of a queue
	* @param int $qid
	* @return int $mailingId
	 */
	function getQueueMailingId($qid){
		if(empty($qid)) return '';
		
		$db = JFactory::getDBO();
		
		$query = 'SELECT `mailing_id` FROM `#__jnews_queue` WHERE `qid`='.$qid;
		$db->setQuery($query);
		$db->query();
		$mailingId = $db->loadResult();
		
		return $mailingId;
	}

 }