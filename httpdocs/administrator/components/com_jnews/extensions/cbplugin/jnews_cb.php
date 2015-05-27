<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

if ( !defined('JNEWS_JPATH_ROOT') ) {
if ( defined('JPATH_ROOT') AND class_exists('JFactory')) {
	define ('JNEWS_JPATH_ROOT' , JPATH_ROOT );
}
}

jimport('joomla.filesystem.file');
if ( JFile::exists(JNEWS_JPATH_ROOT . DS.'components'.DS.'com_jnews'.DS.'defines.php') ) {
	require_once( JNEWS_JPATH_ROOT . DS.'components'.DS.'com_jnews'.DS.'defines.php');

	$_PLUGINS->registerFunction( 'onUserActive', 'userActivated','getjNewsTab' );
	$_PLUGINS->registerFunction( 'onAfterDeleteUser', 'userDeleted', 'getjNewsTab' );
	
	$mainframe = JFactory::getApplication();
	define('_jnewsCLASS', JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
	
	if(!$mainframe->isAdmin()){
		$Itemid = @$GLOBALS[JNEWS.'itemidAca'];
	}
}

class getjNewsTab extends cbTabHandler {
	function getjNewsTab() {
		$this->cbTabHandler();
	}

    function getDisplayTab( $tab, $user, $ui) {
		$Itemid= JRequest::getInt('Itemid');

		$my	= JFactory::getUser();
		$document= JFactory::getDocument();
		$document->addStyleSheet( JNEWS_JPATH_LIVE .'/components/'.JNEWS_OPTION.'/css/jnews.css', 'text/css' );

      if(!getjNewsTab::checkInstalled()) {
      	return _UE_NEWSLETTERNOTINSTALLED;
      }

	  $tabparams = $this->_memGetTabParameters($user);

      if (!$tabparams['public_view']) {
        if (empty($my->id) OR $my->id != $user->user_id) {return;}
      }

      $html = '';
    require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
	require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.subscribers.php');
	require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.listssubscribers.php');
	require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.lists.php');
	require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'views'.DS.'subscribers.jnews.html.php');

      if ( !empty($my->id) ) {
     	$subscriberId = jNews_Subscribers::getSubscriberIdFromUserId($my->id);
        $qid[0] = $subscriberId;
		$subscriber = jNews_Subscribers::getSubscribersFromId($qid, false);
		$queues = jNews_ListsSubs::getSubscriberLists($subscriberId);

      	$access = jnews::checkPermissions('admin', $my->id);

      } else {
      	$userId = 0;
      	$queues = '';
      	$access = false;
      	$subscriberId = 0;
      	$subscriber = new stdClass;
      	$subscriber->id =  '' ;
      	$subscriber->user_id =  0 ;
      	$subscriber->name =  '' ;
      	$subscriber->email =  '' ;
      	$subscriber->ip = jNews_Subscribers::getIP();
      	$subscriber->receive_html =  1 ;
      	$subscriber->confirmed =  1;
      	$subscriber->blacklist =  0;
      	$subscriber->timezone = '00:00:00';
      	$subscriber->language_iso = 'eng';
      	$subscriber->params = '';
      	$subscriber->subscribe_date =  time();

      	if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is pro
      	$subscriber->column1='';
      	$subscriber->column2='';
      	$subscriber->column3='';
      	$subscriber->column4='';
      	$subscriber->column5='';
      	}//end if the version of jnews is pro
      }

//      $lists = jNews_ListsSubs::getSubscriberLists( $subscriberId );
		$query = 'SELECT * FROM `#__jnews_lists` WHERE `published`=1 AND `hidden`=1 ';
		$db = JFactory::getDBO();
		$db->setQuery($query);
		$lists = $db->loadObjectList();
      
      $doShowSubscribers = false;

      $html .= getjNewsTab::_editSubscriber( $user, $subscriber, $lists, $queues, '', $access, false, true );

      return $html;
    }



	function getEditTab( $tab, $user, $ui) {
		$Itemid= JRequest::getInt('Itemid');

		$my	= JFactory::getUser();
		if ($my->get('id') < 1) {
			echo JText::_('ALERTNOTAUTH');
			echo "<br />" . JText::_( 'You need to login.' );
			return false;
		}

		if(!getjNewsTab::checkInstalled()) {
			return _UE_NEWSLETTERNOTINSTALLED;
		}

		$html = '';
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.subscribers.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.listssubscribers.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.lists.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'views'.DS.'subscribers.jnews.html.php');

		if (!empty($my->id)) {

	     	$subscriberId = jNews_Subscribers::getSubscriberIdFromUserId( $my->id );
	        $qid[0] = $subscriberId;
			$subscriber = jNews_Subscribers::getSubscribersFromId($qid, false);
			$queues = jNews_ListsSubs::getSubscriberLists( $subscriberId );
			    
			$access = jnews::checkPermissions('admin', $my->id);

		} else {
			$userId = 0;
			$queues = '';
			$access = false;
			$subscriberId = 0;
			$subscriber = new stdClass;
			$subscriber->id =  '' ;
			$subscriber->user_id =  0 ;
			$subscriber->name =  '' ;
			$subscriber->email =  '' ;
			$subscriber->ip = jNews_Subscribers::getIP();
			$subscriber->receive_html =  1 ;
			$subscriber->confirmed =  1;
			$subscriber->blacklist =  0;
			$subscriber->timezone = '00:00:00';
			$subscriber->language_iso = 'eng';
			$subscriber->params = '';
			$subscriber->subscribe_date =  time();

			if($GLOBALS[JNEWS.'level'] > 2){	//check if the version of jnews is pro
			$subscriber->column1='';
			$subscriber->column2='';
			$subscriber->column3='';
			$subscriber->column4='';
			$subscriber->column5='';
			}
		}

			if(!empty($my->user_id)){
				if ($my->user_id>0) {
					$access = jnews::checkPermissions('admin');
				} else {
					$access = false;
				}
			}		
		
		$query = 'SELECT * FROM `#__jnews_lists` WHERE `published`=1 AND `hidden`=1 ';
		$db = JFactory::getDBO();
		$db->setQuery($query);
		$lists = $db->loadObjectList();
				
		$doShowSubscribers = false;

		$mainLink = 'option='.JNEWS_OPTION;
		$selectLink = 'option='.JNEWS_OPTION.'&act=subscriber';
		$mainLink = jNews_Tools::completeLink($mainLink,false);
		$selectLink = jNews_Tools::completeLink($selectLink,false);

		$forms['main'] =  '<form method="post" action="'.$mainLink.'" onsubmit="submitbutton();return false;" name="mosForm" >' ."\n\r";
		$forms['select'] = '<form method="post" action="'.$selectLink.'"  name="jNewsFilterForm">';
		if(empty($access)) $access=29;

		
	    $html .= jNews_SubscribersHTML::editSubscriber( $subscriber, $lists, $queues, $forms, $access, true, true );
    
		$html .=  '<input type="hidden" name="subscriber_id" value="'.$subscriber->id.'" />';

		return $html;
	}


	function saveEditTab($tab, &$user, $ui, $postdata) {
			$my	= JFactory::getUser();
			if ($my->get('id') < 1) {
				echo JText::_('ALERTNOTAUTH');
				echo "<br />" . JText::_( 'You need to login.' );
				return;
			}

		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.subscribers.php');
		if(!jNews_Subscribers::updateCBFESubscriber($user->user_id, $user)) $this->_setErrorMSG(_JNEWS_ERROR);
		
	}


	function getDisplayRegistration($tab, $user, $ui) {
		$my	= JFactory::getUser();

		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.lists.php');
		$html = '';

		if ($GLOBALS['jnews_cb_plugin']=='1' ) {
			$lists = jNews_Lists::getSpecifiedLists($GLOBALS['jnews_cb_listIds'], false );
			if (!empty($lists)) {

				$i=0;
				$accessLevel = 18; //default access level jack 31
				$htmlOK = false;

				if (!empty($GLOBALS['jnews_cb_intro'])) {
					$html .= '<tr><td class="titleCell" colspan="2">'. $GLOBALS['jnews_cb_intro'] .'</td></tr>';
				}

				if ($GLOBALS['jnews_cb_showname']) {

					 foreach ($lists as $list) {
					 	$i++;
						$subscribed = 0;
					 	if ($list->html ==1) $htmlOK = true;

						$checked = $GLOBALS['jnews_cb_checkLists'];
						if ($list->hidden == 1) {
							 $subscriber->blacklist = 0;
							if ($checked != 0) $checkedPrint = ' checked="checked" '; else $checkedPrint = '';
							$html .= '<tr>';
							if ($GLOBALS['jnews_cb_checkLists'] == 1) {
								$text = "\n".'<td class="titleCell" style="text-align: right;"><input type="checkbox" class="inputbox" value="1" name="subscribed['.$i.']" checked="checked" /></td>';
							} else {
								$text = "\n".'<td class="titleCell" style="text-align: right;"><input type="checkbox" class="inputbox" value="1" name="subscribed['.$i.']" '.$checkedPrint.' /></td>';
							}
							$text .= "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" />';
							$text .= "\n".'<td class="fieldCell"><span class="aca_list_name" onclick=\'return false;\'>'. jNews_Tools::toolTip($list->list_desc ,$list->list_name, '', '', $list->list_name , '#', 1).'</span></td>';
							$html .= $text;
							$html .= '</tr>';
						} else {
							$html .=  '<input type="hidden"  value=1 name="subscribed['.$i.']" />';
							$html .=   "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" />';
						}
					 	$html .=  "\n".'<input type="hidden" name="acc_level['.$i.']" value="'.$accessLevel.'" />';
					 }
				} else {
					 foreach ($lists as $list) {
						$i++;
					 	$html .=  '<input type="hidden"  value="1" name="subscribed['.$i.']" />';
					 	$html .=  "\n".'<input type="hidden" name="sub_list_id['.$i.']" value="'.$list->id.'" />';
					 	$html .=  "\n".'<input type="hidden" name="acc_level['.$i.']" value="'.$accessLevel.'" />';
					 	if ($list->html ==1) $htmlOK = true;
					 }
				}

				 $checked = $GLOBALS['jnews_cb_defaultHTML'];

				 if ($htmlOK) {
					 if ($GLOBALS['jnews_cb_showHTML']) {
						$html .= '<tr>';
						if ($checked != 0) $checkedPrint = ' checked="checked" '; else $checkedPrint = '';
						$text = '<td class="titleCell" style="text-align: right;"><input type="checkbox" class="inputbox" value="1" name="receive_html" '.$checkedPrint.' /></td>';
						$text .= '<td class="fieldCell">'._JNEWS_RECEIVE_HTML.'</td>';
						$html .=  jnews::printLine(false, $text);
						$html .= '</tr>';
					 } else {
						 $html .= '<input type="hidden" value="'.$checked.'" name="receive_html" />' . "\n";
					 }
				 } else {
					$html .= '<input type="hidden" value="'.$checked.'" name="receive_html" />' . "\n";
				 }
			} else {
				$html = '<input type="hidden" value="'.$GLOBALS['jnews_cb_defaultHTML'].'" name="receive_html" />' . "\n";
			}
		}else{
			$html = '<input type="hidden" value="'.$GLOBALS['jnews_cb_defaultHTML'].'" name="receive_html" />' . "\n";
		}

		return $html;
	}


	function saveRegistrationTab($tab, &$user, $ui, $postdata) {
		global $ueConfig;

		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.subscribers.php');
		if ($user->user_id > 0 ) {
			 if ( !jNews_Subscribers::updateCBFESubscriber($user->user_id, $user ) ) {
				$this->_setErrorMSG(_JNEWS_ERROR);
				return;
			 }
		}
		return;
	}

	function userActivated($user, $success) {

		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.subscribers.php');
		
		jNews_Subscribers::updateCBSubscribers( true );
		$user->receive_html = 1;
		 if(!jNews_Subscribers::updateCBFESubscriber($user->user_id, $user, true )) {
		 	$this->_setErrorMSG(_JNEWS_ERROR);
		 }

		return;
	}

	function userDeleted($user, $success) {

		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.jnews.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.subscribers.php');
		if(!empty($user->user_id)){
			$subscriberId = jNews_Subscribers::getSubscriberIdFromUserId($user->user_id);
			if(!empty($subscriberId)) jNews_Subscribers::deleteSubscriber($subscriberId);
		}
		jNews_Subscribers::updateCBSubscribers();
		return true;
	}

	function checkInstalled() {
		if(!file_exists(_jnewsCLASS)) {
			return false;
		}
		return true;
	}


    function _memGetTabParameters($user){
		$params = $this->params;

        $TabParams["show_archive"] = $params->get('show_archive', 1);
        $TabParams["public_view"] = $params->get('public_view', 0);
        $TabParams["jnews_itemid"] = $params->get('jnews_itemid', '');

        return $TabParams;
	}

	 function _editSubscriber($user, $subscriber, $listings, $queues, $forms, $access=false, $frontEnd=false, $cb=false ) {

		$br = "\n\r";
        $html = '<div style="width:100%; align:left;">'.$br;
		$html .= '<fieldset class="jnewscss" style="padding: 10px; text-align: left">'.$br;
		$html .= '<legend><strong>'._JNEWS_SUB_INFO.'</strong></legend>'.$br;
		$html .= '<table cellpadding="0" cellspacing="0" align="center">'.$br;

        if ($subscriber->receive_html) {
            $receive_html = _CMN_YES;
        } else {
            $receive_html = _CMN_NO;
        }
        if($GLOBALS['jnews_cb_showHTML']){
			$html .= jnews::miseEnHTML(_JNEWS_RECEIVE_HTML , _JNEWS_RECEIVE_HTML_TIPS, $receive_html);
        }

        if ($GLOBALS['jnews_time_zone']==1) {
			$html .= jnews::miseEnHTML(_JNEWS_TIME_ZONE_ASK , _JNEWS_TIME_ZONE_ASK_TIPS, $subscriber->timezone);
 		}

		$html .= '</table>';
		$html .= '</fieldset></div>';

		$html .=  getjNewsTab::_showSubscriberLists($user, $subscriber, $listings, $queues, $frontEnd, $access);

		return $html;
	}

	 function _showSubscriberLists($user, $subscriber, $lists, $queues, $frontEnd, $accessAdmin) {
		$Itemid= JRequest::getInt('Itemid');
		$tabparams = $this->_memGetTabParameters($user);

        if (!empty($lists)) {
			$br = "\n\r";
            $html = '<fieldset class="jnewscss" style="padding: 4px; text-align: left">'.$br;
			$html .= '<legend><strong>'._JNEWS_SUBSCRIPTIONS.'</strong></legend>' .$br;
			$html .= '<table width="100%"  border="0" cellspacing="0" cellpadding="4" class="adminlist">' .$br;
			$html .= '<tr><th class="title">#</th>' .$br;
			$html .= '<th class="title">'._JNEWS_LIST_NAME.'</th>' .$br;
			$html .= '<th class="title" style="text-align: center;">'._JNEWS_LIST_T_SUBSCRIPTION.'</th>' .$br;

            if ($tabparams['show_archive']) {$html .= '<th class="title" style="text-align: center;">'._JNEWS_VIEW_ARCHIVE.'</th>' .$br;}

            $html .= '</tr>' .$br;

			$subscribed = '';
			$i = 0;
		  	foreach ($lists as $list) {
				$i++;
				$subscribed = 0;
				if (!empty($queues)) {
					foreach ($queues as $queue) {
							if ($queue->list_id == $list->id) {
								$subscribed =1;
							}
					}
				}

                if (!empty($tabparams['jnews_itemid'])) {
                    $item_id = $tabparams['jnews_itemid'];
                } else {
                    $item_id = $Itemid;
                }

				$html .= '<tr><td>'.$i.'</td><td>' .$br;
				$link = ( $list->hidden AND ($list->list_type =='1' or $list->list_type =='7') AND $GLOBALS[JNEWS.'show_archive'] ) ? 'index.php?option='.JNEWS_OPTION.'&act=mailing&task=archive&listid='.$list->id.'&Itemid='.$item_id : '#';

				$html .= '<span class="aca_letter_names"';
				if ($link == "#"){$html .= " onclick='return false;' ";}
				$html .= '>'. jNews_Tools::toolTip($list->list_desc ,$list->list_name,'', '', $list->list_name, $link, 1).' </span>' .$br;
				$html .= '</td><td style="text-align: center;">' .$br;

                if ( $subscribed == 1 ) {$html .= _CMN_YES;}
                if ( $subscribed == 0 ) {$html .= _CMN_NO;}

				$html .= '</td>' .$br;

				if ($tabparams['show_archive'] && ($list->list_type == 1 or $list->list_type == 7)) {
					$link = 'option='.JNEWS_OPTION.'&act=mailing&listid=' .$list->id . '&listype=' .$list->list_type .'&task=archive&Itemid=' . $item_id;
					$link = jNews_Tools::completeLink($link,false);

					$img = 'move_f2.png';
					$html .=  '<td height="20" style="text-align: center;">';
					$html .=  '<a href="' . $link. '" >'."\n\r" ;
					$html .=  '<img src="'. JNEWS_JPATH_LIVE .'/components/' .JNEWS_OPTION. '/images/' . $img. '" width="20" height="20" border="0" alt="'._JNEWS_VIEW_ARCHIVE.'" /></a></td>'."\n\r" ;
				}elseif($tabparams['show_archive']) {
					$html .=  '<td height="20"><center>-</center></td>'."\n\r";
				}

			}
			$html .=  '<tr></table></fieldset>';
			 return $html;
		 }

	}
	
}
