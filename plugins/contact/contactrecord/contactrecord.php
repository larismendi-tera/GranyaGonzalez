<?php
/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

/**
 * Email cloack plugin class.
 *
 * @package		Joomla.Plugin
 * @subpackage	Content.emailcloak
 */

class plgContactContactRecord extends JPlugin {


    public function onSubmitContact(&$contact, &$data) {

        $dbo = JFactory::getDBO();
        $query = $dbo->getQuery(true);

        //var_dump($contact);
        //var_dump($data);
        //die("");

        /* contact
        'user_id' => '778'
        */

        /* data
        'contact_name' => string 'Robert' (length=6)
        'contact_email' => string 'robert.reimi@gmail.com' (length=22)
        'contact_subject' => string 'Asunto del contacto' (length=19)
        'contact_message' => string 'Mnesaje delcontacto ' (length=20)
        'contact_email_copy' => string '' (length=0)
        'contact_category' => string 'p'
      */

        /*
         *  	2 	contact_name 	varchar(256) 	utf8_general_ci 		No 	None 		Change Change 	Drop Drop 	More Show more actions
	3 	contact_email 	varchar(256) 	utf8_general_ci 		No 	None 		Change Change 	Drop Drop 	More Show more actions
	4 	contact_category 	tinyint(1) 			No 	None 		Change Change 	Drop Drop 	More Show more actions
	5 	contact_subject 	varchar(256) 	utf8_general_ci 		No 	None 		Change Change 	Drop Drop 	More Show more actions
	6 	contact_message 	text 	utf8_general_ci 		No 	None 		Change Change 	Drop Drop 	More Show more actions
	7 	status 	tinyint(1) 			No 	None 		Change Change 	Drop Drop 	More Show more actions
	8 	admin_answer 	text 	utf8_general_ci 		Yes 	NULL 		Change Change 	Drop Drop 	More Show more actions
	9 	contact_date
         */

        $query->clear();
        $query->insert('#__contact_record');
        $query->columns(array($dbo->quoteName('contact_name'), $dbo->quoteName('contact_email'), $dbo->quoteName('contact_phone'), $dbo->quoteName('contact_country'), $dbo->quoteName('contact_city'), $dbo->quoteName('contact_skype'), $dbo->quoteName('contact_category'), $dbo->quoteName('contact_subject'), $dbo->quoteName('contact_message'), $dbo->quoteName('contact_date'), $dbo->quoteName('status')));
        $query->values($dbo->quote($data['contact_name']) . ', ' . $dbo->quote($data['contact_email']) . ', ' . $dbo->quote($data['contact_phone']) . ', ' . $dbo->quote($data['contact_country']) . ', ' . $dbo->quote($data['contact_city']) . ', ' . $dbo->quote($data['contact_skype']) . ', ' . $dbo->quote($data['contact_category']) . ', ' . $dbo->quote($data['contact_subject']) . ', ' . $dbo->quote($data['contact_message']) . ', CURDATE() , 0');
        $dbo->setQuery($query);
        if ($dbo->query())
        {
            // link up this extension to the update site
            $update_site_id = $dbo->insertid();
        }
    }

}
