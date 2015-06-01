<?php
defined('_JEXEC') OR defined('_VALID_MOS') OR die('...Direct Access to this location is not allowed...');
### Copyright (C) 2006-2011 Joobi Limited. All rights reserved.
### http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=single-license

function com_install() {

	if ( defined('JPATH_ROOT') AND class_exists('JFactory')) {
		define ('JNEWS_JPATH_ROOT' , JPATH_ROOT );
	}

	require_once( JNEWS_JPATH_ROOT . DS . 'components'.DS.'com_jnews'.DS.'defines.php');
	require_once( JNEWSPATH_ADMIN . 'classes'.DS.'config.php');
	require_once( JNEWSPATH_ADMIN . 'admin.jnews.html.php' );
	require_once( JNEWSPATH_CLASS . DS . 'class.jnews.php');

	@ini_set('max_execution_time',0);

	//If memory_limit less than 128M
 	$limit= jnews::convertToBytes(@ini_get('memory_limit'));
	if($limit < jnews::convertToBytes('128M') ){
		@ini_set('memory_limit','128M');
	}

	$xf = new jNews_Config();
	$return = '';

	//we install the jNews Menus
	installMenu();

	$database = JFactory::getDBO();
	$q = " SELECT `text` FROM `#__jnews_xonfig` WHERE `akey` = 'version' ";
	$database->setQuery( $q );
	$vers = $database->loadResult();
	$err = $database->getErrorMsg();

   	$version=jnews::getVersion();

	//we check if availability column exists in jnews_templates
	$q= "SHOW FIELDS FROM `#__jnews_templates`";
	$database->setQuery( $q );
	$templateFields =  $database->loadObjectList( 'Field' );

	if ( !empty($version) AND $version < '7.3.0') {
		$query[] = "ALTER TABLE `#__jnews_listssubscribers` ADD `params` TEXT NOT NULL";
		$query[] = "ALTER TABLE `#__jnews_queue` ADD `params` TEXT NOT NULL";
	}
	
	if ( !empty($version) AND $version < '7.2.0') {
		$query[] = "UPDATE `#__jnews_xonfig` SET `text`='jNews_Newsletter' WHERE `text`='newsletter' AND `akey`='classes1' ";
		$query[] = "UPDATE `#__jnews_xonfig` SET `text`='jNews_Autoresponder' WHERE `text`='autoresponder' AND `akey`='classes2' ";
		$query[] = "UPDATE `#__jnews_xonfig` SET `text`='jNews_Autonews' WHERE `text`='autonews' AND `akey`='classes7' ";
	}

	if ( !empty($version) && $version < '7.1.0') {
		$query[] = "ALTER TABLE `#__jnews_lists` ADD `subnotifysend` TINYINT(1) NOT NULL DEFAULT '1', ADD `subnotifymsg` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL";
		$query[] = "ALTER TABLE `#__jnews_templates` ADD `csstyle` TEXT NOT NULL";
		$query[] = "UPDATE `#__jnews_templates` SET `body` = REPLACE(`body`,'components/com_jnews/templates/','media/com_jnews/templates/')";
	}

	if ( !empty($version) && $version < '7.0.2') {
		$xf->insert('cron_pass', 'ibHrqqFb');
		$xf->insert('nextdate','0');
		$xf->insert('lastdate','0');
	}

	if ( !empty($version) && $version < '6.1.2') {
		$xf->insert('url_pass', 'xfr1tyh6',0);
		$xf->insert('create_newsubsrows', '5', 0);
		$xf->insert('use_backendview', '0', 0);
		$xf->insert('terms_condition', '0', 0);
		$xf->insert('show_terms', '0', 0);
		$xf->insert('check_terms', '0', 0);
	}

	if (empty($err) AND !empty($version) AND $version < '6.0.2') {
		
		if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
			if( class_exists('jNews_Social') ) {
	          $query[] = "ALTER TABLE `#__jnews_lists` ADD `siteend` TINYINT( 3 ) UNSIGNED NOT NULL DEFAULT '0'";
			}
		}

		$query[] = "ALTER TABLE `#__jnews_lists` CHANGE `acc_id` `acc_id` VARCHAR( 200 ) NOT NULL DEFAULT 'all'";
		$query[] = "ALTER TABLE `#__jnews_lists` CHANGE `acc_level` `acc_level` VARCHAR( 200 ) NOT NULL DEFAULT '24,25,7,8'";
		$query[] = "UPDATE `#__jnews_lists` SET `acc_id`= 'all' WHERE `acc_id`= 29";
		$query[] = "UPDATE `#__jnews_lists` SET `acc_level`='24,25,7,8' WHERE `acc_level`=25";
		$xf->insert('use_tags', '1', 0);
		$xf->insert('allow_sn','0',0);
		$xf->insert('show_sub_email', '0', 0);
		$xf->insert('red_subscription', '0', 0);
		$xf->insert('module_message', '0', 0);
		$xf->update('upload_url','/components/com_jnews/upload');
	 }

   	if (empty($err) && !empty($version) && $version <= '4.2.2') {
		//alter the table template with the column availabiltity
		if( is_array($templateFields) && array_key_exists('availability', $templateFields) == false ) {
   			$query[] = "ALTER TABLE `#__jnews_templates` ADD `availability` TINYINT( 1 ) NOT NULL DEFAULT '1' ";
		}
		$xf->insert('captcha_width', '80',0);
		$xf->insert('captcha_height', '25',0);
   	}

   	if (empty($err) AND !empty($version) AND $version < '5.1.0') {
		//alter the table queue, we also add the type in the unique key
		$query[]= 'ALTER TABLE `#__jnews_queue` DROP INDEX `sub_mail` ,
					ADD UNIQUE `sub_mail` ( `subscriber_id` , `mailing_id` , `type` )';

		$xf->insert('forced_html', '1',0);
   	}

	if (empty($err) AND !empty($version) AND $version >= '1.2.0' AND $version < '2.2.2') {
		$query[] = 'ALTER TABLE `#__jnews_lists` ADD `notifyadminmsg` text NOT NULL';
		$xf->insert('j_cron', '1', 0);
	 }

	if (empty($err) AND !empty($version) AND $version < '4.0.2') {
		//delete the params column
		$q= "SHOW FIELDS FROM `#__jnews_queue`";
		$database->setQuery($q);
		$queueFields =  $database->loadObjectList('Field');

		$q= "SHOW FIELDS FROM `#__jnews_lists`";
		$database->setQuery($q);
		$listFields =  $database->loadObjectList('Field');

		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
			//for the update in the jos_components table for the menu auto-responder
			$query[] = 'UPDATE `#__components`' .
					' SET admin_menu_link = \'option='.JNEWS_OPTION.'&act=arlist&listype=2\''.
					' WHERE `option`=\'com_jnews\''.
					' AND `name`=\'Auto-responders\'';

			//delete the name import in the _components table
			$query[] = 'DELETE FROM `#__components` WHERE `name`=\'Import\' AND `option`=\'com_jnews\'';
		
		}

		//update max_attempts to 5
		$query[] = 'UPDATE `#__jnews_xonfig` SET `text` = 5 WHERE `akey`=\'max_attempts\'';
		//update sched_prior to 5
		$query[] = 'UPDATE `#__jnews_xonfig` SET `text` = 5 WHERE `akey`=\'sched_prior\'';
		//update ar_prior
		$query[] = 'UPDATE `#__jnews_xonfig` SET `text` = 1 WHERE `akey`=\'ar_prior\'';
		//update sm_prior
		$query[] = 'UPDATE `#__jnews_xonfig` SET `text` = 5 WHERE `akey`=\'sm_prior\'';

		$xf->insert('priord_list', '0', 0);
		$xf->insert('priord_subs', '0', 0);
		$xf->insert('show_unsubscribe', '0', 0);
		$xf->insert('show_unsubscribelink', '1', 0);
		$xf->insert('show_subscriptionlink', '1', 0);
		$xf->insert('queue_status', '1', 0);
	 }

	if (empty($err) AND !empty($version) AND $version <= '4.1.2') {
		$xf->insert('smtp_port', '25', 0);
		$xf->insert('smart_queue', '0', 0);
		$xf->insert('sub_info_fields', '0', 0);
		$xf->insert('enable_jsub', '0', 0);
	}
	
	if ( !empty($version) && $version <= '7.2.2') {

		//add params column if not exists
		$q= "SHOW FIELDS FROM `#__jnews_mailings`";
		$database->setQuery($q);
		$queueFields =  $database->loadObjectList('Field');
	 	//we drop the column params in the table jnews_queue
	 	if( !array_key_exists('params', $queueFields) ) $query[] = 'ALTER TABLE `#__jnews_mailings` ADD `params` TEXT NOT NULL';
		$q= "SHOW FIELDS FROM `#__jnews_lists`";
		$database->setQuery($q);
		$queueFields =  $database->loadObjectList('Field');
	 	//we drop the column params in the table jnews_queue
	 	if( !array_key_exists('params', $queueFields) ) $query[] = 'ALTER TABLE `#__jnews_lists` ADD `params` TEXT NOT NULL';
	 	
	 	$xf->insert('smtp_secure', '', 0);
	}	
	
	if ( !empty($version) && $version <= '7.3.9') {
		$xf->insert('lasttime_cron_triggerred', '0', 0);
		$xf->insert('show_unsubscribe_all', '1', 0);
		$xf->insert('send_log_email', '0', 0);
		
		$query[] = 'ALTER TABLE `#__jnews_queue` ADD `block` TINYINT NOT NULL DEFAULT 0'; //add block column in the queue table
		
		//we get the values of red_subscription, module_message, enable_captcha, captcha_width, captcha_height, show_terms, check_terms, terms_condition from config table to be able to insert it the module params
		$red_subscription = $xf->getKeyValues("red_subscripition");
		$module_message = $xf->getKeyValues("module_message");
		$enable_captcha = $xf->getKeyValues("enable_captcha");
		$captcha_width = $xf->getKeyValues("captcha_width");
		$captcha_height = $xf->getKeyValues("captcha_height");
		$show_terms = $xf->getKeyValues("show_terms");
		$check_terms = $xf->getKeyValues("check_terms");
		$terms_condition = $xf->getKeyValues("terms_condition");
		
		$additionalParams = '';
		$additionalParams .= "use_new=0"."\n";
		$additionalParams .= "red_subscripition=".$red_subscription."\n";
		$additionalParams .= "module_message=".$module_message."\n";
		$additionalParams .= "enable_captcha=".$enable_captcha."\n";
		$additionalParams .= "captcha_width=".$captcha_width."\n";
		$additionalParams .= "captcha_height=".$captcha_height."\n";
		$additionalParams .= "show_terms=".$show_terms."\n";
		$additionalParams .= "check_terms=".$check_terms."\n";
		$additionalParams .= "terms_condition=".$terms_condition."\n";
		
		//we get the module params from the modules table and append with the values we get from above
		$db=JFactory::getDBO();
		
		 $queryParam = "SELECT `id`,`params` FROM `#__modules` WHERE `module`='mod_jnews'";
		 $db->setQuery($queryParam);
		 $db->query();
		 $jnewsModuleParamsO = $db->loadObjectList('id');
		 
		 if(!empty($jnewsModuleParamsO)){
			 foreach($jnewsModuleParamsO as $key=>$value){
			 	$params = '';
			 	$params .= $value->params;
			 	$params .= $additionalParams;
			 	
			 	//we update the params of the module
			 	$queryUpdateParam = "UPDATE `#__modules` SET `params`='". $params. "' WHERE `id`=".$key;
			 	$db->setQuery($queryUpdateParam);
			 	$db->query();
			 }
		 }
		 

		 //we insert here the simplicity template
		$templatessql='simplicitytemplate.sql';  //to be changed if we packaged the superpack
		$buffer = file_get_contents(JNEWSPATH_ADMIN.DS.$templatessql);

		// Graceful exit and rollback if read not successful
		if ($buffer){
			// Create an array of queries from the sql file
			jimport('joomla.installer.helper');
			$queries = JInstallerHelper::splitSql($buffer);

			// No queries to process
			if (count($queries) != 0) {
				// Process each query in the $queries array (split out of sql file).
				foreach ($queries as $simplicityquery){
					$simplicityquery = trim($simplicityquery);
					if ($simplicityquery != '' && $simplicityquery{0} != '#') {
						$database->setQuery($simplicityquery);
						if (!$database->query()) {
							JError::raiseWarning(1, 'JInstaller::install: '.JText::_('SQL Error')." ".$database->stderr(true));
						}
					}
				}//endfoearch
			}
		}
				 
	}
	
	if ( !empty($version) && $version <= '7.4.5') {
		if( version_compare(JVERSION,'1.6.0','>=') ) { //j16
			$query[] = 'UPDATE `#__assets` SET `rules`=\'{"core.admin":{"1":1},"core.manage":{"1":1}}\' WHERE `name`=\'com_jnews\'';
		}
	}
	// ALTER TABLE `jos_jnews_mailings` CHANGE `cat_id` `cat_id` VARCHAR( 250 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0:0'	
	
	
	if ( empty($version) || $version < '7.5.0') {
		$xf->update('show_unsubscribelink','1' );
		$xf->update('show_subscriptionlink','1' );
		$xf->update( 'upload_url', '/media/com_jnews/upload' );
		
		$q= "SHOW FIELDS FROM `#__jnews_mailings`";
		$database->setQuery($q);
		$queueFields =  $database->loadObjectList('Field');
	 	if( !array_key_exists('smart_date', $queueFields) ) $query[] = 'ALTER TABLE `#__jnews_mailings` ADD `smart_date` TINYINT UNSIGNED NOT NULL DEFAULT 0';

		$q= "SHOW FIELDS FROM `#__jnews_queue`";
		$database->setQuery($q);
		$queueFields =  $database->loadObjectList('Field');
	 	if( !array_key_exists('params', $queueFields) ) $query[] = 'ALTER TABLE `#__jnews_queue` ADD `params` TEXT NOT NULL';
	 	if( !array_key_exists('block', $queueFields) ) $query[] = 'ALTER TABLE `#__jnews_queue` ADD `block` TINYINT NOT NULL DEFAULT 0';
	 		 	
	}
	
	if ( empty($version) || version_compare( $version, '7.6.0', '<' ) ) {
		$xf->insert('sntag_norequired','1' );
		$conf = JFactory::getConfig();
		$xf->insert('sendmail_email', $conf->getValue('config.mailfrom') );
		$xf->insert('subs_redirect_url', '' );
		$xf->insert('subscribe_notification', '' );
		$xf->insert('unsubscribe_notification', '' );
		$xf->insert('component_theme', 'joobilist' );
		$xf->insert('allow_fe_autoresponder', '0' );
	}
	
	if ( empty($version) || version_compare( $version, '7.7.0', '<' ) ) {
		$xf->insert('archive_link','standard' );
	}
	
	
	//Query to quickly synchronise all your subscribers during the install!
	$query[] = "INSERT IGNORE INTO `#__jnews_subscribers` ( `user_id` , `name` , `email` , `receive_html` , `confirmed` , `blacklist` , `subscribe_date` )" .
			"SELECT U.id, U.name, U.email, '1', '1', U.block , UNIX_TIMESTAMP(U.registerDate) from `#__users` as U;";


	if (empty($vers)) {
		if(version_compare(JVERSION,'1.6.0','<')){ //j15
			$query[] = "UPDATE #__components SET ordering = -2147483800 WHERE admin_menu_link='option=com_jnews'";
//		}else{ //j16
//			$query[] = "UPDATE #__extensions SET ordering = -2147483800 WHERE element='option=com_jnews'";
		}
	}

	//We publish back the module
	$query[] = "UPDATE `#__modules` SET `published`= 1 WHERE `module` LIKE '%jnews%' " ;

	$size = sizeof($query);
	for( $index = 0; $index < $size; $index++ ) {
		$database->setQuery( $query[$index] );
		$database->query();
	}

	if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
		if( class_exists('jNews_Social') ) {
			if ( !empty($version) && $version < '6.0.2') {
				$xf->insert('use_masterlists', '1', 0);
				$xf->insert('list_creatorfe', '24,25,7,8', 0);
			}
			jNews_Social::createMasterList(1);
			jNews_Social::createMasterList(2);
			jNews_Social::createMasterList(3);
			jNews_Social::createMasterList(4);
		}
	}

	//we call sql file for the additional templates
	if( is_array($templateFields) && array_key_exists('availability', $templateFields ) ) {
		//line to be removed code #7321011
		$templatessql='dwntemplates.sql';  //to be changed if we packaged the superpack
		$buffer = file_get_contents(JNEWSPATH_ADMIN.DS.$templatessql);

		// Graceful exit and rollback if read not successful
		if ( $buffer ) {
			// Create an array of queries from the sql file
			jimport('joomla.installer.helper');
			$queries = JInstallerHelper::splitSql($buffer);

			// No queries to process
			if (count($queries) != 0) {
				// Process each query in the $queries array (split out of sql file).
				foreach ($queries as $query){
					$query = trim($query);
					if ($query != '' && $query{0} != '#') {
						$database->setQuery($query);
						if ( !$database->query() ) {
							JError::raiseWarning(1, 'JInstaller::install: '.JText::_('SQL Error')." ".$database->stderr(true));
							//return false;
						}
					}
				}//endfoearch
			}
		}
	}

	
	if ( empty($vers) ) {
		$xf->filetoDatabase( $confiX );
	}

	//create the upload directory
	jnews::createDirectory( JNEWS_JPATH_ROOT_NO_ADMIN.DS.'media'.DS.JNEWS_OPTION.DS.'upload' .DS );
	
	//check if CSS file exist if not move it
	jimport('joomla.filesystem.folder');
	$cssLocation = JNEWS_JPATH_ROOT_NO_ADMIN.DS.'media'.DS.JNEWS_OPTION.DS.'modules' .DS;
	if ( !JFolder::exists( $cssLocation ) ) {
		JFolder::copy( JNEWS_JPATH_ROOT_NO_ADMIN.DS.'components'.DS.JNEWS_OPTION.DS.'modules' .DS, $cssLocation );
	}
	
	setupMaiOptions( $confiX );


	//we install the default templates
	installDefTemplate();

	//we install the extensions
	installExtensions();
	
	//we send a welcome message to the admin/logged in user of the site that jNews is successfully installed
	//we will only send email at fresh install
	if(empty($version)){
		sendWelcomeEmail();
	}

	if (jnews::checkCB()) installPlugin();

	jNews_Subscribers::updateCBSubscribers( true, true );

	$xf->update('component', $confiX['component'] );
	$xf->update('type',$confiX['type'] );
	$xf->update('version',$confiX['version'] );
	$xf->update('level',$confiX['level'] );

	if ( !($confiX['type'] =='GPL' || $confiX['type'] =='CORE') ) {
		$message = jnews::M('noimage' , _JNEWS_THANKYOU , false);
	}
	if(empty($message)){
		$message='';
	}

	backHTML::_header( _JNEWS_MENU_INSTALL , 'install.png' , $message , '', '' );
	$html='';
	$link = 'index.php?option='.JNEWS_OPTION.'&act=start';
	$docuLink = 'http://www.joobi.co/index.php?option=com_content&view=article&id=7871:installation-errors&catid=29:jnews&Itemid=72';
	$html .='&nbsp;'. _JNEWS_INSTALL_ERRORN.' <a href="'.$docuLink.'">'._JNEWS_INSTALL_DOC.'</a>';

	// if acajoom component exist... means this would be an update
	// display an update button
	if( jNews_Update::checkAcajoom() ){
		//check if acajoom data are already transferred to jnews tables
		if( !jNews_Update::checkAcaUpdate() ){
			$html .= '<div style="border: 5px groove #F0F8FF; padding: 10px; position: fixed; right: 1px; top: 150px; background-color: #F0F8FF;">';
			$html .= '<img border="0" align="right" alt="jNews Logo" src="components/'.JNEWS_OPTION.'/images/jnewsletter.png" width="25">';
			$html .= '<br><br><span style="font-size:15px;text-decoration:none;">'. _JNEWS_INSTALL_ACAUPDATEMSG .'</span></b>';
			$html .= '<a href="index.php?option='.JNEWS_OPTION.'&amp;act=acaupdate">';
			$html .= '<div style="background-image: url('.JNEWS_PATH_ADMIN_IMAGES2.'btn_orange.png); background-repeat:no-repeat; height: 15px; width: 170px; border:none; padding:13px 40px 15px; position:relative; left:50px; top:10px;">';
			$html .= '<span style="color: #FFF; font-weight: bold; padding-right:30px; margin-top: 5px; text-decoration: none;"> '. _JNEWS_INSTALL_ACAUPDATEBTN .' </span>';
			$html .= '</div></a>';

			$html .= '<br><br>';
			$html .= '<b>'. _JNEWS_INSTALL_ACAUPDATENOTE .'</b>';
			$html .= '<br><br>';
			$html .= '</div>';
		} 
	} 


	$html .= '<div style="float:center;padding: 20px; width:470px; margin-right: 10px;"><center>' .
				'<a href="index.php?option='.JNEWS_OPTION.'&amp;act=start">
				<div style="background-image: url('.JNEWS_PATH_ADMIN_IMAGES2.'btn_orange.png); background-repeat:no-repeat; height: 40px; width: 232px; border:none; padding:12px 0 15px 0;">
				<span style="color: #FFF; font-weight: bold; padding-right:30px; margin-top: 5px; text-decoration: none;">'._JNEWS_INSTALL_CLICKSTART.'</span></div>
				</a></center></div><div style="clear:both;"></div>';
	if ( $confiX['level'] > 2 ) {
		backHTML::about();
		echo '<center>'.$html;
		echo $return.'</center>';
	} elseif ( $confiX['level'] > 1 ) {
		 backHTML::installPRO($html,$return);
	} else{
		 backHTML::installPlus($html, $return);
	}

	return $return;
 }

