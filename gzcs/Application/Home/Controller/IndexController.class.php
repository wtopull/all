<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
 		$goods =D('Goods');
		$info = $goods->select();
		$this -> assign('info',$info);
		$arr = $_POST;
		if(!empty($_POST)){
			if($_FILES['sw_thum']['error']<4){
				$goods = array(
					'rootPath'	=>	'./Public/uploadss/'
				);
				$up = new \Think\Upload($goods);
				$z = $up ->uploadOne($_FILES['sw_thum']);
				$_POST['sw_thum'] =$up ->rootPath.$z['savepath'].$z['savename'];
				$shuju = $goods -> create();
				$z = $goods -> add($shuju);
				show_bug($z);
				echo "1111";
			}
			exit;		
		}
 		$this -> display();
 	}
}
