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

$image=$_GET['image'];
$title=$_GET['title'];
$describes=$_GET['describes'];
$price=$_GET['price'];
$figure=$_GET['figure'];
// $isshow=$_GET['isshow'];
$callback = $_GET['callback'];

$result =  mysqli_query($con,"INSERT INTO orders (image,title,describes,price,figure) VALUES ('".$image."', '".$title."','".$describes."','".$price."','".$figure."')");

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