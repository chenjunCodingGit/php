<?php
//点击结算删除选中的商品
header('Access-Control-Allow-Origin:*');

$con=mysqli_connect("localhost","root","","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

// 设置编码，防止中文乱码
mysqli_query($con, "set names utf8");

// $ids = array('10','11');

$ids=$_GET['ids'];
$callback = $_GET['callback'];

foreach ($ids as $key => $value) {
    $result =  mysqli_query($con,"DELETE FROM shopcar WHERE id='{$value}'");
    // print_r($key) ;
    // echo "<br>";
}

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