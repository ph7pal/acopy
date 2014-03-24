-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2014 年 03 月 24 日 05:41
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `zmfcms`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `pre_ads`
-- 

CREATE TABLE `pre_ads` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL default '',
  `attachid` varchar(255) NOT NULL default '',
  `width` varchar(10) NOT NULL default '',
  `height` varchar(10) NOT NULL default '',
  `description` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL default '0',
  `start_time` int(10) unsigned NOT NULL default '0',
  `expired_time` int(10) unsigned NOT NULL default '0',
  `position` char(40) NOT NULL default '',
  `order` int(10) unsigned NOT NULL default '0',
  `status` tinyint(1) NOT NULL,
  `cTime` int(10) unsigned NOT NULL default '0',
  `classify` char(16) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 表的结构 `pre_attachments`
-- 

CREATE TABLE `pre_attachments` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `uid` int(11) unsigned NOT NULL,
  `logid` int(11) unsigned NOT NULL,
  `filePath` varchar(255) NOT NULL,
  `fileDesc` varchar(255) NOT NULL,
  `fileSize` char(32) NOT NULL,
  `width` smallint(5) unsigned NOT NULL,
  `height` smallint(5) unsigned NOT NULL,
  `classify` varchar(255) NOT NULL,
  `covered` tinyint(1) NOT NULL,
  `hits` int(11) unsigned NOT NULL,
  `cTime` int(11) unsigned NOT NULL,
  `status` tinyint(3) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `logid` (`logid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;


-- 
-- 表的结构 `pre_columns`
-- 

CREATE TABLE `pre_columns` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `belongid` int(10) unsigned NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `title` varchar(100) NOT NULL,
  `second_title` varchar(100) NOT NULL default '',
  `classify` char(32) NOT NULL default '',
  `position` char(32) NOT NULL,
  `url` varchar(255) NOT NULL default '',
  `attachid` int(10) unsigned NOT NULL default '0',
  `order` int(10) unsigned NOT NULL default '0',
  `hits` int(10) unsigned NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  `cTime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

-- --------------------------------------------------------

-- 
-- 表的结构 `pre_config`
-- 

CREATE TABLE `pre_config` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `value` text,
  `description` varchar(255) NOT NULL default '',
  `classify` char(16) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- 导出表中的数据 `pre_config`
-- 

INSERT INTO `pre_config` VALUES (5, 'sitename', '新灵旅行', '', 'baseinfo');
INSERT INTO `pre_config` VALUES (6, 'shortTitle', '带上新的生活去旅行', '', 'baseinfo');
INSERT INTO `pre_config` VALUES (7, 'domain', 'http://www.newsoul.cn', '', 'baseinfo');
INSERT INTO `pre_config` VALUES (8, 'address', '重庆市江北观音桥', '', 'siteinfo');
INSERT INTO `pre_config` VALUES (9, 'phone', '023-12345678', '', 'siteinfo');
INSERT INTO `pre_config` VALUES (10, 'email', 'admin@admin.com', '', 'siteinfo');
INSERT INTO `pre_config` VALUES (11, 'beian', '渝备12345678', '', 'siteinfo');
INSERT INTO `pre_config` VALUES (12, 'copyright', '2012-2013', '', 'siteinfo');

-- --------------------------------------------------------

-- 
-- 表的结构 `pre_group_powers`
-- 

CREATE TABLE `pre_group_powers` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `gid` varchar(50) NOT NULL,
  `powers` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

-- 
-- 导出表中的数据 `pre_group_powers`
-- 

INSERT INTO `pre_group_powers` VALUES (1, '4', 'checksetting');
INSERT INTO `pre_group_powers` VALUES (2, '4', 'setting');
INSERT INTO `pre_group_powers` VALUES (3, '4', 'addcolumns');
INSERT INTO `pre_group_powers` VALUES (4, '4', 'editcolumns');
INSERT INTO `pre_group_powers` VALUES (5, '4', 'delcolumns');
INSERT INTO `pre_group_powers` VALUES (6, '4', 'upload');
INSERT INTO `pre_group_powers` VALUES (7, '4', 'editattachments');
INSERT INTO `pre_group_powers` VALUES (8, '4', 'delattachments');
INSERT INTO `pre_group_powers` VALUES (9, '4', 'edittags');
INSERT INTO `pre_group_powers` VALUES (10, '4', 'deltags');
INSERT INTO `pre_group_powers` VALUES (11, '4', 'editcomments');
INSERT INTO `pre_group_powers` VALUES (12, '4', 'delcomments');
INSERT INTO `pre_group_powers` VALUES (13, '5', 'checksetting');
INSERT INTO `pre_group_powers` VALUES (14, '5', 'setting');
INSERT INTO `pre_group_powers` VALUES (15, '5', 'addcolumns');
INSERT INTO `pre_group_powers` VALUES (16, '5', 'editcolumns');
INSERT INTO `pre_group_powers` VALUES (17, '5', 'delcolumns');
INSERT INTO `pre_group_powers` VALUES (18, '5', 'addposts');
INSERT INTO `pre_group_powers` VALUES (19, '5', 'editposts');
INSERT INTO `pre_group_powers` VALUES (20, '5', 'delposts');
INSERT INTO `pre_group_powers` VALUES (21, '5', 'addusergroup');
INSERT INTO `pre_group_powers` VALUES (22, '5', 'editusergroup');
INSERT INTO `pre_group_powers` VALUES (23, '5', 'delusergroup');
INSERT INTO `pre_group_powers` VALUES (24, '5', 'addusers');
INSERT INTO `pre_group_powers` VALUES (25, '5', 'editusers');
INSERT INTO `pre_group_powers` VALUES (26, '5', 'delusers');
INSERT INTO `pre_group_powers` VALUES (27, '5', 'addlink');
INSERT INTO `pre_group_powers` VALUES (28, '5', 'editlink');
INSERT INTO `pre_group_powers` VALUES (29, '5', 'dellink');
INSERT INTO `pre_group_powers` VALUES (30, '5', 'addads');
INSERT INTO `pre_group_powers` VALUES (31, '5', 'editads');
INSERT INTO `pre_group_powers` VALUES (32, '5', 'delads');
INSERT INTO `pre_group_powers` VALUES (33, '5', 'addalbum');
INSERT INTO `pre_group_powers` VALUES (34, '5', 'editalbum');
INSERT INTO `pre_group_powers` VALUES (35, '5', 'delalbum');
INSERT INTO `pre_group_powers` VALUES (36, '5', 'upload');
INSERT INTO `pre_group_powers` VALUES (37, '5', 'editattachments');
INSERT INTO `pre_group_powers` VALUES (38, '5', 'delattachments');
INSERT INTO `pre_group_powers` VALUES (39, '5', 'deluseraction');
INSERT INTO `pre_group_powers` VALUES (40, '5', 'edittags');
INSERT INTO `pre_group_powers` VALUES (41, '5', 'deltags');
INSERT INTO `pre_group_powers` VALUES (42, '5', 'addcomments');
INSERT INTO `pre_group_powers` VALUES (43, '5', 'editcomments');
INSERT INTO `pre_group_powers` VALUES (44, '5', 'delcomments');
INSERT INTO `pre_group_powers` VALUES (45, '5', 'addquestions');
INSERT INTO `pre_group_powers` VALUES (46, '5', 'editquestions');
INSERT INTO `pre_group_powers` VALUES (47, '5', 'delquestions');

-- --------------------------------------------------------

-- 
-- 表的结构 `pre_link`
-- 

CREATE TABLE `pre_link` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `classify` char(32) NOT NULL,
  `attachid` int(10) NOT NULL default '0',
  `status` tinyint(1) NOT NULL,
  `order` int(10) unsigned NOT NULL default '0',
  `hits` int(10) unsigned NOT NULL default '0',
  `cTime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

-- 
-- 表的结构 `pre_posts`
-- 

CREATE TABLE `pre_posts` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `colid` smallint(5) unsigned NOT NULL default '0',
  `uid` int(10) unsigned NOT NULL default '1',
  `nickname` varchar(30) NOT NULL default '',
  `author` varchar(100) NOT NULL default '',
  `title` varchar(255) NOT NULL,
  `second_title` varchar(255) NOT NULL default '',
  `name` char(50) NOT NULL default '',
  `albumid` int(11) NOT NULL,
  `title_style` varchar(255) NOT NULL default '',
  `seo_title` varchar(255) NOT NULL default '',
  `seo_description` varchar(255) NOT NULL default '',
  `seo_keywords` varchar(255) NOT NULL default '',
  `intro` mediumtext NOT NULL,
  `content` text NOT NULL,
  `copy_from` varchar(100) NOT NULL default '',
  `copy_url` varchar(255) NOT NULL default '',
  `redirect_url` varchar(255) NOT NULL default '',
  `hits` int(10) unsigned NOT NULL default '1',
  `order` int(10) unsigned NOT NULL default '0',
  `reply_allow` tinyint(1) NOT NULL default '1',
  `status` tinyint(1) NOT NULL,
  `last_update_time` int(10) unsigned NOT NULL default '0',
  `cTime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

-- --------------------------------------------------------

-- --------------------------------------------------------

-- 
-- 表的结构 `pre_users`
-- 

CREATE TABLE `pre_users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` char(50) NOT NULL,
  `password` char(32) NOT NULL,
  `truename` varchar(100) NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL,
  `email` varchar(100) NOT NULL,
  `qq` varchar(15) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `last_login_ip` char(16) NOT NULL,
  `last_login_time` int(10) NOT NULL,
  `login_count` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cTime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- 导出表中的数据 `pre_users`
-- 

INSERT INTO `pre_users` VALUES (2, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 5, '', '', '', '', '2130706433', 0, 0, 1, 1383317699);
INSERT INTO `pre_users` VALUES (3, '', '', '', 0, '', '', '', '', '', 0, 0, 0, 1383321699);

-- --------------------------------------------------------

-- 
-- 表的结构 `pre_user_action`
-- 

CREATE TABLE `pre_user_action` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `uid` int(11) unsigned NOT NULL,
  `logid` int(11) unsigned NOT NULL,
  `classify` char(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cTime` int(11) unsigned NOT NULL,
  `ip` char(16) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `pre_user_action`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `pre_user_group`
-- 

CREATE TABLE `pre_user_group` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `powers` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cTime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `pre_user_group`
-- 

INSERT INTO `pre_user_group` VALUES (5, '系统', 'zmf', 1, 1383321578);
INSERT INTO `pre_user_group` VALUES (4, '管理员', 'zmf', 1, 1383317395);
