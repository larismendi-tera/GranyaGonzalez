<?php

// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
    Joomla.submitbutton = function(task) {

        var conducta = '';
        if (document.getElementById('mastico').checked){
            conducta += "m"
        }

        if (document.getElementById('bajo-cubiertos').checked){
            conducta += "b"
        }

        if (document.getElementById('plato-chico').checked){
            conducta += "p"
        }

        document.getElementById('jform_conducta').value = conducta;

        if (task == 'seguimiento.cancel' || document.formvalidator.isValid(document.id('seguimiento-form'))) {
            <?php // esto guarda lo que esta en el wysiwyg en el campo del formulario
                    //echo $this->form->getField('description')->save(); ?>


            Joomla.submitform(task, document.getElementById('seguimiento-form'));
        } else {
            alert('<?php echo $this->escape(JText::_('COM_TALLERES_VALIDATION_FORM_FAILED'));?>');
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_talleres&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="seguimiento-form" class="form-validate">

    <div class="width-100 fltlft">
        <fieldset class="adminform">
            <legend>
                <?php echo empty($this->item->id) ? JText::_('COM_TALLERES_ADD_SEGUIMIENTO') : JText::sprintf('COM_TALLERES_EDIT_SEGUIMIENTO'); ?>
            </legend>
            <ul class="adminformlist">
                <!-- Form fields -->
                <li><?php echo $this->form->getLabel('fecha'); ?>
                    <?php echo $this->form->getInput('fecha'); ?></li>
                <li><?php echo $this->form->getLabel('balanza_instituto'); ?>
                    <?php echo $this->form->getInput('balanza_instituto'); ?></li>
                <li><?php echo $this->form->getLabel('balanza_propia'); ?>
                    <?php echo $this->form->getInput('balanza_propia'); ?></li>
                <li><?php echo $this->form->getLabel('auto_evaluacion'); ?>
                    <?php echo $this->form->getInput('auto_evaluacion'); ?></li>
                <li><?php echo $this->form->getLabel('escuchar_audio'); ?>
                    <?php echo $this->form->getInput('escuchar_audio'); ?></li>
                <li><?php echo $this->form->getLabel('dieta'); ?>
                    <?php echo $this->form->getInput('dieta'); ?></li>
                <li><?php echo $this->form->getLabel('calidad'); ?>
                    <?php echo $this->form->getInput('calidad'); ?></li>
                <li><?php echo $this->form->getLabel('cantidad'); ?>
                    <?php echo $this->form->getInput('cantidad'); ?></li>
                <li><?php echo $this->form->getLabel('mini_porcion'); ?>
                    <?php echo $this->form->getInput('mini_porcion'); ?></li>
                <li><label><b><?php echo JText::_('COM_SEGUIMIENTO_FIELD_CONDUCTA')?></b></label>
                    <label style="margin-left:2em"><?php echo JText::_('COM_SEGUIMIENTO_FIELD_MASTICO')?></label><input type="checkbox" name="mastico" id="mastico" <?php echo (strpos($this->item->conducta,'m') !== false)? 'checked="checked"':''; ?>/>
                    <label style="margin-left:2em"><?php echo JText::_('COM_SEGUIMIENTO_FIELD_BAJO_CUBIERTOS')?></label><input type="checkbox" name="bajo-cubiertos" id="bajo-cubiertos" <?php echo (strpos($this->item->conducta,'b') !== false)? 'checked="checked"':''; ?>/>
                    <label style="margin-left:2em"><?php echo JText::_('COM_SEGUIMIENTO_FIELD_PLATO_CHICO')?></label><input type="checkbox" name="plato-chico" id="plato-chico" <?php echo (strpos($this->item->conducta,'p') !== false)? 'checked="checked"':''; ?>/>
                </li>
                <li><?php echo $this->form->getLabel('conducta'); ?>
                    <?php echo $this->form->getInput('conducta'); ?></li>
                <li><?php echo $this->form->getLabel('user_id'); ?>
                    <?php echo $this->form->getInput('user_id'); ?></li>
                <li><?php echo $this->form->getLabel('id'); ?>
                    <?php echo $this->form->getInput('id'); ?></li>
            </ul>
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="jform[user_id]" value="<?php echo $this->state->get('seguimiento.user_id')?>" />
            <?php echo JHtml::_('form.token'); ?>
        </fieldset>
    </div>
    <div class="clr"></div>
</form>
