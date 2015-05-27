<?php
/**
 * @package        JFBConnect
 * @copyright (C) 2009-2012 by Source Coast - All rights reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');
jimport('joomla.html.pane');
JHTML::_('behavior.tooltip');

$pane = JPane::getInstance('tabs');

?>
<div class="width-80 fltlft autotune">
    <form method="post" id="adminForm" name="adminForm">
        <h1>Welcome to the JFBConnect Auto-Configuration Tool!</h1>

        <div class="width-80 fltlft">
            <p>This tool will help you initially setup your
                Facebook Application and should be used periodically to check your configuration. These steps will:</p>
            <ul>
                <li>Automatically configure your Facebook Application based on your site information and up-to-date
                    information and recommendations from SourceCoast.com for JFBConnect.
                </li>
                <li>Let you easily make additional customizations for your Facebook Application to suit your needs.</li>
                <li>Check your site for known configuration or compatibility problems with JFBConnect.</li>
            </ul>
            <p>It's recommended that you run AutoTune whenever you run into issues with Facebook or about once a month
                to make sure your Facebook Application is optimized for
                the latest changes from Facebook.</p>

            <p>When you're ready, click "Start". This will connect to Facebook.com and SourceCoast.com to determine the
                optimal settings for your site.</p>

            <div style="text-align: center">
                <input type="submit" value="START" class="autotuneButton"/>
            </div>
            <br/>
        </div>
        <div class="width-20 fltlft">
            <fieldset>
                <legend>Basic Checks</legend>
                <table>
                    <tr>
                        <th>Setting</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><strong>PHP</strong></td>
                        <td><?php echo $this->phpVersion; ?></td>
                    </tr>
                    <tr>
                        <td><strong>cURL</strong></td>
                        <td><?php echo $this->curlCheck; ?></td>
                    </tr>
                </table>
                <?php if ($this->errorsFound)
                echo '<div class="autotuneBad" style="font-size: 15px; text-align: center">Errors Found</div>Please correct the issues above.'; ?>
            </fieldset>
        </div>
        <input type="hidden" name="option" value="com_jfbconnect"/>
        <input type="hidden" name="view" value="autotune"/>
        <input type="hidden" name="task" value="fbapp"/>
    </form>
</div>