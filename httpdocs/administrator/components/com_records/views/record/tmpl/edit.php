<?php

// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
    Joomla.submitbutton = function(task) {
        if (task == 'record.cancel' || document.formvalidator.isValid(document.id('record-form'))) {
            <?php // esto guarda lo que esta en el wysiwyg en el campo del formulario
                    //echo $this->form->getField('description')->save(); ?>
            Joomla.submitform(task, document.getElementById('record-form'));
        } else {
            alert('<?php echo $this->escape(JText::_('COM_RECORD_VALIDATION_FORM_FAILED'));?>');
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_records&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="record-form" class="form-validate">

    <div class="width-100 fltlft">
        <fieldset class="adminform">
            <legend>
                <?php echo JText::sprintf('COM_RECORDS_SENT_ANSWER'); ?>
            </legend>
            <ul class="adminformlist">
                <!-- Form fields -->
                <li><?php echo $this->form->getLabel('contact_name'); ?>
                    <?php echo $this->form->getInput('contact_name'); ?></li>
                <li><?php echo $this->form->getLabel('contact_email'); ?>
                    <?php echo $this->form->getInput('contact_email'); ?></li>
                <li><?php echo $this->form->getLabel('contact_phone'); ?>
                    <?php echo $this->form->getInput('contact_phone'); ?></li>
                <li><?php echo $this->form->getLabel('contact_country'); ?>
                    <?php echo $this->form->getInput('contact_country'); ?></li>
                <li><?php echo $this->form->getLabel('contact_city'); ?>
                    <?php echo $this->form->getInput('contact_city'); ?></li>
                <li><?php echo $this->form->getLabel('contact_skype'); ?>
                    <?php echo $this->form->getInput('contact_skype'); ?></li>
                <li><?php echo $this->form->getLabel('contact_subject'); ?>
                    <?php echo $this->form->getInput('contact_subject'); ?></li>
                <li><?php echo $this->form->getLabel('contact_category'); ?>
                    <?php echo $this->form->getInput('contact_category'); ?></li>
                <li><?php echo $this->form->getLabel('contact_date'); ?>
                    <?php echo $this->form->getInput('contact_date'); ?></li>
                <li><label><?php echo '<b>' . JText::_('COM_RECORDS_FIELD_CONTACT_MESSAGE') . ': </b> ' ?></label>
                    <div style="float: left; width:300px;"><?php echo $this->item->contact_message;?></div>
                    <?php echo $this->form->getInput('contact_message'); ?>
                </li>
                <li><?php echo $this->form->getLabel('admin_answer'); ?>
                    <?php echo $this->form->getInput('admin_answer'); ?></li>
<!--                <li>--><?php //echo $this->form->getLabel('answer_date'); ?>
<!--                    --><?php //echo $this->form->getInput('answer_date'); ?><!--</li>-->
                <li><?php echo $this->form->getLabel('id'); ?>
                    <?php echo $this->form->getInput('id'); ?></li>
            </ul>
            <?php // echo $this->form->getLabel('description'); ?>
<!--            <div class="clr"></div>-->
            <?php //echo $this->form->getInput('description'); ?>
            <?php echo JHtml::_('sliders.end'); ?>
            <input type="hidden" value="1" id="jform_status" name="jform[status]">
            <input type="hidden" name="task" value="" />
            <?php echo JHtml::_('form.token'); ?>
        </fieldset>
    </div>
</form>
