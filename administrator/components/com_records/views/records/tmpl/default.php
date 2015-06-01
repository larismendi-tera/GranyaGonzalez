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

<div class="records-manager">
    <form action="<?php echo JRoute::_('index.php?option=com_records&view=records'); ?>"
          method="post" name="adminForm" id="adminForm">
        <fieldset id="filter-bar">
            <div class="filter-search fltlft">
                <label class="filter-search-lbl" for="filter_search"><?php echo JText::_('JSEARCH_FILTER_LABEL'); ?></label>
                <input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" title="<?php echo JText::_('COM_RECORDS_SEARCH_IN_TITLE'); ?>" />
                <button type="submit"><?php echo JText::_('JSEARCH_FILTER_SUBMIT');?></button>

                <button type="button" onclick="document.id('filter_search').value='';this.form.submit();">
                    <?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>
                </button>

            </div>
            <div class="filter-select fltrt">
				
				<select name="filter_country_id" class="inputbox" onchange="this.form.submit()">
                    <option value=""><?php echo JText::_('COM_RECORDS_FILTER_COUNTRY');?></option>
                    <?php echo JHtml::_('select.options', RecordsHelper::getCountries(), 'value', 'value', $this->state->get('filter.country_id'));?>
                </select>
				
                <select name="filter_status" class="inputbox" onchange="this.form.submit()">
                    <option value=""><?php echo JText::_('COM_RECORDS_FILTER_STATUS');?></option>
                    <?php echo JHtml::_('select.options', RecordsHelper::getInscripcionStatuses(), 'value', 'text', $this->state->get('filter.status'), true);?>
                </select>

                <select name="filter_category_id" class="inputbox" onchange="this.form.submit()">
                    <option value=""><?php echo JText::_('COM_RECORDS_FILTER_CATEGORIA');?></option>
                    <?php echo JHtml::_('select.options', RecordsHelper::getCategories(), 'value', 'value', $this->state->get('filter.category_id'));?>
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
                <th style="width: 10%;" class="title">
                    <?php echo JHtml::_('grid.sort', 'COM_RECORDS_FIELD_CONTACT_NAME', 'a.contact_name', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 10%;">
                    <?php echo JHtml::_('grid.sort', 'COM_RECORDS_FIELD_CONTACT_EMAIL','a.contact_email', $listDirn, $listOrder); ?>
                </th>
                
                 <th style="width: 6%;">
                    <?php echo JHtml::_('grid.sort', 'COM_RECORDS_FIELD_CONTACT_PHONE','a.contact_phone', $listDirn, $listOrder); ?>
                </th>
                 <th style="width: 6%;">
                    <?php echo JHtml::_('grid.sort', 'COM_RECORDS_FIELD_CONTACT_COUNTRY','country_name', $listDirn, $listOrder); ?>
                </th>
                 <th style="width: 6%;">
                    <?php echo JHtml::_('grid.sort', 'COM_RECORDS_FIELD_CONTACT_CITY','a.contact_city', $listDirn, $listOrder); ?>
                </th>
                 <th style="width: 5%;">
                    <?php echo JHtml::_('grid.sort', 'COM_RECORDS_FIELD_CONTACT_SKYPE','a.contact_skype', $listDirn, $listOrder); ?>
                </th>
                
                <th style="width: 8%;">
                    <?php echo JHtml::_('grid.sort','COM_RECORDS_FIELD_CONTACT_CATEGORY', 'a.contact_category', $listDirn, $listOrder); ?>
                </th>
                <th>
                    <?php echo JHtml::_('grid.sort','COM_RECORDS_FIELD_CONTACT_SUBJECT', 'a.contact_subject', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 8%;">
                    <?php echo JHtml::_('grid.sort','COM_RECORDS_FIELD_CONTACT_DATE','a.contact_date', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 8%;">
                    <?php echo JHtml::_('grid.sort','COM_RECORDS_FIELD_ANSWER_DATE','a.answer_date', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 6%;">
                    <?php echo JHtml::_('grid.sort', 'COM_RECORDS_FIELD_STATUS', 'a.status', $listDirn, $listOrder); ?>
                </th>
                <th style="width: 8%;" class="nowrap">
                    <?php echo JText::_('COM_TALLERES_FIELD_OPTIONS'); ?>
                </th>
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
                $canCreate = $user->authorise('core.create','com_records');
                $canEdit = $user->authorise('core.edit','com_records');
                $canCheckin = $user->authorise('core.manage', 'com_checkin') || $item->checked_out==$user->get('id') || $item->checked_out==0;
                $canChange = $user->authorise('core.edit.state','com_records') && $canCheckin;
                ?>
            <tr class="row<?php echo $i % 2; ?>">
                <td class="center">
                    <?php echo JHtml::_('grid.id', $i, $item->id); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->contact_name); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->contact_email); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->contact_phone); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->country_name); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->contact_city); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->contact_skype); ?>
                </td>
                <td class="center">
                    <?php echo RecordsHelper::getCategoria($item->contact_category); ?>
                </td>
                <td>
                    <?php echo $item->contact_subject; ?></a>
                </td>
                <td class="center">
                    <?php echo RecordsHelper::formatFecha($item->contact_date); ?>
                </td>
                <td class="center">
                    <?php echo RecordsHelper::formatFecha($item->answer_date); ?>
                </td>
                <td class="center">
                    <?php echo RecordsHelper::getStatus($item->status); ?>
                </td>
                <td>
                    <?php if ($canEdit) : ?>
                        <a href="<?php echo JRoute::_('index.php?option=com_records&task=record.edit&id=' . $item->id); ?>"><?php echo JText::_('COM_RECORDS_ANWSER_ITEM') ?></a>
                    <?php endif; ?>
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
