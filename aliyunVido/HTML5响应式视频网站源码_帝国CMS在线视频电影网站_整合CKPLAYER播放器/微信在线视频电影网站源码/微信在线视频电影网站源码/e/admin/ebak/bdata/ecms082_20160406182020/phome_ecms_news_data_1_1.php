<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_data_1`;");
E_C("CREATE TABLE `phome_ecms_news_data_1` (
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
E_D("replace into `phome_ecms_news_data_1` values('1','5','3,2','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('2','5','1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('3','5','5,4,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('4','5','3,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('5','5','20,19,18,17,16,15,14,13,12,11','1','0','0','0','大圣归来','','','<p>这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！</p>');");
E_D("replace into `phome_ecms_news_data_1` values('6','2','3,2','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('7','2','1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('8','2','5,4,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('9','2','3,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('10','2','4,3,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('11','3','3,2','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('12','3','1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('13','3','5,4,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('14','3','3,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('15','3','4,3,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('16','4','3,2','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('17','4','1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('18','4','5,4,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('19','4','3,2,1','1','0','0','0','大圣归来','','','这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！');");
E_D("replace into `phome_ecms_news_data_1` values('20','4','19,18,17,16,15,14,13,12,11,10','1','0','0','0','大圣归来','','','<p>这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！</p>');");
E_D("replace into `phome_ecms_news_data_1` values('21','5','20,19,18,17,16,15,14,13,12,11','1','0','0','0','大圣归来','','','<p>这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！</p>');");
E_D("replace into `phome_ecms_news_data_1` values('22','5','20,19,18,17,16,15,14,13,12,11','1','0','0','0','大圣归来','','','<p>这里可以填入视频介绍或者详情等自定义文字图片内容，后台有编辑器！</p>');");

@include("../../inc/footer.php");
?>