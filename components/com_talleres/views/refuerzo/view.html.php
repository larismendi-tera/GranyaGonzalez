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
class TalleresViewRefuerzo extends JView
{
    protected $state;
    protected $item;
    protected $inscripcion_id;
    protected $seguimientos;
    protected $category;

    function display($tpl = null)
    {
        //require_once(JPATH_COMPONENT_ADMINISTRATOR . DS . 'helpers' . DS . 'talleres.php');
        $this->state	= $this->get('State');
        $this->item = $this->get('Item');

        if ($this->item == false) {
            return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
        }

        $this->_prepareDocument();
        parent::display($tpl);

    }

    protected function _prepareDocument()
    {
        /*JFactory::getDocument()->addStyleSheet(JURI::base(true) . "/components/com_talleres/assets/sm/page-player.css");
        JFactory::getDocument()->addStyleSheet(JURI::base(true) . "/components/com_talleres/assets/sm/flashblock.css");
        JFactory::getDocument()->addStyleSheet(JURI::base(true) . "/components/com_talleres/assets/sm/optional-annotations.css");
        JFactory::getDocument()->addStyleSheet(JURI::base(true) . "/components/com_talleres/assets/sm/optional-themes.css");

        JFactory::getDocument()->addScript(JURI::base(true) . "/components/com_talleres/assets/sm/soundmanager2-nodebug-jsmin.js");
        JFactory::getDocument()->addScript(JURI::base(true) . "/components/com_talleres/assets/sm/page-player.js");*/

        $app = JFactory::getApplication();
        $menus = $app->getMenu();
        //var_dump($menus->getActive());
        $pathway = $app->getPathway();
        $pathway->setPathway(array());
        $pathway->addItem(JText::_('COM_TALLERES_INSCRIPCION_REFUERZO_TITLE'));

        $title = null;

        // Because the application sets a default page title,
        // we need to get it from the menu item itself
        $menu = $menus->getActive();

        $head = JText::_('COM_TALLERES_INSCRIPCION_REFUERZO_TITLE');
    }
}