<?php 
$int = 111;
$max = 200;
$min = 1;

if(filter_var($int,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max))) == true ){
  echo "ok";
}else{
  echo "no";
}

 ?>