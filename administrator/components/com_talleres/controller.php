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


class TalleresController extends JController {

    public function display($cacheable = false, $urlparams = false) {

        JLoader::register('TalleresHelper', JPATH_COMPONENT.'/helpers/talleres.php');

        $view = JRequest::getCmd('view', 'talleres');
        $layout = JRequest::getCmd('layout', 'default');
        $id = JRequest::getInt('id');

        TalleresHelper::addSubmenu(JRequest::getCmd('view', 'talleres'));

        // Check edit form
        if ($view == 'taller' && $layout == 'edit' && !$this->checkEditId('com_talleres.edit.taller', $id)){
            //Dont allow direct post request or unauthorized
            $this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));

            $this->setMessage($this->getError(), 'error');
            $this->setRedirect(JRoute::_('index.php?option=com_talleres&view=talleres', false));
            return false;
        }

        parent::display();
        return $this;
    }

}



