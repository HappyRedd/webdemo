<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php

$public_diyr['pagetitle']='提交订单页面';

$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;提交订单页面";

require(ECMS_PATH.'e/template/incfile/header.php');

?>
<?php
//显示配送方式
function ShowPs(){
	global $empire,$dbtbpre;
	$sql=$empire->query("select pid,pname,price,psay,isdefault from {$dbtbpre}enewsshopps where isclose=0 order by pid");
	$str='';
	while($r=$empire->fetch($sql))
	{
		$checked=$r[isdefault]==1?' checked':'';
		$str.="<table class='am-table am-table-bordered am-table-radius am-table-striped am-table-hover'>
  <tr> 
    <td> 
      <input type=radio name=psid value='".$r[pid]."'".$checked."><strong>".$r[pname]."</strong>
    </td>
    <td><strong>费用:￥".$r[price]."</strong></td>
  </tr>
  <tr> 
    <td colspan=2><table class='am-table am-table-bordered am-table-radius am-table-striped am-table-hover'><tr><td>".$r[psay]."</td></tr></table></td>
  </tr>
</table>";
	}
	return $str;
}

//显示支付方式
function ShowPayfs($pr,$user){
	global $empire,$dbtbpre;
	$str='';
	$sql=$empire->query("select payid,payname,payurl,paysay,userpay,userfen,isdefault from {$dbtbpre}enewsshoppayfs where isclose=0 order by payid");
	while($r=$empire->fetch($sql))
	{
		$checked=$r[isdefault]==1?' checked':'';
		$dis="";
		$words="";
		//扣点数
		if($r[userfen])
		{
			if($pr['buytype'])
			{
				$dis=" disabled";
				$words="&nbsp;<font color='#666666'>(您选择的商品至少有一个不支持点数购买)</font>";
			}
			else
			{
				if(getcvar('mluserid'))
				{
					if($user[userfen]<$pr['totalfen'])
					{
						$dis=" disabled";
						$words="&nbsp;<font color='#666666'>(您的帐号点数不足,不能使用此支付方式)</font>";
					}
				}
				else
				{
					$dis=" disabled";
					$words="&nbsp;<font color='#666666'>(您未登录,不能使用此支付方式)</font>";
				}
			}
		}
		//余额扣除
		elseif($r[userpay])
		{
			if(getcvar('mluserid'))
			{
				if($user[money]<$pr['totalmoney'])
				{
					$dis=" disabled";
					$words="&nbsp;<font color='#666666'>(您的帐号余额不足,不能使用此支付方式)</font>";
				}
			}
			else
			{
				$dis=" disabled";
				$words="&nbsp;<font color='#666666'>(您未登录,不能使用此支付方式)</font>";
			}
		}
		//网上支付
		elseif($r[payurl])
		{
			$words="";
		}
		else
		{}
		$str.="<tr><td><b><input type=radio name=payfsid value='".$r[payid]."'".$checked."".$dis.">".$r[payname]."</b>".$words."</td></tr><tr><td> <table class='am-table am-table-bordered am-table-radius am-table-striped am-table-hover'><tr><td>".$r[paysay]."</td></tr></table></td></tr>";
	}
	if($str)
	{
		$str="<table class='am-table am-table-bordered am-table-radius am-table-striped am-table-hover'>".$str."</table>";
	}
	return $str;
}

//提交地址
if($shoppr['buystep']==0)
{
	$formaction='../SubmitOrder/index.php';
	$formconfirm='';
	$formsubmit='<input type="submit" name="Submit" value=" 下一步 ">';
	$enewshidden='';
	$ddno='';
}
else
{
	$formaction='../doaction.php';
	$formconfirm=' onsubmit="return confirm(\'确认提交?\');"';
	$formsubmit='<input type="submit" name="Submit" value=" 提交订单 ">';
	$enewshidden='<input type=hidden name=enews value=AddDd>';
	$ddno=ShopSys_ReturnDdNo();//订单ID
}
?>

