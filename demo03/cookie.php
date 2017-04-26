<?php 

$expire = time() + 60*60*24*30;  //30天后失效
setrawcookie('name','chenjun',$expire);

echo $_COOKIE["name"] . "<br>";
print_r($_COOKIE);

 ?>