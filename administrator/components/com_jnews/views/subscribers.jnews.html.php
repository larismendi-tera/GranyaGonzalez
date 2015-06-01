<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_SubscribersHTML {

public static function editSubscriberFE($subscriber, $listings, $queues, $forms, $access=false, $frontEnd=false, $cb=false ){
		$mainframe = JFactory::getApplication();
		$my = JFactory::getUser();

		if(!$GLOBALS[JNEWS.'disabletooltip']){
			JHTML::_('behavior.tooltip');
		}

		if(empty($subscriber->name)) $subscriber->name='';
	 	$text = str_replace('"', '&quot;' , $subscriber->name);
	 	if (function_exists('htmlspecialchars_decode')) {
	 		$text = htmlspecialchars_decode( $text , ENT_NOQUOTES );
	 	} elseif (function_exists('html_entity_decode')) {
	 		$text = html_entity_decode( $text , ENT_NOQUOTES );
	 	}

		if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
			$gid = JAccess::getGroupsByUser($my->id, false);
			$my->gid = $gid[0];
		}

		$gidAdmins = array(24,25,7,8);

		$nRows = intval($GLOBALS[JNEWS.'create_newsubsrows']);

		if(in_array($my->gid,$gidAdmins)) {
			$ownedLists = jNews_Lists::getLists('', 1, '', '', false, true, false, false, true );
		}else{
			$ownedLists = jNews_Lists::getFEListsByOwner($my->id);
		}

		$listOpt = array();
		$selectedList = 0;
		$listOpt[] = JHTML::_('select.option', 0, 'No List Selected');
		foreach($ownedLists as $list){
			$listOpt[] = JHTML::_('select.option', $list->id, $list->list_name);
		}

		$br = "\n\r";
		$html = $forms['main'];
		$html .= '<div style="width:100%; align:left;">'.$br;
		$html .= '<fieldset class="jnewscss" style="padding: 10px; text-align: left">'.$br;
		$html .= '<legend><strong>'._JNEWS_SUB_INFO.'</strong></legend>'.$br;
		$html .= '<div><strong>Subscribe Contacts to a List:</strong>&nbsp;&nbsp;&nbsp;'.JHTML::_('select.genericlist', $listOpt,'opted_list', 'class="inputbox"','value', 'text',$selectedList).'</div>';
		
		$html .= '<table cellpadding="2" cellspacing="0" align="center">';
		$count = 0;
		for($count = 1; $count <= $nRows; $count++){
			if (!$cb) {
				$html .= '<tr id=tr'.$count.'>';
				$html .= '<td style="padding-right: 10px; padding-top: 15px;"> <input id="name" type="text" name="name'.$count.'" size="20" value="'. addslashes(_JNEWS_NAME) .'" class="inputbox" name="name" onblur="if(this.value==\'\') this.value=\''. addslashes(_JNEWS_NAME).'\';" onfocus="if(this.value==\''. addslashes(_JNEWS_NAME).'\') this.value=\'\' ; "  /></td>' ;
				if(empty($subscriber->email) || !jNews_Subscribers::validEmail($subscriber->email) ) $subscriber->email='';
				$html .= '<td style="padding-right: 10px; padding-top: 15px;"> <input id="email" type="text" name="email'.$count.'" size="20" value="'. addslashes(_JNEWS_EMAIL) .'" class="inputbox" name="name" onblur="if(this.value==\'\') this.value=\''. addslashes(_JNEWS_EMAIL).'\'; else {status= checkEmail(this.value);  if(!status) this.focus;}" onfocus="if(this.value==\''. addslashes(_JNEWS_EMAIL).'\') this.value=\'\' ; "  /></td>';

				//additional columns
				if($GLOBALS[JNEWS.'level'] > 2){	//check if the version of jnewsletter is pro
					if(empty($subscriber->column1)){
						$subscriber->column1='';
					}
					if(empty($subscriber->column2)){
						$subscriber->column2='';
					}
					if(empty($subscriber->column3)){
						$subscriber->column3='';
					}
					if(empty($subscriber->column4)){
						$subscriber->column4='';
					}
					if(empty($subscriber->column5)){
						$subscriber->column5='';
					}

					if($GLOBALS[JNEWS.'show_column1']){//show column1
						$html .= '<td style="padding-right: 10px; padding-top: 15px;"> <input id="column1" type="text" name="column1'.$count .'" size="20" value="'.$GLOBALS[JNEWS.'column1_name'].'" class="inputbox" name="name" onblur="if(this.value==\'\') this.value=\''. $GLOBALS[JNEWS.'column1_name'].'\';" onfocus="if(this.value==\''. $GLOBALS[JNEWS.'column1_name'].'\') this.value=\'\' ; "  /></td>';
					}
					if($GLOBALS[JNEWS.'show_column2']){//show column2
						$html .= '<td style="padding-right: 10px; padding-top: 15px;"> <input id="column2" type="text" name="column2'.$count .'" size="20" value="'.$GLOBALS[JNEWS.'column2_name'].'" class="inputbox" name="name" onblur="if(this.value==\'\') this.value=\''. $GLOBALS[JNEWS.'column2_name'].'\';" onfocus="if(this.value==\''. $GLOBALS[JNEWS.'column2_name'].'\') this.value=\'\' ; "  /></td>';
					}
					if($GLOBALS[JNEWS.'show_column3']){//show column3
						$html .= '<td style="padding-right: 10px; padding-top: 15px;"> <input id="column3" type="text" name="column3'.$count .'" size="20" value="'.$GLOBALS[JNEWS.'column3_name'].'" class="inputbox" name="name" onblur="if(this.value==\'\') this.value=\''. $GLOBALS[JNEWS.'column3_name'].'\';" onfocus="if(this.value==\''. $GLOBALS[JNEWS.'column3_name'].'\') this.value=\'\' ; "  /></td>';
					}
					if($GLOBALS[JNEWS.'show_column4']){//show column4
						$html .= '<td style="padding-right: 10px; padding-top: 15px;"> <input id="column4" type="text" name="column4'.$count .'" size="20" value="'.$GLOBALS[JNEWS.'column4_name'].'" class="inputbox" name="name" onblur="if(this.value==\'\') this.value=\''. $GLOBALS[JNEWS.'column4_name'].'\';" onfocus="if(this.value==\''. $GLOBALS[JNEWS.'column4_name'].'\') this.value=\'\' ; "   /></td>';
					}
					if($GLOBALS[JNEWS.'show_column5']){//show column5
						$html .= '<td style="padding-right: 10px; padding-top: 15px;"> <input id="column5" type="text" name="column5'.$count .'" size="20" value="'.$GLOBALS[JNEWS.'column5_name'].'" class="inputbox" name="name" onblur="if(this.value==\'\') this.value=\''. $GLOBALS[JNEWS.'column5_name'].'\';" onfocus="if(this.value==\''. $GLOBALS[JNEWS.'column5_name'].'\') this.value=\'\' ; "  /></td>';
					}
				}

			} else {
				$html .= '<input type="hidden" name="cb_integration" value="1"  />';
			}

			$html .=  '<input id="confirmed" type="hidden" name="confirmed'.$count.'" value="1" />';
		 	$html .=  '<input id="receive_html" type="hidden" name="receive_html'.$count.'" value="1" />';
		 	$html .=  '<input id="blacklist" type="hidden" name="blacklist'.$count.'" value="0" />';
		 	$html .= '</tr>';
		}

		$html .= '</table>';
		$html .=  '<br><div id="addmore" >';
		$html .= '<input id="count" type="hidden" name="count" value="'.$count.'" />';
		$html .= '<input id="jnewsname" type="hidden" name="jnewsname" value="'.addslashes(_JNEWS_NAME).'" />';
		$html .= '<input id="jnewsemail" type="hidden" name="jnewsemail" value="'.addslashes(_JNEWS_EMAIL).'" />';
		$html .= '<input id="jnewscolumn1" type="hidden" name="jnewscolumn1" value="'.$GLOBALS[JNEWS.'column1_name'].'" />';
		$html .= '<input id="jnewscolumn2" type="hidden" name="jnewscolumn2" value="'.$GLOBALS[JNEWS.'column2_name'].'" />';
		$html .= '<input id="jnewscolumn3" type="hidden" name="jnewscolumn3" value="'.$GLOBALS[JNEWS.'column3_name'].'" />';
		$html .= '<input id="jnewscolumn4" type="hidden" name="jnewscolumn4" value="'.$GLOBALS[JNEWS.'column4_name'].'" />';
		$html .= '<input id="jnewscolumn5" type="hidden" name="jnewscolumn5" value="'.$GLOBALS[JNEWS.'column5_name'].'" />';
		$html .= '<input id="aca_22" type="button" value="Add More" alt="addmore" name="addmore" onclick="addmorefields();" /></div>';
		$html .= '</fieldset></div>';
		return $html;

	}



	 public static function editSubscriber($subscriber, $listings, $queues, $forms, $access=false, $frontEnd=false, $cb=false ) {
		 $mainframe = JFactory::getApplication();
		 $my = JFactory::getUser();

		if(!$GLOBALS[JNEWS.'disabletooltip']){
			JHTML::_('behavior.tooltip');
		}
		//$lists['receive_html'] = JHTML::_('select.booleanlist', 'receive_html', 'class="inputbox"', $subscriber->receive_html );
		if(empty($subscriber->receive_html)) $subscriber->receive_html=0;
		$lists['receive_html'] = JHTML::_('select.booleanlist', 'receive_html', 'class="inputbox"', $subscriber->receive_html, JText::_(_CMN_YES), JText::_(_CMN_NO) );
		//Fixed added by Lorenz Meyer for the Yes No Translation
		if(empty($subscriber->confirmed)) $subscriber->confirmed=0;
		$lists['confirmed'] = JHTML::_('select.booleanlist', 'confirmed', 'class="inputbox"', $subscriber->confirmed, JText::_(_CMN_YES), JText::_(_CMN_NO) );
		if(empty($subscriber->blacklist)) $subscriber->blacklist=0;
		$lists['blacklist'] = JHTML::_('select.booleanlist', 'blacklist', 'class="inputbox"', $subscriber->blacklist, JText::_(_CMN_YES), JText::_(_CMN_NO) );

		$br = "\n\r";
 		$html = $forms['main'];
		$html .= '<div style="width:100%; align:left;">'.$br;
		$html .= '<fieldset class="jnewscss" style="padding: 10px; text-align: left">'.$br;
		$html .= '<legend><strong>'._JNEWS_SUB_INFO.'</strong></legend>'.$br;
		$html .= '<table cellpadding="2" cellspacing="0" align="center"><tr><td>'.$br;
		
		if(empty($subscriber->name)) $subscriber->name='';
	 	$text = str_replace('"', '&quot;' , $subscriber->name);
	 	if (function_exists('htmlspecialchars_decode')) {
	 		$text = htmlspecialchars_decode( $text , ENT_NOQUOTES );
	 	} elseif (function_exists('html_entity_decode')) {
	 		$text = html_entity_decode( $text , ENT_NOQUOTES );
	 	}

		if (!$cb) {
			$html .= jnews::miseEnHTML(_JNEWS_INPUT_NAME , _JNEWS_INPUT_NAME_TIPS, '<input type="text" name="name" size="30" value="'. $text .'" class="inputbox" />');
			if(empty($subscriber->email) || !jNews_Subscribers::validEmail($subscriber->email) ) $subscriber->email='';
			$html .= jnews::miseEnHTML(_JNEWS_INPUT_EMAIL , _JNEWS_INPUT_EMAIL_TIPS, '<input type="text" name="email" size="30" class="inputbox" value="'.$subscriber->email.'"  />');

			//additional columns
			if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
				if(empty($subscriber->column1)){
					$subscriber->column1='';
				}
				if(empty($subscriber->column2)){
					$subscriber->column2='';
				}
				if(empty($subscriber->column3)){
					$subscriber->column3='';
				}
				if(empty($subscriber->column4)){
					$subscriber->column4='';
				}
				if(empty($subscriber->column5)){
					$subscriber->column5='';
				}

				if($GLOBALS[JNEWS.'show_column1']){//show column1
					$html .= jnews::miseEnHTML($GLOBALS[JNEWS.'column1_name'] , _JNEWS_INPUT_COLUMN_TIPS . '1', '<input type="text" name="column1" size="30" class="inputbox" value="'.$subscriber->column1.'"  />');
				}
				if($GLOBALS[JNEWS.'show_column2']){//show column2
					$html .= jnews::miseEnHTML($GLOBALS[JNEWS.'column2_name'] , _JNEWS_INPUT_COLUMN_TIPS . '2', '<input type="text" name="column2" size="30" class="inputbox" value="'.$subscriber->column2.'"  />');
				}
				if($GLOBALS[JNEWS.'show_column3']){//show column3
					$html .= jnews::miseEnHTML($GLOBALS[JNEWS.'column3_name'] , _JNEWS_INPUT_COLUMN_TIPS . '3', '<input type="text" name="column3" size="30" class="inputbox" value="'.$subscriber->column3.'"  />');
				}
				if($GLOBALS[JNEWS.'show_column4']){//show column4
					$html .= jnews::miseEnHTML($GLOBALS[JNEWS.'column4_name'] , _JNEWS_INPUT_COLUMN_TIPS . '4', '<input type="text" name="column4" size="30" class="inputbox" value="'.$subscriber->column4.'"  />');
				}
				if($GLOBALS[JNEWS.'show_column5']){//show column5
					$html .= jnews::miseEnHTML($GLOBALS[JNEWS.'column5_name'] , _JNEWS_INPUT_COLUMN_TIPS . '5', '<input type="text" name="column5" size="30" class="inputbox" value="'.$subscriber->column5.'"  />');
				}
			}

			
		} else {
			$html .= '<input type="hidden" name="cb_integration" value="1"  />';
		}

		if(empty($subscriber->ip)) $subscriber->ip='';
		//$mainframe = JFactory::getApplication();
		if($mainframe->isAdmin() OR $GLOBALS[JNEWS.'sub_info_fields']) {
			$html .= jnews::miseEnHTML(_JNEWS_IP , _JNEWS_IP_TIPS, $subscriber->ip);
		}
		$html .= jnews::miseEnHTML(_JNEWS_RECEIVE_HTML, _JNEWS_RECEIVE_HTML_TIPS, $lists['receive_html']);

		if ($GLOBALS[JNEWS.'time_zone']==1) {
			$html .= jnews::miseEnHTML(_JNEWS_TIME_ZONE_ASK , _JNEWS_TIME_ZONE_ASK_TIPS, ' <input type="text" name="timezone" size="30" class="inputbox" value="' .$subscriber->timezone.'"  />' );
 		} else {
			if(empty($subscriber->timezone)) $subscriber->timezone='';
			$html .= '<input type="hidden" name="timezone" value="'.$subscriber->timezone.'"  />';
 		}
		
		 if ($access) {
		 	if(empty($subscriber->user_id)) $subscriber->user_id=0;
		 	 if ($subscriber->user_id==0) {
		 	 	if($mainframe->isAdmin() OR $GLOBALS[JNEWS.'confirm_html'])
					$html .= jnews::miseEnHTML(_JNEWS_CONFIRMED , '', $lists['confirmed']);
			 } else {
				if( !$cb or !$mainframe->isAdmin() ) $html .=  '<input type="hidden" name="confirmed" value="'. $subscriber->confirmed.'" />';
			 }

			//improvement added; blacklist will only be shown in the backend
			if($mainframe->isAdmin() OR $GLOBALS[JNEWS.'sub_info_fields']) $html .= jnews::miseEnHTML(_JNEWS_BLACK_LIST , '', $lists['blacklist']);
			if(empty($subscriber->subscribe_date)) $subscriber->subscribe_date=0;
			if($mainframe->isAdmin() OR $GLOBALS[JNEWS.'sub_info_fields']){
				$html .= jnews::miseEnHTML(_JNEWS_REGISTRATION_DATE , '', date('Y-m-d h:i', jnews::getNow( 0, true, $subscriber->subscribe_date ) ) );
				$html .= jnews::miseEnHTML(_JNEWS_USER_ID , '', $subscriber->user_id );
			}
		 } else {
			 	
		 	$html .=  '<input type="hidden" name="confirmed" value="'. $subscriber->confirmed.'" />';
		 	$html .=  '<input type="hidden" name="blacklist" value="'.$subscriber->blacklist.'" />';
		 }
			//captcha FE
			if ( empty($my->id) && !$cb && !$mainframe->isAdmin() && class_exists('jNews_Captcha') && $GLOBALS[JNEWS.'level'] > 2 ) {
				if ( extension_loaded('gd') && extension_loaded('mcrypt') && class_exists('jNews_Captcha') ) {
					$gdinfo = gd_info();
					$captchaHTML='';
					$captcha_width = 80;
					$captcha_height = 30;
					$captcha_bgcolor = '';
					$captcha_ftcolor = '';
					if ( $gdinfo['FreeType Support'] ) {
						$code = jNews_Captcha::generateCode('5');
						$captchaHTML .= '<div class="subscriptionCaptcha" style="float:left;">';
						$escaptcha = jNews_Captcha::encryptData($code, crypt( $GLOBALS[JNEWS.'captcha_code'], $GLOBALS[JNEWS.'captcha_code'] ) );
						$esc = $escaptcha;
						$decrypt=jNews_Captcha::decryptData( $esc, crypt( $GLOBALS[JNEWS.'captcha_code'], $GLOBALS[JNEWS.'captcha_code'] ) );
						
						$path= JNEWS_JPATH_LIVE_NO_HTTPS.'/index.php?option='.JNEWS_OPTION.'&act=captcha&tmpl=component&width='.$captcha_width.'&height='.$captcha_height.'&bgcolor='.$captcha_bgcolor.'&ftcolor='.$captcha_ftcolor.'&characters=5&esc='. $esc.'&encpwd='.crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code'] );
						$captchaHTML .= '<img alt="catchme" style="border: 0px;" src="'. $path .'" id="captcha_image1" />';
						$url = htmlentities( jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=refreshcaptcha&captchawidth='.$captcha_width.'&captchaheight='.$captcha_height .'&captchabgcolor='.$captcha_bgcolor.'&captchaftcolor='.$captcha_ftcolor, false, false, true ) );	
						$captchaHTML .= '&nbsp;<img alt="refresh" style="border: 0px;" src="'. JURI::base().'components/'.JNEWS_OPTION.'/images/refresh.png" onclick="refreshCaptcha1(\''.$url.'\');" id="refreshButton" title="Refresh Captcha" />';
						$captchaHTML .= '</div>'; 
						$captchaHTML .='<div class="entered_captcha"><input class="inputbox" title ="'._JNEWS_CAPTCHA_TIPS.'" name="security_code" size="7" type="text" class="entered_captcha"/></div>';
						$captchaHTML .= '</div>';
						
						$html .= jnews::miseEnHTML( _JNEWS_CAPTCHA_CAPTION, '', $captchaHTML );
										
						$escaptcha = jNews_Captcha::encryptData($code, crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code']));
				       $esc = $escaptcha;
				       $newdecrypt = jNews_Captcha::decryptData($esc, crypt($GLOBALS[JNEWS.'captcha_code'],$GLOBALS[JNEWS.'captcha_code']));
				       $html .='<input type="hidden" id="security_captcha1" name="security_captcha" value="'.$esc.'" />';
				       $html .='<input type="hidden" id="captcode1" name="captcode" value="'.$newdecrypt.'" />';
						
	       //checking of captcha
//	       $js = 'if(form.security_code.value == "") {alert( "' . addslashes(_JNEWS_REGWARN_CAPTCHA) .' " ); return false;}';
//		   $js .= 'if(form.security_code.value != form.captcode.value){alert( "' . addslashes(_JNEWS_CAPTCHA_MSG) .'" ); return false;}';

		$js ='
	function insertNewCaptcha1(html){
				var form = document.adminForm;
				if(!form){
					form = document.mosForm;
				}
				var window = document.getElementById("sbox-content");
				var root = document.getElementById("captcha1");

				if(form.security_code.value == "") {alert( "' . addslashes(_JNEWS_REGWARN_CAPTCHA) .' " ); return false;}
				if(form.security_code.value != form.captcode.value){alert( "' . addslashes(_JNEWS_CAPTCHA_MSG) .'" ); return false;}
				
				if(root == null){
				 	root = document.createElement(\'div\');
					root.setAttribute("style", "width:10px;heigth:10px;display:none;");
					root.setAttribute("id", "captcha1");
					var body = document.getElementsByTagName(\'body\')[0].appendChild(root);
				}
				root.innerHTML = html;

				var newcode = document.getElementById(\'newcode\');
				var newesc = document.getElementById(\'newesc\');
				var newdecrypt = document.getElementById(\'newdecrypt\');
				var newpath = document.getElementById(\'newpath\');
				var newsecuritycaptcha = document.getElementById(\'security_captcha1\');
				var newcaptcode = document.getElementById(\'captcode1\');
				var image =  document.getElementById(\'captcha_image1\');
				var path = newpath.innerHTML;
      			var intIndexOfMatch = path.indexOf( "&amp;" );

     			while (intIndexOfMatch != -1){
       				path= path.replace( "&amp;", "&" )
       				intIndexOfMatch = path.indexOf( "&amp;" );
      			}
				image.setAttribute("src", path);
				image.setAttribute("width", '.$captcha_width.');
				image.setAttribute("height", '.$captcha_height.');
				newsecuritycaptcha.value = newesc.innerHTML;
				newcaptcode.value = newcode.innerHTML;

				if(window != null){

				windowImages = window.getElementsByTagName("img");
				windowInput = window.getElementsByTagName("input");

				var captcha_image = windowImages.captcha_image1;
				var captcode = windowInput.captcode1;
				var security_captcha = windowInput.security_captcha1;

				security_captcha.value = newesc.innerHTML;
					captcode.value = newcode.innerHTML;
				captcha_image.setAttribute("src", path);
			}
				document.getElementById(\'entered_captcha\').value=\'\';
				document.getElementsByTagName(\'body\')[0].removeChild(root);
			}

	';
				       
	     if( version_compare(JVERSION,'1.6.0','<') ){//1.5
	      $js .="function refreshCaptcha1(url){
	      var form = document.adminForm;
				if(!form){
					form = document.mosForm;
				}
			var ajax = new Ajax(url,{data: 'height=1',method: 'POST',onComplete : function(result){insertNewCaptcha1(result); }});ajax.request();}";
       }else{
       	$js .="function refreshCaptcha1(url){
	      var ajax = new Request({url : url,data: 'height=1',method: 'POST',onComplete : function(result){insertNewCaptcha1(result); }});ajax.send();}";
       }				       
				       
				       $document= JFactory::getDocument();
						$document->addScriptDeclaration( $js, 'text/javascript' );
				       
					}
				}
				
			}	
		 
		$html .= '</table>';
		$html .= '</fieldset></div>';
		
		if (!$cb) {		
			$lists = ($mainframe->isAdmin()) ? jNews_Lists::getLists(0, 1, '', '', false, true, true,false,false): jNews_Lists::getLists('', 1, '', '', false, true, false,false,true) ;
			$listsAr = ($mainframe->isAdmin()) ? jNews_Lists::getLists(0, 2, '', '', false, true, true,false,false) : jNews_Lists::getLists('', 2, '', '', false, true, false,false,true);
	 	} else {
			$lists= $listings;
			$listsAr = array();
		}
			
		if(empty($listsAr)) $listwidth = '100%';
		else $listwidth = '50%';
		
		if(empty($lists)) $listarwidth = '100%';
		else $listarwidth = '50%';
		
		$html .= '<table width="100%"><tr>';
		$html .= '<td width="'.$listwidth.'">';
		$html .=  jNews_SubscribersHTML::showSubscriberLists( $subscriber, $lists, $queues, $frontEnd, $access );
		
		$html .= '</td>';
		$html .= '<td width="'.$listarwidth.'" valign="top">';

		$html .=  jNews_SubscribersHTML::showSubscriberLists( $subscriber, $listsAr, $queues, $frontEnd, $access );
		$html .= '</td>';
		$html .= '</tr></table>';
		return $html;
	}

	 public static function showSubscribers($subscribers, $action, $listId, &$lists, $start, $limit, $total, $showAdmin, $theLetterId, $emailsearch, $forms, $setLimit=null, $front = false, $setSort=null) {

		$my	= JFactory::getUser();
		$mainframe = JFactory::getApplication();

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

	<?php
		if ($listId==0) {
	      $message =  _JNEWS_SUSCRIB_LIST;
	  	} else {
	      $lt_name=jNews_Lists::getLists($listId, 0, null, '', false, false, true);
	      $message =  _JNEWS_SUSCRIB_LIST_UNIQUE."<span style='color: rgb(51, 51, 51);'>".@$lt_name[0]->list_name."</span>";
	   	}


		$filter = _JNEWS_SEL_LIST.'  '.$lists['listid'] . ' ' . $lists['subscirberType'];
		$hidden = '<input type="hidden" name="listid" value="'.$listId.'" />';
	    $hidden .= '<input type="hidden" name="limit" value="'.$limit.'" />';

		echo $forms['main'];

		// top portion before the table list
		// for search
		$toSearch = new stdClass;
		$toSearch->forms = $forms['select'];
		$toSearch->hidden = $hidden;
		$toSearch->listsearch = $emailsearch;
		$toSearch->id = 'emailsearch';

		echo jnews::setTop( $toSearch, $message, $setLimit, $filter );

	?>

		<table class="<?php echo jnews::myTheme(); ?>">
		<thead>
		<tr>
			<th class="title">#</th>
			<th class="title"><input type="checkbox" id="selectallcheck" name="allchecked" onclick="jnewsletterselectall();"/></th>
			<th class="title"><?php echo JHTML::_('grid.sort', _JNEWS_INPUT_NAME, 'name', $setSort->orderDir,$setSort->orderValue); ?></th>
		<?php if($mainframe->isAdmin()){?>
			<th class="title"><?php echo JHTML::_('grid.sort', _JNEWS_INPUT_EMAIL, 'email', $setSort->orderDir,$setSort->orderValue); ?></th>
		<?php }else{
			if($GLOBALS[JNEWS.'show_sub_email']){ ?>
				<th class="title"><?php echo JHTML::_('grid.sort', _JNEWS_INPUT_EMAIL, 'email', $setSort->orderDir,$setSort->orderValue); ?></th>
		<?php	}
		}//endelse
		if($mainframe->isAdmin()){ ?>
			<th class="title"><?php echo JHTML::_('grid.sort', _JNEWS_SIGNUP_DATE, 'subscribe_date', $setSort->orderDir,$setSort->orderValue); ?></th>
		<?php } ?>
			<th class="title"><center><?php echo JHTML::_('grid.sort', _JNEWS_REGISTERED , 'user_id', $setSort->orderDir,$setSort->orderValue); ?></center></th>
			<th class="title"><center><?php echo JHTML::_('grid.sort', _JNEWS_CONFIRMED , 'confirmed', $setSort->orderDir,$setSort->orderValue); ?></center></th>
			<th class="title"><center><?php echo JHTML::_('grid.sort', _JNEWS_HTML , 'receive_html', $setSort->orderDir,$setSort->orderValue); ?></center></th>
		<?php
		
	if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnewsletter is pro
	 if ($GLOBALS[JNEWS.'show_column1']==1){?><!--check to show/hide column 1 heading in the subscribers list-->
				<th class="title"><center><?php echo $GLOBALS[JNEWS.'column1_name'];
				}//<!--/center></th><!--column 1 in the subscribers list-BE-->
		  if ($GLOBALS[JNEWS.'show_column2']==1){?><!--check to show/hide column 2 heading in the subscribers list-->
				<th class="title"><center><?php echo $GLOBALS[JNEWS.'column2_name'];
				}
		  if ($GLOBALS[JNEWS.'show_column3']==1){?><!--check to show/hide column 3 heading in the subscribers list-->
				<th class="title"><center><?php echo $GLOBALS[JNEWS.'column3_name'];
				}
		  if ($GLOBALS[JNEWS.'show_column4']==1){?><!--check to show/hide column 4 heading in the subscribers list-->
				<th class="title"><center><?php echo $GLOBALS[JNEWS.'column4_name'];
				}
		  if ($GLOBALS[JNEWS.'show_column5']==1){?><!--check to show/hide column 5 heading in the subscribers list-->
				<th class="title"><center><?php echo $GLOBALS[JNEWS.'column5_name'];
				}
	}
	
	if ( jnews::checkPermissions('admin') ) { 
		?>
			<th class="title"><?php echo JHTML::_('grid.sort', 'ID', 'id', $setSort->orderDir,$setSort->orderValue); ?></th>
		<?php	
	}
	
	
	?>
		</tr>
		</thead>
		<?php
			$i = 0;
			if (!empty($subscribers)) {
				foreach ($subscribers as $subscriber) {
					if ( !jNews_Subscribers::validEmail($subscriber->email) ) continue;
					
					if ($subscriber->user_id <> 0) {
							$img = '16/status_g.png';
						   	$alt = 'Registered';
						   	jnews::getLegend( 'status_g.png', _JNEWS_REGISTERED .'/'. _JNEWS_CONFIRMED );
					} else {
							$img = '16/status_r.png';
						   	$alt = 'Unregistered';
						   	jnews::getLegend( 'status_r.png', _JNEWS_SUBSCRIBERS_UNREGISTERED .'/'. _JNEWS_PIE_UNCONFIRMED );
					}//endelse
					if ($subscriber->confirmed == 1) {
							$imgC = '16/status_g.png';
						   	$altC = 'Confirmed';
						   	jnews::getLegend( 'status_g.png', _JNEWS_REGISTERED .'/'. _JNEWS_CONFIRMED );
					} else {
							$imgC = '16/status_r.png';
						   	$altC = 'Not confirmed';
						   	jnews::getLegend( 'status_r.png', _JNEWS_SUBSCRIBERS_UNREGISTERED .'/'. _JNEWS_PIE_UNCONFIRMED );
					}//endelse
					if ($subscriber->receive_html == 1) {
							$imgH = '16/status_g.png';
						   	$altH = 'HTML';
						   	jnews::getLegend( 'status_g.png', _JNEWS_REGISTERED .'/'. _JNEWS_CONFIRMED );
					} else {
							$imgH = '16/status_r.png';
						   	$altH = 'TEXT';
						   	jnews::getLegend( 'status_r.png', _JNEWS_SUBSCRIBERS_UNREGISTERED .'/'. _JNEWS_PIE_UNCONFIRMED );
					}//endelse
			?>
					<tr class="row<?php echo ($i + 1) % 2;?>">
						<td><center><?php echo $i+1+ $start; ?></center></td>

						<td>
							<center><input type="checkbox" id="cid[<?php echo $i; ?>]" name="cid[<?php echo $i; ?>]" value="<?php echo $subscriber->id; ?>" onclick="isChecked(this.checked);" /></center>
						</td>
						<td>

			<?php 
				if( !$front ) {
					$href = "index.php?option=".JNEWS_OPTION."&act=".$action."&task=show&userid=".$subscriber->id;
				} else {
					$link = "option=".JNEWS_OPTION."&act=".$action."&task=show&userid=".$subscriber->id;
					$href = jNews_Tools::completeLink( $link, false, true );
				}
			?>

						<a href=<?php echo $href;?> >
						<?php echo $subscriber->name; ?></a>
						</td>
					<?php
					if ( !jNews_Subscribers::validEmail($subscriber->email) ) $subscriber->email = '';
					if($mainframe->isAdmin()){ ?>
						<td><?php echo $subscriber->email; ?></td>
					<?php }else{
						if($GLOBALS[JNEWS.'show_sub_email']){ ?>
							<td><?php echo $subscriber->email; ?></td>
					<?php	}
					}//endelse
					if($mainframe->isAdmin()){ ?>
						<td><div align="center"><?php //echo date('Y-m-d H:i:s',$subscriber->subscribe_date);
							echo date('D, d M Y H:i:s', jnews::getNow( 0, true, $subscriber->subscribe_date ) );
					} ?></div></td>
						<td align="center">
							<img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
						</td>

						<td align="center">
							<a href="<?php echo jnews::createToggleLink( 'subscribers', 'confirmed', 'subid' , $subscriber->id, 'toggle', $listId ); ?>"> <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$imgC;?>" width="12" height="12" border="0" alt="<?php echo $altC; ?>" /> </a>
						</td>
						<td align="center">
							<a href="<?php echo jnews::createToggleLink( 'subscribers', 'receive_html', 'subid' , $subscriber->id, 'toggle', $listId ); ?>"> <img src="<?php echo JNEWS_PATH_ADMIN_IMAGES.$imgH;?>" width="12" height="12" border="0" alt="<?php echo $altH; ?>" /> </a>
						</td>
						<?php
						$i++;

						?>
						<?php
						if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnewsletter is 5.0.2
							if ($GLOBALS[JNEWS.'show_column1']==1){ ?> <!--check to show/hide column 1 data in the subscribers list-->
							<td align="center"> <!--data for column1-->
								<?php echo $subscriber->column1; }?>
							</td>
							<?php if ($GLOBALS[JNEWS.'show_column2']==1){ ?> <!--check to show/hide column 2 data in the subscribers list-->
							<td align="center"> <!--data for column1-->
								<?php echo $subscriber->column2;} ?>
							</td>
							<?php if ($GLOBALS[JNEWS.'show_column3']==1){ ?> <!--check to show/hide column 3 data in the subscribers list-->
							<td align="center"> <!--data for column3-->
								<?php echo $subscriber->column3; }?>
							</td>
							<?php if ($GLOBALS[JNEWS.'show_column4']==1){ ?> <!--check to show/hide column 4 data in the subscribers list-->
							<td align="center"> <!--data for column4-->
								<?php echo $subscriber->column4; }?>
							</td>
							<?php if ($GLOBALS[JNEWS.'show_column5']==1){ ?> <!--check to show/hide column 5 data in the subscribers list-->
							<td align="center"> <!--data for column5-->
								<?php echo $subscriber->column5; }
						}//end check of version
						
						if ( jnews::checkPermissions('admin') ) {
							echo '<td align="center">'.$subscriber->id.'</td>';
						}						
						?>
						</td>
					<?php }
			}
			?>
			</tr>
		</table>
		<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
		<input type="hidden" name="act" value="<?php echo $action; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="userid" value="" />
		<input type="hidden" name="filter_order" value="<?php echo $setSort->orderValue; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $setSort->orderDir; ?>" />
		<input type="hidden" id="boxcount" name="boxchecked" value="0" />
		<?php echo JHTML::_( 'form.token' ); ?>
		</form>
		<?php

		echo '<br />';
		echo jnews::setLegend();
	}


	 public static function showSubscriberLists($subscriber, $lists, $queues, $frontEnd, $accessAdmin) {
		$Itemid= JRequest::getInt('Itemid');

		$mainframe = JFactory::getApplication();
		$my	= JFactory::getUser();

		if(empty($Itemid) AND !$mainframe->isAdmin()){
			$Itemid = $GLOBALS[JNEWS.'itemidAca'];
		}

		if(!empty($Itemid)){
			$item = '&Itemid=' . $Itemid;
	 	}else{
			$item ='';
		}

		$html = '';
	 	if (!empty($lists)) {
			$br = "\n\r";
			$html = '<fieldset class="jnewscss" style="padding: 4px; text-align: left">'.$br;
			static $cnt = 1;
			if($cnt==1){
				$html .= '<legend><strong>'._JNEWS_SUBSCRIPTION_LIST.'</strong></legend>' .$br;
				$cnt++;
			}else{
				$html .= '<legend><strong>'._JNEWS_SUBSCRIPTION_AR.'</strong></legend>' .$br;
			}

			$html .= '<table class="' . jnews::myTheme() .'"><thead>' .$br;
			$html .= '<tr><th class="title" width="3%">#</th>' .$br;
			$html .= '<th class="title" width="50%">'._JNEWS_LIST_NAME.'</th>' .$br;
			$html .= '<th class="title" align=center width="30%">'._JNEWS_SUBSCRIB.'</th>' .$br;
			if ($accessAdmin) {
				$html .= '<th class="title" width="3%"><center>ID</center></th>' .$br;
			}
		    if ($frontEnd AND $GLOBALS[JNEWS.'show_archive']=='1') {
                    $html .= '<th class="title" width="30%"><center>' .  _JNEWS_VIEW_ARCHIVE . '</center></th>' .$br;
              }
			$html .= '</tr></thead>' .$br;

	 		if($frontEnd AND empty($subscriber->id)){
				$forceCheck = true;
			}else{
				$forceCheck = false;
			}

			$subscribed = '';
			$script = '';
			static $i = 1;
			$lisType = 1;
		  	foreach ($lists as $list) {
				$i++;
				$lisType = $list->list_type;
				$subscribed = 0;
				if (!empty($queues)) {
					foreach ($queues as $queue) {
							if ($queue->list_id == $list->id) {
								$subscribed =1;
								$access = $queue->acc_level;
							}	else {
								$access = 29;
							}
					}
				} else {
						$access = 29;
				}
				$num = ($i + 1) % 2;
				$s = $i-1;
				$html .= '<tr class="row'.$num.'"><td><center>'.$s.'</center></td><td width="50%">' .$br;
				$link = ( $list->hidden AND ($list->list_type =='1' or $list->list_type =='7') AND $GLOBALS[JNEWS.'show_archive'] ) ? 'index.php?option='.JNEWS_OPTION.'&act=mailing&task=archive&listid='.$list->id.'&listype='.$list->list_type.$item : '#';

				$html .= '<span class="aca_letter_names"';
				if ($link == "#"){$html .= " onclick='return false;' ";}
				$html.= '>'.jNews_Tools::toolTip($list->list_desc, $list->list_name, '', '', $list->list_name, $link, 1).' </span>' .$br;

				$html .= '</td><td align="center" width="30%">' .$br;
				//radio yes
				$html .= '<input name="subscribed['. $list->id.']" value="1" id="subscribed['. $list->id.']1"' ;
				 if ( $subscribed == 1 OR $forceCheck) { $html .= ' checked="checked"'; }
				$html .= ' type="radio">' ._CMN_YES.$br;
				//radio no
				$html .= '<input name="subscribed['. $list->id.']" value="0" id="subscribed['. $list->id.']0"' ;
				 if ( $subscribed == 0 AND !$forceCheck) { $html .= ' checked="checked"'; }
				$html .= ' type="radio">' ._CMN_NO.$br;

				$html .= '<input type="hidden" name="sub_list_id['. $list->id.']" value="'.$list->id.'" />' .$br;
			 	$html .= '<input type="hidden" name="acc_level['.$list->id.']" value="'.$access. '" />';
				$html .= '<input type="hidden" name="passwordA" value="'.crypt($GLOBALS[JNEWS.'url_pass'],$GLOBALS[JNEWS.'url_pass']).'" />';
				$html .= '<input type="hidden" name="fromFrontend" value="1" />'."\n";
				$html .= '</td>' .$br;
				 if ($accessAdmin) {
					$html .= '<td><center>'.$list->id.'</center></td> ';
				 }

				 if ($frontEnd) {
					if (($list->list_type == 1 or $list->list_type == 7) && $GLOBALS[JNEWS.'show_archive']=='1' ) {

						$link = 'option='.JNEWS_OPTION.'&act=mailing&listid=' .$list->id . '&listype=' .$list->list_type .'&task=archive' . $item;
//						$link = jNews_Tools::completeLink($link,false);
						$link = jNews_Tools::completeLink($link,false);

						$img = 'move_f2.png';
						$html .=  '<td height="20"><center>';
						$html .=  '<a href="' . $link. '" >'."\n\r" ;
						$html .=  '<img src="'. JNEWS_JPATH_LIVE .'/components/' .JNEWS_OPTION. '/images/' . $img. '" width="20" height="20" align="center" border="0" alt="'._JNEWS_VIEW_ARCHIVE.'" /></a></center></td>'."\n\r" ;
					} elseif($GLOBALS[JNEWS.'show_archive']=='1') {
						$html .=  '<td height="20"><center>-</center></td>';
					}
				}
				$script .= "window.document.getElementById('subscribed[$list->id]'+statusval).checked = true;".$br;
			}
			$messagejs= ($lisType==2) ? _JNEWS_SELECT_ALLLAUTOR : _JNEWS_SELECT_ALLLISTS;
			if (count($lists>1)){
				$html .= '<tr><td colspan="4" align="center" nowrap="nowrap">';
				$html .= '<script type="text/javascript">';
				$html .= 'function updateStatus'.$lisType.'(statusval){'.$br;
				$html .= $script;

				$html .='}</script><div style="float:right; font-size: 12px;">';
				$html .= '<a title="'.$messagejs.'" href="#tablelist" onclick="updateStatus'.$lisType.'(1)">';
				$html .= _JNEWS_SUBS_LIST_TOALL;
				$html .= '</a> | <a href="#tablelist" onclick="updateStatus'.$lisType.'(0)">';
				$html .= _JNEWS_SUBS_LIST_TONONE .'</a></div></td></tr>';
			} 
			$html .=  '</table></fieldset>';
		 }

		 return $html;

	}//enfct

	 public static function unsubscribe($subscriber, $list, $queues, $action, $forms ) {
		$my	= JFactory::getUser();
		 ?>
   		<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
		<input type="hidden" name="act" value="<?php echo $action; ?>" />
   		<input type="hidden" name="task" value="" />
    	<input type="hidden" name="boxchecked" value="0" />
   		<input type="hidden" name="subscriber_id" value="<?php echo $subscriber->id; ?>" />
   		<input type="hidden" name="cle" value="<?php echo md5($subscriber->email); ?>" />
   		<div class="subscribe">
		<?php echo _JNEWS_UNSUBSCRIBE_MESSAGE.' '; ?>
		<span class="aca_letter_names" onclick='return false;'><?php echo jNews_Tools::toolTip($list->list_desc, $list->list_name, '', '', $list->list_name, '#', 1); ?></span>
		</div>
		<?php
	}

	 public static function export( $action, $listId ) {
	 	
	 	$subtype = JRequest::getVar( 'subtype', 0 );
	 	$subtypeForm = ( !empty($subtype) ? '&subtype='.$subtype : '' );
		?>
		<form action="index.php?option=<?php echo JNEWS_OPTION; ?>&act=<?php echo $action; ?>&listid=<?php echo $listId . $subtypeForm; ?>" method="post" name="adminForm" >
			<input type="hidden" name="task" value="" />
			<br /><br />
			<?php 
			if ( !empty($listId) ) {
				echo _JNEWS_EXPORT_TEXT.' #: '.$listId;
			} else {
				echo _JNEWS_EXPORT_TEXT_ALL;
			}
			?>
			<br /><br />
			<input type="button" value="Export" class="button" onclick="submitbutton('doExport')" />
		</form>
		<?php
		
	 }

	 public static function import($action, $lists,$listId) {

		?>
		<script language="javascript" type="text/javascript">
			function submitbutton(pressbutton) {
				var form = document.adminForm;


				if (form.importfile.value == "") {
					alert( "<?php echo addslashes(_JNEWS_SELECT_FILE).' '. addslashes(_JNEWS_MENU_IMPORT).'!'; ?>" );
				} else {
					submitform(pressbutton);
				}
			}
		</script>
		<form action="index.php?option=<?php echo JNEWS_OPTION; ?>&act=<?php echo $action; ?>&listid=<?php echo $listId; ?>" method="post" name="adminForm" enctype="multipart/form-data" >
			<input type="hidden" name="task" value="<?php $task = JRequest::getVar('task','import');
			echo $task; ?>" />
			<input type="hidden" name="action" value="<?php echo $action; ?>" />
		<table border="0" width="100%" cellpadding="1" cellspacing="1" class="<?php echo jnews::myTheme(); ?>">
			<tbody>
		<?php


		if(!$GLOBALS[JNEWS.'disabletooltip']){
				JHTML::_('behavior.tooltip');
		}

		echo _JNEWS_LIST_IMPORT;
		$i = 0;
		$k= 0;
		 foreach ($lists as $list) {
			$i++;
			echo '<tr class=row'.$k.'><td width="40px">';
			echo  "\n".'<input type="checkbox" class="inputbox" value="1" name="subscribed['.$i.']" />';
			echo  "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" />';
			echo  '</td><td>';
			echo  "\n".'<span class="aca_list_name  onclick=\'return false;\'">'. jNews_Tools::toolTip($list->list_desc,$list->list_name, '', '', $list->list_name, '#', 1).'</span>';
			echo "\n".'<input type="hidden" name="acc_level['.$i.']" value="0" />';
			echo '</td></tr>';
			$k = 1-$k;

		 }
		?>
		<tr>
			<td colspan="2">
				<br/>
				<?php echo _JNEWS_IMPORTSUB_TIPS; ?>
				<div style="border: 1px solid #D5D5D5; padding: 5px; margin: 2px; background-color: #F9F9F9">
					<?php echo _JNEWS_SELECT_IMPORT_FILE.' :'; ?>
					<input type="file" name="importfile" size="57" class="inputbox" />
					<input type="button" value="Import" class="button" onclick="submitbutton('doImport')" />
				</div>
			</td>
		</tr>
	</table>
	<?php echo JHTML::_( 'form.token' ); ?>
	</form><?php

	 }

 }

