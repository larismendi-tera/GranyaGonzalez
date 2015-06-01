<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class intervalReportType {

 	public static function intervalType($selected){
		$values = array();
		$values[] = JHTML::_('select.option','daily', JText::_(_JNEWS_INTERVAL_DAILY) );
		$values[] = JHTML::_('select.option', 'weekly', JText::_(_JNEWS_INTERVAL_WEEKLY) );
		$values[] = JHTML::_('select.option', 'monthly', JText::_(_JNEWS_INTERVAL_MONTHLY) );
		$values[] = JHTML::_('select.option', 'yearly', JText::_(_JNEWS_INTERVAL_YEARLY) );

		return JHTML::_('select.radiolist',   $values, "rptinterval", 'class="inputbox" size="1"','value', 'text',$selected);
	}
 }

