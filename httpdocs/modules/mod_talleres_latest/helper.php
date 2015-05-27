<?php
/**
 * helper.php
 *
 * User: robert.reimi@gmail.com
 * Date: 3/4/13
 *
 */

// no direct access
defined('_JEXEC') or die;

JModelLegacy::addIncludePath(JPATH_ADMINISTRATOR .'/components/com_talleres/models', 'TalleresModel');
require_once JPATH_ADMINISTRATOR .DS."components".DS."com_talleres".DS."helpers".DS."talleres.php";

class modTalleresLatestHelper {

    static function getList($tipo_taller, $limit, $country_code)
    {
        $model = JModelLegacy::getInstance('Talleres', 'TalleresModel', array('ignore_request' => true));
        return $model->getNextTalleres($tipo_taller, $limit, $country_code);
    }

    static function isAgotado($item) {
    	if ($item->total >= $item->cupo_web) {
			echo JText::_('MOD_TALLERES_AGOTADO');
       }
    }

    static function getTaller($id)
    {
    	$model = JModelLegacy::getInstance('Talleres', 'TalleresModel', array('ignore_request' => true));
    	return $model->getTaller($id);
    }
    
    static function isDescuento($item) {
    	if ($item->precio_oferta > 0 && strtotime($item->fecha_limite_oferta) >= strtotime(date("d-m-Y H:i:00",time()))) {
    		echo TalleresHelper::gerCurrencySymbol($item->pais) . ' ' . $item->precio_oferta . JText::_('MOD_TALLERES_DESCUENTO') . JHtml::_('date', $item->fecha_limite_oferta, JText::_('DATE_FORMAT_LC5')) . JText::_('DATE_CONCAT') . JHtml::_('date', $item->fecha_limite_oferta, JText::_('DATE_FORMAT_LC6'));
    	}
    }
    

}