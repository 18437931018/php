<?php
header("Content-type: text/html; charset=utf-8"); 
$user=$_GET['user'];
$psd=$_GET['psd'];
$regtime=time();

if (!empty($user)&&!empty($psd)) {
require "mysql_connect.php";
$sql="SELECT * FROM `users`";
$result = mysql_query($sql,$conn);
$boo=1;
while ($row=mysql_fetch_array($result)) {
	if ($row['user']==$user) {
		echo "<script type='text/javascript'>alert('该账号已经被注册');window.location.href='zhuc.html'</script>";
		global $boo;
		$boo=2;
		break;
	}
};

if ($boo!=2) {

	$sql2 ="INSERT INTO `users`(`user`, `psd`,`regtime`) VALUES ('$user','$psd','$regtime') "; //SQL语句
 
$result2 = mysql_query($sql2,$conn); //查询
 mysql_close(); 

 echo "<script type='text/javascript'>window.location.href='dengl.html';alert('注册成功')</script>";
}
	

}else{
	echo "<script type='text/javascript'>window.location.href='zhuc.html';alert('请输入账户和密码')</script>";
}
 



?>