<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$postword=$enews=='EditAddress'?'修改地址':'增加地址';
$public_diyr['pagetitle']=$postword;
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../../member/cp/>会员中心</a>&nbsp;>&nbsp;<a href='ListAddress.php'>配送地址列表</a>&nbsp;>&nbsp;".$postword;
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
  <form action="../doaction.php" method="post" name="addform" class="am-form" id="addform">
    <tr class="header">
      <td colspan="2"><?=$postword?></td>
    </tr>
    <tr>
      <td>地址名称：</td>
      <td><input name="addressname" type="text" id="title2" value="<?=$r[addressname]?>">
      *</td>
    </tr>
    <tr>
      <td>姓名：</td>
      <td><input name="truename" type="text" id="addressname" value="<?=$r[truename]?>"></td>
    </tr>
    <tr>
      <td>邮箱地址：</td>
      <td><input name="email" type="text" id="truename" value="<?=$r[email]?>"></td>
    </tr>
    <tr>
      <td>固定电话：</td>
      <td><input name="mycall" type="text" id="email" value="<?=$r[mycall]?>"></td>
    </tr>
    <tr>
      <td>手机号码：</td>
      <td><input name="phone" type="text" id="mycall" value="<?=$r[phone]?>"></td>
    </tr>
    <tr>
      <td>QQ号码：</td>
      <td><input name="oicq" type="text" id="oicq" value="<?=$r[oicq]?>"></td>
    </tr>
    <tr>
      <td>MSN：</td>
      <td><input name="msn" type="text" id="msn" value="<?=$r[msn]?>"></td>
    </tr>
    <tr>
      <td>收货地址：</td>
      <td><input name="address" type="text" id="phone" value="<?=$r[address]?>"></td>
    </tr>
    <tr>
      <td>邮编：</td>
      <td><input name="zip" type="text" id="address" value="<?=$r[zip]?>"></td>
    </tr>
    <tr>
      <td>地址周边标志性建筑：</td>
      <td><input name="signbuild" type="text" id="zip" value="<?=$r[signbuild]?>"></td>
    </tr>
    <tr>
      <td>最佳收货时间：</td>
      <td><input name="besttime" type="text" id="signbuild" value="<?=$r[besttime]?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交">
        &nbsp;
        <input type="reset" name="Submit2" value="重置">
        <input name="enews" type="hidden" id="enews" value="<?=$enews?>">      <input name="addressid" type="hidden" id="addressid" value="<?=$addressid?>"></td>
    </tr>
  </form>
</table>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>
