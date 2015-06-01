<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

if(version_compare(JVERSION,'1.6.0','<')){
	class JElementHelp extends JElement
	{
		function fetchElement($name, $value, &$node, $control_name)
		{
			if(!defined('JNEWS_JPATH_ROOT')){
				if ( defined('JPATH_ROOT') AND class_exists('JFactory')) {	// joomla 15
					$mainframe = JFactory::getApplication();
					define ('JNEWS_JPATH_ROOT' , JPATH_ROOT );
				}
			}

			jimport('joomla.filesystem.file');
			if ( strtolower( substr( JPATH_ROOT, strlen(JPATH_ROOT)-13 ) ) =='administrator' ) {
				$adminPath = strtolower( substr( JPATH_ROOT, strlen(JPATH_ROOT)-13 ) );
			} else {
				$adminPath = JPATH_ROOT;
			}
			
			$mainAdminPathDefined = $adminPath . DS.'components'.DS.'com_jnews'.DS.'defines.php';
			if ( JFile::exists( $mainAdminPathDefined ) ) {
				require_once( $mainAdminPathDefined );
				JHTML::_('behavior.modal','a.modal');
				if ( JFile::exists(JNEWS_JPATH_ROOT . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php')) {
					require_once(JNEWS_JPATH_ROOT . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
				} else {
					die ("jNews Module\n<br />This module needs the jNews component.");
				}
				$link = JNEWS_HOME_SITE.'/index.php?option=com_jlinks&controller=redirect&link=Mod_jnews';//this should be a jlinks for the module documentation
				$text = '<a class="modal" title="'.JText::_('Help',true).'"  href="'.$link.'" rel="{handler: \'iframe\', size: {x: 800, y: 500}}"><button onclick="return false">'.JText::_('Help').'</button></a>';
				return $text;
			}
		}
	}
}else{
	class JFormFieldHelp extends JFormField
	{
		var $type = 'help';
		function getInput() {
			
			if(!defined('JNEWS_JPATH_ROOT')){
				if ( defined('JPATH_ROOT') AND class_exists('JFactory')) {	// joomla 15
					$mainframe = JFactory::getApplication();
					define ('JNEWS_JPATH_ROOT' , JPATH_ROOT );
				}
			}

			jimport('joomla.filesystem.file');
			if ( strtolower( substr( JPATH_ROOT, strlen(JPATH_ROOT)-13 ) ) =='administrator' ) {
				$adminPath = strtolower( substr( JPATH_ROOT, strlen(JPATH_ROOT)-13 ) );
			} else {
				$adminPath = JPATH_ROOT;
			}
			
			$mainAdminPathDefined = $adminPath . DS.'components'.DS.'com_jnews'.DS.'defines.php';
			JHTML::_('behavior.modal','a.modal');
			if ( JFile::exists( $mainAdminPathDefined ) ) {
				require_once( $mainAdminPathDefined );
				if ( JFile::exists(JNEWS_JPATH_ROOT . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php')) {
					require_once(JNEWS_JPATH_ROOT . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
				} else {
					die ("jNews Module\n<br />This module needs the jNews component.");
				}
				$link = JNEWS_HOME_SITE.'/index.php?option=com_jlinks&controller=redirect&link=Mod_jnews'; //this should be a jlinks for the module documentation
				$text = '<a class="modal" title="'.JText::_('Help',true).'"  href="'.$link.'" rel="{handler: \'iframe\', size: {x: 800, y: 500}}"><button onclick="return false">'.JText::_('Help').'</button></a>';
				return $text;
           }
		}
	}
}