<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

// 使用 sql 创建数据表
$sql = "CREATE TABLE details (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
image VARCHAR(30) NOT NULL,
title VARCHAR(150) NOT NULL,
describes VARCHAR(150) NOT NULL,
scale VARCHAR(20) NOT NULL,
price INT(16) NOT NULL,
goodid INT(3) NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
?>