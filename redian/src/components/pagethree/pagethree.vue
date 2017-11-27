<template>
	<div class="pagethree">
		<div class="banner"><img src="../../assets/image/banner-3.jpg"></div>
		<ul class="pagethreenav">
	      <router-link to="/pagethree/pagethreea" tag="li">所有优惠</router-link>
	      <router-link to="/pagethree/pagethreeb" tag="li">首存优惠</router-link>
	      <router-link to="/pagethree/pagethreec" tag="li">VIP优惠</router-link>
	      <router-link to="/pagethree/pagethreed" tag="li">其它优惠</router-link>
	    </ul>
	    <router-view />
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
	.banner{
		width: 100%;
		height: 140px;
	}
	.banner img{
		width: 100%;
		height:140px;
	}
	.pagethreenav{
		width: 100%;
		height: 46px;
		background:#000;
	}
	.pagethreenav li{
		width: 25%;
		height:46px;
		line-height:46px;
		float: left;
		text-align: center;
	}
	.pagethreenav li.router-link-exact-active{
	  background: #333;
	  border-radius: 6px 6px 0px 0px;
	  border-top:1px solid #999;
	}
</style>