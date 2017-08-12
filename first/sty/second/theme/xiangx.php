<?php
$id=$_GET['id'];
require "mysql_connect.php";
require "../../smarty/Smarty.class.php";
$sql="SELECT * FROM `news` WHERE id='$id'" ;
$result=mysql_query($sql,$conn);
$smarty=new smarty();
$row=mysql_fetch_array($result);
$smarty->assign('toresult',$row);
$smarty->display('xiangx.html');


?>