@extends('layouts.master')
<head>
  <title>Halaman portfolio </title>
</head>
@section('content')
 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">

<div class="container" data-aos="fade-up">
  <header class="section-header">
    <h2>Portfolio</h2>
    <p>HASIL GAMBAR</p>
  </header>
  
  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto1.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto1.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto1"><i class="bi bi-plus"></i></a>
         
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto2.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
         
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto2.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto2"><i class="bi bi-plus"></i></a>
          
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto3.jpg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
        
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto3.jpg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto3"><i class="bi bi-plus"></i></a>
          
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto4.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
          
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto4.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto4" ><i class="bi bi-plus"></i></a>
          
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto5.jpg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
       
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto5.jpg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto5" ><i class="bi bi-plus"></i></a>
          
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto6.jpg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
         
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto6.jpg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto6" ><i class="bi bi-plus"></i></a>
          
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto7.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
       
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto7.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto7" ><i class="bi bi-plus"></i></a>
          
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto8.jpeg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
         
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto8.jpeg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto8" ><i class="bi bi-plus"></i></a>
          
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="{{ asset('assets/img/portfolio/hasilfoto9.jpg' ) }} " class="img-fluid" alt="">
        <div class="portfolio-info">
       
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/hasilfoto9.jpg' ) }} " data-gallery="portfolioGallery"class="portfokio-lightbox" title="hasil foto9"><i class="bi bi-plus"></i></a>
          
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</section><!-- End Portfolio Section -->
@endsection