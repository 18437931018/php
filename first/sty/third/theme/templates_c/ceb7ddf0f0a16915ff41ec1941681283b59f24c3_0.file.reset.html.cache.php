<?php
/* Smarty version 3.1.30, created on 2017-07-05 11:53:05
  from "D:\phpStudy\WWW\first\sty\third\theme\reset.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595c62a1d23d43_08655696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb7ddf0f0a16915ff41ec1941681283b59f24c3' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\first\\sty\\third\\theme\\reset.html',
      1 => 1499226768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_595c62a1d23d43_08655696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9165595c62a1c97b81_78296157';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻中心</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/kinmaxshow.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
	$(function(){	
	$("#kinmaxshow").kinMaxShow({
		height:420,
		intervalTime:3,
		switchTime:2000,
		button:{
			//按钮鼠标切换事件 可选事件 click、mouseover
			switchEvent:'click',
			//按钮上是否显示索引数字，从1开始，默认不显示
			showIndex:true,
			//按钮样式
			//正常 按钮样式  支持常规CSS样式，方法同jQuery css({key:val,……})
			normal:{width:'15px',height:'15px',lineHeight:'15px',border:"0px solid #FF0000",right:'5%',bottom:'10px',fontSize:'12px',color:"#0076d0",textAlign:'center',marginRight:'5px',fontFamily:"Verdana",float:'left'},
			//当前 按钮样式
			focus:{background:"green",border:"0px solid #FF0000",color:"#d96d22"}
		}
	});



	function DrawImage(ImgD,FitWidth,FitHeight){  
    var image=new Image();  
    image.src=ImgD.src;  
    if(image.width>0 && image.height>0){  
        if(image.width/image.height >= FitWidth/FitHeight){  
            if(image.width>FitWidth){  
                ImgD.width=FitWidth;  
                ImgD.height=(image.height*FitWidth)/image.width;  
            }  
            else{  
                ImgD.width=image.width;  
                ImgD.height=image.height;  
            }  
        }  
        else{  
            if(image.height>FitHeight){  
                ImgD.height=FitHeight;  
                ImgD.width=(image.width*FitHeight)/image.height;  
            }  
            else{  
                ImgD.width=image.width;  
                ImgD.height=image.height;  
            }  
        }  
    }  
} ;

  DrawImage(fitimg,110,110);
  DrawImage(fitimg2,110,110);



})
<?php echo '</script'; ?>
>

</head>
<body style="margin: 0px;background: #ccc;">

<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div style="width:200px;height:40px;background:#eee;position: absolute;top:1px;right: 20px;"><?php echo $_smarty_tpl->tpl_vars['user']->value['uname'];?>
欢迎你！<a href="../dengl">注销</a></div>

<div style="width: 1200px;height:500px;margin: 0 auto;background:red;">
     <div style="width: 30%;height: 500px;background:yellow;display: inline;float: left;">
       <div style="margin: 20px auto;width: 100px;height: 100px;background: green;">
       	 <img src="img/toux.jpg" id="fitimg">
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
       	 <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" id="fitimg2">
       </div>
       <div style="width: 99%;height: 300px;background:green;">
       	 <ul style="width: 99%;height: 300px;">
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">昵称：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['uname'];?>
" id='toname'></input></li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">个性签名：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['sign'];?>
" id='tosign'></input></li>
       	 	<li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;">QQ:<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['qq'];?>
" id='toqq'></input></li>
          <li style="width: 99%;height: 80px;background: blue;list-style: none;background: #eee;margin-top: 3px;text-align: center;"><input type='button' value='确定' id='forsure'></input></li>
       	 </ul>
       </div>
     </div>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
  
$(function(){
    $('#forsure').click(function(){
  var touname=$('#toname').val();
  var tosign=$('#tosign').val();
  var toqq=$('#toqq').val();
  
  var toid="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
";
 

  var toresult='uname'+'='+touname+'&'+'sign'+'='+tosign+'&'+'qq'+'='+toqq+'&id='+toid;
  
   $.ajax({
     url: 'isreset.php',
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
   
   var theurl='hout2.php?id='+toid;
   window.location.href=theurl;
   
})

})


<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>
</html><?php }
}
