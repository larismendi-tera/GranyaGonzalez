<?php
/**
 * view.html.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */

// no direct accessdefined('_JEXEC') or die;
jimport('joomla.application.component.view');
/**
 * HTML View class for the JoomproSubs component
 *
 */
class TalleresViewRegistroSemanal extends JView
{
    protected $state;
    protected $data;
    protected $category;

    function display($tpl = null)
    {
        $app = JFactory::getApplication();

        $params = $app->getParams();
        $user = JFactory::getUser();

        // Get some data from the model
        $this->data = $this->get('Data');
        $this->form     = $this->get('Form');
        $this->state	= $this->get('State');

        $this->state->set('registrosemanal.inscripcion_id', $this->data->inscripcion_id);

        $this->inscripcion = $this->getModel()->getInscripcion();
        $this->params	= $this->state->get('params');

        $profile = JUserHelper::getProfile($user->id);

        if ($this->getLayout() === 'edit') {
            /* Verificar que puede editar */
            if ($profile->profile['ci'] !== $this->inscripcion->ci){
                JError::raiseError(403, JText::_('JERROR_ALERTNOAUTHOR'));
                return false;
            }
        }

        define('_JQUERY_ENABLE_VALIDATION', 1);

        //var_dump($this->inscripcion);

//        $item->nombre = $user->name;
//        $item->correo = $user->username;
//        $item->telefono = $profile->profile["phone"];
//        $item->genero = $profile->profile["gender"];
//        $item->ciudad = $profile->profile["city"];

        $authorised = $user->authorise('core.create', 'com_talleres');
        if ($authorised !== true) {
            JError::raiseError(403, JText::_('JERROR_ALERTNOAUTHOR'));
            return false;
        }

//        $this->form->bind($item);

        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JError::raiseWarning(500, implode("\n", $errors));
            return false;
        }

        //Escape strings for HTML output
        $this->pageclass_sfx = htmlspecialchars($params->get('pageclass_sfx'));
        //$this->params = $params;
        $this->user = $user;
        //$this->data = $data;

        /* Add jquery validation scripts */
        $document = JFactory::getDocument();
        $document->set("jqueryValidationEnabled", true);
        $this->_prepareDocument();
        parent::display($tpl);
    }

    protected function _prepareDocument()
    {
        $app = JFactory::getApplication();
        $menus = $app->getMenu();
        $pathway = $app->getPathway();
        $title = null;

        // Because the application sets a default page title,
        // we need to get it from the menu item itself
        $menu = $menus->getActive();
        $head = JText::_('COM_TALLERES_INSCRIPCION_MYBANDAGASTRICA_TITLE') . " - " . JText::_('COM_TALLERES_INSCRIPCION_REGISTRO_SEMANAL');

        if ($menu) {
            $this->params->def('page_heading', $this->params->get('page_title', $menu->title));
        } else {
            $this->params->def('page_heading', $head);
        }
        $title = $this->params->def('page_title', $head);
        if ($app->getCfg('sitename_pagetitles', 0)) {
            $title = JText::sprintf('JPAGETITLE', $app->getCfg('sitename'), $title);
        }

        $this->document->setTitle($title);
        if ($this->params->get('menu-meta_description')) {
            $this->document->setDescription($this->params->get('menu-meta_description'));
        }

        if ($this->params->get('menu-meta_keywords')) {
            $this->document->setMetadata('keywords', $this->params->get('menu-meta_keywords'));
        }

        if ($this->params->get('robots')) {
            $this->document->setMetadata('robots', $this->params->get('robots'));
        }
    }
}