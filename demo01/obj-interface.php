<!DOCTYPE html>
<html>
<head>
	<title>面向对象-接口interface</title>
</head>
<body>

<?php

//声明一个'iTemplate'接口
interface iTemplate{
	public function setVariable($name,$var);
	public function getHtml($template);
}

//实现接口
class Template implements iTemplate{
	private $vars = array();

	public function setVariable($name,$var){
		$this -> vars[$name] = $var;
	}

	public function getHtml($template){
		foreach ($this -> vars as $key => $value) {
			# code...\
			$template = str_replace('{' . $name . '}',$value,$template);
		}

		return $template;
	}
}

?>
</body>
</html>