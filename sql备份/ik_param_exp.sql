/*
Navicat MySQL Data Transfer

Source Server         : ikcharm_ikphp
Source Server Version : 50051
Source Host           : mysqldb2.ehost-services.com:3306
Source Database       : ikcharm_mgdatabase

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-05-20 13:30:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ik_param_exp`
-- ----------------------------
DROP TABLE IF EXISTS `ik_param_exp`;
CREATE TABLE `ik_param_exp` (
  `expid` int(11) NOT NULL default '0',
  `paramid` int(11) NOT NULL default '0',
  UNIQUE KEY `expid_2` (`expid`,`paramid`),
  KEY `expid` (`expid`),
  KEY `paramid` (`paramid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ik_param_exp
-- ----------------------------
INSERT INTO `ik_param_exp` VALUES ('1', '1');
INSERT INTO `ik_param_exp` VALUES ('1', '2');
INSERT INTO `ik_param_exp` VALUES ('1', '3');
INSERT INTO `ik_param_exp` VALUES ('2', '4');
INSERT INTO `ik_param_exp` VALUES ('2', '5');
INSERT INTO `ik_param_exp` VALUES ('3', '6');
INSERT INTO `ik_param_exp` VALUES ('3', '7');
INSERT INTO `ik_param_exp` VALUES ('3', '8');
INSERT INTO `ik_param_exp` VALUES ('3', '9');
INSERT INTO `ik_param_exp` VALUES ('4', '10');
INSERT INTO `ik_param_exp` VALUES ('4', '11');
INSERT INTO `ik_param_exp` VALUES ('4', '12');
