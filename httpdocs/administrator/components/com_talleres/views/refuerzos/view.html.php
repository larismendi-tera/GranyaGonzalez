<?php
/**
 * view.html.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/18/13
 *
 */

defined('_JEXEC') or die;
jimport('joomla.application.component.view');

/**
* View class for a list of subscriptions.
*
*/

class TalleresViewRefuerzos extends JView
{
    protected $items;
    protected $pagination;
    protected $state;

    public function display($tpl = null) {

        $this->state = $this->get('State');

        //var_dump($this->state->get('filter.search'));
        //die();

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');

        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }

        $this->addToolbar();
        parent::display($tpl);
    }

    /**
     *
     * Add page title and toolbar
     *
     */
    protected function addToolbar() {

        JLoader::register('TalleresHelper', JPATH_COMPONENT.'/helpers/talleres.php');
        //$state = $this->get('State');

        $canDo = TalleresHelper::getActions();
        //$user = JFactory::getUser();

        JToolBarHelper::title(JText::_('COM_TALLERES_OPTION_ENVIAR_REFUERZO'), 'newsfeeds.png');

        if ($canDo->get('core.create')) {
            JToolBarHelper::publish('refuerzos.enviar', 'COM_TALLERES_OPTION_ENVIAR_REFUERZO', true);
            //JToolBarHelper::divider();
            //JToolBarHelper::archiveList('talleres.archive');
            //JToolBarHelper::checkin('talleres.checkin');
        }

        if ($canDo->get('core.admin')) {
            //JToolBarHelper::preferences('com_talleres');
            //JToolBarHelper::divider();
        }

        //JToolBarHelper::help('','', JText::_('COM_TALLERES_TALLERES_HELP_LINK'));
    }

}
