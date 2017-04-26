<!DOCTYPE html>
<html>
<head>
	<title>数据类型</title>
</head>
<body>
<?php
//int
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);

//float
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);

//array
$cars = array('volvo','bmw','toyota');
var_dump($cars)

?>
</body>
</html>