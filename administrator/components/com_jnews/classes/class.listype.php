<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class jNews_ListType {

	 public static function chooseType($task, $action, $listType , $actionType, $message='', $title='') {
		//css injection
		$mainPath = JNEWS_PATH_ADMIN_IMAGES2.'header/';
		$doc = JFactory::getDocument();
		$css = '.icon-48-newsletter { background-image:url('.$mainPath .'newsletter.png)}';
		$css .= '.icon-48-autoresponder { background-image:url('.$mainPath .'autoresponder.png)}';
		$css .= '.icon-48-smartnewsletter { background-image:url('.$mainPath .'smartnewsletter.png)}';
		$doc->addStyleDeclaration($css, $type = 'text/css');

		$results = '';
		switch ($actionType) {
			case 'titles':
				if ($listType>0) {
			      	$results = $title._JNEWS_ALL.' '.@constant( $GLOBALS[JNEWS.'listnames'.$listType] );
				} else {
			      	$results = _JNEWS_MAILING_ALL;
				}
				break;
			case 'mailing_header':
				if ($listType>0) {
				backHTML::_header( @constant( $GLOBALS[JNEWS.'listnames'.$listType] ) , $GLOBALS[JNEWS.'listlogo'.$listType] , $message , $task, $action  );
				} else {
				backHTML::_header( _JNEWS_MAILING_ALL  , 'newsletter.png' , $message  , $task, $action );
				}
				break;
			case 'mailing_edit_header':
				backHTML::_header( _JNEWS_EDIT_A.@constant( $GLOBALS[JNEWS.'listname'.$listType] ) , 'newsletter' , $message, $task, $action );
				break;
			default:
				$results = 'not prossible case , or not yet implemented';
			break;
		}
   return $results;
   }

	 public static function sendType($lisType) {
		if ($lisType==1) {
			return true;
		} else {
			return false;
		}
   }

	 public static function getListsDropList($listId, $listType, $order) {
		$lists = array();
		$newObj = new stdClass;
		$newObj->list_name = _JNEWS_SEL_ALL_SUB;
		$newObj->id = 0;
		
		$lists[0] = $newObj;
		$lt = array_merge( $lists, jNews_Lists::getLists(0, $listType, 1,$order, false, false, true));
		
      	return $lt;
	 }

	 public static function getMailingDropList($listId, $listType, $order) {
		$lists = '';
		$i=0;
		$flag = array();
		$lists[0] = new stdClass;
		$lists[0]->name = _JNEWS_SEL_ALL ;
		$lists[0]->id = '0-0';

		$nb = explode(',', $GLOBALS[JNEWS.'activelist']);
		$size = sizeof($nb);
		for($k = 0; $k < $size; $k ++) {
			$index = $nb[$k];
			if ($listType==$index OR ($GLOBALS[JNEWS.'listype'.$index] ==1 AND $GLOBALS[JNEWS.'totallist'.$index] >0)) {
				$i++;
				$lists[$i] = new stdClass;
				$lists[$i]->name = _JNEWS_ALL.' '.@constant( $GLOBALS[JNEWS.'listnames'.$index] );
				$lists[$i]->id = $index.'-0';
				$flag[$index] = 0;
			}
		}

		if ($listId>0) {
			$i++;
			$getList = jNews_Lists::getLists($listId, 0, 1, $order, false, false, true);
			if ( empty($getList) ) return;

			if ( !isset($lists[$i]) ) $lists[$i] = new stdClass;
			$lists[$i]->name = $getList[0]->list_name;
			$lists[$i]->id = $getList[0]->list_type.'-'.$getList[0]->id;
		} else {
			if ($listType==0) {
				$getLists = jNews_Lists::getLists(0, 0, 1, 'listype_name', false, false, false);
			} else {
				$getLists = jNews_Lists::getLists(0, $listType, 1, $order, false, false, false);
			}
			foreach ($getLists as $getList) {
				$size = sizeof($nb);
				for($k = 0; $k < $size; $k ++) {
					$index = $nb[$k];
					if ($getList->list_type == $index && empty($flag[$index]) && @$GLOBALS[JNEWS.'listype'.$index] ==1 && @$GLOBALS[JNEWS.'totallist'.$index] > 0) {
						$i++;
						$lists[$i] = new stdClass;
						$lists[$i]->name = '-- '.@constant( $GLOBALS[JNEWS.'listnames'.$index] ).' --';
						$lists[$i]->id =  $index.'-0';
						$flag[$index] = true;
					}
				}

				if ($GLOBALS[JNEWS.'listype'.$getList->list_type]) {
					$i++;
					$lists[$i] = new stdClass;
					$lists[$i]->name = $getList->list_name;
					$lists[$i]->id = $getList->list_type.'-'.$getList->id;
				}
			}
		}

      return $lists;

	 }

	 public static function showType( $listType , $screen ) {
	 	$gid = (!empty($GLOBALS[JNEWS.'list_creatorfe']) ) ? $GLOBALS[JNEWS.'list_creatorfe'] : 0;
if ( is_array($listType) ) $listType = array_pop( $listType );
	 	switch ($screen) {
			case 'editmailing':
				$className = JNEWS . ( !isset($GLOBALS[JNEWS.'classes'.$listType]) ? $GLOBALS[JNEWS.'classes'.$listType] : '' );
				if (class_exists( $className )) {
					$view = new $className;
					$show = $view->editmailing();
				} else {
					$show['sender_info'] = true;
					$show['published'] = true;
					$show['pub_date'] = true;
					$show['hide'] = true;
					$show['issuenb'] = true;
					$show['delay'] = false;
					$show['htmlcontent'] = true;
					$show['textcontent'] = true;
					$show['attachement'] = true;
					$show['auto_option'] = true;
					$show['images'] = true;
					$show['sitecontent'] = true;
					$show['admin'] = true;
				}
				break;
			case 'editlist':

				$show['access'] = ( $GLOBALS[JNEWS.'level'] > 2 ) ? true : false;
				$className = JNEWS . ( !isset($GLOBALS[JNEWS.'classes'.$listType]) ? $GLOBALS[JNEWS.'classes'.$listType] : '' );
				if (class_exists($className)) {
					$view = new $className;
					$show = array_merge($show, $view->editlist());
				} else {
					$show['sender_info'] = true;
					$show['hide'] = true;
					$show['auto_option'] = true;
					$show['htmlmailing'] = true;
					$show['auto_subscribe'] = true;
					$show['email_unsubcribe'] = false;
					$show['unsusbcribe'] = false;
				}
				break;
			case 'showMailings':
				$show['admin'] = jnews::checkPermissions('admin');
				$show['index'] = 'index2';
				$show['buttons'] = false;
				if ($show['admin']) {
					if( empty($listType) ) $listType = 1;
			
					$className = JNEWS . ( !isset($GLOBALS[JNEWS.'classes'.$listType]) ? $GLOBALS[JNEWS.'classes'.$listType] : '' );
					if (class_exists($className)) {
						$view = new $className;
						$show = array_merge($show, $view->showMailings());
					} else {
						$show['id'] = true;
						$show['dropdown'] = true;
						$show['select'] = true;
						$show['issue'] = true;
						$show['sentdate'] = true;
						$show['delay'] = false;
						$show['status'] = true;
					}
				} else {
					$show['id'] = false;
					$show['dropdown'] = false;
					$show['select'] = false;
					$show['issue'] = true;
					$show['sentdate'] = true;
					$show['delay'] = false;
					$show['status'] = false;
				}
				break;
			case 'showListsBack':
				if (jnews::checkPermissions('admin')) $show['id'] = true; else $show['id'] = false;
				$show['index'] = 'index2';
				$show['select'] = true;
				$show['published'] = true;
				$show['sender'] = true;
				$show['sender_email'] = false;
				$show['mailings_link'] = true;
				$show['mailings_sub'] = true;
				$show['list_type'] = true;
				$show['visible'] = true;
				$show['color'] = true;
				$show['buttons'] = false;
				$show['front'] = false;
			break;
			case 'showListsFront':

				$db = JFactory::getDBO();
				$query = 'SELECT * FROM `#__jnews_lists` WHERE `hidden` = 1 AND `published` = 1 AND ';
				if ( is_array($listType) ) {
					$query .= '  `list_type` IN (' . jnews::implode( ',', $listType ) . ') ';
				} else {
					$query .= ' `list_type`='.intval($listType);
				}				
				
				$db->setQuery( $query );
				$lists = $db->loadObjectList();

				$access = false;
				$my = JFactory::getUser();

				foreach( $lists as $list ) {
					$bit = jnews::checkPermissions($list->acc_level);
					if ( $bit ) {
						$access = true;
						break;
					}
				}

				if ( jnews::checkPermissions($gid) || $access && $my->id > 0) {
						$show['id'] = true;
						$show['published'] = true;
						$show['sender'] = true;
						$show['sender_email'] = false;
						$show['list_type'] = true;
						$show['visible'] = true;
						$show['mailings_sub'] = false;
						$show['color'] = true;
						$show['mailings_link'] = true;
						$show['front'] = true;
					} else {
						$show['id'] = false;
						$show['published'] = false;
						$show['sender'] = false;
						$show['sender_email'] = false;
						$show['list_type'] = false;
						$show['visible'] = false;
						$show['mailings_sub'] = false;
						$show['mailings_link'] = false;
						$show['color'] = false;
						$show['front'] = true;
					}

				$show['index'] = 'index';
				$show['select'] = false;
				$show['buttons'] = true;
			break;
			default:
				$show ='';
				break;
		}
		return $show;
	}

	 public static function checkOthers() {

		$status = false;

		$nb = explode(',', $GLOBALS[JNEWS.'activelist']);
		$size = sizeof($nb);
		for($k = 0; $k < $size; $k ++) {
			$index = $nb[$k];
			if ($GLOBALS[JNEWS.'listype'.$index] ==1 AND $index!=1 ) {
				$status = true;
			}
		}
		return $status;
	}

	 public static function getQueue($lisType) {

		if (class_exists($GLOBALS[JNEWS.'classes'.$lisType])) {
			$view = new $GLOBALS[JNEWS.'classes'.$lisType];
			return $view->getQueue();
		} else {
			return ' AND `published`= 1 ';
		}
	}


	 /* public static function that will return the available List Types
	 * @param int $type
	 * @param boolean $setDefault 	- set to true if you want to have a default Value 'All'
	 				- if its used as dropdown value so we need to set a default value for it
	 * @return $list_option - object array of list types
	*/
	 public static function getListOption( $type=1, $setDefault=false )
	 {
	 	$lists_option='';

		if( $type == 1 )
		{
			$flag = false;
			$nb = explode(',', $GLOBALS[JNEWS.'activelist']);
			$size = sizeof($nb);
			for($i = 0; $i < $size; $i ++) {
				$index = $nb[$i];
				if ($index==2)  $flag = true;
				if ($GLOBALS[JNEWS.'listshow'.$index]>0 AND $GLOBALS[JNEWS.'listype'.$index] == 1) {
					$dont = true;

					if ($dont) {
						$obj = new stdClass;
						$obj->value = $index;
						$obj->text = trim( $GLOBALS[JNEWS.'listname'.$index] ) ? @constant( $GLOBALS[JNEWS.'listname'.$index] ): '';
						$obj->dis = false;
						$lists_option[] = $obj;
					}
				}
			}
			if ( !$flag ) {
				$obj = new stdClass;
				$obj->value = 2;
				$obj->text = _JNEWS_AUTORESP;
				$obj->dis = true;
				$lists_option[] = $obj;
			}
		}
		else
		{
			if( $setDefault )
			{
				$obj = new stdClass;
				$obj->value = 0;
				$obj->text = _JNEWS_ALL;
				$obj->dis = false;
				$lists_option[] = $obj;
			}

			// create names
			$values = array( '1'=> ''._JNEWS_LIST );

			// set to picklist
			foreach( $values as $key=>$value )
			{
				$obj = new stdClass;
				$obj->value = $key;
				$obj->text = $value;
				$obj->dis = false;
				$lists_option[] = $obj;
			} 
		}

		return $lists_option;
	}

	 public static function sendLogs($listType) {

		switch ($listType) {
			case '1':
			case '7':
				return true;
				break;
			case '2':
				if ($GLOBALS[JNEWS.'send_auto_log'] == 1) return true; else return false;
				break;
			default:
				return false;
			break;
		}
	}

} 