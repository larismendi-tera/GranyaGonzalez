<?php
/**
 * view.html.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */

// no direct accessdefined('_JEXEC') or die;
jimport('joomla.application.component.view');
JLoader::register('TalleresModelInscripcion', JPATH_COMPONENT_ADMINISTRATOR.'/models/inscripcion.php');
JLoader::register('TalleresTableTaller', JPATH_COMPONENT_ADMINISTRATOR.'/tables/taller.php');
JLoader::register('TalleresHelper', JPATH_ADMINISTRATOR.'/components/com_talleres/helpers/talleres.php');

/**
 * HTML View class for the JoomproSubs component
 *
 */
class TalleresViewPaypal extends JView
{
    protected $state;
    protected $data;
    protected $params;

    function display($tpl = null)
    {
        $app = JFactory::getApplication();
        $this->params = JComponentHelper::getParams('com_talleres');
        $businessAccount = $this->params->get('paypal_business');

        if (empty($businessAccount)){
            die("Paypal no esta habilitado para pagar los talleres");
        }

        $inscripcionId = $app->input->get('inscripcion_id');
        $inscripcionModel = JModelLegacy::getInstance('Inscripcion', 'TalleresModel', array('ignore_request' => true));
        $inscripcion = $inscripcionModel->getItem($inscripcionId);

        if ($inscripcion == false) {
            die("Inscripción no válida");
        }

        if ($inscripcion->status != 0){
            die("Inscripción confirmada");
        }

        if ($inscripcion->forma_pago != 'p'){
            die("Esta inscripción no ha sido seleccionada para pagarse con paypal");
        }

        $taller = JTable::getInstance('Taller', 'TalleresTable');
        $taller->load($inscripcion->taller_id);

        $this->data->first_name = $inscripcion->nombre;
        $this->data->email = $inscripcion->correo;
        $this->data->city = $inscripcion->ciudad;
        $this->data->custom = $inscripcion->id;

        /* Validar precio */
//        $fechaLimiteOferta = strtotime($taller->fecha_limite_oferta);
//
//        if (time() >= $fechaLimiteOferta) {
//            $this->data->amount = $taller->precio_oferta;
//
//            if ($taller->precio_oferta == 0) {
//                $this->data->amount = $taller->precio;
//            }
//
//        } else {
//            $this->data->amount = $taller->precio;
//        }

        $this->data->amount = $inscripcion->monto;


        if ($this->params->get('paypal_mode') === 'sandbox') {
            $this->data->paypal_url = $this->params->get('paypal_sandbox_url');
        } else {
            $this->data->paypal_url = $this->params->get('paypal_production_url');
        }

        $this->data->return_url = JURI::base() . $this->params->get('paypal_return_url');
        $this->data->cancel_url = JURI::base() . $this->params->get('paypal_cancel_url') . "&id=" . $this->data->custom;
        $this->data->notify_url = JURI::base() . $this->params->get('paypal_notify_url');

        $this->data->item_name = JText::_('COM_TALLERES_TALLER') . ' ' . TalleresHelper::getTipo($taller->tipo) . ' ' . JHtml::_('date', $taller->fecha, JText::_('DATE_FORMAT_LC4'));
        $this->data->item_number = $taller->id;
        $this->data->business = $this->params->get('paypal_business');
        $this->data->pais = $taller->pais;

        $this->_prepareDocument();
        parent::display($tpl);
    }

    protected function _prepareDocument()
    {

        $app = JFactory::getApplication();
        $menus = $app->getMenu();
        $pathway = $app->getPathway();
        $title = null;


        // Because the application sets a default page title,
        // we need to get it from the menu item itself
        $menu = $menus->getActive();
        $head = JText::_('COM_TALLERES_CONFIRM_PAYPAL');

        $this->params->def('page_heading', $head);

        $title = $this->params->def('page_title', $head);
        if ($app->getCfg('sitename_pagetitles', 0)) {
            $title = JText::sprintf('JPAGETITLE', $app->getCfg('sitename'), $title);
        }

        $this->document->setTitle($title);
        if ($this->params->get('menu-meta_description')) {
            $this->document->setDescription($this->params->get('menu-meta_description'));
        }

        if ($this->params->get('menu-meta_keywords')) {
            $this->document->setMetadata('keywords', $this->params->get('menu-meta_keywords'));
        }

        if ($this->params->get('robots')) {
            $this->document->setMetadata('robots', $this->params->get('robots'));
        }
    }
}