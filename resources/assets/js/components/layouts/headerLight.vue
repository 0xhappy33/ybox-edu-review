<template>
      <!-- Header Image Or May be Slider-->
    <div id="header" class="container-fluid pages">
        <div class="row">
            <!-- Header Image Or May be Slider-->
            <div class="top_header">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="logo">
                            <router-link :to="{ name: 'home' }"><img src="/images/logo2.png" alt="" /></router-link>
                        </div>
                        <div class="logins">
                            <a href="#" class="post_job"><span class="label job-type partytime">Giáo viên</span></a>
                            <!-- <a href="#" class="login"><i class="fa fa-user"></i></a> -->
                        </div>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"></li>
                                    <li class="mobile-menu add-job"><a href="#">Giáo viên</a></li>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Home#2</a></li>
                                    </ul>
                                
                                <li><a href="#">Viết đánh giá</a></li>
                                <template v-if="!currentUser">
                                <li><router-link :to="{ name: 'register' }">Đăng ký</router-link></li>
                                <li><router-link :to="{ name: 'login' }">Đăng nhập</router-link></li>
                                </template>
                                <template v-else>
                                <li>
                                    <a  style="cursor:  pointer;" class="dropdown-toggle" type="button" data-toggle="dropdown">{{ currentUser.name }}
                                        <!-- <span class="caret"></span> -->
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">Trang cá nhân</a></li>
                                        <li><a href="#" class="dropdown-item">Tất cả đánh giá</a></li>
                                        <li><a href="#" class="dropdown-item">Logout</a></li>
                                        <li><a href="#" @click.prevent="logout" class="dropdown-item">Đăng xuất</a></li>
                                    </ul>
                                </li>
                                </template>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>

                        </div>
                        <!-- navbar-collapse -->
                    </div>
                    <!-- .container-fluid -->
                </nav>
            </div>


        </div>
    </div>
  <!-- Header Image Or May be Slider-->
</template>
<style scoped>
@media (min-width: 768px)
{
    .navbar-nav {
    float: right;
    margin: 0;  
    }
}
 .pages .navbar {
     box-shadow:  0 0 2px #ccc;
     /* background-color: rgba(0, 0, 0, 0.2); */
     
 }

</style>

<script>
    export default{
        name: 'app-header',
        methods: {
            logout() {
                this.$store.commit('logout');
                this.$router.push('/login');
            }
        },
        computed: {
            currentUser() {
                return this.$store.getters.currentUser
            }
        }
    }
    // $(document).ready(function(){
        
    //     $(window).scroll(function(){
    //         if($(this).scrollTop() === 0){
    //             $(".pages .navbar").css({"background": "rgba(0, 0, 0, 0.2)"});
    //             $(".nav>li a").css({"color": "aliceblue"});
                
    //         }
    //         else{
    //             $(".pages .navbar").css({"background-color": "#fff"});
    //             $(".nav>li a").css({"color": "#333"});
    //         }
    //     })
    // })
</script>