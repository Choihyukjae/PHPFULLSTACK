<template>
  <img alt="Vue logo" src="./assets/logo.png">



  <!-- 네비 -->
  <Navi :navList="navList"></Navi>
  <!-- <div class="nav" >
    <a href="">홈</a>
    <a href="">상품</a>
    <a href="">기타</a>
  </div> -->

  <!-- 모달 -->
  <Modal @closeModal="modalflg= false"   :modalflg="modalflg"></Modal>
  <!-- <div  class ="bg_black" v-if="modalflg">
          <div class ="bg_white" >
            <img :src= "products[productNum].img">
            <h4>{{ products[productNum].name }}</h4>
            <p>{{ products[productNum].content }}</p>
            <p>{{ products[productNum].price * products[productNum].count }}</p>
            <button @click="plus(productNum)" >수량 증가</button><button @click="mm(productNum)" >수량 감소</button> <span>{{  products[productNum].count }}</span>
            <button @click="modalflg = false" >닫기</button>
          </div>
  </div> -->
  
  <!-- 상품리스트 -->
  <!-- <ProductList :products ="products"></ProductList> -->

  <ProductList @openModal="modalflg= true" :product="product" v-for="(product,i) in products" :key="i"></ProductList>
  <!-- <div v-for="(item,i) in products" :key="i">
      <img :src= "item.img">
      <h4 @click="modd(i)">{{ item.name }}</h4>
      <p>{{ item.price }}원</p>
      <p>{{  item.count }}개</p>

  </div> -->




    <!-- if -->
<p v-if="1 == 2">if문 테스트</p>


<!-- for문 증가(구구단) -->
  <!-- <div id="app">
  <h2>구구단 5단을 v-for로 출력</h2>
  <ul>
    <li v-for=" n in 10" :key="n">5X{{ n }} = {{5*n}}</li>
  </ul>
</div> -->
  
  
  <!-- <div>
    <h4 :style="styleR" >{{ product1 }}</h4>
    <p>{{price1}}</p>
  </div>
  <div>
    <h4>{{ product2 }}</h4>
    <p>{{price2}}</p>
  </div> -->
</template>

<script>
import data from './assets/js/data.js'

import Modal from './components/Modal.vue';
import ProductList from './components/ProductList.vue'
import Navi from './components/Navi.vue';

export default {
  name: 'App'
  ,data() { // 데이터 바인딩
    return {
      navList:['홈','상품','기타'],
      count:1 ,
      products: data
      ,modalflg: true
      ,productNum: 0
      ,product1 : '양말'
      ,price1 : '3900원'
      ,product2 : '바지'
      ,price2 : '5800원'
      ,styleR: 'color:red'
    }
  },
  methods: {// 함수를 설정하는 영역
    plus(productNum){
      this.products[productNum].count++ ;
    },
    mm(productNum){
      this.products[productNum].count-- ;
    }
    ,
    modd(i){
      this.modalflg = true; 
      this.productNum = i;
    },
    
  }
  
  ,
  components: {// 컴포넌트 정의
      Navi: Navi ,
      ProductList: ProductList,
      Modal: Modal
    }
}
</script>

<style>
@import url('./assets/css/app.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

</style>
