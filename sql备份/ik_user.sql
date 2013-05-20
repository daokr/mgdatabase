/*
Navicat MySQL Data Transfer

Source Server         : ikcharm_ikphp
Source Server Version : 50051
Source Host           : mysqldb2.ehost-services.com:3306
Source Database       : ikcharm_mgdatabase

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-05-20 13:16:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ik_user`
-- ----------------------------
DROP TABLE IF EXISTS `ik_user`;
CREATE TABLE `ik_user` (
  `userid` int(11) NOT NULL auto_increment COMMENT '用户ID',
  `password` char(32) NOT NULL default '' COMMENT '用户密码',
  `username` char(32) NOT NULL default '' COMMENT '用户名',
  `email` char(32) NOT NULL default '' COMMENT '用户email',
  `fuserid` int(11) NOT NULL default '0' COMMENT '来自邀请用户',
  `doname` char(32) NOT NULL default '',
  `sex` tinyint(1) NOT NULL default '0' COMMENT '性别',
  `phone` char(16) NOT NULL default '' COMMENT '电话号码',
  `roleid` int(11) NOT NULL default '1' COMMENT '角色ID',
  `areaid` int(11) NOT NULL default '0' COMMENT '区县ID',
  `path` char(32) NOT NULL default '' COMMENT '头像路径',
  `face` char(64) NOT NULL default '' COMMENT '会员头像',
  `signed` char(64) NOT NULL default '' COMMENT '签名',
  `blog` char(32) NOT NULL default '' COMMENT '博客',
  `about` char(255) NOT NULL default '' COMMENT '关于我',
  `ip` varchar(16) NOT NULL default '' COMMENT '登陆IP',
  `address` char(64) NOT NULL default '',
  `qq_openid` char(32) NOT NULL default '',
  `qq_access_token` char(32) NOT NULL default '' COMMENT 'access_token',
  `count_score` int(11) NOT NULL default '0' COMMENT '统计积分',
  `count_follow` int(11) NOT NULL default '0' COMMENT '统计用户跟随的',
  `count_followed` int(11) NOT NULL default '0' COMMENT '统计用户被跟随的',
  `isadmin` tinyint(1) NOT NULL default '0' COMMENT '是否是管理员',
  `isenable` tinyint(1) NOT NULL default '0' COMMENT '是否启用：0启用1禁用',
  `isverify` tinyint(1) NOT NULL default '0' COMMENT '0未验证1验证',
  `verifycode` char(11) NOT NULL default '' COMMENT '验证码',
  `addtime` int(11) NOT NULL default '0' COMMENT '创建时间',
  `uptime` int(11) default '0' COMMENT '登陆时间',
  PRIMARY KEY  (`userid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  KEY `qq_openid` (`qq_openid`),
  KEY `fuserid` (`fuserid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户';

-- ----------------------------
-- Records of ik_user
-- ----------------------------
INSERT INTO `ik_user` VALUES ('1', '670b14728ad9902aecba32e22fa4f6bd', '王利军', '12ik@sina.cn', '0', '12ik', '0', '', '1', '0', '', '', '', '', '', '124.238.175.9', '北京', '', '', '0', '0', '0', '0', '0', '0', '', '1365760408', '1368884585');
INSERT INTO `ik_user` VALUES ('2', '0d4e93e2dfcf081326ed25218e9143e6', '王建国', 'wrcrpp@hotmail.com', '0', 'wrcrpp', '0', '', '1', '0', '', '', '', '', '', '60.171.124.70', '', '', '', '0', '0', '0', '0', '0', '0', '', '1367585817', '1368714594');
INSERT INTO `ik_user` VALUES ('3', '125d0d502244655321fd3c3daf0dc440', '方明刚', '827465359@qq.com', '0', '827465359', '0', '', '1', '0', '', '', '', '', '', '58.242.129.253', '', '', '', '0', '0', '0', '0', '0', '0', '', '1368148747', '1368922882');
