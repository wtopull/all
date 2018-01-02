<?php
namespace Model;
use Think\Model;

//父类Model: ThinkPHP/Library/Think/Model.class.php
class MangerModel extends Model{
	function checkNamePwd($nm,$pwd){
		$info = $this -> where("mg_name='$nm'")->find();
		dump($info);
		if($info['mg_pwd']===$pwd){
			return $info;
		}
		return null;
	}
}