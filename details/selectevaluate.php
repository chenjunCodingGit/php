<?php
//查询该用户的shopcar商品
header('Access-Control-Allow-Origin:*');

$mysqliConn=new mysqli();

$mysqliConn->connect('localhost', 'root', '', 'mydb');
    if ($mysqliConn->connect_error)
    {
        printf("Unable to connect to the database:%s", $mysqliConn->connect_error);
        exit();
    }

// 设置编码，防止中文乱码
mysqli_query($mysqliConn, "set names utf8");

//数据库查询所有（比较）
$goodid=$_GET['goodid'];
$callback = $_GET['callback'];

$arr = array();

$result=$mysqliConn->query("SELECT name,contents,shopstar FROM valuates where goodid='$goodid'");

$arr = array();
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    array_push($arr, $row);
}
echo $callback.'('.json_encode($arr).')';
?>
