<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// 创建连接
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("连接失败：" . $conn->connect_error);
}

$sql = "
INSERT INTO app(username,password,nickname,tel,email)
VALUES ('cc','jj','sa@qq.com')
";

if($conn->query($sql) === true){
  echo "新记录插入成功";
}else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
