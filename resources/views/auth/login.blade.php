<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta content="" name="description">

    <meta content="" name="keywords">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{URL::to('assets2/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{URL::to('assets2/css/style.css')}}">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png' ) }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png' ) }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css' ) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css' ) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css' ) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css' ) }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css' ) }}" rel="stylesheet">
  </head>

  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

     <div class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/logo.png' ) }}" alt="">
        <span>ESKUL MULTIMEDIA</span>
        </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url ('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url ('user/about')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{url ('user/portfolio')}}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{url ('user/jadwal')}}">Jadwal</a></li>
          <li><a href="{{url ('user/info')}}">Info</a></li>
          <li><a class="nav-link scrollto" href="{{url ('user/contact')}}">Contact</a></li>
          <li><a href="{{url ('auth/login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <br>
  <br>
  <br>

<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{URL::to('assets2/images/signin-image.jpg')}}" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Login</h2>
                <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="email" name="email" id="your_name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="your_pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                   <button type="submit" class="btn btn-primary">login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


    <!-- JS -->
    <script src="{{URL::to('assets2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::to('assets2/js/main.js')}}"></script>

  <!-- Vendor JS Files -->
  <script src="{{URL::to('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{URL::to('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{URL::to('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{URL::to('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{URL::to('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::to('assets/js/main.js')}}"></script>






{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
