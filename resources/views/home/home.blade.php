@extends('layouts.index')
@section('title','Nền tảng đánh giá chất lượng giáo viên')

@section('css')
@endsection

@section('content')

	<!-- Home -->
	<div id="home" class="hero-area">

		<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url({{asset('assets/img/home-background.jpg')}})"></div>
		<!-- /Backgound Image -->

		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8">

						<h1 class="white-text">Bạn muốn tìm gì ?</h1>
						<form action="#" method="post">
							<input type="text" name="keyword" style="background: #FFFFFF;" placeholder="Gõ từ khóa mà bạn cần tìm kiếm...">
							<a class="main-button icon-button" style="margin-top: 1%;" href="#">Search</a>
						</form>
						<!-- <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant, eu pro alii error homero.</p> -->

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /Home -->

	<!-- About -->
	<div id="about" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<div class="col-md-6">
					<div class="section-header">
						<h2>Chào mừng đến với YReview</h2>
						<p class="lead">Xem những đánh giá để chọn cho mình những sự giáo dục tốt nhất</p>
					</div>

					<!-- feature -->
					<div class="feature">
						<i class="feature-icon fa fa-flask"></i>
						<div class="feature-content">
							<h4>Đặt khóa học Online</h4>
							<p>Chúng tôi có sự liên kết giữa các trung tâm khiến cho việc đăng ký các khóa học của bạn trở nên dễ dàng.</p>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="feature">
						<i class="feature-icon fa fa-users"></i>
						<div class="feature-content">
							<h4>Tìm kiếm giảng viên chất lượng</h4>
							<p>Với những đánh giá trung thực từ và uy tín từ những bạn học viên đã chia sẻ, bạn có thể hoàn toàn chọn được một người
								thầy thích hợp với mình.</p>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="feature">
						<i class="feature-icon fa fa-comments"></i>
						<div class="feature-content">
							<h4>Cộng đồng</h4>
							<p>Cùng chúng tôi tạo nên một cộng đồng Y-Review.</p>
						</div>
					</div>
					<!-- /feature -->

				</div>

				<div class="col-md-6">
					<div class="about-img">
						<img src="{{asset('assets/img/about.png')}}" alt="">
					</div>
				</div>

			</div>
			<!-- row -->

		</div>
		<!-- container -->
	</div>
	<!-- /About -->

	<!-- Courses -->
	<div id="courses" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">
				<div class="section-header text-center">
					<h2>Top giảng viên</h2>
					<p class="lead">Những giảng viên được các học viên yêu thích và đánh giá cao.</p>
				</div>
			</div>
			<!-- /row -->

			<!-- courses -->
			<div id="courses-wrapper">

				<!-- row -->
				<div class="row">

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="{{asset('assets/img/course01.jpg')}}" alt="">
								
							</a>
							<a class="course-title" href="#">Beginner to Pro in Excel: Financial Modeling and Valuation</a>
							<div class="course-details">
								<span class="course-category">Business</span>
								<span class="course-price course-free">Free</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="{{asset('assets/img/course02.jpg')}}" alt="">
								
							</a>
							<a class="course-title" href="#">Introduction to CSS </a>
							<div class="course-details">
								<span class="course-category">Web Design</span>
								<span class="course-price course-premium">Premium</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="{{asset('assets/img/course03.jpg')}}" alt="">
								
							</a>
							<a class="course-title" href="#">The Ultimate Drawing Course | From Beginner To Advanced</a>
							<div class="course-details">
								<span class="course-category">Drawing</span>
								<span class="course-price course-premium">Premium</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
                                <img src="{{asset('assets/img/course04.jpg')}}" alt="">
								
							</a>
							<a class="course-title" href="#">The Complete Web Development Course</a>
							<div class="course-details">
								<span class="course-category">Web Development</span>
								<span class="course-price course-free">Free</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

				</div>
				<!-- /row -->


				<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">Xem thêm</a>
					</div>
				</div>
			</div>
			<hr class="section-hr">
			<!-- row -->
			<div class="row">
				<div class="section-header text-center">
					<h2>Top khóa học chất lượng</h2>
					<p class="lead">Những khóa học được đánh giá cao từ cộng đồng mạng.</p>
				</div>
			</div>
			<!-- /row -->

			<!-- courses -->
			<div id="courses-wrapper">
				<!-- row -->
				<div class="row">

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="{{asset('assets/img/course05.jpg')}}" alt="">
								
							</a>
							<a class="course-title" href="#">Mẹo, thủ thuật, kỹ thuật trong PHP</a>
							<div class="course-details">
								<span class="course-category">Web Development</span>
								<span class="course-price course-free">Free</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="{{asset('assets/img/course06.jpg')}}" alt="">
								
							</a>
							<a class="course-title" href="#">Thiết kế web toàn tập</a>
							<div class="course-details">
								<span class="course-category">Web Design</span>
								<span class="course-price course-free">Free</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
								<img src="{{asset('assets/img/course07.jpg')}}" alt="">
								
							</a>
							<a class="course-title" href="#">Trở thành Photograper</a>
							<div class="course-details">
								<span class="course-category">Photography</span>
								<span class="course-price course-free">Free</span>
							</div>
						</div>
					</div>
					<!-- /single course -->


					<!-- single course -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="course">
							<a href="#" class="course-img">
                                <img src="{{asset('assets/img/course08.jpg')}}" alt="">
								
							</a>
							<a class="course-title" href="#">Typography từ A đến Z</a>
							<div class="course-details">
								<span class="course-category">Typography</span>
								<span class="course-price course-free">Free</span>
							</div>
						</div>
					</div>
					<!-- /single course -->

				</div>
				<!-- /row -->

			</div>
			<!-- /courses -->

			<div class="row">
				<div class="center-btn">
					<a class="main-button icon-button" href="#">Xem thêm</a>
				</div>
			</div>

		</div>
		<!-- container -->

	</div>
	<!-- /Courses -->

	<!-- Call To Action -->
	<div id="cta" class="section">

		<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url({{asset('assets/img/cta1-background.jpg')}})"></div>
		<!-- /Backgound Image -->

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<div class="col-md-6">
					<h2 class="white-text">Bạn là giảng viên, trung tâm ?</h2>
					<p class="lead white-text">Hãy đăng ký và xác thực với chúng tôi. Chúng tôi sẽ giúp bạn đánh giá và giới thiệu bạn hoặc khóa học của bạn đến với
						rộng rãi cộng đồng Y-Review.</p>
					<a class="main-button icon-button" href="#">Liên hệ ngay!</a>
				</div>

			</div>
			<!-- /row -->

		</div>
		<!-- /container -->

	</div>
	<!-- /Call To Action -->

	<!-- Why us -->
	<div id="why-us" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">
				<div class="section-header text-center">
					<h2>Tại sao bạn nên dùng Y-Review</h2>
					<p class="lead">Với sự mong muốn góp phần nâng cao chất lượng giáo dục, chúng tôi đã tạo nên Y-Review với những giá trị cho bạn.</p>
				</div>

				<!-- feature -->
				<div class="col-md-4">
					<div class="feature">
						<i class="feature-icon fa fa-flask"></i>
						<div class="feature-content">
							<h4>Đăng ký học dễ dàng</h4>
							<p>Chúng tôi có sự liên kết giữa các trung tâm khiến cho việc đăng ký các khóa học của bạn trở nên dễ dàng.</p>
						</div>
					</div>
				</div>
				<!-- /feature -->

				<!-- feature -->
				<div class="col-md-4">
					<div class="feature">
						<i class="feature-icon fa fa-users"></i>
						<div class="feature-content">
							<h4>Giảng viên chất lượng</h4>
							<p>Với những đánh giá trung thực từ và uy tín từ những bạn học viên đã chia sẻ, bạn có thể hoàn toàn chọn được một người
								thầy thích hợp với mình.</p>
						</div>
					</div>
				</div>
				<!-- /feature -->

				<!-- feature -->
				<div class="col-md-4">
					<div class="feature">
						<i class="feature-icon fa fa-comments"></i>
						<div class="feature-content">
							<h4>Cộng đồng</h4>
							<p>Cùng chung tay tạo nên một cộng đồng Y-Review chất lượng.</p>
						</div>
					</div>
				</div>
				<!-- /feature -->

			</div>
			<!-- /row -->

			<hr class="section-hr">


		</div>
		<!-- /container -->

	</div>
	<!-- /Why us -->

	<!-- Contact CTA -->
	<div id="contact-cta" class="section">

		<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url({{asset('assets/img/cta2-background.jpg')}})"></div>
		<!-- Backgound Image -->

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="white-text">Liên hệ với chúng tôi</h2>
					<p class="lead white-text">Luôn mong muốn những góp ý hoặc sự hợp tác của bạn dành cho chúng tôi.</p>
					<a class="main-button icon-button" href="#">Contact Us Now</a>
				</div>

			</div>
			<!-- /row -->

		</div>
		<!-- /container -->

	</div>
	<!-- /Contact CTA -->
@endsection

@section('js')
<script>
        $(document).ready(function(){
            $(window).scroll(function() {
                if ($(this).scrollTop() > 150) {
                    $("#header.transparent-nav").css({"background": "#fff","position": "fixed","border-bottom": "1px solid rgba(255, 103, 0, 0.25)"});
                    $("#header.transparent-nav .main-menu li a ").css({"color": "#000"});
                    $("#logo-header").attr("src","{{asset('assets/img/logo-dark.png')}}");
                    $(".dropdown-menu").css({"background-color": "#fff"});
                } 
                else{
                    $("#header.transparent-nav").css({"background-color": "transparent","position": "absolute","border-bottom": "1px solid rgba(235, 235, 235, 0.25)"});
                    $("#header.transparent-nav .main-menu li a ").css({"color": "#fff"});
                    $("#logo-header").attr("src","{{asset('assets/img/logo-light.png')}}");
                    $(".dropdown-menu").css({"background-color": "transparent"});
                }
            });
        });
    </script>
@endsection