<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

require_once( JApplicationHelper::getPath( 'toolbar_html' ) );
$doc = JFactory::getDocument();
$path = JNEWS_PATH_ADMIN_IMAGES2.'toolbar/';
$css  = ".icon-32-tool { background-image: url( ".$path ."cpanelT.png ); display:block;height:32px;width:32px;}";
$css  .= ".icon-32-upload { background-image: url( ".$path ."export.png); display:block;height:32px;width:32px;}";
$css  .= ".icon-32-refreshT { background-image: url( ".$path ."refreshT.png ); display:block;height:32px;width:32px;}";
$css  .= ".icon-32-forward { background-image: url( ".$path ."message_sent.png ); display:block;height:32px;width:32px;}";
$css  .= ".icon-32-addusers { background-image: url( ".$path ."subscribers.png ); display:block;height:32px;width:32px;}";
$css  .= ".icon-32-subscribers 	{ background-image: url( ".$path ."subscribers.png ); display:block;height:32px;width:32px;}";
$css  .= ".icon-32-export { background-image:url(".$path ."export.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-import { background-image:url(".$path ."import.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-createformT { background-image:url(".$path ."createformT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-publishT { background-image:url(".$path ."publishT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-unpublishT { background-image:url(".$path ."unpublishT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-copyT { background-image:url(".$path ."copyT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-newT { background-image:url(".$path ."newT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-deleteT { background-image:url(".$path ."deleteT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-editT { background-image:url(".$path ."editT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-copyT { background-image:url(".$path ."copyT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-backT { background-image:url(".$path ."backT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-cancelT { background-image:url(".$path ."cancelT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-saveT { background-image:url(".$path ."saveT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-process-queue { background-image:url(".$path ."process-queue.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-stop-queue { background-image:url(".$path ."stop-queue.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-start-queue { background-image:url(".$path ."start-queue.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-clean-queue { background-image:url(".$path ."clean-queue.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-message_sent { background-image:url(".$path ."message_sent.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-applyT { background-image:url(".$path ."applyT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-archiveT { background-image:url(".$path ."archiveT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-cpanelT { background-image:url(".$path ."cpanelT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-previewT { background-image:url(".$path ."previewT.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-generate { background-image:url(".$path ."generate.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-wizard { background-image:url(".$path ."wizard.png);display:block;height:32px;width:32px;}";
$css  .= "span.icon-32-default { background-image:url(".$path ."defaultT.png)!important;display:block!important;height:32px!important;width:100%!important;}";
$css  .= ".icon-32-defaultT { background-image:url(".$path ."defaultT.png)!important;display:block!important;height:32px!important;width:32px!important;}";
$css  .= ".icon-32-defaultT { background-image:url(".$path ."more_templates.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-defaultT { background-image:url(".$path ."upload.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-preview { background-image:url(".$path ."previewT.png)!important;display:block;height:32px;width:32px;}";
$css  .= ".icon-32-block { background-image:url(".$path ."block.png);display:block;height:32px;width:32px;}";
$css  .= ".icon-32-unblock { background-image:url(".$path ."unblock.png)!important;display:block;height:32px;width:32px;}";

$doc->addStyleDeclaration($css);

$listId = JRequest::getInt('listid', 0, 'request');
$listType = JRequest::getInt('listype', 0, 'request');
$action = JRequest::getString('act', '', 'request');
$task = JRequest::getVar( 'task', '', '', 'WORD' );
if($action == 'arlist') $GLOBALS[JNEWS . 'titlteHeader'] = _JNEWS_ARLIST;
if($action == 'mailing' && $listType ==2) $GLOBALS[JNEWS . 'titlteHeader'] = _JNEWS_MENU_AUTOS;
if($action == 'mailing' && $listType ==2 && $task=='edit') $GLOBALS[JNEWS . 'titlteHeader'] = _JNEWS_EDIT_AR;
if ( !isset($GLOBALS[JNEWS . 'titlteHeader']) ) $GLOBALS[JNEWS . 'titlteHeader'] = '';
if ( !isset($GLOBALS[JNEWS . 'titlteImg']) ) $GLOBALS[JNEWS . 'titlteImg'] = '';

