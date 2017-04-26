<!DOCTYPE html>
<html>
<head>
	<title>常量</title>
</head>
<body>
<?php
//区分大小写
define("GREETING", "ih.com");
echo GREETING;

// 不区分大小写的常量名
define("GRE", 'gre.com', true);
echo "<br>", GRE;
echo "<br>", gre;

//常量是全局变量，可以在整个运行的脚本的任何地方使用
function myTest()
{
  echo "<br>", GRE;
}
myTest();
?>
</body>
</html>