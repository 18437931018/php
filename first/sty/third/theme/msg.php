<?php
require "mysql_smarty_config.php";

$id=$_GET['id'];
$sql ="SELECT * FROM `users` WHERE `id`='$id'"; //SQL语句
 
$result = mysql_query($sql,$conn); //查询
$toresult=mysql_fetch_array($result);
$smarty->assign('user',$toresult);



$smarty->assign('toid',$id);

$smarty->display('msg.html');

?>