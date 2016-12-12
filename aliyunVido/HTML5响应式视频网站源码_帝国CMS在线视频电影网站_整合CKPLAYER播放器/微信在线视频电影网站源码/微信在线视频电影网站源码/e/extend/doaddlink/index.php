<?php
require('../../class/connect.php');
require('../../class/db_sql.php');
$link=db_connect();
$empire=new mysqlquery();
$editor=1;

//提交友情链接
function user_qAddLink($add){
	global $empire,$dbtbpre,$public_r;
	$lname=RepPostStr($add['lname']);
	$lpic=RepPostStr($add['lpic']);
	$lurl=RepPostStr($add['lurl']);
	$email=RepPostStr($add['email']);
	$lsay=RepPostStr($add['lsay']);
	if(!$lname||!$lurl)
	{
		printerror2('请输入站点名称和网站地址','');
	}
	//验证码
	$keyvname='checkplkey';
	ecmsCheckShowKey($keyvname,$add['key'],1);
	$ltime=date("Y-m-d H:i:s");
	$width='88';
	$height='31';
	$classid=0;
	$target='_blank';
	$sql=$empire->query("insert into {$dbtbpre}enewslink(lname,lpic,lurl,ltime,onclick,width,height,target,myorder,email,lsay,ltype,checked,classid) values('$lname','$lpic','$lurl','$ltime','0','$width','$height','$target','0','$email','$lsay','0','0','$classid');");
	if($sql)
	{
		printerror2('提交完毕，请等待管理员处理',$public_r['newsurl']);
	}
	else
	{
		printerror2('数据库出错，请稍后再提交','');
	}
}

$ecms=$_POST['ecms'];
if($ecms=='qAddLink')
{
	user_qAddLink($_POST);
}

require('template/index.temp.php');

db_close();
$empire=null;
?>