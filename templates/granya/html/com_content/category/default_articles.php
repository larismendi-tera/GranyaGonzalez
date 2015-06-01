<?php
/**
 * @package   Warp Theme Framework
 * @author    YOOtheme http://www.yootheme.com
 * @copyright Copyright (C) YOOtheme GmbH
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::core();

// Create some shortcuts
$params		= &$this->item->params;
$n			= count($this->items);
$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
$imgSrcAlt = 'templates/' . $template . '/images/granya_default.png';

?>

<?php if (empty($this->items)) : ?>

<?php if ($this->params->get('show_no_articles', 1)) : ?>
    <p><?php echo JText::_('COM_CONTENT_NO_ARTICLES'); ?></p>
    <?php endif; ?>

<?php else : ?>
<form action="<?php echo htmlspecialchars(JFactory::getURI()->toString()); ?>" method="post" name="adminForm" id="adminForm">

    <?php if (($this->params->get('filter_field') != 'hide') || $this->params->get('show_pagination_limit')) :?>
    <div class="filter">

        <?php if ($this->params->get('filter_field') != 'hide') :?>
        <div>
            <label for="filter-search"><?php echo JText::_('COM_CONTENT_'.$this->params->get('filter_field').'_FILTER_LABEL'); ?></label>
            <input type="text" name="filter-search" id="filter-search" value="<?php echo $this->escape($this->state->get('list.filter')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_CONTENT_FILTER_SEARCH_DESC'); ?>" />
        </div>
        <?php endif; ?>

        <?php if (!$this->params->get('show_pagination_limit')) : ?>
        <div>
            <?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
            <?php echo $this->pagination->getLimitBox(); ?>
        </div>
        <?php endif; ?>

    </div>
    <?php endif; ?>

    <table class="zebra" border="0" cellspacing="0" cellpadding="0">

        <?php if ($this->params->get('show_headings')) : ?>
        <thead>
        <tr>

<!--            <th width="140px">-->
<!---->
<!--            </th>-->
<!---->
<!--            <th align="left">-->
<!--                --><?php //// echo JHtml::_('grid.sort', 'JGLOBAL_TITLE', 'a.title', $listDirn, $listOrder) ; ?>
<!--            </th>-->

            <?php  /*
				<?php if ($date = $this->params->get('list_show_date')) : ?>
				<th align="left" width="25%">
					<?php if ($date == "created") : ?>
						<?php echo JHtml::_('grid.sort', 'COM_CONTENT_'.$date.'_DATE', 'a.created', $listDirn, $listOrder); ?>
					<?php elseif ($date == "modified") : ?>
						<?php echo JHtml::_('grid.sort', 'COM_CONTENT_'.$date.'_DATE', 'a.modified', $listDirn, $listOrder); ?>
					<?php elseif ($date == "published") : ?>
						<?php echo JHtml::_('grid.sort', 'COM_CONTENT_'.$date.'_DATE', 'a.publish_up', $listDirn, $listOrder); ?>
					<?php endif; ?>
				</th>
				<?php endif; ?>
				
				<?php if ($this->params->get('list_show_author', 1)) : ?>
				<th align="left" width="20%"><?php echo JHtml::_('grid.sort', 'JAUTHOR', 'author', $listDirn, $listOrder); ?></th>
				<?php endif; ?>
				
				<?php if ($this->params->get('list_show_hits', 1)) : ?>
				<th align="center" width="5%"><?php echo JHtml::_('grid.sort', 'JGLOBAL_HITS', 'a.hits', $listDirn, $listOrder); ?></th>
				<?php endif; ?>
				*/
            ?>
        </tr>
        </thead>
        <?php endif; ?>

        <tbody>

            <?php foreach ($this->items as $i => $article) : ?>
            <?php $relativeUrl = ContentHelperRoute::getArticleRoute($article->id, $article->catid, $_GET["Itemid"]); ?>
            <?php $readMoreUrl = JRoute::_($relativeUrl); ?>
            
            
            <?php $completeUrl = JRoute::_($relativeUrl,true,-1); ?>
        <tr class="<?php if ($i % 2 == '0') { echo 'odd'; } else { echo 'even'; } ?>">

            <?php if (in_array($article->access, $this->user->getAuthorisedViewLevels())) : ?>

            <td class="article_preview">
                <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid, $_GET["Itemid"])); ?>">																
                    <?php echo JHTML::_('articleThumb', $article, $imgSrcAlt, 'thumb-img', 'prettyPhoto'); ?>
                </a>
            </td>

            <td class="article_info">

                <div class="article_list_title">
                    <div class="addthis_toolbox addthis_default_style" addthis:url="<?php echo $completeUrl ?>" addthis:title="<?php echo $this->escape($article->title); ?>">
                        <a class="addthis_button_twitter"></a>
                        <a class="addthis_button_facebook"></a>
                        <a class="addthis_button_linkedin"></a>
                        <a class="addthis_button_google_plusone_share"></a>
                        <a class="addthis_button_compact"></a>
                    </div>
                    <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid)) ?>"><?php echo $this->escape($article->title); ?></a></div>
                <?php // if ($this->params->get('list_show_date')) : ?>
                <div class="article_list_date">
                    <?php echo JHtml::_('date', $article->displayDate, $this->escape($this->params->get('date_format', JText::_('DATE_FORMAT_LC3')))); ?>
                </div>
                <?php // endif; ?>
                <div class="article_intro_text">
                    <?php $content = strip_tags($article->introtext); ?>
                    <?php echo  JHtml::_('string.truncate', $content, 215); ?>
                </div>
                <div class="article_read_more">
                    <a href="<?php echo $readMoreUrl ?>">Leer m&aacute;s</a>
                </div>
            </td>

            <?php /*

					<!-- >
						<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid)) . "&Itemid=" . $_GET["Itemid"]; ?>"><?php echo $this->escape($article->title); ?></a>
						<?php if ($article->params->get('access-edit')) echo JHtml::_('icon.edit', $article, $params); ?>
					</td -->

					<?php if ($this->params->get('list_show_date')) : ?>
					<td><?php echo JHtml::_('date', $article->displayDate, $this->escape($this->params->get('date_format', JText::_('DATE_FORMAT_LC3')))); ?></td>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_author', 1) && !empty($article->author )) : ?>
					<td>

						<?php
							$author =  $article->author;
							$author = ($article->created_by_alias ? $article->created_by_alias : $author);

							if (!empty($article->contactid ) &&  $this->params->get('link_author') == true) {
								echo JHtml::_('link', JRoute::_('index.php?option=com_contact&view=contact&id='.$article->contactid), $author);
							} else {
								echo $author;
							}
						?>

					</td>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_hits', 1)) : ?>
					<td align="center"><?php echo $article->hits; ?></td>
					<?php endif; ?>

					*/ ?>

            <?php else : // Show unauth links ?>

            <td colspan="4">
                <?php
                echo $this->escape($article->title).' : ';
                $menu		= JFactory::getApplication()->getMenu();
                $active		= $menu->getActive();
                $itemId		= $active->id;
                $link = JRoute::_('index.php?option=com_users&view=login&Itemid='.$itemId);
                $returnURL = JRoute::_(ContentHelperRoute::getArticleRoute($article->slug));
                $fullURL = new JURI($link);
                $fullURL->setVar('return', base64_encode($returnURL));
                ?>
                <a href="<?php echo $fullURL; ?>"><?php echo JText::_( 'COM_CONTENT_REGISTER_TO_READ_MORE' ); ?></a>
            </td>

            <?php endif; ?>

        </tr>
            <?php endforeach; ?>

        </tbody>

    </table>

    <?php // Code to add a link to submit an article. ?>
    <?php if ($this->category->getParams()->get('access-create')) : ?>

    <!-- TODO Crear un layout para esto -->
    <?php if ($this->category->id == 14): ?>
        <?php $url = JURI::base() . "2013-01-07-15-57-05/nuevo-testimonial"; ?>
            <p class="edit"><a href="<?php echo $url ?>"><?php echo JText::_('COM_CONTENT_ARTICLE_CREATE_TESTIMONIAL'); ?></a></p>
        <?php else: ?>
            <p class="edit"><?php echo JHtml::_('icon.create', $this->category, $this->category->params); ?> <?php echo JText::_('COM_CONTENT_ARTICLE_CREATE'); ?></p>
        <?php endif; ?>
    <?php  endif; ?>

    <?php if (($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
    <div class="pagination">
        <?php if ($this->params->def('show_pagination_results', 1)) : ?>
        <p class="counter">
            <?php echo $this->pagination->getPagesCounter(); ?>
        </p>
        <?php endif; ?>
        <?php echo $this->pagination->getPagesLinks(); ?>
    </div>
    <?php endif; ?>

    <input type="hidden" name="filter_order" value="" />
    <input type="hidden" name="filter_order_Dir" value="" />
    <input type="hidden" name="limitstart" value="" />

</form>
<?php endif; ?>