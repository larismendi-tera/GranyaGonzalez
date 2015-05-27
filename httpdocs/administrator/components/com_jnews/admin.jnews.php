<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

if (!defined('DS'))  define( 'DS', DIRECTORY_SEPARATOR );

$mainframe = JFactory::getApplication();
if(!defined('JNEWS_JPATH_ROOT')) define ('JNEWS_JPATH_ROOT' , JPATH_ROOT . DS . 'administrator' );

$userid = JRequest::getInt('userid', 0, 'request');
$listId = JRequest::getInt('listid', 0, 'request');
$listType = JRequest::getInt('listype', 0, 'request');
$mailingId = JRequest::getInt('mailingid', 0, 'request');
//$action = JRequest::getString('act', '', 'request');
$action	= JRequest::getVar( 'act', '', '', 'WORD' );
$task = JRequest::getVar( 'task', '', '', 'WORD' );
$message = JRequest::getString('message', '', 'request');
$cid = JRequest::getVar('cid', array(), 'request');
$template_id = JRequest::getInt('template_id', 0, 'request');
JHTML::_('behavior.tooltip');

require_once( JPATH_ROOT . DS.'components'.DS.'com_jnews'.DS.'defines.php');

if( JNEWS_DEBUG ) {
	ini_set('display_errors',true);
	error_reporting(E_ALL);
}

if( version_compare(JVERSION,'1.6.0','<') ){ //j15
	require_once( $mainframe->getPath( 'admin_html',JNEWS_OPTION ) );
}else{ //j16
	require_once( JApplicationHelper::getPath('admin_html',JNEWS_OPTION));
}

require_once( JNEWSPATH_CLASS . 'class.jnews.php');
require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'tags.jnews.php');
require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'update.jnews.php');
require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'queue.jnews.php');
require_once( JNEWSPATH_ADMIN . 'views'.DS.'tags.jnews.html.php');
require_once( JNEWSPATH_ADMIN . 'admin.jnews.html.php' );
require_once( JNEWSPATH_CLASS . 'class.tableupdate.php');

//css injection for the images
$mainPath = JURI::base().'components/'.JNEWS_OPTION.'/images/header';
$doc = JFactory::getDocument();
$css = '.icon-48-about { background-image:url('.$mainPath .'/about.png)}';
$css .='.icon-48-configuration { background-image:url('.$mainPath .'/configuration.png)}';
$doc->addStyleDeclaration($css, $type = 'text/css');

if (!is_array( $cid )) {
	 $cid = array(0);
}

if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
	if(JRequest::getString('tmpl') !== 'component'){
		JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_LIST), 'index.php?option='.JNEWS_OPTION.'&act=list&pg=20',$action == 'list');
		JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_SUBSCRIBERS), 'index.php?option='.JNEWS_OPTION.'&act=subscribers&pg=20',$action == 'subscribers');
		JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_NEWSLETTERS), 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype=1&pg=20',$action == 'mailing');

		if($GLOBALS[JNEWS.'level'] > 2) {
			JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_AUTONEWS), 'index.php?option='.JNEWS_OPTION.'&act=mailing&listype=7&pg=20',$action == 'mailing');
		}

		if( $GLOBALS[JNEWS.'level'] > 1 ) {
			JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_AUTOS), 'index.php?option='.JNEWS_OPTION.'&act=arlist&pg=20',$action == 'arlist');
		}
		JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_STATS), 'index.php?option='.JNEWS_OPTION.'&act=statistics&pg=20',$action == 'statistics');

		JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_QUEUE), 'index.php?option='.JNEWS_OPTION.'&act=queue&pg=20',$action == 'queue');
		JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_TEMPLATES), 'index.php?option='.JNEWS_OPTION.'&act=templates&pg=20',$action == 'templates');

		JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_CONF), 'index.php?option='.JNEWS_OPTION.'&act=configuration&pg=20',$action == 'configuration');
		JSubMenuHelper::addEntry(JText::_(_JNEWS_MENU_ABOUT), 'index.php?option='.JNEWS_OPTION.'&act=about&pg=20',$action == 'about');
	}
}
// for pagination default limit
static $mySess=null;
if( empty($mySess) ) $mySess = JFactory::getSession();

	// check previous act page
	$prevAct = $mySess->get( 'prevAct', '' );
	if( empty($prevAct) ){
		// mailing has 3 page with the same act 'mailing'
		// need to check the listype, to know what page is shown
		// if another page is open then set pagination default limit back to 20
		if( $action == 'mailing' ){
			$lType = JRequest::getVar( 'listype' );
			$mySess->set( 'prevAct', $action.'-'.$lType );
		}
		else $mySess->set( 'prevAct', $action );
	JRequest::setVar( 'pg', 20 );
} else{
	// mailing has 3 page with the same act 'mailing'
		// need to check the listype, to know what page is shown
		// if another page is open then set pagination default limit back to 20
	if( $action == 'mailing' ){
		$lType = JRequest::getVar( 'listype' );

		if( $prevAct != $action.'-'.$lType ){
			$mySess->set( 'prevAct', $action.'-'.$lType );
			JRequest::setVar( 'pg', 20 );
		}
	} else {
		if( $prevAct != $action ){
			$mySess->set( 'prevAct', $action );
			JRequest::setVar( 'pg', 20 );
		} else {
			// doesnt need to set
		}
	}
}

