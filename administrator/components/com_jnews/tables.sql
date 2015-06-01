CREATE TABLE IF NOT EXISTS `#__jnews_lists` (
			  `id` int(10) NOT NULL AUTO_INCREMENT,
			  `list_name` varchar(101) NOT NULL DEFAULT '',
			  `list_desc` text NOT NULL,
			  `list_type` tinyint(2) NOT NULL DEFAULT '1',
			  `sendername` varchar(64) NOT NULL DEFAULT '',
			  `senderemail` varchar(64) NOT NULL DEFAULT '',
			  `bounceadres` varchar(64) NOT NULL DEFAULT '',
			  `color` varchar(30) DEFAULT NULL,
			  `layout` text NOT NULL,
			  `template` int(9) NOT NULL DEFAULT '0',
			  `subscribemessage` text NOT NULL,
			  `unsubscribemessage` text NOT NULL,
			  `unsubscribesend` tinyint(1) NOT NULL DEFAULT '1',
			  `unsubscribenotifyadmin` tinyint(1) NOT NULL DEFAULT '1',
			  `notifyadminmsg` text NOT NULL,
			  `subnotifysend` TINYINT(1) NOT NULL DEFAULT '1',
			  `subnotifymsg` TEXT NOT NULL,
			  `auto_add` tinyint(1) NOT NULL DEFAULT '0',
			  `user_choose` tinyint(1) NOT NULL DEFAULT '0',
			  `cat_id` int(10) NOT NULL DEFAULT '0',
			  `delay_min` int(2) NOT NULL DEFAULT '0',
			  `delay_max` int(2) NOT NULL DEFAULT '7',
			  `follow_up` int(10) NOT NULL DEFAULT '0',
			  `html` tinyint(1) NOT NULL DEFAULT '1',
			  `hidden` tinyint(1) NOT NULL DEFAULT '0',
			  `published` tinyint(1) NOT NULL DEFAULT '0',
			  `createdate` int(11) NOT NULL DEFAULT '0',
			  `acc_level` VARCHAR( 200 ) NOT NULL DEFAULT '24,25,7,8',
			  `acc_id` VARCHAR( 200 ) NOT NULL DEFAULT 'all',
			  `notification` tinyint(1) NOT NULL DEFAULT '0',
			  `owner` int(11) NOT NULL DEFAULT '0',
			  `footer` tinyint(1) NOT NULL DEFAULT '1',
			  `notify_id` int(10) NOT NULL DEFAULT '0',
			  `next_date` int(11) NOT NULL DEFAULT '0',
			  `start_date` date NOT NULL,
			  `params` text,
			  `siteend` tinyint(3) unsigned NOT NULL DEFAULT '0',
			  PRIMARY KEY (`id`),
			  UNIQUE KEY `list_name` (`list_name`)
			) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_followup` (
			  `followup_id` smallint(10) unsigned NOT NULL,
			  `list_id` smallint(10) unsigned NOT NULL,
			  PRIMARY KEY (`followup_id`,`list_id`)
			) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_listmailings` (
				  `list_id` int(10) unsigned NOT NULL,
				  `mailing_id` int(10) unsigned NOT NULL,
				  PRIMARY KEY (`list_id`,`mailing_id`)
				) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_mailings` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `list_id` int(10) NOT NULL DEFAULT '0',
				  `mailing_type` tinyint(2) NOT NULL DEFAULT '1',
				  `template_id` smallint(11) NOT NULL DEFAULT '0',
				  `issue_nb` int(10) NOT NULL DEFAULT '0',
				  `subject` varchar(120) NOT NULL DEFAULT '',
				  `fromname` varchar(64) NOT NULL DEFAULT '',
				  `fromemail` varchar(64) NOT NULL DEFAULT '',
				  `frombounce` varchar(64) NOT NULL DEFAULT '',
				  `htmlcontent` longtext NOT NULL,
				  `textonly` longtext NOT NULL,
				  `attachments` text NOT NULL,
				  `images` text NOT NULL,
				  `send_date` int(11) NOT NULL DEFAULT '0',
				  `delay` int(10) NOT NULL DEFAULT '0',
				  `visible` tinyint(1) NOT NULL DEFAULT '1',
				  `html` tinyint(1) NOT NULL DEFAULT '1',
				  `published` tinyint(1) NOT NULL DEFAULT '0',
				  `createdate` int(11) NOT NULL DEFAULT '0',
				  `acc_level` int(2) NOT NULL DEFAULT '0',
				  `author_id` int(11) NOT NULL DEFAULT '0',
				  `follow_up` int(10) UNSIGNED NOT NULL DEFAULT '0',
				  `cat_id` varchar(250) NOT NULL DEFAULT '0:0',
				  `delay_min` int(2) NOT NULL DEFAULT '0',
				  `delay_max` int(2) NOT NULL DEFAULT '7',
				  `notify_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
				  `next_date` int(11) UNSIGNED NOT NULL DEFAULT '0',
				  `start_date` int(11) UNSIGNED NOT NULL DEFAULT '0',
				  `smart_date` TINYINT UNSIGNED NOT NULL DEFAULT '0',				  
				  PRIMARY KEY (`id`)
				) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_templates` (
				`template_id` smallint(11) unsigned NOT NULL AUTO_INCREMENT,
				`name` varchar(250) DEFAULT NULL,
				`description` text,
				`body` longtext,
				`altbody` longtext,
				`created` int(10) unsigned DEFAULT NULL,
 				`published` tinyint(4) NOT NULL DEFAULT '1',
				`premium` tinyint(4) NOT NULL DEFAULT '0',
				`ordering` smallint(10) unsigned NOT NULL DEFAULT '99',
				`namekey` varchar(50) NOT NULL,
				`styles` text,
				`thumbnail` text NOT NULL,
				`availability` TINYINT( 1 ) NOT NULL DEFAULT '1' COMMENT '1- installed, 0-download,-1 free download',
				`csstyle` TEXT NOT NULL,
				PRIMARY KEY (`template_id`),
				UNIQUE KEY `namekey` (`namekey`)
			) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_subscribers` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					 `user_id` int(11) NOT NULL DEFAULT '0',
					 `name` varchar(64) NOT NULL DEFAULT '',
					 `email` varchar(100) NOT NULL DEFAULT '',
					 `receive_html` tinyint(1) NOT NULL DEFAULT '1',
					 `confirmed` tinyint(1) NOT NULL DEFAULT '0',
					 `blacklist` tinyint(1) NOT NULL DEFAULT '0',
					 `timezone` time NOT NULL DEFAULT '00:00:00',
					 `language_iso` varchar(10) NOT NULL DEFAULT 'eng',
					 `ip` varchar(100) DEFAULT NULL,
					 `subscribe_date` int(11) NOT NULL DEFAULT '0',
					 `params` text,
					 `column1` varchar(255) NOT NULL,
					 `column2` varchar(255) NOT NULL,
					 `column3` varchar(255) NOT NULL,
					 `column4` varchar(255) NOT NULL,
					 `column5` varchar(255) NOT NULL,
					 PRIMARY KEY (`id`),
					 UNIQUE KEY `email` (`email`),
					 KEY `date` (`subscribe_date`),
					 KEY `joomlauserid` (`user_id`)
				) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_listssubscribers` (
				  `list_id` smallint(11) unsigned NOT NULL,
				  `subscriber_id` int(11) unsigned NOT NULL,
				  `subdate` int(11) unsigned DEFAULT NULL,
				  `unsubdate` int(11) unsigned DEFAULT '0',
				  `unsubscribe` tinyint(1) DEFAULT '0',
				  `params` text,
				  PRIMARY KEY (`list_id`,`subscriber_id`)
				) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;

CREATE TABLE IF NOT EXISTS `#__jnews_queue` (
				  `qid` int(11) NOT NULL AUTO_INCREMENT,
				  `type` tinyint(2) NOT NULL DEFAULT '0',
				  `issue_nb` int(10) NOT NULL DEFAULT '0',
				  `subscriber_id` int(11) NOT NULL DEFAULT '0',
				  `mailing_id` int(11) NOT NULL DEFAULT '0',
				  `priority` tinyint(3) unsigned DEFAULT '3',
				  `attempt` tinyint(3) unsigned NOT NULL DEFAULT '0',
				  `suspend` tinyint(1) NOT NULL DEFAULT '0',
				  `send_date` int(11) unsigned DEFAULT NULL,
				  `delay` int(10) NOT NULL DEFAULT '0',
				  `acc_level` int(2) NOT NULL DEFAULT '0',
				  `published` tinyint(1) NOT NULL DEFAULT '0',
				  `params` text,
				  `block` tinyint(1) NOT NULL DEFAULT '0',
				  PRIMARY KEY (`qid`),
				  UNIQUE KEY `sub_mail` (`mailing_id`,`subscriber_id`,`type`),
				  KEY `senddate` (`send_date`)
				) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_xonfig` (
					`akey` varchar(32) NOT NULL DEFAULT '',
					`text` varchar(254) NOT NULL DEFAULT '',
					`value` int(11) NOT NULL DEFAULT '0',
					PRIMARY KEY (`akey`)
				) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_stats_details` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					 `mailing_id` int(11) NOT NULL DEFAULT '0',
					 `subscriber_id` int(11) NOT NULL DEFAULT '0',
					 `sentdate` int(11) unsigned DEFAULT NULL,
					 `html` tinyint(1) NOT NULL DEFAULT '0',
					 `read` tinyint(1) NOT NULL DEFAULT '0',
					 PRIMARY KEY (`id`),
					 UNIQUE KEY `sub_mail` (`mailing_id`,`subscriber_id`)
			    ) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;


CREATE TABLE IF NOT EXISTS `#__jnews_stats_global` (
				  `mailing_id` int(11) NOT NULL DEFAULT '0',
				  `sentdate` int(11) unsigned DEFAULT NULL,
				  `html_sent` int(11) NOT NULL DEFAULT '0',
				  `text_sent` int(11) NOT NULL DEFAULT '0',
				  `html_read` int(11) NOT NULL DEFAULT '0',
				  `failed` int(11) NOT NULL DEFAULT '0',
				  `sent` int(11) NOT NULL DEFAULT '0',
				  `pending` int(11) NOT NULL DEFAULT '0',
				  `bounces` int(11) NOT NULL DEFAULT '0',
				  `unsub` smallint(6) NOT NULL DEFAULT '0',
				  PRIMARY KEY (`mailing_id`)
				) ENGINE=MyISAM   /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;
