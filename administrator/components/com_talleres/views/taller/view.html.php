<?php

defined('_JEXEC') or die;
jimport('joomla.application.component.view');
/**
 * View to edit a contact.
 *
 * @package Joomla.Administrator
 * @subpackage com_talleres
 */
class TalleresViewTaller extends JView
{
    protected $form;
    protected $item;
    protected $state;

    /**
     * Display the view
     */
    public function display($tpl = null)
    {
        // Initialiase variables.
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        //var_dump($this->item);
        //die();

        $this->state = $this->get('State');
        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }
        $this->addToolbar();
        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JRequest::setVar('hidemainmenu', true);
        $user = JFactory::getUser();
        $isNew = ($this->item->id == 0);
        //$checkedOut = !($this->item->checked_out == 0 || $this->item->checked_out == $user->get('id'));
        $canDo = TalleresHelper::getActions();

        JToolBarHelper::title(JText::_('COM_TALLERES_MANAGER_TALLERES'), 'newfeeds.png');

        // If not checked out, can save the item.
        //if (!$checkedOut && ($canDo->get('core.edit') || (count($user->getAuthorisedCategories('com_talleres', 'core.create'))))) {
            JToolBarHelper::apply('taller.apply', 'JTOOLBAR_APPLY');
            JToolBarHelper::save('taller.save', 'JTOOLBAR_SAVE');
        //}
        //if (!$checkedOut && (count($user->getAuthorisedCategories('com_talleres', 'core.create')))) {
            JToolBarHelper::custom('taller.save2new', 'save-new.png', 'save-new_f2.png', 'JTOOLBAR_SAVE_AND_NEW', false);
        //}

        // If an existing item, can save to a copy.
        if (!$isNew && (count($user->getAuthorisedCategories('com_talleres', 'core.create')) > 0)) {
            JToolBarHelper::custom('taller.save2copy', 'save-copy.png', 'save-copy_f2.png', 'JTOOLBAR_SAVE_AS_COPY', false);
        }
        if (empty($this->item->id)) {
            JToolBarHelper::cancel('taller.cancel', 'JTOOLBAR_CANCEL');
        } else {
            JToolBarHelper::cancel('taller.cancel', 'JTOOLBAR_CLOSE');
        }
        JToolBarHelper::divider();
        JToolBarHelper::help('', '', JText::_('COM_TALLERES_SUBSCRIPTION_HELP_LINK'));
    }

}