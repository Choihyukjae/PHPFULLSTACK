<template>
        <div  class ="bg_black" v-if="modalflg">
            <div class ="bg_white">
                <img src="" alt="">
                <h4>상품명</h4>
                <p>내용</p>
                <p>가격</p>
                <button >수량 증가</button>
                <button >수량 감소</button> 
                <span>0 </span>
                <button @click="$emit('closeModal')" >닫기</button>
            </div>
        </div>
</template>
<script>
export default {
    name: 'Modal',    
    props: {
        modalflg: Boolean
    }
}
</script>
<style lang="">
    
</style>