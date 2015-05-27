<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_search
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$imgSrcAlt = 'templates/' . $template . '/images/granya_default.png';

?>

<table class="zebra" border="0" cellspacing="0" cellpadding="0">
	<tbody>

            <?php foreach ($this->results as $result) : ?>
            
        <tr class="<?php if ($i % 2 == '0') { echo 'odd'; } else { echo 'even'; } ?>">
			
            <td class="article_preview">
                <a href="<?php echo JRoute::_($result->href); ?>">
                   <?php echo JHTML::_('articleThumb', $result, $imgSrcAlt, 'thumb-img', 'prettyPhoto'); ?>
                </a>
            </td>

            <td class="article_info">
				<?php $completeUrl = JRoute::_($result->href,true,-1); ?>
                <div class="article_list_title">
                    <div class="addthis_toolbox addthis_default_style" addthis:url="<?php echo  $completeUrl ?>" addthis:title="<?php echo $this->escape($result->title); ?>">
                        <a class="addthis_button_twitter"></a>
                        <a class="addthis_button_facebook"></a>
                        <a class="addthis_button_linkedin"></a>
                        <a class="addthis_button_google_plusone_share"></a>
                        <a class="addthis_button_compact"></a>
                    </div>
                    <a href="<?php echo JRoute::_($result->href); ?>"><?php echo $this->escape($result->title); ?></a></div>
                <?php // if ($this->params->get('list_show_date')) : ?>
                <div class="article_list_date">
                    <?php echo JHtml::_('date', $result->displayDate, $this->escape($this->params->get('date_format', JText::_('DATE_FORMAT_LC3')))); ?>
                </div>
                <?php // endif; ?>
                <div class="article_intro_text">
                    <?php echo JHtml::_('string.truncate', $result->text, 215); ?>
                </div>
                <div class="article_read_more">
                    <a href="<?php echo JRoute::_($result->href); ?>">Leer m&aacute;s</a>
                </div>
            </td>       

        </tr>
            <?php endforeach; ?>

        </tbody>

    </table>

<div class="pagination">
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>
