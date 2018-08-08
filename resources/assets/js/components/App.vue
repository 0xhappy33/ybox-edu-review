<template>
	<div id="root">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
        <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="/images/logo.png" alt="" style="width:190px;" srcset="">
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Đăng nhập / Đăng ký</a>
            </li> 
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Trang cá nhân
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btn-outline-light" href="#">Giáo viên</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
		<router-view></router-view>
	</div>
</template>
<script>
	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 86){
		  $("#banner").addClass("shrink");
		}
		else
		{
			$("#banner").removeClass("shrink");
		}
	});
</script>