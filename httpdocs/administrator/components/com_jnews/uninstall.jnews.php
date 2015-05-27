<?php
defined('_JEXEC') OR defined('_VALID_MOS') OR die('...Direct Access to this location is not allowed...');
### Copyright (C) 2006-2011 Joobi Limited. All rights reserved.
### http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=single-license

//Uninstall jNews component
function com_uninstall() {

	if ( defined('JPATH_ROOT') ) {
		define ('JNEWS_JPATH_ROOT' , JPATH_ROOT );
	}

	require_once( JNEWS_JPATH_ROOT . DS.'components'.DS.'com_jnews'.DS.'defines.php');

	unpublishSystemPlugin();

	$return = removeBots();

	$return = removeModule() AND $return ;

	return $return;

 }

//Uninstall plugins
function removeBots() {
	$database =& JFactory::getDBO();

	$pathBots = JNEWS_JPATH_ROOT . DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR.'jnews'.DIRECTORY_SEPARATOR;

	 $bot_files = array('jnewsbot.php', 'jnewsbot.xml', 'index.html', 'module.php', 'module.xml','tagdatetime.php','tagdatetime.xml','tagmodule.php','tagmodule.xml','tagsite.php','tagsite.xml','tagsubscriber.php','tagsubscriber.xml','tagsubscription.php','tagsubscription.xml' .
	 		'','forwardtofriend.php','forwardtofriend.xml', 'virtuemartproduct.php','virtuemartproduct.xml','jnewsbotk2.php','jnewsbotk2.xml','jnewsjomsocial.php','jnewsjomsocial.xml','jnewsshare.xml','jnewsshare.php');
	 foreach ($bot_files as $bot_file) {
	 	if(file_exists($pathBots . $bot_file)){
		 	if (!unlink($pathBots . $bot_file)) {
				echo '<p><b>Error:</b> Error deleting bot file ' . $bot_file . ' from bot directory.</p>';
			}
	 	}
	 }

	 if( file_exists(trim($pathBots,DIRECTORY_SEPARATOR)) ) {
		 if ( !@rmdir(trim($pathBots,DIRECTORY_SEPARATOR)) ) {
			 echo '<br /> Error deleting the plugin jNews directory.';
		 }
	 }

	$pathBots = JNEWS_JPATH_ROOT . DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR.'user'.DIRECTORY_SEPARATOR;
	$bot_files = array( 'jnewssyncuser.php', 'jnewssyncuser.xml');
	 foreach ($bot_files as $bot_file) {
	 	if(file_exists($pathBots . $bot_file)){
			if (!unlink($pathBots . $bot_file)) {
				echo '<p><b>Error:</b> Error deleting bot file ' . $bot_file . ' from bot directory.</p>';
			}
	 	}
	 }

	$bot_infos = array('jnewsbot','tagdatetime','tagsite','tagsubscriber','tagsubscription','forwardtofriend','virtuemartproduct','jnewsbotk2','jnewsjomsocial','jnewsshare');
	foreach ($bot_infos as $bot_info) {
		if(version_compare(JVERSION,'1.6.0','<')){ //j15
			$query = 'DELETE FROM `#__plugins` WHERE folder = \'jnews\' AND element = \'' . $bot_info . '\'';
	 	}else{
			$query = 'DELETE FROM `#__extensions` WHERE `type` = \'plugin\' AND folder = \'jnews\' AND element = \'' . $bot_info . '\'';
	 	}
		 $database->setQuery($query);
		 $database->query();
	}

 	if(version_compare(JVERSION,'1.6.0','<')){ //j15
		$query = "DELETE FROM `#__plugins` WHERE folder = 'user' AND element = 'jnewssyncuser' ";
 	}else{ //j16
		$query = "DELETE FROM `#__extensions` WHERE folder = 'user' AND `type` = 'plugin' AND element = 'jnewssyncuser' ";
 	}

	$database->setQuery($query);
	$database->query();

	 return true;

 }

//This is to unpublish the system plugins before deleting them so that it wont produce blank page during uninstall process
function unpublishSystemPlugin(){

	$database =& JFactory::getDBO();
	$bot_others=array('vmjnewssubs', 'jnewscron');
	 foreach ($bot_others as $bot_other) {
	 	if(version_compare(JVERSION,'1.6.0','<')){ //j15
			$query = 'UPDATE `#__plugins` SET `published` = 0  WHERE (folder = \'system\') AND element = \'' . $bot_other . '\'';
	 	}else{
			$query = 'UPDATE `#__extensions` SET `enabled` = 0  WHERE (folder = \'system\') AND `type` = \'plugin\' AND element = \'' . $bot_other . '\'';
	 	}
		 $database->setQuery($query);
		 $database->query();
		 $erro->err .= $database->getErrorMsg();
	 }

	return (empty($erro->err )) ? true: false;

 }

//Uninstall Module
function removeModule() {
	$database =& JFactory::getDBO();
	$query = "UPDATE `#__modules` SET `published`= 0 WHERE `module` LIKE '%jnews%' " ;
	$database->setQuery($query);
	$database->query();
 }

//Remove Folders during Uninstall process
function removeFolder($fichier) {
	if (file_exists($fichier)){
		chmod($fichier,0777);
		if (is_dir($fichier)){
			$id_dossier = opendir($fichier);
			while($element = readdir($id_dossier)){
				if ($element != "." && $element != "..")
					unlink($fichier.DIRECTORY_SEPARATOR.$element);
			}
			closedir($id_dossier);
			return rmdir($fichier);
		}
	}
	return false;
}