<!DOCTYPE html>
<html>
<head>
	<title>面向对象-方法的访问控制</title>
</head>
<body>

<?php
class MyClass
{
  // 声明一个公有的构造函数
  public function __construct()
  {}

  // 声明一个公有的方法
  public function MyPublic()
  {}

  // 声明一个受保护的方法
  protected function MyProtected()
  {}

  // 声明一个私有的方法
  private function MyPrivate()
  {}

  // 此方法为公有
  public function Foo()
  {
    $this->MyPublic();
    $this->MyProtected();
    $this->MyPrivate();
  }
}

$myclass = new MyClass;
$myclass->MyPublic(); // 这行能被正常执行
// $myclass->MyProtected(); // 这行会产生一个致命错误
// $myclass->MyPrivate(); // 这行会产生一个致命错误
$myclass->Foo(); // 公有，受保护，私有都可以执行
?>
</body>
</html>