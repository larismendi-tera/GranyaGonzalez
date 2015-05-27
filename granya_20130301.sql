-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: granya_db
-- ------------------------------------------------------
-- Server version	5.5.24-9

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gran_assets`
--

DROP TABLE IF EXISTS `gran_assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_assets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set parent.',
  `lft` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set lft.',
  `rgt` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set rgt.',
  `level` int(10) unsigned NOT NULL COMMENT 'The cached level in the nested tree.',
  `name` varchar(50) NOT NULL COMMENT 'The unique name for the asset.\n',
  `title` varchar(100) NOT NULL COMMENT 'The descriptive title for the asset.',
  `rules` varchar(5120) NOT NULL COMMENT 'JSON encoded access control.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_asset_name` (`name`),
  KEY `idx_lft_rgt` (`lft`,`rgt`),
  KEY `idx_parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_assets`
--

LOCK TABLES `gran_assets` WRITE;
/*!40000 ALTER TABLE `gran_assets` DISABLE KEYS */;
INSERT INTO `gran_assets` VALUES (1,0,1,181,0,'granyaGonzalez.1','granyaGonzalez Asset','{\"core.login.site\":{\"6\":1,\"2\":1},\"core.login.admin\":{\"6\":1},\"core.login.offline\":{\"6\":1},\"core.admin\":{\"8\":1},\"core.manage\":{\"7\":1},\"core.create\":{\"6\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(2,1,1,2,1,'com_admin','com_admin','{}'),(3,1,3,6,1,'com_banners','com_banners','{\"core.admin\":{\"7\":1},\"core.manage\":{\"6\":1},\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(4,1,7,8,1,'com_cache','com_cache','{\"core.admin\":{\"7\":1},\"core.manage\":{\"7\":1}}'),(5,1,9,10,1,'com_checkin','com_checkin','{\"core.admin\":{\"7\":1},\"core.manage\":{\"7\":1}}'),(6,1,11,12,1,'com_config','com_config','{}'),(7,1,13,16,1,'com_contact','com_contact','{\"core.admin\":{\"7\":1},\"core.manage\":{\"6\":1},\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[],\"core.edit.own\":[]}'),(8,1,17,118,1,'com_content','com_content','{\"core.admin\":{\"7\":1},\"core.manage\":{\"6\":1},\"core.create\":{\"3\":1},\"core.delete\":[],\"core.edit\":{\"4\":1},\"core.edit.state\":{\"5\":1},\"core.edit.own\":[]}'),(9,1,119,120,1,'com_cpanel','com_cpanel','{}'),(10,1,121,122,1,'com_installer','com_installer','{\"core.admin\":[],\"core.manage\":{\"7\":0},\"core.delete\":{\"7\":0},\"core.edit.state\":{\"7\":0}}'),(11,1,123,124,1,'com_languages','com_languages','{\"core.admin\":{\"7\":1},\"core.manage\":[],\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(12,1,125,126,1,'com_login','com_login','{}'),(13,1,127,128,1,'com_mailto','com_mailto','{}'),(14,1,129,130,1,'com_massmail','com_massmail','{}'),(15,1,131,132,1,'com_media','com_media','{\"core.admin\":{\"7\":1,\"2\":1},\"core.manage\":{\"6\":1,\"2\":1},\"core.create\":{\"2\":1,\"3\":1},\"core.delete\":{\"5\":1}}'),(16,1,133,134,1,'com_menus','com_menus','{\"core.admin\":{\"7\":1},\"core.manage\":[],\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(17,1,135,136,1,'com_messages','com_messages','{\"core.admin\":{\"7\":1},\"core.manage\":{\"7\":1}}'),(18,1,137,138,1,'com_modules','com_modules','{\"core.admin\":{\"7\":1},\"core.manage\":[],\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(19,1,139,142,1,'com_newsfeeds','com_newsfeeds','{\"core.admin\":{\"7\":1},\"core.manage\":{\"6\":1},\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[],\"core.edit.own\":[]}'),(20,1,143,144,1,'com_plugins','com_plugins','{\"core.admin\":{\"7\":1},\"core.manage\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(21,1,145,146,1,'com_redirect','com_redirect','{\"core.admin\":{\"7\":1},\"core.manage\":[]}'),(22,1,147,148,1,'com_search','com_search','{\"core.admin\":{\"7\":1},\"core.manage\":{\"6\":1}}'),(23,1,149,150,1,'com_templates','com_templates','{\"core.admin\":{\"7\":1},\"core.manage\":[],\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(24,1,151,154,1,'com_users','com_users','{\"core.admin\":{\"7\":1},\"core.manage\":[],\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(25,1,155,158,1,'com_weblinks','com_weblinks','{\"core.admin\":{\"7\":1},\"core.manage\":{\"6\":1},\"core.create\":{\"3\":1},\"core.delete\":[],\"core.edit\":{\"4\":1},\"core.edit.state\":{\"5\":1},\"core.edit.own\":[]}'),(26,1,159,160,1,'com_wrapper','com_wrapper','{}'),(27,8,18,41,2,'com_content.category.2','Uncategorised','{\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[],\"core.edit.own\":[]}'),(28,3,4,5,2,'com_banners.category.3','Uncategorised','{\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(29,7,14,15,2,'com_contact.category.4','Uncategorised','{\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[],\"core.edit.own\":[]}'),(30,19,140,141,2,'com_newsfeeds.category.5','Uncategorised','{\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[],\"core.edit.own\":[]}'),(31,25,156,157,2,'com_weblinks.category.6','Uncategorised','{\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[],\"core.edit.own\":[]}'),(32,24,152,153,1,'com_users.category.7','Uncategorised','{\"core.create\":[],\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(33,1,161,162,1,'com_finder','com_finder','{\"core.admin\":{\"7\":1},\"core.manage\":{\"6\":1}}'),(34,1,163,164,1,'com_joomlaupdate','com_joomlaupdate','{\"core.admin\":[],\"core.manage\":[],\"core.delete\":[],\"core.edit.state\":[]}'),(35,27,19,20,3,'com_content.article.1','Home','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(36,8,42,43,2,'com_content.category.8','Institución','{\"core.create\":{\"6\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(37,8,44,101,2,'com_content.category.9','Publicaciones','{\"core.create\":{\"6\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(38,37,45,80,3,'com_content.category.10','Granya Recomienda','{\"core.create\":{\"6\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(39,37,81,98,3,'com_content.category.11','Artículos de Prensa','{\"core.create\":{\"6\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(40,37,99,100,3,'com_content.category.12','Videos','{\"core.create\":{\"6\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(41,38,46,47,4,'com_content.article.2','Hipnosis: ¿la recomiendo para adelgazar?','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(42,38,48,49,4,'com_content.article.3','Recomendacion 2','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(43,27,21,22,3,'com_content.article.4','¿Quiénes Somos?','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(44,39,82,83,4,'com_content.article.5',' Los beneficios de la dieta se reducen si duermes poco','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(45,39,84,85,4,'com_content.article.6','Delicias que embellecen','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(46,1,165,166,1,'com_jfbconnect','jfbconnect','{}'),(47,38,50,51,4,'com_content.article.7','Banda Gástrica Virtual','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(48,39,86,87,4,'com_content.article.8','10 recomendaciones sobre la lactancia materna según la OMS','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(49,39,88,89,4,'com_content.article.9','Las dietas hipocalóricas mejoran la función cardíaca','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(50,39,90,91,4,'com_content.article.10','Los beneficios de la dieta se reducen si duermes poco','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(51,38,52,53,4,'com_content.article.11','La mejor medicina es reírse','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(52,38,54,55,4,'com_content.article.12','Ácido fólico para el embarazo','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(53,38,56,57,4,'com_content.article.13','Aumentar actividad física','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(54,38,58,59,4,'com_content.article.14','La mejor medicina es reírse','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(55,27,35,36,3,'com_content.article.15','Misión y Visión','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(56,27,23,24,3,'com_content.article.16','Tratamientos Corporales','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(57,27,25,26,3,'com_content.article.17','Tratamientos Faciales','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(58,27,27,28,3,'com_content.article.18','Tratamientos de Relajación','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(59,27,29,30,3,'com_content.article.19','Tratamientos Médicos','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(60,1,167,168,1,'com_jnews','jnews','{}'),(61,27,31,32,3,'com_content.article.20','Información y Talleres','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(62,27,33,34,3,'com_content.article.21','Inscripción','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(63,8,102,117,2,'com_content.category.13','Banda Gástrica Virtual','{\"core.create\":{\"6\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(64,63,103,116,3,'com_content.category.14','Testimoniales','{\"core.create\":{\"6\":1,\"2\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(65,27,37,38,3,'com_content.article.22','Promociones','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(66,39,92,93,4,'com_content.article.23','Merluza con Guisantes','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(67,39,94,95,4,'com_content.article.24','Cambios en el  estilo de vida son esenciales para perder peso','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(68,39,96,97,4,'com_content.article.25','Conducir menos para bajar de peso','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(69,38,60,61,4,'com_content.article.26','Productos frescos','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(70,38,62,63,4,'com_content.article.27','Beber vino con moderación','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(71,38,66,67,4,'com_content.article.28','Evita la comida rápida','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(72,27,39,40,3,'com_content.article.29','Disfruta sensación de saciedad sin excesos','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(73,38,64,65,4,'com_content.article.30','Disfruta sensación de saciedad sin excesos','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(74,38,68,69,4,'com_content.article.31','Ingiere menor cantidad de carnes rojas','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(75,38,70,71,4,'com_content.article.32','Agua en vez de bebidas gaseosas','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(76,38,72,73,4,'com_content.article.33','Estilo mediterráneo','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(77,38,74,75,4,'com_content.article.34','Creatividad en la cocina','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(78,38,76,77,4,'com_content.article.35','Elabora lista de mercado','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(79,38,78,79,4,'com_content.article.36','Realiza tres comidas','{\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1}}'),(80,1,169,170,1,'com_phocafavicon','com_phocafavicon','{}'),(81,1,171,172,1,'com_widgetkit','widgetkit','{}'),(82,64,104,105,4,'com_content.article.37','Rob test','{\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(83,64,106,107,4,'com_content.article.38','Test',''),(85,1,173,174,1,'com_talleres','com_talleres','{\"core.admin\":{\"8\":1},\"core.manage\":{\"7\":1},\"core.create\":{\"1\":1,\"6\":1,\"3\":1},\"core.delete\":{\"6\":1},\"core.edit\":{\"6\":1,\"4\":1},\"core.edit.state\":{\"6\":1,\"5\":1},\"core.edit.own\":{\"6\":1,\"3\":1}}'),(86,64,108,109,4,'com_content.article.51','Holaaa',''),(87,64,110,111,4,'com_content.article.52','Probando',''),(88,64,112,113,4,'com_content.article.53','Prueba funcionando','{\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}'),(89,1,175,176,1,'com_hoduma','hoduma','{\"core.admin\":{\"1\":1},\"core.manage\":{\"1\":1},\"core.create\":{\"1\":1},\"core.delete\":{\"1\":1},\"core.edit\":{\"1\":1},\"core.edit.state\":{\"1\":1},\"core.edit.own\":{\"1\":1}}'),(90,1,177,180,1,'com_issuetracker','issuetracker','{\"core.admin\":{\"1\":1},\"core.manage\":{\"1\":1},\"core.create\":{\"1\":1},\"core.delete\":{\"1\":1},\"core.edit\":{\"1\":1},\"core.edit.state\":{\"1\":1},\"core.edit.own\":{\"1\":1}}'),(91,90,178,179,2,'com_issuetracker.itissues.31','Issue_ZN1MR5QHHJ',''),(92,64,114,115,4,'com_content.article.54','Testimonial','{\"core.delete\":[],\"core.edit\":[],\"core.edit.state\":[]}');
/*!40000 ALTER TABLE `gran_assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_associations`
--

DROP TABLE IF EXISTS `gran_associations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_associations` (
  `id` varchar(50) NOT NULL COMMENT 'A reference to the associated item.',
  `context` varchar(50) NOT NULL COMMENT 'The context of the associated item.',
  `key` char(32) NOT NULL COMMENT 'The key for the association computed from an md5 on associated ids.',
  PRIMARY KEY (`context`,`id`),
  KEY `idx_key` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_associations`
--

LOCK TABLES `gran_associations` WRITE;
/*!40000 ALTER TABLE `gran_associations` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_associations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_banner_clients`
--

DROP TABLE IF EXISTS `gran_banner_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_banner_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `extrainfo` text NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `metakey` text NOT NULL,
  `own_prefix` tinyint(4) NOT NULL DEFAULT '0',
  `metakey_prefix` varchar(255) NOT NULL DEFAULT '',
  `purchase_type` tinyint(4) NOT NULL DEFAULT '-1',
  `track_clicks` tinyint(4) NOT NULL DEFAULT '-1',
  `track_impressions` tinyint(4) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`),
  KEY `idx_own_prefix` (`own_prefix`),
  KEY `idx_metakey_prefix` (`metakey_prefix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_banner_clients`
--

LOCK TABLES `gran_banner_clients` WRITE;
/*!40000 ALTER TABLE `gran_banner_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_banner_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_banner_tracks`
--

DROP TABLE IF EXISTS `gran_banner_tracks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_banner_tracks` (
  `track_date` datetime NOT NULL,
  `track_type` int(10) unsigned NOT NULL,
  `banner_id` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`track_date`,`track_type`,`banner_id`),
  KEY `idx_track_date` (`track_date`),
  KEY `idx_track_type` (`track_type`),
  KEY `idx_banner_id` (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_banner_tracks`
--

LOCK TABLES `gran_banner_tracks` WRITE;
/*!40000 ALTER TABLE `gran_banner_tracks` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_banner_tracks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_banners`
--

DROP TABLE IF EXISTS `gran_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `imptotal` int(11) NOT NULL DEFAULT '0',
  `impmade` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `clickurl` varchar(200) NOT NULL DEFAULT '',
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `custombannercode` varchar(2048) NOT NULL,
  `sticky` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `params` text NOT NULL,
  `own_prefix` tinyint(1) NOT NULL DEFAULT '0',
  `metakey_prefix` varchar(255) NOT NULL DEFAULT '',
  `purchase_type` tinyint(4) NOT NULL DEFAULT '-1',
  `track_clicks` tinyint(4) NOT NULL DEFAULT '-1',
  `track_impressions` tinyint(4) NOT NULL DEFAULT '-1',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reset` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `language` char(7) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `idx_state` (`state`),
  KEY `idx_own_prefix` (`own_prefix`),
  KEY `idx_metakey_prefix` (`metakey_prefix`),
  KEY `idx_banner_catid` (`catid`),
  KEY `idx_language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_banners`
--

LOCK TABLES `gran_banners` WRITE;
/*!40000 ALTER TABLE `gran_banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_categories`
--

DROP TABLE IF EXISTS `gran_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table.',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `lft` int(11) NOT NULL DEFAULT '0',
  `rgt` int(11) NOT NULL DEFAULT '0',
  `level` int(10) unsigned NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '',
  `extension` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(11) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `params` text NOT NULL,
  `metadesc` varchar(1024) NOT NULL COMMENT 'The meta description for the page.',
  `metakey` varchar(1024) NOT NULL COMMENT 'The meta keywords for the page.',
  `metadata` varchar(2048) NOT NULL COMMENT 'JSON encoded metadata properties.',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `modified_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `language` char(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_idx` (`extension`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_path` (`path`),
  KEY `idx_left_right` (`lft`,`rgt`),
  KEY `idx_alias` (`alias`),
  KEY `idx_language` (`language`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_categories`
--

LOCK TABLES `gran_categories` WRITE;
/*!40000 ALTER TABLE `gran_categories` DISABLE KEYS */;
INSERT INTO `gran_categories` VALUES (1,0,0,0,27,0,'','system','granyaGonzalez','granyaGonzalez','','',1,0,'0000-00-00 00:00:00',1,'{}','','','',0,'2009-10-18 16:07:09',0,'0000-00-00 00:00:00',0,'*'),(2,27,1,1,2,1,'uncategorised','com_content','Uncategorised','uncategorised','','',1,0,'0000-00-00 00:00:00',1,'{\"target\":\"\",\"image\":\"\"}','','','{\"page_title\":\"\",\"author\":\"\",\"robots\":\"\"}',42,'2010-06-28 13:26:37',0,'0000-00-00 00:00:00',0,'*'),(3,28,1,3,4,1,'uncategorised','com_banners','Uncategorised','uncategorised','','',1,0,'0000-00-00 00:00:00',1,'{\"target\":\"\",\"image\":\"\",\"foobar\":\"\"}','','','{\"page_title\":\"\",\"author\":\"\",\"robots\":\"\"}',42,'2010-06-28 13:27:35',0,'0000-00-00 00:00:00',0,'*'),(4,29,1,5,6,1,'uncategorised','com_contact','Uncategorised','uncategorised','','',1,0,'0000-00-00 00:00:00',1,'{\"target\":\"\",\"image\":\"\"}','','','{\"page_title\":\"\",\"author\":\"\",\"robots\":\"\"}',42,'2010-06-28 13:27:57',0,'0000-00-00 00:00:00',0,'*'),(5,30,1,7,8,1,'uncategorised','com_newsfeeds','Uncategorised','uncategorised','','',1,0,'0000-00-00 00:00:00',1,'{\"target\":\"\",\"image\":\"\"}','','','{\"page_title\":\"\",\"author\":\"\",\"robots\":\"\"}',42,'2010-06-28 13:28:15',0,'0000-00-00 00:00:00',0,'*'),(6,31,1,9,10,1,'uncategorised','com_weblinks','Uncategorised','uncategorised','','',1,0,'0000-00-00 00:00:00',1,'{\"target\":\"\",\"image\":\"\"}','','','{\"page_title\":\"\",\"author\":\"\",\"robots\":\"\"}',42,'2010-06-28 13:28:33',0,'0000-00-00 00:00:00',0,'*'),(7,32,1,11,12,1,'uncategorised','com_users','Uncategorised','uncategorised','','',1,0,'0000-00-00 00:00:00',1,'{\"target\":\"\",\"image\":\"\"}','','','{\"page_title\":\"\",\"author\":\"\",\"robots\":\"\"}',42,'2010-06-28 13:28:33',0,'0000-00-00 00:00:00',0,'*'),(8,36,1,13,14,1,'institucion','com_content','Institución','institucion','','',-2,0,'0000-00-00 00:00:00',1,'{\"category_layout\":\"\",\"image\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',778,'2013-01-07 14:32:59',0,'0000-00-00 00:00:00',0,'*'),(9,37,1,15,22,1,'publicaciones','com_content','Publicaciones','publicaciones','','',1,0,'0000-00-00 00:00:00',1,'{\"category_layout\":\"\",\"image\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',778,'2013-01-07 16:22:23',0,'0000-00-00 00:00:00',0,'*'),(10,38,9,16,17,2,'publicaciones/granya-recomienda','com_content','Granya Recomienda','granya-recomienda','','',1,778,'2013-02-26 03:30:05',1,'{\"category_layout\":\"\",\"image\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',778,'2013-01-07 16:23:07',0,'0000-00-00 00:00:00',0,'*'),(11,39,9,18,19,2,'publicaciones/articulos-de-prensa','com_content','Artículos de Prensa','articulos-de-prensa','','',1,0,'0000-00-00 00:00:00',1,'{\"category_layout\":\"\",\"image\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',778,'2013-01-07 16:23:12',778,'2013-02-15 00:12:48',0,'*'),(12,40,9,20,21,2,'publicaciones/videos','com_content','Videos','videos','','',1,0,'0000-00-00 00:00:00',1,'{\"category_layout\":\"\",\"image\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',778,'2013-01-07 16:23:48',778,'2013-01-07 16:25:40',0,'*'),(13,63,1,23,26,1,'banda-gastrica-virtual','com_content','Banda Gástrica Virtual','banda-gastrica-virtual','','',1,0,'0000-00-00 00:00:00',1,'{\"category_layout\":\"\",\"image\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',778,'2013-02-13 21:57:21',0,'0000-00-00 00:00:00',0,'*'),(14,64,13,24,25,2,'banda-gastrica-virtual/testimoniales','com_content','Testimoniales','testimoniales','','',1,778,'2013-02-19 00:14:42',1,'{\"category_layout\":\"\",\"image\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',778,'2013-02-13 21:57:53',778,'2013-02-18 23:56:35',0,'*');
/*!40000 ALTER TABLE `gran_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_contact_details`
--

DROP TABLE IF EXISTS `gran_contact_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_contact_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `con_position` varchar(255) DEFAULT NULL,
  `address` text,
  `suburb` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `misc` mediumtext,
  `image` varchar(255) DEFAULT NULL,
  `imagepos` varchar(20) DEFAULT NULL,
  `email_to` varchar(255) DEFAULT NULL,
  `default_con` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `params` text NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `catid` int(11) NOT NULL DEFAULT '0',
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `mobile` varchar(255) NOT NULL DEFAULT '',
  `webpage` varchar(255) NOT NULL DEFAULT '',
  `sortname1` varchar(255) NOT NULL,
  `sortname2` varchar(255) NOT NULL,
  `sortname3` varchar(255) NOT NULL,
  `language` char(7) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `metadata` text NOT NULL,
  `featured` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Set if article is featured.',
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`published`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_contact_details`
--

LOCK TABLES `gran_contact_details` WRITE;
/*!40000 ALTER TABLE `gran_contact_details` DISABLE KEYS */;
INSERT INTO `gran_contact_details` VALUES (1,'Granya González','granya-gonzalez','','Torre Parque Cristal, Nivel 2, Local #18. Avenida Francisco de Miranda, Los Palos Grandes. Caracas, Venezuela.','','','','','0212-2848239 / 0212-2842291','','','',NULL,'',0,1,778,'2013-02-15 21:41:24',1,'{\"show_contact_category\":\"\",\"show_contact_list\":\"\",\"presentation_style\":\"\",\"show_name\":\"\",\"show_position\":\"\",\"show_email\":\"\",\"show_street_address\":\"\",\"show_suburb\":\"\",\"show_state\":\"\",\"show_postcode\":\"\",\"show_country\":\"\",\"show_telephone\":\"\",\"show_mobile\":\"\",\"show_fax\":\"\",\"show_webpage\":\"\",\"show_misc\":\"\",\"show_image\":\"\",\"allow_vcard\":\"\",\"show_articles\":\"\",\"show_profile\":\"\",\"show_links\":\"\",\"linka_name\":\"\",\"linka\":null,\"linkb_name\":\"\",\"linkb\":null,\"linkc_name\":\"\",\"linkc\":null,\"linkd_name\":\"\",\"linkd\":null,\"linke_name\":\"\",\"linke\":\"\",\"contact_layout\":\"\",\"show_email_form\":\"\",\"show_email_copy\":\"\",\"banned_email\":\"\",\"banned_subject\":\"\",\"banned_text\":\"\",\"validate_session\":\"\",\"custom_reply\":\"\",\"redirect\":\"\"}',778,4,1,'0416-6254863','','','','','*','2013-02-13 23:08:48',778,'','2013-02-15 21:41:24',778,'','','{\"robots\":\"\",\"rights\":\"\"}',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `gran_contact_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_content`
--

DROP TABLE IF EXISTS `gran_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table.',
  `title` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `title_alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'Deprecated in Joomla! 3.0',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `sectionid` int(10) unsigned NOT NULL DEFAULT '0',
  `mask` int(10) unsigned NOT NULL DEFAULT '0',
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `images` text NOT NULL,
  `urls` text NOT NULL,
  `attribs` varchar(5120) NOT NULL,
  `version` int(10) unsigned NOT NULL DEFAULT '1',
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `metadata` text NOT NULL,
  `featured` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Set if article is featured.',
  `language` char(7) NOT NULL COMMENT 'The language code for the article.',
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_content`
--

LOCK TABLES `gran_content` WRITE;
/*!40000 ALTER TABLE `gran_content` DISABLE KEYS */;
INSERT INTO `gran_content` VALUES (1,35,'Home','home','','<div id=\"home-slideshow\" class=\"home-slideshow rounded-container shadowed-center\">{loadposition granya-slideshow}</div>\r\n<div class=\"home-modules rounded-container shadowed-center\">{loadposition granya-middle}\r\n<div class=\"clear clear-home\"> </div>\r\n{loadposition granya-bottomleft}\r\n<div class=\"clear clear-home\"> </div>\r\n</div>','',1,0,0,2,'2013-01-03 23:42:55',778,'','2013-02-21 20:11:21',778,0,'0000-00-00 00:00:00','2013-01-03 23:42:55','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"0\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"0\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',31,0,11,'','',1,4004,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(2,41,'Hipnosis: ¿la recomiendo para adelgazar?','hipnosis-la-recomiendo-para-adelgazar','','<p><img src=\"http://www.niunadietamas.com/blog/wp-content/uploads/hipnosis-para-adelgazar-300x235.jpg?9d7bd4\" border=\"0\" alt=\"\" align=\"left\" />Es lalalalala posible hacer creer al cerebro que tu estómago ha sido reducido de tamano? Esa es la meta de la <strong>hipnosis para adelgazar</strong>. Comer por ansiedad, aún sin sentir hambre, es lo que se intenta curar con este método.</p>\r\n<p><span id=\"more-5813\"></span><strong>Cómo fué mi sesión de Hipnosis</strong></p>\r\n<p>Destapar lo que esconde mi inconciente me tenía preocupado. Afortunadamente junto conmigo llegaron otros 150 pacientes para ser hipnotizados en el consultorio de la Dra Granya.</p>\r\n<p>Primero recibimos una explicación muy científica del <a href=\"http://www.niunadietamas.com/blog/?p=345\">metabolismo</a> y la <a href=\"http://www.niunadietamas.com/blog/?p=4847\">Serotonina</a>. Nos enseñaron cuales son las <a href=\"http://www.niunadietamas.com/blog/?p=1870\">proteínas</a> y los <a href=\"http://www.niunadietamas.com/blog/?p=428\">carbohidratos</a> para entender cuáles son los alimentos que más quitan el hambre y cuales son los que engordan. Inclusive nos dieron una excelente <a href=\"http://www.niunadietamas.com/blog/?p=530\">lista de alimentos para adelgazar</a>.</p>\r\n<p>La especialista se dedica a responder todas las preguntas con mucha paciencia y nos explica que la <a href=\"http://books.google.com/books?hl=es&amp;lr=&amp;id=-SUlEhCrRqQC&amp;oi=fnd&amp;pg=PR9&amp;dq=Hypnosis&amp;ots=sOHCdy9gMx&amp;sig=d0oMYreLSVk_CII7GTVK7gUJkt8#v=onepage&amp;q&amp;f=false\">Hipnosis</a> también es muy efectiva en el tratamiento del <a href=\"http://www.niunadietamas.com/blog/?p=1433\">Insomnio</a>, el <a href=\"http://www.niunadietamas.com/blog/?p=2152\">Estreñimiento</a> y especialmente la <a href=\"http://www.niunadietamas.com/blog/?p=1826\">Fibromialgia</a>.</p>\r\n<p>Al rato se apagan las luces y nos preparamos para el tratamiento. La hipnosis empieza con una relajación de cuerpo y mente. Me doy cuenta que no es fácil dejar de pensar en los problemas cotidianos pero la Doctora me ayuda a concentrarme.</p>\r\n<p>Después de la inducción comienzo a oír y ver en una pantalla gigante las <strong>sugestiones</strong> que buscan guíar mis pensamientos y emociones. Realmente empiezo a percibir a mi <a href=\"http://www.niunadietamas.com/blog/?p=380\">estómago</a> moverse cuando las <strong>instrucciones</strong> me lo indican.</p>\r\n<p><strong>Resultado de mi Hipnosis</strong></p>\r\n<p>No recuerdo si me he quedado dormido pero definitivamente he aprendido a tener más conciencia de la comida. Las sugestiones me han ayudado evitar comer sin darme cuenta.</p>\r\n<p>Solo con esta sesión los pacientes se sentían confiados en poder controlar el apetito practicando las auto-sugestiones pero al salir nos entregaron dos CDs de apoyo. El CD para la noche apuntaba al inconciente y el del día tenía las consignas que debía repetir para que se hagan efectivas.</p>\r\n<p>La primera parte del video para auto-hipnosis es solo para inducir el estado de paz necesario para realizar las sugestiones, en la segunda están las instrucciones para controlar la <a href=\"http://www.niunadietamas.com/blog/?p=1612\">ansiedad</a> por comer y la tercera parte es para regresar del estado de hipnosis mejor preparado para adelgazar.</p>','',0,0,0,10,'2013-01-07 20:24:33',778,'','2013-02-01 00:41:07',778,0,'0000-00-00 00:00:00','2013-01-07 20:24:33','0000-00-00 00:00:00','{\"image_intro\":\"http:\\/\\/www.lpb.com.ve\\/widgets-html\\/2013\\/bucaneros-widget.png\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"_:default\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',6,0,15,'','',1,56,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(3,42,'Recomendacion 2','recomendacion-2','','<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies erat et sapien facilisis id pharetra justo posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent consectetur urna metus, quis egestas odio. Integer sem lacus, sagittis at tempor et, eleifend quis nisi. Etiam rhoncus sem sed leo luctus laoreet. Morbi bibendum porttitor nunc ac gravida. Vestibulum ullamcorper dapibus metus, in suscipit est suscipit nec. Morbi eu dolor justo, sit amet consectetur leo. Etiam tincidunt, ipsum at tempus vulputate, lectus nibh semper orci, et porttitor erat mi id sapien. Maecenas nec vulputate mi. Suspendisse elit mi, consectetur sed tempus eget, porttitor vel purus. Curabitur laoreet porttitor blandit. Nam suscipit adipiscing orci eu pharetra. Phasellus vitae est ipsum.</p>\r\n<p>Praesent tincidunt, lacus ut scelerisque iaculis, diam odio tincidunt nisl, at mollis odio nibh in risus. Aenean a risus in dolor mattis molestie a tincidunt lacus. Vivamus sodales bibendum augue, id feugiat lorem gravida ut. Etiam ipsum erat, viverra et convallis et, eleifend in urna. Aliquam sodales feugiat adipiscing. Donec a sapien at nibh sollicitudin elementum. Curabitur adipiscing, massa vel egestas porttitor, ligula velit molestie orci, ac varius justo lorem ac lectus. Nulla viverra felis ut elit feugiat dignissim. Mauris dolor turpis, malesuada at ornare eu, mollis nec urna. Duis fermentum, nulla nec gravida tempor, leo lacus iaculis nisl, sit amet dapibus nisl lacus vitae nisl. Sed varius velit non quam consectetur viverra scelerisque augue iaculis.</p>\r\n<p>Vestibulum ornare consequat nibh, sit amet scelerisque metus egestas non. Vestibulum bibendum, dolor lacinia vehicula gravida, ante arcu malesuada est, in fringilla urna mauris id arcu. Nullam odio elit, hendrerit quis volutpat quis, venenatis ac magna. Phasellus tincidunt facilisis tempor. Donec aliquam nisl vel nulla bibendum porta. Fusce dapibus felis et enim tincidunt rutrum. In nec augue eu diam tincidunt pulvinar. Nulla facilisi. Curabitur pulvinar mauris sed massa fringilla vel dignissim sem viverra. Aenean eget imperdiet nulla. Vivamus augue ipsum, ultricies eget vulputate nec, dictum ac nisi. Integer ut nisi condimentum orci semper viverra. In sed nulla sed lectus bibendum placerat. Aliquam erat volutpat. Donec accumsan commodo lorem, eget elementum magna ultrices vitae. In scelerisque eleifend nulla ut condimentum.</p>\r\n<p>Integer nulla metus, laoreet nec bibendum in, faucibus a nibh. In tincidunt placerat auctor. Curabitur ultrices fermentum velit, non aliquet nunc porttitor hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vestibulum sagittis enim, eget convallis nisl molestie a. Sed ultricies ipsum in augue cursus porta. Proin justo quam, interdum vel commodo tincidunt, suscipit a diam.</p>\r\n<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ornare malesuada arcu a adipiscing. Nunc tincidunt urna neque. Nulla lacus tortor, auctor sit amet luctus eget, ultricies interdum est. Quisque pretium condimentum lectus, quis consectetur erat suscipit vitae. Proin turpis tellus, vehicula interdum molestie eu, placerat sed orci. Integer enim nisi, dapibus euismod eleifend ac, malesuada eget libero. Quisque rutrum, ipsum ut faucibus dictum, tortor neque lacinia justo, sed ullamcorper dui purus non felis. Fusce augue sem, porta id adipiscing at, iaculis in odio.</p>\r\n</div>','',0,0,0,10,'2013-01-10 18:53:02',778,'','2013-02-01 00:39:41',778,0,'0000-00-00 00:00:00','2013-01-10 18:53:02','0000-00-00 00:00:00','{\"image_intro\":\"images\\/powered_by.png\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',4,0,14,'','',1,31,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(4,43,'¿Quiénes Somos?','quienes-somos','','<table class=\"content-table\">\r\n<tbody>\r\n<tr>\r\n<td class=\"content-image content-padding-bottom\"><img src=\"images/quienes_somos/foto_granya.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-bottom\"><strong>GRANYA GONZÁLEZ</strong>\r\n<ul class=\"content-list\">\r\n<li>Licenciada en Nutrición y Dietética, Universidad Central de Venezuela.</li>\r\n<li>Postgrado en Ciencias de Alimentos, Universidad Simón Bolívar.</li>\r\n<li>Cursos de Análisis Transaccional, Biodanza y Bioenergética.</li>\r\n<li>Entrenamiento de Endermologie, L:P:G., (U.S.A.).</li>\r\n<li>Entrenamiento MIOLIFT Facial, (Francia).</li>\r\n<li>Entrenamiento de Laser Facial, (Caracas).</li>\r\n<li>Nutricionista, Hospital Universitario de Caracas.</li>\r\n<li>Nutricionista, Centro Médico - Docente la Trinidad.</li>\r\n<li>Nutricionista, Centro Nacional de Diabetes.</li>\r\n<li>Director, Centro de Estética Granya González.</li>\r\n<li>Terapeuta Certificada, de Hipnosis para Adelgazar, BANDA GÁSTRICA VIRTUAL.</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/quienes_somos/foto_jenny.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>JENNY HALLAK</strong>\r\n<ul class=\"content-list\">\r\n<li>Licenciada en Nutrición y Dietética, Universidad Central de Venezuela.</li>\r\n<li>Múltiples cursos en el área de Estética Corporal: Carboxiterapia, Lipomassage, Ultracavitación, Radiofrecuencia corporal y facial.</li>\r\n<li>Gerente, Centro de Estética Granya González.</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-shadow\"><img src=\"images/quienes_somos/foto_anamaria.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-shadow\"><strong>ANA MARIA MORADEI</strong>\r\n<ul class=\"content-list\">\r\n<li>Médico Cirujano, Universidad Central de Venezuela.</li>\r\n<li>Nutrición Clínica, Universidad Simón Bolívar</li>\r\n<li>Múltiples cursos en el área de Medicina Estética: Mesoterapía, Rejuvenecimiento Facial, Cosmiatría, Flebología, Antienvejecimiento, Drenaje Linfático, Botox.</li>\r\n<li>Médico Nutrólogo, Centro de Estética Granya González.</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','',1,0,0,2,'2013-01-10 18:54:53',778,'','2013-02-13 17:57:10',778,0,'0000-00-00 00:00:00','2013-01-10 18:54:53','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',66,0,10,'','',1,135,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(5,44,' Los beneficios de la dieta se reducen si duermes poco','noticia-1','','<div id=\"lipsum\">Un estudio publicado en la revista Annals of Internal Medicine ha comprobado que aquellas personas que duermen poco pierden menos grasa. La investigación se realizo en dos grupos de personas, uno de ellos dormía ocho horas, mientras que el otro grupo solo dormía cinco horas y medias. Se observo que todos perdían peso, pero aquellas persona que dormían lo necesario (8 horas) lograban deshacerse de más grasa. Además aquellas personas que dormían más tiempo tenían menos apetito. Estos dos factores en conjunto permiten que la persona tenga un peso correcto por más tiempo. La influencia que tiene la falta de sueño sobre el hambre es por la cantidad de hormonas que estimulan el centro del apetito que se encuentra en el cerebro, por lo que este estudio confirma que si se desea perder peso es aconsejable dormir el tiempo suficiente.</div>','',-2,0,0,11,'0000-00-00 00:00:00',778,'','2013-02-06 23:13:49',778,0,'0000-00-00 00:00:00','2013-02-06 23:13:49','0000-00-00 00:00:00','{\"image_intro\":\"images\\/articulos_prensa\\/dormir.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/articulos_prensa\\/dormir.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',6,0,2,'','',1,0,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(6,45,'Delicias que embellecen','delicias-que-embellecen','','<p>Alimentación balanceada, ejercicio físico y buen humor son piezas clave para mantenernos saludables por dentro y por fuera. Y para coronar esta rutina, es de rigor curucutear en la cocina de vez en cuando en busca de esos ingredientes magníficos que nos encanta degustar, y que también sirven de base para preparar unas nutritivas envolturas embellecedoras que acarician la piel relajando los tejidos, liberándola de células muertas, hidratándola y tonificándola hasta dejarla suave, fresca y tentadora. <br /><br />Hay un sinfín de recetas caseras, pero nosotros preferimos husmear en algunos sitios especializados donde estos aderezos a base de miel y avena, fresas, naranjas, uvas, algas y chocolate, son verdaderas exquisiteces. Empecemos con las fresas. Este delicioso fruto cítrico tiene sorprendentes propiedades exfoliantes porque equilibra el PH de la piel desde adentro. Además, contiene enzimas y ácidos beta-hidróxidos que ayudan a eliminar las células muertas y dejan la piel radiante.  Seguir leyendo en: <a href=\"http://www.revistadominical.com.ve/Noticias/Salud-y-Belleza/Delicias-que-embellecen.aspx\">Revista Dominical</a>.</p>','',1,0,0,11,'2013-02-01 15:42:37',778,'','2013-02-06 23:08:15',778,0,'0000-00-00 00:00:00','2013-02-01 15:42:37','0000-00-00 00:00:00','{\"image_intro\":\"images\\/articulos_prensa\\/embellecercongusto.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/articulos_prensa\\/embellecercongusto.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',3,0,6,'','',1,5,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(7,47,'Banda Gástrica Virtual','banda-gastrica-virtual','','<p>La Banda Gástrica Virtual (BGV) es un tratamiento psicológico de la obesidad que hace uso de todos los recursos de la hipnosis y de la reprogramación subliminal, operando precisamente sobre el otro extremo del problema, sobre el deseo.<br /><br />Y no solo disminuye el deseo de comer sino que se implantan en el inconsciente nuevas pautas de conducta frente a la comida. La OBESIDAD es un verdadero flagelo que azota a nuestra sociedad y que afecta de manera directa o indirecta a todas las familias.<br /><br />Se logra bajar de peso a partir de la disminución del deseo y de un cambio en las conductas. Puede ser acompañando una dieta o simplemente cuidándose en la elección de las comidas.<br /><br />La banda gástrica virtual, Se trata de un enfoque psicológico del problema, con la utilización de los recursos de la hipnosis y la reprogramación subliminal tendiente a disminución del peso corporal, no a partir de la prohibición externa, sino de la disminución del deseo, lo que evita el ciclo de recuperación de peso común a todos los otros tratamientos.<br /><br />No está enfrentado con otros tratamientos ni con los recursos quirúrgicos: al contrario. Facilita su éxito.</p>','',0,0,0,10,'2013-02-01 16:26:48',778,'','2013-02-01 16:39:27',778,0,'0000-00-00 00:00:00','2013-02-01 16:26:48','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/granya1.jpeg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/granya1.jpeg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',3,0,13,'','',1,1,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(8,48,'10 recomendaciones sobre la lactancia materna según la OMS','10-recomendaciones-sobre-la-lactancia-materna-segun-la-oms','','<p>1-    La lactancia materna debe ser exclusiva durante los primeros 6 meses de vida.<br /><br />2-    Aporta los nutrientes que el niño o niña necesita, es inocua y contiene anticuerpos que ayuda a proteger al lactante de enfermedades. <br /><br />3-    Debe comenzarse en la primera hora de vida<br /><br />4-    Debe darse con la frecuencia que quiera el niño, día y noche.<br /><br />5-    No es aconsejable el uso de biberones y chupones.<br /><br />6-    Es aconsejable la lactancia materna también para la madre, ya que reduce el riesgo de cáncer de mama y ovarios y ayuda a recuperar el peso anterior al embarazo.<br /><br />7-    No es aconsejable la leche artificial ya que no contiene los anticuerpos y puede enfermedades transmitidas por el agua utilizada para reconstituir la leche.<br /><br />8-    En mujeres infectadas por el VIH, la OMS recomienda la lactancia exclusivamente materna durante los primeros seis meses, a no ser que la lactancia artificial sea viable, asequible, sostenible y segura.<br /><br />9-    La lactancia materna ayuda a formar un vínculo entre la madre y el lactante.<br /><br />10- La leche materna es fácil de conseguir y asequible, lo cual ayuda a garantizar que el lactante tenga suficiente alimento.</p>','',0,0,0,11,'2013-01-01 16:46:54',778,'','2013-02-06 23:04:01',778,778,'2013-02-27 20:04:58','2013-01-01 16:46:54','0000-00-00 00:00:00','{\"image_intro\":\"images\\/articulos_prensa\\/lactancia.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/articulos_prensa\\/lactancia.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,4,'','',1,0,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(9,49,'Las dietas hipocalóricas mejoran la función cardíaca','las-dietas-hipocaloricas-mejoran-la-funcion-cardiaca','','<p>Según un estudio realizado por  el Centro Médico de la Universidad de Leiden en los Países Bajos la función cardiaca mejoro en personas obesas con diabetes tipo 2 luego de haber realizado una dieta hipocalórica.<br /><br />Los investigadores midieron el Índice de Masa Corporal (IMC) y usaron IRM por para analizar la función cardiaca y la grasa que rodea el corazón y se observo que luego de 4 meses de seguir una dieta hipocalórica el IMC promedio  disminuyo de 35.3 a 27.5 y la grasa pericardica se redujo de 39 a 31 mililitros.<br /><br />Tras otros 14 meses de seguimiento en que los participantes realizaban una dieta regular, el IMC promedio aumentó a 31.7, pero la grasa pericárdica solo se elevó ligeramente a 32 ml. Aunque los resultados muestran que el estilo de vida parece proveer beneficios cardiacos más significativos que los fármacos las personas obesas no deben de intentar consumir una dieta hipocalórica solas. Siempre debe estar bajo supervisión médica.</p>','',1,0,0,11,'2013-02-06 23:07:37',778,'','2013-02-06 23:09:34',778,0,'0000-00-00 00:00:00','2013-02-06 23:07:37','0000-00-00 00:00:00','{\"image_intro\":\"images\\/articulos_prensa\\/dieta_hipercalorica.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/articulos_prensa\\/dieta_hipercalorica.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',4,0,5,'','',1,1,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(10,50,'Los beneficios de la dieta se reducen si duermes poco','los-beneficios-de-la-dieta-se-reducen-si-duermes-poco','','<div id=\"lipsum\">Un estudio publicado en la revista Annals of Internal Medicine ha comprobado que aquellas personas que duermen poco pierden menos grasa. La investigación se realizo en dos grupos de personas, uno de ellos dormía ocho horas, mientras que el otro grupo solo dormía cinco horas y medias. Se observo que todos perdían peso, pero aquellas persona que dormían lo necesario (8 horas) lograban deshacerse de más grasa. Además aquellas personas que dormían más tiempo tenían menos apetito. Estos dos factores en conjunto permiten que la persona tenga un peso correcto por más tiempo. La influencia que tiene la falta de sueño sobre el hambre es por la cantidad de hormonas que estimulan el centro del apetito que se encuentra en el cerebro, por lo que este estudio confirma que si se desea perder peso es aconsejable dormir el tiempo suficiente.</div>\r\n<p> </p>','',1,0,0,11,'2013-02-06 23:15:41',778,'','2013-02-27 21:52:30',778,778,'2013-02-27 21:52:30','2013-02-06 23:15:41','0000-00-00 00:00:00','{\"image_intro\":\"images\\/articulos_prensa\\/dormir.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/articulos_prensa\\/dormir.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":\"http:\\/\\/www.youtube.com\\/watch?v=pAF8I_d6Q-k\",\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,3,'','',1,3,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(11,51,'La mejor medicina es reírse','reir','','<p>La mejor medicina para el cuerpo es reírse. 100 a 200 carcajadas equivalen a 10 minutos de jogging, baja el estrés y aumenta los anticuerpos.<br /><br />Cuando reimos, el cerebro libera endorfinas, una hormona que incrementa nuestro estado de felicidad y bienestar en todo el cuerpo, disminuyendo así los sentimientos negativos, los nervios, la ansiedad y el estrés. Está comprobado que ese efecto de la sonrisa, además, es contagioso: cuando sonreimos, generamos en quienes nos están observando la misma sensación de felicidad. Por eso es que una sonrisa también puede ser toda una arma de seducción y conquista.<br /><br />Si sonríes más seguido, los músculos faciales se fortalecen y por tanto, la piel de nuestro rostro se torna más firme y flexible, prevenimos las arrugas y logramos un aspecto más joven y saludable. ¡Reir te quita años de encima! Y tiene muchos beneficios para la salud.<br /><br />Obviamente, es difícil estar sonriendo en todo momento, las 24 horas del día. Las preocupaciones típicas de la rutina, problemas familiares, de pareja, de salud, económicos, de trabajo, en fin, la vida misma genera situaciones que no nos hacen del todo felices. Sin embargo, intenta reir más seguido, aun cuando te encuentres en el peor momento.<br /><br />Rodéate de tus seres queridos, disfruta momentos con tu mascota, sal a caminar al aire libre y en contacto con la naturaleza, practica ejercicio físico, comienza un nuevo hobbie, ayuda a quienes lo necesiten... Sin dudas, valorar lo que tenemos y disfrutar de las pequeñas cosas de la vida, es la mejor receta para sonreir más seguido. ¡Haz el intento!</p>','',-2,0,0,10,'2013-02-06 23:21:55',778,'','2013-02-06 23:23:32',778,0,'0000-00-00 00:00:00','2013-02-06 23:21:55','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/reir.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/reir.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,1,'','',1,0,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(12,52,'Ácido fólico para el embarazo','acido-folico-para-el-embarazo','','<p>Si tienes pensado quedar embarazada, te recomendamos ingerir alimentos ricos en ácido fólico, es una vitamina del grupo B que previene el riesgo de malformaciones congénitas a los descendientes de la mujer embarazada. Esta vitamina se encuentra en mayor proporción en alimentos de origen vegetal como legumbres, cereales integrales, vegetales de hoja verde, germen de trigo, levadura de cerveza, frutos secos y frutas.</p>','',1,0,0,10,'2013-02-06 23:28:02',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-06 23:28:02','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/embarazo.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/embarazo.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',1,0,11,'','',1,4,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(13,53,'Aumentar actividad física','aumentar-actividad-fisica','','<p>Busque maneras de aumentar su actividad física, como por ejemplo: caminar mientras se habla por teléfono, usar las escaleras en lugar del ascensor, lave su carro usted mismo, dedíquele tiempo a la jardinería, entre otros.</p>','',1,0,0,10,'2013-02-06 23:32:08',778,'','2013-02-06 23:32:27',778,0,'0000-00-00 00:00:00','2013-02-06 23:32:08','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/subir_escaleras.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/subir_escaleras.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,12,'','',1,13,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(14,54,'La mejor medicina es reírse','la-mejor-medicina-es-reirse','','<p>La mejor medicina para el cuerpo es reírse. 100 a 200 carcajadas equivalen a 10 minutos de jogging, baja el estrés y aumenta los anticuerpos.<br /><br />Cuando reimos, el cerebro libera endorfinas, una hormona que incrementa nuestro estado de felicidad y bienestar en todo el cuerpo, disminuyendo así los sentimientos negativos, los nervios, la ansiedad y el estrés. Está comprobado que ese efecto de la sonrisa, además, es contagioso: cuando sonreimos, generamos en quienes nos están observando la misma sensación de felicidad. Por eso es que una sonrisa también puede ser toda una arma de seducción y conquista.<br /><br />Si sonríes más seguido, los músculos faciales se fortalecen y por tanto, la piel de nuestro rostro se torna más firme y flexible, prevenimos las arrugas y logramos un aspecto más joven y saludable. ¡Reir te quita años de encima! Y tiene muchos beneficios para la salud.<br /><br />Obviamente, es difícil estar sonriendo en todo momento, las 24 horas del día. Las preocupaciones típicas de la rutina, problemas familiares, de pareja, de salud, económicos, de trabajo, en fin, la vida misma genera situaciones que no nos hacen del todo felices. Sin embargo, intenta reir más seguido, aun cuando te encuentres en el peor momento.<br /><br />Rodéate de tus seres queridos, disfruta momentos con tu mascota, sal a caminar al aire libre y en contacto con la naturaleza, practica ejercicio físico, comienza un nuevo hobbie, ayuda a quienes lo necesiten... Sin dudas, valorar lo que tenemos y disfrutar de las pequeñas cosas de la vida, es la mejor receta para sonreir más seguido. ¡Haz el intento!</p>\r\n<p> </p>','',1,0,0,10,'2013-02-06 23:36:34',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-06 23:36:34','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/reir.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/reir.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',1,0,10,'','',1,14,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(15,55,'Misión y Visión','mision-y-vision','','<table class=\"content-table\">\r\n<tbody>\r\n<tr>\r\n<td class=\"content-image2\"><img src=\"images/institucion.jpg\" border=\"0\" style=\"border: 0;\" /></td>\r\n<td><strong>MISIÓN</strong> <br />El Centro de Endermología y Estética Cristal es un centro integral, donde nos proponemos satisfacer las necesidades de nuestros consumidores, poniendo a su alcance productos y servicios de la más alta calidad, personal calificado, estupendas instalaciones y la más actual tecnología en los equipos utilizados. <br /><br /><strong>VISIÓN</strong> <br />Ser el Centro de Estética más solicitado, actualizado, con la mejor atención y servicio.</td>\r\n</tr>\r\n</tbody>\r\n</table>','',1,0,0,2,'2013-02-06 23:39:29',778,'','2013-02-13 21:55:49',778,778,'2013-02-25 20:49:22','2013-02-06 23:39:29','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',5,0,3,'','',1,32,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(16,56,'Tratamientos Corporales','tratamientos-corporales','','<table class=\"content-table\">\r\n<tbody>\r\n<tr>\r\n<td class=\"content-image content-padding-bottom\"><img src=\"images/corporales/lipomassage.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-bottom\"><strong>Lipomassage</strong><br />Técnica procedente de la endermologie ©, acaba con los problemas de grasa localizada, flacidez y celulitis, utiliza un aparato de alta tecnología LPG, el cual, mediante un sistema de rodillos de última generación, realiza un masaje profundo de la piel y del tejido subcutáneo. Ahora sin cirugía, usted puede adelgazar y modelar su figura de manera rápida y duradera. Es un tratamiento indoloro que responde a una técnica y protocolos muy precisos.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/corporales/ultracavitacion.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>Ultracavitación</strong><br />La ultracavitación, también conocida como liposucción sin cirugía, es una técnica no-invasiva, para moldear el cuerpo y eliminar celulitis que logra resultados altamente satisfactorios en reducción de volumen graso desde las primeras sesiones. La tecnología de ultrasonidos de alta frecuencia permite tratar de forma selectiva las células grasas produciendo su ruptura sin dañar los tejidos de alrededor.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/corporales/carboxiterapia.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>Carboxiterapia</strong><br />Aplicación subcutánea de CO2, que estimulan a los receptores beta-adrenérgicos de las células adiposas produciendo Lipólisis (destrucción), para la eliminación de tejido graso y celulitis.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/corporales/endermoterapia_vibratoria.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>Endermoterapia Vibratoria</strong><br />Técnica no invasiva que consiste en el empleo de una máquina de asistencia vibratoria, tipo GX-99, cuyo cabezal, brinda un energético masaje sobre el tejido, produciendo movilización, reducción y moldeamiento.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/corporales/electroestimulacion.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>Electroestimulación</strong><br />Técnica que produce la contracción involuntaria del musculo. Esta indicado para la hipotonía muscular del abdomen, glúteos y extremidades, también es muy recomendado para el fortalecimiento del tono muscular en post parto.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/corporales/electrolipolisis.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>Electrolipólisis</strong><br />Actúa sobre el tejido graso a través de la aplicación de microcorrientes que estimulan lipólisis de las células adiposas (células que almacenan la grasa).</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-shadow\"><img src=\"images/corporales/drenaje_linfatico.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-shadow\"><strong>Drenaje Linfático</strong><br />Es una técnica de masoterapia que se engloba en las técnicas de masaje terapéutico. Es una forma de masaje que favorece el funcionamiento del sistema linfático, y se realiza con el fin de drenar o desplazar la linfa que por cualquier causa se encuentra estancada en territorios linfáticos.</td>\r\n</tr>\r\n</tbody>\r\n</table>','',1,0,0,2,'2013-02-08 00:08:19',778,'','2013-02-25 19:32:11',778,0,'0000-00-00 00:00:00','2013-02-08 00:08:19','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',6,0,9,'','',1,41,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(17,57,'Tratamientos Faciales','tratamientos-faciales','','<table class=\"content-table\">\r\n<tbody>\r\n<tr>\r\n<td class=\"content-image content-padding-bottom\"><img src=\"images/faciales/limpieza_hidratacion.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-bottom\"><strong>Limpieza e Hidratación Profunda</strong><br />Exfoliación, extracción, hidratación más oxigenación.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/faciales/biocomputer.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>Biocomputer</strong><br />Hidrata, nutre y tonifica músculos de cara y cuello, a través de la aplicación de microelectricidad, serum y colágeno.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-shadow\"><img src=\"images/faciales/radiofrecuencia.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-shadow\"><strong>Radiofrecuencia Facial</strong><br />Radica en la aplicación de radiaciones electromagnéticas para acceder a las capas más profundas de la piel, con el fin de provocar una gran movilización molecular y energética en el tejido, produce un calentamiento profundo de la piel y del tejido graso subcutáneo, que conduce a la contracción inmediata del colágeno dérmico, con el consiguiente efecto lifting o tensor.</td>\r\n</tr>\r\n</tbody>\r\n</table>','',1,0,0,2,'2013-02-08 00:08:44',778,'','2013-02-25 19:33:59',778,0,'0000-00-00 00:00:00','2013-02-08 00:08:44','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',4,0,8,'','',1,26,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(18,58,'Tratamientos de Relajación','tratamientos-de-relajacion','','<table class=\"content-table\">\r\n<tbody>\r\n<tr>\r\n<td class=\"content-image content-padding-bottom\"><img src=\"images/relajacion/masaje.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-bottom\"><strong>Masaje Antiestrés</strong><br />Masajes de relajación profunda para el alivio de las tensiones musculares. Se emplean diversas técnicas según las necesidades del paciente y la formación del terapeuta.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-shadow\"><img src=\"images/relajacion/envoltura.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-shadow\"><strong>Envolturas de Alga, Barro o Chocolate</strong><br />Se aplican en todo el cuerpo para aprovechar las propiedades nutritivas, relajantes, antinflamatorias y vitalizadoras de diversas sustancias como: el barro el chocolate y algas marinas.</td>\r\n</tr>\r\n</tbody>\r\n</table>','',1,0,0,2,'2013-02-08 00:09:10',778,'','2013-02-25 19:32:58',778,0,'0000-00-00 00:00:00','2013-02-08 00:09:10','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',3,0,7,'','',1,10,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(19,59,'Tratamientos Médicos','tratamientos-medicos','','<table class=\"content-table\">\r\n<tbody>\r\n<tr>\r\n<td class=\"content-image content-padding-bottom\"><img src=\"images/medicos/botox.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-bottom\"><strong>Botox</strong><br />Es uno de los tratamientos que ofrece resultados inmediatos para eliminar las arrugas. Esta forma de toxina botulínica, tras su infiltración con una aguja extra fina en el músculo debajo de la piel de la zona que se desea tratar, actúa inhibiendo por relajación el movimiento muscular. Con este efecto se pretende que desaparezcan las arrugas y por tanto proporcionar un aspecto más juvenil en la piel.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/medicos/control.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>Control de Peso y Adelgazamiento</strong><br />Asesoría nutricional para diseñar un régimen alimenticio acorde a las necesidades de cada individuo que le permita bajar de peso de una manera saludable y eficaz.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-padding-bottom content-shadow\"><img src=\"images/medicos/varices.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-padding-bottom content-shadow\"><strong>Eliminación de Várices</strong><br />Se basa en la inyección de una sustancia química que cicatriza las varices, posibilitando su progresiva desaparición. Este método está indicado para las venas varicosas, residuales o arañas vasculares. Obteniéndose un buen resultado en la mayoría de los casos.</td>\r\n</tr>\r\n<tr>\r\n<td class=\"content-image content-padding-top content-shadow\"><img src=\"images/medicos/desintoxicacion.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-top content-shadow\"><strong>Desintoxicación Iónica</strong><br />Permite desintoxicar y reequilibrar energéticamente el organismo. Su acción se basa en la ionización y magnetización de la solución salina que se utiliza en él, mediante electrólisis, solución que al entrar en contacto con el cuerpo, lo estimula mejorando sus funciones.</td>\r\n</tr>\r\n</tbody>\r\n</table>','',1,0,0,2,'2013-02-08 00:09:29',778,'','2013-02-25 19:36:49',778,0,'0000-00-00 00:00:00','2013-02-08 00:09:29','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',3,0,6,'','',1,4,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(20,61,'Información y Talleres','informacion-y-talleres','','<p>La Banda Gástrica Virtual (BGV) es un tratamiento psicológico de la obesidad que hace uso de todos los recursos de la hipnosis y de la reprogramación subliminal, operando precisamente sobre el otro extremo del problema, sobre el deseo.<br /><br />Y no solo disminuye el deseo de comer sino que se implantan en el inconsciente nuevas pautas de conducta frente a la comida. La OBESIDAD es un verdadero flagelo que azota a nuestra sociedad y que afecta de manera directa o indirecta a todas las familias.<br /><br />Se logra bajar de peso a partir de la disminución del deseo y de un cambio en las conductas. Puede ser acompañando una dieta o simplemente cuidándose en la elección de las comidas.<br /><br />La banda gástrica virtual, Se trata de un enfoque psicológico del problema, con la utilización de los recursos de la hipnosis y la reprogramación subliminal tendiente a disminución del peso corporal, no a partir de la prohibición externa, sino de la disminución del deseo, lo que evita el ciclo de recuperación de peso común a todos los otros tratamientos.<br /><br />No está enfrentado con otros tratamientos ni con los recursos quirúrgicos: al contrario. Facilita su éxito.</p>','',1,0,0,2,'2013-02-13 21:34:40',778,'','2013-02-13 21:42:32',778,0,'0000-00-00 00:00:00','2013-02-13 21:34:40','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',4,0,5,'','',1,23,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(21,62,'Inscripción','inscripcion','','<p><strong>PASO 1</strong><br /><br />Realizar el pago por alguna de las siguientes vías:<br />           1) Depósito: Banco Mercantil a nombre de Granya González, cuenta corriente, N° 0105-0114-8211-1407-8034<br />           2) Transferencia Bancaria (mismos datos anteriores)<br />           3) Débito, Crédito, Efectivo o Cheque directamente en el Centro de Endermología<br /><br />Llevar Boucher o comprobante de pago el día del taller (sin excepción, el participante debe presentar su comprobante de pago de otra forma no se le permitirá el acceso al taller).</p>','',1,0,0,2,'2013-02-13 21:34:40',778,'','2013-02-13 21:53:33',778,0,'0000-00-00 00:00:00','2013-02-13 21:34:40','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,4,'','',1,11,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(22,65,'Promociones','promociones','','<table class=\"content-table\">\r\n<tbody>\r\n<tr>\r\n<td class=\"content-image\"><img src=\"images/faciales/limpieza_hidratacion.jpg\" border=\"0\" /></td>\r\n<td class=\"content-padding-bottom\"><strong>Limpieza e Hidratación Profunda</strong><br />Al realizarte este tratamiento, obtén de regalo un masaje relajante facial y una mascarilla de colágeno. ¡No te lo pierdas!</td>\r\n</tr>\r\n</tbody>\r\n</table>','',1,0,0,2,'2013-02-13 22:17:51',778,'','2013-02-25 19:42:24',778,0,'0000-00-00 00:00:00','2013-02-13 22:17:51','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',3,0,2,'','',1,13,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(23,66,'Merluza con Guisantes','merluza-con-guisantes','','<p> </p>\r\n<p> </p>\r\n<p> </p>\r\n<p>Te presentamos una deliciosa saludable receta que sólo aporta 210 calorías por ración y es rica en proteínas. Sólo necesitarás 30 min de tu tiempo para elaborarla. </p>\r\n<p> </p>\r\n<p> </p>\r\n<p> </p>\r\n<p><br /><strong>Ingredientes</strong> (para 2 personas):</p>\r\n<ul class=\"content-list\">\r\n<li>½ kilo de merluza en 2 rodajas</li>\r\n<li>100 gr de guisantes en conserva</li>\r\n<li>Una cebolla</li>\r\n<li>Un diente de ajo</li>\r\n<li>Una cucharada de aceite de oliva</li>\r\n<li>2 cucharaditas de perejil picado</li>\r\n<li>Pan rallado</li>\r\n<li>Unas hebras de azafrán</li>\r\n</ul>\r\n<p><br /><strong>Preparación</strong>:</p>\r\n<ul class=\"content-list\">\r\n<li>Picar finamente el ajo y la cebolla, y echarlos a un sartén grande antiadherente con la cucharada de aceite. Sofreír hasta que la cebolla este blanda.</li>\r\n<li>Salar un poco las rodajas de merluza, rebozarlas con pan rallado por las dos caras y echarlos a un sartén. Cocinarlos por 5 minutos por cada cara.</li>\r\n<li>Incorporar los guisantes con su caldo y el azafrán, removiendo con cuidado para no romper las rodajas. Espolvorear por encima el perejil y servir. </li>\r\n</ul>\r\n<p> </p>','',1,0,0,11,'2013-02-15 00:04:02',778,'','2013-02-15 00:19:41',778,0,'0000-00-00 00:00:00','2013-02-15 00:04:02','0000-00-00 00:00:00','{\"image_intro\":\"images\\/articulos_prensa\\/merluza-guisantes.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/articulos_prensa\\/merluza-guisantes.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',8,0,2,'','',1,11,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(24,67,'Cambios en el  estilo de vida son esenciales para perder peso','cambios-en-el-estilo-de-vida-son-esenciales-para-perder-peso-en-ano-nuevo','','<p>Alenka Ravnik-List, coordinadora del programa de diabetes del Centro Médico Mount Sinai en la ciudad de Nueva York, comenta que muchas personas se propondrán perder peso en 2013, pero solo unos pocos darán los pasos adecuados para lograr el objetivo, asegura la experta.<br /><br />Generalmente Enero es mes del año en que los gimnasios se inundan con nuevos y antiguos miembros listos para los entrenamientos de pérdida de peso  y hacer mercado de comida más saludables. \"Pero, desgraciadamente, las personas con muy buenas intenciones muy a menudo fracasan\".<br /><br />Sin embargo, seguir unas pocas reglas les puede ayudar a cambiar su estilo de vida y a perder peso, afirman los expertos.  Ravnik-List dio los siguientes consejos:<br /><br /></p>\r\n<ul class=\"content-list\">\r\n<li>Lleve un diario con cada comida que haga. Las personas que siguen un diario de comida comen alrededor de un 15 por ciento menos de comida que las que no.</li>\r\n<li>Camine. Las personas sedentarias solo dan unos 3,000 pasos al día. Añadir otros 3,000 pasos le ayudará a mantener su peso actual y dar más de 10,000 pasos al día le ayudará a perder peso.</li>\r\n<li>No se salte el desayuno. La investigación muestra que desayunar cada día puede ayudarle a perder peso y a no aumentarlo.</li>\r\n<li>Vigile las porciones que se sirve. Use platos de tamaño medio para comer, un plato más grande le anima a comer más porque cabe más comida. Llene la mitad del plato con verduras coloridas y la otra mitad con proteína magra y almidones de granos integrales.</li>\r\n<li>Compruebe su peso al menos una vez a la semana. Hacerlo le ayudará a detectar pequeños aumentos de peso antes de que sean demasiado grandes.</li>\r\n<li>No sea demasiado estricto consigo mismo. Todo el mundo tiene algún antojo que no puede evitar, así que no lo evite. Quede con sus amigos una noche y satisfágalo. La moderación es la clave del éxito.</li>\r\n</ul>\r\n<p><br />Siguiendo estos consejos, se sentirá mejor tanto física como mentalmente consigo mismo.</p>\r\n<p><br />FUENTE: Mount Sinai Medical Center, news release, Nov. 26, 2012<br /><br /></p>','',1,0,0,11,'2013-02-15 00:20:56',778,'','2013-02-15 00:45:05',778,0,'0000-00-00 00:00:00','2013-02-15 00:20:56','0000-00-00 00:00:00','{\"image_intro\":\"images\\/articulos_prensa\\/proposito.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/articulos_prensa\\/proposito.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',10,0,1,'','',1,8,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(25,68,'Conducir menos para bajar de peso','conducir-menos-para-bajar-de-peso','','<p>Si desea perder kilos este año, es aconsejable que tenga como propósito conducir menos, así podrá rebajar peso al mismo tiempo que ahorrará en gasolina. Además estará contribuyendo al medio ambiente. <br /><br />\"La obesidad no es problema unidimensional. Podemos realizar cambios individuales que nos afectarán a todos a nivel nacional\", afirmó el autor principal del estudio, Sheldon Jacobson, director del laboratorio de simulación y optimización del departamento de informática de la Universidad de Illinois.<br /><br />Si usted hace cambios saludables como conducir menos, sea por el motivo que usted prefiera (perder peso, ahorrar combustible o contaminar menos), a su cuerpo no le importa por qué lo hace, ya que se beneficia igualmente.</p>\r\n<p>Para ver el impacto que los pequeños cambios en el estilo de vida podrían tener sobre los niveles nacionales de obesidad, Jacobson y colegas diseñaron un modelo estadístico para predecir qué ocurriría si las personas condujeran 1.5 km menos al día o si consumieran 100 calorías menos al día.<br /><br />En las investigaciones se hallaron que si los estadounidenses condujeran 1.5 km menos al día, el IMC bajaría 0.21 puntos después de seis años. Y, si los estadounidenses consumieran 100 calorías menos al día, el IMC bajaría 0.16 puntos en 3 años, según el estudio. Por cada descenso de 0.1 o 0.2 puntos, empezamos a ver cada vez a más gente sana y ahorro de miles de millones de dólares, aseguró Jacobson.<br /><br />Es sencillo reducir esas calorías de la dieta, por ejemplo evitando un par de galletitas o un café con leche de tamaño reducido, también sirve no comer refrigerios después de la cena o deje de comer el postre por la noche.</p>\r\n<p><br />FUENTES: Sheldon Jacobson, Ph.D., professor and director, simulation and optimization lab, department of computer science, University of Illinois, Urbana; Samantha Heller, M.S., R.D., clinical nutrition coordinator, Center for Cancer Care, Griffin Hospital, Darby, Conn.; Dec. 5, 2012, Preventive M.</p>','',1,0,0,11,'2013-02-15 00:53:38',778,'','2013-02-15 01:04:58',778,0,'0000-00-00 00:00:00','2013-02-15 00:53:38','0000-00-00 00:00:00','{\"image_intro\":\"images\\/articulos_prensa\\/caminar.jpeg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/articulos_prensa\\/caminar.jpeg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,0,'','',1,11,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(26,69,'Productos frescos','productos-frescos','','<p>Prefiera productos frescos y del área. Para aquellas personas que viven en o cerca de una zona agrícola, tendrás más acceso a frutas y verduras, de igual forma si vives en una zona costera, podrás obtener pescados y mariscos más frescos y por mejor precio.</p>','',1,0,0,10,'2013-02-15 01:06:02',778,'','2013-02-15 03:31:35',778,0,'0000-00-00 00:00:00','2013-02-15 01:06:02','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/productos_frescos.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/productos_frescos.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',3,0,8,'','',1,0,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(27,70,'Beber vino con moderación','beber-vino-con-moderacion','','<p>Beba vino con mucha moderación y trate de suprimir el resto de las bebidas alcohólicas. Una a dos copas de vino tinto al día es lo recomendado para aprovechar los beneficios de los antioxidantes que contiene la uva.</p>','',1,0,0,10,'2013-02-15 02:13:46',778,'','2013-02-15 03:18:06',778,0,'0000-00-00 00:00:00','2013-02-15 02:13:46','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/vino.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/vino.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,9,'','',1,0,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(28,71,'Evita la comida rápida','evita-la-comida-rapida','','<p>Evita la comida rápida, ya que es comida que contribuye a la obesidad y a otras enfermedades, sin embargo resulta conveniente de vez en cuando consumir una comida rápida, como hamburguesas y pizzas, tratando de evitar las frituras y salsas ricas en grasas como mayonesa, y preferir las opciones hamburguesas que vienen con vegetales. También puede preparar hamburguesas y pizzas en su casa más saludables.</p>','',1,0,0,10,'2013-02-15 03:37:25',778,'','2013-02-15 03:49:10',778,0,'0000-00-00 00:00:00','2013-02-15 03:37:25','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/comida_rapida.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/comida_rapida.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":\"http:\\/\\/www.youtube.com\",\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":\"http:\\/\\/www.youtube.com\",\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',4,0,7,'','',1,0,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(29,72,'Disfruta sensación de saciedad sin excesos','disfruta-sensacion-de-saciedad-sin-excesos','','<p>Disfrute la sensación de saciedad y no se exceda en cantidades, si tiene antojo de chocolate, procure que sea negro y que sea una cantidad pequeña.</p>','',-2,0,0,2,'2013-02-15 03:42:07',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-15 03:42:07','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/chocolate.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/chocolate.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',1,0,0,'','',1,0,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(30,73,'Disfruta sensación de saciedad sin excesos','disfruta-sensacion-de-saciedad-sin-excesos','','<p>Disfrute la sensación de saciedad y no se exceda en cantidades, si tiene antojo de chocolate, procure que sea negro y que sea una cantidad pequeña.</p>','',1,0,0,10,'2013-02-15 03:42:30',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-15 03:42:30','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/chocolate.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/chocolate.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',1,0,6,'','',1,0,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(31,74,'Ingiere menor cantidad de carnes rojas','ingiere-menor-cantidad-de-carnes-rojas','','<p>Ingiere menor cantidad de carnes rojas, ya que existen varios estudios recientes que relacionan a las carnes rojas y procesadas con mayor riesgo de desarrollar enfermedades del corazón y cáncer. Trate de ingerir carnes rojas máximo 3 veces por semana, y prefiera las carnes blancas como pollo y pescado.</p>','',1,0,0,10,'2013-02-15 03:50:42',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-15 03:50:42','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/pollo_pescado.gif\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/pollo_pescado.gif\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',1,0,5,'','',1,1,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(32,75,'Agua en vez de bebidas gaseosas','agua-en-vez-de-bebidas-gaseosas','','<p>Prefiere el agua en lugar de las bebidas gaseosas, ya que suelen contener un alto contenido de azúcar y sodio que resultan en calorías vacías porque no aportan nutrientes beneficiosos al organismo.</p>','',1,0,0,10,'2013-02-15 03:53:26',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-15 03:53:26','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/agua-no-gaseosa.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/agua-no-gaseosa.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',1,0,4,'','',1,1,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(33,76,'Estilo mediterráneo','estilo-mediterraneo','','<p>Lleva un estilo de alimentación mediterráneo, el estilo alimenticio de rico en pescado, carne magra, frutas, vegetales y aceite de oliva, favorece a tu corazón y al control del exceso de peso.</p>','',1,0,0,10,'2013-02-15 04:00:37',778,'','2013-02-15 04:05:18',778,0,'0000-00-00 00:00:00','2013-02-15 04:00:37','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/mediterranea.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/mediterranea.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,3,'','',1,2,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(34,77,'Creatividad en la cocina','creatividad-en-la-cocina','','<p>Sé creativa al momento de cocinar e incorpora más alimentos saludables, como frutas y verduras, en formas que resulten novedosas y apetecibles. Resulta agradable salirse de la rutina de todos los días y explorar alimentos diferentes, como la quinoa que es rico en proteínas.</p>','',1,0,0,10,'2013-02-15 04:13:34',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-15 04:13:34','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/creatividad.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/creatividad.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',1,0,2,'','',1,3,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(35,78,'Elabora lista de mercado','elabora-lista-de-mercado','','<p>Trata de elaborar una lista de lo que necesita antes de ir al supermercado, así evitarás que compres por impulso, ya sea porque el producto esté en oferta o te resulte apetitoso, además debes leer las etiquetas para determinar cuál producto es más saludable para ti.</p>','',1,0,0,10,'2013-02-15 04:21:31',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-15 04:21:31','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',1,0,1,'','',1,33,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(36,79,'Realiza tres comidas','realiza-tres-comidas','','<p>Realiza tres comidas principales y no te saltes el desayuno. Planifica comidas nutritivas que puedas preparar en casa para que sean comidas con menos cantidad de grasa y condimentos. Además, es importante desayunar antes de ir a trabajar para sentirse más satisfecho durante el resto del día.</p>','',1,0,0,10,'2013-02-15 04:40:56',778,'','2013-02-15 04:47:39',778,0,'0000-00-00 00:00:00','2013-02-15 04:40:56','0000-00-00 00:00:00','{\"image_intro\":\"images\\/granya_recomienda\\/3comidas.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/granya_recomienda\\/3comidas.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,0,'','',1,32,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(37,82,'Rob test','rob-test','','<p>Lalala</p>','',1,0,0,14,'2013-02-19 16:36:24',792,'','2013-02-19 20:22:10',778,778,'2013-02-19 21:46:42','2013-02-19 19:23:12','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',5,0,4,'','',1,9,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(38,83,'Test','test','','lala','',0,0,0,14,'2013-02-19 16:44:15',792,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','','',1,0,3,'','',1,0,'',0,'*',''),(50,0,'','','','','',1,0,0,1,'2013-02-19 22:11:46',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','','',1,0,0,'','',0,0,'',0,'',''),(51,86,'Holaaa','holaaa','','<p>:)</p>','',1,0,0,14,'2013-02-21 20:38:23',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','2013-02-21 20:38:23','0000-00-00 00:00:00','','','',1,0,2,'','',1,0,'',0,'*',''),(52,87,'Probando','probando','','<p><img src=\"images/logo.png\" border=\"0\" alt=\"\" /></p>','',0,0,0,14,'2013-02-21 21:15:40',778,'','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','','','',1,0,1,'','',1,1,'',0,'',''),(53,88,'Prueba funcionando','prueba-funcionando','','<p>Lalala</p>','',-2,0,0,14,'2013-02-22 01:13:46',792,'','2013-02-22 01:14:59',778,0,'0000-00-00 00:00:00','2013-02-22 01:14:59','0000-00-00 00:00:00','{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,0,'','',1,1,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*',''),(54,92,'Testimonial','testimonial','','<p>Texto</p>','',1,0,0,14,'2013-02-25 21:14:12',792,'','2013-02-25 21:16:03',778,0,'0000-00-00 00:00:00','2013-02-25 21:16:03','0000-00-00 00:00:00','{\"image_intro\":\"images\\/userdata\\/792\\/Penguins.jpg\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"images\\/userdata\\/792\\/Penguins.jpg\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}','{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}','{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}',2,0,0,'','',1,1,'{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}',0,'*','');
/*!40000 ALTER TABLE `gran_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_content_frontpage`
--

DROP TABLE IF EXISTS `gran_content_frontpage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_content_frontpage` (
  `content_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_content_frontpage`
--

LOCK TABLES `gran_content_frontpage` WRITE;
/*!40000 ALTER TABLE `gran_content_frontpage` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_content_frontpage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_content_rating`
--

DROP TABLE IF EXISTS `gran_content_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_content_rating` (
  `content_id` int(11) NOT NULL DEFAULT '0',
  `rating_sum` int(10) unsigned NOT NULL DEFAULT '0',
  `rating_count` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_content_rating`
--

LOCK TABLES `gran_content_rating` WRITE;
/*!40000 ALTER TABLE `gran_content_rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_content_rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_core_log_searches`
--

DROP TABLE IF EXISTS `gran_core_log_searches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_core_log_searches` (
  `search_term` varchar(128) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_core_log_searches`
--

LOCK TABLES `gran_core_log_searches` WRITE;
/*!40000 ALTER TABLE `gran_core_log_searches` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_core_log_searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_extensions`
--

DROP TABLE IF EXISTS `gran_extensions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_extensions` (
  `extension_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `element` varchar(100) NOT NULL,
  `folder` varchar(100) NOT NULL,
  `client_id` tinyint(3) NOT NULL,
  `enabled` tinyint(3) NOT NULL DEFAULT '1',
  `access` int(10) unsigned NOT NULL DEFAULT '1',
  `protected` tinyint(3) NOT NULL DEFAULT '0',
  `manifest_cache` text NOT NULL,
  `params` text NOT NULL,
  `custom_data` text NOT NULL,
  `system_data` text NOT NULL,
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) DEFAULT '0',
  `state` int(11) DEFAULT '0',
  PRIMARY KEY (`extension_id`),
  KEY `element_clientid` (`element`,`client_id`),
  KEY `element_folder_clientid` (`element`,`folder`,`client_id`),
  KEY `extension` (`type`,`element`,`folder`,`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10061 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_extensions`
--

LOCK TABLES `gran_extensions` WRITE;
/*!40000 ALTER TABLE `gran_extensions` DISABLE KEYS */;
INSERT INTO `gran_extensions` VALUES (1,'com_mailto','component','com_mailto','',0,1,1,1,'{\"legacy\":false,\"name\":\"com_mailto\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_MAILTO_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(2,'com_wrapper','component','com_wrapper','',0,1,1,1,'{\"legacy\":false,\"name\":\"com_wrapper\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_WRAPPER_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(3,'com_admin','component','com_admin','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_admin\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_ADMIN_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(4,'com_banners','component','com_banners','',1,1,1,0,'{\"legacy\":false,\"name\":\"com_banners\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_BANNERS_XML_DESCRIPTION\",\"group\":\"\"}','{\"purchase_type\":\"3\",\"track_impressions\":\"0\",\"track_clicks\":\"0\",\"metakey_prefix\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(5,'com_cache','component','com_cache','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_cache\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_CACHE_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(6,'com_categories','component','com_categories','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_categories\",\"type\":\"component\",\"creationDate\":\"December 2007\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_CATEGORIES_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(7,'com_checkin','component','com_checkin','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_checkin\",\"type\":\"component\",\"creationDate\":\"Unknown\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2008 Open Source Matters. All rights reserved.\\n\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_CHECKIN_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(8,'com_contact','component','com_contact','',1,1,1,0,'{\"legacy\":false,\"name\":\"com_contact\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_CONTACT_XML_DESCRIPTION\",\"group\":\"\"}','{\"show_contact_category\":\"hide\",\"show_contact_list\":\"0\",\"presentation_style\":\"sliders\",\"show_name\":\"1\",\"show_position\":\"1\",\"show_email\":\"0\",\"show_street_address\":\"1\",\"show_suburb\":\"1\",\"show_state\":\"1\",\"show_postcode\":\"1\",\"show_country\":\"1\",\"show_telephone\":\"1\",\"show_mobile\":\"1\",\"show_fax\":\"1\",\"show_webpage\":\"1\",\"show_misc\":\"1\",\"show_image\":\"1\",\"image\":\"\",\"allow_vcard\":\"0\",\"show_articles\":\"0\",\"show_profile\":\"0\",\"show_links\":\"0\",\"linka_name\":\"\",\"linkb_name\":\"\",\"linkc_name\":\"\",\"linkd_name\":\"\",\"linke_name\":\"\",\"contact_icons\":\"0\",\"icon_address\":\"\",\"icon_email\":\"\",\"icon_telephone\":\"\",\"icon_mobile\":\"\",\"icon_fax\":\"\",\"icon_misc\":\"\",\"show_headings\":\"1\",\"show_position_headings\":\"1\",\"show_email_headings\":\"0\",\"show_telephone_headings\":\"1\",\"show_mobile_headings\":\"0\",\"show_fax_headings\":\"0\",\"allow_vcard_headings\":\"0\",\"show_suburb_headings\":\"1\",\"show_state_headings\":\"1\",\"show_country_headings\":\"1\",\"show_email_form\":\"1\",\"show_email_copy\":\"1\",\"banned_email\":\"\",\"banned_subject\":\"\",\"banned_text\":\"\",\"validate_session\":\"1\",\"custom_reply\":\"0\",\"redirect\":\"\",\"show_category_crumb\":\"0\",\"metakey\":\"\",\"metadesc\":\"\",\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(9,'com_cpanel','component','com_cpanel','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_cpanel\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_CPANEL_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(10,'com_installer','component','com_installer','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_installer\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_INSTALLER_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(11,'com_languages','component','com_languages','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_languages\",\"type\":\"component\",\"creationDate\":\"2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_LANGUAGES_XML_DESCRIPTION\",\"group\":\"\"}','{\"administrator\":\"es-ES\",\"site\":\"es-ES\"}','','',0,'0000-00-00 00:00:00',0,0),(12,'com_login','component','com_login','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_login\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_LOGIN_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(13,'com_media','component','com_media','',1,1,0,1,'{\"legacy\":false,\"name\":\"com_media\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_MEDIA_XML_DESCRIPTION\",\"group\":\"\"}','{\"upload_extensions\":\"bmp,csv,doc,gif,ico,jpg,jpeg,odg,odp,ods,odt,pdf,png,ppt,swf,txt,xcf,xls,BMP,CSV,DOC,GIF,ICO,JPG,JPEG,ODG,ODP,ODS,ODT,PDF,PNG,PPT,SWF,TXT,XCF,XLS\",\"upload_maxsize\":\"10\",\"file_path\":\"images\",\"image_path\":\"images\",\"restrict_uploads\":\"1\",\"check_mime\":\"1\",\"image_extensions\":\"bmp,gif,jpg,png\",\"ignore_extensions\":\"\",\"upload_mime\":\"image\\/jpeg,image\\/gif,image\\/png,image\\/bmp,application\\/x-shockwave-flash,application\\/msword,application\\/excel,application\\/pdf,application\\/powerpoint,text\\/plain,application\\/x-zip\",\"upload_mime_illegal\":\"text\\/html\",\"enable_flash\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(14,'com_menus','component','com_menus','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_menus\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_MENUS_XML_DESCRIPTION\",\"group\":\"\"}','{\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(15,'com_messages','component','com_messages','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_messages\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_MESSAGES_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(16,'com_modules','component','com_modules','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_modules\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_MODULES_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(17,'com_newsfeeds','component','com_newsfeeds','',1,1,1,0,'{\"legacy\":false,\"name\":\"com_newsfeeds\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_NEWSFEEDS_XML_DESCRIPTION\",\"group\":\"\"}','{\"show_feed_image\":\"1\",\"show_feed_description\":\"1\",\"show_item_description\":\"1\",\"feed_word_count\":\"0\",\"show_headings\":\"1\",\"show_name\":\"1\",\"show_articles\":\"0\",\"show_link\":\"1\",\"show_description\":\"1\",\"show_description_image\":\"1\",\"display_num\":\"\",\"show_pagination_limit\":\"1\",\"show_pagination\":\"1\",\"show_pagination_results\":\"1\",\"show_cat_items\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(18,'com_plugins','component','com_plugins','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_plugins\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_PLUGINS_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(19,'com_search','component','com_search','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_search\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_SEARCH_XML_DESCRIPTION\",\"group\":\"\"}','{\"enabled\":\"0\",\"show_date\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(20,'com_templates','component','com_templates','',1,1,1,1,'{\"legacy\":false,\"name\":\"com_templates\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_TEMPLATES_XML_DESCRIPTION\",\"group\":\"\"}','{\"template_positions_display\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(21,'com_weblinks','component','com_weblinks','',1,1,1,0,'{\"legacy\":false,\"name\":\"com_weblinks\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_WEBLINKS_XML_DESCRIPTION\",\"group\":\"\"}','{\"show_comp_description\":\"1\",\"comp_description\":\"\",\"show_link_hits\":\"1\",\"show_link_description\":\"1\",\"show_other_cats\":\"0\",\"show_headings\":\"0\",\"show_numbers\":\"0\",\"show_report\":\"1\",\"count_clicks\":\"1\",\"target\":\"0\",\"link_icons\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(22,'com_content','component','com_content','',1,1,0,1,'{\"legacy\":false,\"name\":\"com_content\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_CONTENT_XML_DESCRIPTION\",\"group\":\"\"}','{\"article_layout\":\"_:default\",\"show_title\":\"1\",\"link_titles\":\"1\",\"show_intro\":\"1\",\"show_category\":\"1\",\"link_category\":\"1\",\"show_parent_category\":\"0\",\"link_parent_category\":\"0\",\"show_author\":\"0\",\"link_author\":\"0\",\"show_create_date\":\"0\",\"show_modify_date\":\"0\",\"show_publish_date\":\"1\",\"show_item_navigation\":\"0\",\"show_vote\":\"0\",\"show_readmore\":\"1\",\"show_readmore_title\":\"1\",\"readmore_limit\":\"100\",\"show_icons\":\"0\",\"show_print_icon\":\"0\",\"show_email_icon\":\"0\",\"show_hits\":\"0\",\"show_noauth\":\"0\",\"urls_position\":\"0\",\"show_publishing_options\":\"1\",\"show_article_options\":\"1\",\"show_urls_images_frontend\":\"0\",\"show_urls_images_backend\":\"1\",\"targeta\":0,\"targetb\":0,\"targetc\":0,\"float_intro\":\"left\",\"float_fulltext\":\"left\",\"category_layout\":\"_:default\",\"show_category_title\":\"0\",\"show_description\":\"0\",\"show_description_image\":\"0\",\"maxLevel\":\"1\",\"show_empty_categories\":\"0\",\"show_no_articles\":\"1\",\"show_subcat_desc\":\"1\",\"show_cat_num_articles\":\"0\",\"show_base_description\":\"1\",\"maxLevelcat\":\"-1\",\"show_empty_categories_cat\":\"0\",\"show_subcat_desc_cat\":\"1\",\"show_cat_num_articles_cat\":\"1\",\"num_leading_articles\":\"1\",\"num_intro_articles\":\"4\",\"num_columns\":\"2\",\"num_links\":\"4\",\"multi_column_order\":\"0\",\"show_subcategory_content\":\"0\",\"show_pagination_limit\":\"1\",\"filter_field\":\"hide\",\"show_headings\":\"1\",\"list_show_date\":\"0\",\"date_format\":\"\",\"list_show_hits\":\"1\",\"list_show_author\":\"1\",\"orderby_pri\":\"order\",\"orderby_sec\":\"rdate\",\"order_date\":\"published\",\"show_pagination\":\"2\",\"show_pagination_results\":\"1\",\"show_feed_link\":\"1\",\"feed_summary\":\"0\",\"feed_show_readmore\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(23,'com_config','component','com_config','',1,1,0,1,'{\"legacy\":false,\"name\":\"com_config\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_CONFIG_XML_DESCRIPTION\",\"group\":\"\"}','{\"filters\":{\"1\":{\"filter_type\":\"NH\",\"filter_tags\":\"\",\"filter_attributes\":\"\"},\"6\":{\"filter_type\":\"BL\",\"filter_tags\":\"\",\"filter_attributes\":\"\"},\"7\":{\"filter_type\":\"NONE\",\"filter_tags\":\"\",\"filter_attributes\":\"\"},\"2\":{\"filter_type\":\"NH\",\"filter_tags\":\"\",\"filter_attributes\":\"\"},\"3\":{\"filter_type\":\"BL\",\"filter_tags\":\"\",\"filter_attributes\":\"\"},\"4\":{\"filter_type\":\"BL\",\"filter_tags\":\"\",\"filter_attributes\":\"\"},\"5\":{\"filter_type\":\"BL\",\"filter_tags\":\"\",\"filter_attributes\":\"\"},\"8\":{\"filter_type\":\"NONE\",\"filter_tags\":\"\",\"filter_attributes\":\"\"}}}','','',0,'0000-00-00 00:00:00',0,0),(24,'com_redirect','component','com_redirect','',1,1,0,1,'{\"legacy\":false,\"name\":\"com_redirect\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_REDIRECT_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(25,'com_users','component','com_users','',1,1,0,1,'{\"legacy\":false,\"name\":\"com_users\",\"type\":\"component\",\"creationDate\":\"April 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_USERS_XML_DESCRIPTION\",\"group\":\"\"}','{\"allowUserRegistration\":\"1\",\"new_usertype\":\"2\",\"useractivation\":\"1\",\"frontend_userparams\":\"1\",\"mailSubjectPrefix\":\"\",\"mailBodySuffix\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(27,'com_finder','component','com_finder','',1,1,0,0,'{\"legacy\":false,\"name\":\"com_finder\",\"type\":\"component\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_FINDER_XML_DESCRIPTION\",\"group\":\"\"}','{\"show_description\":\"1\",\"description_length\":255,\"allow_empty_query\":\"0\",\"show_url\":\"1\",\"show_advanced\":\"1\",\"expand_advanced\":\"0\",\"show_date_filters\":\"0\",\"highlight_terms\":\"1\",\"opensearch_name\":\"\",\"opensearch_description\":\"\",\"batch_size\":\"50\",\"memory_table_limit\":30000,\"title_multiplier\":\"1.7\",\"text_multiplier\":\"0.7\",\"meta_multiplier\":\"1.2\",\"path_multiplier\":\"2.0\",\"misc_multiplier\":\"0.3\",\"stemmer\":\"snowball\"}','','',0,'0000-00-00 00:00:00',0,0),(28,'com_joomlaupdate','component','com_joomlaupdate','',1,1,0,1,'{\"legacy\":false,\"name\":\"com_joomlaupdate\",\"type\":\"component\",\"creationDate\":\"February 2012\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"COM_JOOMLAUPDATE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(100,'PHPMailer','library','phpmailer','',0,1,1,1,'{\"legacy\":false,\"name\":\"PHPMailer\",\"type\":\"library\",\"creationDate\":\"2001\",\"author\":\"PHPMailer\",\"copyright\":\"(c) 2001-2003, Brent R. Matzelle, (c) 2004-2009, Andy Prevost. All Rights Reserved., (c) 2010-2011, Jim Jagielski. All Rights Reserved.\",\"authorEmail\":\"jimjag@gmail.com\",\"authorUrl\":\"https:\\/\\/code.google.com\\/a\\/apache-extras.org\\/p\\/phpmailer\\/\",\"version\":\"5.2\",\"description\":\"LIB_PHPMAILER_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(101,'SimplePie','library','simplepie','',0,1,1,1,'{\"legacy\":false,\"name\":\"SimplePie\",\"type\":\"library\",\"creationDate\":\"2004\",\"author\":\"SimplePie\",\"copyright\":\"Copyright (c) 2004-2009, Ryan Parman and Geoffrey Sneddon\",\"authorEmail\":\"\",\"authorUrl\":\"http:\\/\\/simplepie.org\\/\",\"version\":\"1.2\",\"description\":\"LIB_SIMPLEPIE_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(102,'phputf8','library','phputf8','',0,1,1,1,'{\"legacy\":false,\"name\":\"phputf8\",\"type\":\"library\",\"creationDate\":\"2006\",\"author\":\"Harry Fuecks\",\"copyright\":\"Copyright various authors\",\"authorEmail\":\"hfuecks@gmail.com\",\"authorUrl\":\"http:\\/\\/sourceforge.net\\/projects\\/phputf8\",\"version\":\"0.5\",\"description\":\"LIB_PHPUTF8_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(103,'Joomla! Platform','library','joomla','',0,1,1,1,'{\"legacy\":false,\"name\":\"Joomla! Platform\",\"type\":\"library\",\"creationDate\":\"2008\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"http:\\/\\/www.joomla.org\",\"version\":\"11.4\",\"description\":\"LIB_JOOMLA_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(200,'mod_articles_archive','module','mod_articles_archive','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_articles_archive\",\"type\":\"module\",\"creationDate\":\"July 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters.\\n\\t\\tAll rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_ARTICLES_ARCHIVE_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(201,'mod_articles_latest','module','mod_articles_latest','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_articles_latest\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_LATEST_NEWS_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(202,'mod_articles_popular','module','mod_articles_popular','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_articles_popular\",\"type\":\"module\",\"creationDate\":\"July 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_POPULAR_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(203,'mod_banners','module','mod_banners','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_banners\",\"type\":\"module\",\"creationDate\":\"July 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_BANNERS_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(204,'mod_breadcrumbs','module','mod_breadcrumbs','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_breadcrumbs\",\"type\":\"module\",\"creationDate\":\"July 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_BREADCRUMBS_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(205,'mod_custom','module','mod_custom','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_custom\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_CUSTOM_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(206,'mod_feed','module','mod_feed','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_feed\",\"type\":\"module\",\"creationDate\":\"July 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_FEED_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(207,'mod_footer','module','mod_footer','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_footer\",\"type\":\"module\",\"creationDate\":\"July 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_FOOTER_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(208,'mod_login','module','mod_login','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_login\",\"type\":\"module\",\"creationDate\":\"July 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_LOGIN_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(209,'mod_menu','module','mod_menu','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_menu\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_MENU_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(210,'mod_articles_news','module','mod_articles_news','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_articles_news\",\"type\":\"module\",\"creationDate\":\"July 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_ARTICLES_NEWS_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(211,'mod_random_image','module','mod_random_image','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_random_image\",\"type\":\"module\",\"creationDate\":\"July 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_RANDOM_IMAGE_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(212,'mod_related_items','module','mod_related_items','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_related_items\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_RELATED_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(213,'mod_search','module','mod_search','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_search\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_SEARCH_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(214,'mod_stats','module','mod_stats','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_stats\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_STATS_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(215,'mod_syndicate','module','mod_syndicate','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_syndicate\",\"type\":\"module\",\"creationDate\":\"May 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_SYNDICATE_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(216,'mod_users_latest','module','mod_users_latest','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_users_latest\",\"type\":\"module\",\"creationDate\":\"December 2009\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_USERS_LATEST_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(217,'mod_weblinks','module','mod_weblinks','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_weblinks\",\"type\":\"module\",\"creationDate\":\"July 2009\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_WEBLINKS_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(218,'mod_whosonline','module','mod_whosonline','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_whosonline\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_WHOSONLINE_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(219,'mod_wrapper','module','mod_wrapper','',0,1,1,0,'{\"legacy\":false,\"name\":\"mod_wrapper\",\"type\":\"module\",\"creationDate\":\"October 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_WRAPPER_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(220,'mod_articles_category','module','mod_articles_category','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_articles_category\",\"type\":\"module\",\"creationDate\":\"February 2010\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_ARTICLES_CATEGORY_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(221,'mod_articles_categories','module','mod_articles_categories','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_articles_categories\",\"type\":\"module\",\"creationDate\":\"February 2010\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_ARTICLES_CATEGORIES_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(222,'mod_languages','module','mod_languages','',0,1,1,1,'{\"legacy\":false,\"name\":\"mod_languages\",\"type\":\"module\",\"creationDate\":\"February 2010\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_LANGUAGES_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(223,'mod_finder','module','mod_finder','',0,1,0,0,'{\"legacy\":false,\"name\":\"mod_finder\",\"type\":\"module\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_FINDER_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(300,'mod_custom','module','mod_custom','',1,1,1,1,'{\"legacy\":false,\"name\":\"mod_custom\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_CUSTOM_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(301,'mod_feed','module','mod_feed','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_feed\",\"type\":\"module\",\"creationDate\":\"July 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_FEED_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(302,'mod_latest','module','mod_latest','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_latest\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_LATEST_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(303,'mod_logged','module','mod_logged','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_logged\",\"type\":\"module\",\"creationDate\":\"January 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_LOGGED_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(304,'mod_login','module','mod_login','',1,1,1,1,'{\"legacy\":false,\"name\":\"mod_login\",\"type\":\"module\",\"creationDate\":\"March 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_LOGIN_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(305,'mod_menu','module','mod_menu','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_menu\",\"type\":\"module\",\"creationDate\":\"March 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_MENU_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(307,'mod_popular','module','mod_popular','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_popular\",\"type\":\"module\",\"creationDate\":\"July 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_POPULAR_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(308,'mod_quickicon','module','mod_quickicon','',1,1,1,1,'{\"legacy\":false,\"name\":\"mod_quickicon\",\"type\":\"module\",\"creationDate\":\"Nov 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_QUICKICON_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(309,'mod_status','module','mod_status','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_status\",\"type\":\"module\",\"creationDate\":\"Feb 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_STATUS_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(310,'mod_submenu','module','mod_submenu','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_submenu\",\"type\":\"module\",\"creationDate\":\"Feb 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_SUBMENU_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(311,'mod_title','module','mod_title','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_title\",\"type\":\"module\",\"creationDate\":\"Nov 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_TITLE_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(312,'mod_toolbar','module','mod_toolbar','',1,1,1,1,'{\"legacy\":false,\"name\":\"mod_toolbar\",\"type\":\"module\",\"creationDate\":\"Nov 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_TOOLBAR_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(313,'mod_multilangstatus','module','mod_multilangstatus','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_multilangstatus\",\"type\":\"module\",\"creationDate\":\"September 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_MULTILANGSTATUS_XML_DESCRIPTION\",\"group\":\"\"}','{\"cache\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(314,'mod_version','module','mod_version','',1,1,1,0,'{\"legacy\":false,\"name\":\"mod_version\",\"type\":\"module\",\"creationDate\":\"January 2012\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"MOD_VERSION_XML_DESCRIPTION\",\"group\":\"\"}','{\"format\":\"short\",\"product\":\"1\",\"cache\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(400,'plg_authentication_gmail','plugin','gmail','authentication',0,0,1,0,'{\"legacy\":false,\"name\":\"plg_authentication_gmail\",\"type\":\"plugin\",\"creationDate\":\"February 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_GMAIL_XML_DESCRIPTION\",\"group\":\"\"}','{\"applysuffix\":\"0\",\"suffix\":\"\",\"verifypeer\":\"1\",\"user_blacklist\":\"\"}','','',0,'0000-00-00 00:00:00',1,0),(401,'plg_authentication_joomla','plugin','joomla','authentication',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_authentication_joomla\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_AUTH_JOOMLA_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(402,'plg_authentication_ldap','plugin','ldap','authentication',0,0,1,0,'{\"legacy\":false,\"name\":\"plg_authentication_ldap\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_LDAP_XML_DESCRIPTION\",\"group\":\"\"}','{\"host\":\"\",\"port\":\"389\",\"use_ldapV3\":\"0\",\"negotiate_tls\":\"0\",\"no_referrals\":\"0\",\"auth_method\":\"bind\",\"base_dn\":\"\",\"search_string\":\"\",\"users_dn\":\"\",\"username\":\"admin\",\"password\":\"bobby7\",\"ldap_fullname\":\"fullName\",\"ldap_email\":\"mail\",\"ldap_uid\":\"uid\"}','','',0,'0000-00-00 00:00:00',3,0),(404,'plg_content_emailcloak','plugin','emailcloak','content',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_content_emailcloak\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_CONTENT_EMAILCLOAK_XML_DESCRIPTION\",\"group\":\"\"}','{\"mode\":\"1\"}','','',0,'0000-00-00 00:00:00',1,0),(405,'plg_content_geshi','plugin','geshi','content',0,0,1,0,'{\"legacy\":false,\"name\":\"plg_content_geshi\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"\",\"authorUrl\":\"qbnz.com\\/highlighter\",\"version\":\"2.5.0\",\"description\":\"PLG_CONTENT_GESHI_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',2,0),(406,'plg_content_loadmodule','plugin','loadmodule','content',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_content_loadmodule\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_LOADMODULE_XML_DESCRIPTION\",\"group\":\"\"}','{\"style\":\"xhtml\"}','','',0,'2011-09-18 15:22:50',0,0),(407,'plg_content_pagebreak','plugin','pagebreak','content',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_content_pagebreak\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_CONTENT_PAGEBREAK_XML_DESCRIPTION\",\"group\":\"\"}','{\"title\":\"1\",\"multipage_toc\":\"1\",\"showall\":\"1\"}','','',0,'0000-00-00 00:00:00',4,0),(408,'plg_content_pagenavigation','plugin','pagenavigation','content',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_content_pagenavigation\",\"type\":\"plugin\",\"creationDate\":\"January 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_PAGENAVIGATION_XML_DESCRIPTION\",\"group\":\"\"}','{\"position\":\"1\"}','','',0,'0000-00-00 00:00:00',5,0),(409,'plg_content_vote','plugin','vote','content',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_content_vote\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_VOTE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',6,0),(410,'plg_editors_codemirror','plugin','codemirror','editors',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_editors_codemirror\",\"type\":\"plugin\",\"creationDate\":\"28 March 2011\",\"author\":\"Marijn Haverbeke\",\"copyright\":\"\",\"authorEmail\":\"N\\/A\",\"authorUrl\":\"\",\"version\":\"1.0\",\"description\":\"PLG_CODEMIRROR_XML_DESCRIPTION\",\"group\":\"\"}','{\"linenumbers\":\"0\",\"tabmode\":\"indent\"}','','',0,'0000-00-00 00:00:00',1,0),(411,'plg_editors_none','plugin','none','editors',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_editors_none\",\"type\":\"plugin\",\"creationDate\":\"August 2004\",\"author\":\"Unknown\",\"copyright\":\"\",\"authorEmail\":\"N\\/A\",\"authorUrl\":\"\",\"version\":\"2.5.0\",\"description\":\"PLG_NONE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',2,0),(412,'plg_editors_tinymce','plugin','tinymce','editors',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_editors_tinymce\",\"type\":\"plugin\",\"creationDate\":\"2005-2012\",\"author\":\"Moxiecode Systems AB\",\"copyright\":\"Moxiecode Systems AB\",\"authorEmail\":\"N\\/A\",\"authorUrl\":\"tinymce.moxiecode.com\\/\",\"version\":\"3.5.4.1\",\"description\":\"PLG_TINY_XML_DESCRIPTION\",\"group\":\"\"}','{\"mode\":\"1\",\"skin\":\"0\",\"entity_encoding\":\"raw\",\"lang_mode\":\"0\",\"lang_code\":\"es\",\"text_direction\":\"ltr\",\"content_css\":\"1\",\"content_css_custom\":\"\",\"relative_urls\":\"1\",\"newlines\":\"0\",\"invalid_elements\":\"script,applet,iframe\",\"extended_elements\":\",@[data-lightbox],@[data-spotlight]\",\"toolbar\":\"top\",\"toolbar_align\":\"left\",\"html_height\":\"550\",\"html_width\":\"750\",\"resizing\":\"true\",\"resize_horizontal\":\"false\",\"element_path\":\"1\",\"fonts\":\"1\",\"paste\":\"1\",\"searchreplace\":\"1\",\"insertdate\":\"1\",\"format_date\":\"%Y-%m-%d\",\"inserttime\":\"1\",\"format_time\":\"%H:%M:%S\",\"colors\":\"1\",\"table\":\"1\",\"smilies\":\"1\",\"media\":\"1\",\"hr\":\"1\",\"directionality\":\"1\",\"fullscreen\":\"1\",\"style\":\"1\",\"layer\":\"1\",\"xhtmlxtras\":\"1\",\"visualchars\":\"1\",\"visualblocks\":\"1\",\"nonbreaking\":\"1\",\"template\":\"1\",\"blockquote\":\"1\",\"wordcount\":\"1\",\"advimage\":\"1\",\"advlink\":\"1\",\"advlist\":\"1\",\"autosave\":\"1\",\"contextmenu\":\"1\",\"inlinepopups\":\"1\",\"custom_plugin\":\"\",\"custom_button\":\"\"}','','',778,'2013-02-19 15:58:31',3,0),(413,'plg_editors-xtd_article','plugin','article','editors-xtd',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_editors-xtd_article\",\"type\":\"plugin\",\"creationDate\":\"October 2009\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_ARTICLE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',1,0),(414,'plg_editors-xtd_image','plugin','image','editors-xtd',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_editors-xtd_image\",\"type\":\"plugin\",\"creationDate\":\"August 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_IMAGE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',2,0),(415,'plg_editors-xtd_pagebreak','plugin','pagebreak','editors-xtd',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_editors-xtd_pagebreak\",\"type\":\"plugin\",\"creationDate\":\"August 2004\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_EDITORSXTD_PAGEBREAK_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',3,0),(416,'plg_editors-xtd_readmore','plugin','readmore','editors-xtd',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_editors-xtd_readmore\",\"type\":\"plugin\",\"creationDate\":\"March 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_READMORE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',4,0),(417,'plg_search_categories','plugin','categories','search',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_search_categories\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SEARCH_CATEGORIES_XML_DESCRIPTION\",\"group\":\"\"}','{\"search_limit\":\"50\",\"search_content\":\"1\",\"search_archived\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(418,'plg_search_contacts','plugin','contacts','search',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_search_contacts\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SEARCH_CONTACTS_XML_DESCRIPTION\",\"group\":\"\"}','{\"search_limit\":\"50\",\"search_content\":\"1\",\"search_archived\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(419,'plg_search_content','plugin','content','search',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_search_content\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SEARCH_CONTENT_XML_DESCRIPTION\",\"group\":\"\"}','{\"search_limit\":\"50\",\"search_content\":\"1\",\"search_archived\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(420,'plg_search_newsfeeds','plugin','newsfeeds','search',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_search_newsfeeds\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SEARCH_NEWSFEEDS_XML_DESCRIPTION\",\"group\":\"\"}','{\"search_limit\":\"50\",\"search_content\":\"1\",\"search_archived\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(421,'plg_search_weblinks','plugin','weblinks','search',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_search_weblinks\",\"type\":\"plugin\",\"creationDate\":\"November 2005\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SEARCH_WEBLINKS_XML_DESCRIPTION\",\"group\":\"\"}','{\"search_limit\":\"50\",\"search_content\":\"1\",\"search_archived\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(422,'plg_system_languagefilter','plugin','languagefilter','system',0,0,1,1,'{\"legacy\":false,\"name\":\"plg_system_languagefilter\",\"type\":\"plugin\",\"creationDate\":\"July 2010\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SYSTEM_LANGUAGEFILTER_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',1,0),(423,'plg_system_p3p','plugin','p3p','system',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_system_p3p\",\"type\":\"plugin\",\"creationDate\":\"September 2010\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_P3P_XML_DESCRIPTION\",\"group\":\"\"}','{\"headers\":\"NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM\"}','','',0,'0000-00-00 00:00:00',2,0),(424,'plg_system_cache','plugin','cache','system',0,0,1,1,'{\"legacy\":false,\"name\":\"plg_system_cache\",\"type\":\"plugin\",\"creationDate\":\"February 2007\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_CACHE_XML_DESCRIPTION\",\"group\":\"\"}','{\"browsercache\":\"0\",\"cachetime\":\"15\"}','','',0,'0000-00-00 00:00:00',9,0),(425,'plg_system_debug','plugin','debug','system',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_system_debug\",\"type\":\"plugin\",\"creationDate\":\"December 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_DEBUG_XML_DESCRIPTION\",\"group\":\"\"}','{\"profile\":\"1\",\"queries\":\"1\",\"memory\":\"1\",\"language_files\":\"1\",\"language_strings\":\"1\",\"strip-first\":\"1\",\"strip-prefix\":\"\",\"strip-suffix\":\"\"}','','',0,'0000-00-00 00:00:00',4,0),(426,'plg_system_log','plugin','log','system',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_system_log\",\"type\":\"plugin\",\"creationDate\":\"April 2007\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_LOG_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',5,0),(427,'plg_system_redirect','plugin','redirect','system',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_system_redirect\",\"type\":\"plugin\",\"creationDate\":\"April 2009\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_REDIRECT_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',6,0),(428,'plg_system_remember','plugin','remember','system',0,0,1,1,'{\"legacy\":false,\"name\":\"plg_system_remember\",\"type\":\"plugin\",\"creationDate\":\"April 2007\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_REMEMBER_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',7,0),(429,'plg_system_sef','plugin','sef','system',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_system_sef\",\"type\":\"plugin\",\"creationDate\":\"December 2007\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SEF_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',8,0),(430,'plg_system_logout','plugin','logout','system',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_system_logout\",\"type\":\"plugin\",\"creationDate\":\"April 2009\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SYSTEM_LOGOUT_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',3,0),(431,'plg_user_contactcreator','plugin','contactcreator','user',0,0,1,1,'{\"legacy\":false,\"name\":\"plg_user_contactcreator\",\"type\":\"plugin\",\"creationDate\":\"August 2009\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_CONTACTCREATOR_XML_DESCRIPTION\",\"group\":\"\"}','{\"autowebpage\":\"\",\"category\":\"34\",\"autopublish\":\"0\"}','','',0,'0000-00-00 00:00:00',1,0),(432,'plg_user_joomla','plugin','joomla','user',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_user_joomla\",\"type\":\"plugin\",\"creationDate\":\"December 2006\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2009 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_USER_JOOMLA_XML_DESCRIPTION\",\"group\":\"\"}','{\"autoregister\":\"1\"}','','',0,'0000-00-00 00:00:00',2,0),(433,'plg_user_profile','plugin','profile','user',0,0,1,1,'{\"legacy\":false,\"name\":\"plg_user_profile\",\"type\":\"plugin\",\"creationDate\":\"January 2008\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_USER_PROFILE_XML_DESCRIPTION\",\"group\":\"\"}','{\"register-require_address1\":\"0\",\"register-require_address2\":\"0\",\"register-require_city\":\"1\",\"register-require_region\":\"0\",\"register-require_country\":\"0\",\"register-require_postal_code\":\"0\",\"register-require_phone\":\"1\",\"register-require_website\":\"0\",\"register-require_favoritebook\":\"0\",\"register-require_aboutme\":\"0\",\"register-require_tos\":\"0\",\"register_tos_article\":\"\",\"register-require_dob\":\"0\",\"profile-require_address1\":\"0\",\"profile-require_address2\":\"0\",\"profile-require_city\":\"1\",\"profile-require_region\":\"0\",\"profile-require_country\":\"0\",\"profile-require_postal_code\":\"0\",\"profile-require_phone\":\"1\",\"profile-require_website\":\"0\",\"profile-require_favoritebook\":\"0\",\"profile-require_aboutme\":\"0\",\"profile-require_dob\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(434,'plg_extension_joomla','plugin','joomla','extension',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_extension_joomla\",\"type\":\"plugin\",\"creationDate\":\"May 2010\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_EXTENSION_JOOMLA_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',1,0),(435,'plg_content_joomla','plugin','joomla','content',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_content_joomla\",\"type\":\"plugin\",\"creationDate\":\"November 2010\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_CONTENT_JOOMLA_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(436,'plg_system_languagecode','plugin','languagecode','system',0,0,1,0,'{\"legacy\":false,\"name\":\"plg_system_languagecode\",\"type\":\"plugin\",\"creationDate\":\"November 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SYSTEM_LANGUAGECODE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',10,0),(437,'plg_quickicon_joomlaupdate','plugin','joomlaupdate','quickicon',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_quickicon_joomlaupdate\",\"type\":\"plugin\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_QUICKICON_JOOMLAUPDATE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(438,'plg_quickicon_extensionupdate','plugin','extensionupdate','quickicon',0,1,1,1,'{\"legacy\":false,\"name\":\"plg_quickicon_extensionupdate\",\"type\":\"plugin\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_QUICKICON_EXTENSIONUPDATE_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(439,'plg_captcha_recaptcha','plugin','recaptcha','captcha',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_captcha_recaptcha\",\"type\":\"plugin\",\"creationDate\":\"December 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_CAPTCHA_RECAPTCHA_XML_DESCRIPTION\",\"group\":\"\"}','{\"public_key\":\"\",\"private_key\":\"\",\"theme\":\"clean\"}','','',0,'0000-00-00 00:00:00',0,0),(440,'plg_system_highlight','plugin','highlight','system',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_system_highlight\",\"type\":\"plugin\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_SYSTEM_HIGHLIGHT_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',7,0),(441,'plg_content_finder','plugin','finder','content',0,0,1,0,'{\"legacy\":false,\"name\":\"plg_content_finder\",\"type\":\"plugin\",\"creationDate\":\"December 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_CONTENT_FINDER_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(442,'plg_finder_categories','plugin','categories','finder',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_finder_categories\",\"type\":\"plugin\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_FINDER_CATEGORIES_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',1,0),(443,'plg_finder_contacts','plugin','contacts','finder',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_finder_contacts\",\"type\":\"plugin\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_FINDER_CONTACTS_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',2,0),(444,'plg_finder_content','plugin','content','finder',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_finder_content\",\"type\":\"plugin\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_FINDER_CONTENT_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',3,0),(445,'plg_finder_newsfeeds','plugin','newsfeeds','finder',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_finder_newsfeeds\",\"type\":\"plugin\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_FINDER_NEWSFEEDS_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',4,0),(446,'plg_finder_weblinks','plugin','weblinks','finder',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_finder_weblinks\",\"type\":\"plugin\",\"creationDate\":\"August 2011\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_FINDER_WEBLINKS_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',5,0),(500,'atomic','template','atomic','',0,1,1,0,'{\"legacy\":false,\"name\":\"atomic\",\"type\":\"template\",\"creationDate\":\"10\\/10\\/09\",\"author\":\"Ron Severdia\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.\",\"authorEmail\":\"contact@kontentdesign.com\",\"authorUrl\":\"http:\\/\\/www.kontentdesign.com\",\"version\":\"2.5.0\",\"description\":\"TPL_ATOMIC_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(502,'bluestork','template','bluestork','',1,1,1,0,'{\"legacy\":false,\"name\":\"bluestork\",\"type\":\"template\",\"creationDate\":\"07\\/02\\/09\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"TPL_BLUESTORK_XML_DESCRIPTION\",\"group\":\"\"}','{\"useRoundedCorners\":\"1\",\"showSiteName\":\"0\",\"textBig\":\"0\",\"highContrast\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(503,'beez_20','template','beez_20','',0,1,1,0,'{\"legacy\":false,\"name\":\"beez_20\",\"type\":\"template\",\"creationDate\":\"25 November 2009\",\"author\":\"Angie Radtke\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.\",\"authorEmail\":\"a.radtke@derauftritt.de\",\"authorUrl\":\"http:\\/\\/www.der-auftritt.de\",\"version\":\"2.5.0\",\"description\":\"TPL_BEEZ2_XML_DESCRIPTION\",\"group\":\"\"}','{\"wrapperSmall\":\"53\",\"wrapperLarge\":\"72\",\"sitetitle\":\"\",\"sitedescription\":\"\",\"navposition\":\"center\",\"templatecolor\":\"nature\"}','','',0,'0000-00-00 00:00:00',0,0),(504,'hathor','template','hathor','',1,1,1,0,'{\"legacy\":false,\"name\":\"hathor\",\"type\":\"template\",\"creationDate\":\"May 2010\",\"author\":\"Andrea Tarr\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.\",\"authorEmail\":\"hathor@tarrconsulting.com\",\"authorUrl\":\"http:\\/\\/www.tarrconsulting.com\",\"version\":\"2.5.0\",\"description\":\"TPL_HATHOR_XML_DESCRIPTION\",\"group\":\"\"}','{\"showSiteName\":\"0\",\"colourChoice\":\"0\",\"boldText\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(505,'beez5','template','beez5','',0,1,1,0,'{\"legacy\":false,\"name\":\"beez5\",\"type\":\"template\",\"creationDate\":\"21 May 2010\",\"author\":\"Angie Radtke\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.\",\"authorEmail\":\"a.radtke@derauftritt.de\",\"authorUrl\":\"http:\\/\\/www.der-auftritt.de\",\"version\":\"2.5.0\",\"description\":\"TPL_BEEZ5_XML_DESCRIPTION\",\"group\":\"\"}','{\"wrapperSmall\":\"53\",\"wrapperLarge\":\"72\",\"sitetitle\":\"\",\"sitedescription\":\"\",\"navposition\":\"center\",\"html5\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(600,'English (United Kingdom)','language','en-GB','',0,1,1,1,'{\"legacy\":false,\"name\":\"English (United Kingdom)\",\"type\":\"language\",\"creationDate\":\"2008-03-15\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.5\",\"description\":\"en-GB site language\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(601,'English (United Kingdom)','language','en-GB','',1,1,1,1,'{\"legacy\":false,\"name\":\"English (United Kingdom)\",\"type\":\"language\",\"creationDate\":\"2008-03-15\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.5\",\"description\":\"en-GB administrator language\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(700,'files_joomla','file','joomla','',0,1,1,1,'{\"legacy\":false,\"name\":\"files_joomla\",\"type\":\"file\",\"creationDate\":\"November 2012\",\"author\":\"Joomla! Project\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.8\",\"description\":\"FILES_JOOMLA_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(800,'PKG_JOOMLA','package','pkg_joomla','',0,1,1,1,'{\"legacy\":false,\"name\":\"PKG_JOOMLA\",\"type\":\"package\",\"creationDate\":\"2006\",\"author\":\"Joomla! Project\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"http:\\/\\/www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PKG_JOOMLA_XML_DESCRIPTION\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(10000,'SpanishES','language','es-ES','',0,1,0,0,'{\"legacy\":true,\"name\":\"Spanish (ES)\",\"type\":\"language\",\"creationDate\":\"2012-11-8\",\"author\":\"Spanish Translation Team: Comunidad Joomla\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters and comunidadjoomla.org. All rights reserved.\",\"authorEmail\":\"info@comunidadjoomla.org\",\"authorUrl\":\"www.comunidadjoomla.org\",\"version\":\"2.5.8.1\",\"description\":\"Spanish language pack for Joomla! 2.5.7 - Site\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10001,'SpanishES','language','es-ES','',1,1,0,0,'{\"legacy\":true,\"name\":\"Spanish (ES)\",\"type\":\"language\",\"creationDate\":\"2012-11-8\",\"author\":\"Spanish Translation Team: Comunidad Joomla\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters and comunidadjoomla.org. All rights reserved.\",\"authorEmail\":\"info@comunidadjoomla.org\",\"authorUrl\":\"www.comunidadjoomla.org\",\"version\":\"2.5.8.1\",\"description\":\"Spanish language pack for Joomla! 2.5.8 - Administrator\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10002,'TinyMCE es-ES','file','TinyMCE_es-ES','',0,1,0,0,'{\"legacy\":false,\"name\":\"TinyMCE es-ES\",\"type\":\"file\",\"creationDate\":\"2012-6-18\",\"author\":\"Comunidad Joomla!\",\"copyright\":\"(C) 2010-2012 spanish Translation Team\",\"authorEmail\":\"info@comunidadjoomla.org\",\"authorUrl\":\"http:\\/\\/www.comunidadjoomla.org\",\"version\":\"3.5.2\",\"description\":\"\\n\\t\\t<h2>Successfully installed spanish language pack for TinyMCE 3.5.2 in Joomla 2.5<\\/h2>\\n\\t\\tIf you use other languages than English and spanish, Please make sure that you also installed all other language packs for TinyMCE before you enabling \\\"Automatic Language Selection\\\" through the following steps:<br\\/>\\n\\t\\t<ol>\\n\\t\\t<li>Extensions<\\/li>\\n\\t\\t<li>Plugin Manager<\\/li>\\n\\t\\t<li><a href=\\\"index.php?option=com_plugins&view=plugins&filter_search=Editor - TinyMCE\\\">Editor - TinyMCE<\\/a><\\/li>\\n\\t\\t<li>Basic Options<\\/li>\\n\\t\\t<li>Automatic Language Selection :: Yes<\\/li>\\n\\t\\t<li>Functionality :: Extended (Optional -- If you want to use full functions of TinyMCE)<\\/li>\\n\\t\\t<\\/ol>\\n\\t\\t<p><\\/p>\\n\\t\\t<p>Please report any bugs or issues at the Comunidad Joomla! <a href=\\\"http:\\/\\/foro.comunidadjoomla.org\\/traduccion-ext\\/\\\" target=\\\"_blank\\\">Translation forum<\\/a><\\/p>\\n\\t\\t<p><\\/p>\\n\\t\\t<p>Translated by: <a href=\\\"http:\\/\\/www.comunidadjoomla.org\\\" target=\\\"_blank\\\" title=\\\"\\\">The spanish translation team of Comunidad Joomla!<\\/a><\\/p>\\n\\t\\t<h2>El paquete en espa\\u00f1ol para el editor TinyMCE 3.5.2 se ha instalado con \\u00e9xito sobre Joomla 2.5<\\/h2>\\n\\t\\tSi usted usa otros idiomas adem\\u00e1s del ingl\\u00e9s y el espa\\u00f1ol, por favor, aseg\\u00farese de que tambi\\u00e9n instala los dem\\u00e1s idiomas para el TinyMCE antes de habilitar la opci\\u00f3n \\\"Selecci\\u00f3n autom\\u00e1tica del idioma\\\" por medio de los siguientes pasos:<br\\/>\\n\\t\\t<ol>\\n\\t\\t<li>Extensiones<\\/li>\\n\\t\\t<li>Gestor de plugins<\\/li>\\n\\t\\t<li><a href=\\\"index.php?option=com_plugins&view=plugins&filter_search=Editor - TinyMCE\\\">Editor - TinyMCE<\\/a><\\/li>\\n\\t\\t<li>Opciones b\\u00e1sicas<\\/li>\\n\\t\\t<li>Selecci\\u00f3n autom\\u00e1tica del idioma :: S\\u00ed<\\/li>\\n\\t\\t<li>Funcionalidad :: Extendida (opcional -- Si usted desea usar las funcionalidades al completo del editor TinyMCE)<\\/li>\\n\\t\\t<\\/ol>\\n\\t\\t<p><\\/p>\\n\\t\\t<p>Por favor, reporte cualquier bug o asunto relacionado a nuestro <a href=\\\"http:\\/\\/foro.comunidadjoomla.org\\/traduccion-ext\\/\\\" target=\\\"_blank\\\">Foro de traducciones<\\/a><\\/p>\\n\\t\\t<p><\\/p>\\n\\t\\t<p>Traducci\\u00f3n: <a href=\\\"http:\\/\\/www.comunidadjoomla.org\\\" target=\\\"_blank\\\" title=\\\"\\\">El equipo de traducci\\u00f3n de Comunidad Joomla!<\\/a><\\/p>\\n\\t\\t\\n\\t\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(10003,'es-ES','package','pkg_es-ES','',0,1,1,0,'{\"legacy\":false,\"name\":\"Spanish Language Pack\",\"type\":\"package\",\"creationDate\":\"8 de noviembre del 2012\",\"author\":\"Spanish Translation Team: comunidadjoomla.org\",\"copyright\":\"Copyright (C) 2005 - 2012 comunidadjoomla.org and Open Source Matters. All rights reserved.\",\"authorEmail\":\"info@comunidadjoomla.org\",\"authorUrl\":\"www.comunidadjoomla.org\",\"version\":\"2.5.8.1\",\"description\":\"\\n\\t\\t<h2>Successfully installed the spanish language pack for Joomla! 2.5.8 with the TinyMCE 3.5.2 language files included.<\\/h2>\\n\\t\\tIf you use other languages than English and spanish, please make sure that you also installed all other language packs for TinyMCE before you enabling \\\"Automatic Language Selection\\\" through the following steps:<br\\/>\\n\\t\\t<ol>\\n\\t\\t<li>Extensions<\\/li>\\n\\t\\t<li>Plugin Manager<\\/li>\\n\\t\\t<li><a href=\\\"index.php?option=com_plugins&view=plugins&filter_search=Editor - TinyMCE\\\">Editor - TinyMCE<\\/a><\\/li>\\n\\t\\t<li>Basic Options<\\/li>\\n\\t\\t<li>Automatic Language Selection :: Yes<\\/li>\\n\\t\\t<li>Functionality :: Extended (Optional -- If you want to use full functions of TinyMCE)<\\/li>\\n\\t\\t<\\/ol>\\n\\t\\t<p><\\/p>\\n\\t\\t<p>Please report any bugs or issues at the Comunidad Joomla! <a href=\\\"http:\\/\\/foro.comunidadjoomla.org\\/traduccion-ext\\/\\\" target=\\\"_blank\\\">Translation forum<\\/a><\\/p>\\n\\t\\t<p><\\/p>\\n\\t\\t<p>Translated by: <a href=\\\"http:\\/\\/www.comunidadjoomla.org\\\" target=\\\"_blank\\\" title=\\\"\\\">The spanish translation team of Comunidad Joomla!<\\/a><\\/p>\\n\\t\\t<h2>El paquete en espa\\u00f1ol para Joomla! 2.5.8, incluyendo los archivos del editor TinyMCE 3.5.2, se ha instalado correctamente<\\/h2>\\n\\t\\tReferente al idioma del editor TinyMCE, si usted usa otros idiomas adem\\u00e1s del ingl\\u00e9s y el espa\\u00f1ol, por favor, aseg\\u00farese de que tambi\\u00e9n instala los dem\\u00e1s idiomas para el TinyMCE antes de habilitar la opci\\u00f3n \\\"Selecci\\u00f3n autom\\u00e1tica del idioma\\\" por medio de los siguientes pasos:<br\\/>\\n\\t\\t<ol>\\n\\t\\t<li>Extensiones<\\/li>\\n\\t\\t<li>Gestor de plugins<\\/li>\\n\\t\\t<li><a href=\\\"index.php?option=com_plugins&view=plugins&filter_search=Editor - TinyMCE\\\">Editor - TinyMCE<\\/a><\\/li>\\n\\t\\t<li>Opciones b\\u00e1sicas<\\/li>\\n\\t\\t<li>Selecci\\u00f3n autom\\u00e1tica del idioma :: S\\u00ed<\\/li>\\n\\t\\t<li>Funcionalidad :: Extendida (opcional -- Si usted desea usar las funcionalidades al completo del editor TinyMCE)<\\/li>\\n\\t\\t<\\/ol>\\n\\t\\t<p><\\/p>\\n\\t\\t<p>Por favor, reporte cualquier bug o asunto relacionado a nuestro <a href=\\\"http:\\/\\/foro.comunidadjoomla.org\\/traduccion-ext\\/\\\" target=\\\"_blank\\\">Foro de traducciones<\\/a><\\/p>\\n\\t\\t<p><\\/p>\\n\\t\\t<p>Traducci\\u00f3n: <a href=\\\"http:\\/\\/www.comunidadjoomla.org\\\" target=\\\"_blank\\\" title=\\\"\\\">El equipo de traducci\\u00f3n de Comunidad Joomla!<\\/a><\\/p>\\n\\t\\t\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10004,'granya','template','granya','',0,1,1,0,'{\"legacy\":false,\"name\":\"granya\",\"type\":\"template\",\"creationDate\":\"04\\/01\\/13\",\"author\":\"Robert Reimi\",\"copyright\":\"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.\",\"authorEmail\":\"robert.reimi@gmail.com\",\"authorUrl\":\"http:\\/\\/www.teravisiontech.com\",\"version\":\"2.5.0\",\"description\":\"TPL_GRANYA_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10005,'myclases','plugin','myclases','system',0,0,1,0,'false','{}','','',0,'0000-00-00 00:00:00',0,0),(10006,'myclases2','plugin','myclases2','system',0,0,1,0,'false','{}','','',0,'0000-00-00 00:00:00',0,0),(10007,'plg_system_myclasses2','plugin','myclasses2','system',0,0,1,0,'{\"legacy\":false,\"name\":\"plg_system_myclasses2\",\"type\":\"plugin\",\"creationDate\":\"January 2012\",\"author\":\"Mark Dexter and Louis Landry\",\"copyright\":\"Copyright (C) 2012 Mark Dexter and Louis Landry.\",\"authorEmail\":\"admin@joomla.org\",\"authorUrl\":\"www.joomla.org\",\"version\":\"1.6.0\",\"description\":\"MyClasses2 plugin demonstration\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10008,'plg_system_core_overrides','plugin','core_overrides','system',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_system_core_overrides\",\"type\":\"plugin\",\"creationDate\":\"January 2013\",\"author\":\"Robert Reimi\",\"copyright\":\"Copyright (C) 2012 Robert Reimi.\",\"authorEmail\":\"robert.reimi@gmail.com\",\"authorUrl\":\"www.teravisiontech.com\",\"version\":\"1.0\",\"description\":\"Plugin for Joomla Core Clases Overrides\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10009,'jfbconnect','component','com_jfbconnect','',1,1,0,0,'{\"legacy\":false,\"name\":\"JFBConnect\",\"type\":\"component\",\"creationDate\":\"2012\\/05\\/01\",\"author\":\"SourceCoast | www.sourcecoast.com\",\"copyright\":\"Copyright (C) 2009-2012 SourceCoast. All rights reserved.\",\"authorEmail\":\"support@sourcecoast.com\",\"authorUrl\":\"http:\\/\\/www.sourcecoast.com\",\"version\":\"4.2.1\",\"description\":\"This component uses the Facebook Connect API to map Joomla users to their corresponding Facebook account, with flexibility to create new Joomla users automatically.\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10010,'Authentication - JFBConnect Facebook','plugin','jfbconnectauth','authentication',0,1,1,0,'{\"legacy\":false,\"name\":\"Authentication - JFBConnect Facebook\",\"type\":\"plugin\",\"creationDate\":\"2012\\/04\\/20\",\"author\":\"SourceCoast | www.sourcecoast.com\",\"copyright\":\"2010-2012 SourceCoast. All rights reserved.\",\"authorEmail\":\"support@sourcecoast.com\",\"authorUrl\":\"http:\\/\\/www.sourcecoast.com\",\"version\":\"4.2.0\",\"description\":\"Facebook authentication plugin to be used with JFBConnect\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10011,'User - JFBConnect Facebook','plugin','jfbconnectuser','user',0,1,1,0,'{\"legacy\":false,\"name\":\"User - JFBConnect Facebook\",\"type\":\"plugin\",\"creationDate\":\"2012\\/04\\/20\",\"author\":\"SourceCoast | www.sourcecoast.com\",\"copyright\":\"2010-2012 SourceCoast. All rights reserved.\",\"authorEmail\":\"support@sourcecoast.com\",\"authorUrl\":\"http:\\/\\/www.sourcecoast.com\",\"version\":\"4.2.0\",\"description\":\"Facebook user plugin to be used with JFBConnect. This should be set before any other user plugins which may redirect the user. If unsure, set the ordering so that this is the first plugin to fire.\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10012,'System - JFBCSystem','plugin','jfbcsystem','system',0,1,1,0,'{\"legacy\":false,\"name\":\"System - JFBCSystem\",\"type\":\"plugin\",\"creationDate\":\"2012\\/05\\/01\",\"author\":\"SourceCoast | www.sourcecoast.com\",\"copyright\":\"Copyright (C) 2010-2012 SourceCoast. All rights reserved.\",\"authorEmail\":\"support@sourcecoast.com\",\"authorUrl\":\"http:\\/\\/www.sourcecoast.com\",\"version\":\"4.2.1\",\"description\":\"This plugin is required for JFBConnect to function properly. Used for inserting and maintaining the proper Facebook\\/Javascript environment HTML code.\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10013,'Content - JFBCContent','plugin','jfbccontent','content',0,1,1,0,'{\"legacy\":false,\"name\":\"Content - JFBCContent\",\"type\":\"plugin\",\"creationDate\":\"2012\\/04\\/20\",\"author\":\"SourceCoast | www.sourcecoast.com\",\"copyright\":\"Copyright (C) 2010-2012 SourceCoast. All rights reserved.\",\"authorEmail\":\"support@sourcecoast.com\",\"authorUrl\":\"http:\\/\\/www.sourcecoast.com\",\"version\":\"4.2.0\",\"description\":\"A plugin to automatically add the JFBC System tags for like and comments to an article, section blog, category blog or frontpage layout.\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10014,'SCLogin','module','mod_sclogin','',0,1,0,0,'{\"legacy\":false,\"name\":\"SCLogin\",\"type\":\"module\",\"creationDate\":\"2012\\/05\\/01\",\"author\":\"SourceCoast | www.sourcecoast.com\",\"copyright\":\"Copyright (C) 2009-2012 SourceCoast. All rights reserved.\",\"authorEmail\":\"support@sourcecoast.com\",\"authorUrl\":\"http:\\/\\/www.sourcecoast.com\",\"version\":\"1.1.1\",\"description\":\"This is the login module that goes with the JFBConnect\\/JLinked component.\",\"group\":\"\"}','{\"register_type\":\"joomla\",\"loginButtonSize\":\"medium\",\"showLoginForm\":\"1\",\"showRegisterLink\":\"1\",\"showForgotUsername\":\"1\",\"showForgotPassword\":\"1\",\"separator\":\"\",\"jlogin_redirect\":\"1\",\"jlogin\":\"\",\"usesecure\":\"0\",\"enableProfilePic\":\"0\",\"profileWidth\":\"50\",\"profileHeight\":\"\",\"linkProfile\":\"0\",\"showGreeting\":\"1\",\"greetingName\":\"1\",\"showLogoutButton\":\"1\",\"showConnectButton\":\"1\",\"user_intro\":\"\",\"showPoweredByLink\":\"2\",\"moduleclass_sfx\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(10015,'SourceCoast Extensions Library','library','sourcecoast','',0,1,1,0,'{\"legacy\":false,\"name\":\"SourceCoast Extensions Library\",\"type\":\"library\",\"creationDate\":\"2012\\/05\\/01\",\"author\":\"SourceCoast | www.sourcecoast.com\",\"copyright\":\"Copyright (C) 2012 SourceCoast. All rights reserved.\",\"authorEmail\":\"support@sourcecoast.com\",\"authorUrl\":\"http:\\/\\/www.sourcecoast.com\",\"version\":\"1.0.2\",\"description\":\"This library provides common functionality to the SourceCoast Social Extensions (JFBConnect, JLinked, etc)\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10016,'Video Youtube Module','module','mod_video_youtube_home','',0,1,1,0,'{\"legacy\":false,\"name\":\"Video Youtube Module\",\"type\":\"module\",\"creationDate\":\"Junio 2012\",\"author\":\"Robert Perez Reimi\",\"copyright\":\"Copyright teravisiontech.com (C) 2012 All rights reserved.\\n\\t\",\"authorEmail\":\"robert.reimi@gmail.com\",\"authorUrl\":\"\",\"version\":\"1.0\",\"description\":\"Display video in a block\\n\\t\",\"group\":\"\"}','{\"youtube_video_url\":\"\",\"more_videos_url\":\"\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"static\"}','','',0,'0000-00-00 00:00:00',0,0),(10020,'plg_user_profilev2','plugin','profilev2','user',0,1,1,0,'{\"legacy\":false,\"name\":\"plg_user_profilev2\",\"type\":\"plugin\",\"creationDate\":\"Februry 2013\",\"author\":\"Robert Reimi\",\"copyright\":\"(C) 2005 - 2012 Open Source Matters. All rights reserved.\",\"authorEmail\":\"robert.reimi@gmail.com\",\"authorUrl\":\"www.joomla.org\",\"version\":\"2.5.0\",\"description\":\"PLG_USER_PROFILE_XML_DESCRIPTION\",\"group\":\"\"}','{\"register-require_ci\":\"2\",\"register-require_address1\":\"0\",\"register-require_address2\":\"0\",\"register-require_city\":\"1\",\"register-require_region\":\"0\",\"register-require_country\":\"0\",\"register-require_postal_code\":\"0\",\"register-require_phone\":\"1\",\"register-require_gender\":\"1\",\"register-require_website\":\"0\",\"register-require_favoritebook\":\"0\",\"register-require_aboutme\":\"0\",\"register-require_tos\":\"0\",\"register_tos_article\":\"\",\"register-require_dob\":\"0\",\"register-require_newsletter\":\"0\",\"profile-require_ci\":\"0\",\"profile-require_address1\":\"0\",\"profile-require_address2\":\"0\",\"profile-require_city\":\"1\",\"profile-require_region\":\"0\",\"profile-require_country\":\"0\",\"profile-require_postal_code\":\"0\",\"profile-require_phone\":\"1\",\"profile-require_gender\":\"1\",\"profile-require_website\":\"0\",\"profile-require_favoritebook\":\"0\",\"profile-require_aboutme\":\"0\",\"profile-require_dob\":\"0\",\"profile-require_newsletter\":\"0\"}','','',778,'2013-02-27 17:02:00',0,0),(10021,'jNews Forward to Friend','plugin','forwardtofriend','jnews',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews Forward to Friend\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',5,0),(10022,'jNews Content Plugin','plugin','jnewsbot','jnews',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews Content Plugin\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',6,0),(10023,'jNews Social Share Plugin','plugin','jnewsshare','jnews',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews Social Share Plugin\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',9,0),(10024,'jNews User Synchronization','plugin','jnewssyncuser','user',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews User Synchronization\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','{\"lists\":\"1\"}','','',778,'2013-02-14 14:37:15',20,0),(10025,'jNews Tag: Date and Time','plugin','tagdatetime','jnews',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews Tag: Date and Time\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',2,0),(10026,'jNews Tag: Site Links','plugin','tagsite','jnews',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews Tag: Site Links\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',5,0),(10027,'jNews Tag: Subscriber','plugin','tagsubscriber','jnews',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews Tag: Subscriber\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',3,0),(10028,'jNews Tag: Subscriptions','plugin','tagsubscription','jnews',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews Tag: Subscriptions\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',7,0),(10029,'jNews Module','module','mod_jnews','',0,1,1,0,'{\"legacy\":false,\"name\":\"jNews Module\",\"type\":\"plugin\",\"creationDate\":\"February 2013\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006 - 2012 Joobi Limited. All rights reserved.\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(10030,'jnews','component','com_jnews','',1,1,0,0,'{\"legacy\":true,\"name\":\"jNews\",\"type\":\"component\",\"creationDate\":\"September 2012\",\"author\":\"Joobi Limited\",\"copyright\":\"Copyright (C) 2006-2012 Joobi Limited All rights reserved\",\"authorEmail\":\"support@joobi.co\",\"authorUrl\":\"http:\\/\\/www.joobi.co\",\"version\":\"7.9.1\",\"description\":\"jNews the ultimate mailing system for Joomla CMS.\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10031,'com_phocafavicon','component','com_phocafavicon','',1,1,0,0,'{\"legacy\":false,\"name\":\"com_phocafavicon\",\"type\":\"component\",\"creationDate\":\"18\\/04\\/2012\",\"author\":\"Jan Pavelka (www.phoca.cz)\",\"copyright\":\"Jan Pavelka\",\"authorEmail\":\"\",\"authorUrl\":\"www.phoca.cz\",\"version\":\"2.0.3\",\"description\":\"Phoca Favicon\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10032,'Widgetkit','module','mod_widgetkit','',0,1,0,0,'{\"legacy\":false,\"name\":\"Widgetkit\",\"type\":\"module\",\"creationDate\":\"May 2011\",\"author\":\"YOOtheme\",\"copyright\":\"Copyright (C) 2007 - 2011 YOOtheme GmbH\",\"authorEmail\":\"info@yootheme.com\",\"authorUrl\":\"http:\\/\\/www.yootheme.com\",\"version\":\"1.0.0\",\"description\":\"Widgetkit module for Widgetkit developed by YOOtheme (http:\\/\\/www.yootheme.com)\",\"group\":\"\"}','{\"widget_id\":\"\",\"moduleclass_sfx\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(10033,'Widgetkit Twitter','module','mod_widgetkit_twitter','',0,1,0,0,'{\"legacy\":false,\"name\":\"Widgetkit Twitter\",\"type\":\"module\",\"creationDate\":\"May 2011\",\"author\":\"YOOtheme\",\"copyright\":\"Copyright (C) 2007 - 2011 YOOtheme GmbH\",\"authorEmail\":\"info@yootheme.com\",\"authorUrl\":\"http:\\/\\/www.yootheme.com\",\"version\":\"1.0.0\",\"description\":\"Twitter module for Widgetkit developed by YOOtheme (http:\\/\\/www.yootheme.com)\",\"group\":\"\"}','{\"style_\":\"list\",\"from_user\":\"\",\"to_user\":\"\",\"ref_user\":\"\",\"hashtag\":\"\",\"word\":\"\",\"nots\":\"\",\"limit\":\"5\",\"image_size\":\"48\",\"show_image\":\"1\",\"show_author\":\"1\",\"show_date\":\"1\",\"moduleclass_sfx\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(10034,'System - Widgetkit','plugin','widgetkit_system','system',0,1,1,0,'{\"legacy\":false,\"name\":\"System - Widgetkit\",\"type\":\"plugin\",\"creationDate\":\"May 2011\",\"author\":\"YOOtheme\",\"copyright\":\"Copyright (C) 2007 - 2011 YOOtheme GmbH\",\"authorEmail\":\"info@yootheme.com\",\"authorUrl\":\"http:\\/\\/www.yootheme.com\",\"version\":\"1.0.0\",\"description\":\"Plugin for Widgetkit developed by YOOtheme (http:\\/\\/www.yootheme.com)\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10035,'Content - Widgetkit','plugin','widgetkit_content','content',0,1,1,0,'{\"legacy\":false,\"name\":\"Content - Widgetkit\",\"type\":\"plugin\",\"creationDate\":\"May 2011\",\"author\":\"YOOtheme\",\"copyright\":\"Copyright (C) 2007 - 2011 YOOtheme GmbH\",\"authorEmail\":\"info@yootheme.com\",\"authorUrl\":\"http:\\/\\/www.yootheme.com\",\"version\":\"1.0.0\",\"description\":\"Plugin for Widgetkit developed by YOOtheme (http:\\/\\/www.yootheme.com)\",\"group\":\"\"}','{}','','',778,'2013-02-19 22:25:23',0,0),(10036,'System - Widgetkit ZOO','plugin','widgetkit_zoo','system',0,1,1,0,'{\"legacy\":false,\"name\":\"System - Widgetkit ZOO\",\"type\":\"plugin\",\"creationDate\":\"June 2011\",\"author\":\"YOOtheme\",\"copyright\":\"Copyright (C) 2007 - 2011 YOOtheme GmbH\",\"authorEmail\":\"info@yootheme.com\",\"authorUrl\":\"http:\\/\\/www.yootheme.com\",\"version\":\"1.0.0\",\"description\":\"ZOO plugin for Widgetkit developed by YOOtheme (http:\\/\\/www.yootheme.com)\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10037,'System - Widgetkit Joomla','plugin','widgetkit_joomla','system',0,1,1,0,'{\"legacy\":false,\"name\":\"System - Widgetkit Joomla\",\"type\":\"plugin\",\"creationDate\":\"December 2011\",\"author\":\"YOOtheme\",\"copyright\":\"Copyright (C) 2007 - 2011 YOOtheme GmbH\",\"authorEmail\":\"info@yootheme.com\",\"authorUrl\":\"http:\\/\\/www.yootheme.com\",\"version\":\"1.0.0\",\"description\":\"Joomla Content plugin for Widgetkit developed by YOOtheme (http:\\/\\/www.yootheme.com)\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10038,'widgetkit','component','com_widgetkit','',1,1,0,0,'{\"legacy\":false,\"name\":\"Widgetkit\",\"type\":\"component\",\"creationDate\":\"January 2013\",\"author\":\"YOOtheme\",\"copyright\":\"Copyright (C) YOOtheme GmbH\",\"authorEmail\":\"info@yootheme.com\",\"authorUrl\":\"http:\\/\\/www.yootheme.com\",\"version\":\"1.3.5\",\"description\":\"Widgetkit - A widget toolkit by YOOtheme (http:\\/\\/www.yootheme.com)\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10041,'com_talleres','component','com_talleres','',1,1,1,0,'{\"legacy\":false,\"name\":\"com_talleres\",\"type\":\"component\",\"creationDate\":\"February 2013\",\"author\":\"Robert Reimi\",\"copyright\":\"Teravisiontech.com . All rights reserved.\\n    \",\"authorEmail\":\"robert.reimi@gmail.com\",\"authorUrl\":\"www.teravisiontech.com\",\"version\":\"2.5.0\",\"description\":\"COM_TALLERES_XML_DESCRIPTION\",\"group\":\"\"}','{}','','',0,'0000-00-00 00:00:00',0,0),(10053,'hoduma','component','com_hoduma','',1,1,0,0,'{\"legacy\":false,\"name\":\"Hoduma\",\"type\":\"component\",\"creationDate\":\"2013-01-15\",\"author\":\"Hoduma.com\",\"copyright\":\"2012 Hoduma.com, 2011 James R. Erickson\",\"authorEmail\":\"info@hoduma.com\",\"authorUrl\":\"http:\\/\\/www.hoduma.com\",\"version\":\"1.0.13\",\"description\":\"\\n\\t\\t\\n\\t\\t\\t<img src=\\\"components\\/com_hoduma\\/images\\/logo.png\\\" \\/>\\n\\t\\t\\t<p><b>Hoduma Helpdesk<\\/b><\\/p>\\n\\t\\t\\n\\t\",\"group\":\"\"}','{\"use_bbcode\":\"1\",\"statuschart\":\"1\",\"colorhighlight\":\"0\",\"customredirect\":\"index.php\",\"require_category\":\"0\",\"require_rep\":\"0\",\"require_solution\":\"1\",\"require_timespent\":\"0\",\"hdnotifyname\":\"Hoduma Helpdesk\",\"hdreply\":\"helpdesk@yourdomain.com\",\"hdurl\":\"http:\\/\\/www.yourdomain.com\",\"notifyadminonnewcases\":\"\",\"notifyadminoncaseupdate\":\"0\",\"notifyuser\":\"1\",\"defaultpriority\":\"3\",\"pagerpriority\":\"3\",\"defaultstatus\":\"15\",\"closedstatus\":\"24\",\"defaultdepartment\":\"0\",\"defaultcategory\":\"0\",\"allowanonymous\":\"1\",\"userselect\":\"50\",\"enablekb\":\"0\",\"set_department\":\"0\",\"set_location\":\"0\",\"set_phone\":\"0\",\"set_category\":\"0\",\"set_status\":\"50\",\"set_priority\":\"50\",\"set_rep\":\"50\",\"set_timespent\":\"50\",\"show_department\":\"0\",\"show_location\":\"0\",\"show_phone\":\"0\",\"show_category\":\"0\",\"show_status\":\"0\",\"show_priority\":\"0\",\"show_rep\":\"0\",\"show_timespent\":\"0\",\"fileattach_allow\":\"10000\",\"fileattach_type\":\"2\",\"fileattach_path\":\"\",\"fileattach_allowedextensions\":\".jpg,.png\",\"fileattach_maxsize\":\"1048576\",\"fileattach_download\":\"0\",\"fileattach_maxage\":\"0\",\"imap_enabled\":\"0\",\"imap_connecttype\":\"1\",\"imap_deletemessages\":\"0\",\"imap_server\":\"\",\"imap_username\":\"\",\"imap_password\":\"\",\"imap_ssl\":\"0\",\"imap_default_department\":\"0\",\"imap_default_category\":\"0\",\"imap_default_status\":\"0\",\"imap_default_priority\":\"0\",\"imap_default_rep\":\"0\",\"set_maxjoinsize\":\"0\",\"maxjoinsize\":\"\",\"downloadid\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(10054,'System - Issue Tracker','plugin','issuetracker','system',0,1,1,0,'{\"legacy\":false,\"name\":\"System - Issue Tracker\",\"type\":\"plugin\",\"creationDate\":\"September 2012\",\"author\":\"G S Chapman\",\"copyright\":\"Copyright (C) 2012 Macrotone Consulting Ltd\",\"authorEmail\":\"-\",\"authorUrl\":\"www.macrotoneconsulting.co.uk\",\"version\":\"1.2.2\",\"description\":\"Updates Issue tracker people table when Joomla users are added, modified or deleted.\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(10055,'Search - Issue Tracker','plugin','issuetracker','search',0,1,1,0,'{\"legacy\":false,\"name\":\"Search - Issue Tracker\",\"type\":\"plugin\",\"creationDate\":\"September 2012\",\"author\":\"G S Chapman\",\"copyright\":\"Copyright (C) 2012 Macrotone Consulting Ltd\",\"authorEmail\":\"-\",\"authorUrl\":\"www.macrotoneconsulting.co.uk\",\"version\":\"1.2.2\",\"description\":\"Provides search ability of Issues.\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(10056,'Smart Search - Issue Tracker','plugin','issuetracker','finder',0,0,1,0,'{\"legacy\":false,\"name\":\"Smart Search - Issue Tracker\",\"type\":\"plugin\",\"creationDate\":\"September 2012\",\"author\":\"G S Chapman\",\"copyright\":\"Copyright (C) 2012 Macrotone Consulting Ltd\",\"authorEmail\":\"-\",\"authorUrl\":\"www.macrotoneconsulting.co.uk\",\"version\":\"1.2.2\",\"description\":\"Provides smart search (finder) ability of Issues.\",\"group\":\"\"}','','','',0,'0000-00-00 00:00:00',0,0),(10057,'issuetracker','component','com_issuetracker','',1,1,0,0,'{\"legacy\":false,\"name\":\"Issue Tracker\",\"type\":\"component\",\"creationDate\":\"September 2012\",\"author\":\"Macrotone Consulting Ltd\",\"copyright\":\"Copyright (C) 2012 Macrotone Consulting Ltd. All rights reserved.\",\"authorEmail\":\"support@macrotone.co.uk\",\"authorUrl\":\"http:\\/\\/www.macrotoneconsulting.co.uk\",\"version\":\"1.2.2\",\"description\":\"COM_ISSUETRACKER_XML_DESCRIPTION\",\"group\":\"\"}','{\"delete\":\"0\",\"deleteUser\":\"1\",\"def_project\":\"1\",\"def_assignee\":\"0\",\"def_identifiedby\":\"1\",\"def_role\":\"2\",\"def_status\":\"4\",\"open_status\":\"4\",\"closed_status\":\"1\",\"def_priority\":\"2\",\"def_published\":\"0\",\"def_type\":\"1\",\"allow_fe_edit\":\"1\",\"wysiwyg_editor\":\"0\",\"initial_admin\":\"A\",\"initial_site\":\"Z\",\"show_summary_rep\":\"0\",\"show_unassigned_rep\":\"0\",\"show_product_req\":\"0\",\"create_new_person\":\"0\",\"auto_generate_username\":\"0\",\"create_intro\":\"Please supply a short title that describes your issue, and in the description box provide as much detail as possible to enable us to try and quickly resolve your problem.\",\"link_count\":3,\"word_list\":\"\",\"captcha\":\"\",\"site_url\":\"\",\"akismet_api_key\":\"\",\"url_list\":\"\",\"email_list\":\"\",\"ip_list\":\"\",\"emailSiteName\":\"YOURWEBSITE\",\"emailFrom\":\"noreply@YOURWEBSITE.com\",\"emailSender\":\"YOURWEBSITE.com\",\"emailLink\":\"http:\\/\\/www.YOURWEBSITE.com\",\"emailReplyto\":\"\",\"emailReplyname\":\"\",\"emailADMSubject\":\"Admin - \",\"emailMSGSubject\":\"[YOURWEBSITE] Message Notification\",\"emailMSGMessagePrefix\":\"\",\"emailMSGMessagePostfix\":\"http:\\/\\/www.YOURWEBSITE.com Thank you YOURWEBSITE\",\"email_notify\":\"0\",\"def_notify\":\"0\",\"send_user_msg_new\":\"0\",\"send_user_msg_update\":\"0\",\"send_user_msg_close\":\"0\",\"send_ass_msg_new\":\"0\",\"send_ass_msg_update\":\"0\",\"send_ass_msg_close\":\"0\",\"send_adm_msg_new\":\"0\",\"send_adm_msg_update\":\"0\",\"send_adm_msg_close\":\"0\",\"show_assigned_to_headings\":\"1\",\"show_identified_by_headings\":\"0\",\"show_created_by_headings\":\"0\",\"show_created_on_headings\":\"0\",\"show_modified_by_headings\":\"0\",\"show_modified_on_headings\":\"0\"}','','',0,'0000-00-00 00:00:00',0,0),(10058,'JoomConnect Quick Ticket Lite','module','mod_joomconnect_quick_ticket_lite','',0,1,0,0,'{\"legacy\":true,\"name\":\"JoomConnect Quick Ticket Lite\",\"type\":\"module\",\"creationDate\":\"08\\/08\\/2012\",\"author\":\"JoomConnect.com\",\"copyright\":\"\\n\\t\\tJoomConnect is Copyright (C) 2008 Directive Technology, Inc. All rights reserved | www.directive.com | www.joomconnect.com\\n\\t\",\"authorEmail\":\"info|at|joomconnect.com\",\"authorUrl\":\"www.joomconnect.com\",\"version\":\"2012.1 (3018)\",\"description\":\"\\n\\t\\tThe JoomConnect Quick Ticket Lite module creates a form on your website that will send emails to all email addresses on a chosen service board.  \\n\\t\\tPlease visit http:\\/\\/www.joomconnect.com for more information and support.\\n\\t\",\"group\":\"\"}','{\"moduleclass_sfx\":\"\",\"emailpretext\":\"\",\"emailposttext\":\"\",\"usernamelabel\":\"\",\"emaillabel\":\"\",\"connectoroption\":\"1\",\"connectorimageurl\":\"\",\"connectorbtnvalue\":\"\",\"connectorfldsubject\":\"\",\"connectorflddesc\":\"\",\"emailids\":\"\",\"successmsg\":\"\",\"textfieldsize\":\"\",\"textarearows\":\"\",\"textareacolumns\":\"\",\"formfieldorder\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0),(10059,'System - Zendesk Dropbox for Joomla!','plugin','zendeskdropbox','system',0,1,1,0,'{\"legacy\":true,\"name\":\"System - Zendesk Dropbox for Joomla!\",\"type\":\"plugin\",\"creationDate\":\"October 2010\",\"author\":\"Jordan Worner\",\"copyright\":\"Copyright (C) 2011 3B Digital Ltd. All rights reserved.\",\"authorEmail\":\"support@3bweb.com\",\"authorUrl\":\"http:\\/\\/www.3bweb.com\",\"version\":\"2.0\",\"description\":\"ZENDESK_DROPBOX_XML_DESC\",\"group\":\"\"}','{\"dropboxid\":\"\",\"zendeskurl\":\"\",\"tabid\":\"support\",\"tabcolor\":\"black\",\"tabposition\":\"Left\",\"application\":\"admin\",\"hidetab\":\"true\",\"joomlainfo\":\"1\",\"requestimage\":\"\",\"requestsubject\":\"\",\"requestdescription\":\"\"}','','',0,'0000-00-00 00:00:00',0,0),(10060,'Perfect-Web Extensions Tester','module','mod_pwebtester','',0,1,0,0,'{\"legacy\":false,\"name\":\"Perfect-Web Extensions Tester\",\"type\":\"module\",\"creationDate\":\"29-01-2013\",\"author\":\"Piotr Mo\\u0107ko\",\"copyright\":\"Copyright (C) 2013 Majestic Media sp. z o.o., All rights reserved.\",\"authorEmail\":\"office@perfect-web.co\",\"authorUrl\":\"http:\\/\\/www.perfect-web.co\",\"version\":\"1.0\",\"description\":\"Test Joomla! settings and system environment to run Perfect-Web Extensions\",\"group\":\"\"}','{\"layout\":\"contact\",\"use_granyaGonzalez_path\":\"0\",\"cache\":\"0\",\"feed\":\"1\"}','','',0,'0000-00-00 00:00:00',0,0);
/*!40000 ALTER TABLE `gran_extensions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_filters`
--

DROP TABLE IF EXISTS `gran_finder_filters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_filters` (
  `filter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL,
  `created_by_alias` varchar(255) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `map_count` int(10) unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `params` mediumtext,
  PRIMARY KEY (`filter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_filters`
--

LOCK TABLES `gran_finder_filters` WRITE;
/*!40000 ALTER TABLE `gran_finder_filters` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_filters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links`
--

DROP TABLE IF EXISTS `gran_finder_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `indexdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md5sum` varchar(32) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `state` int(5) DEFAULT '1',
  `access` int(5) DEFAULT '0',
  `language` varchar(8) NOT NULL,
  `publish_start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_price` double unsigned NOT NULL DEFAULT '0',
  `sale_price` double unsigned NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL,
  `object` mediumblob NOT NULL,
  PRIMARY KEY (`link_id`),
  KEY `idx_type` (`type_id`),
  KEY `idx_title` (`title`),
  KEY `idx_md5` (`md5sum`),
  KEY `idx_url` (`url`(75)),
  KEY `idx_published_list` (`published`,`state`,`access`,`publish_start_date`,`publish_end_date`,`list_price`),
  KEY `idx_published_sale` (`published`,`state`,`access`,`publish_start_date`,`publish_end_date`,`sale_price`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links`
--

LOCK TABLES `gran_finder_links` WRITE;
/*!40000 ALTER TABLE `gran_finder_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms0`
--

DROP TABLE IF EXISTS `gran_finder_links_terms0`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms0` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms0`
--

LOCK TABLES `gran_finder_links_terms0` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms0` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms0` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms1`
--

DROP TABLE IF EXISTS `gran_finder_links_terms1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms1` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms1`
--

LOCK TABLES `gran_finder_links_terms1` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms1` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms2`
--

DROP TABLE IF EXISTS `gran_finder_links_terms2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms2` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms2`
--

LOCK TABLES `gran_finder_links_terms2` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms2` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms3`
--

DROP TABLE IF EXISTS `gran_finder_links_terms3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms3` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms3`
--

LOCK TABLES `gran_finder_links_terms3` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms3` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms4`
--

DROP TABLE IF EXISTS `gran_finder_links_terms4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms4` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms4`
--

LOCK TABLES `gran_finder_links_terms4` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms4` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms5`
--

DROP TABLE IF EXISTS `gran_finder_links_terms5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms5` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms5`
--

LOCK TABLES `gran_finder_links_terms5` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms5` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms6`
--

DROP TABLE IF EXISTS `gran_finder_links_terms6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms6` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms6`
--

LOCK TABLES `gran_finder_links_terms6` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms6` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms7`
--

DROP TABLE IF EXISTS `gran_finder_links_terms7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms7` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms7`
--

LOCK TABLES `gran_finder_links_terms7` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms7` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms8`
--

DROP TABLE IF EXISTS `gran_finder_links_terms8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms8` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms8`
--

LOCK TABLES `gran_finder_links_terms8` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms8` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_terms9`
--

DROP TABLE IF EXISTS `gran_finder_links_terms9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_terms9` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_terms9`
--

LOCK TABLES `gran_finder_links_terms9` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_terms9` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_terms9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_termsa`
--

DROP TABLE IF EXISTS `gran_finder_links_termsa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_termsa` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_termsa`
--

LOCK TABLES `gran_finder_links_termsa` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_termsa` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_termsa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_termsb`
--

DROP TABLE IF EXISTS `gran_finder_links_termsb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_termsb` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_termsb`
--

LOCK TABLES `gran_finder_links_termsb` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_termsb` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_termsb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_termsc`
--

DROP TABLE IF EXISTS `gran_finder_links_termsc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_termsc` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_termsc`
--

LOCK TABLES `gran_finder_links_termsc` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_termsc` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_termsc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_termsd`
--

DROP TABLE IF EXISTS `gran_finder_links_termsd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_termsd` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_termsd`
--

LOCK TABLES `gran_finder_links_termsd` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_termsd` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_termsd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_termse`
--

DROP TABLE IF EXISTS `gran_finder_links_termse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_termse` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_termse`
--

LOCK TABLES `gran_finder_links_termse` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_termse` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_termse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_links_termsf`
--

DROP TABLE IF EXISTS `gran_finder_links_termsf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_links_termsf` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_links_termsf`
--

LOCK TABLES `gran_finder_links_termsf` WRITE;
/*!40000 ALTER TABLE `gran_finder_links_termsf` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_links_termsf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_taxonomy`
--

DROP TABLE IF EXISTS `gran_finder_taxonomy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_taxonomy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `state` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `access` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ordering` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `state` (`state`),
  KEY `ordering` (`ordering`),
  KEY `access` (`access`),
  KEY `idx_parent_published` (`parent_id`,`state`,`access`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_taxonomy`
--

LOCK TABLES `gran_finder_taxonomy` WRITE;
/*!40000 ALTER TABLE `gran_finder_taxonomy` DISABLE KEYS */;
INSERT INTO `gran_finder_taxonomy` VALUES (1,0,'granyaGonzalez',0,0,0);
/*!40000 ALTER TABLE `gran_finder_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_taxonomy_map`
--

DROP TABLE IF EXISTS `gran_finder_taxonomy_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_taxonomy_map` (
  `link_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`node_id`),
  KEY `link_id` (`link_id`),
  KEY `node_id` (`node_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_taxonomy_map`
--

LOCK TABLES `gran_finder_taxonomy_map` WRITE;
/*!40000 ALTER TABLE `gran_finder_taxonomy_map` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_taxonomy_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_terms`
--

DROP TABLE IF EXISTS `gran_finder_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_terms` (
  `term_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `term` varchar(75) NOT NULL,
  `stem` varchar(75) NOT NULL,
  `common` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `phrase` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `weight` float unsigned NOT NULL DEFAULT '0',
  `soundex` varchar(75) NOT NULL,
  `links` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  UNIQUE KEY `idx_term` (`term`),
  KEY `idx_term_phrase` (`term`,`phrase`),
  KEY `idx_stem_phrase` (`stem`,`phrase`),
  KEY `idx_soundex_phrase` (`soundex`,`phrase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_terms`
--

LOCK TABLES `gran_finder_terms` WRITE;
/*!40000 ALTER TABLE `gran_finder_terms` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_terms_common`
--

DROP TABLE IF EXISTS `gran_finder_terms_common`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_terms_common` (
  `term` varchar(75) NOT NULL,
  `language` varchar(3) NOT NULL,
  KEY `idx_word_lang` (`term`,`language`),
  KEY `idx_lang` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_terms_common`
--

LOCK TABLES `gran_finder_terms_common` WRITE;
/*!40000 ALTER TABLE `gran_finder_terms_common` DISABLE KEYS */;
INSERT INTO `gran_finder_terms_common` VALUES ('a','en'),('about','en'),('after','en'),('ago','en'),('all','en'),('am','en'),('an','en'),('and','en'),('ani','en'),('any','en'),('are','en'),('aren\'t','en'),('as','en'),('at','en'),('be','en'),('but','en'),('by','en'),('for','en'),('from','en'),('get','en'),('go','en'),('how','en'),('if','en'),('in','en'),('into','en'),('is','en'),('isn\'t','en'),('it','en'),('its','en'),('me','en'),('more','en'),('most','en'),('must','en'),('my','en'),('new','en'),('no','en'),('none','en'),('not','en'),('noth','en'),('nothing','en'),('of','en'),('off','en'),('often','en'),('old','en'),('on','en'),('onc','en'),('once','en'),('onli','en'),('only','en'),('or','en'),('other','en'),('our','en'),('ours','en'),('out','en'),('over','en'),('page','en'),('she','en'),('should','en'),('small','en'),('so','en'),('some','en'),('than','en'),('thank','en'),('that','en'),('the','en'),('their','en'),('theirs','en'),('them','en'),('then','en'),('there','en'),('these','en'),('they','en'),('this','en'),('those','en'),('thus','en'),('time','en'),('times','en'),('to','en'),('too','en'),('true','en'),('under','en'),('until','en'),('up','en'),('upon','en'),('use','en'),('user','en'),('users','en'),('veri','en'),('version','en'),('very','en'),('via','en'),('want','en'),('was','en'),('way','en'),('were','en'),('what','en'),('when','en'),('where','en'),('whi','en'),('which','en'),('who','en'),('whom','en'),('whose','en'),('why','en'),('wide','en'),('will','en'),('with','en'),('within','en'),('without','en'),('would','en'),('yes','en'),('yet','en'),('you','en'),('your','en'),('yours','en');
/*!40000 ALTER TABLE `gran_finder_terms_common` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_tokens`
--

DROP TABLE IF EXISTS `gran_finder_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_tokens` (
  `term` varchar(75) NOT NULL,
  `stem` varchar(75) NOT NULL,
  `common` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `phrase` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `weight` float unsigned NOT NULL DEFAULT '1',
  `context` tinyint(1) unsigned NOT NULL DEFAULT '2',
  KEY `idx_word` (`term`),
  KEY `idx_context` (`context`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_tokens`
--

LOCK TABLES `gran_finder_tokens` WRITE;
/*!40000 ALTER TABLE `gran_finder_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_tokens_aggregate`
--

DROP TABLE IF EXISTS `gran_finder_tokens_aggregate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_tokens_aggregate` (
  `term_id` int(10) unsigned NOT NULL,
  `map_suffix` char(1) NOT NULL,
  `term` varchar(75) NOT NULL,
  `stem` varchar(75) NOT NULL,
  `common` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `phrase` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `term_weight` float unsigned NOT NULL,
  `context` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `context_weight` float unsigned NOT NULL,
  `total_weight` float unsigned NOT NULL,
  KEY `token` (`term`),
  KEY `keyword_id` (`term_id`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_tokens_aggregate`
--

LOCK TABLES `gran_finder_tokens_aggregate` WRITE;
/*!40000 ALTER TABLE `gran_finder_tokens_aggregate` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_finder_tokens_aggregate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_finder_types`
--

DROP TABLE IF EXISTS `gran_finder_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_finder_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `mime` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_finder_types`
--

LOCK TABLES `gran_finder_types` WRITE;
/*!40000 ALTER TABLE `gran_finder_types` DISABLE KEYS */;
INSERT INTO `gran_finder_types` VALUES (1,'Category',''),(2,'Contact',''),(3,'Article',''),(4,'News Feed',''),(5,'Web Link','');
/*!40000 ALTER TABLE `gran_finder_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma`
--

DROP TABLE IF EXISTS `gran_hoduma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma`
--

LOCK TABLES `gran_hoduma` WRITE;
/*!40000 ALTER TABLE `gran_hoduma` DISABLE KEYS */;
INSERT INTO `gran_hoduma` VALUES (1,'1.0.13');
/*!40000 ALTER TABLE `gran_hoduma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_attachments`
--

DROP TABLE IF EXISTS `gran_hoduma_attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL,
  `location` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_attachments`
--

LOCK TABLES `gran_hoduma_attachments` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_hoduma_attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_categories`
--

DROP TABLE IF EXISTS `gran_hoduma_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table.',
  `cname` text NOT NULL,
  `rep_id` bigint(20) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_categories`
--

LOCK TABLES `gran_hoduma_categories` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_categories` DISABLE KEYS */;
INSERT INTO `gran_hoduma_categories` VALUES (1,0,'General',0,0,1,0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `gran_hoduma_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_config`
--

DROP TABLE IF EXISTS `gran_hoduma_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_config` (
  `id` int(11) NOT NULL,
  `hdreply` text NOT NULL,
  `hdurl` text NOT NULL,
  `notifyuser` int(11) NOT NULL,
  `enablekb` int(11) NOT NULL,
  `defaultpriority` bigint(20) NOT NULL,
  `defaultstatus` bigint(20) NOT NULL,
  `closestatus` bigint(20) NOT NULL,
  `allowanonymous` int(11) NOT NULL,
  `defaultlang` int(11) NOT NULL,
  `pagerpriority` int(11) NOT NULL,
  `userselect` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_config`
--

LOCK TABLES `gran_hoduma_config` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_config` DISABLE KEYS */;
INSERT INTO `gran_hoduma_config` VALUES (1,'helpdesk@yourdomain.com','http://www.yourdomain.com/',1,1,3,15,24,1,1,10,1);
/*!40000 ALTER TABLE `gran_hoduma_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_departments`
--

DROP TABLE IF EXISTS `gran_hoduma_departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_departments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table.',
  `dname` text NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_departments`
--

LOCK TABLES `gran_hoduma_departments` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_departments` DISABLE KEYS */;
INSERT INTO `gran_hoduma_departments` VALUES (1,0,'Support',0,1,0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `gran_hoduma_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_emailmsg`
--

DROP TABLE IF EXISTS `gran_hoduma_emailmsg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_emailmsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `subject` text NOT NULL,
  `body` longtext NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_emailmsg`
--

LOCK TABLES `gran_hoduma_emailmsg` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_emailmsg` DISABLE KEYS */;
INSERT INTO `gran_hoduma_emailmsg` VALUES (1,'repclose','HELPDESK: Problem [problemid] Closed','The following problem has been closed.  You can view the problem at [url]\r\n\r\nPROBLEM DETAILS\r\n---------------\r\nID: [problemid]\r\nUser: [uid]\r\nDate: [startdate]\r\nTitle: [title]\r\nPriority: [priority]\r\nCategory: [category]\r\n\r\nSOLUTION\r\n--------\r\n[solution]',0,778,'2013-02-28 20:36:54'),(2,'repnew','HELPDESK: Problem [problemid] Assigned','The following problem has been assigned to you.  You can update the problem at [url]\r\n\r\nPROBLEM DETAILS\r\n---------------\r\nID: [problemid]\r\nDate: [startdate]\r\nTitle: [title]\r\nPriority: [priority]\r\nCategory: [category]\r\n\r\nUSER INFORMATION\r\n----------------\r\nUsername: [uid]\r\nEmail: [uemail]\r\nPhone: [phone]\r\nLocation: [location]\r\nDepartment: [department]\r\n\r\nDESCRIPTION\r\n-----------\r\n[description]',0,0,'0000-00-00 00:00:00'),(3,'reppager','HELPDESK: Problem [problemid] Assigned/Updated','Title:[title]\r\nUser:[uid]\r\nPriority:[priority]',0,0,'0000-00-00 00:00:00'),(4,'repupdate','HELPDESK: Problem [problemid] Updated','The following problem has been updated.  You can view the problem at [url]\r\n\r\nPROBLEM DETAILS\r\n---------------\r\nID: [problemid]\r\nUser: [uid]\r\nDate: [startdate]\r\nTitle: [title]\r\n\r\nDESCRIPTION\r\n-----------\r\n[description]\r\n\r\nNOTES\r\n-----------\r\n[notes]',0,0,'0000-00-00 00:00:00'),(5,'userclose','HELPDESK: Problem [problemid] Closed','Your help desk problem has been closed.  You can view the solution below or at: [url]\r\n\r\nPROBLEM DETAILS\r\n---------------\r\nID: [problemid]\r\nUser: [uid]\r\nDate: [startdate]\r\nTitle: [title]\r\n\r\nSOLUTION\r\n--------\r\n[solution]',0,0,'0000-00-00 00:00:00'),(6,'usernew','HELPDESK: Problem [problemid] Created','Thank you for submitting your problem to the help desk.  You can view or update the problem at: [url]\r\n\r\nPROBLEM DETAILS\r\n---------------\r\nID: [problemid]\r\nUser: [uid]\r\nDate: [startdate]\r\nTitle: [title]\r\n\r\nDESCRIPTION\r\n-----------\r\n[description]',0,0,'0000-00-00 00:00:00'),(7,'userupdate','HELPDESK: Problem [problemid] Updated','Your help desk problem has been updated.  You can view the problem at: [url]\r\n\r\nPROBLEM DETAILS\r\n---------------\r\nID: [problemid]\r\nUser: [uid]\r\nDate: [startdate]\r\nTitle: [title]\r\n\r\nDESCRIPTION\r\n-----------\r\n[description]\r\n\r\nNOTES\r\n-----------\r\n[notes]',0,0,'0000-00-00 00:00:00'),(8,'adminnew','HELPDESK: Problem [problemid] Created','The following problem has been created.  You can update the problem at [url]\r\n\r\nPROBLEM DETAILS\r\n---------------\r\nID: [problemid]\r\nDate: [startdate]\r\nTitle: [title]\r\nPriority: [priority]\r\nCategory: [category]\r\n\r\nUSER INFORMATION\r\n----------------\r\nFullname: [fullname]\r\nUsername: [uid]\r\nEmail: [uemail]\r\nPhone: [phone]\r\nLocation: [location]\r\nDepartment: [department]\r\n\r\nDESCRIPTION\r\n-----------\r\n[description]',0,0,'0000-00-00 00:00:00'),(9,'adminupdate','HELPDESK: Problem [problemid] Updated','The following problem has been updated.  You can view the problem at [url]\r\n\r\nPROBLEM DETAILS\r\n---------------\r\nID: [problemid]\r\nDate: [startdate]\r\nTitle: [title]\r\nPriority: [priority]\r\nCategory: [category]\r\n\r\nUSER INFORMATION\r\n----------------\r\nFullname: [fullname]\r\nUsername: [uid]\r\nEmail: [uemail]\r\nPhone: [phone]\r\nLocation: [location]\r\nDepartment: [department]\r\n\r\nDESCRIPTION\r\n-----------\r\n[description]',0,0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `gran_hoduma_emailmsg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_notes`
--

DROP TABLE IF EXISTS `gran_hoduma_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_notes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `problem_id` bigint(20) NOT NULL,
  `eventcode` int(11) NOT NULL DEFAULT '0',
  `note` longtext NOT NULL,
  `adddate` datetime NOT NULL,
  `uid` text NOT NULL,
  `priv` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `note` (`note`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_notes`
--

LOCK TABLES `gran_hoduma_notes` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_hoduma_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_priorities`
--

DROP TABLE IF EXISTS `gran_hoduma_priorities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_priorities` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pname` text NOT NULL,
  `fontcolor` varchar(16) NOT NULL DEFAULT '#000000',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_priorities`
--

LOCK TABLES `gran_hoduma_priorities` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_priorities` DISABLE KEYS */;
INSERT INTO `gran_hoduma_priorities` VALUES (6,'6 - VERY HIGH','#000000',0,1,0,'0000-00-00 00:00:00'),(5,'5 - HIGH','#000000',0,1,0,'0000-00-00 00:00:00'),(4,'4 - ELEVATED','#000000',0,1,0,'0000-00-00 00:00:00'),(3,'3 - NORMAL','#000000',0,1,0,'0000-00-00 00:00:00'),(2,'2 - LOW','#000000',0,1,0,'0000-00-00 00:00:00'),(1,'1 - VERY LOW','#000000',0,1,0,'0000-00-00 00:00:00'),(10,'10 - EMERGENCY - PAGE','#000000',0,1,0,'0000-00-00 00:00:00'),(9,'9 - EMERGENCY - NO PAGE','#000000',0,1,0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `gran_hoduma_priorities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_problems`
--

DROP TABLE IF EXISTS `gran_hoduma_problems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_problems` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` text NOT NULL,
  `uemail` text NOT NULL,
  `ulocation` text NOT NULL,
  `uphone` text NOT NULL,
  `rep` bigint(20) NOT NULL,
  `status` bigint(20) NOT NULL,
  `time_spent` bigint(20) NOT NULL,
  `category` bigint(20) NOT NULL,
  `close_date` datetime NOT NULL,
  `department` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `solution` text NOT NULL,
  `start_date` datetime NOT NULL,
  `priority` bigint(20) NOT NULL,
  `entered_by` bigint(20) NOT NULL,
  `kb` bigint(20) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `rep` (`rep`,`status`,`category`,`department`,`priority`),
  FULLTEXT KEY `solution` (`solution`),
  FULLTEXT KEY `description` (`description`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_problems`
--

LOCK TABLES `gran_hoduma_problems` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_problems` DISABLE KEYS */;
INSERT INTO `gran_hoduma_problems` VALUES (1,'&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;299&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;304&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;326&lt;/b&gt;&lt;br /&gt;','&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;299&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;304&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;326&lt;/b&gt;&lt;br /&gt;','&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;299&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;304&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;326&lt;/b&gt;&lt;br /&gt;','&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;299&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;304&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Strict Standards&lt;/b&gt;:  Only variables should be assigned by reference in &lt;b&gt;C:\\xampp\\htdocs\\granya\\components\\com_hoduma\\helpers\\head.php&lt;/b&gt; on line &lt;b&gt;326&lt;/b&gt;&lt;br /&gt;',0,0,0,0,'2013-02-22 02:32:04',0,'','','','2013-02-22 02:32:04',1,0,0,0);
/*!40000 ALTER TABLE `gran_hoduma_problems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_statuses`
--

DROP TABLE IF EXISTS `gran_hoduma_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` bigint(20) NOT NULL,
  `sname` text NOT NULL,
  `fontcolor` varchar(16) NOT NULL DEFAULT '#000000',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_statuses`
--

LOCK TABLES `gran_hoduma_statuses` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_statuses` DISABLE KEYS */;
INSERT INTO `gran_hoduma_statuses` VALUES (22,65,'TESTING','#000000',0,1,0,'0000-00-00 00:00:00'),(21,63,'WAITING','#000000',0,1,0,'0000-00-00 00:00:00'),(20,60,'HOLD','#000000',0,1,0,'0000-00-00 00:00:00'),(19,55,'ESCALATED','#000000',0,1,0,'0000-00-00 00:00:00'),(18,50,'IN PROGRESS','#000000',0,1,0,'0000-00-00 00:00:00'),(17,20,'OPEN','#000000',0,1,0,'0000-00-00 00:00:00'),(16,10,'RECEIVED','#000000',0,1,0,'0000-00-00 00:00:00'),(15,1,'NEW','#000000',0,1,0,'0000-00-00 00:00:00'),(24,100,'CLOSED','#000000',0,1,0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `gran_hoduma_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_hoduma_users`
--

DROP TABLE IF EXISTS `gran_hoduma_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_hoduma_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joomla_id` int(11) NOT NULL,
  `isuser` int(1) NOT NULL,
  `isrep` int(1) NOT NULL,
  `isadmin` int(1) NOT NULL,
  `phone` text NOT NULL,
  `pageraddress` text NOT NULL,
  `phonemobile` text NOT NULL,
  `phonehome` text NOT NULL,
  `location1` text NOT NULL,
  `location2` text NOT NULL,
  `department` bigint(20) NOT NULL,
  `language` bigint(20) NOT NULL,
  `viewreports` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_hoduma_users`
--

LOCK TABLES `gran_hoduma_users` WRITE;
/*!40000 ALTER TABLE `gran_hoduma_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_hoduma_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_inscripcion`
--

DROP TABLE IF EXISTS `gran_inscripcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_inscripcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_inscripcion` char(1) NOT NULL COMMENT 'Tipo de inscripcion (''m'' = manual, ''w'' = web)',
  `taller_id` int(11) NOT NULL COMMENT 'Id del taller',
  `usuario_id` int(11) DEFAULT NULL COMMENT 'Id del usuario',
  `ci` int(11) DEFAULT NULL COMMENT 'Cédula del usuario',
  `nombre` text COMMENT 'Nombre de quien se inscribe',
  `telefono` text COMMENT 'Teléfono de quien se inscribe',
  `correo` text COMMENT 'Correo de quien se inscribe',
  `genero` tinyint(1) DEFAULT NULL COMMENT 'Género de quien se inscribe (1: Femenino, 2: Masculino)',
  `ciudad` text COMMENT 'Ciudad de quien se inscribe',
  `forma_pago` char(1) NOT NULL COMMENT 'Forma de pago (e: efectivo, d: depósito, t: transferencia, c: crédito, b: débito, q:cheque)',
  `num_transaccion` int(11) DEFAULT NULL COMMENT 'Número de la transacción (número de depósito, número de confirmación de transferencia, etc)',
  `monto` text NOT NULL COMMENT 'Monto que pagó por el taller',
  `fecha` datetime NOT NULL COMMENT 'Fecha de la transacción',
  `status` tinyint(1) DEFAULT '0' COMMENT '0 = Pendiente, 1 = Confirmada',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_inscripcion`
--

LOCK TABLES `gran_inscripcion` WRITE;
/*!40000 ALTER TABLE `gran_inscripcion` DISABLE KEYS */;
INSERT INTO `gran_inscripcion` VALUES (1,'m',1,780,17077523,'Robert Reimi2','0426-5364496','robert.reimi+test1@gmail.com',2,'Caracas','e',0,'1700','2013-02-20 00:00:00',0),(2,'w',1,NULL,16713911,'Andrea Lebrún','0412-2373233','tgb.alebrun@gmail.com',1,'Caracas','q',123456,'1700','2013-02-20 00:00:00',0),(3,'m',1,792,16713911,'Andrea Lebrún','0412-2373233','tgb.alebrun+test@gmail.com',1,'Caracas','c',NULL,'1200,00','2013-02-20 00:00:00',1),(4,'w',1,NULL,170775232,'Robert Prueba','12312','',0,'','e',0,'1231','2013-02-27 00:00:00',0),(5,'m',1,NULL,15475212,'pepe','1222452','',0,'','d',0,'1245','2013-03-13 00:00:00',0),(6,'m',1,NULL,1,'AAA','1222452','',0,'','d',0,'234','2013-03-01 00:00:00',0),(7,'m',2,NULL,1622,'asdsadsad','123123','',0,'','e',0,'12456','2013-03-01 00:00:00',0),(8,'m',2,NULL,55,'asdsadsad','11','',0,'','e',0,'123','2013-03-01 00:00:00',0),(9,'m',2,NULL,1,'asdsadsad','123123','',0,'','e',0,'1245','2013-03-01 00:00:00',0),(10,'m',2,NULL,154752122,'1800asd','12312312','',0,'','e',0,'12312','2013-03-01 00:00:00',0);
/*!40000 ALTER TABLE `gran_inscripcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_it_emails`
--

DROP TABLE IF EXISTS `gran_it_emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(32) NOT NULL COMMENT 'Short name of the email message type.',
  `description` mediumtext NOT NULL COMMENT 'Description of the email message type',
  `subject` varchar(32) NOT NULL COMMENT 'Email subject title for email message type',
  `body` longtext NOT NULL COMMENT 'Template for the email message itself.',
  `ordering` int(11) NOT NULL DEFAULT '0' COMMENT 'Order in which issues are presented.',
  `state` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'State of the specific record.  i.e.  Published, archived, trashed etc.',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_on` datetime NOT NULL COMMENT 'Audit Column: Date the record was created.',
  `created_by` varchar(255) NOT NULL COMMENT 'Audit Column: The user who created the record.',
  `modified_on` datetime DEFAULT NULL COMMENT 'Audit Column: Date the record was last modified.',
  `modified_by` varchar(255) DEFAULT NULL COMMENT 'Audit Column: The user who last modified the record.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Email message templates for Issue Tracker notifications.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_emails`
--

LOCK TABLES `gran_it_emails` WRITE;
/*!40000 ALTER TABLE `gran_it_emails` DISABLE KEYS */;
INSERT INTO `gran_it_emails` VALUES (1,'ass_close','Assignee - Issue Closure','Assigned Issue [issue_id] Closed','<p>The following issue that is assigned to you has been closed.</p>\n<p>You can view the issue at [url]</p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS</span></p>\n<p>ID: [issue_id]</p>\n<p>User: [user_name]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>Priority: [priority]</p>\n<p>Project: [project]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">RESOLUTION</span></p>\n<p>[resolution]</p>',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(2,'ass_new','Assignee - New Issue assignment.','Assigned Issue [issue_id] Create','<p>The following issue has been assigned to you.</p>\n<p>You can update the issue at [url]</p>\n<p><span style=\"text-decoration: underline;\">&nbsp;</span></p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS</span></p>\n<p>ID: [issue_id]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>Priority: [priority]</p>\n<p>Project: [project]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">USER INFORMATION</span></p>\n<p>Username: [user_name]</p>\n<p>Email: [user_email]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">DESCRIPTION</span></p>\n<p>[description]</p>',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(3,'ass_update','Assignee - Issue Updated','Assigned Issue [issue_id] Update','<p>The following assigned issue has been updated.</p>\n<p>You can view the issue at [url]</p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS</span></p>\n<p>&nbsp; ID: [issue_id]</p>\n<p>User: [user_name]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">DESCRIPTION</span></p>\n<p>[description]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">PROGRESS</span></p>\n<p>[progress]</p>',0,1,778,'2013-03-01 16:11:52','0000-00-00 00:00:00','',NULL,NULL),(4,'user_close','User - Issue Closure Message','Issue [issue_id] Closed','<p>Your raised issue has been closed.</p>\n<p>You can view the issue resolution below or at: [url]</p>\n<p><span style=\"text-decoration: underline;\">&nbsp;</span></p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS</span></p>\n<p>ID: [issue_id]</p>\n<p>User: [user_name]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">RESOLUTION</span></p>\n<p>[resolution]</p>',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(5,'user_new','User - Issue Creation Message','Issue [issue_id] Created','<p>Thank you for submitting your issue.</p>\n<p>You can view or update [requires login] the issue at: [url]</p>\n<p><span style=\"text-decoration: underline;\">&nbsp;</span></p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS</span></p>\n<p>ID: [issue_id]</p>\n<p>User: [user_name]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">DESCRIPTION</span></p>\n<p>[description]</p>',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(6,'user_update','User - Issue Update Message','Your Issue [issue_id] Updated','<p>Your raised issue has been updated.</p>\n<p>You can view the issue at: [url]</p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS</span></p>\n<p>ID: [issue_id]</p>\n<p>User: [user_name]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">DESCRIPTION</span></p>\n<p>[description]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">PROGRESS </span></p>\n<p>[progress]</p>',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(7,'admin_new','Admin - New Issue Message','Issue [issue_id] Created','<p>The following issue has been created and the assignment may need checking.</p>\n<p>You can update the issue at [url]</p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS </span></p>\n<p>ID: [issue_id]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>Priority: [priority]</p>\n<p>Project: [project]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">USER INFORMATION </span></p>\n<p>Fullname: [user_fullname]</p>\n<p>Username: [user_name]</p>\n<p>Email: [user_email]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">DESCRIPTION</span></p>\n<p>[description]</p>',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(8,'admin_update','Admin - Issue Updated Message','Issue [issue_id] Updated','<p>The following issue has been updated. You can view the issue at [url]</p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS</span></p>\n<p>ID: [issue_id]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>Priority: [priority]</p>\n<p>Project: [project]</p>\n<p>Status: [status]</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">USER INFORMATION</span></p>\n<p>Fullname: [user_fullname]</p>\n<p>Username: [user_name]</p>\n<p>Email: [user_email]</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p><span style=\"text-decoration: underline;\">DESCRIPTION</span></p>\n<p>[description]</p>',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(9,'admin_close','Admin - Issue closure','Issue [issue_id] closed','<p>The following issue has been closed.</p>\n<p>You can view the issue at [url]</p>\n<p><span style=\"text-decoration: underline;\">&nbsp;</span></p>\n<p><span style=\"text-decoration: underline;\">ISSUE DETAILS</span></p>\n<p>ID: [issue_id]</p>\n<p>User: [user_name]</p>\n<p>Date: [startdate]</p>\n<p>Title: [title]</p>\n<p>Priority: [priority]</p>\n<p>Project: [project]</p>\n<p><span style=\"text-decoration: underline;\">&nbsp;</span></p>\n<p><span style=\"text-decoration: underline;\">RESOLUTION</span></p>\n<p>[resolution]</p>',1,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL);
/*!40000 ALTER TABLE `gran_it_emails` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_emails_bi` BEFORE INSERT ON `gran_it_emails` FOR EACH ROW
BEGIN
   IF (NEW.ID IS NULL) THEN
      SET NEW.ID := 0;
   END IF;
   IF (NEW.CREATED_ON IS NULL OR NEW.CREATED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.CREATED_ON := sysdate();
   END IF; 
   IF (NEW.CREATED_BY IS NULL  OR NEW.CREATED_BY = '') THEN
      SET NEW.CREATED_BY := USER();
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `gran_it_issues`
--

DROP TABLE IF EXISTS `gran_it_issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_issues` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The system generated unique identifier for the issue.',
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'ACL permissions field',
  `alias` varchar(10) DEFAULT NULL COMMENT 'Issue Alias.  Used to mask primary key of issue from random selection.',
  `issue_summary` varchar(255) NOT NULL COMMENT 'A brief summary of the issue.',
  `issue_description` varchar(4000) DEFAULT NULL COMMENT 'A full description of the issue.',
  `identified_by_person_id` int(11) NOT NULL COMMENT 'The person who identified the issue.',
  `identified_date` datetime NOT NULL COMMENT 'The date the issue was identified.',
  `related_project_id` int(10) unsigned NOT NULL COMMENT 'The project that the issue is related to.',
  `assigned_to_person_id` int(11) DEFAULT NULL COMMENT 'The person that the issue is assigned to.',
  `issue_type` int(11) NOT NULL DEFAULT '1' COMMENT 'The issue type.  i.e. defect etc.',
  `status` int(11) NOT NULL COMMENT 'The current status of the issue.',
  `state` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'State of the specific record.  i.e.  Published, archived, trashed etc.',
  `checked_out` int(11) NOT NULL DEFAULT '0' COMMENT 'Checked out indicator.  User id of user editing the record.',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time and date when the record was checked out.',
  `ordering` int(11) NOT NULL DEFAULT '0' COMMENT 'Order in which issues are presented.',
  `priority` int(11) NOT NULL COMMENT 'The priority of the issue. How important it is to get resolved.',
  `target_resolution_date` datetime DEFAULT NULL COMMENT 'The date on which the issue is planned to be resolved.',
  `progress` varchar(4000) DEFAULT NULL COMMENT 'Any progress notes on the issue resolution.',
  `actual_resolution_date` datetime DEFAULT NULL COMMENT 'The date the issue was actually resolved.',
  `resolution_summary` varchar(4000) DEFAULT NULL COMMENT 'The description of the resolution of the issue.',
  `created_on` datetime NOT NULL COMMENT 'Audit Column: Date the record was created.',
  `created_by` varchar(255) NOT NULL COMMENT 'Audit Column: The user who created the record.',
  `modified_on` datetime DEFAULT NULL COMMENT 'Audit Column: Date the record was last modified.',
  `modified_by` varchar(255) DEFAULT NULL COMMENT 'Audit Column: The user who last modified the record.',
  PRIMARY KEY (`id`),
  KEY `gran_it_issues_identified_by_fk` (`identified_by_person_id`),
  KEY `gran_it_issues_assigned_to_fk` (`assigned_to_person_id`),
  KEY `gran_it_issues_project_fk` (`related_project_id`),
  KEY `gran_it_issues_status_fk` (`status`),
  KEY `gran_it_issues_types_fk` (`issue_type`),
  KEY `gran_it_issues_priority_fk` (`priority`),
  CONSTRAINT `gran_it_issues_priority_fk` FOREIGN KEY (`priority`) REFERENCES `gran_it_priority` (`id`),
  CONSTRAINT `gran_it_issues_assigned_to_fk` FOREIGN KEY (`assigned_to_person_id`) REFERENCES `gran_it_people` (`user_id`),
  CONSTRAINT `gran_it_issues_identified_by_fk` FOREIGN KEY (`identified_by_person_id`) REFERENCES `gran_it_people` (`id`),
  CONSTRAINT `gran_it_issues_project_fk` FOREIGN KEY (`related_project_id`) REFERENCES `gran_it_projects` (`id`),
  CONSTRAINT `gran_it_issues_status_fk` FOREIGN KEY (`status`) REFERENCES `gran_it_status` (`id`),
  CONSTRAINT `gran_it_issues_type_fk` FOREIGN KEY (`issue_type`) REFERENCES `gran_it_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='All issues related to the company projects being undertaken.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_issues`
--

LOCK TABLES `gran_it_issues` WRITE;
/*!40000 ALTER TABLE `gran_it_issues` DISABLE KEYS */;
INSERT INTO `gran_it_issues` VALUES (31,91,'ZN1MR5QHHJ','Probando','<p>aaaaaaaaaaaaa</p>',31,'2013-02-22 02:43:06',1,NULL,2,4,1,0,'0000-00-00 00:00:00',1,2,'0000-00-00 00:00:00','','0000-00-00 00:00:00','','2013-02-22 01:44:36','admin','2013-02-21 21:14:48','granyaGonzalez@andrea-PC.local');
/*!40000 ALTER TABLE `gran_it_issues` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 trigger `gran_it_issues_bi`
before insert on `gran_it_issues`
for each row
begin
   IF (NEW.ID IS NULL) THEN
      SET NEW.ID := 0;
   END IF;
   IF (NEW.CREATED_ON IS NULL OR NEW.CREATED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.CREATED_ON := sysdate();
   END IF; 
   IF (NEW.CREATED_BY IS NULL  OR NEW.CREATED_BY = '') THEN
      SET NEW.CREATED_BY := USER();
   END IF; 
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_issues_bu`
BEFORE UPDATE ON `gran_it_issues`
FOR EACH ROW
BEGIN
   IF (NEW.MODIFIED_ON IS NULL OR NEW.MODIFIED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.MODIFIED_ON := sysdate();
   END IF; 
   IF (NEW.MODIFIED_BY IS NULL OR NEW.MODIFIED_BY = '') THEN
      SET NEW.MODIFIED_BY := USER();
   END IF; 
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `gran_it_meta`
--

DROP TABLE IF EXISTS `gran_it_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `version` varchar(100) DEFAULT NULL COMMENT 'Version number of the installed component.',
  `type` varchar(20) DEFAULT NULL COMMENT 'Type of extension.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_meta`
--

LOCK TABLES `gran_it_meta` WRITE;
/*!40000 ALTER TABLE `gran_it_meta` DISABLE KEYS */;
INSERT INTO `gran_it_meta` VALUES (1,'1.2.2','component');
/*!40000 ALTER TABLE `gran_it_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_it_people`
--

DROP TABLE IF EXISTS `gran_it_people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_people` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The system generated unique identifier for the person.',
  `user_id` int(11) DEFAULT NULL COMMENT 'The user identifier as recorded in the Joomla user table.',
  `person_name` varchar(255) NOT NULL COMMENT 'The unique name of the person.',
  `alias` varchar(10) DEFAULT NULL COMMENT 'Person Alias.  Used to mask primary key of person from random selection.',
  `person_email` varchar(100) NOT NULL COMMENT 'The email address of the person.',
  `person_role` int(11) NOT NULL COMMENT 'The role the person plays within the company.',
  `username` varchar(150) NOT NULL COMMENT 'The username of this person. Used to link login to person details.',
  `assigned_project` int(10) unsigned DEFAULT NULL COMMENT 'The project that the person is currently assigned to.',
  `issues_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Indicates that the person is an Issues administrator.',
  `staff` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Indicates that the person is a member of staff.',
  `email_notifications` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Person has requested email notifications when their raised issues are changed.',
  `registered` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Whether user is registered.',
  `published` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Whether visible in the front end.',
  `ordering` int(11) NOT NULL DEFAULT '0' COMMENT 'Order in which people are presented.',
  `checked_out` int(11) NOT NULL DEFAULT '0' COMMENT 'Checked out indicator.  User id of user editing the record.',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time and date when the record was checked out.',
  `created_on` datetime NOT NULL COMMENT 'Audit Column: Date the record was created.',
  `created_by` varchar(255) NOT NULL COMMENT 'Audit Column: The user who created the record.',
  `modified_on` datetime DEFAULT NULL COMMENT 'Audit Column: Date the record was last modified.',
  `modified_by` varchar(255) DEFAULT NULL COMMENT 'Audit Column: The user who last modified the record.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `gran_it_people_name_uk` (`person_name`),
  UNIQUE KEY `gran_it_people_username_uk` (`username`),
  UNIQUE KEY `gran_it_people_userid_uk` (`user_id`),
  KEY `gran_it_people_project_fk` (`assigned_project`),
  KEY `gran_it_people_role_fk` (`person_role`),
  CONSTRAINT `gran_it_people_project_fk` FOREIGN KEY (`assigned_project`) REFERENCES `gran_it_projects` (`id`),
  CONSTRAINT `gran_it_people_role_fk` FOREIGN KEY (`person_role`) REFERENCES `gran_it_roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='All people within the company.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_people`
--

LOCK TABLES `gran_it_people` WRITE;
/*!40000 ALTER TABLE `gran_it_people` DISABLE KEYS */;
INSERT INTO `gran_it_people` VALUES (1,NULL,'Anonymous',NULL,'anonymous@bademail.com',6,'anon',1,0,0,0,0,0,0,0,'0000-00-00 00:00:00','2013-02-21 21:06:49','admin',NULL,NULL),(31,778,'Super User',NULL,'tgb.alebrun@gmail.com',6,'admin',1,1,1,0,1,0,0,0,'0000-00-00 00:00:00','2013-01-02 22:11:27','admin','2013-02-22 20:48:41','admin'),(32,779,'Viejita1',NULL,'robert.reimi+vegetales@gmail.com',6,'vegatal1',1,0,0,0,1,0,0,0,'0000-00-00 00:00:00','2013-02-01 21:52:40','admin',NULL,NULL),(33,780,'Robert',NULL,'robert.reimi+test1@gmail.com',6,'robert.reimi+test1@gmail.com',1,0,0,0,1,0,0,0,'0000-00-00 00:00:00','2013-02-13 22:44:29','admin',NULL,NULL),(34,792,'Andrea Lebrún',NULL,'tgb.alebrun+test@gmail.com',6,'tgb.alebrun+test@gmail.com',1,0,0,0,1,0,0,0,'0000-00-00 00:00:00','2013-02-18 23:46:14','admin',NULL,NULL);
/*!40000 ALTER TABLE `gran_it_people` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 trigger `gran_it_people_bi`
before insert on `gran_it_people`
for each row
BEGIN
   IF (NEW.CREATED_ON IS NULL OR NEW.CREATED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.CREATED_ON := sysdate();
   END IF; 
   IF (NEW.CREATED_BY IS NULL OR NEW.CREATED_BY = '') THEN
      SET NEW.CREATED_BY := USER();
   END IF; 
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 trigger `gran_it_people_bu`
before update on `gran_it_people`
for each row
BEGIN
   IF (NEW.MODIFIED_ON IS NULL OR NEW.MODIFIED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.MODIFIED_ON := sysdate();
   END IF; 
   IF (NEW.MODIFIED_BY IS NULL OR NEW.MODIFIED_BY = '') THEN
      SET NEW.MODIFIED_BY := USER();
   END IF; 
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `gran_it_priority`
--

DROP TABLE IF EXISTS `gran_it_priority`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_priority` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The system generated unique identifier for the priority.',
  `priority_name` varchar(60) NOT NULL COMMENT 'The unique name of the priority.',
  `response_time` decimal(11,2) NOT NULL COMMENT 'The target response time expressed in hours.',
  `ranking` int(11) NOT NULL COMMENT 'The ranking of the priority expressed as a value between 0 and 100.  Higher numbers indicate higher priority.',
  `resolution_time` decimal(11,2) NOT NULL COMMENT 'The target resolution time expressed in hours.',
  `description` varchar(1024) DEFAULT NULL COMMENT 'The full text description of the priority.',
  `state` tinyint(4) DEFAULT '1' COMMENT 'State of the specific record.  i.e.  Published, archived, trashed etc.',
  `ordering` int(11) NOT NULL COMMENT 'Default ordering column',
  `checked_out` int(11) NOT NULL DEFAULT '0' COMMENT 'Checked out indicator.  User id of user editing the record.',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time and date when the record was checked out.',
  `created_on` datetime NOT NULL COMMENT 'Audit Column: Date the record was created.',
  `created_by` varchar(255) NOT NULL COMMENT 'Audit Column: The user who created the record.',
  `modified_on` datetime DEFAULT NULL COMMENT 'Audit Column: Date the record was last modified.',
  `modified_by` varchar(255) DEFAULT NULL COMMENT 'Audit Column: The user who last modified the record.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Issue priorities within the company.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_priority`
--

LOCK TABLES `gran_it_priority` WRITE;
/*!40000 ALTER TABLE `gran_it_priority` DISABLE KEYS */;
INSERT INTO `gran_it_priority` VALUES (1,'High',0.50,70,4.00,'Office, department, or user has completely lost ability to perform all their functions but does not lend itself to financial liability or loss.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(2,'Low',4.00,10,24.00,'1 or 2 Users have a minor inconvenience with the functionality of a single product.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(3,'Medium',2.00,40,8.00,'Office, department, or user has a marginal loss of functionality but has an alternate method of performing task without financial liability or loss.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(4,'Critical',0.25,90,2.00,'Office, department, or user has completely lost ability to perform all their functions, which in turn may cause financial liability or loss.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL);
/*!40000 ALTER TABLE `gran_it_priority` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_priority_bi` BEFORE INSERT ON `gran_it_priority` FOR EACH ROW
BEGIN
   IF (NEW.ID IS NULL) THEN
      SET NEW.ID := 0;
   END IF;
   IF (NEW.CREATED_ON IS NULL OR NEW.CREATED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.CREATED_ON := sysdate();
   END IF; 
   IF (NEW.CREATED_BY IS NULL  OR NEW.CREATED_BY = '') THEN
      SET NEW.CREATED_BY := USER();
   END IF; 
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_priority_bu` BEFORE UPDATE ON `gran_it_priority` FOR EACH ROW
BEGIN
   IF (NEW.MODIFIED_ON IS NULL OR NEW.MODIFIED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.MODIFIED_ON := sysdate();
   END IF; 
   IF (NEW.MODIFIED_BY IS NULL OR NEW.MODIFIED_BY = '') THEN
      SET NEW.MODIFIED_BY := USER();
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `gran_it_projects`
--

DROP TABLE IF EXISTS `gran_it_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'The system generated unique identifier for the project.',
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'Link to parent project id.',
  `project_name` varchar(255) NOT NULL COMMENT 'The unique name of the project.',
  `alias` varchar(10) DEFAULT NULL COMMENT 'Project Alias.  Used to mask primary key of issue from random selection.',
  `project_description` varchar(4000) DEFAULT NULL COMMENT 'A full description of the project.',
  `state` tinyint(4) DEFAULT '0' COMMENT 'State of the specific record.  i.e.  Published, archived, trashed etc.',
  `ordering` int(11) NOT NULL DEFAULT '0' COMMENT 'Order in which categories are presented.',
  `checked_out` int(11) NOT NULL DEFAULT '0' COMMENT 'Checked out indicator.  User id of user editing the record.',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time and date when the record was checked out.',
  `start_date` datetime NOT NULL COMMENT 'The start date of the project.',
  `target_end_date` datetime DEFAULT NULL COMMENT 'The targeted end date of the project.',
  `actual_end_date` datetime DEFAULT NULL COMMENT 'The actual end date of the project.',
  `created_on` datetime NOT NULL COMMENT 'Audit Column: Date the record was created.',
  `created_by` varchar(255) NOT NULL COMMENT 'Audit Column: The user who created the record.',
  `modified_on` datetime DEFAULT NULL COMMENT 'Audit Column: Date the record was last modified.',
  `modified_by` varchar(255) DEFAULT NULL COMMENT 'Audit Column: The user who last modified the record.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='All projects currently underway.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_projects`
--

LOCK TABLES `gran_it_projects` WRITE;
/*!40000 ALTER TABLE `gran_it_projects` DISABLE KEYS */;
INSERT INTO `gran_it_projects` VALUES (1,0,'Unspecified Project',NULL,'Unspecified Project',1,0,0,'0000-00-00 00:00:00','2013-02-21 21:06:49',NULL,NULL,'2013-02-21 21:06:49','admin',NULL,NULL);
/*!40000 ALTER TABLE `gran_it_projects` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 trigger `gran_it_projects_bi`
before insert on `gran_it_projects`
for each row
BEGIN 
   IF (NEW.ACTUAL_END_DATE = '0000-00-00 00:00:00') THEN
      SET NEW.ACTUAL_END_DATE := NULL;
   END IF;
   IF (NEW.CREATED_ON IS NULL OR NEW.CREATED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.CREATED_ON := sysdate();
   END IF; 
   IF (NEW.CREATED_BY IS NULL OR NEW.CREATED_BY = '') THEN
      SET NEW.CREATED_BY := USER();
   END IF; 
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 trigger `gran_it_projects_bu`
before update on `gran_it_projects`
for each row 
BEGIN 
   IF (NEW.ACTUAL_END_DATE = '0000-00-00 00:00:00') THEN
      SET NEW.ACTUAL_END_DATE := NULL;
   END IF;
   IF (NEW.MODIFIED_ON IS NULL OR NEW.MODIFIED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.MODIFIED_ON := sysdate();
   END IF; 
   IF (NEW.MODIFIED_BY IS NULL OR NEW.MODIFIED_BY = '') THEN
      SET NEW.MODIFIED_BY := USER();
   END IF; 
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `gran_it_roles`
--

DROP TABLE IF EXISTS `gran_it_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The system generated unique identifier for the person role.',
  `role_name` varchar(60) NOT NULL COMMENT 'The unique name of the role.',
  `description` varchar(1024) DEFAULT NULL COMMENT 'The full text description of the role.',
  `state` tinyint(4) DEFAULT '1' COMMENT 'State of the specific record.  i.e.  Published, archived, trashed etc.',
  `ordering` int(11) NOT NULL COMMENT 'Default ordering column',
  `checked_out` int(11) NOT NULL DEFAULT '0' COMMENT 'Checked out indicator.  User id of user editing the record.',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time and date when the record was checked out.',
  `created_on` datetime NOT NULL COMMENT 'Audit Column: Date the record was created.',
  `created_by` varchar(255) NOT NULL COMMENT 'Audit Column: The user who created the record.',
  `modified_on` datetime DEFAULT NULL COMMENT 'Audit Column: Date the record was last modified.',
  `modified_by` varchar(255) DEFAULT NULL COMMENT 'Audit Column: The user who last modified the record.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='People Roles.  i.e. CEO, Member, Lead, Guest, Customer etc.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_roles`
--

LOCK TABLES `gran_it_roles` WRITE;
/*!40000 ALTER TABLE `gran_it_roles` DISABLE KEYS */;
INSERT INTO `gran_it_roles` VALUES (1,'CEO','Chief Executive Office.  Senior member of company.  Does not usually have any specific projects assigned.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(2,'Customer','Customer of the product or company.  Usually just reports problems, raises queries etc.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(3,'Lead','This role indicate an individual with direct responsibility for any assigned projects.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(4,'Manager','The person responsible for many projects and usually many staff, each of which is associated with one or more projects.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(5,'Member','A team member working or assigned to one or more projects but without overall responsibility for any one.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(6,'User','A user of the product.  Might be considered a customer but usually no financial transaction has occurred.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL);
/*!40000 ALTER TABLE `gran_it_roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_roles_bi` BEFORE INSERT ON `gran_it_roles` FOR EACH ROW
BEGIN
   IF (NEW.ID IS NULL) THEN
      SET NEW.ID := 0;
   END IF;
   IF (NEW.CREATED_ON IS NULL OR NEW.CREATED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.CREATED_ON := sysdate();
   END IF; 
   IF (NEW.CREATED_BY IS NULL  OR NEW.CREATED_BY = '') THEN
      SET NEW.CREATED_BY := USER();
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_roles_bu` BEFORE UPDATE ON `gran_it_roles` FOR EACH ROW
BEGIN
   IF (NEW.MODIFIED_ON IS NULL OR NEW.MODIFIED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.MODIFIED_ON := sysdate();
   END IF; 
   IF (NEW.MODIFIED_BY IS NULL OR NEW.MODIFIED_BY = '') THEN
      SET NEW.MODIFIED_BY := USER();
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `gran_it_status`
--

DROP TABLE IF EXISTS `gran_it_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The system generated unique identifier for the issue status.',
  `status_name` varchar(60) NOT NULL COMMENT 'The unique name of the status.',
  `description` varchar(1024) DEFAULT NULL COMMENT 'The full text description of the status.',
  `state` tinyint(4) DEFAULT '1' COMMENT 'State of the specific record.  i.e.  Published, archived, trashed etc.',
  `ordering` int(11) NOT NULL COMMENT 'Default ordering column',
  `checked_out` int(11) NOT NULL DEFAULT '0' COMMENT 'Checked out indicator.  User id of user editing the record.',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time and date when the record was checked out.',
  `created_on` datetime NOT NULL COMMENT 'Audit Column: Date the record was created.',
  `created_by` varchar(255) NOT NULL COMMENT 'Audit Column: The user who created the record.',
  `modified_on` datetime DEFAULT NULL COMMENT 'Audit Column: Date the record was last modified.',
  `modified_by` varchar(255) DEFAULT NULL COMMENT 'Audit Column: The user who last modified the record.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Issue statuses.  i.e. Open, closed, on-hold etc.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_status`
--

LOCK TABLES `gran_it_status` WRITE;
/*!40000 ALTER TABLE `gran_it_status` DISABLE KEYS */;
INSERT INTO `gran_it_status` VALUES (1,'Closed','Used when an issue is completed and no further change related to the issue is expected.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(2,'In-Progress','The issue is being actively worked by an individual.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(3,'On-Hold','The issue is currently awaiting some unspecified activitiy and is not currently being worked.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(4,'Open','The issue is open but no work has commenced to resolve it.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(5,'Undefined','The current status of this issue is unknown.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL);
/*!40000 ALTER TABLE `gran_it_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_status_bi` BEFORE INSERT ON `gran_it_status` FOR EACH ROW
BEGIN
   IF (NEW.ID IS NULL) THEN
      SET NEW.ID := 0;
   END IF;
   IF (NEW.CREATED_ON IS NULL OR NEW.CREATED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.CREATED_ON := sysdate();
   END IF; 
   IF (NEW.CREATED_BY IS NULL  OR NEW.CREATED_BY = '') THEN
      SET NEW.CREATED_BY := USER();
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_status_bu` BEFORE UPDATE ON `gran_it_status` FOR EACH ROW
BEGIN
   IF (NEW.MODIFIED_ON IS NULL OR NEW.MODIFIED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.MODIFIED_ON := sysdate();
   END IF; 
   IF (NEW.MODIFIED_BY IS NULL OR NEW.MODIFIED_BY = '') THEN
      SET NEW.MODIFIED_BY := USER();
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `gran_it_types`
--

DROP TABLE IF EXISTS `gran_it_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_it_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The system generated unique identifier for the issue type.',
  `type_name` varchar(60) NOT NULL COMMENT 'The unique name of the type.',
  `description` varchar(1024) DEFAULT NULL COMMENT 'The full text description of the type.',
  `state` tinyint(4) DEFAULT '1' COMMENT 'State of the specific record.  i.e.  Published, archived, trashed etc.',
  `ordering` int(11) NOT NULL COMMENT 'Default ordering column',
  `checked_out` int(11) NOT NULL DEFAULT '0' COMMENT 'Checked out indicator.  User id of user editing the record.',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Time and date when the record was checked out.',
  `created_on` datetime NOT NULL COMMENT 'Audit Column: Date the record was created.',
  `created_by` varchar(255) NOT NULL COMMENT 'Audit Column: The user who created the record.',
  `modified_on` datetime DEFAULT NULL COMMENT 'Audit Column: Date the record was last modified.',
  `modified_by` varchar(255) DEFAULT NULL COMMENT 'Audit Column: The user who last modified the record.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Issue types.  i.e. Defect , Enhancement etc.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_it_types`
--

LOCK TABLES `gran_it_types` WRITE;
/*!40000 ALTER TABLE `gran_it_types` DISABLE KEYS */;
INSERT INTO `gran_it_types` VALUES (1,'Defect','The product has a defect that prevents it working correctly.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(2,'Enhancement','The product could be improved if this enhancement were applied.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(3,'Documentation','The documentation needs correcting.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(4,'Suggestion','The product could be improved if this suggestion were implemented.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL),(5,'Other','The issue is not described by any of the other types.',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','',NULL,NULL);
/*!40000 ALTER TABLE `gran_it_types` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_types_bi` BEFORE INSERT ON `gran_it_types` FOR EACH ROW
BEGIN
   IF (NEW.ID IS NULL) THEN
      SET NEW.ID := 0;
   END IF;
   IF (NEW.CREATED_ON IS NULL OR NEW.CREATED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.CREATED_ON := sysdate();
   END IF; 
   IF (NEW.CREATED_BY IS NULL  OR NEW.CREATED_BY = '') THEN
      SET NEW.CREATED_BY := USER();
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`granyaGonzalez`@`%`*/ /*!50003 TRIGGER `gran_it_types_bu` BEFORE UPDATE ON `gran_it_types` FOR EACH ROW
BEGIN
   IF (NEW.MODIFIED_ON IS NULL OR NEW.MODIFIED_ON = '0000-00-00 00:00:00') THEN
      SET NEW.MODIFIED_ON := sysdate();
   END IF; 
   IF (NEW.MODIFIED_BY IS NULL OR NEW.MODIFIED_BY = '') THEN
      SET NEW.MODIFIED_BY := USER();
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `gran_jfbconnect_config`
--

DROP TABLE IF EXISTS `gran_jfbconnect_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jfbconnect_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `setting` varchar(50) NOT NULL,
  `value` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting` (`setting`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jfbconnect_config`
--

LOCK TABLES `gran_jfbconnect_config` WRITE;
/*!40000 ALTER TABLE `gran_jfbconnect_config` DISABLE KEYS */;
INSERT INTO `gran_jfbconnect_config` VALUES (1,'db_version','4.2.0','2013-02-01 11:48:10','2013-02-01 11:48:10'),(3,'create_new_users','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(4,'facebook_auto_map_by_email','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(5,'registration_show_email','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(6,'auto_username_format','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(7,'generate_random_password','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(8,'joomla_skip_newuser_activation','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(9,'facebook_new_user_redirect_enable','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(10,'facebook_new_user_redirect','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(11,'facebook_login_redirect_enable','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(12,'facebook_login_redirect','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(13,'facebook_auto_login','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(14,'logout_joomla_only','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(15,'show_login_with_joomla_reg','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(16,'facebook_login_show_modal','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(17,'facebook_logout_redirect_enable','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(18,'facebook_logout_redirect','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(19,'facebook_new_user_status_msg','','2013-02-01 16:34:08','2013-02-01 19:37:57'),(20,'facebook_new_user_status_link','','2013-02-01 16:34:08','2013-02-01 19:37:57'),(21,'facebook_new_user_status_picture','','2013-02-01 16:34:08','2013-02-01 19:37:57'),(22,'facebook_login_status_msg','','2013-02-01 16:34:08','2013-02-01 19:37:57'),(23,'facebook_login_status_link','','2013-02-01 16:34:08','2013-02-01 19:37:57'),(24,'facebook_login_status_picture','','2013-02-01 16:34:08','2013-02-01 19:37:57'),(25,'facebook_app_id','143575205779459','2013-02-01 16:34:08','2013-02-01 19:37:57'),(26,'facebook_secret_key','94f4f0c30421f56be9996584fb6cee18','2013-02-01 16:34:08','2013-02-01 19:37:57'),(27,'facebook_perm_custom','','2013-02-01 16:34:08','2013-02-01 19:37:57'),(28,'facebook_display_errors','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(29,'facebook_curl_disable_ssl','0','2013-02-01 16:34:08','2013-02-01 19:37:57'),(30,'facebook_language_locale','es_ES','2013-02-01 16:34:08','2013-02-01 19:37:57'),(31,'show_powered_by_link','1','2013-02-01 16:34:08','2013-02-01 19:37:57'),(32,'affiliate_id','','2013-02-01 16:34:08','2013-02-01 19:37:57'),(33,'sc_download_id','74b507c9b2ef86ec8354bc598b0ee60e','2013-02-01 16:34:08','2013-02-01 19:37:57'),(34,'autotune_authorization','O:8:\"stdClass\":2:{s:10:\"authorized\";s:1:\"0\";s:8:\"messages\";O:8:\"stdClass\":3:{s:4:\"user\";s:12:\"Hector Pappe\";s:12:\"subscription\";s:11:\"JFBConnect6\";s:7:\"expires\";s:12:\"Nov 08, 2012\";}}','2013-02-01 16:42:28','2013-02-01 19:36:27');
/*!40000 ALTER TABLE `gran_jfbconnect_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jfbconnect_notification`
--

DROP TABLE IF EXISTS `gran_jfbconnect_notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jfbconnect_notification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fb_request_id` bigint(20) NOT NULL,
  `fb_user_to` bigint(20) NOT NULL,
  `fb_user_from` bigint(20) NOT NULL,
  `jfbc_request_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jfbconnect_notification`
--

LOCK TABLES `gran_jfbconnect_notification` WRITE;
/*!40000 ALTER TABLE `gran_jfbconnect_notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jfbconnect_notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jfbconnect_request`
--

DROP TABLE IF EXISTS `gran_jfbconnect_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jfbconnect_request` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `published` tinyint(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `destination_url` varchar(200) NOT NULL,
  `thanks_url` varchar(200) NOT NULL,
  `breakout_canvas` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jfbconnect_request`
--

LOCK TABLES `gran_jfbconnect_request` WRITE;
/*!40000 ALTER TABLE `gran_jfbconnect_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jfbconnect_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jfbconnect_user_map`
--

DROP TABLE IF EXISTS `gran_jfbconnect_user_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jfbconnect_user_map` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `j_user_id` int(11) NOT NULL,
  `fb_user_id` bigint(20) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `authorized` tinyint(1) DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jfbconnect_user_map`
--

LOCK TABLES `gran_jfbconnect_user_map` WRITE;
/*!40000 ALTER TABLE `gran_jfbconnect_user_map` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jfbconnect_user_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_followup`
--

DROP TABLE IF EXISTS `gran_jnews_followup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_followup` (
  `followup_id` smallint(10) unsigned NOT NULL,
  `list_id` smallint(10) unsigned NOT NULL,
  PRIMARY KEY (`followup_id`,`list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_followup`
--

LOCK TABLES `gran_jnews_followup` WRITE;
/*!40000 ALTER TABLE `gran_jnews_followup` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jnews_followup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_listmailings`
--

DROP TABLE IF EXISTS `gran_jnews_listmailings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_listmailings` (
  `list_id` int(10) unsigned NOT NULL,
  `mailing_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`list_id`,`mailing_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_listmailings`
--

LOCK TABLES `gran_jnews_listmailings` WRITE;
/*!40000 ALTER TABLE `gran_jnews_listmailings` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jnews_listmailings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_lists`
--

DROP TABLE IF EXISTS `gran_jnews_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_lists` (
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
  `subnotifysend` tinyint(1) NOT NULL DEFAULT '1',
  `subnotifymsg` text NOT NULL,
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
  `acc_level` varchar(200) NOT NULL DEFAULT '24,25,7,8',
  `acc_id` varchar(200) NOT NULL DEFAULT 'all',
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_lists`
--

LOCK TABLES `gran_jnews_lists` WRITE;
/*!40000 ALTER TABLE `gran_jnews_lists` DISABLE KEYS */;
INSERT INTO `gran_jnews_lists` VALUES (1,'Boletín Granya','<p>Boletín de noticias granya</p>',1,'','','',NULL,'',12,'','<p>This is a confirmation email that you have been unsubscribed from our list. We are sorry that you decided to unsubscribe. But if you decide to re-subscribe you can always do so on our site. Should you have any question please contact our webmaster.</p>',1,1,'',1,'',1,0,0,0,0,0,1,1,1,1360852018,'25,24,8,7','all',0,778,1,0,0,'0000-00-00',NULL,0);
/*!40000 ALTER TABLE `gran_jnews_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_listssubscribers`
--

DROP TABLE IF EXISTS `gran_jnews_listssubscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_listssubscribers` (
  `list_id` smallint(11) unsigned NOT NULL,
  `subscriber_id` int(11) unsigned NOT NULL,
  `subdate` int(11) unsigned DEFAULT NULL,
  `unsubdate` int(11) unsigned DEFAULT '0',
  `unsubscribe` tinyint(1) DEFAULT '0',
  `params` text,
  PRIMARY KEY (`list_id`,`subscriber_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_listssubscribers`
--

LOCK TABLES `gran_jnews_listssubscribers` WRITE;
/*!40000 ALTER TABLE `gran_jnews_listssubscribers` DISABLE KEYS */;
INSERT INTO `gran_jnews_listssubscribers` VALUES (1,6,1360852128,0,0,''),(1,7,1360852496,0,0,''),(1,8,1360852890,0,0,''),(1,9,1360855800,0,0,''),(1,13,1360856119,0,0,'');
/*!40000 ALTER TABLE `gran_jnews_listssubscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_mailings`
--

DROP TABLE IF EXISTS `gran_jnews_mailings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_mailings` (
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
  `follow_up` int(10) unsigned NOT NULL DEFAULT '0',
  `cat_id` varchar(250) NOT NULL DEFAULT '0:0',
  `delay_min` int(2) NOT NULL DEFAULT '0',
  `delay_max` int(2) NOT NULL DEFAULT '7',
  `notify_id` int(10) unsigned NOT NULL DEFAULT '0',
  `next_date` int(11) unsigned NOT NULL DEFAULT '0',
  `start_date` int(11) unsigned NOT NULL DEFAULT '0',
  `smart_date` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_mailings`
--

LOCK TABLES `gran_jnews_mailings` WRITE;
/*!40000 ALTER TABLE `gran_jnews_mailings` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jnews_mailings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_queue`
--

DROP TABLE IF EXISTS `gran_jnews_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_queue` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_queue`
--

LOCK TABLES `gran_jnews_queue` WRITE;
/*!40000 ALTER TABLE `gran_jnews_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jnews_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_stats_details`
--

DROP TABLE IF EXISTS `gran_jnews_stats_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_stats_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mailing_id` int(11) NOT NULL DEFAULT '0',
  `subscriber_id` int(11) NOT NULL DEFAULT '0',
  `sentdate` int(11) unsigned DEFAULT NULL,
  `html` tinyint(1) NOT NULL DEFAULT '0',
  `read` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sub_mail` (`mailing_id`,`subscriber_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_stats_details`
--

LOCK TABLES `gran_jnews_stats_details` WRITE;
/*!40000 ALTER TABLE `gran_jnews_stats_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jnews_stats_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_stats_global`
--

DROP TABLE IF EXISTS `gran_jnews_stats_global`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_stats_global` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_stats_global`
--

LOCK TABLES `gran_jnews_stats_global` WRITE;
/*!40000 ALTER TABLE `gran_jnews_stats_global` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_jnews_stats_global` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_subscribers`
--

DROP TABLE IF EXISTS `gran_jnews_subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_subscribers` (
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_subscribers`
--

LOCK TABLES `gran_jnews_subscribers` WRITE;
/*!40000 ALTER TABLE `gran_jnews_subscribers` DISABLE KEYS */;
INSERT INTO `gran_jnews_subscribers` VALUES (1,778,'Super User','tgb.rperez@gmail.com',1,1,0,'00:00:00','eng',NULL,1357180887,NULL,'','','','',''),(2,779,'Viejita1','robert.reimi+vegetales@gmail.com',1,1,0,'00:00:00','eng',NULL,1359771760,NULL,'','','','',''),(3,781,'Robert','robert.reimi+test3@gmail.com',1,1,0,'00:00:00','eng','127.0.0.1',1360850027,NULL,'','','','',''),(4,782,'Robert','robert.reimi+test4@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360850417,NULL,'','','','',''),(5,783,'Robert','robert.reimi+test5@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360851687,NULL,'','','','',''),(6,784,'Robert','robert.reimi+test6@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360852088,NULL,'','','','',''),(7,785,'Robert','robert.reimi+test7@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360852342,NULL,'','','','',''),(8,786,'Robert','robert.reimi+test8@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360852682,NULL,'','','','',''),(9,787,'Robert','robert.reimi+test9@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360852919,NULL,'','','','',''),(10,788,'Robert','robert.reimi+test10@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360855886,NULL,'','','','',''),(11,789,'Robert','robert.reimi+test11@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360855921,NULL,'','','','',''),(12,790,'Robert','robert.reimi+test13@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360856063,NULL,'','','','',''),(13,791,'Robert','robert.reimi+test14@gmail.com',1,0,0,'00:00:00','eng','127.0.0.1',1360856099,NULL,'','','','',''),(14,792,'Andrea Lebrún','tgb.alebrun+test@gmail.com',1,1,0,'00:00:00','eng','',1361231176,NULL,'','','','','');
/*!40000 ALTER TABLE `gran_jnews_subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_templates`
--

DROP TABLE IF EXISTS `gran_jnews_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_templates` (
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
  `availability` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1- installed, 0-download,-1 free download',
  `csstyle` text NOT NULL,
  PRIMARY KEY (`template_id`),
  UNIQUE KEY `namekey` (`namekey`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_templates`
--

LOCK TABLES `gran_jnews_templates` WRITE;
/*!40000 ALTER TABLE `gran_jnews_templates` DISABLE KEYS */;
INSERT INTO `gran_jnews_templates` VALUES (1,'Entwine (black)','A classic two columns layout designed with a twist of modern curves in black color, highlighting headline titles valuable for your newsletter to attract more customer, best for promos and events.','<table style=\"width: 100%; margin: 0pt auto; background-color:#4c4c4c; color: #333333; font-family: Arial,Tahoma,Geneva,Kalimati,sans-serif;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td align=\"center\" valign=\"top\">\n<table style=\"margin: auto; width: 700px; height: 70px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"right\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/black/topleft_header.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n<td>\n<table style=\"width: 100%;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td height=\"58\" bgcolor=\"#323232\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td style=\"width: 70%;\">\n<h1><img src=\"http://www.joobi.co/images/newsletter_templates/entwine/black/logo-big.png\" border=\"0\" alt=\"jnews logo\" style=\"margin-left: 20px;display:block;margin:0;\" /></h1>\n</td>\n<td style=\"width: 30%;\" align=\"right\">\n<h6>{tag:date}</h6>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td style=\"background-color: #ffffff; height: 58px; text-align: center;\" height=\"58\">\n<h2>jNews is now out in the market!</h2>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"left\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/black/topright_header.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 700px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\" font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\"><span style=\"font-size: 12px; color: #4c4c4c;\">joobi</span></td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 680px; background-color: #ffffff;\" border=\"0\" cellspacing=\"20\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 250px;\" width=\"250\" align=\"left\" valign=\"top\">\n<p style=\"text-align: center; width: 250px;\"><img src=\"http://joobi.co/images/jnews_newsletter.png\" border=\"0\" alt=\"jNews Upgrade\" width=\"130\" height=\"215\" style=\"display: block; border: 0; margin: 0px auto;\" /></p>\n<h3>What is it in for you?</h3>\n<ul>\n<li>Template Management</li>\n<li>Queue Management</li>\n<li>Advanced Statistics</li>\n<li>Sending Process</li>\n</ul>\n</td>\n<td valign=\"top\">\n<p>Hi {tag:name},</p>\n<br />\n<p>This 2010, we are coming out with a application that will bring email marketing to the next generation. This is jNews.<br /><br /> jNews is our newest products, an email marketing application for Joomla 1.5 with the most powerful and coolest features ever making sure that your communications yields the best results that you want.</p>\n<br />\n<p>{tag:share name=facebook,linkedin,twitter}</p>\n<br /> \n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 49px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_jmarket/Itemid,49/controller,product-display/eid,82/task,show/\"> Product Presentation </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/Help/jNews/Table-of-Contents-jNews.html\"> Documentation </a><br /></td>\n</tr>\n</tbody>\n</table>\n<hr style=\"width: 98%;\" />\n<p style=\"font-size:12px;\">Should you have questions, comments, feature requests, do not hesitate to contact our support or chat live with them.</p>\n<br /><br /> \n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 55px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_jtickets/Itemid,147/controller,ticket/\"> Support </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_agora/Itemid,60/\"> Forum </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/organization/about/welcome-to-joobi-live-support.html\"> Live Admin </a></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td colspan=\"2\" align=\"center\">Would you like to change your subscription? {tag:subscriptions}<br /> Not interested any more? {tag:unsubscribe}</td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 702px; height: 70px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 8px;\" rowspan=\"2\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/black/bottom_left_black.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n<td style=\"width: 686px;\">\n<table style=\"width: 100%;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td colspan=\"3\" bgcolor=\"#ffffff\"><span style=\"font-size: 16px; color: #fff;\"> joobi </span></td>\n</tr>\n<tr>\n<td height=\"118\" bgcolor=\"#232323\">\n<table border=\"0\" cellspacing=\"5\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td colspan=\"3\" bgcolor=\"#232323\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\">\n<tbody>\n<tr>\n<td>\n<h5>Latest Testimonials</h5>\n<h6>It feels to me that live chat is the absolute best way to provide customer support...</h6>\n<br /> <a href=\"#\"> Read more </a></td>\n<td>\n<h5>More Powerful Features!</h5>\n<h6>Wanted to design your own newsletter template? Check our jNews PRO version.</h6>\n<br /> <a href=\"#\"> See more </a></td>\n<td valign=\"bottom\"><img src=\"http://www.joobi.co/images/newsletter_templates/entwine/black/logo-small.png\" border=\"0\" alt=\"jnewsletter logo\" style=\"margin:0 0 0 20px;\" /></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td style=\"text-align:center;\" align=\"center\" valign=\"top\" bgcolor=\"#4c4c4c\"><br />\n<h6>This email contains graphics, so if you don\'t see them, {tag:viewonline name=view it in your browser}.</h6>\n<br />\n<h6>Powered by Joobi</h6>\n<h6><br /><br /></h6>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"left\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/black/bottom_right_black.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>','',1285292068,1,0,99,'entwine_black','a:16:{s:8:\"color_bg\";s:7:\"#4c4c4c\";s:8:\"style_h1\";s:214:\"	color:#FFFFFF; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:36px; 	font-weight:bold; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h2\";s:198:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:30px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt;\";s:8:\"style_h3\";s:199:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:24px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:30px; 	margin-left:0pt;\";s:8:\"style_h4\";s:217:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:18px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:10px; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h5\";s:214:\"	color:#FFFFFF; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:14px; 	font-weight:bold; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h6\";s:182:\"	color:#FFFFFF; 	font-family:Arial,Helvetica,Serif; 	font-size:12px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt;\";s:7:\"style_a\";s:108:\"color:#d7a306; 	text-decoration:none; 	font-family:Arial,Tahoma,Geneva,Kalimati,sans-serif; 	font-size:12px;\";s:8:\"style_ul\";s:88:\"line-height:200%; 	font-family:Arial,Tahoma,Geneva,Kalimati,sans-serif; 	font-size:12px;\";s:8:\"style_li\";s:88:\"line-height:200%; 	font-family:Arial,Tahoma,Geneva,Kalimati,sans-serif; 	font-size:12px;\";s:15:\"aca_unsubscribe\";s:108:\"color:#d7a306; 	text-decoration:none; 	font-family:Arial,Tahoma,Geneva,Kalimati,sans-serif; 	font-size:12px;\";s:13:\"aca_subscribe\";s:108:\"color:#d7a306; 	text-decoration:none; 	font-family:Arial,Tahoma,Geneva,Kalimati,sans-serif; 	font-size:12px;\";s:11:\"aca_content\";s:109:\"	color:#333333; 	font-family:Arial,Tahoma,Geneva,Kalimati,sans-serif; 	font-size:12px; 	margin:0; 	padding:0;\";s:9:\"aca_title\";s:211:\"	color:#333333; 	display:block; 	font-family:Arial,Tahoma,Geneva,Kalimati,sans-serif; 	font-size:24px; 	font-weight:normal; 	line-height:100%; 	margin-top:0; 	margin-right:0; 	margin-bottom:30px; 	margin-left:0;\";s:12:\"aca_readmore\";s:108:\"	background-color: #333333;     font-family: Arial,Tahoma,Geneva,Kalimati,sans-serif;     padding: 3px 10px;\";s:10:\"aca_online\";s:108:\"color:#d7a306; 	text-decoration:none; 	font-family:Arial,Tahoma,Geneva,Kalimati,sans-serif; 	font-size:12px;\";}','http://www.joobi.co/images/newsletter_templates/thumbnails/entwine_black.png',1,'#outlook a{padding:0;} \nimg{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}\n\nbody, p, td{\n	color:#333333;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	margin:0;\n	padding:0;\n}\n\na, .online, .subscriptions, .unsubscribe, .online{\n	color:#d7a306;\n	text-decoration:none;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\nh1, h1 a{\n	color:#FFFFFF;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:36px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh2, h2 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:30px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n}\n\nh3, h3 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:24px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:30px;\n	margin-left:0pt;\n}\n\nh4, h4 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:18px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:10px;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh5, h5 a{\n	color:#FFFFFF;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:14px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh6, h6 a{\n	color:#FFFFFF;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n}\n\nul,li{\n	line-height:150%;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\n.readmore{\n	background-color: #333333;\n    font-family: Arial,Helvetica,Serif;\n    padding: 3px 10px;\n}\n\n.readmore a{\n	color:#ffffff;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}'),(2,'Entwine (blue)','A classic two columns layout designed with a twist of modern curves in blue color, highlighting headline titles valuable for your newsletter to attract more customer, best for promos and events.','<table style=\"width: 100%; margin: 0pt auto; background-color:#08395a; color: #333333; font-family: Arial,Tahoma,Geneva,Kalimati,sans-serif;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td align=\"center\" valign=\"top\">\n<table style=\"margin: auto; width: 700px; height: 70px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"right\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/blue/topleft_header.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n<td>\n<table style=\"width: 100%;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td height=\"58\" bgcolor=\"#1a79a9\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td style=\"width: 70%;\">\n<h1><img src=\"http://www.joobi.co/images/newsletter_templates/entwine/blue/logo-big.png\" border=\"0\" alt=\"jnews logo\" style=\"margin-left: 20px;display:block;margin:0;\" /></h1>\n</td>\n<td style=\"width: 30%;\" align=\"right\">\n<h6>{tag:date}</h6>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td style=\"background-color: #ffffff; height: 58px; text-align: center;\" height=\"58\">\n<h2>jNews is now out in the market!</h2>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"left\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/blue/topright_header.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 700px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\" font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\"><span style=\"font-size: 12px; color: #003300;\">joobi</span></td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 680px; background-color: #ffffff;\" border=\"0\" cellspacing=\"20\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 250px;\" width=\"250\" align=\"left\" valign=\"top\">\n<p style=\"text-align: center; width: 250px;\"><img src=\"http://joobi.co/images/jnews_newsletter.png\" border=\"0\" alt=\"jNews Upgrade\" width=\"130\" height=\"215\" style=\"display: block; border: 0; margin: 0px auto;\" /></p>\n<h3>What is it in for you?</h3>\n<ul>\n<li>Template Management</li>\n<li>Queue Management</li>\n<li>Advanced Statistics</li>\n<li>Sending Process</li>\n</ul>\n</td>\n<td valign=\"top\">\n<p>Hi {tag:name},</p>\n<br />\n<p>This 2010, we are coming out with a application that will bring email marketing to the next generation. This is jNews.<br /><br /> jNews is our newest products, an email marketing application for Joomla 1.5 with the most powerful and coolest features ever making sure that your communications yields the best results that you want.</p>\n<br />\n<p>{tag:share name=facebook,linkedin,twitter}</p>\n<br /> \n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 49px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_jmarket/Itemid,49/controller,product-display/eid,82/task,show/\"> Product Presentation </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/Help/jNews/Table-of-Contents-jNews.html\"> Documentation </a><br /></td>\n</tr>\n</tbody>\n</table>\n<hr style=\"width: 98%;\" />\n<p style=\"font-size:12px;\">Should you have questions, comments, feature requests, do not hesitate to contact our support or chat live with them.</p>\n<br /><br /> \n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 55px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_jtickets/Itemid,147/controller,ticket/\"> Support </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_agora/Itemid,60/\"> Forum </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/organization/about/welcome-to-joobi-live-support.html\"> Live Admin </a></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td colspan=\"2\" align=\"center\">Would you like to change your subscription? {tag:subscriptions}<br /> Not interested any more? {tag:unsubscribe}</td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 702px; height: 70px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 8px;\" rowspan=\"2\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/blue/bottom_left_blue.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n<td style=\"width: 686px;\">\n<table style=\"width: 100%;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td colspan=\"3\" bgcolor=\"#ffffff\"><span style=\"font-size: 16px; color: #fff;\"> joobi </span></td>\n</tr>\n<tr>\n<td height=\"118\" bgcolor=\"#025b87\">\n<table border=\"0\" cellspacing=\"5\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td colspan=\"3\" bgcolor=\"#025b87\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\">\n<tbody>\n<tr>\n<td>\n<h5>Latest Testimonials</h5>\n<h6>It feels to me that live chat is the absolute best way to provide customer support...</h6>\n<br /> <a href=\"#\"> Read more </a></td>\n<td>\n<h5>More Powerful Features!</h5>\n<h6>Wanted to design your own newsletter template? Check our jNews PRO version.</h6>\n<br /> <a href=\"#\"> See more </a></td>\n<td valign=\"bottom\"><img src=\"http://www.joobi.co/images/newsletter_templates/entwine/blue/logo-small.png\" border=\"0\" alt=\"jnewsletter logo\" style=\"margin:0 0 0 20px;\" /></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td style=\"text-align:center;\" align=\"center\" valign=\"top\" bgcolor=\"#08395A\"><br />\n<h6>This email contains graphics, so if you don\'t see them, {tag:viewonline name=view it in your browser}.</h6>\n<br />\n<h6>Powered by Joobi</h6>\n<h6><br /><br /></h6>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"left\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/blue/bottom_right_blue.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>','',1285292068,1,0,99,'entwine_blue','a:16:{s:8:\"color_bg\";s:7:\"#08395a\";s:8:\"style_h1\";s:214:\"	color:#FFFFFF; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:36px; 	font-weight:bold; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h2\";s:198:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:30px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt;\";s:8:\"style_h3\";s:199:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:24px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:30px; 	margin-left:0pt;\";s:8:\"style_h4\";s:217:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:18px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:10px; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h5\";s:214:\"	color:#FFFFFF; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:14px; 	font-weight:bold; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h6\";s:182:\"	color:#FFFFFF; 	font-family:Arial,Helvetica,Serif; 	font-size:12px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt;\";s:7:\"style_a\";s:91:\"	color:#08395A; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:8:\"style_ul\";s:71:\"	line-height:150%; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:8:\"style_li\";s:71:\"	line-height:150%; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:15:\"aca_unsubscribe\";s:91:\"	color:#08395A; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:13:\"aca_subscribe\";s:91:\"	color:#08395A; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:11:\"aca_content\";s:91:\"	color:#333333; 	font-family:Arial,Helvetica,Serif; 	font-size:12px; 	margin:0; 	padding:0;\";s:9:\"aca_title\";s:199:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:24px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:30px; 	margin-left:0pt;\";s:12:\"aca_readmore\";s:90:\"	background-color: #025B87;     font-family: Arial,Helvetica,Serif;     padding: 3px 10px;\";s:10:\"aca_online\";s:91:\"	color:#FFFFFF; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";}','http://www.joobi.co/images/newsletter_templates/thumbnails/entwine_blue.png',1,'#outlook a{padding:0;} \nimg{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}\n\nbody, p, td{\n	color:#333333;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	margin:0;\n	padding:0;\n}\n\na, .online, .subscriptions, .unsubscribe{\n	color:#08395A;\n	text-decoration:none;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\n.online{\n	color:#FFFFFF;\n	text-decoration:none;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\n\nh1, h1 a{\n	color:#FFFFFF;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:36px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh2, h2 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:30px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n}\n\nh3, h3 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:24px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:30px;\n	margin-left:0pt;\n}\n\nh4, h4 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:18px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:10px;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh5, h5 a{\n	color:#FFFFFF;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:14px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh6, h6 a{\n	color:#FFFFFF;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n}\n\nul,li{\n	line-height:150%;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\n.readmore{\n	background-color: #025B87;\n    font-family: Arial,Helvetica,Serif;\n    padding: 3px 10px;\n}\n\n.readmore a{\n	color:#ffffff;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}'),(3,'Acajoom Template','A simple single column template suitable for any kind of occasions with a clean and sharp designed to align your company\'s identity. The default newsletter template mostly used in Acajoom. \r\n','<table style=\"width: 100%; margin: 0pt auto; background-color:#f1f1f1; color: #333333;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td align=\"center\" valign=\"top\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" bgcolor=\"#f1f1f1\">\n<tbody>\n<tr>\n<td colspan=\"3\" bgcolor=\"#ffffff\"><img src=\"media/com_jnews/templates/acajoom/tpl0_top_header.jpg\" border=\"0\" alt=\"Newsletter\" width=\"530\" height=\"137\" style=\"display:block;\" /></td>\n</tr>\n<tr>\n<td colspan=\"3\" bgcolor=\"#ffffff\"><img src=\"media/com_jnews/templates/acajoom/tpl0_underban.jpg\" border=\"0\" width=\"530\" height=\"22\" style=\"display:block;\" /></td>\n</tr>\n<tr>\n<td width=\"15\" valign=\"top\" bgcolor=\"#ffffff\"><img src=\"media/com_jnews/templates/acajoom/tpl0_spacer.gif\" border=\"0\" width=\"15\" height=\"1\" style=\"display:block;\" /></td>\n<td width=\"500\" valign=\"top\" bgcolor=\"#ffffff\">\n<table border=\"0\" cellspacing=\"15\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td colspan=\"2\"><img src=\"media/com_jnews/templates/acajoom/spacer.png\" border=\"0\" height=\"20px\" /></td>\n</tr>\n<tr>\n<td colspan=\"2\" align=\"center\">\n<h2>jNews is now out in the market</h2>\n</td>\n</tr>\n<tr>\n<td colspan=\"2\"><img src=\"media/com_jnews/templates/acajoom/spacer.png\" border=\"0\" height=\"20px\" /></td>\n</tr>\n<tr>\n<td width=\"180px\" valign=\"top\"><img src=\"http://joobi.co/images/jnews_newsletter.png\" border=\"0\" style=\"display:block;\" /></td>\n<td width=\"320px\" valign=\"top\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td colspan=\"4\">\n<p>Hi {tag:name},</p>\n<br />\n<p>This 2010, we are coming out with an application that will bring email marketing to the next generation. This is jNews.</p>\n<br />\n<p>jNews is our newest products, an email marketing application for Joomla 1.5 with the most powerful and coolest features ever marking sure that your communications yields the best results that you want best.</p>\n<br /> {tag:share name=facebook,linkedin,twitter}<br /> <br /> <br /></td>\n</tr>\n<tr>\n<td style=\"width: 5px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_jmarket/Itemid,49/controller,product-display/eid,82/task,show/\">Product Presentation</a></td>\n<td style=\"width: 6px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/Help/jNews/Table-of-Contents-jNews.html\">Documentation</a></td>\n<td style=\"width: 5px;\"></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td colspan=\"2\"><br /> \n<hr />\n<p>Should you have questions, comments, feature requests, do not hesitate to contact our support or chat live with them.</p>\n<br /></td>\n</tr>\n<tr>\n<td colspan=\"2\" width=\"100%\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td style=\"width: 37px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_jtickets/Itemid,147/controller,ticket/\">Support</a></td>\n<td style=\"width: 15px;\" width=\"15px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_agora/Itemid,60/\">Forum</a></td>\n<td style=\"width: 15px;\" width=\"15px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/organization/about/welcome-to-joobi-live-support.html\">Live Admin</a></td>\n<td style=\"width: 20px;\"></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td colspan=\"2\"><br />\n<p>Your Subscription: {tag:subscriptions} | {tag:unsubscribe}</p>\n<br /></td>\n</tr>\n</tbody>\n</table>\n</td>\n<td width=\"15\" valign=\"top\" bgcolor=\"#ffffff\"><img src=\"media/com_jnews/templates/acajoom/tpl0_spacer.gif\" border=\"0\" alt=\"1\" width=\"15\" height=\"1\" style=\"display:block;\" /></td>\n</tr>\n<tr>\n<td colspan=\"3\"><img src=\"media/com_jnews/templates/acajoom/tpl0_abovefooter.jpg\" border=\"0\" alt=\".\" width=\"530\" height=\"22\" style=\"display:block;\" /></td>\n</tr>\n<tr>\n<td style=\"border-top: 1px solid #aeaeae;\" colspan=\"3\" height=\"60\" align=\"center\" valign=\"middle\" bgcolor=\"#cacaca\">\n<p class=\"footerText\"><a href=\"http://www.joobi.co\"><img src=\"media/com_jnews/templates/acajoom/tpl0_powered_by.gif\" border=\"0\" alt=\"Powered by Joobi\" height=\"20\" style=\"display:block;\" /></a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>','',1285292068,1,0,99,'acajoom_template','a:16:{s:8:\"color_bg\";s:7:\"#f1f1f1\";s:8:\"style_h1\";s:214:\"	color:#FFFFFF; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:36px; 	font-weight:bold; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h2\";s:198:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:30px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt;\";s:8:\"style_h3\";s:199:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:24px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:30px; 	margin-left:0pt;\";s:8:\"style_h4\";s:217:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:18px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:10px; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h5\";s:214:\"	color:#FFFFFF; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:14px; 	font-weight:bold; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h6\";s:182:\"	color:#FFFFFF; 	font-family:Arial,Helvetica,Serif; 	font-size:12px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt;\";s:7:\"style_a\";s:91:\"	color:#43adde; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:8:\"style_ul\";s:71:\"	line-height:150%; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:8:\"style_li\";s:71:\"	line-height:150%; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:15:\"aca_unsubscribe\";s:91:\"	color:#43adde; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:13:\"aca_subscribe\";s:91:\"	color:#43adde; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:11:\"aca_content\";s:91:\"	color:#333333; 	font-family:Arial,Helvetica,Serif; 	font-size:12px; 	margin:0; 	padding:0;\";s:9:\"aca_title\";s:199:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:24px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:30px; 	margin-left:0pt;\";s:12:\"aca_readmore\";s:109:\"	background-color: #454545;     font-family: Arial,Helvetica,Serif;     padding: 3px 10px; text-align:center;\";s:10:\"aca_online\";s:91:\"	color:#43adde; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";}','http://www.joobi.co/images/newsletter_templates/thumbnails/acajoom_template.png',1,'#outlook a{padding:0;} \nimg{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}\n\nbody, p, td{\n	color:#333333;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	margin:0;\n	padding:0;\n}\n\na, .online, .subscriptions, .unsubscribe, .online{\n	color:#43adde;\n	text-decoration:none;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\nh1, h1 a{\n	color:#FFFFFF;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:36px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh2, h2 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:30px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n}\n\nh3, h3 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:24px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:30px;\n	margin-left:0pt;\n}\n\nh4, h4 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:18px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:10px;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh5, h5 a{\n	color:#FFFFFF;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:14px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh6, h6 a{\n	color:#FFFFFF;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n}\n\nul,li{\n	line-height:150%;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\n.readmore{\n	background-color: #454545;\n        font-family: Arial,Helvetica,Serif;\n        padding: 3px 10px;\n        text-align:center;\n}\n\n.readmore a{\n	color:#ffffff;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	text-align:center;\n}'),(4,'Elegant Navy','A unique and beautiful two layout newsletter template designed to present current news and let your customers updated.','<style type=\"text/css\">\n	a{border-top:1px solid #000;}\n</style>\n\n<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:100%;margin:0; background-color: #054669; color: #ffffff; font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\">\n	<tbody>\n		<tr>\n			<td align=\"center\">\n				<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"margin:0 auto;width:575px;\">\n					<tbody>\n						<tr>\n							<td style=\"width:14px\">&nbsp;</td>\n							<td style=\"width:547px;\">\n								<table style=\"width: 547px; height: 70px;\" border=\"0\" cellspacing=\"0\">\n									<tbody>\n										<tr>\n											<td style=\"background-color: #ffffff;width:147px;height:70px;padding:0;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\" valign=\"top\" width=\"146px\" height=\"70px\">\n												<img src=\"http://www.joobi.co/images/newsletter_templates/elegant/jnews_logo.png\">\n											</td>\n											<td style=\"text-align: left; padding: 10px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;background-color:#054669;\" bgcolor=\"#054669\">\n												<span style=\"font-size: 2em; color: #fff;\">\n													LOGO &amp;trade\n												</span>\n												<br/>\n												<span style=\"font-size: 1em; color: #fff;\">\n													a very wonderful tagline\n												</span>\n											</td>\n											<td style=\"text-align: right; padding-right: 10px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;background-color:#054669;\" bgcolor=\"#054669\" valign=\"bottom\">\n												<span style=\"font-size: 13px; color: #fff;\">\n													{tag:date}\n												</span>\n											</td>\n										</tr>\n									</tbody>\n								</table>\n								<table style=\"width: 547px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFF\">\n									<tbody>\n										<tr>\n											<td align=\"left\" valign=\"top\" height=\"35px\">\n												<img src=\"media/com_jnews/templates/elegant/elegant.gif\" border=\"0\" style=\"display:block;margin:0;float:none;\"/>\n											</td>\n										</tr>\n									</tbody>\n								</table>\n								<table style=\"width: 547px; height: 70px; background-color: #fff;\" border=\"0\" cellspacing=\"0\">\n									<tbody>\n										<tr>\n											<td style=\"padding: 20px 15px 15px 20px; text-align: justify; background-color: #fff; width: 340px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\" valign=\"top\">\n												<span style=\"color: #329aa7; font-size: 19px;\">\n													Lorem ipsum dolor sit amet \n												</span> \n												<br /> \n												<span style=\"color: #000; font-size: 12px;\">\n													\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\n												</span>\n												<br /><br />\n												<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n													<tbody>\n														<tr>\n															<td>\n															</td>\n															<td align=\"right\" style=\"height:22px; border: 1px solid #329aa7; background-color: #025b87; padding: 2px 8px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\">\n																<span >\n																	<a href=\"#\" style=\"text-decoration: none; color: #fff; font-size: 12px;\">\n																		Read more\n																	</a>\n																</span>\n															</td>\n														</tr>\n													</tbody>\n												</table>\n											</td>\n											<td style=\"padding: 20px 15px 15px 0;\" valign=\"top\">\n												<div style=\"border: 1px solid #C9C9C9; background-color: #ededed; padding: 4px;\">\n													<img src=\"media/com_jnews/templates/elegant/sample-image.png\" border=\"0\" width=\"172\" height=\"167\" style=\"display:block;margin:0;float:none;width:172px;height:167px;\"/>\n												</div>\n											</td>\n										</tr>\n									</tbody>\n								</table>\n							</td>\n							<td style=\"width:14px\">&nbsp;</td>\n						</tr>\n						<tr>\n							<td style=\"width:14px;background-color: #709a3e;padding:1px 0 0 0;\">&nbsp;</td>\n							<td style=\"background-color:#fff;\">\n								<table style=\"width: 547px; background-color:#fff;\" border=\"0\" cellspacing=\"0\" bgcolor=\"#fff\">\n									<tbody>\n										<tr>\n											<td valign=\"top\" style=\"color: #fff; font-size: 13px;tex-decoration:none; background-color: #709a3e; padding: 2px 8px 0;border:none;width:56px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\">\n												Featured\n											</td>\n											<td>\n												&nbsp;\n											</td>\n										</tr>\n									</tbody>\n								</table>\n							</td>\n							<td style=\"width:14px\">&nbsp;</td>\n						</tr>\n						<tr>\n							<td style=\"width:14px\">&nbsp;</td>\n							<td>\n								<table style=\"width: 547px; height: 70px; background-color: #fff;\" border=\"0\" cellspacing=\"0\">\n									<tbody>\n										<tr>\n											<td style=\"padding: 20px 0 15px 15px;\" valign=\"top\">\n												<div style=\"border: 1px solid #C9C9C9; background-color: #ededed; padding: 4px;\">\n													<img src=\"media/com_jnews/templates/elegant/sample-image.png\" border=\"0\" width=\"172\" height=\"167\" style=\"display:block;margin:0;float:none;width:172px;height:167px;\"/>\n												</div>\n											</td>\n											<td style=\"padding: 20px 15px 15px 20px; text-align: justify; background-color: #fff; width: 340px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\" valign=\"top\">\n												<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n													<tbody>\n														<tr>\n															<td colspan=\"2\" style=\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;width: 100%; color: #fff; font-size: 19px; text-decoration: none; border: 1px solid #329aa7; background-color: #025b87;\">\n																<span style=\"padding-left: 10px;\">\n																	Lorem ipsum dolor sit amet\n																</span>\n															</td>\n														</tr>\n														<tr>\n															<td colspan=\"2\" style=\"padding:5px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\">\n															<span style=\"color: #000; font-size: 12px;\">\n																\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...\"\n															</span>\n															<br /><br />\n															</td>\n														</tr>\n														<tr>\n															<td style=\"width:285px;\">\n																&nbsp;\n															</td>\n															<td style=\"height:22px;width:100px;border: 1px solid #329aa7; background-color: #025b87; padding: 2px 8px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\">\n																<span >\n																	<a href=\"#\" style=\"text-decoration: none; color: #fff; font-size: 12px;\">\n																		Read more\n																	</a>\n																</span>\n															</td>\n														</tr>\n													</tbody>\n												</table>\n											</td>\n										</tr>\n										<tr>\n											<td style=\"padding: 20px 0 15px 15px;\" valign=\"top\">\n												<div style=\"border: 1px solid #C9C9C9; background-color: #ededed; padding: 4px;\">\n													<img src=\"media/com_jnews/templates/elegant/sample-image.png\" border=\"0\" width=\"172\" height=\"167\" style=\"display:block;margin:0;float:none;width:172px;height:167px;\"/>\n												</div>\n											</td>\n											<td style=\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;padding: 20px 15px 15px 20px; text-align: justify; background-color: #fff; width: 340px;\" valign=\"top\">\n												<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n													<tbody>\n														<tr>\n															<td colspan=\"2\" style=\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;width: 100%; color: #fff; font-size: 19px; text-decoration: none; border: 1px solid #329aa7; background-color: #025b87;\">\n																<span style=\"padding-left: 10px;\">\n																	Lorem ipsum dolor sit amet\n																</span>\n															</td>\n														</tr>\n														<tr>\n															<td colspan=\"2\" style=\"padding:5px;\">\n															<span style=\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;color: #000; font-size: 12px;\">\n																\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...\"\n															</span>\n															<br /><br />\n															</td>\n														</tr>\n														<tr>\n															<td style=\"width:285px;\">\n																&nbsp;\n															</td>\n															<td style=\"height:22px;width:100px;border: 1px solid #329aa7; background-color: #025b87; padding: 2px 8px;font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\">\n																<span >\n																	<a href=\"#\" style=\"text-decoration: none; color: #fff; font-size: 12px;\">\n																		Read more\n																	</a>\n																</span>\n															</td>\n														</tr>\n													</tbody>\n												</table>\n											</td>\n										</tr>\n										<tr>\n											<td colspan=\"2\" style=\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\">\n												<p style=\"text-align: center; font-size: 12px; color: #000000;\">\n													Would you like to change your subscription? {tag:subscriptions}\n													<br /> \n													Not interested any more? {tag:unsubscribe}\n												</p>\n											</td>\n										</tr>\n									</tbody>\n								</table>\n							</td>\n							<td style=\"width:14px\">&nbsp;</td>\n						</tr>\n					</tbody>\n				</table>\n				<table style=\"width: 100%; background-color: #054669;\" border=\"0\" cellspacing=\"0\">\n					<tbody>\n						<tr>\n							<td valign=\"top\" bgcolor=\"#709a3e\" height=\"20px\"> </td>\n							<td style=\"width: 547px; background-color: #ffffff;\" valign=\"top\"> </td>\n							<td valign=\"top\" bgcolor=\"#709a3e\"> </td>\n						</tr>\n						<tr bgcolor=\"#156e9f\">\n							<td colspan=\"3\" align=\"top\" height=\"80px\" style=\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\">\n								<center>\n									<div style=\"color: #fffff; font-size: 11px; text-align: center; padding-bottom: 5px;\">\n										<span style=\"color: #ffffff;\">\n											This email contains graphics, so if you don\'t see them, {tag:viewonline name=view it in your browser}.\n										</span>\n									</div>\n								</center>\n								<center>\n									<div style=\"width: 99%; color: #fff; font-size: 12px; text-align: center;\">\n										Powered by Joobi\n									</div>\n								</center>\n							</td>\n						</tr>\n					</tbody>\n				</table>\n			</td>\n		</tr>\n	</tbody>\n</table>','',1285292068,1,0,99,'elegant_navy','a:11:{s:8:\"color_bg\";s:7:\"#054669\";s:8:\"style_h1\";s:28:\"font-size: 2em; color: #fff;\";s:8:\"style_h2\";s:176:\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;width: 100%; color: #fff; font-size: 19px; text-decoration: none; border: 1px solid #329aa7; background-color: #025b87;\";s:8:\"style_h3\";s:32:\"color: #329aa7; font-size: 19px;\";s:8:\"style_h4\";s:28:\"font-size: 1em; color: #fff;\";s:8:\"style_h5\";s:29:\"font-size: 13px; color: #fff;\";s:8:\"style_h6\";s:72:\"color: #fffff; font-size: 11px; text-align: center; padding-bottom: 5px;\";s:7:\"style_a\";s:15:\"color: #329AA7;\";s:15:\"aca_unsubscribe\";s:109:\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;text-align: center; font-size: 12px; color: #000000;\";s:13:\"aca_subscribe\";s:109:\"font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;text-align: center; font-size: 12px; color: #000000;\";s:10:\"aca_online\";s:72:\"color: #fffff; font-size: 11px; text-align: center; padding-bottom: 5px;\";}','http://www.joobi.co/images/newsletter_templates/thumbnails/elegant_navy.png',1,'body, p{font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;color: #000; font-size: 12px;}'),(12,'Simplicity','Bring out the best of your content with this light and clean simple newsletter.','<div style=\"background-color:#FFFFFF;\">\n<p> </p>\n<table style=\"height: 100%;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#9edaf4\">\n<tbody>\n<tr>\n<td align=\"center\" valign=\"top\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">\n<tbody>\n<tr>\n<td valign=\"top\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td colspan=\"2\" valign=\"middle\">\n<div>\n<h1><img src=\"http://www.joobi.co/images/newsletter_templates/simplicity/jnews_logo.png\" border=\"0\" width=\"241px\" height=\"91px\" /></h1>\n</div>\n</td>\n</tr>\n<tr>\n<td valign=\"middle\">\n<div>\n<h3>Your Top Communication Partner</h3>\n</div>\n</td>\n<td width=\"30%\" valign=\"bottom\">\n<div style=\"text-align:right;\">\n<h5>{tag:date}</h5>\n</div>\n</td>\n</tr>\n<tr>\n</tr>\n</tbody>\n</table>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" bgcolor=\"#ffffff\">\n<tbody>\n<tr>\n<td align=\"center\" valign=\"top\">\n<table border=\"0\" cellspacing=\"30\" cellpadding=\"0\" width=\"600\">\n<tbody>\n<tr>\n<td>\n<h2>jNews is now out in the market!</h2>\n</td>\n<td style=\"margin-top:20px;\" rowspan=\"2\"><img src=\"http://joobi.co/images/jnews_newsletter.png\" border=\"0\" width=\"130px\" height=\"215px\" /></td>\n</tr>\n<tr>\n<td valign=\"top\">\n<p>Hi {tag:firstname},<br /><br /> This 2012, we are coming out with a application that will bring email marketing to the next generation. This is jNews. <br /><br /> jNews is our newest products, an email marketing application for Joomla 1.5, 1.6, 1.7 and 2.5 with the most powerful and coolest features ever making sure that your communications yields the best results that you want. {tag:share name=facebook,linkedin,twitter}</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"readmore\" width=\"113px\" height=\"38px;\" align=\"center\" valign=\"center\" background=\"media/com_jnews/templates/simplicity/images/bttn.png\"><a href=\"#\">Live Demo</a></td>\n<td style=\"width: 30px;\" width=\"10\"></td>\n<td class=\"readmore\" width=\"113px\" height=\"38px;\" align=\"center\" valign=\"center\" background=\"media/com_jnews/templates/simplicity/images/bttn.png\"><a href=\"#\">Documentation</a></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td align=\"center\" valign=\"top\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">\n<tbody>\n<tr>\n<td colspan=\"2\">\n<hr width=\"560px\" size=\"1\" />\n</td>\n</tr>\n<tr>\n<td width=\"280\" valign=\"top\">\n<table border=\"0\" cellspacing=\"30\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td valign=\"top\">\n<div>\n<h4>Need Help?</h4>\n<p>Should you have questions, comments, feature requests, do not hesitate to contact our support or chat live with them.</p>\n<ul>\n<li>Live Chat</li>\n<li>Support</li>\n<li>Forum</li>\n</ul>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td width=\"280\" valign=\"top\">\n<table border=\"0\" cellspacing=\"30\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td valign=\"top\">\n<div>\n<h4>Spread the News</h4>\n<p>Know someone who might be interested in this newsletter? {tag:fwdtofriend name=Forward to a friend.}</p>\n<br /><br />\n<p>Would you like to {tag:subscriptions}?<br /> Not interested any more? {tag:unsubscribe}</p>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td align=\"center\" valign=\"top\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" bgcolor=\"#9edaf4\">\n<tbody>\n<tr>\n<td valign=\"top\">\n<table border=\"0\" cellspacing=\"30\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td colspan=\"2\" align=\"center\" valign=\"middle\">\n<div><a class=\"footer\" href=\"#\">This email contains graphics, if you don\'t see them {tag:viewonline name=view it in your browser}.</a><br /> <a class=\"footer\" href=\"#\">Powered by Joobi</a></div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</div>','',1319652945,1,1,99,'simplicity','a:12:{s:8:\"color_bg\";s:7:\"#FFFFFF\";s:8:\"style_h1\";s:197:\"color:#ffffff; display:block; font-family:Arial,Helvetica,Serif; font-size:48px; font-weight:bold; line-height:100%; margin-bottom:0px; margin-left:0; margin-right:0; margin-top:0; text-align:left;\";s:8:\"style_h2\";s:182:\"color:#355f77; display:block; font-family:Arial,Helvetica,Serif; font-size:24px; font-weight:normal; line-height:100%; margin-bottom:0px; margin-left:0; margin-right:0; margin-top:0;\";s:8:\"style_h3\";s:216:\"color:#4f88a7; display:block; font-family:Arial,Helvetica,Serif; font-size:14px; font-weight:normal; line-height:100%; margin-bottom:30px; margin-left:0; margin-right:0; margin-top:0; text-shadow:1px 0px 0px #aee0f6;\";s:8:\"style_h4\";s:200:\"color:#355f77; display:block; font-family:Arial,Helvetica,Serif; font-size:18px; font-weight:normal; line-height:100%; margin-bottom:10px; margin-left:0; margin-right:0; margin-top:0; text-align:left;\";s:8:\"style_h5\";s:216:\"color:#4f88a7; display:block; font-family:Arial,Helvetica,Serif; font-size:13px; font-weight:normal; line-height:100%; margin-bottom:30px; margin-left:0; margin-right:0; margin-top:0; text-shadow:1px 0px 0px #aee0f6;\";s:7:\"style_a\";s:87:\"color:#416e86; font-family:Arial,Helvetica,Serif; font-size:13px; text-decoration:none;\";s:8:\"style_ul\";s:83:\"color:#416e86; font-family:Arial,Helvetica,Serif; font-size:13px; line-height:200%;\";s:8:\"readmore\";s:173:\"background-color:#b5e2f7; background-repeat:no-repeat; height:38px; margin-bottom:10px; margin-left:10px; margin-right:10px; margin-top:10px; text-align:center; width:113px;\";s:16:\"style_aca_online\";s:87:\"color:#416e86; font-family:Arial,Helvetica,Serif; font-size:13px; text-decoration:none;\";s:21:\"style_aca_unsubscribe\";s:87:\"color:#416e86; font-family:Arial,Helvetica,Serif; font-size:13px; text-decoration:none;\";s:13:\"subscriptions\";s:87:\"color:#416e86; font-family:Arial,Helvetica,Serif; font-size:13px; text-decoration:none;\";}','http://www.joobi.co/images/newsletter_templates/thumbnails/simplicity_tmbl.png',1,'#outlook a{padding:0;} \nimg{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}\n\nbody, p, td{\n	color:#1e1f1f;\n	font-family:Arial,Helvetica,Serif;\n	font-size:13px;\n	line-height:150%;\n	margin:0;\n	padding:0;\n}\n\na, .online, .subscriptions, .unsubscribe{\n	color:#416e86;\n	text-decoration:none;\n	font-family:Arial,Helvetica,Serif;\n	font-size:13px;\n}\n\nh1, h1 a{\n	color:#ffffff;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:48px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0;\n	margin-right:0;\n	margin-bottom:0px;\n	margin-left:0;\n	text-align:left;\n}\n\nh2, h2 a{\n	color:#355f77;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:24px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0;\n	margin-right:0;\n	margin-bottom:0px;\n	margin-left:0;\n	\n}\n\nh3, h3 a{\n	color:#4f88a7;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:14px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0;\n	margin-right:0;\n	margin-bottom:30px;\n	margin-left:0;\n	text-shadow:1px 0px 0px #aee0f6;\n}\n\nh4, h4 a{\n	color:#355f77;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:18px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0;\n	margin-right:0;\n	margin-bottom:10px;\n	margin-left:0;\n	text-align:left;\n}\n\nh5, h5 a{\n	color:#4f88a7;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:13px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0;\n	margin-right:0;\n	margin-bottom:30px;\n	margin-left:0;\n	text-shadow:1px 0px 0px #aee0f6;\n}\n\nul, li{\n	color:#416e86;\n	line-height:200%;\n	font-family:Arial,Helvetica,Serif;\n	font-size:13px;\n}\n\n.readmore{\n	background-color:#b5e2f7;\n	background-repeat:no-repeat;\n	margin-top:10px;\n	margin-right:10px;\n	margin-bottom:10px;\n	margin-left:10px;\n	width:113px;\n	height:38px; \n	text-align:center;\n}\n\n.readmore a{\n	color:#416e86;\n	font-family:Arial,Helvetica,Serif;\n	font-size:13px;\n}\n\n.footer, .footer a {\n	color:#4f88a7;\n	font-family:Arial,Helvetica,Serif;\n	font-size:13px;\n	text-align:center;\n}'),(13,'Entwine (green)','A classic two columns layout designed with a twist of modern curves in green color, highlighting headline titles valuable for your newsletter to attract more customer, best for promos and events.','<table style=\"width: 100%; margin: 0pt auto; background-color:#003300; color: #333333; font-family: Arial,Tahoma,Geneva,Kalimati,sans-serif;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td align=\"center\" valign=\"top\">\n<table style=\"margin: auto; width: 700px; height: 70px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"right\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/green/topleft_header.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n<td>\n<table style=\"width: 100%;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td height=\"58\" bgcolor=\"#4f7e11\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td style=\"width: 70%;\">\n<h1><img src=\"http://www.joobi.co/images/newsletter_templates/entwine/green/logo-big.png\" border=\"0\" alt=\"jnews logo\" style=\"margin-left: 20px;display:block;margin:0;\" /></h1>\n</td>\n<td style=\"width: 30%;\" align=\"right\">\n<h6>{tag:date}</h6>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td style=\"background-color: #ffffff; height: 58px; text-align: center;\" height=\"58\">\n<h2>jNews is now out in the market!</h2>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"left\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/green/topright_header.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 700px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\" font-family: Arial, Tahoma, Geneva, Kalimati, sans-serif;\"><span style=\"font-size: 12px; color: #003300;\">joobi</span></td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 680px; background-color: #ffffff;\" border=\"0\" cellspacing=\"20\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 250px;\" width=\"250\" align=\"left\" valign=\"top\">\n<p style=\"text-align: center; width: 250px;\"><img src=\"http://joobi.co/images/jnews_newsletter.png\" border=\"0\" alt=\"jNews Upgrade\" width=\"130\" height=\"215\" style=\"display: block; border: 0; margin: 0px auto;\" /></p>\n<h3>What is it in for you?</h3>\n<ul>\n<li>Template Management</li>\n<li>Queue Management</li>\n<li>Advanced Statistics</li>\n<li>Sending Process</li>\n</ul>\n</td>\n<td valign=\"top\">\n<p>Hi {tag:name},</p>\n<br />\n<p>This 2010, we are coming out with a application that will bring email marketing to the next generation. This is jNews.<br /><br /> jNews is our newest products, an email marketing application for Joomla 1.5 with the most powerful and coolest features ever making sure that your communications yields the best results that you want.</p>\n<br />\n<p>{tag:share name=facebook,linkedin,twitter}</p>\n<br /> \n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 49px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_jmarket/Itemid,49/controller,product-display/eid,82/task,show/\"> Product Presentation </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/Help/jNews/Table-of-Contents-jNews.html\"> Documentation </a><br /></td>\n</tr>\n</tbody>\n</table>\n<hr style=\"width: 98%;\" />\n<p style=\"font-size:12px;\">Should you have questions, comments, feature requests, do not hesitate to contact our support or chat live with them.</p>\n<br /><br /> \n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 55px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_jtickets/Itemid,147/controller,ticket/\"> Support </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/component/option,com_agora/Itemid,60/\"> Forum </a></td>\n<td style=\"width: 20px;\"></td>\n<td class=\"readmore\"><a href=\"http://www.joobi.co/organization/about/welcome-to-joobi-live-support.html\"> Live Admin </a></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td colspan=\"2\" align=\"center\">Would you like to change your subscription? {tag:subscriptions}<br /> Not interested any more? {tag:unsubscribe}</td>\n</tr>\n</tbody>\n</table>\n<table style=\"margin: auto; width: 702px; height: 70px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"width: 8px;\" rowspan=\"2\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/green/bottom_left_green.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n<td style=\"width: 686px;\">\n<table style=\"width: 100%;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td colspan=\"3\" bgcolor=\"#ffffff\"><span style=\"font-size: 16px; color: #fff;\"> joobi </span></td>\n</tr>\n<tr>\n<td height=\"118\" bgcolor=\"#4f7e11\">\n<table border=\"0\" cellspacing=\"5\" cellpadding=\"0\" width=\"100%\">\n<tbody>\n<tr>\n<td colspan=\"3\" bgcolor=\"#4f7e11\">\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\">\n<tbody>\n<tr>\n<td>\n<h5>Latest Testimonials</h5>\n<h6>It feels to me that live chat is the absolute best way to provide customer support...</h6>\n<br /> <a href=\"#\"> Read more </a></td>\n<td>\n<h5>More Powerful Features!</h5>\n<h6>Wanted to design your own newsletter template? Check our jNews PRO version.</h6>\n<br /> <a href=\"#\"> See more </a></td>\n<td valign=\"bottom\"><img src=\"http://www.joobi.co/images/newsletter_templates/entwine/green/logo-small.png\" border=\"0\" alt=\"jnewsletter logo\" style=\"margin:0 0 0 20px;\" /></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td style=\"text-align:center;\" align=\"center\" valign=\"top\" bgcolor=\"#003300\"><br />\n<h6>This email contains graphics, so if you don\'t see them, {tag:viewonline name=view it in your browser}.</h6>\n<br />\n<h6>Powered by Joobi</h6>\n<h6><br /><br /></h6>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"width: 8px;\" rowspan=\"2\" align=\"left\" valign=\"top\"><img src=\"media/com_jnews/templates/entwine/green/bottom_right_green.png\" border=\"0\" alt=\"jnews logo\" style=\"display:block;margin:0;\" /></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>','',1285292068,1,0,99,'entwine_green','a:16:{s:8:\"color_bg\";s:7:\"#003300\";s:8:\"style_h1\";s:214:\"	color:#FFFFFF; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:36px; 	font-weight:bold; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h2\";s:198:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:30px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt;\";s:8:\"style_h3\";s:199:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:24px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:30px; 	margin-left:0pt;\";s:8:\"style_h4\";s:217:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:18px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:10px; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h5\";s:214:\"	color:#FFFFFF; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:14px; 	font-weight:bold; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt; 	text-align:left;\";s:8:\"style_h6\";s:182:\"	color:#FFFFFF; 	font-family:Arial,Helvetica,Serif; 	font-size:12px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:0pt; 	margin-left:0pt;\";s:7:\"style_a\";s:90:\"color:#003300; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:8:\"style_ul\";s:71:\"	line-height:150%; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:8:\"style_li\";s:71:\"	line-height:150%; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:15:\"aca_unsubscribe\";s:90:\"color:#003300; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:13:\"aca_subscribe\";s:90:\"color:#003300; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";s:11:\"aca_content\";s:91:\"	color:#333333; 	font-family:Arial,Helvetica,Serif; 	font-size:12px; 	margin:0; 	padding:0;\";s:9:\"aca_title\";s:90:\"	background-color: #003300;     font-family: Arial,Helvetica,Serif;     padding: 3px 10px;\";s:12:\"aca_readmore\";s:199:\"	color:#333333; 	display:block; 	font-family:Arial,Helvetica,Serif; 	font-size:24px; 	font-weight:normal; 	line-height:100%; 	margin-top:0pt; 	margin-right:0pt; 	margin-bottom:30px; 	margin-left:0pt;\";s:10:\"aca_online\";s:91:\"	color:#4f7e11; 	text-decoration:none; 	font-family:Arial,Helvetica,Serif; 	font-size:12px;\";}','http://www.joobi.co/images/newsletter_templates/thumbnails/entwine_green.png',1,'#outlook a{padding:0;} \nimg{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}\n\nbody, p, td{\n	color:#333333;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	margin:0;\n	padding:0;\n}\n\na, .online, .subscriptions, .unsubscribe{\n	color:#003300;\n	text-decoration:none;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\n.online{\n	color:#4f7e11;\n	text-decoration:none;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\n\nh1, h1 a{\n	color:#FFFFFF;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:36px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh2, h2 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:30px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n}\n\nh3, h3 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:24px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:30px;\n	margin-left:0pt;\n}\n\nh4, h4 a{\n	color:#333333;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:18px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:10px;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh5, h5 a{\n	color:#FFFFFF;\n	display:block;\n	font-family:Arial,Helvetica,Serif;\n	font-size:14px;\n	font-weight:bold;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n	text-align:left;\n}\n\nh6, h6 a{\n	color:#FFFFFF;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n	font-weight:normal;\n	line-height:100%;\n	margin-top:0pt;\n	margin-right:0pt;\n	margin-bottom:0pt;\n	margin-left:0pt;\n}\n\nul,li{\n	line-height:150%;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}\n\n.readmore{\n	background-color: #003300;\n    font-family: Arial,Helvetica,Serif;\n    padding: 3px 10px;\n}\n\n.readmore a{\n	color:#ffffff;\n	font-family:Arial,Helvetica,Serif;\n	font-size:12px;\n}'),(14,'Bliss (blue)','A blend of perfect yet subtle joy and serenity taken from its clean minimalistic design.',NULL,NULL,NULL,1,0,99,'bliss_blue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/bliss_blue.png',0,''),(15,'Bliss (green)','A blend of perfect yet subtle joy and serenity taken from its clean minimalistic design.',NULL,NULL,NULL,1,0,99,'bliss_green',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/bliss_green.png',0,''),(16,'Bliss (orange)','A blend of perfect yet subtle joy and serenity taken from its clean minimalistic design.',NULL,NULL,NULL,1,0,99,'bliss_orange',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/bliss_orange.png',0,''),(17,'Bliss (red)','A blend of perfect yet subtle joy and serenity taken from its clean minimalistic design.',NULL,NULL,NULL,1,0,99,'bliss_red',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/bliss_red.png',0,''),(18,'Delight (lightgreen)','A suitable template suited for your business, personal, organization, or recreational newsletters.',NULL,NULL,NULL,1,0,99,'delight_lightgreen',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/delight_lightgreen.png',0,''),(19,'Delight (orange)','A suitable template suited for your business, personal, organization, or recreational newsletters.',NULL,NULL,NULL,1,0,99,'delight_orange',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/delight_orange.png',0,''),(20,'Delight (orchid)','A suitable template suited for your business, personal, organization, or recreational newsletters.',NULL,NULL,NULL,1,0,99,'delight_orchid',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/delight_orchid.png',0,''),(21,'Delight (steelblue)','A suitable template suited for your business, personal, organization, or recreational newsletters.',NULL,NULL,NULL,1,0,99,'delight_steelblue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/delight_steelblue.png',0,''),(22,'Delight (thistle)','A suitable template suited for your business, personal, organization, or recreational newsletters.',NULL,NULL,NULL,1,0,99,'delight_thistle',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/delight_thistle.png',0,''),(23,'Eldiario (black)','Engaged your customers with a clean newsletter template, well organize information. El Diario (black) can be used at its best with several contents.',NULL,NULL,NULL,1,0,99,'eldiario_black',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/eldiario_black.png',0,''),(24,'Eldiario (blue)','Engaged your customers with a clean newsletter template, well organize information. El Diario (blue) can be used at its best with several contents.',NULL,NULL,NULL,1,0,99,'eldiario_blue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/eldiario_blue.png',0,''),(25,'Eldiario (green)','Engaged your customers with a clean newsletter template, well organize information. El Diario (green) can be used at its best with several contents.',NULL,NULL,NULL,1,0,99,'eldiario_green',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/eldiario_green.png',0,''),(26,'Eldiario (lightblue)','Engaged your customers with a clean newsletter template, well organize information. El Diario (lightblue) can be used at its best with several contents.',NULL,NULL,NULL,1,0,99,'eldiario_lightblue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/eldiario_lightblue.png',0,''),(27,'Eldiario (lightgreen)','Engaged your customers with a clean newsletter template, well organize information. El Diario (lightgreen) can be used at its best with several contents.',NULL,NULL,NULL,1,0,99,'eldiario_lightgreen',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/eldiario_lightgreen.png',0,''),(28,'Eldiario (lightred)','Engaged your customers with a clean newsletter template, well organize information. El Diario (lightred) can be used at its best with several contents.',NULL,NULL,NULL,1,0,99,'eldiario_lightred',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/eldiario_lightred.png',0,''),(29,'Eldiario (red)','Engaged your customers with a clean newsletter template, well organize information. El Diario (red) can be used at its best with several contents.',NULL,NULL,NULL,1,0,99,'eldiario_red',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/eldiario_red.png',0,''),(30,'Eldiario (white)','Engaged your customers with a clean newsletter template, well organize information. El Diario (white) can be used at its best with several contents.',NULL,NULL,NULL,1,0,99,'eldiario_white',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/eldiario_white.png',0,''),(31,'Flare (black)','Flame up with, Flare! Flare (black) is a combination of classical yet modern and simple beauty; the level of intensity that your newsletter needs.',NULL,NULL,NULL,1,0,99,'flare_black',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/flare_black.png',0,''),(32,'Flare (maroon)','Flame up with, Flare! Flare (maroon) is a combination of classical yet modern and simple beauty; the level of intensity that your newsletter needs.',NULL,NULL,NULL,1,0,99,'flare_maroon',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/flare_maroon.png',0,''),(33,'Flare (orange)','Flame up with, Flare! Flare (orange) is a combination of classical yet modern and simple beauty; the level of intensity that your newsletter needs.',NULL,NULL,NULL,1,0,99,'flare_orange',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/flare_orange.png',0,''),(34,'Flare (teal)','Flame up with, Flare! Flare (teal) is a combination of classical yet modern and simple beauty; the level of intensity that your newsletter needs.',NULL,NULL,NULL,1,0,99,'flare_teal',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/flare_teal.png',0,''),(35,'Optimum (darkblue)','Optimum (darkblue) has a professional touch of modern and futuristic style, driving you to its optimal level. It is designed to guide your eyes to your important newsletter content using good balance of white space.',NULL,NULL,NULL,1,0,99,'optimum_darkblue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/optimum_darkblue.png',0,''),(36,'Optimum (darkgreen)','Optimum (darkgreen) has a professional touch of modern and futuristic style, driving you to its optimal level. It is designed to guide your eyes to your important newsletter content using good balance of white space.',NULL,NULL,NULL,1,0,99,'optimum_darkgreen',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/optimum_darkgreen.png',0,''),(37,'Optimum (darkred)','Optimum (darkred) has a professional touch of modern and futuristic style, driving you to its optimal level. It is designed to guide your eyes to your important newsletter content using good balance of white space.',NULL,NULL,NULL,1,0,99,'optimum_darkred',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/optimum_darkred.png',0,''),(38,'Optimum (lightblue)','Optimum (lightblue) has a professional touch of modern and futuristic style, driving you to its optimal level. It is designed to guide your eyes to your important newsletter content using good balance of white space.',NULL,NULL,NULL,1,0,99,'optimum_lightblue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/optimum_lightblue.png',0,''),(39,'Optimum (lightgreen)','Optimum (lightgreen) has a professional touch of modern and futuristic style, driving you to its optimal level. It is designed to guide your eyes to your important newsletter content using good balance of white space.',NULL,NULL,NULL,1,0,99,'optimum_lightgreen',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/optimum_lightgreen.png',0,''),(40,'Optimum (lightred)','Optimum (lightred) has a professional touch of modern and futuristic style, driving you to its optimal level. It is designed to guide your eyes to your important newsletter content using good balance of white space.',NULL,NULL,NULL,1,0,99,'optimum_lightred',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/optimum_lightred.png',0,''),(41,'Royale (gold)','Step aboard and see the timeless form of pattern and style, Royale in gold. Paint your newsletter with royalty to present your pictures and website updates that would leave your customer with nothing but fabulous feelings.',NULL,NULL,NULL,1,0,99,'royale_gold',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/royale_gold.png',0,''),(42,'Royale (blue)','Step aboard and see the timeless form of pattern and style, Royale in blue. Paint your newsletter with royalty to present your pictures and website updates that would leave your customer with nothing but fabulous feelings.',NULL,NULL,NULL,1,0,99,'royale_blue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/royale_blue.png',0,''),(43,'Royale (green)','Step aboard and see the timeless form of pattern and style, Royale in green. Paint your newsletter with royalty to present your pictures and website updates that would leave your customer with nothing but fabulous feelings.',NULL,NULL,NULL,1,0,99,'royale_green',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/royale_green.png',0,''),(44,'Royale (red)','Step aboard and see the timeless form of pattern and style, Royale in red. Paint your newsletter with royalty to present your pictures and website updates that would leave your customer with nothing but fabulous feelings.',NULL,NULL,NULL,1,0,99,'royale_red',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/royale_red.png',0,''),(45,'Royale (silver)','Step aboard and see the timeless form of pattern and style, Royale in silver. Paint your newsletter with royalty to present your pictures and website updates that would leave your customer with nothing but fabulous feelings.',NULL,NULL,NULL,1,0,99,'royale_silver',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/royale_silver.png',0,''),(46,'Royale (violet)','Step aboard and see the timeless form of pattern and style, Royale in violet. Paint your newsletter with royalty to present your pictures and website updates that would leave your customer with nothing but fabulous feelings.',NULL,NULL,NULL,1,0,99,'royale_violet',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/royale_violet.png',0,''),(47,'Christmas Company','Greet your employees, clients or partners a Merry Christmas.',NULL,NULL,1291654431,1,0,1,'christmas_company',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/christmas_company.jpg',0,''),(48,'Christmas Family','Don\'t forget your family and give them a heart-warming white Christmas.',NULL,NULL,1291654431,1,0,2,'christmas_family',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/christmas_family.jpg',0,''),(49,'Christmas Friends','Bring fun to a snowy yet fun Holiday with your colleagues and friends.',NULL,NULL,1291654431,1,0,3,'christmas_friends',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/christmas_friends.jpg',0,''),(50,'Christmas Religion','Send the spirit of Christmas and sincere wish to your churchmates, parents, or relatives.',NULL,NULL,1291654431,1,0,4,'christmas_religion',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/christmas_religion.jpg',0,''),(51,'Christmas Special','Give happiness to your special someone this Christmas.',NULL,NULL,1291654431,1,0,5,'christmas_special',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/christmas_special.jpg',0,''),(52,'Newyear Company','Wish a prosperous New Year to your business, clients and customers.',NULL,NULL,1291654431,1,0,6,'newyear_company',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/newyear_company.jpg',0,''),(53,'Newyear Family','A heavenly soothing design for your family to put a smile.',NULL,NULL,1291654431,1,0,7,'newyear_family',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/newyear_family.jpg',0,''),(54,'Newyear Friends','Send a refreshing year greeting specially designed for your friends.',NULL,NULL,1291654431,1,0,8,'newyear_friends',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/newyear_friends.jpg',0,''),(55,'Newyear Religion','Do you have New Year resolution already? A conservative yet slick designed for your churchmates and friends.',NULL,NULL,1291654431,1,0,9,'newyear_religion',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/newyear_religion.jpg',0,''),(56,'Newyear Special','Be unforgettable and melt her/his heart this New Year.',NULL,NULL,1291654431,1,0,10,'newyear_special',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/newyear_special.jpg',0,''),(57,'Unison (purple)','Community designed newsletter, also suitable for business, portfolio, personal, organization or crecreational sites.',NULL,NULL,NULL,1,0,99,'unison_purple',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/unison_purple.jpg',0,''),(58,'Unison (green)','Community designed newsletter, also suitable for business, portfolio, personal, organization or crecreational sites.',NULL,NULL,NULL,1,0,99,'unison_green',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/unison_green.jpg',0,''),(59,'Unison (flesh)','Community designed newsletter, also suitable for business, portfolio, personal, organization or crecreational sites.',NULL,NULL,NULL,1,0,99,'unison_flesh',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/unison_flesh.jpg',0,''),(60,'Unison (brown)','Community designed newsletter, also suitable for business, portfolio, personal, organization or crecreational sites.',NULL,NULL,NULL,1,0,99,'unison_brown',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/unison_brown.jpg',0,''),(61,'Unison (blue)','Community designed newsletter, also suitable for business, portfolio, personal, organization or crecreational sites.',NULL,NULL,NULL,1,0,99,'unison_blue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/unison_blue.jpg',0,''),(62,'Compassion Christmas','Embrace change with Compassion which is best for photography, portfolio, blog and business newsletters.',NULL,NULL,NULL,1,0,99,'compassion_christmas',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/compassion_christmas.jpg',0,''),(63,'Compassion Halloween','Embrace change with Compassion which is best for photography, portfolio, blog and business newsletters.',NULL,NULL,NULL,1,0,99,'compassion_halloween',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/compassion_halloween.jpg',0,''),(64,'Compassion Independence','Embrace change with Compassion which is best for photography, portfolio, blog and business newsletters.',NULL,NULL,NULL,1,0,99,'compassion_independence',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/compassion_independence.jpg',0,''),(65,'Compasion Newyear','Embrace change with Compassion which is best for photography, portfolio, blog and business newsletters.',NULL,NULL,NULL,1,0,99,'compassion_newyear',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/compassion_newyear.jpg',0,''),(66,'Compasion Thanksgiving','Embrace change with Compassion which is best for photography, portfolio, blog and business newsletters.',NULL,NULL,NULL,1,0,99,'compassion_thanksgiving',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/compassion_thanksgiving.jpg',0,''),(67,'Compassion Valentines','Embrace change with Compassion which is best for photography, portfolio, blog and business newsletters.',NULL,NULL,NULL,1,0,99,'compassion_valentines',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/compassion_valentines.jpg',0,''),(68,'Compassion Womensday','Embrace change with Compassion which is best for photography, portfolio, blog and business newsletters.',NULL,NULL,NULL,1,0,99,'compassion_womensday',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/compassion_womensday.jpg',0,''),(69,'Silence (blue)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_blue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_blue.jpg',0,''),(70,'Silence (brown)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_brown',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_brown.jpg',0,''),(71,'Silence (darkblue)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_darkblue',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_darkblue.jpg',0,''),(72,'Silence (darkbrown)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_darkbrown',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_darkbrown.jpg',0,''),(73,'Silence (darkgreen)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_darkgreen',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_darkgreen.jpg',0,''),(74,'Silence (darkorange)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_darkorange',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_darkorange.jpg',0,''),(75,'Silence (darkred)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_darkred',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_darkred.jpg',0,''),(76,'Silence (darkviolet)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_darkviolet',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_darkviolet.jpg',0,''),(77,'Silence (green)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_green',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_green.jpg',0,''),(78,'Silence (orange)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_orange',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_orange.jpg',0,''),(79,'Silence (purple)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_purple',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_purple.jpg',0,''),(80,'Silence (red)','Highlight the contents with Silence suitable for your portfolio, photo blog, personal, business, organization or recreational newsletter.',NULL,NULL,NULL,1,0,99,'silence_red',NULL,'http://www.joobi.co/images/newsletter_templates/thumbnails/silence_red.jpg',0,'');
/*!40000 ALTER TABLE `gran_jnews_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_jnews_xonfig`
--

DROP TABLE IF EXISTS `gran_jnews_xonfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_jnews_xonfig` (
  `akey` varchar(32) NOT NULL DEFAULT '',
  `text` varchar(254) NOT NULL DEFAULT '',
  `value` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`akey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_jnews_xonfig`
--

LOCK TABLES `gran_jnews_xonfig` WRITE;
/*!40000 ALTER TABLE `gran_jnews_xonfig` DISABLE KEYS */;
INSERT INTO `gran_jnews_xonfig` VALUES ('show_unsubscribelink','1',0),('show_subscriptionlink','1',0),('upload_url','/media/com_jnews/upload',0),('sntag_norequired','1',0),('sendmail_email','tgb.rperez@gmail.com',0),('subs_redirect_url','',0),('subscribe_notification','',0),('unsubscribe_notification','',0),('component_theme','joobilist',0),('allow_fe_autoresponder','0',0),('archive_link','standard',0),('component','jNews',0),('type','Core',0),('version','7.9.1',0),('level','1',0),('emailmethod','smtp',0),('sendmail_from','tgb.rperez@gmail.com',0),('sendmail_name','Granya Gonzalez',0),('sendmail_path','/usr/sbin/sendmail',0),('smtp_host','192.168.10.66',0),('smtp_port','25',0),('smtp_auth_required','0',0),('smtp_secure','',0),('smtp_username','',0),('smtp_password','',0),('embed_images','0',0),('enable_statistics','1',0),('statistics_per_subscriber','1',0),('send_data','1',0),('allow_unregistered','1',0),('require_confirmation','0',0),('redirectconfirm','',0),('show_login','1',0),('show_logout','1',0),('send_unsubcribe','1',0),('confirm_fromname','Granya Gonzalez',0),('confirm_fromemail','tgb.rperez@gmail.com',0),('confirm_html','1',0),('time_zone','0',0),('show_archive','1',0),('pause_time','20',0),('emails_between_pauses','65',0),('wait_for_user','0',0),('script_timeout','0',0),('display_trace','1',0),('send_log','1',0),('send_auto_log','0',0),('send_log_simple','0',0),('send_log_closed','1',0),('save_log','0',0),('send_email','1',0),('save_log_simple','0',0),('save_log_file','/administrator/components/com_jnews/com_jnews.log',0),('send_log_address','@joobi.co',0),('send_log_name','jNews Mailing Report',0),('homesite','http://www.joobi.co',0),('report_site','http://www.joobi.co',0),('integration','0',0),('cb_plugin','1',0),('cb_listIds','0',0),('cb_intro','',0),('cb_showname','1',0),('cb_checkLists','1',0),('cb_showHTML','1',0),('cb_defaultHTML','1',0),('cb_integration','0',0),('cb_pluginInstalled','0',0),('cron_max_freq','10',0),('cron_max_emails','60',0),('last_cron','',0),('next_cron','1360196044',0),('last_sub_update','1360282445',0),('next_autonews','',0),('show_footer','1',0),('show_signature','1',0),('update_url','http://www.joobi.co/update/',0),('date_update','1360282444',0),('update_message','',0),('show_guide','1',0),('news1','0',0),('news2','0',0),('news3','0',0),('cron_setup','0',0),('queuedate','',0),('update_avail','0',0),('show_tips','1',0),('update_notification','1',0),('show_lists','1',0),('use_sef','0',0),('listHTMLeditor','1',0),('mod_pub','0',0),('firstmailing','0',0),('nblist','9',0),('license','',0),('token','',0),('maintenance','',0),('admin_debug','0',0),('send_error','1',0),('report_error','1',0),('fullcheck','0',0),('frequency','0',0),('nb_days','7',0),('date_type','1',0),('arv_cat','',0),('arv_sec','',0),('maintenance_clear','24',0),('clean_stats','90',0),('maintenance_date','',0),('mail_format','1',0),('mail_encoding','0',0),('showtag','0',0),('show_author','0',0),('addEmailRedLink','0',0),('itemidAca','999',0),('show_jcalpro','0',0),('show_jlinks','0',0),('column1_name','Column 1',0),('show_column1','0',0),('column2_name','Column 2',0),('show_column2','0',0),('column3_name','Column 3',0),('show_column3','0',0),('column4_name','Column 4',0),('show_column4','0',0),('column5_name','Column 5',0),('show_column5','0',0),('url_pass','o5yMb7Ka',0),('subscription_notify','0',0),('disabletooltip','0',0),('minisendmail','0',0),('word_wrap','0',0),('effects','normal',0),('max_queue','',0),('max_attempts','',0),('sched_prior','5',0),('ar_prior','1',0),('sm_prior','5',0),('j_cron','2',0),('priord_list','0',0),('priord_subs','0',0),('show_unsubscribe','0',0),('queue_status','1',0),('captcha_code','EJaK59nNGTcZR',0),('smart_queue','0',0),('sub_info_fields','0',0),('enable_jsub','0',0),('forced_html','0',0),('use_tags','1',0),('use_masterlists','1',0),('list_creatorfe','24,25,7,8',0),('allow_sn','0',0),('show_sub_email','0',0),('create_newsubsrows','5',0),('use_backendview','0',0),('cron_pass','tuxPxK7X7ZZQwW',0),('nextdate','0',0),('lastdate','0',0),('lasttime_cron_triggerred','0',0),('show_unsubscribe_all','1',0),('send_log_email','',0),('listname0','',0),('listnames0','All mailings',0),('listype0','1',0),('listshow0','1',0),('classes0','',0),('listlogo0','subscribers.png',0),('totallist0','',1),('act_totallist0','',1),('totalmailing0','',0),('totalmailingsent0','',0),('act_totalmailing0','',0),('totalsubcribers0','',12),('act_totalsubcribers0','',12),('listname1','_JNEWS_NEWSLETTER',0),('listnames1','_JNEWS_MENU_NEWSLETTERS',0),('listype1','1',0),('listshow1','1',0),('classes1','newsletter',0),('listlogo1','newsletter.png',0),('totallist1','',1),('act_totallist1','',1),('totalmailing1','',0),('totalmailingsent1','',0),('act_totalmailing1','',0),('totalsubcribers1','',0),('act_totalsubcribers1','',0),('listname2','',0),('listnames2','',0),('listype2','',0),('listshow2','',0),('classes2','',0),('listlogo2','',0),('totallist2','',0),('act_totallist2','',0),('totalmailing2','',0),('totalmailingsent2','',0),('act_totalmailing2','',0),('totalsubcribers2','',0),('act_totalsubcribers2','',0),('listname3','',0),('listnames3','',0),('listype3','',0),('listshow3','',0),('classes3','',0),('listlogo3','',0),('totallist3','',0),('act_totallist3','',0),('totalmailing3','',0),('totalmailingsent3','',0),('act_totalmailing3','',0),('totalsubcribers3','',0),('act_totalsubcribers3','',0),('listname4','',0),('listnames4','',0),('listype4','',0),('listshow4','',0),('classes4','',0),('listlogo4','',0),('totallist4','',0),('act_totallist4','',0),('totalmailing4','',0),('totalmailingsent4','',0),('act_totalmailing4','',0),('totalsubcribers4','',0),('act_totalsubcribers4','',0),('listname5','',0),('listnames5','',0),('listype5','',0),('listshow5','',0),('classes5','',0),('listlogo5','',0),('totallist5','',0),('act_totallist5','',0),('totalmailing5','',0),('totalmailingsent5','',0),('act_totalmailing5','',0),('totalsubcribers5','',0),('act_totalsubcribers5','',0),('listname6','',0),('listnames6','',0),('listype6','',0),('listshow6','',0),('classes6','',0),('listlogo6','',0),('totallist6','',0),('act_totallist6','',0),('totalmailing6','',0),('totalmailingsent6','',0),('act_totalmailing6','',0),('totalsubcribers6','',0),('act_totalsubcribers6','',0),('listname7','',0),('listnames7','',0),('listype7','',0),('listshow7','',0),('classes7','',0),('listlogo7','',0),('totallist7','',0),('act_totallist7','',0),('totalmailing7','',0),('totalmailingsent7','',0),('act_totalmailing7','',0),('totalsubcribers7','',0),('act_totalsubcribers7','',0),('listname8','',0),('listnames8','',0),('listype8','',0),('listshow8','',0),('classes8','',0),('listlogo8','',0),('totallist8','',0),('act_totallist8','',0),('totalmailing8','',0),('totalmailingsent8','',0),('act_totalmailing8','',0),('totalsubcribers8','',0),('act_totalsubcribers8','',0),('activelist','1',0);
/*!40000 ALTER TABLE `gran_jnews_xonfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_languages`
--

DROP TABLE IF EXISTS `gran_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_languages` (
  `lang_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lang_code` char(7) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_native` varchar(50) NOT NULL,
  `sef` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(512) NOT NULL,
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `sitename` varchar(1024) NOT NULL DEFAULT '',
  `published` int(11) NOT NULL DEFAULT '0',
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lang_id`),
  UNIQUE KEY `idx_sef` (`sef`),
  UNIQUE KEY `idx_image` (`image`),
  UNIQUE KEY `idx_langcode` (`lang_code`),
  KEY `idx_access` (`access`),
  KEY `idx_ordering` (`ordering`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_languages`
--

LOCK TABLES `gran_languages` WRITE;
/*!40000 ALTER TABLE `gran_languages` DISABLE KEYS */;
INSERT INTO `gran_languages` VALUES (1,'en-GB','English (UK)','English (UK)','en','en','','','','',1,0,1);
/*!40000 ALTER TABLE `gran_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_menu`
--

DROP TABLE IF EXISTS `gran_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menutype` varchar(24) NOT NULL COMMENT 'The type of menu this item belongs to. FK to #__menu_types.menutype',
  `title` varchar(255) NOT NULL COMMENT 'The display title of the menu item.',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'The SEF alias of the menu item.',
  `note` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(1024) NOT NULL COMMENT 'The computed path of the menu item based on the alias field.',
  `link` varchar(1024) NOT NULL COMMENT 'The actually link the menu item refers to.',
  `type` varchar(16) NOT NULL COMMENT 'The type of link: Component, URL, Alias, Separator',
  `published` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'The published state of the menu link.',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'The parent menu item in the menu tree.',
  `level` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The relative level in the tree.',
  `component_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to #__extensions.id',
  `ordering` int(11) NOT NULL DEFAULT '0' COMMENT 'The relative ordering of the menu item in the tree.',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to #__users.id',
  `checked_out_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'The time the menu item was checked out.',
  `browserNav` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'The click behaviour of the link.',
  `access` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The access level required to view the menu item.',
  `img` varchar(255) NOT NULL COMMENT 'The image of the menu item.',
  `template_style_id` int(10) unsigned NOT NULL DEFAULT '0',
  `params` text NOT NULL COMMENT 'JSON encoded data for the menu item.',
  `lft` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set lft.',
  `rgt` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set rgt.',
  `home` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Indicates if this menu item is the home or default page.',
  `language` char(7) NOT NULL DEFAULT '',
  `client_id` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_client_id_parent_id_alias_language` (`client_id`,`parent_id`,`alias`,`language`),
  KEY `idx_componentid` (`component_id`,`menutype`,`published`,`access`),
  KEY `idx_menutype` (`menutype`),
  KEY `idx_left_right` (`lft`,`rgt`),
  KEY `idx_alias` (`alias`),
  KEY `idx_path` (`path`(255)),
  KEY `idx_language` (`language`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_menu`
--

LOCK TABLES `gran_menu` WRITE;
/*!40000 ALTER TABLE `gran_menu` DISABLE KEYS */;
INSERT INTO `gran_menu` VALUES (1,'','Menu_Item_granyaGonzalez','granyaGonzalez','','','','',1,0,0,0,0,0,'0000-00-00 00:00:00',0,0,'',0,'',0,185,0,'*',0),(2,'menu','com_banners','Banners','','Banners','index.php?option=com_banners','component',0,1,1,4,0,0,'0000-00-00 00:00:00',0,0,'class:banners',0,'',1,10,0,'*',1),(3,'menu','com_banners','Banners','','Banners/Banners','index.php?option=com_banners','component',0,2,2,4,0,0,'0000-00-00 00:00:00',0,0,'class:banners',0,'',2,3,0,'*',1),(4,'menu','com_banners_categories','Categories','','Banners/Categories','index.php?option=com_categories&extension=com_banners','component',0,2,2,6,0,0,'0000-00-00 00:00:00',0,0,'class:banners-cat',0,'',4,5,0,'*',1),(5,'menu','com_banners_clients','Clients','','Banners/Clients','index.php?option=com_banners&view=clients','component',0,2,2,4,0,0,'0000-00-00 00:00:00',0,0,'class:banners-clients',0,'',6,7,0,'*',1),(6,'menu','com_banners_tracks','Tracks','','Banners/Tracks','index.php?option=com_banners&view=tracks','component',0,2,2,4,0,0,'0000-00-00 00:00:00',0,0,'class:banners-tracks',0,'',8,9,0,'*',1),(7,'menu','com_contact','Contacts','','Contacts','index.php?option=com_contact','component',0,1,1,8,0,0,'0000-00-00 00:00:00',0,0,'class:contact',0,'',11,16,0,'*',1),(8,'menu','com_contact','Contacts','','Contacts/Contacts','index.php?option=com_contact','component',0,7,2,8,0,0,'0000-00-00 00:00:00',0,0,'class:contact',0,'',12,13,0,'*',1),(9,'menu','com_contact_categories','Categories','','Contacts/Categories','index.php?option=com_categories&extension=com_contact','component',0,7,2,6,0,0,'0000-00-00 00:00:00',0,0,'class:contact-cat',0,'',14,15,0,'*',1),(10,'menu','com_messages','Messaging','','Messaging','index.php?option=com_messages','component',0,1,1,15,0,0,'0000-00-00 00:00:00',0,0,'class:messages',0,'',17,22,0,'*',1),(11,'menu','com_messages_add','New Private Message','','Messaging/New Private Message','index.php?option=com_messages&task=message.add','component',0,10,2,15,0,0,'0000-00-00 00:00:00',0,0,'class:messages-add',0,'',18,19,0,'*',1),(12,'menu','com_messages_read','Read Private Message','','Messaging/Read Private Message','index.php?option=com_messages','component',0,10,2,15,0,0,'0000-00-00 00:00:00',0,0,'class:messages-read',0,'',20,21,0,'*',1),(13,'menu','com_newsfeeds','News Feeds','','News Feeds','index.php?option=com_newsfeeds','component',0,1,1,17,0,0,'0000-00-00 00:00:00',0,0,'class:newsfeeds',0,'',23,28,0,'*',1),(14,'menu','com_newsfeeds_feeds','Feeds','','News Feeds/Feeds','index.php?option=com_newsfeeds','component',0,13,2,17,0,0,'0000-00-00 00:00:00',0,0,'class:newsfeeds',0,'',24,25,0,'*',1),(15,'menu','com_newsfeeds_categories','Categories','','News Feeds/Categories','index.php?option=com_categories&extension=com_newsfeeds','component',0,13,2,6,0,0,'0000-00-00 00:00:00',0,0,'class:newsfeeds-cat',0,'',26,27,0,'*',1),(16,'menu','com_redirect','Redirect','','Redirect','index.php?option=com_redirect','component',0,1,1,24,0,0,'0000-00-00 00:00:00',0,0,'class:redirect',0,'',45,46,0,'*',1),(17,'menu','com_search','Basic Search','','Basic Search','index.php?option=com_search','component',0,1,1,19,0,0,'0000-00-00 00:00:00',0,0,'class:search',0,'',35,36,0,'*',1),(18,'menu','com_weblinks','Weblinks','','Weblinks','index.php?option=com_weblinks','component',0,1,1,21,0,0,'0000-00-00 00:00:00',0,0,'class:weblinks',0,'',37,42,0,'*',1),(19,'menu','com_weblinks_links','Links','','Weblinks/Links','index.php?option=com_weblinks','component',0,18,2,21,0,0,'0000-00-00 00:00:00',0,0,'class:weblinks',0,'',38,39,0,'*',1),(20,'menu','com_weblinks_categories','Categories','','Weblinks/Categories','index.php?option=com_categories&extension=com_weblinks','component',0,18,2,6,0,0,'0000-00-00 00:00:00',0,0,'class:weblinks-cat',0,'',40,41,0,'*',1),(21,'menu','com_finder','Smart Search','','Smart Search','index.php?option=com_finder','component',0,1,1,27,0,0,'0000-00-00 00:00:00',0,0,'class:finder',0,'',33,34,0,'*',1),(22,'menu','com_joomlaupdate','Joomla! Update','','Joomla! Update','index.php?option=com_joomlaupdate','component',0,1,1,28,0,0,'0000-00-00 00:00:00',0,0,'class:joomlaupdate',0,'',43,44,0,'*',1),(101,'mainmenu','Inicio','home','','home','index.php?option=com_content&view=article&layout=granya:blank&id=1','component',1,1,1,22,0,0,'0000-00-00 00:00:00',0,1,'',7,'{\"show_title\":\"1\",\"link_titles\":\"0\",\"show_intro\":\"\",\"show_category\":\"0\",\"link_category\":\"\",\"show_parent_category\":\"0\",\"link_parent_category\":\"\",\"show_author\":\"0\",\"link_author\":\"\",\"show_create_date\":\"0\",\"show_modify_date\":\"0\",\"show_publish_date\":\"0\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"0\",\"show_email_icon\":\"0\",\"show_hits\":\"0\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',29,32,1,'*',0),(102,'mainmenu','Institución','2013-02-22-20-58-26','','2013-02-22-20-58-26','#','url',1,1,1,0,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1}',47,54,0,'*',0),(103,'mainmenu','¿Quiénes Somos?','quienes-somos','','2013-02-22-20-58-26/quienes-somos','index.php?option=com_content&view=article&id=4','component',1,102,2,22,0,778,'2013-02-07 20:52:49',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"0\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"0\",\"show_item_navigation\":\"\",\"show_vote\":\"0\",\"show_icons\":\"0\",\"show_print_icon\":\"0\",\"show_email_icon\":\"0\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',50,51,0,'*',0),(104,'mainmenu','Servicios','2013-01-07-15-55-57','','2013-01-07-15-55-57','#','url',1,1,1,0,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1}',55,64,0,'*',0),(105,'mainmenu','Banda Gástrica Virtual','2013-01-07-15-57-05','','2013-01-07-15-57-05','#','url',1,1,1,0,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1}',65,74,0,'*',0),(106,'mainmenu','Tratamientos Corporales','tratamientos-corporales','','2013-01-07-15-55-57/tratamientos-corporales','index.php?option=com_content&view=article&layout=granya:static&id=16','component',1,104,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',56,57,0,'*',0),(107,'mainmenu','Tratamientos Faciales','tratamientos-faciales','','2013-01-07-15-55-57/tratamientos-faciales','index.php?option=com_content&view=article&layout=granya:static&id=17','component',1,104,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',58,59,0,'*',0),(108,'mainmenu','Tratamientos de Relajación','tratamientos-de-relajacion','','2013-01-07-15-55-57/tratamientos-de-relajacion','index.php?option=com_content&view=article&layout=granya:static&id=18','component',1,104,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',60,61,0,'*',0),(109,'mainmenu','Tratamientos Médicos','tratamientos-medicos','','2013-01-07-15-55-57/tratamientos-medicos','index.php?option=com_content&view=article&layout=granya:static&id=19','component',1,104,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',62,63,0,'*',0),(110,'mainmenu','Información y Talleres','informacion-y-talleres','','2013-01-07-15-57-05/informacion-y-talleres','index.php?option=com_content&view=article&layout=granya:static&id=20','component',1,105,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',66,67,0,'*',0),(111,'mainmenu','Inscripción','inscripcion','','2013-01-07-15-57-05/inscripcion','index.php?option=com_talleres&view=registro','component',1,105,2,10041,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',68,69,0,'*',0),(112,'mainmenu','Testimoniales','testimoniales','','2013-01-07-15-57-05/testimoniales','index.php?option=com_content&view=category&id=14','component',1,105,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_category_title\":\"\",\"show_description\":\"\",\"show_description_image\":\"\",\"maxLevel\":\"\",\"show_empty_categories\":\"\",\"show_no_articles\":\"\",\"show_subcat_desc\":\"\",\"show_cat_num_articles\":\"\",\"page_subheading\":\"\",\"show_pagination_limit\":\"\",\"filter_field\":\"\",\"show_headings\":\"\",\"list_show_date\":\"\",\"date_format\":\"\",\"list_show_hits\":\"\",\"list_show_author\":\"\",\"orderby_pri\":\"\",\"orderby_sec\":\"\",\"order_date\":\"\",\"show_pagination\":\"\",\"show_pagination_results\":\"\",\"display_num\":\"10\",\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_readmore\":\"\",\"show_readmore_title\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"show_feed_link\":\"\",\"feed_summary\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',70,71,0,'*',0),(113,'mainmenu','Publicaciones','2013-01-07-16-12-15','','2013-01-07-16-12-15','#','url',1,1,1,0,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1}',75,82,0,'*',0),(114,'mainmenu','Granya Recomienda','granya-recomienda','','2013-01-07-16-12-15/granya-recomienda','index.php?option=com_content&view=category&id=10','component',1,113,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_category_title\":\"\",\"show_description\":\"\",\"show_description_image\":\"\",\"maxLevel\":\"\",\"show_empty_categories\":\"\",\"show_no_articles\":\"\",\"show_subcat_desc\":\"\",\"show_cat_num_articles\":\"\",\"page_subheading\":\"\",\"show_pagination_limit\":\"\",\"filter_field\":\"\",\"show_headings\":\"\",\"list_show_date\":\"\",\"date_format\":\"\",\"list_show_hits\":\"\",\"list_show_author\":\"\",\"orderby_pri\":\"\",\"orderby_sec\":\"\",\"order_date\":\"\",\"show_pagination\":\"\",\"show_pagination_results\":\"\",\"display_num\":\"10\",\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_readmore\":\"\",\"show_readmore_title\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"show_feed_link\":\"\",\"feed_summary\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',76,77,0,'*',0),(115,'mainmenu','Artículos de Prensa','articulos-de-prensa','','2013-01-07-16-12-15/articulos-de-prensa','index.php?option=com_content&view=category&id=11','component',1,113,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_category_title\":\"\",\"show_description\":\"\",\"show_description_image\":\"\",\"maxLevel\":\"\",\"show_empty_categories\":\"\",\"show_no_articles\":\"\",\"show_subcat_desc\":\"\",\"show_cat_num_articles\":\"\",\"page_subheading\":\"\",\"show_pagination_limit\":\"\",\"filter_field\":\"\",\"show_headings\":\"\",\"list_show_date\":\"\",\"date_format\":\"\",\"list_show_hits\":\"\",\"list_show_author\":\"\",\"orderby_pri\":\"\",\"orderby_sec\":\"\",\"order_date\":\"\",\"show_pagination\":\"\",\"show_pagination_results\":\"\",\"display_num\":\"10\",\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_readmore\":\"\",\"show_readmore_title\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"show_feed_link\":\"\",\"feed_summary\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',78,79,0,'*',0),(116,'mainmenu','Videos','videos','','2013-01-07-16-12-15/videos','index.php?option=com_content&view=category&id=12','component',1,113,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_category_title\":\"\",\"show_description\":\"\",\"show_description_image\":\"\",\"maxLevel\":\"\",\"show_empty_categories\":\"\",\"show_no_articles\":\"\",\"show_subcat_desc\":\"\",\"show_cat_num_articles\":\"\",\"page_subheading\":\"\",\"show_pagination_limit\":\"\",\"filter_field\":\"\",\"show_headings\":\"\",\"list_show_date\":\"\",\"date_format\":\"\",\"list_show_hits\":\"\",\"list_show_author\":\"\",\"orderby_pri\":\"\",\"orderby_sec\":\"\",\"order_date\":\"\",\"show_pagination\":\"\",\"show_pagination_results\":\"\",\"display_num\":\"10\",\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_readmore\":\"\",\"show_readmore_title\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"show_feed_link\":\"\",\"feed_summary\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',80,81,0,'*',0),(117,'mainmenu','Promociones','promociones','','promociones','index.php?option=com_content&view=article&layout=granya:static&id=22','component',1,1,1,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',83,86,0,'*',0),(118,'mainmenu','Contacto','contacto','','contacto','index.php?option=com_contact&view=contact&id=1','component',1,1,1,8,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"presentation_style\":\"plain\",\"show_contact_category\":\"\",\"show_contact_list\":\"0\",\"show_name\":\"0\",\"show_position\":\"0\",\"show_email\":\"0\",\"show_street_address\":\"0\",\"show_suburb\":\"0\",\"show_state\":\"0\",\"show_postcode\":\"0\",\"show_country\":\"0\",\"show_telephone\":\"0\",\"show_mobile\":\"0\",\"show_fax\":\"0\",\"show_webpage\":\"0\",\"show_misc\":\"\",\"show_image\":\"\",\"allow_vcard\":\"\",\"show_articles\":\"\",\"show_links\":\"\",\"linka_name\":\"\",\"linkb_name\":\"\",\"linkc_name\":\"\",\"linkd_name\":\"\",\"linke_name\":\"\",\"show_email_form\":\"\",\"show_email_copy\":\"\",\"banned_email\":\"tgb.alebrun@gmail.com\",\"banned_subject\":\"Contacto - Granya Gonz\\u00e1lez\",\"banned_text\":\"\",\"validate_session\":\"\",\"custom_reply\":\"\",\"redirect\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',87,92,0,'*',0),(119,'mainmenu','DummyLink','2013-01-10-17-37-44','','promociones/2013-01-10-17-37-44','#','url',1,117,2,0,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"hidden\",\"menu_image\":\"\",\"menu_text\":1}',84,85,0,'*',0),(120,'mainmenu','DummyLinkContacto','2013-01-10-17-37-45','','contacto/2013-01-10-17-37-45','#','url',1,118,2,0,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"hidden\",\"menu_image\":\"\",\"menu_text\":1}',88,89,0,'*',0),(121,'mainmenu','DummyLinkHome','2013-01-10-17-37-46','','home/2013-01-10-17-37-46','#','url',1,101,2,0,0,778,'2013-02-21 00:20:46',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"hidden\",\"menu_image\":\"\",\"menu_text\":1}',30,31,0,'*',0),(122,'main','COM_JFBCONNECT','com-jfbconnect','','com-jfbconnect','index.php?option=com_jfbconnect','component',0,1,1,10009,0,0,'0000-00-00 00:00:00',0,1,'components/com_jfbconnect/assets/images/jfbconn_icon.png',0,'',93,108,0,'',1),(123,'main','COM_JFBCONNECT_MENU_OVERVIEW','com-jfbconnect-menu-overview','','com-jfbconnect/com-jfbconnect-menu-overview','index.php?option=com_jfbconnect&view=jfbconnect','component',0,122,2,10009,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',94,95,0,'',1),(124,'main','COM_JFBCONNECT_MENU_CONFIGURATION','com-jfbconnect-menu-configuration','','com-jfbconnect/com-jfbconnect-menu-configuration','index.php?option=com_jfbconnect&view=config','component',0,122,2,10009,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',96,97,0,'',1),(125,'main','COM_JFBCONNECT_MENU_SOCIAL','com-jfbconnect-menu-social','','com-jfbconnect/com-jfbconnect-menu-social','index.php?option=com_jfbconnect&view=social','component',0,122,2,10009,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',98,99,0,'',1),(126,'main','COM_JFBCONNECT_MENU_CANVAS','com-jfbconnect-menu-canvas','','com-jfbconnect/com-jfbconnect-menu-canvas','index.php?option=com_jfbconnect&view=canvas','component',0,122,2,10009,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',100,101,0,'',1),(127,'main','COM_JFBCONNECT_MENU_REQUESTS','com-jfbconnect-menu-requests','','com-jfbconnect/com-jfbconnect-menu-requests','index.php?option=com_jfbconnect&view=request','component',0,122,2,10009,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',102,103,0,'',1),(128,'main','COM_JFBCONNECT_MENU_PROFILES','com-jfbconnect-menu-profiles','','com-jfbconnect/com-jfbconnect-menu-profiles','index.php?option=com_jfbconnect&view=profiles','component',0,122,2,10009,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',104,105,0,'',1),(129,'main','COM_JFBCONNECT_MENU_USER_MAP','com-jfbconnect-menu-user-map','','com-jfbconnect/com-jfbconnect-menu-user-map','index.php?option=com_jfbconnect&view=usermap','component',0,122,2,10009,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',106,107,0,'',1),(130,'mainmenu','Misión y Visión','mision-y-vision','','2013-02-22-20-58-26/mision-y-vision','index.php?option=com_content&view=article&layout=granya:static&id=15','component',1,102,2,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',48,49,0,'*',0),(131,'mainmenu','Tratamientos Faciales','tratamientos-faciales','','tratamientos-faciales','index.php?option=com_content&view=article&layout=granya:static&id=17','component',-2,1,1,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',109,110,0,'*',0),(132,'mainmenu','Tratamientos de Relajación','tratamientos-de-relajacion','','tratamientos-de-relajacion','index.php?option=com_content&view=article&layout=granya:static&id=18','component',-2,1,1,22,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_vote\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',111,112,0,'*',0),(133,'main','jNews','jnews','','jnews','index.php?option=com_jnews','component',0,1,1,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/jnewsletter_icon.png',0,'',113,130,0,'',1),(134,'main','Lists','lists','','jnews/lists','index.php?option=com_jnews&act=list','component',0,133,2,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/lists.png',0,'',114,115,0,'',1),(135,'main','Subscribers','subscribers','','jnews/subscribers','index.php?option=com_jnews&act=subscribers','component',0,133,2,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/subscribers.png',0,'',116,117,0,'',1),(136,'main','Newsletters','newsletters','','jnews/newsletters','index.php?option=com_jnews&act=mailing&listype=1','component',0,133,2,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/newsletter.png',0,'',118,119,0,'',1),(137,'main','Statistics','statistics','','jnews/statistics','index.php?option=com_jnews&act=statistics','component',0,133,2,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/statistics.png',0,'',120,121,0,'',1),(138,'main','Queue','queue','','jnews/queue','index.php?option=com_jnews&act=queue','component',0,133,2,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/queue.png',0,'',122,123,0,'',1),(139,'main','Templates','templates','','jnews/templates','index.php?option=com_jnews&act=templates','component',0,133,2,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/templates.png',0,'',124,125,0,'',1),(140,'main','Configuration','configuration','','jnews/configuration','index.php?option=com_jnews&act=configuration','component',0,133,2,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/configuration.png',0,'',126,127,0,'',1),(141,'main','About','about','','jnews/about','index.php?option=com_jnews&act=about','component',0,133,2,10030,0,0,'0000-00-00 00:00:00',0,1,'../administrator/components/com_jnews/images/16/about.png',0,'',128,129,0,'',1),(142,'mainmenu','Contacto22','contacto22','','contacto/contacto22','index.php?option=com_contact&view=contact&id=1','component',-2,118,2,8,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"presentation_style\":\"plain\",\"show_contact_category\":\"\",\"show_contact_list\":\"\",\"show_name\":\"1\",\"show_position\":\"\",\"show_email\":\"1\",\"show_street_address\":\"\",\"show_suburb\":\"\",\"show_state\":\"\",\"show_postcode\":\"\",\"show_country\":\"\",\"show_telephone\":\"\",\"show_mobile\":\"\",\"show_fax\":\"\",\"show_webpage\":\"\",\"show_misc\":\"\",\"show_image\":\"\",\"allow_vcard\":\"\",\"show_articles\":\"\",\"show_links\":\"\",\"linka_name\":\"\",\"linkb_name\":\"\",\"linkc_name\":\"\",\"linkd_name\":\"\",\"linke_name\":\"\",\"show_email_form\":\"\",\"show_email_copy\":\"\",\"banned_email\":\"\",\"banned_subject\":\"\",\"banned_text\":\"\",\"validate_session\":\"\",\"custom_reply\":\"\",\"redirect\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',90,91,0,'*',0),(143,'mainmenu','Videos Smashing','videos-smashing','','2013-02-22-20-58-26/videos-smashing','index.php?option=com_newsfeeds&view=newsfeed&id=1','component',0,102,2,17,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"show_feed_image\":\"\",\"show_feed_description\":\"\",\"show_item_description\":\"\",\"feed_character_count\":\"0\",\"feed_display_order\":\"\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',52,53,0,'*',0),(144,'main','COM_PHOCAFAVICON','com-phocafavicon','','com-phocafavicon','index.php?option=com_phocafavicon','component',0,1,1,10031,0,0,'0000-00-00 00:00:00',0,1,'components/com_phocafavicon/assets/images/icon-16-pf-menu.png',0,'',131,138,0,'',1),(145,'main','COM_PHOCAFAVICON_CONTROLPANEL','com-phocafavicon-controlpanel','','com-phocafavicon/com-phocafavicon-controlpanel','index.php?option=com_phocafavicon','component',0,144,2,10031,0,0,'0000-00-00 00:00:00',0,1,'components/com_phocafavicon/assets/images/icon-16-pf-control-panel.png',0,'',132,133,0,'',1),(146,'main','COM_PHOCAFAVICON_CREATE_FAVICON','com-phocafavicon-create-favicon','','com-phocafavicon/com-phocafavicon-create-favicon','index.php?option=com_phocafavicon&view=phocafavicon','component',0,144,2,10031,0,0,'0000-00-00 00:00:00',0,1,'components/com_phocafavicon/assets/images/icon-16-pf-menu-favicon.png',0,'',134,135,0,'',1),(147,'main','COM_PHOCAFAVICON_INFO','com-phocafavicon-info','','com-phocafavicon/com-phocafavicon-info','index.php?option=com_phocafavicon&view=phocafaviconin','component',0,144,2,10031,0,0,'0000-00-00 00:00:00',0,1,'components/com_phocafavicon/assets/images/icon-16-pf-menu-info.png',0,'',136,137,0,'',1),(148,'main','COM_WIDGETKIT','com-widgetkit','','com-widgetkit','index.php?option=com_widgetkit','component',0,1,1,10038,0,0,'0000-00-00 00:00:00',0,1,'components/com_widgetkit/images/widgetkit_16.png',0,'',139,140,0,'',1),(149,'main','com_talleres_component_title','Banda Gastrica Virtual','','com-talleres','index.php?option=com_talleres','component',0,1,1,10041,0,0,'0000-00-00 00:00:00',0,1,'class:newsfeeds',0,'',141,146,0,'',1),(150,'main','COM_TALLERES_SUBMENU_TALLERES','Talleres','','com-talleres/com-talleres','index.php?option=com_talleres','component',0,149,2,10041,0,0,'0000-00-00 00:00:00',0,1,'class:',0,'',142,143,0,'',1),(154,'main','COM_HODUMA_MENU','com-hoduma-menu','','com-hoduma-menu','index.php?option=com_hoduma','component',0,1,1,10053,0,0,'0000-00-00 00:00:00',0,1,'../media/com_hoduma/images/hoduma-16x16.png',0,'',147,164,0,'',1),(155,'main','COM_HODUMA_MENU_CATEGORIES','com-hoduma-menu-categories','','com-hoduma-menu/com-hoduma-menu-categories','index.php?option=com_hoduma&view=categories','component',0,154,2,10053,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',148,149,0,'',1),(156,'main','COM_HODUMA_MENU_DEPARTMENTS','com-hoduma-menu-departments','','com-hoduma-menu/com-hoduma-menu-departments','index.php?option=com_hoduma&view=departments','component',0,154,2,10053,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',150,151,0,'',1),(157,'main','COM_HODUMA_MENU_PRIORITIES','com-hoduma-menu-priorities','','com-hoduma-menu/com-hoduma-menu-priorities','index.php?option=com_hoduma&view=priorities','component',0,154,2,10053,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',152,153,0,'',1),(158,'main','COM_HODUMA_MENU_STATUSES','com-hoduma-menu-statuses','','com-hoduma-menu/com-hoduma-menu-statuses','index.php?option=com_hoduma&view=statuses','component',0,154,2,10053,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',154,155,0,'',1),(159,'main','COM_HODUMA_MENU_USERS','com-hoduma-menu-users','','com-hoduma-menu/com-hoduma-menu-users','index.php?option=com_hoduma&view=users','component',0,154,2,10053,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',156,157,0,'',1),(160,'main','COM_HODUMA_MENU_EMAILS','com-hoduma-menu-emails','','com-hoduma-menu/com-hoduma-menu-emails','index.php?option=com_hoduma&view=emails','component',0,154,2,10053,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',158,159,0,'',1),(161,'main','COM_HODUMA_MENU_ABOUT','com-hoduma-menu-about','','com-hoduma-menu/com-hoduma-menu-about','index.php?option=com_hoduma&view=about','component',0,154,2,10053,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',160,161,0,'',1),(162,'main','COM_HODUMA_MENU_UPDATE','com-hoduma-menu-update','','com-hoduma-menu/com-hoduma-menu-update','index.php?option=com_hoduma&view=liveupdate','component',0,154,2,10053,0,0,'0000-00-00 00:00:00',0,1,'class:component',0,'',162,163,0,'',1),(163,'mainmenu','Help desk','help-desk','','help-desk','index.php?option=com_hoduma&view=cpanel','component',0,1,1,10053,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',167,168,0,'*',0),(164,'main','COM_ISSUETRACKER_ADMIN_MENU_TITLE','com-issuetracker-admin-menu-title','','com-issuetracker-admin-menu-title','index.php?option=com_issuetracker','component',0,1,1,10057,0,0,'0000-00-00 00:00:00',0,1,'components/com_issuetracker/images/16/issues.png',0,'',169,182,0,'',1),(165,'main','COM_ISSUETRACKER_ADMIN_MENU_CPANEL','com-issuetracker-admin-menu-cpanel','','com-issuetracker-admin-menu-title/com-issuetracker-admin-menu-cpanel','index.php?option=com_issuetracker','component',0,164,2,10057,0,0,'0000-00-00 00:00:00',0,1,'components/com_issuetracker/images/16/cpanel.png',0,'',170,171,0,'',1),(166,'main','COM_ISSUETRACKER_ADMIN_MENU_ISSUES','com-issuetracker-admin-menu-issues','','com-issuetracker-admin-menu-title/com-issuetracker-admin-menu-issues','index.php?option=com_issuetracker&view=itissueslist','component',0,164,2,10057,0,0,'0000-00-00 00:00:00',0,1,'components/com_issuetracker/images/16/issues.png',0,'',172,173,0,'',1),(167,'main','COM_ISSUETRACKER_ADMIN_MENU_PEOPLE','com-issuetracker-admin-menu-people','','com-issuetracker-admin-menu-title/com-issuetracker-admin-menu-people','index.php?option=com_issuetracker&view=itpeoplelist','component',0,164,2,10057,0,0,'0000-00-00 00:00:00',0,1,'components/com_issuetracker/images/16/users.png',0,'',174,175,0,'',1),(168,'main','COM_ISSUETRACKER_ADMIN_MENU_PROJECTS','com-issuetracker-admin-menu-projects','','com-issuetracker-admin-menu-title/com-issuetracker-admin-menu-projects','index.php?option=com_issuetracker&view=itprojectslist','component',0,164,2,10057,0,0,'0000-00-00 00:00:00',0,1,'components/com_issuetracker/images/16/projects.png',0,'',176,177,0,'',1),(169,'main','COM_ISSUETRACKER_ADMIN_MENU_SUPPORT','com-issuetracker-admin-menu-support','','com-issuetracker-admin-menu-title/com-issuetracker-admin-menu-support','index.php?option=com_issuetracker&view=support','component',0,164,2,10057,0,0,'0000-00-00 00:00:00',0,1,'class:info',0,'',178,179,0,'',1),(170,'main','COM_ISSUETRACKER_ADMIN_MENU_DOCUMENTATION','com-issuetracker-admin-menu-documentation','','com-issuetracker-admin-menu-title/com-issuetracker-admin-menu-documentation','index.php?option=com_issuetracker&view=documentation','component',0,164,2,10057,0,0,'0000-00-00 00:00:00',0,1,'components/com_issuetracker/images/16/documentation.png',0,'',180,181,0,'',1),(171,'mainmenu','Issue','issue','','issue','index.php?option=com_issuetracker&view=form&layout=edit','component',0,1,1,10057,0,0,'0000-00-00 00:00:00',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',165,166,0,'*',0),(172,'mainmenu','Testimoniales','nuevo-testimonial','','2013-01-07-15-57-05/nuevo-testimonial','index.php?option=com_content&view=form&layout=edit','component',1,105,2,22,0,0,'0000-00-00 00:00:00',0,2,'',0,'{\"enable_category\":\"1\",\"catid\":\"14\",\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"hidden\",\"menu_image\":\"\",\"menu_text\":0,\"page_title\":\"Nuevo testimonial\",\"show_page_heading\":0,\"page_heading\":\"ABC\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',72,73,0,'*',0),(173,'main','COM_TALLERES_SUBMENU_INSCRIPCIONES','Inscripciones','','com-talleres/inscripciones','index.php?option=com_talleres&view=inscripciones','component',0,149,2,10041,0,0,'0000-00-00 00:00:00',0,0,'class:talleres-inscripciones',0,'',175,176,0,'',1),(174,'mainmenu','Hodumaa','hodumaa','','hodumaa','index.php?option=com_hoduma&view=cpanel','component',1,1,1,10053,0,778,'2013-03-01 00:58:26',0,1,'',0,'{\"menu-anchor_title\":\"\",\"menu-anchor_css\":\"\",\"menu_image\":\"\",\"menu_text\":1,\"page_title\":\"\",\"show_page_heading\":0,\"page_heading\":\"\",\"pageclass_sfx\":\"\",\"menu-meta_description\":\"\",\"menu-meta_keywords\":\"\",\"robots\":\"\",\"secure\":0}',183,184,0,'*',0);
/*!40000 ALTER TABLE `gran_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_menu_types`
--

DROP TABLE IF EXISTS `gran_menu_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_menu_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menutype` varchar(24) NOT NULL,
  `title` varchar(48) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_menutype` (`menutype`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_menu_types`
--

LOCK TABLES `gran_menu_types` WRITE;
/*!40000 ALTER TABLE `gran_menu_types` DISABLE KEYS */;
INSERT INTO `gran_menu_types` VALUES (1,'mainmenu','Main Menu','The main menu for the site');
/*!40000 ALTER TABLE `gran_menu_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_messages`
--

DROP TABLE IF EXISTS `gran_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_messages` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id_from` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id_to` int(10) unsigned NOT NULL DEFAULT '0',
  `folder_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `priority` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `useridto_state` (`user_id_to`,`state`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_messages`
--

LOCK TABLES `gran_messages` WRITE;
/*!40000 ALTER TABLE `gran_messages` DISABLE KEYS */;
INSERT INTO `gran_messages` VALUES (4,792,778,0,'2013-02-25 21:14:12',0,0,'New Article','A new Article has been submitted by \'Andrea Lebrún\' entitled \'Testimonial\'.');
/*!40000 ALTER TABLE `gran_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_messages_cfg`
--

DROP TABLE IF EXISTS `gran_messages_cfg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_messages_cfg` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `cfg_name` varchar(100) NOT NULL DEFAULT '',
  `cfg_value` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `idx_user_var_name` (`user_id`,`cfg_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_messages_cfg`
--

LOCK TABLES `gran_messages_cfg` WRITE;
/*!40000 ALTER TABLE `gran_messages_cfg` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_messages_cfg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_modules`
--

DROP TABLE IF EXISTS `gran_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `position` varchar(50) NOT NULL DEFAULT '',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `module` varchar(50) DEFAULT NULL,
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `showtitle` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `params` text NOT NULL,
  `client_id` tinyint(4) NOT NULL DEFAULT '0',
  `language` char(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `published` (`published`,`access`),
  KEY `newsfeeds` (`module`,`published`),
  KEY `idx_language` (`language`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_modules`
--

LOCK TABLES `gran_modules` WRITE;
/*!40000 ALTER TABLE `gran_modules` DISABLE KEYS */;
INSERT INTO `gran_modules` VALUES (1,'Main Menu','','',1,'granya-topmenu',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_menu',1,0,'{\"menutype\":\"mainmenu\",\"startLevel\":\"1\",\"endLevel\":\"0\",\"showAllChildren\":\"1\",\"tag_id\":\"\",\"class_sfx\":\"-main\",\"window_open\":\"\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"main-menu-module\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"itemid\"}',0,'*'),(2,'Login','','',1,'login',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_login',1,1,'',1,'*'),(3,'Popular Articles','','',3,'cpanel',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_popular',3,1,'{\"count\":\"5\",\"catid\":\"\",\"user_id\":\"0\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"0\",\"automatic_title\":\"1\"}',1,'*'),(4,'Recently Added Articles','','',4,'cpanel',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_latest',3,1,'{\"count\":\"5\",\"ordering\":\"c_dsc\",\"catid\":\"\",\"user_id\":\"0\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"0\",\"automatic_title\":\"1\"}',1,'*'),(8,'Toolbar','','',1,'toolbar',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_toolbar',3,1,'',1,'*'),(9,'Quick Icons','','',1,'icon',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_quickicon',3,1,'',1,'*'),(10,'Logged-in Users','','',2,'cpanel',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_logged',3,1,'{\"count\":\"5\",\"name\":\"1\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"0\",\"automatic_title\":\"1\"}',1,'*'),(12,'Admin Menu','','',1,'menu',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_menu',3,1,'{\"layout\":\"\",\"moduleclass_sfx\":\"\",\"shownew\":\"1\",\"showhelp\":\"1\",\"cache\":\"0\"}',1,'*'),(13,'Admin Submenu','','',1,'submenu',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_submenu',3,1,'',1,'*'),(14,'User Status','','',2,'status',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_status',3,1,'',1,'*'),(15,'Title','','',1,'title',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_title',3,1,'',1,'*'),(16,'Login Form','','',1,'granya-login',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'mod_login',1,1,'{\"pretext\":\"\",\"posttext\":\"\",\"login\":\"\",\"logout\":\"\",\"greeting\":\"1\",\"name\":\"0\",\"usesecure\":\"0\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"0\"}',0,'*'),(17,'Breadcrumbs','','',1,'granya-breadcrumbs',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_breadcrumbs',1,1,'{\"showHere\":\"0\",\"showHome\":\"1\",\"homeText\":\"Inicio\",\"showLast\":\"1\",\"separator\":\"\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"itemid\"}',0,'*'),(79,'Multilanguage status','','',1,'status',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'mod_multilangstatus',3,1,'{\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"0\"}',1,'*'),(86,'Joomla Version','','',1,'footer',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_version',3,1,'{\"format\":\"short\",\"product\":\"1\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"0\"}',1,'*'),(87,'Footer Menu','','',1,'granya-footer',778,'2013-02-22 19:58:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_menu',1,1,'{\"menutype\":\"mainmenu\",\"startLevel\":\"1\",\"endLevel\":\"2\",\"showAllChildren\":\"1\",\"tag_id\":\"\",\"class_sfx\":\"-footer\",\"window_open\":\"\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"itemid\"}',0,'*'),(88,'Granya Recomienda','','',1,'granya-bottomleft',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_articles_latest',1,1,'{\"catid\":[\"10\"],\"count\":\"5\",\"show_featured\":\"\",\"ordering\":\"c_dsc\",\"user_id\":\"0\",\"layout\":\"_:default\",\"moduleclass_sfx\":\" granya-recomienda home-article-list\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"static\"}',0,'*'),(89,'Lo más reciente','','',1,'granya-bottomleft',778,'2013-01-31 16:55:01','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_articles_latest',1,1,'{\"catid\":[\"11\"],\"count\":\"5\",\"show_featured\":\"\",\"ordering\":\"c_dsc\",\"user_id\":\"0\",\"layout\":\"_:default\",\"moduleclass_sfx\":\" mas-reciente home-article-list\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"static\"}',0,'*'),(90,'Enlaces a redes sociales','','<p style=\"text-align: right; margin-top: -20px;\">                                                                                                                                                            <a href=\"http://www.facebook.com/granyagonzalez\" target=\"_blank\"><img src=\"images/btn_facebook.png\" border=\"0\" width=\"32\" height=\"32\" style=\"border: 0;\" /></a> <a href=\"http://twitter.com/#!/granyagonzalez\" target=\"_blank\"><img src=\"images/btn_twitter.png\" border=\"0\" width=\"32\" height=\"32\" style=\"border: 0px none;\" /></a>       </p>\r\n<p style=\"text-align: center; color: white;\">Copyright 2013 - Todos los derechos reservados<br />Desarrollado por <a href=\"http://www.teravisiontech.com\">Teravision Technologies</a></p>',1,'granya-footer',778,'2013-02-22 20:05:15','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_custom',1,1,'{\"prepare_content\":\"1\",\"backgroundimage\":\"\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"static\"}',0,'*'),(91,'SCLogin','','',1,'granya-login',778,'2013-02-22 18:31:05','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_sclogin',1,1,'{\"register_type\":\"joomla\",\"loginButtonSize\":\"medium\",\"showLoginForm\":\"1\",\"showRegisterLink\":\"1\",\"showForgotUsername\":\"0\",\"showForgotPassword\":\"1\",\"jlogin_redirect\":\"1\",\"jlogin\":\"101\",\"usesecure\":\"0\",\"enableProfilePic\":\"facebook\",\"profileWidth\":\"50\",\"profileHeight\":\"\",\"linkProfile\":\"1\",\"showGreeting\":\"1\",\"greetingName\":\"1\",\"showLogoutButton\":\"1\",\"showConnectButton\":\"0\",\"user_intro\":\"\",\"showPoweredByLink\":\"0\",\"moduleclass_sfx\":\"\"}',0,'*'),(92,'SCLogin (copy)','','',1,'granya-login',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',-2,'mod_sclogin',1,1,'{\"register_type\":\"joomla\",\"loginButtonSize\":\"medium\",\"showLoginForm\":\"1\",\"showRegisterLink\":\"1\",\"showForgotUsername\":\"0\",\"showForgotPassword\":\"1\",\"jlogin_redirect\":\"1\",\"jlogin\":\"101\",\"usesecure\":\"0\",\"enableProfilePic\":\"0\",\"profileWidth\":\"50\",\"profileHeight\":\"\",\"linkProfile\":\"0\",\"showGreeting\":\"1\",\"greetingName\":\"1\",\"showLogoutButton\":\"1\",\"showConnectButton\":\"1\",\"user_intro\":\"\",\"showPoweredByLink\":\"2\",\"moduleclass_sfx\":\"\"}',0,'*'),(93,'¿Quién es Granya?','','',1,'granya-middle',778,'2013-02-07 00:39:21','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_video_youtube_home',1,1,'{\"youtube_video_url\":\"http:\\/\\/www.youtube.com\\/watch?v=A3MTbfpL9P8\",\"more_videos_url\":\"more-videos\",\"layout\":\"_:default\",\"moduleclass_sfx\":\" home-article-list\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"static\"}',0,'*'),(94,'Banda Gástrica Virtual','','',1,'granya-middle',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_video_youtube_home',1,1,'{\"youtube_video_url\":\"http:\\/\\/www.youtube.com\\/watch?v=hBq1dq7D3Go\",\"more_videos_url\":\"more-videos\",\"layout\":\"_:default\",\"moduleclass_sfx\":\" home-article-list\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"static\"}',0,'*'),(95,'jNews Module','','',0,'position-7',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'mod_jnews',1,1,'',0,'*'),(96,'Buscar en Granya','','',0,'granya-search',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_search',1,0,'{\"label\":\"\",\"width\":\"20\",\"text\":\"\",\"button\":\"\",\"button_pos\":\"right\",\"imagebutton\":\"\",\"button_text\":\"\",\"opensearch\":\"1\",\"opensearch_title\":\"\",\"set_itemid\":\"\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"cache\":\"1\",\"cache_time\":\"900\",\"cachemode\":\"itemid\"}',0,'*'),(97,'Smart Search','','',1,'granya-footer',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',-2,'mod_finder',1,1,'{\"searchfilter\":\"\",\"show_autosuggest\":\"1\",\"show_advanced\":\"1\",\"layout\":\"_:default\",\"moduleclass_sfx\":\"\",\"field_size\":25,\"alt_label\":\"\",\"show_label\":\"1\",\"label_pos\":\"top\",\"show_button\":\"0\",\"button_pos\":\"right\",\"opensearch\":\"1\",\"opensearch_title\":\"\"}',0,'*'),(98,'Widgetkit','','',0,'',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_widgetkit',1,1,'',0,'*'),(99,'Widgetkit Twitter','','',0,'',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_widgetkit_twitter',1,1,'',0,'*'),(100,'Home Slideshow','','',1,'granya-slideshow',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_widgetkit',1,0,'{\"widget_id\":\"1\",\"moduleclass_sfx\":\"\"}',0,'*'),(101,'JoomConnect Quick Ticket Lite','','',0,'',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'mod_joomconnect_quick_ticket_lite',1,1,'',0,'*'),(102,'Perfect-Web Extensions Tester','','',1,'granya-login',778,'2013-03-01 20:06:10','0000-00-00 00:00:00','0000-00-00 00:00:00',1,'mod_pwebtester',1,1,'{\"layout\":\"contact\",\"use_granyaGonzalez_path\":\"0\",\"moduleclass_sfx\":\"\",\"cache\":\"0\",\"feed\":\"1\"}',0,'*');
/*!40000 ALTER TABLE `gran_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_modules_menu`
--

DROP TABLE IF EXISTS `gran_modules_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_modules_menu` (
  `moduleid` int(11) NOT NULL DEFAULT '0',
  `menuid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`moduleid`,`menuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_modules_menu`
--

LOCK TABLES `gran_modules_menu` WRITE;
/*!40000 ALTER TABLE `gran_modules_menu` DISABLE KEYS */;
INSERT INTO `gran_modules_menu` VALUES (1,0),(2,0),(3,0),(4,0),(6,0),(7,0),(8,0),(9,0),(10,0),(12,0),(13,0),(14,0),(15,0),(16,0),(17,-101),(79,0),(86,0),(87,0),(88,0),(89,0),(90,0),(91,0),(92,0),(93,0),(94,0),(95,0),(96,0),(97,0),(100,0);
/*!40000 ALTER TABLE `gran_modules_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_newsfeeds`
--

DROP TABLE IF EXISTS `gran_newsfeeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_newsfeeds` (
  `catid` int(11) NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL DEFAULT '',
  `filename` varchar(200) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `numarticles` int(10) unsigned NOT NULL DEFAULT '1',
  `cache_time` int(10) unsigned NOT NULL DEFAULT '3600',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `rtl` tinyint(4) NOT NULL DEFAULT '0',
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `language` char(7) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `metadata` text NOT NULL,
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`published`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_newsfeeds`
--

LOCK TABLES `gran_newsfeeds` WRITE;
/*!40000 ALTER TABLE `gran_newsfeeds` DISABLE KEYS */;
INSERT INTO `gran_newsfeeds` VALUES (5,1,'Smashing Magazine Channel','smashing-magazine-channel','http://gdata.youtube.com/feeds/api/users/economistmagazine/uploads',NULL,1,5,3600,0,'0000-00-00 00:00:00',1,0,1,'*','{\"show_feed_image\":\"\",\"show_feed_description\":\"\",\"show_item_description\":\"\",\"feed_character_count\":\"0\",\"newsfeed_layout\":\"\",\"feed_display_order\":\"\"}','2013-02-15 02:13:25',778,'','2013-02-15 02:14:01',778,'','','{\"robots\":\"\",\"rights\":\"\"}','','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `gran_newsfeeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_overrider`
--

DROP TABLE IF EXISTS `gran_overrider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_overrider` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `constant` varchar(255) NOT NULL,
  `string` text NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_overrider`
--

LOCK TABLES `gran_overrider` WRITE;
/*!40000 ALTER TABLE `gran_overrider` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_overrider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_redirect_links`
--

DROP TABLE IF EXISTS `gran_redirect_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_redirect_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `old_url` varchar(255) NOT NULL,
  `new_url` varchar(255) NOT NULL,
  `referer` varchar(150) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `published` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_link_old` (`old_url`),
  KEY `idx_link_modifed` (`modified_date`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_redirect_links`
--

LOCK TABLES `gran_redirect_links` WRITE;
/*!40000 ALTER TABLE `gran_redirect_links` DISABLE KEYS */;
INSERT INTO `gran_redirect_links` VALUES (1,'http://localhost/granya/2013-01-07-14-38-44/index.php','','http://localhost/granya/2013-01-07-14-38-44/quienes-somos','',10,0,'2013-01-07 17:16:11','0000-00-00 00:00:00'),(2,'http://localhost/granya/2013-01-07-16-12-15/publicaciones-granya-recomienda/index.php','','http://localhost/granya/2013-01-07-16-12-15/publicaciones-granya-recomienda/2-hipnosis-la-recomiendo-para-adelgazar','',208,0,'2013-01-07 21:17:54','0000-00-00 00:00:00'),(3,'http://localhost/granya/img','','http://localhost/granya/','',1,0,'2013-01-10 18:02:25','0000-00-00 00:00:00'),(4,'http://192.168.10.66/granya/admin','','','',2,0,'2013-01-10 18:27:46','0000-00-00 00:00:00'),(5,'http://192.168.10.66/granya/2013-01-07-14-38-44/index.php','','http://192.168.10.66/granya/2013-01-07-14-38-44/quienes-somos','',34,0,'2013-01-10 19:17:39','0000-00-00 00:00:00'),(6,'http://localhost/granya/<br /><font size=\'1\'><table class=\'xdebug-error\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'><tr><th align=\'left\' bgcolor=\'','','http://localhost/granya/','',4,0,'2013-01-15 15:32:27','0000-00-00 00:00:00'),(7,'http://localhost/granya/2013-01-07-16-12-15/index.php','','http://localhost/granya/2013-01-07-16-12-15/publicaciones-granya-recomienda','',79,0,'2013-01-23 21:24:18','0000-00-00 00:00:00'),(8,'http://localhost/granya/administration','','','',1,0,'2013-02-01 15:08:24','0000-00-00 00:00:00'),(9,'http://localhost/granya/admin','','','',2,0,'2013-02-01 15:08:30','0000-00-00 00:00:00'),(10,'http://localhost/granya/joomla/admin','','','',1,0,'2013-02-01 15:08:37','0000-00-00 00:00:00'),(11,'http://localhost/granya/joomla/administration','','','',1,0,'2013-02-01 15:08:42','0000-00-00 00:00:00'),(12,'http://localhost/granya//templates/<br /><font size=\'1\'><table class=\'xdebug-error\' dir=\'ltr\' border=\'1\' cellspacing=\'0\' cellpadding=\'1\'><tr><th align=\'left\' bgcolor=\'','','http://localhost/granya/','',1,0,'2013-02-01 21:05:05','0000-00-00 00:00:00'),(13,'http://localhost/granya/2013-01-07-15-55-57','','','',1,0,'2013-02-08 00:12:51','0000-00-00 00:00:00'),(14,'http://localhost/granya/component/','','','',2,0,'2013-02-08 20:21:29','0000-00-00 00:00:00'),(15,'http://localhost/granya/images/corporales/lipomassage','','http://localhost/granya/media/editors/tinymce/jscripts/tiny_mce/themes/advanced/image.htm','',3,0,'2013-02-13 20:39:29','0000-00-00 00:00:00'),(16,'http://localhost/granya/2013-01-07-15-57-05/inscripcion','','http://localhost/granya/2013-01-07-15-57-05/banda-gastrica-virtual-inscripcion','',1,0,'2013-02-13 21:49:15','0000-00-00 00:00:00'),(17,'http://localhost/granya/2013-01-07-15-57-05/banda-gastrica-virtual-testimoniales','','http://localhost/granya/2013-01-07-16-12-15/publicaciones-videos','',1,0,'2013-02-13 22:04:19','0000-00-00 00:00:00'),(18,'http://localhost/granya/smashing-magazine-channel','','','',1,0,'2013-02-15 02:13:38','0000-00-00 00:00:00'),(19,'http://localhost/granya/2013-01-07-15-57-05/index.php','','http://localhost/granya/2013-01-07-15-57-05/testimoniales?view=form&layout=edit&catid=14&return=aHR0cDovL2xvY2FsaG9zdC9ncmFueWEvMjAxMy0wMS0wNy0xNS01Ny','',389,0,'2013-02-19 00:36:45','0000-00-00 00:00:00'),(20,'http://192.168.10.66/granya/2013-01-07-15-57-05/index.php','','http://192.168.10.66/granya/2013-01-07-15-57-05/testimoniales?view=form&layout=edit&catid=14&return=aHR0cDovLzE5Mi4xNjguMTAuNjYvZ3JhbnlhLzIwMTMtMDEtMD','',27,0,'2013-02-19 17:24:27','0000-00-00 00:00:00'),(21,'http://localhost/granya/2013-01-07-15-57-05/testimoniales/53-prueba-funcionando','','http://localhost/granya/2013-01-07-15-57-05/testimoniales','',1,0,'2013-02-22 01:19:18','0000-00-00 00:00:00'),(22,'http://localhost/granya/talleres','','','',2,0,'2013-02-22 02:32:40','0000-00-00 00:00:00'),(23,'http://localhost/granya/component/talleres/','','http://localhost/granya/component/talleres','',1,0,'2013-02-22 03:50:09','0000-00-00 00:00:00'),(24,'http://localhost/granya/agregar-testimonial','','','',4,0,'2013-02-22 16:04:17','0000-00-00 00:00:00'),(25,'http://localhost/granya/more-videos','','http://localhost/granya/','',1,0,'2013-02-22 17:56:36','0000-00-00 00:00:00'),(26,'http://localhost/granya/?Itemid=102','','http://localhost/granya/2013-01-07-16-12-15/granya-recomienda','',1,0,'2013-02-22 20:58:04','0000-00-00 00:00:00'),(27,'http://localhost/granya/nuevo-testimonial','','','',1,0,'2013-02-25 19:35:33','0000-00-00 00:00:00'),(28,'http://localhost/granya/index.php/nuevo-testimonial','','','',1,0,'2013-02-25 19:35:47','0000-00-00 00:00:00'),(29,'http://localhost/granya/index.php/admin','','','',1,0,'2013-02-25 19:47:07','0000-00-00 00:00:00'),(30,'http://localhost/granya/index.php/administrator','','','',2,0,'2013-02-25 19:47:22','0000-00-00 00:00:00'),(31,'http://localhost/granya/component/eres/?view=registro&layout=thankyou','','http://localhost/granya/2013-01-07-15-57-05/inscripcion?view=registro&layout=edit','',2,0,'2013-02-25 20:01:33','0000-00-00 00:00:00'),(32,'http://192.168.10.66/granya/cache/2e01f1fab29773016e8163567b5a9de9','','http://192.168.10.66/granya/','',2,0,'2013-02-26 00:00:49','0000-00-00 00:00:00'),(33,'http://192.168.10.66/granya/2013-01-07-15-55-57/cache/2e01f1fab29773016e8163567b5a9de9','','http://192.168.10.66/granya/2013-01-07-15-55-57/tratamientos-corporales','',1,0,'2013-02-26 00:01:39','0000-00-00 00:00:00'),(34,'http://192.168.10.66/granya/2013-01-07-15-57-05/cache/2e01f1fab29773016e8163567b5a9de9','','http://192.168.10.66/granya/2013-01-07-15-57-05/informacion-y-talleres','',1,0,'2013-02-26 00:01:55','0000-00-00 00:00:00'),(35,'http://localhost/granya/buscador?searchword=test&ordering=alpha&searchphrase=all&limit=10','','http://localhost/granya/buscador?searchword=lalala&ordering=newest&searchphrase=all&limit=10','',1,0,'2013-02-27 15:55:23','0000-00-00 00:00:00'),(36,'http://localhost/granya/buscador','','','',1,0,'2013-02-27 15:55:34','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `gran_redirect_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_schemas`
--

DROP TABLE IF EXISTS `gran_schemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_schemas` (
  `extension_id` int(11) NOT NULL,
  `version_id` varchar(20) NOT NULL,
  PRIMARY KEY (`extension_id`,`version_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_schemas`
--

LOCK TABLES `gran_schemas` WRITE;
/*!40000 ALTER TABLE `gran_schemas` DISABLE KEYS */;
INSERT INTO `gran_schemas` VALUES (700,'2.5.8'),(10009,'4.2.0'),(10053,'1.0.9'),(10057,'1.2.2');
/*!40000 ALTER TABLE `gran_schemas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_seguimiento`
--

DROP TABLE IF EXISTS `gran_seguimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_seguimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inscripcion_id` int(11) NOT NULL COMMENT 'Id de la inscripción',
  `fecha` datetime NOT NULL COMMENT 'Fecha de registro del seguimiento',
  `balanza_instituto` float NOT NULL COMMENT 'Peso en balanza del instituto/estética',
  `balanza_propia` float NOT NULL COMMENT 'Peso en balanza propia',
  `auto_evaluacion` char(1) NOT NULL COMMENT 'Auto evaluación (b: buena, r: regular, m: mala)',
  `escuchar_audio` text NOT NULL COMMENT 'Cuándo escuchó audio (n: noche; d: dia; n,d: noche y día)',
  `dieta` char(1) NOT NULL COMMENT 'Realizó dieta (s: sí, c: cuido, n: no)',
  `calidad` char(1) NOT NULL COMMENT 'Calidad de dieta (m: mala, r: regular, b: bien, s: muy bien)',
  `conducta` text NOT NULL COMMENT 'Conducta al comer (m: mastico despacio; b: bajo cubiertos; p: plato chico; m-b: ; m-p: ; b-p: ; m-b-p:)',
  `cantidad` char(1) NOT NULL COMMENT 'Cantidad de comida (p: poco, n: normal, m: mucho)',
  `mini-porcion` char(1) NOT NULL COMMENT 'Comió mini-porción (s: sí, n: no)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_seguimiento`
--

LOCK TABLES `gran_seguimiento` WRITE;
/*!40000 ALTER TABLE `gran_seguimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_seguimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_session`
--

DROP TABLE IF EXISTS `gran_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_session` (
  `session_id` varchar(200) NOT NULL DEFAULT '',
  `client_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `guest` tinyint(4) unsigned DEFAULT '1',
  `time` varchar(14) DEFAULT '',
  `data` mediumtext,
  `userid` int(11) DEFAULT '0',
  `username` varchar(150) DEFAULT '',
  `usertype` varchar(50) DEFAULT '',
  PRIMARY KEY (`session_id`),
  KEY `whosonline` (`guest`,`usertype`),
  KEY `userid` (`userid`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_session`
--

LOCK TABLES `gran_session` WRITE;
/*!40000 ALTER TABLE `gran_session` DISABLE KEYS */;
INSERT INTO `gran_session` VALUES ('c11418bb63d29c182f7dc59c07b16e4b',0,1,'1362180356','__default|a:8:{s:22:\"session.client.browser\";s:72:\"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:19.0) Gecko/20100101 Firefox/19.0\";s:15:\"session.counter\";i:76;s:8:\"registry\";O:9:\"JRegistry\":1:{s:7:\"\0*\0data\";O:8:\"stdClass\":0:{}}s:4:\"user\";O:5:\"JUser\":25:{s:9:\"\0*\0isgranyaGonzalez\";b:0;s:2:\"id\";i:0;s:4:\"name\";N;s:8:\"username\";N;s:5:\"email\";N;s:8:\"password\";N;s:14:\"password_clear\";s:0:\"\";s:8:\"usertype\";N;s:5:\"block\";N;s:9:\"sendEmail\";i:0;s:12:\"registerDate\";N;s:13:\"lastvisitDate\";N;s:10:\"activation\";N;s:6:\"params\";N;s:6:\"groups\";a:0:{}s:5:\"guest\";i:1;s:13:\"lastResetTime\";N;s:10:\"resetCount\";N;s:10:\"\0*\0_params\";O:9:\"JRegistry\":1:{s:7:\"\0*\0data\";O:8:\"stdClass\":0:{}}s:14:\"\0*\0_authGroups\";a:1:{i:0;i:1;}s:14:\"\0*\0_authLevels\";a:2:{i:0;i:1;i:1;i:1;}s:15:\"\0*\0_authActions\";N;s:12:\"\0*\0_errorMsg\";N;s:10:\"\0*\0_errors\";a:0:{}s:3:\"aid\";i:0;}s:13:\"session.token\";s:32:\"eba292015c49415cdc1cb1492aea1fe4\";s:19:\"session.timer.start\";i:1362167868;s:18:\"session.timer.last\";i:1362179516;s:17:\"session.timer.now\";i:1362180356;}',0,'',''),('s84abalm8be2e3qrea03s8oq32',1,0,'1362181195','PpsKi3Iv4DEwvCJZVNDSeQQ3VtvoDoPcKg99Y1YgdQXq_VGY7FMISxjp3FaAYOiCCqIvQZlkkC3N6yi4KL3ovg_MwmUd6sJUSCeslAhgZ1FD7YbV9WWPCKaE05PYFBmyIFcOf6dmoh60w24x2dxsc5GOi_D1OQcwBO91NKUPX9NhF4FvGJr9VWNB8PrTGFfnNrYcXu_yM9Q9_qRLVUJF0kShRSEJ8EPFbVY8EYIfmD2Dm-0qlWWBgfwDLMl3ng2UXoCucIvv8SLgYMEALURjyjePijcdEyL4VeIIqGoAi3WYq70yRPhzNwzrZoy7m403cyhyWZZNU6sd1Is2jdD2RygALKxZG7H9MTUjsvd18oJdm_wacOtP7ZCkiYp46sH9EwkAmaMbJNsBmGf26B72uF2QjRE0ojWfjNzXVyvtJoWib9mDIwQaDjMUUgtRJ8GLZ2j4b41wANkJL4NhSqbgmfLu5E1hF7-3-5t5CPOyqBPfZaj0vDiJHa6UYVkIWh_8YxaHdzx6Uq8QmzlFX472DqaKXLJpZGJVyFBWTmzP7qQnQoiY1uhFJekm1pqF7DxUptgI2UVHtxiS2Po322Ve6ZkWSL8bu0N7FN2qOrcaTTUEt93_CqDtquOxb_Pc1FBwiBBQ4pn0qAG8zmldCO-q9e9ifEsmbU0MHMCqqpQd8_w33gVF3EQmcDozWdGotBgJapofrFOciat0WAvyLZTdWKJWdVNOc7uB2cCy3dJQueaXGfnVgwVUu9havImc-69ZXO3kko3h7IKUS3NtkwxVvTasgmkdUsy8-taYvJzUGFHp11vp6pTsk-pRvQ0cetMvleIJh4-8zXRoCWVn1Jh8Xy10vMeLgyKC6vBgbI8Hi71-Z59FNf-QxMQUfPysQNgdq2Def4eHcHVNnWo4U9rfFiVmwlQzW7a5wk7YU2SFMqyJqrZYSEajDXB6FZwBAXuPQ4uxLrXejlXYIcS2IVHZYSW-BA8jVasaaV8AwTEAh_ELjgQGgHGDKeK_buc2cVz1bGlbJNme-vDGuNkFQd64JM0aX57p7tJo-stoHHyHtNj4nOa7yeo1z1poaAHQW1tDmrhSTs_hd4GkPlFI-HxWHgYbbqLb2GuiXtu9EJEk8n11TwvQfi982eG3WJ36zIqodMhw31oNrvDYAyADEajwQ0K7V44e-b4vMvhPZ2h4l_FC50SIgf-r6kfb3PxjK_2VsqliezAluMuv5j0LqZMYPropiPhcfz0UfIBjmw9pvway9F-uqETppEmdHNIFzLzxkEgzqBNjE3fvvoR5V4aVWo6Rh4yYX3pqseD5UlhN7H99F3hfbXJqAuCm3H1hKPeygCz8rdbkEhhwLNAW8_ZLKNley2IDsIXXpuUbmtt-K742q4EN0pgWWUljAbqqY_7gv8rWkfOfAegj4LmtqksVqsOt8vHWtV1herDIjJf_Q9bPeFrgB355n0nKgbnMFFnXEweDvEFxdzbY-4ywI4czXTIHWZdS17I_gveubsnCj_N5g_SeQ6Zfpush9sIyckQXIJE8sYXOrusQWhnormLoIRhusrCEvwOz7KkotZ82ERBb4ncX-uBy0lkZ5HE7fLKSQTwXZ1bzaKPSweSHryOgPfV91Ee-wmhNviYGLfOas6eZBfZsU3ycprJYi_37fiQnfT_YMCLP8Sbmb30LqEfTx36Heaj2WtoGhJ3_yIImOCwRHsJ4yNhT6Sca-woV5gawTQDOnnX1DPIdBVkl7BN-4njGWeAq_Qxap5dxEBiEnrmPKlC18rKqGQhj-JoY6Ca0fvjoTj8hvInrSZp59_jhvR9vnBxcz9ZuCBjWC6_98CVS1RrYuqDDyr1bxHCNKoFmqrBofY4JkI_Yuk2rtjrP11aKPt4PC2EV6o5IZJse33ANEOz5Mvl1P9_lBlCLi2E9p1iroedUzJdaN-fKiJeEgpnSw23n1cvNuEyRN3iBKQpzefn5oFtfaHsf4WPVceRFgAkdVpnk46sHwymk6wkIB90U-Korasizg7BG5U-axx94Y8updkJwyFeBcYidFdQ1YcUFAkQZjF8Egl9aPg3t-6QxSNeW0cShhhEZaofIWTlSQD2nbi6LQW-Ev-LKfkJ1SMgadOgI0hdQZdDVtmPidKGSIZv1EtS3605dfoVkwVe0vsV5TStP5DoRIXc3uQfYDYIpVICdsg3FcrmnEhrj7D6g509I9FlSFTZ4VHVU4_iDzydmT_QEftUkWDn4P8KACRLjtyPOI_rSFpvI5ot_9J6-UUvOtKMZgVelW90QbQ2c3vz-9NxLxWLTIgpcuR25E8ExFOdAbj7GuaTpFToi90jun5P95685QaWsZ1lqQarssFUWIvfFsiTbFRVWrp81u-3rh9JPojGWX23WBdc-YlRiqFjGlYYbwsLkPx7vFx6NxeeJQBJi5WXjD4SQEu72coMtR7-6g3WL0ub8UyTS6B9SyOU87w9MltY_Elu-QrZlZTJGRtPau5NFD8RB5D29mOr7MKahRanNm5IIrkAGaNSnJ9FGxN-58KUljZpQNj--RH-VJtsyGD_JjzATsrgC',778,'admin','');
/*!40000 ALTER TABLE `gran_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_taller`
--

DROP TABLE IF EXISTS `gran_taller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_taller` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `fecha` datetime DEFAULT NULL COMMENT 'Fecha del evento',
  `tipo` char(1) NOT NULL COMMENT 'Tipo de taller (p: permanente, m: masivo, i: individual)',
  `lugar` varchar(512) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `precio_oferta` varchar(10) DEFAULT NULL COMMENT 'Precio activo si el taller esta en descuento',
  `fecha_limite_oferta` datetime DEFAULT NULL COMMENT 'Fecha limite de validez del precio oferta',
  `cupo` int(6) NOT NULL DEFAULT '0' COMMENT 'Cupo disponible para inscripciones manuales',
  `cupo_web` int(6) NOT NULL DEFAULT '0' COMMENT 'Cupo disponible para usuarios que se inscriben desde internet',
  `hora_inicio` int(2) DEFAULT NULL,
  `hora_fin` int(2) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0' COMMENT '(1=published, 0=unpublished, -2=trashed)',
  `created` datetime NOT NULL,
  `created_by` int(10) unsigned NOT NULL COMMENT 'Foreign key ¬to #__users table for user who created this item',
  `modified` datetime NOT NULL,
  `modified_by` int(10) unsigned NOT NULL COMMENT 'Foreign key ¬to #__users table for user who modified this item',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_taller`
--

LOCK TABLES `gran_taller` WRITE;
/*!40000 ALTER TABLE `gran_taller` DISABLE KEYS */;
INSERT INTO `gran_taller` VALUES (1,'Taller 1','2013-02-18 00:00:00','p','Chacaito','1700,00',NULL,NULL,12,15,NULL,NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0),(2,'Taller 2','2013-02-22 00:00:00','m','Los Naranjos','1400','1200','2013-02-20 00:00:00',0,2,8,13,0,'0000-00-00 00:00:00',0,'2013-02-28 19:50:22',778);
/*!40000 ALTER TABLE `gran_taller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_template_styles`
--

DROP TABLE IF EXISTS `gran_template_styles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_template_styles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `template` varchar(50) NOT NULL DEFAULT '',
  `client_id` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `home` char(7) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_template` (`template`),
  KEY `idx_home` (`home`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_template_styles`
--

LOCK TABLES `gran_template_styles` WRITE;
/*!40000 ALTER TABLE `gran_template_styles` DISABLE KEYS */;
INSERT INTO `gran_template_styles` VALUES (2,'bluestork',1,'1','Bluestork - Default','{\"useRoundedCorners\":\"1\",\"showSiteName\":\"0\"}'),(3,'atomic',0,'0','Atomic - Default','{}'),(4,'beez_20',0,'0','Beez2 - Default','{\"wrapperSmall\":\"53\",\"wrapperLarge\":\"72\",\"logo\":\"images\\/joomla_black.gif\",\"sitetitle\":\"Joomla!\",\"sitedescription\":\"Open Source Content Management\",\"navposition\":\"left\",\"templatecolor\":\"personal\",\"html5\":\"0\"}'),(5,'hathor',1,'0','Hathor - Default','{\"showSiteName\":\"0\",\"colourChoice\":\"\",\"boldText\":\"0\"}'),(6,'beez5',0,'0','Beez5 - Default','{\"wrapperSmall\":\"53\",\"wrapperLarge\":\"72\",\"logo\":\"images\\/sampledata\\/fruitshop\\/fruits.gif\",\"sitetitle\":\"Joomla!\",\"sitedescription\":\"Open Source Content Management\",\"navposition\":\"left\",\"html5\":\"0\"}'),(7,'granya',0,'1','granya - Default','{}');
/*!40000 ALTER TABLE `gran_template_styles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_update_categories`
--

DROP TABLE IF EXISTS `gran_update_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_update_categories` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT '',
  `description` text NOT NULL,
  `parent` int(11) DEFAULT '0',
  `updatesite` int(11) DEFAULT '0',
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Update Categories';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_update_categories`
--

LOCK TABLES `gran_update_categories` WRITE;
/*!40000 ALTER TABLE `gran_update_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_update_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_update_sites`
--

DROP TABLE IF EXISTS `gran_update_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_update_sites` (
  `update_site_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '',
  `type` varchar(20) DEFAULT '',
  `location` text NOT NULL,
  `enabled` int(11) DEFAULT '0',
  `last_check_timestamp` bigint(20) DEFAULT '0',
  PRIMARY KEY (`update_site_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='Update Sites';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_update_sites`
--

LOCK TABLES `gran_update_sites` WRITE;
/*!40000 ALTER TABLE `gran_update_sites` DISABLE KEYS */;
INSERT INTO `gran_update_sites` VALUES (1,'Joomla Core','collection','http://update.joomla.org/core/list.xml',1,1362180920),(2,'Joomla Extension Directory','collection','http://update.joomla.org/jed/list.xml',1,1362180920),(3,'Accredited Joomla! Translations','collection','http://update.joomla.org/language/translationlist.xml',1,1362180920),(4,'Accredited Joomla! Translations (es-ES)','collection','http://updates.comunidadjoomla.org/es-ES_joomla_lang_packs_list.xml',1,1362180920),(5,'SCLogin Updates','extension','http://www.sourcecoast.com/updates/sclogin.xml',1,1362180920),(6,'SourceCoast Library Updates','extension','http://www.sourcecoast.com/updates/sourcecoast.xml',1,1362180920),(7,'JFBConnect Updates','extension','http://www.sourcecoast.com/updates/jfbconnect.xml',1,1362180920),(9,'Macrotone Issue Tracker Update','extension','http://www.macrotoneconsulting.co.uk/extensions/update_com_issuetracker.xml',1,1362180920);
/*!40000 ALTER TABLE `gran_update_sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_update_sites_extensions`
--

DROP TABLE IF EXISTS `gran_update_sites_extensions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_update_sites_extensions` (
  `update_site_id` int(11) NOT NULL DEFAULT '0',
  `extension_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`update_site_id`,`extension_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Links extensions to update sites';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_update_sites_extensions`
--

LOCK TABLES `gran_update_sites_extensions` WRITE;
/*!40000 ALTER TABLE `gran_update_sites_extensions` DISABLE KEYS */;
INSERT INTO `gran_update_sites_extensions` VALUES (1,700),(2,700),(3,600),(3,10003),(4,10003),(5,10014),(6,10015),(7,10009),(9,10057);
/*!40000 ALTER TABLE `gran_update_sites_extensions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_updates`
--

DROP TABLE IF EXISTS `gran_updates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_updates` (
  `update_id` int(11) NOT NULL AUTO_INCREMENT,
  `update_site_id` int(11) DEFAULT '0',
  `extension_id` int(11) DEFAULT '0',
  `categoryid` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT '',
  `description` text NOT NULL,
  `element` varchar(100) DEFAULT '',
  `type` varchar(20) DEFAULT '',
  `folder` varchar(20) DEFAULT '',
  `client_id` tinyint(3) DEFAULT '0',
  `version` varchar(10) DEFAULT '',
  `data` text NOT NULL,
  `detailsurl` text NOT NULL,
  `infourl` text NOT NULL,
  PRIMARY KEY (`update_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1144 DEFAULT CHARSET=utf8 COMMENT='Available Updates';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_updates`
--

LOCK TABLES `gran_updates` WRITE;
/*!40000 ALTER TABLE `gran_updates` DISABLE KEYS */;
INSERT INTO `gran_updates` VALUES (1,3,0,0,'Armenian','','pkg_hy-AM','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/hy-AM_details.xml',''),(2,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/da-DK_details.xml',''),(3,3,0,0,'Khmer','','pkg_km-KH','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/km-KH_details.xml',''),(4,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(5,3,0,0,'Hungarian','','pkg_hu-HU','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/hu-HU_details.xml',''),(6,3,0,0,'Bulgarian','','pkg_bg-BG','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/bg-BG_details.xml',''),(7,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(8,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.8.2','','http://update.joomla.org/language/details/it-IT_details.xml',''),(10,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(11,3,0,0,'Turkish','','pkg_tr-TR','package','',0,'2.5.7.2','','http://update.joomla.org/language/details/tr-TR_details.xml',''),(12,3,0,0,'Ukrainian','','pkg_uk-UA','package','',0,'2.5.7.2','','http://update.joomla.org/language/details/uk-UA_details.xml',''),(13,3,0,0,'Indonesian','','pkg_id-ID','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/id-ID_details.xml',''),(14,3,0,0,'Slovak','','pkg_sk-SK','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/sk-SK_details.xml',''),(15,3,0,0,'Belarusian','','pkg_be-BY','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/be-BY_details.xml',''),(16,3,0,0,'Latvian','','pkg_lv-LV','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/lv-LV_details.xml',''),(17,3,0,0,'Estonian','','pkg_et-EE','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/et-EE_details.xml',''),(18,3,0,0,'Romanian','','pkg_ro-RO','package','',0,'2.5.5.3','','http://update.joomla.org/language/details/ro-RO_details.xml',''),(19,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(20,3,0,0,'Macedonian','','pkg_mk-MK','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/mk-MK_details.xml',''),(21,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(22,3,0,0,'Serbian Latin','','pkg_sr-YU','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/sr-YU_details.xml',''),(23,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(24,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.8.2','','http://update.joomla.org/language/details/de-DE_details.xml',''),(25,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(26,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(27,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(28,3,0,0,'Serbian Cyrillic','','pkg_sr-RS','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/sr-RS_details.xml',''),(29,3,0,0,'Lithuanian','','pkg_lt-LT','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/lt-LT_details.xml',''),(30,3,0,0,'Albanian','','pkg_sq-AL','package','',0,'2.5.1.5','','http://update.joomla.org/language/details/sq-AL_details.xml',''),(31,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(32,3,0,0,'Galician','','pkg_gl-ES','package','',0,'2.5.7.4','','http://update.joomla.org/language/details/gl-ES_details.xml',''),(33,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(34,3,0,0,'Syriac','','pkg_sy-IQ','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/sy-IQ_details.xml',''),(35,3,0,0,'Portuguese','','pkg_pt-PT','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/pt-PT_details.xml',''),(36,3,0,0,'Russian','','pkg_ru-RU','package','',0,'2.5.8.4','','http://update.joomla.org/language/details/ru-RU_details.xml',''),(37,3,0,0,'Hebrew','','pkg_he-IL','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/he-IL_details.xml',''),(38,3,0,0,'Catalan','','pkg_ca-ES','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/ca-ES_details.xml',''),(39,3,0,0,'Laotian','','pkg_lo-LA','package','',0,'2.5.6.1','','http://update.joomla.org/language/details/lo-LA_details.xml',''),(40,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.6.2','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(41,3,0,0,'Chinese Simplified','','pkg_zh-CN','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/zh-CN_details.xml',''),(42,3,0,0,'Greek','','pkg_el-GR','package','',0,'2.5.6.1','','http://update.joomla.org/language/details/el-GR_details.xml',''),(43,3,0,0,'Esperanto','','pkg_eo-XX','package','',0,'2.5.6.1','','http://update.joomla.org/language/details/eo-XX_details.xml',''),(44,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.8.2','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(45,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(46,3,0,0,'Chinese Traditional','','pkg_zh-TW','package','',0,'2.5.7.2','','http://update.joomla.org/language/details/zh-TW_details.xml',''),(47,3,0,0,'Vietnamese','','pkg_vi-VN','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/vi-VN_details.xml',''),(48,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(49,3,0,0,'Bosnian','','pkg_bs-BA','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/bs-BA_details.xml',''),(50,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(51,3,0,0,'Azeri','','pkg_az-AZ','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/az-AZ_details.xml',''),(52,3,0,0,'Norwegian Nynorsk','','pkg_nn-NO','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/nn-NO_details.xml',''),(53,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(54,3,0,0,'Scottish Gaelic','','pkg_gd-GB','package','',0,'2.5.7.1','','http://update.joomla.org/language/details/gd-GB_details.xml',''),(55,3,0,0,'Thai','','pkg_th-TH','package','',0,'2.5.8.1','','http://update.joomla.org/language/details/th-TH_details.xml',''),(56,3,0,0,'Basque','','pkg_eu-ES','package','',0,'1.7.0.1','','http://update.joomla.org/language/details/eu-ES_details.xml',''),(57,3,0,0,'Uyghur','','pkg_ug-CN','package','',0,'2.5.7.2','','http://update.joomla.org/language/details/ug-CN_details.xml',''),(58,3,0,0,'Korean','','pkg_ko-KR','package','',0,'2.5.7.2','','http://update.joomla.org/language/details/ko-KR_details.xml',''),(59,3,0,0,'Hindi','','pkg_hi-IN','package','',0,'2.5.6.1','','http://update.joomla.org/language/details/hi-IN_details.xml',''),(60,3,0,0,'Welsh','','pkg_cy-GB','package','',0,'2.5.6.1','','http://update.joomla.org/language/details/cy-GB_details.xml',''),(61,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.8.3','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(62,5,10014,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 4.2 and JLinked com','SCLogin','mod_sclogin','module','',0,'1.1.4','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=21'),(63,6,10015,0,'SourceCoast Extensions Library','SourceCoast Extensions Library','sourcecoast','library','',0,'1.0.11','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=36'),(64,7,10009,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'4.3.4','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=35'),(65,1,700,0,'Joomla','','joomla','file','',0,'2.5.9','','http://update.joomla.org/core/extension.xml',''),(66,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(67,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(68,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(69,3,10003,0,'Spanish','','pkg_es-ES','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/es-ES_details.xml',''),(70,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(71,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(72,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(73,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(74,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(75,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(76,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(77,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(78,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(79,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(80,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(81,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(82,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(83,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(84,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(85,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(86,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(87,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(88,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(89,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(90,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(91,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(92,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(93,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(94,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(95,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(96,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(97,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(98,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(99,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(100,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(101,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(102,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(103,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(104,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(105,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(106,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(107,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(108,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(109,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(110,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(111,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(112,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(113,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(114,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(115,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(116,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(117,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(118,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(119,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(120,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(121,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(122,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(123,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(124,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(125,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(126,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(127,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(128,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(129,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(130,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(131,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(132,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(133,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(134,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(135,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(136,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(137,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(138,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(139,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(140,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(141,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(142,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(143,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(144,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(145,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(146,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(147,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(148,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(149,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(150,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(151,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(152,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(153,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(154,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(155,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(156,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(157,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(158,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(159,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(160,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(161,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(162,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(163,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(164,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(165,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(166,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(167,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(168,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(169,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(170,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(171,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(172,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(173,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(174,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(175,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(176,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(177,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(178,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(179,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(180,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(181,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(182,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(183,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(184,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(185,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(186,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(187,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(188,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(189,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(190,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(191,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(192,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(193,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(194,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(195,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(196,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(197,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(198,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(199,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(200,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(201,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(202,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(203,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(204,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(205,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(206,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(207,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(208,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(209,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(210,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(211,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(212,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(213,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(214,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(215,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(216,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(217,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(218,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(219,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(220,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(221,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(222,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(223,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(224,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(225,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(226,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(227,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(228,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(229,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(230,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(231,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(232,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(233,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(234,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(235,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(236,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(237,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(238,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(239,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(240,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(241,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(242,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(243,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(244,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(245,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(246,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(247,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(248,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(249,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(250,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(251,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(252,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(253,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(254,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(255,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(256,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(257,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(258,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(259,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(260,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(261,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(262,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(263,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(264,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(265,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(266,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(267,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(268,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(269,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(270,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(271,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(272,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(273,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(274,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(275,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(276,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(277,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(278,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(279,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(280,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(281,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(282,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(283,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(284,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(285,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(286,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(287,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(288,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(289,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(290,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(291,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(292,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(293,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(294,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(295,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(296,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(297,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(298,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(299,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(300,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(301,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(302,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(303,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(304,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(305,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(306,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(307,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(308,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(309,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(310,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(311,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(312,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(313,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(314,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(315,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(316,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(317,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(318,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(319,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(320,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(321,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(322,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(323,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(324,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(325,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(326,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(327,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(328,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(329,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(330,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(331,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(332,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(333,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(334,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(335,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(336,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(337,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(338,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(339,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(340,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(341,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(342,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(343,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(344,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(345,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(346,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(347,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(348,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(349,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(350,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(351,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(352,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(353,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(354,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(355,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(356,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(357,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(358,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(359,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(360,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(361,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(362,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(363,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(364,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(365,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(366,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(367,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(368,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(369,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(370,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(371,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(372,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(373,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(374,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(375,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(376,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(377,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(378,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(379,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(380,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(381,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(382,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(383,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(384,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(385,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(386,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(387,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(388,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(389,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(390,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(391,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(392,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(393,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(394,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(395,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(396,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(397,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(398,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(399,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(400,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(401,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(402,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(403,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(404,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(405,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(406,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(407,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(408,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(409,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(410,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(411,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(412,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(413,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(414,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(415,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(416,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(417,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(418,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(419,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(420,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(421,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(422,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(423,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(424,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(425,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(426,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(427,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(428,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(429,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(430,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(431,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(432,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(433,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(434,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(435,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(436,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(437,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(438,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(439,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(440,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(441,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(442,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(443,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(444,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(445,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(446,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(447,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(448,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(449,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(450,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(451,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(452,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(453,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(454,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(455,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(456,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(457,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(458,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(459,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(460,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(461,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(462,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(463,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(464,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(465,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(466,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(467,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(468,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(469,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(470,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(471,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(472,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(473,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(474,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(475,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(476,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(477,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(478,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(479,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(480,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(481,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(482,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(483,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(484,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(485,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(486,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(487,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(488,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(489,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(490,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(491,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(492,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(493,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(494,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(495,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(496,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(497,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(498,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(499,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(500,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(501,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(502,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(503,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(504,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(505,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(506,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(507,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(508,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(509,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(510,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(511,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(512,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(513,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(514,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(515,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(516,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(517,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(518,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(519,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(520,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(521,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(522,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(523,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(524,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(525,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(526,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(527,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(528,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(529,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(530,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(531,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(532,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(533,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(534,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(535,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(536,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(537,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(538,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(539,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(540,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(541,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(542,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(543,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(544,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(545,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(546,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(547,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(548,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(549,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(550,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(551,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(552,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(553,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(554,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(555,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(556,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(557,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(558,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(559,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(560,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(561,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(562,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(563,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(564,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(565,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(566,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(567,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(568,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(569,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(570,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(571,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(572,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(573,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(574,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(575,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(576,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(577,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(578,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(579,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(580,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(581,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(582,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(583,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(584,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(585,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(586,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(587,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(588,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(589,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(590,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(591,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(592,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(593,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(594,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(595,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(596,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(597,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(598,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(599,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(600,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(601,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(602,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(603,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(604,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(605,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(606,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(607,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(608,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(609,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(610,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(611,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(612,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(613,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(614,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(615,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(616,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(617,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(618,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(619,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(620,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(621,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(622,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(623,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(624,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(625,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(626,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(627,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(628,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(629,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(630,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(631,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(632,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(633,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(634,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(635,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(636,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(637,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(638,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(639,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(640,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(641,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(642,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(643,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(644,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(645,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(646,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(647,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(648,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(649,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(650,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(651,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(652,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(653,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(654,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(655,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(656,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(657,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(658,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(659,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(660,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(661,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(662,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(663,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(664,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(665,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(666,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(667,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(668,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(669,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(670,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(671,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(672,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(673,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(674,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(675,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(676,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(677,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(678,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(679,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(680,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(681,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(682,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(683,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(684,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(685,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(686,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(687,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(688,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(689,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(690,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(691,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(692,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(693,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(694,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(695,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(696,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(697,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(698,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(699,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(700,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(701,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(702,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(703,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(704,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(705,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(706,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(707,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(708,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(709,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(710,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(711,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(712,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(713,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(714,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(715,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(716,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(717,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(718,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(719,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(720,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(721,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(722,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(723,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(724,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(725,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(726,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(727,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(728,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(729,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(730,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(731,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(732,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(733,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(734,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(735,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(736,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(737,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(738,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(739,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(740,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(741,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(742,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(743,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(744,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(745,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(746,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(747,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(748,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(749,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(750,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(751,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(752,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(753,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(754,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(755,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(756,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(757,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(758,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(759,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(760,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(761,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(762,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(763,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(764,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(765,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(766,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(767,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(768,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(769,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(770,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(771,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(772,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(773,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(774,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(775,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(776,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(777,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(778,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(779,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(780,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(781,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(782,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(783,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(784,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(785,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(786,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(787,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(788,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(789,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(790,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(791,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(792,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(793,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(794,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(795,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(796,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(797,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(798,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(799,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(800,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(801,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(802,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(803,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(804,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(805,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(806,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(807,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(808,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(809,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(810,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(811,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(812,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(813,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(814,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(815,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(816,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(817,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(818,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(819,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(820,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(821,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(822,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(823,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(824,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(825,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(826,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(827,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(828,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(829,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(830,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(831,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(832,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(833,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(834,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(835,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(836,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(837,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(838,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(839,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(840,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(841,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(842,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(843,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(844,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(845,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(846,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(847,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(848,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(849,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(850,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(851,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(852,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(853,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(854,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(855,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(856,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(857,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(858,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(859,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(860,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(861,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(862,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(863,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(864,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(865,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(866,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(867,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(868,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(869,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(870,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(871,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(872,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(873,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(874,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(875,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(876,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(877,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(878,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(879,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(880,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(881,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(882,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(883,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(884,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(885,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(886,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(887,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(888,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(889,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(890,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(891,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(892,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(893,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(894,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(895,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(896,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(897,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(898,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(899,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(900,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(901,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(902,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(903,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(904,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(905,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(906,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(907,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(908,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(909,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(910,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(911,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(912,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(913,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(914,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(915,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(916,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(917,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(918,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(919,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(920,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(921,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(922,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(923,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(924,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(925,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(926,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(927,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(928,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(929,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(930,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(931,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(932,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(933,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(934,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(935,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(936,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(937,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(938,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(939,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(940,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(941,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(942,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(943,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(944,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(945,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(946,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(947,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(948,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(949,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(950,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(951,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(952,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(953,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(954,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(955,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(956,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(957,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(958,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(959,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(960,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(961,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(962,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(963,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(964,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(965,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(966,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(967,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(968,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(969,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(970,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(971,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(972,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(973,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(974,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(975,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(976,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(977,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(978,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(979,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(980,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(981,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(982,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(983,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(984,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(985,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(986,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(987,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(988,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(989,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(990,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(991,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(992,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(993,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(994,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(995,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(996,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(997,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(998,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(999,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(1000,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(1001,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(1002,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(1003,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(1004,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(1005,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(1006,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(1007,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(1008,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(1009,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(1010,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(1011,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(1012,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(1013,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(1014,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(1015,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(1016,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(1017,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(1018,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(1019,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(1020,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(1021,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(1022,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(1023,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(1024,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(1025,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(1026,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(1027,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(1028,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(1029,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(1030,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(1031,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(1032,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(1033,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(1034,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(1035,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(1036,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(1037,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(1038,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(1039,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(1040,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(1041,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(1042,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(1043,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(1044,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(1045,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(1046,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(1047,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(1048,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(1049,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(1050,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(1051,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(1052,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(1053,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(1054,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(1055,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(1056,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(1057,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(1058,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(1059,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(1060,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(1061,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(1062,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(1063,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(1064,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(1065,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(1066,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(1067,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(1068,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(1069,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(1070,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(1071,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(1072,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(1073,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(1074,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(1075,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(1076,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(1077,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(1078,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(1079,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(1080,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(1081,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(1082,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(1083,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(1084,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(1085,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(1086,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(1087,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(1088,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(1089,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(1090,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(1091,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(1092,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(1093,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(1094,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(1095,9,10057,0,'Issue Tracker','Issue Tracker Component','com_issuetracker','component','',1,'1.3.0','','http://www.macrotoneconsulting.co.uk/extensions/update_com_issuetracker.xml','http://www.macrotoneconsulting.co.uk'),(1096,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(1097,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(1098,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(1099,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(1100,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(1101,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(1102,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(1103,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(1104,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(1105,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(1106,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(1107,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(1108,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(1109,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(1110,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(1111,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(1112,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(1113,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(1114,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(1115,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(1116,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(1117,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(1118,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(1119,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39'),(1120,3,0,0,'Danish','','pkg_da-DK','package','',0,'2.5.9.2','','http://update.joomla.org/language/details/da-DK_details.xml',''),(1121,3,0,0,'Swedish','','pkg_sv-SE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sv-SE_details.xml',''),(1122,3,0,0,'French','','pkg_fr-FR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fr-FR_details.xml',''),(1123,3,0,0,'Italian','','pkg_it-IT','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/it-IT_details.xml',''),(1124,3,0,0,'Dutch','','pkg_nl-NL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-NL_details.xml',''),(1125,3,0,0,'Flemish','','pkg_nl-BE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nl-BE_details.xml',''),(1126,3,0,0,'Japanese','','pkg_ja-JP','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ja-JP_details.xml',''),(1127,3,0,0,'Arabic Unitag','','pkg_ar-AA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ar-AA_details.xml',''),(1128,3,0,0,'German','','pkg_de-DE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/de-DE_details.xml',''),(1129,3,0,0,'Norwegian Bokmal','','pkg_nb-NO','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/nb-NO_details.xml',''),(1130,3,0,0,'English AU','','pkg_en-AU','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-AU_details.xml',''),(1131,3,0,0,'English US','','pkg_en-US','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/en-US_details.xml',''),(1132,3,0,0,'Persian','','pkg_fa-IR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fa-IR_details.xml',''),(1133,3,0,0,'Polish','','pkg_pl-PL','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pl-PL_details.xml',''),(1134,3,0,0,'Afrikaans','','pkg_af-ZA','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/af-ZA_details.xml',''),(1135,3,0,0,'Finnish','','pkg_fi-FI','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/fi-FI_details.xml',''),(1136,3,0,0,'Portuguese Brazil','','pkg_pt-BR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/pt-BR_details.xml',''),(1137,3,0,0,'Kurdish Sorani','','pkg_ckb-IQ','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ckb-IQ_details.xml',''),(1138,3,0,0,'Croatian','','pkg_hr-HR','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/hr-HR_details.xml',''),(1139,3,0,0,'Tamil India','','pkg_ta-IN','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/ta-IN_details.xml',''),(1140,3,0,0,'Swahili','','pkg_sw-KE','package','',0,'2.5.9.1','','http://update.joomla.org/language/details/sw-KE_details.xml',''),(1141,5,0,0,'SCLogin module for JFBConnect and JLinked - Compatible with JFBConnect component 5.0+ and JLinked co','SCLogin','mod_sclogin','module','',0,'2.0.0','','http://www.sourcecoast.com/updates/sclogin.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=37'),(1142,6,0,0,'SourceCoast Extensions Library for JFBConnect and JLinked - Compatible with JFBConnect component 5.0','SourceCoast Extensions Library','sourcecoast','library','',0,'2.0.0','','http://www.sourcecoast.com/updates/sourcecoast.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=38'),(1143,7,0,0,'JFBConnect - Must be updated manually','JFBConnect for Joomla','com_jfbconnect','component','',1,'5.0.0','','http://www.sourcecoast.com/updates/jfbconnect.xml','http://www.sourcecoast.com/index.php?option=com_ars&view=release&id=39');
/*!40000 ALTER TABLE `gran_updates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_user_notes`
--

DROP TABLE IF EXISTS `gran_user_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_user_notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(100) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_user_id` int(10) unsigned NOT NULL,
  `modified_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `review_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_category_id` (`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_user_notes`
--

LOCK TABLES `gran_user_notes` WRITE;
/*!40000 ALTER TABLE `gran_user_notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_user_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_user_profiles`
--

DROP TABLE IF EXISTS `gran_user_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_user_profiles` (
  `user_id` int(11) NOT NULL,
  `profile_key` varchar(100) NOT NULL,
  `profile_value` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `idx_user_id_profile_key` (`user_id`,`profile_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Simple user profile storage table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_user_profiles`
--

LOCK TABLES `gran_user_profiles` WRITE;
/*!40000 ALTER TABLE `gran_user_profiles` DISABLE KEYS */;
INSERT INTO `gran_user_profiles` VALUES (778,'profile.city','\"\"',1),(778,'profile.gender','\"\"',3),(778,'profile.phone','\"\"',2),(780,'profile.city','\"Caracas\"',1),(780,'profile.gender','\"2\"',3),(780,'profile.newsletter','\"1\"',4),(780,'profile.phone','\"1231321\"',2),(781,'profile.city','\"Caracas\"',1),(781,'profile.gender','\"2\"',3),(781,'profile.phone','\"1231321\"',2),(782,'profile.city','\"Caracas\"',1),(782,'profile.gender','\"\"',3),(782,'profile.phone','\"1231321\"',2),(783,'profile.city','\"Caracas\"',1),(783,'profile.gender','\"2\"',3),(783,'profile.phone','\"12312312\"',2),(784,'profile.city','\"Caracas\"',1),(784,'profile.gender','\"\"',3),(784,'profile.phone','\"12312312\"',2),(785,'profile.city','\"\"',1),(785,'profile.gender','\"\"',3),(785,'profile.phone','\"\"',2),(786,'profile.city','\"Caracas\"',1),(786,'profile.gender','\"\"',3),(786,'profile.phone','\"12312312\"',2),(787,'profile.city','\"Caracas\"',1),(787,'profile.gender','\"\"',3),(787,'profile.newsletter','\"1\"',4),(787,'profile.phone','\"12312312\"',2),(788,'profile.city','\"Caracas\"',1),(788,'profile.gender','\"2\"',3),(788,'profile.phone','\"12312312\"',2),(789,'profile.city','\"Caracas\"',1),(789,'profile.gender','\"2\"',3),(789,'profile.newsletter','\"1\"',4),(789,'profile.phone','\"12312312\"',2),(790,'profile.city','\"Caracas\"',1),(790,'profile.gender','\"2\"',3),(790,'profile.phone','\"12312312\"',2),(791,'profile.city','\"Caracas\"',1),(791,'profile.gender','\"2\"',3),(791,'profile.newsletter','\"1\"',4),(791,'profile.phone','\"12312312\"',2),(792,'profile.city','\"Caracas\"',1),(792,'profile.gender','\"1\"',3),(792,'profile.phone','\"04122373233\"',2);
/*!40000 ALTER TABLE `gran_user_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_user_usergroup_map`
--

DROP TABLE IF EXISTS `gran_user_usergroup_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_user_usergroup_map` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Foreign Key to #__users.id',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Foreign Key to #__usergroups.id',
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_user_usergroup_map`
--

LOCK TABLES `gran_user_usergroup_map` WRITE;
/*!40000 ALTER TABLE `gran_user_usergroup_map` DISABLE KEYS */;
INSERT INTO `gran_user_usergroup_map` VALUES (778,8),(779,2),(780,2),(781,2),(782,2),(783,2),(784,2),(785,2),(786,2),(787,2),(788,2),(789,2),(790,2),(791,2),(792,2);
/*!40000 ALTER TABLE `gran_user_usergroup_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_usergroups`
--

DROP TABLE IF EXISTS `gran_usergroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_usergroups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Adjacency List Reference Id',
  `lft` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set lft.',
  `rgt` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set rgt.',
  `title` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_usergroup_parent_title_lookup` (`parent_id`,`title`),
  KEY `idx_usergroup_title_lookup` (`title`),
  KEY `idx_usergroup_adjacency_lookup` (`parent_id`),
  KEY `idx_usergroup_nested_set_lookup` (`lft`,`rgt`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_usergroups`
--

LOCK TABLES `gran_usergroups` WRITE;
/*!40000 ALTER TABLE `gran_usergroups` DISABLE KEYS */;
INSERT INTO `gran_usergroups` VALUES (1,0,1,18,'Public'),(2,1,6,15,'Registered'),(3,2,7,12,'Author'),(4,3,8,11,'Editor'),(5,4,9,10,'Publisher'),(6,1,2,5,'Manager'),(7,6,3,4,'Administrator'),(8,1,16,17,'Super Users');
/*!40000 ALTER TABLE `gran_usergroups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_users`
--

DROP TABLE IF EXISTS `gran_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(150) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `usertype` varchar(25) NOT NULL DEFAULT '',
  `block` tinyint(4) NOT NULL DEFAULT '0',
  `sendEmail` tinyint(4) DEFAULT '0',
  `registerDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastvisitDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activation` varchar(100) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  `lastResetTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Date of last password reset',
  `resetCount` int(11) NOT NULL DEFAULT '0' COMMENT 'Count of password resets since lastResetTime',
  PRIMARY KEY (`id`),
  KEY `usertype` (`usertype`),
  KEY `idx_name` (`name`),
  KEY `idx_block` (`block`),
  KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=793 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_users`
--

LOCK TABLES `gran_users` WRITE;
/*!40000 ALTER TABLE `gran_users` DISABLE KEYS */;
INSERT INTO `gran_users` VALUES (778,'Super User','admin','tgb.alebrun@gmail.com','ab673baa609e193163498880db28b39a:u2kaxdRThGuZTal9PtMbEl7q0SHfsTT5','deprecated',0,1,'2013-01-02 22:11:27','2013-03-01 23:35:16','0','{\"admin_style\":\"\",\"admin_language\":\"en-GB\",\"language\":\"\",\"editor\":\"\",\"helpsite\":\"\",\"timezone\":\"\"}','0000-00-00 00:00:00',0),(779,'Viejita1','vegatal1','robert.reimi+vegetales@gmail.com','9b468a2ba0a226d5101bb5cf374a4053:gzgrrFvUslewSLCYAtF7mQ1mTgzje4Nx','',0,0,'2013-02-01 21:52:40','0000-00-00 00:00:00','','{\"admin_style\":\"\",\"admin_language\":\"\",\"language\":\"\",\"editor\":\"\",\"helpsite\":\"\",\"timezone\":\"\"}','0000-00-00 00:00:00',0),(780,'Robert','robert.reimi+test1@gmail.com','robert.reimi+test1@gmail.com','e1713e312ce1aaf5c825f81e37bba403:TxLnLsE3gMKUsjDzujz0FTyf9nPkygE6','',0,0,'2013-02-13 22:44:29','0000-00-00 00:00:00','','{}','0000-00-00 00:00:00',0),(781,'Robert','robert.reimi+test3@gmail.com','robert.reimi+test3@gmail.com','7351ff1ef0fe04d07ae09ff17cd147cf:YSQRjqK8SyBXk8DDj5obPqrnV0HO3jjt','',0,0,'2013-02-14 13:53:46','0000-00-00 00:00:00','','{}','0000-00-00 00:00:00',0),(782,'Robert','robert.reimi+test4@gmail.com','robert.reimi+test4@gmail.com','5ad8902e12d1d63c728a95043cde9d4a:VFhEuzNAicOesljJ4Uhgffd8bfipNHJH','',1,0,'2013-02-14 14:00:17','0000-00-00 00:00:00','c889d88fafb4d13b352edcd90a2e1417','{}','0000-00-00 00:00:00',0),(783,'Robert','robert.reimi+test5@gmail.com','robert.reimi+test5@gmail.com','43939cc1abf8a4def26c38744fb1a637:jFutsqb8SVDKtyOhTbXO8lP2oH0mmYg3','',1,0,'2013-02-14 14:21:27','0000-00-00 00:00:00','bd8c424a6c142d7b4661943cd2926735','{}','0000-00-00 00:00:00',0),(784,'Robert','robert.reimi+test6@gmail.com','robert.reimi+test6@gmail.com','fc7e4867cb04db0c55fa28c5a6c6b6cc:UH3mTQv0Z6Ts7dnWgKFFM6iXD5iHiPTZ','',1,0,'2013-02-14 14:28:08','0000-00-00 00:00:00','ffeaf85e0b3e87b03859b448ada9f85f','{}','0000-00-00 00:00:00',0),(785,'Robert','robert.reimi+test7@gmail.com','robert.reimi+test7@gmail.com','1e36fc1952f8fbb28d60da2edd958897:ppPUuCwO6FJ8HXp8sIXsPYOT29X8JAqr','',1,0,'2013-02-14 14:32:22','0000-00-00 00:00:00','a3992297ac99fa1fdce787ee0cbdcbca','{}','0000-00-00 00:00:00',0),(786,'Robert','robert.reimi+test8@gmail.com','robert.reimi+test8@gmail.com','13758e9aa2293330ae59cf46d347f0e6:NkkF5O0ipmifbknmvChzFtC0CRBCsXZR','',1,0,'2013-02-14 14:38:01','0000-00-00 00:00:00','f72ddf2ee06346caeb85a658a259072d','{}','0000-00-00 00:00:00',0),(787,'Robert','robert.reimi+test9@gmail.com','robert.reimi+test9@gmail.com','d5d12eed2cd940536cbaa5334fd8e588:Bl6dqVLnEKYUQu6fkEfcSFcsbpDWd4o9','',1,0,'2013-02-14 14:41:59','0000-00-00 00:00:00','ddfe06621b41a5856da583d7a044f1e2','{}','0000-00-00 00:00:00',0),(788,'Robert','robert.reimi+test10@gmail.com','robert.reimi+test10@gmail.com','2673a6528cf82a403690dca1ee96b338:QBS3i1MC3qPzE9XrZu2vvg9ugNJYMiYY','',1,0,'2013-02-14 15:31:26','0000-00-00 00:00:00','3aed07bf3d1c4047527fd853ddb9fecc','{}','0000-00-00 00:00:00',0),(789,'Robert','robert.reimi+test11@gmail.com','robert.reimi+test11@gmail.com','4ea8f6b34bc1bcd65d4f96fb2793c2a8:pvYnM7GcSBVVIMPqBy9D1w35TUUCrWi2','',1,0,'2013-02-14 15:32:01','0000-00-00 00:00:00','7a2dadaaf345cc97ac1a3542b15618f0','{}','0000-00-00 00:00:00',0),(790,'Robert','robert.reimi+test13@gmail.com','robert.reimi+test13@gmail.com','c5c7bfb75c55d4bdb425e29160ee3366:sqejm5hbmY6KyD4Dok9SSPMdbqcXh4dy','',1,0,'2013-02-14 15:34:23','0000-00-00 00:00:00','64bd873c2d971fbcb06ac9a7124a0f01','{}','0000-00-00 00:00:00',0),(791,'Robert','robert.reimi+test14@gmail.com','robert.reimi+test14@gmail.com','8ab8addb82d35621aa0b5f6f14da613b:UiQ8t9ZPlzSsGqtpOuGbzG9BystEcRIc','',1,0,'2013-02-14 15:34:58','0000-00-00 00:00:00','a9d52eb9741b79cf8fe506fa5c92827d','{}','0000-00-00 00:00:00',0),(792,'Andrea Lebrún','tgb.alebrun+test@gmail.com','tgb.alebrun+test@gmail.com','fbc23ad8f689a1c083a30a8c702149e8:sfsIufJVOQvYuWUGB7s8vOI5krlkuy5F','',0,0,'2013-02-18 23:46:14','2013-03-01 16:26:51','','{\"admin_style\":\"\",\"admin_language\":\"\",\"language\":\"es-ES\",\"editor\":\"\",\"helpsite\":\"\",\"timezone\":\"\"}','0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `gran_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_viewlevels`
--

DROP TABLE IF EXISTS `gran_viewlevels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_viewlevels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `title` varchar(100) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `rules` varchar(5120) NOT NULL COMMENT 'JSON encoded access control.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_assetgroup_title_lookup` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_viewlevels`
--

LOCK TABLES `gran_viewlevels` WRITE;
/*!40000 ALTER TABLE `gran_viewlevels` DISABLE KEYS */;
INSERT INTO `gran_viewlevels` VALUES (1,'Public',0,'[1]'),(2,'Registered',1,'[6,2,8]'),(3,'Special',2,'[6,3,8]');
/*!40000 ALTER TABLE `gran_viewlevels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_weblinks`
--

DROP TABLE IF EXISTS `gran_weblinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_weblinks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `url` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hits` int(11) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(11) NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `access` int(11) NOT NULL DEFAULT '1',
  `params` text NOT NULL,
  `language` char(7) NOT NULL DEFAULT '',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `metadata` text NOT NULL,
  `featured` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Set if link is featured.',
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_weblinks`
--

LOCK TABLES `gran_weblinks` WRITE;
/*!40000 ALTER TABLE `gran_weblinks` DISABLE KEYS */;
/*!40000 ALTER TABLE `gran_weblinks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gran_widgetkit_widget`
--

DROP TABLE IF EXISTS `gran_widgetkit_widget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gran_widgetkit_widget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gran_widgetkit_widget`
--

LOCK TABLES `gran_widgetkit_widget` WRITE;
/*!40000 ALTER TABLE `gran_widgetkit_widget` DISABLE KEYS */;
INSERT INTO `gran_widgetkit_widget` VALUES (1,'slideshow','default','Home Slideshow','{\"type\":\"slideshow\",\"id\":1,\"name\":\"Home Slideshow\",\"settings\":{\"style\":\"default\",\"autoplay\":1,\"interval\":5000,\"width\":\"auto\",\"height\":\"auto\",\"duration\":500,\"index\":0,\"order\":\"default\",\"navigation\":1,\"buttons\":1,\"slices\":20,\"animated\":\"fade\",\"caption_animation_duration\":500},\"style\":\"default\",\"items\":{\"511e72f69adf8\":{\"title\":\"Granya\",\"content\":\"<a href=\\\"2013-01-07-15-57-05\\/informacion-y-talleres\\\"><img src=\\\"images\\/slideshow_granya.png\\\" border=\\\"0\\\" width=\\\"990\\\" height=\\\"445\\\" style=\\\"border: 0;\\\" \\/><\\/a>\",\"caption\":\"\"},\"511e747b509e8\":{\"title\":\"Banda G\\u00e1strica Virtual\",\"content\":\"<a href=\\\"2013-01-07-15-57-05\\/informacion-y-talleres\\\"><img src=\\\"images\\/slideshow_banda_gastrica.png\\\" border=\\\"0\\\" width=\\\"990\\\" height=\\\"445\\\" style=\\\"border: 0;\\\" \\/><\\/a>\",\"caption\":\"\"}}}','2013-02-15 17:48:04','2013-02-22 18:27:08');
/*!40000 ALTER TABLE `gran_widgetkit_widget` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-01 19:10:03
