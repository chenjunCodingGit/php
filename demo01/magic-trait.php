<!DOCTYPE html>
<html>
<head>
	<title>莫魔术变量__TRAIT__代码复用</title>
</head>
<body>

<?php
class Base{
	public function sayHello(){
		echo 'Hello';
	}
}

trait SayWorld {
	public function sayHellos(){
		parent::sayHello();
		echo 'PHP';
	}
}

class MyHelloWorld extends Base {
	use SayWorld;
}

$obj = new MyHelloWorld();
$obj -> sayHellos();

?>
</body>
</html>