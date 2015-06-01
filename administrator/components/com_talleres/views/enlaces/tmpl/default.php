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
    <form action="<?php echo JRoute::_('index.php?option=com_talleres&view=enlaces'); ?>"
          method="post" name="adminForm" id="adminForm">
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
                <th class="title">
                    <?php echo JHtml::_('grid.sort', 'COM_TALLERES_FIELD_FECHA_EXPIRACION', 'a.fecha_expiracion', $listDirn, $listOrder); ?>
                </th>
                <th class="title">
                    <?php echo JText::_('COM_INSCRIPCION_FIELD_REFUERZO_ENLACE'); ?>
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
                <td class="center">
                    <?php
                    $date = new DateTime($item->fecha_expiracion);
                    $date->setTimezone(new DateTimeZone('America/Caracas'));
                    echo date_format($date, 'd/m/Y h:i a'); ?>
                </td>
                <td>
                    <?php echo TalleresHelper::getRefuerzoLink($item->id); ?>
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
