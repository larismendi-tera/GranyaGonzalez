<?php
/**
 * @package Joomla.Administrator
 * @subpackage com_talleres
 * @copyright Copyright (C) 2012 Robert Reimi robert.reimi@gmail.com
 * @license GNU General Public License version 2 or later
 *
 */

defined('_JEXEC') or die;

/**
*
* Talleres talleres Controller
*
* @package Joomla.Administrator
* @subpackage com_talleres
*
*/


class RecordsController extends JController {

    public function display($cacheable = false, $urlparams = false) {



        JLoader::register('RecordsHelper', JPATH_COMPONENT.'/helpers/records.php');

        RecordsHelper::addSubmenu(JRequest::getCmd('view', 'records'));

        $view = JRequest::getCmd('view', 'records');
        $layout = JRequest::getCmd('layout', 'default');
        $id = JRequest::getInt('id');

        // Check edit form
        if ($view == 'record' && $layout == 'edit' && !$this->checkEditId('com_records.edit.record', $id)){
            //Dont allow direct post request or unauthorized
            $this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));

            $this->setMessage($this->getError(), 'error');
            $this->setRedirect(JRoute::_('index.php?option=com_records', false));
            return false;
        }

        parent::display();
        return $this;
    }

}



