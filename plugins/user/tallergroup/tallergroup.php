<?php
/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

jimport('joomla.utilities.date');

require_once( JPATH_ADMINISTRATOR . DS .'components'.DS.'com_jnews'.DS.'classes'.DS.'class.jnews.php');

/**
 * An example custom profile plugin.
 *
 * @package		Joomla.Plugin
 * @subpackage	User.profile
 * @version		1.6
 */
class plgUserTallerGroup extends JPlugin
{
    /**
     * Constructor
     *
     * @access      protected
     * @param       object  $subject The object to observe
     * @param       array   $config  An array that holds the plugin configuration
     * @since       1.5
     */
    public function __construct(& $subject, $config)
    {
        parent::__construct($subject, $config);
        $this->loadLanguage();
        JFormHelper::addFieldPath(dirname(__FILE__) . '/fields');
    }

//    function onTallerAfterSave($context $inscripcion, $taller, $isNew) {
    public function onTallerAfterSave($context, $taller, $isNew){

        $db = JFactory::getDBO();

        $now = jnews::getNow();

        // Verificar si la lista existe
        $query = "SELECT `id` FROM `#__jnews_lists` WHERE `id`= ".$taller->jnews_list_id;
        $db->setQuery($query);
        $lId = $db->loadResult();
        if ($lId>0) {
            // Si existe actualizar la lista con los cambios en el taller (nombre y fecha)
            $query = "UPDATE `#__jnews_lists` SET list_name = '".$taller->title."'  WHERE id = '".$taller->jnews_list_id."'" ;
            $db->setQuery($query);
            $db->query();
        } else {
            // Crear list
            $query = "INSERT INTO `#__jnews_lists` (`list_name`,`createdate`, `published`) VALUES ( '".addslashes($taller->title)."'  , '$now' , '1')" ;
            $db->setQuery($query);
            $db->query();

            // Recuperar el id de la lista recien creada
            $query = "SELECT id FROM `#__jnews_lists` WHERE list_name = '".addslashes($taller->title)."'" ;
            $db->setQuery($query);
            $db->query();
            $listId = $db->loadResult();

            // Guardar id de la lista como clave foranea en el taller asociado
            $query = "UPDATE `#__taller` SET jnews_list_id = '".$listId."' WHERE id = '".$taller->id."'" ;
            $db->setQuery($query);
            $db->query();
        }

        /*$query = "SELECT * FROM `#__jnews_lists` WHERE `list_name`= '".addslashes($taller->title)."' ";
        $db->setQuery($query);

        $mynewlist = $db->loadObject();*/

        return true;
    }

    public function onInscripcionAfterConfirm($context, $inscripcion, $taller){

        // Crear un subscriber asociado a la inscripcion
        $subscriber = new stdClass;
        $confirmed = 1; //Confirmed se refiere a si el usuario esta activo Joomla field
//        if($user['block']) $confirmed = 0;
        $subscriber->email = trim(strip_tags($inscripcion->correo));
//        if(!empty($user['name'])) $subscriber->name = trim(strip_tags($user['name']));
        $subscriber->name = trim(strip_tags($inscripcion->nombre));
//        if(empty($user['block'])) $subscriber->confirmed = 1;
        $subscriber->confirmed = 1;
//        $subscriber->user_id = $user['id'];
        $subscriber->ip = jNews_Subscribers::getIP();
        $subscriber->receive_html = 1;
//        $subscriber->confirmed = $confirmed;
        $subscriber->confirmed = 1;
        $subscriber->subscribe_date = time();
        $subscriber->language_iso = 'eng';
        $subscriber->timezone = '00:00:00';
        $subscriber->blacklist = 0;
        $userId = JUserHelper::getUserId($inscripcion->correo);
        if(!empty($userId)) $subscriber->user_id = $userId;

//        if(!$isNew AND !empty($this->oldUser['email']) AND $user['email'] != $this->oldUser['email']){
//            $d['email']=$this->oldUser['email'];
//            $infos=jNews_Subscribers::getSubscriberIdFromEmail($this->oldUser);
//            $subscriber->id = $infos['subscriberId'];
//        }

        $status = jNews_Subscribers::saveSubscriber($subscriber,$subscriber->user_id,true);

        // Obtener el listId a partir del nombre del taller (mismo que la lista)
        $db    = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select("a.id")
            ->from($db->quoteName('#__jnews_lists') . ' AS a')
            ->where('a.list_name = '. $db->quote($taller->title));

        $db->setQuery($query);
        $list = $db->loadObject();

        if ($list != null){
            $subscriber->list_id = $list->id;

            $savedInList = jNews_ListsSubs::saveToListSubscribers($subscriber);
        }

        // Guardar el subscriberId como clave foranea en la inscripcion
        $query = "UPDATE `#__inscripcion` SET jnews_subscriber_id = '".$subscriber->id."' WHERE id = '".$inscripcion->id."'" ;
        $db->setQuery($query);
        $db->query();

        return true;
    }

    public function onInscripcionAfterNoConfirm($context, $inscripcion, $taller){

        $db = JFactory::getDbo();

        // Quitar el subscriber de la lista
        $query = "DELETE FROM `#__jnews_listssubscribers` WHERE list_id = ".$taller->jnews_list_id." AND subscriber_id = ". $inscripcion->jnews_subscriber_id ;
        $db->setQuery($query);
        $db->query();

        // Quitar el subscriberId como clave foranea en la inscripcion
        $query = "UPDATE `#__inscripcion` SET jnews_subscriber_id = 0 WHERE id = '".$inscripcion->id."'" ;
        $db->setQuery($query);
        $db->query();

        // Eliminar el subscriber de la lista
        $query = "DELETE FROM `#__jnews_subscribers` WHERE id = ". $inscripcion->jnews_subscriber_id ;
        $db->setQuery($query);
        $db->query();

        return true;
    }

    public function onInscripcionAfterChange($context, $inscripcionId){

        $db = JFactory::getDbo();

        // Recuperar la inscripcion a partir del id
        $query = "SELECT id, nombre, correo, jnews_subscriber_id FROM `#__inscripcion` WHERE id = ". $inscripcionId ;
        $db->setQuery($query);
        $db->query();
        $inscripcion = $db->loadObject();

        // Modificar los datos (nombre y correo) del subscriber de jnews asociado a la inscripcion
        if ($inscripcion){
            $query = "UPDATE `#__jnews_subscribers` SET name = '".$inscripcion->nombre."', email = '".$inscripcion->correo."' WHERE id = '".$inscripcion->jnews_subscriber_id."'" ;
            $db->setQuery($query);
            $status = $db->query();
        }

        return true;
    }

}
