<style scoped>
.error-404 {
    text-align: center;
    margin: 80px auto 0;
}
.error-404 .error-code {
  bottom: 60%;
  color: #4686CC;
  font-size: 96px;
  line-height: 100px;
  font-weight: bold;
}
.error-404 .error-desc {
  font-size: 12px;
  color: #647788;
}
.error-404 .m-b-10 {
  margin-bottom: 10px!important;
}
.error-404 .m-b-20 {
  margin-bottom: 20px!important;
}
.error-404 .m-t-20 {
  margin-top: 20px!important;
}

</style>
<template>
<div class="error-404">
    <div class="error-code m-b-10 m-t-20">404 <i class="fa fa-warning"></i></div>
    <h2 class="font-bold">Rất tiếc, 404! Chúng tôi không tìm thấy trang bạn yêu cầu.</h2>

    <div class="error-desc">
       Xin lỗi, nhưng trang bạn đang tìm kiếm không tìm thấy hoặc không tồn tại.<br>
       Hãy thử làm mới trang hoặc nhấp vào nút bên dưới để quay lại Trang chủ.
        <div><br/>
            <!-- <a class=" login-detail-panel-button btn" href="http://vultus.de/"> -->
            <router-link :to="{ name: '/' }" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span>  Về trang chủ</router-link>

        </div>
    </div>
</div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
