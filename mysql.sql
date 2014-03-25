-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2014 年 03 月 25 日 12:46
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `acopy`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- 导出表中的数据 `pre_ads`
-- 

INSERT INTO `pre_ads` VALUES (6, '全屏展示一', 'http://newsoul.cn', '14', '', '', '这里是一些描述', 0, 0, 0, 'topbar', 0, 1, 1395751264, 'flash');
INSERT INTO `pre_ads` VALUES (7, '全屏展示二', '', '15', '', '', '这里是一些描述', 0, 0, 0, 'topbar', 0, 1, 1395751354, 'flash');
INSERT INTO `pre_ads` VALUES (8, '全屏展示三', '', '16', '', '', '', 0, 0, 0, 'topbar', 0, 1, 1395751386, 'flash');

-- --------------------------------------------------------

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- 导出表中的数据 `pre_attachments`
-- 

INSERT INTO `pre_attachments` VALUES (12, 2, 27, '533172a188dd8.jpg', '533172a188dd8.jpg', '', 0, 0, 'coverimg', 0, 0, 1395749537, 1);
INSERT INTO `pre_attachments` VALUES (13, 2, 28, '533172b5f1ec4.jpg', '533172b5f1ec4.jpg', '', 0, 0, 'coverimg', 0, 0, 1395749557, 1);
INSERT INTO `pre_attachments` VALUES (14, 2, 6, '533179b08b09c.jpg', '533179b08b09c.jpg', '', 0, 0, 'ads', 0, 0, 1395751344, 1);
INSERT INTO `pre_attachments` VALUES (15, 2, 7, '533179d2ecdc7.jpg', '533179d2ecdc7.jpg', '', 0, 0, 'ads', 0, 0, 1395751378, 1);
INSERT INTO `pre_attachments` VALUES (16, 2, 8, '53317a142d1c7.jpg', '53317a142d1c7.jpg', '', 0, 0, 'ads', 0, 0, 1395751444, 1);

-- --------------------------------------------------------

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- 导出表中的数据 `pre_columns`
-- 

INSERT INTO `pre_columns` VALUES (16, 0, 'guan yu wo men ', '关于我们', '', 'page', 'topbar', '', 0, 0, 0, 1, 1395747268);
INSERT INTO `pre_columns` VALUES (17, 0, ' gong xiang ', 'FTP共享', '', 'thumb', 'topbar', '', 0, 0, 0, 1, 1395747330);
INSERT INTO `pre_columns` VALUES (18, 17, '  ', '2014/02', '', 'thumb', 'main', '', 0, 0, 0, 1, 1395747353);
INSERT INTO `pre_columns` VALUES (19, 17, '  ', '2014/03', '', 'thumb', 'main', '', 0, 0, 0, 1, 1395748305);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

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
INSERT INTO `pre_config` VALUES (13, 'baseurl', 'http://localhost/acopy/', '', 'baseinfo');
INSERT INTO `pre_config` VALUES (14, 'version', 'Alpha 1.0', '', 'baseinfo');
INSERT INTO `pre_config` VALUES (15, 'imgUploadNum', '1', '', 'upload');
INSERT INTO `pre_config` VALUES (16, 'imgMinWidth', '300', '', 'upload');
INSERT INTO `pre_config` VALUES (17, 'imgMinHeight', '300', '', 'upload');
INSERT INTO `pre_config` VALUES (18, 'imgAllowTypes', '*.jpg;*.png;*.jpeg', '', 'upload');
INSERT INTO `pre_config` VALUES (19, 'imgThumbSize', '124,200,300,600,origin', '', 'upload');
INSERT INTO `pre_config` VALUES (20, 'imgMaxSize', '1024000', '', 'upload');
INSERT INTO `pre_config` VALUES (21, 'imgQuality', '80', '', 'upload');
INSERT INTO `pre_config` VALUES (22, 'closeSite', '1', '', 'base');
INSERT INTO `pre_config` VALUES (23, 'mobile', '1', '', 'base');
INSERT INTO `pre_config` VALUES (24, 'userDefaultGroup', '5', '', 'base');
INSERT INTO `pre_config` VALUES (25, 'attachDir', 'http://localhost/acopy/attachments/', '', 'base');
INSERT INTO `pre_config` VALUES (26, 'service_aim_cn', '致力于提升客户品牌形象、实现客户商业目标!', '', 'base');
INSERT INTO `pre_config` VALUES (27, 'service_aim_en', 'Commitment to enhance customer brand image,customer business goals!', '', 'base');
INSERT INTO `pre_config` VALUES (28, 'perPageNum', '10', '', 'base');
INSERT INTO `pre_config` VALUES (29, 'logo', 'common/images/logo.png', '', 'base');
INSERT INTO `pre_config` VALUES (30, 'closeSiteReason', '系统正在维护中，请稍后再访问！', '', 'base');

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

