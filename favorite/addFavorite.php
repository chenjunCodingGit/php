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

$name=$_GET['name'];
$title=$_GET['title'];
$image=$_GET['image'];
$price=$_GET['price'];
$indexs=$_GET['indexs'];
$isshow=$_GET['isshow'];
$callback = $_GET['callback'];

$result =  mysqli_query($con,"INSERT INTO favorite (name,title,image,price,indexs,isshow) VALUES ('".$name."', '".$title."','".$image."','".$price."','".$indexs."','".$isshow."')");

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