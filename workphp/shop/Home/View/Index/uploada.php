<?php

public function upload(){
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath  =      './upload/'; 
		$info   =   $upload->uploadOne($_FILES['photo1']);
		if(!$info) {
		    $this->error($upload->getError());
		}else{
        echo $file['savepath'].$file['savename'];
		    }
		}
}
