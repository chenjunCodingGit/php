<!DOCTYPE html>
<html>
<head>
  <title>Cookie</title>
</head>
<body>

<?php

if(isset($_COOKIE["name"])){
  echo "欢迎 " . $_COOKIE["name"] . "!<br>";
}else{
  echo "普通访客!<br>";
}

?>
</body>
</html>