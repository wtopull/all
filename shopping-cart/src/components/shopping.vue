<template>
  <div class="box">
    <div class="top">商品列表</div>
    <div class="title">
      <ul>
        <li v-for="(nav,index) in navs" :class="{active:index===numbera}" @click="numbera=index">{{nav.name}}</li>
      </ul>
    </div>
    <div class="contentNav">
      <ul>
        <li v-for="(sorts,index) in sort" class="filter-opt" :class="{'sorts':index===numberb,  'price-up':!price_isAsc, 'price-down':price_isAsc}" @click="numberb=index">{{sorts.name}}</li>
      </ul>
    </div>
    <div class="content">
      <ul>
        <li v-for="(goodTo,index) in goods">
          <div class="contentLeft"> <img :src="goodTo.img" /> </div>
          <div class="contentRight">
            <h3 class="name">{{goodTo.name}}</h3>
            <p class="price">￥{{goodTo.price}}</p>
            <p class="salesshow">已有{{goodTo.sales}}人付款<span @click="addToCart(goodTo)">+</span></p>
          </div>
        </li>
      </ul>
    </div>
    <router-link to="/cart" tag="div" class="cartBg"></router-link>
    <!--<div class="cartBg"></div>-->
  </div>
</template>
<script style="text/javascript">
	import cart from './cart.vue'
  export default {
    data () {
      return {
        navs: [{
          id: 0,
          name: '推荐'
        }, {
          id: 1,
          name: '母婴'
        }, {
          id: 2,
          name: '鞋包饰品'
        }, {
          id: 3,
          name: '食品'
        }, {
          id: 4,
          name: '数码家电'
        }],
        sort: [{
          name: '综合排序'
        }, {
          name: '销量优先'
        }, {
          name: '价格'
        }],
        numbera: 0,
        numberb: 0,
        price_isAsc: false,
        checked: false
      }
    },
    methods:{
    	addToCart:function(goods){
        let alreadyIndex = this.cart.findIndex(function (item, index) {
            return item.id === goods.id;
            
        });
        if (alreadyIndex === -1) {
            let cartIndex = this.cart.length;
            // 添加新的商品，并初始化其数量、价格、被选中状态
            this.cart.push(goods);
            this.$set(this.cart[cartIndex], 'quantity', 1);
            this.$set(this.cart[cartIndex], 'subtotal', goods.price.toFixed(1));
            this.$set(this.cart[cartIndex], 'checked', false);
            // 新增商品，购物车不能为全选
            this.checkAllFlag = false;
            return;
        }

        // 如果商品已存在并且库存足够，数量加1
        let alreadyGoods = this.cart[alreadyIndex];
        let num = alreadyGoods.quantity,
            stock = alreadyGoods.stock;

        if (num < stock) {
            this.$set(alreadyGoods, 'quantity', ++alreadyGoods.quantity);
            this.$set(alreadyGoods, 'subtotal', (alreadyGoods.price * alreadyGoods.quantity).toFixed(1));
        }
      }
    },
    components:{
      cart
    }
  }
</script>
<style type="text/css">
  .box {
    width: 100%;
    height: 100%;
    font-size: .18rem;
    text-align: center;
    background: #eee;
  }
  .top {
    font-size: 0.24rem;
    height: 0.6rem;
    line-height: 0.6rem;
    background: #fff;
  }
  .title {
    background: #5D4285;
    height: 0.6rem;
    line-height: 0.6rem;
  }
  ul {
    list-style: none;
  }
  .active {
    background-color: #9A51FF;
  }
  .sorts {
    color: #9A51FF;
  }
  .title ul li {
    float: left;
    width: 20%;
    font-size: 0.16rem;
    color: #fff;
  }
  .contentNav {
    height: 0.5rem;
    border-bottom: 1px solid #e5e5e5;
    background: #fff;
  }
  .contentNav ul li {
    float: left;
    width: 33.33%;
    font-size: 0.16rem;
    height: 0.5rem;
    line-height: 0.5rem;
  }
  .content {
    text-align: left;
  }
  .content ul li {
    height: 1rem;
    width: 100%;
    background: #fff;
    margin-top: 0.18rem;
    padding-top: 0.1rem;
  }
  .contentLeft {
    float: left;
    width: 22%;
  }
  .contentLeft img {
    width: 0.8rem;
    height: 0.8rem;
    display: block;
    margin-right: 0.15rem;
  }
  .contentRight {
    width: 75%;
    float: right;
  }
  .contentRight h3.name {
    color: #363636;
    width: 80%;
    overflow: hidden;
    font-size: 14px;
    font-weight: normal;
    height: .2rem;
    line-height: .2rem;
    margin-bottom: 0.32rem;
  }
  .contentRight .price {
    color: #7a45e5;
    font-weight: bold;
    font-size: 16px;
  }
  .contentRight .salesshow {
    color: #888;
    font-size: 13px;
    position: relative;
    height: 0.22rem;
  }
  .contentRight .salesshow span {
    background: #7a45e5;
    width: 0.32rem;
    height: 0.22rem;
    display: inline-block;
    text-align: center;
    font-size: 16px;
    color: #fff;
    border-radius: 0.12rem;
    position: absolute;
    right: 2%;
  }
  .cartBg{
  	right:0.01rem;
  	background:red url(../assets/image/cart.jpg) no-repeat center center;
  	width:.6rem;
  	height: .6rem;
  	position:fixed;
  	bottom:0.5rem;
  	right:0rem;
  	background-size:100% 100%;
  	border-radius:1rem;
  }
</style>