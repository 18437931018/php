<?php 
$text=$_GET['text'];
$file=$_GET['file'];
echo $file;
echo $text;

$text=$_POST['text2'];
$file=$_POST['file2'];
echo $file2;
echo $text2;

$content=$_POST['textarea'];



$mysql_server_name='localhost'; //改成自己的mysql数据库服务器
 
$mysql_username='root'; //改成自己的mysql数据库用户名
 
$mysql_password='root'; //改成自己的mysql数据库密码
 
$mysql_database='message'; //改成自己的mysql数据库名
 

 
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
 
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.建议用UTF-8 国际标准编码.
 
mysql_select_db($mysql_database); //打开数据库

$sql="INSERT INTO `ces`(`text`,`img`) VALUES ('$text','$content')";
$result=mysql_query($sql,$conn);


$sql2="SELECT * FROM `ces` WHERE `id`='37'";
$result2=mysql_query($sql2,$conn);
$theres=mysql_fetch_array($result2);

echo $theres['img'];

require "smarty/Smarty.class.php";
$smarty=new smarty();
$smarty->assign('con',$content);
$smarty->assign('con2',$theres);
$smarty->display('../../../ue3.html');


?>