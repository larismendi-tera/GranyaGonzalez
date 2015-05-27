<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>queue controller</p>
* <p>This function is the controller to view the queue view</p>
* @author Joobi Limited <wwww.joobi.co>
*/
require_once( JNEWSPATH_CLASS . 'class.queue.php');
function queue( $action, $task, $listid, $mailingid, $lists, $cid) {

	$db = JFactory::getDBO();
	$my	= JFactory::getUser();
	$start = JRequest::getInt('start');
	$css = '.icon-48-queue { background-image:url('.JNEWS_PATH_ADMIN_IMAGES2 .'header/queue.png)}';
	$doc = JFactory::getDocument();
	$doc->addStyleDeclaration($css, $type = 'text/css');
	$img = 'queue.png';


	$message ='' ;
	$xf = new jNews_Config();

	$conf	= JFactory::getConfig();
	$mail = new stdClass;
	$mail->Mailer 	= $conf->getValue('config.mailer');
	$mailingsearch = JRequest::getVar('mailingsearch', '');
	$start = JRequest::getInt('start');
	$limit = JRequest::getInt('limit', $conf->getValue('config.list_limit'));
	?>

<script language="javascript" type="text/javascript">
function submitbutton(pressbutton) {
	var form = document.adminForm;
	if (pressbutton == 'cpanel') {
		form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=queue&task=cpanel';
	}else if (pressbutton == 'pqueue') {
		var $ok = confirm('Are you sure you want to process queue?');
		if ( $ok == true ){
			form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=queue&task=pqueue';
		}else{
			return;
		}
	}else if (pressbutton == 'stopqueue') {
		var $ok = confirm('Are you sure you want to stop the queue?');
		if ( $ok == true ){
			form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=queue&task=stopqueue';
		}else{
			return;
		}
	}else if (pressbutton == 'startqueue') {
		var $ok = confirm('Are you sure you want to start the queue?');
		if ( $ok == true ){
			form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=queue&task=startqueue';
		}else{
			return;
		}
	}else if (pressbutton == 'delq') {
		var $ok = confirm('Are you sure you want to delete?');
		if ( $ok == true ){
			form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=queue&task=delq';
		}else{
			return;
		}
	}else if (pressbutton == 'cleanq') {
		var $ok = confirm('Are you sure you want to clear the queue?');
		if ( $ok == true ){
			form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=queue&task=cleanq';
		}else{
			return;
		}
	}else if (pressbutton == 'block') {
		var $ok = confirm('Are you sure you want to block selected entries?');
		if ( $ok == true ){
			form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=queue&task=block';
		}else{
			return;
		}
	}else if (pressbutton == 'unblock') {
		var $ok = confirm('Are you sure you want to unblock selected entries?');
		if ( $ok == true ){
			form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=queue&task=unblock';
		}else{
			return;
		}
	}
	submitform( pressbutton );
}
</script>
	<?php
	$message = JRequest::getVar('message', '' );
	$showqueue = true;

	switch ($task) {
		case ('pqueue'):
			if ( !$GLOBALS[JNEWS.'queue_status'] ){
				 //we start the processing of queue
				$xf->update('queue_status', 1);
				$GLOBALS[JNEWS.'queue_status'] = 1;
			}

			//create smart-newsletter if necessary
			if (class_exists('jNews_Autonews')) $SmartNewsMessageHTML = jNews_Autonews::createSmartNewsletters();			
			else $SmartNewsMessageHTML = '';
			
			$queueC = new jNews_Queue;
			$queuedMails = $queueC->queueStatus( $mailingid );
			$nextQueuedMails = $queueC->queueStatus( $mailingid );	// , true
			
			if( $GLOBALS[JNEWS.'level'] >1 ){
				$scheduledMails = $queueC->getScheduled();
			}else{
				$scheduledMails = null;
			}
			jNews_QueueHTML::processQueueHTML( $queuedMails, $nextQueuedMails, $scheduledMails, $mailingid, false, $SmartNewsMessageHTML );
			return;
			break;

		case ('stopqueue'):
				//we need to implement here how we can stop the queue
				$xf->update('queue_status', 0 ); //we start the processing of queue
				$GLOBALS[JNEWS.'queue_status']=0;

				//we turn off the queue_process to make sure we only have one process going on
				//$xf->update('queue_process', 0);
				//$GLOBALS[JNEWS.'queue_process']=0;

				JToolBarHelper::custom('startqueue','start-queue.png','start-queue.png', _JNEWS_MENU_STARTQ ,false);
			 	JToolBarHelper::spacer();
			 	$message=jnews::printYN( true,  _JNEWS_MENU_STOPQ_MSG, $message );
				jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=queue'.$message );
			 	break;

		case ('startqueue'):
				//we need to implement here how we can start back the queue
				$xf->update('queue_status', 1); //we stop the processing of queue
				$GLOBALS[JNEWS.'queue_status']=1;

				//we turn off the queue_process to make sure we only have one process going on
				//$xf->update('queue_process', 0);
				//$GLOBALS[JNEWS.'queue_process']=0;

				JToolBarHelper::custom('stopqueue','stop-queue.png','stop-queue.png', _JNEWS_MENU_STOPQ ,false);
				JToolBarHelper::spacer();
				$message=jnews::printYN( true,  _JNEWS_MENU_STARTQ_MSG, $message );
				jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=queue'.$message );
				break;
		case ('cpanel'):
			jNews_Tools::redirect('index.php?option='.JNEWS_OPTION);
     		break;
     	case ('delq'):
     		JRequest::checkToken() or die( 'Invalid Token' );
     		if (!is_array( $cid ) || count( $cid ) < 1) {
					echo "<script> alert('Select an item to delete'); window.history.go(-1);</script>\n";
					return false;
			} else {
				$status = true;
				if ( !empty($cid) ) {
					$db = JFactory::getDBO();
				 	$query='DELETE from `#__jnews_queue` where `qid` IN ('.implode(',', $cid ).')';
				 	$db->setQuery($query);
				 	$db->query();
				}
				$message = jnews::printYN( true ,  'Successfully deleted the mailing(s) in the queue.' , _JNEWS_ERROR );
			}
     		break;
     	case('block'):
     		JRequest::checkToken() or die( 'Invalid Token' );
     		if (!is_array( $cid ) || count( $cid ) < 1) {
					echo "<script> alert('Select an item to block'); window.history.go(-1);</script>\n";
					return false;
			} else {
				$status = true;
				if ( !empty($cid) ) {
					$message = jnews::printYN( jNews_Queue::updateQueueBlock($cid, 1) ,  'Successfully blocked the mailing(s) in the queue.' , _JNEWS_ERROR );
				}
			}
     		break;
     	case('unblock'):
     		JRequest::checkToken() or die( 'Invalid Token' );
     		if (!is_array( $cid ) || count( $cid ) < 1) {
					echo "<script> alert('Select an item to unblock'); window.history.go(-1);</script>\n";
					return false;
			} else {
				$status = true;
				if ( !empty($cid) ) {
					$message = jnews::printYN( jNews_Queue::updateQueueBlock($cid, 0) ,  'Successfully blocked the mailing(s) in the queue.' , _JNEWS_ERROR );
				}
			}
     		break;
     	case ('cleanq'):
     		JRequest::checkToken() or die( 'Invalid Token' );
			$db = JFactory::getDBO();
		 	$query='DELETE from `#__jnews_queue` WHERE `type` < 7';//do not delete the smartnewsletter type 7 and type 8
		 	$db->setQuery($query);
		 	$db->query();

     		$message= jnews::printYN( true , ' Successfully cleared the mailings in the queue! ' , _JNEWS_ERROR);
     		break;

     	default:
     	   if($GLOBALS[JNEWS.'queue_status']==1){
					JToolBarHelper::custom('stopqueue','stop-queue.png','stop-queue.png', _JNEWS_MENU_STOPQ ,false);
			}else{
					JToolBarHelper::custom('startqueue','start-queue.png','start-queue.png', _JNEWS_MENU_STARTQ ,false);
			}
			JToolBarHelper::spacer();
	}

 	if ($showqueue) {
		$paginationStart = JRequest::getVar( 'pg' );

		$app = JFactory::getApplication();

		if( !empty($paginationStart) ){
			$limitstart = 0;
			$limitend = $paginationStart;
		}else{
			$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
			$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
		}

		$limittotal = jNews_Queue::getQueueCount( $mailingid );

		$setLimit = new stdClass;
		$setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
		$setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
		$setLimit->end = ( !empty($limitend) ) ? $limitend: $limittotal;

		$setSort = new stdClass;
		$setSort->orderValue = $app->getUserStateFromRequest( JNEWS_OPTION.'.queue.filter_order', 'filter_order', 'q.send_date','cmd' );
		$setSort->orderDir	= $app->getUserStateFromRequest( JNEWS_OPTION.'.queue.filter_order_Dir', 'filter_order_Dir', 'asc',	'word' );

		//count only the search result
		if( !empty($mailingsearch) ) {
			$mailingq=jNews_Queue::getMailingqueue($mailingsearch, $mailingid, 0, 0 , $setSort);
			$setLimit->total = count( $mailingq );
		}

		// recheck start
		if( $setLimit->total <= $setLimit->start ) $setLimit->start = 0;
		//perform query for all or specific search
		$mailingq=jNews_Queue::getMailingqueue($mailingsearch, $mailingid, $setLimit->start, $setLimit->end , $setSort);

	 	$form['main'] = " <form  name='adminForm' method='POST' action='index.php' > \n" ;
	 	$form['select'] = " <form name='jnewsFilterForm' method='POST' action='index.php'> \n" ;
	 	backHTML::_header( 'Mailing Queue' , $img , $message , $task, $action  );

		jNews_QueueHTML::showMailingQueue($mailingq,$lists, $form,$setLimit->start,$setLimit->end,$mailingsearch, $setLimit , $setSort);
		$go[] = jnews::makeObj('act', $action);
		$go[] = jnews::makeObj('filter_order', $setSort->orderValue);
		$go[] = jnews::makeObj('filter_order_Dir', $setSort->orderDir);
		backHTML::formEnd($go);

 	}

	return true;
}
