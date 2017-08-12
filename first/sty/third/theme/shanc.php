<?php 
$id=$_GET['id'];
$oldid=$_GET['oldid'];

require "mysql_smarty_config.php";
$sql="DELETE FROM `users` WHERE `id`='$id'";
$result=mysql_query($sql,$conn);

$fid=$_GET['fid'];
echo $fid;
$sql2="DELETE FROM `msg` WHERE `id`='$fid'";
$result=mysql_query($sql2,$conn);

echo "<script type='text/javascript'>alert('操作成功');window.location.href='admin.php?id=$oldid'</script>";


?>