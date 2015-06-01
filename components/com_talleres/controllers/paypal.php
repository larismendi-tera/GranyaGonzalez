<?php
/**
 * inscripcion.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */


//ini_set('display_errors', 1);
//error_reporting(E_ALL);

// no direct access
defined('_JEXEC') or die;
jimport('joomla.application.component.controllerform');
jimport('joomla.user.helper');
JLoader::register('TalleresModelInscripcion', JPATH_COMPONENT_ADMINISTRATOR.'/models/inscripcion.php');
JLoader::register('TalleresTableInscripcion', JPATH_COMPONENT_ADMINISTRATOR.'/tables/inscripcion.php');


class TalleresControllerPaypal extends JControllerLegacy
{
    protected $view_item = 'registro';

    public function ipn() {

//        ini_set('display_errors', 1);
//        error_reporting(E_ALL);

        //die('hola efermera');
        $app = JFactory::getApplication();

        $status = $app->input->get('payment_status');
        $monto = $app->input->get('mc_gross');
        $txn_id = $app->input->get('txn_id');

        $messages = array();
        $error = false;

        /* Verificar el IPN */
        if ($status == "Pending") {
            $messages[] = array('EstatusPendiente', Jlog::INFO);
            //JLog::add('Estatus pendiente', JLog::INFO);
            $error = true;
        }

        /* Verificar monto y id de la inscripcion */
        $inscripcionId = $app->input->get('custom');

        $inscripcionModel	= JModelLegacy::getInstance('Inscripcion', 'TalleresModel', array('ignore_request' => true));
        $inscripcion = $inscripcionModel->getItem($inscripcionId);

        if ($inscripcion == false) {
            $messages[] = array('Inscripcion no existe', Jlog::ERROR);
            $error = true;
        } else {
            /* Debe haber una inscripcion pendiente con tipo de pago paypal generada para el id recibido en custom */

            if ($inscripcion->status == '1') {
                $messages[] = array('La inscripcion ya esta confirmada', Jlog::WARNING);
                $error = true;
            }

            if ($inscripcion->forma_pago != 'p') {
                $messages[] = array('La inscripcion no esta asociada a un pago de paypal', Jlog::WARNING);
                $error = true;
            }

            if ($inscripcion->monto != $monto) {
                $messages[] = array('El monto no coindice', Jlog::ERROR);
                $error = true;
            }
        }

        if (!$error) {
            /* Vertificar status de la transaccion */
            if ($status == 'Completed') {
                /* Almacenar el transaccion id */
                $inscripcion = $inscripcionModel->getTable();
                $inscripcion->load($inscripcionId);
                $inscripcion->num_transaccion = $txn_id;
                $inscripcion->store();

                /* Confirmar la inscripcion */
                $inscripcionModel->changeStatus($inscripcionId, 1, true);
                $messages[] = array('Inscripcion confirmada ' . $inscripcionId, Jlog::INFO);
            } else if ($status == 'Denied'){
                /* Si esta negada eliminar */
                $inscripcion = $inscripcionModel->getTable();
                $inscripcion->load($inscripcionId);
                $inscripcion->delete();
                $messages[] = array('Inscripcion eliminada por rechazo de paypal ' . $inscripcionId, Jlog::INFO);
            }
        }

        try {
            /* Guardar en el log los ipn recibidos */
            $options['format'] = '{DATE}\t{TIME}\t{LEVEL}\t{CODE}\t{MESSAGE}';
            $options['text_file'] = 'ipn.php';
            JLog::addLogger($options);
            JLog::add($_SERVER['REQUEST_URI'], JLog::INFO);
            JLog::add('params_get: ' . json_encode(JRequest::get( 'get' )), JLog::INFO);
            JLog::add('params_post: ' . json_encode(JRequest::get( 'post' )),  JLog::INFO);
            JLog::add('tnxid: ' . $txn_id, JLog::INFO);
            foreach ($messages as $message) {
                Jlog::add($message[0], $message[1]);
            }
        } catch (LogException $ex) {
            error_log('Could not write to ipn log, check permisions');
        }

        /*
        mc_gross=1300.00&protection_eligibility=Eligible&address_status=confirmed
        &payer_id=GCPQUGJ79A6DE&tax=0.00&address_street=1 Main St&payment_date=15:12:20 May 15, 2013 PDT
        &payment_status=Completed&charset=windows-1252&address_zip=95131&first_name=Andrea&mc_fee=38.00
        &address_country_code=US&address_name=Andrea Lebrun&notify_version=3.7&custom=26&payer_status=verified
        &business=tgb.rperez@gmail.com&address_country=United States&address_city=San Jose&quantity=1
        &verify_sign=AXG0t1.UXNVOsIcq.sO-ye1ljjoDAIUqDr9y0tKJU..7VXUTCOllBzdR&payer_email=tgb.alebrun@gmail.com
        &txn_id=0DB06906DN4387610&payment_type=instant&last_name=Lebrun&address_state=CA&receiver_email=tgb.rperez@gmail.com
        &payment_fee=38.00&receiver_id=3CAX86XDJMJ56&txn_type=web_accept&item_name= Taller Grupal 27-04-2013&mc_currency=USD
        &item_number=4&residence_country=US
        &test_ipn=1&handling_amount=0.00&transaction_subject=26&payment_gross=1300.00&shipping=0.00&ipn_track_id=5ca2aab6b21fb


        Valores importantes
        payer_email = email de quien pago
        custom = id de la inscripcion
        mc_gross = monto pagado
        txn_id = transaction id de paypal
        payment_status = estatus del pago

        */
        die("ipn");
    }

     /**
     * Proxy for getModel.
     * @since	1.6
     */
    public function getModel($name = 'registro', $prefix = 'TalleresModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;
    }

}