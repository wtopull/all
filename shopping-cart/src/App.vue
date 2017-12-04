<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>
<script>
  export default {
    name: 'app'
  }
</script>
<style>
  body,html {
    width: 100%;
    height: 100%;
    font-size: 100px;
  	background: #eee;
  }
  * {
    margin: 0;
    padding: 0;
  }
</style>