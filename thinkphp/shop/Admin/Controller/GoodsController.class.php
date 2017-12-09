<?php
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller{
	//商品列表
	public function showlist(){
//		$goods = new GoodsModel();
//		$goods = new \Model\GoodsModel();
//		var_dump($goods);
			
//			$model = D();
//			var_dump($model);
				//操作sw_goods表
//			$goods =D('Goods');
//			var_dump($goods);

			//操作sw_cat表
			$cat =D('Cat');
			$info = $cat->select();
//			show_bug($info);
			//把获得的信息传递给模板使用
			$this -> assign('info',$info);
//			var_dump($info);
		
		
		$this -> display();
	}
	//添加商品
	public function tianjia(){
		//操作sw_goods表
//		$cat = new \Model\GoodsModel();
		//操作sw_cat表
/*		$cat = new \Model\CatModel();
		$arr =array(
			'c_name' => 'abcdefA',
			'c_path' => '1-56',
			'c_parentid' => '2',
		);
		$z = $cat -> add($arr);
		dump($z);*/
		
		//上传
		if(!empty($_POST)){
			
			if($_FILES['f_goods_image']['error']<4){
				$cfg = array(
					'rootPath'	=>	'./Public/uploadss/'
				);
				$up = new \Think\Upload($cfg);
				$z = $up ->uploadOne($_FILES['f_goods_image']);//上传一个
				/*$up ->uploadOne($_FILES);//上传多个*/
				
				//把上传好的附件存储到数据库
				$_POST['goods_big_img'] =$up ->rootPath.$z['savepath'].$z['savename'];
				$shuju = $goods -> create();
				$z = $goods -> add($shuju);
				dump($up->getError());
				
				dump($z);
			
			}
			
			
			exit;
		}else{
			
		}
		
		$this -> display();
	}
	//删除商品
	public function xiugai(){
		$this -> display();
	}
}
