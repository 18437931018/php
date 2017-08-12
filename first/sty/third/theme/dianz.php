<?php 
require "mysql_smarty_config.php";
$id=$_GET['id'];
$pid=$_GET['pid'];

$sql ="SELECT * FROM `msg` WHERE `id`='$id'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_array($result);

$torow=$row['click']+1;


$sql2="UPDATE `msg` SET `click`='$torow' WHERE `id`='$id'";
$result2=mysql_query($sql2);
mysql_close();

echo "<script type='text/javascript'>window.location.href='dongt.php?id=$pid'</script>";



 
?>