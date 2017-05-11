<?php 
// session_start();

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,contenttype');

$mysqliConn=new mysqli();

$mysqliConn->connect('localhost', 'root', '', 'mydb');
    if ($mysqliConn->connect_error)
    {
        printf("Unable to connect to the database:%s", $mysqliConn->connect_error);
        exit();
    }
//数据库查询所有（比较）
$name=$_POST['name']; 
$password=$_POST['password'];

$arr = array();	
//$username = $_POST['username'];

$result=$mysqliConn->query("select name,password from user where name='" . $name ."' and password='" . $password . "'");

$row=mysqli_fetch_array($result);
//print_r($row[0]);

// echo $_SESSION['user'];

if(mysqli_num_rows($result) == 1){
	// $_SESSION['user'] = $row[0];
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
