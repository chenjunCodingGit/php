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

$callback = $_GET['callback'];

if (!empty($_SESSION['user'])) {
    $ret = array(
        'status' => $_SESSION['user']
    );
    // echo json_encode($ret);
    echo $callback.'('.json_encode($ret).')';
    exit();
 }
else{
	$ret = array(
        'status' => 0
    );
    echo $callback.'('.json_encode($ret).')';
    // echo json_encode($ret);
	exit();
}
?>