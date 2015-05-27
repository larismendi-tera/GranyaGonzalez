<?php
defined('_JEXEC') OR defined('_VALID_MOS') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

$mainframe = JFactory::getApplication();

define ('JNEWS_JPATH_ROOT_NO_ADMIN' , JPATH_ROOT );
define( 'JNEWS_DEBUG', $mainframe->getCfg('debug') );

define( 'JNEWS_SITE_URL', JURI::root() );
define( 'JNEWS_JPATH_LIVE', rtrim( JURI::root(), "/" ));

define( 'JNEWS_SITE_NAME', $mainframe->getCfg('sitename') );
define( 'JNEWS_TIME_OFFSET', $mainframe->getCfg('offset') );

$lang= JFactory::getLanguage();
define( 'JNEWS_CONFIG_LANG', $lang->getTag() );

//define( 'JNEWS_JPATH_LIVE_NO_HTTPS', str_replace('https:','http:',JNEWS_JPATH_LIVE) );
define( 'JNEWS_JPATH_LIVE_NO_HTTPS', JNEWS_JPATH_LIVE );
define( 'JNEWS_OPTION', 'com_jnews' );

//Make it absolute (needed inside Newsletters)
$urls = parse_url(JNEWS_JPATH_LIVE_NO_HTTPS);
if(!empty($urls['path'])){
	define('JNEWS_COMPLETE_URL',substr(JNEWS_JPATH_LIVE_NO_HTTPS,0,strrpos(JNEWS_JPATH_LIVE_NO_HTTPS,$urls['path'])).'/');
	define('JNEWS_URL_MORE',trim(str_replace(JNEWS_COMPLETE_URL,'',JNEWS_JPATH_LIVE_NO_HTTPS),'/').'/');
}else{
	define('JNEWS_COMPLETE_URL',JNEWS_JPATH_LIVE_NO_HTTPS.'/');
	define('JNEWS_URL_MORE',false);
}

define('JNEWS', 'jnews_');
if (!defined('DS'))  define( 'DS', DIRECTORY_SEPARATOR );
define( 'JNEWSPATH_ADMIN' , JNEWS_JPATH_ROOT_NO_ADMIN . DS . 'administrator' . DS . 'components' . DS . JNEWS_OPTION . DS );
define( 'JNEWSPATH_ADMIN2' , JNEWS_JPATH_ROOT_NO_ADMIN . DS . 'administrator' . DS . 'components' . DS . JNEWS_OPTION . DS );
define( 'JNEWSPATH_SITE', JNEWS_JPATH_ROOT_NO_ADMIN . DS . 'administrator' . DS . 'components' . DS . JNEWS_OPTION . DS );
define( 'JNEWSPATH_FRONT' , JNEWS_JPATH_ROOT_NO_ADMIN . DS . 'components' . DS . JNEWS_OPTION . DS );
define( 'JNEWSPATH_CLASS', JNEWSPATH_ADMIN  . 'classes' .DS );
define( 'JNEWSPATH_CLASSN', JNEWSPATH_ADMIN2  . 'classes' .DS );
define( 'JNEWSPATH_SITE_VIEW', JNEWSPATH_SITE  . 'views' .DS );
define( 'JNEWSPATH_FRONT_VIEW', JNEWSPATH_FRONT  . 'views' .DS );
define( 'JNEWSPATH_FRONT_CLASS', JNEWSPATH_FRONT  . 'classes' .DS );
define( 'JNEWSPATH_ADMIN_VIEW', JNEWSPATH_ADMIN  . 'views' .DS );
define( 'JNEWSPATH_ADMIN_CONTROLLER', JNEWSPATH_ADMIN  . 'controllers' .DS );
define( 'JNEWSPATH_CLASS_SITE', JNEWSPATH_SITE  . 'classes' .DS );

define( 'JNEWS_PATH_LANG', JNEWS_JPATH_ROOT_NO_ADMIN . DS . 'administrator' . DS . 'components'. DS . JNEWS_OPTION . DS. 'language' .DS );
define('JNEWSPATH_FRONT_TEMPLATES', JNEWSPATH_FRONT  . 'templates' .DS);
define('JNEWSPATH_MEDIA', JNEWS_JPATH_ROOT_NO_ADMIN.DS.'media'.DS.JNEWS_OPTION);
define('JNEWSPATH_TEMPLATES', JNEWS_JPATH_ROOT_NO_ADMIN.DS.'media'.DS.JNEWS_OPTION.DS.'templates' .DS);

if (!defined('_MOS_NOTRIM')) define( '_MOS_NOTRIM', 0x0001 );
if (!defined('_MOS_ALLOWHTML')) define( '_MOS_ALLOWHTML', 0x0002 );
if (!defined('_MOS_ALLOWRAW')) define( '_MOS_ALLOWRAW', 0x0004 );
if(!defined('_BUTTON_LOGIN') and defined('BUTTON_LOGIN')) define('_BUTTON_LOGIN',BUTTON_LOGIN);

//urls
define('JNEWS_PATH_FRONT', JURI::root().'components' .DS. JNEWS_OPTION .DS );
define( 'JNEWS_URL_ADMIN', JNEWS_JPATH_LIVE.'/administrator/components/'.JNEWS_OPTION.'/' );

if ($mainframe->isAdmin()){
	define( 'JNEWS_PATH_ADMIN', JURI::base().'components' .DS. JNEWS_OPTION .DS );
	define( 'JNEWS_PATH_ADMIN_IMAGES2', JURI::base().'components/'.JNEWS_OPTION.'/images/' );
}else{
	define( 'JNEWS_PATH_ADMIN', JURI::base().'administrator'.DS.'components' .DS. JNEWS_OPTION .DS );
	define( 'JNEWS_PATH_ADMIN_IMAGES2', JURI::base().'administrator/components/'.JNEWS_OPTION.'/images/');
}

define( 'JNEWS_PATH_ADMIN_IMAGES', JNEWS_PATH_ADMIN.'images'.DS );

//includes file path
define( 'JNEWS_PATH_INCLUDES', JNEWSPATH_FRONT.'includes'.DS );

//includes url
define( 'JNEWS_URL_INCLUDES', JNEWS_JPATH_LIVE . '/components/'.JNEWS_OPTION.'/includes/' );
define( 'JNEWSCOMP_AIMG', JNEWS_JPATH_LIVE . '/administrator/components/' . JNEWS_OPTION .'/images/' );


define( 'JNEWS_PATH_ADMIN_THUMBNAIL_SHOW', JURI::root().'media/'.JNEWS_OPTION.'/templates/thumbnail/');
define( 'JNEWS_PATH_ADMIN_THUMBNAIL_UPLOAD', JNEWSPATH_TEMPLATES. 'thumbnail' );

define( 'JNEWS_HOME_SITE', 'http://www.joobi.co');//we wil be using this constant to be able to easily change the site from joobi.co to acajoom.com
