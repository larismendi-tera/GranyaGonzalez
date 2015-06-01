<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co
if ( !class_exists( 'JElement' ) ) {
	require_once JPATH_ROOT . DS . 'libraries' . DS . 'joomla' . DS . 'html' . DS . 'parameter' . DS . 'element' . DS . 'element.php';
}
if ( class_exists( 'JElement' ) ) {
class JElementVmfields extends JElement{
	function fetchElement($name, $value, &$node, $control_name){
		$db = JFactory::getDBO();
		$db->setQuery('SELECT `virtuemart_custom_id`, `custom_title` FROM #__virtuemart_customs ');
		$tableField = $db->loadObjectList();
		
		if ( empty($tableField) ) {	//old VM version
			$tableField = $db->getTableFields('#__vm_user_info');	
			$fields = reset( $tableField );
			$dropdown = array();
			foreach($fields as $oneField => $fieldType ) {
				$dropdown[] = JHTML::_('select.option', $oneField, $oneField );
			}
			return JHTML::_('select.genericlist', $dropdown, $control_name.'['.$name.']' , 'size="1"', 'value', 'text', $value);
		}

		//new VM version
		$dropdown = array();
		foreach($tableField as $oneField => $fieldType ) {
			$dropdown[] = JHTML::_('select.option', $fieldType->virtuemart_custom_id, $fieldType->custom_title );
		}
		return JHTML::_('select.genericlist', $dropdown, $control_name.'['.$name.']' , 'size="1"', 'value', 'text', $value);
	}
}
}