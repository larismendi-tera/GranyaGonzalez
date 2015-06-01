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

class TalleresHelper {

    /*
     * Creates component submenu
     */
    public static function addSubmenu($vName = 'talleres') {

        JSubMenuHelper::addEntry(
            JText::_('COM_TALLERES_SUBMENU_TALLERES'),
            'index.php?option=com_talleres&view=talleres',
            $vName == 'talleres'
        );

        JSubMenuHelper::addEntry(
            JText::_('COM_TALLERES_SUBMENU_INSCRIPCIONES'),
            'index.php?option=com_talleres&view=inscripciones',
            $vName == 'inscripciones'
        );

        JSubMenuHelper::addEntry(
            JText::_('COM_TALLERES_SUBMENU_REFUERZOS'),
            'index.php?option=com_talleres&view=refuerzos',
            $vName == 'refuerzos'
        );

        JSubMenuHelper::addEntry(
            JText::_('COM_TALLERES_SUBMENU_SEGUIMIENTOS'),
            'index.php?option=com_talleres&view=seguimientos&clear=state',
            $vName == 'seguimientos'
        );

        JSubMenuHelper::addEntry(
            JText::_('COM_TALLERES_SUBMENU_ENLACES'),
            'index.php?option=com_talleres&view=enlaces',
            $vName == 'enlaces'
        );
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

    public static function getStatus($status) {
        return ($status == 1)? JText::_('COM_TALLERES_FIELD_STATUS_CONFIRMED') : JText::_('COM_TALLERES_FIELD_STATUS_PENDING');
    }



    public static function getInscripcionStatuses() {
        return array(1 => JText::_('COM_TALLERES_FIELD_STATUS_CONFIRMED'), 0 => JText::_('COM_TALLERES_FIELD_STATUS_PENDING'));

    }

    public static function getTipo($tipo) {
        switch ($tipo) {
            case 'p': return JText::_('COM_TALLERES_FIELD_TIPO_PERMANENTE'); break;
            case 'm': return JText::_('COM_TALLERES_FIELD_TIPO_MASIVO'); break;
            case 'i': return JText::_('COM_TALLERES_FIELD_TIPO_INDIVIDUAL'); break;
        }

        return "";
    }

    public static function getAutoEvaluacion($eval) {
        //Auto evaluación (b: buena, r: regular, m: mala)
        switch ($eval) {
            case 'm': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_MALA'); break;
            case 'r': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_REGULAR'); break;
            case 'b': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_BUENA'); break;
        }

        return "";
    }

    public static function getDieta($dieta) {
        switch ($dieta) {
            case 's': return JText::_('COM_TALLERES_SEGUIMIENTO_DIETA_SI'); break;
            case 'c': return JText::_('COM_TALLERES_SEGUIMIENTO_DIETA_CUIDO'); break;
            case 'n': return JText::_('COM_TALLERES_SEGUIMIENTO_DIETA_NO'); break;
        }

        return "";
    }

    public static function getCalidadDieta($calDieta) {
        switch ($calDieta) {
            case 'm': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_MALA'); break;
            case 'r': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_REGULAR'); break;
            case 'b': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_BIEN'); break;
            case 's': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_MUY_BIEN'); break;
        }

        return "";
    }

    public static function getEscucharAudio($audio) {
        switch ($audio) {
            case 'n': return JText::_('COM_TALLERES_SEGUIMIENTO_AUDIO_N'); break;
            case 'd': return JText::_('COM_TALLERES_SEGUIMIENTO_AUDIO_D'); break;
            case 'n,d': return JText::_('COM_TALLERES_SEGUIMIENTO_AUDIO_ND'); break;
        }
        return "";
    }

    public static function getRefuerzoLink($linkId) {
        return JURI::root() . "index.php?option=com_talleres&view=refuerzo&id=" . $linkId;
    }

    public static function getConducta($conducta) {

        $html = '<ul>';

        if  (strpos($conducta,'m') !== false)
            $html .= '<li>' . JText::_('COM_SEGUIMIENTO_FIELD_MASTICO') . '</li>';

        if  (strpos($conducta,'b') !== false)
            $html .= '<li>' . JText::_('COM_SEGUIMIENTO_FIELD_BAJO_CUBIERTOS') . '</li>';

        if  (strpos($conducta,'p') !== false)
            $html .= '<li>' . JText::_('COM_SEGUIMIENTO_FIELD_PLATO_CHICO') . '</li>';

        $html .= '</ul>';

        return $html;
    }

    public static function getCantidad($cantidad) {
        switch ($cantidad) {
            case 'p': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_POCO'); break;
            case 'n': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_NORMAL'); break;
            case 'm': return JText::_('COM_TALLERES_SEGUIMIENTO_EVAL_MUCHO'); break;
        }
        return "";
    }

    public static function getMiniPorcion($mini) {
        switch ($mini) {
            case 's': return JText::_('COM_TALLERES_SEGUIMIENTO_DIETA_SI'); break;
            case 'n': return JText::_('COM_TALLERES_SEGUIMIENTO_DIETA_NO'); break;
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

    /* Converts 24 hour format to 12 hour am/pm format */
    public static function formatHora($hora) {
        return JHtml::_('formatHora', $hora);
    }

    public static function gerCurrencySymbol($pais) {
        switch ($pais) {
            case 'VE': return 'Bs';
            case 'US': return 'US$';
        }

        return "";
    }
}