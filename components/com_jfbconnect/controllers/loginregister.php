<?php
/**
 * @package        JFBConnect
 * @copyright (C) 2009-2012 by Source Coast - All rights reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');
jimport('joomla.user.helper');
jimport('sourcecoast.utilities');

class JFBConnectControllerLoginRegister extends JController
{
    var $_newUserPassword = "";

    function display($cachable = false, $urlparams = false)
    {
        $this->fetchProfileData();

        #JRequest::setVar('tmpl', 'component');
        parent::display();
    }

    function fetchProfileData()
    {
        $app = JFactory::getApplication();
        JPluginHelper::importPlugin('jfbcprofiles');
        $app->triggerEvent('jfbcProfilesOnFetchData');
    }

    function createNewUser()
    {
        $redirect=''; $menuItemId=0;
        SCSocialUtilities::getCurrentReturnParameter($redirect, $menuItemId, LOGIN_TASK_JFBCONNECT);
        $returnParam = '&return='.base64_encode($redirect);

        $app = JFactory::getApplication();
        if (!JRequest::checkToken())
            $app->redirect(JRoute::_('index.php?option=com_jfbconnect&view=loginregister'.$returnParam), 'Your session timed out. Please try again', 'error');

        $this->_getLoginPostData();

        $jfbcLibrary = JFBConnectFacebookLibrary::getInstance();
        $configModel = $jfbcLibrary->getConfigModel();
        $fbUserId = $jfbcLibrary->getFbUserId();

         //SC15

        

            // User Registration Controller code
            JModel::addIncludePath(JPATH_SITE . DS . 'components' . DS . 'com_users' . DS . 'models');
            jimport('joomla.form.form');
            JForm::addFormPath(JPATH_SITE . DS . 'components' . DS . 'com_users' . DS . 'models' . DS . 'forms');
            JForm::addFieldPath(JPATH_SITE . DS . 'components' . DS . 'com_users' . DS . 'models' . DS . 'fields');
            $language = JFactory::getLanguage();
            $language->load('com_users');

            $userModel = JModel::getInstance('Registration', 'UsersModel');
            $requestData = JRequest::getVar('jform', array(), 'post', 'array');

            // Validate the posted data.
            $form = $userModel->getForm();
            if (!$form) {
                JError::raiseError(500, $userModel->getError());
                return false;
            }
            $formData = $userModel->validate($form, $requestData);

            // Check for validation errors.
            if ($formData === false) {
                // Get the validation messages.
                $errors = $userModel->getErrors();

                // Push up to three validation messages out to the user.
                for ($i = 0, $n = count($errors); $i < $n && $i < 3; $i++)
                {
                    if (JError::isError($errors[$i])) {
                        $app->enqueueMessage($errors[$i]->getMessage(), 'warning');
                    }
                    else
                    {
                        $app->enqueueMessage($errors[$i], 'warning');
                    }
                }

                // Save the data in the session.
                $app->setUserState('com_users.registration.data', $requestData);

                // Redirect back to the registration screen.
                $app->redirect(JRoute::_('index.php?option=com_jfbconnect&view=loginregister'.$returnParam, false));
                return false;
            }

            // Register the user and return the newly created user ID
            $useractivation = $this->getActivationMode();
            $loginRegisterModel = $this->getModel('LoginRegister', 'JFBConnectModel');
            $jUser = $loginRegisterModel->register($formData, $useractivation);

            // Check for errors.
            if ($jUser === false) {
                // Save the data in the session.
                $app->setUserState('com_users.registration.data', $requestData);

                // Redirect back to the edit screen.
                $this->setMessage(JText::sprintf('COM_USERS_REGISTRATION_SAVE_FAILED', $loginRegisterModel->getError()), 'warning');
                $this->setRedirect(JRoute::_('index.php?option=com_jfbconnect&view=loginregister'.$returnParam, false));
                return false;
            }

            $lang = JRequest::getVar(JUtility::getHash('language'), '', 'COOKIE');
            $jUser->setParam('language', $lang);
            $jUser->save();

            // Flush the data from the session.
            $app->setUserState('com_users.registration.data', null);

            #Send the new user confirmation email and admin notify emails
            $this->_newUserPassword = $formData['password1'];
         //SC16

        $this->_clearLoginPostData();

        $jfbcLibrary->setInitialRegistration();
        SCSocialUtilities::clearJFBCNewMappingEnabled();

        include_once (JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_jfbconnect' . DS . 'models' . DS . 'usermap.php');
        $userMapModel = new JFBConnectModelUserMap();
        if ($userMapModel->mapUser($fbUserId, $jUser->id))
            $app->enqueueMessage(JText::_('COM_JFBCONNECT_MAP_USER_SUCCESS'));
        else
            $app->enqueueMessage(JText::_('COM_JFBCONNECT_MAP_USER_FAIL'));

        $this->login();
    }

    function _getLoginPostData()
    {
        $postData = JRequest::get('post');

         //SC15

        
        if(isset($postData['jform']['password1']))
            $postData['jform']['password1'] = '';
        if(isset($postData['jform']['password2']))
            $postData['jform']['password2'] = '';
         //SC16

        $session = JFactory::getSession();
        $session->set('postDataLoginRegister', $postData);
    }

    function _clearLoginPostData()
    {
        $session = JFactory::getSession();
        $session->clear('postDataLoginRegister');
    }

    function login()
    {
        $app = JFactory::getApplication();
        $jfbcLibrary = JFBConnectFacebookLibrary::getInstance();
        $configModel = $jfbcLibrary->getConfigModel();
        $fbUserId = $jfbcLibrary->getFbUserId();

        if (!$jfbcLibrary->validateToken() || !$fbUserId) {
            $session = JFactory::getSession();
            $session->clear('jfbcTokenRequestCount'); // Let user retry again if they want
            $app->enqueueMessage('We were unable to retrieve your Facebook account information. Please try again');
            $app->redirect('index.php');
        }

        JPluginHelper::importPlugin('jfbcprofiles');
        $userMapModel = new JFBConnectModelUserMap();
        $jUserId = $userMapModel->getJoomlaUserId($fbUserId);

        // Check if no mapping, and Automatic Registration is set. If so, create the new user.
        if (!$jUserId && !$configModel->getSetting('create_new_users')) { # User is not in system, should create their account automatically
            if ($this->createFacebookOnlyUser($fbUserId))
                $jUserId = $userMapModel->getJoomlaUserId($fbUserId);
        }

        $doLogin = true;
        if ($jfbcLibrary->initialRegistration) {
            if ($jUserId) {
                $jUser = JUser::getInstance($jUserId);

                $doLogin = $this->activateUser(); // Set to false if user has to activate
                $this->sendNewUserEmails($jUser);

                # New user, set their new user status and trigger the OnRegister event
                $args = array($jUser->get('id'), $fbUserId);
                $app->triggerEvent('jfbcProfilesOnRegister', $args);
                $jfbcLibrary->setFacebookNewUserMessage();
            }
            else
                $doLogin = false;
        }

        if ($doLogin && $jUserId) {
            $options = array('silent' => 1); // Disable other authentication messages
            $loginResult = $app->login(array('username' => $configModel->getSetting('facebook_app_id'), 'password' => $configModel->getSetting('facebook_secret_key')), $options);
            // TODO: Move this to the JFBCUser plugin, shouldn't have to check result here
            if (!JError::isError($loginResult)) {
                if (!$jfbcLibrary->initialRegistration) {
                    $args = array($jUserId, $fbUserId);
                    $app->triggerEvent('jfbcProfilesOnLogin', $args);
                    $jfbcLibrary->setFacebookLoginMessage();
                }

                // Store the access token to the database for possible offline access later
                $fbClient = $jfbcLibrary->getFBClient();
                $token = $fbClient->getPersistentData('access_token', null);
                if ($token && $token != $fbClient->getApplicationAccessToken()) // Should always be valid, but caution is good.
                    $userMapModel->updateUserToken($jUserId, $token);
            }
        }

        $loginRegisterModel = $this->getModel('LoginRegister', 'JFBConnectModel');
        $redirect = $loginRegisterModel->getLoginRedirect();

        $app->redirect($redirect);
    }

    function createFacebookOnlyUser($fbUserId)
    {
        $jfbcLibrary = JFBConnectFacebookLibrary::getInstance();
        $jfbcLibrary->setInitialRegistration();

        $configModel = $jfbcLibrary->getConfigModel();
        $loginRegisterModel = $this->getModel('LoginRegister', 'JFBConnectModel');

        $fbUser = $jfbcLibrary->_getUserName($fbUserId);
        if ($fbUser == null) # no information returned from FB
            return false;

        if ($fbUser['email'] == null)
            $newEmail = $fbUser['first_name'] . "_" . $fbUserId . "@unknown.com";
        else
            $newEmail = $fbUser['email'];

        $fullname = $fbUser['name'];

        $user['fullname'] = $fullname;
        $user['email'] = $newEmail;

        // Create random password for FB User Only, but save so we can email to the user on account creation
        if($configModel->getSetting('generate_random_password'))
        {
            $this->_newUserPassword = JUserHelper::genRandomPassword();
            $salt = JUserHelper::genRandomPassword(32);
            $crypt = JUserHelper::getCryptedPassword($this->_newUserPassword, $salt);
            $user['password'] = $crypt . ':' . $salt;
        }
        else
        {
            $user['password_clear'] = "";
            $this->_newUserPassword = '';
        }

        $lang = JRequest::getVar(JUtility::getHash('language'), '', 'COOKIE');
        $user['language'] = $lang;

        $usernamePrefixFormat = $configModel->getSetting('auto_username_format');
        $username = $loginRegisterModel->getAutoUsername($fbUser, $fbUserId, $usernamePrefixFormat);
        $user['username'] = $user['email'];

        $useractivation = $this->getActivationMode();
        $jUser = $loginRegisterModel->getBlankUser($user, $useractivation);

        if ($jUser->get('id', null)) // If it's not set, there was an error
        {
            SCSocialUtilities::clearJFBCNewMappingEnabled();

            #Map the new user
            include_once (JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_jfbconnect' . DS . 'models' . DS . 'usermap.php');
            $userMapModel = new JFBConnectModelUserMap();
            $app =JFactory::getApplication();
            if ($userMapModel->mapUser($fbUserId, $jUser->get('id'))) {
                $app->enqueueMessage(JText::_('COM_JFBCONNECT_MAP_USER_SUCCESS'));
                return true;
            }
            else
                $app->enqueueMessage(JText::_('COM_JFBCONNECT_MAP_USER_FAIL'));
        }
        return false; // User creation failed for some reason
    }

    function activateUser()
    {
        $useractivation = $this->getActivationMode();
        $language = JFactory::getLanguage();
        $app =JFactory::getApplication();

        

        
            # Send out the new registration email
            // figure out activation
            $language->load('com_users');
            if ($useractivation == 2)
                $app->enqueueMessage(JText::_('COM_USERS_REGISTRATION_COMPLETE_VERIFY'));
            else if ($useractivation == 1)
                $app->enqueueMessage(JText::_('COM_USERS_REGISTRATION_COMPLETE_ACTIVATE'));
        

        if ($useractivation == 0)
            return true;
        else
            return false;
    }

    function getActivationMode()
    {
        $jfbcLibrary = JFBConnectFacebookLibrary::getInstance();
        $configModel = $jfbcLibrary->getConfigModel();

        if ($configModel->getSetting('joomla_skip_newuser_activation')) {
            return 0;
        }
        else
        {
            $params = JComponentHelper::getParams('com_users');
            $useractivation = $params->get('useractivation');
            return $useractivation;
        }
    }


    public function loginMap()
    {
        JRequest::checkToken('post') or jexit(JText::_('JInvalid_Token'));
        $app = JFactory::getApplication();

        SCSocialUtilities::setJFBCNewMappingEnabled();
        $redirect=''; $menuItemId=0;
        SCSocialUtilities::getCurrentReturnParameter($redirect, $menuItemId, LOGIN_TASK_JFBCONNECT);
        $returnParam = '&return='.base64_encode($redirect);

        // Populate the data array:
        $data = array();
        $data['username'] = JRequest::getVar('username', '', 'method', 'username');
        $data['password'] = JRequest::getString('password', '', 'post', 'string', JREQUEST_ALLOWRAW);

        // Perform the log in.
        $error = $app->login($data);

        // Check if the log in succeeded.
        if (JError::isError($error) || $error == false) {
            $app->redirect(JRoute::_('index.php?option=com_jfbconnect&view=loginregister'.$returnParam, false));
        }
        else //Logged in successfully
        {
            JModel::addIncludePath(JPATH_SITE . DS . 'components' . DS . 'com_jfbconnect' . DS . 'models');
            $loginRegisterModel = JModel::getInstance('LoginRegister', 'JFBConnectModel');
            $redirect = $loginRegisterModel->getLoginRedirect();
            $app->redirect($redirect);
        }
    }

    function checkUserNameAvailable()
    {
        $username = JRequest::getString('username');
        $dbo = JFactory::getDBO();
        $query = "SELECT id FROM #__users WHERE username=" . $dbo->quote($username);
        $dbo->setQuery($query);
        $result = $dbo->loadResult();

        if ($result)
            echo false;
        else
            echo true;
        exit;
    }

    function checkEmailAvailable()
    {
        $email = JRequest::getString('email');
        $dbo = JFactory::getDBO();
        $query = "SELECT id FROM #__users WHERE email=" . $dbo->quote($email);
        $dbo->setQuery($query);
        $result = $dbo->loadResult();

        if ($result)
            echo false;
        else
            echo true;
        exit;
    }

    /*
     * Send message to user notifying them of the new account and if they have to activate.
     * If default Mail email and name are not set, grab it from a super admin in the DB.
     */
    function sendNewUserEmails(&$user)
    {
        $app =JFactory::getApplication();
        $sendEmail = true;
        $profileEmails = $app->triggerEvent('jfbcProfilesSendsNewUserEmails');
        foreach ($profileEmails as $pe)
        {
            if ($pe)
                $sendEmail = false;
        }
        if (!$sendEmail)
            return;

        $useractivation = $this->getActivationMode();

        $newEmail = $user->get('email');
        if (SCStringUtilities::endswith($newEmail, "@unknown.com"))
            return;

         //SC15

        
            // Compile the notification mail values.
            $config = JFactory::getConfig();
            $language = JFactory::getLanguage();
            $language->load('com_users');
            $language->load('com_jfbconnect');

            $data = $user->getProperties();
            $data['fromname'] = $config->get('fromname');
            $data['mailfrom'] = $config->get('mailfrom');
            $data['sitename'] = $config->get('sitename');
            $data['siteurl'] = JUri::base();

            $uri = JURI::getInstance();
            $base = $uri->toString(array('scheme', 'user', 'pass', 'host', 'port'));
            $data['activate'] = $base . JRoute::_('index.php?option=com_users&task=registration.activate&token=' . $data['activation'], false);

            $emailSubject = JText::sprintf(
                'COM_USERS_EMAIL_ACCOUNT_DETAILS',
                $data['name'],
                $data['sitename']
            );

            // Handle account activation/confirmation emails.
            if ($useractivation == 2) {
                // Set the link to confirm the user email.
                if($this->_newUserPassword == '')
                {
                    $emailBody = JText::sprintf('COM_JFBCONNECT_EMAIL_REGISTERED_WITH_ADMIN_ACTIVATION_BODY_NOPASSWORD',
                        $data['name'],
                        $data['sitename'],
                        $data['siteurl'] . 'index.php?option=com_users&task=registration.activate&token=' . $data['activation'],
                        $data['siteurl']
                    );
                }
                else
                {
                    $emailBody = JText::sprintf('COM_JFBCONNECT_EMAIL_REGISTERED_WITH_ADMIN_ACTIVATION_BODY',
                        $data['name'],
                        $data['sitename'],
                        $data['siteurl'] . 'index.php?option=com_users&task=registration.activate&token=' . $data['activation'],
                        $data['siteurl'],
                        $data['username'],
                        $this->_newUserPassword
                    );
                }
            }
            else if ($useractivation == 1) {
                // Set the link to activate the user account.
                if($this->_newUserPassword == '')
                {
                    $emailBody = JText::sprintf(
                        'COM_JFBCONNECT_EMAIL_REGISTERED_WITH_ACTIVATION_BODY_NOPASSWORD',
                        $data['name'],
                        $data['sitename'],
                        $data['siteurl'] . 'index.php?option=com_users&task=registration.activate&token=' . $data['activation'],
                        $data['siteurl']
                    );
                }
                else
                {
                    $emailBody = JText::sprintf(
                        'COM_JFBCONNECT_EMAIL_REGISTERED_WITH_ACTIVATION_BODY',
                        $data['name'],
                        $data['sitename'],
                        $data['siteurl'] . 'index.php?option=com_users&task=registration.activate&token=' . $data['activation'],
                        $data['siteurl'],
                        $data['username'],
                        $this->_newUserPassword
                    );
                }
            }
            else
            {

                $emailSubject = JText::sprintf(
                    'COM_USERS_EMAIL_ACCOUNT_DETAILS',
                    $data['name'],
                    $data['sitename']
                );

                if($this->_newUserPassword == '')
                    $emailBody = JText::sprintf('COM_JFBCONNECT_EMAIL_REGISTERED_BODY_NOPASSWORD', $data['name'], $data['sitename'], $data['siteurl']);
                else
                    $emailBody = JText::sprintf('COM_JFBCONNECT_EMAIL_REGISTERED_BODY', $data['name'], $data['sitename'], $data['siteurl'], $data['username'], $this->_newUserPassword);
            }

            // Send the registration email.
            $return = JUtility::sendMail($data['mailfrom'], $data['fromname'], $data['email'], $emailSubject, $emailBody);

            // Check for an error.
            if ($return !== true) {
                $this->setError(JText::_('COM_USERS_REGISTRATION_SEND_MAIL_FAILED'));

                // Send a system message to administrators receiving system mails
                $db = JFactory::getDBO();
                $q = "SELECT id
				FROM #__users
				WHERE block = 0
				AND sendEmail = 1";
                $db->setQuery($q);
                $sendEmail = $db->loadResultArray();
                if (count($sendEmail) > 0) {
                    $jdate = new JDate();
                    // Build the query to add the messages
                    $q = "INSERT INTO `#__messages` (`user_id_from`, `user_id_to`, `date_time`, `subject`, `message`)
					VALUES ";
                    $messages = array();
                    foreach ($sendEmail as $userid)
                    {
                        $messages[] = "(" . $userid . ", " . $userid . ", '" . $jdate->toMySQL() . "', '" . JText::_('COM_USERS_MAIL_SEND_FAILURE_SUBJECT') . "', '" . JText::sprintf('COM_USERS_MAIL_SEND_FAILURE_BODY', $return, $data['username']) . "')";
                    }
                    $q .= implode(',', $messages);
                    $db->setQuery($q);
                    $db->query();
                }
                return false;
            }
         //SC16
    }
}
