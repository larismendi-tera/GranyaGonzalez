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
    <div class="taller-intro"><?php echo JText::_('MOD_TALLERES_INFO'); ?></div>
    <ul class="talleres-latest-list masivo">
        <?php foreach ($listMasivo as $item) :  ?>
        <li class="taller-city">
                <?php echo $item->ciudad; ?> - <?php echo JText::_('MOD_TALLERES_GRUPAL'); ?>
        </li>
        <li class="taller-info">
                <?php echo JHtml::_('date', $item->fecha, JText::_('DATE_FORMAT_LC')); ?>
        </li>
        <div class="agotado"><?php modTalleresLatestHelper::isAgotado($item); ?></div>
        <?php endforeach; ?>
    </ul>
    <?php endif?>
    
    <?php if ($listPermanente != false): ?>
    <ul class="talleres-latest-list permanente">
        <?php foreach ($listPermanente as $item) :  ?>
        <li class="taller-city">
            <?php echo $item->ciudad; ?> - <?php echo JText::_('MOD_TALLERES_SEMIPRIVADO'); ?>
        </li>
        <li class="taller-info">
            <?php echo JHtml::_('date', $item->fecha, JText::_('DATE_FORMAT_LC')); ?>
        </li>
        <div class="agotado"><?php modTalleresLatestHelper::isAgotado($item); ?></div>
        <?php endforeach; ?>
    </ul>
    <?php endif?>

    <?php if ($listIndividual != false): ?>
    <ul class="talleres-latest-list individual">
        <?php foreach ($listIndividual as $item) :  ?>
        <li class="taller-info"> 
             <?php echo $item->title; ?>  
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif?>	
	
    <div class="info-talleres">
    <?php echo JText::_('MOD_TALLERES_MORE_INFO'); ?>
    </div>
    <div class="info-talleres">
    <?php echo JText::_('MOD_TALLERES_INFO_CUPOS_LIMITADOS'); ?>
    </div>

    <div class="talleres-latest-btn"><a href="2013-01-07-15-57-05/informacion-y-talleres"><?php echo JText::_('MOD_TALLERES_INFO_TALLERES_LINK'); ?></a></div>
    <div class="talleres-latest-btn"><a href="2013-01-07-15-57-05/inscripcion"><?php echo JText::_('MOD_TALLERES_INSCRIBETE_AHORA_LINK'); ?></a></div>

</div>