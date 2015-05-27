<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

function update( $action, $task ) {
	$update = new jNews_Update();
	$showListing = true;
	$showComplete = false;
 
	$message = JRequest::getVar('message', '');

	 if (!ini_get('safe_mode')) {
	 	 @set_time_limit(60 * $GLOBALS[JNEWS.'script_timeout']);
	 }

	 //css injection for the images
	$doc = JFactory::getDocument();
	$css = '.icon-48-import { background-image:url('.JNEWS_PATH_ADMIN_IMAGES2 .'header/import.png)}';
	$doc->addStyleDeclaration($css, $type = 'text/css');
	 switch ($task) {
		 case ('doUpdate'):
			backHTML::_header( _JNEWS_MENU_UPDATE , 'update' , $message  , $task, $action );
			$update->doUpdate();
	     	$showListing = false;
	     	$showComplete = false;
	     	break;
		 case ('version'):
			$update->getVersion();
			break;
		 case ('complete'):
			$showComplete = true;
	     	$showListing = false;
			break;
		 case ('cancel'):
		 	jNews_Tools::redirect('index.php?option='.JNEWS_OPTION.'&act=update');
	     	$showListing = false;
			break;
      	case ('cpanel'):
		 	jNews_Tools::redirect('index.php?option='.JNEWS_OPTION );
	     	$showListing = false;
        	break;
      	case ('new1'):
	 		backHTML::_header( _JNEWS_MENU_UPDATE , 'import.png' , $message , $task, $action  );
      		$message = jnews::printYN( jnews::upgrade_News1() ,  '<br />' ._JNEWS_IMPORT_SUCCESS.' Anjel data' , _JNEWS_ERROR );
	   		jnews::resetUpgrade(1);
	   		echo '<br />'.$message;
        	break;
      	case ('new2'):
	 		backHTML::_header( _JNEWS_MENU_UPDATE , 'import.png' , $message , $task, $action  );
      		$message = jnews::printYN( jnews::upgrade_News2() ,  '<br />' ._JNEWS_IMPORT_SUCCESS.' Letterman data' , _JNEWS_ERROR );
	     	jnews::resetUpgrade(2);
	   		echo '<br />'.$message;
        	break;
      	case ('new3'):
	 		backHTML::_header( _JNEWS_MENU_UPDATE , 'import.png' , $message , $task, $action  );
      		$message = jnews::printYN( jnews::upgrade_News3() ,  '<br />' ._JNEWS_IMPORT_SUCCESS.' YaNC data' , _JNEWS_ERROR );
	     	jnews::resetUpgrade(3);
	   		echo '<br />'.$message;
        	break;
	 }

	 if ($showListing) {
		backHTML::_header( _JNEWS_MENU_UPDATE , 'import.png' , $message , $task, $action  );
 		backHTML::_upgrade();
 		$forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n" ;
		echo $forms['main'];
		backHTML::formStart('' , ''  ,'' );
		backHTML::showCompsList($update);
		$go[] = jnews::makeObj('act', $action);
		backHTML::formEnd($go);
	 } elseif ($showComplete) {
		backHTML::_header( _JNEWS_MENU_UPDATE , 'import.png' , $message , $task, $action  );
 		$forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n" ;
		echo $forms['main'];
		backHTML::formStart('' , ''  ,'' );
		backHTML::showUpdateOptions($update);
		$go[] = jnews::makeObj('act', $action);
		backHTML::formEnd($go);
	 }
 }

