<?php 
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("连接失败：" . $conn->connect_error);
}else{
  $sql = "INSERT INTO MyGuests(firstname,lastname,email) VALUES(?,?,?)";

  // 为 mysqli_stmt_prepare() 初始化 statement 对象
  $stmt = mysqli_stmt_init($conn);

  //预处理语句
  if(mysqli_stmt_prepare($stmt,$sql)){
    // 绑定参数
    mysqli_stmt_bind_param($stmt,'sss',$firstname,$lastname,$email);

    // 设置参数并执行
    $firstname = 'John';
    $lastname = 'Doe';
    $email = 'john@example.com';
    mysqli_stmt_execute($stmt);

    $firstname = 'Julie';
    $lastname = 'Dooly';
    $email = 'julie@example.com';
    mysqli_stmt_execute($stmt);
  }
}

$conn->close();
 ?>