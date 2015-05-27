<?php
/**
 * talleres.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/18/13
 *
 */

defined('_JEXEC') or die;

/**
 *  Talleres helper.
 *
 *
 */

class RecordsHelper {

    /*
     * Creates component submenu
     */
    public static function addSubmenu($vName = 'talleres') {

//        JSubMenuHelper::addEntry(
//            JText::_('COM_TALLERES_SUBMENU_TALLERES'),
//            'index.php?option=com_talleres&view=talleres',
//            $vName == 'talleres'
//        );
//
//        JSubMenuHelper::addEntry(
//            JText::_('COM_TALLERES_SUBMENU_INSCRIPCIONES'),
//            'index.php?option=com_talleres&view=inscripciones',
//            $vName == 'inscripciones'
//        );
//
//        if ($vName == 'categories') {
//            JToolBarHelper::title(JText::sprintf('COM_CATEGORIES_CATEGORIES_TITLE', JText::_('com_talleres')), 'talleres-categories');
//        }
    }

    public static function getActions() {
        $user = JFactory::getUser();
        $result = new JObject;
        //if (empty($categoryId)) {
        $assetName = 'com_talleres';
        //} else {
        //  $assetName = 'com_talleres.category.'.(int) $categoryId;
        //}

        $actions = array('core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete');

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }



    public static function getInscripcionStatuses() {
        return array(1 => JText::_('COM_RECORDS_FIELD_STATUS_COMPLETED'), 0 => JText::_('COM_RECORDS_FIELD_STATUS_PENDING'));

    }

    public static function getCategories() {
        return array(1 => JText::_('COM_RECORDS_FIELD_CATEGORIA1'),
            2 => JText::_('COM_RECORDS_FIELD_CATEGORIA2'),
            3 => JText::_('COM_RECORDS_FIELD_CATEGORIA3'),
            4 => JText::_('COM_RECORDS_FIELD_CATEGORIA4'));

    }
    
    public static function getCountries() {
    	return array( 234 => JText::_('COM_RECORDS_FIELD_COUNTRY1'),
    			64 => JText::_('COM_RECORDS_FIELD_COUNTRY2'),
    			0 => JText::_('COM_RECORDS_FIELD_COUNTRY0'));
    }

    public static function getCategoria($tipo) {
        switch ($tipo) {

            //'1' Información talleres '2' Información estética '3' Reportar problema '5' Solicitar refuerzo  '4' Otro
            case '1': return JText::_('COM_RECORDS_FIELD_CATEGORIA1'); break;
            case '2': return JText::_('COM_RECORDS_FIELD_CATEGORIA2'); break;
            case '3': return JText::_('COM_RECORDS_FIELD_CATEGORIA3'); break;
            case '5': return JText::_('COM_RECORDS_FIELD_CATEGORIA5'); break;
            case '4': return JText::_('COM_RECORDS_FIELD_CATEGORIA4'); break;
        }

        return "";
    }

    public static function getStatus($status) {
        switch ($status) {
            case '0': return JText::_('COM_RECORDS_FIELD_STATUS_PENDING'); break;
            case '1': return JText::_('COM_RECORDS_FIELD_STATUS_COMPLETED'); break;
        }

        return "";
    }


    /*
     * Forma de pago (e: EFECTIVO, d: DEPÓSITO, t: TRANSFERENCIA, c: CREDITO, b: DEBITO, q:CHEQUE)
     */
    public static function getMetodoPago($tipo) {
        switch ($tipo) {
            case 'e': return JText::_('COM_TALLERES_FIELD_PAGO_EFECTIVO'); break;
            case 'd': return JText::_('COM_TALLERES_FIELD_PAGO_DEPOSITO'); break;
            case 't': return JText::_('COM_TALLERES_FIELD_PAGO_TRANSFERENCIA'); break;
            case 'c': return JText::_('COM_TALLERES_FIELD_PAGO_CREDITO'); break;
            case 'b': return JText::_('COM_TALLERES_FIELD_PAGO_DEBITO'); break;
            case 'q': return JText::_('COM_TALLERES_FIELD_PAGO_CHEQUE'); break;
        }

        return "";
    }

    /*
     * Género de quien se inscribe (1: Femenino, 2: Masculino)
     */
    public static function getGenero($genero) {
        switch ($genero) {
            case 1: return JText::_('COM_TALLERES_FIELD_FEMENINO'); break;
            case 2: return JText::_('COM_TALLERES_FIELD_MASCULINO'); break;
        }

        return "";
    }

    /*
     * Género de quien se inscribe (1: Femenino, 2: Masculino)
     */
    public static function formatFecha($fecha) {
        return JHtml::_('date', $fecha, JText::_('DATE_FORMAT_LC'));
    }
}