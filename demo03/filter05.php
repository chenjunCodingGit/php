<?php
function convertSpace($str){
  return str_replace("_",".",$str);
}

$str = "www_baidu_com";

echo filter_var($str,FILTER_CALLBACK,array("options" => "convertSpace"));

?>