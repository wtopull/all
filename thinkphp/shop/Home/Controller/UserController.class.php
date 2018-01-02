<?php
namespace Home\Controller;
use Think\Controller;
//父类Controller:ThinkPHP/Library/ThinkPHP/ThinkPHP.class.php
class UserController extends Controller{
	public function login(){
		$this -> display();
	}

	function register(){
		$user = new \Model\UserModel();

		//二个逻辑：展示、收集
		if(!empty($_POST)){
			//收集表单$_POST信息并返回数据给$shuju来接收,同时触发表单自动验证,过滤非法字段
			$shuju = $user -> create();
			//把爱好 的信息由array变成string
			$_POST['user_hobby'] = implode(',', $_POST['user_hobby']);
			if($shuju){
				if($user -> add($_POST)){
					echo "存入数据成功";
				}	
			}else{
				//输出验证的错误信息
				// dump($user -> getError());
				$this -> assign('errorInfo',$user -> getError());
			}
		}
		$this -> display();
		
	}
}