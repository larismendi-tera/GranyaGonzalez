<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_Mailing {

	 public static function getMailings( $listId, $listType, $start = -1, $limit = -1, $emailsearch='', $order='', $showOnlyPublished=true, $viewArchive=false, $setSort=null) {
		$my	= JFactory::getUser();
		$db = JFactory::getDBO();

		$where = array();
		$flag = false;
		$sortList = false;
		$query = 'SELECT * FROM `#__jnews_mailings`';
		if ($listType>0) {
			if ( is_array($listType) ) {
				$where[] = '  `mailing_type` IN (' . jnews::implode( ',', $listType ) . ') ';
			} else {
				$where[] = '  `mailing_type` = ' . $listType . ' ';	
			}
		}

		if ($listId>0) {

				// will filter the mailings shown based on the listid passed on the url
				$query2 = 'SELECT B.`mailing_id` FROM `#__jnews_listmailings` AS B WHERE B.`list_id` = '. $listId;
				$db->setQuery( $query2 );
				$result = $db->loadResultArray();
				if(!empty($result)){
					$result = jnews::implode( ',', $result);
					if ( !empty($result) ) $where[] = ' `id` IN ( '. $result .' )';
					$sortList = true;
				} else return array();
		}

		if ($showOnlyPublished) {
				$where[] = ' `published` =1 ';
				$where[] = ' `visible`=1 ';
		} else {
				$where[] = ' `published`<>-1 ';
		}

		if ( class_exists('jNews_Pro') && $sortList ) {

		} elseif (!jnews::checkPermissions('admin') && !$viewArchive) {
				$where[] = ' `author_id` = '. $my->id;
		}
		
		//added this if statement to filter only all the published and visible mailings in the archive in the fe
		if($viewArchive){// && $my->id <=0
			$where[] = ' `published` = 1';
			$where[] = ' `visible`=1 ';
		}

		if (!empty($emailsearch)) {
				if( is_numeric($emailsearch) ) $where[] = ' `id`='. $emailsearch;
				else $where[] = ' (subject LIKE \'%' . $emailsearch . '%\' OR fromname LIKE \'%' . $emailsearch . '%\') ';
		}

		$query .= (count( $where ) ? " WHERE " . implode( ' AND ', $where ) : "");

		if( !empty($setSort->orderValue) && !empty($setSort->orderDir)) {
			$query .= "ORDER BY `$setSort->orderValue` $setSort->orderDir";
		}else{
			if (empty($order)) $order='idD';
			$query .= jnews::orderBy($order);
		}

		if( $start >= 0 && $limit > 0 ) $db->setQuery($query, $start, $limit);
		else $db->setQuery($query);
		$mailing = $db->loadObjectList();

		if ( !empty($mailing) ) {
			foreach($mailing as $key => $mail){
				$mailing[$key]->htmlcontent = stripslashes($mailing[$key]->htmlcontent);
				$mailing[$key]->subject = stripslashes($mailing[$key]->subject);
				$mailing[$key]->attachments = stripslashes($mailing[$key]->attachments);
				$mailing[$key]->images = stripslashes($mailing[$key]->images);
				$mailing[$key]->textonly = stripslashes($mailing[$key]->textonly);
				$mailing[$key]->send_date = stripslashes($mailing[$key]->send_date);
			}
		}

	 	return $mailing;
	 	
	 }

	 public static function getFirstMailingId($listId) {
		$db = JFactory::getDBO();

		 $list = jNews_Lists::getOneList($listId);
		 if (!empty($list->id) AND $list->list_type == 2) {
			$query = 'SELECT `id` FROM `#__jnews_mailings` WHERE ( `list_id` = '.$listId. ' AND `issue_nb`=1 AND `published`!= -1 ) ';
			$db->setQuery($query);
			$mailingId = $db->loadResult();

		} else {
		 	$mailingId = '';
		 }
		return $mailingId;
	 }


	 public static function getMailingInfoz($mailingId, $column='mailing_type' ) {
		static $result = array();

		$key = $column . $mailingId;
		if ( isset($result[$key]) ) return $result[$key];
		$db = JFactory::getDBO();

		$query = 'SELECT `'.$column.'` FROM `#__jnews_mailings` WHERE `id` = '.$mailingId;
		$db->setQuery($query);
		$result[$key] = $db->loadResult();

		return $result[$key];
	 }


	 public static function getOneMailingSmart( $mailingID, $issue_nb ) {
		$db = JFactory::getDBO();

		if ($mailingID>0) {
			$mailing = '';

			//The value $mailingID is the mailing_id now
    		$query = 'SELECT * FROM `#__jnews_mailings` WHERE `id` = ' . $mailingID;
			$query .= ' AND `published` != -1';
			$db->setQuery($query);
			$mailing = $db->loadObject();

			$mailing->htmlcontent = stripslashes($mailing->htmlcontent);
			$mailing->subject = stripslashes($mailing->subject);
			$mailing->attachments = stripslashes($mailing->attachments);
			$mailing->images = stripslashes($mailing->images);
			$mailing->textonly = stripslashes($mailing->textonly);
			$mailing->send_date = stripslashes($mailing->send_date);
			if (!empty($mailing->attachments)) {
				$mailing->attachments = explode("\n", $mailing->attachments);
				array_pop($mailing->attachments);
			}
			if (!empty($mailing->images)) {
				$mailing->images = explode("\n", $mailing->images);
				array_pop($mailing->images);
			}
	 		return $mailing;
		}
		else {
			$mailing ='';
		}
	 }


	 public static function getOneMailing($list, $mailingId, $issue_nb, &$new, $send = false, $isEdit=false ) {
		$my	= JFactory::getUser();
		$db = JFactory::getDBO();

		if ($mailingId>0) {
			$query = 'SELECT * FROM `#__jnews_mailings` WHERE `id` = ' . $mailingId .' LIMIT 1';
			$db->setQuery($query);
			$mailing = $db->loadObject();

		} else {
			$mailing = null;
		}

		if( empty($mailing) ) {
			$mailing = new stdClass;
			$mailing->id = $mailingId;
			$mailing->htmlcontent = '';
			$mailing->subject = '';
			$mailing->attachments = '';
			$mailing->images = '';
			$mailing->textonly = '';
			$mailing->published = '0';
			$mailing->visible = 1;
			$mailing->html = ( isset($list->html) ) ? $list->html : 0;
			if ($issue_nb > 1 ) $mailing->delay = 1440; else $mailing->delay = 0;
			$mailing->issue_nb = $issue_nb;
			$mailing->author_id = $my->id;
			$new = true;
			if (!empty($list)) {
				$mailing->mailing_type = ( isset( $list->list_type ) ) ? $list->list_type : 0;
				$mailing->fromname = ( isset( $list->sendername ) ) ? $list->sendername : '';
				$mailing->fromemail = ( isset( $list->senderemail ) ) ? $list->senderemail : '';
				$mailing->frombounce = ( isset( $list->bounceadres ) ) ? $list->bounceadres : '';
				$mailing->send_date = ($GLOBALS[JNEWS.'listype2'] == 1) ? date( 'Y-m-d H:i:s', jnews::getNow( 0, true ) )  : '0';
				$mailing->htmlcontent = ( isset( $list->layout ) ) ? $list->layout : '';
			} else {
				$mailing->fromname = '';
				$mailing->fromemail = '';
				$mailing->frombounce = '';
				$mailing->mailing_type = 0;
				$mailing->send_date = '';
			}
		} else {
			$new = false;
		}

		$mailing->htmlcontent = stripslashes($mailing->htmlcontent);
		$mailing->subject = stripslashes($mailing->subject);
		$mailing->attachments = stripslashes($mailing->attachments);
		$mailing->images = stripslashes($mailing->images);
		$mailing->textonly = stripslashes($mailing->textonly);

		if (!empty($mailing->attachments)) {
			$mailing->attachments = explode("\n", $mailing->attachments);
			array_pop($mailing->attachments);
		} else {
			$mailing->attachments = array();
		}
		if (!empty($mailing->images)) {
			$mailing->images = explode("\n", $mailing->images);
		} else {
			$mailing->images = array();
		}

		$mailerC = new jNews_ProcessMail();
		$queueInfo = new stdClass;
		$queueInfo->mailingid = $mailing->id;
		$queueInfo->listid = @$list->id;
		//we comment this line we should not convert tags in copying
		if(JRequest::getVar('task') != 'copy')
			$mailerC->getContent($mailing->images, $mailing->htmlcontent, $mailing->textonly,$mailing->subject, $send, $isEdit, $queueInfo ); //new $mailing->subject
		return $mailing;
	 }


	 public static function getQuickMailingIssue($listId, $issueNb, &$total) {
		$db = JFactory::getDBO();
		$mailing= null;
		$query = 'SELECT * FROM `#__jnews_mailings` WHERE `list_id` = ' . $listId;
		$query .= ' AND `issue_nb` = ' . $issueNb;
		$query .= ' AND `published` != -1';
		$db->setQuery($query);
		$mailing = $db->loadObject();

		if (empty($mailing)) {
			return false;
		} else {
			$mailing->htmlcontent = stripslashes($mailing->htmlcontent);
			$mailing->subject = stripslashes($mailing->subject);
			$mailing->attachments = stripslashes($mailing->attachments);
			$mailing->images = stripslashes($mailing->images);
			$mailing->textonly = stripslashes($mailing->textonly);
			$mailing->send_date = stripslashes($mailing->send_date);

			return $mailing;
		}
	 }


	 public static function getMailingView( $mailingId, $listId=0 ) {
		$archivemailing = new stdClass;
		if ($mailingId != 0) {
			if($listId > 0) {
				$list = jNews_Lists::getOneList($listId);
				$archivemailing = jNews_Mailing::getOneMailing($list, $mailingId, 0, $new);
			}else{
				$archivemailing = jNews_Mailing::getOneMailing( 0, $mailingId, 0, $new);
			}


			$mailingtype = JRequest::getInt('listype');

			if($mailingtype=='7') {
				$db = JFactory::getDBO();
				$query = 'SELECT `delay` FROM `#__jnews_queue` WHERE `type` = 7 AND `mailing_id` = '.$archivemailing->id;
				$db->setQuery($query);
				$snDelay = $db->loadResult();

				if(!empty($snDelay)){
					$myTime = jnews::getNow();
					$computedDate = jNews_Autonews::computeSmartDate( $archivemailing->delay_min, $snDelay, $myTime );
					//We use the start date to previous the first one
					$computedDate->lastDate = $archivemailing->start_date;
					$newMailing = jNews_Autonews::loadSmartContent( $archivemailing, $computedDate->lastDate, $snDelay );
					$archivemailing = ( !empty($newMailing) ) ? $newMailing : $archivemailing;
				}

			}

			if ($new) {
				return '';
			} else {
				$mainframe = JFactory::getApplication();
				JPluginHelper::importPlugin( 'jnews' );

				$bot_results=$mainframe->triggerEvent('jnewsbot_transformall', array( &$archivemailing->htmlcontent, &$archivemailing->textonly, &$archivemailing->subject) );
				$myReceiver = JFactory::getUser();
				
				$db = JFactory::getDBO();
				$query = "SELECT A.`id`, A.`receive_html` ";
				
				//we retreive the extra columns info of the user
				if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
					
					if($GLOBALS[JNEWS.'show_column1'])
						$query .= ', A.`column1`';
					if($GLOBALS[JNEWS.'show_column2'])
						$query .= ',A.`column2`';
					if($GLOBALS[JNEWS.'show_column3'])
						$query .= ',A.`column3`';
					if($GLOBALS[JNEWS.'show_column4'])
						$query .= ',A.`column4`';
					if($GLOBALS[JNEWS.'show_column5'])
						$query .= ',A.`column5`';
						
				}	
			
				$query .= " FROM `#__jnews_subscribers` AS A WHERE A.`user_id`=". $myReceiver->id ;
					
				$db->setQuery($query);
				$myReceiverColumns = $db->loadObject();

				if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
					if($GLOBALS[JNEWS.'show_column1'])
						$myReceiver->column1 = $myReceiverColumns->column1;
					if($GLOBALS[JNEWS.'show_column2'])
						$myReceiver->column2 = $myReceiverColumns->column2;
					if($GLOBALS[JNEWS.'show_column3'])
						$myReceiver->column3 = $myReceiverColumns->column3;
					if($GLOBALS[JNEWS.'show_column4'])
						$myReceiver->column4 = $myReceiverColumns->column4;
					if($GLOBALS[JNEWS.'show_column5'])
						$myReceiver->column5 = $myReceiverColumns->column5;
				}
				
				$myReceiver->receive_html = ( !empty($myReceiverColumns->id) ) ? $myReceiverColumns->receive_html : 1;
				
				$oneQueue = new stdClass;
				$oneQueue->id = $mailingId;
				$archivemailing->subject = jNews_ProcessMail::replaceTags( $archivemailing->subject, $myReceiver, $oneQueue, false, null, false );
				$archivemailing->htmlcontent = jNews_ProcessMail::replaceTags( $archivemailing->htmlcontent, $myReceiver, $oneQueue, true );
				
				preg_match_all('/<img([^>]*)src="([^">]+)"([^>]*)>/i', $archivemailing->htmlcontent, $images, PREG_SET_ORDER);

				if( version_compare(JVERSION,'1.6.0','<') ){ //j15
					$imgfolders = '/images/stories';
				}else{ //j16
					$imgfolders = '/images/sampledata';
				}

				foreach($images as $image) {
					$image[2] = preg_replace('/(\.\.\/)+/', '/', $image[2]);

					$image[2] = str_replace(array(JNEWS_JPATH_LIVE,JNEWS_JPATH_LIVE_NO_HTTPS), '', $image[2]);

					$image[2] = preg_replace('/^\//', '', $image[2]);
					if (stristr($image[2], 'http://') === false) {
						// remove unneeded directory information
						if (stristr($image[2], $imgfolders) !== false) {
							$image[2] = '/' . stristr($image[2], $imgfolders);
						} // end if
						$replacement = '<img ' . $image[1] . 'src="' . JNEWS_JPATH_LIVE_NO_HTTPS . $image[2] . '"' . $image[3] . '>';
					} else {
						$replacement = '<img ' . $image[1] . 'src="' . $image[2] . '"' . $image[3] . '>';
					} // end if
				}

			}
		}
		return $archivemailing;
	 }


