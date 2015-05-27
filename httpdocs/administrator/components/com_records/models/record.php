<?php
/**
 * taller.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/19/13
 *
 */

defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');
require_once JPATH_COMPONENT.'/helpers/records.php';

/**
 *Taller model.
 *
 * @package Joomla.Administrator
 * @subpackage com_talleres
 * @since
2.5
 */
class RecordsModelRecord extends JModelAdmin
{
    /**
     * @var string The prefix to use with controller messages.
     */
    protected $text_prefix = 'COM_RECORDS';

    /**
     * Method to test whether a record can be deleted.
     *
     * @param object A record object.
     * @return Boolean True if allowed to delete the record. Defaults to the permission set in the component.
     */
    protected function canDelete($record)
    {
        if (!empty($record->id)) {
            if ($record->published != -2) {
                return;
            }
            $user = JFactory::getUser();
//            if ($record->catid) {
//                return $user->authorise('core.delete');
//            } else {
            return parent::canDelete($record);
//            }
        }
    }

    /**
     * Method to test whether a record can have its state changed.
     *
     * @param object A record object.
     * @return Boolean True if allowed to change the state of the record. Defaults to the permission set in the component.
     */
    protected function canEditState($record)
    {
        return parent::canEditState($record);
    }


    /**
     * Returns a reference to the a Table object, always creating it.
     *
     * @param type The table type to instantiate
     * @param string A prefix for the table class name. Optional.
     * @param array Configuration array for model. Optional.
     * @return JTable A database object
     */
    public function getTable($type = 'record', $prefix = 'RecordsTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    /**
     * Method to get the record form.
     *
     * @param array $data An optional array of data for the form to interogate.
     * @param boolean $loadData True if the form is to load its own data (default case), false if not.
     * @return JForm A JForm object on success, false on failure
     */
    public function getForm($data = array(), $loadData = true)
    {
        // Initialise variables.
        $app = JFactory::getApplication();

        // Get the form.
        $form = $this->loadForm('com_records.record','record', array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form)) {
            return false;
        }

        // Determine correct permissions to check. //dont check category id
        if ($this->getState('record.id')) {
            // Existing record. Can only edit in selected categories.
            //$form->setFieldAttribute('catid', 'action', 'core.edit');
        } else {
            // New record. Can only create in selected categories.
            //$form->setFieldAttribute('catid', 'action', 'core.create');
        }

        // Modify the form based on access controls.
        if (!$this->canEditState((object) $data)) {
            // Disable fields for display.
            $form->setFieldAttribute('published', 'disabled', 'true');
            //$form->setFieldAttribute('publish_up', 'disabled', 'true');
            //$form->setFieldAttribute('publish_down', 'disabled', 'true');
            // Disable fields while saving.
            // The controller has already verified this is a record you can edit.
            $form->setFieldAttribute('published', 'filter', 'unset');
            //$form->setFieldAttribute('publish_up', 'filter', 'unset');
            //$form->setFieldAttribute('publish_down', 'filter', 'unset');
        }

        return $form;

    }

    /**
     * Method to get the data that should be injected in the form.
     *
     * @return mixed
    The data for the form.
     */
    protected function loadFormData()
    {
        // Check the session for previously entered form data.
        $data = JFactory::getApplication()->getUserState('com_talleres.edit.record.data', array());
        if (empty($data)) {
            $data = $this->getItem();
            // Prime some default values.
//            if ($this->getState('taller.id') == 0) {
//                $app = JFactory::getApplication();
//                $data->set('catid', JRequest::getInt('catid',$app->getUserState('com_talleres.talleres.filter.category_id')));
//            }
        }
        return $data;
    }

    /**
     * Prepare and sanitise the table prior to saving.
     *
     */
    protected function prepareTable(&$table)
    {
//        $table->alias = JApplication::stringURLSafe($table->alias);
//        if (empty($table->alias)) {
//            $table->alias = JApplication::stringURLSafe($table->title);
//        }
        //Set taller name based on tipo_taller y fecha_taller
        //$table->title = TalleresHelper::getTipo($table->tipo) . " - " . TalleresHelper::formatFecha($table->fecha);

        if ($table->status == 1) {
            $table->answer_date = time();
        }
        //$table->
    }

    /**
     * Change inscription status
     *
     * $pks primary keys array
     * $status = 1 confirmed , 0 pendiente
     *
     * @return JDatabaseQuery
     */
    public function changeStatus(&$pks, $status)
    {

        // Typecast variable.
        $pks = (array) $pks;
        $user	= JFactory::getUser();

        // Get a row instance.
        $table = $this->getTable();

        // Iterate the items to change change state each one.
        foreach ($pks as $i => $pk) {
            if ($table->load($pk)) {

                // Access checks.
                $allow = $user->authorise('core.edit.state', 'com_talleres');
                // Don't allow non-super-admin to delete a super admin

                if ($allow) {
                    //$dispatcher->trigger('onUserBeforeDeleteGroup', array($table->getProperties()));
                    $table->status = $status;
                    if (!$table->store()) {
                        echo $table->getError().'<br />';
                        return;
                    }
                } else {
                    // Prune items that you can't change.
                    unset($pks[$i]);
                    JError::raiseWarning(403, JText::_('JERROR_CORE_DELETE_NOT_PERMITTED'));
                }
            } else {
                $this->setError($table->getError());
                return false;
            }
        }

        return true;
    }
}