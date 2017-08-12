<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>

<div style="width:300px;height:300px;background:#eee;margin:20px auto;text-align: center;">
  <form action="<?php echo U('User/yanz');?>" method="get">
	用户：<input type="text" name="user"></input><br />
	密码：<input type="text" name="psd"></input><br />
	
	<input type="submit" value="登录"></input>
	<a href="javascrip:history.back()">返回上一层</a>
</form>  
</div>
</body>
</html>