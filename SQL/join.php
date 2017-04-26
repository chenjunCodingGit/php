<?php 
$conn = mysqli_connect('localhost','root','1010');
if(!$conn){
  die('连接失败：' . mysqli_error($conn));
}
//
mysqli_query($conn,'set names utf8');

$sql = "
select a.id,a.name,b.count from t2 a inner join t1 b on a.name=b.name
";

mysqli_select_db($conn,"mydb");

$retval = mysqli_query($conn,$sql);
if(!$retval){
  die('无法读取数据: ' . mysqli_error($conn));
}
echo '<h2>MySQL JOIN 测试<h2>';
echo '<table border="1"><tr><td>ID</td><td>Name</td><td>Count</td></tr>';

while ($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)) {
  echo "<tr><td> {$row['id']}</td> ".
     "<td>{$row['name']} </td> ".
     "<td>{$row['count']} </td> ".
     "</tr>";     
}
echo "</table>";
mysqli_close($conn);
 ?>