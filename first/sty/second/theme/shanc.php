<?php

require "mysql_connect.php";
$id=$_GET['id'];

$sql="DELETE FROM `news` WHERE id=$id" ;
mysql_query($sql,$conn);
mysql_close();
$uname=$_GET['toname'];
echo "<script type='text/javascript'>location.href='hout.php?uname=$uname'</script>";

?>