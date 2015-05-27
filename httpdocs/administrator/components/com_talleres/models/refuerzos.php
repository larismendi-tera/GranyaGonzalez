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
JLoader::register('TalleresHelper',JPATH_COMPONENT_ADMINISTRATOR.'/helpers/talleres.php');

/**
 * Methods supporting a list of talleres records.
 *
 */
class TalleresModelRefuerzos extends JModelList
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
        $search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        $this->setState('filter.search', $search);

        // Load the parameters.
        $params = JComponentHelper::getParams('com_talleres');
        $this->setState('params', $params);

        // List state information.
        parent::populateState('a.name', 'asc');


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
//        $id .= ':' . $this->getState('filter.state');
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
        $query->select('a.name, a.username, a.email, a.id, p.profile_value as ci');
        $query->from($db->quoteName('#__users') . ' AS a');
        $query->join('LEFT', '#__user_profiles AS p ON p.user_id = a.id AND profile_key = \'profile.ci\'');

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
        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');
        $orderDirn = $this->state->get('list.direction');
        $query->order($db->getEscaped($orderCol.' '.$orderDirn));

        return $query;
    }


    public function getRefuerzosByUserId($userId) {
        return false;
    }

    /**
     * Generate refuerzo link that expires in 48 hours and send it to user
     *
     * @param $ids mixed id to generate links
     * @return mixed the generated link id or false if could not been generated
     */
    public function generateRefuerzoLinks($ids, $refuerzoNro) {
        // Typecast variable.
        $pks = (array) $ids;
        $user	= JFactory::getUser();

        // Get a row instance.
        $table = $this->getTable();

        // Iterate the items to change change state each one.
        foreach ($pks as $i => $pk) {

            // Force the expiration of all previous refuerzo links to generate the new one.
            $this->forceExpirationRefuerzoLinksByUserId($pk);

            $table = JTable::getInstance('Refuerzo', 'TalleresTable');

            $table->user_id = $pk;
            $table->fecha_expiracion = $this->getRefuerzoExpirationDate();
            $table->nro_refuerzo = $refuerzoNro;

            if (!$table->store()) {
                $this->setError($table->getError());
            } else {
                $refuerzoId = $table->id;
                $link = TalleresHelper::getRefuerzoLink($refuerzoId);
                $this->sendEmailRefuerzo($pk, $link);
            }
        }

        return true;
    }

    private function forceExpirationRefuerzoLinksByUserId($userId){

        $db	= $this->getDbo();
        $query = $db->getQuery(true);

        // Get the user id based on the token.
        $query->update($db->quoteName('#__refuerzo_links'))->set('fecha_expiracion = CURDATE()')->where('user_id = '. $db->quote($userId));

        $db->setQuery($query);

        $result = $db->loadObjectList();
        return $result;

    }

    /**
     * Returns a reference to the a Table object, always creating it.
     *
     * @param type The table type to instantiate
     * @param string A prefix for the table class name. Optional.
     * @param array Configuration array for model. Optional.
     * @return JTable A database object
     */
    public function getTable($type = 'refuerzo', $prefix = 'TalleresTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    private function getRefuerzoExpirationDate() {
        $fecha=time();
        $horas = 48;
        // Convertimos las horas a segundos y las sumamos:
        $fecha += ($horas * 60 * 60);
        // Le damos al resultado el formato deseado:
        $fecha = date("Y-m-d H:i:s", $fecha );
        return $fecha;
    }

    private function sendEmailRefuerzo($userId, $link) {

        $app = JFactory::getApplication();
        $jUser = JUser::getInstance($userId);

        $mailfrom	= $app->getCfg('mailfrom');
        $fromname	= $app->getCfg('fromname');
        $sitename	= $app->getCfg('sitename');

        $name		= $jUser->name;
        $email		= $jUser->email;
        $subject	= JText::_('COM_TALLERES_REFUERZO_SUBJECT');
        $body		= JText::sprintf('COM_TALLERES_REFUERZO_BODY', $name, $link);

        $mail = JFactory::getMailer();
        $mail->addRecipient($email, $name);
        $mail->addReplyTo(array($mailfrom, $fromname));
        $mail->setSender(array($mailfrom, $fromname));
        $mail->setSubject($sitename.': '.$subject);
        $mail->setBody($body);
        $mail->IsHTML(true);

        $sent = $mail->Send();

        return $sent;
    }
}