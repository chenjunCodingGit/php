<!DOCTYPE html>
<html>
<head>
	<title>面向对象</title>
</head>
<body>

<?php
class MyClass
{
  public $public       = 'Public';
  protected $protected = 'Protected';
  private $private     = 'Private';

  public function printHello()
  {
    echo $this->public;
    echo $this->protected;
    echo $this->private;
  }
}

$obj = new MyClass();
echo $obj->public; // 这行能被正常执行
//echo $obj->protected; // 这行会产生一个致命错误
//echo $obj->private; // 这行也会产生一个致命错误
$obj->printHello(); // 输出 Public、Protected 和 Private
?>
</body>
</html>