function installMenu(){

	if(empty($code)){
		$lang = JFactory::getLanguage();
		$code = $lang->getTag();
	}

	$fileContent='';
	$menus= array('JNEWS','LISTS','SUBSCRIBERS','NEWSLETTERS','STATISTICS','QUEUE','TEMPLATES','CONFIGURATION','ABOUT'
	);
	$menuTranslation = array('jNews',_JNEWS_MENU_LIST,_JNEWS_MENU_SUBSCRIBERS,_JNEWS_MENU_NEWSLETTERS,_JNEWS_MENU_STATS,_JNEWS_MENU_QUEUE,_JNEWS_MENU_TEMPLATES,_JNEWS_MENU_CONF,_JNEWS_MENU_ABOUT
	);

	foreach ($menus as $key => $oneMenu){

		if(version_compare(JVERSION,'1.6.0','<')){
			$fileContent .= 'COM_JNEWS.'.$oneMenu.'="'.$menuTranslation[$key].'"'."\r\n";
		}else{
			$fileContent .= $oneMenu.'="'.$menuTranslation[$key].'"'."\r\n";
		}

	}

	if(version_compare(JVERSION,'1.6.0','<')){
		$filePath = JNEWS_JPATH_ROOT_NO_ADMIN.DS.'administrator'.DS.'language'.DS.$code.DS.$code.'.com_jnews.menu.ini';
	}else{
		$filePath = JNEWS_JPATH_ROOT_NO_ADMIN.DS.'administrator'.DS.'language'.DS.$code.DS.$code.'.com_jnews.sys.ini';
	}

	if(!JFile::write($filePath, $fileContent)){
		jnews::displayInfo(JText::sprintf('_JNEWS_SAVE_FILE',$filePath),'error');
	}

}

