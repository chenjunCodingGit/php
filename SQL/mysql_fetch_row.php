<?php 
$con=mysqli_connect("localhost","root","","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

$query = mysqli_query($con,"SELECT * FROM user");
//mysqli_fetch_row  取一条数据，为索引数组
while($row=mysqli_fetch_row($query)){  //用while可以取所有数据
  print_r($row);
}

 ?>