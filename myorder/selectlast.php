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
// $username=$_GET['username'];
$callback = $_GET['callback'];

$arr = array();

$result=$mysqliConn->query("SELECT id from valuates where id = (SELECT max(id) FROM valuates);");

$arr = array();
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    array_push($arr, $row);
}
echo $callback.'('.json_encode($arr).')';
?>
