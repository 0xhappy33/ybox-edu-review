<template>
	<div id="root">
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">
      <img src="../../img/logo/logo.png" alt="logo edudu" style="width:250px;">
  </a>
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">
     <li class="nav-item active">
        <a class="nav-link text-danger" href="#">Danh mục <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="#">Đăng nhập</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="#">Đăng ký</a>
      </li>
    </ul>
        
      <button class="btn btn-outline-success my-2 my-sm-0">Giáo viên</button>
 
  </div>
</nav>
		<router-view></router-view>
	</div>
</template>