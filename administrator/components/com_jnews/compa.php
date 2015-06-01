<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

//deprecated #454fkj543
class compajNews extends jNews_Tools {
}

class jNews_Tools{	// jNews_Tools::completeLink(
// params $back force the BE or if we dotn want to specify the base URL
	public static function completeLink( $link, $back=true, $sef=true, $popup=false, $addCompOption=true ) {
		if($link=="#") return;
		
		if($back){
			if ( $popup ) {
				$newLink = 'index.php?tmpl=component&'.$link;
			} else $newLink = 'index.php?'. $link;
		} else {
			if ( $popup ) {
				$rest = 'index.php?tmpl=component&'.$link;
			} else $rest = 'index.php?'. $link;

			if ( $sef && !$popup ) $rest = ltrim(JRoute::_($rest),'/');

			if(JNEWS_URL_MORE && strpos($rest,JNEWS_URL_MORE) === false){
				$rest = JNEWS_URL_MORE.$rest;
			}
			$newLink = JNEWS_COMPLETE_URL . $rest;
		}
		return $newLink;
	}

	public static function showIcon($image,$text,$text2 = '',$option = 1) {

		if ( $image == 'query.png' || $image == 'systeminfo.png' || $image == 'month_f2.png')
			$path = 'administrator/images/'.$image;
		else
			$path = JNEWS_PATH_ADMIN_IMAGES2 . $image;

			echo '<img alt="'.$text.'" src="'.$path.'"/>';
	}

	public static function toolTip($tooltip, $title='', $width='', $image='tooltip.png', $text='', $href='', $link=1){

		$mainframe = JFactory::getApplication();

		if($GLOBALS[JNEWS.'disabletooltip'] AND !$mainframe->isAdmin()){
			$text = str_replace(array("'",'"'),array("&#039;",'&quot;'),$text);
			$title = str_replace(array("'",'"'),array("&#039;",'&quot;'),$title);

			$return = '<span class="editlinktip">';
			if(!empty($href) AND !preg_match("/#/",$href)){
				$return .='<a href="'. $href .'">';
			}
			$return .= $text ;
			if(!empty($href) AND !preg_match("/#/",$href)){
				$return .='</a>';
			}
			$return .= '</span>';

			return $return;
		}

		$text = str_replace(array("'",'"'),array("&#039;",'&quot;'),$text);
		$title = str_replace(array("'",'"'),array("&#039;",'&quot;'),$title);

		if(preg_match("/#/",$href)){
			$href = null;
		}
		return JHTML::_('tooltip', $tooltip, $title, $image, $text, $href, $link);
	}

/* deprecated can be removed */
	public static function allow_html(){
		return JREQUEST_ALLOWRAW;
	}

	public static function redirect( $link, $message = '' ) {
		
		if ( substr( $link, 0, 9 ) == 'index.php' ) {
			$mainframe = JFactory::getApplication();
			$mainframe->redirect( $link, trim($message) );
			exit;			
		}
		
		//else
		if ( headers_sent() ) {
			echo "<script>document.location.href='$link';</script>\n";
		} else {
			//@ob_end_clean(); // clear output buffer
			header( 'HTTP/1.1 301 Moved Permanently' );
			header( 'Location: ' . $link );
		}
		exit();
		
	}

}


