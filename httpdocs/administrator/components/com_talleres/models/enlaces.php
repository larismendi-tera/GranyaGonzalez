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
class TalleresModelEnlaces extends JModelList
{

    public function __construct($config = array())
    {

        if (empty($config['filter_fields'])) {
            // Set valid filter fields for order by request param
            $config['filter_fields'] = array(
                'id', 'a.id',
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
        //$search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        //$this->setState('filter.search', $search);

        // Load the parameters.
        $params = JComponentHelper::getParams('com_talleres');
        $this->setState('params', $params);

        // List state information.
        parent::populateState('a.fecha_expiracion', 'desc');
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
        $query->select('a.fecha_expiracion, a.id, u.name, u.username, u.email, p.profile_value as ci');
        $query->from($db->quoteName('#__refuerzo_links') . ' AS a');
        $query->join('LEFT', '#__users AS u ON a.user_id = u.id');
        $query->join('LEFT', '#__user_profiles AS p ON p.user_id = u.id AND p.profile_key = \'profile.ci\'');

        // Filter by search in title
        $search = $this->getState('filter.search');
        if (!empty($search)) {
            if (stripos($search, 'id:') === 0) {
                $query->where('a.id = '.(int) substr($search, 3));
            } else {
                $search = $db->Quote('%'.$db->getEscaped($search, true).'%');
                $query->where('(a.name LIKE ' . $search . ' OR a.username LIKE ' . $search . ' OR a.email LIKE ' . $search . ' OR p.profile_value LIKE ' . $search . ')');
            }
        }

        $query->where('a.fecha_expiracion > \'' . date('Y-m-d H:i:s', time()) . '\'');


        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');
        $orderDirn = $this->state->get('list.direction');
        $query->order($db->getEscaped($orderCol.' '.$orderDirn));
        return $query;
    }


     /**
     * Generate refuerzo link that expires in 48 hours and send it to user
     *
     * @param $ids mixed id to generate links
     * @return mixed the generated link id or false if could not been generated
     */
    public function generateRefuerzoLinks($ids) {
        // Typecast variable.
        $pks = (array) $ids;
        $user	= JFactory::getUser();

        // Get a row instance.
        $table = $this->getTable();

        // Iterate the items to change change state each one.
        foreach ($pks as $i => $pk) {

            $table = JTable::getInstance('Refuerzo', 'TalleresTable');

            $table->user_id = $pk;
            $table->fecha_expiracion = $this->getRefuerzoExpirationDate();

            if (!$table->store()) {
                $this->setError($table->getError());
            } else {
                $refuerzoId = $table->id;
                $link = JURI::root() . "index.php?option=com_talleres&view=refuerzo&id=" . $refuerzoId;
                $this->sendEmailRefuerzo($pk, $link);
            }
        }

        return true;
    }
}