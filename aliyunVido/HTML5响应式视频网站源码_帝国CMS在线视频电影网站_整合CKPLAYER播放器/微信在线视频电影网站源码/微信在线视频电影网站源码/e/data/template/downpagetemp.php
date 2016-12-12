<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>下载地址</title>
<link rel="stylesheet" href="/skin/moyu_usercp/amazeui.min.css"/>
</head>
<body style="text-align:center; margin:0 auto">
<div class="am-container" style="text-align:center; margin:80px auto;">
<table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
  <tbody>
<tr>
      <td width="50%" style="font-size: 14px; font-family:'微软雅黑';text-align:center;padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#ffffff; background:  #FF7D00;"><a style="color:#ffffff" href="/">返回首页</a></td>
      <td width="50%" style="font-size: 14px; font-family:'微软雅黑';text-align:center;padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#ffffff; background:  #FF7D00;"><a style="color:#ffffff" href="/e/member/cp/">会员中心</a></td>
      </tr>
  </tbody>
</table>
       <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
  <tbody>
      <tr>
      <td width="12%" style="font-size: 14px; font-family:'微软雅黑';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#244986; background:  #b5d4e2;">下载名称:</td>
      <td colspan="5" style="font-size: 12px; font-family:'微软雅黑'; color: #000000; padding: 5px; line-height: 36px;border-right:1px solid #FFFFFF; border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9"><?=$r[title]?></td>
      </tr>
       <tr>
      <td style="font-size: 14px; font-family:'微软雅黑';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-right:1px solid#CCCCCC; border-bottom:1px solid #FFFFFF; border-left:1px solid#CCCCCC;font-weight: bold; color:#244986; background:  #b5d4e2;">下载地址:</td>
      <td colspan="3" style="font-size: 12px; font-family:'微软雅黑'; color: #000000; padding: 5px; line-height: 36px;border-right:1px solid #FFFFFF; border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9"><a href="<?=$url?>" style="color:#000; text-decoration:none" target="_blank"><--点这里下载本资源--></a></td>


      <td colspan="2" style="font-size: 12px; font-family:'微软雅黑'; color: #000000; padding: 5px; line-height: 36px; border-bottom:1px solid  #FFFFFF border-right:1px solid #FFFFFF;border-bottom:1px solid #FFFFFF ; text-align: left; padding-left:30px; background: #F9F9F9">提取密码：<?=$r[downurltext]?></td>
    </tr>
     <td colspan="6" style="font-size: 14px; font-family:'微软雅黑';text-align:center; color: #000000; padding: 5px; line-height: 36px; border-bottom:1px solid #F3F3F3; font-weight: bold; color: #CCCCCC; height:60px ">如果资源不能下载，提取密码错误，链接失效等下载问题，请反馈给我们会在第一时间给您处理！</td>
      </tr>
  </tbody>
</table>
</div> 
</div>
</td>
</tr>
</table>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/skin/moyu_usercp/rem.min.js"></script>
<script src="/skin/moyu_usercp/respond.min.js"></script>
<script src="/skin/moyu_usercp/amazeui.legacy.js"></script>
<![endif]--> 

<!--[if (gte IE 9)|!(IE)]><!--> 
<script src="/skin/moyu_usercp/jquery.min.js"></script> 
<script src="/skin/moyu_usercp/amazeui.min.js"></script> 
<!--<![endif]-->
</body>
</html>