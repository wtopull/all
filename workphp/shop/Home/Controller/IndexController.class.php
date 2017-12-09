<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $bg_bg =D('Bg_bg');
        $info = $bg_bg->select();
        $this -> assign('info',$info);
        if(!empty($_POST)){
            $bg_bg -> bg_thum       =$_POST['bg_thum'];
            $bg_bg -> bg_title       =$_POST['bg_title'];
            $bg_bg -> bg_content       =$_POST['bg_content'];
            if($_FILES['img_bg']['error']<4){
                $cfg = array(
                    'rootPath'  =>  './Public/uploadss/',
                    'maxSize' => 2024000,
                );
                $up = new \Think\Upload($cfg);
                $z = $up ->uploadOne($_FILES['img_bg']);
                //把上传好的附件存储到数据库
                $_POST['img_bg'] =$up ->rootPath.$z['savepath'].$z['savename'];
                $date = $bg_bg -> create();
                $z = $bg_bg -> add($date);
                // show_bug($up->getError());
                show_bug($date);
            }
            exit;
        }

    	$this -> display();
    }
		public function redian(){
    	
    	$this -> display();
    }
		public function qita(){
    	
    	$this -> display();
    }
}