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
class TalleresModelMedia extends JModelList
{

	public function getNroRefuerzoByUser() {

        $user = JFactory::getUser();

        if ($user) {
            $db     = $this->getDbo();
            $query  = $db->getQuery(true);

            // Select field from talleres table
            $query->select('a.nro_refuerzo');
            $query->from($db->quoteName('#__refuerzo_links') . ' AS a');
            $query->where('a.user_id = '.(int) $user->id . ' AND a.fecha_expiracion > \'' . date('Y-m-d H:i:s', time()) . '\'');
            $query->order('id DESC');

            $db->setQuery($query, 0, 1); // start -> 0, limit -> 1
            $item = $db->loadResult();

            if ($item){
                return $item;
            }
        }

    }

}