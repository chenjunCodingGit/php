<!DOCTYPE html>
<html>
<head>
	<title>数组排序</title>
</head>
<body>
<?php
$cars=array("Volvo","BMW","Toyota");

//字母升序
sort($cars);
print_r($cars);

//数字升序
$numbers=array(4,6,2,22,11);
sort($numbers);
echo "<br>";
print_r($numbers);

//字母降序
$cars=array("Volvo","BMW","Toyota");
rsort($cars);
echo "<br>";
print_r($cars);

//数字降序
$numbers=array(4,6,2,22,11);
rsort($numbers);
echo "<br>";
print_r($numbers);


//对关联数组的Value进行升序
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
echo "<br>";
print_r($age);

//对关联数组Value进行降序
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);
echo "<br>";
print_r($age);

//对关联数组Key进行升序
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
echo "<br>";
print_r($age);

//对关联数组Key进行降序
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
echo "<br>";
print_r($age);
?>
</body>
</html>