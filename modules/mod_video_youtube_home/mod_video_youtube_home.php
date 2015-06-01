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
// dont let access outside module sistem
defined('_JEXEC') or die;
 
require_once (dirname(__FILE__).DS.'helper.php');

//assing module class sufix - important for custom modifications
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$return["video_id"] = modVideoYoutubeHomeHelper::getVideoId($params->get("youtube_video_url"));
$return["more_videos_url"] = $params->get("more_videos_url");
$return["more_videos_url_label"] = $params->get("more_videos_url_label");

//call layout
require JModuleHelper::getLayoutPath('mod_video_youtube_home', $params->get('layout', 'default'));
