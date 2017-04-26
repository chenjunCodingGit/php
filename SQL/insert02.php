<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("连接失败：" . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if($conn->multi_query($sql) === true){
  echo "新记录插入成功";
}else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
