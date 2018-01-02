<?php 
	header("content-type:text/html;charset=utf-8");

	define('APP_DEBUG',true);//开发调试模式
	define('CSS_URL','/shop/Public/css/');
	define('IMG_URL','/shop/Public/images/');
	define('JS_URL','/shop/Public/js/');
	
	define('ADMIN_CSS_URL','/shop/Admin/Public/css/');
	define('ADMIN_IMG_URL','/shop/Admin/Public/images/');
	
	function show_bug($info){
		echo "<pre style='color:#FF00AE;'>";
//		var_dump($info);
		dump($info);
		echo "</pre>";
	}
<<<<<<< HEAD

	
=======
	//引入框架的接口文件
>>>>>>> 393f540467455695b3e0b00f07e4f130c5406e97
	include("../ThinkPHP/ThinkPHP.php");








?>