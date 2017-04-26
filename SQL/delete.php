<?php 
$con = mysqli_connect("localhost","root","","myDB");
if(mysqli_connect_errno()){
  echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM MyGuests WHERE lastname='Moe'");

mysqli_close($con);
 ?>