<template>
  <div class="all">
    <my_header></my_header>
    <ul class="indexNav">
      <router-link to="/index" tag="li">首页</router-link>
      <router-link to="/pagetwo" tag="li">游戏中心</router-link>
      <router-link to="/pagethree" tag="li">优惠活动</router-link>
      <router-link to="/pagefour" tag="li">个人中心</router-link>
    </ul>
    
    <router-view />
  </div>
</template>

<script>
import my_header from './components/header/header.vue'
export default {
  data() {
    return {
      
    }
  },
  components:{
    my_header
  }
}
</script>

<style>
*{
  margin: 0;
  padding: 0;
}
body,html,.all{
  /*font-size: 100px;*/
  width: 100%;
  height:100%;
  background: #222;
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color:#c3ab6d;
}
ul{
  list-style: none;
}
.indexNav{
  list-style:none;
  position: fixed;
  bottom: 0;
  width:100%;
  height:46px;
  background:#000;
  /*border-top:1px solid #999;*/
}
.indexNav li{
  font-size: 18px;
  float:left;
  width:25%;
  color:#c3ab6d;
  height:46px;
  line-height: 46px;
  text-align: center;
}
.indexNav li.router-link-exact-active{
  background: #333;
  border-radius: 6px 6px 0px 0px;
  border-top:1px solid #999;
}
</style>