/**
 * This function is used to install the default template on media directory of the site
 */
function installDefTemplate(){

		//temporary path of the default templates
		$path = JNEWSPATH_FRONT.'templates';

		//we get all the directories found on that temporary path
		$dirs = JFolder::folders( $path );

		//temporary thumbnail path
		$pathThumbnail = JNEWSPATH_ADMIN. 'templates';

		//we get all the files from the

		$errors = array();
		$success =array();

		//we create the permament path on media folder
		if( jnews::createDirectory(JNEWSPATH_TEMPLATES) ) {

			//we get all the files from the temporary directory
			$allFiles = JFolder::files($path);

			//we put the index.html file on the permanent diretory
			foreach($allFiles as $oneFile){
				if(file_exists(JNEWSPATH_MEDIA.DS.'index.html') AND $oneFile == 'index.html') continue;
				if(JFile::copy($path.DS.$oneFile,JNEWSPATH_MEDIA.DS.$oneFile) !== true){
					$errors[] = 'Could not copy the file from '.$path.DS.$oneFile.' to '.JNEWSPATH_MEDIA.' You can also copy it manually';;
				}
			}

			//then we put each directory with the corresponding files to the permanent directory
			foreach($dirs as $oneDir){
				$toFolder = JNEWSPATH_TEMPLATES.$oneDir;
				if(!jnews::createDirectory($toFolder)) $errors[] = 'Could not create directory '.$toFolder.' You can also copy it manually';;
				if(!jnews::copyFolder($path.DS.$oneDir,$toFolder)) $errors[] = 'Could not copy the file from '.$path.DS.$oneFile.' to '.$toFolder. ' You can also copy it manually';
			}

			if(!jnews::createDirectory(JNEWSPATH_TEMPLATES.'thumbnail')) $errors[] = 'Could not create directory '.JNEWSPATH_TEMPLATES.'thumbnail';
			if(!jnews::copyFolder(JNEWSPATH_ADMIN. 'templates'.DS.'thumbnail',JNEWSPATH_TEMPLATES.'thumbnail')) {
				$errors[] = 'Could not copy the file from '.JNEWSPATH_ADMIN. 'templates'.DS.'thumbnail to '.JNEWSPATH_TEMPLATES.'thumbnail. You can also copy it manually';
			}

		}else{ //otherwise we give an error message to the user
			$errors[] = 'Could not create directory '.JNEWSPATH_TEMPLATES .'You can also create it manually';
		}

		//if there are no errors then we give a success message and do the removal of the temporary directory
		if( empty($errors) ){

			$sucess[] = 'Default templates successfully installed.';
			jnews::displayInfo($sucess,'success');

			$errorsD = array();

			//we get all the files of each directory in the temporary directory and delete them one by one
			foreach($dirs as $oneDir){
				if($oneDir=='entwine'){
					$dirsEntwine = JFolder::folders( $path.DS.$oneDir );
					foreach($dirsEntwine as $oneDirEntwine){
						if(!jnews::removeFolder($path.DS.$oneDir.DS.$oneDirEntwine)) $errorsD[] =" Error deleting template directory ' . $oneDirEntwine . ' from ".$path.DS.$oneDir.DS;
					}
					if(!jnews::removeFolder($path.DS.$oneDir)) $errorsD[] =" Error deleting template directory ' . $oneDir . ' from ".$path.DS;
				}else{
					if(!jnews::removeFolder($path.DS.$oneDir)) $errorsD[] =" Error deleting template directory ' . $oneDir . ' from ".$path.DS;
				}

			}

			if (  !unlink(JNEWSPATH_ADMIN. 'templates'.DS.'index.html') || !jnews::removeFolder(JNEWSPATH_ADMIN. 'templates'.DS.'thumbnail') ) {
				jnews::displayInfo("Error deleting template thumbnail directory from ".JNEWSPATH_ADMIN. 'templates'.DS.'thumbnail.  You can also delete it manually.'.DS,'error');
			}

			if (  !unlink($path.DS.'index.html') || !jnews::removeFolder($path) || !empty($errorD) ) {
				jnews::displayInfo("Error deleting temporary ".$path." directory. You can also delete it manually.",'error');
			}else{
//				jnews::displayInfo("Successfully removed temporary directory ". $path,'success');
			}

		}else{ //otherwise we display the errors on screen
			jnews::displayInfo($errors,'error');
		}

}


