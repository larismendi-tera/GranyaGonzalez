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
class TalleresViewDownload extends JView
{
    protected $state;
    protected $item;
    protected $inscripcion_id;
    protected $seguimientos;
    protected $category;

    function display($tpl = null)
    {
        $filename = JRequest::getString('file');
        //die(JPATH_BASE . DS . '0931231');
        $file = JPATH_BASE . DS . 'audios' . DS . $filename;

        if (file_exists($file)) {
            header("Content-type: octet/stream");
            header("Content-disposition: attachment; filename=$filename;");
            header("Content-Length: ".filesize($file));
            readfile($file);
            exit;
        } else {
            die("");
        }
    }
}