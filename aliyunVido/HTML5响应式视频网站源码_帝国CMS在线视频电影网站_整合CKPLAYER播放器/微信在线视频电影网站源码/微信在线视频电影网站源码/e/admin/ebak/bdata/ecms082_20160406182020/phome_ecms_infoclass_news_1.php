<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_infoclass_news`;");
E_C("CREATE TABLE `phome_ecms_infoclass_news` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_ftitle` text NOT NULL,
  `z_ftitle` varchar(255) NOT NULL DEFAULT '',
  `qz_ftitle` varchar(255) NOT NULL DEFAULT '',
  `save_ftitle` varchar(10) NOT NULL DEFAULT '',
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL DEFAULT '',
  `qz_smalltext` varchar(255) NOT NULL DEFAULT '',
  `save_smalltext` varchar(10) NOT NULL DEFAULT '',
  `zz_writer` text NOT NULL,
  `z_writer` varchar(255) NOT NULL DEFAULT '',
  `qz_writer` varchar(255) NOT NULL DEFAULT '',
  `save_writer` varchar(10) NOT NULL DEFAULT '',
  `zz_befrom` text NOT NULL,
  `z_befrom` varchar(255) NOT NULL DEFAULT '',
  `qz_befrom` varchar(255) NOT NULL DEFAULT '',
  `save_befrom` varchar(10) NOT NULL DEFAULT '',
  `zz_newstext` text NOT NULL,
  `z_newstext` varchar(255) NOT NULL DEFAULT '',
  `qz_newstext` varchar(255) NOT NULL DEFAULT '',
  `save_newstext` varchar(10) NOT NULL DEFAULT '',
  `zz_diggtop` text NOT NULL,
  `z_diggtop` varchar(255) NOT NULL DEFAULT '',
  `qz_diggtop` varchar(255) NOT NULL DEFAULT '',
  `save_diggtop` varchar(10) NOT NULL DEFAULT '',
  `zz_playerid` text NOT NULL,
  `z_playerid` varchar(255) NOT NULL,
  `qz_playerid` varchar(255) NOT NULL,
  `save_playerid` varchar(10) NOT NULL,
  `zz_onlinepath` text NOT NULL,
  `z_onlinepath` varchar(255) NOT NULL,
  `qz_onlinepath` varchar(255) NOT NULL,
  `save_onlinepath` varchar(10) NOT NULL,
  `zz_diggdown` text NOT NULL,
  `z_diggdown` varchar(255) NOT NULL,
  `qz_diggdown` varchar(255) NOT NULL,
  `save_diggdown` varchar(10) NOT NULL,
  `zz_downpath` text NOT NULL,
  `z_downpath` varchar(255) NOT NULL,
  `qz_downpath` varchar(255) NOT NULL,
  `save_downpath` varchar(10) NOT NULL,
  `zz_downurltext` text NOT NULL,
  `z_downurltext` varchar(255) NOT NULL,
  `qz_downurltext` varchar(255) NOT NULL,
  `save_downurltext` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>