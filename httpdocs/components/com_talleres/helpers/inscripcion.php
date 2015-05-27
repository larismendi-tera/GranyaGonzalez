<?php
/**
 * inscripcion.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.file');

class TalleresInscripcionHelper {

    public static function getInscripcionesByUser() {

        $user = JFactory::getUser();

        if ($user->id < 1){
            return array();
        }

        $profile = JUserHelper::getProfile($user->id);
        $db		= JFactory::getDbo();

        // Get the user id based on the token.
        $db->setQuery(
            'SELECT a.id FROM #__inscripcion a WHERE a.status = 1 and a.asistencia = 1 and a.ci = ' . $db->quote($profile->profile["ci"])
        );

        $list = $db->loadObjectList();
        return $list;
    }

}