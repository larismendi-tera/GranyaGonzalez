<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_ProcessMail{

	var $mailer = null;
	var $html = true;
	var $cancelMailing = false;
	
	/**
	* This function is used to override the send function in Joomla
	*/
	public static function getMailer( $mailing, $html=0 ) {

	 	$fromname = empty($mailing->fromname) ? trim($GLOBALS[JNEWS.'sendmail_name']) : trim($mailing->fromname);
	 	$fromemail = empty($mailing->fromemail) ? trim($GLOBALS[JNEWS.'sendmail_email']) : trim($mailing->fromemail);
	 	$frombounce = empty($mailing->frombounce) ? trim($GLOBALS[JNEWS.'sendmail_from']) : trim($mailing->frombounce);
	 	
	 	if( empty($fromemail) ) {
			$my = JFactory::getUser();
	 		$userSender = jNews_Subscribers::getUsers( 'gid', '50', $my->id );
	 		$fromemail = $userSender[0]->email;
	 		if ( empty($fromemail) ) {
		 		jnews::printM('no' , 'The sender email needs to be specified in the configuration.' );
		 		return false;
	 		}
	 	}
	 	if ( empty($frombounce) ) $frombounce = $fromemail;
	 	
	 	$attachments = $mailing->attachments;
		$images = $mailing->images;

		$conf = JFactory::getConfig();
	 	$frombounceName = $fromname ? $fromname : $conf->getValue('config.fromname');
		if(empty($fromemail)) $fromemail = trim($conf->getValue('config.mailfrom'));
		if(empty($fromname)) $fromname = trim($conf->getValue('config.fromname'));

		jimport('joomla.mail.mail');
		$phpmailerPath = JPATH_LIBRARIES.DS.'phpmailer'.DS;
		$mail = new JMail();

		$mail->PluginDir =  $phpmailerPath ;
		$mail->SetLanguage('en', $phpmailerPath.'language'.DS);
		$mail->WordWrap = 150;
//      	$mail->addCustomHeader("X-Mailer: ".JNEWS_JPATH_LIVE);
//      	$mail->addCustomHeader("X-MessageID: $mailing->id");

		if ( $GLOBALS[JNEWS.'mail_format'] =='1' ) $mail->Encoding = 'base64';

		if( $GLOBALS[JNEWS.'minisendmail'] ) $frombounceName = '';

		if ( !empty($frombounce) ) {
			$mail->addReplyTo( array( $frombounce, $frombounceName) );
			JRequest::setVar( 'bounceBackEmail', $frombounce );
		}

		$mail->From = trim($fromemail);
		if($GLOBALS[JNEWS.'minisendmail']){
			$mail->FromName = '';
		}else{
			$mail->FromName = $fromname;
		}

		$mail->Sender = trim($GLOBALS[JNEWS.'sendmail_from']);
		if(empty($mail->Sender)) $mail->Sender = '';

		switch ($GLOBALS[JNEWS.'emailmethod']) {
			case 'mail' :
				$mail->IsMail();
				break;
			case 'sendmail':
				$mail->IsSendmail();
				$conf = JFactory::getConfig();
				$mail->Sendmail = $GLOBALS[JNEWS.'sendmail_path'] ? $GLOBALS[JNEWS.'sendmail_path'] : $conf->getValue('config.sendmail');
				break;
			case 'smtp':
				$mail->IsSMTP();
				$conf	= JFactory::getConfig();
				$mail->Host = $GLOBALS[JNEWS.'smtp_host'] ? $GLOBALS[JNEWS.'smtp_host'] : $conf->getValue('config.smtphost');
				$mail->Port = $GLOBALS[JNEWS.'smtp_port'] ? $GLOBALS[JNEWS.'smtp_port'] : $conf->getValue('config.smtpport');
				$mail->SMTPSecure = $GLOBALS[JNEWS.'smtp_secure'] ? $GLOBALS[JNEWS.'smtp_secure'] : '';
				
				if((boolean)$GLOBALS[JNEWS.'smtp_auth_required']) {
					$mail->SMTPAuth = $GLOBALS[JNEWS.'smtp_auth_required'];
					$mail->Password = $GLOBALS[JNEWS.'smtp_password'];
					$mail->Username = $GLOBALS[JNEWS.'smtp_username'];
				}
				break;
			default:
				$conf = JFactory::getConfig();
				$mail->Mailer = $conf->getValue('config.mailer');
				break;
		}

		if (!empty($attachments)) {
			foreach ($attachments AS $attachment) {
				if(basename($attachment) !== 'index.html'){
					$mail->AddAttachment(JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'upload_url'].DS.basename($attachment));
				}
			}
		}

		switch( substr( strtoupper( PHP_OS ), 0, 3 ) ) {
			case "WIN":
				$mail->LE = "\r\n";
				break;
			case "MAC":
			case "DAR":
				$mail->LE = "\r";
			default:
				break;
		}
		
		return $mail;
		
	 }
	 

