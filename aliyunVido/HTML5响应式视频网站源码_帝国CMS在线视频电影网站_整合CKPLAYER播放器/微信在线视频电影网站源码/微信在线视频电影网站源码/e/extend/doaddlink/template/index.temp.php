<?php
if(!defined('InEmpireCMS'))
{
        exit();
}
?>
<?php
$url="<a href='../../../'>首页</a>&nbsp;>&nbsp;申请友情链接";
require(ECMS_PATH.'e/data/template/cp_1.php');
?>
<script>
function CheckLinkForm(obj){
	if(obj.lname.value=='')
	{
		alert('请输入站点名称');
		obj.lname.focus();
		return false;
	}
	if(obj.lurl.value==''||obj.lurl.value=='http://')
	{
		alert('请输入网站地址');
		obj.lurl.focus();
		return false;
	}
	if(obj.key.value=='')
	{
		alert('请输入验证码');
		obj.key.focus();
		return false;
	}
	return true;
}
</script>
<br>
<table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
  <form action="index.php" method="post" name="linkform" id="linkform" onsubmit="return CheckLinkForm(document.linkform);">
    <tr class="header"> 
      <td height="25" colspan="2">申请友情链接 
        <input name="ecms" type="hidden" id="ecms" value="qAddLink"> </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="26%" height="25">站点名称:</td>
      <td width="74%" height="25"> <input name="lname" type="text" id="lname" value="" size="42"> 
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td>站点LOGO图标:</td>
      <td height="25"> <input name="lpic" type="text" id="lpic" value="" size="42">
        <font color="#666666">(文字链接不需要填写)</font> </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">网站地址:</td>
      <td height="25"> <input name="lurl" type="text" id="lurl" value="http://" size="42"> 
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">联系邮箱:</td>
      <td height="25"><input name="email" type="text" id="email" value="" size="42"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">站点简介:</td>
      <td height="25"><textarea name="lsay" cols="50" rows="6" id="lsay"></textarea></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">验证码:</td>
      <td height="25"><input name="key" type="text" id="key" size="10">
        <img src="<?=$public_r[newsurl]?>e/ShowKey/?v=pl" border="0" align="absmiddle"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"> <input type="submit" name="Submit" value=" 提 交 "> </td>
    </tr>
  </form>
</table>
<br>
<?php
require(ECMS_PATH.'e/data/template/cp_2.php');
?>