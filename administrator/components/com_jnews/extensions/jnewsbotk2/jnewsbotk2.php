<?php
defined('_JEXEC') OR die('...Direct Access to this location is not allowed...');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* @copyright Copyright (C) 2009 Joobi Limited All rights reserved.
* @license This file is released under the GPL license (http://www.gnu.org/licenses )
* @link http://www.joobi.co
*/

JApplication::registerEvent('jnewsbot_k2editabs', 'jnewsbot_k2_editab');
JApplication::registerEvent('jnewsbot_transformall', 'jnewsbot_k2_transformall');


function jnewsbot_k2_editab() {
	$k2contentitems = jnewsbot_k2_getitems();
	ob_start();

	$js = "function setContentTag(id){
		var form = document.adminForm;
		if(!form){
			form = document.mosForm;
		}
		if(id!=null){
			for (i=0;i<form.content_type.length;i++) {
				if (form.content_type[i].checked) {
					var content_type = form.content_type[i].value;
				}
			}
			var tag = '{k2item:' + id + '|' + content_type + '}';
			form.k2tag.value = tag;
		}else{
			var tag = form.k2tag.value;";
	if( version_compare(JVERSION,'1.6.0','<') ){//1.5
		$js .= " if(window.top.insertTag(tag)){window.top.document.getElementById('sbox-window').close();}";
	}else{
		$js .= " if(window.top.insertTag(tag)) window.parent.SqueezeBox.close();";
	}
		$js .= "}
	}";
//if(window.top.insertTag(tag)){window.top.document.getElementById('sbox-window').close();}
	$doc = JFactory::getDocument();
	$doc->addScriptDeclaration($js);

?>


<style type="text/css">
table.smartcontent {
	border: 1px solid #D5D5D5;
	background-color: #F6F6F6;
	width: 100%;
	margin-bottom: 10px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	padding: 5px;
}
table.smartcontent td.key {
	background-color: #f6f6f6;
	text-align: left;
	width: 140px;
	color: #666;
	font-weight: bold;
	border-bottom: 1px solid #e9e9e9;
	border-right: 1px solid #e9e9e9;
}
</style>
<div id="element-box">
<div class="t">
<div class="t">
<div class="t"></div>
</div>
</div>
<div class="m">
<form name="adminForm" method="post" action="index.php">
<table class="smartcontent" width="100%"">
<tr>
<td width="185" class="key">
<span class="editlinktip">
<?php
	$tip = _JNEWS_AUTONEWS_TYPE_TIPS;
	$title = _JNEWS_AUTONEWS_TYPE;
	echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
?>
</span>
</td>
<td style="vertical-align: top;">
<span class="editlinktip">
<?php
	$tip = _JNEWS_TITLE_ONLY_TIPS ;
	$title = _JNEWS_TITLE_ONLY;
	$title_only = "<span class=\"editlinktip\">" . jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ) . "</span>";

	$tip = _JNEWS_INTRO_ONLY_TIPS;
	$title = _JNEWS_INTRO_ONLY;
	$intro_only = "<span class=\"editlinktip\">" . jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ) . "</span>";

	$tip = _JNEWS_FULL_ARTICLE_TIPS;
	$title = _JNEWS_FULL_ARTICLE ;
	$full_article = "<span class=\"editlinktip\">" . jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 ) . "</span>";
?>
</span>
<span class="editlinktip">
<input type="radio" name="content_type" value="0" checked="checked" /><?php echo $full_article; ?>
<input type="radio" name="content_type" value="1" /><?php echo $intro_only; ?>
<input type="radio" name="content_type" value="2" /><?php echo $title_only; ?>
</span>

</td>
<td rowspan="2">
			<input onclick="setContentTag(null)" class="inserttag" type="button" label="Insert Tag" name="Insert Tag" value="<?php echo _JNEWS_TAG_INSERT_TAG; ?>"/>
		</td>
</tr>

<tr>
	<td width="185" class="key">
		<span class="editlinktip">
			Tag
		</span>
	</td>
	<td style="vertical-align: top;">
		<!-- 	<input type="text" onchange="setCaptionTags();" size="60px" name="jnewstagcaption"> -->
			<input type="text" size="60px" name="k2tag">
	</td>
