<template>
<div>
    <vue-headful
            title="Đăng nhập | EDUDU - Hệ thống đánh giá chất lượng giảng dạy của giáo viên | edudu.vn"
            description="Hệ thống đánh giá chất lượng giảng dạy của giáo viên"
        />
    <div class="container-fluid login_register header_area deximJobs_tabs">
        <div class="row">
            <div class="container main-container-home">
                <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-pills ">
                        <li><a>Đăng nhập</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="login" class="tab-pane fade in active  white-text">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                                <!-- <p>Login to your Recruiter account.</p> -->
                                <form @submit.prevent="authenticate" name="contact_us" class="contact_us">
                                    <div class="form-group" v-if="authError">
                                        <p class="error">
                                            {{ authError }}
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="name" v-model="form.email">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password-2" id="password-2" v-model="form.password"/>
                                    </div>
                                    <div class="form-group submit">
                                        <label>Submit</label>
                                        <div class="cbox">
                                            <input type="checkbox" name="checkbox" />
                                            <span>Ghi nhớ</span>
                                        </div>
                                    </div>
                                    <div class="form-group submit">
                                        <label>Submit</label>
                                        <input type="submit" name="submit" value="Đăng nhập" class="signin" id="signin">
                                        <a href="#" class="lost_password">Quên mật khẩu ?</a>
                                    </div>
                                    <div class="form-group">
                                        <a class="col-lg-offset-2 btn btn-social btn-fb" href="">
                                            <i class="fa btn-fa fa-facebook-square"></i>
                                            <span>Sign in with Facebook</span></a>
                                        <a class="col-lg-offset-2 btn btn-social btn-gg" href="">
                                            <i class="fa btn-fa fa-google-plus"></i>
                                            <span>Sign in with Google</span></a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                                <div class="widget">
                                    <h3>Tại sao bạn nên có tài khoản EDUDU </h3>
                                    <ul>
                                        <li>
                                            <p><i class="fa fa-clock-o"></i>Là học viên bạn có thể rút ngắn thời gian lựa chọn giáo viên tốt cho mình</p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-child"></i>Là giáo viên bạn có thể phát triển bản thân và mong biết các bạn học viên cần gì ở mình thông qua các đánh giá</p>
                                        </li>

                                        <li>
                                            <p><i class="fa fa-check-circle-o"></i>Là trung tâm bạn có thể quảng cáo và hoàn thiện trung tâm của mình</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
 import {login} from '../../../helpers/auth';
export default {
        name: "login",
        data() {
            return {
                form: {
                    email: '',
                    password: ''
                },
                error: null
            };
        },
        methods: {
            authenticate() {
                this.$store.dispatch('login');

                login(this.$data.form)
                    .then((res) => {
                        this.$store.commit("loginSuccess", res);
                        this.$router.push({path: '/'});
                    })
                    .catch((error) => {
                        this.$store.commit("loginFailed", {error});
                    });
            }
        },
        computed: {
            authError() {
                return this.$store.getters.authError;
            }
        }
    }
</script>
<style scoped>
.error {
    text-align: center;
    color: red;
}
</style>
