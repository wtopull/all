<?php /* Smarty version Smarty-3.1.6, created on 2017-12-09 01:49:06
         compiled from "E:/phpStudy/WWW/all/thinkphp/shop/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:13215a2ad0921e3299-47896250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76ff772d04bba213714b6d35107054047f1ed725' => 
    array (
      0 => 'E:/phpStudy/WWW/all/thinkphp/shop/Admin/View\\Manager\\login.html',
      1 => 1512750068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13215a2ad0921e3299-47896250',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a2ad092209ff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2ad092209ff')) {function content_5a2ad092209ff($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />
<title>用户登录</title>
<link href="<<?php ?>?php echo ADMIN_CSS_URL; ?<?php ?>>/User_Login.css" type="text/css" rel="stylesheet" /> </head>
<body id="userlogin_body">
  <div></div>
  <div id="user_login">
    <dl>
      <dd id="user_top">
        <ul>
          <li class="user_top_l"></li>
          <li class="user_top_c"></li>
          <li class="user_top_r"></li>
        </ul>
      </dd>
      <dd id="user_main">
        <form action="#" method="post">
          <ul>
            <li class="user_main_l"></li>
            <li class="user_main_c">
              <div class="user_main_box">
                <ul>
                  <li class="user_main_text">用户名： </li>
                  <li class="user_main_input"> <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="admin_user"> </li>
                </ul>
                <ul>
                  <li class="user_main_text">密&nbsp;&nbsp;&nbsp;&nbsp;码： </li>
                  <li class="user_main_input"> <input class="TxtPasswordCssClass" id="admin_psd" name="admin_psd" type="password"> </li>
                </ul>
                <ul>
                  <li class="user_main_text">验证码： </li>
                  <li class="user_main_input"> <input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text"> <img src="<<?php ?>?php echo ADMIN_IMG_URL; ?<?php ?>>/admin.png" alt="" /> </li>
                </ul>
              </div>
            </li>
            <li class="user_main_r"> <input style="border: medium none; background: url('<<?php ?>?php echo ADMIN_IMG_URL; ?<?php ?>>/user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit"> </li>
          </ul>
        </form>
      </dd>
      <dd id="user_bottom">
        <ul>
          <li class="user_bottom_l"></li>
          <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
          <li class="user_bottom_r"></li>
        </ul>
      </dd>
    </dl>
  </div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
  <div id="ValidationSummary1" style="display: none; color: red;"></div>
</body>
</html><?php }} ?>