<!DOCTYPE html>
<html>
<head>
	<title>魔术变量</title>
</head>
<body>

<?php
echo '这是第"' . __LINE__ . '"line', "<br>";
echo '该文件位于 " ' . __FILE__ . ' " ', "<br>";
echo '该文件位于 " ' . __DIR__ . ' " ', "<br>";

function test()
{
  echo '函数名为：' . __FUNCTION__, "<br>";
}
test();

class test
{
  public function _print()
  {
    echo '类名为：' . __CLASS__ . "<br>";
    echo '函数名为：' . __FUNCTION__, "<br>";
  }
}
$t = new test();
$t -> _print();

function test1() {
    echo  '函数名为：' . __METHOD__ , "<br>";
}
test1();

 
echo '命名空间为："', __NAMESPACE__, '"'; // 区分大小写
?>
</body>
</html>