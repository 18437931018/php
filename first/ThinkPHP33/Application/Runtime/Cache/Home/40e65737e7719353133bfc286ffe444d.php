<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>看看</title>
  <script type="text/javascript" src="/thinkphp33/Application/Common/js/jquery.js"></script>
  <script type="text/javascript" src="/thinkphp33/Application/Common/js/kinmaxshow.js"></script>
  <script type="text/javascript" src="/thinkphp33/Application/Common/js/common.js"></script>
  
  <link rel="stylesheet" type="text/css" href="/thinkphp33/Application/Common/css/global.css">

</head>
<body style="margin: 0px;background: #ccc;">


<div style="width: 100%;height:500px;background: blue;">
  <div style="width:100%;height: 50px;background: url(/thinkphp33/img/bg_1.jpg);"> 	
      <div id="transform" style="font-size: 30px;color: red;background: yellow;border-radius: 40px;">😊</div>
    </div>
	<ul class="ul1">
	    <li><a href=""style="color: yellow;">首页</a></li>
		<li><a href="dongt.php?id=<?php echo ($user['id']); ?>"style="color: yellow;">动态</a></li>
		<li><a href="hout2.php?id=<?php echo ($user['id']); ?>"style="color: yellow;">个人中心</a></li>
		<li><a href=""style="color: yellow;">在线留言</a></li>
	</ul>
	<div  id="kinmaxshow">
	   <div><img src="/thinkphp33/img/banner_01.jpg"></div>
	   <div><img src="/thinkphp33/img/banner_02.jpg"></div>
	   <div><img src="/thinkphp33/img/banner_03.jpg"></div>
		
	</div>
</div>

<div style="width:200px;height:40px;background:#eee;position: absolute;top:1px;right: 20px;"><?php echo ($user['uname']); ?>欢迎你！<a href="../dengl">注销</a></div>

<div style="width: 1200px;height:500px;margin: 0 auto;background:red;">
     <div style="width: 30%;height: 500px;background:yellow;display: inline;float: left;">
       <div style="margin: 20px auto;width: 100px;height: 100px;background: green;">
       	 <img src="/thinkphp33/img/toux.jpg" id="fitimg" onload="javascript:DrawImage(this,110,110);">
       </div>
       <div style="width: 99%;height: 300px;background:green;">
       	 <ul style="width: 99%;height: 300px;">
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">昵称：sfsf</li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">个性签名：ssssssssssssssssssss</li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">QQ:</li>

       	 </ul>
       </div>
     	
     </div>
     <div style="width: 70%;height: 500px;background: blue;display: inline;float: left;">
     	  <div style="margin: 20px auto;width: 100px;height: 100px;background: green;">
       	 <img src="<?php echo ($user['img']); ?>" id="fitimg2">
       </div>
       <div style="width: 99%;height: 300px;background:green;">
       	 <ul style="width: 99%;height: 300px;">
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">昵称：<input type="text" value="<?php echo ($user['uname']); ?>" id='toname'></input></li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">个性签名：<input type="text" value="<?php echo ($user['sign']); ?>" id='tosign'></input></li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">QQ:<input type="text" value="<?php echo ($user['qq']); ?>" id='toqq'></input></li>
          <li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;text-align: center;"><input type='button' value='确定' id='forsure'></input></li>
       	 </ul>
       </div>
     </div>

</div>
<script type="text/javascript">
  
$(function(){
    $('#forsure').click(function(){
  var touname=$('#toname').val();
  var tosign=$('#tosign').val();
  var toqq=$('#toqq').val();
  var url="<?php echo U(isreset);?>";
  
  var toid="<?php echo ($user['id']); ?>";
  
 

  var toresult='uname'+'='+touname+'&'+'sign'+'='+tosign+'&'+'qq'+'='+toqq+'&id='+toid;
  
   $.ajax({
     url: url,
     type: 'GET',
     
     dataType: 'text',
     data: toresult
   })
   .done(function(s) {
     console.log(s);
   })
   .fail(function() {
     console.log("error");
   })
   .always(function() {
     console.log("complete");
   });
   var toid="<?php echo ($user['id']); ?>";
 
  
   
   var theurl='/thinkphp33/index.php/Home/User/user/id/'+toid;
   alert(theurl);
   window.location.href=theurl;
   
})

})


</script>

<div style="wihth:100%;height:80px;background:url(/thinkphp33/img/foot_bg.jpg);overflow: hidden;">
  <div style="width:1000px;height:70px;text-align:center;color:#fff;line-height:18px;margin:0 auto;padding:29px;">
  	 版权所有：看看工作室 联系人：魏先生  电话18437931018 地址：洛阳市伊川县水寨镇
  	 <br /> 技术支持：魏先生&nbsp;<a href="admindl.php?id=<?php echo ($user['id']); ?>">【管理员】</a>
  </div>

</div>


</body>
</html>