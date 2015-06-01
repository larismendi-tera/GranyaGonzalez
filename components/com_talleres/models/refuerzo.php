<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.modelitem');

/**
 * Content Component Article Model
 *
 * @package		Joomla.Site
 * @subpackage	com_content
 * @since 1.5
 */
class TalleresModelRefuerzo extends JModelItem
{
	/**
	 * Model context string.
	 *
	 * @var		string
	 */
	protected $_context = 'con_talleres.refuerzo';

	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @since	1.6
	 */
	protected function populateState()
	{
		$app = JFactory::getApplication('site');

		// Load state from the request.
		$pk = JRequest::getInt('id');
		$this->setState('refuerzo.id', $pk);

		// Load the parameters.
		$params = $app->getParams();
		$this->setState('params', $params);

        // TODO: Tune these values based on other permissions.
		$user		= JFactory::getUser();
        $this->setState('user.id', $user->id);
	}

	/**
	 * Method to get refuerzo data.
	 *
	 * @param	integer	The id of the refuerzo.
	 *
	 * @return	mixed	Refuerzo by id or false.
	 */
	public function getItem($pk = null)
	{

		// Initialise variables.
		$pk = (!empty($pk)) ? $pk : (int) $this->getState('refuerzo.id');

		if ($this->_item === null) {
			$this->_item = array();
		}

        $db     = $this->getDbo();
        $query  = $db->getQuery(true);

        // Select field from talleres table
        $query->select('a.*');
        $query->from($db->quoteName('#__refuerzo_links') . ' AS a');

        $userid = $id = $this->getState('user.id');


        //if (!empty($pk)) {
            //$query->where('a.user_id = '.(int) $userid . ' AND a.id = ' . (int) $pk);
        //} else {
        $query->where('a.user_id = '.(int) $userid . ' AND a.fecha_expiracion > \'' . date('Y-m-d H:i:s', time()) . '\'');
        //}

        $db->setQuery($query);
        $items = $db->loadObjectList();

        $item = new stdClass;

        if (empty($items)) {
            $item->valid = false;
        } else {
            $item->valid = true;
            // Recuperar el nro de refuerzo solicitado para el refuerzo activo
            $item->nro_refuerzo = $items[0]->nro_refuerzo;
        }

        //$item = $items[0];

        //$item->valid = false;
        //$currentDate = time();

//        if ($currentDate <= strtotime($item->fecha_expiracion)) {
//            $item->valid = true;
//
//        }

        $this->_item[$pk] = $item;

		return $this->_item[$pk];
	}
 }
