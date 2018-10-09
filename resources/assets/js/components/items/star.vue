<template>
    <div class="item-rating" data-rating="1">
        <i class="star-1">★</i>
        <i class="star-2">★</i>
        <i class="star-3">★</i>
        <i class="star-4">★</i>
        <i class="star-5">★</i>
    </div>
</template>

<script>
    export default {
        name: "star"
    }
</script>

<style scoped>
    .item-rating {
        margin-left: 20px;
        display: inline-block;
    }
    .item-rating i {
        display: inline-block;
        color: white;
        width: 30px;
        height: 30px;
        background: #12cd6a;
        font-style: normal;
        padding-left: 5px;
    }
    .item-rating .star-5 {
        background-color: #e2e3e5;
    }
</style>