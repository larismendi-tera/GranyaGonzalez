<?php
/**
 * inscripcion.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */

// no direct access
defined('_JEXEC') or die;
jimport('joomla.application.component.controllerform');
jimport('joomla.user.helper');

class TalleresControllerMyBandaGastrica extends JControllerForm
{
    protected $view_item = 'mybandagastrica';

     /**
     * Proxy for getModel.
     * @since	1.6
     */
    public function getModel($name = 'registro', $prefix = 'TalleresModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;
    }

    protected function getRedirectToItemAppend($recordId = null, $urlVar = null)
    {
        $append = parent::getRedirectToItemAppend($recordId, $urlVar);
        $itemId = JRequest::getInt('Itemid');
        if ($itemId) {
            $append .= '&Itemid='.$itemId;
        }
        return $append;
    }
}