<?php
defined('_JEXEC') or die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_ConfigHTML {
 	
	public static function mailSettings($lists) {

	?>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_MAIL_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_MAILSENDMETHOD ;
					$tip = _JNEWS_MAILSENDMETHOD_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['mailermethod']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SEND_MAIL_NAME;
					$tip = _JNEWS_SEND_MAIL_NAME_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['sendmail_name']" size="50" value="<?php echo $GLOBALS[JNEWS.'sendmail_name']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SEND_MAIL_EMAIL;
					$tip = _JNEWS_SEND_MAIL_EMAIL_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php $sendmail_email = ( !empty($GLOBALS[JNEWS.'sendmail_email']) ? $GLOBALS[JNEWS.'sendmail_email'] : ''); ?>
				<input class="inputbox" type="text" name="config['sendmail_email']" size="50" value="<?php echo $sendmail_email; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SEND_MAIL_FROM ;
					$tip = _JNEWS_SEND_MAIL_FROM_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['sendmail_from']" size="50" value="<?php echo $GLOBALS[JNEWS.'sendmail_from']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SENDMAILPATH ;
					$tip = _JNEWS_SENDMAILPATH_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['sendmail_path']" size="50" value="<?php echo $GLOBALS[JNEWS.'sendmail_path']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_MINISENDMAIL ;
					$tip = _JNEWS_MINISENDMAIL_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['minisendmail']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title =_JNEWS_SMTPHOST;
					$tip = _JNEWS_SMTPHOST . ' mail.yoursite.com' ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['smtp_host']" size="50" value="<?php echo $GLOBALS[JNEWS.'smtp_host']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title =_JNEWS_SMTPPORT;
					$tip = _JNEWS_SMTPPORT . ' 25' ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['smtp_port']" size="50" value="<?php echo $GLOBALS[JNEWS.'smtp_port']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SMTPSECURE;
					$tip = _JNEWS_SMTPSECURE_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['smtp_secure']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SMTPAUTHREQUIRED;
					$tip = _JNEWS_SMTPAUTHREQUIRED_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['auth_required']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SMTPUSERNAME;
					$tip = _JNEWS_SMTPUSERNAME_TIPS ;
					echo jNews_Tools::toolTip($tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['smtp_username']" size="50" value="<?php echo $GLOBALS[JNEWS.'smtp_username']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SMTPPASSWORD;
					$tip = _JNEWS_SMTPPASSWORD_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="password" name="config['smtp_password']" size="50" value="<?php echo $GLOBALS[JNEWS.'smtp_password']; ?>">
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_MAILINGS_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_MAIL_FORMAT;
					$tip = _JNEWS_MAIL_FORMAT_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php
				 echo $lists['mail_format'];
				 ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_MAIL_ENCODING;
					$tip = _JNEWS_MAIL_ENCODING_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php
				 echo $lists['mail_encoding'];
				 ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_USE_EMBEDDED;
					$tip = _JNEWS_USE_EMBEDDED_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php
				 echo $lists['embed_images'];
				 ?>
			</td>

		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_UPLOAD_PATH;
					$tip = _JNEWS_UPLOAD_PATH_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['upload_url']" size="50" value="<?php echo $GLOBALS[JNEWS.'upload_url']; ?>">
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
		<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_SENDING_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
			<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_FORCED_HTML;
					$tip = _JNEWS_FORCED_HTML_TIP;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['forced_html']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_PAUSEX_TIPS;
					$title = _JNEWS_PAUSEX;
					echo jNews_Tools::toolTip($tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['pause_time']" size="50" value="<?php echo $GLOBALS[JNEWS.'pause_time']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_EMAIL_BET_PAUSE_TIPS ;
					$title = _JNEWS_EMAIL_BET_PAUSE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['emails_between_pauses']" size="50" value="<?php echo $GLOBALS[JNEWS.'emails_between_pauses']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_WAIT_USER_PAUSE;
					$tip = _JNEWS_WAIT_USER_PAUSE_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['wait_for_user']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SCRIPT_TIMEOUT;
					$tip = _JNEWS_SCRIPT_TIMEOUT_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['script_timeout']" size="50" value="<?php echo $GLOBALS[JNEWS.'script_timeout']; ?>">
			</td>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_TIME_OFFSET_TIPS ;
					$title = _JNEWS_TIME_OFFSET;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<a href="index.php?option=com_config&hidemainmenu=1"><?php echo _JNEWS_TIME_OFFSET_URL; ?></a>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<?php
	}
	public static function subcriberSettings($lists) {
	?>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_SUBCRIBERS_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_ALLOW_UNREG_TIPS ;
					$title = _JNEWS_ALLOW_UNREG;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['allow_unregistered']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_REQ_CONFIRM_TIPS;
					$title = _JNEWS_REQ_CONFIRM;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['require_confirmation']; ?>
			</td>
		</tr>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_UNSUBSLINK_TIP;
					$title ='Show Unsubscribe Link';
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_unsubscribelink']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_CHANGESUBSLINK_TIP;
					$title ='Show Subscription Link';
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_subscriptionlink']; ?>
			</td>
		</tr>	
		<?php if ( $GLOBALS[JNEWS.'level'] > 2 ) {	?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SUBSCRIBE_NOTIFICATION;
					$tip = _JNEWS_SUBSCRIBE_NOTIFICATION_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['subscribe_notification']" size="35" value="<?php echo (string)$GLOBALS[JNEWS.'subscribe_notification']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_UNSUBSCRIBE_NOTIFICATION;
					$tip = _JNEWS_UNSUBSCRIBE_NOTIFICATION_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['unsubscribe_notification']" size="35" value="<?php echo (string)$GLOBALS[JNEWS.'unsubscribe_notification']; ?>">
			</td>
		</tr>
		<?php }	?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_CONFIRMFROMNAME;
					$tip = _JNEWS_CONFIRMFROMNAME_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['confirm_fromname']" size="35" value="<?php echo $GLOBALS[JNEWS.'confirm_fromname']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_CONFIRMFROMEMAIL;
					$tip = _JNEWS_CONFIRMFROMEMAIL_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['confirm_fromemail']" size="35" value="<?php echo $GLOBALS[JNEWS.'confirm_fromemail']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_HTML_CONFIRM_TIPS;
					$title =_JNEWS_HTML_CONFIRM;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['confirm_html']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip =  _JNEWS_SUB_REDIRECT_URL_TIPS;
					$title = _JNEWS_SUB_REDIRECT_URL;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['subs_redirect_url']" size="45" value="<?php echo (string)$GLOBALS[JNEWS.'subs_redirect_url'];?>">
			</td>
		</tr>		
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_REDIRECTCONFIRMATION_TIPS;
					$title = _JNEWS_REDIRECTCONFIRMATION;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['redirectconfirm']" size="45" value="<?php echo (string)$GLOBALS[JNEWS.'redirectconfirm'];?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_TIME_ZONE_TIPS;
					$title =_JNEWS_TIME_ZONE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['time_zone']; ?>
			</td>
		</tr>

		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SUB_INFO_FIELDS_TIPS;
					$title = _JNEWS_SUB_INFO_FIELDS;;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['sub_info_fields']; ?>
			</td>
		</tr>

		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip =  _JNEWS_PRIORD_LISTTYPE_TIPS;
					$title = _JNEWS_PRIORD_LISTTYPE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['priord_list']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip =  _JNEWS_PRIORD_SUBS_TIPS;
					$title = _JNEWS_PRIORD_SUBS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['priord_subs']; ?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_FRONTEND_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SHOW_ARCHIVE_TIPS;
					$title = _JNEWS_SHOW_ARCHIVE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_archive']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_ARCHIVE_LINK_TIPS;
					$title = _JNEWS_ARCHIVE_LINK;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['archive_link']; ?>
			</td>
		</tr>
	   <?php 
	   if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
	   if( class_exists('jNews_Social') ) { ?>
	   	<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_USE_BACKENDVIEW_TIPS;
					$title = _JNEWS_USE_BACKENDVIEW;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['use_backendview']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_CREATE_NEWSUBS_TIPS;
					$title = _JNEWS_CREATE_NEWSUBS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['create_newsubsrows']" size="5" value="<?php echo $GLOBALS[JNEWS.'create_newsubsrows'];?>"><span>&nbsp;<?php echo _JNEWS_ROWS; ?></span>
			</td>
		</tr>
		<?php
 } 
	   } ?>
		<!--Mary for subscription through url/captcha-->
		<?php if($GLOBALS[JNEWS.'level'] > 1 && isset($lists['enable_captcha']) ){//check if version is plus or pro
		?>
		<!--<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_ENABLE_CAPTCHA_TIPS;
					$title = _JNEWS_ENABLE_CAPTCHA;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['enable_captcha']; ?>
			</td>
		</tr>
		--><tr>
			<!--<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_CAPTCHAW_TIPS;
					$title = _JNEWS_CAPTCHAW;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['captcha_width']" size="10" value="<?php echo $GLOBALS[JNEWS.'captcha_width']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_CAPTCHAH_TIPS;
					$title = _JNEWS_CAPTCHAH;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['captcha_height']" size="10" value="<?php echo $GLOBALS[JNEWS.'captcha_height']; ?>">
			</td>
		</tr>-->
		<?php }
		?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_NEW_URL_PASS_TIPS;
					$title = _JNEWS_URL_PASS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['url_pass']" size="20" value="<?php echo $GLOBALS[JNEWS.'url_pass']; ?>"><span style=" color: rgb(255, 0, 0); font-weight: bold;"><?php echo ' '. _JNEWS_URL_PASS_WARN;?></span>
			</td>
		</tr>
		<!--url-->

		<!--<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SHOW_TERMS;
					$tip = _JNEWS_SHOW_TERMS_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_terms']; ?>
			</td>
		</tr>-->

		<!--<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_CHECK_TERMS;
					$tip = _JNEWS_CHECK_TERMS_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['check_terms']; ?>
			</td>
		</tr>-->

		<?php if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
			if( class_exists('jNews_Social') ) { ?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
					<?php
						$tip = _JNEWS_LIST_CREATORFE_TIPS;
						$title = _JNEWS_LIST_CREATORFE;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
				</span>
			</td>
			<td>
			 <span style="font-weight: bold; text-align:left;"><?php echo _JNEWS_LIST_CREATORFE_WARN ;?></span>
			   <fieldset style="width:200px">
				<?php echo $lists['list_creatorfe'];?>
				</fieldset>
			</td>
		</tr>
		<?php }
		}
		?>
		</tbody>
	</table>
	</fieldset>
	<?php
	}
	
	public static function cronSettings($lists) {
	?>
	
	
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_SCHEDULE_TITLE; ?></legend>
	<table class="jnewstable" cellspacing="1" width="100%" >
		<tbody>
			<tr>
				<td width="185" class="key">
					<span>
						<?php
							echo jNews_Tools::toolTip( _JNEWS_CRON_TRIGGERRED_TIPS, '', 280, 'tooltip.png', _JNEWS_CRON_TRIGGERRED, '', 0 );
						?>
					</span>
				</td>
				<td>
					<?php
						if ( $GLOBALS[JNEWS.'lasttime_cron_triggerred']  > 0 ) {
							echo date('l, j F Y H:i:s', jnews::getNow( 0, true, $GLOBALS[JNEWS.'lasttime_cron_triggerred'] ) );
						}
					?>
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span>
						<?php
							echo jNews_Tools::toolTip( _JNEWS_CRON_NEXTTRIGGER_TIPS, '', 280, 'tooltip.png', _JNEWS_CRON_NEXTTRIGGER, '', 0 );
						?>
					</span>
				</td>
				<td>
					<?php
						if ( $GLOBALS[JNEWS.'next_cron']  > 0 ) {
//							$next_cronTime = $GLOBALS[JNEWS.'next_cron'] - jnews::calculateOffset(JNEWS_TIME_OFFSET);
//							echo date('l, j F Y H:i:s', $next_cronTime );
							echo date('l, j F Y H:i:s', jnews::getNow( 0, true, $GLOBALS[JNEWS.'next_cron'] ) );
						}
					?>
				</td>
			</tr>

				<tr>
					<td width="185" class="key">
						<span>
							<?php
								echo jNews_Tools::toolTip( _JNEWS_JOOBI_CRON_TIPS, '', 280, 'tooltip.png', _JNEWS_JOOBI_CRON, '', 0 );
							?>
						</span>
					</td>
					<td>
						<?php
							echo $lists['j_cron'];
						?>
					</td>
				</tr>
				<tr>
					<td width="185" class="key">
						<span>
							<?php
								echo jNews_Tools::toolTip( _JNEWS_JNEWS_CRON_TIPS, '', 280, 'tooltip.png', _JNEWS_JNEWS_CRON, '', 0 );
							?>
						</span>
					</td>
					<td>
						<?php
							//we get here if the jnews cron system plugin is published or not
							$db = JFactory::getDBO();
							if( version_compare(JVERSION,'1.6.0','>=') ){ //j16
								$query = 'SELECT `enabled` FROM `#__extensions` WHERE `element`="jnewscron"';
							}else{
								$query = 'SELECT `published` FROM `#__plugins` WHERE `element`="jnewscron"';
							}
							$db->setQuery($query);
							$db->query();
							$value = $db->loadResult();
//							
//							if($GLOBALS[JNEWS.'j_cron'] == 2) $value = 1;
//							else $value = 0;
							
							echo JHTML::_('select.booleanlist', 'config[jnewscronplugin]' , 'class="inputbox"', $value );
						?>
					</td>
				</tr>
				<tr>
					<td width="185" class="key">
						<span>
							<?php
								echo jNews_Tools::toolTip( _JNEWS_YOUR_CRON, '', 280, 'tooltip.png', _JNEWS_YOUR_CRON, '', 0 );
							?>
						</span>
					</td>
				
					<td>
					<?php

					//Cron System
					$cron = @$GLOBALS[JNEWS.'j_cron'];

					switch($cron){

						case '0': //No Cron
							break;

						case '1': //jNews Cron System Plugin
						case ('3'): //External Cron
						case ('2'): //Joobi Cron
							$url = JNEWS_JPATH_LIVE.'/index.php?option='.JNEWS_OPTION.'&act=cron&tmpl=component';
//							echo _JNEWS_YOUR_CRON;
//							echo '<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $url . '</b>';
							echo '<b>' . $url . '</b>';
							echo '<br /><b><big>';
						?><a href="<?php echo $url;?>" TARGET="_NEW">
						<?php echo _JNEWS_LAUNCH_CRON; ?></a>
						<?php
							echo '</big></b>';
						
						break;

						default: //No Cron
						break;
					}?>
					</td>
				</tr>
		</tbody>
	</table>
	</fieldset>
	
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_SCHEDULE_FREQUENCY; ?></legend>
	<table class="jnewstable" cellspacing="1" width="100%" >
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_CRON_MAX_FREQ_TIPS;
					$title = _JNEWS_CRON_MAX_FREQ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['cron_max_freq']" size="5" value="<?php echo $GLOBALS[JNEWS.'cron_max_freq']; ?>">
				<?php echo _JNEWS_CRON_MINUTES ; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_CRON_MAX_EMAIL_TIPS;
					$title = _JNEWS_CRON_MAX_EMAIL;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['cron_max_emails']" size="5" value="<?php echo $GLOBALS[JNEWS.'cron_max_emails']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					echo jNews_Tools::toolTip( 'Maximum number of attempts to send the queue', '', 280, 'tooltip.png', 'Maximum number of attempts', '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['max_attempts']" size="20" value="<?php echo $GLOBALS[JNEWS.'max_attempts']; ?>">
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<!--Queue Settings-->
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_QUEUE_SETTING; ?></legend>
	<table class="jnewstable" cellspacing="1" width="100%" >
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_QUEUESTATS_TIPS;
					$title = _JNEWS_QUEUE_STATUS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['queue_status']; ?>
			</td>
			</tr>
				<!--Smart Queue-->
			<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SMARTQ_TIPS;
					$title = _JNEWS_SMARTQUEUE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['smart_queue']; ?>
			</td>
			</tr>
		</tbody>
	</table>
	</fieldset>
	<?php
		if (class_exists('jNews_Pro')) {
		  ?>
			<fieldset class="jnewscss">
			<legend><?php echo _JNEWS_MAINTENANCE_TAB; ?></legend>
			<table class="jnewstable" cellspacing="1" width="100%" >
				<tbody>
				<tr>
					<td width="185" class="key">
						<span class="editlinktip">
						<?php

							$tip = _JNEWS_MAINTENANCE_FREQ_TIPS;
							$title = _JNEWS_MAINTENANCE_FREQ;
							echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
						?>
						</span>
					</td>
					<td>
						<input class="inputbox" type="text" name="config['maintenance_clear']" size="5" value="<?php echo $GLOBALS[JNEWS.'maintenance_clear']; ?>">
						<?php echo _JNEWS_CRON_DAYS ; ?>
					</td>
				</tr>
				<tr>
					<td width="185" class="key">
						<span class="editlinktip">
						<?php
							echo jNews_Tools::toolTip( 'The system will automatically delete statistics older than the specified value', '', 280, 'tooltip.png', 'Clean Statistics', '', 0 );
						?>
						</span>
					</td>
					<td>
						<input class="inputbox" type="text" name="config['clean_stats']" size="5" value="<?php echo $GLOBALS[JNEWS.'clean_stats']; ?>">
						<?php echo 'days' ; ?>
					</td>
				</tr>
				</tbody>
			</table>
			</fieldset>
			<?php
		}
	}
	public static function logsSettings($lists) {
	?>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_STATS_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
		<!--<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_ENABLE_READ_STATS_TIPS ;
					$title = _JNEWS_ENABLE_READ_STATS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['enable_statistics']; ?>
			</td>
		</tr>-->
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_ENABLE_READ_STATS_TIPS ;
					$title = _JNEWS_ENABLE_READ_STATS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['enable_statistics']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_LOG_VIEWSPERSUB_TIPS ;
					$title = _JNEWS_LOG_VIEWSPERSUB;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['statistics_per_subscriber']; ?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_LOGS_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SEND_LOG_TO_TIPS;
					$title = _JNEWS_SEND_LOG_TO;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['send_log_email']" size="50" value="<?php echo $GLOBALS[JNEWS.'send_log_email']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_DISPLAY_LOG_TIPS;
					$title = _JNEWS_DIAPLAY_LOG;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['display_trace']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SEND_PERF_DATA_TIPS;
					$title = _JNEWS_SEND_PERF_DATA;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['send_data']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SEND_LOG_TIPS ;
					$title = _JNEWS_SEND_LOG;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['send_log']; ?>
			</td>
		</tr>
		<?php
		if ( class_exists('jNews_Auto') ) {
		?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SEND_AUTO_LOG_TIPS ;
					$title = _JNEWS_SEND_AUTO_LOG;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['send_auto_log']; ?>
			</td>
		</tr>
		<?php }  ?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SEND_LOGDETAIL;
					$tip = _JNEWS_SEND_LOGDETAIL_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['send_log_simple']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SEND_LOGCLOSED;
					$tip = _JNEWS_SEND_LOGCLOSED_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['send_log_closed']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SAVE_LOG;
					$tip = _JNEWS_SAVE_LOG_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['save_log']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SAVE_LOGDETAIL_TIPS ;
					$title =_JNEWS_SAVE_LOGDETAIL;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['save_log_simple']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SAVE_LOGFILE_TIPS ;
					$title =_JNEWS_SAVE_LOGFILE;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['save_log_file']" size="50" value="<?php echo $GLOBALS[JNEWS.'save_log_file']; ?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_CLEAR_LOG_TIPS ;
					$title =_JNEWS_CLEAR_LOG;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['clear_log']; ?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<?php
	}
	public static function miscSettings($lists) {
	?>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_MISC_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
	<!--	<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SHOW_GUIDE;
					$tip = _JNEWS_SHOW_GUIDE_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_guide']; ?>
			</td>
		</tr> -->
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SHOW_TIPS;
					$tip = _JNEWS_SHOW_TIPS_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_tips']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_ITEMID;
					$tip = _JNEWS_ITEMID_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['itemidAca']" size="5" value="<?php echo $GLOBALS[JNEWS.'itemidAca'];?>">
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_DISABLETOOLTIP ;
					$tip = _JNEWS_DISABLETOOLTIP_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png',  $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['disabletooltip']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					echo jNews_Tools::toolTip( 'If your Joomla article does not have a read more link, jNews will consider the introduction of your article as the first X characters of the full article. <br/> If you specify the value 0, jNews will take the full article', '', 280, 'tooltip.png', 'Article introduction', '', 0 );
				?>
				</span>
			</td>
			<td>
				<input class="inputbox" type="text" name="config['word_wrap']" size="10" value="<?php echo $GLOBALS[JNEWS.'word_wrap']; ?>">
			</td>
		</tr>
		<?php
		if( ( ($GLOBALS[JNEWS.'level'] > 2) ) || class_exists('jNews_Social') ) {
		?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = 'This option is to choose whether to place directly the content in the newsletter or to use the tags first.' ;
					$title = 'Use Content Tags';
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['use_tags']; ?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SHOW_LISTS_TIPS ;
					$title = _JNEWS_SHOW_LISTS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_lists']; ?>
			</td>
		</tr>
			</tr>
		<?php
		if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
		if( class_exists('jNews_Social') && !empty($lists['use_masterlists']) ) {
		?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_USE_MASTERLISTS_TIPS ;
					$title = _JNEWS_USE_MASTERLISTS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['use_masterlists']; ?>
			</td>
		</tr>
		<?php 
		}
		}
		 ?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_USE_SEF;
					$tip = _JNEWS_USE_SEF_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['use_sef']; ?>
			</td>
		</tr>
		<?php
		if ( class_exists('jNews_Auto') ) jNews_Auto::miscSettings($lists);
		?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_SHOW_FOOTER_TIPS ;
					$title = _JNEWS_SHOW_FOOTER;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_footer']; ?>
			</td>
		</tr>
				<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SHOW_AUTHOR;
					$tip = _JNEWS_SHOW_AUTHOR_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_author']; ?>
			</td>
		</tr>
		<?php if(class_exists('jNews_Pro')){ ?>
				<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SHOW_JCALPRO;
					$tip = _JNEWS_SHOW_JCALPRO_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_jcalpro']; ?>
			</td>
		</tr>
			<?php } if ( $GLOBALS[JNEWS.'level'] > 1 ) { ?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SHOW_JLINKS;
					$tip = _JNEWS_SHOW_JLINKS_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_jlinks']; ?>
			</td>
		</tr>
		<?php } if($GLOBALS[JNEWS.'level'] > 2) {
			if( JFolder::exists(JNEWS_JPATH_ROOT_NO_ADMIN . DS . 'administrator' . DS . 'components' . DS . 'com_jsubscription' )
				|| JFolder::exists(JNEWS_JPATH_ROOT_NO_ADMIN . DS . 'components' . DS . 'com_jsubscription' )){ ?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_JSUB;
					$tip = _JNEWS_JSUB_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['enable_jsub']; ?>
			</td>
		</tr>
		<?php } }?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_ADDEMAILREDLINK;
					$tip = _JNEWS_ADDEMAILREDLINK_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['addEmailRedLink']; ?>
			</td>
		</tr>
		<?php
//		if ( $GLOBALS[JNEWS.'level'] > 1 ) {
		?>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						$tip = _JNEWS_SHOW_SIGNATURE_TIPS ;
						$title = _JNEWS_SHOW_SIGNATURE;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['show_signature']; ?>
				</td>
			</tr>
		<?php
//		}
		?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_LISTS_EDITOR_TIPS ;
					$title = _JNEWS_LISTS_EDITOR;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['listHTMLeditor']; ?>
			</td>
		</tr>
		<?php if($GLOBALS[JNEWS.'level'] > 2) { ?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_ALLOW_SN;
					$tip = _JNEWS_ALLOW_SN_TIP ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['allow_sn']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_ALLOW_FE_AUTORESPONDERS;
					$tip = _JNEWS_ALLOW_FE_AUTORESPONDERS_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['allow_fe_autoresponder']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_SNTAG_NO_REQUIRED;
					$tip = _JNEWS_SNTAG_NO_REQUIRED_TIP ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['sntag_norequired'];
				 ?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_UNSUBSCRIBE_ALL_CAPTION;
					$tip = _JNEWS_UNSUBSCRIBE_ALL_CAPTION_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['show_unsubscribe_all'];
				 ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_COMPONENT_THEME;
					$tip = _JNEWS_COMPONENT_THEME_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['component_theme']; ?>
			</td>
		</tr>
		
		</tbody>
	</table>
	</fieldset>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_ERR_SETTINGS; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = 'Full check Email address';
					$tip = 'Check the domain name of the e-mail address during the send process and remove the e-mail from the queue is the e-mail address is not valid' ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['fullcheck']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_ERR_SHOW;
					$tip = _JNEWS_ERR_SHOW_TIPS ;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['report_error']; ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$title = _JNEWS_ERR_SEND;
					$tip = _JNEWS_ERR_SEND_TIPS;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<?php echo $lists['send_error']; ?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>

	<!--mary columns config-->
	<?php if($GLOBALS[JNEWS.'level'] > 2){//check if the version of jnews is 5.0.2
	?>
	<fieldset class="jnewscss">
		<legend><?php echo _JNEWS_COLUMN; ?></legend>
		<table class="jnewstable" cellspacing="1">
		<tbody>
			<tr><!--column1-->
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						$title =_JNEWS_COLUMN_SHOW . '1';
						$tip = _JNEWS_SHOW_COLUMN_TIPS ;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['show_column1']; ?>
				</td>
				<!--end of column1-->
			</tr>
			<tr>
			<!--column1 name-->
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						echo jNews_Tools::toolTip( 'Enter the alias name of column 1 to be shown in the subscribers module', '', 280, 'tooltip.png', _JNEWS_COL1_NAME, '', 0 );
					?>
					</span>
				</td>
				<td>
					<input class="inputbox" type="text" name="config['column1_name']" size="20" value="<?php echo $GLOBALS[JNEWS.'column1_name']; ?>">
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						$title =_JNEWS_COLUMN_SHOW . '2';
						$tip = _JNEWS_SHOW_COLUMN_TIPS ;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['show_column2']; ?>
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						echo jNews_Tools::toolTip( 'Enter the alias name of column 2 to be shown in the subscribers module', '', 280, 'tooltip.png', _JNEWS_COL2_NAME, '', 0 );
					?>
					</span>
				</td>
				<td>
					<input class="inputbox" type="text" name="config['column2_name']" size="20" value="<?php echo $GLOBALS[JNEWS.'column2_name']; ?>">
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						$title =_JNEWS_COLUMN_SHOW . '3';
						$tip = _JNEWS_SHOW_COLUMN_TIPS ;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['show_column3']; ?>
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						echo jNews_Tools::toolTip( 'Enter the alias name of column 3 to be shown in the subscribers module', '', 280, 'tooltip.png', _JNEWS_COL3_NAME, '', 0 );
					?>
					</span>
				</td>
				<td>
					<input class="inputbox" type="text" name="config['column3_name']" size="20" value="<?php echo $GLOBALS[JNEWS.'column3_name']; ?>">
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						$title =_JNEWS_COLUMN_SHOW . '4';
						$tip = _JNEWS_SHOW_COLUMN_TIPS ;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['show_column4']; ?>
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						echo jNews_Tools::toolTip( 'Enter the alias name of column 4 to be shown in the subscribers module', '', 280, 'tooltip.png', _JNEWS_COL4_NAME, '', 0 );
					?>
					</span>
				</td>
				<td>
					<input class="inputbox" type="text" name="config['column4_name']" size="20" value="<?php echo $GLOBALS[JNEWS.'column4_name']; ?>">
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						$title =_JNEWS_COLUMN_SHOW . '5';
						$tip = _JNEWS_SHOW_COLUMN_TIPS ;
						echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
					?>
					</span>
				</td>
				<td>
					<?php echo $lists['show_column5']; ?>
				</td>
			</tr>
			<tr>
				<td width="185" class="key">
					<span class="editlinktip">
					<?php
						echo jNews_Tools::toolTip( 'Enter the alias name of column 5 to be shown in the subscribers module', '', 280, 'tooltip.png', _JNEWS_COL5_NAME, '', 0 );
					?>
					</span>
				</td>
				<td>
					<input class="inputbox" type="text" name="config['column5_name']" size="20" value="<?php echo $GLOBALS[JNEWS.'column5_name']; ?>">
				</td>
			</tr>
			<!--end columns name-->
			</tbody>
		</table>
	</fieldset>
	<?php }
	?>
	<!--end columns config mary-->
	<?php
	}
	public static function queueSettings($lists) {
	?>
	<fieldset class="jnewscss">
		<legend><?php echo _JNEWS_CRON_FSETTINGS ?></legend>
		<table class="jnewstable" cellspacing="1">
			<tbody>
				<tr>
					<td width="185" class="key">
						<span>
							<?php
								echo jNews_Tools::toolTip( _JNEWS_SHOW_CRON_TIPS, '', 280, 'tooltip.png', _JNEWS_SHOW_CRON, '', 0 );
							?>
						</span>
					</td>
					<td>
						<?php echo $lists['j_cron'];
						if($GLOBALS[JNEWS.'j_cron']==1){
							$img = '16/status_g.png';
							$alt = 'Published';
						}else{
							$img = '16/status_r.png';
							$alt = 'Unpublished';
						}?>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<?php echo _JNEWS_YOUR_CRON;
						echo '<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . JNEWS_JPATH_LIVE . '/index.php?option='.JNEWS_OPTION.'&act=cron</b> ';

						if($GLOBALS[JNEWS.'j_cron']){
							$alink=JNEWS_JPATH_LIVE . '/index.php?option='.JNEWS_OPTION.'&act=cron';
						}else{
							$alink='#';
						}

						?><?if($GLOBALS[JNEWS.'j_cron']){
				?>
						<a href="<?php echo $alink;?>" TARGET="_NEW">
						<?php echo _JNEWS_LAUNCH_CRON; ?></a>
					</td>
				</tr>
				<?}
				?>
			</tbody>
		</table>
	</fieldset>
	<!--<fieldset class="jnewscss">
		<legend><?php //echo _JNEWS_Q_PROCESS ?></legend>
			<table class="jnewstable" cellspacing="1">
				<tbody>
					<tr>
						<td width="185" class="key">
							<span class="editlinktip">
							<?php
								//echo jNews_Tools::toolTip( 'Enter the maximum number of emails to be processed per batch', '', 280, 'tooltip.png', _JNEWS_MAX_Q, '', 0 );
							?>
							</span>
						</td>
						<td>
							<input class="inputbox" type="text" name="config['max_queue']" size="20" value="<?php echo $GLOBALS[JNEWS.'max_queue']; ?>">
						</td>
					</tr>
					<tr>
						<td width="185" class="key">
							<span class="editlinktip">
							<?php
								//echo jNews_Tools::toolTip( 'Maximum number of attempts to send the queue', '', 280, 'tooltip.png', 'Maximum number of attempts', '', 0 );
							?>
							</span>
						</td>
						<td>
							<input class="inputbox" type="text" name="config['max_attempts']" size="20" value="<?php echo $GLOBALS[JNEWS.'max_attempts']; ?>">
						</td>
					</tr>
				</tbody>
			</table>

	</fieldset>
	-->
	<!--
	<fieldset class="jnewscss">
		<legend><?php //echo 'Newsletter Priority' ?></legend>
			<table class="jnewstable" cellspacing="1">
				<tbody>
					<tr>
						<td width="185" class="key">
							<span class="editlinktip">
							<?php
								//echo jNews_Tools::toolTip( 'Choose the priority for scheduled Newsletters', '', 280, 'tooltip.png', 'Scheduled Newsletter', '', 0 );
							?>
							</span>
						</td>
						<td>
							<?php //echo $lists['sched_prior']; ?>
						</td>
					</tr>
					<tr>
						<td width="185" class="key">
							<span class="editlinktip">
							<?php
								//echo jNews_Tools::toolTip( 'Choose the priority for auto-responders', '', 280, 'tooltip.png', 'Auto-responder', '', 0 );
							?>
							</span>
						</td>
						<td>
							<?php //echo $lists['ar_prior']; ?>
						</td>
					</tr>
					<tr>
						<td width="185" class="key">
							<span class="editlinktip">
							<?php
								//echo jNews_Tools::toolTip( 'Choose the priority for smart-newsletters', '', 280, 'tooltip.png', 'Smart-Newsletter', '', 0 );
							?>
							</span>
						</td>
						<td>
							<?php //echo $lists['sm_prior']; ?>
						</td>
					</tr>
				</tbody>
			</table>

	</fieldset>-->
	<!--end queueSettings-->
	<?php
}

	public static function cbSettings() {
			 $lists['cb_plugin'] = JHTML::_('select.booleanlist', "config['cb_plugin']" , 'class="inputbox"', $GLOBALS[JNEWS.'cb_plugin'] );
			 $lists['cb_showname'] = JHTML::_('select.booleanlist', "config['cb_showname']" , 'class="inputbox"', $GLOBALS[JNEWS.'cb_showname'] );
			 $lists['cb_checkLists'] = JHTML::_('select.booleanlist', "config['cb_checkLists']" , 'class="inputbox"', $GLOBALS[JNEWS.'cb_checkLists'] );
			 $lists['cb_showHTML'] = JHTML::_('select.booleanlist', "config['cb_showHTML']" , 'class="inputbox"', $GLOBALS[JNEWS.'cb_showHTML'] );
			 $lists['cb_defaultHTML'] = JHTML::_('select.booleanlist', "config['cb_defaultHTML']" , 'class="inputbox"', $GLOBALS[JNEWS.'cb_defaultHTML'] );

		?>
		<fieldset class="jnewscss">
		<legend><?php echo _JNEWS_CB_INTEGRATION; ?></legend>
		<?php
		jnews::beginingOfTable('jnewstable');
		if ($GLOBALS[JNEWS.'cb_pluginInstalled']==0) {
			if (!jnews::checkCBPlugin()) {
				 jnews::miseEnPage(jnews::WarningIcon( _JNEWS_CB_PLUGIN_NOT_INSTALLED ), ' ' , '<span style="color: rgb(255, 0, 0);">'._JNEWS_CB_PLUGIN_NOT_INSTALLED.'</span>' );
			}
		}
		 jnews::miseEnPage(_JNEWS_CB_PLUGIN, _JNEWS_CB_PLUGIN_TIPS , $lists['cb_plugin']);
		 jnews::miseEnPage(_JNEWS_CB_LISTS, _JNEWS_CB_LISTS_TIPS , "<input class=\"inputbox\" type=\"text\" name=\"config['cb_listIds']\" size=\"30\" value=\"". $GLOBALS[JNEWS.'cb_listIds']."\" >" );
		 jnews::miseEnPage(_JNEWS_CB_INTRO, _JNEWS_CB_INTRO_TIPS , "<textarea  name=\"config['cb_intro']\" rows=\"3\" cols=\"40\" >". $GLOBALS[JNEWS.'cb_intro']."</textarea>" );
		 jnews::miseEnPage(_JNEWS_CB_SHOW_NAME, _JNEWS_CB_SHOW_NAME_TIPS , $lists['cb_showname']);
		 jnews::miseEnPage(_JNEWS_CB_LIST_DEFAULT, _JNEWS_CB_LIST_DEFAULT_TIPS , $lists['cb_checkLists']);
		 jnews::miseEnPage(_JNEWS_CB_HTML_SHOW, _JNEWS_CB_HTML_SHOW_TIPS , $lists['cb_showHTML']);
		 jnews::miseEnPage(_JNEWS_CB_HTML_DEFAULT, _JNEWS_CB_HTML_DEFAULT_TIPS , $lists['cb_defaultHTML']);
		 jnews::endOfTable();
		echo '</fieldset>';
	}
	
	 public static function showConfigEdit() {

			$mailOpt = array();
			 $mailOpt[] = JHTML::_('select.option', 'mail' , 'PHP mail function' );
			 $mailOpt[] = JHTML::_('select.option','sendmail' ,  'Sendmail');
			 $mailOpt[] = JHTML::_('select.option', 'smtp' , 'SMTP Server');
			 $logFormat = array();
			 $logFormat[] = JHTML::_('select.option', '0' , _JNEWS_DETAILED );
			 $logFormat[] = JHTML::_('select.option', '1' , _JNEWS_SIMPLE );
			$themeOption = array();
			 $themeOption[] = JHTML::_('select.option', 'joobilist' , 'jNews Look' );
			 $themeOption[] = JHTML::_('select.option', 'adminlist' , 'Joomla look' );
			
			 $lists = array();
			 $lists['component_theme'] = JHTML::_('select.genericlist', $themeOption, "config['component_theme']" , 'class="inputbox" size="1"', 'value', 'text', jnews::myTheme() );
			 
			 $lists['mailermethod'] = JHTML::_('select.genericlist', $mailOpt, "config['emailmethod']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'emailmethod'] );
			$lists['send_log_simple'] = JHTML::_('select.genericlist', $logFormat, "config['send_log_simple']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'send_log_simple'] );
			$lists['save_log_simple'] = JHTML::_('select.genericlist', $logFormat, "config['save_log_simple']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'save_log_simple'] );

			 $mailSecure[] = JHTML::_('select.option', '' , '---' );
			 $mailSecure[] = JHTML::_('select.option','ssl' ,  'SSL');
			 $mailSecure[] = JHTML::_('select.option', 'tls' , 'TLS');
			 $lists['smtp_secure'] = JHTML::_('select.genericlist', $mailSecure, "config['smtp_secure']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'smtp_secure'] );
			 $lists['auth_required'] = JHTML::_('select.booleanlist', "config['smtp_auth_required']" , 'class="inputbox"', $GLOBALS[JNEWS.'smtp_auth_required'] );
			 $lists['allow_unregistered'] = JHTML::_('select.booleanlist', "config['allow_unregistered']" , 'class="inputbox"', $GLOBALS[JNEWS.'allow_unregistered'] );
			 $lists['require_confirmation'] = JHTML::_('select.booleanlist', "config['require_confirmation']" , 'class="inputbox"', $GLOBALS[JNEWS.'require_confirmation'] );

			 //These options are transfered from lists to configuration
			 $lists['show_unsubscribelink'] = JHTML::_('select.booleanlist', "config['show_unsubscribelink']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_unsubscribelink'] );
			 $lists['show_subscriptionlink'] = JHTML::_('select.booleanlist', "config['show_subscriptionlink']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_subscriptionlink'] );

			 //Queue Settings for queue status
			 $queuestatus=array();
			 $queuestatus[]=JHTML::_('select.option','1', _JNEWS_QUEUESTATS_ON );
			 $queuestatus[]=JHTML::_('select.option','0', _JNEWS_QUEUESTATS_OF );
			 $lists['queue_status'] = JHTML::_('select.radiolist', $queuestatus, "config['queue_status']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'queue_status'] );

			 $archiveLink = array();
			 $archiveLink[] = JHTML::_('select.option','standard', _JNEWS_ARCHIVELINK_STANDARD );
			 $archiveLink[] = JHTML::_('select.option','popup', _JNEWS_ARCHIVELINK_POPUP );
			 $archiveLink[] = JHTML::_('select.option','newpage', _JNEWS_ARCHIVELINK_PAGE );
			 $lists['archive_link'] = JHTML::_('select.radiolist', $archiveLink, "config['archive_link']" , 'class="inputbox" size="1"', 'value', 'text', @$GLOBALS[JNEWS.'archive_link'] );
			 
			 $joobicron=array();
			 $joobicron[]=JHTML::_('select.option','1', _JNEWS_JOOBICRON_NO);
			 $joobicron[]=JHTML::_('select.option','2', _JNEWS_JOOBICRON_YES);
			 
			 if($GLOBALS[JNEWS.'j_cron'] != 2) $GLOBALS[JNEWS.'j_cron'] = 1;//set to no
			 
			 $lists['j_cron'] = JHTML::_('select.radiolist', $joobicron, "config['j_cron']" , 'class="inputbox" size="1"', 'value', 'text', @$GLOBALS[JNEWS.'j_cron'] );

			 //Queue Settings for Queue Process
			 //$queueprocess=array();
			 //$queueprocess[]=JHTML::_('select.option','1', _JNEWS_QUEUESTATS_ON);
			 //$queueprocess[]=JHTML::_('select.option','0', _JNEWS_QUEUESTATS_OF);
			 //$lists['queue_process'] = JHTML::_('select.radiolist', $queueprocess, "config['queue_process']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'queue_process'] );

			 //Queue Settings for Smart Queue
			 $smartqueue=array();
			 $smartqueue[]=JHTML::_('select.option','1', _JNEWS_SMARTQ_ON);
			 $smartqueue[]=JHTML::_('select.option','0', _JNEWS_SMARTQ_OF);
			 $lists['smart_queue'] = JHTML::_('select.radiolist', $smartqueue, "config['smart_queue']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'smart_queue'] );

			 $lists['show_login'] = JHTML::_('select.booleanlist', "config['show_login']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_login'] );
			 $lists['show_logout'] = JHTML::_('select.booleanlist', "config['show_logout']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_logout'] );
			 $lists['confirm_html'] = JHTML::_('select.booleanlist', "config['confirm_html']" , 'class="inputbox"', $GLOBALS[JNEWS.'confirm_html'] );
			 $lists['time_zone'] = JHTML::_('select.booleanlist', "config['time_zone']" , 'class="inputbox"', $GLOBALS[JNEWS.'time_zone'] );
			 $lists['sub_info_fields'] = JHTML::_('select.booleanlist', "config['sub_info_fields']" , 'class="inputbox"', $GLOBALS[JNEWS.'sub_info_fields'] );
			 $lists['show_archive'] = JHTML::_('select.booleanlist', "config['show_archive']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_archive'] );
			 $lists['enable_statistics'] = JHTML::_('select.booleanlist', "config['enable_statistics']" , 'class="inputbox"', $GLOBALS[JNEWS.'enable_statistics'] );
			 $lists['statistics_per_subscriber'] = JHTML::_('select.booleanlist', "config['statistics_per_subscriber']" , 'class="inputbox"', $GLOBALS[JNEWS.'statistics_per_subscriber'] );

			 //Send only HTML Mailin
			 $lists['forced_html'] = JHTML::_('select.booleanlist', "config['forced_html']" , 'class="inputbox"', $GLOBALS[JNEWS.'forced_html'] );

			 $lists['wait_for_user'] = JHTML::_('select.booleanlist', "config['wait_for_user']" , 'class="inputbox"', $GLOBALS[JNEWS.'wait_for_user'] );
			 $lists['display_trace'] = JHTML::_('select.booleanlist', "config['display_trace']" , 'class="inputbox"', $GLOBALS[JNEWS.'display_trace'] );
			 $lists['send_data'] = JHTML::_('select.booleanlist', "config['send_data']" , 'class="inputbox"', $GLOBALS[JNEWS.'send_data'] );
			 $lists['send_auto_log'] = JHTML::_('select.booleanlist', "config['send_auto_log']" , 'class="inputbox"', $GLOBALS[JNEWS.'send_auto_log'] );
			 $lists['send_log'] = JHTML::_('select.booleanlist', "config['send_log']" , 'class="inputbox"', $GLOBALS[JNEWS.'send_log'] );
			 $lists['save_log'] = JHTML::_('select.booleanlist', "config['save_log']" , 'class="inputbox"', $GLOBALS[JNEWS.'save_log'] );
			 $lists['send_log_closed'] = JHTML::_('select.booleanlist', "config['send_log_closed']" , 'class="inputbox"', $GLOBALS[JNEWS.'send_log_closed'] );
			 $lists['clear_log'] = JHTML::_('select.booleanlist', "clear_log" , 'class="inputbox"', 0 );
			 $lists['show_footer'] = JHTML::_('select.booleanlist', "config['show_footer']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_footer'] );
			 $lists['show_jcalpro'] = JHTML::_('select.booleanlist', "config['show_jcalpro']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_jcalpro'] );
			 $lists['show_jlinks'] = JHTML::_('select.booleanlist', "config['show_jlinks']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_jlinks'] );
			// $lists['enable_jsub'] = JHTML::_('select.booleanlist', "config['enable_jsub']" , 'class="inputbox"', $GLOBALS[JNEWS.'enable_jsub'] );
			 $lists['allow_sn'] = JHTML::_('select.booleanlist', "config['allow_sn']" , 'class="inputbox"', $GLOBALS[JNEWS.'allow_sn'] );
			 
			 $lists['sntag_norequired'] = JHTML::_('select.booleanlist', "config['sntag_norequired']" , 'class="inputbox"', $GLOBALS[JNEWS.'sntag_norequired'] );
			 $lists['show_unsubscribe_all'] = JHTML::_('select.booleanlist', "config['show_unsubscribe_all']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_unsubscribe_all'] );
			 $lists['show_terms'] = JHTML::_('select.booleanlist', "config['show_terms']" , 'class="inputbox"', @$GLOBALS[JNEWS.'show_terms'] );
			 $lists['check_terms'] = JHTML::_('select.booleanlist', "config['check_terms']" , 'class="inputbox"', @$GLOBALS[JNEWS.'check_terms'] );
			 
			 //column1
			 $lists['show_column1'] = JHTML::_('select.booleanlist', "config['show_column1']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_column1'] );
			 $lists['show_column2'] = JHTML::_('select.booleanlist', "config['show_column2']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_column2'] );
			 $lists['show_column3'] = JHTML::_('select.booleanlist', "config['show_column3']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_column3'] );
			 $lists['show_column4'] = JHTML::_('select.booleanlist', "config['show_column4']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_column4'] );
			 $lists['show_column5'] = JHTML::_('select.booleanlist', "config['show_column5']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_column5'] );
			 //end of columns

			 //captcha
//			 $lists['enable_captcha'] = JHTML::_('select.booleanlist', "config['enable_captcha']" , 'class="inputbox"', $GLOBALS[JNEWS.'enable_captcha'] );

			 //$lists['use_cron_pass'] = JHTML::_('select.booleanlist', "config['use_cron_pass']" , 'class="inputbox"', $GLOBALS[JNEWS.'use_cron_pass'] );
			 $lists['show_signature'] = JHTML::_('select.booleanlist', "config['show_signature']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_signature'] );
			 $lists['show_lists'] = JHTML::_('select.booleanlist', "config['show_lists']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_lists'] );
			 $lists['embed_images'] = JHTML::_('select.booleanlist', "config['embed_images']" , 'class="inputbox"', $GLOBALS[JNEWS.'embed_images'] );
			  $lists['use_tags'] = JHTML::_('select.booleanlist', "config['use_tags']" , 'class="inputbox"', $GLOBALS[JNEWS.'use_tags'] );
			 $lists['show_guide'] = JHTML::_('select.booleanlist', "config['show_guide']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_guide'] );
			 $lists['show_author'] = JHTML::_('select.booleanlist', "config['show_author']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_author'] );
			 $lists['show_tips'] = JHTML::_('select.booleanlist', "config['show_tips']" , 'class="inputbox"', $GLOBALS[JNEWS.'show_tips'] );
			 //$lists['update_notification'] = JHTML::_('select.booleanlist', "config['update_notification']" , 'class="inputbox"', $GLOBALS[JNEWS.'update_notification'] );
			 $lists['use_sef'] = JHTML::_('select.booleanlist', "config['use_sef']" , 'class="inputbox"', $GLOBALS[JNEWS.'use_sef'] );
			 $lists['listype1'] = JHTML::_('select.booleanlist', "config['listype1']" , 'class="inputbox"', $GLOBALS[JNEWS.'listype1'] );
			 $lists['listype2'] = JHTML::_('select.booleanlist', "config['listype2']" , 'class="inputbox"', $GLOBALS[JNEWS.'listype2'] );
			 $lists['listHTMLeditor'] = JHTML::_('select.booleanlist', "config['listHTMLeditor']" , 'class="inputbox"', $GLOBALS[JNEWS.'listHTMLeditor'] );
			 
			 //for social version
			if( $GLOBALS[JNEWS.'level'] > 2){
				if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
					if( class_exists('jNews_Social') ) {
						$lists['use_masterlists'] = JHTML::_('select.booleanlist', "config['use_masterlists']" , 'class="inputbox"', $GLOBALS[JNEWS.'use_masterlists'] );
			 			$lists['allow_fe_autoresponder'] = JHTML::_('select.booleanlist', "config['allow_fe_autoresponder']" , 'class="inputbox"', $GLOBALS[JNEWS.'allow_fe_autoresponder'] );
					}
				}
			}
			if ( empty($lists['allow_fe_autoresponder']) ) $lists['allow_fe_autoresponder'] = 'jNews Social Only';
			
			 $lists['send_error'] = JHTML::_('select.booleanlist', "config['send_error']" , 'class="inputbox"', $GLOBALS[JNEWS.'send_error'] );
			 $lists['report_error'] = JHTML::_('select.booleanlist', "config['report_error']" , 'class="inputbox"', $GLOBALS[JNEWS.'report_error'] );
			 $lists['fullcheck'] = JHTML::_('select.booleanlist', "config['fullcheck']" , 'class="inputbox"', $GLOBALS[JNEWS.'fullcheck'] );
			 $lists['addEmailRedLink'] = JHTML::_('select.booleanlist', "config['addEmailRedLink']" , 'class="inputbox"', $GLOBALS[JNEWS.'addEmailRedLink'] );
			 $lists['disabletooltip'] = JHTML::_('select.booleanlist', "config['disabletooltip']" , 'class="inputbox"', $GLOBALS[JNEWS.'disabletooltip'] );
			 $lists['minisendmail'] = JHTML::_('select.booleanlist', "config['minisendmail']" , 'class="inputbox"', $GLOBALS[JNEWS.'minisendmail'] );

			 //<!-- content ordering -->

			$sortContent[]=JHTML::_('select.option','0', _JNEWS_SORT_DATE);
			$sortContent[]=JHTML::_('select.option','1', _JNEWS_SORT_SECTION);
			$sortContent[]=JHTML::_('select.option','2', _JNEWS_SORT_CATEGORY);

			//$lists['content_order'] = JHTML::_('select.genericlist', $sortContent, "config['content_order']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'content_order'] );

			$schedPrior=array();
			$schedPrior[]=JHTML::_('select.option','1', '1');
			$schedPrior[]=JHTML::_('select.option','2', '2');
			$schedPrior[]=JHTML::_('select.option','3', '3');

			$enable_jsub=array();
			$enable_jsub[] = JHTML::_('select.option','0', _JNEWS_LIST_ACESS );
			$enable_jsub[] = JHTML::_('select.option','1', _JNEWS_BYOWNER );
			$lists['enable_jsub'] = JHTML::_('select.radiolist', $enable_jsub, "config['enable_jsub']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'enable_jsub'] );


			$GLOBALS[JNEWS.'sched_prior'] = ( isset($GLOBALS[JNEWS.'sched_prior']) ) ? $GLOBALS[JNEWS.'sched_prior'] : 3;
			$lists['sched_prior'] = JHTML::_('select.radiolist', $schedPrior, "config['sched_prior']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'sched_prior'] );

			$arPrior=array();
			$arPrior[]=JHTML::_('select.option','1', '1');
			$arPrior[]=JHTML::_('select.option','2', '2');
			$arPrior[]=JHTML::_('select.option','3', '3');

			$GLOBALS[JNEWS.'ar_prior'] = ( isset($GLOBALS[JNEWS.'ar_prior']) ) ? $GLOBALS[JNEWS.'ar_prior'] : '';
			$lists['ar_prior'] = JHTML::_('select.radiolist', $arPrior, "config['ar_prior']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'ar_prior'] );

			$smPrior=array();
			$smPrior[]=JHTML::_('select.option','1', '1');
			$smPrior[]=JHTML::_('select.option','2', '2');
			$smPrior[]=JHTML::_('select.option','3', '3');

			$GLOBALS[JNEWS.'sm_prior'] = ( isset($GLOBALS[JNEWS.'sm_prior']) ) ? $GLOBALS[JNEWS.'sm_prior'] : '';
			$lists['sm_prior'] = JHTML::_('select.radiolist', $arPrior, "config['sm_prior']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'sm_prior'] );

			$priord_list=array();
			$priord_list[]=JHTML::_('select.option','0', _JNEWS_AUTORESP);
			$priord_list[]=JHTML::_('select.option','1', _JNEWS_LIST);

			$GLOBALS[JNEWS.'priord_list'] = ( isset($GLOBALS[JNEWS.'priord_list']) ) ? $GLOBALS[JNEWS.'priord_list'] : '';
			$lists['priord_list'] = JHTML::_('select.radiolist', $priord_list, "config['priord_list']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'priord_list'] );

			$priord_subs=array();
			$priord_subs[]=JHTML::_('select.option','0', _JNEWS_REMAIN_SUBS);
			$priord_subs[]=JHTML::_('select.option','1', _JNEWS_LIST_T_SUBSCRIPTION);
			$priord_subs[]=JHTML::_('select.option','2', _JNEWS_UNSUBS);

			$GLOBALS[JNEWS.'priord_subs'] = ( isset($GLOBALS[JNEWS.'priord_subs']) ) ? $GLOBALS[JNEWS.'priord_subs'] : '';
			$lists['priord_subs'] = JHTML::_('select.radiolist', $priord_subs, "config['priord_subs']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'priord_subs'] );

			if( class_exists('jNews_Social') ) {
				$lists['list_creatorfe'] = jnews::displayAccessRoles('list_creatorfe',$GLOBALS[JNEWS.'list_creatorfe'] );

			//since 6.1.0
			 $lists['use_backendview'] = JHTML::_('select.booleanlist', "config['use_backendview']" , 'class="inputbox"', $GLOBALS[JNEWS.'use_backendview'] );

			}

		if (class_exists('aca_archive') ) {
				$jour = array();
				$jour[] = JHTML::_('select.option', '0', _JNEWS_FREQ_OPT_0 );
				$jour[] = JHTML::_('select.option', '1', _JNEWS_FREQ_OPT_1 );
				$jour[] = JHTML::_('select.option', '2', _JNEWS_FREQ_OPT_2 );
				$jour[] = JHTML::_('select.option', '3', _JNEWS_FREQ_OPT_3 );
				$jour[] = JHTML::_('select.option', '4', _JNEWS_FREQ_OPT_4 );
				$jour[] = JHTML::_('select.option', '5', _JNEWS_FREQ_OPT_5 );
				$jour[] = JHTML::_('select.option', '6', _JNEWS_FREQ_OPT_6 );
				$dateType = array();
				$dateType[] = JHTML::_('select.option', '1', _JNEWS_DATE_OPT_1 );
				$dateType[] = JHTML::_('select.option', '2', _JNEWS_DATE_OPT_2 );
				$lists['frequency'] = JHTML::_('select.genericlist', $jour, "config['frequency']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'frequency'] );
				$lists['date_type'] = JHTML::_('select.genericlist', $dateType, "config['date_type']" , 'class="inputbox" size="1"', 'value', 'text', $GLOBALS[JNEWS.'date_type'] );
		}

		//encoding format
			$mail_format[] = JHTML::_('select.option', '0', 'Text (8bit)' );
			$mail_format[] = JHTML::_('select.option', '1', 'MIME (base64)' );

			$lists['mail_format'] = JHTML::_('select.radiolist', $mail_format, "config['mail_format']", 'class="inputbox"', 'value', 'text', $GLOBALS[JNEWS.'mail_format'] );

		//encoding formart
			$mail_encoding[] = JHTML::_('select.option', '0', 'UTF-8' );
			$mail_encoding[] = JHTML::_('select.option', '1', 'ISO-8859-2' );

			$lists['mail_encoding'] = JHTML::_('select.radiolist', $mail_encoding, "config['mail_encoding']", 'class="inputbox"', 'value', 'text', $GLOBALS[JNEWS.'mail_encoding'] );

	backHTML::formStart('configpanel', 0 ,'' );
	
	?>
	<table style="width: 100%;" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td>
	<form action="index.php" method="post" name="adminForm">
	<?php

		$config_tabs = new MosTabsjNews(1);

		$config_tabs->startPane('acaConfig');
		$config_tabs->startTab(_JNEWS_MAIL_CONFIG, 'mail');
		jNews_ConfigHTML::mailSettings($lists);
		$config_tabs->endTab();
		$config_tabs->startTab(_JNEWS_SUBSCRIBER_CONFIG, 'subscribers');
		jNews_ConfigHTML::subcriberSettings($lists);
		$config_tabs->endTab();
		if ( class_exists('jNews_Auto') ) {
			$config_tabs->startTab(_JNEWS_SCHEDULER, 'scheduler');
			jNews_ConfigHTML::cronSettings($lists);
			$config_tabs->endTab();
		}
		$config_tabs->startTab(_JNEWS_LOGGING_CONFIG, 'logging');
		jNews_ConfigHTML::logsSettings($lists);
		$config_tabs->endTab();
		if ($GLOBALS[JNEWS.'integration']
		 AND ( $GLOBALS[JNEWS.'cb_integration']
		  OR ( class_exists('aca_virtuemart') && $GLOBALS[JNEWS.'virtuemart'] ) ) ) {
			$config_tabs->startTab(_JNEWS_CONFIG_INTEGRATION, 'integration');
			if ($GLOBALS[JNEWS.'cb_integration']) jNews_ConfigHTML::cbSettings();
			if ( class_exists('aca_virtuemart') && isset($GLOBALS[JNEWS.'virtuemart']) && $GLOBALS[JNEWS.'virtuemart'] ) aca_virtuemart::tab();
			$config_tabs->endTab();
		}

		$config_tabs->startTab(_JNEWS_MISC_CONFIG, 'misc');
		jNews_ConfigHTML::miscSettings($lists);
		$config_tabs->endTab();

		if (class_exists('jNews_Auto')) {
			$config_tabs->startTab(_JNEWS_LICENSE_CONFIG, 'licence');
			jNews_Auto::licenseSettings($lists);
			$config_tabs->endTab();
		}
		$config_tabs->endPane();
		echo JHTML::_( 'form.token' );
	?>
		<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
		<input type="hidden" name="act" value="configuration" />
    	<input type="hidden" name="boxchecked" value="0" />
    	<input type="hidden" name="task" value="" />
	</form>
	</td></tr></tbody></table>
	<?php
	 }
 }