/**
 * Installation of the extensions plugins and modules
 */
function installExtensions(){
		$db = JFactory::getDBO();
		$errors = array();

		$path = JNEWSPATH_ADMIN.'extensions';
		$dirs = JFolder::folders( $path );

		$excludedExtensions = array();

		if(version_compare(JVERSION,'1.6.0') < ''){ //j15

			$query = "DELETE FROM `#__modules` WHERE `module` LIKE '%jnewsletter%' " ;
			$db->setQuery($query);
			$db->query();

			$query = "SELECT CONCAT(`folder`,`element`) FROM #__plugins WHERE `folder` = 'jnews' OR `element` LIKE '%jnews%'";
			$query .= " UNION SELECT `module` FROM #__modules WHERE `module` LIKE '%jnews%'";
			$db->setQuery($query);
			$existingExtensions = $db->loadResultArray();
		}else{ //j16
			$db->setQuery("SELECT CONCAT(`folder`,`element`) FROM #__extensions WHERE `folder` = 'jnews' OR `element` LIKE '%jnews%'");
			$existingExtensions = $db->loadResultArray();
		}

		$plugins = array();
		$modules = array();
		$extensioninfo = array(); //array('name','ordering','required table or published')
		$extensioninfo['mod_jnews'] = array('jNews Module');
		$extensioninfo['jnewssyncuser'] = array('jNews User Synchronization',20,1);
		$extensioninfo['vmjnewssubs'] = array('jNews-Virtuemart Newsletter Subscription',15,'#__vm_order_user_info');
		$extensioninfo['forwardtofriend'] = array('jNews Forward to Friend',5,1);
		$extensioninfo['jnewsbot'] = array('jNews Content Plugin',6,1);
		$extensioninfo['jnewsbotk2'] = array('jNews K2 Plugin',4,'#__k2_items');
		$extensioninfo['jnewsshare'] = array('jNews Social Share Plugin',9,1);
		
		//inclusion of module in newsletter
		
		$extensioninfo['jnewsflexicontent'] = array('jNews Flexicontent Bot',7,'#__flexicontent_cats_item_relations');
		$extensioninfo['tagdatetime'] = array('jNews Tag: Date and Time',2,1);
		$extensioninfo['tagsite'] = array('jNews Tag: Site Links',5,1);
		$extensioninfo['tagsubscriber'] = array('jNews Tag: Subscriber',3,1);
		$extensioninfo['tagsubscription'] = array('jNews Tag: Subscriptions',7);
		$extensioninfo['virtuemartproduct'] = array('VirtueMart Products',8,'#__vm_product');
		$listTables = $db->getTableList();

		foreach( $dirs as $oneDir ) {
			$arguments = explode('_',$oneDir);
			 if($arguments[0] == 'mod'){
				$newModule = new stdClass;
				$newModule->name = $oneDir;
				if(isset($extensioninfo[$oneDir][0])) $newModule->name = $extensioninfo[$oneDir][0];
				$newModule->type = 'module';
				$newModule->folder = '';
				$newModule->element = $oneDir;
				$newModule->enabled = 1;
				$newModule->params = '{}';
				$newModule->ordering = 0;
				if(isset($extensioninfo[$oneDir][1])) $newModule->ordering = $extensioninfo[$oneDir][1];
				$destinationFolder = JNEWS_JPATH_ROOT_NO_ADMIN.DS.'modules'.DS.$oneDir;
				if(!jnews::createDirectory($destinationFolder)) continue;
				if(!jnews::copyFolder($path.DS.$oneDir,$destinationFolder)) continue;
				if(in_array($newModule->element,$existingExtensions)) continue;
				$modules[] = $newModule;
			} else {	// it is a plugin
				
				$extensionKeys = array_keys($extensioninfo);
				$newPlugin = new stdClass;
				
				if ( in_array( $oneDir, $extensionKeys) ) {

					if ( isset($extensioninfo[$oneDir][2]) ) {
						if(is_numeric($extensioninfo[$oneDir][2])) {
							$newPlugin->enabled = $extensioninfo[$oneDir][2];
						}else{
							if(!in_array(str_replace('#__',$db->getPrefix(),$extensioninfo[$oneDir][2]),$listTables)) {
								$excludedExtensions[]=$oneDir;
							}
						}
					}

					if(!in_array($oneDir,$excludedExtensions)){
						$newPlugin->name = $oneDir;
						if(isset($extensioninfo[$oneDir][0])) $newPlugin->name = $extensioninfo[$oneDir][0];
						$newPlugin->type = 'plugin';

						if($oneDir == 'jnewssyncuser') {
							$newPlugin->folder = 'user';
						}elseif($oneDir == 'vmjnewssubs' ){
							$newPlugin->folder = 'system';
						}else{
							$newPlugin->folder = 'jnews';
						}

						$newPlugin->element = $oneDir;
						$newPlugin->enabled = 1;
						$newPlugin->params = '{}';
						$newPlugin->ordering = 0;

						if(isset($extensioninfo[$oneDir][1])) $newPlugin->ordering = $extensioninfo[$oneDir][1];
						if(!jnews::createDirectory(JNEWS_JPATH_ROOT_NO_ADMIN.DS.'plugins'.DS.$newPlugin->folder)) continue;

						if(version_compare(JVERSION,'1.6.0','<')){ //j15
							$destinationFolder = JNEWS_JPATH_ROOT_NO_ADMIN.DS.'plugins'.DS.$newPlugin->folder;
						}else{ //j16
							$destinationFolder = JNEWS_JPATH_ROOT_NO_ADMIN.DS.'plugins'.DS.$newPlugin->folder.DS.$newPlugin->element;
							if(!jnews::createDirectory($destinationFolder)) continue;
						}

						if(!jnews::copyFolder($path.DS.$oneDir,$destinationFolder)) continue;
						if(in_array($newPlugin->folder.$newPlugin->element,$existingExtensions)) continue;
						$plugins[] = $newPlugin;
						
					}
			 	}
			}
			
		}

		if(!empty($errors)) jnews::displayInfo($errors,'error');

		if(version_compare(JVERSION,'1.6.0','<')){
			$extensions = $plugins;
		}else{
			$extensions = array_merge($plugins,$modules);
		}

		$success = array();
		if(!empty($extensions)){

			if(version_compare(JVERSION,'1.6.0','<')){
				$queryExtensions = 'INSERT INTO `#__plugins` (`name`,`element`,`folder`,`published`,`ordering`) VALUES ';
			}else{
				$queryExtensions = 'INSERT INTO `#__extensions` (`name`,`element`,`folder`,`enabled`,`ordering`,`type`,`access`,`manifest_cache`) VALUES ';
			}

			foreach( $extensions as $oneExt ) {
				$queryExtensions .= '('.$db->Quote($oneExt->name).','.$db->Quote($oneExt->element).','.$db->Quote($oneExt->folder).','.$oneExt->enabled.','.$oneExt->ordering;
				
				if ( version_compare(JVERSION,'1.6.0','>=') ) {
					$manifest_cache = '{"legacy":false,"name":"'.$oneExt->name.'","type":"plugin","creationDate":"'.date( "F Y").'","author":"Joobi Limited","copyright":"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.","authorEmail":"support@joobi.co","authorUrl":"www.joobi.co","version":"'.jnews::getVersion().'","description":"","group":""}';
					$queryExtensions .= ',' . $db->Quote($oneExt->type) . ',1,'.$db->Quote($manifest_cache);	
				}
				
				$queryExtensions .= '),';
				
				if($oneExt->type != 'module') $success[] = JText::sprintf( _JNEWS_PLUG_INSTALLED, $oneExt->name );
				
			}

			$queryExtensions = trim($queryExtensions,',');
			$db->setQuery($queryExtensions);
			$db->query();
		}

		if(!empty($modules)){

			foreach($modules as $oneModule){

				if(version_compare(JVERSION,'1.6.0','<')){
					$queryModule = 'INSERT INTO `#__modules` (`title`,`position`,`published`,`module`) VALUES ';
					$queryModule .= '('.$db->Quote($oneModule->name).",'left',0,".$db->Quote($oneModule->element).")";
				}else{
					$queryModule = 'INSERT INTO `#__modules` (`title`,`position`,`published`,`module`,`access`,`language`) VALUES ';
					$queryModule .= '('.$db->Quote($oneModule->name).",'position-7',0,".$db->Quote($oneModule->element).",1,'*')";
				}
				$db->setQuery($queryModule);
				$db->query();
				$moduleId = $db->insertid();
				$db->setQuery('INSERT IGNORE INTO `#__modules_menu` (`moduleid`,`menuid`) VALUES ('.$moduleId.',0)');
				$db->query();
				$success[] = JText::sprintf(_JNEWS_MODULE_INSTALLED,$oneModule->name);
			}

		}

		if(!empty($success)) jnews::displayInfo($success,'success');

	}

