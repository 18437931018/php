<?php
/* Smarty version 3.1.30, created on 2017-06-25 11:16:44
  from "D:\phpStudy\WWW\first\sty\first\demo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594f2b1c1e1de1_59197428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cc17900b57065cd18245c77facf66c9a778edc0' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\first\\sty\\first\\demo.html',
      1 => 1498360179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594f2b1c1e1de1_59197428 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'z');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
?>
 	姓名：<?php echo $_smarty_tpl->tpl_vars['z']->value[0];?>

 	性别：<?php echo $_smarty_tpl->tpl_vars['z']->value[1];?>

 	<br />
 	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<!-- \\<?php echo $_smarty_tpl->tpl_vars['t']->value[1][1];?>
   -->
</body>
</html><?php }
}
