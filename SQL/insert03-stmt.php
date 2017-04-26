<?php 
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("连接失败：" . $conn->connect_error);
}

// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO MyGuests(firstname,lastname,email) VALUES(?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);

// 设置参数并执行
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "cairo_surface_mark_dirty(surface)@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "新记录插入成功";

$stmt->close();
$conn->close();


 ?>