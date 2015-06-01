<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

$confiX = array();

$confiX['component'] = 'jNews';
$confiX['type'] = 'Core';
$confiX['version'] = '7.9.1';
$confiX['level'] = '1';

$confiX['emailmethod'] = 'sendmail';
$confiX['sendmail_from'] = '';
$confiX['sendmail_name'] = '';
$confiX['sendmail_email'] = '';
$confiX['sendmail_path'] = '/usr/sbin/sendmail';
$confiX['smtp_host'] = '';
$confiX['smtp_port'] = '25';
$confiX['smtp_auth_required'] = '1';
$confiX['smtp_secure'] = '';
$confiX['smtp_username'] = '';
$confiX['smtp_password'] = '';
$confiX['embed_images'] = '0';
$confiX['upload_url'] = '/media/'.JNEWS_OPTION.'/upload';

$confiX['enable_statistics'] = '1';
$confiX['statistics_per_subscriber'] = '1';

$confiX['send_data'] = '1';
$confiX['allow_unregistered'] = '1';
$confiX['require_confirmation'] = '0';
$confiX['redirectconfirm'] = '';
$confiX['subs_redirect_url'] = '';
$confiX['show_login'] = '1';
$confiX['show_logout'] = '1';
$confiX['send_unsubcribe'] = '1';
$confiX['subscribe_notification'] = '';
$confiX['unsubscribe_notification'] = '';
$confiX['confirm_fromname'] = '';
$confiX['confirm_fromemail'] = '';
$confiX['confirm_html'] = '1';
$confiX['time_zone'] = '0';
$confiX['show_archive'] = '1';
$confiX['archive_link'] = 'standard';

$confiX['pause_time'] = '20';
$confiX['emails_between_pauses'] = '65';
$confiX['wait_for_user'] = '0';
$confiX['script_timeout'] = '0';
$confiX['display_trace'] = '1';
$confiX['send_log'] = '1';
$confiX['send_auto_log'] = '0';
$confiX['send_log_simple'] = '0';
$confiX['send_log_closed'] = '1';
$confiX['save_log'] = '0';
$confiX['send_email'] = '1';
$confiX['save_log_simple'] = '0';
$confiX['save_log_file'] = '/administrator/components/'.JNEWS_OPTION.'/'.JNEWS_OPTION.'.log';
$confiX['send_log_address'] = '@joobi.co';
$confiX['send_log_name'] = 'jNews Mailing Report';
$confiX['homesite'] = 'http://www.joobi.co';
$confiX['report_site'] = 'http://www.joobi.co';

$confiX['integration'] = '0';

$confiX['cb_plugin'] = '1';
$confiX['cb_listIds'] = '0';
$confiX['cb_intro'] = '';
$confiX['cb_showname'] = '1';
$confiX['cb_checkLists'] = '1';
$confiX['cb_showHTML'] = '1';
$confiX['cb_defaultHTML'] = '1';
$confiX['cb_integration'] = '0';
$confiX['cb_pluginInstalled']= '0';
$confiX['cron_max_freq'] = '10';
$confiX['cron_max_emails'] = '60';
$confiX['last_cron'] = '' ;
$confiX['next_cron'] = time()-86400;
$confiX['last_sub_update'] = '' ;
$confiX['next_autonews'] = '' ;
$confiX['show_footer'] = '1';
$confiX['show_signature'] = '1';
$confiX['update_url'] = 'http://www.joobi.co/update/';
$confiX['date_update'] = '';
$confiX['update_message'] = '';
$confiX['show_guide'] = '1';
$confiX['news1'] = '1';
$confiX['news2'] = '1';
$confiX['news3'] = '1';
$confiX['cron_setup'] = '0';
$confiX['queuedate'] = '';
$confiX['update_avail'] = '0';
$confiX['show_tips'] = '1';
$confiX['update_notification'] = '1';
$confiX['show_lists'] = '1';
$confiX['use_sef'] = '0';
$confiX['listHTMLeditor'] = '1';
$confiX['mod_pub'] = '0';
$confiX['firstmailing'] = '0';
$confiX['nblist'] = '9';

