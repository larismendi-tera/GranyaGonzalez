<?php
/**
 * form.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */

// No direct access.
defined('_JEXEC') or die;
JLoader::register('TalleresModelSeguimiento',JPATH_COMPONENT_ADMINISTRATOR.'/models/seguimiento.php');

/**
 * Joomprosubs model.
 *
 * @package Joomla.Site
 * @subpackage com_joomprosubs
 */
class TalleresModelRegistroSemanal extends TalleresModelSeguimiento
{
    protected $data;

    /**
     * Method to get the data that should be injected in the form.
     *
     * @return	mixed	The data for the form.
     * @since	1.6
     */
    protected function loadFormData()
    {
        return $this->getData();
    }


    public function addSuscripcion() {

    }

    /**
     * Gets a inscription object data
     * @param array
     * @return mixed Object or null
     */
	public function getData() {


        if ($this->data === null) {
            $this->data = $this->getItem();

            /* Set default data */
            // Validate id to set default values
            if (!isset($this->data->id)) {
                $this->data->inscripcion_id = $this->getState('inscripcion_id');
            }

            // Override the base user data with any data in the session.
            $temp = (array)JFactory::getApplication()->getUserState('com_talleres.registrosemanal.data', array());
            foreach ($temp as $k => $v) {
                $this->data->$k = $v;
            }
        }

        return $this->data;
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
        $this->setState('registrosemanal.id', $pk);

        $inscripcionId = $app->getUserState('com_talleres.mybandagastrica.inscripcion_id');
//        if (JRequest::getCmd('inscripcion_id', false)) {
//            $inscripcionId = JRequest::getCmd('inscripcion_id', '');
//        }
        $this->setState('inscripcion_id', $inscripcionId);

        // Load the parameters.
        $params	= JComponentHelper::getParams('com_talleres');
        $this->setState('params', $params);

        // List state information.
//        parent::populateState('a.fecha', 'desc');

    }

    public function getInscripcion($id = null) {

        if ($id == null) {
            $id = $this->getState('registrosemanal.inscripcion_id');
        }

        $db     = $this->getDbo();
        $query  = $db->getQuery(true);

        // Select field from talleres table
        $query->select('a.*');
        $query->from($db->quoteName('#__inscripcion') . ' AS a');

        $query->select('t.title AS taller_nombre');
        $query->join('LEFT', '#__taller AS t ON t.id = a.taller_id');
        $query->where('a.id = ' . (int) $id);

        $db->setQuery($query);
        return $db->loadObject();
    }

    /**
     * Method to test whether a record can be deleted.
     *
     * @param object A record object.
     * @return Boolean True if allowed to delete the record. Defaults to the permission set in the component.
     */
    protected function canDelete($record)
    {

        /* Verificar que el registro semanal es mio */
        if (!empty($record->id)) {
            return $this->verifyUserOwner($record->usuario_id);
        }

        return false;
    }

    protected function canEditState($record)
    {

        /* Verificar que el registro semanal es mio */
        if (!empty($record->id)) {
            return $this->verifyInscripcionOwner($record->inscripcion_id);
        }

        return false;
    }

    private function verifyUserOwner($seguimientoUserId) {
        $user = JFactory::getUser();
        if ($user->id < 0) {
            return false;
        }

        if ($user->id == $seguimientoUserId){
            return true;
        }

        return false;
    }


}