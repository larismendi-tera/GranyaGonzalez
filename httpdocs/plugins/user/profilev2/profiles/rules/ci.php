<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Form
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

/**
 * Form Rule class for the Joomla Platform.
 *
 * @package     Joomla.Platform
 * @subpackage  Form
 * @since       11.1
 */
class JFormRuleCi extends JFormRule
{

    /* Custom = add email regular expresion to validate username */
    protected $regex = '^[\w.-]+(\+[\w.-]+)*@\w+[\w.-]*?\.\w{2,4}$';

    /**
     * Method to test the username for uniqueness. also checks for a valid email as username
     *
     * @param   SimpleXMLElement  &$element  The SimpleXMLElement object representing the <field /> tag for the form field object.
     * @param   mixed             $value     The form field value to validate.
     * @param   string            $group     The field name group control value. This acts as as an array container for the field.
     *                                       For example if the field has name="foo" and the group value is set to "bar" then the
     *                                       full field name would end up being "bar[foo]".
     * @param   JRegistry         &$input    An optional JRegistry object with the entire data set to validate against the entire form.
     * @param   object            &$form     The form object for which the field is being tested.
     *
     * @return  boolean  True if the value is valid, false otherwise.
     *
     * @since   11.1
     * @throws  JException on invalid rule.
     */
    public function test(&$element, $value, $group = null, &$input = null, &$form = null)
    {
        //user id null at register
        $currentUserId = $input->get('id');

        $ci = $input->get('profile')->ci;

        // grab the contact ID for this user; note $user_id is cleaned above
        $db     = JFactory::getDbo();
        $query  = $db->getQuery(true);

        // Select field from talleres table
        $query->select("a.user_id");
        $query->from($db->quoteName('#__user_profiles') . ' AS a');
        $query->where("a.profile_key = 'profile.ci'");
        $query->where("a.profile_value = '\"". $db->escape($ci) . "\"'");

        if ($currentUserId != null) {
            $query->where('a.user_id != ' . (int) $db->escape($currentUserId));
        }

        $db->setQuery($query);

        $id = $db->loadObject();
        if ($id > 0){
            return false;
        }

        return true;
    }
}
