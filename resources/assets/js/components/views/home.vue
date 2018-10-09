<template>
    <div id="home">
        <vue-headful
                title="EDUDU - Hệ thống đánh giá chất lượng giảng dạy của giáo viên | edudu.vn"
                description="Hệ thống đánh giá chất lượng giảng dạy của giáo viên"
        />
        <div class="container-fluid bg-main">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center search-main">
                    <h2 class="title">Tìm kiếm giáo viên của bạn</h2>
                    <div class="search">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                                <form class="card card-sm">
                                    <div class="card-body row no-gutters">
                                        <div class="col-auto">
                                            <i class="fas fa-search h4 text-body"></i>
                                        </div>
                                        <!--end of col-->
                                        <div class="col">
                                            <AutoCompleteSearch/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end of col-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row recent-review">
                    <div class="row" style="margin-left: 15px; margin-right: 0; margin-bottom: 15px;">
                        <span style="color: #fff;">Đánh giá gần đây</span>
                    </div>
                    <!-- <div class="col-md-3 col-xs-12 col-sm-4">
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
                                <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                <a href="#">Quang Tuấn</a>
                            </div>
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. </p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div v-for="review in reviews" :key="review.id" class="col-md-3 col-xs-12 col-sm-4">
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
                                <a href="#"> {{ review.user_id }} </a> đã đánh giá
                                <a href="#"> {{ review.teacher_id }} </a>
                            </div>
                            <div class="card-body">
                                <p>{{ review.description  }}</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-3 col-xs-12 col-sm-4">
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
                                <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                <a href="#">Quang Tuấn</a>
                            </div>
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. </p>
                            </div>
                        </div>
                    </div>
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
                                <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                <a href="#">Quang Tuấn</a>
                            </div>
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. </p>
                            </div>
                        </div>
                    </div>
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
                                <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                <a href="#">Quang Tuấn</a>
                            </div>
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. </p>
                            </div>
                        </div>
                    </div>
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
                                <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                <a href="#">Quang Tuấn</a>
                            </div>
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. </p>
                            </div>
                        </div>
                    </div>
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
                                <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                <a href="#">Quang Tuấn</a>
                            </div>
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. </p>
                            </div>
                        </div>
                    </div>
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
                                <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                <a href="#">Quang Tuấn</a>
                            </div>
                            <div class="card-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. </p>
                            </div>
                        </div>
                    </div> -->

                    <review v-for="review in reviews" :review="review" :key="review.id"></review>
                </div>
                <div class="row">
                    <section>
                        <div class="container">
                            <div class="text-center title-car">
                                <p>
                                    <span style="color:#9192a7">Chuyện của học viên</span>
                                </p>
                                <h2>Mỗi đánh giá đều có một câu chuyện</h2>
                            </div>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <div class="item active">
                                        <img src="ahi.jpg" alt="Los Angeles" style="width:100%;height: 500px;">
                                        <div class="carousel-caption">
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
                                                    <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                                    <a href="#">Quang Tuấn</a>
                                                </div>
                                                <div class="card-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and
                                                        scrambled it to make a type specimen book. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="avt.jpg" alt="Chicago" style="width:100%;height: 500px;">
                                        <div class="carousel-caption">
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
                                                    <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                                    <a href="#">Quang Tuấn</a>
                                                </div>
                                                <div class="card-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and
                                                        scrambled it to make a type specimen book. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="ahi.jpg" alt="New York" style="width:100%;height: 500px;">
                                        <div class="carousel-caption">
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
                                                    <a href="#">Nguyễn Văn Hà</a> đã đánh giá
                                                    <a href="#">Quang Tuấn</a>
                                                </div>
                                                <div class="card-body">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and
                                                        scrambled it to make a type specimen book. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
            <section class="edm container-fluid">
                <div class="container main-container">
                    <div class="row">
                        <h4 style="text-align: left; margin: 30px 0; padding-left: 15px;">Tại sao bạn nên chọn EDUDU
                            ?</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="ahihi">
                                <img src="/1.png" alt="" srcset="">
                                <h4>Học viên</h4>
                                <p>Được đánh giá giáo viên của họ</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ahihi">
                                <img src="/2.png" alt="" srcset="">
                                <h4>Giáo viên</h4>
                                <p>Có căn cứ để hoàn thiện kĩ năng giảng dạy</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ahihi">
                                <img src="/3.png" alt="" srcset="">
                                <h4>Trung tâm</h4>
                                <p>Có căn cứ để hoàn thiện<br>chương trình đào tạo giúp cải thiện chất lượng
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</template>
<script>
    import Review from './cardReview.vue';
    import AutoCompleteSearch from './autocomplete';

    export default {
        components: {
            Review, AutoCompleteSearch
        },
        data() {
            return {
                reviews: []
            }
        },
        mounted() {
            axios.get('http://127.0.0.1:8000/api/reviews/laest').then((response) => {
                this.reviews = response.data.data.reviews
            });
        }
    }
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Noto+Sans');

    #home {
        font-family: 'Noto Sans', sans-serif;
        font-size: 15px;
        background: #fff;
    }

    .search-main {
        /*border: 1px solid #000;*/
        margin-top: 15%;
        margin-bottom: 15%;
        padding-top: 2%;
        padding-bottom: 5%;
        box-shadow: 1px 2px 5px -2px rgba(1,1,1,.1),0 2px 7px 0 rgba(22,65,89,.03);
        /*background: rgba(0, 0, 0, 0.5);*/
    }

    .search-main > .title {
        margin-bottom: 48px;
        font-size: 2.875rem;
        line-height: 3.75rem;
        font-weight: 700;
        color: #fff;
    }

    .search-form {
        max-width: 600px;
        position: relative;
        margin: 0 auto;
    }

    .bg-main {
        background: url('/banner-home.jpg') center;
        background-size: cover;
    }

    /*.form-search {*/
        /*width: 50%;*/
        /*height: 40px;*/
        /*border-radius: 5px;*/
        /*border: none;*/
    /*}*/

    /*.form-submit {*/
        /*height: 40px;*/
        /*width: 40px;*/
        /*background: #12cd6a;*/
        /*color: #fff;*/
        /*border: none;*/
    /*}*/

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

    .card-rating:hover {
        transform: scale(1.05);
        box-shadow: 0 3px 25px 0 rgba(0, 0, 0, .5);
    }

    .carousel-caption > .card-rating {
        background: #12cd6a;
    }

    .carousel-caption {
        text-align: left
    }

    .carousel-caption a {
        color: #000;
    }

    .title-car {
        margin: 50px;
    }

    .title-car > h2 {
        font-size: 3.875rem;
        line-height: 3.75rem;
        font-weight: 700;
    }

    .edm {
        text-align: center;
        background-color: #F8F8ED;
        margin-top: 5%;
    }
</style>


