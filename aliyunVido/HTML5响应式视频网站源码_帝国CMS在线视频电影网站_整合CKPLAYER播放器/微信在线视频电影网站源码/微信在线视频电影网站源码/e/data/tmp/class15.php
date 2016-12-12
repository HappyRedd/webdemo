<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="dns-prefetch" href="//apps.bdimg.com">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="<?=$public_r[sitename]?>">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="keywords" content="" />
<meta name="description" content=" " />
<title>联系我们--<?=$public_r[sitename]?></title>
<link rel='stylesheet' id='_bootstrap-css'  href='/skin/ecms082/css/bootstrap.min.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='_fontawesome-css'  href='/skin/ecms082/css/font-awesome.min.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='_main-css'  href='/skin/ecms082/css/main.css?ver=1.3' type='text/css' media='all' />
<script type='text/javascript' src='/skin/ecms082/js/jquery.min.js?ver=1.3'></script>
<link rel="shortcut icon" href="/skin/ecms082/images/favicon.ico">
<!--[if lt IE 9]><script src="/skin/ecms082/js/html5.min.js"></script><![endif]-->
</head>
<body class="page">
<header class="header">
  <div class="container">
    <h1 class="logo"><a href="/" title="<?=$public_r[sitename]?>"><img src="/skin/ecms082/images/logo.png"><?=$public_r[sitename]?></a></h1>
    <div class="brand">视频分享 <br>
      如果不可以播放请换个看看</div>
    <ul class="site-nav site-navbar">
      <li id="menu-item-0" class="<?=$GLOBALS[navclassid]?"":"current_page_item"?>"><a rel="nofollow" href="/"><i class="fa fa-home"></i>&nbsp;&nbsp;首页</a></li>
        <?php
$sql=$empire->query("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc");
    while($s=$empire->fetch($sql)){
    	$tclass="";
        $value=''; 
        $fr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
        $topbclassid=$fr[1]?$fr[1]:$GLOBALS[navclassid];
        if($topbclassid==$s[classid]){
        	$tclass='current_page_item';
        }
        $classurl=sys_ReturnBqClassname($s,9);
        $value=ReturnClassAddField($s[classid],'lanpic');
        if($value!=''){
        $value='<i class="fa '.ReturnClassAddField($s[classid],'lanpic').'"></i>'; 
        }
        if(!$s[islast]){
        $value2='<span class="caret"></span>';
        }
        echo '<li id="menu-item-'.$s[classid].'" class="'.$tclass.'"><a href="'.$classurl.'">'.$value.'&nbsp;&nbsp;'.$s[classname].'</a>';
        if(!$s[islast]){
        	$sql2=$empire->query("select classid,classname from {$dbtbpre}enewsclass where bclassid=$s[classid] and showclass=0 order by myorder,myorder asc");
            $str="";
            while($s2=$empire->fetch($sql2)){
            	$classurl2=sys_ReturnBqClassname($s2,9); 
            	$str.='<li><a href="'.$classurl2.'">'.$s2[classname].'</a></li>';
            }
            echo '<ul class="sub-menu">'.$str.'</ul>';
        }
        echo '</li>';
    }
?>
<li class="navto-search"><a href="javascript:;" class="search-show active"><i class="fa fa-search"></i></a></li>
    </ul>
    <div class="topbar">
      <ul class="site-nav topmenu">
        <li><a target="_blank" href="http://www.dede168.com/"><font color="red"><i class="fa fa-thumbs-o-up"></i> 推荐：dede168</font></a></li>
        <li><a href="/misc/tags"><i class="fa fa-tags"></i> 标签云</a></li>
        <li><a href="/misc/ads"><i class="fa fa-line-chart"></i> 广告合作</a></li>
        <li><a href="/misc/message"><i class="fa fa-comment-o"></i> 留言反馈</a></li>
        <li class="menusns"> <a href="javascript:;">关注本站 <i class="fa fa-angle-down"></i></a>
          <ul class="sub-menu">
            <li><a class="sns-wechat" href="javascript:;" title="关注”<?=$public_r[sitename]?>“" data-src="/skin/ecms082/images/weixin-qrcode.jpg"><i class="fa fa-wechat"></i> 微信</a></li>
            <li><a target="_blank" rel="external nofollow" href="<?=$public_r['add_xlwb']?>"><i class="fa fa-weibo"></i> 微博</a></li>
            <li><a target="_blank" rel="external nofollow" href="<?=$public_r['add_txwb']?>"><i class="fa fa-tencent-weibo"></i> 腾讯微博</a></li>
            <li><a target="_blank" href="/e/web/"><i class="fa fa-rss"></i> RSS订阅</a></li>
          </ul>
        </li>
      </ul>
      <script src="/e/member/login/loginjs.php"></script> </div>
    <i class="fa fa-bars m-icon-nav"></i> </div>
</header>
<div class="site-search">
  <div class="container">
    <form onsubmit="return checkSearchForm()" method="post" name="searchform" id="searchform" class="site-search-form" action="/e/search/index.php" >

      <input class="search-input" name="keyboard" type="text" placeholder="输入关键字" value="">
      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
      <input type="hidden" value="title" name="show">
          <input type="hidden" value="1" name="tempid">
          <input type="hidden" value="news" name="tbname">
          <input name="mid" value="1" type="hidden">
          <input name="dopost" value="search" type="hidden">
    </form>
  </div>
</div>
<section class="container container-page">
  <div class="pageside">
    <div class="pagemenus">
      <ul class="pagemenu">
      <? @sys_ShowClassByTemp(8,1,0,0);?>
      </ul>
    </div>
  </div>
  <div class="content">
    <header class="article-header">
      <h1 class="article-title">联系我们</h1>
    </header>
    <article class="article-content">
       <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classtext from {$dbtbpre}enewsclassadd where classid='$GLOBALS[navclassid]'",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?=$bqr[classtext]?>
<?php
}
}
?>
    </article>
  </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="fcode"> </div>
    <p>&copy; 2016 <a href="/"><?=$public_r[sitename]?></a> <a href="/misc/copyright/" target="_blank">免责声明</a> <a href="/misc/tougao/" target="_blank">投稿规则</a> <a href="http://www.miitbeian.gov.cn" target="_blank"><?=$public_r['add_icp']?></a> <?=$public_r['add_tongji']?><br>
    </p>
     </div>
</footer>
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?=$public_r['add_duoshuo']?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<script>
window.jsui={
    www: '/',
    uri: '/skin/ecms082',
    ver: '1.3',
	roll: ["1","2"],
    ajaxpager: '0',
    url_rp: '/skin/ecms082'
};
</script> 
<script type='text/javascript' src='/skin/ecms082/js/bootstrap.min.js?ver=1.3'></script> 
<script type='text/javascript' src='/skin/ecms082/js/loader.js?ver=1.3'></script>
</body>
</html>