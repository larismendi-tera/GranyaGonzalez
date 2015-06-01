<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jnews_module {

var $shownamefield =  0;
var $receivehtmldefault = 1;
var $showreceivehtml =  0;
var $listIds =	null;
var $linear =  0;
var $fieldsize =  18;
var $introtext = null;
var $redirectURL = null;
var $showListName =  0;
var $buttonUnregistered = _JNEWS_MOD_SUBSCRIBE ;
var $imgUnregistered = null;
var $buttonRegistered =  _JNEWS_CHANGE_SUBSCRIPTIONS ;
var $imgRegistered = null;
var $moduleclass_sfx = null;
var $mod_align = null;
var $posttext = null;
var $defaultchecked =  1 ;
var $notifType = null;
var $catId = null;
var $effect = 'normal';
var $cssfile = 'default.css';
var $mootools_btntext = _JNEWS_MOOTOOLS_BTNTEXT ;
var $mootools_boxw = 200;
var $mootools_boxh = 210;
var $column1=0;
var $column2=0;
var $column3=0;
var $column4=0;
var $column5=0;
var $req_column1=0;
var $req_column2=0;
var $req_column3=0;
var $req_column4=0;
var $req_column5=0;
var $red_subscription=0;
var $module_message = 0;
var $enable_captcha = 0;
var $captcha_width = 80;
var $captcha_height = 25;
var $captcha_bgcolor = '';
var $captcha_ftcolor = '';
var $show_terms = 0;
var $check_terms = 0;
var $terms_condition = '';
var $lists = null;
var $use_new = 1;
var $req_name = 1;

var $_html = '';
        //to be able to show more than one module in the same page
var $num = 0;

function jnews_module() {
    static $num = 0;
    $this->num = ++$num;
}
	
function normal( $params, $module=null ) {
	if ( isset($module->id) ) $this->moduleID = $module->id;
	
	$this->shownamefield = $params->get('shownamefield', 1 );
	$this->receivehtmldefault = $params->get( 'receivehtmldefault', 1 );
	$this->showreceivehtml = $params->get( 'showreceivehtml', 0 );
	$this->listIds = $params->get('listids', 0);
	$this->linear = $params->get('linear', 0);
	$this->fieldsize = $params->get('fieldsize', 18);
	$this->introtext = $params->get('introtext', '');
	$this->redirectURL = str_replace( '&amp;', '&', $params->get('red_url', '') );
	$this->showListName = $params->get('showlistname', 1);
	$this->buttonUnregistered = $params->get('button_text', _JNEWS_MOD_SUBSCRIBE );
	$this->imgUnregistered = $params->get('button_img', null);
	$this->buttonRegistered = $params->get('button_text_change', _JNEWS_CHANGE_SUBSCRIPTIONS );
	$this->imgRegistered = $params->get('button_img_change', null);
	$this->moduleclass_sfx = $params->get('moduleclass_sfx', null);
	$this->mod_align = $params->get('mod_align', '');
	$this->posttext = $params->get('posttext', '');
	$this->defaultchecked = $params->get('defaultchecked', 1);
	$this->dropdown = $params->get('dropdown',0);
	$this->selecteddrop = intval($params->get('selecteddrop',0));
	$this->effect = $params->get('effect', 'normal');
	if ( isset($module->effect) ) $this->effect = $module->effect;		
	$this->cssfile = $params->get('cssfile' , 'default.css');
	$this->mootools_btntext = $params->get('mootools_btntext' , _JNEWS_MOOTOOLS_BTNTEXT );
	$this->mootools_boxw = $params->get('mootools_boxw' , 200);
	$this->mootools_boxh = $params->get('mootools_boxh' , 210);
	$this->red_subscription = $params->get('red_subscription' , 0);
	$this->module_message = $params->get('module_message' , 0);
	$this->enable_captcha = $params->get('enable_captcha' , 0);
	$this->captcha_width = $params->get('captcha_width' , 80);
	$this->captcha_height = $params->get('captcha_height' , 25);
	$this->captcha_bgcolor = str_replace( '#', '', $params->get('captcha_bgcolor' , '' ) );
	$this->captcha_ftcolor = str_replace( '#', '', $params->get('captcha_ftcolor' , '' ) );
	$this->show_terms = $params->get('show_terms' , 0);
	$this->check_terms = $params->get('check_terms' , 0);
	$this->terms_condition = $params->get('terms_condition' , '');
	$this->use_new = $params->get( 'use_new' , '1' );
	$this->req_name = $params->get( 'req_name' , '1' );
	
	if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
		$this->column1 = $params->get('column1',0);
		$this->column2 = $params->get('column2',0);
		$this->column3 = $params->get('column3',0);
		$this->column4 = $params->get('column4',0);
		$this->column5 = $params->get('column5',0);
	      
		$this->req_column1 = $params->get('req_column1',0);
		$this->req_column2 = $params->get('req_column2',0);
		$this->req_column3 = $params->get('req_column3',0);
		$this->req_column4 = $params->get('req_column4',0);
		$this->req_column5 = $params->get('req_column5',0);
	}//end if for check version pro
       
	$this->lists = jNews_Lists::getSpecifiedLists( $this->listIds );
       
//	$this->_html = "\n\r" . '<!-- Beginning Module : '.jnews::version().' -->'."\n\r";
       
	if($this->use_new) $this->_html = $this->create();
	else $this->_html = $this->createOld();

//	$this->_html .= '<!-- End Module : '.jnews::version().' -->'."\n\r";

	return $this->_html;
	
}


function notification() {
	
	$Itemid = $GLOBALS[JNEWS.'itemidAca'];
	$item = ( !empty($Itemid)) ? '&Itemid=' . $Itemid : '';

	if ( isset( $this->catId ) AND isset( $this->notifType ) ) {

		if ( jNews_Lists::getNotifLists( $this->lists , $this->notifType, $this->catId ) ) {
			$this->linear = 1;
			$this->introtext = 'Notify me of new product';
			$this->redirectURL = 'index.php?option=com_virtuemart&page=shop.browse&category_id='.$this->catId.$item;
			$this->buttonRegistered = _CMN_YES;
			$this->buttonUnregistered = _CMN_NO;
//			$this->_html = '<!--  Beginning Module : '.jnews::version().'   -->'."\n\r";
			     
			if($this->use_new) $html = $this->create();
			else $html = $this->createOld();
			     
//			$this->_html .= '<!--  End Module : '.jnews::version().'   -->'."\n\r";
		}
		
	}
	
	return $html;
	
}


	function setListIds( $listIds ) {
	       $this->listIds = $listIds;
	}


	function setNotifType( $type ) {
	       $this->notifType = $type;
	}

	function setCatId( $id ) {
	       $this->catId = $id;
	}
	