if ( !class_exists('JToolBarHelper') )  @include_once( JPATH_ROOT . DS . 'administrator' . DS . 'includes' . DS . 'toolbar.php' );
JToolBarHelper::title( $GLOBALS[JNEWS . 'titlteHeader'] , $GLOBALS[JNEWS . 'titlteImg'] );


 switch ($action) {
	 case ('subscribers'):

	 	switch ($task) {
			case ('import'):
				jNews_Menu::IMPORT();
				break;
			case ('export'):
				jNews_Menu::EXPORT();
				break;
			case ('new'):
			case ('add'):
				jNews_Menu::NEWSUBSCRIBER();
				break;
			case ('show'):
				jNews_Menu::SHOWSUBSCRIBER();
				break;
			case ('doExport'):
			case ('cpanel'):

				break;
			default :
				jNews_Menu::REGISTERED();
				break;
	 	}
	 	break;
	 case ('list'):

	 	switch ($task) {
			case ('new'):
			case ('add'):
				jNews_Menu::NEW_LIST('');
				break;
			case ('edit'):
				jNews_Menu::EDIT_LIST('');
				break;
			case ('cpanel'):

				break;
			default:
				jNews_Menu::SHOW_LIST();
				break;
	 	}
	 	break;
	 case ('arlist'):

	 	switch ($task) {
			case ('new'):
			case ('add'):
				jNews_Menu::NEW_LIST('');
				break;
			case ('edit'):
				jNews_Menu::EDIT_LIST('');
				break;
			case ('cpanel'):

				break;
			default:
				jNews_Menu::SHOW_ARLIST();
				break;
	 	}
	 	break;

	 case ('mailing'):

	 	switch ($task) {
			case ('edit'):
				jNews_Menu::NEWMAILING();
				break;
			case ('preview'):
				jNews_Menu::PREVIEWMAILING('show');
				break;
			case ('savePreview'):
				jNews_Menu::PREVIEWMAILING('show');
				break;
			case ('view'):
				jNews_Menu::CANCEL_ONLY('cancelMailing');
				break;
			case ('publish'):
				jNews_Menu::CANCEL_ONLY('');
				break;
			case ('cpanel'):

				break;
			case ('show'):
			default :
				jNews_Menu::SHOW_MAILINGS();
				break;
	 	}
	 	break;
	 case ('configuration'):

	 	switch ($task) {
			case ('save'):
			case ('cpanel'):

				break;
			default :
				jNews_Menu::CONFIGURATION();
				break;
	 	}
	 	break;
	 case ('statistics'):

	 	switch ($task) {
			case ('edit'):
				jNews_Menu::CANCEL_ONLY('cancel');
				break;
			case ('cpanel'):

				break;
			default :
				jNews_Menu::STATISTICS();
				break;
	 	}
	 	break;

	case('queue'):

	 	switch ($task) {
			case ('pqueue'):
				jNews_Menu::QUEUE_MENU('pqueue');
				break;
			case ('delq'):
				jNews_Menu::QUEUE_MENU('delq');
				break;
			case ('cleanq'):
				jNews_Menu::QUEUE_MENU('cleanq');
				break;

			case ('cpanel'):

				break;
			default :

				jNews_Menu::QUEUE_MENU();

				break;
	 	}
	 	break;

	 	case('templates'):
	 	switch ($task) {
	 		case ('new'):
			case ('add'):
				jNews_Menu::NEWTEMPLATE('');
				break;
			case ('edit'):
				jNews_Menu::EDITTEMPLATE('');
				break;
			case ('cpanel'):

				break;

			default :
				jNews_Menu::TEMPLATES_MENU();
				break;
	 	}
	 	break;

	 case ('update'):

	 	switch ($task) {
			case ('doUpdate'):
			case ('version'):
			case ('new1'):
			case ('new2'):
			case ('new3'):
				jNews_Menu::CANCEL_ONLY('show');
				break;
			case ('cpanel'):

				break;
			case ('complete'):
				jNews_Menu::DOUPDATE();
				break;
			case ('show'):
			default :
				jNews_Menu::UPDATE();
				break;
	 	}
	 	break;
	 case ('about'):

	 	switch ($task) {
			case ('cpanel'):

				break;
			default :
				jNews_Menu::ABOUT();
				break;
	 	}
	 	break;
	 default :
	 	break;
 }
