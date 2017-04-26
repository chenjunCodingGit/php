<?php 
$servername = "localhost";
$username = "root";
$password = "";

// 创建连接
$conn = new mysqli($servername,$username,$password);

// 检测连接
if($conn->connect_errno){
  die("连接失败: " . $conn->connect_errno);
}

echo "连接成功";

//$conn->close;

 ?>