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

class TalleresControllerRegistroSemanal extends JControllerForm
{
    protected $view_item = 'registrosemanal';

    public function save($key = null, $urlVar = 'sub_id')
    {
        // Check that user is authorized
        $user = JFactory::getUser();
        $model = $this->getModel();
        $data  = JRequest::getVar('jform', array(), 'post', 'array');
        $context = "$this->option.$this->context";

        if (!$user->authorise('core.create', 'com_talleres')) {
            JError::raiseError(403, JText::_('JERROR_ALERTNOAUTHOR'));
            return false;
        }

        //$validData = $this->validate();
        $this->setRedirect(JRoute::_('index.php?option='. $this->option.'&view='.$this->view_item. $this->getRedirectToItemAppend(null, null), false));

        // Check that form data is valid
        if (!$this->validate()) {
            return false;
        }

        $data['fecha'] = date("Y-m-d");
        $data['usuario_id'] = $user->id;

        // Add subscription to database
        if (!$result = $model->save($data)) {
            $this->setMessage($model->getError(), 'error');
            return false;
        }

        // At this point, we have succeeded
        // Trigger the onAfterSubscribe event
        JDispatcher::getInstance()->trigger('onAfterSubscribe', array(&$validData));

        // Include id in redirect for success message
        $this->setRedirect(JRoute::_('index.php?option=' . $this->option . '&view=' . $this->view_item . '&layout=thankyou', false));
        return true;

    }

    /**
     * Validate the data
     *
     * @return boolean true if data is valid, false otherwise
     */
    protected function validate()
    {
        $app = JFactory::getApplication();
        $model = $this->getModel();
        $data = JRequest::getVar('jform', array(), 'post', 'array');
        $form = $model->getForm($data, false);
        $validData = $model->validate($form, $data);
        $context = "$this->option.$this->context";

        // Check for validation errors.
        if ($validData === false) {
            // Get the validation messages.
            $errors = $model->getErrors();
            // Push up to three validation messages out to the user.
            for ($i = 0, $n = count($errors); $i < $n && $i < 3; $i++)
            {
                if (JError::isError($errors[$i])) {
                    $app->enqueueMessage($errors[$i]->getMessage(), 'warning');
                }
                else {
                    $app->enqueueMessage($errors[$i], 'warning');
                }
            }
            // Save the data in the session.
            if (isset($data)) {
                $app->setUserState($context.'.data', $data);
            }

            // Redirect back to the inscription screen.
            $this->setRedirect(JRoute::_('index.php?option='. $this->option.'&view='.$this->view_item. $this->getRedirectToItemAppend(null, null), false));
            return false;
        }
        return true;
    }

    public function delete() {
        $model = $this->getModel();

        /* verificar si el seguimiento es de un taller que me pertenece */
        $id = JRequest::getVar('id', array(), 'get', 'array');
        $model->delete($id);

        $this->setRedirect(JRoute::_('index.php?option='. $this->option.'&view=mybandagastrica' , false));
        return;

    }

     /**
     * Proxy for getModel.
     * @since	1.6
     */
    public function getModel($name = 'registrosemanal', $prefix = 'TalleresModel', $config = array('ignore_request' => true))
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