<?php 
$con=mysqli_connect("localhost","root","1010","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

$query = mysqli_query($con,"SELECT * FROM ajax");

print_r(mysqli_fetch_array($query));//关联数组+索引数组
print_r(mysqli_fetch_array($query,MYSQLI_ASSOC));//关联数组
print_r(mysqli_fetch_array($query,MYSQLI_NUM));//索引数组

 ?>