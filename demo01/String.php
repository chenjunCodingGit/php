<!DOCTYPE html>
<html>
<head>
	<title>字符串变量</title>
</head>
<body>
<?php
	$txt1 = "Hello";
	$txt2 = "PHP";
	echo $txt1 . "-" . $txt2;
	echo "<br>",strlen($txt1 . "-" . $txt2);

	//strpos() 函数用于在字符串内查找一个字符或一段指定的文本
	echo "<br>",strpos('Hello World','lo');
	//var_dump(intdiv(10, 3));

	$q = 8<>8;
	echo $q;
?>
</body>
</html>