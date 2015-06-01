<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class outputReportType {

 	public static function reportType($selected){
		$values = array();
		$values[] = JHTML::_('select.option', 'listing', JText::_(_JNEWS_REPORT_LISTING) );
		$values[] = JHTML::_('select.option', 'graph', JText::_(_JNEWS_REPORT_GRAPH) );

		return JHTML::_('select.radiolist',   $values, "rpttype", 'class="inputbox" size="1"', 'value', 'text',$selected);
	}
 }