/** send emails
 * @param bool $showHTML show report on the screen
 * @param object $mailing contain the information of mailing
 * @param objectlist $receivers all receivers
 * @params $type (1-all types of mailings, 2-confirmation email)
	*/
	 function send( $oneQueue, $receiver ) {
		$tags =  null;

		### create the mail
		$mail = jNews_ProcessMail::getMailer( $oneQueue );//$frompreview param is to determine if the sending is called by 'Send Test Email'
		
		$tags['issuenb'] = $oneQueue->issue_nb;

		### create content
		$this->getContent($oneQueue->images, $oneQueue->htmlcontent, $oneQueue->textonly, $oneQueue->subject, true, false, $oneQueue ); //new $oneQueue->subject
		if ( $this->cancelMailing ) {
			$this->cancelMailing = false;
			return true;// we return true even though the mail was not sent because empty. Need improvement...
		}
		
		if (!empty($receiver->user_id)) $tags['user_id'] = $receiver->user_id;

		//Forced HTML Mailing Only?
		if ( $GLOBALS[JNEWS.'forced_html'] ) $receiver->receive_html = 1;

		if ( !empty($oneQueue->html)  && $receiver->receive_html ) {

			$this->html = true;
			$mail->IsHTML(true);
			$ashtml = 1;
			$mail->Body = jNews_ProcessMail::replaceTags( $oneQueue->htmlcontent, $receiver, $oneQueue, $ashtml, $tags);

			//this line is added when jLinks is integrated with jNews
		    //variables used in integration of jLinks
		    static $mailCatID = null;
	    	static $convertedLinks = null;
	    	if(empty($oneQueue->mailing_type)) $oneQueue->mailing_type=1;

	    	$mainframe = JFactory::getApplication();
			JPluginHelper::importPlugin( 'jnews' );
			$jomsocial = $mainframe->triggerEvent('jnewsbot_jomsocial_members', array(&$mail->Body, &$mail->AltBody, $receiver) );
			
			$this->_linkReplacement( $oneQueue->mailing_type, $oneQueue->id, $oneQueue->subject,$mail, $mailCatID, $convertedLinks, $receiver->id );
			jNews_ProcessMail::replaceClass( $mail->Body, $mail->AltBody, $receiver );

			if( !empty($oneQueue->template_id) ) {
				jNews_Templates::includeStyles( $mail->Body, $oneQueue->template_id );
			}

		} else {	//text only email
			$this->html = false;
			$mail->IsHTML(false);
			$mail->AltBody = '';
			$ashtml = 0;
			$mail->Body = jNews_ProcessMail::replaceTags( $oneQueue->textonly, $receiver, $oneQueue, $ashtml, $tags);
			$mail->AltBody = $this->_safe_utf8_encode( $mail->Body, $mail->CharSet );
			$simpleText = '';
			jNews_ProcessMail::replaceClass($mail->Body,$simpleText,$receiver);

			if( version_compare(JVERSION,'1.6.0','<') ){ //j15
				$imgfolders = DS.'images'.DS.'stories';
			}else{ //j16
				$imgfolders = DS.'images'.DS.'sampledata';
			}

			if( !empty($oneQueue->images) ) {
				foreach( $oneQueue->images as $image) {
					$img = explode('|', $image);
					$attrib = explode("/", $img[0]);
					$path = JNEWS_JPATH_ROOT. $imgfolders;
					if (count($img)==1) {
						$imageName = $img[0];
					} else {
						$imageName = $attrib[count($attrib)-1];
						for ($index = 0; $index < (sizeof($attrib)-1); $index++) {
							$path .= $attrib[$index].'/';
						}
					}
					$mail->AddAttachment( $path.$imageName );
				}//endofreach
			}

		}

		jNews_ProcessMail::normalizeURL( $mail->Body );

		$tname = explode(" ", $receiver->name);
		$firstname = $tname[0];
		$toUser = $GLOBALS[JNEWS.'minisendmail'] ? '' : $receiver->name;
		$mail->AddAddress( $receiver->email, $toUser );
		$username = empty($receiver->username) ? $firstname : $receiver->username;

		$date = JHTML::_('date',jnews::getNow(), JText::_('DATE_FORMAT_LC1'), JNEWS_TIME_OFFSET);

//		$replaceWhat = array('[NAME]','[FIRSTNAME]','[USERNAME]','[DATE]');
		$replaceWhat = array('{tag:name}','{tag:firstname}','{tag:username}','{tag:date}');
		$replaceBy = array($receiver->name,$firstname,$username,$date);
		$sujetReplaced = str_replace($replaceWhat, $replaceBy, $oneQueue->subject);
		
		if ( class_exists('jNews_Auto') ) jNews_Auto::tags( $sujetReplaced, $tags );
		$mail->Subject =  $sujetReplaced;

		if($GLOBALS[JNEWS.'embed_images']) $this->_embedImages($mail);
		
		$status = $mail->Send();

		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
			$mailErrorCount = $mail->error_count;
		}else{ //j16
			$mailErrorCount = ( !empty($mail->ErrorInfo ) ) ? 1 : 0;
		}
		//we prompt message regarding the status of the sending if there is an error
		if(!empty($mail->ErrorInfo)){
			echo '<br><span style="color:red;">'.$mail->ErrorInfo.'</span>';
		}
		
		if ( ($status && $mailErrorCount < 1 ) ) {
			return true;
		} else {
			jNews_ProcessMail::failMailReason( $mail );
			return false;
		}
		
	}


	function getContent( $images, &$content, &$textonly, &$subject, $send=false, $isEdit=false, $queueInfo=null ) {

		$replaceTag = array('href="mailto:','@','href="#');
		$replaceBy = array('9aca7aca5','9aca4aca1','9aca12aca3');
		$content = str_replace($replaceTag,$replaceBy,$content);
		$content = str_replace('{mospagebreak}', '<br style="clear: both;" /><br />', $content);

		if ( strlen(trim($textonly)) < 2 && $send ) {
			$textonly = jNews_ProcessMail::htmlToText($content);
			$textonly = str_replace('{mosimage}', '', $textonly);
		}

		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
			$imgfolders = '/images/stories';
		}else{ //j16
			$imgfolders = '/images/sampledata';
		}

		if (!empty($images)) {
			foreach ($images as $image) {
				 $image_string = '<img src="' . JNEWS_JPATH_LIVE . $imgfolders . $image. '" />';
				 $content = preg_replace('/{mosimage}/', $image_string, $content, 1);
			 }
		}
		if(!$isEdit) {
			$mainframe = JFactory::getApplication();
			JPluginHelper::importPlugin( 'jnews' );
			$bot_results = $mainframe->triggerEvent('jnewsbot_transformall', array( &$content, &$textonly, &$subject, $queueInfo ) );
			
			if(empty($queueInfo->mailingid)) $queueInfo->mailingid = 0;
			if(empty($queueInfo->listid)) $queueInfo->listid = 0;
			
			//we replace the empty p tags with br tag
			$content = str_replace( '<p> </p>', '<br />', $content );
			$content = str_replace( '<p></p>', '<br />', $content );
			$content = str_replace( '<p>&nbsp;</p>', '<br />', $content );
			$fwdObj = new stdClass;
			$fwdObj->mailingid = !empty($queueInfo->id) ? $queueInfo->id : 0;
			$fwdObj->listid = !empty($queueInfo->list_id) ? $queueInfo->list_id : 0;
			$jomsocial = $mainframe->triggerEvent('jnewsbot_jomsocial_members', array(&$content, &$textonly, '') );//to replace jomsocial tags
		}
		
		$content = jNews_Mailing::replaceOldTagsToNew($content);

		if ( empty($subject) ) {
			//we have no subject probably because one of the bot define that we should not send the newsletter
			//we cancel this mail
			$this->cancelMailing = true;
			return false;	
		}
		
		$content = str_replace($replaceTag,$replaceBy,$content);
		$content = preg_replace('#src[ ]*=[ ]*\"(?!https?://)(?:\.\./|\./|/)?#','src="'.JNEWS_JPATH_LIVE_NO_HTTPS.'/',$content);
		$content = preg_replace('#href[ ]*=[ ]*\"(?!https?://)(?:\.\./|\./|/)?#','href="'.JNEWS_JPATH_LIVE_NO_HTTPS.'/',$content);
		$content = str_replace($replaceBy,$replaceTag,$content);
		
		return true;
	 }

	 
	 public static function sendConfirmationEmail( $subscriber, $subscriberId ) {
		$queue = new stdClass;
		$act = JRequest::getVar( 'act', '', '', 'WORD' );
		if ( $act == 'noredsubscribe' ) {
			$queue->sub_list_id = JRequest::getVar('modsubscribed_lists', '' );
			$queue->sub_list_id = str_replace( 'undefined,', '', $queue->sub_list_id );
			$listSub = explode( ',', $queue->sub_list_id );
		} else {
			$queue->sub_list_id = JRequest::getVar('sub_list_id', '' );
			if ( !empty($queue->sub_list_id) ) {
				$queue->subscribed = JRequest::getVar('subscribed', '' );
				$listSub = array();
				$i = 0;
				$size = sizeof($queue->sub_list_id);
				for ($index = 1; $index <= $size; $index++) {
					if ( isset($queue->subscribed[$index]) ) {
						if ($queue->subscribed[$index]==1) {
							$listSub[$i] = $queue->sub_list_id[$index];
							$i++;
						}
					}
				}
			} else {
				$listSub[0] = (int)JRequest::getVar('listid', '' );
			}			
		}

		return jNews_ProcessMail::_processConfirmationEmail( $subscriber, $subscriberId, $listSub );
		
	 }

	 
	 private static function _processConfirmationEmail( $receiver, $subscriberId, $listSub ) {
		$status = true;
		$listIds = trim( implode(",", $listSub ), ',' );
		$lists = jNews_Lists::getSpecifiedLists( $listIds, false );
		
		//check that there is at least one list not hidden.
		$haveNotHiddenList = false;
		foreach( $lists as $oneList ) {
			if ( !empty($oneList->hidden) ) {
				$haveNotHiddenList = true;
				break;	
			}
		}
		
		$message = '';
		foreach ( $lists as $list ) {
			$Sub_TAG = '';
			
			//if we have a hidden list we dont take the subscirption message
			if ( $haveNotHiddenList && empty($list->hidden) ) continue;
			
			if ( empty($list->subscribemessage) || substr_count( $list->subscribemessage, '{tag:confirm}') < 1 ) {
				$Sub_TAG = '{tag:confirm}';//'[CONFIRM]';
			}
			$mailing = new stdClass;
		 	$mailing->subject = _JNEWS_SUBSCRIBE_SUBJECT_MESS;
		 	$mailing->html = 1;
		 	if ( !empty( $list->subscribemessage ) ) {
		 		$mailing->htmlcontent = $list->subscribemessage . '<br />' . $Sub_TAG;
		 	} else {	// default message
		 		$mailing->htmlcontent = 'Hi {tag:name},<br /><br />Please confirm your subscription to our website by clicking on the following link.<br /><br />';
		 		$mailing->htmlcontent .= $Sub_TAG;
		 	}
		 	
		 	$mailing->textonly = '';

		 	if(!$GLOBALS[JNEWS.'minisendmail']) $mailing->fromname = $list->sendername;

		 	$mailing->fromemail = $list->senderemail;
		 	$mailing->frombounce = $list->bounceadres;
		 	$mailing->id = 0;
		 	$mailing->issue_nb = 0;
		 	$mailing->images = '';
		 	$mailing->attachments = '';
			$GLOBALS[JNEWS.'show_signature']=0;
			$mailerC = new jNews_ProcessMail();
			if (!$mailerC->send( $mailing, $receiver)) $status = false;
			
			//we send only one notification
			break;
			
		}

		return $status;
	 }

 	static function sendUnsubcribeEmail($receiver, $subscriberId, $list) {

 		$mailing = new stdClass;
		$qid[0] = $subscriberId;
		$mainframe = JFactory::getApplication();
		$adminName = $mainframe->getCfg('fromname');
		$adminEmail = $mainframe->getCfg('mailfrom');
		$message = '';
		$email = '';
		$type = '';
		$title = '';
		$author = '';

	 	$mailing->subject = _JNEWS_UNSUBSCRIBE_SUBJECT_MESS;
	 	$mailing->htmlcontent = $list->unsubscribemessage;
	 	$mailing->textonly = $list->unsubscribemessage;
	 	if(!$GLOBALS[JNEWS.'minisendmail']) $mailing->fromname = $list->sendername;

	 	$mailing->fromemail = $list->senderemail;
	 	$mailing->frombounce = $list->bounceadres;
	 	$mailing->id = 0;
	 	$mailing->issue_nb = 0;
	 	$mailing->images = '';
	 	$mailing->attachments = '';
	 	
	 	$mailing->html = 1;//the unsubscription notification should be in html format

		$mailerC = new jNews_ProcessMail();
		if ($mailerC->send( $mailing, $receiver)) {
			return '';
		} else {
			return 'Could not send the unsubscribe email, for list #:'.$list->id.' , please contact the webmaster!';
		}

	 }
	 
	/**
	 * This function is used to send notification
	 * @param string $message the body of the message
	 * @param object $subscriber the subscriber who subscribe or unsubscribe
	 * @param object $owner the owner of the list
	 * @param object $list the list
	 * @param string $subject the subject of the notification
	 * @return
	 */
	 public static function sendNotification( $body, $subscriber, $owner, $list, $subject ){

	 	$mailing = new stdClass;
		$status =  false;

		//we replaced the tag in the body of the notification
	 	###list = [ id,list_name ] ; subscriber = [ name, email ] ; $owner = [ name, email ]
		$content = jNews_ProcessMail::_replaceTagNotify($body, $subscriber, $owner, $list);

		$mailing->id = 1;
	 	$mailing->images = '';
	 	$mailing->attachments = '';

		$mailing->fromname = trim($GLOBALS[JNEWS.'sendmail_name']);
		$mailing->fromemail = trim($GLOBALS[JNEWS.'sendmail_email']);
		if ( empty($mailing->fromemail) ) $mailing->fromemail = trim($GLOBALS[JNEWS.'sendmail_from']);
	
		### create the mail
		$mail = jNews_ProcessMail::getMailer($mailing);

		### create content
		$mail->IsHTML(true);
		$mail->Body = $content;
		$mail->AddAddress( $owner->email,$owner->name) ;
		$mail->Subject =  $subject;
		$status = $mail->Send();

		return $status;

	 }


	function logStatistics( $mailingId ) {
		
		$subscriberId = JRequest::getInt('subscriber');		
		$db = JFactory::getDBO();
		
		 if ( $GLOBALS[JNEWS.'enable_statistics'] && $subscriberId != 0) {
		 	// `sentdate`,
//			 $query = 'UPDATE `#__jnews_stats_details` SET `html`=1, `read`=1 ';
//			 $query .= 'WHERE `mailing_id`=' . (int)$mailingId . ' AND `subscriber_id`=' . (int)$subscriberId;
			 $query = 'REPLACE INTO `#__jnews_stats_details` ( `html`,`read`,`mailing_id`,`subscriber_id`,`sentdate`) VALUES (1,1,' . (int)$mailingId . ',' . (int)$subscriberId.','.time().' )';
			 
			$db->setQuery($query);
			$db->query();

			$queryCount = "(SELECT COUNT(`read`) FROM `#__jnews_stats_details` WHERE `mailing_id`=".$mailingId." AND `read`=1)";

			$query = "UPDATE `#__jnews_stats_global` SET `html_read`=".$queryCount;
			$query .= " WHERE `mailing_id`=".$mailingId;
			$db->setQuery($query);
			$db->query();
			 
		 }

		ob_end_clean();

		//add the blank.png picture
		$filename = JNEWS_JPATH_ROOT .DS. 'images'.DS.'blank.png';
		
		$handle = fopen($filename, 'r');
		$contents = fread( $handle, filesize($filename) );
		fclose($handle);
		header("Content-type: image/png");

		echo $contents;
		exit();
	}

	//Added &$mail params
	function close(&$mail) {
      if ( $GLOBALS[JNEWS.'emailmethod'] =='smtp' ) $mail->SmtpClose();
	}
	
	
	//Added &$mail params
	function _embedImages(&$mail){
//ATTACHEMENT
//		$normalAttachment = array();
//		$a = 0;
//		for($i = 0; $i < count($mail->attachment); $i++) {
//      		if($mail->attachment[$i][6] != 'inline') {
//      			$normalAttachment[$a] = $mail->attachment[$i];
//      			$a++;
//      		}
//    	}
//    	$mail->attachment = $normalAttachment;
    	
    	
		$mimetypes = array('bmp'   =>  'image/bmp',
				      'gif'   =>  'image/gif',
				      'jpeg'  =>  'image/jpeg',
				      'jpg'   =>  'image/jpeg',
				      'jpe'   =>  'image/jpeg',
				      'png'   =>  'image/png',
				      'tiff'  =>  'image/tiff',
				      'tif'   =>  'image/tiff');
	    preg_match_all("/(src|background)=\"(.*)\"/Ui", $mail->Body, $images);
	   	$result = true;
	    if(isset($images[2])) {
			$imagespath = array();
			foreach($images[2] as $i => $url) {
		      	$path = str_replace(JNEWS_JPATH_LIVE,JNEWS_JPATH_ROOT_NO_ADMIN,$url);
		      	if(isset($imagespath[$path])) continue;
		      	$imagespath[$path] = 1;
		        $filename  = basename($url);
		        $md5 = md5($filename);
		        $cid       = 'cid:' . $md5;
		        
		        $positionDot = strrpos( $filename, '.' );
		        $ext = substr( $filename, $positionDot+1 );
		        
		        //We don't embed php files... it can be the stat picture for example
		        if(!isset($mimetypes[$ext])) continue;

		        $mimeType  = $mimetypes[$ext];

		        //We only change the url if we were able to embed the image.
		        //Otherwise we return false and display a warning
		        if($mail->AddEmbeddedImage($path, $md5, $filename, 'base64', $mimeType)){
		       		$mail->Body = preg_replace("/".$images[1][$i]."=\"".preg_quote($url, '/')."\"/Ui", $images[1][$i]."=\"".$cid."\"", $mail->Body);
		        }else{
		        	$result = false;
		        }
	      }
	    }
	    return $result;
	}

	
	 public static function replaceTags( $content, $subscriber, $oneQueue, $html, $tags=null, $showSign=true ) {

	 	$mailingId = $oneQueue->id;
	 	$Itemid = $GLOBALS[JNEWS.'itemidAca'];
		$listId = '0'; //can be empty
		$subscriptionslink = 'option='.JNEWS_OPTION.'&Itemid='.$Itemid.'&act=change&subscriber=' . $subscriber->id . '&cle=' . md5($subscriber->email);
		$unsubscribelink = 'option='.JNEWS_OPTION.'&Itemid='.$Itemid.'&act=unsubscribe&subscriber=' . $subscriber->id . '&mailingid=' .$mailingId. '&cle=' . md5($subscriber->email);
		$subscriptiontext='';
		$subscriptionslink = jNews_Tools::completeLink($subscriptionslink,false,$GLOBALS[JNEWS.'use_sef']);
		$unsubscribelink = jNews_Tools::completeLink($unsubscribelink,false,$GLOBALS[JNEWS.'use_sef']);

		if($html) {
			$subscriptionslink = '<a href="' . $subscriptionslink . '" target="_blank"><span class="aca_subscribe">' . _JNEWS_CHANGE_EMAIL_SUBSCRIPTION . '</span></a>';
			$unsubscribelink = '<a href="' . $unsubscribelink . '" target="_blank"><span class="aca_unsubscribe">' . _JNEWS_SAFEUNSUBSCRIBE. '</span></a>';
			$subscriptionstext = '<p>'. $subscriptionslink . '<br />' . $unsubscribelink . '</p>';
		} else {
			$subscriptionslink = _JNEWS_CHANGE_EMAIL_SUBSCRIPTION . ' ( ' . $subscriptionslink . ' )';
			$unsubscribelink = _JNEWS_SAFEUNSUBSCRIBE . ' ( ' . $unsubscribelink . ' )';
			$subscriptionstext = "\r\n" . $subscriptionslink . "\r\n" . $unsubscribelink;
		}
		$subscriptionstext = '';
		if ( $showSign && $GLOBALS[JNEWS.'show_signature']) {
			if($html) {
				$signatureText ='<a href="http://www.joobi.co" target="_blank">';
				$signatureText .='<br /><center><div style="width: 99%; color:#000; font-size: 0.8em; text-align: center; ">Powered by Joobi</div></center>';
				$signatureText .='</a>';
			} else {
				$signatureText ='Powered by Joobi ( http://www.joobi.co )';
			}
			$subscriptionstext .= "\r\n\r\n" . $signatureText;
		}

		$confirmlink = 'option='.JNEWS_OPTION.'&act=confirm&listid=' . $listId . '&cle=' . md5($subscriber->email) . '&subscriber=' . $subscriber->id.'&Itemid='.$Itemid;
		$confirmlink = jNews_Tools::completeLink($confirmlink,false,$GLOBALS[JNEWS.'use_sef']);
		
		//for rpelacement of the {tag:title}
		$mailSubject = '';
//		$mailingid = empty($oneQueue->mailing_id) OR !isset($oneQueue->mailing_id) ? jNews_Queue::getQueueMailingId($oneQueue->id) : $oneQueue->mailing_id;
		$mailSubject = jNews_Mailing::getMailingsSubject($oneQueue->id);

		if ($html) $confirmlink = '<a href="' . $confirmlink . '" target="_blank">' . _JNEWS_CONFIRM_LINK . '</a>';
  	    else $confirmlink = _JNEWS_CONFIRM_LINK . "\n" . $confirmlink;

		$tname = explode(" ", $subscriber->name);
		$firstname = $tname[0];
		$username = empty($subscriber->username) ? $firstname : $subscriber->username;

		$archiveLink = 'option='.JNEWS_OPTION.'&act=mailing&task=view&mailingid='.$mailingId.'&Itemid='.$Itemid;
		$archiveLink = jNews_Tools::completeLink($archiveLink,false,$GLOBALS[JNEWS.'use_sef']);
		$archiveAll = '<a href="'.$archiveLink.'">'._JNEWS_VIEWARCHIVE.'</a>';
//		$replaceWhat = array('[CONFIRM]','[NAME]','[FIRSTNAME]','[EMAIL]','[DATE]','[USERNAME]','[LINK]','[ARCHIVE]', '[SUBSCRIPTIONS]', '[UNSUBSCRIBE]');
//		$replaceWhat = array('{tag:confirm}','{tag:name}','{tag:firstname}','{tag:email}','{tag:date}','{tag:username}','{tag:link}','{tag:archive}', '{tag:subscriptions}', '{tag:unsubscribe}', '{tag:title}');
		
		$replaceTagsA = array();
		$replaceTagsA['{tag:confirm}'] = $confirmlink;
		$replaceTagsA['{tag:name}'] = $subscriber->name;
		$replaceTagsA['{tag:firstname}'] = $firstname;
		$replaceTagsA['{tag:email}'] = $subscriber->email;
		$replaceTagsA['{tag:date}'] = JHTML::_( 'date', jnews::getNow(), JText::_('DATE_FORMAT_LC1') );	// , JNEWS_TIME_OFFSET
		$replaceTagsA['{tag:username}'] = $username;
		$replaceTagsA['{tag:link}'] = $archiveLink;
		$replaceTagsA['{tag:archive}'] = $archiveAll;
		
		$mainframe = JFactory::getApplication();
		if ( !$mainframe->isAdmin() && JRequest::getVar( 'act', '', '', 'WORD' )=='mailing' && JRequest::getVar( 'task' )=='view' ) {
			$replaceTagsA['{tag:subscriptions}'] = '';
			$replaceTagsA['{tag:unsubscribe}'] = '';
		} else {
			$replaceTagsA['{tag:subscriptions}'] = $subscriptionslink;
			$replaceTagsA['{tag:unsubscribe}'] = $unsubscribelink;
		}

		$replaceTagsA['{tag:title}'] = $mailSubject;
		
		if($GLOBALS[JNEWS.'level'] > 2 ){//check if the version of jnews is pro
			$replaceTagsA['{tag:profile nb=1}'] = empty($subscriber->column1) ? '' : $subscriber->column1;
			$replaceTagsA['{tag:profile nb=2}'] = empty($subscriber->column2) ? '' : $subscriber->column2;
			$replaceTagsA['{tag:profile nb=3}'] = empty($subscriber->column3) ? '' : $subscriber->column3;
			$replaceTagsA['{tag:profile nb=4}'] = empty($subscriber->column4) ? '' : $subscriber->column4;
			$replaceTagsA['{tag:profile nb=5}'] = empty($subscriber->column5) ? '' : $subscriber->column5;
		}
		
		$replaceTagsKeysA = array_keys($replaceTagsA);

		$content = str_replace($replaceTagsKeysA, $replaceTagsA, $content );

		if ( class_exists('jNews_Auto') ) {
			jNews_Auto::tags( $content, $tags );
		}

		$content = stristr($content, 'Powered by Joobi') !== false ? $content : $content.$subscriptionstext;

		if ( class_exists('jNews_Tags') ) jNews_Tags::replace( $content, $tags );

		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews' );
		$plugin = JPluginHelper::getPlugin('jnews', 'forwardtofriend');
		if ( !empty($plugin) ) {
			jimport('joomla.html.parameter');

			$fwdObj = new stdClass;
			$fwdObj->subscriber = $subscriber;
			$fwdObj->mailingid = $mailingId;
			$fwdObj->listid = $listId;
			$bot_results = $mainframe->triggerEvent('jnewsbot_fwdtofriendTransform', array( &$content, $fwdObj ) );
		}

		//check if we have Joobi install if so check for tags
		$joobiEntryPoint = '';
		if (defined( 'JPATH_ROOT') ) $path = JPATH_ROOT;
		elseif ( isset($mosConfig_absolute_path) ) $path = $mosConfig_absolute_path;
		$status = @include_once( $path . DIRECTORY_SEPARATOR . 'joobi' . DIRECTORY_SEPARATOR  . 'entry.php' );
		if ( $status ) {
			//process joobi tag
			$tagProcessC = WClass::get( 'output.process', null, 'class', false );
			if ( !empty($tagProcessC) ) $tagProcessC->replaceTags( $content );
		}

		
		if ( !empty($mailingId) AND $GLOBALS[JNEWS.'enable_statistics'] == 1 ) {
			if ($GLOBALS[JNEWS.'statistics_per_subscriber'] == 1) {
  				if($html) $content .= '<img src="' . JNEWS_JPATH_LIVE_NO_HTTPS . '/index.php?option='.JNEWS_OPTION.'&Itemid='.$Itemid.'&act=log' . '&mailingid=' . $mailingId . '&subscriber=' . $subscriber->id . '" border="0" width="1" height="1" />';
			} else {
  				if ($html) $content .= '<img src="' . JNEWS_JPATH_LIVE_NO_HTTPS . '/index.php?option='.JNEWS_OPTION.'&Itemid='.$Itemid.'&act=log' . '&mailingid=' . $mailingId . '" border="0" width="1" height="1" />';
			}
		}
		
		// replace for images
		//  put the good mailto tag back (replaced before the content mambot)
		$replaceTag = array( 'href="mailto:','@', 'href="#' );
		$replaceBy = array( '9aca7aca5', '9aca4aca1', '9aca12aca3' );

		$content = str_replace($replaceTag,$replaceBy,$content);
		$content = preg_replace('#src[ ]*=[ ]*\"(?!https?://)(?:\.\./|\./|/)?#','src="'.JNEWS_JPATH_LIVE_NO_HTTPS.'/',$content);
		$content = preg_replace('#href[ ]*=[ ]*\"(?!https?://)(?:\.\./|\./|/)?#','href="'.JNEWS_JPATH_LIVE_NO_HTTPS.'/',$content);
		$content = str_replace($replaceBy,$replaceTag,$content);
		$content = preg_replace('#\.(jpg|gif|jpeg|png)(?:(?!").)?"#', '.\\1"', $content);

		if (!$html) $content = str_replace('&amp;', '&', $content);
		return $content;
		
	 }

	 /**
	  * This function do the tag replacement on the notification message
	  * @param string $content the content of the notifcation message
	  * @param object $subscriber the subscriber or unsubscriber of the list
	  * @param object $owner the owner or creator of the list
	  * @param object $list the list
	  * @return string the whole content with the replaced tag
	  */
	  private static function _replaceTagNotify( $content, $subscriber, $owner, $list = null) {
//			$replaceWhat = array('[DATE]','[LISTOWNERNAME]','[LISTOWNEREMAIL]','[SUBSCRIBERNAME]','[SUBSCRIBEREMAIL]','[LISTID]','[LISTNAME]','[SITE]');
			$replaceWhat = array('{tag:date}','[LISTOWNERNAME]','[LISTOWNEREMAIL]','[SUBSCRIBERNAME]','[SUBSCRIBEREMAIL]','[LISTID]','[LISTNAME]','[SITE]');
			$replaceBy = array( JHTML::_('date',jnews::getNow(), JText::_('DATE_FORMAT_LC1'), JNEWS_TIME_OFFSET), $owner->name, $owner->email,$subscriber->name,$subscriber->email,$list->id,$list->list_name,JNEWS_JPATH_LIVE_NO_HTTPS);
			$content = str_replace($replaceWhat,$replaceBy, $content );

			return $content;
	  }

	static function replaceClass( &$content, &$textonly, $subscriber = null ) {
				$mainframe = JFactory::getApplication();
				$db = JFactory::getDBO();
				static $paramsbot = null;
				if($paramsbot === null){
					JPluginHelper::importPlugin( 'jnews' );

					if( version_compare(JVERSION,'1.6.0','<') ){ //j15
						$query = "SELECT `params` from #__plugins where `folder` = 'jnews'";
					}else{ //j16
						$query = "SELECT `params` from #__extensions where `type`='plugin' and `folder` = 'jnews'";
					}

					$db->setQuery($query);
					$allParams = $db->loadObjectList();

					$paramsbot = array();
					if(!empty($allParams)){
						foreach($allParams as $params){
							$parametersbot = @explode("\n",$params->params);
							if(!empty($parametersbot)){
								foreach($parametersbot as $oneparam){
									$finalparam = @explode("=",$oneparam);
									if(count($finalparam)!= 2) continue;
									$paramsbot[$finalparam[0]] = $finalparam[1];
								}
							}
						}
					}
				}

				if(!empty($subscriber)) $paramsbot['subscriber'] = $subscriber;
				$bot_results = $mainframe->triggerEvent('jnewsbot_transformfinal', array(&$content, &$textonly,$paramsbot));

	}

	static function htmlToText($textonly) {
       $textonly = str_replace(array('<p>', '<P>'), "", $textonly);
       $textonly =preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $textonly);
       $returns = array('<img />','<table>','</table>','<tbody>','</tbody>','<tr>','</tr>','<td>','</td>','<div>','</div>','<br>', '<br/>', '<br />', '<br >','<BR >', '<BR>', '<BR/>', '<BR />', '</p>', '</P>', '<p />', '<p/>', '<P />', '<P/>','<h1>','</h1>','<H1>','</H1>','<h2>', '</h2>','<H2>', '</H2>','<h3>','</h3>','<H3>', '</H3>','<h4>', '</h4>','<H4>', '</H4>','<h5>', '</h5>','<H5>', '</H5>', '<h6>', '</h6>','<H6>', '</H6>');
       $textonly = str_replace($returns, " ", $textonly);
       $textonly = preg_replace('/<a href="([^"]*)"[^>]*>([^<]*)<\/a>/i','${2} ( ${1} )', $textonly);
       $textonly = preg_replace('/<head>.*<\/head>/i', '', $textonly);
       $textonly = preg_replace('~&#x([0-9a-f]+);~ei', chr(hexdec("\\1")), $textonly);
