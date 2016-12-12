<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_check_data`;");
E_C("CREATE TABLE `phome_ecms_news_check_data` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_check_data` values('28','5','','1','1','0','0','','','','<p>测试视频测试视频测试视频测试视频测试视频测试视频测试视频测试视频</p>');");
E_D("replace into `phome_ecms_news_check_data` values('27','3','','1','1','0','0','','111','11111','<p>&nbsp;11111</p>');");

@include("../../inc/footer.php");
?>