<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;
//JHtml::_('behavior.keepalive');
//JHtml::_('behavior.noframes');
?>
<script type="text/javascript">
    if (jQuery) {
        jQuery(document).ready(function() {
            jQuery('#username').addClass("required email");
            jQuery('#password').addClass("required");
            jQuery('#login-form-complete').validate();

            jQuery('#form-submit').bind('click', function(){
                jQuery('#login-form-complete').submit();
            });
        });
    }
</script>

<div class="login<?php echo $this->pageclass_sfx?> item-page shadowed-center">
	
	<h2 class="article-title shadowed-right">
		<a href="#"><?php echo JText::_('COM_USERS_LOGIN'); ?></a>
	</h2>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	<div class="login-description">
	<?php endif ; ?>

		<?php if($this->params->get('logindescription_show') == 1) : ?>
			<?php echo $this->params->get('login_description'); ?>
		<?php endif; ?>

		<?php if (($this->params->get('login_image')!='')) :?>
			<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JTEXT::_('COM_USER_LOGIN_IMAGE_ALT')?>"/>
		<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	</div>
	<?php endif ; ?>

	<form id="login-form-complete" action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post">

		<fieldset>
			<?php /*foreach ($this->form->getFieldset('credentials') as $field): ?>
				<?php if (!$field->hidden): ?>
					<div class="login-fields"><?php echo $field->label; ?>
					<?php echo $field->input; ?></div>
				<?php endif; ?>
			<?php endforeach; */?>
			<dl class="fieldset">
				<dt><?php echo $this->form->getLabel('username')?></dt>
				<dd><input type="text" size="25" class="validate-username" value="" id="username" name="username"></dd>
				<dt><?php echo $this->form->getLabel('password')?></dt>
				<dd><?php echo $this->form->getInput('password')?></dd>
			</dl>
			
			<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
			<div class="login-fields">
				<label id="remember-lbl" for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME') ?></label>
				<input id="remember" type="checkbox" name="remember" class="inputbox" value="yes"  alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" />
			</div>
			<?php endif; ?>
            <div class="form-buttons">
                <a class="button" id="form-submit" nohref><?php echo JText::_('JLOGIN') ?></a>
                <!-- Added button here to submit form on enter, maybe the best here is format the button to reach a style, but there is no time -->
                <button style="display: none" type="submit" class="button"></button>
            </div>
			<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
			<?php echo JHtml::_('form.token'); ?>
		</fieldset>
	</form>
	
	<div>
	<ul>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
			<?php echo JText::_('COM_USERS_LOGIN_RESET'); ?></a>
		</li>
		<?php
		$usersConfig = JComponentHelper::getParams('com_users');
		if ($usersConfig->get('allowUserRegistration')) : ?>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
				<?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?></a>
		</li>
		<?php endif; ?>
	</ul>
</div>
	<?php
if (class_exists("JFBConnectFacebookLibrary"))
        {
            $this->jfbcLibrary = JFBConnectFacebookLibrary::getInstance();
//             $buttonSize = $this->params->get("loginButtonSize");
            $loginButton = $this->jfbcLibrary->getLoginButton();
            $loginButton = '<div class="jfbcLogin">'.$loginButton.'</div>';
            echo $loginButton;
        }
?>
	
</div>