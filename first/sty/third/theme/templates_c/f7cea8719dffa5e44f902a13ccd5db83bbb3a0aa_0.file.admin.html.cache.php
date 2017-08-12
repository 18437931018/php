<?php
/* Smarty version 3.1.30, created on 2017-07-11 19:03:56
  from "D:\phpStudy\WWW\first\sty\third\theme\admin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964b09c8f57e6_70807538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7cea8719dffa5e44f902a13ccd5db83bbb3a0aa' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\first\\sty\\third\\theme\\admin.html',
      1 => 1499771033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964b09c8f57e6_70807538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '278605964b09c84e411_86655680';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="margin:9px auto;width:500px;height: 300px;overflow: scroll;background: yellow;">


	<table border="5" cellspacing="0">
	<td>用户名</td>
	<td>账号</td>
	<td>操作</td>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['touser']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
		 <tr>
		 	<td><?php echo $_smarty_tpl->tpl_vars['user']->value['uname'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user'];?>
</td><td><a href="shanc.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&oldid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
">删除</a></td>
		 </tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


	

	</table>
	
	</div>
	<div style="margin:9px auto;width:500px;height: 300px;overflow: scroll;background: yellow;">
		
		<table border="5" cellspacing="0">
	<td>用户名</td>
	<td>内容</td>
	<td>操作</td>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tomsg']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		 <tr>
		 	<td><?php echo $_smarty_tpl->tpl_vars['msg']->value['uname'];?>
</td><td><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['msg']->value['content']),0,15,"utf-8");?>
</td><td><a href="shanc.php?fid=<?php echo $_smarty_tpl->tpl_vars['msg']->value['id'];?>
&oldid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
">删除</a></td>
		 </tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


	

	</table>
	</div>

	<div style="width: 200px;height: 100px;margin: 9px auto;"><a href="hout2.php?id=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
">返回首页</a></div>
	
</body>
</html><?php }
}
