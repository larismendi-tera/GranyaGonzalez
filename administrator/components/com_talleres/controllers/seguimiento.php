<?php
/**
 * @package Joomla.Administrator
 * @subpackage com_talleres
 * @copyright Copyright (C) 2012 Robert Reimi robert.reimi@gmail.com
 * @license GNU General Public License version 2 or later
 *
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

class TalleresControllerSeguimiento extends JControllerForm
{

    protected $view_list = 'seguimientos';


    /**
     * Method to add a new seguimiento
     *
     * @return  mixed  True if the record can be added, a JError object if not.
     *
     * @since   1.6
     */
    public function add()
    {
        // Initialise variables.
        $app = JFactory::getApplication();
        $context = 'com_talleres.edit.seguimiento';

        $result = parent::add();
        if ($result)
        {
            $app->setUserState($context . '.type', null);
            $app->setUserState($context . '.link', null);

            $userId = $app->getUserStateFromRequest('com_talleres.seguimientos.filter.user_id', 'user_id', '', 'cmd');
            $app->setUserState($context . '.user_id', $userId);
            $this->setRedirect(JRoute::_('index.php?option=com_talleres&view=seguimiento&user_id=' . $userId . $this->getRedirectToItemAppend(), false));
        }

        return $result;
    }

    public function edit($key = null, $urlVar = null)
    {
        $app = JFactory::getApplication();
        $context = 'com_talleres.edit.seguimiento';

        $result = parent::edit($key, $urlVar);
        if ($result)
        {
            $app->setUserState($context . '.type', null);
            $app->setUserState($context . '.link', null);

            $inscripcionId = $app->getUserStateFromRequest($this->context . '.filter.inscripcion_id', 'inscripcion_id', '', 'cmd');
            $app->setUserState($context . '.inscripcion_id', $inscripcionId);
        }
        return $result;
    }

    /**
     * Method override to check if you can add a new record.
     * Used to check if we have permissions at category level, not required because i dont need category level
     * I leave it here commented for future references
     *
     * @param
    array
    $data
    An array of input data.
     * @return boolean
     */
    protected function allowAdd($data = array())
    {

        return parent::allowAdd($data);

        // Initialise variables.
        $user = JFactory::getUser();
        //$categoryId = JArrayHelper::getValue($data, 'catid', JRequest::getInt('filter_category_id'), 'int');
        $allow = null;

        if ($categoryId) {
            // If the category has been passed in the URL check it.
            $allow = $user->authorise('core.create', $this->option);
        }

        if ($allow === null) {
            // In the absense of better information, revert to the component permissions.
            return parent::allowAdd($data);
        } else {
            return $allow;
        }
    }

    /**
     * Method to check if you can add a new record.
     *
     * @param array $data An array of input data.
     * @param string $key The name of the key for the primary key.
     *
     * @return boolean
     */
    protected function allowEdit($data = array(), $key = 'id')
    {

        return parent::allowEdit($data, $key);

        // Initialise variables.
        $recordId = (int)isset($data[$key]) ? $data[$key] : 0;
        $categoryId = 0;

        if ($recordId) {
            $categoryId = (int)$this->getModel()->getItem($recordId)->catid;
        }

        if ($categoryId) {
            // The category has been set. Check the category permissions.
            return JFactory::getUser()->authorise('core.edit', $this->option . '.category.' . $categoryId);
        } else {
            // Since there is no asset tracking, revert to the component permissions.
            return parent::allowEdit($data, $key);
       }
    }

}