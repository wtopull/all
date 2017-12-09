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
	
	/*'DB_TYPE'               =>  'mysql',     // 数据库类型
  'DB_HOST'               =>  'localhost', // 服务器地址
  'DB_NAME'               =>  'shop0609',          // 数据库名
  'DB_USER'               =>  'asd',      // 用户名
  'DB_PWD'                =>  'asdasd',          // 密码
  'DB_PORT'               =>  '3306',        // 端口
  'DB_PREFIX'             =>  'sw_',    // 数据库表前缀*/
);