<?php 
$con=mysqli_connect("localhost","root","1010","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}
mysqli_query($con, "set names utf8");

$query = mysqli_query($con,"SELECT * FROM ajax");

if($query && mysqli_num_rows($query) )//取得结果集的行数
{
  while($row=mysqli_fetch_row($query)){  //用while可以取所有数据
  print_r($row);
}
 }else{
  echo '没有数据';
 }

 ?>
