<?php 
$con=mysqli_connect("localhost","root","1010","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}
mysqli_query($con, "set names utf8");

$query = mysqli_query($con,"SELECT count(*) FROM ajax");

//print_r(mysqli_fetch_row($query));
echo mysqli_result($query,0);

 ?>