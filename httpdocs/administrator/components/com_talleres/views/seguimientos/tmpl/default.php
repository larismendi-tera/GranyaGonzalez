<?php

defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('script','system/multiselect.js', false, true);
$user = JFactory::getUser();
$userId = $user->get('id');
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));
?>

<div class="talleres-manager">
    <form action="<?php echo JRoute::_('index.php?option=com_talleres&view=seguimientos'); ?>"
          method="post" name="adminForm" id="adminForm">

        <fieldset id="filter-bar">
            <div class="filter-search fltlft">
                <label class="filter-search-lbl" for="filter_search"><?php echo JText::_('COM_TALLERES_SEARCH_SEGUIMIENTOS_FILTER_LABEL'); ?></label>
                <input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" title="<?php echo JText::_('COM_JOOMPROSUBS_SEARCH_IN_TITLE'); ?>" />
                <button type="submit"><?php echo JText::_('JSEARCH_FILTER_SUBMIT');?></button>

                <button type="button" onclick="document.id('filter_search').value='';this.form.submit();">
                    <?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>
                </button>
            </div>
<!--            <div class="filter-select fltrt">-->
<!--                <select name="filter_published" class="inputbox" onchange="this.form.submit()">-->
<!--                    <option value="">--><?php //echo JText::_('JOPTION_SELECT_PUBLISHED');?><!--</option>-->
<!--                    --><?php //echo JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.state'), true);?>
<!--                </select>-->
<!--            </div>-->
        </fieldset>

        <div class="clr"> </div>

        <table class="adminlist">
            <thead>
            <tr>
                <th style="width: 1%;">
                    <input type="checkbox" name="checkall-toggle" value="" onclick="checkAll(this)" />
                </th>
                <th style="width: 8%;">
                    <?php echo JHtml::_('grid.sort', 'COM_SEGUIMIENTO_FIELD_NOMBRE','a.nombre', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 10%;">
                    <?php echo JHtml::_('grid.sort', 'COM_SEGUIMIENTO_FIELD_TALLER','a.taller', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 10%;">
                    <?php echo JHtml::_('grid.sort', 'COM_SEGUIMIENTO_FIELD_FECHA','a.fecha', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_BALANZA_INSTITUTO', 'a.balanza_instituto', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 4%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_BALANZA_PROPIA','a.balanza_propia', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 2%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_AUTO_EVALUACION','a.auto_evaluacion', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 3%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_ESCUCHAR_AUDIO','a.escuchar_audio', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 3%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_DIETA','a.dieta', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 4%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_CALIDAD','a.calidad', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 3%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_CANTIDAD','a.cantidad', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 2%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_MINI_PORCION','a.mini_porcion', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_CONDUCTA','a.conducta', $listDirn, $listOrder); ?>
                </th>
<!--                <th style="width: 5%;">-->
<!--                    --><?php //echo JHtml::_('grid.sort','COM_SEGUIMIENTO_FIELD_AUTO_EVALUACION','a.auto_evaluacion', $listDirn, $listOrder); ?>
<!--                </th>-->
            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="13">
                    <?php echo $this->pagination->getListFooter(); ?>
                </td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($this->items as $i => $item) :
                $ordering = ($listOrder == 'a.ordering');
                //$item->cat_link = JRoute::_('index.php?option=com_categories&extension=com_talleres&task=edit&type=other&cid[]='. $item->catid);
                $canCreate = $user->authorise('core.create','com_talleres');
                $canEdit = $user->authorise('core.edit','com_talleres');
                $canCheckin = $user->authorise('core.manage', 'com_checkin') || $item->checked_out==$user->get('id') || $item->checked_out==0;
                $canChange = $user->authorise('core.edit.state','com_talleres') && $canCheckin;
                ?>
            <tr class="row<?php echo $i % 2; ?>">
                <td class="center">
                    <?php echo JHtml::_('grid.id', $i, $item->id); ?>
                </td>
                <td class="center">
                    <?php $stateFilterUserId = $this->state->get('filter.user_id') ?>
                    <?php if (!$stateFilterUserId): ?><a href="index.php?option=com_talleres&view=seguimientos&user_id=<?php echo $item->usuario_id ?>"><?php endif; ?>
                        <?php echo $this->escape($item->nombre); ?>
                    <?php if (!$stateFilterUserId): ?></a><?php endif; ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->taller_nombre); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::formatFecha($item->fecha); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->balanza_instituto); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->balanza_propia); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::getAutoEvaluacion($item->auto_evaluacion); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::getEscucharAudio($item->escuchar_audio); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::getDieta($item->dieta); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::getCalidadDieta($item->calidad); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::getCantidad($item->cantidad); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::getMiniPorcion($item->mini_porcion); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::getConducta($item->conducta); ?>
                </td>
<!--                <td class="center">-->
<!--                    --><?php //echo TalleresHelper::getAutoEvaluacion($item->auto_evaluacion);?>
<!--                </td>-->
<!--                <td class="center">-->
<!--                    --><?php //echo (int) $item->id; ?>
<!--                </td>-->
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div>
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="boxchecked" value="0" />
            <input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
            <input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
            <?php echo JHtml::_('form.token'); ?>

        </div>
    </form>
</div>
