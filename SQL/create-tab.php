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
$sql = "CREATE TABLE valuates (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
goodid INT(3) NOT NULL,
contents VARCHAR(150) NOT NULL,
shopstar INT(3) NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
?>