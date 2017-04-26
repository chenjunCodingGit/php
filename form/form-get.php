<!DOCTYPE html>
<html>
<head>
	<title>表单$_GET</title>
</head>
<body>

<form method="get" >
	名字:<input type="text" name="fname">
	年龄:<input type="text" name="age">
	<input type="submit" value="提交">
</form>


欢迎 <?php echo $_GET["fname"]; ?>!<br>
你的年龄 <?php echo $_GET["age"]; ?>


</body>
</html>