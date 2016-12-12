<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('1','1000010000000001','f47c3e0e4b194d20f981ad7d92868fe9.jpg','100475','2016-01-08','admin','1452236203','5','1.jpg','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('2','1000010000000002','c105775c220d67eac7e047802c55d80f.jpg','76020','2016-01-08','admin','1452236545','5','2.jpg','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('3','1000010000000003','f703d1e678d362067d7699f6efc13d79.jpg','164373','2016-01-08','admin','1452236945','5','3.jpg','1','0','3','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('4','1000010000000004','6edadbf994713ed6986b5651873d1518.jpg','126032','2016-01-08','admin','1452239269','5','4.jpg','1','0','4','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('5','1000010000000005','e6b8305dd22d298268b853223a354d75.jpg','144831','2016-01-08','admin','1452239781','5','5.jpg','1','0','5','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('6','1000010000000022','4bfd065930563f90feb7719744c62cbc.jpg','76020','2016-01-09','admin','1452314655','5','2.jpg','1','0','22','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('9','0','9f1f7433495ab6bfc01ea385c7c75011.jpg','22817','2016-02-26','[Member]','1456421181','5','9f1f7433495ab6bfc01ea385c7c75011.jpg','1','0','1456421143','1456421143','2','0');");
E_D("replace into `phome_enewsfile_1` values('10','1000010000000028','42f4665e3b2738e7ffdb2fdd7aeab831.txt','54','2016-03-17','[Member]mubaohui','1458186599','5','[onlinepath]测试视频','3','0','28','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('11','1000010000000028','784f192d7896ec2f347931d1e9dc5022.txt','54','2016-03-17','[Member]mubaohui','1458186599','5','[downpath]测试视频','0','0','28','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('12','0','2f48958090bec9731b36eddd7aedc1ed.jpg','35393','2016-03-20','[Member]','1458465231','5','2f48958090bec9731b36eddd7aedc1ed.jpg','1','0','1458465176','1458465176','2','0');");

@include("../../inc/footer.php");
?>