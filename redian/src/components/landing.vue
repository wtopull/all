<template>
	<div class="landing">
		<p class="landingLog"></p>
		<form class="landingF">
			<div class="useBox">
				<p>账号：<input type="text" ref="input"></p>
				<p>密码：<input type="password"></p>
			</div>
			<button class="landingBtu">登陆</button>
		</form>
		<div class="footer">
			<router-link to="" tag="p">注册新用户</router-link>
			<router-link to="/index" tag="p">返回首页</router-link>
			<!-- <p>注册新用户</p>
			<p>返回首页</p> -->
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
	.landing{
		width: 100%;
		height:100%;
		background:#222;
		position: absolute;
		top:0px;
		z-index: 11000;
		text-align: center;
	}
	.landing input,.landing button{
		border:none;
		height:26px;
		background:#FAFFBD;
	}
	.landing button{
		outline: none;
	}
	.landingLog{
		width: 100%;
		height:62px;
		margin:60px auto 20px;
		background:url(..//assets/image/logo.png) no-repeat center center;
	}
	.landing .landingF{
		width: 100%;
	}
	.landing .useBox{
		width: 100%;
		background:#fff;
	}
	.landing .useBox p{
		width: 60%;
		height:60px;
		margin:0 auto;
		line-height:60px;
		border-bottom: 1px solid #dbdbdb;
	}
	.landingBtu{
		height:35px;
		background:#f2b345;
		padding:0 90px;
		margin-top:30px;
		border-radius:6px;
		color:#000;
		font-size:16px;
	}
	.landing .footer{
		width:100%;
		margin-top:20px;
	}
	.landing .footer p{
		width:24%;
		height:30px;
		text-align: left;
		margin:0 auto;
		color:#f2b345;
	}
</style>