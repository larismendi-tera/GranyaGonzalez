<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

if(!defined('JNEWS_JPATH_ROOT')){
	if ( defined('JPATH_ROOT') AND class_exists('JFactory')) {
		define ('JNEWS_JPATH_ROOT' , JPATH_ROOT );
	}
	require_once( JNEWS_JPATH_ROOT . DS.'components'.DS.'com_jnews'.DS.'defines.php');
}

require_once( JNEWSPATH_ADMIN.'compa.php');
require_once( JNEWSPATH_CLASS . 'class.mailing.php');
require_once( JNEWSPATH_CLASS . 'class.jmail.php');
require_once( JNEWSPATH_CLASS . 'class.module.php');
require_once( JNEWSPATH_CLASS . 'class.lists.php');
require_once( JNEWSPATH_CLASS . 'class.listype.php');
require_once( JNEWSPATH_CLASSN . 'class.subscribers.php');
require_once( JNEWSPATH_CLASSN . 'class.listssubscribers.php');
require_once( JNEWSPATH_CLASS . 'class.update.php');
require_once( JNEWSPATH_CLASSN . 'class.templates.php');
require_once( JNEWSPATH_CLASSN . 'class.attachment.php');
require_once( JNEWSPATH_CLASS . 'class.xonfig15.php');
require_once( JNEWSPATH_ADMIN . 'plugins' .DS. 'class.newsletter.php' );


if (file_exists ( JNEWS_PATH_LANG . JNEWS_CONFIG_LANG . '.php')) {
	require_once( JNEWS_PATH_LANG . JNEWS_CONFIG_LANG .'.php');
} else {
	require_once( JNEWS_PATH_LANG . 'en-GB.php');
}

if (file_exists( JNEWSPATH_CLASS . 'class.captcha.php') ) {
	include_once( JNEWSPATH_CLASS . 'class.captcha.php');
}

if (file_exists( JNEWSPATH_ADMIN . 'plus' .DS. 'class.auto.php' ) ) {
	@include_once( JNEWSPATH_ADMIN . 'plus' .DS. 'class.auto.php' );
}

if (!isset($GLOBALS[JNEWS.'component'])) {
	$xf = new jNews_Config();
	$xf->loadConfig();
}

