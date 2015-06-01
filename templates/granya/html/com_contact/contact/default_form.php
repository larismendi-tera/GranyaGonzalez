<?php

 /**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
//JHtml::_('behavior.keepalive');

$document = JFactory::getDocument();
$document->set("jqueryValidationEnabled", true);

//JHtml::_('behavior.formvalidation');
//JHtml::_('behavior.tooltip');
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>
<script type="text/javascript">
    if (jQuery) {
        jQuery(document).ready(function() {
            jQuery('#jform_contact_name').addClass("required");
            jQuery('#jform_contact_email').addClass("required email");
            jQuery('#jform_contact_phone').addClass("required");
			jQuery('#jform_contact_country').addClass("required");
            jQuery('#jform_contact_city').addClass("required");
            jQuery('#jform_contact_category').addClass("required");
            jQuery('#jform_contact_emailmsg').addClass("required");
            jQuery('#jform_contact_message').addClass("required");
            jQuery('#contact-form').validate();

            jQuery('#form-submit').bind('click', function(){
                jQuery('#contact-form').submit();
            });
        });
    }
</script>

<!-- Load inscripcion article -->
<?php
jimport('joomla.application.module.helper');
// this is where you want to load your module position
$modules = JModuleHelper::getModules('granya-contact-form');
foreach($modules as $module)
{
    echo JModuleHelper::renderModule($module);
}
?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
		<fieldset>
			<dl class="fieldset">
				<dt><?php echo $this->form->getLabel('contact_name'); ?></dt>
				<dd><?php echo $this->form->getInput('contact_name'); ?></dd>
				<dt><?php echo $this->form->getLabel('contact_email'); ?></dt>
				<dd><?php echo $this->form->getInput('contact_email'); ?></dd>
				<dt><?php echo $this->form->getLabel('contact_phone'); ?></dt>
				<dd><?php echo $this->form->getInput('contact_phone'); ?></dd>
				<dt><?php echo $this->form->getLabel('contact_country'); ?></dt>
				<dd><?php echo $this->form->getInput('contact_country'); ?></dd>
				<dt><?php echo $this->form->getLabel('contact_city'); ?></dt>
				<dd><?php echo $this->form->getInput('contact_city'); ?></dd>
				<dt><?php echo $this->form->getLabel('contact_skype'); ?></dt>
				<dd><?php echo $this->form->getInput('contact_skype'); ?></dd>
                <dt><?php echo $this->form->getLabel('contact_category'); ?></dt>
                <dd><?php echo $this->form->getInput('contact_category'); ?></dd>
				<dt><?php echo $this->form->getLabel('contact_subject'); ?></dt>
				<dd><?php echo $this->form->getInput('contact_subject'); ?></dd>
				<dt><?php echo $this->form->getLabel('contact_message'); ?></dt>
				<dd><?php echo $this->form->getInput('contact_message'); ?></dd>
                <?php 	if ($this->params->get('show_email_copy')){ ?>
					<dt><?php echo $this->form->getLabel('contact_email_copy'); ?><?php echo $this->form->getInput('contact_email_copy'); ?></dt>
                    <dd></dd>
				<?php 	} ?>
			<?php //Dynamically load any additional fields from plugins. ?>
			     <?php foreach ($this->form->getFieldsets() as $fieldset): ?>
			          <?php if ($fieldset->name != 'contact'):?>
			               <?php $fields = $this->form->getFieldset($fieldset->name);?>
			               <?php foreach($fields as $field): ?>
			                    <?php if ($field->hidden): ?>
			                         <?php echo $field->input;?>
			                    <?php else:?>
			                         <dt>
			                            <?php echo $field->label; ?>
			                            <?php if (!$field->required && $field->type != "Spacer"): ?>
			                               <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
			                            <?php endif; ?>
			                         </dt>
			                         <dd><?php echo $field->input;?></dd>
			                    <?php endif;?>
			               <?php endforeach;?>
			          <?php endif ?>
			     <?php endforeach;?>
				<dt></dt>
				<?php echo JText::_('COM_USERS_REGISTER_REQUIRED'); ?>
                <div class="form-buttons">
                    <a class="button" id="form-submit" nohref><?php echo JText::_('COM_CONTACT_CONTACT_SEND') ?></a>
<!--                    <button id="form-submit" class="button validate" type="button">--><?php //echo JText::_('COM_CONTACT_CONTACT_SEND'); ?><!--</button>-->
					<input type="hidden" name="option" value="com_contact" />
					<input type="hidden" name="task" value="contact.submit" />
					<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
					<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
					<?php echo JHtml::_( 'form.token' ); ?>
				</div>
			</dl>
		</fieldset>
	</form>
</div>

<script type="text/javascript">
    if (jQuery) {

        <!-- Custom = if user if logged in, populate fields -->
        <?php if ($this->user->id > 0): ?>

        jQuery(document).ready(function(){
            jQuery("#jform_contact_name").val('<?php echo $this->user->name ?>');
            jQuery("#jform_contact_email").val('<?php echo $this->user->email ?>');
            jQuery("#jform_contact_country").bind('change', function(){
                <?php if (count($this->contacts) > 0): ?>
                    <?php foreach ($this->contacts as $contact) : ?>

                        <?php if ($contact->country !== ''): ?>
                            if (jQuery(this).val == <?php echo $contact->country ?>){
                                jQuery('input[name="id"]').val('<?php echo $contact->slug ?>');
                            }
                        <?php endif ?>
                    <?php endforeach ?>
                            else {
                                jQuery('input[name="id"]').val('<?php echo $this->contact->slug ?>')
                            }

                <?php endif; ?>
            })
        });

        <?php endif; ?>
    };

    jQuery(document).ready(function(){
        jQuery("#jform_contact_country").bind('change', function(){
console.log(jQuery(this).val());
            //alert("Hola");
            <?php if (count($this->contacts) > 0): ?>
            <?php foreach ($this->contacts as $contact) : ?>

            <?php if ($contact->country !== ''): ?>
            if (jQuery(this).val() == parseInt('<?php echo $contact->country ?>')){
                jQuery('input[name="id"]').val('<?php echo $contact->slug ?>');
            }
                <?php endif ?>
                <?php endforeach ?>
            else {
                jQuery('input[name="id"]').val('<?php echo $this->contact->slug ?>')
            }

            <?php endif; ?>
        });
    });
</script>
