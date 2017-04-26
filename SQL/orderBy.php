<?php 
$con = mysqli_connect("localhost","root","","myDB");

if(mysqli_connect_errno()){
  echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM MyGuests ORDER BY lastname");

while($row = mysqli_fetch_array($result)){
  echo $row['firstname'];
  echo " " . $row['lastname'];
  echo " " . $row['email'];
  echo "<br>";
}

 ?>