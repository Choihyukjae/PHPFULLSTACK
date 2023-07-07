<template >
  <!-- <div v-for="(item,i) in products" :key="i">
      <img :src= "item.img">
      <h4 @click="modd(i)">{{ item.name }}</h4>
      <p>{{ item.price }}원</p>
      <p>{{  item.count }}개</p>
    
  </div> -->
  <div>
    <img :src="product.img" alt="">
    <h4 @click="$emit('openModal')" >{{ product.name }}</h4>
    <p>{{ product.price }}</p>
    <p>{{ product.count }}</p>
  </div>
</template>
<script>


export default {
    name: 'ProductList',    
    // props:{
    //     products: Array,
    // }
    props:{
        product: Object,
    }
    
}
</script>
<style lang="">
    
</style>