-- 
-- 导出表中的数据 `pre_link`
-- 


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
  `attachid` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

-- 
-- 导出表中的数据 `pre_posts`
-- 

INSERT INTO `pre_posts` VALUES (27, 18, 2, '', '', '这是一篇测试文章', '', '', 0, '', '', '', '', '', '', '', '', 'coverimg/600/58/52b5a7391f539.jpg', 1, 0, 1, 1, 0, 1395749489, 12);
INSERT INTO `pre_posts` VALUES (28, 18, 2, '', '', '这篇文章是没有正文的', '', '', 0, '', '', '', '', '', '', '', '', 'coverimg/600/58/52b5a7391f539.jpg', 6, 0, 1, 1, 0, 1395749544, 13);
INSERT INTO `pre_posts` VALUES (29, 19, 2, '', '', '难道我可以写文章么', '', '', 0, '', '', '', '', '', '', '', '', 'coverimg/600/58/52b5a7391f539.jpg', 1, 0, 1, 1, 0, 1395751146, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- 导出表中的数据 `pre_user_action`
-- 

INSERT INTO `pre_user_action` VALUES (1, 2, 16, 'editcolumns', '编辑栏目', 1395747327, '2130706433');
INSERT INTO `pre_user_action` VALUES (2, 2, 17, 'editcolumns', '编辑栏目', 1395747351, '2130706433');
INSERT INTO `pre_user_action` VALUES (3, 2, 18, 'editcolumns', '编辑栏目', 1395747369, '2130706433');
INSERT INTO `pre_user_action` VALUES (4, 2, 0, 'setting', '更新设置', 1395748048, '2130706433');
INSERT INTO `pre_user_action` VALUES (5, 2, 0, 'setting', '更新设置', 1395748061, '2130706433');
INSERT INTO `pre_user_action` VALUES (6, 2, 0, 'setting', '更新设置', 1395748082, '2130706433');
INSERT INTO `pre_user_action` VALUES (7, 2, 0, 'setting', '更新设置', 1395748165, '2130706433');
INSERT INTO `pre_user_action` VALUES (8, 2, 0, 'setting', '更新设置', 1395748216, '2130706433');
INSERT INTO `pre_user_action` VALUES (9, 2, 19, 'editcolumns', '编辑栏目', 1395748313, '2130706433');
INSERT INTO `pre_user_action` VALUES (10, 2, 0, 'setting', '更新设置', 1395748842, '2130706433');
INSERT INTO `pre_user_action` VALUES (11, 2, 0, 'setting', '更新设置', 1395748946, '2130706433');
INSERT INTO `pre_user_action` VALUES (12, 2, 0, 'setting', '更新设置', 1395749476, '2130706433');
INSERT INTO `pre_user_action` VALUES (13, 2, 27, 'editposts', '编辑文章', 1395749541, '2130706433');
INSERT INTO `pre_user_action` VALUES (14, 2, 28, 'editposts', '编辑文章', 1395749560, '2130706433');
INSERT INTO `pre_user_action` VALUES (15, 2, 29, 'editposts', '编辑文章', 1395751159, '2130706433');
INSERT INTO `pre_user_action` VALUES (16, 2, 6, 'editads', '新增展示', 1395751348, '2130706433');
INSERT INTO `pre_user_action` VALUES (17, 2, 7, 'editads', '新增展示', 1395751383, '2130706433');
INSERT INTO `pre_user_action` VALUES (18, 2, 8, 'editads', '新增展示', 1395751448, '2130706433');

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
