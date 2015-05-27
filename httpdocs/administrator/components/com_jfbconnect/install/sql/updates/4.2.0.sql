ALTER TABLE `#__jfbconnect_user_map` ADD COLUMN `authorized` TINYINT(1) DEFAULT 1;
INSERT INTO `#__jfbconnect_config` SET `setting` = "db_version", `value` = "4.2.0", created_at = NOW(), updated_at = NOW() ON DUPLICATE KEY UPDATE `value` = "4.2.0", `updated_at` = NOW();
