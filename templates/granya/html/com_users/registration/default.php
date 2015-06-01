<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.6
 */

defined('_JEXEC') or die;

//JHtml::_('behavior.keepalive');
//JHtml::_('behavior.tooltip');
//JHtml::_('behavior.formvalidation');
JHtml::_('behavior.noframes');

?>
<script type="text/javascript">
    if (jQuery) {
        jQuery(document).ready(function() {
            jQuery('#jform_name').addClass("required");
            jQuery('#jform_username').addClass("required email");
            jQuery('#jform_password1').addClass("required");
            jQuery('#jform_password1').addClass("required");
            jQuery('#jform_password2').attr("equalTo", '#jform_password1');
            jQuery('#jform_profile_ci').addClass("required");
            jQuery('#member-registration').validate();
            jQuery('#form-submit').bind('click', function(){
                jQuery('#member-registration').submit();
            });
        });
    }
</script>
<div class="item-page shadow-container registration<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
	<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
<?php endif; ?>

    <h2 class="article-title shadowed-right">
        <a><?php echo $this->escape($this->params->get('page_heading')); ?></a>
    </h2>

	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate">
    <?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
	<?php $fields = $this->form->getFieldset($fieldset->name);?>
	<?php if (count($fields)):?>
		<fieldset>
		<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.
		?>
			<legend class="hidden"><?php echo JText::_($fieldset->label);?></legend>
		<?php endif;?>
			<dl>
		<?php foreach($fields as $field):// Iterate through the fields in the set and display them.?>

            <?php //var_dump($field->id); ?>


            <?php
            /* Custom = do not render email fields */
            if (($field->id == 'jform_email2') || ($field->id == 'jform_email1') || ($field->id == 'jform_spacer')) {
                continue;
            }
        ?>

        <?php if ($field->hidden):// If the field is hidden, just display the input.?>
            <?php echo $field->input;?>
        <?php else:?>
            <dt class="<?php echo $field->id; ?>">
                <?php echo $field->label; ?>
                <?php if (!$field->required && $field->type!='Spacer'): ?>
                    <span class="optional hidden"><?php echo JText::_('COM_USERS_OPTIONAL'); ?></span>
                <?php endif; ?>
            </dt>
            <dd><?php echo ($field->type!='Spacer') ? $field->input : "&#160;"; ?></dd>
        <?php endif;?>
    <?php endforeach;?>
			</dl>
		</fieldset>
	<?php endif;?>
<?php endforeach;?>
		<?php echo JText::_('COM_USERS_REGISTER_REQUIRED'); ?>
        <div class="form-buttons">
            <a class="button" id="form-submit" nohref><?php echo JText::_('JREGISTER') ?></a> |
			<a href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
            <!-- Added button here to submit form on enter, maybe the best here is format the button to reach a style, but there is no time -->
            <button style="display: none" type="submit" class="button"></button>
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="registration.register" />
			<?php echo JHtml::_('form.token');?>
		</div>
	</form>
</div>
