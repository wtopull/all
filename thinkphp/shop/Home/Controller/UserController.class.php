<?php
namespace Home\Controller;
use Think\Controller;
//父类Controller:ThinkPHP/Library/ThinkPHP/ThinkPHP.class.php
class UserController extends Controller{
	public function login(){
		$this -> display();
		$this -> display('register');
		$this -> display('Index/index');
	}

	function register(){
		$this -> display();
	}
}