/** public static function that will count the number of mails available
	 * @param int $listId - list / mailing id
	 * @param int $listType - list / mailing Type
	 * @return int $counts
	*/
	public static function countMailings($listId, $listType=0){
		$db = JFactory::getDBO();

		$query = '';
		if($listId>0){
			$query = "SELECT MAX(issue_nb) FROM #__jnews_mailings";
			$query .= " WHERE `published` != -1 AND `list_id` = 0";
		}elseif($listType<>''){
			$query = "SELECT COUNT(*) FROM #__jnews_mailings";
			$query .= " WHERE `published` != -1 AND `mailing_type` =".$listType ;
		}

		$counts = 0;
		if(!empty($query)){
			$db->setQuery($query);
			$counts = $db->loadResult();
		}
		return $counts;
   	}


	 public static function showMailings($task, $action, $listId, $listType, $message, $showHeader, $title, $setLimit=null ) {

		$start = JRequest::getVar('start', '0' );
		$emailsearch = JRequest::getVar( 'emailsearch', '', '', 'STRING' );$emailsearch = htmlentities( $emailsearch, ENT_COMPAT );
		$dropList = JRequest::getVar('droplist', 'ZZZZ' );

		 $limit = -1;
		 if ($dropList=='ZZZZ') $dropList = $listType .'-'. $listId;
 	     $total = 0;

		$dropListValues = explode ('-', $dropList);
		$listType = $dropListValues[0];
		$listId = $dropListValues[1];
		$listTypeM = $listType;

		 $orddef = 'idD';
		 if($listType == 2){
		 	$orddef = 'idA';
		 }
		$order = JRequest::getVar('order', $orddef );

		if ($listId==0) {
	      $lists['title'] = jNews_ListType::chooseType($task, $action, $listType , 'titles', '', $title);
	   } else {
			$listing = jNews_Lists::getLists($listId, 0, 1, '', false, false, true);

			$lists['title'] =  $title."<span style='color: rgb(51, 51, 51);'>".$listing[0]->list_name."</span>";
	   }

	   	$app = JFactory::getApplication();
		$setSort = new stdClass;

		if($listType=='2'){ //autoresponder
			$key= JNEWS_OPTION . '.mailing2';
			$column='id';
			$direction='desc';
		}elseif($listType=='7'){ //smartnewsletter
			$key= JNEWS_OPTION . '.mailing7';
			$column='id';
			$direction='desc';
		}else{ //newsletter
			$key= JNEWS_OPTION . '.mailing1';
			$column='id';
			$direction='desc';
		}

		$setSort->orderValue = $app->getUserStateFromRequest( $key.'filter_order', 'filter_order', $column,'cmd' );
		$setSort->orderDir	= $app->getUserStateFromRequest( $key.'filter_order_Dir', 'filter_order_Dir', $direction,'word' );

		$dropDownList =  jNews_ListType::getMailingDropList($listId, $listType, $order);
		if (!empty($dropDownList) ) $lists['droplist'] = JHTML::_('select.genericlist', $dropDownList, 'droplist', 'class="inputbox" size="1" onchange="document.jNewsFilterForm.submit();"', 'id', 'name', $dropList );

		$mailings = jNews_Mailing::getMailings($listId, $listTypeM, $setLimit->start,  $setLimit->end, $emailsearch, $order, false, false,$setSort);

		//recheck limit total [pagination]
		if( isset($setLimit->total) && !empty($emailsearch) ){
			$mails = jNews_Mailing::getMailings($listId, $listTypeM, 0,  0, $emailsearch, $order, false, false);
			$setLimit->total = ( !empty($mails) ) ? count( $mails ) : $setLimit->total;
		}

	    $forms['main'] = "<form action='index.php' method='post' name='adminForm'> \n\r" ;
	    $forms['select'] = "<form action='index.php' method='post' name='jNewsFilterForm'> \n\r" ;

		$show = jNews_ListType::showType($listType , 'showMailings');

		if ($showHeader) jNews_Mailing::_header($task, $action, $listType , $message, '' );
		backHTML::formStart('show_mailing' , 0 ,'' );
		jNews_MailingsHTML::showMailingList($mailings, $lists, $setLimit->start, $setLimit->end, $setLimit->total, $emailsearch, $listId, $listType, $forms, $show, $action, $setLimit,$setSort );

		$go[] = jnews::makeObj('act', 'mailing');
		$go[] = jnews::makeObj('filter_order', $setSort->orderValue);
		$go[] = jnews::makeObj('filter_order_Dir', $setSort->orderDir);

		backHTML::formEnd($go);

	 }


	 public static function delete($d) {
		$db = JFactory::getDBO();

		$xf = new jNews_Config();

		$query = 'DELETE FROM `#__jnews_stats_global` WHERE  `mailing_id` = \'' . $d['mailing']->id . '\'';
		$db->setQuery($query);
		$db->query();
		$query = 'DELETE FROM `#__jnews_stats_details` WHERE  `mailing_id` = \'' . $d['mailing']->id . '\'';
		$db->setQuery($query);
		$db->query();
		$query = 'DELETE FROM `#__jnews_queue` WHERE `mailing_id` = \'' . $d['mailing']->id . '\'';
		$db->setQuery($query);
		$db->query();

		$query = 'DELETE FROM `#__jnews_mailings` ' ;
		$query .= ' WHERE `id` = \'' . $d['mailing']->id . '\' ';
		$db->setQuery($query);
		$db->query();

		$query = 'DELETE FROM `#__jnews_listmailings` ' ;
		$query .= ' WHERE `mailing_id` = \'' . $d['mailing']->id . '\' ';
		$db->setQuery($query);
		$db->query();

			$xf->plus('act_totalmailing0', -1);
			$xf->plus('act_totalmailing'.$d['mailing']->mailing_type, -1);
        	return true;
	 }

	 public static function updateOneMailing($mailingId, $published) {
		$db = JFactory::getDBO();
		$query = 'UPDATE `#__jnews_mailings` SET ' ;
		$query .= ' `published` = \'' . $published . '\' ' ;
		$query .= ' WHERE `id` = \'' . $mailingId . '\' ';
		$db->setQuery($query);
		$db->query();
		return true;
	}

	public static function updateMailingData($mailing) {
		$db = JFactory::getDBO();

		$xf = new jNews_Config();
		$query = "UPDATE `#__jnews_mailings` SET " .
				"`send_date` = '$mailing->send_date', " .
				"`subject` = '".addslashes($mailing->subject)."', " .
				"`htmlcontent` = '".addslashes($mailing->htmlcontent)."', " .
				"`textonly` = '".addslashes($mailing->textonly)."', ".
				"`published` = $mailing->published " .
				"\n   ".
			" WHERE `id` = ". $mailing->id;
		$db->setQuery($query);
		$db->query();

        return true;

	 }


	 public static function publishMailing($mailingId) {

		$d['errStatus'] = jNews_Mailing::updateOneMailing($mailingId, '1' );
		return $d['errStatus'];
 }


 	public static function unpublishMailing($mailingId) {
		$d['errStatus'] = jNews_Mailing::updateOneMailing($mailingId, '0' );
		return $d['errStatus'];
 	}

 	
	public static function copyMailing($mailingId) {
		$new=false;
		$mailing = jNews_Mailing::getOneMailing('', $mailingId, '', $new);

		$copyMailing = $mailing;
		$mailingName = _JNEWS_COPY_SUBJECT. ' ' . $copyMailing->subject;
		$copyList->published = 0;
		$copyMailing->subject = $mailingName;
		$copyMailing->createdate = time();
		$copyMailing->published = 0;
		$newmailingid = jNews_Mailing::insertMailingData($copyMailing);

		//we have an auto-responder we need to link it to the right list	
		if ( !empty($newmailingid) && $mailing->mailing_type == 2 ) {
			$db = JFactory::getDBO();
			$query = 'SELECT `list_id` FROM `#__jnews_listmailings` WHERE `mailing_id`= '. $mailingId;
			$db->setQuery( $query );
			$listID = $db->loadResult();
			$query = 'INSERT IGNORE INTO `#__jnews_listmailings` (`list_id`,`mailing_id`) VALUES ('. $listID.','. $newmailingid .')';
			$db->setQuery( $query );
			$db->query();
		}
		
		return ( empty($newmailingid)  ? false : true );
		
	}


	public static function uploadFiles( $dest_dir=null ) {

		require_once( JNEWSPATH_CLASS . 'lib.upload.php' );
		$upload = new jNews_Upload();
		$files = $upload->getFiles();

		foreach ($files as $file) {
			if ($file->isValid()) {
				$file->setName('real');
				if( empty($dest_dir) ) $dest_dir = JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'upload_url'];
				$dest_name = $file->moveTo($dest_dir);
				if ($file->isError()) {
					echo $dest_name->getMessage();
				} else {
					$xfiles[] = $dest_name;
				}
			} elseif ($file->isError()) {
				echo $file->errorMsg() . "\n";
			}
		}

		return $xfiles;
	}


