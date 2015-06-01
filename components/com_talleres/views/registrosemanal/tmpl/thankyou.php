<?php
/**
 * thankyou.php
 *
 * User: robert.reimi@gmail.com
 * Date: 2/21/13
 *
 */

?>


<div class="item-page shadow-container registration<?php echo $this->pageclass_sfx?>">

    <h2 class="article-title shadowed-right">
        <a nohref><?php echo JText::_("COM_TALLERES_INSCRIPCION_MYBANDAGASTRICA_TITLE") . " - " . JText::_('COM_TALLERES_INSCRIPCION_REGISTRO_SEMANAL') ?></a>
    </h2>

    <p>
        <?php echo JText::_("COM_TALLERES_REGISTRO_SEMANAL_GRACIAS_TITLE_DESC") ?>
    </p>
    <p>
        <a href="<?php echo JURI::base()?>"><?php echo JText::_("COM_TALLERES_LINK_INICIO")?></a> |
        <a href="<?php echo JRoute::_('index.php?option=com_talleres&view=mybandagastrica'); ?>"><?php echo JText::_("COM_TALLERES_LINK_MI_BANDA_GASTRICA")?></a>
    </p>
</div>