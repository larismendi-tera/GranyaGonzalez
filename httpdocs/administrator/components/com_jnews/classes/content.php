<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_Content {
/**
 * create the layout for the articles
 * @param unknown_type $articleA
 * @param unknown_type $layout (  0, full article, 1 intro only, 2 title only )
 * @param unknown_type $format TRUE HTML, FALSE Text Only
 */
	function convertAndLayout( $articleA, $layout=1, $format=true ) {

	 if ( $format ) {
	 	$content = $this->_convertAndLayoutHTML( $articleA, $layout );
	 } else {
	 	$content = $this->_convertAndLayoutText( $articleA, $layout );
	 }
	 
	 return $content;
	 
	}	

 /**
  * @param unknown_type $articleA
  * @param unknown_type $layout (  0, full article, 1 intro only, 2 title only )
  */
	function _convertAndLayoutHTML( $articleA, $layout ) {
	 global $mainframe;
		if ( empty($layout) ) $layout = 1;
		
		foreach ($articleA as $oneArticle ) {

		if( version_compare(JVERSION,'1.6.0','<') ) $Itemid = $mainframe->getItemId($oneArticle->id);

		if(empty($Itemid)) $Itemid = $GLOBALS[JNEWS.'itemidAca'];
		 
		if ($GLOBALS[JNEWS.'show_author'] == 1){
		 	$author = '<br />'.$oneArticle->created_by_alias;
	 	} else {
	 		$author = '';
	 	}

		if ($layout == 0) {
			 $html = '<div class="aca_content"><span class="aca_title">' . $oneArticle->title . '</span>' . "\r\n" . $author .'<br />' . $oneArticle->introtext . '<br />' . "\r\n" . $oneArticle->fulltext . "\r\n".'</div>';
		 } else {

			$link = 'option=com_content&view=article&id='.$oneArticle->id.'&Itemid='.$Itemid;
			$link = jNews_Tools::completeLink($link,false,$GLOBALS[JNEWS.'use_sef']);

             if ($layout == 1) {
             	
                 if(empty($oneArticle->fulltext) && !empty($GLOBALS[JNEWS.'word_wrap'])){
             		//Limit the number of words
             		if( strlen( $oneArticle->introtext ) > $GLOBALS[JNEWS.'word_wrap'] ) {
						static $requiredOnce = true;
             			if ( $requiredOnce ) {
             				require_once( JNEWSPATH_CLASS . 'content.php' );
             				$requiredOnce = false;
             			}
						$convertContent = new jNews_Content;
						$fulltext = $convertContent->HTMLtoText( $oneArticle->introtext, false, false );                   			
             			
//             			$fulltext = strip_tags($oneArticle->introtext,'<br><img>');
             			if(strlen($fulltext) > $GLOBALS[JNEWS.'word_wrap']){
	             			//We make sure we won't cut any html tag :
	             			$oneArticle->introtext = substr( $fulltext , 0, $GLOBALS[JNEWS.'word_wrap']-3 ).'...';
             			} else {
             				$oneArticle->introtext = $fulltext.'...';
             			}
             		}
             	}             	
             	
             	
			    $html = '<div class="aca_content"><span class="aca_title">' . $oneArticle->title . '</span>' . "\r\n" . $author . '<br />' . $oneArticle->introtext . '<br />' . "\r\n" . '<a href="' . $link . '"><span class="aca_readmore">' . _JNEWS_READMORE . '</span></a>' . "\r\n".'</div>';
             } else {
			    $html = '<a href="' . $link . '"><span class="aca_title">' . $oneArticle->title . '</span></a>';
             }
        }

		 $images = $this->_getImageInfo($oneArticle->images);
		 foreach($images as $image) {
			 $image_string = '<img src="' . JNEWS_JPATH_LIVE_NO_HTTPS . '/images/stories/' . $image['image'] . '" align="' . $image['align'] . '" alt="' . $image['alttext'] . '" border="' . $image['border'] . '" />';
			 $html = preg_replace('/{mosimage}/', $image_string, $html, 1);
		 }
	 }
		$html = str_replace('{mospagebreak}', '<div style="clear: both;" ></div>', $html);		
	 	return $html;
	}
 
	
	function _convertAndLayoutText( $articleA, $layout ) {	
	 global $mainframe;		 
		if ( empty($layout) ) $layout = 1;
		
		foreach ($articleA as $oneArticle ) {
		
		  if( version_compare(JVERSION,'1.6.0','<') ) $Itemid = $mainframe->getItemId($oneArticle->id);

		 if(empty($Itemid)){
		 	$Itemid = $GLOBALS[JNEWS.'itemidAca'];
		 }

 		if ($GLOBALS[JNEWS.'show_author'] == 1){
		 	$author = "\r\n".$oneArticle->created_by_alias;
	 	} else {
	 		$author = '';
	 	}

		 $oneArticle->title ="<b>". strtoupper(jNews_ProcessMail::htmlToText($oneArticle->title)) ."</b>";
		 $oneArticle->introtext = jNews_ProcessMail::htmlToText($oneArticle->introtext);
		 $oneArticle->fulltext = jNews_ProcessMail::htmlToText($oneArticle->fulltext);
		 if ($layout == 0) {
			 $text = $oneArticle->title . $author . "\r\n" . $oneArticle->introtext . "\r\n" . $oneArticle->fulltext . "\r\n". $text;
		 } else {

		 	$link = 'option=com_content&view=article&id=' . $oneArticle->id.'&Itemid='.$Itemid ;
		 	$link = jNews_Tools::completeLink($link,false,$GLOBALS[JNEWS.'use_sef']);

             if ($layout == 1) {
				if(empty($oneArticle->fulltext) AND !empty($GLOBALS[JNEWS.'word_wrap'])){
             		if(strlen($oneArticle->introtext) > $GLOBALS[JNEWS.'word_wrap']){
             			$oneArticle->introtext = substr(strip_tags($oneArticle->introtext),0,$GLOBALS[JNEWS.'word_wrap']).'...';
             		}
             	}
			    $text = $oneArticle->title . $author . "\r\n" . $oneArticle->introtext . "\r\n" . '* ' . _JNEWS_READMORE . ' ( '. $link . ' )' . "\r\n";
             }
             else {
			    $text = $oneArticle->title . ' ( ' . $link . ' )';
             }
         }
		 $text = str_replace('{mosimage}', '', $text);
	 }	
	 
	$text = str_replace('{mospagebreak}', "\r\n \r\n", $text);
		 
	}
		
 function _getImageInfo( $images ) {

	$first = @explode("\n",$images);

	for($i=0, $n=count($first); $i < $n; $i++) {
		$second = explode('|',$first[$i] . '|||');
		$third[$i]['image'] = $second[0];
		$third[$i]['align'] = $second[1];
		$third[$i]['alttext'] = $second[2];
		$third[$i]['border'] = $second[3];
	}
	return $third;
 }
	
/**
	 * Replace HTML into Text Only
	 * @param string $html HTML formatted string
	 * @param bool $keepLinks TRUE to keep links, FALSE to remove them
	 * @param bool $makeReturnLine TRUE to convert <br> and <p> in <br />
	 * @return string the converted text
	 */
	function HTMLtoText( $html, $keepLinks=true, $makeReturnLine=false ) {

		$html = str_replace( array( "\n", "\r", "\t" ), '', $html );
		if ( $makeReturnLine ) {
			$html = str_replace( array( '<br>', '<br />', '<br/>',  '<BR>', '<BR />', '<BR/>' ), "\n\r<br />", $html );
			$html = str_replace( array( '<p', '<P' ), "\n\r<p", $html );
			$html = str_replace( array( '<li', '<LI' ), "\n\r<li", $html );
		}

		$removeImgLinks = "#< *a[^>]*> *< *img[^>]*> *< *\/ *a *>#isU";
		$removeJS = "#< *script(?:(?!< */ *script *>).)*< */ *script *>#isU";
		$removeCSS = "#< *style(?:(?!< */ *style *>).)*< */ *style *>#isU";
		$removeTags =  '#< *strike(?:(?!< */ *strike *>).)*< */ *strike *>#iU';
		$replaceHTags = '#< *(h1|h2)[^>]*>#Ui';
		$replaceBullets = '#< *li[^>]*>#Ui';
		$replaceTag1 = '#< */ *(li|td|tr|div|p)[^>]*> *< *(li|td|tr|div|p)[^>]*>#Ui';
		$replaceTag2 = '#< */? *(br|p|h1|h2|legend|h3|li|ul|h4|h5|h6|tr|td|div)[^>]*>#Ui';
		$replaceLinks = '/< *a[^>]*href *= *"([^#][^"]*)"[^>]*>(.*)< *\/ *a *>/Uis';
		
		$linkConversion = ( $keepLinks ) ? '${2} ( ${1} )' : '${2}';
		$text = preg_replace(
			array($removeImgLinks, $removeJS, $removeCSS, $removeTags, $replaceHTags, $replaceBullets, $replaceTag1, $replaceTag2, $replaceLinks),
			array('','','','',"\n\n","\n* ","\n","\n", $linkConversion ), $html );
		$text = strip_tags( $text );
		$text = str_replace( array(" ","&nbsp;"), ' ', $text );
		$text = @html_entity_decode( $text, ENT_QUOTES, 'UTF-8');
		$text = trim($text);

		if ( $makeReturnLine ) {
			$text = str_replace( "\n\r", '<br />', $text );
		}
		
		return $text;		
		
	} 
 
}
