<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=1 size=2><input type=hidden name=classid[] value=1></td><td onMouseUp='turnit(classdiv1);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>1</td><td><input type=checkbox name=reclassid[] value=1> <a href='/zxdy/' target=_blank>最新电影</a></td><td align=center>0</td><td><a href='#e' onclick=editc(1)>修改</a> <a href='#e' onclick=copyc(1)>复制</a> <a href='#e' onclick=delc(1)>删除</a></td><td><a href='#e' onclick=relist(1)>刷新</a> <a href='#e' onclick=renews(1,'news')>信息</a> <a href='#e' onclick=rejs(1)>JS</a> <a href='#e' onclick=tvurl(1)>调用</a></td></tr><tbody id='classdiv1'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=11 size=2><input type=hidden name=classid[] value=5></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(5)><img src='../data/images/txt.gif' border=0></a></td><td align=center>5</td><td><input type=checkbox name=reclassid[] value=5> <a href='/zxdy/dzp/' target=_blank>动作片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(5)>修改</a> <a href='#e' onclick=copyc(5)>复制</a> <a href='#e' onclick=delc(5)>删除</a></td><td><a href='#e' onclick=relist(5)>刷新</a> <a href='#e' onclick=renews(5,'news')>信息</a> <a href='#e' onclick=rejs(5)>JS</a> <a href='#e' onclick=tvurl(5)>调用</a> <a href='#e' onclick=ttc(5)>分类</a> <a href='#e' onclick=docinfo(5)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=12 size=2><input type=hidden name=classid[] value=6></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(6)><img src='../data/images/txt.gif' border=0></a></td><td align=center>6</td><td><input type=checkbox name=reclassid[] value=6> <a href='/zxdy/xjp/' target=_blank>喜剧片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(6)>修改</a> <a href='#e' onclick=copyc(6)>复制</a> <a href='#e' onclick=delc(6)>删除</a></td><td><a href='#e' onclick=relist(6)>刷新</a> <a href='#e' onclick=renews(6,'news')>信息</a> <a href='#e' onclick=rejs(6)>JS</a> <a href='#e' onclick=tvurl(6)>调用</a> <a href='#e' onclick=ttc(6)>分类</a> <a href='#e' onclick=docinfo(6)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=13 size=2><input type=hidden name=classid[] value=7></td><td>&nbsp;&nbsp;&nbsp;<a href='#e' onclick=addi(7)><img src='../data/images/txt.gif' border=0></a></td><td align=center>7</td><td><input type=checkbox name=reclassid[] value=7> <a href='/zxdy/khp/' target=_blank>科幻片</a></td><td align=center>0</td><td><a href='#e' onclick=editc(7)>修改</a> <a href='#e' onclick=copyc(7)>复制</a> <a href='#e' onclick=delc(7)>删除</a></td><td><a href='#e' onclick=relist(7)>刷新</a> <a href='#e' onclick=renews(7,'news')>信息</a> <a href='#e' onclick=rejs(7)>JS</a> <a href='#e' onclick=tvurl(7)>调用</a> <a href='#e' onclick=ttc(7)>分类</a> <a href='#e' onclick=docinfo(7)>归档</a></td></tr></tbody><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=2 size=2><input type=hidden name=classid[] value=2></td><td><a href='#e' onclick=addi(2)><img src='../data/images/txt.gif' border=0></a></td><td align=center>2</td><td><input type=checkbox name=reclassid[] value=2> <a href='/rbdsj/' target=_blank>热播电视剧</a></td><td align=center>0</td><td><a href='#e' onclick=editc(2)>修改</a> <a href='#e' onclick=copyc(2)>复制</a> <a href='#e' onclick=delc(2)>删除</a></td><td><a href='#e' onclick=relist(2)>刷新</a> <a href='#e' onclick=renews(2,'news')>信息</a> <a href='#e' onclick=rejs(2)>JS</a> <a href='#e' onclick=tvurl(2)>调用</a> <a href='#e' onclick=ttc(2)>分类</a> <a href='#e' onclick=docinfo(2)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=3 size=2><input type=hidden name=classid[] value=3></td><td><a href='#e' onclick=addi(3)><img src='../data/images/txt.gif' border=0></a></td><td align=center>3</td><td><input type=checkbox name=reclassid[] value=3> <a href='/xsp/' target=_blank>小视频</a></td><td align=center>0</td><td><a href='#e' onclick=editc(3)>修改</a> <a href='#e' onclick=copyc(3)>复制</a> <a href='#e' onclick=delc(3)>删除</a></td><td><a href='#e' onclick=relist(3)>刷新</a> <a href='#e' onclick=renews(3,'news')>信息</a> <a href='#e' onclick=rejs(3)>JS</a> <a href='#e' onclick=tvurl(3)>调用</a> <a href='#e' onclick=ttc(3)>分类</a> <a href='#e' onclick=docinfo(3)>归档</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=4 size=2><input type=hidden name=classid[] value=4></td><td><a href='#e' onclick=addi(4)><img src='../data/images/txt.gif' border=0></a></td><td align=center>4</td><td><input type=checkbox name=reclassid[] value=4> <a href='/wp/' target=_blank>微拍</a></td><td align=center>0</td><td><a href='#e' onclick=editc(4)>修改</a> <a href='#e' onclick=copyc(4)>复制</a> <a href='#e' onclick=delc(4)>删除</a></td><td><a href='#e' onclick=relist(4)>刷新</a> <a href='#e' onclick=renews(4,'news')>信息</a> <a href='#e' onclick=rejs(4)>JS</a> <a href='#e' onclick=tvurl(4)>调用</a> <a href='#e' onclick=ttc(4)>分类</a> <a href='#e' onclick=docinfo(4)>归档</a></td></tr><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=100 size=2><input type=hidden name=classid[] value=8></td><td onMouseUp='turnit(classdiv8);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>8</td><td><input type=checkbox name=reclassid[] value=8> <a href='/misc/' target=_blank>网站杂项（勿删）</a></td><td align=center>0</td><td><a href='#e' onclick=editc(8)>修改</a> <a href='#e' onclick=copyc(8)>复制</a> <a href='#e' onclick=delc(8)>删除</a></td><td><a href='#e' onclick=relist(8)>刷新</a> <a href='#e' onclick=renews(8,'news')>信息</a> <a href='#e' onclick=rejs(8)>JS</a> <a href='#e' onclick=tvurl(8)>调用</a></td></tr><tbody id='classdiv8'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=9></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>9</td><td><input type=checkbox name=reclassid[] value=9> <a href='/misc/tags/' target=_blank>标签云</a></td><td align=center>0</td><td><a href='#e' onclick=editc(9)>修改</a> <a href='#e' onclick=copyc(9)>复制</a> <a href='#e' onclick=delc(9)>删除</a></td><td><a href='#e' onclick=relist(9)>刷新</a> <a href='#e' onclick=renews(9,'news')>信息</a> <a href='#e' onclick=rejs(9)>JS</a> <a href='#e' onclick=tvurl(9)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=10></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>10</td><td><input type=checkbox name=reclassid[] value=10> <a href='/misc/copyright/' target=_blank>免责声明</a></td><td align=center>0</td><td><a href='#e' onclick=editc(10)>修改</a> <a href='#e' onclick=copyc(10)>复制</a> <a href='#e' onclick=delc(10)>删除</a></td><td><a href='#e' onclick=relist(10)>刷新</a> <a href='#e' onclick=renews(10,'news')>信息</a> <a href='#e' onclick=rejs(10)>JS</a> <a href='#e' onclick=tvurl(10)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=11></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>11</td><td><input type=checkbox name=reclassid[] value=11> <a href='/misc/about/' target=_blank>关于我们</a></td><td align=center>0</td><td><a href='#e' onclick=editc(11)>修改</a> <a href='#e' onclick=copyc(11)>复制</a> <a href='#e' onclick=delc(11)>删除</a></td><td><a href='#e' onclick=relist(11)>刷新</a> <a href='#e' onclick=renews(11,'news')>信息</a> <a href='#e' onclick=rejs(11)>JS</a> <a href='#e' onclick=tvurl(11)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=12></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>12</td><td><input type=checkbox name=reclassid[] value=12> <a href='/misc/tougao/' target=_blank>投稿规则</a></td><td align=center>0</td><td><a href='#e' onclick=editc(12)>修改</a> <a href='#e' onclick=copyc(12)>复制</a> <a href='#e' onclick=delc(12)>删除</a></td><td><a href='#e' onclick=relist(12)>刷新</a> <a href='#e' onclick=renews(12,'news')>信息</a> <a href='#e' onclick=rejs(12)>JS</a> <a href='#e' onclick=tvurl(12)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=13></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>13</td><td><input type=checkbox name=reclassid[] value=13> <a href='/misc/ads/' target=_blank>广告合作</a></td><td align=center>0</td><td><a href='#e' onclick=editc(13)>修改</a> <a href='#e' onclick=copyc(13)>复制</a> <a href='#e' onclick=delc(13)>删除</a></td><td><a href='#e' onclick=relist(13)>刷新</a> <a href='#e' onclick=renews(13,'news')>信息</a> <a href='#e' onclick=rejs(13)>JS</a> <a href='#e' onclick=tvurl(13)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=14></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>14</td><td><input type=checkbox name=reclassid[] value=14> <a href='/misc/message/' target=_blank>留言反馈</a></td><td align=center>0</td><td><a href='#e' onclick=editc(14)>修改</a> <a href='#e' onclick=copyc(14)>复制</a> <a href='#e' onclick=delc(14)>删除</a></td><td><a href='#e' onclick=relist(14)>刷新</a> <a href='#e' onclick=renews(14,'news')>信息</a> <a href='#e' onclick=rejs(14)>JS</a> <a href='#e' onclick=tvurl(14)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=15></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>15</td><td><input type=checkbox name=reclassid[] value=15> <a href='/misc/contact/' target=_blank>联系我们</a></td><td align=center>0</td><td><a href='#e' onclick=editc(15)>修改</a> <a href='#e' onclick=copyc(15)>复制</a> <a href='#e' onclick=delc(15)>删除</a></td><td><a href='#e' onclick=relist(15)>刷新</a> <a href='#e' onclick=renews(15,'news')>信息</a> <a href='#e' onclick=rejs(15)>JS</a> <a href='#e' onclick=tvurl(15)>调用</a></td></tr></tbody>