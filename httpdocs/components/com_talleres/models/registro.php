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
JLoader::register('TalleresModelInscripcion',
JPATH_COMPONENT_ADMINISTRATOR.'/models/inscripcion.php');

/**
 * Joomprosubs model.
 *
 * @package Joomla.Site
 * @subpackage com_joomprosubs
 */
class TalleresModelRegistro extends TalleresModelInscripcion
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
                $this->data->ci = $profile->profile["ci"];
                $this->data->set('fecha', date("Y-m-d"));
            }

            // Override the base user data with any data in the session.
            $temp = (array)JFactory::getApplication()->getUserState('com_talleres.inscripcion.data', array());
            foreach ($temp as $k => $v) {
                $this->data->$k = $v;
            }

            if (empty($this->data->ciudad_taller)) {
                $this->data->ciudad_taller = 'Caracas';
            }
        }

        return $this->data;
    }

    public function getTalleresDisponibles($ciudad) {

        /* Talleres disponibles */
        /* SELECT a.* FROM gran_taller a
        WHERE cupo_web > (SELECT count(*) FROM gran_inscripcion WHERE tipo_inscripcion = 'w' and taller_id = a.id)
        AND published = 1 AND fecha > CURDATE();

        */
        $db		= $this->getDbo();

        // Get the user id based on the token.
        $db->setQuery(
            'SELECT  a.id, a.title, a.pais, a.ciudad FROM '.$db->quoteName('#__taller') . ' a' .
                ' WHERE cupo_web > (SELECT count(*) FROM #__inscripcion WHERE tipo_inscripcion = \'w\' and taller_id = a.id) '.
                ' AND '.$db->quoteName('published').' = 1' .
                ' AND '.$db->quoteName('fecha').' > CURDATE()' .
                ' AND '.$db->quoteName('tipo').' = \'m\''. 
                ' AND '.$db->quoteName('ciudad') . ' = ' . $db->quote($ciudad)
        );

        //var_dump($db->getQuery());
        //die();

        $list = $db->loadObjectList();
        return $list;
    }

    public function getCiudadesDisponibles() {

        /* Talleres disponibles */
        /* SELECT a.* FROM gran_taller a
        WHERE cupo_web > (SELECT count(*) FROM gran_inscripcion WHERE tipo_inscripcion = 'w' and taller_id = a.id)
        AND published = 1 AND fecha > CURDATE();

        */
        $db		= $this->getDbo();

        // Get the user id based on the token.
        $db->setQuery(
            'SELECT DISTINCT(a.ciudad), a.pais  FROM '.$db->quoteName('#__taller') . ' a' .
                ' WHERE cupo_web > (SELECT count(*) FROM #__inscripcion WHERE tipo_inscripcion = \'w\' and taller_id = a.id) '.
                ' AND '.$db->quoteName('published').' = 1' .
                ' AND '.$db->quoteName('fecha').' > CURDATE()'
        );

        //die(var_dump($db->getQuery()));

        $list = $db->loadObjectList();
        return $list;
    }
}
