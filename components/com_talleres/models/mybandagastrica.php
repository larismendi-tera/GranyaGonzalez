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

jimport('joomla.application.component.modellist');


/**
 * Joomprosubs model.
 *
 * @package Joomla.Site
 * @subpackage com_joomprosubs
 */
class TalleresModelMyBandaGastrica extends JModelList
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
                $user = JFactory::getUser();
                $profile = JUserHelper::getProfile($user->id);

                $this->data->nombre = $user->name;
                $this->data->correo = $user->username;
                $this->data->telefono = $profile->profile["phone"];
                $this->data->genero = $profile->profile["gender"];
                $this->data->ciudad = $profile->profile["city"];
                $this->data->set('fecha', date("Y-m-d"));
            }

            // Override the base user data with any data in the session.
            $temp = (array)JFactory::getApplication()->getUserState('com_talleres.inscripcion.data', array());
            foreach ($temp as $k => $v) {
                $this->data->$k = $v;
            }
        }

        return $this->data;
    }

    public function getInscripcionesByUser() {

        $user = JFactory::getUser();

        if ($user->id < 1){
            return array();
        }

        $profile = JUserHelper::getProfile($user->id);
        $db		= $this->getDbo();

        // Get the user id based on the token.
        $db->setQuery(
            'SELECT a.id, t.title as taller_name FROM #__inscripcion a JOIN #__taller t on t.id = a.taller_id WHERE a.status = 1 and a.ci = ' . $db->quote($profile->profile["ci"])
        );

        $list = $db->loadObjectList();
        return $list;
    }

    public function getSeguimientosByInscripcion($inscripcion_id) {

        $user = JFactory::getUser();
        if ($user->id < 1){
            return array();
        }

        $profile = JUserHelper::getProfile($user->id);
        $db		= $this->getDbo();

        // Get the user id based on the token.
        $db->setQuery('SELECT a.* FROM #__seguimiento a JOIN #__inscripcion i on a.inscripcion_id = i.id and i.ci = ' . $db->quote($profile->profile['ci']) . ' WHERE a.inscripcion_id = ' . $db->quote($inscripcion_id));

        $list = $db->loadObjectList();
        return $list;
    }

    public function getSeguimientosForCurrentUser() {

        $user = JFactory::getUser();
        if ($user->id < 1){
            return array();
        }

        $db		= $this->getDbo();

        // Get the user id based on the token.
        $db->setQuery('SELECT a.* FROM #__seguimiento a WHERE a.usuario_id = ' . $user->id . ' ORDER BY a.fecha DESC');

        $list = $db->loadObjectList();
        return $list;
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

        $inscripcionId = $this->getUserStateFromRequest($this->context.'.filter.inscripcion_id', 'inscripcion_id');
        $app->setUserState($this->context.'.inscripcion_id', $inscripcionId);
        $this->setState('inscripcion_id', $inscripcionId);

        // Load the parameters.
        $params	= JComponentHelper::getParams('com_talleres');
        $this->setState('params', $params);
    }
}