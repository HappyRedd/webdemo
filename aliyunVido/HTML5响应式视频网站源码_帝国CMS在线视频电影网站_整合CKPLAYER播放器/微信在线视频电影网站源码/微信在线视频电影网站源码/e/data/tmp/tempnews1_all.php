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
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?> " />
<title><?=$grpagetitle?>--<?=$public_r[sitename]?></title>
<link rel='stylesheet' id='_bootstrap-css'  href='/skin/ecms082/css/bootstrap.min.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='_fontawesome-css'  href='/skin/ecms082/css/font-awesome.min.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='_main-css'  href='/skin/ecms082/css/main.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='_main-css'  href='/skin/ecms082/css/ldc-lite.css' type='text/css' media='all' />
<script type='text/javascript' src='/skin/ecms082/js/jquery.min.js?ver=1.3'></script>
<link rel="shortcut icon" href="/skin/ecms082/images/favicon.ico">
<!--[if lt IE 9]><script src="/skin/ecms082/js/html5.min.js"></script><![endif]-->
<script type="text/javascript" src="/e/data/js/ajax.js"></script>
<div id='wx_pic' style='margin:0 auto;display:none;'>
<img src='<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>' />
</div>
</head>
<body class="single single-post">
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
<section class="container">
  <div class="content-wrap">
      <div class="pagetitle" style="margin-top: 10px;>
        <h1><?=$grurl?></h1>
      </div>
    <div class="content">
      <header class="article-header">
        <h1 class="article-title"><a href="<?=$grtitleurl?>"><?=$ecms_gr[title]?></a></h1>
        <div class="video">

<iframe name= "iFrame1" width="100%" height="100%" src= "/e/DownSys/play/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&pathid=<?=$_playur?>"  frameborder= "0"> </iframe>
            
        </div>
        <div class="bfdz">
<?php
$rr=explode(egetzy('rn'),$navinfor[onlinepath]);
$rcount=count($rr);
for($pathi=0;$pathi<$rcount;$pathi++)
{
$fr=explode('::::::',$rr[$pathi]);
?>
<a href= "/e/DownSys/play/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&pathid=<?=$pathi?>" target= "iFrame1" class="lBtn"><?=$fr[0]?></a>
          <?php
}
?>
</div>
<?php
if($navinfor[downpath]!=''){
?>
<div class="meihua_1">在线下载列表</div>
<div class="meihua_2">
  <div class="meihua_2_1">
    <p>
<?php
$rr=explode(egetzy('rn'),$navinfor[downpath]);
$rcount=count($rr);
for($pathi=0;$pathi<$rcount;$pathi++)
{
$fr=explode('::::::',$rr[$pathi]);
?>
    <a class="meihua_btn" href="/e/DownSys/DownSoft/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&pathid=<?=$pathi?>"><?=$fr[0]?></a>
<?php
}
?>
    </p>
  </div>
</div>
<?php
}
?>

        <div class="article-Info">
          <ul class="site-nav Infomenu">
            <li>
              <p class="plikeleft"><a style="float:left" href="JavaScript:makeRequest('/e/public/digg/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');" class="action action-like"><span class="ldc-ul_cont ldc_red" title=顶><img src="/skin/ecms082/images/thumbs-up.png" />&nbsp;<span id="diggnum"><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script></span>&nbsp;</span></a><a style="float:left" href="JavaScript:makeRequest('/e/public/digg/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=0&doajax=1&ajaxarea=diggdown','EchoReturnedText','GET','');" class="action action-like"><span class="ldc-ul_cont ldc_green" title=踩><img src="/skin/ecms082/images/thumbs-down.png" />&nbsp;<span id="diggdown"><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=6></script></span>&nbsp;</span></a></p>
              </i>
            <li>
              <p class="kkk"><i class="fa fa-youtube-play"></i>阅读(<script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script>)</p>
            </li>
            <li><a href="/e/public/report/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>" class="kkk" target="_blank"> <i class="fa fa-exclamation-triangle"></i>视频报错</a></li>
            <li></li>
          </ul>
        </div>
        <div class="article-tags"> 分类和标签：<a href="<?=$grclassurl?>" rel="category tag"><?=$class_r[$ecms_gr[classid]][classname]?></a> <? @sys_eShowTags('selfinfo',10,0,'',0,'','',0,'','tagname');?></div>
      </header>
      <article class="article-content">
<img style="display:none" src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>"/>
        <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
        <p class="asb-post-footer"><script src=/d/js/acmsd/thea1.js></script></p>
        <p class="post-copyright">未经允许不得转载：<a href="/"><?=$public_r[sitename]?></a> &raquo; <a href="<?=$grtitleurl?>"><?=$ecms_gr[title]?></a></p>
      </article>
      <div class="action-share bdsharebuttonbox"> <span>分享到：</span><a class="bds_qzone" data-cmd="qzone"></a><a class="bds_tsina" data-cmd="tsina"></a><a class="bds_weixin" data-cmd="weixin"></a><a class="bds_tqq" data-cmd="tqq"></a><a class="bds_sqq" data-cmd="sqq"></a><a class="bds_bdhome" data-cmd="bdhome"></a><a class="bds_tqf" data-cmd="tqf"></a><a class="bds_renren" data-cmd="renren"></a><a class="bds_diandian" data-cmd="diandian"></a><a class="bds_youdao" data-cmd="youdao"></a><a class="bds_ty" data-cmd="ty"></a><a class="bds_kaixin001" data-cmd="kaixin001"></a><a class="bds_taobao" data-cmd="taobao"></a><a class="bds_douban" data-cmd="douban"></a><a class="bds_fbook" data-cmd="fbook"></a><a class="bds_twi" data-cmd="twi"></a><a class="bds_mail" data-cmd="mail"></a><a class="bds_copy" data-cmd="copy"></a><a class="bds_more" data-cmd="more">更多</a> <span>(</span><a class="bds_count" data-cmd="count"></a><span>)</span> </div>
      <div class="article-tags"></div>
      <div class="relates">
        <div class="title">
          <h3>相关推荐</h3>
        </div>
        <ul>
          <? @sys_GetOtherLinkInfo(13,'news',8,32,0,1,0);?>
        </ul>
      </div>
      <div class="asb asb-post asb-post-03"></div>
      <div class="title" id="comments">
        <h3>评论</h3>
      </div>
      <div id="respond" class="no_webshot">
        <div class="ds-thread" data-category="<?=$ecms_gr[classid]?>" data-thread-key="<?=$ecms_gr[id]?>" data-title="<?=$ecms_gr[title]?>"></div> 
      </div>
    </div>
  </div>
  <aside class="sidebar">
    <div class="widget widget_ui_posts">
      <h3>热门视频</h3>
      <ul>
      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',6,1,1,'','onclick DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr['titleurl']?>"><span class="thumbnail"><img data-src="<?=sys_ResizeImg($bqr[titlepic],448,252,1)?>" class="thumb"></span><span class="text"><?=$bqr['title']?></span><span class="muted"><?=date('Y-m-d',$bqr[newstime])?></span><span class="muted">浏览(<?=$bqr['onclick']?>)</span></a></li>
      <?php
}
}
?>
      </ul>
    </div>
  </aside>
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