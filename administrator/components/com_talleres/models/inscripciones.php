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

/**
 * Methods supporting a list of talleres records.
 *
 */
class TalleresModelInscripciones extends JModelList
{

    public function __construct($config = array())
    {

        if (empty($config['filter_fields'])) {
            // Set valid filter fields for order by request param
            $config['filter_fields'] = array(
                'id', 'a.id',
                'title', 'a.title',
                'fecha', 'a.fecha',
                'tipo', 'a.tipo',
                'correo', 'a.correo',
                'checked_out_time', 'a.checked_out_time',
                'catid', 'a.catid', 'category_title',
                'published', 'a.published ',
                'access', 'a.access', 'access_level',
                'created', 'a.created',
                'created_by', 'a.created_by',
                'activation', 'a.activation'
            );
        }

        parent::__construct($config);
    }


    protected function populateState($ordering = null, $direction = null)
    {

        // Initialise variables.
        $app = JFactory::getApplication('administrator');
        $search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        $this->setState('filter.search', $search);

        // Access filter is not needed
//        $accessId = $this->getUserStateFromRequest($this->context . '.filter.access', 'filter_access', null, 'int');
//        $this->setState('filter.access', $accessId);

        //Inscripcion status filter
        $status = $this->getUserStateFromRequest($this->context . '.filter.status', 'filter_status', '', 'string');
        $this->setState('filter.status', $status);

        //Taller id Filter
        $tallerId = $this->getUserStateFromRequest($this->context . '.filter.taller_id', 'filter_taller_id', null, 'int');
        $this->setState('filter.taller_id', $tallerId);


        $published = $this->getUserStateFromRequest($this->context . '.filter.state', 'filter_published', '', 'string');
        $this->setState('filter.state', $published);

        // Category is not needed
//        $categoryId = $this->getUserStateFromRequest($this->context . '.filter.category_id', 'filter_category_id', '');
//        $this->setState('filter.category_id', $categoryId);

        // Load the parameters.
        $params = JComponentHelper::getParams('com_talleres');
        $this->setState('params', $params);


        // List state information.
        parent::populateState('a.nombre', 'asc');


    }


    /**
     * Method to get a store id based on model configuration state.
     *
     * This is necessary because the model is used by the component and
     * different modules that might need different sets of data or
     */
    protected function getStoreId($id = '')
    {
        // Compile the store id.
        $id .= ':' . $this->getState('filter.search');
        //$id .= ':' . $this->getState('filter.access');
        $id .= ':' . $this->getState('filter.state');
        //$id .= ':' . $this->getState('filter.category_id');

        return parent::getStoreId($id);
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

        // Filter by published state
//        $published = $this->getState('filter.state');
//        if (is_numeric($published)) {
//            $query->where('a.status = '.(int) $published);
//        } else if ($published === '') {
//            $query->where('(a.status IN (0, 1))');
//        }

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

    /**
     * Return a filter list containing talleres
     *
     * @return array
     */
    public function getTallerFilter()
    {
        $db = $this->getDbo();
        $db->setQuery("SELECT id AS value, title AS text FROM #__taller WHERE published = 1");
        return $db->loadAssocList('value', 'text');
    }

    /*
     * Return list of inscripcion by userId
     */
    /*public function getLastInscripcionByUserId($userId){

        if (empty($userId)){
            return false;
        }

        $db     = $this->getDbo();
//        $db->setQuery("SELECT id FROM #__inscripcion WHERE usuario_id = ". $userId ." ORDER BY id DESC LIMIT 1')");

        $query  = $db->getQuery(true);

        $query->select('a.id');
        $query->from($db->quoteName('#__inscripcion') . ' AS a');
        $query->join('LEFT', '#__user_profiles AS p ON p.profile_value = p.ci AND p.profile_key = \'profile.ci\'');
        $query->where('p.user_id = '.(int) $userId);

        return $db->loadObject();

    }*/
}