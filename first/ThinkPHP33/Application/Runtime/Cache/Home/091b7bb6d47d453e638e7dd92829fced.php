<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<script type="text/javascript" src="/first/ThinkPHP33/Application/Common/js/jquery.js"></script>
	<script type="text/javascript" src="/first/ThinkPHP33/Application/Common/js/kinmaxshow.js"></script>
	<script type="text/javascript" src="/first/ThinkPHP33/Application/Common/js/common.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/first/ThinkPHP33/Application/Common/css/global.css">

</head>

 
<body>


<div style="width: 100%;height:500px;background: blue;">
  <div style="width:100%;height: 50px;background: url(/first/ThinkPHP33/img/bg_1.jpg);"> 	
      <div id="transform" style="font-size: 30px;color: red;background: yellow;border-radius: 40px;">😊</div>
    </div>
	<ul class="ul1">
	    <li><a href=""style="color: yellow;">首页</a></li>
		<li><a href="<?php echo U('dongt',array('id'=>$user['id']));?>"style="color: yellow;">动态</a></li>
		<li><a href="<?php echo U('user',array('id'=>$user['id']));?>"style="color: yellow;">个人中心</a></li>
		<li><a href=""style="color: yellow;">在线留言</a></li>
	</ul>
	<div  id="kinmaxshow">
	   <div><img src="/first/ThinkPHP33/img/banner_01.jpg"></div>
	   <div><img src="/first/ThinkPHP33/img/banner_02.jpg"></div>
	   <div><img src="/first/ThinkPHP33/img/banner_03.jpg"></div>
		
	</div>
</div>




<div style="width:200px;height:40px;background:#eee;position: absolute;top:1px;right: 20px;"><?php echo ($user['uname']); ?>欢迎你！<a href="../dengl">注销</a></div>

<div style="width: 1200px;height:500px;margin: 0 auto;background:red;">
     <div style="width: 30%;height: 500px;background:yellow;display: inline;float: left;">
       <div style="margin: 20px auto;width: 100px;height: 100px;background: green;">
       	 <img src="/first/ThinkPHP33/img/toux.jpg" id="fitimg" onload="javascript:DrawImage(this,110,110);">
       </div>
       <div style="width: 99%;height: 300px;background:green;">
       	 <ul style="width: 99%;height: 300px;">
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">昵称：<?php echo ($user['uname']); ?></li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">个性签名：<?php echo ($user['sign']); ?></li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">QQ:<?php echo ($user['qq']); ?></li>

       	 </ul>
       </div>
     	
     </div>
     <div style="width: 70%;height: 500px;background: blue;display: inline;float: left;">
     	  <div style="margin: 20px auto;width: 100px;height: 100px;background: green;">
       	 <img src="<?php echo ($user['img']); ?>" id="fitimg2" onload="javascript:DrawImage(this,110,110);">
       </div>
       <div style="width: 99%;height: 300px;background:green;">
       	 <ul style="width: 99%;height: 300px;">
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">昵称：<?php echo ($user['uname']); ?></li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">个性签名：<?php echo ($user['sign']); ?></li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">QQ:<?php echo ($user['qq']); ?></li>
          <li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;text-align: center;"><a href="<?php echo U('reset',array('id'=>$user['id']));?>">修改信息</a>&nbsp;&nbsp;<a href="<?php echo U('msg',array('id'=>$user['id']));?>">发布动态</a></li>
       	 </ul>
       </div>
     </div>

</div>


<div style="wihth:100%;height:80px;background:url(/first/ThinkPHP33/img/foot_bg.jpg);overflow: hidden;">
  <div style="width:1000px;height:70px;text-align:center;color:#fff;line-height:18px;margin:0 auto;padding:29px;">
  	 版权所有：看看工作室 联系人：魏先生  电话18437931018 地址：洛阳市伊川县水寨镇
  	 <br /> 技术支持：魏先生&nbsp;<a href="admindl.php?id=<?php echo ($user['id']); ?>">【管理员】</a>
  </div>

</div>


	
</body>
</html>