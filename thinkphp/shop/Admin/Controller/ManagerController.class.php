<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;//验证码
class ManagerController extends Controller{
	public function login(){
		if(!empty($_POST)){
      $vry = new Verify();
      if($vry -> check($_POST['captcha'])){
        $manager =new \Model\MangerModel();
        $info = $manager -> checkNamePwd($_POST['admin_user'],$_POST['admin_user']);
        if($info){
            session('admin_id',$info["mg_id"]);
            session('admin_name',$info["mg_name"]);
            $this -> redirect('Index/index');
        }
      }else{
        show_bug("验证码错误");
      }
    }
    
		$this ->display();
	}

    function logout(){
        //清除session   同时跳转页面
        session(null);
        $this -> redirect('login');
    }
  public function verifyImg(){
    //验证码
    //目标：ThinkPHP/Library/Thiink/Verify.class.php
    
    //给验证码做配置
    $cfg = array(
        'codeSet'   =>  '1234567890',             // 验证码字符集合
        'expire'    =>  1000,            // 验证码过期时间（s）
        'useZh'     =>  false,           // 使用中文验证码 
        'useImgBg'  =>  false,           // 使用背景图片 
        'fontSize'  =>  14,              // 验证码字体大小(px)
        'useCurve'  =>  false,            // 是否画混淆曲线
        'useNoise'  =>  true,            // 是否添加杂点	
        'imageH'    =>  30,               // 验证码图片高度
        'imageW'    =>  100,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数
        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取,目录：Verify/ttfs/
        'bg'        =>  array(243, 251, 254),  // 背景颜色
        'reset'     =>  false,           // 验证成功后是否重置
    );
    //实例化Verify类,头部也要引入类文件
    $very = new Verify($cfg);
    $very -> entry();//输出验证码
    $this ->display();
  }
}
