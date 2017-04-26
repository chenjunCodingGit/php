<?php
$servername = "localhost";
$username = "root";
$password = "1010";
$dbname = "mydb";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

// 使用 sql 创建数据表
$sql = "CREATE TABLE ajax (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
url VARCHAR(30) NOT NULL,
alexa VARCHAR(30) NOT NULL,
country VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

if ($conn->query($sql) === TRUE) {
    echo "Table ajax created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
?>