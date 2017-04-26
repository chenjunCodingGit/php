<!DOCTYPE html>
<title>超级全局变量-$_REQUEST/POST</title>
<html>
<body>

<a href="superglobals_request.php?subject=PHP&web=runoob.cn">Test $GETd</a>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
//$name = $_REQUEST['fname']; 
// $name = $_POST['fname'];
// echo $name; 

echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
echo "<br>";

$arr = array('one','two','three');
foreach ($arr as $value) {
	# code...
	echo $value,PHP_EOL;
}
?>

</body>
</html>