//Install jNews Setup
	function setupMaiOptions($data) {

		$xf = new jNews_Config();
		$return =  '<br />' ._JNEWS_INSTALL_CONFIG .' : ';
		$config = array();
		$exist = jnews::checkExisting();
		if ($exist['news1']==0) $config['news1'] = '0';
		if ($exist['news2']==0) $config['news2'] = '0';
		if ($exist['news3']==0) $config['news3'] = '0';

		$conf = JFactory::getConfig();
		$config['emailmethod'] = $conf->getValue('config.mailer');
		$config['sendmail_path'] = $conf->getValue('config.sendmail');
		$config['sendmail_from'] = $conf->getValue('config.mailfrom');
		$config['sendmail_email'] = $conf->getValue('config.mailfrom');
		$config['sendmail_name'] = $conf->getValue('config.fromname');
		$config['smtp_host'] = $conf->getValue('config.smtphost');
		$config['smtp_auth_required'] = $conf->getValue('config.smtpauth');
		$config['smtp_secure'] = $conf->getValue('config.smtpsecure');
		$config['smtp_username'] = $conf->getValue('config.smtpuser');
		$config['smtp_password'] = $conf->getValue('config.smtppass');
		$config['confirm_fromname'] = $conf->getValue('config.fromname');
		$config['confirm_fromemail'] = $conf->getValue('config.mailfrom');
//		$config['confirm_return'] = $conf->getValue('config.mailfrom');
		$config['max_queue'] = $conf->getValue('max_queue');
		$config['max_attempts'] = $conf->getValue('max_attempts');

		$config['date_update'] = jnews::getNow();

		for ($index = 0; $index < $data['nblist'] ; $index++) {
			$xf->insert('listname'.$index , '', 0);
			$xf->insert('listnames'.$index , '', 0);
			$xf->insert('listype'.$index , '', 0);
			$xf->insert('listshow'.$index , '', 0);
			$xf->insert('classes'.$index , '', 0);
			$xf->insert('listlogo'.$index , '', 0);
			$xf->insert('totallist'.$index , '', 0);
			$xf->insert('act_totallist'.$index , '', 0);
			$xf->insert('totalmailing'.$index , '', 0);
			$xf->insert('totalmailingsent'.$index , '', 0);
			$xf->insert('act_totalmailing'.$index , '', 0);
			$xf->insert('totalsubcribers'.$index , '', 0);
			$xf->insert('act_totalsubcribers'.$index , '', 0);
		}

		$activeList = '1';
		$config['classes1'] ='jNews_Newsletter';

		$xf->insert('activelist' ,$activeList, 0, true);

		$config['listype0'] = '1';
		$config['listname0'] = '';
		$config['listnames0'] = _JNEWS_MAILING_ALL;
		$config['listshow0'] = '1';
		$config['listlogo0'] = 'subscribers.png';
		$config['classes0'] ='';

		$config['listype1'] = '1';
		$config['listname1'] = '_JNEWS_NEWSLETTER';
		$config['listnames1'] = '_JNEWS_MENU_NEWSLETTERS';
		$config['listshow1'] = '1';
		$config['listlogo1'] = 'newsletter.png';

		$nb = explode(',', $activeList);
		$size = sizeof($nb);
		for($k = 0; $k < $size; $k ++) {
			$index = $nb[$k];
			if (class_exists($config['classes'.$index])) {
				$classConfig = new $config['classes'.$index];
				$config = array_merge($config, $classConfig->getActive());
			}
		}
		
		if ($xf->saveConfig($config)) {
			jnews::displayInfo(_JNEWS_INSTALL_SUCCESS,'success');
		}else{
			 jnews::displayInfo('Configuration file not updated','error');
		}

	}


 function installPlugin() {
	$database = JFactory::getDBO();
	$return = '<b>'._JNEWS_INSTALL_PLUGIN.'</b> : ';
	$error = '';

	 $files = array('jnews_cb.php', 'jnews_cb.xml' , 'index.html');
	 if (!is_file(JNEWS_JPATH_ROOT . DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscbplugin'.DS.'jnews_cb.php')) {
	 	@mkdir(JNEWS_JPATH_ROOT .DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscbplugin', 0755);
	 	@chmod(JNEWS_JPATH_ROOT .DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscbplugin', 0755);
	 }
	 
	 foreach ($files as $file) {

		 if (is_file(JNEWS_JPATH_ROOT . DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscbplugin'.DS . $file)) {

			 @unlink( JNEWSPATH_ADMIN .'extensions'.DS.'cbplugin/' . $file);
		 } else if (!@rename( JNEWSPATH_ADMIN .'extensions'.DS.'cbplugin/' . $file, JNEWS_JPATH_ROOT .DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscbplugin'.DS . $file)) {

			 $error .= '<br /> Error copying plugin file ' . $file . ' to CB plugin directory.';
		 }//endelseif
	 }
	 
	 if (is_file(JNEWS_JPATH_ROOT . DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscbplugin'.DS.'jnews_cb.php')) {
	 	@chmod(JNEWS_JPATH_ROOT .DS.'components'.DS.'com_comprofiler'.DS.'plugin'.DS.'user'.DS.'plug_jnewscbplugin', 0755);
	 }
	 if (!@rmdir( JNEWSPATH_ADMIN .'extensions'.DS.'cbplugin/')) {
		 $error .= '<br /> Error deleting the temporary cbplugin directory.';
	 }

	 $query = "SELECT `id` FROM `#__comprofiler_plugin` WHERE `folder` = 'plug_jnewscbplugin' " ;
	 $database->setQuery($query);
	 $database->query();
	 $id = $database->loadResult();
	 $mysqlerror = $database->getErrorMsg();
	 if (!empty($mysqlerror)) {
		 $error .= '<br />Error getting plugin information from cb plugin table. Database error: <br />' . $mysqlerror . '';
	 } else {
		 if ($id<1) {
			 $row->name = 'jNews CB Plugin';
			 $row->element = 'jnews_cb';
			 $row->type = 'user';
			 $row->folder = 'plug_jnewscbplugin';
			 $row->ordering = '99';
			$query = "INSERT INTO `#__comprofiler_plugin` (`name` , `element`, `type`, `ordering`, `folder`) VALUES ( ".
				"'$row->name', ".
				"'$row->element', ".
				"'$row->type', ".
				"'$row->ordering', ".
				" '$row->folder' ) ";
			$database->setQuery($query);
			$database->query();
			$error .= $database->getErrorMsg();
			 if (!empty($error)) {
				$error .= '<br />Error adding plug information to CB plug table.';
			 }
			 $query = "SELECT `id` FROM `#__comprofiler_plugin` WHERE `folder` = 'plug_jnewscbplugin' " ;
			 $database->setQuery($query);
			 $database->query();
			 $id = $database->loadResult();
			 $error .= $database->getErrorMsg();
			 $row = '';
			 $row->title = 'Mailing Lists';
			 $row->description = 'Listing of all the mailing lists for jNews';
			 $row->ordering = '99';
			 $row->width = '.5';
			 $row->enabled = '0';
			 $row->pluginclass = 'getjNewsTab';
			 $row->pluginid = $id;
			 $row->sys = '0';
			 $row->params = 'NULL';
			 $row->displaytype = 'tab';
			 $row->position = 'cb_tabmain';
			$query = "INSERT INTO `#__comprofiler_tabs` (`title` , `description`, `ordering`, `width`, `enabled`, " .
					" `pluginclass` , `pluginid`, `sys`, `displaytype`, `params` , `position` ) VALUES ( ".
				"'$row->title', ".
				"'$row->description', ".
				"'$row->ordering', ".
				"'$row->width', ".
				"'$row->enabled', ".
				"'$row->pluginclass', ".
				"'$row->pluginid', ".
				"'$row->sys', ".
				"'$row->displaytype', ".
				"'$row->params', ".
				"'$row->position' ) ";
			$database->setQuery($query);
			$database->query();
			 $error .= $database->getErrorMsg();
			 if (!empty($error)) {
				$error .= '<br />Error adding plug information to CB tab table.';
			 }
		 }
	 }//endelse
	 if (empty($error)) {
		$xf = new jNews_Config();
	 	$xf->update('cb_pluginInstalled', '1');
	 	//$return .= jnews::M('green' , _JNEWS_INSTALL_SUCCESS,false) .'<br />';
	 	jnews::displayInfo(_JNEWS_INSTALL_SUCCESS,'success');
	 } else {
	 	//$return .= $error.jnews::M('red' , _JNEWS_INSTALL_ERROR,false) .'<br />';
	 	jnews::displayInfo($error,'error');
	 }
	 //return $return;
	}
 
	function sendWelcomeEmail(){

		$my = JFactory::getUser();
	 	$docuLink = JNEWS_HOME_SITE.'/index.php?option=com_jlinks&controller=redirect&link=doc_jnews';
	 	$liveChatLink = JNEWS_HOME_SITE.'/index.php?option=com_jlinks&controller=redirect&link=live-chat';
	 	$moduleDocu = JNEWS_HOME_SITE.'/index.php?option=com_jlinks&controller=redirect&link=Mod_jnews';
	 	
	 	$content = 'Hi '.$my->name.',<br /><br />Welcome to jNews!<br />This is a welcome email to jNews and also an email to let you know that everything has been configured and you can now start using sending newsletter with jNews. In case you need more information here are some useful links:<br />
	 	<br />For jNews documentation <a href="'.$docuLink.'" target=_blank>Click here</a>.<br /> 
	 	<br />Talk to one of our representative through <a href="'.$liveChatLink.'" TARGET="_NEW">Live Chat</a>.<br /> 
	 	<br />Want to setup your newsletter module here is the documentation to <a href="'.$moduleDocu.'" TARGET="_NEW">configure jNews Module</a>.<br /> 
	 	<br />This is an automatic email sent by jNews to you after the installation. Please don\'t reply.<br /> All the best from the Joobi team!';
	 	$subject = 'Welcome to jNews, everything is setup properly.';
	
	 	return jNews_ProcessMail::sendExtraEmail($content, $subject, $my->email, $my->name );

	}
