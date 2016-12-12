<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdiggips`;");
E_C("CREATE TABLE `phome_enewsdiggips` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `ips` mediumtext NOT NULL,
  KEY `classid` (`classid`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdiggips` values('5','21',',192.168.1.1,117.45.237.79,220.167.120.154,36.186.10.147,122.228.19.218,182.86.202.182,1.68.229.47,59.63.187.171,49.114.108.69,120.33.96.180,121.11.35.100,123.151.153.35,119.120.108.49,116.23.26.162,27.47.233.238,124.234.223.144,123.183.63.45,');");
E_D("replace into `phome_enewsdiggips` values('4','19',',192.168.1.1,14.119.240.24,182.86.204.186,183.167.179.162,59.63.187.171,120.33.99.114,119.120.108.49,116.113.106.50,118.212.147.150,');");
E_D("replace into `phome_enewsdiggips` values('5','1',',192.168.1.1,27.187.185.191,36.48.101.188,120.33.36.35,123.151.153.35,171.221.160.219,101.226.33.239,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('4','17',',60.178.137.37,49.80.161.39,182.244.35.26,119.120.108.49,112.90.237.8,');");
E_D("replace into `phome_enewsdiggips` values('4','20',',182.122.27.179,123.232.93.111,183.164.33.202,182.86.202.182,183.167.179.162,182.86.207.51,123.233.74.255,120.33.99.114,124.237.109.124,223.247.25.201,119.120.108.49,121.238.40.96,120.71.150.43,');");
E_D("replace into `phome_enewsdiggips` values('2','6',',221.234.45.75,14.122.107.91,27.194.203.228,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('5','22',',220.167.120.154,120.236.171.214,113.162.122.67,123.233.74.255,125.73.71.6,119.120.108.49,14.21.230.38,117.136.77.108,125.73.162.107,');");
E_D("replace into `phome_enewsdiggips` values('5','2',',119.4.181.196,123.125.193.154,113.57.25.154,110.252.173.89,119.120.108.49,124.117.221.110,');");
E_D("replace into `phome_enewsdiggips` values('5','5',',183.63.172.210,125.93.241.152,182.35.66.177,171.91.80.64,111.196.26.248,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('4','16',',119.181.43.239,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('4','18',',112.231.249.230,115.222.88.66,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('3','11',',123.233.74.255,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('5','4',',182.35.66.177,119.120.108.49,122.227.45.14,');");
E_D("replace into `phome_enewsdiggips` values('2','9',',112.90.37.227,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('5','3',',175.22.6.13,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('3','13',',182.88.215.216,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('2','7',',222.211.163.6,119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('3','15',',119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('3','14',',119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('3','12',',119.120.108.49,');");
E_D("replace into `phome_enewsdiggips` values('2','10',',119.120.108.49,124.163.135.15,');");
E_D("replace into `phome_enewsdiggips` values('2','8',',119.120.108.49,');");

@include("../../inc/footer.php");
?>