</tr>
</table>
<div id="element-box">
<div class="t">
<div class="t">
<div class="t"></div>
</div>
</div>
<div class="m">
<table class="<?php echo jnews::myTheme(); ?>" cellpadding="0" cellspacing="0">
<tbody>
<thead>
<tr>
<th class="title">
<?php echo _JNEWS_TAGPICKLIST_TITLE; ?>
</th>
<th width="80px" class="title">
<?php echo _JNEWS_TAG_ARTICLESECTION; ?>
</th>
<th width="80px" class="title">
<?php echo _JNEWS_TAG_ARTICLECATEGORY; ?>
</th>
<th width="30px" class="title">
ID
</th>
</tr>
</thead>
<?php

	if(sizeof($k2contentitems) > 0){
		$k = 0;
		foreach($k2contentitems as $k2contentitem){
			if (empty($k2contentitem->section)) $k2contentitem->section = JText::_('Uncategorised');
			if (empty($k2contentitem->category)) $k2contentitem->category = JText::_('Uncategorised');
			echo '<tr style="cursor:pointer" class="row'.$k.'" onclick="setContentTag(\''.$k2contentitem->id.'\');" ><td>'.$k2contentitem->title.'</td><td nowrap="nowrap" align="center">'.$k2contentitem->section.'</td><td nowrap="nowrap" align="center">'.$k2contentitem->category.'</td><td nowrap="nowrap" align="center">'.$k2contentitem->id.'</td></tr>';
			$k = 1-$k;
		}
	}
?>
</tbody>
</table>
</form>
</div>
<div class="b">
<div class="b">
<div class="b"></div>
</div>
</div>
</div>
</div>
<div class="b">
<div class="b">
<div class="b"></div>
</div>
</div>
</div>
<?php
	$return = ob_get_contents();
	ob_end_clean();
	return array(_JNEWS_CONTENT_ITEM, $return);
}

function jnewsbot_k2_getitems() {
	$database= JFactory::getDBO();

	$query = "SELECT a.id as id, a.title as title, b.name as category FROM #__k2_items as a LEFT JOIN #__k2_categories AS b ON a.catid = b.id ORDER BY a.catid, a.created DESC LIMIT 5000";
	$database->setQuery($query);
	$k2items = $database->loadObjectList();
	return $k2items;
}

