<?php

defined('_JEXEC') or die;


class TalleresTableRefuerzo extends JTable
{
    /**
     * Constructor
     *
     * @param JDatabase A database connector object
     */
    public function __construct(&$db)
    {
        parent::__construct('#__refuerzo_links', 'id', $db);
    }

    /**
     * Overloaded check method to ensure data integrity.
     *
     * @return boolean True on success.
     */
    public function check()
    {

        // No needed logic
        if (empty($this->user_id)) {
            return false;
        }

        if (empty($this->fecha_expiracion)) {
            return false;
        }

        return true;
    }

}



