<?php
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
$callback = $_GET['callback'];

$arr = array();

$result=$mysqliConn->query("SELECT id,title,scale,price FROM favorite where name='$name'");

$arr = array();
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    array_push($arr, $row);
}
echo $callback.'('.json_encode($arr).')';
?>
