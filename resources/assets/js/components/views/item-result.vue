<template>
    <div class="item-result container">
        <div class="row head-item-result">
            <div class="col-md-2">
                <img src="/public/images/avatar/circle_user.png" alt="User">
            </div>
            <div class="col-md-10 title-user">
                <div class="item-user-name">
                    <h2>John Anshan</h2>
                </div>
                <div class="item-user-current-work">
                    <p>Làm việc tại trung tâm anh ngữ AMA</p>
                </div>
            </div>
        </div>
        <div class="row main-item-result">
            <div class="col-md-3 star-item">
                <at-rate
                        :allow-half="true"
                        :show-text="false"
                        :value="value1">
                </at-rate>
            </div>
            <div class="col-md-3 review-counter">
                <span class="review-count-number">637 reviews</span>
            </div>
            <div class="col-md-3 review-point">
                <span>Điểm Edudu</span>
            </div>
            <div class="col-md-3 review-recommendation">
                <a href="#">Viết đánh giá</a>
            </div>
        </div>
    </div>
</template>

<script>
    import AtRate from "at-ui/src/components/rate/src/rate";

    export default {
        components: { AtRate },
        name: "itemresult",
        data () {
            return {
                items : [],
            };
        }
    }
</script>

<style scoped>
    .item-result {
        background-color: white;
        height: 134px;
    }

</style>