$confiX['license'] ='';
$confiX['token'] ='';
$confiX['maintenance'] ='';
$confiX['admin_debug'] ='0';
$confiX['send_error'] ='1';
$confiX['report_error'] ='1';
$confiX['fullcheck'] ='0';

$confiX['frequency'] = '0';
$confiX['nb_days'] = '7';
$confiX['date_type'] = '1';
$confiX['arv_cat'] = '';
$confiX['arv_sec'] = '';
$confiX['maintenance_clear'] = '24' ;
$confiX['clean_stats'] = '90';
$confiX['maintenance_date'] = '' ;
$confiX['mail_format'] = '1';
$confiX['mail_encoding'] = '0';
$confiX['showtag'] = '0';

$confiX['show_author'] = '0';
$confiX['addEmailRedLink'] = '0';
$confiX['itemidAca'] = '999';
$confiX['show_jcalpro'] = '0';
$confiX['show_jlinks'] = '0';

//default of column 1 name and show
$confiX['column1_name'] = 'Column 1';
$confiX['show_column1'] = '0';
$confiX['column2_name'] = 'Column 2';
$confiX['show_column2'] = '0';
$confiX['column3_name'] = 'Column 3';
$confiX['show_column3'] = '0';
$confiX['column4_name'] = 'Column 4';
$confiX['show_column4'] = '0';
$confiX['column5_name'] = 'Column 5';
$confiX['show_column5'] = '0';

//url
$numchars = rand(8,15);
$chars = explode(',','a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9');
$random='';
for($i=0; $i<$numchars;$i++)  {
  $random.=$chars[rand(0,count($chars)-1)];
}
$confiX['url_pass'] = $random;

$confiX['subscription_notify'] = '0';//option subscription notification

$confiX['disabletooltip'] = '0';
$confiX['minisendmail'] = '0';
$confiX['word_wrap'] = '0';
$confiX['effects'] = 'normal';//module config

$confiX['max_queue'] = '60';
$confiX['max_attempts'] = '5';
$confiX['sched_prior'] = '5';
$confiX['ar_prior'] = '1';
$confiX['sm_prior'] = '5';

$confiX['j_cron'] = '2';//1
$confiX['priord_list'] = '0';
$confiX['priord_subs'] = '0';
$confiX['show_unsubscribe'] = '0';
$confiX['show_unsubscribelink'] = '1';
$confiX['show_subscriptionlink'] = '1';
$confiX['queue_status'] = '1';

$numchars = rand(8,15);
$random='';
for($i=0; $i<$numchars;$i++)  {
  $random.=$chars[rand(0,count($chars)-1)];
}
$confiX['captcha_code'] = $random;
$confiX['smart_queue'] = '0';

$confiX['sub_info_fields'] = 0;
$confiX['enable_jsub'] = '0';
//	$confiX['queue_process'] = 0;	//queue process [to make sure we only have one process going on]
$confiX['forced_html'] = 0;	//send html only

//since social version
$confiX['use_tags'] = '1';
$confiX['use_masterlists'] = 1;
$confiX['list_creatorfe'] = '24,25,7,8';
$confiX['allow_sn'] = 0;
$confiX['allow_fe_autoresponder'] = 0;
$confiX['show_sub_email'] = 0;

//since 6.1.0
$confiX['create_newsubsrows'] = '5';
$confiX['use_backendview'] = '0';

//since 7.0.0
//url
$numchars = rand(8,15);
$random='';
for($i=0; $i<$numchars;$i++)  {
  $random.=$chars[rand(0,count($chars)-1)];
}

$confiX['cron_pass'] = $random;
$confiX['nextdate'] = '0';
$confiX['lastdate'] = '0';

//since 7.4.x
$confiX['lasttime_cron_triggerred'] = '0';
$confiX['show_unsubscribe_all'] = '1';
$confiX['send_log_email'] = '';

//since 7.6.x
$confiX['sntag_norequired'] = 1;