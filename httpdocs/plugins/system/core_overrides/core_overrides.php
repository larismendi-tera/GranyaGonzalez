<?php
/**
 * Core Overrides plugin form joomla 2.5
 *
 * User: robert.reimi@gmail.com
 * Date: 1/31/13
 *
 *
 */


defined('_JEXEC') or die;

/* Add here your overrided clases
* - Its a good practice recreated the structure of overrided file:
*   i.e for /libraries/joomla/html/html.php create
*   require JPATH_ROOT.DS.'plugins/system/core_overrides/libraries/joomla/html/html.php
*
*/



class plgSystemCore_Overrides extends JPlugin {

    public function __construct(&$subject, $config = array()) {
        parent::__construct($subject, $config);
    }

    public function onAfterInitialise() {
        $app = JFactory::getApplication();
    }

    /* Add your overrides here */
    /* If you are overriding a component class, validate de option parameter */
    public function onAfterRoute() {

        /* IMPORTANTE, VERIFICAR SI NO SE ESTA SOBRESCRIBIENDO ALGUNA DEPENDENCIA DE OTRA CLASE SOBREESCRITA */

        /* Add libraries overrides here */

        /* Pendiente con el orden de inclusion y dependencias entre librerias */

        require JPATH_ROOT.DS.'plugins/system/core_overrides/libraries/joomla/html/html.php';
        require JPATH_ROOT.DS.'plugins/system/core_overrides/libraries/joomla/form/rules/username.php';

        $app = JFactory::getApplication();

        /* This override enable a block separation between meta tags and scripts */
        /* Just to improve performance add scripts to bottom */
        if (!$app->isAdmin()) {
            //require JPATH_ROOT.DS.'plugins/system/core_overrides/libraries/joomla/document/html/renderer/head.php';
            //require JPATH_ROOT.DS.'plugins/system/core_overrides/libraries/joomla/document/html/renderer/script.php';
        }

        /* This override is not working but here is the original change in case of update */
        if('com_media' == JRequest::getVar("option") && !$app->isAdmin()) {
            //require(JPATH_ROOT.DS.'plugins/system/core_overrides/components/com_media/media.php');
        }

        if('com_users' == JRequest::getVar("option") && !$app->isAdmin()) {
            require(JPATH_ROOT.DS.'plugins/system/core_overrides/components/com_users/models/profile.php');

            require(JPATH_ROOT.DS.'plugins/system/core_overrides/components/com_users/controllers/registration.php');
            require(JPATH_ROOT.DS.'plugins/system/core_overrides/components/com_users/controllers/profile.php');

        }

        /* Add component overrides here */
        if('com_users' == JRequest::getVar("option") && !$app->isAdmin()) {
            require(JPATH_ROOT.DS.'plugins/system/core_overrides/components/com_users/views/registration/view.html.php');
        }
        
        /* Add component overrides here */
        if('com_contact' == JRequest::getVar("option") && !$app->isAdmin()) {
        	require(JPATH_ROOT.DS.'plugins/system/core_overrides/components/com_contact/controllers/contact.php');
        }

    }

}
