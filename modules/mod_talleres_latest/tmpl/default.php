<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>

<div class="talleres-latest-box <?php echo $moduleclass_sfx; ?>">

<?php if ($listMasivo != false): ?>
	<div class="taller-type"><?php echo JText::_('MOD_TALLERES_GRUPALES'); ?></div>
	<?php foreach ($listMasivo as $item) :  ?>
		<div class="taller-city"><?php echo $item->ciudad; ?></div>
		<div class="fecha"><?php echo JHtml::_('date', $item->fecha, JText::_('DATE_FORMAT_LC')); ?></div>
		<div><?php echo JText::_('MOD_TALLERES_LUGAR'); ?><?php echo $item->lugar; ?></div>
		<div><?php echo JText::_('MOD_TALLERES_HORA'); ?><?php echo JHtml::_('formatHora', $item->hora_inicio) ?> - <?php echo JHtml::_('formatHora', $item->hora_fin) ?></div>
		<div><?php echo JText::_('MOD_TALLERES_INSCRIPCION'); ?></div>
		<div class="precio"><?php echo TalleresHelper::gerCurrencySymbol($item->pais) ?> <?php echo $item->precio; ?>*</div>
		<div class="descuento"><?php modTalleresLatestHelper::isDescuento($item); ?></div>
		<div class="agotado"><?php modTalleresLatestHelper::isAgotado($item); ?></div>
		<div class="separator"></div>
	<?php endforeach; ?>
<?php endif?>

<?php if ($listPermanente != false): ?>
	<div class="taller-type"><?php echo JText::_('MOD_TALLERES_SEMIPRIVADOS'); ?></div>
	<?php foreach ($listPermanente as $item) :  ?>
		<div class="taller-city"><?php echo $item->ciudad; ?></div>
	    <div class="fecha"><?php echo JHtml::_('date', $item->fecha, JText::_('DATE_FORMAT_LC')); ?></div>
		<div><?php echo JText::_('MOD_TALLERES_LUGAR'); ?><?php echo $item->lugar; ?></div>
		<div><?php echo JText::_('MOD_TALLERES_INSCRIPCION'); ?></div>
		<div class="precio"><?php echo TalleresHelper::gerCurrencySymbol($item->pais) ?> <?php echo $item->precio; ?>*</div>
		<div class="descuento"><?php modTalleresLatestHelper::isDescuento($item); ?></div>
		<div class="descuento"><?php echo JText::_('MOD_TALLERES_CUPO'); ?><?php echo $item->cupo_web; ?><?php echo JText::_('MOD_TALLERES_PERSONAS'); ?></div>
		<div class="agotado"><?php modTalleresLatestHelper::isAgotado($item); ?></div>
		<div class="separator"></div>
	<?php endforeach; ?>
	
<?php endif?>

<?php if ($params->get('show_individual') == 1 && $taller_individual->id > 0): ?>
	<div class="taller-type"><?php echo JText::_('MOD_TALLERES_INDIVIDUALES'); ?></div>
	<div class="taller-city"><?php echo $taller_individual->ciudad; ?></div>
	<div class="fecha"><?php echo JText::_('MOD_TALLERES_CITA'); ?></div>
	<div><?php echo JText::_('MOD_TALLERES_LUGAR'); ?><?php echo $taller_individual->lugar; ?></div>
	<div><?php echo JText::_('MOD_TALLERES_INSCRIPCION'); ?></div>
	<div class="precio"><?php echo TalleresHelper::gerCurrencySymbol($taller_individual->pais) ?> <?php echo $taller_individual->precio; ?>*</div>
	<div class="separator"></div>	
<?php endif?>

<div class="italic"><?php echo JText::_('MOD_TALLERES_MATERIAL'); ?></div>

<div class="talleres-latest-btn"><a href="2013-01-07-15-57-05/inscripcion"><?php echo JText::_('MOD_TALLERES_INSCRIBETE_AHORA_LINK'); ?></a></div>


</div>