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

// $ids = array(
//     0=>array(
//         'id' => 5,
//         'shopnum' => 55
//     ),
//     1=>array(
//         'id' => 6,
//         'shopnum' => 66
//     )
// );

// echo json_encode($ids);

$ids=$_GET['ids'];
// $shopnum=$_GET['shopnum'];
$callback = $_GET['callback'];

foreach ($ids as $value) {
    $result =  mysqli_query($con,"update shopcar set shopnum='{$value["shopnum"]}' where id='{$value["id"]}'");
    // $exec="update chips set title='{$v[title]}',url='{$v[url]}' where id='{$v[id]}'";
    // echo $value['shopnum'];
}

// $result =  mysqli_query($con,"update shopcar set shopnum='" . $shopnum ."' where id in (5,6);");

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