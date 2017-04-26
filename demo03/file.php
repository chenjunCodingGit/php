<!DOCTYPE html>
<html>
<head>
	<title>文件</title>
</head>
<body>

<?php
$file = fopen("welcome.txt","r") or exit("Unable to open file!");

//if (feof($file)) echo "文件结尾";

while (!feof($file)){
	echo fgets($file) . "<br>";
}
fclose($file);
?>
</body>
</html>