<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
 * This function is used to create or update Joobi cron Record
 * @param $publish string [Yes|No]
 * @return
 */
 function joobiCron($publish='No'){

	$content = '';
	$base = JNEWS_JPATH_LIVE;
	$password=$GLOBALS[JNEWS.'cron_pass'];

	$site= urlencode(base64_encode(serialize($base)));

	if($GLOBALS[JNEWS.'j_cron']=='2'){
		$publish = 'Yes';
	}else{
		$publish = 'No';
	}

	$content .= '<img src="http://www.joobi.co/index.php?option=com_jscheduler&controller=jurlauncher.cron&task=save&site='.$site.'&password='.$password.'&publish='.$publish.'" border="0" width="1" height="1" >';
	echo $content;

}