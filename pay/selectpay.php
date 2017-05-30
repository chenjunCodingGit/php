<?php
//查询该被选中的商品
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
$ids=$_GET['ids'];
// $ids = array('12','14');
$callback = $_GET['callback'];

$arr = array();
foreach ($ids as $key => $value) {
$result=$mysqliConn->query("SELECT id,image,title,scale,price,shopnum,selected FROM shopcar where id='{$value}'");
	
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	    array_push($arr, $row);
	}
}


echo $callback.'('.json_encode($arr).')';
?>
