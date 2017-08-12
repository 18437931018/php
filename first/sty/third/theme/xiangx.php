<?php
$id=$_GET['id'];
require "mysql_smarty_config.php";

$sql="SELECT * FROM `msg` WHERE id='$id'" ;
$result=mysql_query($sql,$conn);

$row=mysql_fetch_array($result);

$therow=$row['browse']+1;


$sql2="UPDATE `msg` SET `browse`='$therow'";
$result2=mysql_query($sql2,$conn);

$sql3="SELECT * FROM `msg` WHERE id='$id'" ;
$result3=mysql_query($sql3,$conn);
$row3=mysql_fetch_array($result3);



$smarty->assign('toresult',$row3);





$smarty->display('xiangx.html');


?>