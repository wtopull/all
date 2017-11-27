<template>
	<div class="pagetwo">
		<div class="banner"><img src="../../assets/image/banner-2.jpg"></div>
		<ul class="pagetwonav">
	      <router-link to="/pagetwo/pagetwoa" name="pagetwoa" tag="li">彩票游戏</router-link>
	      <router-link to="/pagetwo/pagetwob" tag="li">真人视讯</router-link>
	      <router-link to="/pagetwo/pagetwoc" tag="li">电子游戏</router-link>
	      <router-link to="/pagetwo/pagetwod" tag="li">体育赛事</router-link>
	    </ul>
	    <router-view />
	</div>
</template>
<script>
export default{
	data() {
		return {
			msg: '2222222222'
		}
	}
}
</script>
<style>
	.pagetwo{
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
	.pagetwonav{
		width: 100%;
		height: 46px;
		background:#000;
	}
	.pagetwonav li{
		width: 25%;
		height:46px;
		line-height:46px;
		float: left;
		text-align: center;
	}
	.pagetwonav li.router-link-exact-active{
	  background: #333;
	  border-radius: 6px 6px 0px 0px;
	  border-top:1px solid #999;
	}
</style>