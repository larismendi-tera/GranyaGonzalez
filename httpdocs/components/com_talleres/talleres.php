<?php
/**
 * talleres.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */

defined('_JEXEC') or die;
jimport('joomla.application.component.controller');
$controller = JController::getInstance('Talleres');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
