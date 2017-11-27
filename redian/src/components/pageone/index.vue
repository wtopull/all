<template>
	<div class="index">
		<div class="banner"><img src="../../assets/image/banner-1.jpg"></div>
		<div class="ad">
			<p class="address">fdsafsafasf</p>
		</div>
		<div class="content">
			<div class="conttop">
				<a href="javascript:;"><img src="../../assets/image/nav_t1.jpg"></a>
				<a href="javascript:;"><img src="../../assets/image/nav_t2.jpg"></a>
			</div>
			<div class="contbtm">
				<a href="javascript:;"><img src="../../assets/image/nav_t3.jpg"></a>
				<a href="javascript:;"><img src="../../assets/image/nav_t4.jpg"></a>
			</div>
		</div>
	</div>
</template>
<script>
export default{
	data() {
		return {
			msg: 'fdsaf'
		}
	}
}
</script>
<style>
	.index{
		font-size: 18px;
		width: 100%;
	}
	.banner{
		width: 100%;
		height: 140px;
	}
	.banner img{
		width: 100%;
		height:140px;
	}
	div.ad{
		background:url(../../assets/image/marBg.jpg) no-repeat 20px center;
		background-size: 100% 100%;
		height:30px;
		width: 100%;
	}
	div.ad .address{
		height: 30px;
		line-height: 30px;
		margin-left: 100px;
		padding:0px 20px;
	}
	.content{
		background:url(../../assets/image/index_bg.jpg) no-repeat left -30px;
		background-size: 100% 100%;
		height: 380px;
		width:100%;
		padding-top:56px;
	}
	
	.content .conttop ,.content .contbtm{
		width: 100%;
	}
	.content .conttop img,.content .contbtm img{
		width: 50%;
		float: left;
	}
</style>