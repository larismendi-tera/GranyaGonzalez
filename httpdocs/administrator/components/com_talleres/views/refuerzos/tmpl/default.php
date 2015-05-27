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
    <form action="<?php echo JRoute::_('index.php?option=com_talleres&view=refuerzos'); ?>"
          method="post" name="adminForm" id="adminForm">
        <fieldset id="filter-bar">
            <div class="filter-search fltlft">
                <label class="filter-search-lbl" for="filter_search"><?php echo JText::_('COM_TALLERES_SEARCH_REFUERZO_FILTER_LABEL'); ?></label>
                <input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" title="<?php echo JText::_('COM_JOOMPROSUBS_SEARCH_IN_TITLE'); ?>" />
                <button type="submit"><?php echo JText::_('JSEARCH_FILTER_SUBMIT');?></button>

                <button type="button" onclick="document.id('filter_search').value='';this.form.submit();">
                    <?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>
                </button>
            </div>
        </fieldset>
        <div class="clr"> </div>

        <table class="adminlist">
            <thead>
            <tr>
                <th style="width: 1%;">
                    <input type="checkbox" name="checkall-toggle" value="" onclick="checkAll(this)" />
                </th>
                <th class="title">
                    <?php echo JHtml::_('grid.sort', 'COM_INSCRIPCION_FIELD_CI', 'a.ci', $listDirn, $listOrder); ?>
                </th>
                <th>
                    <?php echo JHtml::_('grid.sort','COM_INSCRIPCION_FIELD_NOMBRE', 'a.name', $listDirn, $listOrder); ?>
                </th>
                <th class="title">
                    <?php echo JHtml::_('grid.sort', 'COM_INSCRIPCION_FIELD_EMAIL', 'a.email', $listDirn, $listOrder); ?>
                </th>
                <th class="nowrap">
                    <?php echo JText::_('COM_TALLERES_FIELD_OPTIONS'); ?>
                </th>
                <th class="nowrap">
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
                $canCreate = $user->authorise('core.create','com_talleres');
                ?>
            <tr class="row<?php echo $i % 2; ?>">
                <td class="center">
                    <?php echo JHtml::_('grid.id', $i, $item->id); ?>
                </td>
                <td class="center">
                    <?php echo str_replace('"', '', $item->ci); ?>
                </td>
                <td style="text-transform: capitalize">
                    <?php echo $this->escape(mb_strtolower($item->name)); ?>
                </td>
                <td class="center">
                    <?php echo $this->escape($item->email); ?>
                </td>
                <td id="nro_refuerzo">
                    <select name="refuerzo_nro_<?php echo $item->id; ?>">
                        <option value="">Seleccione</option>
                        <option value="b">Refuerzo Base</option>
                        <option value="1">Refuerzo 1</option>
                        <option value="2">Refuerzo 2</option>
                        <option value="3">Refuerzo 3</option>
                        <option value="4">Refuerzo 4</option>
                    </select>
                    &nbsp;&nbsp;
                    <a title="Enviar Refuerzo" onclick="return listItemTask('cb<?php echo $i;?>','refuerzos.enviar')" href="javascript:void(0);" class="jgrid"><?php echo JText::_('COM_TALLERES_OPTION_ENVIAR_REFUERZO') ?></a>
                </td>
                <td>
                    <a href="index.php?option=com_talleres&view=seguimientos&user_id=<?php echo $item->id ?>"><?php echo JText::_('COM_TALLERES_FIELD_SHOW_SEGUIMIENTOS') ?></a>
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