/** <p> Function to create the HTML of the new look of the module</p>
 */
	function create(){
		$my	= JFactory::getUser();
		
		$hidden = '';
		$htmlOK = false;

		if ( empty($my->id) && !$GLOBALS[JNEWS.'allow_unregistered'] ) {
			return $this->NeedToRegister();
		}
		
		
	    $Itemid = $GLOBALS[JNEWS.'itemidAca'];
	    if(!empty($Itemid)){
			$item = '&Itemid=' . $Itemid ;
	    }else{
			$item = '';
	    }

		$this->_addCSS();
		
		//start of the form
		$HTML = '';
		$formname = 'modjnewsForm'.$this->num;
		$HTML .= '<div class="jNewsMod jcolor'.$this->moduleclass_sfx.'" id="jnews_module'.$this->num.'">'; //open tag for the div
		$HTML .= '<div class="jNewsRT"><div class="jNewsRB"><div class="jNewsLB">';
		switch ( $this->effect ){
			case 'mootools-slide':
				$HTML .= $this->_addMootoolsSlide();
				break;
			case 'mootools-modal':
				$HTML .= $this->_addMootoolsModal();
				break;
			default:
			case 'default':
				break;
		}
		
		if(!empty($this->lists)){//if there are available lists
			$subscriber = new stdClass;
			$loggedin = false;
			
			if ($my->id >0) {//login
				$loggedin = true;
				$subscriber = $this->_getSubscriberInfo( $my->id );
			}
	       
			if(!$loggedin && $GLOBALS[JNEWS.'allow_unregistered']) $HTML .= $this->_printscript();
			if(!$GLOBALS[JNEWS.'disabletooltip']) JHTML::_('behavior.tooltip');
			
			$linkForm = 'option='.JNEWS_OPTION;
			$linkForm = jNews_Tools::completeLink( $linkForm, false, false );
			
			$HTML .= '<form action="'.$linkForm.'" method="post" name="modjnewsForm'.$this->num.'">'; //start of form
			
			if (!empty($this->introtext)) {//display pretext
				$text = '<span class="pretext">'. $this->introtext .'</span>';
				$HTML .= jnews::printLine($this->linear, $text);
			}
			
			//subscription list
			$HTML .= $this->_showSubcriptionList( $subscriber, $loggedin, $item );

			if ( !$loggedin ) {
				
				$HTML .= $this->showInputFields();//we show the input fields here
//				if ($GLOBALS[JNEWS.'allow_unregistered']) {
					if(!$this->linear) $HTML .= '<div class="subscriptionField">';			
//				}else{
//					$HTML .= $this->NeedToRegister();
//			     	$htmlOK = false;
//				}//endallow_unregistered
				if(!$this->linear) $HTML .= '</div>';//enddive inputfields

				if(!$this->linear) $HTML .= '<div class="subscripitonRHTML">';		
				$HTML .= $this->showReceiveHTML($subscriber);
				if(!$this->linear) $HTML .= '</div>';//enddiv rHTML
				
				if(!$this->linear) $HTML .= '<div class="subscripitonTermsL">';	
				$HTML .= $this->showTerms($subscriber);
				if(!$this->linear) $HTML .= '</div>';//enddiv terms
				
				//for captcha
				if($GLOBALS[JNEWS.'level'] > 1){//check the version is plus or pro
					if(empty($esc) && $this->enable_captcha){//check if $esc has been initialized
						$code = jNews_Captcha::generateCode('5');
						$HTML .= $this->_showCaptcha($code);
						$HTML .= $this->_showCaptchaHidden($code);
					}
				}
			    if(!$this->linear) $HTML .= '<div class="subscriptionButton">';
				$HTML .= $this->_showButton(false);
				if(!$this->linear) $HTML .= '</div>';
				
			}else{
				$HTML .= $this->forLoggedIn($Itemid);
			}//endloggedin
			
			if (!empty($this->posttext)) {
				$text = '<span class="postext">'. $this->posttext .'</span>';
				$HTML .= jnews::printLine($this->linear, $text);
			}

			$HTML .= JHTML::_( 'form.token' );
			$HTML .= '</form>';//end of form
	       
		}else{
			$HTML .= '<div class="jnews-nolist">'. _JNEWS_LIST_NOT_AVAIL .'</div>';
		}
		
		
		if($this->effect != 'mootools-slide'){
			$HTML .= '<div style="display:none; width:50px;" id="message'.$this->num.'"></div>';
	       	$HTML .= '<div style="display:none; width:50px; padding-top:5px; height:100%" id="ajax_loading'.$this->num.'"><img alt="loader" src="'.JURI::base().'components/'.JNEWS_OPTION.'/images/16/ajax-loader.gif"/>'._JNEWS_PLEASE_WAIT.'</div>';
		}

		switch ($this->effect) {
			case 'mootools-slide':
				$HTML .= '</div></div>';
				break;
			case 'mootools-modal':
				$HTML .= '</div></div></div>';
				break;
			case 'default':
			default:
				break;
		}
			
		$HTML .= '</div></div></div>';
		
		$HTML .= '</div>';//end div for the class jNewsMod
	       
	    return $HTML;
	    
	}

