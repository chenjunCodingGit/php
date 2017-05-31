<?php
//查询已经结算但pay表中没有支付的（待支付）
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
$ispay=2;
$callback = $_GET['callback'];

$arr = array();

$result=$mysqliConn->query("SELECT id,image,title,thisprice,shopnum,goodid FROM pay where name='$name' AND ispay='$ispay' ");

$arr = array();
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    array_push($arr, $row);
}
echo $callback.'('.json_encode($arr).')';
?>
