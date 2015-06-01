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
class TalleresViewMyBandaGastrica extends JView
{
    protected $state;
    protected $inscripciones;
    protected $inscripcion_id;
    protected $seguimientos;
    protected $category;

    function display($tpl = null)
    {
        require_once(JPATH_COMPONENT_ADMINISTRATOR . DS . 'helpers' . DS . 'talleres.php');

        $app = JFactory::getApplication();
        $params = $app->getParams();
        $user = JFactory::getUser();
//        $this->form     = $this->get('Form');
        $this->state	= $this->get('State');
        $this->params	= $params;

        //$this->inscripciones = $this->get('InscripcionesByUser');

        $seguimientoData = JRequest::getVar('jform', array(), 'post', 'array');
        //try to get from state
//        if ($seguimientoData['inscripcion_id'] != null) {
//            $this->inscripcion_id  = $seguimientoData['inscripcion_id'];
//        }
//
//        //if is not null
//        if ($this->inscripcion_id == null) {
//            $this->inscripcion_id = JRequest::getVar('inscripcion_id', array(), 'get', 'int');
//        }

        /* Cargar seguimientos */
        $this->seguimientos = $this->getModel()->getSeguimientosForCurrentUser();

        //Escape strings for HTML output
        $this->pageclass_sfx = htmlspecialchars($params->get('pageclass_sfx'));
        //$this->params = $params;
        $this->user = $user;
        //$this->data = $data;

        $this->_prepareDocument();
        parent::display($tpl);
    }

    protected function _prepareDocument()
    {
        $app = JFactory::getApplication();
        $menus = $app->getMenu();
        //var_dump($menus->getActive());
        $pathway = $app->getPathway();
        $pathway->setPathway(array());
        $pathway->addItem(JText::_('COM_TALLERES_INSCRIPCION_MYBANDAGASTRICA_TITLE'));

        $title = null;

        // Because the application sets a default page title,
        // we need to get it from the menu item itself
        $menu = $menus->getActive();

        $head = JText::_('COM_TALLERES_INSCRIPCION_MYBANDAGASTRICA_TITLE');

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