//       $textonly = preg_replace('~&#([0-9]+);~e', chr("\\1"), $textonly);
       $trans_tbl = get_html_translation_table(HTML_ENTITIES);
       $trans_tbl = array_flip($trans_tbl);
       $textonly = strtr($textonly, $trans_tbl);
       $textonly = strip_tags($textonly);
       $textonly= trim($textonly);
       return $textonly;
    }

	function _safe_utf8_encode( $text, $charset ) {
		if( strtolower($charset) == 'utf-8') {
			if( !$this->_seems_utf8($text)) {
				$text = utf8_encode($text);
			}
		}

		$text = $this->_acaHtmlEntityDecode( $text, null, 'utf-8' );
		return $text;
	}

	function _seems_utf8($Str) {
		for ($i=0; $i<strlen($Str); $i++) {
			if (ord($Str[$i]) < 0x80) continue; # 0bbbbbbb
			elseif ((ord($Str[$i]) & 0xE0) == 0xC0) $n=1; # 110bbbbb
			elseif ((ord($Str[$i]) & 0xF0) == 0xE0) $n=2; # 1110bbbb
			elseif ((ord($Str[$i]) & 0xF8) == 0xF0) $n=3; # 11110bbb
			elseif ((ord($Str[$i]) & 0xFC) == 0xF8) $n=4; # 111110bb
			elseif ((ord($Str[$i]) & 0xFE) == 0xFC) $n=5; # 1111110b
			else return false; # Does not match any model
			for ($j=0; $j<$n; $j++) { # n bytes matching 10bbbbbb follow ?
				if ((++$i == strlen($Str)) || ((ord($Str[$i]) & 0xC0) != 0x80)) {
					return false;
				}
			}
		}
		return true;
	}

	function _acaHtmlEntityDecode($string, $quote_style = ENT_COMPAT, $charset = null) {

		if( is_null( $charset )) {
			$charset = $this->_acaGetCharset();
		}
		if( function_exists( 'html_entity_decode' )) {
			return @html_entity_decode( $string, $quote_style, $charset );
		}

	    if (!is_int($quote_style) && !is_null($quote_style)) {
	        user_error(__FUNCTION__.'() expects parameter 2 to be long, ' .
	            gettype($quote_style) . ' given', 'warning');
	        return;
	    }
	    $trans_tbl = get_html_translation_table(HTML_ENTITIES);
	    $trans_tbl = array_flip($trans_tbl);
	    $trans_tbl['&#039;'] = '\'';

	    if ($quote_style & ENT_NOQUOTES) {
	        unset($trans_tbl['&quot;']);
	    }

	    return strtr($string, $trans_tbl);
	}

	function _acaGetCharset() {
		$iso = explode( '=', _ISO );
		if( !empty( $iso[1] )) {
			return $iso[1];
		}
		else {
			return 'UTF-8';
		}
	}