<form action="<?=$formaction?>" method="post" name="myorder" class="am-form" id="myorder"<?=$formconfirm?>>
  <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
  <?php
  if($ddno)
  {
  ?>
    <tr> 
      <td><strong>订单号: 
        <?=$ddno?>
        <input name="ddno" type="hidden" id="ddno" value="<?=$ddno?>">
        </strong></td>
    </tr>
  <?php
  }
  ?>
    <tr> 
      <td><strong>选择的商品</strong>　<?=$shoppr['buystep']!=2?'[<a href="../buycar/">修改购物车</a>]':''?></td>
    </tr>
    <tr> 
      <td> 
      <?php
	  include('buycar/buycar_order.php');
	  $pr=array();
	  $pr['totalmoney']=$totalmoney;
	  $pr['buytype']=$buytype;
	  $pr['totalfen']=$totalfen;
	  ?>
	  </td>
    </tr>
    <tr> 
      <td><table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
          <tr>
            <td><strong>收货人信息</strong></td>
            <td><div align="right">
			<?php
			if($user['userid'])
			{
				$addresssql=$empire->query("select addressid,addressname from {$dbtbpre}enewsshop_address where userid='$user[userid]'");
			?>
              <select name="addressid" id="addressid" onchange="window.location='index.php?addressid='+this.options[this.selectedIndex].value">
                <option value="0">选择预增加的配送地址</option>
				<?php
				while($chaddressr=$empire->fetch($addresssql))
				{
				?>
				<option value="<?=$chaddressr['addressid']?>"<?=$chaddressr['addressid']==$addressid?' selected':''?>><?=$chaddressr['addressname']?></option>
				<?php
				}
				?>
              </select>
			 <?php
			 }
			 ?>
            </div></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td>  <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
          <tr> 
            <td>真实姓名:</td>
            <td><input name="truename" type="text" id="truename" value="<?=$useraddr[truename]?>">
              <?=stristr($shoppr['ddmust'],',truename,')?'*':''?></td>
          </tr>
          <tr> 
            <td>固定电话:</td>
            <td><input name="mycall" type="text" id="mycall" value="<?=$useraddr[mycall]?>">
              <?=stristr($shoppr['ddmust'],',mycall,')?'*':''?></td>
          </tr>
          <tr> 
            <td>手机:</td>
            <td><input name="phone" type="text" id="phone" value="<?=$useraddr[phone]?>">
			  <?=stristr($shoppr['ddmust'],',phone,')?'*':''?></td>
          </tr>
          <tr> 
            <td>联系邮箱:</td>
            <td><input name="email" type="text" id="email" value="<?=$email?>">
              <?=stristr($shoppr['ddmust'],',email,')?'*':''?></td>
          </tr>
		  <tr> 
            <td>OICQ:</td>
            <td><input name="oicq" type="text" id="oicq" value="<?=$useraddr[oicq]?>">
			  <?=stristr($shoppr['ddmust'],',oicq,')?'*':''?></td>
          </tr>
          <tr> 
            <td>MSN:</td>
            <td><input name="msn" type="text" id="msn" value="<?=$useraddr[msn]?>">
			  <?=stristr($shoppr['ddmust'],',msn,')?'*':''?></td>
          </tr>
          <tr> 
            <td>联系地址:</td>
            <td><input name="address" type="text" id="address" value="<?=$useraddr[address]?>">
              <?=stristr($shoppr['ddmust'],',address,')?'*':''?></td>
          </tr>
          <tr> 
            <td>邮编:</td>
            <td><input name="zip" type="text" id="zip" value="<?=$useraddr[zip]?>">
			  <?=stristr($shoppr['ddmust'],',zip,')?'*':''?></td>
          </tr>
          <tr>
            <td>周边标志建筑:</td>
            <td><input name="signbuild" type="text" id="signbuild" value="<?=$useraddr[signbuild]?>">
              <?=stristr($shoppr['ddmust'],',signbuild,')?'*':''?></td>
          </tr>
          <tr>
            <td>最佳送货时间:</td>
            <td><input name="besttime" type="text" id="besttime" value="<?=$useraddr[besttime]?>">
              <?=stristr($shoppr['ddmust'],',besttime,')?'*':''?></td>
          </tr>
          <tr> 
            <td>备注:</td>
            <td><textarea name="bz" cols="65" rows="6" id="bz"></textarea>
			  <?=stristr($shoppr['ddmust'],',bz,')?'*':''?></td>
          </tr>
        </table></td>
    </tr>
	<?php
	if($shoppr['shoppsmust'])
	{
	$showps=ShowPs();
	if($showps)
	{
	?>
    <tr> 
      <td><strong>选择配送方式</strong></td>
    </tr>
    <tr> 
      <td> 
        <?=$showps?>      </td>
    </tr>
	<?php
	}
	}
	?>
	<?php
	if($shoppr['shoppayfsmust'])
	{
	$showpayfs=ShowPayfs($pr,$user);
	if($showpayfs)
	{
	?>
    <tr> 
      <td><strong>选择支付方式</strong></td>
    </tr>
    <tr> 
      <td> 
        <?=$showpayfs?>      </td>
    </tr>
	<?php
	}
	}
	?>
	<?
	//提供发票
	if($shoppr[havefp])
	{
	?>
    <tr> 
      <td>是否需要发票:
        <input name="fp" type="checkbox" id="fp" value="1">
        是(需增加 <?=$shoppr[fpnum]?>% 的费用)</td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr>
          <td>发票抬头:
            <input name="fptt" type="text" id="fptt" size="38"></td>
          </tr>
        <tr>
          <td>发票名称:
            <select name="fpname" id="fpname">
			<?php
			$fpnamer=explode("\r\n",$shoppr['fpname']);
			$fncount=count($fpnamer);
			for($i=0;$i<$fncount;$i++)
			{
			?>
			<option value="<?=$fpnamer[$i]?>"><?=$fpnamer[$i]?></option>
			<?php
			}
			?>
            </select>            </td>
          </tr>
      </table></td>
    </tr>
	<?
	}
	?>
    <tr>
      <td>使用优惠码</td>
    </tr>
    <tr>
      <td> <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
        <tr>
          <td width="20%">优惠码:</td>
          <td width="80%"><input name="precode" type="text" id="precode"></td>
        </tr>
      </table></td>
    </tr>
    <tr> 
      <td>
<div align="center"> 
		<?php
		if($shoppr['buystep']!=2)
		{
		?>
          <input type="button" name="Submit3" value=" 上一步 " onclick="history.go(-1)">
          &nbsp;&nbsp; &nbsp;&nbsp; 
		<?php
		}
		?>
		<?=$formsubmit?>
		<?=$enewshidden?>
          <input name="alltotal" type="hidden" id="alltotal" value="<?=$pr['totalmoney']?>">
          <input name="alltotalfen" type="hidden" id="alltotalfen" value="<?=$pr['totalfen']?>">
        </div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php

require(ECMS_PATH.'e/template/incfile/footer.php');

?>