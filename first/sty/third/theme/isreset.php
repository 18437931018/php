<?php
require "mysql_smarty_config.php";




$uname=$_GET['uname'];
$sign=$_GET['sign'];
$qq=$_GET['qq'];
$id=$_GET['id'];

$regtime=time();







$sql ="UPDATE `users` SET `uname`='$uname',`sign`='$sign',`qq`='$qq',`regtime`='$regtime' WHERE id='$id'"; 
$result = mysql_query($sql,$conn); //查询
mysql_close();





?>