if ( $task == 'edit' || $task == 'add' ) JRequest::setVar( 'hidemainmenu', 1 );
//action cases
switch ($action) {
	case ('tags'):
		tags($action, $task, $template_id);
		break;
	case ('templates'):
		require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'templates.jnews.php');
		require_once( JNEWSPATH_ADMIN . 'views'.DS.'templates.jnews.html.php');
		templates( $action, $task, $template_id);
		break;
	case ('list'):
		$listType=1;
		require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'lists.jnews.php');
		require_once( JNEWSPATH_ADMIN . 'views'.DS.'lists.jnews.html.php' );
		lists( $action, $task, $listId, $listType );
		break;
	case('arlist'):
		$listType=2;
		require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'lists.jnews.php');
		require_once( JNEWSPATH_ADMIN . 'views'.DS.'lists.jnews.html.php' );
		lists( $action, $task, $listId, $listType );
		break;
	case ('subscribers'):
		require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'subscribers.jnews.php');
		require_once( JNEWSPATH_ADMIN . 'views'.DS.'subscribers.jnews.html.php' );
		subscribers( $action, $task, $userid, $listId, $cid );
		break;
	case ('mailing'):
		require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'mailings.jnews.php');
		require_once( JNEWSPATH_ADMIN . 'views'.DS.'mailings.jnews.html.php' );
		mailing( $action, $task, $listId, $listType, $mailingId, $message );
		break;
	case ('statistics'):
		require_once( JNEWSPATH_ADMIN . 'controllers'.DS.'statistics.jnews.php');
		statistics( $listId, $listType, $mailingId, $message, $task, $action );
		break;
	case ('queue'):
		require_once( JNEWSPATH_ADMIN . 'views'.DS.'queue.jnews.html.php');
		queue( $action, $task, $listId, $mailingId, $lists='', $cid);
		break;
	case ('configuration'):
		require_once( JNEWSPATH_ADMIN . 'views'.DS.'config.jnews.html.php' );
		if ($GLOBALS[JNEWS.'integration'] == '0'  OR $GLOBALS[JNEWS.'cb_integration'] =='0') {
			$xf = new jNews_Config();
			if (jnews::checkCB())	$xf->loadConfig();
		}
		configuration( $action, $task );
		break;
	case ('update'):
		update( $action, $task );
		break;
	case ('about'):
		about($message, $task, $action);
		break;
	case ('cpanel'):
	case ('help'):
	case ('learn'):
		backHTML::controlPanel();
		break;
	case ('start'):
		backHTML::_header( _JNEWS_MENU_CONF , 'configuration.png' , $message , $task, $action );
		backHTML::controlPanel();
		break;
	case ( 'acaupdate' ) :
		// update jnews datas from acajoom
		$msg = jNews_TableUpdate::executeUpdate();
		echo $msg .'<br><br>';

		backHTML::controlPanel();
		break;
	default :
		backHTML::controlPanel();
		break;
}

