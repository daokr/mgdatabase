/*
Navicat MySQL Data Transfer

Source Server         : ikcharm_ikphp
Source Server Version : 50051
Source Host           : mysqldb2.ehost-services.com:3306
Source Database       : ikcharm_mgdatabase

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-05-20 13:30:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ik_setting`
-- ----------------------------
DROP TABLE IF EXISTS `ik_setting`;
CREATE TABLE `ik_setting` (
  `name` char(32) NOT NULL default '' COMMENT '选项名字',
  `data` char(255) NOT NULL default '' COMMENT '选项内容',
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统管理配置';

-- ----------------------------
-- Records of ik_setting
-- ----------------------------
INSERT INTO `ik_setting` VALUES ('site_title', '爱客网(IKPHP)开源社区');
INSERT INTO `ik_setting` VALUES ('site_subtitle', '又一个爱客网(IKPHP)开源社区');
INSERT INTO `ik_setting` VALUES ('site_url', 'http://');
INSERT INTO `ik_setting` VALUES ('site_email', 'admin@admin.com');
INSERT INTO `ik_setting` VALUES ('site_icp', '正在备案中');
INSERT INTO `ik_setting` VALUES ('site_keywords', '12ik');
INSERT INTO `ik_setting` VALUES ('site_desc', '又一个爱客网(IKPHP)开源社区');
INSERT INTO `ik_setting` VALUES ('site_theme', 'blue');
INSERT INTO `ik_setting` VALUES ('isgzip', '0');
INSERT INTO `ik_setting` VALUES ('timezone', '8');
INSERT INTO `ik_setting` VALUES ('isinvite', '0');
INSERT INTO `ik_setting` VALUES ('charset', 'UTF-8');
INSERT INTO `ik_setting` VALUES ('integrate_code', 'default');
INSERT INTO `ik_setting` VALUES ('integrate_config', '');
INSERT INTO `ik_setting` VALUES ('avatar_size', '24,32,48,64,100,200');
INSERT INTO `ik_setting` VALUES ('attr_allow_exts', 'jpg,gif,png,jpeg');
INSERT INTO `ik_setting` VALUES ('attr_allow_size', '2048');
INSERT INTO `ik_setting` VALUES ('attach_path', 'data/upload/');
INSERT INTO `ik_setting` VALUES ('simg', 'a:2:{s:5:\"width\";s:3:\"120\";s:6:\"height\";s:3:\"120\";}');
INSERT INTO `ik_setting` VALUES ('mimg', 'a:2:{s:5:\"width\";s:3:\"500\";s:6:\"height\";s:3:\"500\";}');
INSERT INTO `ik_setting` VALUES ('bimg', 'a:2:{s:5:\"width\";s:4:\"1000\";s:6:\"height\";s:4:\"1000\";}');