/** public static function that will save mailing
	 * @param int $mailingId - mailing id
	 * @param int $listId - list id
	*/
	public static function saveMailing( &$mailingId, $listId ) {
		$total = 0;

		$list = jNews_Lists::getOneList( $listId );
//		$allow_html = jNews_Tools::allow_html();

		$xf = new jNews_Config();

		$db = JFactory::getDBO();

		// check list type
		$mailingtype = JRequest::getVar('listype', 0);

		if( empty($mailingtype) ){
			$mySess = JFactory::getSession();
			$listType = $mySess->set('listype', '', 'LType');
		}else{
			$listType = $mailingtype;
		}

		$senddate = JRequest::getVar('senddate', 0 );
		$task= JRequest::getVar('task', '');
		if ( $task == 'saveSend') {
			$senddate = time();
		}
		
		$subject = JRequest::getVar('subject', '', 'request','string' );
//		$content = JRequest::getVar('content', '', 'request','string', JREQUEST_ALLOWRAW);
		$content = JRequest::getVar('jnewsContent', '', 'request','string', JREQUEST_ALLOWRAW);
		$alt_content = JRequest::getVar('altbody', '', JREQUEST_ALLOWRAW );
		$published = JRequest::getVar('published', 0);
		$visible = JRequest::getVar('visible', 1);
		$html=JRequest::getVar('html_mailings', 1);
		$new_list = JRequest::getVar('new_list', 0);
		$fromname = JRequest::getVar('fromname', '');
		$fromemail = JRequest::getVar('fromemail', '');
		$frombounce = JRequest::getVar('frombounce', '');
		$userid = JRequest::getVar('userid', 0);
		$delay = JRequest::getVar('delay', 0);
		$acc_level = JRequest::getVar('acc_level', $list->acc_id);
		$issue_nb = JRequest::getVar('issue_nb', 1);
		if($mailingtype==7){
			$issue_nb=1;
		}
		$attachments = JRequest::getVar('attachments', '');
		$follow_up = JRequest::getVar('follow_up', 0);
		$cat_id = JRequest::getVar('cat_id','');
		$delay_max = JRequest::getVar('delay_max', 7);
		$delay_min = JRequest::getVar('delay_min', 0);
		$notify_id = JRequest::getVar('notify_id', 0);
		$next_date = JRequest::getVar('next_date', 0);
		$start_date = JRequest::getVar('start_date', 0);
		$smart_date = JRequest::getVar('smart_date', 0);
		
		$listIdA = JRequest::getVar( 'aca_mailing_addto', array() );
		
		//clean up $cat_id
		if ( !empty($cat_id) ) {
			$cat_idA = explode( ',', $cat_id );
			if ( count($cat_idA) > 1 ) {
				//remove the all category
				$newcat_idA=array();
				foreach( $cat_idA as $oneCat_id ) if ( $oneCat_id != '0:0' ) $newcat_idA[] = $oneCat_id;
				$cat_id = trim( implode( ',' , $newcat_idA ), ',' );
			}
		}
		
		$createdate = time();
		//get the default template
		$template = jNews_Templates::loadOneTemplate( '*',  '', 'template_id', 'DESC', true );
		$template_id = JRequest::getVar( 'template_id', $template->template_id );

		// change start_date type from string to int
		if( !empty($senddate) AND $task != 'saveSend'){
			$senddate = strtotime( $senddate );
			$senddate = $senddate - jnews::calculateOffset( JNEWS_TIME_OFFSET ) + date('Z');
			if( $senddate <= time() ) $senddate = 0;
		}elseif( !empty($senddate) && $task == 'saveSend' ) {//not used any more
			$senddate = $senddate;
		}else {
			$senddate = 0;
		}


		if( !empty($start_date) ) {
			$start_date = strtotime( $start_date );
			$start_date = $start_date - jnews::calculateOffset( JNEWS_TIME_OFFSET ) + date('Z');
		}
		
		if( !empty($next_date) ) {
			$next_date = strtotime( $next_date );
			$next_date = $next_date - jnews::calculateOffset( JNEWS_TIME_OFFSET ) + date('Z');
		}

		if( !empty($create_date) ) {
			$create_date = strtotime( $create_date );
			$create_date = $create_date - jnews::calculateOffset( JNEWS_TIME_OFFSET ) + date('Z');
		}

		$delay = $delay*24*60;

		$attach = '';
	   	if(!empty($attachments)){
			foreach ($attachments as $attachment){
				$attach .= $attachment . "\n";
			} 
		}

	    if(!empty($_FILES['file_0']['name']) ){
			$otherAttachs = jNews_Mailing::uploadFiles();
			if (!empty($otherAttachs)){
				foreach ($otherAttachs as $otherAttach){
					$attach .= '/'.$otherAttach . "\n";
				} 
			}
		}

		$images = JRequest::getVar('images', '');

	 	if (empty($alt_content)) $alt_content=jNews_ProcessMail::htmlToText($content);

		if ( $listType ==2 ) {// auto-repsonders
			$senddate = time() + ($delay*60);
		} else {
			if ( $senddate > time() ) {
				$published = 2;
			}
		}

		if ( $GLOBALS[JNEWS.'show_subscriptionlink'] ) {
			if (substr_count($content, '{tag:subscriptions}')<1) $content .= "<br/> {tag:subscriptions} <br/>";
			if (strlen($alt_content) > 10 AND substr_count($alt_content, '{tag:subscriptions}')<1) $alt_content .= "\r\n {tag:subscriptions} \r\n";
		}
		
		if ( $GLOBALS[JNEWS.'show_unsubscribelink'] ) {
			if (substr_count($content, '{tag:unsubscribe}')<1) $content .= "<br/> {tag:unsubscribe} <br/>";
			if (strlen($alt_content) > 10 AND substr_count($alt_content, '{tag:unsubscribe}')<1) $alt_content .= "\r\n {tag:unsubscribe}\r\n";
		}

		// save to cross table
		if( !empty( $listIdA ) && !empty( $listIdA ) ){
			$myLIst2Add = array();
			foreach( $listIdA as $listid =>$values ){
				if( $values == 1 ) $myLIst2Add[$listid] = true;
			}
		} else {
			// we dont have any list selected
			return false;
		}
		
		//in saving in case there are still old tag format we will replace with new
		//we replce the oldtags to new tags
		$mailing = new stdClass;
		$mailing->htmlcontent = jNews_Mailing::replaceOldTagsToNew($content);
		$mailing->textonly = jNews_Mailing::replaceOldTagsToNew($alt_content);

		if ( $new_list != 0 ) {	//NEW MAILING

			//information to be inserted
			$mailing->list_id= $listId;
			$mailing->mailing_type= $mailingtype;
			$mailing->senddate = $senddate;
			$mailing->subject = $subject;
			$mailing->htmlcontent = $content;
			$mailing->textonly = $alt_content;
			$mailing->attachments = $attach;
			$mailing->images = $images;
			$mailing->published = $published;
			$mailing->visible = $visible;
			$mailing->fromname = $fromname;
			$mailing->fromemail = $fromemail;
			$mailing->frombounce = $frombounce;
			$mailing->html = $html;
			$mailing->delay = $delay;
			$mailing->issue_nb = $issue_nb;
			$mailing->acc_level = $acc_level;
			$mailing->createdate = $createdate;
			$mailing->follow_up = $follow_up;
			if ( empty($mailing->follow_up) ) $mailing->follow_up=0;
			$mailing->cat_id = $cat_id;
			$mailing->delay_max = $delay_max;
			$mailing->delay_min = $delay_min;
			$mailing->notify_id = $notify_id;
			$mailing->next_date = $next_date;
			$mailing->start_date = $start_date;
			$mailing->smart_date = $smart_date;			
			$mailing->mailing_type = $mailingtype;
			$mailing->list_id = $listId;
			$mailing->author_id = $userid;
			$mailing->template_id = $template_id;

			//insert the mailing data
			$mailingId = jNews_Mailing::insertMailingData($mailing);

			$db->setQuery( 'SELECT LAST_INSERT_ID()' );
			$mailingId = $db->loadResult();
			$xf->plus('totalmailing0', 1);
			$xf->plus('act_totalmailing0', 1);
			$xf->plus('totalmailing'.$listType, 1);
			$xf->plus('act_totalmailing'.$listType, 1);

			if ( $listType==7 ) jNews_Queue::addSNinQueue( $mailingId, $delay_min, $start_date, $mailing->next_date ); //modified for smartnewsletter added next_date
			jNews_Mailing::saveMailingList( $mailingId, array_keys($myLIst2Add), $senddate, $listType, $published, (bool)$new_list );

		} else {//update mailing

			$query = 'SELECT `send_date`,`published`,`delay` FROM `#__jnews_mailings` WHERE `id` ='.$mailingId;
			$db->setQuery($query);
			$mailingInfoO = $db->loadObject();

			$queueSendDateUpdate = ( $mailingInfoO->send_date != $senddate ) ? true : false;
			$queuePublishUpdate = ( $mailingInfoO->published != $published ) ? true : false;
			$queueDelayUpdate = ( $mailingInfoO->delay != $delay ) ? $delay - $mailingInfoO->delay : 0;


			$query = "UPDATE `#__jnews_mailings` SET " .
			" `subject` = '".addslashes($subject)."', " .
			" `htmlcontent` = '".addslashes($content)."', " .
			" `textonly` = '".addslashes($alt_content)."', " .
			" `attachments` = '".$attach."', " .
			" `images` = '".$images."', " .
			" `published` = '".$published."', " .
			" `html` = ".$html." , " .
			" `visible` = ".$visible." , " .
			" `fromname` = '".$fromname."', " .
			" `fromemail` = '".$fromemail."', " .
			" `frombounce` = '".$frombounce."', " .
			" `author_id` =  '".$userid."' , " .
			" `delay` = ". $delay .", " .
			" `acc_level` = '". $acc_level ."', " .
			" `send_date` = '". $senddate ."', " .
			" `follow_up` = ". $follow_up .", " .
			" `cat_id` = '". $cat_id ."', " .
			" `delay_max` = ". (int)$delay_max .", " .
			" `delay_min` = ". (int)$delay_min .", " .
			" `notify_id` = ". (int)$notify_id .", " .
			" `next_date` = ". (int)$next_date .", " .
			" `template_id` = ". (int)$template_id .", " .
			" `start_date` = ". (int)$start_date .", " .
			" `smart_date` = ". (int)$smart_date ." " .
			" WHERE `id` =". $mailingId;

			$db->setQuery($query);
			$db->query();

			jNews_Mailing::saveMailingList( $mailingId, array_keys($myLIst2Add), $senddate, $listType, $published, (bool)$new_list, $queueSendDateUpdate, $queuePublishUpdate, $queueDelayUpdate );

		}

		//if we have an auto-responder we need to make sure the new auto-responders get added to all current subscribed users
		if ( $published && $mailingtype==2 ) {
			//add the this auto-responders to all users
			
			//select all user subscribe to this autoresponder
			$query = "SELECT L.`subscriber_id`, L.`subdate`+".$delay.", ".$mailingId.", 2, 1  FROM `#__jnews_listssubscribers` AS L  ";
			$query .= " WHERE L.`list_id` =" . $listId ;
			$query2 = "INSERT IGNORE `#__jnews_queue` ( `subscriber_id`, `send_date`, `mailing_id`, `type`, `priority` ) " . $query;
			$db->setQuery($query2);
			$db->query();
			
		}
		
		
		return true;

	 }

	 
	 public static function sendTestEmail($mailingId, $listId ){

		$list = new stdClass;
		$new = null;
		$mailing = jNews_Mailing::getOneMailing( $list, $mailingId, '', $new );

		if ( $listId>0 ) {
			$list = jNews_Lists::getOneList( $listId );
		} else {
			$list = jNews_Lists::getOneList( $mailing->list_id );
		}

		$previewemailaddress = JRequest::getVar('emailaddress', '' );
		$previewname = JRequest::getVar('name', '' );
		$previewhtml = JRequest::getVar('html', '0' );
		$receivers = new stdClass;

		$my	= JFactory::getUser();

		$d['email'] = trim($previewemailaddress);
		$infos = jNews_Subscribers::getSubscriberIdFromEmail($d);

		if(empty($infos['subscriberId'])){
			$d['email'] = $my->email;
			$infos = jNews_Subscribers::getSubscriberIdFromEmail($d);
		}

		if(!empty($infos['subscriberId'])) $receivers = jNews_Subscribers::getSubscribersFromId(array($infos['subscriberId']));
		else $receivers->id = 0;

		$receivers->email = $previewemailaddress;
		$receivers->name = $previewname;
		$receivers->receive_html = $previewhtml;

		$mailerC = new jNews_ProcessMail();
		return $mailerC->send( $mailing, $receivers );

	 }

	 

	 public static function insertMailing($mailing){

		$db = JFactory::getDBO();

		if ( jNews_Mailing::insertMailingData($mailing) ) {

			$query = 'SELECT `id` FROM `#__jnews_mailings` WHERE ';
			$query .= ' `list_id` = ' . $mailing->list_id . ' AND `issue_nb` = \'' . $mailing->issue_nb . '\'';
			$query .= ' AND `author_id` = ' . $mailing->author_id . ' AND `mailing_type` = \'' . $mailing->mailing_type . '\'';
			$query .= ' AND `published` != -1';

			$db->setQuery($query);
			$mailingId = $db->loadResult();

			return $mailingId;
		} else {
			return '';
		}
	 }


	 public static function insertMailingData($mailing) {
		$db = JFactory::getDBO();

		if($mailing->mailing_type==7){
			//modified for the fix on smartnewsletter
			$mailing->senddate = (!empty($mailing->send_date)) ? $mailing->send_date : 0;

			if(empty($mailing->notify_id)) $mailing->notify_id = 0;
			if(empty($mailing->delay_max)) $mailing->delay_max = 1;
			if(empty($mailing->smart_date)) $mailing->smart_date = 0;
			if(empty($mailing->cat_id)) $mailing->cat_id = '0:0';
			//if(empty($mailing->attachments)) $mailing->attachments ='';
			//if(empty($mailing->images)) $mailing->images ='';
		}

		if ( empty($mailing->senddate) ) $mailing->senddate = 0;
		if ( empty($mailing->list_id) ) $mailing->list_id = 0;
		
		$xf = new jNews_Config();
		$query = "INSERT INTO `#__jnews_mailings` ( `list_id`,`mailing_type`,`template_id`,`send_date`, `subject`, `htmlcontent`, `textonly`,".
				"\n `attachments`, `images`, `published`, `html`, `visible`, `fromname`, `fromemail`, `frombounce`, ".
				"\n `author_id`, `delay`,`follow_up`,`cat_id`,`delay_min`,`delay_max`,`notify_id`,`next_date`,`start_date`,`smart_date`,`issue_nb`,`acc_level`,`createdate`) ".
				"\n VALUES (".
				"$mailing->list_id, ".
				"$mailing->mailing_type, ".
				"$mailing->template_id, ".
				"'$mailing->senddate', ".
				"'".addslashes($mailing->subject)."', ".
				"'".addslashes($mailing->htmlcontent)."', ".
				"'".addslashes($mailing->textonly)."', ".
				"'$mailing->attachments', ".
				"'$mailing->images', ".
				"$mailing->published, ".
				"$mailing->html, ".
				"$mailing->visible, ".
				"'$mailing->fromname', ".
				"'$mailing->fromemail', ".
				"'$mailing->frombounce', ".
				"'$mailing->author_id', ".
				"$mailing->delay, ".
				"$mailing->follow_up, ".
				"'$mailing->cat_id', ".
				"$mailing->delay_min, ".
				"$mailing->delay_max, ".
				"$mailing->notify_id, ".
				"$mailing->next_date, ".
				"$mailing->start_date, ".
				"$mailing->smart_date, ".
				"$mailing->issue_nb, ".
				"'$mailing->acc_level', ".
				"$mailing->createdate ) ";
			$db->setQuery($query);
			$db->query();

			$xf->plus('totalmailing0', 1);
			$xf->plus('act_totalmailing0', 1);
			$xf->plus('totalmailing'.$mailing->mailing_type, 1);
			$xf->plus('act_totalmailing'.$mailing->mailing_type, 1);

			$mailingId = jNews_Mailing::getLastMailingId();

			jNews_Mailing::insertStatsGlobal($mailingId);

            return $mailingId;
	 }

	 public static function getLastMailingId(){
		$db = JFactory::getDBO();

	 	$q = "SELECT LAST_INSERT_ID()";
		$db->setQuery($q);
		$mailingId = $db->loadResult();

		return $mailingId;
	 }

	 public static function insertStatsGlobal( $mailingId ) {
		$db = JFactory::getDBO();

		$query = 'SELECT COUNT(mailing_id) FROM `#__jnews_stats_global` WHERE `mailing_id` = \'' . (int) $mailingId . '\'';
		$db->setQuery($query);
		$nb = $db->loadResult();
		 $delay=0;
		if ($nb < 1) {
			$query = 'INSERT IGNORE INTO `#__jnews_stats_global` ( `mailing_id`, `sentdate`, `html_sent`, `text_sent`) VALUES ('
				.'\''. (int) $mailingId . '\', \''
				. time() . '\', '
				. ' 0 , '
				.  ' 0 )' ;
			$db->setQuery($query);
			$db->query();
		}
		return true;
	 }

	public static function _header($task, $action, $listType , $message, $screen='') {
		if ($screen == 'edit') jNews_ListType::chooseType($task, $action, $listType , 'mailing_edit_header', $message,'');
		else jNews_ListType::chooseType($task, $action, $listType , 'mailing_header', $message,'');
    	}