backHTML::_footer();
return true;

function configuration($action, $task ) {
	$db = JFactory::getDBO();

	$config = array();
	$redirect = true;
	$xf = new jNews_Config();
	$message = JRequest::getVar('message', '' );
	$clear_log = JRequest::getVar('clear_log', '0' );


	switch ($task) {

		 case ('syncUsers'):
			echo jnews::printYN( jNews_Subscribers::syncSubscribers() , _JNEWS_SYNC_USERS_SUCCESS , _JNEWS_ERROR);
			backHTML::_header( _JNEWS_MENU_CONF , 'configuration.png' , $message , $task, $action );
			jNews_ConfigHTML::showConfigEdit();
		 	break;

		 case ('sendtest'):

			$my = JFactory::getUser();

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
			$mail->Body = '<p>This message has been sent at '. date('l, j F Y h:i:s', jnews::getNow( 0, true ) ).' from '.JNEWS_JPATH_LIVE.' to test your mail configuration.</p><br/><p style="color:green;">'._JNEWS_SENDTEST_CONFIGSUCC.'</p>';

			$mail->AddAddress( $my->email, $my->name );

			$mail->Subject =  'Test Email from '. JNEWS_JPATH_LIVE;
			$status = $mail->Send();

			$success = 'Email "'.$mail->Subject.'" successfully sent to '.$my->name.' ('.$my->email.')';
			$error = 'Failed sending "'.$mail->Subject.'" to '.$my->name.' ('.$my->email.'). <br/>'._JNEWS_SENDTEST_CONFIGERROR;

			$message = (is_bool($status) && $status) ? jnews::printM('ok',$success) : jnews::printM('error',$error);

			backHTML::_header( _JNEWS_MENU_CONF , 'configuration.png' , $message , $task, $action );
		 	jNews_ConfigHTML::showConfigEdit();
			echo $message;
			break;

		case ('apply'):
		case ('save'):
			
			JRequest::checkToken() or die( 'Invalid Token' );
			
			if ($clear_log != 0) {
				@unlink(JNEWS_JPATH_ROOT_NO_ADMIN . $GLOBALS[JNEWS.'save_log_file']);
			}

			$config = JRequest::getVar( 'config' );
			
			$message = jnews::printYN( $xf->saveConfig($config) , _JNEWS_CONFIG_UPDATED , _JNEWS_ERROR);

			$listCreator = JRequest::getVar('list_creatorfe','','post');
			if(!empty($listCreator)) $xf->update('list_creatorfe', $listCreator);

			//we update the active list
			$xf->updateActiveList();

			
			if ( $task == 'apply' ) {
				backHTML::_header( _JNEWS_MENU_CONF , 'configuration.png' , $message , $task, $action );
			 	jNews_ConfigHTML::showConfigEdit();
				echo $message;
			} else {
				backHTML::controlPanel();
			}
			
			break;

		case ('cancel'):
			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION );
			break;

       	case ('cpanel'):
      		backHTML::controlPanel();
 			break;

     	case ('acaupdate'):
			// update jnews datas from acajoom
			$msg = jNews_TableUpdate::executeUpdate();
			echo $msg .'<br><br>';
		default :
			backHTML::_header( _JNEWS_MENU_CONF , 'configuration.png' , $message , $task, $action );
		 	jNews_ConfigHTML::showConfigEdit();
     		break;

	}

	return true;
}


function about( $message , $task, $action ) {
	switch ($task) {
		case ('cpanel'):
			backHTML::controlPanel();
			break;
		default:
			backHTML::_header( _JNEWS_MENU_ABOUT.' jNews' , 'about.png' , $message , $task, $action );
			backHTML::about();
	}
}
