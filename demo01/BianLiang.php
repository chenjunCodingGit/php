<!DOCTYPE html>
<html>
<head>
	<title>变量</title>
</head>
<body>
<?php
$x = 5;

function myTest()
{
	global $x;
  $y = 10;
  echo "<p>测试函数内变量:</p>";
  echo "全局变量x为:  $x";
  echo '<br/>';
  echo "局部变量y为: $y";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
//echo "变量 y 为: $y";

function myStatic(){
	static $x = 0;
	echo $x;
	$x ++;
}
echo "<br>";
myStatic();
echo "<br>";
myStatic();
echo "<br>";
myStatic();

$p = print('<br>arg');
echo "<br>",$p;
echo "<br>这是一个", "字符串，", "使用了", "多个", "参数。";
//echo 输出的速度比 print 快， echo 没有返回值，print有返回值1

$cars = array('volvo','bmw','toyota');
echo '<br>',$cars[1];
print "<br>车的品牌是 {$cars[2]}";
?>
</body>
</html>