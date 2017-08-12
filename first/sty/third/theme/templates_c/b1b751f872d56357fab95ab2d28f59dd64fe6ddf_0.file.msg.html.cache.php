<?php
/* Smarty version 3.1.30, created on 2017-07-20 10:11:18
  from "D:\phpStudy\WWW\first\sty\third\theme\msg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597011465cd930_30828020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1b751f872d56357fab95ab2d28f59dd64fe6ddf' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\first\\sty\\third\\theme\\msg.html',
      1 => 1500473219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_597011465cd930_30828020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9682597011460bde29_83683784';
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
欢迎你！<a href="qiant.php">注销</a></div>

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

           <?php echo '<script'; ?>
 type="text/javascript" src="js/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
           <?php echo '<script'; ?>
 type="text/javascript" src="js/ueditor/ueditor.all.min.js"><?php echo '</script'; ?>
>

           <?php echo '<script'; ?>
 type="text/plain" id="totext" name="totext"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript">
              var editor=UE.getEditor('totext', {
          autoHeightEnabled: false,
          autoFloatEnabled: false
        });
            <?php echo '</script'; ?>
>
       	  <div style="margin: 9px auto;width: 20px;height: 20px;">
            <input type="button" value="提交" id="tijiao"></input>
          </div>
          

         

       </div>
     </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript">
   $(function(){
     $('#tijiao').click(function(){
      var tocontent=editor.getContent();;
      var topid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
;

      alert(tocontent)
      
       $.ajax({
         url: 'tomsg.php',
         type: 'POST',
         dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
         async:false,
         data: {tomsg: tocontent,pid:topid}
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
       alert('发布成功');
       

      window.location.href='hout2.php?id=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
';
       
     })
 })
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