/** public static function that will save mailing id and list id to its cross table jnews_listmailings
	 * @param int $mailingId - mailing id
	 * @param int $listId - list id
	*/
	public static function saveMailingList( $mailingId, $uPdatedlistIdA, $send_date, $mailing_type, $published, $newInsert=false, $queueSendDateUpdate=false, $queuePublishUpdate=false, $queueDelayUpdate=0 ) {
		$db = JFactory::getDBO();
		if( empty($mailingId) || empty($uPdatedlistIdA) ) return false;

		if ( !$newInsert ) {
			$query = 'DELETE FROM `#__jnews_listmailings` WHERE `list_id` NOT IN ('.implode(',',$uPdatedlistIdA).') AND `mailing_id`='.$mailingId ;
			$db->setQuery( $query );
			$db->query();
			$query = 'SELECT `list_id` FROM `#__jnews_listmailings` WHERE `mailing_id`='.$mailingId ;
			$db->setQuery($query);
			$existingListIDA = $db->loadResultArray();
			$insertListIDA = array_diff( $uPdatedlistIdA, $existingListIDA );
		} else {
			$insertListIDA = $uPdatedlistIdA;
		}
		if (!empty($insertListIDA) ) {
			$query = 'INSERT IGNORE INTO `#__jnews_listmailings` (`list_id`,`mailing_id`) VALUES ('.implode( ','.$mailingId.'),(', $insertListIDA) .','.$mailingId.')';
			$db->setQuery( $query );
			$db->query();
		}

	}


	 public static function getSendDate($mailingId) {
		static $resultA=array();

		if ( isset($resultA[$mailingId]) ) return $resultA[$mailingId];
		$db = JFactory::getDBO();

		$query = 'SELECT `send_date` FROM `#__jnews_mailings` WHERE `id` = '.$mailingId;
		$db->setQuery($query);
		$resultA[$mailingId] = $db->loadResult();

		return $resultA[$mailingId];
	}

    	/* public static function that will remove the mailing and list entry from its cross table jnews_listmailings
    	 * @param int $mailingId - mailing id
    	 * @param int $listId - list id
    	*/
	public static function removeMailingList( $mailingId, $listId )
    	{
    		if( empty($mailingId) || empty( $listId ) )
    		{
    			return false;
    		}

    		$query = 'DELETE FROM `#__jnews_listmailings` WHERE `mailing_id`='. $mailingId .' AND `list_id`='. $listId;
    		$db = JFactory::getDBO();
    		$db->setQuery( $query );
    		$db->query();

    		return true;
	}


	/* public static function that will check if the checked entry exist in cross table jnews_mailings
	 * @param int $mailingId - mailing id
    	 * @param int $listId - list id
    	 * @return boolean $returnValue - true if the entry exist else will return false
	*/
	public static function mailingListFound( $mailingId, $listId )
	{
		if( empty($mailingId) || empty( $listId ) )
    		{
    			return false;
    		}

   		$query = 'SELECT `mailing_id` FROM `#__jnews_listmailings` WHERE `mailing_id`='. $mailingId .' AND `list_id`='. $listId;
   		$db = JFactory::getDBO();
   		$db->setQuery( $query );
   		$result = $db->loadResult();
		$returnValue = ( !empty($result) ) ? true : false;
		return $returnValue;
	}


	/**
	 * This public static function is used to get the names of the lists where the mailing is sent to
	 */
	public static function getMailingListName( $listIds ) {

		if( empty($listIds) ) return false;

		$query = 'SELECT L.`list_name` FROM `#__jnews_lists` AS L LEFT JOIN `#__jnews_listmailings` AS LS ON L.`id` = LS.`list_id`';
		$query .= ( count($listIds) > 1) ? ' WHERE L.`id` IN ('.jnews::implode(',',$listIds).') ' : ' WHERE L.`id` = '.$listIds[0];
		$query .= ' GROUP BY L.`id`';
		$db = JFactory::getDBO();
		$db->setQuery( $query );
		$results = $db->loadResultArray();

		return $results;
	}


	/* public static function that will get all the list ids for the passed mailing id from its cross table jnews_mailings
	 * @param int $mailingId - mailing id
	 * @return array int $resultA - array of list ids
	*/
	public static function getMailingList( $mailingId ) {
		static $resultA = array();

		if( empty($mailingId) ) return false;
		if ( isset($resultA[$mailingId]) ) return $resultA[$mailingId];
    		$query = 'SELECT `list_id` FROM `#__jnews_listmailings` WHERE `mailing_id`='. $mailingId;
    		$db = JFactory::getDBO();
    		$db->setQuery( $query );
    		$resultA[$mailingId] = $db->loadResultArray();

		return $resultA[$mailingId];
	}


