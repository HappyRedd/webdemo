<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2016-01-07 12:57:09','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('2','admin','2016-01-07 18:09:47','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('3','admin','2016-01-07 18:14:14','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('4','admin','2016-01-08 19:30:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('5','admin','2016-01-09 20:47:26','175.10.166.33','0','','0','0');");
E_D("replace into `phome_enewslog` values('6','admin','2016-01-09 20:47:43','175.10.166.33','0','','0','0');");
E_D("replace into `phome_enewslog` values('7','admin','2016-01-10 15:53:44','175.9.139.8','0','','0','0');");
E_D("replace into `phome_enewslog` values('8','admin','2016-01-11 13:22:59','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('9','admin','2016-01-11 16:14:01','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('10','admin','2016-01-15 15:48:09','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('11','admin','2016-01-17 19:36:56','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('12','admin','2016-01-18 00:20:38','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('13','admin','2016-01-18 00:41:08','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('14','admin','2016-01-18 14:17:05','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('15','admin','2016-01-26 11:43:40','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('16','admin','2016-01-27 21:13:59','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('17','admin','2016-01-28 13:13:39','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('18','admin','2016-01-28 19:51:39','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('19','admin','2016-01-28 22:34:39','112.10.9.4','0','','0','0');");
E_D("replace into `phome_enewslog` values('20','admin','2016-01-29 12:45:44','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('21','admin','2016-01-29 12:58:27','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('22','admin','2016-01-29 21:34:47','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('23','admin','2016-01-30 09:18:40','39.67.241.240','0','','0','0');");
E_D("replace into `phome_enewslog` values('24','admin','2016-01-30 10:10:02','122.136.192.49','0','','0','0');");
E_D("replace into `phome_enewslog` values('25','admin','2016-01-30 10:10:10','122.136.192.49','0','','0','0');");
E_D("replace into `phome_enewslog` values('26','admin','2016-01-30 10:10:20','122.136.192.49','0','','0','0');");
E_D("replace into `phome_enewslog` values('27','admin','2016-01-30 15:35:43','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('28','admin','2016-01-30 15:37:51','192.168.1.1','0','','0','0');");
E_D("replace into `phome_enewslog` values('29','admin','2016-01-30 15:37:56','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('30','admin','2016-01-31 16:19:16','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('31','admin','2016-02-06 23:18:39','180.125.40.78','0','','0','0');");
E_D("replace into `phome_enewslog` values('32','admin','2016-02-13 15:38:21','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('33','admin','2016-02-13 15:54:54','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('34','admin','2016-02-13 20:51:38','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('35','admin','2016-02-13 21:56:03','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('36','admin','2016-02-15 18:23:08','192.168.1.1','0','','0','0');");
E_D("replace into `phome_enewslog` values('37','admin','2016-02-15 18:23:14','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('38','admin','2016-02-17 00:17:08','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('39','admin','2016-02-17 00:47:49','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('40','admin','2016-02-17 15:49:06','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('41','admin','2016-02-28 11:41:03','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('42','admin','2016-02-28 12:09:51','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('43','admin','2016-03-01 11:03:31','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('44','admin','2016-03-03 12:38:02','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('45','admin','2016-03-03 13:05:15','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('46','admin','2016-03-07 12:39:23','112.64.147.146','0','','0','0');");
E_D("replace into `phome_enewslog` values('47','admin','2016-03-07 16:38:00','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('48','admin','2016-03-12 15:26:41','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('49','admin','2016-03-15 22:19:26','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('50','admin','2016-03-16 11:37:30','192.168.1.1','0','','0','0');");
E_D("replace into `phome_enewslog` values('51','admin','2016-03-16 11:37:35','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('52','admin','2016-03-17 11:58:04','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('53','admin','2016-03-17 13:51:19','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('54','admin','2016-03-18 21:29:27','183.163.98.147','0','','0','0');");
E_D("replace into `phome_enewslog` values('55','admin','2016-03-19 13:28:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('56','admin','2016-03-23 14:45:54','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('57','admin','2016-03-24 21:45:50','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('58','admin','2016-03-25 11:57:59','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('59','admin','2016-03-25 15:49:54','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('60','admin','2016-04-03 18:56:38','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('61','admin','2016-04-03 20:00:44','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('62','admin','2016-04-05 12:55:06','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('63','admin','2016-04-05 15:09:23','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('64','admin','2016-04-05 16:36:45','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('65','admin','2016-04-05 16:38:04','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('66','admin','2016-04-06 18:19:52','192.168.1.1','1','','0','0');");

@include("../../inc/footer.php");
?>