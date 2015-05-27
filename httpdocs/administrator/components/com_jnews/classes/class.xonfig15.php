<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_Config extends JTable {

	var $akey = null;
	var $text = null;
	var $value = null;

	public function jNews_Config() {
		$db = JFactory::getDBO();
		parent::__construct( '#__jnews_xonfig', 'akey', $db );
	}

	 function saveConfig($config) {
		$configKeys = array_keys($config);
		$size = sizeof($configKeys);
		for ($index = 0; $index < $size; $index++) {
			if (get_magic_quotes_gpc()) {
				$key = stripslashes($configKeys[$index]);
				$text = stripslashes($config[$configKeys[$index]]);
			} else {
				$key = $configKeys[$index];
				$text = $config[$configKeys[$index]];
			}
			$key = stripslashes( $key);
			$key = str_replace( "'" , "" , $key);
			if ( $key == 'token_new' && !empty($text) ) {
				$key = 'token';
				$this->update( 'license' , '' );
			}
			if ( $key=='license1' ) {
				$text = trim($text);
				$key = 'license';
			}
			if (isset($GLOBALS[JNEWS.$key]) &&  $GLOBALS[JNEWS.$key]!= $text) {
//				if ( $key=='token' ) $code = jNews_Auto::getToken($text);
				$this->update($key, $text);
			}

		}
		if(class_exists('jNews_Auto')) jNews_Auto::good();
		return true;
   }

	 function loadConfig() {
		$db = JFactory::getDBO();

		$query = 'SELECT * FROM `#__jnews_xonfig` ';
		$db->setQuery($query);
		$configs = $db->loadObjectList();
		if ( !empty($configs) ) {
			foreach ($configs as $config) {
				if (!empty($config->text)) $GLOBALS[JNEWS.$config->akey] = $config->text;
				else $GLOBALS[JNEWS.$config->akey] = $config->value;
			}
		}

		return true;
   }


	function get( $key, $default=null )  {
			$db = JFactory::getDBO();

		$query = 'SELECT `text` FROM `#__jnews_xonfig` ';
		$query .= " WHERE `akey`=  '$key' ";
		$db->setQuery($query);
		return $db->loadResult();

	 }



	function plus($key, $value) {
			$db = JFactory::getDBO();

		$query = 'UPDATE `#__jnews_xonfig` SET ';
		$query .= " `value` = `value` + $value ";
		$query .= " WHERE `akey`=  '$key' ";
		$db->setQuery($query);
		$db->query();
		return $db->getErrorMsg();

	 }


	function insert($key, $text='' , $value=0, $force=false) {
		$db= JFactory::getDBO();

		if (!$force AND !isset($GLOBALS[JNEWS.$key]) ) $force = true;
		if ( $force ) {
			$query = 'REPLACE INTO `#__jnews_xonfig` ';
			$query .= '(`akey`, `text`, `value`) ';
			$query .= " VALUES ( '$key' , '$text' , '$value' )" ;
			$db->setQuery($query);
			$db->query();
			if ($value>0) $GLOBALS[JNEWS.$key] = $value;
			else $GLOBALS[JNEWS.$key] = $text;
			
			return $db->getErrorMsg();
		}

	 }


	function update($key, $text) {
		$this->akey=$key;
		$this->text=$text;
		$this->insert($key, $text, 0, true);
		$GLOBALS[JNEWS.$key] = $text;
		return true;
	 }


	function updateActiveList() {

		$xf = new jNews_Config();
		$j = 0;
		$nb = array();
		for($i = 1; $i < $GLOBALS[JNEWS.'nblist']; $i ++) {
			if ($GLOBALS[JNEWS.'listype'.$i] == 1) {
				$j++;
				$nb[$j] = $i;
			}
		}

		$activeList = implode(",", $nb);

		return $xf->update('activelist', $activeList);

	 }


	function filetoDatabase($config) {
		$configKeys = array_keys($config);
		$size = sizeof($configKeys);
		for ($index = 0; $index < $size; $index++) {
			$this->insert($configKeys[$index], $config[$configKeys[$index]], 0);
		}
		return true;
	}
	
	/**
	 * 
	 *get the value of text of the passed key
	 */
	function getKeyValues($key){
		if(empty($key)) return '';
		
		static $value = array();
		
		if(!isset($value[$key])){
			$db = JFactory::getDBO();
			
			$query = 'SELECT `text` FROM `#__jnews_xonfig` WHERE `akey`="'. $key.'"';
			$db->setQuery($query);
			$db->query();
			
			$value[$key] = $db->loadResult();
		}
		return $value[$key];
	}

}


