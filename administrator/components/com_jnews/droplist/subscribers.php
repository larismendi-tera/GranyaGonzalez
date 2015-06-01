<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class subscribersReportType {

 	public static function subscirbersType(){
		$values = array();
		$values[] = JHTML::_('select.option', 'all-users', JText::_(_JNEWS_SUBSCRIBERS_ALL_USERS) );
		$values[] = JHTML::_('select.option', 'registered', JText::_(_JNEWS_SUBSCRIBERS_REGISTERED) );
		$values[] = JHTML::_('select.option', 'guests', JText::_(_JNEWS_SUBSCRIBERS_GUESTS) );

		return JHTML::_('select.radiolist',   $values, "subcscriberstype", 'class="inputbox" size="1"', 'value', 'text',"subcscriberstype");
	}
 }

