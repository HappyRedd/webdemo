<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassadd`;");
E_C("CREATE TABLE `phome_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `lanpic` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassadd` values('1','','','fa-video-camera');");
E_D("replace into `phome_enewsclassadd` values('2','','','fa-star');");
E_D("replace into `phome_enewsclassadd` values('3','','','fa-caret-square-o-right');");
E_D("replace into `phome_enewsclassadd` values('4','','','fa-camera');");
E_D("replace into `phome_enewsclassadd` values('5','','','');");
E_D("replace into `phome_enewsclassadd` values('6','','','');");
E_D("replace into `phome_enewsclassadd` values('7','','','');");
E_D("replace into `phome_enewsclassadd` values('8','','','');");
E_D("replace into `phome_enewsclassadd` values('9','','','');");
E_D("replace into `phome_enewsclassadd` values('10','支持HTML模式，支持图文！后台--栏目--栏目管理--免责声明--修改--模板选项--页面内容  里面修改！','','');");
E_D("replace into `phome_enewsclassadd` values('11','支持HTML模式，支持图文！后台--栏目--栏目管理--关于我们--修改--模板选项--页面内容  里面修改！','','');");
E_D("replace into `phome_enewsclassadd` values('12','支持HTML模式，支持图文！后台--栏目--栏目管理--投稿规则--修改--模板选项--页面内容  里面修改！','','');");
E_D("replace into `phome_enewsclassadd` values('13','支持HTML模式，支持图文！后台--栏目--栏目管理-广告合作--修改--模板选项--页面内容  里面修改！','','');");
E_D("replace into `phome_enewsclassadd` values('14','','','');");
E_D("replace into `phome_enewsclassadd` values('15','支持HTML模式，支持图文！后台--栏目--栏目管理--联系我们--修改--模板选项--页面内容  里面修改！','','');");

@include("../../inc/footer.php");
?>