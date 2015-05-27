<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.6
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
//JHtml::_('behavior.tooltip');
//JHtml::_('behavior.formvalidation');
JHtml::_('behavior.noframes');
//load user_profile plugin language
$lang = JFactory::getLanguage();
$lang->load( 'plg_user_profile', JPATH_ADMINISTRATOR );
?>

<script type="text/javascript">
    if (jQuery) {
        jQuery(document).ready(function() {
            jQuery('#jform_name').addClass("required");
            jQuery('#jform_email1').addClass("required email");
            jQuery('#jform_email2').addClass("required email");
            jQuery('#jform_email2').attr("equalTo", '#jform_email1');
            jQuery('#jform_password2').attr("equalTo", '#jform_password1');
            jQuery('#jform_profile_ci').addClass("required");
            jQuery('#member-profile').validate();
            jQuery('#form-submit').bind('click', function(){
                jQuery('#member-profile').submit();
            });
        });
    }
</script>

<div class="item-page shadow-container profile-edit<?php echo $this->pageclass_sfx?>">
<?php //if ($this->params->get('show_page_heading')) : ?>
	<h2 class="article-title shadowed-right"><a nohref><?php echo $this->escape($this->params->get('page_heading')); ?></a></h2>
<?php //endif; ?>

<form id="member-profile" action="<?php echo JRoute::_('index.php?option=com_users&task=profile.save'); ?>" method="post" class="form-validate" enctype="multipart/form-data">
<?php foreach ($this->form->getFieldsets() as $group => $fieldset):// Iterate through the form fieldsets and display each one.?>
	<?php $fields = $this->form->getFieldset($group);?>
	<?php if (count($fields)):?>
	<fieldset>
		<dl>
		<?php foreach ($fields as $field):// Iterate through the fields in the set and display them.?>
			<?php
            /* Custom = do not render email fields */
            if (($field->id == 'jform_email2') || ($field->id == 'jform_email1')) {
                continue;
            }
        	?>
			<?php if ($field->hidden):// If the field is hidden, just display the input.?>
				<?php echo $field->input;?>
			<?php else:?>
				<dt>
					<?php echo $field->label; ?>
					<?php if (!$field->required && $field->type!='Spacer' && $field->name!='jform[username]'): ?>
						<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL'); ?></span>
					<?php endif; ?>
				</dt>
				<dd><?php echo $field->input; ?></dd>
			<?php endif;?>
		<?php endforeach;?>
		</dl>
	</fieldset>
	<?php endif;?>
<?php endforeach;?>
		<?php echo JText::_('COM_USERS_REGISTER_REQUIRED'); ?>
		<div class="form-buttons">
            <a class="button" id="form-submit" nohref><?php echo JText::_('JSUBMIT') ?></a> |
			<a href="<?php echo JRoute::_(''); ?>" title="<?php echo JText::_('JCANCEL'); ?>"><?php echo JText::_('JCANCEL'); ?></a>
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="profile.save" />
			<?php echo JHtml::_('form.token'); ?>
		</div>
	</form>
</div>