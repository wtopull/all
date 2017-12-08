<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>后台管理</title>
  <link rel="stylesheet" href="../../../Public/css/layui.css"> </head>
<link href="../../../Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="../../../Public/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" src="../../../Public/umeditor/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../../../Public/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../../../Public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="../../../Public/umeditor/lang/zh-cn/zh-cn.js"></script>
<body class="layui-layout-body">
  <body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
      <div class="layui-header layui-row">
        <div class="layui-logo">后台管理</div>
        <ul class="layui-nav layui-layout-right">
          <li class="layui-nav-item">
            <a href="javascript:;"> <img src="http://t.cn/RCzsdCq" class="layui-nav-img">Haa</a>
          </li>
          <li class="layui-nav-item">
            <a href="">退出</a>
          </li>
        </ul>
      </div>
      <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll"> </div>
      </div>
      <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
          <div class="layui-tab layui-tab-card">
            <ul class="layui-tab-title">
              <li>
                <a href="index.html" target="_self">热火站</a>
              </li>
              <li class="layui-this">
                <a href="redian.html" target="_self">热点站</a>
              </li>
              <li>
                <a href="qita.html" target="_self">其它站</a>
              </li>
            </ul>
            <div class="layui-tab-content" style="">
              <div class="layui-tab-item layui-show">
                <form class="layui-form" action="">
                  <div class="layui-form-item layui-row"> <label class="layui-form-label">图片</label>
	                  <div class="layui-input-block"> 
	                  	<input type="file" class=" layui-col-xs2 layui-col-sm2" id="test1" style="margin-top:5px;">
											</input> </div>
	                </div>
                  <div class="layui-form-item layui-row"> <label class="layui-form-label">标题</label>
                    <div class="layui-input-block"> <input type="text" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input layui-col-xs11 layui-col-sm11"> </div>
                  </div>
                  <div class="layui-form-item"> <label class="layui-form-label">文本域</label>
                    <div class="layui-input-block">
                      <script type="text/plain" id="myEditor" style="width:100%;height:300px;" name="script">
                        <p></p>
                      </script>
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <div class="layui-input-block"> <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button> <button type="reset" class="layui-btn layui-btn-primary">重置</button> </div>
                  </div>
                </form>
              </div>
              <div class="layui-tab-item"></div>
              <div class="layui-tab-item"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="layui-footer">底部固定区域 </div>
    </div>
    <script src="../../../Public/js/layui.js"></script>
    <script>
      //JavaScript代码区域
      layui.use('element', function() {
        var element = layui.element;
      });
      layui.use('form', function() {
        var form = layui.form;
        //监听提交
        form.on('submit(formDemo)', function(data) {
          layer.msg(JSON.stringify(data.field));
          return false;
        });
      });
    </script>
    <script type="text/javascript">
      var um = UM.getEditor('myEditor');
    </script>
  </body>
</html>