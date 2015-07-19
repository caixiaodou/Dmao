<?php /* Smarty version 3.1.24, created on 2015-07-19 18:43:32
         compiled from "C:/wamp/www/application/views/register.html" */ ?>
<?php
/*%%SmartyHeaderCode:3204555ab7f54b1ede6_26253163%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84ffff4245f890b454d9349069ebcdf6c32105af' => 
    array (
      0 => 'C:/wamp/www/application/views/register.html',
      1 => 1437295025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3204555ab7f54b1ede6_26253163',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55ab7f54bb3474_46262538',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ab7f54bb3474_46262538')) {
function content_55ab7f54bb3474_46262538 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3204555ab7f54b1ede6_26253163';
?>
<!--<IFRAME border=0 frameBorder=no height=193 marginHeight=0 marginWidth=0 scrolling=no src="header.html" width=100<?php echo '%>';?></IFRAME>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>菜小兜</title>
<link href="css/register.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css" /> <!--自己动手编写的css-->
<?php echo '<script'; ?>
 src="js/index.js" type="text/javascript"><?php echo '</script'; ?>
>  <!--自己动手编写的js-->
<?php echo '<script'; ?>
 src="js/myfocus/myfocus-2.0.1.min.js" type="text/javascript"><?php echo '</script'; ?>
> <!--引入myfocus库-->
<?php echo '<script'; ?>
 src="js/myfocus/mf-pattern/mF_YSlider.js" type="text/javascript"><?php echo '</script'; ?>
>  <!-- 引入风格js文件-->
<link href="js/myfocus/mf-pattern/mF_YSlider.css" rel="stylesheet" type="text/css"/> <!--引入风格css文件-->

<?php echo '<script'; ?>
 type="text/javascript">
	myFocus.set({
		id:'picBox',   <!--简单的调用———可以只设置它的盒子id，其它参数全部默认-->
		time:3,       <!--//切换时间间隔(秒)-->
		<!--trigger:'click',//触发切换模式:'click'(点击)/'mouseover'(悬停)-->
		}) 
<?php echo '</script'; ?>
>
</head>

<body>
	<div class="top"> <!--top开始-->
    	<div class="top_content"> <!--top_content开始-->
        	
        </div>  <!--top_content结束-->
    </div>   <!--top结束-->
	
    <div class="wrap"> <!--html页面最外端盒子 wrap开始-->
    
    	<div class="logo"> <!--logo区开始-->
        	<div class="logo_left">
            	<!--<span class="logo_left_1">-->嘿、菜小兜<!--</span>-->
            </div>
            <div class="logo_mid">
            	<img src="images/logo_mid.png" /><a href="index.html">菜小兜</a>
            </div>
        </div> <!--logo区结束-->
        
        <div class="nav"> <!--导航区nav开始-->
        	<div class="nav_left">
            	<ul>
                	<li class="one">口味</li>
                    <li class="two">全部菜品</li>
                    <li class="three">新品推荐</li>
                    <li class="four">素菜</li>
                    <li class="five">荤菜</li>
                    <li class="six">汤菜</li>
                </ul>
            </div>
            <div class="nav_right"> <!--nav_right开始-->
            	<div class="nav_right_up">
                	<ul>
                    	<li class="one1"><a href="login.html">登陆</a></li>
                        <li class="two1"><a href="register.html">注册</a></li>
                        <li class="three1"><a href="#">开始订餐</a></li>
                        <li class="four1"><a href="member.html">会员中心</a></li>
                        <li class="five1"><a href="#">帮助中心</a></li>
                        <li class="six1"><a href="caidou.html">我的菜兜</a></li>
                    </ul>
                </div>
                <div class="nav_right_down">
                	<table>
                    	<td>
                        	<select name="place" size="1">
                            	<option value="none">---自提点选择---</option>
                                <option value="">江夏</option>
                                <option value="">五山</option>
                                <option value="">大学城南</option>
                            </select>
                        </td>
                    </table>
                </div>
            </div>  <!--nav_right结束-->
        </div> <!--导航区nav结束-->
            <div class="gap">
                
            </div>  
    	
	
    <div class="register"> <!--register开始-->  
    	<div class="register_left">
       		<a href="discount"><img src="images/register_adv.jpg"/></a>  
                  	
        </div>
        
        <div class="register_right"> <!--右边注册填写区-->
        	<div class="register_right_up"><!--右边注册-->
            	<div class="text1"><a href="caixiaodou?page=login.html">【立即登录】</a></div>
                <div class="text2">我已经注册</div>
                <div class="text3">用户注册</div>
            </div>
        </div><!--右边注册填写区结束-->
        <form class="register_right_down" action="register/addUser" method="post"><!--注册表单-->
  			<div class="seg"> <!--表单开始-->
            <p><span class="star">*</span>
            <span class="text">昵称:</p></span><input class="frame" type="text" name="UserName" />
            <br /><br />
			<p><span class="star">*</span>
            <span class="text">手机号码:</p></span><input class="frame" type="text" name="UserTel" />
            <br /><br />
  			<p><span class="text0">电子邮箱:</p></span><input class="frame" type="text" name="Email" />
			<br /><br />
            <p><span class="star">*</span>
            <span class="text">登录密码:</p></span><input class="frame" type="password" name="UserPassword" />
            <br /><br />
            <p><span class="star">*</span>
            <span class="text">确认密码:</p></span><input class="frame" type="password" name="UserPasswordC" />
             <br /><br />
            
            	<form action="##" method="post"><!--验证码及会员政策表单开始-->
                	<input class="chack" type="submit" value="获取验证码" style="cursor:pointer"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="chack_frame" type="text" name="chack" />
                	<br /><br />
                	<input class="rule" type="checkbox" name="rule" />&nbsp;我已阅读并同意<span>&nbsp;&nbsp;<a href="vip.html" class="vip">会员政策</a></span>
 					<input class="submit" type="submit" value="立即注册" style="cursor:pointer"/>
                </form><!--验证码及会员政策表单结束-->
                
            </div><!--表单结束-->
           
           
            </form><!--注册表单结束-->
    </div>  <!--register结束-->  
  </div> <!--wrap结束-->
   <div class="footer"> <!--页尾footer开始-->
    	<div class="footer_up">
        	<img src="images/footer_up1.png" />
        </div>
        <div class="footer_down">
        	<h3>版权所有 © 菜小兜 2015 All Rights Reserved 京ICP备14009300
				<br />技术支持 弄潮少年团队</h3>
        </div>
    </div>  <!--footer结束-->
</body>
</html>

<!--<IFRAME border=0 frameBorder=no height=314 marginHeight=0 marginWidth=0 scrolling=no src="footer.html" width=100<?php echo '%>';?></IFRAME>-->


<?php }
}
?>