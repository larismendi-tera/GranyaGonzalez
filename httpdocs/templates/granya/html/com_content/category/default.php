<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

?>
<div class="category-list<?php echo $this->pageclass_sfx;?> item-page article-title static-article-layout shadowed-center">
	<h2 class="article-title shadowed-right"> 
		<a href="#"><?php echo $this->category->title; ?></a>
	</h2>

	<div class="cat-items">
		<?php echo $this->loadTemplate('articles'); ?>
	</div>

	<?php if (!empty($this->children[$this->category->id])&& $this->maxLevel != 0) : ?>
	<div class="cat-children">
		<h3>
			<?php echo JTEXT::_('JGLOBAL_SUBCATEGORIES'); ?>
		</h3>

		<?php echo $this->loadTemplate('children'); ?>
	</div>
	<?php endif; ?>
</div>
