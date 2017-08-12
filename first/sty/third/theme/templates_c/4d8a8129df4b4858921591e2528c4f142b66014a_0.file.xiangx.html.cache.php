<?php
/* Smarty version 3.1.30, created on 2017-07-11 13:30:25
  from "D:\phpStudy\WWW\first\sty\third\theme\xiangx.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59646271e703c1_53066873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d8a8129df4b4858921591e2528c4f142b66014a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\first\\sty\\third\\theme\\xiangx.html',
      1 => 1499751019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59646271e703c1_53066873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1738859646271df8a01_67193050';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div style="text-align: center;">
	<h2>作者：<?php echo $_smarty_tpl->tpl_vars['toresult']->value['uname'];?>
</h2>
	<h3>浏览次数：<?php echo $_smarty_tpl->tpl_vars['toresult']->value['browse'];?>
</h3>
	<em><?php echo $_smarty_tpl->tpl_vars['toresult']->value['content'];?>
</em>
	<br /><br />
	<input type="button" value="返回" onclick="javascript:history.back();"></input>
</div>
	

</body>
</html><?php }
}
