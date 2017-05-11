<?php 

$mysqliConn=new mysqli();

$mysqliConn->connect('localhost', 'root', '', 'mydb');
    if ($mysqliConn->connect_error)
    {
        printf("Unable to connect to the database:%s", $mysqliConn->connect_error);
        exit();
    }
//数据库查询所有（比较）
$name=$_GET['name']; 

$result=$mysqliConn->query("select name from user where name='" . $name ."'");

//echo mysqli_num_rows($result) . "<br>";

if(mysqli_num_rows($result) >= 1){
	$ret = array(
        'status' => 0, // 0成功，1失败
        'msg'   => 'success'
    );
    echo json_encode($ret);
    exit();
}else{
	$ret = array(
        'status' => 1, // 0成功，1失败
        'msg'   => 'failed'
    );
    echo json_encode($ret);
    exit();
}
?>
