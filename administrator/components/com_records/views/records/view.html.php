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

class RecordsViewRecords extends JView
{
    protected $items;
    protected $pagination;
    protected $state;

    public function display($tpl = null) {

        $this->state = $this->get('State');
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

        JLoader::register('RecordsHelper', JPATH_COMPONENT.'/helpers/records.php');
        $state = $this->get('State');

        $canDo = RecordsHelper::getActions();
        $user = JFactory::getUser();

        JToolBarHelper::title(JText::_('COM_RECORDS_MANAGER_RECORDS'), 'contact.png');

//        if ($canDo->get('core.create')) {
//            JToolBarHelper::addNew('taller.add', 'JTOOLBAR_NEW');
//        }
//
//        if ($canDo->get('core.edit')) {
//            JToolBarHelper::editList('taller.edit', 'JTOOLBAR_EDIT');
//        }

        if ($canDo->get('core.edit.state')) {
            JToolBarHelper::divider();
            JToolBarHelper::publish('records.record_confirm', 'COM_RECORDS_OPCION_CONFIRMAR', true);
            JToolBarHelper::unpublish('records.record_pending', 'COM_RECORDS_OPCION_PENDIENTE', true);
            //JToolBarHelper::divider();
            //JToolBarHelper::archiveList('talleres.archive');
            //JToolBarHelper::checkin('talleres.checkin');
        }

//        if ($canDo->get('core.admin')) {
//            JToolBarHelper::preferences('com_talleres');
//            JToolBarHelper::divider();
//        }



//        JToolBarHelper::help('','', JText::_('COM_TALLERES_TALLERES_HELP_LINK'));
    }

}
