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
//require_once JPATH_COMPONENT.'/helpers/talleres.php';
JLoader::register('TalleresHelper',JPATH_COMPONENT_ADMINISTRATOR.'/helpers/talleres.php');

/**
 *Taller model.
 *
 * @package Joomla.Administrator
 * @subpackage com_talleres
 * @since
2.5
 */
class TalleresModelSeguimiento extends JModelAdmin
{
    /**
     * @var string The prefix to use with controller messages.
     */
    protected $text_prefix = 'COM_TALLERES';

    /**
     * Method to test whether a record can be deleted.
     *
     * @param object A record object.
     * @return Boolean True if allowed to delete the record. Defaults to the permission set in the component.
     */
    protected function canDelete($record)
    {
        if (!empty($record->id)) {
            return parent::canDelete($record);
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
    public function getTable($type = 'seguimiento', $prefix = 'TalleresTable', $config = array())
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
        $form = $this->loadForm('com_talleres.seguimiento','seguimiento', array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form)) {
            return false;
        }

        // Determine correct permissions to check. //dont check category id
        if ($this->getState('taller.id')) {
            // Existing record. Can only edit in selected categories.
            //$form->setFieldAttribute('catid', 'action', 'core.edit');
        } else {
            // New record. Can only create in selected categories.
            //$form->setFieldAttribute('catid', 'action', 'core.create');
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
        $data = JFactory::getApplication()->getUserState('com_talleres.edit.seguimiento.data', array());
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

    public function getUser() {

        $id = $this->getState('seguimiento.user_id');

        $db     = $this->getDbo();
        $query  = $db->getQuery(true);

        // Select field from users table
        $query->select('a.*');
        $query->select('a.name as nombre, p.profile_value as ci');
        $query->from($db->quoteName('#__users') . ' AS a');
        $query->join('LEFT', '#__user_profiles AS p ON p.user_id = a.id AND p.profile_key = \'profile.ci\'');
        $query->where('a.id = ' . (int) $id);

        $db->setQuery($query);
        return $db->loadObject();
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
        //Set taller name based on  y fecha_taller
//        $table->usuario_id = TalleresHelper::getTipo($table->tipo) . " - " . TalleresHelper::formatFecha($table->fecha);

        $app = JFactory::getApplication('administrator');

        // Si se agrega el seguimiento desde el backend se recupera el user id de session, si es de front end ya viene
        // (seteado previamente en el controller de frontend)
        if ($app->isAdmin()){
            $userId = $app->getUserState('com_talleres.edit.seguimiento.user_id');

            $table->usuario_id = $userId;
        }

    }

    /**
     * Auto-populate the model state.
     *
     * Note. Calling getState in this method will result in recursion.
     *
     * @return	void
     * @since	1.6
     */
    protected function populateState()
    {
        $app = JFactory::getApplication('administrator');

        // Load the User state.
        $pk = (int) JRequest::getInt('id');
        $this->setState('seguimiento.id', $pk);

        $userId = $app->getUserState('com_talleres.edit.seguimiento.user_id');
        if (JRequest::getCmd('user_id', false)) {
            $userId = JRequest::getCmd('user_id', '');
        }
        $this->setState('seguimiento.user_id', $userId);

        // Load the parameters.
        $params	= JComponentHelper::getParams('com_talleres');
        $this->setState('params', $params);
    }
}