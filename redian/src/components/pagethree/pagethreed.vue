<template>
	<div class="pagethreed">
		<div class="pagethreeBox">
			<ul class="pagethreedUl">
				<router-link to="" tag="li"><img @click="showond()" src="../../assets/image/disc_4.png" height="138" width="108" alt=""></router-link>
				<promotionl v-show="ond"></promotionl>
			</ul>
		</div>
	</div>
</template>
<script>
import promotionl from './promotions/promotion_4.vue';
export default{
	data() {
		return {
			ond:false
		}
	},
	components:{
	    promotionl
	},
	methods:{
		showond:function() {
			this.ond = !this.ond
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
		height:430px;
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