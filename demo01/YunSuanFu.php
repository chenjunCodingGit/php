<!DOCTYPE html>
<html>
<head>
	<title>运行符</title>
</head>
<body>
<?php
$x=100; 
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);

//数组运算
$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);

//三目运算
$test = 'cj';
$username = isset($test) ? $test : 'nobody';
echo $username,PHP_EOL;

$user = $test ?: 'noone';
echo $user,PHP_EOL;

// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
//$_GET['chen'] = 'ddddc';
$users = $_GET['chen'] ?? 'nobody';
// 类似的三元运算符
echo $users;
$users = isset($_GET['chen']) ? $_GET['chen'] : 'nobody';
echo $users;

//PHP7+ 支持组合比较符,大于为1，等于为0，小于为-1
echo 'a' <=> 'b',PHP_EOL;
echo 'a' <=> 'a',PHP_EOL;
echo 'b' <=> 'a',PHP_EOL;

echo date("S");
?>
</body>
</html>