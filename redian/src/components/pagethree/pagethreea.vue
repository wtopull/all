<template>
	<div class="pagethreea">
		<div class="pagethreeBox">
			<ul class="pagethreeaUl">
				<router-link to="" tag="li"><img  @click="showona()" src="../../assets/image/disc_1.png" height="138" width="108" alt=""></router-link>
				<promotionh v-show="ona"></promotionh>
				<router-link to="" tag="li"><img @click="showonb()" src="../../assets/image/disc_2.png" height="138" width="108" alt=""></router-link>
				<promotionj v-show="onb"></promotionj>
				<router-link to="" tag="li"><img @click="showonc()" src="../../assets/image/disc_3.png" height="138" width="108" alt=""></router-link>
				<promotionk v-show="onc"></promotionk>
				<router-link to="" tag="li"><img @click="showond()" src="../../assets/image/disc_4.png" height="138" width="108" alt=""></router-link>
				<promotionl v-show="ond"></promotionl>
			</ul>
		</div>
	</div>
</template>
<script>
import promotionh from './promotions/promotion_1.vue';
import promotionj from './promotions/promotion_2.vue';
import promotionk from './promotions/promotion_3.vue';
import promotionl from './promotions/promotion_4.vue';
export default{
	data() {
		return {
			ona:false,
			onb:false,
			onc:false,
			ond:false
		}
	},
	components:{
	    promotionh,promotionj,promotionk,promotionl
	},
	methods:{
		showona:function() {
			this.ona = !this.ona
		},
		showonb:function() {
			this.onb = !this.onb
		},
		showonc:function() {
			this.onc = !this.onc
		},
		showond:function() {
			this.ond = !this.ond
		}
	}
}
</script>
<style>
	.pagethreea{
		font-size: 18px;
		width: 100%;
	}
	.pagethreeBox{
		width: 100%;
		height:430px;
		overflow-x:hidden;
		
	}
	.pagethreeaUl{
		width: 100%;
		text-align:center;
	}
	.pagethreeaUl li{
		width:96%;
		margin:0 auto;
	}
	.pagethreeaUl li img{
		background-size: 100% 100%;
		height:110px;
		width: 100%;
	}
</style>