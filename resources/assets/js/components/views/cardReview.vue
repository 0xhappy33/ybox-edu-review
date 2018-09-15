<template>
    <div class="col-md-3 col-xs-12 col-sm-4">
        <div class="card-rating">
            <div class="card-header">
                <img src="/avt.jpg" class="profile-image" alt="">
                <div class="rating-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
            <div class="card-auth">
                <a href="#">{{ review.user_id }}</a> đã đánh giá
                <a href="#">{{ review.teacher_id }}</a>
            </div>
            <div class="card-body">
                <p>{{ review.description }}</p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['review']
    }
</script>
<style scoped>

    .checked {
        color: orange;
    }

    .card-header {
        display: table;
        margin-bottom: 10px;
    }

    .card-auth {
        margin-bottom: 10px;
    }

    img.profile-image {
        display: table-cell;
        height: 40px;
        width: 40px;
        border-radius: 50%;
    }

    .rating-star {
        display: table-cell;
        vertical-align: middle;
        padding-left: 20px;
    }

    .card-body > p {
        text-align: justify;
        font-size: 14px;
    }

    .recent-review {
        margin-top: -10%;
    }

    .card-rating {
        background: #f2f4f5;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 1%;
        -webkit-transition: ease 0.3s;
        /* Safari */
        transition: ease 0.3s;
    }

</style>


