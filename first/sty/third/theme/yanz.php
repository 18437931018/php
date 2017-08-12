<?php  
require "mysql_smarty_config.php";
$sql="SELECT * FROM `admin`";
$result=mysql_query($sql,$conn);
$user=$_GET['user'];
$psd=$_GET['psd'];
$faild=1;

	while($row = mysql_fetch_array($result)){
	if($user==$row['user']&&$psd==$row['pwd']){
        global $faild;
	    $faild=2;
	    $torow=$row['id'];
		
		echo "<script type='text/javascript' >location.href='admin.php'</script>";
		
	}
}

if ($faild=2) {
	echo "登录失败";
}

?>