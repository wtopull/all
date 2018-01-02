<?php 
	header("content-type:text/html;charset=utf-8");

	define('APP_DEBUG',true);//开发调试模式

	function show_bug($info){
		echo "<pre style='color:#FF00AE;'>";
		dump($info);
		echo "</pre>";
	}
	//引入框架的接口文件
	include("../ThinkPHP/ThinkPHP.php");








?>