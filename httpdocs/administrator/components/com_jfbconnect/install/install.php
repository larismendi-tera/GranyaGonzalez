<?php
/**
 * @package        JFBConnect
 * @copyright (C) 2009-2012 by Source Coast - All rights reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

class com_JFBConnectInstallerScript
{
    var $jfbcVersion = "4.2.1"; // Same as the XML version
    var $finalDBVersion = "4.2.0"; // If database updates occur, increment this number
    var $libraryVersion = "1.0.2";
    var $packages = array();

    var $systemPluginEnabled = false;
    var $authPluginEnabled = false;
    var $userPluginEnabled = false;
    var $contentPluginEnabled = false;

    function __construct()
    {
        $this->packages[] = array('name' => 'JFBConnect Authentication Plugin', 'file' => 'plg_authentication_jfbconnectauth_j2.5_v4.2.0.zip');
        $this->packages[] = array('name' => 'JFBConnect User Plugin', 'file' => 'plg_user_jfbconnectuser_j2.5_v4.2.0.zip');
        $this->packages[] = array('name' => 'JFBConnect System Plugin', 'file' => 'plg_system_jfbcsystem_j2.5_v4.2.1.zip');
        $this->packages[] = array('name' => 'JFBConnect Content Plugin', 'file' => 'plg_content_jfbccontent_j2.5_v4.2.0.zip');
        $this->packages[] = array('name' => 'SCLogin / JFBConnect Login', 'file' => 'mod_sclogin_j2.5_v1.1.1.zip');
        $this->packages[] = array('name' => 'SourceCoast Social Library', 'file' => 'lib_sourcecoast_j2.5_v1.0.2.zip');
    }

    function preflight($type, $parent)
    {
        return true;
    }

    function install($parent)
    {
        return true;
    }

    function update($parent)
    {
        $this->savePluginState();
        $this->disablePlugins();

        return true;
    }

    function postflight($type, $parent)
    {
        // Run required updates that may not have happened if user uninstalls and does a fresh install
        $this->updateDatabase();
        $this->installPackages();

        $this->enablePlugins($this->systemPluginEnabled, $this->authPluginEnabled, $this->userPluginEnabled, $this->contentPluginEnabled);
    }

    /*
         * $parent is the class calling this method
         * uninstall runs before any other action is taken (file removal or database processing).
         */
    function uninstall($parent)
    {
        $this->disablePlugins();
    }

    // CUSTOM JFBCONNECT FUNCTIONS
    function savePluginState()
    {
        $this->systemPluginEnabled = false;
        $this->authPluginEnabled = false;
        $this->userPluginEnabled = false;
        $this->contentPluginEnabled = false;

        $db = JFactory::getDBO();
        $db->setQuery(
            "SELECT element, enabled FROM #__extensions ".
            "WHERE (element = 'jfbconnectauth' AND folder = 'authentication' AND type = 'plugin') ".
            "	OR (element = 'jfbcsystem' AND folder = 'system' AND type = 'plugin') ".
            "	OR (element = 'jfbccontent' AND folder = 'content' AND type = 'plugin') ".
            "	OR (element = 'jfbconnectuser' AND folder = 'user' AND type = 'plugin')");
        $pluginValues = $db->loadObjectList();

        if($pluginValues)
        {
            foreach($pluginValues as $plugin)
            {
                $pluginName = $plugin->element;
                $pluginPublished = $plugin->enabled;

                if($pluginName == 'jfbconnectauth')
                    $this->authPluginEnabled = $pluginPublished;
                else if($pluginName == 'jfbconnectuser')
                    $this->userPluginEnabled = $pluginPublished;
                else if($pluginName == 'jfbcsystem')
                    $this->systemPluginEnabled = $pluginPublished;
                else if($pluginName == 'jfbccontent')
                    $this->contentPluginEnabled = $pluginPublished;
            }
        }
    }

    function disablePlugins()
    {
        $this->enablePlugins("0", "0", "0", "0");
    }

    function enablePlugins($enableSystem, $enableAuth, $enableUser, $enableContent)
    {
        $db = JFactory::getDBO();
        $query = "UPDATE #__extensions SET enabled=" . $enableSystem . " WHERE element = 'jfbcsystem' AND folder = 'system' AND type = 'plugin';";
        $query .= "UPDATE #__extensions SET enabled=" . $enableAuth . " WHERE element = 'jfbconnectauth' AND folder = 'authentication' AND type = 'plugin';";
        $query .= "UPDATE #__extensions SET enabled=" . $enableUser . " WHERE element = 'jfbconnectuser' AND folder = 'user' AND type = 'plugin';";
        $query .= "UPDATE #__extensions SET enabled=" . $enableContent . " WHERE element = 'jfbccontent' AND folder = 'content' AND type = 'plugin';";
        $db->setQuery($query);
        $db->queryBatch();
    }

    function updateDatabase()
    {
        // If user uninstalled JFBConnect and is re-installing, the tables will exist, but upgrade SQL files won't be called
        // Add SQL calls here as a backup
        $db = JFactory::getDBO();
        $db->debug(0);
        $db->setQuery("SELECT value FROM #__jfbconnect_config WHERE `setting` = 'db_version'");
        $dbVersion = $db->loadResult();
        switch ($dbVersion)
        {
            case null:
            case "":
                $this->runUpdateSQL('4.1.0');
            case "4.1.0":
                $this->runUpdateSQL('4.2.0');
                break;
            default:
                break;
        }
    }

    function runUpdateSQL($version)
    {
        $buffer = file_get_contents(JPATH_ADMINISTRATOR . '/components/com_jfbconnect/install/sql/updates/' . $version . '.sql');

        // Graceful exit and rollback if read not successful
        if ($buffer === false)
        {
            JError::raiseWarning(1, JText::_('JLIB_INSTALLER_ERROR_SQL_READBUFFER'));
            return false;
        }

        $db = JFactory::getDBO();
        $db->setQuery($buffer);
        $db->queryBatch(false);
    }

    function installPackages()
    {
        // Get current version number
        ?>

    <table>
        <tr>
            <td width="100px"><img
                    src="<?php print JURI::root(); ?>/administrator/components/com_jfbconnect/assets/images/jfbconn.png"
                    width="100px"></td>
            <td><h2>JFBConnect v<?php echo $this->jfbcVersion; ?></h2></td>
        </tr>
    </table>
    <h3>Installing...</h3>

    <?php
        jimport('joomla.installer.helper');
        jimport('joomla.installer.adapters.plugin');
        $installer = new JInstaller();
        $installer->setOverwrite(true);

        foreach ($this->packages as $package)
        {
            $pkgName = $package['name'];
            $pkgFile = $package['file'];
            $pkg = JInstallerHelper::unpack(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_jfbconnect' . DS . 'install' . DS . 'packages' . DS . $pkgFile);
            if ($installer->install($pkg['dir']))
            {
                ?>
            <table bgcolor="#E0FFE0" width="100%">
                <tr style="height:30px">
                    <td width="50px"><img
                            src="<?php print JURI::root(); ?>/administrator/components/com_jfbconnect/assets/images/icon-16-allow.png"
                            height="20px" width="20px"></td>
                    <td><font size="2"><b><?php echo $pkgName; ?> successfully installed.</b></font></td>
                </tr>
            </table>
            <?php
            } else
            {
                ?>
            <table bgcolor="#FFD0D0" width="100%">
                <tr style="height:30px">
                    <td width="50px"><img
                            src="<?php print JURI::root(); ?>/administrator/components/com_jfbconnect/assets/images/icon-16-deny.png"
                            height="20px" width="20px"></td>
                    <td><font size="2"><b>ERROR: Could not install the <?php echo $pkgName; ?>. Please install
                        manually.</b></font></td>
                </tr>
            </table>
            <?php
            }
        }
        ?>
        <p style="font-weight:bold; margin-top:20px">To configure and optimize JFBConnect, it's recommended to run Autotune whenever you install or upgrade:</p>
        <center><a href="index.php?option=com_jfbconnect&view=autotune" style="background-color:#025A8D;color:#FFFFFF;height:35px;padding:15px 45px;font-weight:bold;font-size:18px;line-height:60px;text-decoration:none;">Run Autotune Now</a></center>
    <?php
    }

}