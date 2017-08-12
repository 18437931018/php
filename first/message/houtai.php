<?php
header("Content-type: text/html; charset=utf-8"); 

 
/*$conn=mysql_connect('localhost','root','root') or die("error connecting") ; //连接数据库
 
mysql_query("set names 'utf8'"); 
 
mysql_select_db("message"); //打开数据库
 
//$sql ="SELECT * regdata FROM mess "; //SQL语句
 
$result = mysql_query($sql,$conn); //查询

while($row = mysql_fetch_array($result))
 
{
 
echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; //排版代码
 
echo $row['Topic'] . "<br/>";
 
echo "</div>"; //排版代码
 
}*/


 
$mysql_server_name='localhost'; //改成自己的mysql数据库服务器
 
$mysql_username='root'; //改成自己的mysql数据库用户名
 
$mysql_password='root'; //改成自己的mysql数据库密码
 
$mysql_database='message'; //改成自己的mysql数据库名
 

 
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
 
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
 
mysql_select_db($mysql_database); //打开数据库
 
$sql ="select * from mess "; //SQL语句
 
$result = mysql_query($sql,$conn); //查询
 

 echo "<table  style='border: 1px solid black'>";
while($row = mysql_fetch_array($result))
 
{
 
echo "<tr>";

echo "<td  style='border: 1px solid black'>";
echo $row[0];
echo "</td>";

echo "<td  style='border: 1px solid black'>";
echo $row[1];
echo "</td>";

echo "<td  style='border: 1px solid black'>";
echo $row[2];
echo "</td>";

echo "<td  style='border: 1px solid black'>";
echo "<a href='shanc.php?id=$row[0]'>删除</a>";
echo "</td>";

echo "</tr>";
}
echo "</table>";
echo "<a href='index.html'>首页</a>";

/*$row1 = mysql_fetch_array($result);
$row1 = mysql_fetch_array($result);
$row1 = mysql_fetch_array($result);

echo $row1['name'];*/

/*$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password); //连接数据库
 
mysql_query("set names 'utf8'"); //数据库输出编码
 
mysql_select_db($mysql_database); //打开数据库
 
$sql = "insert into mess (id,name,text) values (1,'eee','eeeee')";
 
mysql_query($sql);*/




mysql_close(); 
 




?>