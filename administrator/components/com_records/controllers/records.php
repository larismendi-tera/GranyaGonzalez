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

jimport('joomla.application.component.controlleradmin');

class RecordsControllerRecords extends JControllerAdmin
{

    /**
     * Constructor.
     *
     * @param	array An optional associative array of configuration settings.
     * @see		JController
     * @since	1.6
     */
    public function __construct($config = array())
    {
        parent::__construct($config);

        $this->registerTask('record_confirm', 'changeState');
        $this->registerTask('record_pending', 'changeState');

    }

    /**
     * Use in list screen, set the model to perfom operations over listed elements
     *
     * Proxy for getModel.
     */
    public function getModel($name = 'Record', $prefix = 'RecordsModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);
        return $model;
    }

    public function changeState() {
        // Check for request forgeries.
        JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

        // Initialise variables.
        $user	= JFactory::getUser();
        $ids	= JRequest::getVar('cid', array(), '', 'array');

        // Set state value based on task
        $values	= array('record_confirm' => 1, 'record_pending' => 0);
        $task	= $this->getTask();
        $value	= JArrayHelper::getValue($values, $task, 0, 'int');

        if (empty($ids)) {
            JError::raiseWarning(500, JText::_('COM_RECORDS_NO_RECORDS_SELECTED'));
        } else {
            // Get the model.
            $model	= $this->getModel();

            // Change the state of the records.
            if (!$model->changeStatus($ids, $value)) {
                JError::raiseWarning(500, $model->getError());
            } else {
                if ($value == 1) {
                    $ntext = 'COM_RECORDS_N_RECORDS_CONFIRMED';
                } else {
                    $ntext = 'COM_RECORDS_N_RECORDS_PENDING';
                }
                $this->setMessage(JText::plural($ntext, count($ids)));
            }
        }

        $this->setRedirect('index.php?option=com_records');
    }

}