/** public static function that will get all the mailing list ids for the passed list id from its cross table jnews_listmailings
	 * @param int $listID - list id
	 * @return array int $resultA - array of mailing list ids
	*/
	public static function getListMailing( $listID )
	{
		if( empty($listID) )
    		{
    			return false;
    		}

			$type=jNews_Lists::getListType($listID);
//			$senddate = jnews::getNow();
			$senddate = time();
			
			if($type==1 or $type == 7){//get only the( pending and with senddate that is greater than now) or mailing that is unpublished
				$query = 'SELECT `id` FROM `#__jnews_mailings` WHERE  (`published`=2';
				$query .=' AND `id` IN (SELECT `mailing_id` FROM `#__jnews_listmailings` WHERE `list_id`='.$listID.')';
			    $query .=' AND `send_date`>'.$senddate;//
			    $query .=')';
			    $query .=' OR (`published` = 0';
			    $query .=' AND `id` IN (SELECT `mailing_id` FROM `#__jnews_listmailings` WHERE `list_id`='.$listID.')';
			    $query .=')';
                //echo '<br>query: '.$query;
			}
			if($type==2){
    			$query = 'SELECT `mailing_id` FROM `#__jnews_listmailings` WHERE `list_id`='. $listID;
			}

    		$db = JFactory::getDBO();
    		$db->setQuery( $query );
    		$resultA = $db->loadResultArray();

		return $resultA;
	}

	public static function getListMailingToDelete($listID){
		if( empty($listID) )
    		{
    			return false;
    		}

			$type=jNews_Lists::getListType($listID);

			$query = 'SELECT `mailing_id` FROM `#__jnews_listmailings` WHERE `list_id`='. $listID;

			$db = JFactory::getDBO();
    		$db->setQuery( $query );
    		$resultA = $db->loadResultArray();

		return $resultA;

	}


 	public static function removeSNmail(){
 		$db = JFactory::getDBO();
	 	$query = 'DELETE FROM `#__jnews_mailings` WHERE `mailing_type`= 7 AND `send_date`= 0 AND `published`= 0';
	 	$db->setQuery( $query );
	 	$db->query();
	 	return true;
 	}

 	//mailings picklist in the queue
 	public static function getMailingsForQueue(){
		static $mailingsQ=null;

		if ( isset($mailingsQ) ) return $mailingsQ;
		$db = JFactory::getDBO();
		$query='SELECT `subject`, `id` from `#__jnews_mailings` ';
		//only show the mailings that have entries in the queue
		$query .= ' WHERE `id` IN(SELECT `mailing_id` FROM `#__jnews_queue` WHERE `type`!=7)';
		//order by senddate
		$query .=' ORDER BY `send_date`';
		$db->setQuery($query);
		$mailingsQ=$db->loadObjectList();

		return $mailingsQ;
	}

	/**
 * 
 * get the seubject of a mailing
 * @param int $id
 */
	public static function getMailingsSubject($id){
		static $subject=array();
		if(isset( $subject[$id]) ) return $subject[$id];
		$db = JFactory::getDBO();
		$query='SELECT subject from `#__jnews_mailings` where id='. $id;
		$db->setQuery($query);
		$subject[$id]=$db->loadResult();
		return $subject[$id];
	}

	public static function getListId($mailingId){
		$db = JFactory::getDBO();
		$query = 'SELECT `list_id` FROM `#__jnews_listmailings` WHERE `mailing_id`='. $mailingId;

		$db->setQuery($query);
		$db->query();
		$lsid=$db->loadResult();
		return $lsid;
	}

	public static function insertListMailings( $lsid){
		$db = JFactory::getDBO();
		$query = 'SELECT MAX(id) FROM #__jnews_mailings';
		$db->setQuery($query);
		$mgid = $db->loadResult();


		$query = 'INSERT INTO `#__jnews_listmailings` (`list_id`, `mailing_id`)  VALUES('.$lsid.','.$mgid.')';
		$db->setQuery($query);
		$db->query();
		return true;

	}

	//get the id of the ar(mailing) in the list where the delay is the maximum
	public static function maxDelayAR( $ar ){
		$db = JFactory::getDBO();
		$query = 'SELECT A.id, A.delay FROM `#__jnews_mailings` A, `#__jnews_listmailings` B WHERE A.id = B.mailing_id AND B.list_id ='.$ar.' ORDER BY A.delay DESC LIMIT 1';
		$db->setQuery($query);
		$maxDelayAR = $db->loadObject();

		if(empty($maxDelayAR)) return '';

		return $maxDelayAR;
	}

