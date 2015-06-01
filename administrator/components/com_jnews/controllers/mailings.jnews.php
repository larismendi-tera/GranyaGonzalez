<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

function mailing( $action, $task, $listId, $listType, $mailingId, $message ) {
	$showMailings = false;
	$db = JFactory::getDBO();
	
	switch ($task) {

		case ('edit'):
			$issue_nb = JRequest::getInt('issue_nb', 1);
			$mailingType = JRequest::getVar( 'listype' );
			$isEdit = JRequest::getVar ('isEdit', true);
			$mySess = JFactory::getSession();
    		$mySess->set('listype', $mailingType, 'LType');

			if( !empty($listId) ){
				$list = jNews_Lists::getOneList($listId);
			}else{
				$list = jNews_Lists::getListFirstEntry();
			}

			$new = (empty($mailingId) || $mailingId == 0) ? true : false;

			$mailing = jNews_Mailing::getOneMailing($list, $mailingId, $issue_nb, $new, false, true);
			$mailing->mailing_type = $mailingType;
//			if(empty($isEdit)) $isEdit = true;

			// set default mailing parameters
			$my	= JFactory::getUser();
			$subscribers = jNews_Subscribers::getSubscriberInfoFromUserId($my->id);

			$subscribers->name = (isset($subscribers->name)) ? $subscribers->name : '';
			$subscribers->email = (isset($subscribers->email)) ? $subscribers->email : '';
//			$mailing->fromname = ( !isset( $mailing->fromname ) || empty( $mailing->fromname ) ) ? $subscribers->name : $mailing->fromname;
//			$mailing->fromemail = ( !isset( $mailing->fromemail ) || empty( $mailing->fromemail ) ) ? $subscribers->email : $mailing->fromemail;
//			$mailing->frombounce = ( !isset( $mailing->frombounce ) || empty( $mailing->frombounce ) ) ? $GLOBALS[JNEWS.'sendmail_from'] : $mailing->frombounce;
			$show = jNews_ListType::showType( $mailing->mailing_type , 'editmailing');

			if ($mailing->published !=1 OR $mailing->mailing_type != 1 OR (isset($show['admin']) AND $show['admin'])){
			   	$forms['main'] = " <form action='index.php' method='post' enctype='multipart/form-data' name='adminForm'> \n " ;
	    	    jNews_Mailing::_header($task, $action, $mailing->mailing_type , $message, 'edit');
				jNews_MailingsHTML::editMailing($mailing, $new, $listId, $forms, $show, $isEdit);

				$go[] = jnews::makeObj('act', $action);
				backHTML::formEnd($go);
			}else{
				$forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n\r" ;
              	jNews_Mailing::_header($task, $action, $mailing->mailing_type , $message );
				//backHTML::formStart();
				jNews_MailingsHTML::viewMailing($mailing, $forms);
				$go[] = jnews::makeObj('act', 'mailing');
				$go[] = jnews::makeObj('task', 'viewmailing');
				$go[] = jnews::makeObj('mailingid', $mailing->id);
				backHTML::formEnd($go);
			}
			break;

		case ('new'):
		case ('add'):
				// check if atleast one list exist and published
				// if false then restrict entry
				$mailingType = JRequest::getVar( 'listype' );
				$type = ( $mailingType == 2 ) ? 2 : 1;
				$result = jNews_Lists::checkListNotEmpty( $type );
				if( !$result ){
					if( $type == 2 ) $disp = addslashes(_JNEWS_CHECKCAMPAIGNFOUND);
					else $disp = addslashes(_JNEWS_CHECKLISTFOUND);
					echo "<script> alert('". $disp ."'); window.history.go(-1);</script>\n";
					break;
				}

				$mailingType = JRequest::getVar( 'listype' );
				if( empty($listId) ) $listId = JRequest::getVar( 'listid' );
				if( !empty($listId) ) $mailingType = ( jNews_Lists::getListType( $listId ) == 2 ) ? 2 : 1;
				JRequest::setVar( 'listype', $mailingType );
				$total = jNews_Mailing::countMailings($listId, $mailingType);
				$total++;
				jNews_Tools::redirect('index.php?option='.JNEWS_OPTION.'&act=mailing&task=edit&mailingid=0&issue_nb='.$total.'&listype='.$mailingType.'&listid='.$listId.'&isEdit=0');//mariap

			break;

		case ('saveSend'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$mySess = JFactory::getSession();
			$mailingType = $mySess->get('listype', '', 'LType');
			$status=checkMailingSave($mailingType);
			if(!$status) return false;
			jNews_Mailing::saveMailing($mailingId, $listId);

		case ('sendready'):
			//we update the senddate of the newsletter
			jNews_Mailing::updatesenddate($mailingId);
			
			jNews_MailingsHTML::sendReady($mailingId, $listId, $listType);
			break;

		case ('generate'):
			if ( class_exists('jNews_Auto') ){
				$still = false;
				$message= jnews::printYN( jNews_Auto::processQueue( true, true, $still, true ) , 'Queue processed' , _JNEWS_ERROR);
				jNews_Auto::displayStatus();
			}
			return;
			break;

		case ('send'):
			$queueC = new jNews_Queue;
			$queueC->checkForNewsletters( $mailingId );
			$queueCount = jNews_Queue::getQueueCount( $mailingId );
			$totalSub = JRequest::setVar( 'totalsend', $queueCount );
			$linkURL = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=continuesend&mailingid='.$mailingId.'&totalsend='.$totalSub, true, false, true );
			jNews_Tools::redirect( $linkURL );
			break;

		case ('continuesend'):
			$queueC = new jNews_Queue;
			
			//we update the senddate of the mailing to be now to be able to continue the sending and send it after we click continue
//			$queueC->updateSenddateToNow($mailingId);
			
			$totalSend = JRequest::getVar( 'totalsend',0,'','int');
			$alreadySent = JRequest::getVar( 'alreadysent',0,'','int');
			$queueC->start = $alreadySent;
			$queueC->total = $totalSend;
			$queueC->pause = $GLOBALS[JNEWS.'pause_time'];
			$queueC->sendQueue( false, $mailingId, false , true );
			ob_start();
			exit;
			break;

		case ('testspam'):
			if ( empty($message) ) $message = _JNEWS_MESSAGE_NOT;
			$mailingId = ($mailingId==0) ? jNews_Mailing::getLastMailingId() : $mailingId;
			$my	= JFactory::getUser();
			if($listId > 0) {
				$archivemailing = jNews_Mailing::getMailingView($mailingId,$listId);
			}else{
				$archivemailing = jNews_Mailing::getMailingView($mailingId);
			}
			
			$mailing = new stdClass;
			$receivers = new stdClass;
			$receivers->email = 'check-auth@verifier.port25.com';
			$receivers->name = $archivemailing->fromname;
			$receivers->receive_html = 1;
			$receivers->id = jNews_Subscribers::getSubscriberIdFromUserId($my->id);
			
			//if email are different we dont replace because we want to make sure the spam cehck count the fact that 
			//sender and bounce back are different
			if ( $archivemailing->fromemail == $archivemailing->frombounce ) $archivemailing->frombounce = $my->email;
			$archivemailing->fromemail = $my->email;
			
			$mailerC = new jNews_ProcessMail();
			$status = $mailerC->send( $archivemailing, $receivers );

			$message = jnews::printYN( $status ,  _JNEWS_SPAMTEXT_MESSAGE_SENT_SUCCESSFULLY , $message );
			
			$link = 'http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=SpamCheck&alt=jnewsdoc_glossary';
			$iFrame = '<iframe src="'.$link.'" width="100%" height="680px" scrolling="auto"></iframe>';
			echo $iFrame;
			
			break;			
			
		case ('savePreview'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$status=checkMailingSave( $mailingType );
			if(!$status) return false;
			if($mailingType==7){
				$mailing = JRequest::getVar('mailing', '');
				$ContentStatus = checkTag() ;
				if(!$ContentStatus)return false;
			}

			jNews_Mailing::saveMailing($mailingId, $listId);

		case ('preview'):

			$emailaddress = JRequest::getVar('emailaddress', '');
			$mailingId = ($mailingId==0) ? jNews_Mailing::getLastMailingId() : $mailingId;

			if(!empty($emailaddress)){
				$status = jNews_Mailing::sendTestEmail($mailingId, $listId );
				if ( empty($message) ) $message = _JNEWS_MESSAGE_NOT;
				$message = jnews::printYN( $status , _JNEWS_MESSAGE_SENT_SUCCESSFULLY , $message );
			}

			if($listId > 0) {
				$archivemailing = jNews_Mailing::getMailingView($mailingId,$listId);
			}else{
				$archivemailing = jNews_Mailing::getMailingView($mailingId);
			}

			$doc = JFactory::getDocument();
			$css = '.icon-48-preview{ background-image:url('.JNEWS_PATH_ADMIN_IMAGES2 .'header/preview.png)}';
			$doc->addStyleDeclaration($css, $type = 'text/css');
			$title = _JNEWS_PREVIEW_TITLE .': ' . $archivemailing->subject;
			backHTML::_header( _JNEWS_PREVIEW_TITLE  , 'preview.png' , $message , $task, $action );
         	//new view for the preview mailing
         	echo '<table cellpadding="0" cellspacing="2" border="0" width="100%"><tr><td width="40%">';
			jNews_MailingsHTML::previewMailingHTML($mailingId, $listId, $listType, $archivemailing->html);
			echo '</td><td width="60%">';

			$forms['main'] = '';
			$list = jNews_Lists::getOneList($archivemailing->list_id);
			$textonly = '';

			$mailerC = new jNews_ProcessMail();
			$queueInfo = new stdClass;
			$queueInfo->mailingid = $mailingId;
			$queueInfo->listid = @$listId;			
			$mailerC->getContent($archivemailing->images, $archivemailing->html, $archivemailing->textonly, $archivemailing->subject, false, true, $queueInfo); //new $archivemailing->subject

          if($archivemailing->html==1){
				if (empty($template_id)) $template_id = $archivemailing->template_id;
				if( !empty($template_id ) ) {
					jNews_Templates::includeStyles( $archivemailing->htmlcontent, $template_id );
				}

            }else{
				$archivemailing->textonly =jNews_ProcessMail::htmlToText($archivemailing->textonly);
            }

            //new view for the preview mailing
			jNews_MailingsHTML::viewHeading( $archivemailing );
			echo '</td></tr><tr><td colspan="2">';
			jNews_MailingsHTML::viewMailing($archivemailing, $forms);
			echo '</td></tr></tbody></table>';
			if($mailingId==0) JRequest::setVar('mailingid',$mailingId);
			break;

		case ('view'):
			$mailingType = JRequest::getVar( 'listype' );
			if( !empty($mailingType) ){
				$mySess = JFactory::getSession();
    				$mySess->set('listype', $mailingType, 'LType');
			}

			if ($mailingId != 0) {
				if($listId > 0) {
					$archivemailing = jNews_Mailing::getMailingView($mailingId,$listId);
				}else{
					$archivemailing = jNews_Mailing::getMailingView($mailingId);
				}
				if (empty($template_id)) $template_id = $archivemailing->template_id;

				if( !empty($template_id ) ) {
					jNews_Templates::includeStyles( $archivemailing->htmlcontent, $template_id );
				}

				$forms['main'] = "<form action='index.php?option=".JNEWS_OPTION."&act=mailing&listype=".$listType."&listid=".$listId."' method='post' name='adminForm'> \n\r" ;
				jNews_Mailing::_header ($task, $action, $listType , $message );
				backHTML::formStart('show_mailing' , 0  ,'' );
				jNews_MailingsHTML::viewMailing($archivemailing, $forms);
				$go[] = jnews::makeObj('act', 'mailing');
				$go[] = jnews::makeObj('task', 'viewmailing');
				$go[] = jnews::makeObj('listId', $archivemailing->list_id);//listid to listId--original
				backHTML::formEnd($go);
			}
			break;

		case ('deletequeue');
			//implement here what are we going to do with the delete queueu column on the mailing
			$mailingID = JRequest::getVar( 'mailingid' );
			$mailingType = JRequest::getVar( 'listype' );
			if ( !empty($mailingID) ) {
				$db = JFactory::getDBO();
				$db->setQuery( 'DELETE FROM `#__jnews_queue` WHERE `mailing_id` = ' . $mailingID );
				$db->query();
		   		$message=jnews::printYN( true ,  _JNEWS_MAILING_QUEUE_DELETED , _JNEWS_ERROR );
			}else{
				$message=jnews::printYN( false ,  _JNEWS_MAILING_QUEUE_DELETED , _JNEWS_ERROR );
			}
			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype='. $mailingType,$message );
			break;

		case ('deleteMailing'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$d['mailing'] = jNews_Mailing::getOneMailing('', $mailingId, '', $new);
			$message = jnews::printYN( jNews_Mailing::delete( $d ) , @constant( $GLOBALS[JNEWS.'listname'.$d['mailing']->list_type] ).'"'.$d['mailing']->subject.'"' ._JNEWS_SUCCESS_DELETED , _JNEWS_ERROR );

			$showMailings = true;
			break;

		case ('cancel'):
			$url = 'index.php?option='.JNEWS_OPTION.'&act=mailing&mailingid='.$mailingId;
			$url .= (!empty($listId)? '&listid='.$listId : '').'&listype='.$mailingType;
			jNews_Tools::redirect( $url );
			break;

	   	case ('copy'):
	   		JRequest::checkToken() or die( 'Invalid Token' );
	   		$message = jnews::printYN( jNews_Mailing::copyMailing($mailingId) ,  _JNEWS_MAILING_COPY , _JNEWS_ERROR );
			$showMailings = true;
			break;

		case ('cancelMailing'):
			$showMailings = true;
			break;

	   	case ('publishMailing'):
	   		JRequest::checkToken() or die( 'Invalid Token' );
	   		$mailing = jNews_Mailing::getOneMailing('', $mailingId, '', $new);
	   		$message = jnews::printYN( jNews_Mailing::publishMailing($mailingId) ,  @constant( $GLOBALS[JNEWS.'listname'.$mailing->mailing_type] ) .' '. _JNEWS_PUBLISHED , _JNEWS_ERROR );

			$mailingType = jNews_Mailing::getMailingInfoz( $mailingId );
	   		jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype='. $mailingType );
	      	break;

	   	case ('unpublishMailing'):
	   		JRequest::checkToken() or die( 'Invalid Token' );
	   		$mailing = jNews_Mailing::getOneMailing('', $mailingId, '', $new);
	   		$message = jnews::printYN( jNews_Mailing::unpublishMailing($mailingId) ,  @constant( $GLOBALS[JNEWS.'listname'.$mailing->mailing_type] ) .' '. _JNEWS_UNPUBLISHED , _JNEWS_ERROR );

	   		$mailingType = jNews_Mailing::getMailingInfoz( $mailingId );
	   		jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype='. $mailingType.'&listid='. $listId );
			break;

	   	case ('cpanel'):
			backHTML::controlPanel();
			break;

		case ('save'):
			JRequest::checkToken() or die( 'Invalid Token' );
			if (!isset($mailingType)) {
				$mySess = JFactory::getSession();
				$mailingType = $mySess->get('listype', '', 'LType');
			}
			$status=checkMailingSave( $mailingType );
			if($mailingType==7){
				$mailing = JRequest::getVar('mailing', '');
				$ContentStatus = checkTag() ;
				if(!$ContentStatus)return false;
			}
            if(!$status) return false;
			$message = jnews::printYN( jNews_Mailing::saveMailing($mailingId, $listId) ,  _JNEWS_MAILING_SAVED , _JNEWS_ERROR );
			if( !empty($mailingtype) ){
				jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype='.$mailingType.'&listid='.$listId );
			}else{
				jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype='.$mailingType.'&listid='.$listId );
				$showMailings = true;
				unset($GLOBALS["task"]);
	 			unset($_REQUEST["task"]);
			}

			break;

		case ('apply'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$mailingid = JRequest::getVar('mailingid', '0');

			if (!isset($mailingType)) {
				$mySess = JFactory::getSession();
				$mailingType = $mySess->get('listype', '', 'LType');
			}
			$status=checkMailingSave( $mailingType );
			if($mailingType==7){
				$mailing = JRequest::getVar('mailing', '');
				$ContentStatus = checkTag() ;
				if(!$ContentStatus)return false;
			}
            if(!$status) return false;
			$message = jnews::printYN( jNews_Mailing::saveMailing($mailingId, $listId) ,  _JNEWS_MAILING_SAVED , _JNEWS_ERROR );

			$mailingid = ( $mailingid==0 ) ? jNews_Mailing::getLastMailingId() : $mailingid;

			if( !empty($mailingtype) ){
				jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&task=edit&listype='.$mailingType.'&mailingid='.$mailingid.'&listid='.$listId );
			}else{
				jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&task=edit&listype='.$mailingType.'&mailingid='.$mailingid.'&listid='.$listId );
				$showMailings = true;
				unset($GLOBALS["task"]);
	 			unset($_REQUEST["task"]);
			}

			break;

		case ('show'):
			$id = JRequest::getVar( 'mailingid' );
			$mySess = JFactory::getSession();
			$mailingType=JRequest::getVar('listype', 0);
			$listId=JRequest::getVar('listid', 0);
			$link = 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype='.$mailingType.'&listid='.$listId;
			jNews_Tools::redirect( $link );
			$showMailings = true;
			break;
			
		case ('toggle'):
				$listid = JRequest::getVar( 'listid' );
				$column = JRequest::getVar( 'col' );
				$mailingid = JRequest::getVar( 'mailingid' );

				if( !empty($mailingid) && !empty($column) ){
					$passObj = new stdClass;
					$passObj->tableName = '#__jnews_mailings';
					$passObj->columnName = $column;
					$passObj->whereColumn = 'id';
					$passObj->whereColumnValue = $mailingid;
					jnews::toggle( $passObj );
				}

				if($listType==1)jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&listid='.$listid.'&listype=1' );
				else jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=mailing&listid='.$listid.'&listype=2' );
				break;

		default :
			$showMailings = true;
			break;
	}


	if ($showMailings){
		if(empty($listType)) $listType=JRequest::getVar('listype', 0);
		if(empty($listId)) $listId=JRequest::getVar('listid', 0);
		$paginationStart = JRequest::getVar( 'pg' );
		if( !empty($paginationStart) ){
			$limitstart = 0;
			$limitend = $paginationStart;
		}else{
			$app = JFactory::getApplication();
			$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
			$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
		}

		$limittotal = jNews_Mailing::countMailings( 0, $listType );
		$setLimit = new stdClass;
		$setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
		$setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
		$setLimit->end = ( !empty($limitend) ) ? $limitend : $limittotal;

		if( $setLimit->total == $setLimit->end ) $setLimit->start = 0;
		jNews_Mailing::showMailings($task, $action, $listId, $listType, $message, true, _JNEWS_MENU_MAILING, $setLimit);
	}
	return true;
 }


function checkMailingSave( &$mailingType ) {
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

function checkTag(){

	if ( $GLOBALS[ JNEWS.'sntag_norequired' ] ) return true;
	
	$content = JRequest::getVar('jnewsContent', '', 'request','string', JREQUEST_ALLOWRAW );
	$alt_content = JRequest::getVar('textcontent_', '', JREQUEST_ALLOWRAW );

	if (empty($alt_content))$alt_content=jNews_ProcessMail::htmlToText($content);

	$inHTML=strpos( $alt_content,'[SMARTNEWSLETTER]');
	$inText=strpos( $content,'[SMARTNEWSLETTER]');
	$inHTMLflex=strpos( $alt_content,'[SMARTFLEXI]');
	$inTexflex=strpos( $content,'[SMARTFLEXI]');
	if($inHTML === false AND $inText === false AND $inHTMLflex === false AND $inTexflex === false){
		$text = _JNEWS_NOSMARTTAG;
		echo "<script> alert('".addslashes($text)."'); window.history.go(-1);</script>\n";
		return false;
	}
	return true;
}
