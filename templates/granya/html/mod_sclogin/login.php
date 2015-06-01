<?php
/**
 * @package        JFBConnect/JLinked
 * @copyright (C) 2011-2012 by Source Coast - All rights reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');


     //SC15
    
    $passwordName = 'password';
    $loginRememberText = JText::_('JGLOBAL_REMEMBER_ME');
     //SC16

    if ($registerType == "communitybuilder")
        $passwordName = 'passwd';
    ?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" class="form-login" method="post" id="login-form">
    <?php if($params->get('user_intro')): ?>
        <div class="sc_login_desc pretext">
            <p><?php echo $params->get('user_intro'); ?></p>
        </div>
    <?php endif;

    //Show Joomla Username/Password/Login buttons
    if ($params->get('showLoginForm'))
    {
    ?>

    <fieldset class="input userdata">
        <p id="form-login-username">
            <label for="modlgn_username" class="hidden"><?php echo JText::_('MOD_SCLOGIN_USERNAME') ?></label>
            <input id="modlgn_username" type="text" name="username" title="<?php echo JText::_('MOD_SCLOGIN_USERNAME') ?>" value="<?php echo JText::_('MOD_SCLOGIN_USERNAME') ?>" class="inputbox" alt="username" size="18" />
        </p>
        <p id="form-login-password">
            <label for="modlgn_passwd" class="hidden"><?php echo JText::_('MOD_SCLOGIN_PASSWORD') ?></label>
            <input id="modlgn_passwd" type="password" name="<?php echo $passwordName; ?>" placeholder="<?php echo JText::_('MOD_SCLOGIN_PASSWORD') ?>" class="inputbox" size="17"
                   alt="password"/>
        </p>
        <?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
        <p id="form-login-remember">
            <label for="modlgn_remember"><?php echo $loginRememberText;?></label>
            <input id="modlgn_remember" type="checkbox" name="remember" class="inputbox" value="yes" alt="Remember Me"/>
        </p>

        <?php endif; ?> <!-- TODO GET SITE TEMPLATE TO NOT HARDCODE GRANYA */ -->
        <p>
            <input type="image" alt="<?php echo JText::_('MOD_SCLOGIN_LOGIN') ?>" src="<?php echo JURI::base() ?>/templates/granya/images/btn_ingresar.png" name="Submit" class="button button-login" value="<?php echo JText::_('MOD_SCLOGIN_LOGIN') ?>"/>
        </p>
    <?php if ($registerType != "communitybuilder")
    {
         //SC15
        
        echo '<input type="hidden" name="option" value="com_users"/>';
        echo '<input type="hidden" name="task" value="user.login"/>';
         //SC16
        echo '<input type="hidden" name="return" value="'. $jLoginUrl.'"/>';
    }
    else // Use Community Builder's login
    {
        include_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/plugin.foundation.php');
        global $_CB_framework;
        echo '<input type="hidden" name="option" value="com_comprofiler" />' . "\n";
        echo '<input type="hidden" name="task" value="login" />' . "\n";
        echo '<input type="hidden" name="op2" value="login" />' . "\n";
        echo '<input type="hidden" name="lang" value="' . $_CB_framework->getCfg('lang') . '" />' . "\n";
        echo '<input type="hidden" name="force_session" value="1" />' . "\n"; // makes sure to create joomla 1.0.11+12 session/bugfix
        echo '<input type="hidden" name="return" value="B:'.$jLoginUrl.'"/>';
        echo cbGetSpoofInputTag('login');
    }
    echo JHTML::_('form.token'); ?>
    </fieldset>

<?php
    }

    //Show Social Login Button(s)
    $jfbcLogin = $helper->getJFBConnectLoginButton();
    // Alternative FB Login Buttons below. To use:
            // add // to the 3 lines above
            // Remove the // from the line below and update the text or image value as necessary
    // Text Link
    //echo '<a href="javascript:void(0)" onclick="jfbc.login.login_custom();">LINK TEXT</a>';

    // Image Link
    //echo '<a href="javascript:void(0)" onclick="jfbc.login.login_custom();"><img src="http://yoursite.com/linktoimage.jpg" /></a>';

    // HTML Form Button
    //echo '<input type="button" onclick="jfbc.login.login_custom();" value="BUTTON TEXT" />';

    $jlinkedLogin = $helper->getJLinkedLoginButton();
    if ($jlinkedLogin != "")
        echo $jlinkedLogin;

    // Show the register & forgot links
    if ($params->get('showRegisterLink') || $params->get('showForgotUsername') || $params->get('showForgotPassword') || ($jfbcLogin != ""))
        echo '<ul class="site-login-links">';

    $count = 0;

    if ($params->get('showRegisterLink')) {
        echo '<li><a href="' . $registerLink . '">' . JText::_('MOD_SCLOGIN_REGISTER_FOR_THIS_SITE') . '</a></li>';
        $count++;
    }

    if ($params->get('register_type') == "communitybuilder" && ($params->get('showForgotUsername') || $params->get('showForgotPassword'))) {
        if ($count > 0) echo '<li>|</li>';
        echo '<li><a href="' . $forgotLink . '">' . JText::_('MOD_SCLOGIN_FORGOT_LOGIN') . '</a></li>';
        $count++;
    }
    else
    {
        if ($params->get('showForgotUsername')) {
            if ($count > 0) echo '<li>|</li>';
            echo '<li><a href="' . $forgotUsernameLink . '">' . JText::_('MOD_SCLOGIN_FORGOT_USERNAME') . '</a></li>';
            $count++;
        }

        if ($params->get('showForgotPassword')) {
            if ($count > 0) echo '<li>|</li>';
            echo '<li><a href="' . $forgotPasswordLink . '">' . JText::_('MOD_SCLOGIN_FORGOT_PASSWORD') . '</a></li>';
        }

    }

    if ($jfbcLogin != "") {
        echo '<li class="jfbcLogin-container">' . $jfbcLogin . '</li>';
    }

    if ($params->get('showRegisterLink') || $params->get('showForgotUsername') || $params->get('showForgotPassword'))
        echo "</ul>";

    //echo $helper->getPoweredByLink();
?>
</form>