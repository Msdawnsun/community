<?php

$servername = "localhost";//数据库所在服务器
$username = "root";//数据库用户名填写自己的
$password = "ewsitgasoas";//数据库密码，填写自己的
$dbname = "firstmysql";//填写自己的

// 创建连接
$con = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($con->connect_error) {
	die("连接失败: " . $con->connect_error);
} 
$con->query('set names utf8');//设置uft8编码

//$result = $con->query('SELECT * FROM shetuan');

/*if(is_object($con))
	echo "yes, connected!"; 
else
	echo "wrong!";
print_r ($_POST);*/

$sql="INSERT INTO shetuan(name, number, class,community,reason)
VALUES 
('$_POST[name]','$_POST[number]','$_POST[class]','$_POST[community]','$_POST[reason]')";

$result = $con->query($sql);

if (!mysqli_query($con,"SELECT * FROM shetuan")) 
  { 
  die('Error: ' . mysql_error()); 
  } 
//echo "1 record added";
echo "申请成功！";
mysqli_close($con)
?>
