<!DOCTYPE html>
<html>
<head>
	<title>面向对象-常量const</title>
</head>
<body>

<?php
class MyClass{
	const constant = '常量值';

	function showConstant(){
		echo self::constant . PHP_EOL;
	}
}

echo MyClass::constant . PHP_EOL;

$classnames = 'MyClass';
echo $classnames::constant . PHP_EOL;

$class = new MyClass();
$class -> showConstant();

echo $class::constant . PHP_EOL;

?>
</body>
</html>