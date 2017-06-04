<?php
//将销售量+=
header('Access-Control-Allow-Origin:*');

$con=mysqli_connect("localhost","root","","mydb");
// 检测连接
if (mysqli_connect_errno())
{
  echo "连接失败: " . mysqli_connect_error();
}

// 设置编码，防止中文乱码
mysqli_query($con, "set names utf8");

//数据库查询所有（比较）
$ids=$_GET['ids'];
$shopnum=$_GET['shopnum'];
$callback = $_GET['callback'];

$arr = array();

$result1 =  mysqli_query($con,"SELECT figure from goods where id='$ids'");

while ($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
    array_push($arr, $row);
}

$myfigure = (int)$arr[0]['figure'] ;
$totalfigure = (int)$shopnum + $myfigure;

$result =  mysqli_query($con,"UPDATE goods SET figure='" . $totalfigure ."' WHERE id='" . $ids ."'");

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
