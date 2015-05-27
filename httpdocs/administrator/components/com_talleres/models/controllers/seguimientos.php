<?php
/**
 * @package Joomla.Administrator
 * @subpackage com_talleres
 * @copyright Copyright (C) 2012 Robert Reimi robert.reimi@gmail.com
 * @license GNU General Public License version 2 or later
 *
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.application.component.controlleradmin');

class TalleresControllerSeguimientos extends JControllerAdmin
{

    protected $text_prefix = "COM_TALLERES_SEGUIMIENTO";

    /**
     * Constructor.
     *
     * @param	array An optional associative array of configuration settings.
     * @see		JController
     * @since	1.6
     */
    public function __construct($config = array())
    {
        parent::__construct($config);
    }

    /**
     * Use in list screen, set the model to perfom operations over listed elements
     *
     * Proxy for getModel.
     */
    public function getModel($name = 'Seguimiento', $prefix = 'TalleresModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);
        return $model;
    }


}