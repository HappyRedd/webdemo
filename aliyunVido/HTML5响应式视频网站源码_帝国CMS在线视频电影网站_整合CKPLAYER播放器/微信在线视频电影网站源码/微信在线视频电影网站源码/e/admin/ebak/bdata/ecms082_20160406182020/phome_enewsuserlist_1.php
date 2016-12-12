<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserlist`;");
E_C("CREATE TABLE `phome_enewsuserlist` (
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `listname` varchar(60) NOT NULL DEFAULT '',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `filepath` varchar(120) NOT NULL DEFAULT '',
  `filetype` varchar(12) NOT NULL DEFAULT '',
  `totalsql` text NOT NULL,
  `listsql` text NOT NULL,
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `lencord` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`listid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserlist` values('1','首页列表','我的网站','../../','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by newstime desc','0','20','2','我的网站','我的网站','0');");
E_D("replace into `phome_enewsuserlist` values('2','热门列表','我的网站-热门列表','../../hot/','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by onclick desc','0','20','1','我的网站','我的网站','0');");
E_D("replace into `phome_enewsuserlist` values('3','赞的最多','我的网站-赞的最多','../../zan/','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by diggtop desc','0','20','1','我的网站','我的网站','0');");

@include("../../inc/footer.php");
?>