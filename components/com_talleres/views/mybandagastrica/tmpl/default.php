<?php
/**
 * @copyright Robert Reimi
 * @license GNU General Public License version 2 or later
 */
defined('_JEXEC') or die;
//JHtml::_('behavior.keepalive');
//JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
$itemid = JRequest::getInt('Itemid');
?>

<script type="text/javascript">
    if (jQuery) {
        jQuery(document).ready(function(){

            jQuery('#inscripcion_id').bind("change", function(){

                if (jQuery('#inscripcion_id').val() === "") {
                   //resetForm();
                } else {
                    jQuery('#adminForm').submit();
                }
            });

        });
    };
</script>

<div class="item-page shadow-container registration<?php echo $this->pageclass_sfx?>">

    <h2 class="article-title shadowed-right">
        <a><?php echo JText::_('COM_TALLERES_INSCRIPCION_MYBANDAGASTRICA_TITLE') ?></a>
    </h2>

    <form action="<?php echo JRoute::_('index.php?option=com_talleres&view=mybandagastrica') ?>" id="adminForm" name="adminForm" method="post" class="form-validate">
        <fieldset>
            <dl class="fieldset">
                <?php if ($this->seguimientos != false): ?>
                <dt><?php echo JText::_('COM_SEGUIMIENTO_LISTA_SEGUIMIENTO') ?></dt>
                <dd>
                    <table class="table-seguimiento" style="border:1px solid #ccc" border="1" cellpadding="1">
                        <thead class="table-seguimiento-head">
                        <tr>
                            <th style="width:10%">
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_FECHA') ?>
                            </th>
                            <th style="width:8%">
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_BALANZA_INSTITUTO') ?>
                            </th>
                            <th style="width:8%">
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_BALANZA_PROPIA') ?>
                            </th>
                            <th style="width:6%">
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_DIETA') ?>
                            </th>
                            <th style="width:8%">
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_CANTIDAD') ?>
                            </th>
                            <th>
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_CALIDAD') ?>
                            </th>
                            <th>
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_CONDUCTA') ?>
                            </th>
                            <th style="width:9%">
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_ESCUCHAR_AUDIO') ?>
                            </th>
                            <th style="width:8%">
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_MINI_PORCION') ?>
                            </th>
                            <th  style="width:9%">
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_AUTO_EVALUACION') ?>
                            </th>
                            <th>
                                <?php echo JText::_('COM_SEGUIMIENTO_FIELD_OPCIONES') ?>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="table-seguimiento-body">
                            <?php foreach ($this->seguimientos as $seguimiento): ?>
                                <tr>
                                    <td> <?php echo JHtml::_('date', $seguimiento->fecha, JText::_('DATE_FORMAT_LC4'))?></td>
                                    <td><?php echo $this->escape($seguimiento->balanza_instituto) ?></td>
                                    <td><?php echo $this->escape($seguimiento->balanza_propia) ?></td>
                                    <td><?php echo TalleresHelper::getDieta($seguimiento->dieta) ?></td>
                                    <td><?php echo TalleresHelper::getCantidad($seguimiento->cantidad)?></td>
                                    <td><?php echo TalleresHelper::getCalidadDieta($seguimiento->calidad) ?></td>
                                    <td><?php echo TalleresHelper::getConducta($seguimiento->conducta)?></td>
                                    <td><?php echo TalleresHelper::getEscucharAudio($seguimiento->escuchar_audio) ?></td>
                                    <td><?php echo TalleresHelper::getMiniPorcion($seguimiento->mini_porcion)?></td>
                                    <td><?php echo TalleresHelper::getAutoEvaluacion($seguimiento->auto_evaluacion)?></td>
                                    <td>
                                        <a href="<?php echo JRoute::_('index.php?option=com_talleres&view=registrosemanal&id=' . $seguimiento->id) ?>"><?php echo JText::_('COM_TALLERES_LINK_REGISTRO_SEMANAL_EDITAR') ?></a> |
                                        <a href="<?php echo JRoute::_('index.php?option=com_talleres&view=registrosemanal&id=' . $seguimiento->id . '&task=registrosemanal.delete') ?>"><?php echo JText::_('COM_TALLERES_LINK_REGISTRO_SEMANAL_ELIMINAR') ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </dd>
                <dt>&nbsp;</dt>
                <?php endif; ?>
                <dd>
                    <div class="form-buttons">
                        <a class="button" href="<?php echo JRoute::_('index.php?option=com_talleres&view=registrosemanal') ?>"><?php echo JText::_('COM_TALLERES_LINK_REGISTRO_SEMANAL_NUEVO') ?></a> |
                        <a href="<?php echo JRoute::_(''); ?>"><?php echo JText::_("COM_TALLERES_LINK_INICIO")?></a>
                    </div>
                </dd>
            </dl>
        </fieldset>
    </form>
</div>
