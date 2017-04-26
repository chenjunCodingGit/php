<!DOCTYPE html>
<html>
<head>
	<title>对象</title>
</head>
<body>
<?php
class Car
{
  var $color;
  function Car($color="green") {
    $this->color = $color;
  }
  function what_color() {
    return $this->color;
  }
  //this就是指向当前对象实例的指针，不指向任何其他对象或类
}

$x="Hello world!";
$x=null;
var_dump($x);

?>
</body>
</html>