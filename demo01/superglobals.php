<!DOCTYPE html>
<html>
<head>
	<title>超级全局变量</title>
</head>
<body>
<?php
//超级全局变量:一个脚本的全部作用域中都可用

//$GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键
$x = 75; 
$y = 25;
function addition(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

//$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组
echo "<br>",$_SERVER['PHP_SELF'],"<br>";
echo $_SERVER['SERVER_NAME'],"<br>";
echo $_SERVER['HTTP_HOST'],"<br>";
echo $_SERVER['HTTP_REFERER'],"<br>";
echo $_SERVER['HTTP_USER_AGENT'],"<br>";
echo $_SERVER['SCRIPT_NAME'],"<br>";

?>
</body>
</html>