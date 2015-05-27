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
class TalleresModelSeguimientos extends JModelList
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

        //Refuerzos status filter
//        $status = $this->getUserStateFromRequest($this->context . '.filter.status', 'filter_status', '', 'string');
//        $this->setState('filter.status', $status);

        //Taller id Filter
//        $tallerId = $this->getUserStateFromRequest($this->context . '.filter.taller_id', 'filter_taller_id', null, 'int');
//        $this->setState('filter.taller_id', $tallerId);


//        $published = $this->getUserStateFromRequest($this->context . '.filter.state', 'filter_published', '', 'string');
//        $this->setState('filter.state', $published);

        //Inscripcion id filter
//        $inscripcionId = $this->getUserStateFromRequest($this->context . '.filter.inscripcion_id', 'filter_inscripcion_id', '');
//        $this->setState('filter.inscripcion_id', $inscripcionId);


        $userId = JRequest::getVar('user_id', null);
        if ($userId) {
            if ($userId != $app->getUserState($this->context.'.filter.user_id')) {
                $app->setUserState($this->context.'.filter.user_id', $userId);
                JRequest::setVar('limitstart', 0);
            }
        }
        else {
//            $userId = $app->getUserState($this->context.'.filter.user_id');
//            if (!$menuType) {
//                $menuType = $this->getDefaultMenuType();
//            }
            $clearUserState = JRequest::getVar('clear', false);
            if (!empty($clearUserState) && $clearUserState == 'state') {
                $app->setUserState($this->context.'.filter.user_id', null);
                $userId = null;
            }
        }

        $this->setState('filter.user_id', $userId);


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
        //$id .= ':' . $this->getState('filter.search');
        //$id .= ':' . $this->getState('filter.acc'title', 'a.title',ess');
        $id .= ':' . $this->getState('filter.state');
        $id .= ':' . $this->getState('filter.user_id');
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

        // Select field from seguimientos table
        $query->select('a.*');
        $query->select('u.name as nombre, p.profile_value as ci');
        $query->select('t.title AS taller_nombre');
        $query->from($db->quoteName('#__seguimiento') . ' AS a');
        $query->join('LEFT', '#__users AS u ON u.id = a.usuario_id');
        $query->join('LEFT', '#__user_profiles AS p ON p.user_id = a.usuario_id AND p.profile_key = \'profile.ci\'');
        $query->join('LEFT', '#__inscripcion AS i ON i.id = a.inscripcion_id');
        $query->join('LEFT', '#__taller AS t ON t.id = i.taller_id');

        // Filter by published state
//        $published = $this->getState('filter.state');
//        if (is_numeric($published)) {
//            $query->where('a.status = '.(int) $published);
//        } else if ($published === '') {
//            $query->where('(a.status IN (0, 1))');
//        }

        /*$status = $this->getState('filter.status');
        if (is_numeric($status)) {
            $query->where('a.status = '.(int) $status);
        }*/

        // Filter by user id
        $userId = $this->getState('filter.user_id');
        if ($userId > 0) {
            $query->where('a.usuario_id = '.(int) $userId);
        }

        // Filter by search in title
        $search = $this->getState('filter.search');
        if (!empty($search)) {
            if (stripos($search, 'id:') === 0) {
                $query->where('a.id = '.(int) substr($search, 3));
            } else {
                $search = $db->Quote('%'.$db->getEscaped($search, true).'%');

                $sqlWhere = '(u.name LIKE ' . $search . ' OR t.title LIKE ' . $search . ' OR u.email LIKE ' . $search . ' OR p.profile_value LIKE ' . $search;

                $formatedDate = str_replace("%","", $search);
                $formatedDate = str_replace("'","", $formatedDate);
                $validDate = strtotime($formatedDate);

                if ($validDate){
                    $sqlDate = date('Y-m-d', $validDate);
                    $sqlWhere .= ' OR a.fecha LIKE \'%' . $sqlDate .'%\'';
                }

                $sqlWhere .= ')';

                $query->where($sqlWhere);
            }
        }

        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');
        $orderDirn = $this->state->get('list.direction');
        $query->order($db->getEscaped($orderCol.' '.$orderDirn));


        return $query; // $query->dump()
    }

//    /**
//     * Return a filter list containing talleres
//     *
//     * @return array
//     */
//    public function getTallerFilter()
//    {
//        $db = $this->getDbo();
//        $db->setQuery("SELECT id AS value, title AS text FROM #__taller WHERE published = 1");
//        return $db->loadAssocList('value', 'text');
//    }
}