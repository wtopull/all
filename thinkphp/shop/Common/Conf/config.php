<?php
return array(
	//'配置项'=>'配置值'
	
	// URL伪静态后缀设置
	'URL_HTML_SUFFIX'			=> 'xml',
	
	//显示页面跟踪信息，在页面底部显示一个图标
	'SHOW_PAGE_TRACE'			=> true,
	
	
	// 默认模块
	'DEFAULT_MODULE'			=>  'Home',  
	//定义可供访问的分组列表
	'MODULE_ALLOW_LIST'		=>	array('Home','Admin'),
	
	//修改模板引擎为Smarty
	'TMPL_ENGINE_TYPE'      =>  'Think',     // 默认模板引擎 
	/*'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎 */
	
	//Smarty做配置
//	'TMPL_ENGINE_TYPE'		=>	array(
//		'left_delimiter'	=>'<@@',
//		'right_delimiter'	=>'@@>',
//	),
<<<<<<< HEAD
	
=======

>>>>>>> 393f540467455695b3e0b00f07e4f130c5406e97
);