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

$name = $_GET['name'];
$image = $_GET['image'];
$title = $_GET['title'];
$thisprice = $_GET['thisprice'];
$shopnum = $_GET['shopnum'];
$ispay = 0;
$goodid = $_GET['goodid'];
$callback = $_GET['callback'];

// $name = '2013441514';
// $image = array('src1','src2');
// $title = array('title1','title2');
// $thisprice = array(5,6);
// $shopnum = array('7','8');
// $ispay = 0;
// $goodid = array(1,2);


foreach ($shopnum as $key => $value) {
// $result =  mysqli_query($con,"INSERT INTO pay (name,image,title,thisprice,shopnum,ispay,goodid) VALUES ('".$value."', '".$image."','".$title."','".$thisprice."','".$shopnum."','".$ispay."','".$goodid."')");
$result =  mysqli_query($con,"INSERT INTO pay (name,image,title,thisprice,shopnum,ispay,goodid) VALUES ('".$name."', '{$image["$key"]}','{$title["$key"]}','{$thisprice["$key"]}','".$value."','".$ispay."','{$goodid["$key"]}')");
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


