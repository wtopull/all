<template>
  <div class="cart">
    <div class="top">
      <router-link to='/' tag="span" class="back"><</router-link>购物清单</div>
    <ul class="cartUl">
      <li v-for="(good,index) in goods"> 
      	<p class="goodsP">
      		<input type="checkbox" id="goodInp" :checked="good.checked" @click="selectGoods(good)"/>
      	</p>
        <div class="contentLeft"> <img :src="good.img" /></div>
        <div class="contentRight">
          <h3 class="name">{{good.name}}</h3>
          <p class="price">￥{{good.price}}</p>
          <p class="sales">库存：{{good.stock}}</p>
          <p class="add"><span @click="changeQty(true,good)">+</span><br />{{good.quantity}}<br /><span @click="changeQty(false,good)">-</span></p>
        </div>
      </li>
    </ul>
    <div class="cartFooter" v-for="(good,index) in goods"> <label class="footBtn">
    	<input type="checkbox"id="all" value="" @click="checkedAll"  :class="{'selector-active': checkAllFlag}"/>全选</label> 
    	<span class="total">合计：<span>￥{{totalPrice}}</span></span> 
    	<span class="accounts">去结算({{totalPrice}}元)</span> </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        cart:[],
        selectedNum:0,
        goods: [{
          id: 1001,
          name: 'Nescafe Espresso Roast',
          price: 60,
          subtotal:60,
          type: 3,
          stock: 12,
          quantity:0,
          checked: false,
          sales: 1500,
          img: 'http://img.xxjcy.com/pic/z2966d4c-300x300-1/nestle_nescafe_alta_rica_coffee_100g.jpg'
        },  {
          id: 1003,
          name: '健身包男运动包单肩训练包足球圆筒包大容量旅行包手提包 黑色',
          price: 89,
          subtotal:89,
          type: 2,
          stock: 5,
          quantity:0,
          checked: false,
          sales: 43,
          img: 'http://img14.360buyimg.com/n0/jfs/t10165/23/1982337495/68692/8dde1adb/59eb1257N853e8ca1.jpg'
        },  {
          id: 1003,
          name: '健身包男运动包单肩训练包足球圆筒包大容量旅行包手提包 黑色',
          price: 89,
          subtotal:89,
          type: 2,
          stock: 5,
          quantity:0,
          checked: false,
          sales: 43,
          img: 'http://img14.360buyimg.com/n0/jfs/t10165/23/1982337495/68692/8dde1adb/59eb1257N853e8ca1.jpg'
        }],
        numbera: 0,
        numberb: 0,
        price_isAsc: false,
        checkAllFlag: false
      }
    },
    methods: {
      /*+,-*/
      changeQty:function(isAdd,good){
        var num = good.quantity,
            stock = good.stock;
        if(isAdd && num < stock){
          this.$set(good, 'quantity', ++num);
          /*quantity==1,哪就是选中状态*/
          good.checked = true;
        }else if (!isAdd && num > 0){
          this.$set(good, 'quantity', --num);
          /*quantity==0,哪就是没选中状态*/
          if(num===0){
            good.checked = false;
          }
        }
        this.$set(good, 'subtotal', (good.price * num).toFixed(1));

      },
      selectGoods:function(item){
        item.checked = !item.checked;
        item.checked ? ++this.selectedNum : --this.selectedNum;
        item.quantity =1;
        /*全选了*/
        this.selectedNum === this.goods.length ? this.checkAllFlag = true : this.checkAllFlag = false
      },
      /*全选*/
      checkedAll:function() {
        var self = this;
        this.checkAllFlag = !this.checkAllFlag;
        this.goods.forEach(function (item) {
          if (self.checkAllFlag) {
              item.checked = true;
              self.selectedNum = self.goods.length;
          } else {
              item.checked = false;
              self.selectedNum = 0;
          }
        });
      }
    },

    computed:{
      /*总额*/
      totalPrice:function(){
        var num = 0;
        this.goods.forEach(function (good) {
            good.checked && (num += parseFloat(good.subtotal));
        });
        return num;
      }
    }
  }
</script>
<style>
  .cart {
    font-size: 22px;
    width: 100%;
    height: 100%;
  }
 .cart .top {
    font-size: 0.24rem;
    height: 0.6rem;
    line-height: 0.6rem;
    background: #fff;
    text-align: center;
    position: relative;
  }
  .cart .top .back {
    position: absolute;
    left: 0.1rem;
    color: #666;
    font-size: 40px;
  }
 .cart .cartFooter {
    width: 100%;
    height: 0.5rem;
    background: #fff;
    position: fixed;
    bottom: 0;
  }
 .cart .footBtn {
    font-size: 0.14rem;
    height: 0.5rem;
    line-height: 0.5rem;
    cursor: pointer;
    position: absolute;
    left: 0.15rem;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    -khtml-user-select: none;
    user-select: none;
  }
  .cart .footBtn #all {
    width: 0.2rem;
    height: .2rem;
    border: 1px solid #333;
    border-radius: 0.09rem;
    margin-right: 0.09rem;
    vertical-align: middle;
  }
  .cart .total {
    height: 0.5rem;
    line-height: 0.5rem;
    position: absolute;
    right: 1.1rem;
    font-size: 14px;
  }
  .cart .total span {
    color: #7A45E5;
    font-size: 16px;
  }
  .cart .accounts {
    height: 0.5rem;
    line-height: 0.5rem;
    width: 1rem;
    background: #7A45E5;
    color: #fff;
    position: absolute;
    right: 0;
    text-align: center;
    font-size: 0.14rem;
  }
  .cart .cartUl {
    height: 100%;
    margin: 0.1rem 0rem 0.5rem 0.1rem;
    position: relative;
    list-style: none;
  }
  .cart .cartUl li {
    height: 1rem;
    width: 100%;
    background: #fff;
    padding-top: 0.1rem;
    margin-bottom: 0.1rem;
    position: relative;
  }
  .cart .goodsP{
  	float: left;
  	width:12%;
  	height:100%;
  	margin-left:0.05rem;
  }
  #goodInp{
  	width:0.2rem;
  	height:0.2rem;
  	margin-top: 0.36rem;
  }
  
  .contentLeft {
    float: left;
   	width: 0.8rem;
    height: 0.8rem;
    width: 22%;
  }
  .contentLeft img {
    width: 0.8rem;
    height: 0.8rem;
    display: block;
    float: left;
    font-size: 0.16rem;
    color: #fff;
  }
  .cart .contentRight {
    width: 60%;
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
  .contentRight .sales {
    color: #888;
    font-size: 13px;
    position: relative;
    height: 0.22rem;
    width:2rem;
  }
  .contentRight .sales span {
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
  .add{
  	height:1.1rem;
  	width:0.3rem;
  	font-size:0.16rem;
  	position:absolute;
  	right:0.1rem;
  	top:0;
  	color:#999;
  	border-radius:0.2rem;
  	text-align: center;
  	cursor: pointer;
  	-webkit-tap-highlight-color:transparent
  }
  .add span{
  	font-size:0.2rem;
  	color:#999;
  	height:0.5rem;
  	line-height:0.5rem;
  	display: inline-block;
  	text-align: center;
  	-moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    -khtml-user-select: none;
    user-select: none;
  }
</style>