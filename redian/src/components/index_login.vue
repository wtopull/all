<template>
<div class="login">
  <div style="height:4.2rem;padding-top:1.5rem" class="loginlogo">
    <div class="content"></div>
  </div>
  <form @submit.prevent="">
    <div class="passItem">
      <p>
        <icon style="width:1rem;" name="user-o"></icon>
        <input v-model="$store.state.register.Globalusername" placeholder="请输入账号" type="text" class="input"/>
      </p>
      <p>
        <icon style="width:1.2rem;" name="lock"></icon>
        <input v-model="$store.state.register.Globalpassword" placeholder="请输入密码" type="password" class="input"/>
      </p>
    </div>
    <div class="passInter">
      <p>
        <v-touch @tap="login" tag="button" type="button" class="t_btn">登录</v-touch>
      </p>
    </div>
  </form>
  <v-touch ref="confirm" @tap="toRegister" style="margin-top:1.50rem;" class="Backindex">
    <icon name="user-plus"></icon><span>注册新用户</span>
  </v-touch>
  <v-touch @tap="backend('login')" style="margin:0.8rem auto" class="Backindex">
    <icon name="home"></icon><span style="width:3rem;text-align:center;">返回首页</span>
  </v-touch>
</div>
</template>
<script>
export default {
  data() {
    return {
      username: "",
      password: ""
    }
  },
  mounted: function() {
    this.$store.state.register.Globalusername = ""
    this.$store.state.register.Globalpassword = ""
  },
  methods: {
    backend(value) {
      this.$store.commit('regbackend', value)
    },
    toRegister() {
      this.$store.commit('loginToreg')
    },
    login() {
			const username=this.$store.state.register.Globalusername
      const user_yz=/^[^A-Z][0-9a-z]{4,11}$/g;
      var yz=user_yz.test(username);
      if(this.$store.state.register.Globalusername==""||this.$store.state.register.Globalpassword==""){
             this.$store.commit('registerTip','请输入账号和密码')
        }else{
          if(yz==true){
             this.$store.dispatch('login');
           }else if(yz==false){
               this.$store.commit("registerTip","用户名格式错误");
           }
        }
    }
  }
}
</script>
<style>
.passItem {
    background-color: #fff;
}
.passItem p:last-child {
  border-bottom: none;
}
.passItem p{
  margin: 0 auto;
  display: table;
  padding: rem2px(20) 0;
  width:rem2px(460);
  height: rem2px(100);
  border-bottom: 1px solid #dbdbdb;
  display:flex;
  justify-content:center;
  align-items:center;
}
.passItem p svg{
  width:rem2px(38);
  height:rem2px(38);
  position: relative;
  color: #000;
}

.login .input {
    @extend %font25;
    display: table-cell;
    padding-left: 0.5rem;
    position: relative;
    width: rem2px(300);
    height: rem2px(60);
    line-height: rem2px(60);
    margin-left: rem2px(15);
    border: none;
    /*::-webkit-input-placeholder {
        color: #a9a9a9;
    }*/
}
.passInter {
    margin-top: 0.4rem;
}
.toRegister {
    width: 8.6rem;
    height: 1.21875rem;
    outline: none;
    border: 2px solid #2a8fbd;
    border-radius: 0.2rem;
    background: none;
    color: #2a8fbd;
    @extend %font28;
}
</style>
