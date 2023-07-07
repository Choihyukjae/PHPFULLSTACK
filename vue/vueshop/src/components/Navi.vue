<template>
   
<div class="nav"  >
    <a href="" v-for="(item,i) in navList" :key="i">{{ item }}</a>
</div>
    
</template>
<script>
export default {
    name:'Navi',
    props:{
        product1: String,
        navList: Array
    }
}
</script>
<style lang="">
    
</style>