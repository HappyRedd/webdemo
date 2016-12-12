<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstagsdata`;");
E_C("CREATE TABLE `phome_enewstagsdata` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagid` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `tagid` (`tagid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstagsdata` values('1','1','5','2','1452236483','1');");
E_D("replace into `phome_enewstagsdata` values('2','1','5','1','1452235812','1');");
E_D("replace into `phome_enewstagsdata` values('3','1','5','3','1452236881','1');");
E_D("replace into `phome_enewstagsdata` values('4','1','5','4','1452239168','1');");
E_D("replace into `phome_enewstagsdata` values('5','1','5','5','1452239747','1');");

@include("../../inc/footer.php");
?>