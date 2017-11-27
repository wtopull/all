<template>
	<div class="pagethreec">
		<div class="pagethreeBox">
			<ul class="pagethreecUl">
				<router-link to="" tag="li"><img  @click="showona()" src="../../assets/image/disc_1.png" height="138" width="108" alt=""></router-link>
				<promotionh v-show="ona"></promotionh>
			</ul>
		</div>
	</div>
</template>
<script>
import promotionh from './promotions/promotion_1.vue';
export default{
	data() {
		return {
			ona:false
		}
	},
	components:{
	    promotionh
	},
	methods:{
		showona:function() {
			this.ona = !this.ona
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
	.pagethreecUl{
		width: 100%;
		text-align:center;
	}
	.pagethreecUl li{
		width:96%;
		margin:0 auto;
	}
	.pagethreecUl li img{
		background-size: 100% 100%;
		height:110px;
		width: 100%;
	}
</style>