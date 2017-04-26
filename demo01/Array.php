<!DOCTYPE html>
<html>
<head>
	<title>数组</title>
</head>
<body>
<?php
//数值数组
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo count($cars),"<br>";

for($i=0;$i<count($cars);$i++){
	echo $cars[$i],PHP_EOL;
}

//关联数组
$age = array('Peter' => 34, 'Ben' => 10, 'Joe' => 33);
echo $age['Peter'],PHP_EOL;
echo 'Peter is ' . $age['Peter'] . ' years old.';
echo "<br>";
foreach ($age as $key => $value) {
	echo 'Name:' . $key . ' ,Age:' . $value,"<br>";
}
?>
</body>
</html>