/**
 * Replace URL which are not absolute
 * @param string $body
 */
	public static function normalizeURL( &$body ) {
		static $siteURL = null;

		if ( !isset($siteURL) ) {
			$urls = parse_url( JNEWS_SITE_URL );
			$siteURL = !empty( $urls['path'] ) ? substr( JNEWS_SITE_URL, 0, strrpos( JNEWS_SITE_URL, $urls['path']) ) . '/' : JNEWS_SITE_URL;
		}

		$body = str_replace( array( 'href="../undefined/','href="../../undefined/','href="../../../undefined//','href="undefined/'),array('href="'.$siteURL,'href="'.$siteURL,'href="'.$siteURL,'href="'.JNEWS_SITE_URL ), $body );
		$body = preg_replace( '#(href|src|action|background)[ ]*=[ ]*\"(?!(https?://|\#|mailto:|/))(?:\.\./|\./)?#i','$1="'.JNEWS_SITE_URL, $body );
		$body = preg_replace( '#(href|src|action|background)[ ]*=[ ]*\"(?!(https?://|\#|mailto:))/#i','$1="'.$siteURL, $body );

	}


/**
	 * This function is used in the integration of jLinks to jNews. jNews
	 * categories are checked and jLinks entries are categorized. This is also
	 * where the mail content is scanned for url links and replaced with
	 * jLinks generated links with the namekeys of the original links.
	 *
	 * @param int $mailingType list type whether Newsletter, Auto-Responder,
	 *                     or Smart Newsletter
	 * @param object contains the mailer
	 * @param int $mailID email ID to be used as suffix of the mail category namekey
	 * @param string $mailSubject title or subject of the email
	 * @param int $mailCatID determines if the mail category is created or not
	 * @param array $convertedLinks container of the content converted links
	 * @param int $subsid subscriber id
	 *
	**/
	function _linkReplacement( $mailingType, $mailID, $mailSubject,$mail, &$mailCatID, &$convertedLinks, $subsid ) {

		if ( empty($GLOBALS[JNEWS.'show_jlinks']) ) return true;

		$acajLinkey = 'jnewslink5wroot';
		$acajNewsKey = 'jnewsKa2f6gpw';
		$acajAutoKey = 'jnewsK9dfn7lws';
		$acajSmartKey = 'jnewsK8kd92hf';
		$acajMailKey = 'jnewsKo02j6d4u5aco';

		static $loaded = false;

		//TODO put priority if easylinks and jlinks exist or add checking if easylinks is installed instead of jlinks
		if ( !$loaded ){

			if ( !defined('JOOBI_SECURE') ) define( 'JOOBI_SECURE', true );

			$joobiEntryPoint = __FILE__ ;
			if(defined('JPATH_ROOT'))	$path = JPATH_ROOT;
			elseif(isset($mosConfig_absolute_path)) $path = $mosConfig_absolute_path;

			$status = false;
			//if jLinks is not installed on the website there is no need to proceed
			if ( !file_exists( $path.DS.'joobi'.DS.'entry.php' ) ) return true;
			$status = @include( $path.DS.'joobi'.DS.'entry.php' );
			if ( !$status && !defined('INSTALLER_FOLDER') ) {
				echo "We were unable to load Joobi library.";
			}

			//file include trials failed
			if (!$status) return true;

			$loaded = true;
		}

		//jLinks API class
		static $redirectC = null;
		if ( empty( $redirectC ) && class_exists('WClass') ) $redirectC = WClass::get( 'redirect.api' );
		if( empty($redirectC) && class_exists('WGet') ) {
			if ( !method_exists('WGet', 'file') ) {//mean none static
				$newClass = new WGet();
				if ( method_exists( $newClass, 'classes') )  $redirectC = WGet::classes( 'redirect.api' ); //jsetup	
				else return false;
			} else return false;
		}

		if (!method_exists($redirectC,'getCatID')){
			echo "We were unable to load the Redirect API";
			return true;
		}

		//check if new function exist
		static $updated = null;
		if (empty($updated) ) {
			if ( !method_exists($redirectC,'newsletterReplacement')) {
				$updated = false;
			} else {
				$updated = true;
			}
		}



		//jLinks Newsletter Integration class
		static $newsletterC = null;

		$contentLinks = array();
		if ($updated) {
			$redirectC->getContentLinks( $mail, $contentLinks );
		} else {
			if ( empty( $newsletterC ) && class_exists('WClass') ) $newsletterC = WClass::get( 'redirect.newsletter' );
			if( empty($newsletterC) && class_exists('WGet') ) {
				if ( !method_exists('WGet', 'file') ) {//mean none static
					$newClass = new WGet();
					if ( method_exists( $newClass, 'classes') )  $newsletterC = WGet::classes( 'redirect.newsletter' ); //jsetup	
					else return false;
				} else return false;
			}

			if (!method_exists($newsletterC,'getContentLinks')){
				echo "We were unable to load the Redirect Newsletter API";
				return true;
			}

			$newsletterC->getContentLinks( $mail, $contentLinks );
		}

		//check if mail content have links to be replace else no need for replacement
		if ( empty( $contentLinks ) )  return true;

		//new codes as of ver 4.0.x --glenn
		static $newsO = null;
		//initialize newsletter object
		if (empty($newsO)) {
			$newsO->name = $mailSubject;
			$newsO->namekey = null;
			$newsO->catid = $mailCatID;
			$newsO->app = 'jnews';

		}

		if ( empty( $newsO->catid )) {

			//determine the type of list
			$mailSuffix = '';
			$mailParentCat = '';
			$mailParentName = '';

			//Newsletter List type
			if ( $mailingType == 1 ) {
				$mailSuffix = 'n'.$mailID;
				$mailParentCat = $acajNewsKey;
				$mailParentName = 'Newsletter';

			//Auto-Responder List type
			} elseif ( $mailingType == 2 ) {
				$mailSuffix = 'ar'.$mailID;
				$mailParentCat = $acajAutoKey;
				$mailParentName = 'Auto-Responder';

			//Smart-Newsletter List type
			} elseif ( $mailingType == 7 ) {
				$mailSuffix = 'sn'.$mailID;
				$mailParentCat = $acajSmartKey;
				$mailParentName = 'Smart Newsletter';
			}

			$newsO->namekey = $acajMailKey.$mailSuffix;
			$newsO->parent = new stdClass;
			$newsO->parent->name = $mailParentName;
			$newsO->parent->namekey = $mailParentCat;
			$newsO->parent->parent = new stdClass;
			$newsO->parent->parent->name = 'jNews';
			$newsO->parent->parent->namekey = $acajLinkey;
			$newsO->parent->parent->parent = 1;

			//old codes
			if ( !$updated ) {

				//check if mail category exist else create it
				$mailCatID = $redirectC->getCatID( $acajMailKey.$mailSuffix );
				if ( empty( $mailCatID ) ) {

					//check if jNews category is created else create it
					$acajID = $redirectC->getCatID($acajLinkey);
					if ( empty( $acajID ) ) {
						$acajID = $redirectC->createCategory( 'jNews', 1, null, $acajLinkey);
					}

					//check if the List type category exists else create it
					$mailParentCatID = $redirectC->getCatID( $mailParentCat );
					if ( empty( $mailParentCatID ) ) {
					//create category parameters [ name, parent id, parent namekey, namekey, namekey prefix, namekey suffix ]
						$mailParentCatID =  $redirectC->createCategory( $mailParentName, $acajID, null, $mailParentCat );
					}

					$mailCatID =  $redirectC->createCategory( $mailSubject, $mailParentCatID, null, $acajMailKey.$mailSuffix);
				}
			}
		//end of old codes

		}


		//new code in API
		if ( $updated ) $redirectC->newsletterReplacement( $newsO, $mail->Body, $subsid );
		//old codes
		else {
			//jLinks Newsletter Integration class
			if ( empty( $newsletterC ) ) { 
				if ( class_exists('WClass') ) $newsletterC = WClass::get( 'redirect.newsletter' );
				if( empty($newsletterC) && class_exists('WGet') ) {
					if ( !method_exists('WGet', 'file') ) {	//mean none static
						$newClass = new WGet();
						if ( method_exists( $newClass, 'classes') )  $newsletterC = WGet::classes( 'redirect.newsletter' ); //jsetup	
						else return false;
					} else return false;
				}			
			}			
			
			if (!method_exists($newsletterC,'getContentLinks')){
				echo "We were unable to load the Redirect Newsletter API";
				return true;
			}

			// if converting of content links are done or not
			if ( empty( $convertedLinks ) ) {
				 //find link in the content and store them
				 $newsletterC->convertContentLinks( $contentLinks, $convertedLinks, $mailCatID, 'jnews' );
			}
			//the replacing of the content links occurs here
			$newsletterC->replaceContentLinks( $mail, $convertedLinks, $subsid, 'jnews' );

		}
		//end of old codes

		return true;
	}
	
	/**
	 * 
	 * function to send extra mails eg: welcome email, test email, notification that the mailing is sending, notifciation that the mailing has finished sending
	 * @param unknown_type $content - content the mail
	 * @param unknown_type $subject - subject of the mail
	 * @param unknown_type $name - name of the user to be sent
	 * @param unknown_type $email - email ofthe user to be sent
	 */
	public static function sendExtraEmail($content, $subject, $email, $name, $username = ''){
		$mailing = new stdClass;
	 	$status =  false;

	 	$mailing->id = 1;
	 	$mailing->images = '';
	 	$mailing->attachments = '';
		$mailing->fromname = trim($GLOBALS[JNEWS.'sendmail_name']);
		$mailing->fromemail = trim($GLOBALS[JNEWS.'sendmail_email']);
		if ( empty($mailing->fromemail) ) $mailing->fromemail = trim($GLOBALS[JNEWS.'sendmail_from']);
		
		### create the mail
		$mail = jNews_ProcessMail::getMailer($mailing);
		
		### create content
		$mail->IsHTML(true);
		$mail->Body = $content;
		$mail->AddAddress( $email, $name) ;
		$mail->Subject =  $subject;
		$status = $mail->Send();
		
		return $status;
	}
	
	function failMailReason( $mail ) {
		//check if the sender or bounce back are from the same domain as the website
		//otherwise some website might regect the email
		$sender = $mail->From;
		$bounceBackEmail = JRequest::getVar( 'bounceBackEmail' );
		$web = ( substr( JNEWS_JPATH_LIVE , -1, 1) =='/' ) ? substr( JNEWS_JPATH_LIVE , 0, strlen(JNEWS_JPATH_LIVE)-1 ) : JNEWS_JPATH_LIVE;
		$domain = str_replace( array( 'https://', 'http://', 'www.' ), '', $web  );
		
		$senderA = explode( '@', $sender );
		if ( $senderA[1] != $domain ) {
			jnews::printM('no' , 'The sender email is different than your domain name, some server do not accept that! Please try to use a sender email which is the same as your domain name.' );
		} else {
			$bounceBackEmailA = explode( '@', $bounceBackEmail );
			if ( $bounceBackEmailA[1] != $domain ) {
				jnews::printM( 'no' , 'The bounce back email is different than your domain name, some server do not accept that! Please try to use a bounce back email which is the same as your domain name.' );
			} else {
				if ( $sender != $bounceBackEmail ) {
					jnews::printM( 'no' , 'The bounce back email and the sender email are different, some server do not accept that and consider it as spam! Please try to use the bounce back email as the same as the sender email.' );
				}
			}		
		}

	}
	

}