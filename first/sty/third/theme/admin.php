<?php 

$id=$_GET['id'];
require "mysql_smarty_config.php";
$sql="SELECT * FROM `users`";
$result=mysql_query($sql,$conn);
$arr=array();
 while($row=mysql_fetch_array($result)){
     array_push($arr, $row);
 };

$sql2="SELECT * FROM `msg`";
$result2=mysql_query($sql2);
$arr2=array();
 while($row2=mysql_fetch_array($result2)){
     array_push($arr2, $row2);
 };
$smarty->assign('toid',$id);
$smarty->assign('touser',$arr);
$smarty->assign('tomsg',$arr2);
$smarty->display('admin.html');

?>