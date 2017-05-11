<?php 
$servername = "localhost";
$name   = "root";
$password   = "";
$dbname     = "mydb";

$conn = new mysqli($servername, $name, $password, $dbname);
if ($conn->connect_error) {
  die("连接失败：" . $conn->connect_error);
}
// 设置编码，防止中文乱码
mysqli_query($conn, "set names utf8");
// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO user(name,password,email,tel) VALUES(?,?,?,?)");
$stmt->bind_param("ssis",$name,$password,$email,$tel);

// 设置参数并执行
$name = "google";
$password = "123456";
$email = "1";
$tel = "USA";
$stmt->execute();

$name = "淘宝";
$password = "123321";
$email = "13";
$tel = "中国";
$stmt->execute();

$name = "weibo";
$password = "1100";
$email = "20";
$tel = "CN";
$stmt->execute();

echo "新记录插入成功";

$stmt->close();
$conn->close();


 ?>