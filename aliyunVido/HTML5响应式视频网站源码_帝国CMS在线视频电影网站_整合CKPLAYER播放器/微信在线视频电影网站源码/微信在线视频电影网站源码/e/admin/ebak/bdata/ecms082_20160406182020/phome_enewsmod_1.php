<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmod`;");
E_C("CREATE TABLE `phome_enewsmod` (
  `mid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `mname` varchar(100) NOT NULL DEFAULT '',
  `mtemp` mediumtext NOT NULL,
  `mzs` varchar(255) NOT NULL DEFAULT '',
  `cj` mediumtext NOT NULL,
  `enter` mediumtext NOT NULL,
  `tempvar` mediumtext NOT NULL,
  `sonclass` text NOT NULL,
  `searchvar` varchar(255) NOT NULL DEFAULT '',
  `tid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `qenter` mediumtext NOT NULL,
  `mustqenterf` text NOT NULL,
  `qmtemp` mediumtext NOT NULL,
  `listandf` text NOT NULL,
  `setandf` tinyint(1) NOT NULL DEFAULT '0',
  `listtempvar` mediumtext NOT NULL,
  `qmname` varchar(30) NOT NULL DEFAULT '',
  `canaddf` text NOT NULL,
  `caneditf` text NOT NULL,
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `showmod` tinyint(1) NOT NULL DEFAULT '0',
  `usemod` tinyint(1) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `orderf` text NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listfile` varchar(30) NOT NULL DEFAULT '',
  `printtempid` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmod` values('1','新闻系统模型','<table width=\\\\''100%\\\\'' align=center cellpadding=3 cellspacing=1 bgcolor=\\\\''#DBEAF5\\\\''><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>标题</td><td bgcolor=\\\\''ffffff\\\\''>[!--title--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>特殊属性</td><td bgcolor=\\\\''ffffff\\\\''>[!--special.field--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>标题图片</td><td bgcolor=\\\\''ffffff\\\\''>[!--titlepic--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>发布时间</td><td bgcolor=\\\\''ffffff\\\\''>[!--newstime--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>副标题</td><td bgcolor=\\\\''ffffff\\\\''>[!--ftitle--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>内容简介</td><td bgcolor=\\\\''ffffff\\\\''>[!--smalltext--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>作者</td><td bgcolor=\\\\''ffffff\\\\''>[!--writer--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>信息来源</td><td bgcolor=\\\\''ffffff\\\\''>[!--befrom--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>在线观看地址</td><td bgcolor=\\\\''ffffff\\\\''>[!--onlinepath--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>下载地址</td><td bgcolor=\\\\''ffffff\\\\''>[!--downpath--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>网盘密码</td><td bgcolor=\\\\''ffffff\\\\''>[!--downurltext--]</td></tr><tr><td height=25 colspan=2 bgcolor=\\\\''ffffff\\\\''><div align=left>新闻正文</div></td></tr></table><div style=\\\\''background-color:#D0D0D0\\\\''>[!--newstext--]</div><table width=\\\\''100%\\\\'' align=center cellpadding=3 cellspacing=1 bgcolor=\\\\''#DBEAF5\\\\''></table>','新闻系统模型','标题<!--field--->title<!--record-->标题图片<!--field--->titlepic<!--record-->发布时间<!--field--->newstime<!--record-->副标题<!--field--->ftitle<!--record-->内容简介<!--field--->smalltext<!--record-->作者<!--field--->writer<!--record-->信息来源<!--field--->befrom<!--record-->在线观看地址<!--field--->onlinepath<!--record-->下载地址<!--field--->downpath<!--record-->网盘密码<!--field--->downurltext<!--record-->新闻正文<!--field--->newstext<!--record-->','标题<!--field--->title<!--record-->特殊属性<!--field--->special.field<!--record-->标题图片<!--field--->titlepic<!--record-->发布时间<!--field--->newstime<!--record-->副标题<!--field--->ftitle<!--record-->内容简介<!--field--->smalltext<!--record-->作者<!--field--->writer<!--record-->信息来源<!--field--->befrom<!--record-->在线观看地址<!--field--->onlinepath<!--record-->下载地址<!--field--->downpath<!--record-->网盘密码<!--field--->downurltext<!--record-->新闻正文<!--field--->newstext<!--record-->','标题<!--field--->title<!--record-->标题图片<!--field--->titlepic<!--record-->发布时间<!--field--->newstime<!--record-->副标题<!--field--->ftitle<!--record-->内容简介<!--field--->smalltext<!--record-->作者<!--field--->writer<!--record-->信息来源<!--field--->befrom<!--record-->在线观看地址<!--field--->onlinepath<!--record-->下载地址<!--field--->downpath<!--record-->网盘密码<!--field--->downurltext<!--record-->新闻正文<!--field--->newstext<!--record-->顶<!--field--->diggtop<!--record-->','|2|3|4|5|6|7|',',title,smalltext,','1','news','标题<!--field--->title<!--record-->标题图片<!--field--->titlepic<!--record-->作者<!--field--->writer<!--record-->信息来源<!--field--->befrom<!--record-->在线观看地址<!--field--->onlinepath<!--record-->下载地址<!--field--->downpath<!--record-->网盘密码<!--field--->downurltext<!--record-->新闻正文<!--field--->newstext<!--record-->',',title,newstext,','<table class=\\\\\"am-table am-table-bordered am-table-radius am-table-striped am-table-hover\\\\\"><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>标题</td><td bgcolor=\\\\''ffffff\\\\''>[!--title--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>标题图片</td><td bgcolor=\\\\''ffffff\\\\''>[!--titlepic--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>作者</td><td bgcolor=\\\\''ffffff\\\\''>[!--writer--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>信息来源</td><td bgcolor=\\\\''ffffff\\\\''>[!--befrom--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>在线观看地址</td><td bgcolor=\\\\''ffffff\\\\''>[!--onlinepath--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>下载地址</td><td bgcolor=\\\\''ffffff\\\\''>[!--downpath--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>网盘密码</td><td bgcolor=\\\\''ffffff\\\\''>[!--downurltext--]</td></tr><tr><td height=25 colspan=2 bgcolor=\\\\''ffffff\\\\''><div align=left>新闻正文</div></td></tr></table><div style=\\\\''background-color:#D0D0D0\\\\''>[!--newstext--]</div>','','0','标题<!--field--->title<!--record-->标题图片<!--field--->titlepic<!--record-->发布时间<!--field--->newstime<!--record-->副标题<!--field--->ftitle<!--record-->内容简介<!--field--->smalltext<!--record-->在线观看地址<!--field--->onlinepath<!--record-->下载地址<!--field--->downpath<!--record-->网盘密码<!--field--->downurltext<!--record-->顶<!--field--->diggtop<!--record-->','新闻',',title,titlepic,newstime,ftitle,smalltext,writer,befrom,onlinepath,downpath,downurltext,newstext,',',title,titlepic,newstime,ftitle,smalltext,writer,befrom,onlinepath,downpath,downurltext,newstext,','0','0','0','0','','1','','0');");

@include("../../inc/footer.php");
?>