$mainframe = JFactory::getApplication();
if(!$mainframe->isAdmin() AND empty($Itemid)){
	$Itemid = @$GLOBALS[JNEWS.'itemidAca'];
}

 class jnews {

	public static function displayInfo($messages,$type = 'success'){
		if(empty($messages)) return;
		if(!is_array($messages)) $messages = array($messages);
		echo '<div id="jnews_messages_'.$type.'" class="jnews_messages jnews_'.$type.'"><ul><li>'.implode('</li><li>',$messages).'</li></ul></div>';
	}

	public static function printYN($condition , $yesMessage, $noMessage) {
		if ($condition) return jnews::printM('ok' , $yesMessage);
		else return jnews::printM('no' , $noMessage);
   	}

	public static function printM($type , $message) {
		$app= JFactory::getApplication();

		if ( $type===true ) $type='ok';
		if ( $type===false ) $type='error';

		switch ($type) {
			case 'warning':
				$app->enqueueMessage( $message ,'error');
				break;
			case 'update':
				$colored_message = '<img  hspace="15" align="absmiddle" alt="upgrade" src="'.JNEWS_PATH_ADMIN_IMAGES.'upgrade.gif"><span style=" font-size: larger; color:#0033FF; font-weight: bold;">' . $message . '</span>';
				break;
			case 'general':
				$colored_message = '<img  hspace="15" align="absmiddle" style="width: 28px; height: 28px;" alt="general" src="'.JNEWS_PATH_ADMIN_IMAGES.'general.gif"><span style="font-size: larger; color:#5D00FF; font-weight: bold;">' . $message . '</span>';
				break;
			case 'cron':
				$colored_message = '<img  hspace="15" align="absmiddle" style="width: 28px; height: 28px;"  alt="cron" src="'.JNEWS_PATH_ADMIN_IMAGES.'cron.gif"><span style="font-size: larger; color:#F58E07; font-weight: bold;">' . $message . '</span>';
				break;
			case 'suggestion':
				$colored_message = '<img  hspace="15" align="absmiddle" style="width: 28px; height: 28px;" alt="suggestion" src="'.JNEWS_PATH_ADMIN_IMAGES.'16/status_y.png"><span style="font-size: larger; color:#00FF51; font-weight: bold;">' . $message . '</span>';
				break;
			case 'tips':
				$colored_message = '<img  hspace="15" align="absmiddle" style="width: 28px; height: 28px;" alt="tips" src="'.JNEWS_PATH_ADMIN_IMAGES.'16/status_y.png"><span style="font-size: larger; color:#0033FF; font-weight: bold;">' . $message . '</span>';
				break;
			case 'noimage':
				$colored_message = '<span style="font-size: larger; color:#5D00FF; font-weight: bold;">' . $message . '</span>';
				break;
			case 'error':
				$app->enqueueMessage( $message ,'error');
				break;
			case 'ok':
				$app->enqueueMessage( $message ,'message');
				break;
			case 'no':
				$app->enqueueMessage( $message ,'error');
				break;
			case 'green':
				$app->enqueueMessage( $message ,'message');
				break;
			case 'red':
				$app->enqueueMessage( $message ,'error');
				break;
			case 'blue':
			case 'notice':
				$app->enqueueMessage( $message ,'notice');
				break;
			case 'defaulterror':
				$app->enqueueMessage( $message ,'error');
				break;
			default:
				$colored_message ='';
				break;
		}
		if ( empty($colored_message) ) return '';
  	 return $colored_message."\n\r";
   }

 	/**
	 * This function is used to show messages on screen
	 * @param $type success:green, error:red, notice:blue
	 * @param $message the message to be shown
	 * @param $showMsgBck either to show the message background color or not
	 */
	public static function M($type , $message,$showMsgBck=true) {
		if (class_exists('jnews') && $showMsgBck) {
			return jnews::printM($type , $message);
		} else {

			switch ($type) {
				case 'no':
					$colored_message = '<img  hspace="15" align="absmiddle" alt="no" src="'.JNEWS_PATH_ADMIN_IMAGES.'button_cancel.gif">' .
							'<span style=" font-size: larger; color: rgb(255, 0, 0); font-weight: bold;">' . $message . '</span>';
					break;
				case 'green':
					$colored_message = '<span style="font-weight: bold; color:#07C500;">' . $message . '</span>';
					break;
				case 'red':
					$colored_message = '<span style="font-weight: bold; color:#FF0000;">' . $message . '</span>';
					break;
				default:
					$colored_message ='';
					break;
			}
	   		return $colored_message."\n\r";
   		}
   	}

	 public static function chooseTips( $action, $task ) {
			$message = '';
		return $message;
	  }

	public static function getStats() {
		$db = JFactory::getDBO();

		# check if module is published
		$db->setQuery( "SELECT `published` FROM `#__modules` WHERE `module` LIKE '%jnews%' ORDER BY `published` DESC " );
		$total = $db->loadResult();
		$xf = new jNews_Config();
		$xf->update('mod_pub', ($total) ? '1' : '0' );

		return $total;
   }

	public static function colorPicker($name, $size = 10, $colorV = ''){

		if (!isset($doc))$doc = JFactory::getDocument();
		$doc->addStyleSheet(JNEWS_URL_INCLUDES.'jquery/mlcolorpicker.css' ,'text/css');
		$doc->addScript(JNEWS_URL_INCLUDES.'jquery/jquery.1.3.2.js' , 'text/javascript');
		$doc->addScript(JNEWS_URL_INCLUDES.'jquery/mlcolorpicker.js' , 'text/javascript');

		$HTML = '<div id="acacolorPicker" style="clear: both; vertical-align: middle;">';
		$HTML .= '<input style="margin-top: 5px; float:left" type="text" name="'.$name.'" class="inputbox" size="'.$size.'" maxlength="7" value="'.$colorV.'" id="acacolorpickerField"/>';
		$HTML .= '<div  style="background-color: '.$colorV.'; border: 1px solid silver; margin: 5px; width: 35px; height: 14px; float: left;" id="acacolorPickerDiv"/>';$HTML .= '</div>';
		$js = '	<script type="text/javascript">
					<!--
					jQuery.noConflict();
	  					jQuery(function(){
							jQuery("#acacolorPicker").mlColorPicker({\'onChange\': function(val){
							jQuery("#acacolorPickerDiv").css("background-color", "#" + val);
							jQuery("#acacolorpickerField").val("#" + val);
							}});
						});

					//-->
				</script>';
		$HTML .= $js;
		return $HTML;
	}

 	/**
 	 * Function to resize the image if its over the max height/width
 	 */
	public static function imageResize($path, $mw='', $mh='', $alt='image'){
		 if(list($w,$h) = @getimagesize($path)) {
		    foreach(array('w','h') as $v) {
		    	$m = "m{$v}";
		        if(${$v} > ${$m} && ${$m}) {
		        	$o = ($v == 'w') ? 'h' : 'w';
		        	$r = ${$m} / ${$v}; ${$v} = ${$m}; ${$o} = ceil(${$o} * $r);
		        }
		    }

		    	return("<img src='{$path}' alt='{$alt}' width='{$w}' height='{$h}' />");
		 }
    }

	/**
	 * Function search
	 * @params $forms - the html tag of the form
	 * @params $hidden - the html of hidden values
	 * @params $search - the value to be search
	 * @params $id - the input id that will be used by the javascript in the button
	 */
	public static function search($forms, $hiddenobj=null, $search='', $id='search', $filterobj=null, $message='', $pagination=null ){
		$html = '';
		$html .= $forms;
		$html .= $hiddenobj;
		$html .= '<table cellspacing="0" cellpadding="2" border="0" style="text-align: left; width: 100%;"><tbody>';
		$html .='<tr><td style="text-align: left; padding: 0px 0px 3px 5px; width: 300px;">'. _JNEWS_SEARCH;
		$html .= '<input type="text" name="'.$id.'" id="'.$id.'" value="'.$search.'" style="margin: 2px 5px;" class="inputbox" onchange="document.adminForm.submit();" />';
		$html .= '<button class="joobibutton" onclick="this.form.submit();">'. _JNEWS_SEARCH_GO .'</button>';
		$js = "document.getElementById('$id').value='';this.form.submit();";
		$html .= '<button class="joobibutton" onclick="'.$js.'">'. _JNEWS_SEARCH_RESET.'</button>';
	 	if (isset($message)){
		 	$html .= '</td><td style="text-align: center;">';
		 	$html .= $message;
	 	}
	 	if (isset($pagination)){
		 	$html .= '</td><td style="text-align: right;">';
			$html .= jnews::pagination($pagination);
	 	}
	 	if (isset($filterobj)){
		 	$html .= '</td><td style="text-align: right;">';
			$html .= $filterobj;
	 	}
	 	$html .= '</td></tr>';
		$html .= '</tbody></table>';
		$html .= '</form>';

		return $html;
	}

	 public static function messageMgmt($action, $task, $message) {
		$mainframe = JFactory::getApplication();

		if (empty($message)) {

			if ($GLOBALS[JNEWS.'news1'] == 1)
				return jnews::printM('warning' , _JNEWS_UPGRADE1.'<b>Anjel</b>'._JNEWS_UPGRADE2);
			if ($GLOBALS[JNEWS.'news2'] == 1)
				return jnews::printM('warning' , _JNEWS_UPGRADE1.'<b>Letterman</b>'._JNEWS_UPGRADE2);
			if ($GLOBALS[JNEWS.'news3'] == 1)
				return jnews::printM('warning' , _JNEWS_UPGRADE1.'<b>YaNC</b>'._JNEWS_UPGRADE2);

			if ( $GLOBALS[JNEWS.'mod_pub']==0 ) {
				$total = jnews::getStats();
				$link = '  <a href="index.php?option=com_modules&search=jnews&filter_search=jnews">'._JNEWS_MOD_PUB_LINK.'</a>';
				if (empty($total) AND $GLOBALS[JNEWS.'act_totalmailing0'] < 3) return jnews::printM('warning' , _JNEWS_MOD_PUB.$link);
			}
			
//			if($GLOBALS[JNEWS.'level'] > 1){//check the version is plus or pro
//				if($GLOBALS[JNEWS.'enable_captcha']){//check if captcha is enabled
//					if(!extension_loaded('mcrypt')){
//		            		$link='<a href="index.php?option='.JNEWS_OPTION.'&act=configuration">'._JNEWS_CAPTCHA_LINK.'</a>';
//		            		return jnews::printM('warning' , _JNEWS_MCRYPT_MESSAGE.$link);
//		            }
//				}
//			}

			if ($GLOBALS[JNEWS.'act_totalmailing2']>0 AND $GLOBALS[JNEWS.'cron_setup'] == 0){
				return jnews::printM('cron' , _JNEWS_SCHEDULE_SETUP);
			}

			//Captcha
//			if($GLOBALS[JNEWS.'level'] > 1){//check the version is plus or pro
//            	if($GLOBALS[JNEWS.'enable_captcha']){//check if captcha is enabled
//            		if (!extension_loaded('gd')) {
//            			$link='<a href="index.php?option='.JNEWS_OPTION.'&act=configuration">'._JNEWS_CAPTCHA_LINK.'</a>';
//            			return jnews::printM('warning' , _JNEWS_CAPTCHA_WARN.$link);
//            		}else{
//            			$gdinfo = gd_info();
//						if(!$gdinfo['FreeType Support']) return jnews::printM('warning' , JNEWS_CAPTCHA_FTWARN);
//            		}
//
//            	}
//			}

			//Queue Status
			if( $mainframe->isAdmin() ) {
				if($GLOBALS[JNEWS.'level'] > 1){
					if ($GLOBALS[JNEWS.'queue_status'] == 0){
						$link='<a href="index.php?option='.JNEWS_OPTION.'&act=queue&task=startqueue">start the queue.</a>';
						return jnews::printM('cron' , 'The queue has been stopped if you want to continue proccessing it, you need to '.$link);
				    }
				}
			}

			if ($GLOBALS[JNEWS.'show_tips'] == 1) {
				$ou = false;
				$message = jnews::chooseTips( $action, $task );
				if (!empty($message)){
					return $message;
				}
			}

		}
		return $message;
	}

	 public static function convertObjectToIdList($ObjectValues , $type) {
		$tableValue = array();
		$k = 0;
		if (!empty($ObjectValues)) {
			foreach ($ObjectValues as $ObjectValue) {
				switch ($type) {
					case 'qid':
						$tableValue[$k] = $ObjectValue->qid;
						break;
					case 'subscriber_id':
						$tableValue[$k] = $ObjectValue->subscriber_id;
						break;
					case 'id':
						$tableValue[$k] = $ObjectValue->id;
						break;
					default:
						echo '<br />Please specify the type of conversion to do';
						break;
				}
				$k++;
			}
		} else {
			$tableValue = array();
		}
		return $tableValue;
	 }

	public static function miseEnPage($title, $tip , $compoment){
		echo'<tr>'."\n\r";
		echo' <td width="185" class="key">'."\n\r";
		echo'  <span class="editlinktip">'."\n\r";
		echo jNews_Tools::toolTip($tip, '', 280, 'tooltip.png', $title, '', 0 );
		echo '  </span>'."\n\r";
		echo ' </td>'."\n\r";
		echo ' <td>'.$compoment.' '."\n\r";
		echo ' </td>'."\n\r";
		echo '</tr>'."\n\r";
	}

	public static function miseEnHTML($title, $tip , $compoment){
		$html = '<tr>'."\n\r";
		$html .= ' <td width="185" class="key">'."\n\r";
		$html .= '  <span class="editlinktip">'."\n\r";
		$html .=  jNews_Tools::toolTip($tip, '', 280, 'tooltip.png', $title, '', 0 );
		$html .=  '  </span>'."\n\r";
		$html .=  ' </td>'."\n\r";
		$html .=  ' <td>'.$compoment.' '."\n\r";
		$html .=  ' </td>'."\n\r";
		$html .=  '</tr>'."\n\r";
		return $html;
	}

	public static function beginingOfTable($class){
		echo'<table class="'.$class.'" cellspacing="1" align="left">'."\n\r";
		echo'<tbody>'."\n\r";
	}

	public static function endOfTable(){
		echo '</tbody>'."\n\r";
		echo '</table>'."\n\r";
	}

	public static function orderBy($order) {

		switch ($order) {
			case 'listnameA' :
				$query = ' ORDER BY `list_name` ASC ';
				break;
			case 'subjectA' :
				$query = ' ORDER BY `subject` ASC ';
				break;
			case 'listtypeA' :
				$query = ' ORDER BY `list_type` ASC ';
				break;
			case 'idA' :
				$query = ' ORDER BY `id` ASC ';
				break;
			case 'idD' :
				$query = ' ORDER BY `id` DESC ';
				break;
			case 'createdateA' :
				$query = ' ORDER BY `createdate` ASC ';
				break;
			case 'sub_nameA' :
				$query = ' ORDER BY `name` ASC ';
				break;
			case 'sub_nameD' :
				$query = ' ORDER BY `name` DESC ';
				break;
			case 'sub_emailA' :
				$query = ' ORDER BY `email` ASC ';
				break;
			case 'sub_dateA' :
				$query = ' ORDER BY `subscribe_date` ASC ';
				break;
			case 'sub_dateD' :
				$query = ' ORDER BY `subscribe_date` DESC ';
				break;
			case 'list_idA' :
				$query = ' ORDER BY `list_id` ASC ';
				break;
			case 'listype_name' :
				$query = ' ORDER BY `list_type` ASC , `list_name` ASC  ';
				break;
			default :
				$query = '';
				break;
		}

	return $query;
	}

	/**
	 * This function is used to get all the access level group ids
	 * @return all the group ids
	 */
	public static function getAllGroups(){

		$my = JFactory::getUser();
		$db = JFactory::getDBO();

		$allGroups = array();

		if(version_compare(JVERSION,'1.6.0','<')){ //j15
			$acl = JFactory::getACL();
			$usergroups = $acl->get_group_children_tree( null, 'USERS', false );
		}else{ //j16
			$db = JFactory::getDBO();
			$db->setQuery('SELECT a.*, a.title as text, a.id as value  FROM #__usergroups AS a ORDER BY a.lft ASC');
			$usergroups = $db->loadObjectList();
		}

		if( empty($usergroups) ) return;

		foreach($usergroups as $usergroup){
			$allGroups[]=$usergroup->value;
		}

		return $allGroups;

	}

	public static function checkPermissions($allowedGroups, $groups=null){

		$mainframe = JFactory::getApplication();
		$my = JFactory::getUser();
		if($mainframe->isAdmin() ) return true;
		if( empty($my->id) || $my->id <= 0 ) return false;

		//if($allowedGroups == 'all') return true;
		if( !empty($allowedGroups) && $allowedGroups == 'all') return true;
		
//		if($allowedGroups == 'all'){
//			if(!empty($my->id)){
//				//we check if the $my->gid has list->access or the $my>id owned a list
//				if(version_compare(JVERSION,'1.6.0','<')){
//					$listsAddEdit = jNews_Lists::getIDswithacclevel($my->gid);
//					
//					if($my->gid >= 24) return true;
//					else return false;
//				}else{
//					$groups = JAccess::getGroupsByUser($my->id);
//					$listsAddEdit = jNews_Lists::getIDswithacclevel($groups);
//					
//					if( in_array(7, $groups) || in_array(8, $groups) ) return true;
//					else return false;
//				}
//				
//				$ownedlists = jNews_Lists::getOwnedlists($my->id);
//				
//				if( !empty($listsAddEdit) OR !empty($listsAddEdit) ) return true;
//				else return false;
//				
//			}else{
//				return true;
//			}
//		} 
		
		if($allowedGroups == 'admin') {
			if ( !empty($my) ) { //only the user with the admin or superadmin access
				if(version_compare(JVERSION,'1.6.0','<')){ //j15
					if($my->gid >= 24) return true;
					else return false;
				}else{ //j16
					$groups = JAccess::getGroupsByUser($my->id);					
					if( in_array(7, $groups) || in_array(8, $groups) ) return true;
					else return false;
				}
			}else{
				return false;
			} 
		}
		if($allowedGroups == 'none') return false;
//		if($allowedGroups == 0 ) return false;

		if(empty($groups) AND empty($my->id)) return false;

		$canAccessGroups = array();

		if(empty($groups)){
			if(version_compare(JVERSION,'1.6.0','<')){
				$groups = $my->gid;
			}else{
				$groups = JAccess::getGroupsByUser($my->id);
			}
		}

		if(!is_array($allowedGroups)) {
			$canAccessGroups = explode(',',$allowedGroups);
			if( empty($canAccessGroups) ) $canAccessGroups = $allowedGroups;
		}

		if(is_array($groups)){
			$inter = array_intersect($groups,$canAccessGroups);
			if(empty($inter)) return false;
			return true;
		}else{
			return in_array($groups,$canAccessGroups);
		}

	}


	public static function WarningIcon($warning, $title='Joomla Warning')	{
		$mouseover 	= 'return overlib(\''. $warning .'\', CAPTION, \''. $title .'\', BELOW, RIGHT);';
		$tip  = '<!--'. $title .'-->';
		$tip .= '<a href="javascript:void(0)" onmouseover="'. $mouseover .'" onmouseout="return nd();">';
		$tip .= '<img src="'. JNEWS_PATH_ADMIN_IMAGES .'warning.png" border="0"  alt="warning"/></a>';

		return $tip;
	}

	 public static function makeObj($name, $value) {
	 	$object = new stdClass;
		$object->name = $name;
		$object->value = $value;
		return $object;
	 }

	 public static function checkExisting() {
		$db = JFactory::getDBO();
		$table = (version_compare(JVERSION,'1.6.0','<')) ? '#__components':'#__extensions';
		$column = (version_compare(JVERSION,'1.6.0','<')) ? 'option':'element';

		$db->setQuery( "SELECT COUNT(*) FROM $table WHERE `$column` ='com_anjel' " );
		$exist["news1"] = $db->loadResult();

		$db->setQuery( "SELECT COUNT(*) FROM $table WHERE `$column` ='com_letterman' " );
		$exist["news2"] = $db->loadResult();

		$db->setQuery( "SELECT COUNT(*) FROM $table WHERE `$column` ='com_yanc' " );
		$exist["news3"] = $db->loadResult();

	return $exist;
   }//enfct

	 public static function checkCB() {
		$xf = new jNews_Config();
		if(!file_exists(JNEWS_JPATH_ROOT. DS.'administrator'.DS.'components'.DS.'com_comprofiler'.DS.'admin.comprofiler.php')) {
			$xf->update('cb_integration', '0');
			return false;
		}
		$xf->update('cb_integration', '1');
		$xf->update('integration', '1');
		jnews::checkCBPlugin();
		return true;
   	}

	public static function checkCBPlugin() {
		$xf = new jNews_Config();
		if(!file_exists(JNEWS_JPATH_ROOT . DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscbplugin'.DS.'jnews_cb.php' )
			AND !file_exists(JNEWS_JPATH_ROOT . DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscb'.DS.'jnews_cb.php')) {
			$xf->update('cb_pluginInstalled', '0');
			return false;
		}
		$xf->update('cb_pluginInstalled', '1');
		$xf->update('cb_integration', '1');
		return true;
   	}


/**
     * get the current time
     * @param int $delay
     * @param int $offset
     */
	public static function getNow( $delay=0, $offset=false, $specificTime=null ) {
		$timeOffset = jnews::calculateOffset( JNEWS_TIME_OFFSET );//we calculate the offset depending on the version of joomla
		$nowTime = ( !empty($specificTime) ? $specificTime : time() );
		$nowTime = $nowTime + $timeOffset + ( $delay*60 );
		if ( $offset ) $nowTime = $nowTime - date('Z');
		return $nowTime;// - date('Z');
	}


/**
   * 
   * to calculate the offset for 1.5 or 1.6 or 1.7 ...
   * @param configOffset - number/int for 1.5 and string for 1.6/1.7 
   * @return $timeOffset;
   */
  	public static function calculateOffset($configOffset = ''){
  		if(empty($configOffset)) return false;
  		if(version_compare(JVERSION,'1.6.0','<')){//j15
  			$timeOffset = $configOffset *3600;
  		}else{//1.6, 1.7
			$dateTimeZone = new DateTimeZone($configOffset); //create timezone offset for the passed timzone
			$dateTime = new DateTime("now", $dateTimeZone); //create datetime object
			$timeOffset = $dateTimeZone->getOffset($dateTime);// Calculate the GMT offset for the date/time contained
  		}	
  		return $timeOffset;
  	}


	public static function version($short=false) {
		if ($short) {
			return $GLOBALS[JNEWS.'version'];
		} else {
			return $GLOBALS[JNEWS.'component'].' '.$GLOBALS[JNEWS.'type'].' '.$GLOBALS[JNEWS.'version'];
		}
	}

	public static function objectHTMLSafe( &$mixed ){	// , $quote_style=ENT_QUOTES, $exclude_keys=''
		$exclude_keys = array( 'params', 'name', 'email', 'column1','column2','column3','column4','column5' );
		
		if (is_object( $mixed )){
			foreach (get_object_vars( $mixed ) as $k => $v){

				if (is_array( $v ) || is_object( $v ) || $v == NULL || substr( $k, 1, 1 ) == '_' ) {
					continue;
				}

				if (is_string( $exclude_keys ) && $k == $exclude_keys) {
					continue;
				} else if (is_array( $exclude_keys ) && in_array( $k, $exclude_keys )) {
					continue;
				}

				$mixed->$k = htmlspecialchars( $v, ENT_QUOTES );
			}
		}
	}

	public static function printLine($linear, $text) {
		 if ($linear) {
			 $etr = ' ';
		 } else {
			 $etr = '<br />';
		 }
		return $text . "\n" . $etr . " \n ";
	}

	public static function resetUpgrade($index=0)	{
		$xf = new jNews_Config();
		$config = array();
		if ($index==0) {
			$config['news1'] = '0';
			$config['news2'] = '0';
			$config['news3'] = '0';
		} else {
			$config['news'.$index] = '0';
		}
		return $xf->saveConfig($config);
	}

	public static function getVersion() {
		$db = JFactory::getDBO();

		# check if module is published
		$db->setQuery( "SELECT `text` FROM `#__jnews_xonfig` WHERE `akey`='version' LIMIT 1" );
		$version = $db->loadResult();

	return $version;
   }

	public static function upgrade_News1(){
		$my	= JFactory::getUser();
		$db = JFactory::getDBO();

		$xf = new jNews_Config();
		$newLists = array();
		$idImportedList = array();
		$i = 0;
		$db->setQuery("SELECT * FROM #__anjel_letters");
		$newsletters = $db->loadObjectList();
		$error = $db->getErrorMsg();
		$total=0;
		$list=null;
		$subscriberId=0;
		$mailings=null;

		if (!empty($error)) {
			echo  '<p><b>Error (class.upgrade.php->upgrade_News1 () line ' . __LINE__ . '):</b> Error getting newsletters. Database error: <br />' . $error . '</p>';
			return false;
		} else {
			foreach ($newsletters as $newsletter) {
				$list->list_name = $newsletter->list_name;
				$list->list_desc = $newsletter->list_desc;
				$list->sendername = $newsletter->sendername;
				$list->senderemail = $newsletter->senderemail;
				$list->bounceadres = $newsletter->bounceadres;
				$list->layout = $newsletter->layout;
				$list->template = 0;
				$list->subscribemessage = $newsletter->subscribemessage;
				$list->unsubscribemessage = $newsletter->unsubscribemessage;
				$list->notifyadminmsg=$newsletter->notifyadminmsg;
				$list->html = $newsletter->html;
				if (!empty($newsletter->hidden)) {
					$list->hidden = !$newsletter->hidden;
				} else {
					$list->hidden = 1;
				}
				$list->list_type = '1' ;
				$list->unsubscribesend = 1;
				$list->unsubscribenotifyadmin = 1;
				$list->auto_add = 0;
				$list->user_choose = 0;
				$list->cat_id = '0:0';
				$list->delay_min = 0;
				$list->delay_max = 0;
				$list->follow_up = 0;
				$list->owner = $my->id;
				$list->acc_level = 25;
				$list->acc_id = 29;
				$list->published = 1;
				$list->createdate = time();
				$list->footer = 1;
				$list->notify_id = 0;
				$list->notification = 0;

				$query = 'INSERT INTO `#__jnews_lists` (`list_name`) VALUES (\'' . $list->list_name . '\'  )';
				$db->setQuery($query);
				$db->query();
				$error = $db->getErrorMsg();

				if (!empty($error)) {
					echo '<p><b>Error (class.upgrade.php->upgrade_News1() line ' . __LINE__ . '):</b> Error adding list to database. Database error: <br />' . $error . '</p><br /><br />Are you trying to insert a list name which is already in use?    The list name has to be different for each list! <br /><br />';
				} else {
		   			$query = 'SELECT `list_id` FROM `#__jnews_lists` WHERE `list_name`= \'' . $list->list_name . '\'';
			     	$db->setQuery($query);
					$mynewlist = $db->loadObject();

		   			$error = $db->getErrorMsg();
		   			$xf->plus('totallist0', 1);
					$xf->plus('act_totallist0', 1);
					$xf->plus('totallist1', 1);
					$xf->plus('act_totallist1', 1);
					if (!empty($error)) {
						echo  '<p><b>Error (class.upgrade.php->upgrade_News1() line ' . __LINE__ . '):</b> Error getting listname. Database error: <br />' . $error . '</p>';
						return false;
					} else {
						$idImportedList[$newsletter->id] = $mynewlist->list_id;
						$newLists[$i] = $mynewlist->list_id;
						$i++;
						$list->id = $mynewlist->list_id;
						$error = jNews_Lists::updateListData($list);
						if ( !$error ) {
							echo  '<p><b>Error (class.upgrade.php->upgrade_News1() line ' . __LINE__ . '):</b> Error inserting list. Database error: <br />' . $error . '</p>';
							return false;
						} else {
							echo '<br /><b>'.@constant( $GLOBALS[JNEWS.'listnames1'] ). ': </b>'.$list->list_name.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
							$db->setQuery("SELECT * FROM #__anjel_mailing WHERE `list_id`=".$newsletter->id);
							$mailingsImports = $db->loadObjectList();
							$error = $db->getErrorMsg();

							if (!empty($error)) {
								echo  '<p><b>Error (class.upgrade.php->upgrade_News1() line ' . __LINE__ . '):</b> Error getting mailings. Database error: <br />' . $error . '</p>';
								return false;
							} else {
								$issue_nb = 1;
								foreach ($mailingsImports AS $mailingsImport) {

									$mailings->list_id = $mynewlist->list_id;
									$mailings->list_type = '1';
									$mailings->send_date = $mailingsImport->send_date;
									$mailings->subject = $mailingsImport->list_subject;
									$mailings->htmlcontent = $mailingsImport->htmlcontent;
									$mailings->textonly = $mailingsImport->textonly;
									$mailings->attachments = $mailingsImport->attachments;
									$mailings->images = $mailingsImport->images;
									$mailings->published = $mailingsImport->published;
									$mailings->visible = $mailingsImport->visible;
									$mailings->html = $newsletter->html;
									$mailings->fromname = $mailingsImport->fromname;
									$mailings->fromemail = $mailingsImport->fromemail;
									$mailings->frombounce = $mailingsImport->frombounce;
									$mailings->author_id = $mailingsImport->subscriber_id;
									$mailings->delay = 0;
									$mailings->issue_nb = $issue_nb;
									$mailings->acc_level = 25;
									$mailings->createdate = $list->createdate;
									$issue_nb++;
									$error = jNews_Mailing::insertMailingData($mailings);
									if (!$error) {
										echo  '<p><b>Error (class.upgrade.php->upgrade_News1 () line ' . __LINE__ . '):</b> Error inserting mailing. Database error: <br />' . $error . '</p>';

									} else {

										echo '<br /><b>'._JNEWS_MAILING. ': </b>'.$mailingsImport->list_subject.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
									}
								}
							}
						}
					}
				}
			}

			### Insert registered subscribers
			$db->setQuery( "SELECT * FROM #__anjel_subscribers" );
			$subscribers = $db->loadObjectList();
			$error = $db->getErrorMsg();

			if (!empty($error)) {
				echo  '<p><b>Error (class.upgrade.php->upgrade_News1() line ' . __LINE__ . '):</b> Error getting subscribers. Database error: <br />' . $error . '</p>';
				return false;
			} else {
				foreach ($subscribers AS $subscriber) {
					$newSubs = true;
					$jnewssubscribers = jNews_Subscribers::getSubscribers( -1 , -1 , '' , $total , 0, '', '', '','','' );//added one parameter for mailid

					$db->setQuery( "SELECT `name`, `email` FROM #__users WHERE `id`=".$subscriber->subscriber_id);
					$userInfo = $db->loadObjectList();
					$error = $db->getErrorMsg();

					if (!empty($error)) {
						echo  '<p><b>Error (class.upgrade.php->upgrade_News1() line ' . __LINE__ . '):</b> Error getting users info. Database error: <br />' . $error . '</p>';
						return false;
					} else {

						foreach ($jnewssubscribers AS $jnewssubscriber) {
							if ($userInfo[0]->email == $jnewssubscriber->email) {
								$newSubs = false;
								$subId[0] = $jnewssubscriber->id;
							}
						}

							if ($newSubs) {
								$newSubscriber = new stdClass;
								$newSubscriber->user_id = $subscriber->subscriber_id;
								$newSubscriber->name = $userInfo[0]->name;
								$newSubscriber->email = $userInfo[0]->email;
								$newSubscriber->ip = $subscriber->ip;
								$newSubscriber->receive_html = $subscriber->receive_html;
								$newSubscriber->confirmed = $subscriber->confirmed;
								$newSubscriber->subscribe_date = $subscriber->subscribe_date;
								$newSubscriber->blacklist = $subscriber->blacklist;
								$newSubscriber->timezone = '00:00:00';
								$newSubscriber->language_iso = 'eng';
								$newSubscriber->params = '';


								if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
								$newSubscriber->column1=$subscriber->column1;
								$newSubscriber->column2=$subscriber->column2;
								$newSubscriber->column3=$subscriber->column3;
								$newSubscriber->column4=$subscriber->column4;
								$newSubscriber->column5=$subscriber->column5;
								}//end if for pro version

								$error = jNews_Subscribers::saveSubscriber($newSubscriber, $subscriberId, true);

								if (!empty($error)) {
									if ($subscriberId<1) echo 'Error inserting subscriber: duplicate subscriber';
									$error ='';
									$subId[0] = $subscriberId;

								} else {
									echo '<br /><b>Registered '._JNEWS_MENU_SUBSCRIBERS. ': </b>'.$newSubscriber->name.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
						 			 $d['email'] = $subscriber->email;
						 			 jNews_Subscribers::getSubscriberIdFromEmail($d );
						 			 $subId[0] = $d['subscriberId'];
								}
							} else {
								echo '<br /><b>Registered '._JNEWS_MENU_SUBSCRIBERS. ': </b>'.$userInfo[0]->name .': '. jnews::printM('red' , _JNEWS_IMPORT_EXIST);
								$subId[0] = $subscriber->subscriber_id;
							}

						$j = 0;
						foreach ($newsletters as $newsletter) {
							$letterid = $newsletter->id;
							$list_Id = 'list_' . $letterid;
							if ($subscriber->$list_Id>0) {
								$error = jNews_Queue::insertQueuesForNews($subId, $idImportedList[$letterid], 29 );
								if (!$error) echo  '<p><b>Error (class.upgrade.php->upgrade_News1 () line ' . __LINE__ . '):</b> Error inserting queue. Database error: <br />' . $error . '</p>';
							}
						}
					}
				}
			}

			### Insert unregistered subscribers
			$db->setQuery( "SELECT * FROM #__anjel_unregistered" );
			$subscribers = $db->loadObjectList();
			$error = $db->getErrorMsg();

			if (!empty($error)) {
				echo  '<p><b>Error (class.upgrade.php->upgrade_News1 () line ' . __LINE__ . '):</b> Error getting subscribers. Database error: <br />' . $error . '</p>';
				return false;
			} else {
				foreach ($subscribers AS $subscriber) {
					$newSubs = true;
					$jnewssubscribers = jNews_Subscribers::getSubscribers( -1 , -1 , '' , $total , 0, '', '', '','','' );//added one parameter for mailid

						foreach ($jnewssubscribers as $jnewssubscriber) {
							if ($subscriber->email == $jnewssubscriber->email) {
								$newSubs = false;
								$subId[0] = $jnewssubscriber->id;
							}
						}

						if ($newSubs) {
								$newSubscriber->user_id = 0;
								$newSubscriber->name = $subscriber->name;
								$newSubscriber->email = $subscriber->email;
								$newSubscriber->ip = $subscriber->ip;
								$newSubscriber->receive_html = $subscriber->receive_html;
								$newSubscriber->confirmed = $subscriber->confirmed;
								$newSubscriber->subscribe_date = $subscriber->subscribe_date;
								$newSubscriber->blacklist = $subscriber->blacklist;
								$newSubscriber->timezone = '00:00:00';
								$newSubscriber->language_iso = 'eng';
								$newSubscriber->params = '';

								if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
								$newSubscriber->column1=$subscriber->column1;
								$newSubscriber->column2=$subscriber->column2;
								$newSubscriber->column3=$subscriber->column3;
								$newSubscriber->column4=$subscriber->column4;
								$newSubscriber->column5=$subscriber->column5;
								}//end for check version pro

								$error = jNews_Subscribers::saveSubscriber($newSubscriber, $subscriberId, true);

								if (!empty($error)) {
									if ($subscriberId<1) echo 'Error inserting subscriber: Name:'.$subscriber->name.'<br />Email:'.$subscriber->email.'<br /> Error:'.$error ;
									$error ='';
									$subId[0] = $subscriberId;

								} else {
									echo '<br /><b>Unregistered '._JNEWS_MENU_SUBSCRIBERS. ': </b>'.$newSubscriber->name.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
						 			 $d['email'] = $subscriber->email;
						 			 jNews_Subscribers::getSubscriberIdFromEmail($d );
						 			 $subId[0] = $d['subscriberId'];
								}
						} else {
							echo '<br /><b>Unregistered '._JNEWS_MENU_SUBSCRIBERS. ': </b>'.$subscriber->name .': '. jnews::printM('red' , _JNEWS_IMPORT_EXIST);
						}

						$j = 0;
						foreach ($newsletters as $newsletter) {
							$letterid = $newsletter->id;
							$list_Id = 'list_' . $letterid;
							if ($subscriber->$list_Id >0 ) {
								$queue = jNews_ListsSubs::getListSubscriberInfo( $subId[0] , $idImportedList[$letterid] );
								if (empty($queue)) {
									$error = jNews_Queue::insertQueuesForNews($subId, $idImportedList[$letterid], 29 );
									if (!$error) {
										echo  '<p><b>Error (class.upgrade.php->upgrade_News1() line ' . __LINE__ . '):</b> Error inserting queue. Database error: <br />' . $error . '</p>';

									}
								}
							}
						}
				}
			}
		}
		return true;
	}

	public static function upgrade_News2(){
		$my	= JFactory::getUser();
		$db = JFactory::getDBO();

		$xf = new jNews_Config();
		$newLists = array();
		$i = 0;
		$db->setQuery("SELECT * FROM #__letterman");
		$newsletters = $db->loadObjectList();
		$error = $db->getErrorMsg();
		$newSubscriber=null;
		$list=null;
		$mailings=null;
		$subscriberId=0;
		$total=0;

		if (!empty($error)) {
			echo  '<p><b>Error (class.upgrade.php->upgrade_News2 () line ' . __LINE__ . '):</b> Error getting newsletters. Database error: <br />' . $error . '</p>';
			return false;
		} else {
			echo '<br /><b>'.@constant( $GLOBALS[JNEWS.'listnames1'] ). ':</b>';
			foreach ($newsletters AS $newsletter) {
				$list->list_name = $newsletter->subject;
				$list->list_desc = $newsletter->subject;

				$conf	= JFactory::getConfig();
				$list->sendername = $conf->getValue('config.fromname');
				$list->senderemail = $conf->getValue('config.mailfrom');
				$list->bounceadres = $conf->getValue('config.mailfrom');

				$list->layout = '[CONTENT]';
				$list->template = 0;
				$list->subscribemessage = '{tag:confirm}';
				$list->unsubscribemessage = '';
				$list->unsubscribesend = 1;
				$list->unsubscribenotifyadmin = 1;
				$list->html = 1;
				$list->hidden = 1;
				$list->list_type = '1';
				$list->auto_add = 0;
				$list->user_choose = 0;
				$list->cat_id = '0:0';
				$list->delay_min = 0;
				$list->delay_max = 0;
				$list->follow_up = 0;
				$list->owner = $my->id;
				$list->acc_level = $newsletter->access;
				$list->acc_id = 29;
				$list->published = $newsletter->published;
				$list->createdate = $newsletter->created;
				$list->footer = 1;
				$list->notify_id = 0;
				$list->notification = 0;

				$query = 'INSERT INTO `#__jnews_lists` (`list_name`) VALUES (\'' . $list->list_name . '\'  )';
				$db->setQuery($query);
				$db->query();
				$error = $db->getErrorMsg();

				if (!empty($error)) {
					echo '<p><b>Error (class.upgrade.php->upgrade_News2() line ' . __LINE__ . '):</b> Error adding list to database. Database error: <br />' . $error . '</p><br /><br />Are you trying to insert a list name which is already in use?    The list name has to be different for each list! <br /><br />';
				} else {

		   			$query = 'SELECT * FROM `#__jnews_lists` WHERE `list_name`= \'' . $list->list_name . '\'';
			     	$db->setQuery($query);
						$mynewlist = $db->loadObject();

		   			$error = $db->getErrorMsg();
		   			$xf->plus('totallist0', 1);
					$xf->plus('act_totallist0', 1);
					$xf->plus('totallist1', 1);
					$xf->plus('act_totallist1', 1);
					if (!empty($error)) {
						echo  '<p><b>Error (class.upgrade.php->upgrade_News2 () line ' . __LINE__ . '):</b> Error getting listname. Database error: <br />' . $error . '</p>';
						return false;
					} else {
						$newLists[$i] = $mynewlist->list_id;
						$i++;
						$list->id = $mynewlist->list_id;
						$error = jNews_Lists::updateListData($list);
						if ( !$error ) {
							echo  '<p><b>Error (class.upgrade.php->upgrade_News2 () line ' . __LINE__ . '):</b> Error inserting list. Database error: <br />' . $error . '</p>';
							return false;
						} else {
								echo '<br />'.$list->list_name.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
								$mailings->list_id = $mynewlist->list_id;
								$mailings->list_type = '1';
								$mailings->send_date = $newsletter->send;
								$mailings->subject = $newsletter->subject;
								$mailings->htmlcontent = $newsletter->headers.$newsletter->html_message;
								$mailings->textonly = $newsletter->headers.$newsletter->message;
								$mailings->attachments = '';
								$mailings->images = '';
								$mailings->published = $newsletter->published;
								$mailings->visible = 1;
								$mailings->html = 1;
								$mailings->fromname = $list->sendername;
								$mailings->fromemail = $list->senderemail;
								$mailings->frombounce = $list->bounceadres;
								$mailings->author_id = $my->id;
								$mailings->delay = 0;
								$mailings->issue_nb = 1;
								$mailings->acc_level = $newsletter->access;
								$mailings->createdate = $newsletter->created;

								$error = jNews_Mailing::insertMailingData($mailings);
								if (!$error) {
									echo  '<p><b>Error (class.upgrade.php->upgrade_News2 () line ' . __LINE__ . '):</b> Error inserting mailing. Database error: <br />' . $error . '</p>';

								}
						}
					}
				}
			}

			$db->setQuery( "SELECT * FROM #__letterman_subscribers " );
			$subscribers = $db->loadObjectList();
			$error = $db->getErrorMsg();

			if (!empty($error)) {
				echo  '<p><b>Error (class.upgrade.php->upgrade_News2() line ' . __LINE__ . '):</b> Error getting subscribers. Database error: <br />' . $error . '</p>';
				return false;
			} else {
				echo '<br /><b>'._JNEWS_MENU_SUBSCRIBERS. ':</b>';
				foreach ($subscribers AS $subscriber) {
					$newSubs = true;
					$jnewssubscribers = jNews_Subscribers::getSubscribers( -1 , -1 , '' , $total , 0, '', '', '','','' );//added one parameter for mailid

						foreach ($jnewssubscribers AS $jnewssubscriber) {
							if ($subscriber->subscriber_email == $jnewssubscriber->email) {
								$newSubs = false;
								$subId[0] = $jnewssubscriber->id;
							}
						}

						if ($newSubs) {
								$newSubscriber->user_id = $subscriber->user_id;
								$newSubscriber->name = $subscriber->subscriber_name;
								$newSubscriber->email = $subscriber->subscriber_email;
								$newSubscriber->ip = $subscriber->ip;
								$newSubscriber->receive_html = 1;
								$newSubscriber->confirmed = $subscriber->confirmed;
								$newSubscriber->subscribe_date = $subscriber->subscribe_date;
								$newSubscriber->blacklist = 0;
								$newSubscriber->timezone = '00:00:00';
								$newSubscriber->language_iso = 'eng';
								$newSubscriber->params = '';


								if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
								$newSubscriber->column1=$newSubscriber->column1;
								$newSubscriber->column2=$newSubscriber->column2;
								$newSubscriber->column3=$newSubscriber->column3;
								$newSubscriber->column4=$newSubscriber->column4;
								$newSubscriber->column5=$newSubscriber->column5;
								}

								$error = jNews_Subscribers::saveSubscriber($newSubscriber, $subscriberId, true);

								if (!empty($error)) {
									if ($subscriberId<1) echo 'Error inserting subscriber: '.$newSubscriber->name;
									$error ='';
									$subId[0] = $subscriberId;

								} else {
									echo '<br />'.$newSubscriber->name.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
						 			 $d['email'] = $subscriber->email;
						 			 jNews_Subscribers::getSubscriberIdFromEmail($d );
						 			 $subId[0] = $d['subscriberId'];
								}
						} else {
								echo '<br />'.$subscriber->subscriber_name .': '. jnews::printM('red' , _JNEWS_IMPORT_EXIST);
						}

						$j = 0;
						$error = '';
						for ($j = 0; $j< count($newLists); $j++) {
							$queue = jNews_ListsSubs::getListSubscriberInfo( $subId[0] , $newLists[$j] );
							if (empty($queue)) {
								$error = jNews_Queue::insertQueuesForNews($subId, $newLists[$j], 29 );
								if (!$error) {
									echo  '<p><b>Error (class.upgrade.php->upgrade_News2 () line ' . __LINE__ . '):</b> Error inserting queue. Database error: <br />' . $error . '</p>';

								}
							}
						}
				}
			}
		}
		return true;
	}

	public static function upgrade_News3()	{
		$my	= JFactory::getUser();
		$db = JFactory::getDBO();

		$xf = new jNews_Config();
		$newLists = array();
		$idImportedList = array();
		$i = 0;
		$db->setQuery("SELECT * FROM #__yanc_letters");
		$newsletters = $db->loadObjectList();
		$error = $db->getErrorMsg();
		$newSubscriber=null;
		$list=null;
		$mailings=null;
		$subscriberId=0;
		$total=0;

		if (!empty($error)) {
			echo  '<p><b>Error (class.upgrade.php->upgrade_News3 () line ' . __LINE__ . '):</b> Error getting newsletters. Database error: <br />' . $error . '</p>';
			return false;
		} else {
			foreach ($newsletters AS $newsletter) {
				$list->list_name = $newsletter->list_name;
				$list->list_desc = $newsletter->list_desc;
				$list->sendername = $newsletter->sendername;
				$list->senderemail = $newsletter->senderemail;
				$list->bounceadres = $newsletter->bounceadres;
				$list->layout = $newsletter->layout;
				$list->template = 0;
				$list->subscribemessage = $newsletter->subscribemessage;
				$list->unsubscribemessage = $newsletter->unsubscribemessage;
				$list->notifyadminmsg=$newsletter->notifyadminmsg;
				$list->html = $newsletter->html;
				$list->hidden = !$newsletter->hidden;
				$list->unsubscribesend = 1;
				$list->unsubscribenotifyadmin = 1;
				$list->list_type = '1';
				$list->auto_add = 0;
				$list->user_choose = 0;
				$list->cat_id = '0:0';
				$list->delay_min = 0;
				$list->delay_max = 0;
				$list->follow_up = 0;
				$list->owner = $my->id;
				$list->acc_level = $newsletter->aid;
				$list->acc_id = 29;
				$list->published = 1;
				$list->createdate = time();
				$list->footer = 1;
				$list->notify_id = 0;
				$list->notification = 0;

				$query = 'INSERT INTO `#__jnews_lists` (`list_name`) VALUES (\'' . $list->list_name . '\'  )';
				$db->setQuery($query);
				$db->query();
				$error = $db->getErrorMsg();

				if (!empty($error)) {
					echo '<p><b>Error (class.upgrade.php->upgrade_News3() line ' . __LINE__ . '):</b> Error adding list to database. Database error: <br />' . $error . '</p><br /><br />Are you trying to insert a list name which is already in use?    The list name has to be different for each list! <br /><br />';
				} else {

		   			$query = 'SELECT * FROM `#__jnews_lists` WHERE `list_name`= \'' . $list->list_name . '\'';
			     	$db->setQuery($query);
					$mynewlist = $db->loadObject();

		   			$error = $db->getErrorMsg();
		   			$xf->plus('totallist0', 1);
					$xf->plus('act_totallist0', 1);
					$xf->plus('totallist1', 1);
					$xf->plus('act_totallist1', 1);
					if (!empty($error)) {
						echo  '<p><b>Error (class.upgrade.php->upgrade_News3() line ' . __LINE__ . '):</b> Error getting listname. Database error: <br />' . $error . '</p>';
						return false;
					} else {
						$idImportedList[$newsletter->id] = $mynewlist->list_id;
						$newLists[$i] = $mynewlist->list_id;
						$i++;
						$list->id = $mynewlist->list_id;
						$error = jNews_Lists::updateListData($list);
						if ( !$error ) {
							echo  '<p><b>Error (class.upgrade.php->upgrade_News3 () line ' . __LINE__ . '):</b> Error inserting list. Database error: <br />' . $error . '</p>';

						} else {
							echo '<br /><b>'.@constant( $GLOBALS[JNEWS.'listnames1'] ). ': </b>'.$list->list_name.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
							$db->setQuery("SELECT * FROM #__yanc_letters WHERE `list_id`=".$newsletter->id);
							$mailingsImports = $db->loadObjectList();
							$error = $db->getErrorMsg();

							if (!empty($error)) {
								echo  '<p><b>Error (class.upgrade.php->upgrade_News3() line ' . __LINE__ . '):</b> Error getting mailings. Database error: <br />' . $error . '</p>';
								return false;
							} else {
								$issue_nb = 1;
								foreach ($mailingsImports AS $mailingsImport) {

									$mailings->list_id = $mynewlist->list_id;
									$mailings->list_type = '1';
									$mailings->send_date = $mailingsImport->send_date;
									$mailings->subject = $mailingsImport->subject;
									$mailings->htmlcontent = $mailingsImport->htmlcontent;
									$mailings->textonly = $mailingsImport->textonly;
									$mailings->attachments = $mailingsImport->attachments;
									$mailings->images = $mailingsImport->images;
									$mailings->published = $mailingsImport->published;
									$mailings->visible = $mailingsImport->visible;
									$mailings->html = $mynewlist->html;
									$mailings->fromname = $list->sendername;
									$mailings->fromemail = $list->senderemail;
									$mailings->frombounce = $list->bounceadres;
									$mailings->author_id = $my->id;
									$mailings->delay = 0;
									$mailings->issue_nb = $issue_nb;
									$mailings->acc_level = 25;
									$mailings->createdate = $list->createdate;
									$issue_nb++;
									$error = jNews_Mailing::insertMailingData($mailings);
									if (!$error) {
										echo  '<p><b>Error (class.upgrade.php->upgrade_News3() line ' . __LINE__ . '):</b> Error inserting mailing. Database error: <br />' . $error . '</p>';

									} else {
										echo '<br /><b>'._JNEWS_MENU_MAILING_TITLE. ': </b>'.$mailingsImport->subject.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
									}
								}
							}
						}
					}
				}
			}

			$db->setQuery( "SELECT * FROM #__yanc_subscribers" );
			$subscribers = $db->loadObjectList();
			$error = $db->getErrorMsg();

			if (!empty($error)) {
				echo  '<p><b>Error (class.upgrade.php->upgrade_News3() line ' . __LINE__ . '):</b> Error getting subscribers. Database error: <br />' . $error . '</p>';
				return false;
			} else {
				foreach ($subscribers AS $subscriber) {
					$newSubs = true;
					$jnewssubscribers = jNews_Subscribers::getSubscribers( -1 , -1 , '' , $total , 0, '', '', '','','' );//added one parameter for mailid

						foreach ($jnewssubscribers AS $jnewssubscriber) {
							if ($subscriber->subscriber_email == $jnewssubscriber->email) {
								$newSubs = false;
								$subId[0] = $jnewssubscriber->id;
							}
						}

						if ($newSubs) {
								$newSubscriber->user_id = $subscriber->userid;
								$newSubscriber->name = $subscriber->subscriber_name;
								$newSubscriber->email = $subscriber->subscriber_email;
								$newSubscriber->ip = $subscriber->ip;
								$newSubscriber->receive_html = $subscriber->receive_html;
								$newSubscriber->confirmed = $subscriber->confirmed;
								$newSubscriber->subscribe_date = $subscriber->subscribe_date;
								$newSubscriber->blacklist = 0;
								$newSubscriber->timezone = '00:00:00';
								$newSubscriber->language_iso = 'eng';
								$newSubscriber->params = '';

								if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
								$newSubscriber->column1=$newSubscriber->column1;
								$newSubscriber->column2=$newSubscriber->column2;
								$newSubscriber->column3=$newSubscriber->column3;
								$newSubscriber->column4=$newSubscriber->column4;
								$newSubscriber->column5=$newSubscriber->column5;
								}//end if for check version pro

								$error = jNews_Subscribers::saveSubscriber($newSubscriber, $subscriberId, true);

								if (!empty($error)) {
									if ($subscriberId<1) echo ' Error inserting subscriber:'.$newSubscriber->name;
									$error ='';
									$subId[0] = $subscriberId;

								} else {
									echo '<br /><b>'._JNEWS_MENU_SUBSCRIBERS. ': </b>'.$newSubscriber->name.': '. jnews::printM('green' , _JNEWS_IMPORT_SUCCESS);
						 			 $d['email'] = $subscriber->email;
						 			 jNews_Subscribers::getSubscriberIdFromEmail($d );
						 			 $subId[0] = $d['subscriberId'];
								}
						} else {
							echo '<br /><b>'._JNEWS_MENU_SUBSCRIBERS. ': </b>'.$subscriber->subscriber_name .': '. jnews::printM('red' , _JNEWS_IMPORT_EXIST);
						}

						$j = 0;
						$queue = jNews_ListsSubs::getListSubscriberInfo( $subId[0] , $idImportedList[$subscriber->list_id] );
						if (empty($queue)) {
							$error = jNews_Queue::insertQueuesForNews($subId, $idImportedList[$subscriber->list_id], 29 );
							if (!$error) {
								echo  '<p><b>Error (class.upgrade.php->upgrade_News3 () line ' . __LINE__ . '):</b> Error inserting queue. Database error: <br />' . $error . '</p>';

							}
						}
				}
			}
		}
		return true;
	}

	/**
	 *  Function that will create toggle link
	 * @param text $act - act name
	 * @param text $column - table column to be toggled
	 * @param text $variableName - variable link name
	 * @param mixed $variableValue - variable link value
	 * @return string $link
	*/
	public static function createToggleLink($act, $column, $variableName, $variableValue, $task='toggle', $listid = 0, $listype = 1){
		$link = new stdClass;
		$link = JURI::base() .'index.php?option='.JNEWS_OPTION.'&act='. $act .'&task='. $task .'&'. $variableName .'='. $variableValue .'&col='. $column;
		if($act == 'mailing'){
			$link = $link.'&listid='.$listid.'&listype='.$listype;
		}
		if($act == 'subscribers'){
			$link = $link.'&listid='.$listid;
		}
		return $link;
	}


	/**
	 *  Function that will toggle the values in database
	 * for now this will only works for bit 0 or 1
	 * @param object $passObj - contains the necessary infos
	*/
	public static function toggle( $passObj ){
		// check if parameter if empty
		if( empty( $passObj ) ) return false;

		$tableName = $passObj->tableName;
		$columnName = $passObj->columnName;
		$whereColumn = $passObj->whereColumn;
		$whereColumnValue = $passObj->whereColumnValue;

		static $db=null;
		if( !isset($db) ) $db = JFactory::getDBO();

		if( isset($db) ){
			$query = "SELECT `". $columnName ."` FROM `". $tableName ."` WHERE `". $whereColumn ."` = ". $whereColumnValue;
			$db->setQuery( $query );
			$result = $db->loadResult();

			$columnValue = ( !empty($result) && ( $result > 0 ) ) ? 0 : 1;

			$query = "UPDATE `". $tableName ."` SET `". $columnName ."` = ". $columnValue ." WHERE `". $whereColumn ."` = ". $whereColumnValue;
			$db->setQuery( $query );
			$db->query();
		}

		return true;
	}

	/**
	 * function for search
	 * @params $forms - the html tag of the form
	 * @params $hidden - the html of hidden values
 	 * @params $search - the value to be search
 	 * @return $html
	*/
	private static function _searchbox( $forms, $hiddenobj=null, $search='', $id='search' ){
		$html = '';
		$html .= $forms;
		$html .= $hiddenobj;
		$html .= '<input type="text" name="'.$id.'" id="'.$id.'" value="'.$search.'" style="margin: 2px 5px;" class="inputbox" onchange="document.adminForm.submit();" />';
		$html .= '<button class="joobibutton" onclick="this.form.submit();">'. _JNEWS_SEARCH_GO .'</button>';
		$js = "document.getElementById('$id').value='';this.form.submit();";
		$html .= '<button class="joobibutton" onclick="'.$js.'">'. _JNEWS_SEARCH_RESET.'</button>';
		//$html .= '</form>';

		return $html;
	}

	/**function that will create pagination for views
	 * @param object $setLimit
	 		* total - total number of rows
	 		* start - number or index to start e.g 0 ( will start from 0 - limit )
	 		* value - ending number or limit e.g 20 ( will only show 20 rows )
	 * @return $display
	*/
	private static function _pagination($setLimit, $onlyBox = false, $showTotal = false){
 		jimport('joomla.html.pagination');
 		$total = $setLimit->total;
 		$start = $setLimit->start;
 		$value = $setLimit->end;
		
 		$pagination = new JPagination( $total, $start, $value );
 		
 		if ($onlyBox){
 			$display = "<div class=\"list-footer\">\n";
			$display .= "\n<div class=\"limit\" style=\"float:left; height:22px; line-height:22px; margin:0 10px;\">".JText::_('Display Num').' '.$pagination->getLimitBox()."</div>";
			$display .= "\n<div class=\"counter\" style=\"float:left; height:22px; line-height:22px; margin:0 10px;\">".' '.$pagination->getPagesCounter()."</div>";
			if ($showTotal) $display .= "\n<div class=\"outof\" style=\"float:left; height:22px; line-height:22px; margin:0 10px;\">".' '.JText::_('Total Result:').' <span style="font-weight: bold; text-decoration: underlined;">'.$total."</span></div>";
			$display .= "\n</div>";
 		}else{
			$display = $pagination->getListFooter();
 		}
		return $display;
	}

	/**
	 * function that will set the top row before the table
	 * @param object $search
	 * @param string $message
	 * @param object $pagination
	 * @param mixed $filter
	 * @return $html
	*/
	public static function setTop( $search=null, $message=null, $pagination=null, $filter=null, $onlyBox=false, $total=false ){
		$html = '';
		$html .= '<table cellspacing="0" cellpadding="2" border="0" style="text-align: left; width: 100%;"><tbody><tr>';

		// for search box
		if( !empty($search) ){
			// get necessary parameters
			if(!isset($search->forms)) $search->forms = '';
			$forms = $search->forms;
			if(empty($search->hidden)) $search->hidden= '';
			$hidden = $search->hidden;
			$listsearch = $search->listsearch;
			$id = $search->id;

		 	$html .= '<td style="text-align:left;float:left;">';
		 	$html .= _JNEWS_SEARCH . jnews::_searchbox( $forms, $hidden, $listsearch, $id );
		 	$html .= '</td>';
	 	}

		// for text found in the upper part before that table list
		if( !empty($message) ){
		 	$html .= '<td style="text-align:center;">';
		 	$html .= $message;
		 	$html .= '</td>';
	 	}

	 	// for pagination
	 	if( !empty($pagination) ){
		 	$html .= '<td style="text-align:center;">';
			$html .= jnews::_pagination($pagination, $onlyBox);
			$html .= '</td>';
	 	}

	 	// for filter
	 	if( !empty($filter) ){
		 	$html .= '<td style="text-align: right;float:right">';
			$html .= $filter;
			$html .= '</td>';
	 	}

		$html .= '</tr></tbody></table>';

		return $html;
	}

