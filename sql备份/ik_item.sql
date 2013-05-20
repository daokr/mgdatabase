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
-- Table structure for `ik_item`
-- ----------------------------
DROP TABLE IF EXISTS `ik_item`;
CREATE TABLE `ik_item` (
  `itemid` int(11) NOT NULL auto_increment COMMENT '分类ID',
  `cateid` char(30) NOT NULL default '' COMMENT '频道id',
  `itemname` char(32) NOT NULL default '' COMMENT '分类名称',
  `orderid` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='项目';

-- ----------------------------
-- Records of ik_item
-- ----------------------------
INSERT INTO `ik_item` VALUES ('1', '1', '铁元素', '1');
INSERT INTO `ik_item` VALUES ('2', '2', '聚合物', '3');
INSERT INTO `ik_item` VALUES ('3', '4', 'WC', '0');
