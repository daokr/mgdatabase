/*
Navicat MySQL Data Transfer

Source Server         : ikcharm_ikphp
Source Server Version : 50051
Source Host           : mysqldb2.ehost-services.com:3306
Source Database       : ikcharm_mgdatabase

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-05-20 13:30:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ik_param`
-- ----------------------------
DROP TABLE IF EXISTS `ik_param`;
CREATE TABLE `ik_param` (
  `paramid` int(11) NOT NULL auto_increment,
  `itemid` int(11) NOT NULL default '0',
  `paramname` char(16) NOT NULL default '',
  `count_user` int(11) NOT NULL default '0',
  `isenable` tinyint(1) NOT NULL default '0' COMMENT '是否可用',
  `uptime` int(11) NOT NULL default '0' COMMENT '更新时间',
  PRIMARY KEY  (`paramid`),
  UNIQUE KEY `paramname` (`paramname`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ik_param
-- ----------------------------
INSERT INTO `ik_param` VALUES ('1', '2', '中国', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('2', '2', '美国', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('3', '2', '日本', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('4', '1', '天天', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('5', '1', '妈妈', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('6', '1', '呵呵呵', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('7', '1', '蓝蓝蓝', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('8', '1', '斑斑驳驳', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('9', '1', '后哈哈哈后', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('10', '1', '美丽', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('11', '1', '哈哈', '0', '0', '0');
INSERT INTO `ik_param` VALUES ('12', '1', '方法', '0', '0', '0');
