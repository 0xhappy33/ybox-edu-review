<template>
    <div class="item-result">
        <div class="row head-item-result">
            <div class="col-sm-2">
                <img src="/images/avatar/circle_user.png" class="item-result-avatar" alt="User">
            </div>
            <div class="col-sm-10 title-user">
                <div class="item-user-name">
                    <span>John Anshan</span>
                </div>
                <div class="item-user-current-work">
                    <p>Làm việc tại trung tâm anh ngữ AMA</p>
                </div>
            </div>
        </div>
        <div class="row main-item-result">
            <div class="col-md-12 star-item">
                <Star/>
                <span class="font-16">|</span>
                <span class="review-count-number font-16">637 reviews</span>
                <span class="font-16">|</span>
                <span class="font-16">Điểm Edudu 8.0</span>
                <span class="font-16">|</span>
                <a href="#" class="font-16">Viết đánh giá</a>
            </div>
            <!--<div class="col-md-8 review-counter">-->
                <!--<span class="review-count-number font-16">| 637 reviews</span>-->
                <!--<span class="font-16">| Điểm Edudu 8.0</span>-->
                <!--<a href="#" class="font-16">| Viết đánh giá</a>-->
            <!--</div>-->
        </div>
    </div>
</template>

<script>
    import Star from "../items/star"

    export default {
        components: { Star },
        name: "itemresult",
        data () {
            return {
                items : [],
            };
        }
    }
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    .item-result {
        background-color: white;
        margin: 0 0 30px;
        padding: 10px;
        font-family: 'Roboto', sans-serif;
        font-style: normal;
    }

    .item-result-avatar {
        width: 90px;
        padding-left: 20px;
        padding-top: 10px;
    }

    .head-item-result .title-user {
        padding-top: 10px;
    }

    .item-result .main-item-result {
        margin-top: 10px;
    }

    .title-user .item-user-name span {
        font-size: 24px;
    }

    .item-user-current-work {
        font-size: 14px;
    }

    .font-16 {
        font-size: 16px;
        font-weight: 100;
        display: inline-block;
        padding-left: 5px;
    }

    a.font-16 {
        color: #1b6d85;
    }

</style>