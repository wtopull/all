<template>
	<div class="pagefour">
		<div class="banner">
			<div class="pageFc">
				<button class="pageFbut1">我要充值</button>
				<button class="pageFbut2">我要提现</button>
			</div>
			<div class="pageFcc">
				<p class="pageFccp1">kkkk</p>
				<p class="pageFccp2">主账户：</p>
			</div>
			<div class="pageFb">
				<p class="p">安全设置</p>
				<p class="p">站内消息</p>
				<p>历史消息</p>
			</div>
		</div>
		<div class="pageFcontent">
			<div v-for='data in bg'><img :src="data.img" alt=""></div>
		</div>
	</div>
</template>
<script>
export default{
	data() {
		return {
			bg: [
				{img:'./src/assets/image/function_1.png'},
				{img:'./src/assets/image/function_2.png'},
				{img:'./src/assets/image/function_3.png'},
				{img:'./src/assets/image/function_4.png'},
				{img:'./src/assets/image/function_5.png'},
				{img:'./src/assets/image/function_6.png'}
			]
			
		}
	}
}
</script>
<style>
	.pagefour{
		font-size: 18px;
		width: 100%;
	}
	.pagefour .banner{
		height: 200px;
		width: 100%;
		background:url(../../assets/image/cshowBg.jpg) no-repeat ;
		background-size: 100% 100%;
		position:relative;
	}
	.pageFb{
		width: 100%;
		height:40px;
		line-height: 40px;
		background-color: rgba(0,0,0,0.5);
		position:absolute;
		bottom: 0;
	}
	.pageFb p{
		float:left;
		height:25px;
		line-height:25px;
		margin-top: 7px;
		width: 33%;
		text-align: center;
		font-size: 14px;
	}
	.pageFb .p{
		border-right: 1px solid #f7b746;
	}
	.pageFc{
		width: 100%;
		position:absolute;
		top:46px;
	}
	.pageFc button{
		background: #fff;
		text-align: center;
		width:60px;
		height:25px;
		font-size: 14px;
		color:#f7b746;
		outline: none;
		border: none;
	}
	.pageFbut1{
		margin-left: 16%;
	}
	.pageFbut2{
		margin-left: 34%;
	}
	.pageFcc{
		width: 100%;
		font-size: 14px;
		text-align: center;
		position: absolute;
		top:118px;
	}
	.pageFccp1{
		color:#01bad4;
	}
	.pageFccp2{
		color:#d03d88;
	}
	.pageFcontent{
		background:url(../../assets/image/cnavBg.png) no-repeat;
		background-size: 100% 100%;
		height: 190px;
	    width: 90%;
	    margin: 0 auto;
	    margin-top:60px;
	}
	.pageFcontent div{
		float: left;
		width: 33%;
		height: 50%;
		text-align: center;
	}
	.pageFcontent div img{
		width: 100%;
		height: 100%;
	}
</style>