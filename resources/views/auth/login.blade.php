@extends('layouts.index')
@section('title','Nền tảng đánh giá chất lượng giáo viên')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
@endsection

@section('content')
<div class="container">
			
            <div id="container_demo" >
                <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                    @csrf
                            <h1>Đăng nhập</h1> 
                            
                            <p> 
                                <label for="username" class="uname" > Email của bạn</label>
                                {{-- <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/> --}}
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <p> 
                                <label for="password" class="youpasswd"> Mật khẩu </label>
                                {{-- <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />  --}}
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </p>
                            <p class="keeplogin"> 
                                {{-- <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                <label for="loginkeeping">Ghi nhớ đăng nhập</label> --}}
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                            </p>
                           
                            <p class="signin button"> 
									<input type="submit" value="Đăng nhập"/> 
								</p>
                            <p class="change_link">
                                    <span class="text-warning">Nếu bạn chưa có tài khoản:</span>
                                {{-- <div class="loginGG"> --}}
                                        <a href="{{url('auth/google')}}" class="btn btn-primary"><i class="fa fa-google-plus" aria-hidden="true"></i>
                                            Tiếp tục với Google</a>
                                {{-- </div> --}}
                                {{-- Not a member yet ?
                                <a href="#toregister" class="to_register">Join us</a> --}}
                            </p>
                        </form>
                    </div>
                    
                </div>
            </div>  

    </div>
{{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                <a href="{{url('auth/google')}}" class="btn btn-primary"><i class="fa fa-google-plus" aria-hidden="true"></i>
                                        Đăng nhập với Google</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection
@section('js')
<script>
    $(document).ready(function(){
        $("#footer").remove();
    });
</script>
@endsection