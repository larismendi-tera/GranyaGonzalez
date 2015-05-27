<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

jimport('joomla.plugin.plugin');
class plgSystemVmjnewssubs extends JPlugin{

	function plgSystemVmjnewssubs(&$subject, $config){
		parent::__construct($subject, $config);
    }

	function onAfterRoute(){
		
		$redirectlink = trim( JRequest::getString('redirectlink') );
		$fromSubscribe = JRequest::getVar('fromSubscribe','');
		// this is either we have a redirect setup or we come from the module
		if ( empty($fromSubscribe) || empty($redirectlink) ) return '';	
		
		
		if ( strtolower( substr( JPATH_ROOT, strlen(JPATH_ROOT)-13 ) ) =='administrator' ) {
			$adminPath = strtolower( substr( JPATH_ROOT, strlen(JPATH_ROOT)-13 ) );
		} else {
			$adminPath = JPATH_ROOT;
		}

		if ( !@include_once( $adminPath . DS.'components'.DS.'com_jnews'.DS.'defines.php') ) return;
		include_once( JNEWSPATH_CLASSN . 'class.jnews.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.subscribers.php');
		require_once(JNEWS_JPATH_ROOT_NO_ADMIN . DS.'administrator'.DS.'components'.DS.JNEWS_OPTION.DS.'classes'.DS.'class.listssubscribers.php');
		
		jimport( 'joomla.html.parameter' );
		$db = JFactory::getDBO();

		$plugin = JPluginHelper::getPlugin('system', 'vmjnewssubs');
		$params = new JParameter( $plugin->params );

		$reqfield = $params->get('reqfield','user_email');
		$email = JRequest::getString('email');

		$reqvalue = ($reqfield == 'user_email') ? $email : JRequest::get($reqfield);
		if ( is_array($reqvalue) ) {
			//if we find any no we do no
			if ( empty($reqvalue) ) return '';
			foreach( $reqvalue as $resultArVal ) {
				if ( empty( $resultArVal ) ) return '' ;
			}
		} else {
			if( empty($reqvalue) || empty($email) || in_array( strtolower($reqvalue) , array('','0','n','no','none','nein','non') ) ) return;
		}		
		
		$user_id = JRequest::getInt('user_id');
		$email = trim(strip_tags($email));
		$fname = JRequest::getString('first_name','');
		$mname = JRequest::getString('middle_name','');
		$lname = JRequest::getString('last_name','');

		$name = '';
		if(!empty($fname)) $name .= $fname.' ';
		if(!empty($mname)) $name .= $mname.' ';
		if(!empty($lname)) $name .= $lname;
		$name = trim($name);
		if ( empty($name) ) $name = JRequest::getVar('username');
		
		$subscriber = new stdClass;
		$subscriber->user_id = $user_id;
		$subscriber->name = $name;
		$subscriber->email = $email;
		$subscriber->ip = jNews_Subscribers::getIP();
		$subscriber->receive_html = 1;
		$subscriber->confirmed = ($GLOBALS[JNEWS.'require_confirmation'] == '1') ? 0 : 1;
		$subscriber->subscribe_date = time();
		$subscriber->language_iso = 'eng';
		$subscriber->timezone = '00:00:00';
		$subscriber->blacklist = 0;
		$subscriber->params = '';
		$subscriber->admin_id = 62;

		$status= jNews_Subscribers::saveSubscriber($subscriber,$user_id,true);

		if(!($status)) return;
		$listsToSubscribe = $params->get('lists','');

		$listsToSubscribe = str_replace( ' ','', $listsToSubscribe );
		
		if(!empty($listsToSubscribe)) {
			$condition= ' WHERE `id` IN ('.$listsToSubscribe.')' ;
		}else{
			$condition='';
		}

		$query='SELECT `id`, `list_type`,`params` from `#__jnews_lists`' . $condition;
		$db->setQuery($query);
		$lsidstoinsert=$db->loadObjectList();
		$error = $db->getErrorMsg();

		if (!empty($error)){
			echo  $error;
			return false;
		}else{

			//use for masterlists
			$listsA = array();

			foreach($lsidstoinsert as $lsid){

				$d['email'] = $subscriber->email;
				//get the subscriber id which is newly inserted
				jNews_Subscribers::getSubscriberIdFromEmail($d);

				//subscriber_id from the inserted subscriber
				if ( $d['subscriberId'] > 0) $subscriber->id = $d['subscriberId'];
				else $subscriber->id=$subscriber->user_id;

				if(!empty($lsid->params)){
					//use for masterlists
					$listsA[] = $lsid->id;
				}else{
					//for non-masterlists
					$subscriber->list_id=$lsid->id;
					jNews_ListsSubs::saveToListSubscribers($subscriber);
				}

				if($lsid->list_type == 2) {
					$subscribe = array();
					$subscribe[] = $lsid->id;
					if(!empty($subscribe)) jNews_ListsSubs::subscribeARtoQueue( $subscriber->id, $subscribe );
				}

			}//end of foreach

			if( !empty($listsA) ){

			    //we check if the social class file exists for the implementation of master lists
				if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
				if(class_exists('jNews_Social')){

					$listidSubsA = array();
					$masterListSubscriber = new stdClass;

					//we check if configuration for master lists is enabled
					if( $GLOBALS[JNEWS.'use_masterlists'] ){

						if( ($GLOBALS[JNEWS.'level'] > 1) ){

							//we validate if the user can be subscribed to the list then we return the masterlistid
							//1 - MasterLists for all Potential Users
							$listidSubsA[] = jNews_Social::includeMasterListIds($subscriber->id,1,$listsA);
							//2 - MasterLists for all Registered Subscribers
							$listidSubsA[] = jNews_Social::includeMasterListIds($subscriber->id,2,$listsA);
						}

						if ( ($GLOBALS[JNEWS.'level'] > 2) ) {
							//we validate if the user can be subscribed to the list then we return the masterlistid
							//3 - MasterLists for all Front-end Subscribers
							$listidSubsA[] = jNews_Social::includeMasterListIds( $subscriber->id,3, $listsA );
						}
					}

					//we check first if $listidSubsA and if not empty we do the subscription to the lists
					if(!empty($listidSubsA)){
						$masterListSubscriber->id = $subscriber->id;
						$masterListSubscriber->list_id = $listidSubsA;
						jNews_ListsSubs::saveToListSubscribers($masterListSubscriber);
					}

				}
				}

			}

		}

	}

}