function jnewsbot_k2_transformall( &$html, &$text, &$subject, $queueInfo=null ) {
	$mainframe = JFactory::getApplication();
	$livesite=$mainframe->getCfg("live_site");
	$sef=$mainframe->getCfg("sef");
	$k2_items = array();
	preg_match_all('/\{k2item:(.{1,8})\|(.{1})}/', $html, $k2_items, PREG_SET_ORDER);
	foreach ($k2_items as $k2_item) {

		//j15
		if( version_compare(JVERSION,'1.6.0','<') ) $Itemid = $mainframe->getItemId($k2_item[1]);

		if(empty($Itemid)){
			$Itemid = $GLOBALS[JNEWS.'itemidAca'];
		}
		$replacement = jnewsbot_k2_getitem($k2_item[1]);
		if ($GLOBALS[JNEWS.'show_author'] == 1){
			$author = '<br />'.$replacement->created_by_alias;
		}else{
			$author = '';
		}

		$replacement->introtext = str_replace('{mospagebreak}', '<div style="clear: both;" ><div />', $replacement->introtext);
		$replacement->fulltext = str_replace('{mospagebreak}', '<div style="clear: both;" ><div />', $replacement->fulltext);

		if ($k2_item[2] == 0) {
			$html = str_replace($k2_item[0], '<div class="aca_content"><span class="aca_title">' . $replacement->title . '</span>' . "\r\n" . $author .'<br />' . $replacement->introtext . '<br />' . "\r\n" . $replacement->fulltext . "\r\n".'</div>', $html);
		} else {
			if ($GLOBALS[JNEWS.'use_sef'] == '1' AND $sef == '1' AND function_exists('sefRelToAbs')) {
				$link = sefRelToAbs('index.php?option=com_k2&view=item&id='.$k2_item[1].'&Itemid='.$Itemid);
			} else {
				$link = $livesite.'/index.php?option=com_k2&view=item&id='.$k2_item[1].'&Itemid='.$Itemid;
			}

			if ($k2_item[2] == 1) {
				$html = str_replace($k2_item[0], '<div class="aca_content"><span class="aca_title">' . $replacement->title . '</span>' . "\r\n" . $author .'<br />' . $replacement->introtext . '<br />' . "\r\n" . '<a href="' . $link . '"><span class="aca_readmore">' . _JNEWS_READMORE . '</span></a>' . "\r\n".'</div>', $html);
			}else {
				$html = str_replace($k2_item[0], '<a href="' . $link . '"><span class="aca_title">' . $replacement->title . '</span></a>', $html);
			}
		}

		$image = jnewsbot_k2_getimage($replacement->image);

		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
			$imgfolders = '/images/stories';
		}else{ //j16
			$imgfolders = '/images/sampledata';
		}

		foreach($image as $image) {
			$image_string = '<img src="' . $livesite . $imgfolders . $image['image'] . '" align="' . $image['align'] . '" alt="' . $image['alttext'] . '" border="' . $image['border'] . '" />';
			$html = preg_replace('/{mosimage}/', $image_string, $html, 1);
		}

	}

	$k2_items = array();
	preg_match_all('/\{k2item:(.{1,5})\|(.{1})}/', $text, $k2_items, PREG_SET_ORDER);
	foreach ($k2_items as $k2_item) {

		//j15
		if( version_compare(JVERSION,'1.6.0','<') )  $Itemid = $mainframe->getItemId($k2_item[1]);

		if(empty($Itemid)){
			$Itemid = $GLOBALS[JNEWS.'itemidAca'];
			}
		$replacement = jnewsbot_k2_getitem($k2_item[1]);
		if ($GLOBALS[JNEWS.'show_author'] == 1){
			$author = "\r\n".$replacement->created_by_alias;
		}else{
			$author = '';
		}

		$replacement->title = strtoupper(jNews_ProcessMail::htmlToText($replacement->title));
		$replacement->introtext = jNews_ProcessMail::htmlToText($replacement->introtext);
		$replacement->fulltext = jNews_ProcessMail::htmlToText($replacement->fulltext);
		if ($k2_item[2] == 0) {
			$text = str_replace($k2_item[0], $replacement->title . $author . "\r\n" . $replacement->introtext . "\r\n" . $replacement->fulltext . "\r\n", $text);
		} else {
			if ($GLOBALS[JNEWS.'use_sef'] == '1' AND $sef == '1' AND function_exists('sefRelToAbs')) {
				$link = sefRelToAbs('index.php?option=com_k2&view=item&id='.$k2_item[1].'&Itemid='.$Itemid);
			} else {
				$link = $livesite.'/index.php?option=com_k2&view=item&id='.$k2_item[1].'&Itemid='.$Itemid;
			}

			if ($k2_item[2] == 1) {
				$text = str_replace($k2_item[0], $replacement->title . $author . "\r\n" . $replacement->introtext . "\r\n" . '* ' . _JNEWS_READMORE . ' ( '. $link . ' )' . "\r\n", $text);
			}else {
				$text = str_replace($k2_item[0], $replacement->title . ' ( ' . $link . ' )', $text);
			}
		}
		$text = str_replace('{mosimage}', '', $text);
	}

	$html = str_replace('{mospagebreak}', '<div style="clear: both;" ><div />', $html);
	$text = str_replace('{mospagebreak}', "\r\n \r\n", $text);

}


function jnewsbot_k2_getitem($id) {
	$database= JFactory::getDBO();
	$k2_items=null;
	$query = "SELECT a.title as title, a.catid as catid, a.introtext as introtext, b.name as name, a.created_by_alias as created_by_alias, a.fulltext as 'fulltext', a.gallery as image FROM #__k2_items as a LEFT JOIN #__users as b ON a.created_by = b.id WHERE a.id = $id";
	$database->setQuery($query);
	$k2_items = $database->loadObject();

	if(empty($k2_items)) return false;

	if( empty($k2_items->created_by_alias)) $k2_items->created_by_alias = $k2_items->name;

	if(get_magic_quotes_runtime()) {
		if (!empty($k2_items->title))$k2_items->title = stripslashes($k2_items->title);
		if (!empty($k2_items->introtext))$k2_items->introtext = stripslashes($k2_items->introtext);
		if (!empty($k2_items->fulltext))$k2_items->fulltext = stripslashes($k2_items->fulltext);
		if (!empty($k2_items->image))$k2_items->image = stripslashes($k2_items->image);
		if (!empty($k2_items->created_by_alias))$k2_items->created_by_alias = stripslashes($k2_items->created_by_alias);
		if (!empty($k2_items->catid))$k2_items->catid = stripslashes($k2_items->catid);
	}
		return $k2_items;
}

function jnewsbot_k2_getimage($image) {
	$first = @explode("\n",$image);

	for($i=0, $n=count($first); $i < $n; $i++) {
		$second = explode('|',$first[$i] . '|||');
		$third[$i]['image'] = $second[0];
		$third[$i]['align'] = $second[1];
		$third[$i]['alttext'] = $second[2];
		$third[$i]['border'] = $second[3];
	}
	return $third;
}