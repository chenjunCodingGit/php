<?php 
$int = 234.3;
if(!filter_var($int,FILTER_VALIDATE_INT)){
  echo 'no' . "<br>";
}else{
  echo "yes" . "<br>";
}

$var = 200;
$int_options = array(
  "options" => array(
      "min_ranges" => 0,
      "max_ranges" => 256
    )
  );

echo json_encode($int_options) . "<br>";

if(!filter_var($var,FILTER_VALIDATE_INT,$int_options)){
   echo("不是一个合法的整数");
 }else{
   echo("是个合法的整数");
 }

 ?>