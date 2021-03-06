<?php
/**
 * taller.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/19/13
 *
 */

defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');
JLoader::register('TalleresModelTaller', JPATH_ADMINISTRATOR.'/components/com_talleres/models/taller.php');

/**
 *Taller model.
 *
 * @package Joomla.Administrator
 * @subpackage com_talleres
 * @since
2.5
 */
class TalleresModelInscripcion extends JModelAdmin
{
    /**
     * @var string The prefix to use with controller messages.
     */
    protected $text_prefix = 'COM_TALLERES';

    public function validate($form, $data, $group = null) {

        //var_dump($data);
        //var_dump($form);
        /* Validate valid inscription, taller availability */

        $data = parent::validate($form, $data, $group);
        //return false;
        if ($data === false) {
            return false;
        }

        /* Validate availability of taller */
        if ($data['id'] == 0){
            if (!$this->validateCapacity($data['taller_id'], $data['tipo_inscripcion'])){
                $this->setError(JText::_('COM_TALLERES_MSG_ERROR_CUPO'));
                return false;
            }
        }

        return $data;
    }

    /*
    * Returns true if there is capacity in current taller for specific type of inscripcion
    */
    public function validateCapacity($taller_id, $tipo_inscripcion) {

        $db    = $this->getDbo();
        $query = $db->getQuery(true);

        $query->select("a.*, SUM(IF(b.tipo_inscripcion = '" . $tipo_inscripcion . "', 1, 0)) as total_web, count(b.taller_id) as total");
        $query->from($db->quoteName('#__taller') . ' AS a');
        $query->join('LEFT', $db->quoteName('#__inscripcion').' AS b ON b.taller_id = a.id');
        $query->where('a.id = '.(int) $taller_id);

        $db->setQuery($query);
        $taller = $db->loadObject();

        if ($tipo_inscripcion == 'w') {
            if ($taller->total_web >= $taller->cupo_web) {
                return false;
            }
        } else if ($tipo_inscripcion == 'm') {
            $totalManual = $taller->total - $taller->total_web;
            if ($totalManual >= $taller->cupo) {
                return false;
            }
        } else {
            //die("invalid type");
            return false;
        }

        return true;
    }


    /**
     * Method to test whether a record can be deleted.
     *
     * @param object A record object.
     * @return Boolean True if allowed to delete the record. Defaults to the permission set in the component.
     */
    protected function canDelete($record)
    {
        if (!empty($record->id)) {
            $user = JFactory::getUser();
            return $user->authorise('core.delete');
        } else {
            return false;
        }

    }

    /**
     * Method to test whether a record can have its state changed.
     *
     * @param object A record object.
     * @return Boolean True if allowed to change the state of the record. Defaults to the permission set in the component.
     */
    protected function canEditState($record)
    {
        return parent::canEditState($record);
    }


    /**
     * Returns a reference to the a Table object, always creating it.
     *
     * @param type The table type to instantiate
     * @param string A prefix for the table class name. Optional.
     * @param array Configuration array for model. Optional.
     * @return JTable A database object
     */
    public function getTable($type = 'inscripcion', $prefix = 'TalleresTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    /**
     * Method to get the record form.
     *
     * @param array $data An optional array of data for the form to interogate.
     * @param boolean $loadData True if the form is to load its own data (default case), false if not.
     * @return JForm A JForm object on success, false on failure
     */
    public function getForm($data = array(), $loadData = true)
    {
        // Initialise variables.
        $app = JFactory::getApplication();

        // Get the form.
        $form = $this->loadForm('com_talleres.inscripcion','inscripcion', array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form)) {
            return false;
        }

        // Determine correct permissions to check. //dont check category id
        if ($this->getState('taller.id')) {
            // Existing record. Can only edit in selected categories.
            //$form->setFieldAttribute('catid', 'action', 'core.edit');
        } else {
            // New record. Can only create in selected categories.
            //$form->setFieldAttribute('catid', 'action', 'core.create');
        }

        // Modify the form based on access controls.
        if (!$this->canEditState((object) $data)) {
            // Disable fields for display.
            //$form->setFieldAttribute('published', 'disabled', 'true');
            //$form->setFieldAttribute('publish_up', 'disabled', 'true');
            //$form->setFieldAttribute('publish_down', 'disabled', 'true');
            // Disable fields while saving.
            // The controller has already verified this is a record you can edit.
            //$form->setFieldAttribute('published', 'filter', 'unset');
            //$form->setFieldAttribute('publish_up', 'filter', 'unset');
            //$form->setFieldAttribute('publish_down', 'filter', 'unset');
        }

        return $form;

    }

