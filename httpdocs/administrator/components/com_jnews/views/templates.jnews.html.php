<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Template view</p>
* <p>This class contains functions to create the template view</p>
* @author Joobi Limited <wwww.joobi.co>
*/
class jNews_TemplatesHTML {

	public static function displayTemplateList($templates, $forms, $start, $limit, $templatesearch, $action, $setLimit=null, $setSort=null){
		$hidden = '<input type="hidden" name="option" value="'.JNEWS_OPTION.'" />';
	   	$hidden .= '<input type="hidden" name="limit" value="'.$limit.'" />';
		echo $forms['main'];

		// for search
		$toSearch = new stdClass;
		$toSearch->forms = $forms['filter'];
		$toSearch->hidden = $hidden;
		$toSearch->listsearch = $templatesearch;
		$toSearch->id = 'templatesearch';
		echo jnews::setTop( $toSearch, null, $setLimit );
		?>
		
		<script language="javascript" type="text/javascript">
		//<!--
		function jnewsletterselectall(){
			var i = 0;
			allcheck = document.getElementById("selectallcheck");
			if(allcheck.checked) checkedvalue = 1;
			else checkedvalue = 0;
	
			while(myelement = document.getElementById("cid["+i+"]")){
				myelement.checked = checkedvalue;
				i++;
			}
	
			if(checkedvalue){
				document.getElementById("boxcount").value = i;
			}else{
				document.getElementById("boxcount").value = 0;
			}
		}
		//-->
		</script>		
		
		<table class="<?php echo jnews::myTheme(); ?>">
			<thead>
				<tr>
					<th width="2%" class="title">#</th>
					<th class="title"><input type="checkbox" id="selectallcheck" name="allchecked" onclick="jnewsletterselectall();"/></th>
					<th width="12%" class="title">
					<?php echo _JNEWS_TEMPLATE_IMG; ?>
					</th>
					<th width="65%" class="title"><?php echo JHTML::_('grid.sort', _JNEWS_TEMPLATE_DESC, 'description', $setSort->orderDir,$setSort->orderValue); ?></th>
					<th width="65%" class="title"><?php echo JHTML::_('grid.sort', _JNEWS_TEMPLATE_AVLB, 'availability', $setSort->orderDir,$setSort->orderValue); ?></th>
					<th width="3%" class="title"><?php echo JHTML::_('grid.sort', _JNEWS_TEMPLATE_DEFAULT, 'premium', $setSort->orderDir,$setSort->orderValue); ?></th>
					<th width="3%" class="title"><?php echo JHTML::_('grid.sort', _JNEWS_TEMPLATE_PUBLISH, 'published', $setSort->orderDir,$setSort->orderValue); ?></th>
					<th width="2%" class="title"><?php echo JHTML::_('grid.sort', 'ID', 'template_id', $setSort->orderDir,$setSort->orderValue); ?></th>
				</tr>
			</thead>
			</form>
			<?php

				$i=$start;
				if ( !empty($templates) ) {
				foreach($templates as $template){

			?>
				<tr class="row<?php echo ($i + 1) % 2;?>">
					<td><center><?php echo $i+1; ?></center></td>

					<td align="center"><center><input type="checkbox" id="cid[<?php echo $i; ?>]" name="cid[<?php echo $i; ?>]" value="<?php echo $template->template_id; ?>" onclick="isChecked(this.checked);" /></center></td>					
					<td align="center">
						<span class="editlinktip">
							<?php
							if(empty($template->thumbnail)){
								$path=JNEWS_PATH_ADMIN_THUMBNAIL_SHOW.'sample-image.png';
								echo '<a class="modal" href="'. $path .'">'.jnews::imageResize($path , '100', '100',$template->name).'</a>';
							}

							$tmblfile=substr($template->thumbnail, 59);
							$popmainpath=substr($template->thumbnail, 0, -25);
							$filename=explode('_',$tmblfile);

							if(strpos($filename[0],'entwine') !== false){
								$filenamecolor=explode('.',$filename[1]);
								$popimgpath='http://www.joobi.co/images/newsletter_templates/'.$filename[0].DS.$filenamecolor[0].DS.$tmblfile;
							}else{
									$popimgpath='http://www.joobi.co/images/newsletter_templates/'.$filename[0].DS.$tmblfile;
							}

							$findposhttp=strpos($template->thumbnail,'http://');
							$findposwww=strpos($template->thumbnail,'www.');

							if ( ($findposhttp === false ) || ($findposwww === false) ){
								//$link = JNEWS_PATH_ADMIN_THUMBNAIL_SHOW. $template->thumbnail;
								$link = $template->thumbnail;
								echo '<a class="modal" href="'. $link .'">'. jnews::imageResize($link , '100', '100',$template->name).'</a>';
							}else{
								$link= $template->thumbnail;
								echo '<a class="modal" href="'. $popimgpath .'"><img src="'.$template->thumbnail.'" alt="'.$template->name.'"></a>';
							}
						 	?>
						</span>
					</td>
					<td><?php
						$link = JNEWS_JPATH_LIVE.'/administrator/index.php?option='.JNEWS_OPTION.'&act=templates&task=edit&template_id='. $template->template_id;
						echo '<div style="color:#4f7e11;"><a href="'.$link.'">' .$template->name.'</a></div><br><div style="text-indent:20px"> '.$template->description.'</div>';
					?></td>
					<td align="center"><?php
					if($template->availability == 1) echo _JNEWS_TEMPLATE_INS;
					if($template->availability == 0) {
						$namekey=explode('_',$template->namekey);
						$link='http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=newsletter_template_'.$namekey[0];
						echo '<a href="'.$link.'">'._JNEWS_TEMPLATE_DWN.'</a>';
					}
					if($template->availability== -1){
						$link='http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=newsletter_template_'.$template->namekey;
						echo '<a href="'.$link.'">'._JNEWS_TEMPLATE_FDWN.'</a>';
					}
					?></td>
					<td align="center">
						<?php
							if ($template->premium)
							{
								echo '<img src="'.JNEWS_PATH_ADMIN_IMAGES.'16/default.png" title="Default" alt="Default">';
								jnews::getLegend( 'default.png', _JNEWS_TEMPLATE_DEFAULT );
							}else {
								$status = ( !empty($template->premium) && ( $template->premium == 1 ) ) ? '' : 'default';
								$link = jnews::createToggleLink( 'templates', $status, 'template_id' , $template->template_id, 'togle' );

								echo '<a href="'. $link .'"> <b>-</b> </a>';
							}
						?>
					</td>
					<td align="center">
						 <?php
						 	//for publish/unpublish
							if ($template->published == 1) {
								$img = '16/status_g.png';
								$alt = 'Published';
								jnews::getLegend( 'status_g.png', _JNEWS_TEMPLATE_PUBLISH );
							} else {
								$img = '16/status_r.png';
							  	$alt = 'Unpublished';
							  	jnews::getLegend( 'status_r.png', _JNEWS_UNPUBLISHED );
							}
						 	if ($template->premium){
						 		echo '<img src="'. JNEWS_PATH_ADMIN_IMAGES.$img .'" alt="'.$alt.'" title="'. $alt .'">';
						 	}else{
						 		$status = ( !empty($template->published) && ( $template->published == 1 ) ) ? 'unpublish' : 'publish';
						 		$link = jnews::createToggleLink( 'templates', $status, 'template_id' , $template->template_id, 'togle' );

						 		echo '<a href="'. $link .'"> <img src="'. JNEWS_PATH_ADMIN_IMAGES.$img .'" alt="'.$alt.'" title="'. $alt .'"> </a>';
						 	}
						 ?>
					</td>
					<td align="center"><?php echo $template->template_id;?></td>
				</tr>
			<?php $i=$i+1;
				}
			}
			?>
		</table>
		<?php

		echo '<br />';
		echo jnews::setLegend();
	}//endfunction

