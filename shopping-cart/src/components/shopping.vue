<template>
  <div class="box">
    <div class="top">商品列表</div>
    <div class="title">
      <ul>
        <!--<li class="cate" v-bind:class="{'tab-active': cate_index === index}" v-for="(item, index) in cate" @click="toggleCate(index)">{{ item.des }}</li>-->
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
        <li v-for="(good,index) in goods">
          <div class="contentLeft"> <img :src="good.img" /> </div>
          <div class="contentRight">
            <h3 class="name">{{good.name}}</h3>
            <p class="price">￥{{good.price}}</p>
            <p class="sales">已有{{good.sales}}人付款<span>+</span></p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>
<script style="text/javascript">
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
        goods: [{
          id: 1001,
          name: 'Nescafe Espresso Roast',
          price: 60,
          type: 3,
          stock: 12,
          sales: 1500,
          img: 'http://img.xxjcy.com/pic/z2966d4c-300x300-1/nestle_nescafe_alta_rica_coffee_100g.jpg'
        }, {
          id: 1002,
          name: '雀巢咖啡 Smoovlatte',
          price: 37,
          type: 3,
          stock: 168,
          sales: 864,
          img: 'http://www.hclsw.com/d/file/yinpin/94/2014/03-28/foi3h3xbuzk_big.jpg'
        }, {
          id: 1003,
          name: '海狸嗨哩母婴用品',
          price: 120,
          type: 1,
          stock: 38,
          sales: 230,
          img: 'http://img36.ddimg.cn/73/21/1246060306-1_b.jpg'
        }, {
          id: 1003,
          name: '微星（MSI）GL72M 7REX-817CN 17.3英寸游戏笔记本电脑(i7-7700HQ 8G 1T+128GSSD GTX1050TI 4G WIN10)黑',
          price: 165,
          type: 4,
          stock: 38,
          sales: 10,
          img: 'http://img12.360buyimg.com/n1/s450x450_jfs/t11353/19/1571669802/181362/7240a8ae/5a03c139N15161501.jpg'
        }, {
          id: 1003,
          name: 'SF-2 双镜头反光相机 + minotla 美能达 X370 胶片相机',
          price: 2999,
          type: 4,
          stock: 38,
          sales: 5,
          img: 'http://img2.imgtn.bdimg.com/it/u=2946579396,1383754860&fm=27&gp=0.jpg'
        }, {
          id: 1003,
          name: '网吧专用电脑开关',
          price: 110,
          type: 4,
          stock: 10,
          sales: 203,
          img: 'http://img1.imgtn.bdimg.com/it/u=1864760481,3119048315&fm=214&gp=0.jpg'
        }, {
          id: 1003,
          name: '华硕（ASUS） 超薄金属超极本RX310/RX410/U4000笔记本电脑学生手提轻薄 玫瑰金【金属本】 13.3英寸/I3-7100U/4G/128G',
          price: 4099,
          type: 4,
          stock: 5,
          sales: 43,
          img: 'http://img14.360buyimg.com/n1/s546x546_jfs/t4435/165/4095834799/98047/194c38dd/590a953bN09725348.jpg'
        }, {
          id: 1003,
          name: 'URBANWAVE城市波浪 高端情侣背包双肩包书包旅行包学生商务15英寸防震电脑包 经典款 精英必备',
          price: 998,
          type: 2,
          stock: 10,
          sales: 23,
          img: 'https://img14.360buyimg.com/n0/jfs/t11662/260/2586381784/256850/f0b1d47/5a1ae81cN708d8bc9.jpg'
        }, {
          id: 1003,
          name: '健身包男运动包单肩训练包足球圆筒包大容量旅行包手提包 黑色',
          price: 89,
          type: 2,
          stock: 5,
          sales: 43,
          img: 'http://img14.360buyimg.com/n0/jfs/t10165/23/1982337495/68692/8dde1adb/59eb1257N853e8ca1.jpg'
        }],
        numbera: 0,
        numberb: 0,
        price_isAsc: false
      }
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
    width: 78%;
    float: left;
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
</style>