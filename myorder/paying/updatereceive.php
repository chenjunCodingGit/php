<?php
//点击提交订单时将总价更新到该用户的order表
header('Access-Control-Allow-Origin:*');

$con=mysqli_connect("localhost","root","","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

// 设置编码，防止中文乱码
mysqli_query($con, "set names utf8");

$thisId=$_GET['thisId'];
$ispay=2;//已经付款，未评论
$callback = $_GET['callback'];

$result =  mysqli_query($con,"UPDATE pay SET ispay='" . $ispay ."' WHERE id='" . $thisId ."'");

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

