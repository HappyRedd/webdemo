<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1','大圣归来','1452304826','title','20','192.168.1.1','','1','newstime','0','819459149c54e75e5001966078dda7e9','news','1','0',' and ((title LIKE ''%大圣归来%''))','0');");
E_D("replace into `phome_enewssearch` values('2','大圣','1459597099','title','20','110.80.72.32','','8','newstime','0','aa3ed559be9595c06df1c2e9c740fd78','news','1','0',' and ((title LIKE ''%大圣%''))','0');");
E_D("replace into `phome_enewssearch` values('3','以','1452781200','title','1','118.212.147.148','','1','newstime','0','b689f0a3cb81a95e61c6443dc4489b4a','news','1','0',' and ((title LIKE ''%以%''))','0');");
E_D("replace into `phome_enewssearch` values('4','大','1456638246','title','20','1.68.229.47','','2','newstime','0','221c0c12d5b544c41738099d25393483','news','1','0',' and ((title LIKE ''%大%''))','0');");
E_D("replace into `phome_enewssearch` values('5','多种','1454658743','title','1','59.63.187.171','','2','newstime','0','a1cbc036b0dc911692d2ac3126221ed9','news','1','0',' and ((title LIKE ''%多种%''))','0');");
E_D("replace into `phome_enewssearch` values('6','演示','1455707807','title','2','60.208.144.52','','1','newstime','0','822491fb86ae877fba05cf5c248089e1','news','1','0',' and ((title LIKE ''%演示%''))','0');");
E_D("replace into `phome_enewssearch` values('7','权限','1456140277','title','2','175.22.6.13','','1','newstime','0','eb407f0f8aec1b23f3d20998ae0c0a0d','news','1','0',' and ((title LIKE ''%权限%''))','0');");
E_D("replace into `phome_enewssearch` values('8','看','1458486051','title','2','61.141.251.46','','1','newstime','0','ac0a48a42df410350b6ed917fcb3eb88','news','1','0',' and ((title LIKE ''%看%''))','0');");
E_D("replace into `phome_enewssearch` values('9','下载','1459273098','title','1','123.235.4.182','','1','newstime','0','045b7d725727d1008df2c27b1e20b52a','news','1','0',' and ((title LIKE ''%下载%''))','0');");

@include("../../inc/footer.php");
?>