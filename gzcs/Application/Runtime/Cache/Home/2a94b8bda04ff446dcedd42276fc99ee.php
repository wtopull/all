<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>gzcs</title>
</head>
<style type="text/css" media="screen">
	*{
		margin:0;
		padding:0;
	}
	body{
		background: #eee;
	}
</style>
<body>
	<form action="/" method="post" target="nm_iframe"  enctype="multipart/form-data"> 
    	<ul style="list-style:none">
			标题：<li><input type="text" name="sw_title" id="sw_title" value="" /></li>
			图片：<li><input type="file" name="sw_thum" id="sw_thum" value="" /></li>
			<li><input type="submit" value="提交"/></li>
		</ul>
  	</form>  
	<iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>
	<?php if(is_array($info)): foreach($info as $key=>$vo): ?><ul style="list-style:none" class="haa">
			<li><img src="<?php echo ($vo['sw_thum']); ?>" alt=""></li>
			<li><h3><?php echo ($vo['sw_title']); ?></h3></li>
		</ul><?php endforeach; endif; ?>
</body>
</html>