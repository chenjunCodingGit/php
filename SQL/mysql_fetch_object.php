<?php 
$con=mysqli_connect("localhost","root","","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}
mysqli_query($con, "set names utf8");


$query = mysqli_query($con,"SELECT * FROM user");

//$obj = mysqli_fetch_object($query);
while ($obj = mysqli_fetch_object($query)) {
  # code...
  echo $obj->name;
  echo "<br>";
}
 

 ?>