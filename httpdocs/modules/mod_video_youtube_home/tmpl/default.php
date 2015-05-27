<?php
/*------------------------------------------------------------------------
# mod_video_youtube_home.php - Video Youtube Home (module)
# ------------------------------------------------------------------------
# version		1.0.0
# author    	Robert Pérez Reimi
# copyright 	Copyright (c) 2012 Teravisiontech.com	 All rights reserved.
# @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites 	http://teravisiontech.com/
-------------------------------------------------------------------------
*/
$baseurl = JURI::base();		
?>

<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function(){
    jQuery("a[rel^='prettyPhoto']").prettyPhoto({
		modal: true,
		theme: 'light_rounded', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
		horizontal_padding: 20, /* The padding on each side of the picture */
		social_tools: ''
    });
  });
</script>

<div class="video_youtube_home">

<?php if ($return["video_id"] != false):?>

<div align="center" style="position:relative; width:410px; height:310px;">
	<!-- Parameter &wmode=transparent in the src attr of iframe, allows a div float over iframe -->
	<iframe id="youtube-player" type="text/html" width="400" height="300" src="http://www.youtube.com/embed/<?php echo $return["video_id"]?>?enablejsapi=1&theme=light&wmode=transparent" frameborder="0" allowfullscreen></iframe>
	<a rel="prettyPhoto" style="display:block; position:absolute; left:5px; top:5px; width: 400px; height:300px;"  href="http://www.youtube.com/watch?v=<?php echo $return["video_id"]?>"></a>
</div>

<!-- Si esta logueado, palabra articulo configurable, vista de del enlace configurable -->
<div align="right" class="mod-video-show-more-container" style="margin-top:10px">

	<?php  if (!empty($return["more_videos_url"])):?>
	<a href="<?php echo $return["more_videos_url"]?>" class="see-more">
		<?php echo $return["more_videos_url_label"]?>
	</a>
	<?php endif; ?>
</div>


<?php else :  ?>

<span>Please configure video url in module</span>

<?php endif; ?>

</div>

