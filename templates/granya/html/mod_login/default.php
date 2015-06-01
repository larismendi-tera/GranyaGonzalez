<?php
/**
 * @package		Joomla.Site
 * @subpackage	Templates.granya
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<?php if ($type == 'logout') : ?>
<form action="index.php" method="post" class="form-login" id="form-login">
<?php if ($params->get('greeting')) : ?>
	<div>
	<?php if($params->get('name') == 0) : {
		echo JText::sprintf('MOD_LOGIN_HINAME', $user->get('name'));
	} else : {
		echo JText::sprintf('MOD_LOGIN_HINAME', $user->get('username'));
	} endif; ?>
	</div>
<?php endif; ?>
	<div class="logout-button">
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGOUT'); ?>" />
	</div>

	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.logout" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>
<?php else : ?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="form-login" >
	<?php echo $params->get('pretext'); ?>
	<fieldset class="input">
	<p id="form-login-username">
		<label for="modlgn_username" class="hidden"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?></label>
		<input id="modlgn_username" type="text" name="username" class="inputbox"  size="18" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>" title="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>" />
	</p>
	<p id="form-login-password">
		<label for="modlgn_passwd" class="hidden"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
		<input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18"  placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" />
	</p>
	<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
	<p id="form-login-remember">
		<label for="modlgn_remember"><?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?></label>
		<input id="modlgn_remember" type="checkbox" name="remember" class="inputbox" value="yes"/>
	</p>
	<?php endif; ?>
	<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGIN') ?>" />
	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHtml::_('form.token'); ?>
	</fieldset>
	<ul class="site-login-links">
        <?php
        $usersConfig = JComponentHelper::getParams('com_users');
        if ($usersConfig->get('allowUserRegistration')) : ?>
            <li class="">
                <a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
                    <?php echo JText::_('MOD_LOGIN_REGISTER'); ?></a>
            </li>
            <li class="">|</li>
            <?php endif; ?>
		<li class="">
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
		</li>
        <li class="">
            <img src="http://localhost/granya/templates/granya/images/btn_facebook_login.png"  alt="" />
        </li>
        <!-- Disabled remember user -->
		<!--li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a>
		</li-->

	</ul>
	<?php echo $params->get('posttext'); ?>
</form>
<?php endif; ?>
