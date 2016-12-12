<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_check`;");
E_C("CREATE TABLE `phome_ecms_news_check` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  `playerid` smallint(6) NOT NULL DEFAULT '0',
  `onlinepath` mediumtext NOT NULL,
  `diggdown` int(11) NOT NULL DEFAULT '0',
  `downpath` mediumtext NOT NULL,
  `downurltext` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_check` values('27','3','0','0','0','0','2016-02-02','27','0','游客*','0','0','0','0','0','1','0','1454381417','1454381417','0','0','0','','/xsp/2016-02-02/27.html','1','1','1','','111','1454381417','','','','0','0','','0','','111');");
E_D("replace into `phome_ecms_news_check` values('28','5','0','0','0','0','2016-03-17','28','39','mubaohui','0','0','0','0','0','1','0','1458186599','1458186599','0','0','0','','/zxdy/dzp/2016-03-17/28.html','1','1','1','','测试视频','1458186599','','','','0','0','1::::::/d/file/2016-03-17/42f4665e3b2738e7ffdb2fdd7aeab831.txt::::::0::::::0::::::','0','下载地址1::::::/d/file/2016-03-17/784f192d7896ec2f347931d1e9dc5022.txt::::::0::::::0::::::','');");

@include("../../inc/footer.php");
?>