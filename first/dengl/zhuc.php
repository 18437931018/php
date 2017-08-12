<?php
header("Content-type: text/html; charset=utf-8"); 
$uname=$_GET['uname'];
$psd=$_GET['psd'];
if (!empty($uname)&&!empty($psd)) {
require "mysql_connect.php";
 
$sql ="INSERT INTO `users`(`uname`, `psd`) VALUES ('$uname','$psd') "; //SQL语句
 
$result = mysql_query($sql,$conn); //查询
 mysql_close(); 

 echo "<script type='text/javascript'>window.location.href='zhuc.html';alert('注册成功')</script>";
}else{
	echo "<script type='text/javascript'>window.location.href='zhuc.html';alert('请输入账户和密码')</script>";
}


?>