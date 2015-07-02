/*
 Navicat Premium Data Transfer

 Source Server         : MAMP
 Source Server Type    : MySQL
 Source Server Version : 50534
 Source Host           : localhost
 Source Database       : test_escale

 Target Server Type    : MySQL
 Target Server Version : 50534
 File Encoding         : utf-8

 Date: 07/02/2015 19:55:03 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `access_log`
-- ----------------------------
DROP TABLE IF EXISTS `access_log`;
CREATE TABLE `access_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visitor_id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approximate_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `real_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `access_log`
-- ----------------------------
BEGIN;
INSERT INTO `access_log` VALUES ('1', '1', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:29:43', '2015-07-02 20:29:43'), ('2', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:29:48', '2015-07-02 20:29:48'), ('3', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:33:02', '2015-07-02 20:33:02'), ('4', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:33:02', '2015-07-02 20:33:02'), ('5', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:33:03', '2015-07-02 20:33:03'), ('6', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:33:04', '2015-07-02 20:33:04'), ('7', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:33:05', '2015-07-02 20:33:05'), ('8', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:33:06', '2015-07-02 20:33:06'), ('9', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:33:07', '2015-07-02 20:33:07'), ('10', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:33:08', '2015-07-02 20:33:08'), ('11', '2', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:34:26', '2015-07-02 20:34:26'), ('12', '3', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 20:34:34', '2015-07-02 20:34:34'), ('13', '3', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:51:31', '2015-07-02 21:51:31'), ('14', '3', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:51:42', '2015-07-02 21:51:42'), ('15', '3', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:59:15', '2015-07-02 21:59:15'), ('16', '3', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:59:16', '2015-07-02 21:59:16'), ('17', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:59:19', '2015-07-02 21:59:19'), ('18', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:59:27', '2015-07-02 21:59:27'), ('19', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:59:31', '2015-07-02 21:59:31'), ('20', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:59:33', '2015-07-02 21:59:33'), ('21', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:59:44', '2015-07-02 21:59:44'), ('22', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 21:59:46', '2015-07-02 21:59:46'), ('23', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:02:10', '2015-07-02 22:02:10'), ('24', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:03:03', '2015-07-02 22:03:03'), ('25', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:03:28', '2015-07-02 22:03:28'), ('26', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:03:52', '2015-07-02 22:03:52'), ('27', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:04:14', '2015-07-02 22:04:14'), ('28', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:05:10', '2015-07-02 22:05:10'), ('29', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:05:30', '2015-07-02 22:05:30'), ('30', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:06:47', '2015-07-02 22:06:47'), ('31', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:06:48', '2015-07-02 22:06:48'), ('32', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:07:02', '2015-07-02 22:07:02'), ('33', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:07:04', '2015-07-02 22:07:04'), ('34', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:07:05', '2015-07-02 22:07:05'), ('35', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:07:15', '2015-07-02 22:07:15'), ('36', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:07:18', '2015-07-02 22:07:18'), ('37', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:07:19', '2015-07-02 22:07:19'), ('38', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:08:20', '2015-07-02 22:08:20'), ('39', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:10:36', '2015-07-02 22:10:36'), ('40', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:10:46', '2015-07-02 22:10:46'), ('41', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:11:17', '2015-07-02 22:11:17'), ('42', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:11:26', '2015-07-02 22:11:26'), ('43', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:11:39', '2015-07-02 22:11:39'), ('44', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:12:01', '2015-07-02 22:12:01'), ('45', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:13:26', '2015-07-02 22:13:26'), ('46', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:13:44', '2015-07-02 22:13:44'), ('47', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:13:45', '2015-07-02 22:13:45'), ('48', '4', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:13:48', '2015-07-02 22:13:48'), ('49', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:13:56', '2015-07-02 22:13:56'), ('50', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:14:31', '2015-07-02 22:14:31'), ('51', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:14:33', '2015-07-02 22:14:33'), ('52', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:15:41', '2015-07-02 22:15:41'), ('53', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:15:59', '2015-07-02 22:15:59'), ('54', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:16:12', '2015-07-02 22:16:12'), ('55', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:16:22', '2015-07-02 22:16:22'), ('56', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:17:55', '2015-07-02 22:17:55'), ('57', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:18:07', '2015-07-02 22:18:07'), ('58', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:18:44', '2015-07-02 22:18:44'), ('59', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:22:08', '2015-07-02 22:22:08'), ('60', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:23:40', '2015-07-02 22:23:40'), ('61', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:23:52', '2015-07-02 22:23:52'), ('62', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:24:15', '2015-07-02 22:24:15'), ('63', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:24:51', '2015-07-02 22:24:51'), ('64', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:25:25', '2015-07-02 22:25:25'), ('65', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:25:33', '2015-07-02 22:25:33'), ('66', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:34:28', '2015-07-02 22:34:28'), ('67', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:34:32', '2015-07-02 22:34:32'), ('68', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:34:33', '2015-07-02 22:34:33'), ('69', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:35:53', '2015-07-02 22:35:53'), ('70', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:39:10', '2015-07-02 22:39:10'), ('71', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:39:29', '2015-07-02 22:39:29'), ('72', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:39:43', '2015-07-02 22:39:43'), ('73', '5', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:40:00', '2015-07-02 22:40:00'), ('74', '6', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:40:16', '2015-07-02 22:40:16'), ('75', '6', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:40:27', '2015-07-02 22:40:27'), ('76', '6', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:40:36', '2015-07-02 22:40:36'), ('77', '6', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:40:39', '2015-07-02 22:40:39'), ('78', '6', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:40:44', '2015-07-02 22:40:44'), ('79', '6', '200.158.212.172', 'Brazil    [-23.5477,-46.6358]', '', '2015-07-02 22:40:53', '2015-07-02 22:40:53');
COMMIT;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `migrations`
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1'), ('2014_10_12_100000_create_password_resets_table', '1'), ('2015_07_02_162355_create_access_logs_table', '1'), ('2015_07_02_172355_create_logs_related_tables', '1');
COMMIT;

-- ----------------------------
--  Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'Admin', 'admin@test.com', '$2y$10$49IuYwgdHtnmhV6lbwUs5.e8NLCURmxroYJeOCCrwyCSsinw6ojui', null, '2015-07-02 20:26:45', '2015-07-02 20:26:45');
COMMIT;

-- ----------------------------
--  Table structure for `visitor`
-- ----------------------------
DROP TABLE IF EXISTS `visitor`;
CREATE TABLE `visitor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `visitor`
-- ----------------------------
BEGIN;
INSERT INTO `visitor` VALUES ('1', 'hjY', '', '', '2015-07-02 20:29:18', '2015-07-02 20:29:18'), ('2', 'JaN', '01311-200', 'São Paulo', '2015-07-02 20:29:48', '2015-07-02 20:34:26'), ('3', 'IOU', '', '', '2015-07-02 20:34:34', '2015-07-02 21:51:42'), ('4', '7lE', '', '', '2015-07-02 21:59:17', '2015-07-02 22:11:39'), ('5', '86m', '01311-200', 'São Paulo', '2015-07-02 22:13:52', '2015-07-02 22:40:00'), ('6', 'Bie', '06950-000', 'Juquitiba', '2015-07-02 22:40:14', '2015-07-02 22:40:53');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
