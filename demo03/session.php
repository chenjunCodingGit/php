<?php 
session_start();

$_SESSION['views'] = 1;

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Session</title>
 </head>
 <body>
 
<?php 
// 检索 session 数据
echo '浏览量：' . $_SESSION['views'];
 ?>

 </body>
 </html>