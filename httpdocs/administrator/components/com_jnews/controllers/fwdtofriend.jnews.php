<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Tags Controller</p>
* <p>This function is the controller to view the tags view</p>
* @author Joobi Limited <wwww.joobi.co>
*/
function fwdtofriend($action, $task) {
		$doc = JFactory::getDocument();
        $doc->addStyleSheet(JNEWS_URL_ADMIN . 'cssadmin/jnews.css' );
      	$mailing = new stdClass;
        if($GLOBALS[JNEWS.'level'] > 2){
	        $mailing->delay_max = JRequest::getInt('delay_max', 0, 'request');
	        $mailing->notify_id = JRequest::getInt('notify_id', 0, 'request');
	        $mailing->cat_id = JRequest::getVar('cat_id', 0, 'request');
        }
		jNews_TagsHTML::menuTags($mailing);
		switch ($task) {
			case ('datetime'):
				jNews_TagsHTML::datetimeTags();
				break;
			case ('subscription'):
				jNews_TagsHTML::subscriptionTags();
				break;
			case ('subscriber'):
				jNews_TagsHTML::subscriberTags();
				break;
			case ('mod')://joomla module
				 if($GLOBALS[JNEWS.'level'] > 1){
					$linkFriendd = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, false, false, true );
					$forms['main'] = "<form action=".$linkFriendd." method='post' name='adminForm'> \n" ;
					jNews_TagsHTML::modTags($forms);
				 }else{
				 	echo 'This functionality in only available for Plus and PRO version.';
				 }
				break;
			case ('content')://joomla content
				jNews_TagsHTML::contentTags();
				break;
			case ('smart')://smart news
				if($GLOBALS[JNEWS.'level'] > 2){
					jNews_Autonews::selectCat($mailing);
				}else{
				 	echo 'This functionality in only available for PRO version.';
				 }
				break;
			case ('site'):
				$linkFriendd = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, false, false, true );
				$forms['main'] = "<form action=".$linkFriendd." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::siteTags($forms);
				break;
			default:
				$linkFriendd = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, false, false, true );
				$forms['main'] = "<form action=".$linkFriendd." method='post' name='adminForm'> \n" ;
				jNews_TagsHTML::subscriptionTags($forms);

		}

		return true;
}//enfct
