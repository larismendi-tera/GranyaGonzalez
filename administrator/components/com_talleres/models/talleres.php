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
class TalleresModelTalleres extends JModelList
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
                'checked_out_time', 'a.checked_out_time',
                'catid', 'a.catid', 'category_title',
                'published', 'a.published ',
                'access', 'a.access', 'access_level',
                'created', 'a.created',
                'created_by', 'a.created_by',
                'publish_up', 'a.publish_up',
                'publish_down', 'a.publish_down',
                'group_title', 'g.title',
                'duration', 'a.duration'
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

        $published = $this->getUserStateFromRequest($this->context . '.filter.state', 'filter_published', '', 'string');
        $this->setState('filter.state', $published);

        // Category is not needed
//        $categoryId = $this->getUserStateFromRequest($this->context . '.filter.category_id', 'filter_category_id', '');
//        $this->setState('filter.category_id', $categoryId);

        // Load the parameters.
        $params = JComponentHelper::getParams('com_talleres');
        $this->setState('params', $params);


        // List state information.
        parent::populateState('a.fecha', 'desc');


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

        /* Original query
        SELECT a.*,  SUM(IF(b.tipo_inscripcion = 'w', 1, 0)) as total_web, count(b.taller_id) as total
        FROM `gran_taller` a LEFT JOIN gran_inscripcion b on b.taller_id = a.id GROUP BY b.taller_id
        */

        $db     = $this->getDbo();
        $query  = $db->getQuery(true);

        // Select field from talleres table
        $query->select("a.*, SUM(IF(b.tipo_inscripcion = 'w', 1, 0)) as total_web, count(b.taller_id) as total");
        $query->from($db->quoteName('#__taller') . ' AS a');
        $query->join('LEFT', $db->quoteName('#__inscripcion').' AS b ON b.taller_id = a.id');

        // Filter by published state
        $published = $this->getState('filter.state');
        if (is_numeric($published)) {
            $query->where('a.published = '.(int) $published);
        } else if ($published === '') {
            $query->where('(a.published IN (0, 1))');
        }

        // Filter by search in title
        $search = $this->getState('filter.search');
        if (!empty($search)) {
            if (stripos($search, 'id:') === 0) {
                $query->where('a.id = '.(int) substr($search, 3));
            } else {
                $search = $db->Quote('%'.$db->getEscaped($search, true).'%');
                $query->where('(a.title LIKE '.$search.' OR a.tipo LIKE '.$search.')');
            }
        }
        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');
        $orderDirn = $this->state->get('list.direction');
        $query->order($db->getEscaped($orderCol.' '.$orderDirn));

        $query->group('a.id');
        return $query;
    }

    public function getNextTalleres($tipo_taller, $limit, $country_code) {

        /* Original query
        SELECT * FROM gran_taller WHERE fecha > CURDATE() ORDER BY fecha ASC LIMIT 2;
        */

        $db     = $this->getDbo();
        $query  = $db->getQuery(true);

        // Select field from talleres table
        $query->select("a.*, SUM(IF(b.tipo_inscripcion = 'w', 1, 0)) as total_web, count(b.taller_id) as total");
        $query->from($db->quoteName('#__taller') . ' AS a');
        $query->join('LEFT', $db->quoteName('#__inscripcion').' AS b ON b.taller_id = a.id');

        // Filter tipo_taller
        $query->where('a.tipo = \'' . $tipo_taller . '\'');


        if (!empty($country_code)) {
            $query->where('a.pais = ' . $db->quote($country_code));
        }

        // Filter by published and date
        $query->where('a.published = 1');
        $query->where('a.fecha > CURDATE()');
        $query->group('a.id');
        $query->order('a.fecha asc');

        $db->setQuery($query, 0, $limit);
        $result = $db->loadResult();

        // Check for a database error.
        if ($db->getErrorNum()) {
            JError::raiseWarning(500, $db->getErrorMsg());
            return false;
        }

        if ($result > 0) {
            $list = $db->loadObjectList();
            return $list;
        } else {
            return false;
        }
    }
    
    
    public function getTaller($id) {
    
    	/* Original query
    	 SELECT * FROM gran_taller WHERE fecha > CURDATE() ORDER BY fecha ASC LIMIT 2;
    	*/
    	$db     = $this->getDbo();
    	$query  = $db->getQuery(true);
    
    	// Select field from talleres table
    	$query->select("a.*");
    	$query->from($db->quoteName('#__taller') . ' AS a');
    	
    
    	// Filter tipo_taller
    	$query->where('a.id =' . $id);
    
    
    	$db->setQuery($query);
    	$result = $db->loadResult();
    
    	// Check for a database error.
    	if ($db->getErrorNum()) {
    		JError::raiseWarning(500, $db->getErrorMsg());
    		return false;
    	}
    
    	if ($result > 0) {
    		$taller_individual = $db->loadObject();
    		return $taller_individual;
    	} else {
    		return false;
    	}
    }
    
}