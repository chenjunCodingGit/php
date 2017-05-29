<?php

header('Access-Control-Allow-Origin:*');

$con=mysqli_connect("localhost","root","","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

// 设置编码，防止中文乱码
mysqli_query($con, "set names utf8");

$username=$_GET['username'];
$recivename=$_GET['recivename'];
// $totalprice=$_GET['totalprice'];
$addressProvince=$_GET['addressProvince'];
$addressCity=$_GET['addressCity'];
$tel=$_GET['tel'];
$callback = $_GET['callback'];

$result =  mysqli_query($con,"UPDATE orders SET recivename='" . $recivename ."',addressProvince='" . $addressProvince ."',addressCity='" . $addressCity ."',tel='" . $tel ."' WHERE username='" . $username ."'");

if($result){
	$ret = array(
        'status' => 1, // 1成功，0失败
        'msg'   => 'success'
    );
    echo $callback.'('.json_encode($ret).')';
    // echo json_encode($ret);
    exit();
}else{
	$ret = array(
        'status' => 0, // 1成功，0失败
        'msg'   => 'failed'
    );
    echo $callback.'('.json_encode($ret).')';
    // echo json_encode($ret);
    exit();
}

mysqli_close($con);
?>

