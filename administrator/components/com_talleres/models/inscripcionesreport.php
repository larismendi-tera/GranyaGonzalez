<?php
/**
 * talleres.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/18/13
 *
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

JLoader::register('TalleresModelInscripciones', JPATH_COMPONENT.'/models/inscripciones.php');

/**
 * Methods supporting a list of talleres records.
 *
 */
class TalleresModelInscripcionesReport extends TalleresModelInscripciones
{

    public function setModelState(){
        $this->context = 'com_talleres.inscripciones';
        parent::populateState();
    }

    /**
     * Build a SQL query to load the list data.
     *
     * @return JDatabaseQuery
     */
    protected function getListQuery()
    {
        $db     = $this->getDbo();
        $query  = $db->getQuery(true);

        // Select field from talleres table
        $query->select('a.*');
        $query->from($db->quoteName('#__inscripcion') . ' AS a');

        $query->select('t.title AS taller_nombre');
        $query->join('LEFT', '#__taller AS t ON t.id = a.taller_id');

        $status = $this->getState('filter.status');
        if (is_numeric($status)) {
            $query->where('a.status = '.(int) $status);
        }

        // Filter by taller id
        $tallerId = $this->getState('filter.taller_id');
        if ($tallerId > 0) {
            $query->where('a.taller_id = '.(int) $tallerId);
        }

        // Filter by search in title
        $search = $this->getState('filter.search');
        if (!empty($search)) {
            if (stripos($search, 'id:') === 0) {
                $query->where('a.id = '.(int) substr($search, 3));
            } else {
                $search = $db->Quote('%'.$db->getEscaped($search, true).'%');
                $query->where('(a.nombre LIKE ' . $search . ' OR a.ci LIKE ' . $search . ' OR a.correo LIKE ' . $search . ' OR a.ciudad LIKE ' . $search . 'OR a.telefono LIKE '.$search . 'OR a.num_transaccion LIKE ' . $search .')');
            }
        }
        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');
        $orderDirn = $this->state->get('list.direction');
        $query->order($db->getEscaped($orderCol.' '.$orderDirn));

        return $query;
    }
}