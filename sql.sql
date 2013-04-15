DROP TABLE IF EXISTS `ik_cate`;
CREATE TABLE `ik_cate` (
  `cateid` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `catename` char(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `orderid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cateid`),
  KEY `nameid` (`nameid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `ik_item`;
CREATE TABLE `ik_item` (
  `itemid` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `cateid` char(30) NOT NULL DEFAULT '' COMMENT '频道id',    
  `itemname` char(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `orderid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='项目';