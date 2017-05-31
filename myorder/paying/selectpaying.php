<?php
//查询已经结算且pay表中已经支付的（送货中）
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
$name=$_GET['name'];
$ispay=1;
$callback = $_GET['callback'];

$arr = array();

$result=$mysqliConn->query("SELECT id,image,title,thisprice,shopnum,goodid FROM pay where name='$name' AND ispay='$ispay' ");

$arr = array();
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    array_push($arr, $row);
}
echo $callback.'('.json_encode($arr).')';
?>
