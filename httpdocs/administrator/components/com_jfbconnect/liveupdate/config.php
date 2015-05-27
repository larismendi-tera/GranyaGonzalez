<?php
/**
 * @package LiveUpdate
 * @copyright Copyright ©2011 Nicholas K. Dionysopoulos / AkeebaBackup.com
 * @license GNU LGPLv3 or later <http://www.gnu.org/copyleft/lesser.html>
 */

defined('_JEXEC') or die();

/**
 * Configuration class for your extension's updates. Override to your liking.
 */
class LiveUpdateConfig extends LiveUpdateAbstractConfig
{
	var $_extensionName			= 'com_jfbconnect';
	var $_extensionTitle		= 'JFBConnect';
	var $_updateURL				= 'http://www.sourcecoast.com/index.php?option=com_ars&view=update&format=ini&id=2';
	var $_requiresAuthorization	= true;
	var $_versionStrategy		= 'different';
	
	function __construct()
	{
		$this->_cacerts = dirname(__FILE__).'/../assets/cacert.pem';

        parent::__construct();

        require_once(JPATH_ROOT . DS . 'components' . DS . 'com_jfbconnect' . DS . 'libraries' . DS . 'facebook.php');
        $jfbcLibrary = JFBConnectFacebookLibrary::getInstance();
        $configModel = $jfbcLibrary->getConfigModel();
        $this->_downloadID = $configModel->getSetting('sc_download_id');
	}
}