/** we call this public static function to get the content of the articles via ajax
 * we directly insert the article in the newsletter without the tags
 * */	
public static function getContent( $artId = 0, $contentType = 0, $task ='', $template_id=''){
	$mainframe = JFactory::getApplication();
	ob_clean();

	//j15
	if( version_compare(JVERSION,'1.6.0','<') ) $Itemid = $mainframe->getItemId($artId);

	if(empty($Itemid)){
		 $Itemid = $GLOBALS[JNEWS.'itemidAca'];
	}

	if($task == 'articleContent')
		$content = jNews_Mailing::getContentDetail($artId);
	elseif($task == 'blogContent')
		$content = jNews_Mailing::getBlogDetail($artId);

	if ($GLOBALS[JNEWS.'show_author'] == 1){
	 		$author = '<br />'.$content->created_by_alias;
 	}else{
 		$author = '';
 	}

	//we get the details of the article
	//if show only the title
	if($contentType ==2){
		$link = 'option=com_content&view=article&id='.$artId.'&Itemid='.$Itemid;
		$link = jNews_Tools::completeLink($link,false,$GLOBALS[JNEWS.'use_sef']);

		$contentD = '<a href="' . $link . '"><span class="aca_title">' . $content->title. '</span></a>';
	}elseif($contentType == 0){//to show the  full article
		$contentD = '<div class="aca_content"><span class="aca_title">' . $content->title . '</span>' . "\r\n" . $author .'<br />' . $content->introtext . '<br />' . "\r\n" . $content->fulltext . "\r\n".'</div>';
		//TO DO: images
	}else{//title, intro and readmore
		if($task == 'articleContent')
			$link = 'option=com_content&view=article&id='.$artId.'&Itemid='.$Itemid;
		elseif($task == 'blogContent')
			$link = 'option=com_lyftenbloggie&view=lyftenbloggie&view=entry&id='.$artId.'&Itemid='.$Itemid;

		$link = jNews_Tools::completeLink($link,false,$GLOBALS[JNEWS.'use_sef']);

		$wordwrap = $GLOBALS[JNEWS.'word_wrap'];
       if(empty($content->fulltext) AND !empty($wordwrap)){
             //Limit the number of words
             if(strlen($content->introtext) > $wordwrap){
             	//$fulltext = $content->introtext;
             	$fulltext = strip_tags($content->introtext,'<br><img>');
             	if(strlen($fulltext) > $wordwrap){
	             	//We make sure we won't cut any html tag :
	             	$open = 0;
	             	$limitText = strlen($fulltext) - 1;
	             	for($i=0;$i<strlen($fulltext);$i++){
	             		if($content->introtext[$i] == '<')$open++; continue;
	             		if($content->introtext[$i] == '>')$open--; continue;
	             		if($content->introtext[$i] == " " AND $i>$wordwrap AND $open == 0){
	             			$limitText = $i-1;
	             			break;
	             		}
	             	}
	             	$content->introtext = substr($fulltext,0,$limitText).'...';
             	}
             }

			if(empty($content->fulltext) AND !empty($GLOBALS[JNEWS.'word_wrap'])){
             	if(strlen($content->introtext) > $GLOBALS[JNEWS.'word_wrap']){
             		//$content->introtext = substr(strip_tags($content->introtext),0,$GLOBALS[JNEWS.'word_wrap']).'...';
             		$content->introtext = substr($content->introtext,0,$GLOBALS[JNEWS.'word_wrap']).'...';
             	}
             }
       }
			$images = jNews_Mailing::getimage($content->images);
			foreach($images as $image) {
				$image_string = '<img src="' . JNEWS_JPATH_LIVE_NO_HTTPS . '/images/stories/' . $image['image'] . '" align="' . $image['align'] . '" alt="' . $image['alttext'] . '" border="' . $image['border'] . '" />';
				$contentD = preg_replace('/{mosimage}/', $image_string, $contentD, 1);
			}
	        $contentD = str_replace('{mosimage}', '', $contentD);

			$contentD = '<div class="aca_content"><span class="aca_title">' . $content->title . '</span>' . "\r\n" . $author . '<br />' . $content->introtext . '<br />' . "\r\n" . '<a href="' . $link . '"><span class="aca_readmore">' . _JNEWS_READMORE . '</span></a>' . "\r\n".'</div>';
       		//$contentD = '<div class="aca_content"><span class="aca_title" style="display:block; text-indent:5px; font-weight: bold; width: 100%; font-size: 1.2em; text-decoration: none; color: rgb(255, 255, 255); border: 1px solid rgb(50, 154, 167); background-color: rgb(2, 91, 135);">' . $content->title . '</span>' . "\r\n" . $author . '<br />' . $content->introtext . '<br />' . "\r\n" . '<a href="' . $link . '"><span class="aca_readmore" style="font-weight:bold; color:#ffffff; font-size:11px; float: right; border: 1px solid rgb(50, 154, 167); background-color: rgb(2, 91, 135); padding: 2px 8px;">' . _JNEWS_READMORE . '</span></a>' . "\r\n".'</div>';
			//}
	}

	//insert the styles of this template
	if( !empty($template_id) ) {
		jNews_Templates::includeStyles( $contentD, $template_id );
	}

	if($task == 'articleContent')
		echo "<div id=artcontent_$artId>$contentD</div>";
	elseif($task == 'blogContent')
		echo "<div id=blogcontent_$artId>$contentD</div>";
	return true;
}

