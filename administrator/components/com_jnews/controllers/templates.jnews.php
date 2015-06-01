<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Templates controller</p>
* <p>This function is the controller to view the templates view</p>
* @author Joobi Limited <wwww.joobi.co>
*/
function templates( $action, $task, $template_id) {
	
	$my	= JFactory::getUser();
	$css = '.icon-48-templates { background-image:url('.JNEWS_PATH_ADMIN_IMAGES2 .'header/templates.png)}';
	$doc = JFactory::getDocument();
	$doc->addStyleDeclaration($css, $type = 'text/css');
	$img = 'templates.png';
	$templatesearch = JRequest::getVar('templatesearch', '' );
    $showTemplates = true;

	// defined toggle for publish and unpublish of mailings
	$willRedirect=false;
	$checkToggle = false;

	$cid = JRequest::getVar( 'cid' );
	if ( empty($template_id) ) {
		if ( !empty($cid) && is_array($cid)) $template_id = $cid[key($cid)];
	} else {
		if ( empty( $cid ) ) $cid[] = $template_id;
	}
	
	if( !empty($task) && ( $task == 'togle' ) ){
		$checkToggle= true;
//		$id = JRequest::getVar( 'templateid' );
		$id = $template_id;
		$col = JRequest::getVar( 'col' );

		$template_id = ( !empty( $id ) && !empty($col) ) ? $id : $template_id;
		$task = ( !empty( $template_id ) && !empty($col) ) ? $col : $task;

		$willRedirect = true;
	}
	

	switch ($task) {

		case ('new'):
		case ('add'):
			$showTemplates = false;
			$template = null;
	    	$form['main'] = " <form action='index.php' method='post' name='adminForm' enctype='multipart/form-data'> \n" ;
	    	$message = ( isset($message) ) ? $message : '';
		    backHTML::_header( _JNEWS_TEMPLATES , 'templates.png' , $message, $task, $action );
		    backHTML::formStart('template' , 0 ,''  );
		   	echo jNews_TemplatesHTML::createTemplate($template, $form);
		    $go[] = jnews::makeObj('act', $action);
			backHTML::formEnd($go);
			break;

		case ('edit'):
			$showTemplates = false;
			$template = jNews_Templates::loadOneTemplate('*', $template_id);
			$form['main'] = " <form action='index.php' method='post' name='adminForm' enctype='multipart/form-data'> \n" ;
			$message = ( isset($message) ) ? $message : '';
		    backHTML::_header( _JNEWS_TEMPLATES , 'templates.png' , $message, $task, $action );
		    backHTML::formStart('template' , 0 ,''  );
		   	echo jNews_TemplatesHTML::createTemplate($template,$form);
		    $go[] = jnews::makeObj('act', $action);
			$go[] = jnews::makeObj('template_id', $template_id);
			backHTML::formEnd($go);
			break;

		case ('save'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$message = jnews::printYN( jNews_Templates::saveTemplate($task , $template_id) ,  _JNEWS_TEMPLATE_SAVED , _JNEWS_ERROR );
			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=templates', $message);
			break;

		case ('apply'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$message = '';
			$message .= jnews::printYN( jNews_Templates::saveTemplate($task , $template_id) ,  _JNEWS_TEMPLATE_SAVED , _JNEWS_ERROR );
			$id = empty($template_id) ? jNews_Templates::loadOneTemplate('template_id', '', 'template_id', 'DESC'): $template_id;
			$converMessage = JRequest::getVar('message','','','string',JREQUEST_ALLOWRAW);
			if(!empty($converMessage)){
				$message .= '<br/>';
				$message .= implode("", $converMessage);
			}
			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=templates&task=edit&template_id='.$id, $message);
			break;

		case ('publish'):
			if(!$checkToggle) JRequest::checkToken() or die( 'Invalid Token' );
	     	$message = jnews::printYN( jNews_Templates::updateTemplate($cid, 'published',true) ,  'Successfully published template!' , 'Error publishing the template!' );
			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=templates', $message);
			break;

	   	case ('unpublish'):
	   		if(!$checkToggle) JRequest::checkToken() or die( 'Invalid Token' );
	   		$condition = jNews_Templates::updateTemplate($cid,'published', false);
	   		if ($condition) $message = jnews::printM('ok' , 'Successfully unpublished template!' );
			else $message = jnews::printM('defaulterror' , 'Unable to unpublished default template!' );
//	   		$message = jnews::defaultYN( jNews_Templates::updateTemplate($template_id,'published', false) ,  'Successfully unpublished template!' , 'Unable to unpublished default  template!' );
			if( $willRedirect ) jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=templates', $message );
			break;

		case ('copy'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$message = jnews::printYN( jNews_Templates::copyTemplate($template_id) ,  _JNEWS_TEMPLATE. _JNEWS_SUCCESS_COPIED , _JNEWS_ERROR );
			$showTemplates = true;
			break;

		case ('default'):
			$success = false;
			//set all the templates to premium = 0
			if (jNews_Templates::updateTemplate($template_id, 'default', false, false)) $success= true;
			//set the template published and premium
			if($success)jNews_Templates::updateTemplate($template_id, 'default', true, true);
			$message = jnews::printYN( $success, 'Successfully set the template to default!' , 'Unable to set template to default!' );
			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=templates', $message );
			break;

		case ('delete'):
			JRequest::checkToken() or die( 'Invalid Token' );
			$showTemplates = true;
			$isDefault = jNews_Templates::loadOneTemplate('premium',$template_id);
			if (!$isDefault) {
				$message = jnews::printYN( jNews_Templates::deleteTemplate($cid) ,  _JNEWS_TEMPLATE. _JNEWS_SUCCESS_DELETED , _JNEWS_ERROR );
			}else{
				$message = jnews::printM('red' , _JNEWS_TEMPLATE_DEFAULT_NODEL );
			}
			break;

		case ('cpanel'):
			backHTML::controlPanel();
			return true;
			break;

		case ('toggle'):
			JRequest::checkToken() or die( 'Invalid Token' );
			// main toggle for all usage
			$listid = JRequest::getVar( 'listid' );
			$column = JRequest::getVar( 'col' );

			if( !empty($listid) && !empty($column) ){
				$passObj = new stdClass;
				$passObj->tableName = '#__jnews_lists';
				$passObj->columnName = $column;
				$passObj->whereColumn = 'id';
				$passObj->whereColumnValue = $listid;

				jnews::toggle( $passObj );
			}

			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=templates' );
			break;
		case 'tempupload' :
			// HTML for upload template
//			JRequest::checkToken() or die( 'Invalid Token' );
			
			$html = '<form action="index.php?option='.JNEWS_OPTION.'&act=templates&task=upload" method="post" name="adminForm" enctype="multipart/form-data">';
			$html .= '<table style="width:100%;padding:100px;">';
			$html .= '<tr>';
			$html .= '<td style="text-align:center;"> <input type="FILE" name="tempupload"> </td>';
			$html .= '</tr><tr">';
			$html .= '<td style="text-align:center;padding:20px;"> <input type="submit" value="Upload Template" style="width:130px;height:25px;"> </td>';
			$html .= '</tr>';
			$html .= '</table>';
			$html .= JHTML::_( 'form.token' );
			$html .= '</form><br/><br/>';

			echo $html;

			$showTemplates = false;
			break;

		case 'sendtest':
			JRequest::checkToken() or die( 'Invalid Token' );
			//we save first the template
			$saveStatus = jNews_Templates::saveTemplate($task , $template_id);

			//then we send it if the template is successfully saved
			if($saveStatus){

				$message = jnews::printM('ok',_JNEWS_TEMPLATE_SAVED);

				$my = JFactory::getUser();

				$mailing = new stdClass;
				$receiver = new stdClass;
				$status =  false;

				$mailing->id = 1;
				$mailing->html=1;
			 	$mailing->images = '';
			 	$mailing->attachments = '';
			 	$mailing->subject = jNews_Templates::loadOneTemplate( 'name', $template_id);
			 	$mailing->htmlcontent = jNews_Templates::loadOneTemplate( 'body', $template_id);
				$mailing->template_id = $template_id;

				$receiver->name = $my->name;
				$receiver->email = $my->email;
				$receiver->receive_html=1;
				$receiver->user_id=$my->id;

				$mailerC = new jNews_ProcessMail();
				$sendStatus = $mailerC->send( $mailing, $receiver );

				$success='Template '.$mailing->subject.' successfully sent to '.$receiver->email;
				$error='There is a problem in sending the template '.$mailing->subject.' <br/>'._JNEWS_SENDTEST_CONFIGERROR ;

				$message = $sendStatus ? jnews::printM('ok',$success) : jnews::printM('error',$error);

			}else{ //otherwise we give an error message
				$message = jnews::printM('error',_JNEWS_ERROR);
			}

			jNews_Tools::redirect( 'index.php?option='.JNEWS_OPTION.'&act=templates&task=edit&template_id='.$template_id, $message);
			break;

		case 'upload' :
			JRequest::checkToken() or die( 'Invalid Token' );
			$db = JFactory::getDBO();

			$fileName = $_FILES[ 'tempupload' ][ 'name' ];
			$folderName = substr( $fileName, 0, -4 );

			// explode to array to compare and check if the uploaded file is a zip file
			$type = $_FILES[ 'tempupload' ][ 'type' ];

			// if zip is not found then return to previous upload page
			if( strtolower($type)  != 'application/zip' ) {
				if ( strtolower( substr( $fileName, -4 ) ) != '.zip' ) {
					if( version_compare(JVERSION,'1.6.0','<') ){ //j15
						echo "<script> alert('".addslashes(_JNEWS_UPLOAD_ZIP_INVALID)."'); document.location.href='index.php?option='.JNEWS_OPTION.'&act=templates';</script>";
					}else{
						echo "<script> alert('".addslashes(_JNEWS_UPLOAD_ZIP_INVALID)."'); window.parent.SqueezeBox.close();</script>";
					}
					break;
				}
			}

			$result = jNews_Templates::uploadTemplate();

			if( $result ){

				// if success
				// read index.html of file for template body content
				$tempPath = JNEWS_JPATH_ROOT_NO_ADMIN .DS.'media'.DS.JNEWS_OPTION.DS.'templates'.DS;
				$file = fopen($tempPath.$folderName.DS.'index.html', "r") or exit("Unable to open file!");

				$tempbody = array();

				while(!feof($file)){
			 	 	$tempbody[]= fgets($file);
			 	} //endwhile

			 	fclose($file);
				$tempbody = implode( ' ', $tempbody );
				
				$standardCSSA = array();
				$extraCSSStyles = '';
				
				if(is_file($tempPath.$folderName.DS.'css'.DS.'style.css')){//new template package with style.css file
					//we get here the css codes from the uploaded template
					$cssfile = fopen($tempPath.$folderName.DS.'css'.DS.'style.css', "r") or exit("Unable to open file!");
					
					$cssstyle = array();
					
					while(!feof($cssfile)){
				 	 	$cssstyle[]= fgets($cssfile);
				 	} //endwhile
				 	
				 	fclose($cssfile);
				 	$cssstyle = implode( ' ', $cssstyle );
				 	$cleanCSSstyle = jNews_Templates::cleanCSSComments($cssstyle);//cleancsscomments

				 	@require_once( JNEWSPATH_CLASS . 'class.cssinlinestyles.php');
					if(class_exists('CSSToInlineStyles')){
						$newCSSProcess = new CSSToInlineStyles;
						$newCSSProcess->setCSS( $cleanCSSstyle );
						$newCSSProcess->processCSS();
		
						//we define the predefined selectors for the css
						$standardSelectorsA = array('h1','h2','h3','h4','h5','h6','a','ul','li','.unsubscribe','.subscriptions','.content','.title','.readmore','.online','.aca_content','.aca_title','.aca_readmore','.aca_online','.aca_subscribe','.aca_unsubscribe','.aca_subscriptions');

						$standardCSSA = $newCSSProcess->getStandardCSSTag($newCSSProcess->cssRules, $standardSelectorsA);
						$extraCSSStyles = $newCSSProcess->getExtraCSSTag($newCSSProcess->cssRules, $standardSelectorsA);

					}
				}			

				// replace source image paths from 'images/' to 'media/.../templates/$FOLDERNAME/'
				$bodyImgA = JRequest::getVar( 'bodyImg' );

				if(is_file($tempPath.$folderName.DS.'css'.DS.'style.css')){//new template package
//					$body = preg_replace('#images\/#', JNEWS_JPATH_LIVE . '/media/'. JNEWS_OPTION . '/templates/' . $folderName .'/images/', $tempbody);
					$origin = '"images/';
					$destination = '"' . JNEWS_JPATH_LIVE . '/media/'. JNEWS_OPTION . '/templates/'. $folderName.'/images/';
					$body = str_replace( $origin, $destination, $tempbody );
				}else{
//					$body = preg_replace('#images\/#', JNEWS_JPATH_LIVE . '/media/'. JNEWS_OPTION . '/templates/'. $folderName.'/' , $tempbody);
					$origin = 'media/'. JNEWS_OPTION . '/templates/'. $folderName.'/';
					$destination = JNEWS_JPATH_LIVE . '/media/'. JNEWS_OPTION . '/templates/'. $folderName.'/';
					$body = str_replace( $origin, $destination, $tempbody );
				}						

				$template=null;
				$template->name = ucfirst($folderName);
				$template->description = '';
				$template->created = time();
				$template->body = addslashes($body);
				$template->altbody = '';
				$template->premium = 0;
				$template->namekey = $folderName;
				$template->published = 1;
				$template->styles = addslashes(serialize($standardCSSA));
				$template->csstyle = addslashes($extraCSSStyles);
				$template->thumbnail = '';

				$templateA = (array) $template;

				$query = 'SELECT * FROM `#__jnews_templates` WHERE `namekey` = \'' . $template->namekey . '\' ' ;;
				$db->setQuery($query);
				$findresult = $db->loadObject();

				if(empty($findresult)){
					// store template
					$status=jNews_Templates::storeTemplate( $templateA );
				}else{
					//update template
					$query = 'UPDATE `#__jnews_templates` SET `body` = \'' . $template->body . '\' , `availability` = 1 WHERE `namekey`= \'' . $template->namekey . '\'  AND `template_id`='.$findresult->template_id;
					$db->setQuery( $query );
					$status=$db->query();
				}

				// upload success
				// display success message
				if($status){
					if( version_compare(JVERSION,'1.6.0','<') ){ //j15
						echo "<script> alert('". addslashes(_JNEWS_TEMPLATE_UPLOAD_SUCCESS) ."'); document.location.href='index.php?option=".JNEWS_OPTION."&act=templates';</script>";
					}else{ //j16
						echo "<script> alert('". addslashes(_JNEWS_TEMPLATE_UPLOAD_SUCCESS) ."'); window.parent.location.reload();</script>";
					}
				}

			} else {

				// failed uploading
				// display an error message
				if( version_compare(JVERSION,'1.6.0','<') ){ //j15
					echo "<script> alert('". addslashes(_JNEWS_TEMPLATE_UPLOAD_FAIL) ."'); document.location.href='index.php?option=".JNEWS_OPTION."&act=templates';</script>";
				}else{ //j16
					echo "<script> alert('". addslashes(_JNEWS_TEMPLATE_UPLOAD_FAIL) ."'); window.parent.SqueezeBox.close();</script>";
				}

			}

			$showTemplates = false;
			break;

		case 'preview' :

			$forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n" ;
			$forms['filter'] = " <form name='jnewsFilterForm' method='POST' action='index.php'> \n" ;

			$id = JRequest::getInt('template_id', 0, 'request');
			$body = jNews_Templates::loadOneTemplate('body', $id);

			jNews_Templates::includeStyles( $body, $id );
			jNews_TemplatesHTML::previewTemplate($body , $forms);

			$showTemplates = false;
			break;

		case 'assign' :
			$templatesearch = JRequest::getVar('templatesearch', '' );
			$linkTh = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true );
			$forms['main'] = "<form action=".$linkTh." method='post' name='adminForm'> \n" ;
			$paginationStart = JRequest::getVar( 'pg' );

			if( !empty($paginationStart) ){
				$limitstart = 0;
				$limitend = $paginationStart;
			}else{
				$app = JFactory::getApplication();
				$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
				$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
			}

			$limittotal = jNews_Templates::countTemplates(1, 1);

			$setLimit = new stdClass;
			$setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
			$setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
			$setLimit->end = ( !empty($limitend) ) ? $limitend: 20;
			$templates = jNews_Templates::getTemplates( true, false, $templatesearch, $setLimit->start, $setLimit->end, null, 1);//first param to true to show only the published

			jNews_TemplatesHTML::assignTemplate( $templates, $forms, $setLimit, $templatesearch );
			$showTemplates = false;
			break;
	} 


	 if ($showTemplates) {
		$start = JRequest::getVar('start', '0' );
		$templatesearch = JRequest::getVar('templatesearch', '' );
	 	$limit = -1;
	 	$message = ( isset($message) ) ? $message : '';
		backHTML::_header( _JNEWS_TEMPLATES , $img , $message , $task, $action  );
   		$forms['main'] = " <form action='index.php' method='post' name='adminForm'> \n" ;
		$forms['filter'] = " <form name='jnewsFilterForm' method='POST' action='index.php'> \n" ;
		backHTML::formStart('show_template' , ''  ,'' );

		// added this code for pagination ===========================
		$paginationStart = JRequest::getVar( 'pg' );

		$app = JFactory::getApplication();

		if( !empty($paginationStart) ){
			$limitstart = 0;
			$limitend = $paginationStart;
		}else{
			$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
			$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
		}

		$setSort = new stdClass;
		$setSort->orderValue = $app->getUserStateFromRequest( JNEWS_OPTION.'.templates.filter_order', 'filter_order', 'premium','cmd' );
		$setSort->orderDir	= $app->getUserStateFromRequest( JNEWS_OPTION.'.templates.filter_order_Dir', 'filter_order_Dir', 'desc',	'word' );

		$limittotal = jNews_Templates::countTemplates( );
		$setLimit = new stdClass;
		$setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
		$setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
		$setLimit->end = ( !empty($limitend) ) ? $limitend: $limittotal;

		// recheck start
		if( $setLimit->total == $setLimit->end ) $setLimit->start = 0;

		$templates = jNews_Templates::getTemplates(false, false, $templatesearch, $setLimit->start, $setLimit->end,$setSort);
		//recheck limit total [pagination]
		if( isset($setLimit->total) && !empty($templatesearch) ){
			$setLimit->total = ( !empty($temps) ) ? count( $templates ) : $setLimit->total;
		}

		jNews_TemplatesHTML::displayTemplateList($templates, $forms, $setLimit->start, $setLimit->end, $templatesearch, $action, $setLimit, $setSort);
		$go[] = jnews::makeObj('act', 'templates');
		$go[] = jnews::makeObj('filter_order', $setSort->orderValue);
		$go[] = jnews::makeObj('filter_order_Dir', $setSort->orderDir);
		backHTML::formEnd($go);
	 }
	return true;
}//enfct

