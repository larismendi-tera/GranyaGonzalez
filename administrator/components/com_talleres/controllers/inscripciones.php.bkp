<?php
/**
 * @package Joomla.Administrator
 * @subpackage com_talleres
 * @copyright Copyright (C) 2012 Robert Reimi robert.reimi@gmail.com
 * @license GNU General Public License version 2 or later
 *
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.application.component.controlleradmin');

JLoader::import('phpexcel.PHPExcel');

class TalleresControllerInscripciones extends JControllerAdmin
{

    /**
     * Constructor.
     *
     * @param	array An optional associative array of configuration settings.
     * @see		JController
     * @since	1.6
     */
    public function __construct($config = array())
    {
        parent::__construct($config);

        $this->registerTask('inscripcion_confirm', 'changeState');
        $this->registerTask('inscripcion_pending', 'changeState');
        $this->registerTask('report', 'report');
    }

    /**
     * Use in list screen, set the model to perfom operations over listed elements
     *
     * Proxy for getModel.
     */
    public function getModel($name = 'Inscripcion', $prefix = 'TalleresModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);
        return $model;
    }

    public function changeState() {
        // Check for request forgeries.
        JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

        // Initialise variables.
        $user	= JFactory::getUser();
        $ids	= JRequest::getVar('cid', array(), '', 'array');

        // Set state value based on task
        $values	= array('inscripcion_confirm' => 1, 'inscripcion_pending' => 0);
        $task	= $this->getTask();
        $value	= JArrayHelper::getValue($values, $task, 0, 'int');

        if (empty($ids)) {
            JError::raiseWarning(500, JText::_('COM_TALLERES_NO_INSCRIPCIONES_SELECTED'));
        } else {
            // Get the model.
            $model	= $this->getModel();

            // Change the state of the records.
            if (!$model->changeStatus($ids, $value)) {
                JError::raiseWarning(500, $model->getError());
            } else {
                if ($value == 1) {
                    $ntext = 'COM_TALLERES_N_INSCRIPCIONES_CONFIRMED';
                } else {
                    $ntext = 'COM_TALLERES_N_INSCRIPCIONES_PENDING';
                }
                $this->setMessage(JText::plural($ntext, count($ids)));
            }
        }

        $this->setRedirect('index.php?option=com_talleres&view=inscripciones');
    }

    public function report() {

        $model = $this->getModel('InscripcionesReport', 'TalleresModel', array('ignore_request' => true));
        $model->setModelState();
        $data = $model->getItems();
        $state = $model->getState();
        $tallerId = $state->get('filter.taller_id');

        $tallerModel = $this->getModel('Taller', 'TalleresModel', array('ignore_request' => true));
        $taller = $tallerModel->getItem($tallerId);

        //var_dump($data);
        //();
        $this->exportReport($taller, $data);
    }

    protected function exportReport($taller, $data)
    {
        $phpExcel = new PHPExcel();

        $styleArray = array(
            'font' => array(
                'bold' => true
            )
        );

        $phpExcel->getDefaultStyle()->getFont()->setSize(9);

        $sheet = $phpExcel->getActiveSheet();
        $sheet->setTitle("Taller - Inscripciones");

        $sheet->setCellValue("A1", "Taller")
            ->setCellValue("A2", "Lugar")->getStyle("A1:A2")->applyFromArray($styleArray);

        $sheet->setCellValue("B1", $taller->title)
            ->setCellValue("B2", $taller->lugar);

        $sheet->setCellValue("A4", "Cédula / Identificación")
            ->setCellValue("B4", "Nombre")
            ->setCellValue("C4", "Fecha Insc.")
            ->setCellValue("D4", "Teléfono")
            ->setCellValue("E4", "Correo")
            ->setCellValue("F4", "Estatus")
            ->setCellValue("G4", "Ciudad")
            ->setCellValue("H4", "Forma pago")
            ->setCellValue("I4", "Número trans.")
            ->setCellValue("J4", "Monto")
            ->getStyle("A4:J4")->applyFromArray($styleArray);

        $row = 5;
        /* Al limite del for se le suma el offset del row */
        for ($ctl = 0; $ctl < count($data); $ctl++) {
            $sheet->setCellValue("A$row", $data[$ctl]->ci);
            $sheet->setCellValue("B$row", $data[$ctl]->nombre);
            $sheet->setCellValue("C$row", date('d/m/Y', strtotime($data[$ctl]->fecha)));
            $sheet->setCellValue("D$row", $data[$ctl]->telefono);
            $sheet->setCellValue("E$row", $data[$ctl]->correo);
            $sheet->setCellValue("F$row", TalleresHelper::getStatus($data[$ctl]->status));
            $sheet->setCellValue("G$row", $data[$ctl]->ciudad);
            $sheet->setCellValue("H$row", TalleresHelper::getMetodoPago($data[$ctl]->forma_pago));
            $sheet->setCellValue("I$row", $data[$ctl]->num_transaccion);
            $sheet->setCellValue("J$row", number_format($data[$ctl]->monto, 2, ',', '.'));
            $row++;
        }

        $sheet->getColumnDimension("A")->setWidth(9);
        $sheet->getColumnDimension("B")->setWidth(24);
        $sheet->getColumnDimension("C")->setWidth(11);
        $sheet->getColumnDimension("D")->setWidth(12);
        $sheet->getColumnDimension("E")->setWidth(30);
        $sheet->getColumnDimension("F")->setWidth(12);
        $sheet->getColumnDimension("G")->setWidth(12);
        $sheet->getColumnDimension("H")->setWidth(13);
        $sheet->getColumnDimension("I")->setWidth(14);
        $sheet->getColumnDimension("J")->setWidth(10);

        $objWriter = PHPExcel_IOFactory::createWriter($phpExcel, "Excel5");
        $fileName = 'taller_' . $taller->id . '_' . date('dmY', strtotime($taller->fecha)) . '.xls';

        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        header("Cache-Control: max-age=0");
        $objWriter->save("php://output");
        exit;

        JFactory::getApplication()->close();
    }

    public function generarSuscriptores() {

        $db     = JFactory::getDbo();
        $query  = $db->getQuery(true);

        //OBTENER SUSCRIPTORES CONFIRMADOS DE TALLERES DE ESTE AÑO
        $query->select('a.*');
        $query->from($db->quoteName('#__inscripcion') . ' AS a');
        //$query->where("a.fecha > '2013-01-01'");
        $query->where("a.status = 1");
        //$query->where("a.taller_id = 44");

        $db->setQuery($query); //LIMIT 0, 1
        $result = $db->loadObjectList();

        var_dump(count($result));
//        var_dump($result);


        // PARA CADA SUBSCRITOR
        foreach ($result as $inscripcion) {

            $subscriptorId = false;

            //OBTENER TALLER
            $taller = $this->getTaller($inscripcion->taller_id);

            //var_dump($inscripcion);
            //var_dump($taller);

            echo "Procesando inscripcion id $inscripcion->id con correo $inscripcion->correo :<br/>";
            if ($inscripcion->jnews_subscriber_id > 0) {
                echo "Inscripcion ya registrada en la lista " . $taller->jnews_lista_id .  " <br/><br/>";
            } else {
                // LANZAR PLUGIN QUE CREA EL SUBSCRITOR
                JPluginHelper::importPlugin('user');
                $dispatcher	= JDispatcher::getInstance();
                $results = $dispatcher->trigger("onInscripcionAfterConfirm", array("com_talleres", &$inscripcion, $taller));
                echo "Se creo al subscriptor con id " . $inscripcion->jnews_subscriber_id . " en la lista " .  $taller->jnews_list_id . " de nombre " . $taller->title  . "<br/><br/>";
            }

            // LANZAR PLUGIN QUE CREA EL SUBSCRITOR
            JPluginHelper::importPlugin('user');
            $dispatcher	= JDispatcher::getInstance();
            //$results = $dispatcher->trigger("onInscripcionAfterConfirm", array("com_talleres", &$inscripcion, $taller));
        }

        header("Content-type: text/html; charset:utf-8");
        die('<span style="font-size:7em">&#9760 Process completed</span>');
    }


    private function getTaller($tallerId) {
        //48 la tiene
        // no la tiene
        $db     = JFactory::getDbo();
        $query  = $db->getQuery(true);
        $query->select('a.*');
        $query->from($db->quoteName('#__taller') . ' AS a');
        $query->where("a.id = $tallerId");

        $db->setQuery($query);
        $result =  $db->loadObject();
        return $result;
    }
}