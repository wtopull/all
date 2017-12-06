<template>
  <div class="box">
  	<ul >
  		<li v-for="good in goods">
  			<p>{{good.id}}</p>
  			<p>{{good.name}}</p>
  			<p>{{good.price}}</p>
  			<img :src="good.img" alt="">
  		</li>
  	</ul>
	  </div>
</template>
<script>
import BScroll from 'better-scroll';
const ERR_OK = 0;
export default {
	props:{
		goods:{
			type:Object
		}
	},
	created() {
		this.$http.get('/api/goods').then((response) => {
			response = response.body;
			if(response.errno === ERR_OK){
				this.goods = response.data;

			}
		});
	}
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.box{
	font-size: 16px;
}
</style>