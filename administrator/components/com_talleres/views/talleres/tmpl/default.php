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
    <form action="<?php echo JRoute::_('index.php?option=com_talleres&view=talleres'); ?>"
          method="post" name="adminForm" id="adminForm">
        <fieldset id="filter-bar">
            <div class="filter-search fltlft">
                <label class="filter-search-lbl" for="filter_search"><?php echo JText::_('JSEARCH_FILTER_LABEL'); ?></label>
                <input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" title="<?php echo JText::_('COM_JOOMPROSUBS_SEARCH_IN_TITLE'); ?>" />
                <button type="submit"><?php echo JText::_('JSEARCH_FILTER_SUBMIT');?></button>

                <button type="button" onclick="document.id('filter_search').value='';this.form.submit();">
                    <?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>
                </button>

            </div>
            <div class="filter-select fltrt">

                <select name="filter_published" class="inputbox" onchange="this.form.submit()">
                    <option value=""><?php echo JText::_('JOPTION_SELECT_PUBLISHED');?></option>
                    <?php echo JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.state'), true);?>
                </select>




                <!--                <select name="filter_category_id" class="inputbox" onchange="this.form.submit()">-->
                <!--                    <option value="">--><?php //echo JText::_('JOPTION_SELECT_CATEGORY');?><!--</option>-->
                <!--                    --><?php //echo JHtml::_('select.options', JHtml::_('category.options', 'com_joomprosubs'), 'value', 'text', $this->state->get('filter.category_id'));?>
                <!--                </select>-->

                <!--                <select name="filter_access" class="inputbox" onchange="this.form.submit()">-->
                <!--                    <option value="">--><?php //echo JText::_('JOPTION_SELECT_ACCESS');?><!--</option>-->
                <!--                    --><?php //echo JHtml::_('select.options', JHtml::_('access.assetgroups'), 'value', 'text', $this->state->get('filter.access'));?>
                <!--                </select>-->

            </div>
        </fieldset>
        <div class="clr"> </div>

        <table class="adminlist">
            <thead>
            <tr>
                <th style="width: 1%;">
                    <input type="checkbox" name="checkall-toggle" value="" onclick="checkAll(this)" />
                </th>
                <th style="width: 25%;" class="title">
                    <?php echo JHtml::_('grid.sort', 'COM_TALLERES_FIELD_TITLE', 'a.title', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort', 'COM_TALLERES_FIELD_FECHA', 'a.fecha', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort', 'JSTATUS', 'a.published', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 9%;">
                    <?php echo JHtml::_('grid.sort', 'COM_TALLERES_FIELD_TIPO','a.tipo', $listDirn, $listOrder); ?>
                </th>
<!--                <th style="width: 14%;">-->
<!--                    --><?php //echo JHtml::_('grid.sort','COM_TALLERES_FIELD_LUGAR', 'a.lugar', $listDirn, $listOrder); ?>
<!--                </th>-->
                <th style="width: 14%;">
                    <?php echo JHtml::_('grid.sort','COM_TALLERES_FIELD_CIUDAD', 'a.ciudad', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort','COM_TALLERES_FIELD_PRECIO', 'a.precio', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort','COM_TALLERES_FIELD_PRECIO_OFERTA','a.precio_oferta', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort','COM_TALLERES_FIELD_CUPO','a.cupo', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort','COM_TALLERES_FIELD_CUPO_WEB','a.cupo_web', $listDirn, $listOrder); ?>
                </th>
<!--                <th style="width: 5%;">-->
<!--                    --><?php //echo JHtml::_('grid.sort','JGRID_HEADING_ID','a.id', $listDirn, $listOrder); ?>
<!--                </th>-->
                <th style="width: 10%;" class="nowrap">
                    <?php echo JText::_('COM_TALLERES_FIELD_OPTIONS'); ?>
                </th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="11">
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
                <td>
<!--                    --><?php //if ($item->checked_out) : ?>
<!--                    --><?php //echo JHtml::_('jgrid.checkedout', $i,$item->editor, $item->checked_out_time, 'talleres.', $canCheckin); ?>
<!--                    --><?php //endif; ?>
                    <?php if ($canEdit) : ?>
                    <a href="<?php echo JRoute::_('index.php?option=com_talleres&task=taller.edit&id='.(int) $item->id); ?>">
                        <?php echo $item->title; ?></a>
                    <?php else : ?>
                        <?php echo $item->title; ?></a>
                    <?php endif; ?>
                </td>
                <td class="center">
                    <?php echo date('d/m/Y', strtotime($item->fecha)); ?>
                </td>
                <td class="center">
                    <?php echo JHtml::_('jgrid.published', $item->published, $i, 'talleres.', $canChange, 'cb', '', ''); ?>
                </td>
                <td class="center">
                    <?php echo TalleresHelper::getTipo($item->tipo); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->ciudad); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->precio) . ' ' .TalleresHelper::gerCurrencySymbol($item->pais); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->precio_oferta) . ' ' .TalleresHelper::gerCurrencySymbol($item->pais); ?>
                </td>
                <td class="center">
                    <?php echo ($item->total - $item->total_web) . ' ' . JText::_('COM_TALLERES_FROM') . ' ' . $item->cupo; ?>
                </td>
                <td class="center">
                    <?php echo $item->total_web . ' ' . JText::_('COM_TALLERES_FROM') . ' ' . $item->cupo_web; ?>
                </td>
<!--                <td class="center">-->
<!--                    --><?php //echo (int) $item->id; ?>
<!--                </td>-->
                <td>
                    <a href="index.php?option=com_talleres&view=inscripciones&filter_taller_id=<?php echo $item->id ?>"><?php echo JText::_('COM_TALLERES_FIELD_SHOW_SUSCRIPTIONS') ?> <b>(<?php echo $item->total ?>)</b></a>
                </td>
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
