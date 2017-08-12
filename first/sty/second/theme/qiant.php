<?php
require "../../smarty/Smarty.class.php";
$smarty= new smarty();

require "mysql_connect.php";
$sql ="SELECT * FROM `news` ORDER BY `id` DESC LIMIT 5"; //SQL语句
 
$result = mysql_query($sql,$conn); //查询
$result2=array();


while ($row=mysql_fetch_array($result)) {
	array_push($result2, $row);
}


$smarty->assign('toresult',$result2);





$smarty->display('qiant.html');

?>