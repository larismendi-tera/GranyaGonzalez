<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_media
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
$user = JFactory::getUser();
?>
<script type='text/javascript'>
var image_base_path = '<?php $params = JComponentHelper::getParams('com_media');
echo $params->get('image_path', 'images');?>/';
<?php if (defined('COM_MEDIA_RELATIVE_BASEURL')):?>
image_base_path = '<?php echo COM_MEDIA_RELATIVE_BASEURL; ?>';
<?php endif;?>
</script>

<form action="index.php?option=com_media&amp;asset=<?php echo JRequest::getCmd('asset');?>&amp;author=<?php echo JRequest::getCmd('author');?>" id="imageForm" method="post" enctype="multipart/form-data">
	<div id="messages" style="display: none;">
		<span id="message"></span><?php echo JHtml::_('image', 'media/dots.gif', '...', array('width' =>22, 'height' => 12), true)?>
	</div>
	<fieldset>
		
		<div class="fltrt">
			<button type="button" onclick="<?php if ($this->state->get('field.id')):?>window.parent.jInsertFieldValue(document.id('f_url').value,'<?php echo $this->state->get('field.id');?>');<?php else:?>ImageManager.onok();<?php endif;?>window.parent.SqueezeBox.close();"><?php echo JText::_('COM_MEDIA_INSERT') ?></button>
			<button type="button" onclick="window.parent.SqueezeBox.close();"><?php echo JText::_('JCANCEL') ?></button>
		</div>
	</fieldset>

	<iframe id="imageframe" name="imageframe" src="index.php?option=com_media&amp;view=imagesList&amp;tmpl=component&amp;folder=<?php echo $this->state->folder?>&amp;asset=<?php echo JRequest::getCmd('asset');?>&amp;author=<?php echo JRequest::getCmd('author');?>"></iframe>

	<fieldset>	
	
	<table class="properties">
			<tr>
				<td><input type="hidden" id="f_url" value="" /></td>
				<?php if (!$this->state->get('field.id')):?>
					<td>
						<input type="hidden" id="f_align" value="" />
					</td>	
				<?php endif;?>
			</tr>
			<?php if (!$this->state->get('field.id')):?>
				<tr>
					<td><input type="hidden" id="f_alt" value="" /></td>
				</tr>
				<tr>
					<td><input type="hidden" id="f_title" value="" /></td>
					<td>
						<input type="hidden" id="f_caption" value=""/>
						</select>
					</td>
				</tr>
			<?php endif;?>
		</table>
	
		<input type="hidden" id="dirPath" name="dirPath" />
		<input type="hidden" id="f_file" name="f_file" />
		<input type="hidden" id="tmpl" name="component" />

	</fieldset>
</form>

<?php if ($user->authorise('core.create', 'com_media')): ?>
	<form action="<?php echo JURI::base(); ?>index.php?option=com_media&amp;task=file.upload&amp;tmpl=component&amp;<?php echo $this->session->getName().'='.$this->session->getId(); ?>&amp;<?php echo JSession::getFormToken();?>=1&amp;asset=<?php echo JRequest::getCmd('asset');?>&amp;author=<?php echo JRequest::getCmd('author');?>&amp;format=<?php echo $this->config->get('enable_flash')=='1' ? 'json' : '' ?>&amp;view=images" id="uploadForm" name="uploadForm" method="post" enctype="multipart/form-data">
		<fieldset id="uploadform">
			<legend><?php echo $this->config->get('upload_maxsize')=='0' ? JText::_('COM_MEDIA_UPLOAD_FILES_NOLIMIT') : JText::sprintf('COM_MEDIA_UPLOAD_FILES', $this->config->get('upload_maxsize')); ?></legend>
			<fieldset id="upload-noflash" class="actions">
				<label for="upload-file" class="hidelabeltxt"><?php echo JText::_('COM_MEDIA_UPLOAD_FILE'); ?></label>
				<input type="file" id="upload-file" name="Filedata[]" multiple />
				<label for="upload-submit" class="hidelabeltxt"><?php echo JText::_('COM_MEDIA_START_UPLOAD'); ?></label>
				<input type="submit" id="upload-submit" value="<?php echo JText::_('COM_MEDIA_START_UPLOAD'); ?>"/>
			</fieldset>
			<div id="upload-flash" class="hide">
				<ul>
					<li><a href="#" id="upload-browse"><?php echo JText::_('COM_MEDIA_BROWSE_FILES'); ?></a></li>
					<li><a href="#" id="upload-clear"><?php echo JText::_('COM_MEDIA_CLEAR_LIST'); ?></a></li>
					<li><a href="#" id="upload-start"><?php echo JText::_('COM_MEDIA_START_UPLOAD'); ?></a></li>
				</ul>
				<div class="clr"> </div>
				<p class="overall-title"></p>
				<?php echo JHtml::_('image', 'media/bar.gif', JText::_('COM_MEDIA_OVERALL_PROGRESS'), array('class' => 'progress overall-progress'), true); ?>
				<div class="clr"> </div>
				<p class="current-title"></p>
				<?php echo JHtml::_('image', 'media/bar.gif', JText::_('COM_MEDIA_CURRENT_PROGRESS'), array('class' => 'progress current-progress'), true); ?>
				<p class="current-text"></p>
			</div>
			<ul class="upload-queue" id="upload-queue">
				<li style="display: none"></li>
			</ul>
			<input type="hidden" name="return-url" value="<?php echo base64_encode('index.php?option=com_media&view=images&tmpl=component&fieldid='.JRequest::getCmd('fieldid', '').'&e_name='.JRequest::getCmd('e_name').'&asset='.JRequest::getCmd('asset').'&author='.JRequest::getCmd('author')); ?>" />
		</fieldset>
	</form>
<?php  endif; ?>
