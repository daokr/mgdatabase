/*
Navicat MySQL Data Transfer

Source Server         : ikcharm_ikphp
Source Server Version : 50051
Source Host           : mysqldb2.ehost-services.com:3306
Source Database       : ikcharm_mgdatabase

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-05-20 13:28:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ik_cate`
-- ----------------------------
DROP TABLE IF EXISTS `ik_cate`;
CREATE TABLE `ik_cate` (
  `cateid` int(11) NOT NULL auto_increment COMMENT '分类ID',
  `catename` char(32) NOT NULL default '' COMMENT '分类名称',
  `orderid` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`cateid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ik_cate
-- ----------------------------
INSERT INTO `ik_cate` VALUES ('1', '金属元素', '0');
INSERT INTO `ik_cate` VALUES ('2', '高分子', '0');
INSERT INTO `ik_cate` VALUES ('4', '陶瓷', '0');
