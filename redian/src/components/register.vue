<template>
	<div class="register">
		<p class="registerLog"></p>
		<form class="registerF">
			<div class="useBox">
				<div class="formDiv">
					<span>推广码：</span>
					<input type="text" ref="input" placeholder="请输入推广码 (*选填)">
					<p class="tip"></p>
				</div>
				<div class="formDiv">
					<span>用户名：</span>
					<input type="text" placeholder="请输入用户名">
					<p class="tip">1</p>
				</div>
				<div class="formDiv">
					<span>密码：</span>
					<input type="password" placeholder="请输入密码">
					<p class="tip">1</p>
				</div>
				<div class="formDiv">
					<span>确认密码：</span>
					<input type="password" placeholder="再次输入密码">
					<p class="tip">1</p>
				</div>
				<div class="formDiv">
					<span>手机：</span>
					<input type="text" placeholder="请输入手机号码">
					<p class="tip">1</p>
				</div>
				<div class="formDiv">
					<span>验证码：</span>
					<input type="text" placeholder="请输入验证码">
					<p class="tip">1</p>
				</div>
				<button class="landingBtu">注册</button>
			</div>
			
		</form>
		<div class="footer">
			<router-link to="/index" tag="p">返回首页</router-link>
		</div>
	</div>
</template>
<script>
	export default {
		mounted() {
			// 默认focus
			this.$refs['input'].focus()
		}
	}
</script>
<style>
	.register{
		width: 100%;
		height:100%;
		background:#222;
		position: absolute;
		top:0px;
		z-index: 11000;
		text-align: center;
	}
	.register input,.register button{
		border:none;
		height:26px;
	}
	.register button{
		outline: none;
	}
	input{
		padding-left:6px;
	}
	.registerLog{
		width: 100%;
		height:62px;
		margin:20px auto 20px;
		background:url(..//assets/image/logo.png) no-repeat center center;
	}
	.register .registerF{
		width: 100%;
	}
	.register .registerF .useBox{
		width: 100%;
		background:#fff;
	}
	.formDiv{
		width:80%;
		height:46px;
		margin:0 auto;
		text-align:left;
		padding-top:12px;
		border-bottom: 1px solid #dbdbdb;
	}
	.formDiv span{
		width:78px;
		height:26px;
		display: inline-block;
		font-size: 14px;
		color:#000;
		margin-left:4px;
	}
	.formDiv .tip{
		height:16px;
		width:70%;
		line-height:16px;
		position:relative;
		left:85px;
		font-size:10px;
	}
	.register .landingBtu{
		height:35px;
		background:#f2b345;
		padding:0 90px;
		margin-top:30px;
		margin-bottom: 20px;
		border-radius:6px;
		color:#000;
		font-size:16px;
	}
	.register .footer{
		width:100%;
		margin-top:20px;
	}
	.register .footer p{
		width:24%;
		height:30px;
		text-align: left;
		margin:0 auto;
		color:#f2b345;
	}
</style>