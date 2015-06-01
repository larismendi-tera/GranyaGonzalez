<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Tags Controller</p>
* <p>This function is the controller to view the fwdtofrien view</p>
* @author Joobi Limited <wwww.joobi.co>
*/
function tags($action, $task, $templateid='') {

		$doc = JFactory::getDocument();
        $doc->addStyleSheet( JNEWS_URL_ADMIN . 'cssadmin/jnews.css' );
      	$mailing = new stdClass;
      	$new = JRequest::getInt('new', 0, 'request');

        if($GLOBALS[JNEWS.'level'] > 2 && !$new){
        	$mailing->delay_max = JRequest::getInt('delay_max', 0, 'request');
		    $mailing->notify_id = JRequest::getInt('notify_id', 0, 'request');
		    $mailing->cat_id = JRequest::getVar('cat_id', 0, 'request');
        }

		jNews_TagsHTML::menuTags($mailing, $new);
		switch ($task) {

			case ('datetime'):
				jNews_TagsHTML::datetimeTags();
				break;

			case ('virtuemartproduct'):
				$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true );//second parameter was false
				$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::virtuemartproduct($forms);
				break;

			case ('subscription'):
				jNews_TagsHTML::subscriptionTags();
				break;

			case ('lyften'): //for lyften blog
				$forms['main'] = " <form action='". jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true ) ."' method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::lyftenblog();
				break;

			case ('deals'): //for deals
				$forms['main'] = " <form action='". jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true ) ."' method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::deals();
				break;

			case ('subscriber'):
				jNews_TagsHTML::subscriberTags();
				break;

			case ('mod'):## joomla module
				 if($GLOBALS[JNEWS.'level'] > 1){
					$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true );//second parameter was false
				 	$forms['main'] = " <form action=".$linkTagg." method='post' name='adminForm'> \n" ;
					jNews_TagsHTML::modTags($forms);
				 }else{
				 	echo 'This functionality in only available for Plus and PRO version.';
				 }
				break;

			case ('content'):## joomla content
				$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true );//second parameter was false
				$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::contentTags($forms);
				break;

			case ('k2content'):## k2 content
				jNews_TagsHTML::k2contentTags();
				break;

			case ('smart'):## smart news
				if($GLOBALS[JNEWS.'level'] > 2){
					jNews_Autonews::selectCat($mailing);
				}else{
				 	echo 'This functionality in only available for PRO version.';
				 }
				break;

			case ('site'):
				$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, false, false, true );
				$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::siteTags($forms);
				break;

			case ('jomsocial'):
				$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, false, false, true );
				$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::jomsocialTags($forms);
				break;
				
			case ('share'):
				$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, false, false, true );
				$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::shareTags($forms);
				break;

			case ('flexicontent'):
				if($GLOBALS[JNEWS.'level'] > 2){
					$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, false, false, true );
					$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
					jNews_TagsHTML::flexicontent($mailing);
				}else{
					echo 'This functionality in only available for PRO version.';
				}
				break;

			default:
				$linkTagg = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, false, false, true );
				$forms['main'] = "<form action=".$linkTagg." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::subscriptionTags($forms);

		}

		return true;
}//enfct
