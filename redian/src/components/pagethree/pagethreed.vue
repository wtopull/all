<template>
	<div class="pagethreed">
		<div class="pagethreeBox">
			<ul class="pagethreedUl">
				<router-link to="" tag="li"><img src="../../assets/image/disc_4.png" height="138" width="108" alt=""></router-link>
				<router-link to="" tag="li"><img src="../../assets/image/disc_5.png" height="138" width="108" alt=""></router-link>
			</ul>
		</div>
	</div>
</template>
<script>
export default{
	data() {
		return {
			msg: '3333333333'
		}
	}
}
</script>
<style>
	.pagethree{
		font-size: 18px;
		width: 100%;
	}
	.pagethreeBox{
		width: 100%;
		height:450px;
		overflow-x:hidden;
	}
	.pagethreedUl{
		width: 100%;
		text-align:center;
	}
	.pagethreedUl li{
		width:96%;
		margin:0 auto;
	}
	.pagethreedUl li img{
		background-size: 100% 100%;
		height:110px;
		width: 100%;
	}
</style>