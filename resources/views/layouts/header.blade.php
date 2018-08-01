
	<!-- Header -->
	<header id="header" class="transparent-nav">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="{{ url('/') }}">
						<img src="{{asset('assets/img/logo-light.png')}}" alt="logo" id="logo-header">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<span></span>
				</button>
				<!-- /Mobile toggle -->
			</div>

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					
					<li>
						<a href="#">Categories</a>
					</li>
                    @guest
					<li>
						<a href="{{ route('login') }}">Đăng nhập / Đăng ký</a>
                    </li>
                    
					{{-- <li>
						<a href="{{ route('register') }}">Đăng ký</a>
                    </li> --}}
                    @else
                    <li>
                            <img src="{{Auth::user()->avatar}}" alt=" {{ Auth::user()->name }}" style="
                            
                            border-radius: 35px;">
                    </li>
                    <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a href="#">Đánh giá của tôi</a>
                                    <a href="#">Trang cá nhân</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endguest
                    <li>
						<a href="#" class="teacher">Giáo viên</a>
					</li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
	</header>
	<!-- /Header -->