<template>
    <div class="container-fluid login_register header_area deximJobs_tabs">
        <div class="row">
            <div class="container main-container-home">
                <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-pills ">
                        <li><a>Đăng ký</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="register-account" class="tab-pane fade in active white-text">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                                <!-- <p>Login to your Recruiter account.</p> -->
                                <form name="contact_us" class="contact_us">
                                    <div class="form-group">
                                        <label>Họ Tên</label>
                                        <input type="text" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password" id="password" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu</label>
                                        <input type="password" name="cpassword" id="cpassword" />
                                    </div>
                                    <div class="form-group submit">
                                        <label class="display:none">Submit</label>
                                        <input type="submit" name="submit" value="Đăng ký" id="register">
                                        <a href="#" class="lost_password">Quên mật khẩu ?</a>
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
</template>
