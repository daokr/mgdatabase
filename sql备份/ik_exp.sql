/*
Navicat MySQL Data Transfer

Source Server         : ikcharm_ikphp
Source Server Version : 50051
Source Host           : mysqldb2.ehost-services.com:3306
Source Database       : ikcharm_mgdatabase

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-05-20 13:29:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ik_exp`
-- ----------------------------
DROP TABLE IF EXISTS `ik_exp`;
CREATE TABLE `ik_exp` (
  `id` int(11) NOT NULL auto_increment COMMENT '消息ID',
  `userid` int(11) NOT NULL default '0' COMMENT '发送用户ID',
  `itemid` int(11) NOT NULL default '0' COMMENT 'itemid',
  `title` char(64) NOT NULL default '' COMMENT '实验名',
  `author` char(64) NOT NULL default '',
  `content` text NOT NULL,
  `exfile` char(255) NOT NULL default '' COMMENT '附件',
  `picfile` char(255) NOT NULL default '' COMMENT '图片附件',
  `downcount` int(11) NOT NULL default '0',
  `commentcount` int(11) NOT NULL default '0' COMMENT '评论次数',
  `isaudit` tinyint(1) NOT NULL default '0' COMMENT '是否审核',
  `isoriginal` tinyint(1) NOT NULL default '0' COMMENT '是否原创',
  `addtime` int(11) NOT NULL default '0' COMMENT '添加时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='文献';

-- ----------------------------
-- Records of ik_exp
-- ----------------------------
INSERT INTO `ik_exp` VALUES ('1', '1', '2', '测试熟料', '小麦', '测试', '', '', '0', '0', '0', '1', '1367898362');
INSERT INTO `ik_exp` VALUES ('2', '1', '1', '铁测试', '小麦', '弟弟', '', '', '0', '0', '0', '1', '1367898396');
INSERT INTO `ik_exp` VALUES ('3', '1', '1', '美国防部报告：中国公布钓鱼岛领海基线不恰当', '王利军', '据日本《产经新闻》5月7日报道，美国国防部当地时间6日发布了有关中国军事动向的年度报告。有关钓鱼岛问题，报告指出中国于2012年9月公布的钓鱼岛领海基线“不恰当”，并称虽然美国政府对钓鱼岛的主权问题不持特定的立场，但“中国方面的主张在法理上存在问题”。\r\n\r\n　　另外，报告再次向中方“泼脏水”，称2012年包括美国政府在内的许多电脑曾遭到外部攻击，这很可能与中国政府以及中国军方有直接的关系。报告甚至认为，中方很可能会通过这些行为收集情报，并最终应用到中国的军备上。\r\n\r\n　　关于钓鱼岛问题，中国外交部发言人多次强调，钓鱼岛及其附属岛屿自古以来就是中国的固有领土，有史为凭、有法为据。中方不会容忍任何侵害国家主权和领土完整的行径。中国驻美大使崔天凯近日明确强调，在钓鱼岛问题上，挑起紧张局势、加剧紧张局势的是日本方面，采取所谓“单方面”或者“胁迫性行动”的也是日本方面。所以在这个问题上，事实和是非都很清楚。希望其他方面不要去搬日本的这块石头，更不要让这块石头砸了自己的脚。千万不要因小失大，因为眼前一时的需要而引来长期的祸害。', '', '', '0', '0', '0', '1', '1367904766');
INSERT INTO `ik_exp` VALUES ('4', '1', '1', '北京出租车调价听证：起步价上涨3元 燃油费下调', '网络联盟', '　记者从北京市发改委了解到，听证会将公布两套出租车调价方案，两套方案对于起步价的调整相同，都是由现行的10元涨到13元。\r\n\r\n　　同时，乘客乘坐出租车，里程如果超过起步价，原来要加收3元燃油附加费，现在改为对全部乘客加收1元燃油附加费。那么，这就意味着对于乘坐3公里以上的乘客，起步价相当于增加了1元，这部分的乘客占乘客总量的70%以上。\r\n\r\n　　而每公里的里程价格调整有两套方案，一个是从现在的2元提高到2.3元，另一个是提高到2.6元。', '', 'data/upload/exps/picfile/2013/yR8yI44oO8u0u414.jpg', '0', '0', '0', '1', '1367904851');

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
