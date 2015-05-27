<?php
/**
 * @copyright Robert Reimi
 * @license GNU General Public License version 2 or later
 */

// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
//JHtml::_('behavior.tooltip');
//JHtml::_('behavior.formvalidation');
$itemid = JRequest::getInt('Itemid');
?>
<script type="text/javascript">

    if (jQuery) {
        jQuery(document).ready(function(){
            jQuery('#seguimiento-form').bind('submit', function(){
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
            });

            jQuery('#seguimiento-form').validate();
            jQuery('#form-submit').bind('click', function(){

                jQuery('#seguimiento-form').submit();
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
    <form action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm" id="seguimiento-form" class="form-validate">

        <fieldset class="adminform">
            <dl class="fieldset">
                <!-- Form fields -->
                <dt><?php echo $this->form->getLabel('fecha'); ?></dt>
                <dd><?php echo $this->form->getInput('fecha'); ?></dd>
                <dt><?php echo $this->form->getLabel('balanza_instituto'); ?></dt>
                <dd><?php echo $this->form->getInput('balanza_instituto'); ?></dd>
                <dt><?php echo $this->form->getLabel('balanza_propia'); ?></dt>
                <dd><?php echo $this->form->getInput('balanza_propia'); ?></dd>
                <dt><?php echo $this->form->getLabel('auto_evaluacion'); ?></dt>
                <dd><?php echo $this->form->getInput('auto_evaluacion'); ?></dd>
                <dt><?php echo $this->form->getLabel('escuchar_audio'); ?></dt>
                <dd><?php echo $this->form->getInput('escuchar_audio'); ?></dd>
                <dt><?php echo $this->form->getLabel('dieta'); ?></dt>
                <dd><?php echo $this->form->getInput('dieta'); ?></dd>
                <dt><?php echo $this->form->getLabel('calidad'); ?></dt>
                <dd><?php echo $this->form->getInput('calidad'); ?></dd>
                <dt><?php echo $this->form->getLabel('cantidad'); ?></dt>
                <dd><?php echo $this->form->getInput('cantidad'); ?></dd>
                <dt><?php echo $this->form->getLabel('mini_porcion'); ?></dt>
                <dd><?php echo $this->form->getInput('mini_porcion'); ?></dd>
                <dt><label><b><?php echo JText::_('COM_SEGUIMIENTO_FIELD_CONDUCTA')?></b></label><dt>
                <dd>
                    <label style="margin-left:2em"><?php echo JText::_('COM_SEGUIMIENTO_FIELD_MASTICO')?></label><input type="checkbox" name="mastico" id="mastico" <?php echo (strpos($this->data->conducta,'m') !== false)? 'checked="checked"':''; ?>/>
                    <label style="margin-left:2em"><?php echo JText::_('COM_SEGUIMIENTO_FIELD_BAJO_CUBIERTOS')?></label><input type="checkbox" name="bajo-cubiertos" id="bajo-cubiertos" <?php echo (strpos($this->data->conducta,'b') !== false)? 'checked="checked"':''; ?>/>
                    <label style="margin-left:2em"><?php echo JText::_('COM_SEGUIMIENTO_FIELD_PLATO_CHICO')?></label><input type="checkbox" name="plato-chico" id="plato-chico" <?php echo (strpos($this->data->conducta,'p') !== false)? 'checked="checked"':''; ?>/>
                </dd>
                <dt><?php echo $this->form->getLabel('conducta'); ?></dt>
                <dd><?php echo $this->form->getInput('conducta'); ?></dd>
            </dl>
            <?php echo JText::_('COM_USERS_REGISTER_REQUIRED'); ?>
            <div class="form-buttons">
                <!--            <button class="button validate" type="submit">--><?php //echo JText::_('COM_TALLERES_REGISTRO_SERMANAL_FORM_SUBMIT'); ?><!--</button>-->
                <a class="button" id="form-submit" nohref><?php echo JText::_('COM_TALLERES_REGISTRO_SERMANAL_FORM_SUBMIT') ?></a> |
                <a class="" href="<?php echo JRoute::_('index.php?option=com_talleres&view=mybandagastrica') ?>"><?php echo JText::_('COM_TALLERES_LINK_MI_BANDA_GASTRICA') ?></a>
            </div>

            <?php echo $this->form->getInput('id'); ?>
            <input type="hidden" name="option" value="com_talleres" />
            <input type="hidden" name="task" value="registrosemanal.save" />
            <?php echo JHtml::_('form.token'); ?>
        </fieldset>
    </form>
</div>