<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

     <div class="logo d-flex align-items-center">   
        <img src="{{asset('assets/img/logo.png' ) }}" alt="">
        <span>ESKUL MULTIMEDIA</span>
        </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url ('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url ('user.about')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{url ('user.portfolio')}}">Portfolio</a></li>
          <li><a href="{{url ('user.info')}}">INFO</a></li>
          <li><a class="nav-link scrollto" href="{{url ('user.contact')}}">Contact</a></li>
          <li><a href="#about">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>