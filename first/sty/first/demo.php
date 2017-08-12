<?php
require "../smarty/Smarty.class.php";
$smarty=new smarty();
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
$arr=array(array('wie','nan'),array('li','nv'));

$smarty->assign("t",$arr);
$smarty->display("demo.html");


?>