<template>
	<div class="pagethreeb">
		<div class="pagethreeBox">
			<ul class="pagethreebUl">
				<router-link to="" tag="li"><img src="../../assets/image/disc_2.png" height="138" width="108" alt=""></router-link>
				<router-link to="" tag="li"><img src="../../assets/image/disc_3.png" height="138" width="108" alt=""></router-link>
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
	.pagethreeb{
		font-size: 18px;
		width: 100%;
	}
	.pagethreeBox{
		width: 100%;
		height:450px;
		overflow-x:hidden;
	}
	.pagethreebUl{
		width: 100%;
		text-align:center;
	}
	.pagethreebUl li{
		width:96%;
		margin:0 auto;
	}
	.pagethreebUl li img{
		background-size: 100% 100%;
		height:110px;
		width: 100%;
	}
</style>