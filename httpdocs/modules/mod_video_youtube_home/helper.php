<?php
/*------------------------------------------------------------------------
# mod_video_youtube_home.php - Video Youtube Home (module)
# ------------------------------------------------------------------------
# version		1.0.0
# author    	Robert Pérez Reimi
# copyright 	Copyright (c) 2012 Teravisiontech.com	 All rights reserved.
# @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites 	http://teravisiontech.com/
-------------------------------------------------------------------------
*/
defined('_JEXEC') or die;

/**
* 
* Helper for Social Links Module
* mod prefix in class name is added by convention
* 
*/
class modVideoYoutubeHomeHelper {
	
	/* 
	 * Get Video id for given url
	 * @return youtube videoId
	 * 	
	 */
	static function getVideoId($url) {

		$res = explode("v=",$url);
		if(isset($res[1])) {
			$res1 = explode('&',$res[1]);
			if(isset($res1[1])){
				$res[1] = $res1[0];
			}
			$res1 = explode('#',$res[1]);
			if(isset($res1[1])){
				$res[1] = $res1[0];
			}
		}
		return substr($res[1],0,12);
		return false;
	}
}