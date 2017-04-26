<?php 
$servername = "localhost";
$name   = "root";
$password   = "1010";
$dbname     = "mydb";

$conn = new mysqli($servername, $name, $password, $dbname);
if ($conn->connect_error) {
  die("连接失败：" . $conn->connect_error);
}
// 设置编码，防止中文乱码
mysqli_query($conn, "set names utf8");
// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO ajax(name,url,alexa,country) VALUES(?,?,?,?)");
$stmt->bind_param("ssis",$name,$url,$alexa,$country);

// 设置参数并执行
$name = "google";
$url = "123456";
$alexa = "1";
$country = "USA";
$stmt->execute();

$name = "淘宝";
$url = "123321";
$alexa = "13";
$country = "中国";
$stmt->execute();

$name = "weibo";
$url = "1100";
$alexa = "20";
$country = "CN";
$stmt->execute();

echo "新记录插入成功";

$stmt->close();
$conn->close();


 ?>