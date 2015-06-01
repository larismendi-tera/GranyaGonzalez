<?php

// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
    Joomla.submitbutton = function(task) {
        if (task == 'inscripcion.cancel' || document.formvalidator.isValid(document.id('inscripcion-form'))) {
            <?php // esto guarda lo que esta en el wysiwyg en el campo del formulario
                    //echo $this->form->getField('description')->save(); ?>
            Joomla.submitform(task, document.getElementById('inscripcion-form'));
        } else {
            alert('<?php echo $this->escape(JText::_('COM_TALLERES_VALIDATION_FORM_FAILED'));?>');
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_talleres&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="inscripcion-form" class="form-validate">

    <div class="width-100 fltlft">
        <fieldset class="adminform">
            <legend>
                <?php echo empty($this->item->id) ? JText::_('COM_TALLERES_NEW_TALLER') : JText::sprintf('COM_TALLERES_EDIT_TALLER', $this->item->nombre); ?>
            </legend>

            <ul class="adminformlist">
                <!-- Form fields -->
                <li><?php echo $this->form->getLabel('taller_id'); ?>
                    <?php echo $this->form->getInput('taller_id'); ?></li>
                <li><?php echo $this->form->getLabel('nombre'); ?>
                    <?php echo $this->form->getInput('nombre'); ?></li>
                <li><?php echo $this->form->getLabel('ci'); ?>
                    <?php echo $this->form->getInput('ci'); ?></li>
                <li><?php echo $this->form->getLabel('telefono'); ?>
                    <?php echo $this->form->getInput('telefono'); ?></li>
                <li><?php echo $this->form->getLabel('correo'); ?>
                    <?php echo $this->form->getInput('correo'); ?></li>
                <li><?php echo $this->form->getLabel('genero'); ?>
                    <?php echo $this->form->getInput('genero'); ?></li>
                <li><?php echo $this->form->getLabel('ciudad'); ?>
                    <?php echo $this->form->getInput('ciudad'); ?></li>
                <li><?php echo $this->form->getLabel('forma_pago'); ?>
                    <?php echo $this->form->getInput('forma_pago'); ?></li>
                <li><?php echo $this->form->getLabel('monto'); ?>
                    <?php echo $this->form->getInput('monto'); ?></li>
                <li><?php echo $this->form->getLabel('num_transaccion'); ?>
                <?php echo $this->form->getInput('num_transaccion'); ?></li>
                <li><?php echo $this->form->getLabel('observaciones'); ?>
                <?php echo $this->form->getInput('observaciones'); ?></li>
                
                <li><?php echo $this->form->getLabel('fecha'); ?>
                    <?php echo $this->form->getInput('fecha'); ?></li>
                <li><?php echo $this->form->getLabel('tipo_inscripcion'); ?>
                    <?php echo $this->form->getInput('tipo_inscripcion'); ?></li>
            </ul>
            <?php // echo $this->form->getLabel('description'); ?>
<!--            <div class="clr"></div>-->
            <?php //echo $this->form->getInput('description'); ?>
        </fieldset>
    </div>
<!--    <div class="width-40 fltrt">-->
<!--        --><?php //echo JHtml::_('sliders.start','joomprosubs-sliders-'.$this->item->id, array('useCookie'=>1)); ?>
<!--        --><?php //echo JHtml::_('sliders.panel',JText::_('JGLOBAL_FIELDSET_PUBLISHING'), 'publishing-details'); ?>
<!--        <fieldset class="panelform">-->
<!--            <ul class="adminformlist">-->
<!--                <li>--><?php //echo $this->form->getLabel('published'); ?>
<!--                    --><?php //echo $this->form->getInput('published'); ?><!--</li>-->
<!--            </ul>-->
<!--        </fieldset>-->
<!--        --><?php //echo JHtml::_('sliders.end'); ?>
<!--        -->
<!--    </div>-->

    <input type="hidden" name="task" value="" />
    <?php echo JHtml::_('form.token'); ?>
    <div class="clr"></div>
</form>
