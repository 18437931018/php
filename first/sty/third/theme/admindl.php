<?php  

require "mysql_smarty_config.php";
$id=$_GET['id'];
$smarty->assign('id',$id);
$smarty->display('admindl.html');



?>