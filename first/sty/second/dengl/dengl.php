<?php
header("Content-type: text/html; charset=utf-8"); 
$uname=$_GET['uname'];
$psd=$_GET['psd'];

require "mysql_connect.php";
 
$sql ="SELECT * FROM `users` "; //SQL语句
 
$result = mysql_query($sql,$conn); //查询

/*$unamearr=array();
$psdarr=array();

 while($row = mysql_fetch_array($result)){
  array_push($unamearr, $row['uname']);
  array_push($psdarr, $row['psd']);
 }

 $row=mysql_fetch_array($result);
if (in_array($uname,$unamearr)&&in_array($psd,$psdarr)) {
	echo "success";
}else{
	echo "fialed";
}*/


$faild=1;

	while($row = mysql_fetch_array($result)){
	if($uname==$row['uname']&&$psd==$row['psd']){
       global $faild;
	    $faild=2;
	    $torow=$row['uname'];
		
		echo "<script type='text/javascript' >location.href='../theme/hout.php?uname=$torow'</script>";
		
	}
}

if ($faild!=2) {
	echo "<div style='width:300px;height:300px;background:#eee;margin:20px auto;text-align: center;'>";
	echo "登录失败";
	echo "<br />";
	echo "<a href='index.html'>返回</a>";
	echo "</div>";
}

 

 
mysql_close(); 
?>