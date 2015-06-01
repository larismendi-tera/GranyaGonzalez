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
/**
 * HTML View class for the JoomproSubs component
 *
 */
class TalleresViewMedia extends JView
{
    protected $state;
    protected $item;
    protected $inscripcion_id;
    protected $seguimientos;
    protected $category;

    function display($tpl = null)
    {

        /* El archivo javascript jquery.jplayer.min.js agrega el parametro format=raw al url, necesario para que
        este archivo pueda ejecutarse, linea 64 */

        // Recuperar el nro de refuerzo activo para el usuario actual
        $nroRefuerzo = $this->get('NroRefuerzoByUser');

        //die(JPATH_BASE . DS . '0931231');
        $file = JPATH_BASE . DS . '0931231' . DS . 'refuerzo'. $nroRefuerzo .'.mp3';
        header("Content-type: audio/mpeg");
        header("Content-disposition: attachment; filename=" . time() . ".mp3;");
        header("Content-Length: ".filesize($file));
        readfile($file);
        exit;

    }
}