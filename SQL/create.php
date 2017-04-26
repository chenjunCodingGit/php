<?php 
$servername = "localhost";
$username = "root";
$password = "1010";

// 创建连接
$conn = new mysqli($servername,$username,$password);

// 检测连接
if($conn->connect_errno){
  die("连接失败: " . $conn->connect_errno);
}

// 创建数据库
$sql = "CREATE DATABASE mydb";
if($conn->query($sql) === TRUE){
  echo "数据库创建成功";
}else{
  echo "Error creating database: " . $conn->error;
}

$conn->close();

 ?>