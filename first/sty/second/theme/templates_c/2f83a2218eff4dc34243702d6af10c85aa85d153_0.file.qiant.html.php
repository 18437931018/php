<?php
/* Smarty version 3.1.30, created on 2017-06-27 18:14:23
  from "D:\phpStudy\WWW\first\sty\second\theme\qiant.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59522fff4a2da4_16444041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f83a2218eff4dc34243702d6af10c85aa85d153' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\first\\sty\\second\\theme\\qiant.html',
      1 => 1498534189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59522fff4a2da4_16444041 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻中心</title>
</head>
<body>

<div style="width:200px;height:40px;background:#eee;position: absolute;top:1px;right: 20px;">
	<a href="../dengl/dengl.html">登录</a>
	<a href="../dengl/zhuc.html">注册</a>

</div>
	
<form action="char.php" method="get">
	标题：<input type="text" name="name"></input><br /><br />
	内容：<textarea style="width:300px;height:200px;" name="text"></textarea>
	<input type="submit"></input>

</form>	<br />
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toresult']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
	标题：<a href="xiangx-<?php echo $_smarty_tpl->tpl_vars['content']->value[0];?>
.html" title="详细"><?php echo $_smarty_tpl->tpl_vars['content']->value[1];?>
</a><br />

	内容：<?php echo $_smarty_tpl->tpl_vars['content']->value[2];?>
<br />
	<a href="#" onclick="dengl()">删除</a>
	<br /><br /><br />
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php echo '<script'; ?>
 type="text/javascript">
	function dengl(){
		if (confirm('请先登录')) {
			window.location.href='../dengl'
		}else{
			alert('你没有权限')
		}
	}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
