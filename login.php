<?php
// header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
// ini_set('session.name', 'sid'); //设置session_id的键名
// ini_set('session.use_trans_sid', 0); //不使用 GET/POST 变量方式
ini_set('session.use_cookies', 1); //使用cookie保存session_id的方式
ini_set('session.cookie_path', '/');
ini_set('session.cookie_domain', '192.168.155.2');
session_start();

header('Access-Control-Allow-Origin:*');
// header('Access-Control-Allow-Methods:GET');
// header('Access-Control-Allow-Methods:POST');
// header('Access-Control-Allow-Headers:x-requested-with,contenttype');


$mysqliConn=new mysqli();

$mysqliConn->connect('localhost', 'root', '', 'mydb');
    if ($mysqliConn->connect_error)
    {
        printf("Unable to connect to the database:%s", $mysqliConn->connect_error);
        exit();
    }
//数据库查询所有（比较）
$name=$_GET['name']; 
$password=$_GET['password'];
$callback = $_GET['callback'];

$arr = array();	
//$username = $_POST['username'];

$result=$mysqliConn->query("select name,password from user where name='" . $name ."' and password='" . $password . "'");

$row=mysqli_fetch_array($result);
//print_r($row[0]);

// echo $_SESSION['user'];

if(mysqli_num_rows($result) == 1){
	$_SESSION['user'] = $row[0];
	$ret = array(
        'status' => 0, // 0成功，1失败
        'msg'   => 'success'
    );
    echo $callback.'('.json_encode($ret).')';
    // echo json_encode($ret);
    exit();
}else{
	$ret = array(
        'status' => 1, // 0成功，1失败
        'msg'   => 'failed'
    );
    echo $callback.'('.json_encode($ret).')';
    // echo json_encode($ret);
    exit();
}
?>