    /**
     * Method to get the data that should be injected in the form.
     *
     * @return mixed
    The data for the form.
     */
    protected function loadFormData()
    {
        // Check the session for previously entered form data.
        $data = JFactory::getApplication()->getUserState('com_talleres.edit.inscripcion.data', array());
        if (empty($data)) {
            $data = $this->getItem();

            // Validate id to set default values
            if (!isset($data->id)) {
                $data->set('fecha', date("Y-m-d"));
            }



            //set default values here
            //$data->tipo_inscripcion = 'z';
            // Prime some default values.
//            if ($this->getState('taller.id') == 0) {
//                $app = JFactory::getApplication();
//                $data->set('catid', JRequest::getInt('catid',$app->getUserState('com_talleres.talleres.filter.category_id')));
//            }
        }
        return $data;
    }

    // @larismendi
    public function changeAssistance(&$pks, $status, $skipAuth = false)
    {

        // Typecast variable.
        $pks = (array) $pks;
        $user   = JFactory::getUser();

        // Get a row instance.
        $table = $this->getTable();

        /*if ($status == 1) {
            // We are approving inscription, load email template
            $tmpl = file_get_contents(JPATH_ADMINISTRATOR . '/components/com_talleres/templates/confirmation_email.html');
        }*/

        $tallerModel = JModelLegacy::getInstance('Taller', 'TalleresModel', array('ignore_request' => true));

        // Iterate the items to change change state each one.
        foreach ($pks as $i => $pk) {
            if ($table->load($pk)) {

                $allow = true;

                if (!$skipAuth) {
                    // Access checks.
                    $allow = $user->authorise('core.edit.state', 'com_talleres');
                }

                if ($allow) {
                    //$dispatcher->trigger('onUserBeforeDeleteGroup', array($table->getProperties()));
                    $table->asistencia = $status;
                    if (!$table->store()) {
                        echo $table->getError().'<br />';
                        return;
                    }

                    //Evento para plugin
                    JPluginHelper::importPlugin('user');
                    $dispatcher = JDispatcher::getInstance();

                    $taller = $tallerModel->getItem($table->taller_id);

                    // Send confirmation email
                    /*if ($status == 1) {

                        // Confirmar inscripcion
                        // Trigger the data preparation event.
                        $results = $dispatcher->trigger("onInscripcionAfterConfirm", array($this->option . '.' . $this->name, &$table, $taller));

                        //Enviar el correo de confirmacion
                        $this->sendEmailConfirmation($tmpl, $table, $taller);
                    } else {
                        // Quitar confirmacion de la lista
                        // Trigger the data preparation event.
                        $results = $dispatcher->trigger("onInscripcionAfterNoConfirm", array($this->option . '.' . $this->name, &$table, $taller));
                    }*/
                } else {
                    // Prune items that you can't change.
                    unset($pks[$i]);
                    JError::raiseWarning(403, JText::_('JERROR_CORE_DELETE_NOT_PERMITTED'));
                }
            } else {
                $this->setError($table->getError());
                return false;
            }
        }

        return true;
    }

    /**
     * Change inscription status
     *
     * $pks primary keys array
     * $status = 1 confirmed , 0 pendiente
     *
     * @return JDatabaseQuery
     */
    public function changeStatus(&$pks, $status, $skipAuth = false)
    {

        // Typecast variable.
        $pks = (array) $pks;
        $user	= JFactory::getUser();


        // Get a row instance.
        $table = $this->getTable();

        if ($status == 1) {
            /* We are approving inscription, load email template */
            $tmpl = file_get_contents(JPATH_ADMINISTRATOR . '/components/com_talleres/templates/confirmation_email.html');
        }

        $tallerModel = JModelLegacy::getInstance('Taller', 'TalleresModel', array('ignore_request' => true));

        // Iterate the items to change change state each one.
        foreach ($pks as $i => $pk) {
            if ($table->load($pk)) {

                $allow = true;

                if (!$skipAuth) {
                    // Access checks.
                    $allow = $user->authorise('core.edit.state', 'com_talleres');
                }

                if ($allow) {
                    //$dispatcher->trigger('onUserBeforeDeleteGroup', array($table->getProperties()));
                     $table->status = $status;
                    if (!$table->store()) {
                        echo $table->getError().'<br />';
                        return;
                    }

                    //Evento para plugin
                    JPluginHelper::importPlugin('user');
                    $dispatcher	= JDispatcher::getInstance();

                    $taller = $tallerModel->getItem($table->taller_id);

                    /* Send confirmation email */
                    if ($status == 1) {

                        // Confirmar inscripcion
                        // Trigger the data preparation event.
                        $results = $dispatcher->trigger("onInscripcionAfterConfirm", array($this->option . '.' . $this->name, &$table, $taller));

                        //Enviar el correo de confirmacion
                        $this->sendEmailConfirmation($tmpl, $table, $taller);
                    } else {
                        // Quitar confirmacion de la lista
                        // Trigger the data preparation event.
                        $results = $dispatcher->trigger("onInscripcionAfterNoConfirm", array($this->option . '.' . $this->name, &$table, $taller));
                    }
                } else {
                    // Prune items that you can't change.
                    unset($pks[$i]);
                    JError::raiseWarning(403, JText::_('JERROR_CORE_DELETE_NOT_PERMITTED'));
                }
            } else {
                $this->setError($table->getError());
                return false;
            }
        }

        return true;
    }

