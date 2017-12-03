<template>
  <div class="hello">
    <table>
    	<tr>
    		<th>Header</th><th>Header</th><th>Header</th><th>Header</th>
    		<th>Header</th><th>Header</th><th>Header</th><th>Header</th>
    	</tr>
    	<tbody>
    		<tr v-for="item in 11">
	    		<td>5</td>
	    		<td>5</td>
	    		<td>5</td>
	    		<td>6</td>
	    		<td>5</td>
	    		<td class="abc" ref="abcde">5</td>
	    		<td>5</td>
	    		<td>7</td>
	    	</tr>
    	</tbody>
    </table>
  </div>	
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      
    }
  },
  mounted (){
  	let sum =0;
  	let kk= new Array();
  	let lengths = this.$refs.abcde.length;
		for(let i=0; i<lengths;i++){
			 kk += parseInt(document.getElementsByClassName("abc").innerHTML);
			console.log(kk);
		}
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
