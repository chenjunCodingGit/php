<?php
session_start();
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,contenttype');
if (!empty($_SESSION['user'])) {
     echo $_SESSION['user'];
    // $ret = array(
    //     'status' => $_SESSION['user']
    // );
    // echo json_encode($ret);
    //exit();}
else{
	$ret = array(
        'status' => 0
    );
    echo json_encode($ret);
	exit();
}
?>