<?php
/**
 * controller.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */

defined('_JEXEC') or die;
jimport('joomla.application.component.controller');
/**
 * Talleres Component Controller
 *
 */
class TalleresController extends JController
{
    /**
     * Method to display a view.
     *
     * @param boolean If true, the view output will be cached
     * @param array An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return JController This object to support chaining.
     */
    public function display($cachable = false, $urlparams = false)
    {
        // Initialise variables.
        $cachable = true;
        $user = JFactory::getUser();

        // Set the default view name and format from the Request.
        $vName	 = JRequest::getCmd('view', 'registro');
        //$vFormat = $document->getType();
        $lName	 = JRequest::getCmd('layout', 'default');
        $task = JRequest::getCmd('task');

        $whiteList = array ('paypal'); //add here non login required views
        $taskWhiteList = array ('paypal.ipn'); //add here non login required views


        if ((!in_array($vName, $whiteList)) && (!in_array($task, $taskWhiteList))) {
            //checkLogin
            if ($user->id < 1) {
                $this->setRedirect(JRoute::_('index.php?option=com_users&view=login&return=' . base64_encode(JRequest::getURI())));
                $this->setMessage(JText::_('COM_TALLERES_LOGIN_REQUERIDO'),'warning');
                return false;
            }
        }

        if (!empty($task)){
            if (!in_array($task, $taskWhiteList)) {
                //checkLogin
                if ($user->id < 1) {
                    $this->setRedirect(JRoute::_('index.php?option=com_users&view=login&return=' . base64_encode(JRequest::getURI())));
                    $this->setMessage(JText::_('COM_TALLERES_LOGIN_REQUERIDO'),'warning');
                    return false;
                }
            }
        }


        JRequest::setVar('view', $vName);

        if ($user->get('id')) {
            $cachable = false;
        }

        $safeurlparams = array(
            'id'                => 'INT',
            'limit'             => 'INT',
            'limitstart'        => 'INT',
            'filter_order'      => 'CMD',
            'filter_order_Dir'  => 'CMD',
            'lang'              => 'CMD'
        );

        parent::display($cachable, $safeurlparams);
        return $this;
    }
}