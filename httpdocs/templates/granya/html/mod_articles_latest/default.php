<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

//require_once ('helpers'.DS.'util.helper.php');
$app = JFactory::getApplication();
$template = $app->getTemplate();
$imgSrcAlt = 'templates/' . $template . '/images/granya_default.png';
$domainUrl = &JURI::getInstance()->toString(array('scheme','host','port'));
//var_dump($list);
?>

<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
    <?php for ($i = 0; $i < 3; $i++) : $item = $list[$i];  ?>
    <li class="latestnews-item">
        <div class="home-article-title">
            <a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
        </div>
        <div class="home-article-thumb">
            <a href="<?php echo $item->link; ?>">
            <?php echo JHTML::_('articleThumb', $item, $imgSrcAlt, 'thumb-img', 'prettyPhoto'); ?>
            </a>
        </div>

        <div class="home-article-introtext">
            <?php echo JHTML::_('string.truncate', strip_tags($item->introtext), 98); ?>

        </div>

       <div class="home-article-readmore">
			
			<?php  $completeUrl = $domainUrl . $item->link;?>
			
           <div class="addthis-toolbox addthis_default_style" addthis:url="<?php echo $completeUrl; ?>" addthis:title="<?php echo $item->title; ?>" >
               <a class="addthis_button_twitter"></a>
               <a class="addthis_button_facebook"></a>
               <a class="addthis_button_linkedin"></a>
               <a class="addthis_button_google_plusone_share"></a>
               <a class="addthis_button_compact"></a>
           </div>

            <a class="see-more" href="<?php echo $item->link; ?>">
                <?php echo JText::_('COM_CONTENT_READ_MORE_TITLE') ?>
            </a>
        </div>


    </li>
    <?php endfor; ?>
    
    <li class="latestnews-item">
    </li>
    
</ul>

<?php if (isset($list[0])): ?> 	
   <a class="see-category" href="<?php echo  JRoute::_(ContentHelperRoute::getCategoryRoute($list[0]->catid)) ?>">M&aacute;s en <?php echo $list[0]->category_title ?></a>
<?php  endif; ?>


