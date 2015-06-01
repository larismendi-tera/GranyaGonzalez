<?php
/**
 * @package Joomla.Administrator
 * @subpackage com_talleres
 * @copyright Copyright (C) 2012 Robert Reimi robert.reimi@gmail.com
 * @license GNU General Public License version 2 or later
 *
 */

// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_talleres')) {
    return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}
// Include dependencies
jimport('joomla.application.component.controller');
$controller = JController::getInstance('Talleres');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
