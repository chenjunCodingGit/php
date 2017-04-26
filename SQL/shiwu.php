<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '1010';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}
// 设置编码，防止中文乱码
mysqli_query($conn, "set names utf8");
mysqli_select_db( $conn, 'mydb' );
mysqli_query($conn, "SET AUTOCOMMIT=1"); // 设置为不自动提交，因为MYSQL默认立即执行
mysqli_begin_transaction($conn);            // 开始事务定义
 
if(!mysqli_query($conn, "insert into app (username,password,nickname,tel,email) values('cj',1010,'张',1,'as@qq.com')"))
{
    mysqli_query($conn, "ROLLBACK");     // 判断当执行失败时回滚
}
 
if(!mysqli_query($conn, "insert into app (username,password,nickname,tel,email) values('one',1111,'章',023,'023@qq.com')"))
{
    mysqli_query($conn, "ROLLBACK");      // 判断执行失败时回滚
}
mysqli_commit($conn);            //执行事务
mysqli_close($conn);
?>