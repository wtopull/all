<?php
if($_FILES["upfile"]["name"]){
		if($_FILES["upfile"]["error"]>0){
			echo $_FILES["upfile"]["error"];
		}else{
			$imgSize = 1073741824;
			$filename = $_FILES["upfile"]["name"];
			$filetype = $_FILES["upfile"]["type"];
			$filesize = $_FILES["upfile"]["size"];
			$filetmp = $_FILES["upfile"]["tmp_name"];
			$arrImg = array("image/jpg","image/jpeg","image/png","image/gif");
			if(!in_array($filetype,$arrImg)){
				echo "你上传的不是图片格式";
				exit;
			}
			if($filesize>$imgSize){
				echo "你的图片太大";
			}
			$arr = explode(".",$filename);
			$imgType = array_pop($arr);
			$imgName = time().rand(0,10).".".$imgType;
			$upfil="uploads/".$imgName;
			if(move_uploaded_file($filetmp,"../../../uploads/".$imgName)){
				echo "上传成功！";	
			};
		}	
	}else{
		echo "请选择上传文件！";	
	}
?>