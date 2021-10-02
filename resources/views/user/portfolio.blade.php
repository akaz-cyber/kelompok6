@extends('layouts.master')
<head>
  <title>Photo </title>
</head>
@section('content')

<br>
 <section id="portfolio" class="portfolio">
<div class="container" data-aos="fade-up">
  <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-portfolio">portfolio</li>
                <li data-filter=".filter-dokumentasi " >dokumetasi</li>
              </ul>
            </div>
          </div>


  <!--================================= Dokumentasi ========================================-->
  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
 {{-- @foreach ( $galery as $uploadgambar ) --}}
 <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
    <div class="portfolio-wrap">
        <img src="{{asset('assets//img/portfolio/hasilfoto1.jpeg')}}" class="img-fluid"  alt="">
      {{-- <img src="{{ asset('assets/img/portfolio/hasilfoto1.jpeg' ) }} " class="img-fluid" alt=""> --}}
      <div class="portfolio-info">
        <div class="portfolio-links">

          <a href="{{asset('assets//img/portfolio/hasilfoto1.jpeg')}}" data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasilfoto1"><i class="bi bi-plus"></i></a>

        </div>
      </div>
    </div>
  </div>
 {{-- @endforeach --}}


    <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto2.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto2.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto2"><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto3.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto3.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto3"><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto4.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto4.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto4" ><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto5.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto5.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto5" ><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto6.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto6.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto6" ><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto7.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto7.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto7" ><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto8.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto8.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto8" ><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>
    <!--================ End dokumentasi ==============================-->


    <div class="col-lg-4 col-md-6 portfolio-item filter-dokumentasi">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto9.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto9.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto9"><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>
       <!--================ End dokumentasi ==============================-->


    <!--=================== Portfolio =================================-->
    <div class="col-lg-4 col-md-6 portfolio-item filter-portfolio">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/portfolio1.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/portfolio1.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="oleh shanty poto sunrice"><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-portfolio">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/portfolio2.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/portfolio2.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="oleh raihan poto sunrice"><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-portfolio">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/portfolio3.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/portfolio3.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="oleh raihan poto sunset"><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-portfolio">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/portfolio4.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/portfolio4.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="oleh hanifdzikirilah poto sunset"><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-portfolio">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/portfolio5.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/portfolio5.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="oleh sahrul foto sunset "><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-portfolio">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/portfolio6.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">

          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/portfolio6.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="oleh Della foto sunset"><i class="bi bi-plus"></i></a>

          </div>
        </div>
      </div>
    </div>

  </div>
  <!--================== end portfolio =================================-->
</div>

</section>
@endsection

