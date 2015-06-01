<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class JButtonWizard extends JButton {
	
	var $_name = 'Wizard';
	
	function fetchButton( $type='Wizard', $namekey='', $id='wizard' ) {
		JHTML::_('behavior.mootools');
		
		$defaultPage = 'jnewsdoc_glossary';
		if ( empty($namekey) ) $namekey = $defaultPage;
		else $namekey = 'jnewsdoc_' . $namekey;
		$langID = substr( JNEWS_CONFIG_LANG, 0, 2 );
		
		$link = 'http://joobi.co/index.php?option=com_jlinks&controller=redirect&link=' . $namekey . '&alt='.$defaultPage.'&lang='.$langID;//.'&Itemid=312';
		
		$iFrame = "'<iframe src=\'$link\' width=\'100%\' height=\'100%\' scrolling=\'auto\'></iframe>'";
		$js = "var wizardOn = true; function showWizard(){
		var box=$('jNewsWizard'); 		
		if(wizardOn){box.innerHTML = ".$iFrame.";box.style.display = 'block';box.style.height = '0';}";
		
		$js .= "try{
                   var fx = box.effects({duration: 2500, transition:
					Fx.Transitions.Quart.easeOut});
					if(wizardOn){
						fx.start({'height': 500});
					}else{
						fx.start({'height': 0}).chain(function() {
							box.innerHTML='';
							box.setStyle('display','none');
						});
					}
				}catch(err){
					box.style.height = '500px';
					var myVerticalSlide = new Fx.Slide('jNewsWizard');
 					if(wizardOn){
						myVerticalSlide.slideIn();
					}else{
						myVerticalSlide.slideOut().chain(function() {
						box.innerHTML='';
						box.setStyle('display','none');
					});
				}
			} wizardOn = !wizardOn;}";

		$doc = JFactory::getDocument();
		$doc->addScriptDeclaration( $js );
		
		return '<a href="'.$link.'" target="_blank" onclick="showWizard();return false;" class="toolbar"><span class="icon-32-wizard" title="'. _JNEWS_WIZARD .'"></span>'. _JNEWS_WIZARD .'</a>';
	
	}
	
	function fetchId( $type='Wizard', $html = '', $id = 'wizard' ) {
		return $this->_name.'-'.$id;
	}
	
}

