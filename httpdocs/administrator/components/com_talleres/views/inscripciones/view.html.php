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

class TalleresViewInscripciones extends JView
{
    protected $items;
    protected $pagination;
    protected $state;

    public function display($tpl = null) {

        $this->state = $this->get('State');
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        /* Set taller id filter */
        $this->taller_list = $this->get('TallerFilter');

        //$tallerModel = & JModel::getInstance('talleres', 'TalleresModel');
        //var_dump($tallerModel->getItems());

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
        $state = $this->get('State');

        $canDo = TalleresHelper::getActions();
        $user = JFactory::getUser();

        JToolBarHelper::title(JText::_('COM_TALLERES_MANAGER_INSCRITOS'), 'newsfeeds.png');

        if ($canDo->get('core.create')) {
            JToolBarHelper::addNew('inscripcion.add', 'JTOOLBAR_NEW');
        }

        if ($canDo->get('core.edit')) {
            JToolBarHelper::editList('inscripcion.edit', 'JTOOLBAR_EDIT');
        }

        if ($canDo->get('core.edit.state')) {
            JToolBarHelper::divider();
            JToolBarHelper::publish('inscripciones.inscripcion_confirm', 'COM_TALLERES_OPCION_CONFIRMAR', true);
            JToolBarHelper::unpublish('inscripciones.inscripcion_pending', 'COM_TALLERES_OPCION_ANULAR', true);
            //JToolBarHelper::divider();
            //JToolBarHelper::archiveList('talleres.archive');
            //JToolBarHelper::checkin('talleres.checkin');
        }

        if ($canDo->get('core.admin')) {
            //JToolBarHelper::preferences('com_talleres');
            //JToolBarHelper::divider();
        }

        JToolBarHelper::deleteList('', 'inscripciones.delete', 'COM_TALLERES_OPCION_ELIMINAR');
        JToolBarHelper::divider();

        // Add export toolbar
        $bar = JToolBar::getInstance('toolbar');
        $bar->appendButton('Link', 'export', 'COM_TALLERES_INSCRIPCIONES_REPORT',
            'index.php?option=com_talleres&task=inscripciones.report');

        //JToolBarHelper::help('','', JText::_('COM_TALLERES_TALLERES_HELP_LINK'));
    }

}