public static function getContentDetail($id=0){
	$db = JFactory::getDBO();

	if($id==0) return '';

	$query = "SELECT a.title as title, a.sectionid as sectionid, a.catid as catid, a.introtext as introtext, b.name as name, a.created_by_alias as created_by_alias, a.fulltext as `fulltext`, a.images as images FROM #__content as a LEFT JOIN #__users as b ON a.created_by = b.id WHERE a.id = $id";
	$db->setQuery($query);
	$replacement = $db->loadObject();


	if($replacement->created_by_alias == ''){$replacement->created_by_alias = $replacement->name;}

	if(get_magic_quotes_runtime()) {
		$replacement->title ="<b>". stripslashes($replacement->title)."</b>";
		$replacement->introtext = stripslashes($replacement->introtext);
		$replacement->fulltext = stripslashes($replacement->fulltext);
		$replacement->images = stripslashes($replacement->images);
		$replacement->created_by_alias = stripslashes($replacement->created_by_alias);
	}

	return $replacement;
}

public static function getBlogDetail($id=0){
	$db = JFactory::getDBO();

	$query = "SELECT A.id as id, A.fulltext as fulltext1, A.title as title, B.title as category, A.introtext as introtext, A.created_by_alias as created_by_alias, A.images as images FROM `#__bloggies_entries` as A LEFT JOIN `#__bloggies_categories` as B ON A.catid = B.id WHERE A.id = $id";
	$db->setQuery($query);
	$blog_item = $db->loadObject();


	if($blog_item->created_by_alias == ''){$blog_item->created_by_alias = $blog_item->created_by_alias;}

	if(get_magic_quotes_runtime()) {
		$blog_item->title ="<b>". stripslashes($blog_item->title)."</b>";
		$blog_item->introtext = stripslashes($blog_item->introtext);
		$blog_item->fulltext1 = stripslashes($blog_item->fulltext1);
		$blog_item->images = stripslashes($blog_item->images);
		$blog_item->created_by_alias = stripslashes($blog_item->created_by_alias);
	}
	return $blog_item;
}


