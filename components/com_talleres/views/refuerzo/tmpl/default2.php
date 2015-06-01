<?php
/**
 * @copyright Robert Reimi
 * @license GNU General Public License version 2 or later
 */
defined('_JEXEC') or die;
//JHtml::_('behavior.keepalive');
//JHtml::_('behavior.formvalidation');
//JHtml::_('behavior.tooltip');
//$itemid = JRequest::getInt('Itemid');
?>




<div class="item-page shadow-container refuerzo">

    <h2 class="article-title shadowed-right">
        <a><?php echo JText::_('COM_TALLERES_INSCRIPCION_REFUERZO_TITLE') ?></a>
    </h2>

    <?php if (!$this->item->valid) :?>
        <b>El enlace ha expirado</b>
        <p>Puede solicitar un nuevo enlace a traves de nuestra sección de contacto</p>
    <?php else : ?>
        <div class="audio-wrapper">
         <audio preload="none"></audio>
        </div>
        <div id="refuerzo-wrapper">
            <br/>
            <p><b>Audios</b></p>
            <ul class="refuerzo-playlist">
                <li><a href="#" data-src="<?php echo JURI::base(true) ?>/audio/refuerzo.mp3">Refuerzo</a></li>
                <li><a href="#" data-src="<?php echo JURI::base(true) ?>/audio/dia.mp3">CD Día Banda Gástrica Virtual</a></li>
                <li><a href="#" data-src="<?php echo JURI::base(true) ?>/audio/noche.mp3">CD Noche Banda Gástrica Virtual</a></li>
                <li><a href="#" data-src="<?php echo JURI::base(true) ?>/audio/dia2.mp3">CD Día Re-Implante Banda Gástrica Virtual</a></li>
                <li><a href="#" data-src="<?php echo JURI::base(true) ?>/audio/noche2.mp3">CD Noche Re-Implante Banda Gástrica Virtual</a></li>
            </ul>
            <ul class="refuerzo-downloads">
                <li><b>Descargas</b></li>
                <li><a href="<?php echo JURI::base(true) ?>/audios/dia.mp3">CD Día Banda Gástrica Virtual</a></li>
                <li><a href="<?php echo JURI::base(true) ?>/audios/noche.mp3">CD Noche Banda Gástrica Virtual</a></li>
                <li><a href="<?php echo JURI::base(true) ?>/audios/dia2.mp3">CD Día Re-Implante Banda Gástrica Virtual</a></li>
                <li><a href="<?php echo JURI::base(true) ?>/audios/noche2.mp3">CD Noche Re-Implante Banda Gástrica Virtual</a></li>
            </ul>
        </div>



    <?php endif; ?>
</div>

<?php if ($this->item->valid) :?>


<script type="text/javascript">

jQuery(function() {
    //Setup the player to autoplay the next track
    var a = audiojs.createAll({
//        trackEnded: function() {
//            var next = jQuery('ol li.playing').next();
//            if (!next.length) next = jQuery('ol li').first();
//            next.addClass('playing').siblings().removeClass('playing');
//            audio.load(jQuery('a', next).attr('data-src'));
//            audio.play();
//        }
    });

    // Load in the first track
    var audio = a[0];
    first = jQuery('.refuerzo-playlist a').attr('data-src');
    jQuery('.refuerzo-playlist li').first().addClass('playing');
    audio.load(first);

    // Load in a track on click
    jQuery('.refuerzo-playlist li').click(function(e) {
        e.preventDefault();
        jQuery(this).addClass('playing').siblings().removeClass('playing');
        audio.load(jQuery('a', this).attr('data-src'));
        audio.play();
    });

});
</script>

<?php endif; ?>
