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

class TalleresViewSeguimientos extends JView
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

        $this->addToolbar($this->items);
        parent::display($tpl);
    }

    /**
     *
     * Add page title and toolbar
     *
     */
    protected function addToolbar($items) {

        JLoader::register('TalleresHelper', JPATH_COMPONENT.'/helpers/talleres.php');
//        $state = $this->get('State');

        $canDo = TalleresHelper::getActions();
        $user = JFactory::getUser();

        $title = " "; //
        $stateFilterUserId = $this->state->get('filter.user_id');
        if (!empty($stateFilterUserId)){
            if (isset($items[0])) {
                $title .= $items[0]->nombre . ' - CI: ' . str_replace("\"","", $items[0]->ci);
               // $title .= ' <span style="font-size:80%">(' . $items[0]->taller_nombre . ')</span>';
            }
        }

        JToolBarHelper::title(JText::_('COM_TALLERES_MANAGER_SEGUIMIENTO') . $title, 'newsfeeds.png');

        if (!empty($stateFilterUserId)){
            JToolBarHelper::back();

            if ($canDo->get('core.create')) {
                JToolBarHelper::addNew('seguimiento.add', 'JTOOLBAR_NEW');
            }
        }

        if ($canDo->get('core.edit')) {
            JToolBarHelper::editList('seguimiento.edit', 'JTOOLBAR_EDIT');
        }

//        if ($canDo->get('core.edit.state')) {
//            JToolBarHelper::divider();
//            JToolBarHelper::publish('inscripciones.inscripcion_confirm', 'COM_TALLERES_OPCION_CONFIRMAR', true);
//            JToolBarHelper::unpublish('inscripciones.inscripcion_pending', 'COM_TALLERES_OPCION_ANULAR', true);
//            //JToolBarHelper::divider();
//            //JToolBarHelper::archiveList('talleres.archive');
//            //JToolBarHelper::checkin('talleres.checkin');
//        }

        if ($canDo->get('core.admin')) {
            //JToolBarHelper::preferences('com_talleres');
            //JToolBarHelper::divider();
        }



        JToolBarHelper::deleteList('', 'seguimientos.delete', 'COM_TALLERES_OPCION_ELIMINAR');
        JToolBarHelper::divider();

        //JToolBarHelper::help('','', JText::_('COM_TALLERES_TALLERES_HELP_LINK'));
    }

}
