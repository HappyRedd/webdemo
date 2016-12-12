<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('1','5','1','1452236472','1452236229','1452236989','1');");
E_D("replace into `phome_ecms_news_index` values('2','5','1','1452236543','1452236570','1452236596','1');");
E_D("replace into `phome_ecms_news_index` values('3','5','1','1452236581','1452236920','1452240134','1');");
E_D("replace into `phome_ecms_news_index` values('4','5','1','1452236648','1452239272','1452239272','1');");
E_D("replace into `phome_ecms_news_index` values('5','5','1','1452236747','1452239965','1455371989','1');");
E_D("replace into `phome_ecms_news_index` values('6','2','1','1452236772','1452253576','1452253576','1');");
E_D("replace into `phome_ecms_news_index` values('7','2','1','1452236843','1452253576','1452253576','1');");
E_D("replace into `phome_ecms_news_index` values('8','2','1','1452236881','1452253576','1452253576','1');");
E_D("replace into `phome_ecms_news_index` values('9','2','1','1452236948','1452253576','1452253576','1');");
E_D("replace into `phome_ecms_news_index` values('10','2','1','1452237047','1452253576','1452253576','1');");
E_D("replace into `phome_ecms_news_index` values('11','3','1','1452237072','1452253584','1452253584','1');");
E_D("replace into `phome_ecms_news_index` values('12','3','1','1452237143','1452253584','1452253584','1');");
E_D("replace into `phome_ecms_news_index` values('13','3','1','1452237181','1452253584','1452253584','1');");
E_D("replace into `phome_ecms_news_index` values('14','3','1','1452237248','1452253584','1452253584','1');");
E_D("replace into `phome_ecms_news_index` values('15','3','1','1452237347','1452253584','1452253584','1');");
E_D("replace into `phome_ecms_news_index` values('16','4','1','1452237372','1452253590','1452253590','1');");
E_D("replace into `phome_ecms_news_index` values('17','4','1','1452237443','1452253590','1452253590','1');");
E_D("replace into `phome_ecms_news_index` values('18','4','1','1452237481','1452253590','1452253590','1');");
E_D("replace into `phome_ecms_news_index` values('19','4','1','1452237548','1452253590','1452253590','1');");
E_D("replace into `phome_ecms_news_index` values('20','4','1','1452237647','1452253590','1453779889','1');");
E_D("replace into `phome_ecms_news_index` values('21','5','1','1452240347','1452254702','1452314816','1');");
E_D("replace into `phome_ecms_news_index` values('22','5','1','1452240347','1452314615','1459832940','1');");
E_D("replace into `phome_ecms_news_index` values('28','5','0','1458186599','1458186599','1458186599','0');");
E_D("replace into `phome_ecms_news_index` values('27','3','0','1454381417','1454381417','1454381417','0');");

@include("../../inc/footer.php");
?>