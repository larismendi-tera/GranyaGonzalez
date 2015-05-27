<?php
/**
 * @package		Joomla.Site
 * @subpackage	Contact
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class JFormRuleFechaOferta extends JFormRule
{
    public function test(& $element, $value, $group = null, & $input = null, & $form = null)
    {

        /* $input holds entire form data */
        /* So we might perfom validations related to two or more fields */
        //var_dump($input);

        //die("asdas");
        return true;
    }

}
