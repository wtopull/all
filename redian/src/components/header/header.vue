<template>
	<div class="header">
		<div class="log"></div>
		<div class="loading">
			<button class="butl">登陆</button>
			<button class="butr">注册</button>
		</div>
		<landing v-show="b">111</landing>
	</div>
</template>
<script>
import landing from '@/components/landing.vue'
export default {
  data() {
    return {
      title: {
      	a: false,
      	b: true
      }
    }
  },
  components:{
    landing
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