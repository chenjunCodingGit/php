<?php
//注册时保存订单界面order表信息，只插入username
header('Access-Control-Allow-Origin:*');

$con=mysqli_connect("localhost","root","","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

// 设置编码，防止中文乱码
mysqli_query($con, "set names utf8");

$username = $_GET['username'];
$recivename = '';
$totalprice = 0;
$addressProvince = '';
$addressCity = '';
$tel = '';
$callback = $_GET['callback'];

$result =  mysqli_query($con,"INSERT INTO orders (username,recivename,totalprice,addressProvince,addressCity,tel) VALUES ('".$username."', '".$recivename."','".$totalprice."','".$addressProvince."','".$addressCity."','".$tel."')");

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


