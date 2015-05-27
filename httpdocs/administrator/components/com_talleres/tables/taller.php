<?php

defined('_JEXEC') or die;


class TalleresTableTaller extends JTable
{
    /**
     * Constructor
     *
     * @param JDatabase A database connector object
     */
    public function __construct(&$db)
    {
        parent::__construct('#__taller', 'id', $db);
    }

    /**
     * Overload the store method for the Subscriptions table.
     *
     * @param boolean
    Toggle whether null values should be updated.
     * @return boolean
    True on success, false on failure.
     */
    public function store($updateNulls = false)
    {
        $date = JFactory::getDate();
        $user = JFactory::getUser();

        //var_dump($user);
        if ($this->id) {
            // Existing item
            $this->modified = $date->toSQL();
            $this->modified_by = $user->get('id');
        } else {
            // New taller. Created and created_by field can be set by the user,
            // so we don't touch either of these if they are set.
            if (!intval($this->created)) {
                $this->created = $date->toSQL();
            }
            if (empty($this->created_by)) {
                $this->created_by = $user->get('id');
            }
        }

        // Verify that the alias is unique
        //$table = JTable::getInstance('taller', 'TalleresTable');

        /* No interested in alias or cat id */
//        if ($table->load(array('alias' => $this->alias)) && ($table->id != $this->id || $this->id == 0)) {
//            $this->setError(JText::_('COM_JOOMPROSUBS_ERROR_UNIQUE_ALIAS'));
//            return false;
//        }
        // Attempt to store the user data.
        return parent::store($updateNulls);
    }

    /**
     * Overloaded check method to ensure data integrity.
     *
     * @return boolean True on success.
     */
    public function check()
    {
        // check for existing taller with same date and type
        $db = $this->_db;
        $query = $db->getQuery(true);
        $query->select('id');
        $query->from($db->quoteName('#__taller'));
        $query->where('fecha = ' . $this->fecha . ' AND tipo = ' . (int) $this->tipo);
        $db->setQuery($query);
        $xid = intval($db->loadResult());
        if ($xid && $xid != intval($this->id)) {
            $this->setError(JText::_('COM_TALLERES_ERR_TABLES_NAME'));
            return false;
        }

        // No needed logic
//        if (empty($this->alias)) {
//            $this->alias = $this->title;
//        }
//        $this->alias = JApplication::stringURLSafe($this->alias);
//        if (trim(str_replace('-','',$this->alias)) == '') {
//            $this->alias = JFactory::getDate()->format("Y-m-d-H-i-s");
//        }
//
//        // Check the publish down date is not earlier than publish up.
//        if (intval($this->publish_down) > 0 && $this->publish_down < $this->publish_up) {
//        // Swap the dates.
//            $temp = $this->publish_up;
//            $this->publish_up = $this->publish_down;
//            $this->publish_down = $temp;
//        }
        return true;
    }

    }



