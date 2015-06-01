<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class rangeReportType {

 	public static function rangeType($selected){
		$values = array();
		$values[] = JHTML::_('select.option', 'yesterday', JText::_(_JNEWS_DEFINED_RANGE_YESTERDAY) );
		$values[] = JHTML::_('select.option', 'today', JText::_(_JNEWS_DEFINED_RANGE_TODAY) );
		$values[] = JHTML::_('select.option', 'this-week', JText::_(_JNEWS_DEFINED_RANGE_THIS_WEEK) );
		$values[] = JHTML::_('select.option', 'last-week', JText::_(_JNEWS_DEFINED_RANGE_LAST_WEEK) );
		$values[] = JHTML::_('select.option', 'last-2-weeks', JText::_(_JNEWS_DEFINED_RANGE_LAST_TWO_WEEK) );
		$values[] = JHTML::_('select.option', 'this-month', JText::_(_JNEWS_DEFINED_RANGE_THIS_MONTH) );
		$values[] = JHTML::_('select.option', 'last-month', JText::_(_JNEWS_DEFINED_RANGE_LAST_MONTH) );
		$values[] = JHTML::_('select.option', 'this-year', JText::_(_JNEWS_DEFINED_RANGE_THIS_YEAR) );
		$values[] = JHTML::_('select.option', 'last-year', JText::_(_JNEWS_DEFINED_RANGE_LAST_YEAR) );
		$values[] = JHTML::_('select.option', '2-years-ago', JText::_(_JNEWS_DEFINED_RANGE_TWO_YEARS_AGO) );
		$values[] = JHTML::_('select.option', '3-years-ago', JText::_(_JNEWS_DEFINED_RANGE_3_YEARS_AGO) );

		return JHTML::_('select.genericlist',   $values, "rptrange", 'class="inputbox" size="1"', 'value', 'text',$selected);
	}
 }

