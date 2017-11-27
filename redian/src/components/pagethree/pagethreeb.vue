<template>
	<div class="pagethreeb">
		<div class="pagethreeBox">
			<ul class="pagethreebUl">
				<router-link to="" tag="li"><img @click="showonb()" src="../../assets/image/disc_2.png" height="138" width="108" alt=""></router-link>
				<promotionj v-show="onb"></promotionj>
				<router-link to="" tag="li"><img @click="showonc()" src="../../assets/image/disc_3.png" height="138" width="108" alt=""></router-link>
				<promotionk v-show="onc"></promotionk>
			</ul>
		</div>
	</div>
</template>
<script>
import promotionj from './promotions/promotion_2.vue';
import promotionk from './promotions/promotion_3.vue';
export default{
	data() {
		return {
			onb:false,
			onc:false
		}
	},
	components:{
	    promotionj,promotionk
	},
	methods:{
		showonb:function() {
			this.onb = !this.onb
		},
		showonc:function() {
			this.onc = !this.onc
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
		height:430px;
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