<?php
$con=mysqli_connect("localhost","root","","myDB");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM MyGuests
WHERE firstname='Mary'");
var_dump(mysqli_fetch_array($result));

while($row = mysqli_fetch_array($result))
{
  echo $row['firstname'] . " " . $row['lastname'];
  echo "<br>";
}
?>