    private function sendEmailConfirmation($tmpl, $inscripcion, $taller) {

        $app = JFactory::getApplication();

        $fechaTaller = TalleresHelper::formatFecha($taller->fecha);

        $tmpl = str_replace("[baseUrl]", JURI::root(), $tmpl);
        $tmpl = str_replace("[nombre]", $inscripcion->nombre, $tmpl);
        $tmpl = str_replace("[fecha_taller]", $fechaTaller, $tmpl);
        $tmpl = str_replace("[lugar]", $taller->lugar, $tmpl);
        $tmpl = str_replace("[hora_inicio]", TalleresHelper::formatHora($taller->hora_inicio), $tmpl);
        $tmpl = str_replace("[hora_fin]", TalleresHelper::formatHora($taller->hora_fin), $tmpl);

        $mailfrom	= $app->getCfg('mailfrom');
        $fromname	= $app->getCfg('fromname');
        $sitename	= $app->getCfg('sitename');

        $name		= $inscripcion->nombre;
        $email		= $inscripcion->correo;
        $subject	= JText::_('COM_TALLERES_CONFIRMATION_SUBJECT') . $fechaTaller;
        $body		= $tmpl;

        $mail = JFactory::getMailer();
        $mail->addRecipient($email, $name);
        $mail->addReplyTo(array($mailfrom, $fromname));
        $mail->setSender(array($mailfrom, $fromname));
        $mail->setSubject($sitename.': '.$subject);
        $mail->setBody($body);
        $mail->IsHTML(true);

        $sent = $mail->Send();

        return $sent;
    }

    /**
     * Prepare and sanitise the table prior to saving.
     *
     */
    protected function prepareTable(&$table)
    {
//        $table->alias = JApplication::stringURLSafe($table->alias);
//        if (empty($table->alias)) {
//            $table->alias = JApplication::stringURLSafe($table->title);
//        }

        if (empty($table->id)) {
            $table->fecha = JFactory::getDate()->toSql();
        }

        //Set taller name based on tipo_taller y fecha_taller
        //$table->title = TalleresHelper::getTipo($table->tipo) . " - " . TalleresHelper::formatFecha($table->fecha);
    }

    /**
     * Removes an item. (Override)
     *
     * @return  void
     *
     * @since   11.1
     */
    /*public function delete()
    {
        // Check for request forgeries
        JSession::checkToken() or die(JText::_('JINVALID_TOKEN'));

        // Get items to remove from the request.
        $cid = JRequest::getVar('cid', array(), '', 'array');

        if (!is_array($cid) || count($cid) < 1)
        {
            JError::raiseWarning(500, JText::_($this->text_prefix . '_NO_ITEM_SELECTED'));
        }
        else
        {
            // Get the model.
            $model = $this->getModel();

            // Make sure the item ids are integers
            jimport('joomla.utilities.arrayhelper');
            JArrayHelper::toInteger($cid);

            // Remove the items.
            if ($model->delete($cid))
            {
                $this->setMessage(JText::plural($this->text_prefix . '_N_ITEMS_DELETED', count($cid)));

                // Quitar confirmacion de la lista
                // Trigger the data preparation event.
                JPluginHelper::importPlugin('user');
                $dispatcher	= JDispatcher::getInstance();
                $results = $dispatcher->trigger("onInscripcionAfterNoConfirm", array($this->option . '.' . $this->name, &$table, $taller));
            }
            else
            {
                $this->setMessage($model->getError());
            }
        }

        $this->setRedirect(JRoute::_('index.php?option=' . $this->option . '&view=' . $this->view_list, false));
    }*/

}