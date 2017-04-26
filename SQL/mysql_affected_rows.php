<?php 
$con=mysqli_connect("localhost","root","1010","mydb");
//$con 连接标识符
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}
mysqli_query($con, "set names utf8");

if(mysqli_query($con,"update ajax set url=3 where id=3")){
  echo "update ok!" . mysqli_affected_rows($con);//返回前一次修改条数数量，若修改数据与之前一样则返回0
}else{
  echo "error";
}

 ?>