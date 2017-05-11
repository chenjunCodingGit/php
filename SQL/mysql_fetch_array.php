<?php 
$con=mysqli_connect("localhost","root","","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

$name='34d2'; 
$password='432';

$query = mysqli_query($con,"SELECT name,password FROM user where name='" . $name ."' and password='" . $password . "'");
// while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
// 	# code...
// 	print_r($row);
// }
if(mysqli_num_rows($query) == 1){
	$ret = array(
        'status' => 0, // 0成功，1失败
        'msg'   => 'success'
    );
    echo json_encode($ret);
    exit();
}else{
	$ret = array(
        'status' => 1, // 0成功，1失败
        'msg'   => 'failed'
    );
    echo json_encode($ret);
    exit();
}
//print_r(mysqli_fetch_array($query));//关联数组+索引数组
// echo "<br>";
// print_r(mysqli_fetch_array($query,MYSQLI_ASSOC));//关联数组
// echo "<br>";
// print_r(mysqli_fetch_array($query,MYSQLI_NUM));//索引数组

 ?>