public static function getImage($images){

	$first = @explode("\n",$images);

	for($i=0, $n=count($first); $i < $n; $i++) {
		$second = explode('|',$first[$i] . '|||');
		$third[$i]['image'] = $second[0];
		$third[$i]['align'] = $second[1];
		$third[$i]['alttext'] = $second[2];
		$third[$i]['border'] = $second[3];
	}
	return $third;
}

public static function getMailingTemplate($mailingId=''){
	$db = JFactory::getDBO();

	if(empty($mailingId)){
		$template = jNews_Templates::loadOneTemplate('*',  '', 'template_id', 'DESC', true );
		$template_id = JRequest::getVar('template_id', $template->template_id);
	}else{
		$query = 'SELECT `template_id` FROM `#__jnews_mailings` WHERE `id`='.$mailingId;
		$db->setQuery($query);
		$template_id = $db->loadResult();
	}

	if(empty($template_id)){
		$template = jNews_Templates::loadOneTemplate('*',  '', 'template_id', 'DESC', true );
		$template_id = JRequest::getVar('template_id', $template->template_id);
	}

	return $template_id;
}

/***
 * public static function to update the senddate of the newsletter when sent
 * @param - $mailingid - id of the mailing to update the sendate
 */
public static function updatesenddate( $mailingid){
	if(empty($mailingid)) return '';
	
	$db = JFactory::getDBO();
	$query = 'UPDATE `#__jnews_mailings` SET `send_date`='.time().' WHERE `id`='. $mailingid;
	$db->setQuery($query);
	$db->query();

	return true;
	
}

/**
	 * 
	 * we count the number of mailings
	 * @param - $type
	 */
	public static function countMails($type = 1, $smartCount = false ){
		static $count = array();
		
		if(!isset($count[$type])){
			$db = JFactory::getDBO();
			$query = 'SELECT count(`id`) FROM `#__jnews_mailings` WHERE `mailing_type`='.$type;// AND `published` = 1';
			if ( $type==7 && !$smartCount ) $query .= ' AND `published` = 1 ';
			elseif ( $smartCount ) $query .= ' AND `published` = 0 AND `send_date` = 0  AND `delay` = 0 ';
			$db->setQuery($query);
			$db->query($query);
			$count[$type] = $db->loadResult();
		}
		
		return $count[$type];
	}
	
	/**
	 * replace old tag format to new format
	 * Enter description here ...
	 */
	public static function replaceOldTagsToNew( $content ){
		//we replace the previous tag format with the new tag format
		//we will replace here the old tags with the new tags
		$content = str_replace('[NAME]','{tag:name}',$content);
		$content = str_replace('[EMAIL]','{tag:email}',$content);
		$content = str_replace('[FIRSTNAME]','{tag:email}',$content);
		$content = str_replace('[USERNAME]','{tag:username}',$content);
		$content = str_replace('[COLUMN1]','{tag:profile nb=1}',$content);
		$content = str_replace('[COLUMN2]','{tag:profile nb=2}',$content);
		$content = str_replace('[COLUMN3]','{tag:profile nb=3}',$content);
		$content = str_replace('[COLUMN4]','{tag:profile nb=4}',$content);
		$content = str_replace('[COLUMN5]','{tag:profile nb=5}',$content);
		
		$content = str_replace('[DATE]','{tag:date}',$content);
		$content = str_replace('{date}','{tag:date}',$content);
		$content = str_replace('{date:1}','{tag:date format=1}',$content);
		$content = str_replace('{date:2}','{tag:date format=2}',$content);
		$content = str_replace('{date:3}','{tag:date format=3}',$content);
		$content = str_replace('{date:4}','{tag:date format=4}',$content);
		
		$content = str_replace('[CONFIRM]','{tag:confirm}',$content);
		
		$content = str_replace('[SUBSCRIPTIONS]','{tag:subscriptions}',$content);
		$content = str_replace('[UNSUBSCRIBE]','{tag:unsubscribe}',$content);
		
		$content = str_replace('{fwdtofriend:','{tag:fwdtofriend name=',$content);
		$content = str_replace('{viewonline:','{tag:viewonline name=',$content);
				
		$content = str_replace('[ISSUENB]:','{tag:issuenb}',$content);
		
		return $content;
	}

} 
