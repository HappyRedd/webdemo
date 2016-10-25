## 移动h5开发资源整理
如今的Web开发的原则是移动端优先，做了好多项目，学习了好多框架，现在越发觉得基础的重要性！
### h5页面基本组成
```
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>
</body>
```
### meta viewport模板
```
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar -style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" cintent="email=no">
    <title>title</title>
</head>
<body>
</body>
```
以上模板支持响应式布局！
### 手机拍照和上传图片
<input type="file">的accept 属性
```
<!-- 选择照片 -->
<input type="file" capture="camera" accept="image/*" name="image" id="file">

<!-- 选择视频 -->
<input type="file" accept="video/*">
```
### 去除浏览器按钮默认样式
发现在安卓和电脑上正常的按钮到苹果手机上不正常了，后来发现是浏览器有默认样式。禁止就行了。
```
input {
    -webkit-appearance: none;
}
```
### 隐藏滚动条
可以不显示滚动条但页面依旧可以滚动。仅webkit内核浏览器中有效(Chrome,Safari)。嫌滚动条不好看的同学可以试试。
```
::-webkit-scrollbar{
    width: 0px
}
```
### 动态引入js文件
```
var oHead = document.getElementsByTagName('head')[0];
var oScript= document.createElement("script");
oScript.type = "text/javascript";
oScript.src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js";
oHead.appendChild(oScript);
```
### 动态创建meta属性
```
var meta=document.createElement('meta');
meta.setAttribute('name','viewport');
meta.setAttribute('content','initialwidth=device-width,initial-scale=1');
document.getElementsByTagName('head')[0].appendChild(meta);
```
### CSS设置文字省略隐藏
```
.ellipsis_txt{
  display:-webkit-box;
  -webkit-line-clamp:2;
  overflow:hidden;
  word-break:break-all;
  text-overflow:ellipsis;
  -webkit-box-orient:vertical;
}
```
  -webkit-line-clamp:2;表示最多显示2行文字；
  第二种方法，默认显示一行：
  ```
  .ellipsis{
    overflow:hidden;
    text-overflow:ellipsis;
    display:inline-block;
    width:95%;
  }
  ```
  ellipsis必须是块级元素，必须指定其宽度！
### 元素float后，父元素没有高度问题
在CSS里定义了如CLASS 类这样的浮动后，你会发现父div名box没有高度，所以右时候感觉到父div
的margin没有效果，这种情况下，只需要给父div加个overflow:hidden就可以了，eg：
```
.box{overflow:hidden}
```  
### fixed定位与虚拟键盘冲突问题
移动端里 输入框input获取焦点得时，虚拟键盘会把fixed元素顶上去。

使用媒体查询解决：
```
@meta (max-height:400px;){
  .footer{
    display:none;
  }
}
```
### div之间的空隙
当两个div紧挨着的时候没有空隙，中间有空格或者换行就有了空隙，这是为什么？
使用display:inline-block会导致元素间有间隙
解决办法：父元素设置font-size:0;
### 微信不支持支付宝方法
使用iframe。在alipay_submit.class.php文件中增加一个方法：
```
/**
* 使用iframe嵌入支付宝支付
* @date: 2016年10月25日 下午16:35:05
* @author: Redd
*/
function buildRequestUrl($para_temp, $method, $button_name) {
    //待请求参数数组
    $para = $this->buildRequestParaToString($para_temp);
    $url = $this->alipay_gateway_new. $para;

    $sHtml = '<head><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0"/>
</head>';
    $sHtml .= '<iframe src="'.$url.'" width="100%" height="100%" frameborder="0"></iframe>';
    return $sHtml;
}
```
注意这里的```$this->alipay_gateway_new```是```http://wappaygw.alipay.com/service/rest.htm```。

然后调用时将默认的```buildRequestForm```改为```buildRequestUrl```方法即可。
但是有个问题，我们设置的```callback```页面（一般是订单详情，显示支付成功与否的页面），这时候也在iframe里面，我们需要跳出。方法是：
在```callback```页面增加一段js代码;
```
if(top.location!=self.location)top.location=self.location;
```
