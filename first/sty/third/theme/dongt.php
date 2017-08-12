<?php
require "mysql_smarty_config.php";
$sql ="SELECT * FROM `msg` ORDER BY `time` DESC";
$result=mysql_query($sql,$conn);
$arr=array();
 while($row=mysql_fetch_array($result)){
     array_push($arr, $row);
 };
 $smarty->assign('arr',$arr);

 
$id=$_GET['id'];
$sql2 ="SELECT * FROM `users` WHERE `id`='$id'";
$result2=mysql_query($sql2,$conn);
$toresult2=mysql_fetch_array($result2);
$smarty->assign('user',$toresult2);




$smarty->display('dongt.html');


?>