<?php

$name=$_GET['title'];
$text=$_GET['text'];
require "mysql_connect.php";
if(!empty($name)&&!empty($text)){
$sql="INSERT INTO `news`( `title`, `content`) VALUES ('$name','$text')";
mysql_query($sql,$conn);
mysql_close();
/*$uname=$_GET['uanme'];
echo "<script type='text/javascript'>window.location.href='hout.php?uname=$uname';alert('插入新闻成功')</script>";*/
}
/*else{
echo "<script type='text/javascript'>alert('请输入内容');window.location.href='hout.php'</script>";

}*/

echo $text;
?>