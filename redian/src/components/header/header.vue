<template>
	<div class="header">
		<div class="log"></div>
		<div class="loading">
			<router-link to="/landing" tag="button" class="butl">登陆</router-link>
			<router-link to="/register" tag="button" class="butr">注册</router-link>
		</div>
	</div>
</template>
<script>
export default {
  data() {
    return {
      title: {
      	a: false,
      	b: true
      }
    }
  }
}
</script>
<style>
	.header{
		width:100%;
		height:48px;
		background:#000;

	}
	.log{
		width:52px;
		height: 46px;
		background:url(../../assets/image/logo.png) no-repeat;
		background-size:100% 100%; 
		float: left;
		margin-left: 10px;
		clear: both;
		font-size: 22px;
	}
	.loading{
		float: right;
		height:48px;
		line-height:48px;
		width:200px;
		text-align:right;
	}
	.loading .butl,.loading .butr{
		font-size:16px;
		padding:2px 10px;
		background: #333;
		border-radius:4px;
		outline: none;
		border:none;
		margin-right: 16px;
		color:#c3ab6d;
	}
</style>