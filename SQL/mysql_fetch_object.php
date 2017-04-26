<?php 
$con=mysqli_connect("localhost","root","1010","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}
mysqli_query($con, "set names utf8");


$query = mysqli_query($con,"SELECT * FROM ajax");

//$obj = mysqli_fetch_object($query);
while ($obj = mysqli_fetch_object($query)) {
  # code...
  echo $obj->name;
  echo "<br>";
}
 

 ?>