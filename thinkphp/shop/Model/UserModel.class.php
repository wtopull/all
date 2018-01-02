<?php
namespace Model;
use Think\Model;


//为sw_user数据表创建一个Model模型类
//父类Model: ThinkPHP/Library/Think/Model.class.php
class UserModel extends Model{
	//是否批处理验证
	protected $patchValidate = false;

	//自动验证定义
	protected $_validate = array(
		// array(字段，验证规则，错误提示,[验证条件，附加规则，验证时间]),
		 
		// 用户名验证
		array('username','require','用户名不能为空'),
		//用户名唯一
		array('username','','用户名已经存在',0,'unique'),
		//密码
		array('password','require','密码不能为空'),
		//确认密码
		array('password2','require','确认密码不能为空'),
		array('password2','password','两次密码必须一致',0,'confirm'),
		//邮箱
		array('user_email','email','邮箱格式不正确'),
		//QQ号码：纯数字，位数6-11
		array('user_qq','number','qq号码必须是纯数字',2),
		//QQ号码：纯数字，位数6-11,值为空就不验证了
		array('user_qq','6,11','qq号码长度为6-12位',2,'length'),
		//学历，必须选择一项
		array('user_xueli','2,5','学历必须选择一项',0,'between'),
		//爱好 必须选择二项或以上
		array('user_hoddy','check_hoddy','爱好必须选择二项或以上',1,'callback'),

	);
	//验证爱好 
	//参数$arg代表被验证项目的value值
	function check_hoddy($arg){
		if(count < 2){
			return false;//会自动输出验证的错误信息
		}
		return true;
	}
}
 