/**
	 * <p>Function to set the bottom pagination after the table</p>
	 * @param object pagination - the pagination limits
	 * @param string $css - the styling for the pagination
	 */
	 public static function setPaginationBot($pagination=null, $css=''){
//echo '0000000000';
	 	$html = '';
	 	$html .= '<table cellspacing="0" cellpadding="2" border="0" style="'.$css.'"><tbody><tr><td>';
		$html .= jnews::_pagination($pagination);
		$html .= '</td></tr></tbody></table>';
		return $html;
	 }

	/**
	 *  Function that will get the legend to be set
	 * @param string $imgName - image name
	 * @param string $text
	 * @return array-request legend
	*/
	public static function getLegend( $imgName, $text=null ){
		$getLeg = JRequest::getVar( 'legend' );
		if ( !is_string($getLeg) )	return '';
		
		$getLegendA = unserialize( $getLeg );
		
		if( empty( $getLegendA ) ){
			$imageO = new stdClass;
			$imageO->img = $imgName;
			$imageO->text = $text;

			$getLegendA = array();
			$getLegendA[$imgName] = $imageO;
		}else{
			if( !isset( $getLegendA[$imgName] ) ){
				$imageO = new stdClass;
				$imageO->img = $imgName;
				$imageO->text = $text;

				$getLegendA[$imgName] = $imageO;
			}
		}

		 JRequest::setVar( 'legend', serialize($getLegendA) );
		 return false;
	}

	/**
	 * <p>Function that will set the Legend of the page
	 * return $html - return the html output
	 */
	public static function setLegend(){

		$getLeg = JRequest::getVar( 'legend' );
		if ( !is_string($getLeg) )	return '';
		
		$getLegendA = unserialize( $getLeg );

		if( !empty($getLegendA) ){
			$html = '';
			$html .= '<div><center>';
			$html .= _JNEWS_LEGEND .' : ';

			$count = count( $getLegendA );
			$ctr = 0;
			foreach( $getLegendA as $key=>$legendO ){
				$ctr = $ctr + 1;
				$html .= (isset($legendO->img) && !empty($legendO->img)) ? '<span style="background: transparent url('.JNEWS_PATH_ADMIN_IMAGES.'16'.DS.$legendO->img.') no-repeat scroll 0pt 50%; padding-left: 15px;">' : '<span>';
				$html .= ( ($legendO->text) && !empty($legendO->text)) ? $legendO->text .'</span>' : '</span>';
				$html .= ( $ctr != $count ) ? '<span style="margin: 0 5px; font-weight: bold;">|</span>' : '';

			} 
			$html .= '</center></div>';

			return $html;
		}else{
			return '';
		}
	}

	/**
	 * <p>Function to set the limit of the pagination<p>
	 * @param int $limittotal - the total limit
	 * @return object $setLimit
	 */
	public static function setLimitPagination($limittotal){
		$paginationStart = JRequest::getVar( 'pg' );
		if( !empty($paginationStart) ){
			$limitstart = 0;
			$limitend = $paginationStart;
		}else{
			$app = JFactory::getApplication();
			$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
			$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
		}
		$setLimit = new stdClass;
		$setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
		$setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
		$setLimit->end = ( !empty($limitend) ) ? $limitend: 20;

		return $setLimit;
	}

	/**
	 * <p>Function to set the page information to be used in the pagination and table sorting</p>
	 * @param object $limittotal - the total limit of the listing
	 * @return $pageInfo
	 */
	public static function setPageInfo($limittotal=null){
		$paginationStart = JRequest::getVar( 'pg' );
		$pageInfo = new stdClass;
		if( !empty($paginationStart) ){
			$limitstart = 0;
			$limitend = $paginationStart;
		}else{
			$app = JFactory::getApplication();
			$limitstart = $app->getUserStateFromRequest( 'limitstart', 'limitstart', 0, 'int' );
			$limitend = $app->getUserStateFromRequest( 'limit', 'limit', 0, 'int' );
		}
		$pageInfo->setLimit = new stdClass;
		$pageInfo->setLimit->total = ( !empty($limittotal) ) ? $limittotal : 0;
		$pageInfo->setLimit->start = ( !empty( $limitstart ) ) ? $limitstart : 0;
		$pageInfo->setLimit->end = ( !empty($limitend) ) ? $limitend: 20;

		$pageInfo->filter->order->value = $app->getUserStateFromRequest( 'filter_order', 'filter_order',	'a.ordering','cmd' );
		$pageInfo->filter->order->dir	= $app->getUserStateFromRequest( 'filter_order_Dir', 'filter_order_Dir',	'asc',	'word' );


		return $pageInfo;
	}

	/**
	 * <p>Function to truncate string<p>
	 * @param string $string - the string the will be truncate
	 * @param int $limit - the limit/lenght for the output string or simply you want the input string to reduced
	 * @param string $break - you want to end to avoid cutting the word or the sentence?
	 * @param string $pad - it will be pud at the end of the truncated string
	 */
	public static function stringTruncate($string, $limit, $break=".", $pad="..."){
		// return with no change if string is shorter than $limit
		if(strlen($string) <= $limit) return $string;

		// is $break present between $limit and the end of the string?
		if(false !== ($breakpoint = strpos($string, $break, $limit))) {
			 if($breakpoint < strlen($string) - 1) {
			 	$string = substr($string, 0, $breakpoint) . $pad;
			 }
		}

		return $string;
	}

	/**
	 * <p>Function to set the content of the editor with regards to the API of the editor plugin
	 * @param object $editor
	 * @param string $name - control name
	 * @param mixed $html - the content to set on the editor
	 */
	public static function EditorSetContent($editor, $name, $html ) {
		switch($editor->get('_name')){
			case 'jce':
//				$editorSetContent = " try{JContentEditor.setContent('".$name."', $html); }catch(err){".$editor->setContent($name, $html)."} ";
				$editorSetContent = " try{JContentEditor.setContent('".$name."',$html); }catch(err){WFEditor.setContent('".$name."',$html);} ";
				break;
			case 'fckeditor':
				$editorSetContent = " try{FCKeditorAPI.GetInstance('".$name."').SetHTML($html); }catch(err){".$editor->setContent($name, $html)."} ";
				break;
			default:
				$editorSetContent = $editor->setContent($name, $html);
		}
		return $editorSetContent;
	}

	/**
	 * Function to create a directory on a site
	 * @param $dir string directory
	 * @param $report bool if resulted to success or failure creation of directory
	 * @return bool true or false
	 */
	public static function createDirectory($dir,$report = true){
		if(is_dir($dir)) return true;
		jimport('joomla.filesystem.folder');
		jimport('joomla.filesystem.file');
		$indexhtml = '<html><body bgcolor="#FFFFFF"></body></html>';
		if(!JFolder::create($dir)){
			if($report) jnews::M('red' , 'Could not create the directly '.$dir,false);
			return false;
		}
		if(!JFile::write($dir.DS.'index.html',$indexhtml)){
			if($report) jnews::M('red' , 'Could not create the file '.$dir.DS.'index.html',false);
		}
		return true;
	}

	/**
	 * CopyFolder to certain directory
	 */
	public static function copyFolder($from,$to){
		$return = true;
		$allFiles = JFolder::files($from);
		foreach($allFiles as $oneFile){
			if(file_exists($to.DS.'index.html') AND $oneFile == 'index.html') continue;
			if(JFile::copy($from.DS.$oneFile,$to.DS.$oneFile) !== true){
				echo '<br>Could not copy the file from '.$from.DS.$oneFile.' to '.$to.DS.$oneFile;
				$return = false;
			}
		}
		$allFolders = JFolder::folders($from);
		if(!empty($allFolders)){
			foreach($allFolders as $oneFolder){
				if(!jnews::createDirectory($to.DS.$oneFolder)) continue;
				if(!jnews::copyFolder($from.DS.$oneFolder,$to.DS.$oneFolder)) $return = false;
			}
		}
		return $return;
	}

	/**
	 * Remove Folders during Uninstall process
	 */
	 public static function removeFolder($fichier) {
		if (file_exists($fichier)){
			chmod($fichier,0777);
			if (is_dir($fichier)){
				$id_dossier = opendir($fichier);
				while($element = readdir($id_dossier)){
					if(is_dir($fichier.DS.$element)){//deleting dir inside dir
						if($element == 'images'){
							if($elementDirOpen = opendir($fichier.DS.$element)){
								while($nestedDirFile = readdir($elementDirOpen)){
									if( !empty($nestedDirFile) && ( $nestedDirFile != '.' ) && ( $nestedDirFile != '..' ) ){ 
										@unlink( $fichier.DS.$element .DS. $nestedDirFile);
									}
								}
								closedir($elementDirOpen);
								rmdir( $fichier.DS.$element );
							}
						}
					}else{
						if ($element != "." && $element != "..") unlink($fichier.DIRECTORY_SEPARATOR.$element);
					}
				}
				closedir($id_dossier);
				return rmdir($fichier);
			}
		}
		return false;
	}

	 /**
	  * Function to convert given units to bytes
	  * @params $val string the value needs to be converted
	  * @return int the converted value
	  */
	  public static function convertToBytes($val){

	  	$val = trim($val);
	    $unit = strtolower(substr($val,strlen($val/1),1));
	    if($unit == 'g') $val = $val*1073741824;
	    if($unit == 'm') $val = $val*1048576;
	    if($unit == 'k') $val = $val*1024;

	    return $val;
	  }

	/**
	 * Function to display the AccessRoles
	 * @param string the field where the values came from
	 * @param string the value which needs to be handled
	 * @return string the html codes produced
	 */
	public static function displayAccessRoles($map,$values){
	?>
	<script language="javascript" type="text/javascript">
		function updateACL(map){
			choice = eval('document.adminForm.choice_'+map);
			choiceValue = 'special';
			for (var i=0; i < choice.length; i++){
			   if (choice[i].checked){
			     choiceValue = choice[i].value;
				}
			}
			hiddenVar = document.getElementById('hidden_'+map);
			if(choiceValue != 'special'){
				hiddenVar.value = choiceValue;
				document.getElementById('div_'+map).style.display = 'none';
			}else{
				document.getElementById('div_'+map).style.display = 'block';
				specialVar = eval('document.adminForm.special_'+map);
				finalValue = '';
				for (var i=0; i < specialVar.length; i++){
					if (specialVar[i].checked){
			     		finalValue += specialVar[i].value+',';
					}
				}
				hiddenVar.value = finalValue;
			}
		}
	</script>

	<?php
		$js ='window.addEvent(\'domready\', function(){ updateACL(\''.$map.'\'); });';
		$doc = JFactory::getDocument();
		$doc->addScriptDeclaration( $js );

		if(version_compare(JVERSION,'1.6.0','<')){
			$acl = JFactory::getACL();
			$groups = $acl->get_group_children_tree( null, 'USERS', false );
		}else{
			$db = JFactory::getDBO();
			$db->setQuery('SELECT a.*, a.title as text, a.id as value  FROM #__usergroups AS a ORDER BY a.lft ASC');
			$groups = $db->loadObjectList();
		}

		$choice = array();
		$choice[] = JHTML::_('select.option','none',JText::_('None'));
		$choice[] = JHTML::_('select.option','all',JText::_('All'));
		$choice[] = JHTML::_('select.option','special',JText::_('Custom'));

		$choiceValue = ($values == 'none' OR $values == 'all') ?  $values : 'special';
		$return = JHTML::_('select.radiolist',   $choice, "choice_".$map, 'onclick="updateACL(\''.$map.'\');"', 'value', 'text',$choiceValue);
		$return .= '<input type="hidden" name="'.$map.'" id="hidden_'.$map.'" value="'.$values.'"/>';
		$valuesArray = explode(',',$values);
		$listAccess = '<div style="display:none" id="div_'.$map.'"><table>';
		foreach($groups as $oneGroup){
			$listAccess .= '<tr><td>';
			if(!in_array($oneGroup->value,array(29,30))) $listAccess .= '<input type="checkbox" onclick="updateACL(\''.$map.'\');" value="'.$oneGroup->value.'" '.(in_array($oneGroup->value,$valuesArray) ? 'checked' : '').' name="special_'.$map.'" id="special_'.$map.'_'.$oneGroup->value.'"/>';
			$listAccess .= '</td><td>'.$oneGroup->text.'</td></tr>';
		}
		$listAccess .= '</table></div>';
		$return .= $listAccess;
		return $return;
	}

  //we check if the site is Local
  public static function isLocal($site=''){
 	 //$urlpos = strpos(JOOBI_SITE, '://');
 	 if ( empty($site) ) $site = JNEWS_JPATH_LIVE;
	$urlpos = strpos($site, '://');
	//$url = substr( JOOBI_SITE, $urlpos+3 );
	$url = substr( $site, $urlpos+3 );
	$url = rtrim( $url, '/');
    if ( substr( $url, 0,9 )=='localhost'
    || substr( $url, 0, 3 ) == '10.'
    || substr( $url, 0, 8 ) == '192.168.'
    || substr( $url, 0, 7 ) == '172.16.'
    || substr( $url, 0, 4 ) == '127.'
     ) {
      	return true;
    }else{
    	return false;
    }
  }

  public static function includejoobi(){
  	//we load the joobi library
  	$joobilib = true;

	if ( ( defined('_JEXEC') ) && !defined('JOOBI_SECURE') ) define( 'JOOBI_SECURE', true );

  	$joobiEntryPoint = '' ;
	if(defined('JPATH_ROOT'))	$path = JPATH_ROOT;
//	elseif(isset($mosConfig_absolute_path)) $path = $mosConfig_absolute_path;

	if ( !file_exists( $path.DS.'joobi'.DS.'entry.php' ) ) return false;

	$status = include( $path . DIRECTORY_SEPARATOR . 'joobi' . DIRECTORY_SEPARATOR  . 'entry.php' );

	if ( !$status && !defined('INSTALLER_FOLDER') ) {
	   echo "We were unable to load the joobi library. If you removed the joobi folder, please also remove this plugins from the Joomla plugins manager.";
	   $joobilib = false;
	}

	return $joobilib;

  }
  