/**<p> Function to create the HTML of the module for the old module</p>
 *
 */
	function createOld() {
	     $my	= JFactory::getUser();

	       $Itemid = $GLOBALS[JNEWS.'itemidAca'];
	       if(!empty($Itemid)){
		      $item = '&Itemid=' . $Itemid ;
	       }else{
		      $item = '';
	       }

	       $this->_addCSS();

	       $hidden = '';
	       $htmlOK = false;
	       $HTML = '';
	       $formname = 'modjnewsForm'.$this->num;
	       //check if subscription listing is not empty
	       //if not empty print the module
	       //else just print the message
	      	$HTML .= '<div id="jnews_module'.$this->num.'">';
						switch( $this->effect ) {
						    case 'default':
						        $HTML .= '';
						        break;
						    case 'mootools-slide':
								$HTML .= $this->_addMootoolsSlide();
						        break;
						    case 'mootools-modal':
			        	       	$HTML .= $this->_addMootoolsModal();
						        break;
						    default:
						       $HTML .= '';
						}
						
		if (!empty($this->lists)) {
		      	$subscriber = '';
		       if ($my->id >0) {	//login
			     $loggedin = true;
			     $subscriber = $this->_getSubscriberInfo($my->id);
			     if(empty($subscriber)) $loggedin = false;
		       } else {	//logout
			      $loggedin = false;
		       }

		       if (!$loggedin && $GLOBALS[JNEWS.'allow_unregistered']) { 
			      $HTML .= $this->_printscript();
		       }

		      if(!$GLOBALS[JNEWS.'disabletooltip']){
			 	JHTML::_('behavior.tooltip');
		      }

		    $linkForm = 'option='.JNEWS_OPTION;
			$linkForm = jNews_Tools::completeLink( $linkForm, false, false );
		      
		      $HTML .= '<form action="'.$linkForm.'" method="post" name="modjnewsForm'.$this->num.'">';

		      //pretext
		      if (!empty($this->introtext)) {
			     $text = '<span class="pretext">'. $this->introtext .'</span>';
			     $HTML .= jnews::printLine($this->linear, $text);
		      }

		      //subscription list///889
		      $HTML .= $this->_showSubcriptionListOld($subscriber, $loggedin, $item);

		      if ( !$loggedin ) {
			     if ($GLOBALS[JNEWS.'allow_unregistered']) {
			     	$HTML .= $this->showInputFields();
			     } else {	//required registered
				    $HTML .= $this->NeedToRegister();
			     	$htmlOK = false;
			    }

			    $HTML .= $this->showReceiveHTML($subscriber);
			    
			    $HTML .= $this->showTerms($subscriber);

			     //for captcha
			     if($GLOBALS[JNEWS.'level'] > 1){//check the version is plus or pro
				    if(empty($esc) && $this->enable_captcha){//check if $esc has been initialized
				    		$code = jNews_Captcha::generateCode('5');
					   $HTML .= $this->_showCaptcha($code);
					   $hidden .= $this->_showCaptchaHidden($code);
				    }
			     }
			     
			     $HTML .= $this->_showButton(false);
			     
		      } else {	//login
					$HTML .= $this->forLoggedIn($Itemid);
		      }

		      if (!empty($this->posttext)) {
			     $text = '<span class="postext">'. $this->posttext .'</span>';
			     $HTML .= jnews::printLine($this->linear, $text);
		      }

			$HTML .= JHTML::_( 'form.token' );
		    $HTML .= $hidden . '</form>';
	       } else {	// no listing
		       $HTML .= '<p class="jnews-nolist">'. _JNEWS_LIST_NOT_AVAIL .'</p>';
	       }

	       if($this->effect != 'mootools-slide'){
		       	$HTML .= '<div style="display:none; width:50px;" id="message'.$this->num.'"></div>';
		       	$HTML .= '<div style="display:none; width:50px; padding-top:5px; height:100%" id="ajax_loading'.$this->num.'"><img alt="loader" src="'.JURI::base().'components/'.JNEWS_OPTION.'/images/16/ajax-loader.gif"/>'._JNEWS_PLEASE_WAIT.'</div>';
	       }

	       $HTML .= '';

	       switch ($this->effect) {
					case 'mootools-slide':
						$HTML .= '</div></div>';
					break;
					case 'mootools-modal':
						$HTML .= '</div></div></div>';
					break;
					case 'default':
					default:
					break;
	       }
			
			$HTML .= '</div>';
	       
	       return $HTML;
	       
	}

	function _printscript(){

		$mainframe = JFactory::getApplication();

	       $js = '';
	       $js .= '
			     <script language="javascript" type="text/javascript">
			     <!--
				    function submitjnewsmod'.$this->num.'(formname, url) {
					   var form = eval(\'document.\'+formname);' .
					   'if(!form.elements) form = form[1];' .
					   'var place = form.email.value.indexOf("@",1);' .
					   'var point = form.email.value.indexOf(".",place+1);'.
	       			'var box = document.getElementById("wz_terms");';
	        if($this->show_terms){
	       		$js .= ' if (box.checked == false){'.
								'alert("'._JNEWS_TERMS_WARN.'");'.
								'return false;'.
						'}';
	        }

	       if ( $GLOBALS[JNEWS.'level'] > 2 ) {	//check if the version of jnews is pro

		      if ($this->column1 && $this->req_column1) {//for column1
			     $js .=
				    'if (form.column1.value == "" || form.column1.value == "'.addslashes($GLOBALS[JNEWS.'column1_name']).'") {
					   alert( "' . addslashes(_JNEWS_REGWARN_COLUMN) .' '.$GLOBALS[JNEWS.'column1_name']. '" );' .
					   'return false;
				    }';
		      }

		      if ($this->column2 && $this->req_column2) {//for column2
			     $js .=
				    'if (form.column2.value == "" || form.column2.value == "'.addslashes($GLOBALS[JNEWS.'column2_name']).'") {
					   alert( "' . addslashes(_JNEWS_REGWARN_COLUMN) .' '.$GLOBALS[JNEWS.'column2_name']. '" );' .
					   'return false;
				    }';
		      }

		      if ($this->column3 && $this->req_column3) {//for column3
			     $js .=
				    'if (form.column3.value == "" || form.column3.value == "'.addslashes($GLOBALS[JNEWS.'column3_name']).'") {
					   alert( "' . addslashes(_JNEWS_REGWARN_COLUMN) .' '.$GLOBALS[JNEWS.'column3_name']. '" );' .
					   'return false;
				    }';
		      }

		      if ($this->column4 && $this->req_column4) {//for column4
			     $js .=
				    'if (form.column4.value == "" || form.column4.value == "'.addslashes($GLOBALS[JNEWS.'column4_name']).'") {
					   alert( "' . addslashes(_JNEWS_REGWARN_COLUMN) .' '.$GLOBALS[JNEWS.'column4_name']. '" );' .
					   'return false;
				    }';
		      }

		      if ($this->column5 && $this->req_column5) {//for column5
			     $js .=
				    'if (form.column5.value == "" || form.column5.value == "'.addslashes($GLOBALS[JNEWS.'column5_name']).'") {
					   alert( "' . addslashes(_JNEWS_REGWARN_COLUMN) .' '.$GLOBALS[JNEWS.'column5_name']. '" );' .
					   'return false;
				    }';
		      }
	       }

	       //captcha checking
	       if($GLOBALS[JNEWS.'level'] > 1){//check if the version is plus or pro
		      //captcha is enable
		      if( $this->enable_captcha){#4c8a5b
			     $js .=
				    'if (form.security_code.value == "") {
					   alert( "' . addslashes(_JNEWS_REGWARN_CAPTCHA) .' " );' .
					   'return false;
				    }';

		      }
	       }

	       //name field checking
	       if ($this->shownamefield && $this->req_name ) {       	
		      $js .= '
			     if (form.name.value == "" || form.name.value == "'.addslashes(_JNEWS_NAME).'") {
				    alert( "' . addslashes(_JNEWS_REGWARN_NAME) . '" );' .
				    'return false;
			     }';
	       }

	       //checking of captcha
	       if($GLOBALS[JNEWS.'level'] > 1){
		       if( $this->enable_captcha AND (extension_loaded('gd') AND extension_loaded('mcrypt'))){
		      			 $js .=   ' if(form.security_code.value != form.captcode.value){

			       				alert( "' . addslashes(_JNEWS_CAPTCHA_MSG) .'" );' .
						'return false;
								}';
		       }
	       }
	       
	       //email field checking
	       $js .= 'if (form.email.value == "" || form.email.value == "'.addslashes(_JNEWS_EMAIL).'"){' .
		     		'alert( "' . addslashes(_JNEWS_REGWARN_MAIL) .'" );' .
			 'return false;
		      } else{' .
			 'if ((place > -1)&&(form.email.value.length >2)&&(point > 1)){' ;
	       
								if( !$this->red_subscription  && empty($this->redirectURL) ){
									
									//initilization
									$js .='var subscribed_lists=\'\';
											var passwordA = document.getElementById(\'passwordA\').value;
											';
									
									if($this->effect =='mootools-modal'){
										$js .= 'var window = document.getElementById("sbox-content");
											if(window != null){
												var alldiv = window.getElementsByTagName("div");
												for (var i = 0; i < alldiv.length; i++) {
											    	var divType = alldiv[i];
											    	var divid = alldiv[i].getAttribute(\'id\');
											    	if (divid == \'ajax_loading'.$this->num.'\') {
											        	divType.setAttribute("style","display:block; padding:5px");
											    	}
											 	}
											}
										';
									}
									$js .= '
											var loadingImage = document.getElementById(\'ajax_loading'.$this->num.'\');
											loadingImage.setAttribute("style","display:block");

											var module = document.getElementById("jnews_module'.$this->num.'");
											var moduleInput = module.getElementsByTagName("input");';
												$js .= 'for(var i = 0; i < moduleInput.length; i++){
															var inputType = moduleInput[i];
															var inputid = moduleInput[i].getAttribute(\'id\');';
												if ($this->shownamefield) {
												$js .=		'if(inputid==\'wz_11\'){
																var name= inputType.value;
															}';
												}else{
													$js .= 	'var name = \'\';';
												}
												$js .= 		'if(inputid==\'wz_12\'){
																var email= inputType.value;
															}';
												$js .= 'if(inputid==\'wz_2\' && inputType.getAttribute(\'type\') == \'checkbox\' ){
															var modreceivehtml = inputType.checked;
														}';
												$js .= 'if(inputid==\'wz_2\' && inputType.getAttribute(\'type\') == \'hidden\' ){
															var modreceivehtml = inputType.value;
														}';
																								
								if($GLOBALS[JNEWS.'level'] > 2){
									if($this->column1){
										$js .= 	'if(inputid==\'wz_13\'){
												var modcolumn1 = inputType.value;
											}';
									}
									if($this->column2){
										$js .= 	'if(inputid==\'wz_14\'){
												var modcolumn2 = inputType.value;
											}';
									}
									if($this->column3){
										$js .= 	'if(inputid==\'wz_15\'){
												var modcolumn3 = inputType.value;
											}';
									}
									if($this->column4){
										$js .= 	'if(inputid==\'wz_16\'){
												var modcolumn4 = inputType.value;
											}';
									} 
									if($this->column5){
										$js .= 	'if(inputid==\'wz_17\'){
												var modcolumn5 = inputType.value;
											}';
									} 
								}
								
								if ( $this->showListName ) {
									if($this->dropdown){
										$js .= ' subscribed_lists = \',\' + document.getElementById("sub_list_id[1]").value;';
									}else{
										$js .= 'if (inputType.getAttribute(\'type\') == \'checkbox\' && inputType.checked==true) {
							      					if(inputType.id != \'wz_2\'){
							        					subscribed_lists = subscribed_lists + \',\' + inputType.value;
													}else{
														if (inputid == \'hidden_sub_lists\') {
							        						subscribed_lists = subscribed_lists + \',\' + inputType.value;
														}
													}
												} else {
													if (inputid == \'hidden_sub_lists\') {
							        					subscribed_lists = subscribed_lists + \',\' + inputType.value;
													}				
												}';
									}
									
								} else {
									$js .= 'if (inputid == \'hidden_sub_lists\') {
								        subscribed_lists = subscribed_lists + \',\' + inputType.value;
								    }';
								}
								
								$js .= ' if (inputid == \'hidden_sub_list_id\') {
							        subscribed_lists = subscribed_lists + \',\' + inputType.value;
							    }';
								
								$js .= '}';
				
							if($this->effect =='mootools-modal'){
								$js .= 'var window = document.getElementById("sbox-content");
									if(window != null){
										var allinput = window.getElementsByTagName("input");
										for(var i = 0; i < allinput.length; i++){
											var inputType = allinput[i];
											var inputid = allinput[i].getAttribute(\'id\');
											if(inputid==\'wz_12\'){
												var email= inputType.value;
											}';
										if ($this->shownamefield) {
										$js .=	'if(inputid == \'wz_11\'){
												var name = inputType.value;
											}';
										}else{
											$js .= 'var name = \'\';';
										}
											
										$js .= '}
									}
								';
							
							}
							
					if($GLOBALS[JNEWS.'level'] > 2){
						if($this->effect =='mootools-modal'){
								$js .= 'var window = document.getElementById("sbox-content");
									if(window != null){
										var allinput = window.getElementsByTagName("input");
										for(var i = 0; i < allinput.length; i++){
											var inputType = allinput[i];
											var inputid = allinput[i].getAttribute(\'id\');
											if(inputid==\'wz_13\'){
												var modcolumn1 = inputType.value;
											}
											if(inputid == \'wz_14\'){
												var modcolumn2 = inputType.value;
											}
											if(inputid == \'wz_15\'){
												var modcolumn3 = inputType.value;
											}
											if(inputid == \'wz_16\'){
												var modcolumn4 = inputType.value;
											}
											if(inputid == \'wz_17\'){
												var modcolumn5 = inputType.value;
											}
										}
									}
								';
							
						}
					}

					$data = "'modname='+name+'&modemail='+email+'&modsubscribed_lists='+subscribed_lists+'&modpasswordA='+passwordA";
					if ($this->column1) $data .= "+'&modcolumn1='+modcolumn1";
					if ($this->column2) $data .= "+'&modcolumn2='+modcolumn2";
					if ($this->column3) $data .= "+'&modcolumn3='+modcolumn3";
					if ($this->column4) $data .= "+'&modcolumn4='+modcolumn4";
					if ($this->column5) $data .= "+'&modcolumn5='+modcolumn5";
					$joomlaToken = JUtility::getToken();
					$data .= "+'&".$joomlaToken."=1'";
					
					if($this->effect == 'mootools-slide') $data .= "+'&modeffect=2'";
					else $data .= "+'&modeffect=1'";

					$data .= "+'&modreceivehtml='+modreceivehtml";
					
					$data .= "+'&module_message='+".$this->module_message;
					$data .= "+'&red_subscription='+".$this->red_subscription;

					if( version_compare(JVERSION,'1.6.0','<') ){//1.5
						$js .="
				 				var ajax = new Ajax(url,
				 					{data: ".$data;
				 		$js .=			",
				 					method: 'POST',
				 					onComplete : function(result){modsubscribe".$this->num."(result); }
				 					}
				 				);
				 				ajax.request();";
					}else{
						$js .="
								var ajax = new Request({
								url : url,
								data: ".$data;
						$js .=",
								method: 'POST',
								onComplete : function(result){modsubscribe".$this->num."(result); }
								});
								ajax.send();";
					}
				} else {
    				$js .= 'form.submit();' .
		        	'return true;';
				}
								
   				$js .= '}else{
   						alert( "' . addslashes(_JNEWS_REGWARN_MAIL) .'" );
   						return false;';
   					$js .= '}';
				$js .= '}
				}';

			//ajax subscription
       		$js .= 'function modsubscribe'.$this->num.'(result){
				var form = document.adminForm;
				if(!form){
					form = document.mosForm;
				}

				var root = document.createElement(\'div\');

				root.innerHTML = result;
				var body = document.getElementsByTagName(\'body\')[0].appendChild(root);

				root.setAttribute("style", "width:150px; display:none");
				var submessage = document.getElementById(\'mod_message\');
				document.getElementsByTagName(\'body\')[0].removeChild(root);

				var loadingImage = document.getElementById(\'ajax_loading'.$this->num.'\');
				loadingImage.setAttribute("style","display:none");';

       			if(!$this->module_message && $this->effect != 'mootools-slide'){
		 			$js .=	'
					message = document.getElementById(\'message'.$this->num.'\');
					message.innerHTML = submessage.innerHTML;
					message.setAttribute(\'style\', \'display:block; padding:5px\');';

       				if($this->effect =='mootools-modal'){
						$js .= 'var window = document.getElementById("sbox-content");
							if(window != null){
								var alldiv = window.getElementsByTagName("div");
								for (var i = 0; i < alldiv.length; i++) {
									var divType = alldiv[i];
									var divid = alldiv[i].getAttribute(\'id\');
									if (divid == \'ajax_loading'.$this->num.'\') {
										divType.setAttribute("style","display:none; padding:5px");
									}
									if (divid == \'message'.$this->num.'\') {
										divType.setAttribute("style","display:block; padding:5px");
										divType.innerHTML=submessage.innerHTML;
									}
								}
							}
						';
					}
       			}else{
	       			if($this->effect =='mootools-modal'){
							$js .= 'var window = document.getElementById("sbox-content");
								if(window != null){
									var alldiv = window.getElementsByTagName("div");
									for (var i = 0; i < alldiv.length; i++) {
										var divType = alldiv[i];
										var divid = alldiv[i].getAttribute(\'id\');
										if (divid == \'ajax_loading'.$this->num.'\') {
											divType.setAttribute("style","display:none; padding:5px");
										}
									}
								}
							';
						}
       				$js .=	'alert(submessage.innerHTML)';
       			}

	$js .= '}';

	$js .='
	function insertNewCaptcha'.$this->num.'(html){
		var form = document.adminForm;
		if(!form){
			form = document.mosForm;
		}
		var window = document.getElementById("sbox-content");
		var root = document.getElementById("captcha'.$this->num.'");

		if(root == null){
		 	root = document.createElement(\'div\');
			root.setAttribute("style", "width:10px;heigth:10px;display:none;");
			root.setAttribute("id", "captcha'.$this->num.'");
			var body = document.getElementsByTagName(\'body\')[0].appendChild(root);
		}
		
		root.innerHTML = html;

		var newcode = document.getElementById(\'newcode\');
		var newesc = document.getElementById(\'newesc\');
		var newdecrypt = document.getElementById(\'newdecrypt\');
		var newpath = document.getElementById(\'newpath\');
		var newsecuritycaptcha = document.getElementById(\'security_captcha'.$this->num.'\');
		var newcaptcode = document.getElementById(\'captcode'.$this->num.'\');
		var image =  document.getElementById(\'captcha_image'.$this->num.'\');
		var path = newpath.innerHTML;
      	var intIndexOfMatch = path.indexOf( "&amp;" );

     	while (intIndexOfMatch != -1){
       		path= path.replace( "&amp;", "&" )
       		intIndexOfMatch = path.indexOf( "&amp;" );
      	}
		image.setAttribute("src", path);
		image.setAttribute("width", '.$this->captcha_width.');
		image.setAttribute("height", '.$this->captcha_height.');
		newsecuritycaptcha.value = newesc.innerHTML;
		newcaptcode.value = newcode.innerHTML;

		if( window != null ) {

			var captcha_image = document.getElementById(\'captcha_image'.$this->num.'\');
			var captcode = document.getElementById(\'captcode'.$this->num.'\');
			var security_captcha = document.getElementById(\'security_captcha'.$this->num.'\');

			security_captcha.value = newesc.innerHTML;
			captcode.value = newcode.innerHTML;
			
			captcha_image.setAttribute("src", path);
		}
		
		document.getElementsByTagName(\'body\')[0].removeChild(root);
	}
';

	     if( version_compare(JVERSION,'1.6.0','<') ){//1.5
	      $js .="function refreshCaptcha".$this->num."(url){
	      var form = document.adminForm;
				if(!form){
					form = document.mosForm;
				}
			var ajax = new Ajax(url,
 					{data: 'height=1',
 					method: 'POST',
 					onComplete : function(result){insertNewCaptcha".$this->num."(result); }
 					}
 				);
 				ajax.request();
		}";
       }else{

       	$js .="function refreshCaptcha".$this->num."(url){
	      var ajax = new Request({
				url : url,
				data: 'height=1',
				method: 'POST',
				onComplete : function(result){insertNewCaptcha".$this->num."(result); }
				});
				ajax.send();
		}";


       }
		    $js .= ' //-->
		      </script>';

	       return $js;
	}

	/**
	 * 
	 * function to display the new look for the subscripiton list
	 * @param $subscriber
	 * @param $loggedin
	 * @param $item
	 */
	function _showSubcriptionList( $subscriber, $loggedin=true, $item ){
		$html = '';
		$i=0;
		$accessLevel = 0;
		$userSubscribedLists = $loggedin ? jNews_ListsSubs::getSubscriberLists($subscriber->id) : '';

		if(!empty($this->hiddenlistIds)) $hiddenListIds = explode(',',$this->hiddenlistIds); //we retrieve the listIds set in the module
		
		if(!$this->linear) $html .= '<div class="subscriptionLists">';
		//we subscription list here
		if( $this->dropdown ) {
			$dropdown = '<input type="hidden" value="1" name="subscribed[1]"  />';
			$dropdown .= '<select class="aca_list_drop" name="sub_list_id[1]" id="sub_list_id[1]">';
		}
				
		if ( $this->showListName ) {
			if(!$this->linear) if(!$this->dropdown) $html .= '<ul class="jNewsLists">';
			
			foreach ($this->lists as $list) {
				$i++;
				$subscribed = 0;
				$accessLevel = 0;
				$checked = 0;
				
				if (!empty($userSubscribedLists)) {
					if ($loggedin) {
						foreach ($userSubscribedLists as $oneSubscribedList) {
							if ($list->id == $oneSubscribedList->list_id) {
								$subscribed = 1;
								$accessLevel = $oneSubscribedList->acc_level;
							}
						}
					}
				}	
				
				if ($list->html ==1) $htmlOK = true;
				
				$checked = 0;

				if ($loggedin) {
					$checked = $subscribed;
				} else {
					if ($this->defaultchecked) $checked = 1;
					$subscriber->blacklist = 0;
				}
				
				$checkedPrint = ($checked != 0) ? 'checked="checked"' : '';
				
				if ($list->hidden == 1) {
					if($this->dropdown){
						$extraselect = ($list->id == $this->selecteddrop) ? 'selected' : '';
						$dropdown .= '<option value="'.$list->id.'" '.$extraselect.'>'.$list->list_name.'</option>';
					}else{
						if(!$this->linear) $html .= '<li>';	
						if ($subscriber->blacklist == 0) {
							if($loggedin){
								$text = '<input id="wz_3'.$i.'" type="checkbox" class="inputbox" value="1" name="subscribed['.$i.']" '.$checkedPrint.' />';
							}else{
								if(!$this->red_subscription ){
									$text = '<input id="wz_3'.$i.'" type="checkbox" class="inputbox" value="'.$list->id.'" name="subscribed['.$i.']" '.$checkedPrint.' />';
							  	}else{
							  		$text = '<input id="wz_3'.$i.'" type="checkbox" class="inputbox" value="1" name="subscribed['.$i.']" '.$checkedPrint.' />';
							  	}
						  	}
						} else {
						  	if(!$this->red_subscription ){
						  		$text = '<input type="checkbox" class="inputbox" value="'.$list->id.'" name="subscribedfake['.$i.']" '.$checkedPrint.'  />';
						  	}else{
								$text = '<input type="checkbox" class="inputbox" value="1" name="subscribedfake['.$i.']" '.$checkedPrint.'  />';
						  	}
							$text .= '<input type="hidden" value="0" name="subscribed['.$i.']"  />';
						}
						
						$text .= "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" />';
						$link = (($list->list_type =='1' or $list->list_type =='7') && $GLOBALS[JNEWS.'show_archive'] ) ? 'index.php?option='.JNEWS_OPTION.$item.'&act=mailing&task=archive&listid='. $list->id .'&listype=' . $list->list_type : '#';
						$text .= "\n".'<span class="aca_list_name"';
						if ($link == "#"){$text .= " onclick='return false;' ";}
						$text .='>'.jNews_Tools::toolTip($list->list_desc, $list->list_name, '', '', $list->list_name, $link, 1).'</span>';
						$html .= jnews::printLine($this->linear, $text);
						$html .= "\n".'<input type="hidden" name="acc_level['.$i.']" value="'.$accessLevel.'" />'."\n\r";
						
						if(!$this->linear) $html .= '</li>';	
					}
				}else{
					if (!$loggedin) {
						$html .= '<input type="hidden"  value="1" name="subscribed['.$i.']" />';
						$html .=  "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" id="hidden_sub_lists"/>';
					}
				}
			}
			
			if(!$this->linear) if(!$this->dropdown) $html .= "</ul>";
		}else{
			foreach ($this->lists as $list) {
				$i++;
				$subscribed = 0;
				$accessLevel = 0;
				if ($loggedin) {
					if (!empty($userSubscribedLists)) {
						foreach ($userSubscribedLists as $oneSubscribedList) {
							if ($list->id == $oneSubscribedList->list_id) {
								$subscribed = 1;
								$accessLevel = $oneSubscribedList->acc_level;
							}
						}
					}
				}
				
				if ($list->html ==1) $htmlOK = true;

				$checked = 0;
				if ($loggedin) {
					$checked = $subscribed;
				} else {
					if ($this->defaultchecked) $checked = 1;
				}

				     $html .= '<input type="hidden"  value="'.$checked.'" name="subscribed['.$i.']" />';
				     $html .= '<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" id="hidden_sub_lists"/>';
				     $html .= '<input type="hidden" name="acc_level['.$i.']" value="'.$accessLevel.'" />';
				     if ($list->html ==1) $htmlOK = true;
			}
		}
		
		if($this->dropdown){
			$dropdown .= '</select>';
			$html .= $dropdown;
		}
		
		if(!$this->linear) $html .= '</div>';//enddiv divjNewsLists
		
//		$html = jnews::printLine($this->linear, $html);

		return $html;
	}

	/*<p>function to create the subscription listing where the user can choose to subscribe</p>
	 * @params log
	*/
	 function _showSubcriptionListOld($subscriber, $loggedin=true, $item){

		      $HTML = '';
		//We create the dropdown
		      if($this->dropdown){
			     $dropdown = '<input type="hidden" value="1" name="subscribed[1]"  />';
			     $dropdown .= '<select class="aca_list_drop" name="sub_list_id[1]" id="sub_list_id[1]">';
		      }

		      $i=0;
		      $accessLevel = 0;
		      $queues = $loggedin ? jNews_ListsSubs::getSubscriberLists($subscriber->id) : '';

		      //we retrieve the listIds set in the module
	       		if(!empty($this->hiddenlistIds)) $hiddenListIds = explode(',',$this->hiddenlistIds);
		      if ( $this->showListName ) {

							   foreach ($this->lists as $list) {
				    $i++;
				    $subscribed = 0;
				    $accessLevel = 0;
				    if ($loggedin) {
					   if (!empty($queues)) {
						  foreach ($queues as $queue) {
							 if ($list->id == $queue->list_id) {
								$subscribed = 1;
								$accessLevel = $queue->acc_level;
							 }
						  }
					   }
				    }
				     if ($list->html ==1) $htmlOK = true;

				     $checked = 0;

				     if ($loggedin) {
					    $checked = $subscribed;
				     } else {
				     	if ($this->defaultchecked) {$checked = 1;}
				        $subscriber->blacklist = 0;

				     }

				    $checkedPrint = ($checked != 0) ? 'checked="checked"' : '';

				    if ($list->hidden == 1) {
					   if($this->dropdown){
						  $extraselect = ($list->id == $this->selecteddrop) ? 'selected' : '';
						  $dropdown .= '<option value="'.$list->id.'" '.$extraselect.'>'.$list->list_name.'</option>';
					   }else{//889
						  if ($subscriber->blacklist == 0) {
						  	if($loggedin){
						  		$text = "\n".'<input id="wz_3'.$i.'" type="checkbox" class="inputbox" value="1" name="subscribed['.$i.']" '.$checkedPrint.' />';
						  	}else{
							  	if(!$this->red_subscription ){
								 $text = "\n".'<input id="wz_3'.$i.'" type="checkbox" class="inputbox" value="'.$list->id.'" name="subscribed['.$i.']" '.$checkedPrint.' />';
							  	}else{
							  		$text = "\n".'<input id="wz_3'.$i.'" type="checkbox" class="inputbox" value="1" name="subscribed['.$i.']" '.$checkedPrint.' />';
							  	}
						  	}
						  } else {
						  	if(!$this->red_subscription ){
						  		$text = "\n".'<input type="checkbox" class="inputbox" value="'.$list->id.'" name="subscribedfake['.$i.']" '.$checkedPrint.'  />';
						  	}else{
							 $text = "\n".'<input type="checkbox" class="inputbox" value="1" name="subscribedfake['.$i.']" '.$checkedPrint.'  />';
						  	}
							 $text .= "\n".'<input type="hidden" value="0" name="subscribed['.$i.']"  />';
						  }
						  $text .= "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" />';
						  $link = (($list->list_type =='1' or $list->list_type =='7') && $GLOBALS[JNEWS.'show_archive'] ) ? 'index.php?option='.JNEWS_OPTION.$item.'&act=mailing&task=archive&listid='. $list->id .'&listype=' . $list->list_type : '#';
						  $text .= "\n".'<span class="aca_list_name"';
						  if ($link == "#"){$text .= " onclick='return false;' ";}
						  $text .='>'.jNews_Tools::toolTip($list->list_desc, $list->list_name, '', '', $list->list_name, $link, 1).'</span>';
						  $HTML .= jnews::printLine($this->linear, $text);
						  $HTML .= "\n".'<input type="hidden" name="acc_level['.$i.']" value="'.$accessLevel.'" />'."\n\r";
					   }
				    } else {
				       if (!$loggedin) {
					      	$HTML .= '<input type="hidden"  value="1" name="subscribed['.$i.']" />';
					      	$HTML .=  "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" id="hidden_sub_lists"/>';
						}
				    }
			      }
		      } else {
			      foreach ($this->lists as $list) {
				    $i++;
				    $subscribed = 0;
				    $accessLevel = 0;
				    if ($loggedin) {
					   if (!empty($queues)) {
						  foreach ($queues as $queue) {
							 if ($list->id == $queue->list_id) {
								$subscribed = 1;
								$accessLevel = $queue->acc_level;
							 }
						  }
					   }
				    }
				     if ($list->html ==1) $htmlOK = true;

				     $checked = 0;
				     if ($loggedin) {
					    $checked = $subscribed;
				     } else {
					    if ($this->defaultchecked) {$checked = 1;}
				     }

				     $HTML .= '<input type="hidden"  value="'.$checked.'" name="subscribed['.$i.']" />';
				     $HTML .= "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" id="hidden_sub_lists"/>';
				     $HTML .= "\n".'<input type="hidden" name="acc_level['.$i.']" value="'.$accessLevel.'" />';
				     if ($list->html ==1) $htmlOK = true;
			      }
		      }

		      if($this->dropdown){
			     $dropdown .= '</select><br/>';
			     $HTML .= $dropdown;
		      }

		return $HTML;
	 }

        /*<p>function to show captcha </p>
	*
	*/
	function _showCaptcha($code){

		if ( session_id() == "" ) {
			session_start();
		}
		
		$captchaHTML='';
		$security_code='';
		$esc='';

		if( $this->enable_captcha){//if captcha is enabled
			if (extension_loaded('gd') AND extension_loaded('mcrypt')) {
				$gdinfo = gd_info();
				if($gdinfo['FreeType Support']){
					if(!$this->linear) $captchaHTML .= '<div class="subscriptionCaptcha">';
					$escaptcha = jNews_Captcha::encryptData($code, crypt( $GLOBALS[JNEWS.'captcha_code'], $GLOBALS[JNEWS.'captcha_code'] ) );
					$esc = $escaptcha;
					$decrypt=jNews_Captcha::decryptData( $esc, crypt( $GLOBALS[JNEWS.'captcha_code'], $GLOBALS[JNEWS.'captcha_code'] ) );
					$captchaHTML .= '<div class="captchImg">'; 
					$captchaHTML .= '<span class="captchaCodeCaption">'._JNEWS_CAPTCHA_CAPTION.'</span>';
					$path= JNEWS_JPATH_LIVE_NO_HTTPS.'/index.php?option='.JNEWS_OPTION.'&act=captcha&tmpl=component&width='.$this->captcha_width.'&height='.$this->captcha_height.'&bgcolor='.$this->captcha_bgcolor.'&ftcolor='.$this->captcha_ftcolor.'&characters=5&esc='. $esc.'&encpwd='.crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code'] );
					$captchaHTML .= '<img alt="catchme" style="border: 0px;" src="'. $path .'" id="captcha_image'.$this->num.'" />';
					$url = htmlentities( jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=refreshcaptcha&captchawidth='.$this->captcha_width.'&captchaheight='.$this->captcha_height .'&captchabgcolor='.$this->captcha_bgcolor.'&captchaftcolor='.$this->captcha_ftcolor, false, false, true ) );	
					$captchaHTML .= '&nbsp;<img alt="refresh" style="border: 0px;" src="'. JURI::base().'components/'.JNEWS_OPTION.'/images/refresh.png" onclick="refreshCaptcha'.$this->num.'(\''.$url.'\');" id="refreshButton" title="Refresh Captcha" />';
					$captchaHTML .= '</div>'; 
					$captchaHTML .='<div class="entered_captcha"><input class="inputbox" title ="'._JNEWS_CAPTCHA_TIPS.'" name="security_code" size="7" type="text" class="entered_captcha" /></div>';
					if(!$this->linear) $captchaHTML .= '</div>';
				}else{
					return '';
				}
			}else{ //otherwise we live an empty space for the captcha to avoid blank page
				$captchaHTML .= '';
			}
		}else{
			return '';
		}

		return $captchaHTML;

 	}
 	
        function _showCaptchaHidden($code){
				if(!$this->enable_captcha) return '';
	       $escaptcha = jNews_Captcha::encryptData($code, crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code']));
	       $esc = $escaptcha;
	       $newdecrypt = jNews_Captcha::decryptData($esc, crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code']));
	       $captchaHidden ='<input type="hidden" id="security_captcha'.$this->num.'" name="security_captcha" value="'.$esc.'" />';//captcha
	       $captchaHidden .='<input type="hidden" id="captcode'.$this->num.'" name="captcode" value="'.$newdecrypt.'" />';//captcha

	       return $captchaHidden;
        }

        
        function _showButton($registered=false){
        	$url = htmlentities( jNews_Tools::completeLink(  'option='.JNEWS_OPTION.'&act=noredsubscribe' , false, false, true ) );
			
        	$btnHTML = '';
			if (!$registered){
		      if ( isset($this->imgUnregistered) ) {
			     $btn = '<input id="aca_22" type="image" src="'.$this->imgUnregistered.'" value="'.$this->buttonUnregistered.'" alt="'.$this->buttonUnregistered.'" name="'.$this->buttonUnregistered.'" onclick="return submitjnewsmod'.$this->num.'(\'modjnewsForm'.$this->num.'\',\''.$url.'\');" />';
		      }else{
			if ( !empty($this->redirectURL) ) {
							$btn = '<input id="aca_22" type="submit" value="'.$this->buttonUnregistered.'" class="button" name="'.$this->buttonUnregistered.'" />';
			} else {
							$btn = '<input id="aca_22" type="button" value="'.$this->buttonUnregistered.'" class="button" name="'.$this->buttonUnregistered.'" onclick="return submitjnewsmod'.$this->num.'(\'modjnewsForm'.$this->num.'\',\''.$url.'\');" />';
			}
				      if($this->effect == 'mootools-slide' && !$this->red_subscription){
			       			$btnHTML .= '<div style="display:none; width:50px; padding-top:5px; height:100%" id="ajax_loading'.$this->num.'"><img alt="loader" src="'.JURI::base().'components/'.JNEWS_OPTION.'/images/16/ajax-loader.gif"/>'._JNEWS_PLEASE_WAIT.'</div>';
			       		}
		      }

		      $btnHTML .= jnews::printLine($this->linear, $btn);
		      $hidden = '<input type="hidden" name="act" value="subscribe" />';
		      $hidden .= '<input type="hidden" name="redirectlink" value="' . $this->redirectURL .'" />';
		      $hidden .= '<input type="hidden" name="listname" value="' . $this->showListName .'" />';
		      $hidden .= '<input type="hidden" id="passwordA" name="passwordA" value="'.crypt($GLOBALS[JNEWS.'url_pass'],$GLOBALS[JNEWS.'url_pass']).'" />';
		      $hidden .= '<input type="hidden" name="fromSubscribe" value="1" />';

		      $btnHTML .= $hidden;
	       }else{

		      if ( isset($this->imgRegistered) ) {
			     $btn = '<input id="aca_22" type="image" src="'.$this->imgRegistered.'" value="'.$this->buttonRegistered.'" alt="'.$this->buttonRegistered.'" name="'.$this->buttonRegistered.'"/>';
		      } else {
			     $btn = '<input id="aca_22"  type="submit" value="'. $this->buttonRegistered .'" name="'.$this->buttonRegistered.'" class="button" />';
		      }

		      $btnHTML .= jnews::printLine($this->linear, $btn);
		      $hidden = '<input type="hidden" name="act" value="updatesubscription" />';
		      $hidden .= '<input type="hidden" name="redirectlink" value="' . $this->redirectURL .'" />';
		      $hidden .= '<input type="hidden" name="listname" value="' . $this->showListName .'" />';
		      $btnHTML .= $hidden;
	       }
	
	       return $btnHTML;
	       
        }
        
        
/**
         * display the inputfields in the module
         */
        function showInputFields(){
        	$HTML = '';
        	
        	//name field
			if ($this->shownamefield) {
				$text = '<input id="wz_11" type="text" size="'. $this->fieldsize.'" value="'. addslashes(_JNEWS_NAME).'" class="inputbox" name="name" onblur="if(this.value==\'\') this.value=\''. addslashes(_JNEWS_NAME).'\';" onfocus="if(this.value==\''. addslashes(_JNEWS_NAME).'\') this.value=\'\' ; " />';
				$HTML .= jnews::printLine($this->linear, $text);
			} else {
				$text = '<input id="wz_11" type="hidden" value="" name="name" />';
			}

		    //email field
		    $text = '<input id="wz_12" type="email" size="' .$this->fieldsize .'" value="' . addslashes(_JNEWS_EMAIL) .'" class="inputbox" name="email" onblur="if(this.value==\'\') this.value=\'' . addslashes(_JNEWS_EMAIL) .'\';" onfocus="if(this.value==\'' . addslashes(_JNEWS_EMAIL) .'\') this.value=\'\' ; " />';
		    $HTML .= jnews::printLine($this->linear, $text);
		    
			//for field columns
			if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro

				if ($this->column1){//show column1 in the subscribers module
					$text = '<input id="wz_13" type="text" size="' .$this->fieldsize .'" value="' . addslashes($GLOBALS[JNEWS.'column1_name']) .'" class="inputbox" name="column1" onblur="if(this.value==\'\') this.value=\'' . addslashes($GLOBALS[JNEWS.'column1_name']) .'\';" onfocus="if(this.value==\'' . addslashes($GLOBALS[JNEWS.'column1_name']) .'\') this.value=\'\' ; " />';
					$HTML .= jnews::printLine($this->linear, $text);
				}

			   if ($this->column2){//show column2 in the subscribers module
				  $text = '<input id="wz_14" type="text" size="' .$this->fieldsize .'" value="' . addslashes($GLOBALS[JNEWS.'column2_name']) .'" class="inputbox" name="column2" onblur="if(this.value==\'\') this.value=\'' . addslashes($GLOBALS[JNEWS.'column2_name']) .'\';" onfocus="if(this.value==\'' . addslashes($GLOBALS[JNEWS.'column2_name']) .'\') this.value=\'\' ; " />';
				  $HTML .= jnews::printLine($this->linear, $text);
			   }

			   if ($this->column3){//show column3 in the subscribers module
				  $text = '<input id="wz_15" type="text" size="' .$this->fieldsize .'" value="' . addslashes($GLOBALS[JNEWS.'column3_name']) .'" class="inputbox" name="column3" onblur="if(this.value==\'\') this.value=\'' . addslashes($GLOBALS[JNEWS.'column3_name']) .'\';" onfocus="if(this.value==\'' . addslashes($GLOBALS[JNEWS.'column3_name']) .'\') this.value=\'\' ; " />';
				  $HTML .= jnews::printLine($this->linear, $text);
			   }

			   if ($this->column4){//show column4 in the subscribers module
				  $text = '<input id="wz_16" type="text" size="' .$this->fieldsize .'" value="' . addslashes($GLOBALS[JNEWS.'column4_name']) .'" class="inputbox" name="column4" onblur="if(this.value==\'\') this.value=\'' . addslashes($GLOBALS[JNEWS.'column4_name']) .'\';" onfocus="if(this.value==\'' . addslashes($GLOBALS[JNEWS.'column4_name']) .'\') this.value=\'\' ; " />';
				  $HTML .= jnews::printLine($this->linear, $text);
			   }
			   if ($this->column5){//show column5 in the subscribers module
				  $text = '<input id="wz_17" type="text" size="' .$this->fieldsize .'" value="' . addslashes($GLOBALS[JNEWS.'column5_name']) .'" class="inputbox" name="column5" onblur="if(this.value==\'\') this.value=\'' . addslashes($GLOBALS[JNEWS.'column5_name']) .'\';" onfocus="if(this.value==\'' . addslashes($GLOBALS[JNEWS.'column5_name']) .'\') this.value=\'\' ; " />';
				  $HTML .= jnews::printLine($this->linear, $text);
			   }
			}
			
			return $HTML;
        }
        
/**
         * to display message if unregistered not allowed
         */
        function NeedToRegister(){
        	$HTML = '';
        	
        	$HTML .= _JNEWS_REGISTER_REQUIRED . '<br />';
        	
		    $text = _NO_ACCOUNT." ";
		    if ( isset( $GLOBALS[JNEWS.'cb_integration'] ) && $GLOBALS[JNEWS.'cb_integration'] ) {
			   $linkme = 'option=com_comprofiler&task=registers';
		    } else {
		    	if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
		    		$linkme = 'option=com_users&view=registration';
		    	} else {
		    		$linkme = 'option=com_user&task=register';
		    	}
		    }

		    $linkme = jNews_Tools::completeLink($linkme,false);

		    $text .= '<a href="'. $linkme.'">';
		    $text .= _CREATE_ACCOUNT."</a>";
		    $HTML .= jnews::printLine( $this->linear, $text );
        	
        	return $HTML;
        }
        
/**
		* display the receive html	
		* @param subscriber subscriber info of a logged in user
         */
        function showReceiveHTML($subscriber){
        	$HTML = '';
        	
        	$checked = !empty($subscriber->receive_html) ? $subscriber->receive_html : $this->receivehtmldefault;
			if ($this->showreceivehtml) {
				$checkedPrint = ($checked != 0) ? 'checked="checked"' : '';
				$text = '<input id="wz_2" type="checkbox" class="inputbox" value="1" name="receive_html" '.$checkedPrint.' />';
				$text .= ' <span class="receiveHTML">'._JNEWS_RECEIVE_HTML . '</span>';
				$HTML .= jnews::printLine($this->linear, $text);
			} else {
				$HTML .= '<input id="wz_2" type="hidden" value="'.$checked.'" name="receive_html" />' . "\n";
			}
			
        	return $HTML;
        }
        
        /**
         * 
         * show the terms in the module
         */
        function showTerms(){
        	$html = '';
        	
        	if($this->show_terms){
		     	if($this->check_terms) $text = '<input id="wz_terms" type="checkbox" class="inputbox" value="0" name="terms_condition" checked="checked"/>';
		     	else $text = '<input id="wz_terms" type="checkbox" class="inputbox" value="0" name="terms_condition" />';
		     	
				if(!empty($this->terms_condition) OR !empty($this->terms_condition)) $text .= '<a href="'.$this->terms_condition.'" TARGET="_NEW"> '._JNEWS_TERMS_CONDITIONS.'</a>';
				else $text .= _JNEWS_TERMS_CONDITIONS;
	
				$html .= jnews::printLine($this->linear, $text);
		     }
        	
        	return $html;
        }
        
        /**
         * 
         * display in the module when registered
         */
        function forLoggedIn($Itemid){
        	$HTML = '';
        	
        	$checked =  $this->receivehtmldefault;
			if ($this->showreceivehtml) {
				$checkedPrint = ($checked != 0) ? 'checked="checked"' : '';
			    $text = '<input id="wz_2" type="checkbox" class="inputbox" value="1" name="receive_html" '.$checkedPrint.' />';
			    $text .= ' <span class="receiveHTML">'._JNEWS_RECEIVE_HTML . '</span>';
			    $HTML .= jnews::printLine($this->linear, $text);
			} else {
				$HTML .= '<input id="wz_2" type="hidden" value="'.$checked.'" name="receive_html" />' . "\n";
			}
		     
			$my = JFactory::getUser();
			$subscriber=jNews_Subscribers::getSubscriberInfoFromUserId($my->id);//get the user subscriber info
		     
			if( $GLOBALS[JNEWS.'show_unsubscribe_all'] ) {
				$link = 'option='.JNEWS_OPTION.'&act=unsubscribeall&subscriber=' . $subscriber->id . '&Itemid=' . $Itemid;
				$link = jNews_Tools::completeLink( $link, false );
				$text ='<span class="aca_list_name"><a href="'.$link.'">'._JNEWS_UNSUBSCRIBE_ALL.'</a></span>';
				$HTML .= jnews::printLine($this->linear, $text );
			}

			$HTML .= $this->_showButton(true);
			
        	return $HTML;
        }
        

        function _addCSS() {
        	$doc = JFactory::getDocument();
        	if ( $this->cssfile != 'default.css' ) $doc->addStyleSheet( JNEWS_JPATH_LIVE . '/media/'.JNEWS_OPTION.'/modules/css/' . $this->cssfile );
			$doc->addStyleSheet( JNEWS_JPATH_LIVE . '/media/'.JNEWS_OPTION.'/modules/css/default.css' );
			return true;
        }
        
/**
         * we get the subscribers info using the the id of the user.
         * @param int $id id of the user
         * @retrun object $subscriber info of the subscriber
         */
        function _getSubscriberInfo($id){
        	$subscriber = '';
        	
        	$subscriber = jNews_Subscribers::getSubscriberInfoFromUserId($id);//we get subscriber info if this user is a subscriber of jnews
			if(empty($subscriber)){//if there is no record for the user
				jNews_Subscribers::syncSubscribers(true);//we sync the user as subscriber
				$subscriber = jNews_Subscribers::getSubscriberInfoFromUserId($id);//we get the subscriber info
			}
        	
        	return $subscriber;
        }
        
/**
         * function to add the script for the mootools- slide
         * Enter description here ...
         */
        function _addMootoolsSlide(){
        	$HTML = '';
        	$doc = JFactory::getDocument();
			$js = "<!--
					window.addEvent('domready', function(){
						var mySlide = new Fx.Slide('modjnewstoggle".$this->num."');
						mySlide.hide();
						$('acatoggleclick".$this->num."').addEvent('click', function(e){
							e = new Event(e);
							mySlide.toggle();
							e.stop();
						});
					});
					//-->";
			$doc->addScriptDeclaration( $js );
			$link = 'id="acatoggleclick'.$this->num.'"';
			$HTML .= '<center><a '.$link;
			$HTML .= ' style="text-decoration: none;" href="#">';

			if (isset($this->mootools_btntext)) {
				$HTML .= '<div id="aca_clickcontainer" style="padding:4px;"><center><span>'.$this->mootools_btntext.'</span></center></div></a></center>';
			}else{
				$HTML .= '<div id="aca_clickcontainer" style="padding:4px;"><center><span>'. _JNEWS_MOOTOOLS_BTNTEXT .'</span></center></div></a></center>';
			}

		   	$HTML .= '<div id="modjnewstoggle'.$this->num.'">';
			$HTML .= '<div id="acamoduletoggle'.$this->num.'" style="padding: 3px;">';
        	
        	return $HTML;
        }
        
        /**
         * function to add the script for the mootools modal
         */
        function _addMootoolsModal(){
        	$HTML = '';
        	
        	JHTML::_('behavior.modal');
        	
			if( version_compare(JVERSION,'1.6.0','<') ){ //j15
				$link = "rel=\"{handler: 'adopt', adopt:'acapop".$this->num."', size: {x:$this->mootools_boxw, y:$this->mootools_boxh}}\" class=\"modal aca_clicklink".$this->num."\"";
				$url = '#';
			}else{ //j16
				$link = "rel=\"{handler: 'iframe', adopt:'acapop".$this->num."', size: {x:$this->mootools_boxw, y:$this->mootools_boxh}}\" class=\"modal aca_clicklink".$this->num."\"";
				$url = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=module&modid=' . $this->moduleID, false, true, true );
			}   	
			
			
	     	$HTML .= '<center>';
    		$HTML .= '<a '.$link;
			$HTML .= ' style="text-decoration: none;" href="'.$url.'">';

			if (isset($this->mootools_btntext)) {
				$HTML .= '<div id="aca_clickcontainer" style="padding:4px;"><center><span>'.$this->mootools_btntext.'</center></span></div></a></center>';
			}else{
				$HTML .= '<div id="aca_clickcontainer" style="padding:4px;"><center><span>'. _JNEWS_MOOTOOLS_BTNTEXT .'</span></center></div></a></center>';
			}

			$HTML .= '<div style="margin: 0px; overflow: hidden; height: 0px;">';
    		$HTML .= '<div class="jnews_module'.$this->num.'" style="display: none;">';
			$HTML .= '<div id="acapop'.$this->num.'" style="padding: 15px;">';
        	
        	return $HTML;
        }

}
