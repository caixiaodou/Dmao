<?php /* Smarty version 3.1.24, created on 2015-07-19 19:23:01
         compiled from "C:/wamp/www/application/views/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1791855ab8895d57c54_58384133%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5558712930df3f14d2af5b651fd04a86e4d5f2c' => 
    array (
      0 => 'C:/wamp/www/application/views/index.html',
      1 => 1437304977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1791855ab8895d57c54_58384133',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55ab8895e2aeb5_14632201',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ab8895e2aeb5_14632201')) {
function content_55ab8895e2aeb5_14632201 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1791855ab8895d57c54_58384133';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>菜小兜</title>

<!--<base href="<?php echo '<?php  ';?>echo base_url();<?php echo '?>';?>"/>-->

<link href="css/index.css" rel="stylesheet" type="text/css" /> <!--自己动手编写的css-->
<?php echo '<script'; ?>
 src="http://localhost/js/index.js" type="text/javascript"><?php echo '</script'; ?>
>  <!--自己动手编写的js-->
<?php echo '<script'; ?>
 src="http://localhost/js/myfocus/myfocus-2.0.1.min.js" type="text/javascript"><?php echo '</script'; ?>
> <!--引入myfocus库-->
<?php echo '<script'; ?>
 src="http://localhost/js/myfocus/mf-pattern/mF_YSlider.js" type="text/javascript"><?php echo '</script'; ?>
>  <!-- 引入风格js文件-->
<link href="http://localhost/js/myfocus/mf-pattern/mF_YSlider.css" rel="stylesheet" type="text/css"/> <!--引入风格css文件-->

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
            	<img src="http://localhost/images/logo_mid.png" /><a href="index.html">菜小兜</a>
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
                    	<li class="one1"><a href="caixiaodou?page=login.html">登录</a></li>
                        <li class="two1"><a href="caixiaodou?page=register.html">注册</a></li>
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
        
        <div class="focusPic" id="picBox">  <!--添加焦点图 focusPic开始-->
        	<!--<div class="loading"><img src="images/loading.gif" alt="图片加载中" /></div>-->  <!--焦点图缓冲界面-->
        	<div class="pic"> <!--左边放焦点图--><!--focusPic_left-->
            	<ul>
                	<li><img src="http://localhost/images/focusPic1.jpg" /></li>
                  <li><img src="http://localhost/images/focusPic2.jpg" /></li>
                  <li><img src="http://localhost/images/focusPic3.jpg" /></li>
                </ul>
            </div>
            <div class="focusPic_right"> <!--右边放小广告宣传图-->
            	<div class="ad">
                	
                </div>
            </div>
          </div> <!-- focusPic结束-->
        
        <div class="focusPic_right">  <!--右边放小广告宣传图-->
            	<div class="ad">
                	<br />
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
            </div>
            
        <div class="main"> <!--主菜单main开始-->
        	<div class="course"> <!--course开始-->
            	<div class="course_left">
                	<a href="#"><img src="http://localhost/images/menu_1.jpg" /><!--数据库输出--></a>
                     <h2 class="menu_title"><a href="#">椒丝腐肉空心菜<!--数据库输出--></a></h2>
                     <p class="one">口感咸香爽脆，烹饪方法多种多样<!--数据库输出--></p>
                     <p class="two">¥21.00<!--数据库输出--></p>
                     <a href="#"><img src="http://localhost/images/tips_3.png" class="chg" /></a><p class="three"><a href="#">放入菜兜</a></p>
                </div>
                
                <div class="course_right">
                	<a href="#"><img src="images/menu_1.jpg" /><!--数据库输出--></a>
                    <h2 class="menu_title"><a href="#">椒丝腐肉空心菜<!--数据库输出--></a></h2>
                    <p class="one">口感咸香爽脆，烹饪方法多种多样<!--数据库输出--></p>
                    <p class="two">¥21.00<!--数据库输出--></p>
                    <a href="#"><img src="images/tips_3.png" class="chg" /></a><p class="three"><a href="#">放入菜兜</a></p>
                </div>
            </div> <!-- course结束-->
            <div class="tips">  <!--小提示tips开始-->
                <div class="tips_left">
                   <ul>
                      <li class="tips1"><img src="images/tips_1.png" />21<!--数据库输出--></li>
                      <li class="tips2"><img src="images/tips_2.png" />5分钟<!--数据库输出--></li>
                   </ul>
                 </div>
                <div class="tips_right">
                   <ul>
                      <li class="tips1"><img src="images/tips_1.png" />21<!--数据库输出--></li>
                      <li class="tips2"><img src="images/tips_2.png" />5分钟<!--数据库输出--></li>
                   </ul>
                 </div>
            </div><!--小提示tips结束-->
            
            <div class="seg"><img src="images/seg1.png" /></div>    <!--分割线-->
            
            <div class="course"> <!--course开始-->
            	<div class="course_left">
                	<a href="#"><img src="images/menu_1.jpg" /><!--数据库输出--></a>
                     <h2 class="menu_title"><a href="#">椒丝腐肉空心菜<!--数据库输出--></a></h2>
                     <p class="one">口感咸香爽脆，烹饪方法多种多样<!--数据库输出--></p>
                     <p class="two">¥21.00<!--数据库输出--></p>
                     <a href="#"><img src="images/tips_3.png" class="chg" /></a><p class="three"><a href="#">放入菜兜</a></p>
                </div>
                
                <div class="course_right">
                	<a href="#"><img src="images/menu_1.jpg" /><!--数据库输出--></a>
                    <h2 class="menu_title"><a href="#">椒丝腐肉空心菜<!--数据库输出--></a></h2>
                    <p class="one">口感咸香爽脆，烹饪方法多种多样<!--数据库输出--></p>
                    <p class="two">¥21.00<!--数据库输出--></p>
                    <a href="#"><img src="images/tips_3.png" class="chg" /></a><p class="three"><a href="#">放入菜兜</a></p>
                </div>
            </div> <!-- course结束-->
            <div class="tips">  <!--小提示tips开始-->
                <div class="tips_left">
                   <ul>
                      <li class="tips1"><img src="images/tips_1.png" />21<!--数据库输出--></li>
                      <li class="tips2"><img src="images/tips_2.png" />5分钟<!--数据库输出--></li>
                   </ul>
                 </div>
                <div class="tips_right">
                   <ul>
                      <li class="tips1"><img src="images/tips_1.png" />21<!--数据库输出--></li>
                      <li class="tips2"><img src="images/tips_2.png" />5分钟<!--数据库输出--></li>
                   </ul>
                 </div>
            </div><!--小提示tips结束-->
            
            <div class="seg"><img src="images/seg1.png" /></div>    <!--分割线-->
            
      </div>  <!--main结束-->
     
    </div>  <!--wrap结束-->
    
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
<?php }
}
?>