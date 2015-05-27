<?php

// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
    Joomla.submitbutton = function(task) {
        if (task == 'taller.cancel' || document.formvalidator.isValid(document.id('taller-form'))) {
            <?php // esto guarda lo que esta en el wysiwyg en el campo del formulario
                    //echo $this->form->getField('description')->save(); ?>
            Joomla.submitform(task, document.getElementById('taller-form'));
        } else {
            alert('<?php echo $this->escape(JText::_('COM_TALLERES_VALIDATION_FORM_FAILED'));?>');
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_talleres&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="taller-form" class="form-validate">

    <div class="width-60 fltlft">
        <fieldset class="adminform">
            <legend>
                <?php echo empty($this->item->id) ? JText::_('COM_TALLERES_NEW_TALLER') : JText::sprintf('COM_TALLERES_EDIT_TALLER', $this->item->title); ?>
            </legend>
            <ul class="adminformlist">
                <!-- Form fields -->
                <?php if (!empty($this->item->id)): ?>
                <li><?php echo $this->form->getLabel('title'); ?>
                    <?php echo $this->form->getInput('title'); ?></li>
                <?php endif; ?>
                <li><?php echo $this->form->getLabel('fecha'); ?>
                    <?php echo $this->form->getInput('fecha'); ?></li>
                <li><?php echo $this->form->getLabel('tipo'); ?>
                    <?php echo $this->form->getInput('tipo'); ?></li>
                <li><?php echo $this->form->getLabel('pais'); ?>
                    <?php echo $this->form->getInput('pais'); ?></li>
                <li><?php echo $this->form->getLabel('ciudad'); ?>
                    <?php echo $this->form->getInput('ciudad'); ?></li>
                <li><?php echo $this->form->getLabel('lugar'); ?>
                    <?php echo $this->form->getInput('lugar'); ?></li>
                <li><?php echo $this->form->getLabel('precio'); ?>
                    <?php echo $this->form->getInput('precio'); ?></li>
                <li><?php echo $this->form->getLabel('precio_oferta'); ?>
                    <?php echo $this->form->getInput('precio_oferta'); ?></li>
                <li><?php echo $this->form->getLabel('fecha_limite_oferta'); ?>
                    <?php echo $this->form->getInput('fecha_limite_oferta'); ?></li>
                <li><?php echo $this->form->getLabel('cupo'); ?>
                    <?php echo $this->form->getInput('cupo'); ?></li>
                <li><?php echo $this->form->getLabel('cupo_web'); ?>
                    <?php echo $this->form->getInput('cupo_web'); ?></li>
                <li><?php echo $this->form->getLabel('hora_inicio'); ?>
                    <?php echo $this->form->getInput('hora_inicio'); ?></li>
                <li><?php echo $this->form->getLabel('hora_fin'); ?>
                    <?php echo $this->form->getInput('hora_fin'); ?></li>
                <li><?php echo $this->form->getLabel('id'); ?>
                    <?php echo $this->form->getInput('id'); ?></li>
            </ul>
            <?php // echo $this->form->getLabel('description'); ?>
<!--            <div class="clr"></div>-->
            <?php //echo $this->form->getInput('description'); ?>
        </fieldset>
    </div>
    <div class="width-40 fltrt">
        <?php echo JHtml::_('sliders.start','joomprosubs-sliders-'.$this->item->id, array('useCookie'=>1)); ?>
        <?php echo JHtml::_('sliders.panel',JText::_('JGLOBAL_FIELDSET_PUBLISHING'), 'publishing-details'); ?>
        <fieldset class="panelform">
            <ul class="adminformlist">
                <li><?php echo $this->form->getLabel('published'); ?>
                    <?php echo $this->form->getInput('published'); ?></li>
            </ul>
        </fieldset>
        <?php echo JHtml::_('sliders.end'); ?>
        <input type="hidden" name="task" value="" />
        <?php echo JHtml::_('form.token'); ?>
    </div>
    <div class="clr"></div>
</form>
