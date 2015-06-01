<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);
//JHtml::_('script', 'media/popup-imagemanager.js', true, true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:fb="http://ogp.me/ns/fb#" xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
        <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
        <jdoc:include type="head" />

        <!-- Global scripts -->
        <!-- jdoc:include type="script" /-->

		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/base.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/module.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/state.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/prettyPhoto.css" type="text/css" />

        <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ff7a42a7cc9935f"></script>
        <?php //if (isset($this->jqueryValidationEnabled)): ?>
            <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/messages_es.js"></script>
        <?php //endif ?>
<!--        <script type="text/javascript" src="--><?php //echo $this->baseurl ?><!--/templates/--><?php //echo $this->template ?><!--/js/jquery-1.9.0.min.js"></script>-->
        <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.prettyPhoto.js"></script>
		
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-39403348-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		
    </head>
	<body>

        <header id="header" class="header-container block-container">
                <div class="site-logo">
                    <a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png"/></a>
                </div>
                <div class="site-login">
                    <jdoc:include type="modules" name="granya-login" style="none" />
                </div>
        </header>


        <div id="" class="menu-container block-container" >
            <?php if($this->countModules('granya-topmenu')) : ?>
                <div id="" class="menu-box">
                    <jdoc:include type="modules" name="granya-topmenu" style="nav" />
                    <?php if($this->countModules('granya-search')) : ?>
                    <div id="search-box" class="search-box">
                        <jdoc:include type="modules" name="granya-search" style="none" />
                    </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if($this->countModules('granya-breadcrumbs')) : ?>
            <div id="" class="breadcrumbs-container block-container">
                <jdoc:include type="modules" name="granya-breadcrumbs" />
            </div>
        <?php endif; ?>

        <div id="" class="content-container block-container">
            <div id="" class="content-panel <?php echo ($this->countModules('granya-sidebar') == 0)? "full": ""; ?> ">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div>
            <?php if ($this->countModules('granya-sidebar')) : ?>
            <div id="right-panel" class="">
                <jdoc:include type="modules" name="granya-sidebar" style="sidebar" />
            </div>
            <?php endif; ?>
            <div class="clear"></div>
        </div>

        <div id="" class="footer-container block-container rounded-container">
            <div id="" class="footer-box">
                <jdoc:include type="modules" name="granya-footer" />
            </div>
        </div>
		<jdoc:include type="modules" name="debug" />
	</body>



    <script type="text/javascript" charset="utf-8">
    if (jQuery) {
        jQuery(document).ready(function(){
            jQuery(document).ready(function(){
                jQuery("a[rel^='prettyPhoto']").prettyPhoto({
                    modal: true,
                    theme: 'light_rounded', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
                    horizontal_padding: 20, /* The padding on each side of the picture */
                    social_tools: ''
                });


                //jQuery("input#modlgn_username").val(jQuery("input#modlgn_username").attr('title'));
    			jQuery("input#modlgn_username").addClass('auto-hint');
    			
    	        jQuery("input#modlgn_username").click(function(){
    	            if(jQuery(this).val() == jQuery(this).attr('title')){
    	                jQuery(this).val('');
    	                jQuery(this).removeClass('auto-hint');
    	            }
    	        });
    	        jQuery("input#modlgn_username").focusout(function(){
    	            if (jQuery(this).val() === ''){
    	                jQuery(this).val(jQuery(this).attr('title'));
    	                jQuery(this).addClass('auto-hint');
    	            }
    	        });

    	      /*jQuery("input#modlgn_passwd").val(jQuery("input#modlgn_passwd").attr('title'));
    			jQuery("input#modlgn_passwd").addClass('auto-hint');
    			
    	        jQuery("input#modlgn_passwd").click(function(){
    	            if(jQuery(this).val() == jQuery(this).attr('title')){
    	                jQuery(this).val('');
    	                jQuery(this).removeClass('auto-hint');
    	            }
    	        });
    	        jQuery("input#modlgn_passwd").focusout(function(){
    	            if (jQuery(this).val() === ''){
    	                jQuery(this).val(jQuery(this).attr('title'));
    	                jQuery(this).addClass('auto-hint');
    	            }
    	            if(jQuery(this).val() == jQuery(this).attr('title')){
    	            	jQuery(this).val('');
        	        }
    	        });*/

                
            });
        });
    };
    </script>
</html>
