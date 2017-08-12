<?php 
require "mysql_smarty_config.php";

$topid=$_POST['pid'];
$tomsg=$_POST['tomsg'];
$sql0="SELECT * FROM `users` WHERE `id`='$topid'";
$result0=mysql_query($sql0,$conn);
$row0=mysql_fetch_array($result0);
$uname=$row0['uname'];
$time=time();
$sql="INSERT INTO `msg`(`pid`,`uname`,`content`,`time`) VALUES ('$topid','$uname','$tomsg','$time')";
$result=mysql_query($sql,$conn);

 ?>