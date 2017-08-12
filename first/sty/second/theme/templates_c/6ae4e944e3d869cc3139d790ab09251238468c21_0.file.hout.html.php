<?php
/* Smarty version 3.1.30, created on 2017-06-27 10:56:49
  from "D:\phpStudy\WWW\first\sty\second\theme\hout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5951c9717617b4_36584776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ae4e944e3d869cc3139d790ab09251238468c21' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\first\\sty\\second\\theme\\hout.html',
      1 => 1498532207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5951c9717617b4_36584776 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻中心(<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
)</title>
</head>
<body>
<div style="width:200px;height:40px;background:#eee;position: absolute;top:1px;right: 20px;"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
欢迎你！<a href="qiant.php">注销</a></div>
	

	标题：<input type="text" name="name" id="title"></input><br /><br />
	内容：<textarea style="width:300px;height:200px;" name="text" id="text"></textarea>
	<input type="button" value="提交" id="anniu"></input>

	<br />
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
	<a href="shanc.php?toname=<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['content']->value[0];?>
">删除</a>
	<br /><br /><br />
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="../jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
 $(function(){
 
 	$('#anniu').click(function(){
        	var totitle=$('#title').val();
 	        var totext=$('#text').val();
 	        var tostr='title'+'='+totitle+'&'+'text'+'='+totext;


 	        $.ajax({
 	        	url: 'insert.php',
 	        	type: 'GET',
 	        	dataType: 'text',
 	        	data: tostr
 	        })
 	        .done(function(s) {
 	        	console.log(s);
 	        })
 	        .fail(function() {
 	        	console.log("cuowl");
 	        })
 	        .always(function() {
 	        	console.log("wancl");
 	        });
 	        
 	    window.location.reload();
 	})
 })
	
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
