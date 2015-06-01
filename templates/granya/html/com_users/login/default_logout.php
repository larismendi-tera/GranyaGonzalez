<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;
?>
<div class="logout<?php echo $this->pageclass_sfx?> item-page shadowed-center">
	<h2 class="article-title shadowed-right">
		<a href="#"><?php echo JText::_('COM_USERS_ACCOUNT'); ?></a>
	</h2>

	<div><a href="<?php echo JRoute::_('index.php?option=com_users&view=profile&layout=edit') ?>"><?php echo JText::_('COM_USERS_EDIT_PROFILE'); ?></a>
	</div>
	<div><a href="<?php echo JRoute::_('index.php?option=com_talleres&view=mybandagastrica') ?>"><?php echo JText::_('COM_USERS_BANDA_GASTRICA'); ?></a>
	</div>
	<div><a href="<?php echo JRoute::_('index.php') ?>"><?php echo JText::_('COM_USERS_INICIO'); ?></a>
	</div>
	</br>
	<div class="logout-button">
    	<input type="image" alt="<?php echo JText::_('MOD_SCLOGIN_LOGOUT') ?>" src="<?php echo JURI::base() ?>/templates/granya/images/btn_salir.png"  name="Submit" id="jfbcLogoutButton" class="button" value="<?php echo JText::_('MOD_SCLOGIN_LOGOUT') ?>" onclick="javascript:jfbc.login.logout_button_click()" />
	</div>

</div>
