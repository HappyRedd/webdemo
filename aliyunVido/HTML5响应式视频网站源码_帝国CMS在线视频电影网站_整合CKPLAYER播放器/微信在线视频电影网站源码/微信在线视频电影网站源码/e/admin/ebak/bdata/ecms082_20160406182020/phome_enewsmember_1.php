<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmember`;");
E_C("CREATE TABLE `phome_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmember` values('1','hanxing3437','2732da34ba84952ce192580be998bac3','BJWnu964Hbqs8BzD2gC2','48444431@qq.com','1452170471','1','0','0','0.00','0','0','1','ifiYJu','Py1OQatbPPID');");
E_D("replace into `phome_enewsmember` values('2','88509519','a6de8c05bcfdec6eb41ac364372f9e66','gjsU8UmN3fJc09HprL2Y','88509519@qq.com','1452307520','1','0','0','0.00','0','0','1','kNhsvz','jaU6iIiNul4p');");
E_D("replace into `phome_enewsmember` values('3','123','2aaf5426555dfe17335e9f98b1a6a998','jGHRCWVWlWowVkEm0fmn','123456@qq.com','1452311835','1','0','0','0.00','0','0','1','cqDSPR','H1Rsy8bKdnkO');");
E_D("replace into `phome_enewsmember` values('4','123456ss','74b9c2077a5ad184dab200a3b5ae7f4b','Tjzmp2VLiviYDRGeivbH','123456s@qq.com','1452443338','1','0','0','0.00','0','0','1','sk6um9','qfQ0MKaS4iVN');");
E_D("replace into `phome_enewsmember` values('5','111111','1219aa1c4339a622e3eb3a76a5dec82d','vP4Xpj9Vbavjv9V5qYv7','111111@df.gh','1452582121','1','0','0','0.00','0','0','1','9mNTEe','2yeEffTKoMCy');");
E_D("replace into `phome_enewsmember` values('6','ceshi','d0167e3cf7c255561157d64649f1fa37','g0w1qsHWzC3nynwQJ72r','ces@qq.com','1452616198','1','0','0','0.00','0','0','1','SwaUjf','VankYEFzY6K7');");
E_D("replace into `phome_enewsmember` values('7','a518a518','e74f1ceab33086bfdae8b1bc1eebd570','qEyf2uXMxlC1VtTZbX4r','a518a518@qq.com','1452921392','1','0','0','0.00','0','0','1','s7ing4','YrZRpq9Gr89j');");
E_D("replace into `phome_enewsmember` values('8','s39564086','e44dd03f31a9f29afdf7df2ad69131bd','HszfnHKqJIYfPupKEyFI','180652267@qq.com','1452997701','1','0','0','0.00','0','0','1','P5MhoR','oK3deWI97g4s');");
E_D("replace into `phome_enewsmember` values('9','monkey1','ee2afdd37edab7b4eb158f1b7e5464c7','8wTTvoZRboHSwbrTDsw9','monkey@gmail.com','1453143223','1','0','0','0.00','0','0','1','ogzZCd','D5kN8zMf4XN1');");
E_D("replace into `phome_enewsmember` values('10','lc9549056','0cd8901b7b9aeb6075a7ef3947dccb99','Qkag4DNfw7JIR7VDUERY','9549056@qq.com','1453301900','1','0','0','0.00','0','0','1','7QCNxJ','axxMYdwAMufy');");
E_D("replace into `phome_enewsmember` values('11','a66570635','3c42b0bb5266c99d1abf192778a83e26','QgthHovIaH5cOB7qIo0P','1154451212@qq.com','1453347705','1','0','0','0.00','0','0','1','T2kOGw','iJG2cTrgGcSL');");
E_D("replace into `phome_enewsmember` values('12','97353826','ef55933e6ec37ce01e31f6e59ecfe3b1','J9mHHdCKI50CPxwyBExX','97358@qq.com','1453372044','1','0','0','0.00','0','0','1','92VoQF','6qAPvkDZ6KdK');");
E_D("replace into `phome_enewsmember` values('13','123456','e120f893ac0ef2ee263ae8c11b90fdf9','NoVnLBvFafIyg13DXVUl','12345666@qq.com','1453384639','1','0','0','0.00','0','0','1','6Aci9l','PGvfdC8XsT8A');");
E_D("replace into `phome_enewsmember` values('14','ccaacc','54b5eb12d4d6e0bd26092de0cecf33f8','824i1EljLDXzpWkX6HU7','18243328@qq.com','1453427600','1','0','0','0.00','0','0','1','XYiP5E','2Pj0oL9wzl22');");
E_D("replace into `phome_enewsmember` values('15','q1468939749','59f97463583678086025331b3ff37bb4','dWi1w4XUlUeAoR9KmXgJ','1468939749@qq.com','1453585228','1','0','0','0.00','0','0','1','eKdigl','O6Xai5QUI3rp');");
E_D("replace into `phome_enewsmember` values('16','xiqi','7c2efa7bece7ad0f2deac0a63fadd392','DFM6Q5SlmiVEm9Td4MXs','xiaohai83@foxmail.com','1453623070','1','0','0','0.00','0','0','1','W8xP7Y','Jdkp6hC7fLEU');");
E_D("replace into `phome_enewsmember` values('17','hu123','3667dac754c3d5e20d68d1479bb53c19','JjuzigFHzhHj73dsZSKO','369341113@qq.com','1453631533','1','0','0','0.00','0','0','1','BocF5L','MRCygWAGlKA3');");
E_D("replace into `phome_enewsmember` values('18','admin123','612dd7127cc9524fb77591d94687df77','K9tpHI8sW3J8EDr9ysHz','admin123@qq.com','1453818816','1','0','0','0.00','0','0','1','5LyCXF','BnFSzTRHamlQ');");
E_D("replace into `phome_enewsmember` values('19','qgdhywu','9fc8333b3b28ee424766842a187d7a82','rL6gb12svhOjhX4dfG0O','1516869577@qq.com','1453828380','1','0','0','0.00','0','0','1','OXJemX','XhqWWFLlkMVM');");
E_D("replace into `phome_enewsmember` values('20','Dmcge','05ec43501d8f19efb337a3796296ae15','umzhW5ovI2yiNmUXO4PH','Ie91@qq.com','1453852233','1','0','0','0.00','0','0','1','OG4gHl','Q3RvG5XndT5o');");
E_D("replace into `phome_enewsmember` values('21','liuzhong3636','f8482c380b6a684affaff8cca665d515','FOGyABGvT9GkWBB2yciU','1471535213@qq.com','1453899916','1','0','0','0.00','0','0','1','egnCUN','XQbZ6sPHBHP1');");
E_D("replace into `phome_enewsmember` values('22','147258987','7c57b0d464c93f0f6ab2a67990aaa034','ctFLdTztoYvzFDQ6wcwV','1235829854@163.com','1453979793','1','0','0','0.00','0','0','1','pamGZJ','5PDcE43IT5IH');");
E_D("replace into `phome_enewsmember` values('23','wdy1234','286cb84c21cf30cd6ceba248321f4799','zHnhTWg23V1V1Nq5xUdD','wdy876688758@126.com','1454072581','1','0','0','0.00','0','0','1','Gbp7Rq','gMyjZ6ygIv9f');");
E_D("replace into `phome_enewsmember` values('24','mmm123','19a55f9c41f271d0412623ea2ec8550f','Vi73OvvYODQAIqjBbtTL','mmm@qq.com','1454305336','1','0','0','0.00','0','0','1','ZtoXz3','Owsjbyt8mMpU');");
E_D("replace into `phome_enewsmember` values('25','zxcv1120121212','f0163d982687ab3d36e32cf25f9ca2d2','dkPATx1QpbvEorLUJ9iM','1259820672@qq.com','1454310825','1','0','0','0.00','0','0','1','ZPV0SB','FFSa5Qm7XcJD');");
E_D("replace into `phome_enewsmember` values('26','youjia02','c73786b813fe58105191d7bf208c3bb5','fDEvidXo0MOoL9cERWxF','youjia02@qq.com','1454344384','1','0','0','0.00','0','0','1','2w90sB','kLuiENZSsioo');");
E_D("replace into `phome_enewsmember` values('27','bob018','d167b24c5c292bb496b057c67df84edf','NJccgnolAESq17cfU80Z','111@qq.com','1455699208','1','0','0','0.00','0','0','1','fr9nsR','6ybKXULYcKzT');");
E_D("replace into `phome_enewsmember` values('28','1998yon','5b66f8fdbeefabd386466a4446058636','V4HhZI5zGEalpKlu6CfJ','1998@qq.com','1455870508','1','0','0','0.00','0','0','1','cJKKx3','GMspTT98yuer');");
E_D("replace into `phome_enewsmember` values('29','pshomes','b3257acd52c898c2f332a3396dee3883','99BZsAXUVJPMlRkgfwlT','1471205800@qq.com','1456487024','1','0','0','0.00','0','0','1','W9OcPe','sBNxM9lYfKTY');");
E_D("replace into `phome_enewsmember` values('30','测试','009c9fa0be3f22f0690ebb0fd76cee93','jp6U5pEef2NxEhPzzGuQ','12345678@aa.com','1456570427','1','0','0','0.00','0','0','1','J7kk7U','lVsksA3N0kMa');");
E_D("replace into `phome_enewsmember` values('31','admin','3e8a6b31dfda8e50ba22b9a0608f202b','WZlq4ffrh2GD66wmlj5g','5865165@gmail.com','1456800098','1','0','0','0.00','0','0','1','QN04CF','7uazlJrcH6Z9');");
E_D("replace into `phome_enewsmember` values('32','www','e6dc4dd5e6f764e727b31aaf12ae6bfd','SwSFcj50iZ9y0mY7UdBY','11111@qqq.cn','1457114950','1','0','0','0.00','0','0','1','B8ka9a','zxo2rDcRm6oJ');");
E_D("replace into `phome_enewsmember` values('33','test122','125551ee239bccf3f66d2540cb40ae6f','jqBchYTM6Ce8Pl19f35r','12312@q.com','1457141988','1','0','0','0.00','0','0','1','Axcews','cEz2OLgRnjlZ');");
E_D("replace into `phome_enewsmember` values('34','qq18188','3371dc8e6ee415b3b2caaf0b62513107','v329lswgpBQaneqKI6Zq','qq18188@QQ.COM','1457337911','1','0','0','0.00','0','0','1','496e0H','2lvvQPDM7qfz');");
E_D("replace into `phome_enewsmember` values('35','士大夫','c46b07ee52871f41b75c43fd8b77287a','6p6RrgJwRjktCtNb4oxc','97251230@qq.com','1457510084','1','0','0','0.00','0','0','1','MJ2Rqh','6rvs10EOSGfa');");
E_D("replace into `phome_enewsmember` values('36','yuanmeihe12','784a4b83bed656ce7729f565980c0b46','64IVemcSi6wT9HGmmr6m','546149191@qq.com','1457527621','1','0','0','0.00','0','0','1','QmbwrF','JLsPeYzfTqQ0');");
E_D("replace into `phome_enewsmember` values('37','wyq980','ef1a80d5c080a822d5f591da072644bd','Gr1qEJfWknOJVe7D9mVv','wyq980@123.com','1458018027','1','0','0','0.00','0','0','1','84Km9K','XPRkxl9QdGqq');");
E_D("replace into `phome_enewsmember` values('38','t112551','e095a6eb3ad90acaef1a92cab0d7cd84','5HxVrCHmCLheo4Ubnjqo','993277742@qq.com','1458165074','1','0','0','0.00','0','0','1','pjJz1E','rFJ9JayRbnS8');");
E_D("replace into `phome_enewsmember` values('39','mubaohui','4071ee9cf2a26d16c8fed97c3840e04b','mJzkNng3OBj81xJxSqRu','48158113@qq.com','1458186305','1','0','0','0.00','0','0','1','0PF94X','w89nSKy8rdiP');");
E_D("replace into `phome_enewsmember` values('40','测试员','b79c483137f8c9a3ace04730a9eeb78e','DqFmNQH9Ost01t7APlzD','1321646@qq.com','1458224727','1','0','0','0.00','0','0','1','Jp23mc','3UoOkZv322We');");
E_D("replace into `phome_enewsmember` values('41','2597201314','94486b3be6c7d37230890ca1aca4ef83','hMohFe7nNXcSe5KLDQiX','2597201314@qq.com','1458241313','1','0','0','0.00','0','0','1','naSor3','EbgVtCmGiTne');");
E_D("replace into `phome_enewsmember` values('42','hao123456','04c6bafd2721277c6dc790391a61ec9a','yXJsBwKEZ1UWVPzIilbu','4546546@qq.com','1458267652','1','0','0','0.00','0','0','1','n6aQUc','5pRaPG9aZ4tQ');");
E_D("replace into `phome_enewsmember` values('43','KK1477','868b5e8bedab22f3ca42b44b1b5d664d','yNcKXVFuF2ohCctHzihd','fasf654654@163.com','1458300214','1','0','0','0.00','0','0','1','BfybfK','esZ46PK886mE');");
E_D("replace into `phome_enewsmember` values('44','kk2233','64087ab2dee5ffa065f2e1add4138c18','sSgBMZedL6XTE6eQ6c4Q','kk2233@163.com','1458377491','1','0','0','0.00','0','0','1','L947wg','hhOaEnH8z35p');");
E_D("replace into `phome_enewsmember` values('45','freeboy','59efa91fe3dd540ceb9b39885f67c9b6','xVu4gXOlXEddbuobRvdD','1476731077@qq.com','1458399720','1','0','0','0.00','0','0','1','qR5F4j','8AVJG9taayur');");
E_D("replace into `phome_enewsmember` values('46','12345688','42c75059f7a0e16c0df1ab4ebed19067','CTZWWarzecmZkdcn7NHW','12345688@qq.com','1458650827','1','0','0','0.00','0','0','1','z86nsV','ilzQmy5HRnVd');");
E_D("replace into `phome_enewsmember` values('47','duanjun','1ed8d10c588431a8cfeea77717977abf','K1yMK2Mdjh1KBhytkVxy','1232@q.com','1459358321','1','0','0','0.00','0','0','1','fkzJCa','LDe0ZPqOjdC4');");
E_D("replace into `phome_enewsmember` values('48','hao159159','ced25e06534b378951e6e05ee7a0234a','bCEdZV98KHYa2SLHjUax','hao159159@qq.com','1459655849','1','0','0','0.00','0','0','1','ZSUGk5','rJkprvhZfglG');");
E_D("replace into `phome_enewsmember` values('49','q393942123','485aa4916b03ef577a64162f5e147caf','RSfgvskB5IKkoJLCm1YY','393942123@qq.com','1459659051','1','0','0','0.00','0','0','1','QH88te','gfKZCqShVAS7');");
E_D("replace into `phome_enewsmember` values('50','karl1250','53adca3fbfe2769c342afcdef0d4f045','XwTkWuYb4hEU5VZP4cSx','123456@23.com','1459743425','1','0','0','0.00','0','0','1','ZQULXq','e8p45qoDg9Fr');");
E_D("replace into `phome_enewsmember` values('51','vipeng','5fde048788a8d280993b1dc3e1442ebc','BaOj16aDaiwnlKlHn7Hf','zhengvipeng@163.com','1459925769','1','0','0','0.00','0','0','1','NQYEjC','myPtLWfaJ7Cs');");

@include("../../inc/footer.php");
?>