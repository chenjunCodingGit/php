<?php 
session_start();
//unset($_SESSION['views']);
ini_set('session.use_cookies', 1); //使用cookie保存session_id的方式
ini_set('session.cookie_path', '/');
// ini_set('session.cookie_domain', '192.168.155.5');
include_once './ip.php';

$callback = $_GET['callback'];
if(session_destroy()){
	$ret = array(
	    'status' => 1  //销毁成功返回1
	);
	echo $callback.'('.json_encode($ret).')';
	exit();
}else{
	$ret = array(
	    'status' => 0  //销毁失败返回0
	);
	echo $callback.'('.json_encode($ret).')';
	exit();
}



 ?>