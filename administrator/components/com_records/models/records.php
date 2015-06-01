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
class RecordsModelRecords extends JModelList
{

    public function __construct($config = array())
    {

        if (empty($config['filter_fields'])) {
            // Set valid filter fields for order by request param
            $config['filter_fields'] = array(
                'id', 'a.id',
                'contact_name', 'a.contact_name',
                'contact_email', 'a.contact_email',
                'contact_subject', 'a.contact_subject',
                'status', 'a.status',
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

//        $published = $this->getUserStateFromRequest($this->context . '.filter.state', 'filter_published', '', 'string');
//        $this->setState('filter.state', $published);

        //Taller id Filter
        $categoryId = $this->getUserStateFromRequest($this->context . '.filter.category_id', 'filter_category_id', null, 'int');
        $this->setState('filter.category_id', $categoryId);


        $status = $this->getUserStateFromRequest($this->context . '.filter.status', 'filter_status', '', 'string');
        $this->setState('filter.status', $status);
        
        $countryId = $this->getUserStateFromRequest($this->context . '.filter.country_id', 'filter_country_id', null, 'string');
        $this->setState('filter.country_id', $countryId);

        // Category is not needed
//        $categoryId = $this->getUserStateFromRequest($this->context . '.filter.category_id', 'filter_category_id', '');
//        $this->setState('filter.category_id', $categoryId);

        // Load the parameters.
        $params = JComponentHelper::getParams('com_records');
        $this->setState('params', $params);

        // List state information.
        parent::populateState('a.contact_date', 'desc');
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
    	
    	
    	//var_dump($this->getState());
    	

        $db     = $this->getDbo();
        $query  = $db->getQuery(true);

        // Select field from talleres table
        $query->select("a.*, c.name AS country_name");
        $query->from($db->quoteName('#__contact_record') . ' AS a');
        $query->join('LEFT', '#__countries AS c ON c.id = a.contact_country');
        //$query->join('LEFT', $db->quoteName('#__inscripcion').' AS b ON b.taller_id = a.id');

        // Filter by published state
        $status = $this->getState('filter.status');
        if (is_numeric($status)) {
            $query->where('a.status = '.(int) $status);
        } else if ($status === '') {
            $query->where('(a.status IN (0, 1))');
        }

        // Filter by taller id
        $catId = $this->getState('filter.category_id');
        if ($catId > 0) {
            $query->where('a.contact_category = '.(int) $catId);
        }
        
        // Filter by country
        $countryId = $this->getState('filter.country_id');
        if ($countryId != '') {
	        if ($countryId != '0') {
	        	$query->where('a.contact_country = '. $countryId);
	        }
	        else { 
	        	$query->where('(a.contact_country != 234 and a.contact_country != 64) or a.contact_country IS NULL');
	        }
        }

        // Filter by search in title
        $search = $this->getState('filter.search');
        if (!empty($search)) {
            if (stripos($search, 'id:') === 0) {
                $query->where('a.id = '.(int) substr($search, 3));
            } else {
                $search = $db->Quote('%'.$db->getEscaped($search, true).'%');
                $query->where('(a.contact_name LIKE '.$search.' OR a.contact_email LIKE '.$search.' OR a.contact_subject LIKE '.$search.')');
            }
        }
        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');
        $orderDirn = $this->state->get('list.direction');
        $query->order($db->getEscaped($orderCol.' '.$orderDirn));
        //echo $query->dump();
        //$query->group('b.taller_id');

        return $query;
    }
}