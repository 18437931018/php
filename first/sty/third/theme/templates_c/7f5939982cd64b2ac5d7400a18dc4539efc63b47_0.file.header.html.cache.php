<?php
/* Smarty version 3.1.30, created on 2017-07-11 09:02:53
  from "D:\phpStudy\WWW\first\sty\third\theme\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596423bdc3c842_67726558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f5939982cd64b2ac5d7400a18dc4539efc63b47' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\first\\sty\\third\\theme\\header.html',
      1 => 1499734972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596423bdc3c842_67726558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16108596423bdbd2857_50462587';
?>

<div style="width: 100%;height:500px;background: blue;">
  <div style="width:100%;height: 50px;background: url(img/bg_1.jpg);"> 	
      <div id="transform" style="font-size: 30px;color: red;background: yellow;border-radius: 40px;">😊</div>
    </div>
	<ul class="ul1">
	    <li><a href=""style="color: yellow;">首页</a></li>
		<li><a href="dongt.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"style="color: yellow;">动态</a></li>
		<li><a href="hout2.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"style="color: yellow;">个人中心</a></li>
		<li><a href=""style="color: yellow;">在线留言</a></li>
	</ul>
	<div  id="kinmaxshow">
	   <div><img src="img/banner_01.jpg"></div>
	   <div><img src="img/banner_02.jpg"></div>
	   <div><img src="img/banner_03.jpg"></div>
		
	</div>
</div><?php }
}
