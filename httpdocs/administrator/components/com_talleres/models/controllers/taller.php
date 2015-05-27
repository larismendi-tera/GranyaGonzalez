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

class TalleresControllerTaller extends JControllerForm
{

    protected $view_list = 'talleres';

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