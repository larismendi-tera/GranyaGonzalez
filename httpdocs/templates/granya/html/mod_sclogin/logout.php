<?php
/**
 * @package        JFBConnect/JLinked
 * @copyright (C) 2011-2012 by Source Coast - All rights reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');

//JLoader::register('EgresadosHelper', JPATH_BASE.'/components/com_talleres/helpers/inscripcion.php');
require_once JPATH_BASE.'/components/com_talleres/helpers/inscripcion.php';

echo $helper->getSocialAvatar($registerType, $profileLink, $user);

if ($params->get('showGreeting'))
{
    if ($params->get('greetingName') == 0)
        $name = $user->get('username');
    else
        $name = $user->get('name');
    echo '<div class="username">' .  $name . '</div>';
}

if ($params->get('showLogoutButton'))
{ ?>
<ul class="profile-options">
	<li><a href="<?php echo JRoute::_('index.php?option=com_users&view=profile&layout=edit') ?>"><?php echo JText::_('COM_USERS_EDIT_PROFILE'); ?></a></li>
	<li>|</li>
	<li><a href="<?php echo JRoute::_('index.php?option=com_talleres&view=mybandagastrica') ?>"><?php echo JText::_('COM_USERS_BANDA_GASTRICA'); ?></a></li>
        <?php $ins = TalleresInscripcionHelper::getInscripcionesByUser(); ?>
        <?php if (!empty($ins)): ?>
            <li>|</li>
            <li><a href="<?php echo JRoute::_('index.php?option=com_talleres&view=refuerzo') ?>"><?php echo JText::_('COM_USERS_AUDIOS'); ?></a></li>
        <?php endif; ?>
	<li class="logout-button">
    	<input type="image" alt="<?php echo JText::_('MOD_SCLOGIN_LOGOUT') ?>" src="<?php echo JURI::base() ?>/templates/granya/images/btn_salir.png"  name="Submit" id="jfbcLogoutButton" class="button" value="<?php echo JText::_('MOD_SCLOGIN_LOGOUT') ?>" onclick="javascript:jfbc.login.logout_button_click()" />
    	<?php // echo $helper->getLogoutButton(); ?>
	</li>
</ul>
<br/>
<?php
}

if ($params->get('showConnectButton'))
{
    $reconnectButtons = $helper->getReconnectButtons();
    echo $reconnectButtons;
}

echo $helper->getPoweredByLink();
?>