/**
 * Clean implode of an array
 * eg: we remove the extra comma if there is an empty entry in the array
 * @param string $glue
 * @param array $pieces
 */
  public static function implode( $glue, $pieces ) {
  	if ( empty($pieces) || !is_array($pieces) ) return '';
  	if ( empty($glue) || !is_string($glue) ) return '';
  	return trim( implode( $glue, $pieces), $glue );
  }
  

/**
 * Clean implode of an array
 * eg: we remove the extra comma if there is an empty entry in the array
 * @param string $glue
 * @param array $pieces
 */
  public static function myTheme() {
  	return ( !empty($GLOBALS[JNEWS.'component_theme']) ? $GLOBALS[JNEWS.'component_theme'] : 'joobilist' );
  }
    
  
 }


class MosTabsjNews {
	
	var $useCookies = true;

	function __construct( $useCookies, $xhtml=null ) {
		$this->useCookies = $useCookies;
	}

		
		function startPane( $tabText ) {
		 
			$paneid = $tabText;
			$this->paneid = $paneid;
			$doc = JFactory::getDocument();
    		$doc->addStyleSheet( JNEWS_JPATH_LIVE . '/components/'.JNEWS_OPTION.'/css/tabs.css' );				
			
			if ( !isset($this->useCookies) ) $this->useCookies = true;
		
			$html = '<div name="maintab" class="tab-pane" id="main'.$paneid.'">';
	
			$js = 'window.addEvent(\'domready\', function(){';
			$js .= 'var joobiTabs=true;';
			$js .= 'setTimeout( "new WebFXTabPane( document.getElementById( \'main' .$paneid.'\' ) , ' .(int)$this->useCookies.' );",50 );';
			$js .= '});';
				
			$jsfly = 'var tabmain=document.getElementById( "main' .$paneid.'" );tabmain.style.visibility = "hidden";';
			
			$html .= '<script type="text/javascript">'.$jsfly.'</script>';
	
			$doc->addScriptDeclaration( $js );
			$doc->addScript( JNEWS_JPATH_LIVE . '/components/'.JNEWS_OPTION.'/includes/tabpane.js' );
		
			echo $html;
			
		}

	function endTab() {
		echo '</div> ';
	}

	function startTab( $tabText, $paneid ) {
		$html = '<div name="tabjb" class="tab-page" id="'.$paneid.'">';
		$html .= '<h4 class="tab"><span class="jtspan" id="jtspan'.$paneid.'">'.$tabText.'</span></h4>';
		echo $html;			
	}

	function endPane(){
		echo '</div> ';
	}
	
	function noShow() {
	}		
	
}