	public static function previewTemplate($template , $forms){

			echo $forms['main'];  ?>
			<fieldset class="adminform" width="100%" id="htmlfieldset">
			<legend><?php echo 'Template'; ?></legend>
			<div class="newsletter_content" ><?php echo $template; ?></div>
			</fieldset>
		<?php
	}

	public static function createTemplate( &$template, $form ) {
	 	if ( !class_exists('JHtmlBehavior') ) jimport('joomla.html.html.behavior');
		
		$tagjs = "function insertTag(tag){ try{if(jInsertEditorText(tag,'template_body')){ return true;}else{jInsertEditorText(tag,'alt_body'); return true}} catch(err){alert('Your editor does not enable jNews to automatically insert the tag, please copy/paste it manually in your Newsletter'); return false;}}";

		//we change the permission of the template
		//if we not change the permission to writable(755) the images won't show
		@$mediacomjNewsTemplatesdir = JNEWS_JPATH_ROOT_NO_ADMIN .DS. 'media'.DS. JNEWS_OPTION .DS. 'templates'.DS.$template->namekey;
		@chmod(JNEWS_JPATH_ROOT_NO_ADMIN .DS. 'media'.DS. JNEWS_OPTION .DS. 'templates'.DS.$template->namekey, 0755);
		
		$template->name = ( isset($template->name) ) ? $template->name : '';
		$template->namekey = ( isset($template->namekey) ) ? $template->namekey : '';
		$template->published = ( isset($template->published) ) ? $template->published : 0;
		$template->premium = ( isset($template->premium) ) ? $template->premium : 0;
		$template->thumbnail = ( isset($template->thumbnail) ) ? $template->thumbnail : '';
		$template->description = ( isset($template->description) ) ? $template->description : '';
		$template->availability = ( isset($template->availability) ) ? $template->availability : '1';
		$template->body = ( isset($template->body) ) ? $template->body : '';
		$template->altbody = ( isset($template->altbody) ) ? $template->altbody : '';
		$template->styles = (isset($template->styles)) ? $template->styles : '';
		$template->csstyle = (isset($template->csstyle)) ? $template->csstyle : '';

		$editor = JFactory::getEditor();
//		if(!$GLOBALS[JNEWS.'disabletooltip']){
			JHTML::_('behavior.tooltip');

			$text = str_replace('"', '&quot;' , $template->name);
			$namekey = str_replace('"', '&quot;' , $template->namekey);
			if (function_exists('htmlspecialchars_decode')) {
				$text = htmlspecialchars_decode( $text , ENT_NOQUOTES);
				$namekey = htmlspecialchars_decode( $namekey , ENT_NOQUOTES);
			} elseif (function_exists('html_entity_decode')) {
				$text = html_entity_decode( $text , ENT_NOQUOTES);
				$namekey = html_entity_decode( $namekey , ENT_NOQUOTES);
			}
			$readOnlyNamekey = ( !empty($namekey) ) ? 'READONLY' : '';
			$styles = $template->styles;
			$styles['color_bg'] = (!empty($styles) && isset($styles['color_bg'])) ? $styles['color_bg'] : '#FFFFFF';
			$styles['cssfile'] = (!empty($styles) && isset($styles['cssfile'])) ? $styles['cssfile'] : '';
			$templateHTML['name'] = '<input type="text" name="template_name" class="inputbox" size="40" maxlength="64" value="' . $text .'" />';
			$templateHTML['namekey'] = '<input type="text" name="template_namekey" class="inputbox" size="40" maxlength="64" value="' . $namekey .'" '.$readOnlyNamekey.' />';
			$templateHTML['publish'] = JHTML::_('select.booleanlist', 'confirmed', 'class="inputbox"', $template->published );
			$templateHTML['premium'] = JHTML::_('select.booleanlist', 'premium', 'class="inputbox"', $template->premium );
			$templateHTML['bgcolor'] = jnews::colorPicker('styles[color_bg]', 15, $styles['color_bg']);
			$templateHTML['thumbnail'] = jNews_TemplatesHTML::_attachment( $template->thumbnail );
			$templateHTML['description'] = '<br/><textarea rows="5" cols="45" name="description">'.$template->description.'</textarea><br/>';
			unset($styles['cssfile']);
			$templateHTML['cssfile'] = '<div id="cssfile" style="display:none;"><input type="text" name="styles[cssfile]" style="margin: 2px 0 2px 2px;" class="inputbox" size="45" value="'.jNews_Templates::escapeVal(@$styles['cssfile']).'" />';
			$templateHTML['cssfile'] .= '<input type="button" onclick="javascript:hideMainMenu(); submitbutton(\'apply\')" style="margin: 2px 0 2px 2px;" name="Process External CSS" class="button" value="'._JNEWS_EXTERNALCSS_PROCESS.'"></div>';

//		}

		//remove empty classname
		unset($styles['']);

			echo $form['main'];
		?>
			<table cellpadding="1" cellspacing="0" border="0" width="99%">
				<tbody>
					<tr>
						<td width="20%" valign="top">
							<fieldset style="margin-top:7px;">
								<?php
									echo jnews::beginingOfTable('jnewstable');
									echo jnews::miseEnHTML( _JNEWS_TEMPLATE_NAME , _JNEWS_TEMPLATE_NAME_T, $templateHTML['name']);
									echo jnews::miseEnHTML( _JNEWS_TEMPLATE_ALIAS , _JNEWS_TEMPLATE_NAMEKEY_T , $templateHTML['namekey']);
									echo jnews::miseEnHTML( _JNEWS_TEMPLATE_PUBLISH , _JNEWS_TEMPLATE_PUBLISH_T ,$templateHTML['publish']);
									echo jnews::miseEnHTML( _JNEWS_TEMPLATE_DEFAULT , _JNEWS_TEMPLATE_DEFAULT_T ,$templateHTML['premium']);
									echo jnews::miseEnHTML( _JNEWS_TEMPLATE_BG , _JNEWS_TEMPLATE_BG_T ,$templateHTML['bgcolor']);
									echo jnews::miseEnHTML( _JNEWS_TEMPLATE_UPLOAD ,_JNEWS_TEMPLATE_UPLOAD_T ,$templateHTML['thumbnail']);
									echo jnews::miseEnHTML( _JNEWS_TEMPLATE_DESC , _JNEWS_TEMPLATE_DESC_T ,$templateHTML['description']);
									echo jnews::endOfTable();
							 ?>
							</fieldset>
						</td>
						<td width="49%" valign="top">
								<?php

									$switchjs = 'function switchContent() {
										        	var option=[\'jNewsStyles\',\'jNewsCSSTextbox\'];
										        	for(var i=0; i<option.length; i++){
											        	obj=document.getElementById(option[i]);
											        	obj.className=(obj.className=="visible")? "hidden" : "visible";
											       	}
											       	var form = document.adminForm;
											       	if(form.stylechosen.value == \'0\'){form.stylechosen.value = 1}else{form.stylechosen.value = 0}
										       	 }
										        function showInput() {
													var el = document.getElementById(\'cssfile\');
													if ( el.style.display != \'none\' ) {
														el.style.display = \'none\';
													}
													else {
														el.style.display = \'\';
														el.focus();
													}
												}';
									$jnewscss = '.visible {display:block;}
											     .hidden {display:none;}';

									$doc = JFactory::getDocument();
									$doc->addScriptDeclaration($switchjs.$tagjs);
									$doc->addStyleDeclaration($jnewscss);
									echo '<a name="cssfileindex">';
									jNews_TemplatesHTML::_styles($styles);//add the specific style
									echo '</a>';
									echo '<div id="jNewsCSSTextbox" style="padding: 4px;" class="hidden">'.jNews_TemplatesHTML::_csstextbox( $template->csstyle ).'</div>';
									echo '<div class="button2-left">';
									echo '<div class="blank"><a href="#" style="cursor: hand;" onclick="switchContent()" title="Toggle Template Styling" >'._JNEWS_CSS_TOGGLESTYLE.'</a></div>';
									echo '</div>';
//									echo '<div class="button2-left">';
//									echo '<div class="blank"><a href="#cssfileindex" style="cursor: hand;" onclick="showInput()" title="Click to Input External CSS" >'._JNEWS_EXTERNALCSS_LINK.'</a></div>';
//									echo '</div>';
									echo $templateHTML['cssfile'];
								?>
						</td>
					</tr>
					<tr>
						<td colspan="2" width="100%">
							<fieldset class="jnewscss">
								<legend>
									<?php echo _JNEWS_HTML_VERSION; ?>
								</legend>
								<?php echo $editor->display( 'template_body',  $template->body , '99%', '800', '75', '50', true ) ;?>
							</fieldset>
							<fieldset class="jnewscss">
								<legend><?php echo _JNEWS_NONHTML_VERSION; ?></legend>
								<textarea name="alt_body" rows="20" cols="70" style="width: 100%; height: 400px;"><?php echo $template->altbody ; ?></textarea>
							</fieldset>
						</td>
					</tr>
				</tbody>
			</table>
		<?php
		echo JHTML::_('behavior.keepalive');
	}


	/* public static function that will create attachments of files
	 * @param $fieldName - name of the field for REQUEST purpose
	 * @return text
	*/
	public static function _attachment( $thumbnail ){
		$display = '<script src="'.JNEWS_URL_INCLUDES .'multifile.js"></script>
			<input id="my_file_element" type="file" name="file_1" > </input>

			<br /><b>'. _JNEWS_FILES .':</b>

			<div id="files_list"></div>
			<script>

				var multi_selector = new MultiSelector( document.getElementById( "files_list" ), 1 );
				multi_selector.addElement( document.getElementById( "my_file_element" ) );
			</script>';

		if( !empty($thumbnail) ){
       		//$path = JNEWS_PATH_ADMIN_THUMBNAIL_SHOW. $thumbnail;
       		$path = $thumbnail;
			$img = jnews::imageResize($path , '200' , '200', $thumbnail);
			$display .= '<br>'.$img;
			$display .= '<br>'. jNews_Tools::toolTip( $img , $thumbnail, '', '', $thumbnail );
		}

		return $display;
	}

	/**
	 * <p>public static function for the CSS textbox</p>
	 * @param string $styles - the styles of the template
	 * return mixed
	 */
	public static function _csstextbox($styles=''){
//		if (isset($styles['color_bg'])) unset($styles['color_bg']);
		$textarea = '';
		$textarea .= '<fieldset class="adminform" width="100%"><legend>Styles</legend><center>';
		$textarea .= '<textarea class="textarea" cols="83" rows="25" name="template_customcss">';
		$textarea .= $styles;
//		$textarea .= sizeof($styles > 0) ? jNews_Templates::convertArrayStyles($styles) : _JNEWS_CUSTOMCSS;
		$textarea .= '</textarea></center></fieldset>';
		return $textarea;
	}

	public static function _styles($styles){
			$script = 'function addNewStyle() {
								var divnewstyle=window.document.getElementById("divnewstyle");
								var input = document.createElement(\'input\');
								var input2 = document.createElement(\'input\');
								input.type = \'text\';
								input2.type = \'text\';
								input.size = \'30\';
								input2.size = \'30\';
								input.name = \'otherstyles[classname][]\';
								input2.name = \'otherstyles[style][]\';
								input.setAttribute(\'style\', \'margin-top:4px;\');
								input2.setAttribute(\'style\', \'margin-top:4px; margin-left: 68px;\');
								input.value = "'._JNEWS_TEMPLATE_STYLE_NEWC.'";
								input2.value = "'._JNEWS_TEMPLATE_STYLE_NEWAPPLIED.'";
								divnewstyle.appendChild(document.createElement(\'br\'));
								divnewstyle.appendChild(input);
								divnewstyle.appendChild(input2);}

					function removeStyle( child ) {
							  var child = document.getElementById(\'child\');
					          var parent = document.getElementById(\'jNewsStyles\');
					          parent.removeChild(\'child\');
						}';
				$doc = JFactory::getDocument();
				$doc->addScriptDeclaration( $script);
		?>
		<div id="jNewsStyles" class="visible">
		<input type="hidden" value="0" name="stylechosen">
		<fieldset class="adminform" width="100%">
					<legend><?php echo 'Styles';?> </legend>
					<table width="100%">
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['style_h1']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_TH1; ?></span></td>
							<td><input type="text" size="50" name="styles[style_h1]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_h1']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['style_h2']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_TH2; ?></span></td>
							<td><input type="text" size="50" name="styles[style_h2]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_h2']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['style_h3']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_TH3; ?></span></td>
							<td><input type="text" size="50" name="styles[style_h3]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_h3']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['style_h4']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_TH4; ?></span></td>
							<td><input type="text" size="50" name="styles[style_h4]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_h4']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['style_h5']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_TH5; ?></span></td>
							<td><input type="text" size="50" name="styles[style_h5]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_h5']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['style_h6']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_TH6; ?></span></td>
							<td><input type="text" size="50" name="styles[style_h6]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_h6']); ?>"/></td>
						</tr>
						<tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['style_a']);?>">a</span></td>
							<td><input type="text" size="50" name="styles[style_a]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_a']); ?>"/></td>
						</tr>
						<tr>
							<td><ul style="<?php echo jNews_Templates::escapeVal(@$styles['style_ul']);?>"><li style="<?php echo jNews_Templates::escapeVal(@$styles['style_li']);?>">ul</li><li style="<?php echo jNews_Templates::escapeVal(@$styles['style_li']);?>">li</li></ul></td>
							<td><input type="text" size="50" name="styles[style_ul]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_ul']); ?>"/>
							<br/><input type="text" size="50" name="styles[style_li]" value="<?php echo jNews_Templates::escapeVal(@$styles['style_li']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['aca_unsubscribe']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_UNSUB; ?></span></td>
							<td><input type="text" size="50" name="styles[aca_unsubscribe]" value="<?php echo jNews_Templates::escapeVal(@$styles['aca_unsubscribe']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['aca_subscribe']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_SUB; ?></span></td>
							<td><input type="text" size="50" name="styles[aca_subscribe]" value="<?php echo jNews_Templates::escapeVal(@$styles['aca_subscribe']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['aca_content']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_CONTENT; ?></span></td>
							<td><input type="text" size="50" name="styles[aca_content]" value="<?php echo jNews_Templates::escapeVal(@$styles['aca_content']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['aca_title']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_CHEAD; ?></span></td>
							<td><input type="text" size="50" name="styles[aca_title]" value="<?php echo jNews_Templates::escapeVal(@$styles['aca_title']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['aca_readmore']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_CREADMORE; ?></span></td>
							<td><input type="text" size="50" name="styles[aca_readmore]" value="<?php echo jNews_Templates::escapeVal(@$styles['aca_readmore']); ?>"/></td>
						</tr>
						<tr>
							<td><span style="<?php echo jNews_Templates::escapeVal(@$styles['aca_online']);?>"><?php echo _JNEWS_TEMPLATE_STYLE_VONLINE; ?></span></td>
							<td><input type="text" size="50" name="styles[aca_online]" value="<?php echo jNews_Templates::escapeVal(@$styles['aca_online']); ?>"/></td>
						</tr>
						<?php
							if ($GLOBALS[JNEWS.'show_jcalpro'] and class_exists('jNews_Pro')){
								$jcal .= '';
								$jcal .= '<tr><td><span style="'.jNews_Templates::escapeVal(@$styles['aca_jcalcontent']).'">'. _JNEWS_TEMPLATE_STYLE_JCALCONTENT.'</span></td>';
								$jcal .= '<td><input type="text" size="30" name="styles[aca_jcalcontent]" value="'.jNews_Templates::escapeVal(@$styles['aca_jcalcontent']).'"/></td></tr>';
								$jcal .= '<tr><td><span style="'.jNews_Templates::escapeVal(@$styles['aca_jcaltitle']).'">'. _JNEWS_TEMPLATE_STYLE_JCALTITLE.'</span></td>';
								$jcal .= '<td><input type="text" size="30" name="styles[aca_jcaltitle]" value="'.jNews_Templates::escapeVal(@$styles['aca_jcaltitle']).'"/></td></tr>';
								echo $jcal;
								unset($styles['aca_jcalcontent']);unset($styles['aca_jcaltitle']);
							}

						?>
						<?php

						unset($styles['aca_unsubscribe']); unset($styles['aca_subscribe']); unset($styles['aca_content']);
						unset($styles['aca_title']); unset($styles['aca_readmore']); unset($styles['aca_online']);
						unset($styles['style_a']);unset($styles['style_ul']);unset($styles['style_li']);unset($styles['style_h1']);
						unset($styles['style_h2']);unset($styles['style_h3']);unset($styles['style_h4']);
						unset($styles['style_h5']); unset($styles['style_h6']);unset($styles['color_bg']);

						if(!empty($styles) && $GLOBALS[JNEWS.'level'] > 2){
							foreach($styles as $className => $style){
							?>
								<tr>
									<td>
										<span id="jnews<?php echo $className;?>" style="<?php echo jNews_Templates::escapeVal($style);?>"><?php echo $className ?></span>
									</td>
									<td>
										<input id="jnews<?php echo $className;?>" type="text" size="50" name="styles[<?php echo $className; ?>]" value="<?php echo jNews_Templates::escapeVal($style); ?>"/>
									</td>

								</tr>
							<?php

						}
						}?>
						<tr>
					</table>
					<?php if($GLOBALS[JNEWS.'level'] > 2){ ?>
					<div id="divnewstyle"></div>
					<a href="javascript:void(0);" onclick='addNewStyle()'><?php echo _JNEWS_TEMPLATE_STYLE_NEW; ?></a>
					<?php } ?>
				</fieldset>
				</div>

		<?php
	}//enfct
	
/**
	 * <p>public static function to create the view of the template list where the user can assign a template to a newsletter.</p>
	 * @param mixed $templates - the array object list of templates in the database
	 */
	 public static function assignTemplate($templates, $forms, $setLimit, $templatesearch){
	 	JHTML::_('behavior.modal');
	 	JHTML::_('behavior.mootools');
	 	
	 	$action = JRequest::getString('act', '', 'request');
	 	$js = "function assignTemplate(templateid){var templatebody = window.document.getElementById('templatebody_'+templateid).innerHTML;
	 	var templatealtbody = window.document.getElementById('templatealtbody_'+templateid).innerHTML;
	 	window.top.changeTemplate(templatebody, templatealtbody,templateid);";
		if( version_compare(JVERSION,'1.6.0','<') ){//1.5
			$js .= " window.top.document.getElementById('sbox-window').close();";
		}else{
			$js .= " window.parent.SqueezeBox.close();";
		}
		$js .="}";

	 	$doc = JFactory::getDocument();
		$doc->addScriptDeclaration( $js );
	 	?>
	  	<style type="text/css">
	  	div#pagination {
	  		background-color: #006699;
	  		margin: auto;
	  		padding: 0 8px;
	  		color: #FFFFFF;
	  	}

	  	div.template-container {
	  		border-bottom: 1px dotted #000000;
	  		padding: 5px;
	  		margin-top: 10px;
	  		float: left;
	  		width: 596px;
	  		cursor:pointer;
	  	}
	  	div.template-container:hover {
	  		background-color: #CCFFFF;
	  	}

	  	div.template-container div#image {
	  		float:left;
	  		margin-right: 5px;
	  	}

	  	div.template-container div#name {
	  		clear: right
	  		border: 1px solid #000;
	  		font-weight: bold;
	  		font-size: 1.2em;
	  	}

	  	div.template-container div#description {
	  		margin-top: 5px;
	  	}

	  	</style>
	  	<?php echo $forms['main']; ?>
		<div id="pagination">
		<?php
			// for search
			$limit = -1;
	   		$hidden = '<input type="hidden" name="limit" value="'.$limit.'" />';
			$toSearch = new stdClass;
			//$toSearch->forms = '';
			$toSearch->hidden = $hidden;
			$toSearch->listsearch = $templatesearch;
			$toSearch->id = 'templatesearch';

			//echo jnews::setTop($toSearch, null, $setLimit, null, true);
			echo jnews::setTop($toSearch, null);
		?>
		</div>
	 	<?php

	 	foreach( $templates as $countMeNow => $template ) {
	 			
			 if($template->availability==1 && $template->published == 1){
	 			if (empty($template->thumbnail)) $template->thumbnail = 'sample-image.png';

				$findposhttp=strpos($template->thumbnail,'http://');
				$findposwww=strpos($template->thumbnail,'www.');
				if ( ($findposhttp === false ) || ($findposwww === false) ){
					$path = $template->thumbnail;
					$img = '<img src="'.$path.'" alt="'.$template->name.'">';
				}else{
					$path= $template->thumbnail;
					$img = '<img src="'.$path.'" alt="'.$template->name.'">';
				}

	 	?>
			<div class="template-container" onclick="assignTemplate(<?php echo $template->template_id;?>);">
				<div id="image"><?php echo $img; ?></div>
				<div id="name" style="text-indent:10px"><?php echo $template->name; ?></div>
				<div id="description" style="text-indent:25px" ><?php echo jnews::stringTruncate($template->description, 400, ".", "..."); ?></div>
				<div id="templatebody_<?php echo $template->template_id;?>" style="display:none;"><?php echo $template->body; ?></div>
				<div id="templatealtbody_<?php echo $template->template_id;?>" style="display:none;"><?php echo $template->altbody; ?></div>
			</div>
		<?php
	 		}
	 		
	 	}
	 	
	 	$css = 'margin:auto;';
		echo jnews::setPaginationBot($setLimit, $css);
	 	?>
	 	<input type="hidden" value="<?php echo JNEWS_OPTION; ?>" name="option"/>
		<input type="hidden" value="<?php echo $action; ?>" name="act"/>
		<input type="hidden" value="assign" name="task"/>
    	<input type="hidden" value="0" name="boxchecked" id="boxcount"/>

		</form>
	 	<?php
	 }

 }
