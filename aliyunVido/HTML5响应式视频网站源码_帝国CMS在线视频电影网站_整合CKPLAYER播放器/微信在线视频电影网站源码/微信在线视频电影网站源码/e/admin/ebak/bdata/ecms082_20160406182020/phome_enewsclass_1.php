<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0','最新电影','|5|6|7|','0','25','10','1','0','1','','0','zxdy','.html','Y-m-d','0','.html','0','0','10','10','10','','0','1','','10','1','1','10','最新电影','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452160854');");
E_D("replace into `phome_enewsclass` values('2','0','热播电视剧','','0','25','10','1','0','1','','1','rbdsj','.html','Y-m-d','0','.html','0','0','10','10','10','','0','2','','10','1','1','10','热播电视剧','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','5','5','1452160874');");
E_D("replace into `phome_enewsclass` values('3','0','小视频','','0','25','10','1','0','1','','1','xsp','.html','Y-m-d','0','.html','0','0','10','10','10','','0','3','','10','1','1','10','小视频','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','6','5','1452160891');");
E_D("replace into `phome_enewsclass` values('4','0','微拍','','0','25','10','1','0','1','','1','wp','.html','Y-m-d','0','.html','0','0','10','10','10','','0','4','','10','1','1','10','微拍','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','5','5','1452160917');");
E_D("replace into `phome_enewsclass` values('5','1','动作片','','0','25','10','1','0','1','|1|','1','zxdy/dzp','.html','Y-m-d','0','.html','0','0','10','10','10','','0','11','','10','1','1','10','动作片','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','8','7','1452160965');");
E_D("replace into `phome_enewsclass` values('6','1','喜剧片','','0','25','10','1','0','1','|1|','1','zxdy/xjp','.html','Y-m-d','0','.html','0','0','10','10','10','','0','12','','10','1','1','10','喜剧片','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452160985');");
E_D("replace into `phome_enewsclass` values('7','1','科幻片','','0','25','10','1','0','1','|1|','1','zxdy/khp','.html','Y-m-d','0','.html','0','0','10','10','10','','0','13','','10','1','1','10','科幻片','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452161016');");
E_D("replace into `phome_enewsclass` values('8','0','网站杂项（勿删）','|','0','25','10','0','0','1','','0','misc','.html','Y-m-d','0','.html','0','1','10','10','10','','0','100','','10','1','1','10','网站杂项（勿删）','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452162439');");
E_D("replace into `phome_enewsclass` values('9','8','标签云','|','0','25','10','0','0','0','|8|','0','misc/tags','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','标签云','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','2','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452162516');");
E_D("replace into `phome_enewsclass` values('10','8','免责声明','|','0','25','10','0','0','0','|8|','0','misc/copyright','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','免责声明','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452162534');");
E_D("replace into `phome_enewsclass` values('11','8','关于我们','|','0','25','10','0','0','0','|8|','0','misc/about','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','关于我们','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452162548');");
E_D("replace into `phome_enewsclass` values('12','8','投稿规则','|','0','25','10','0','0','0','|8|','0','misc/tougao','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','投稿规则','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452162575');");
E_D("replace into `phome_enewsclass` values('13','8','广告合作','|','0','25','10','0','0','0','|8|','0','misc/ads','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','广告合作','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452162593');");
E_D("replace into `phome_enewsclass` values('14','8','留言反馈','|','0','25','10','0','0','0','|8|','0','misc/message','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','留言反馈','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','3','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452162610');");
E_D("replace into `phome_enewsclass` values('15','8','联系我们','|','0','25','10','0','0','0','|8|','0','misc/contact','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','联系我们','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452162621');");

@include("../../inc/footer.php");
?>