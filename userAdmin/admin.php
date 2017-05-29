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
$password=$_GET['password'];
// $callback = $_GET['callback'];

$arr = array();	
//$username = $_POST['username'];

$result=$mysqliConn->query("select name,password from useradmin where name='" . $name ."' and password='" . $password . "'");

$row=mysqli_fetch_array($result);
//print_r($row[0]);

// echo $_SESSION['user'];

if(mysqli_num_rows($result) == 1){
	$_SESSION['user'] = $row[0];
	$ret = array(
        'status' => 1, // 1成功，0失败
        'msg'   => 'success'
    );
    // echo $callback.'('.json_encode($ret).')';
    echo json_encode($ret);
    exit();
}else{
	$ret = array(
        'status' => 0, // 1成功，0失败
        'msg'   => 'failed'
    );
    // echo $callback.'('.json_encode($ret).')';
    echo json_encode($ret);
    exit();
}
?>
