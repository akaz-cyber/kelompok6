@extends('layouts.master')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">EKSTRAKULIKULER FOTOGRAFI SMK MAHAPUTRA CERDAS UTAMA</h1>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets/img/hero.png' ) }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>ASAL MULA TERBENTUKNYA ESKUL PHOTOGRAFI </h2>
              <p>
              <i>pada tahun 2019 didirikan eskul photografi dan ternyata ada suatu hari
                pada hari senin itu, jadwal eskul kosong dan di sanalah di adakan eskul fotografi.
                jadi kenapa ada eskul fotografi karena linier dengan mata pelajaran produktif nya,multimedia
                di semester satu kelas 11 itu, ada desain grafis percakapan dan di semester dua itu ada materi
                tentang fotografi. dan juga eskul photografi itu buat apa,selain untuk melatih ke tangkasan siswa
                mereka juga akan di bawa ke tempat-tempat yang berhubungan dengan fotografi. Contoh nya tempat sewa kamera,
                disitulah para siswa dapat melihat berbagai fariasi bentuk kamera dan tidak mungkin sekolah mengadakan pameran
                kamera sejenis itu jadi gunanya eskul photografi itu untuk siswa bisa mengunjungi tempat-tempat yang berhubungan
                dengan photografi dan memperluas skil yang di punyai siswa itu.
              </i>
           </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/sejarah.jpg' ) }} " class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->


    <!-- ======= Team Section ======= -->

    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">

          <p>PEMBINA EKSTRAKULIKULER</p>
        </header>

        <div class="row gy-4">
        <center>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/pakyusuf.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/yusufmaulanaaripin/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.youtube.com/channel/UCkoVZv0cwx9n-6XIeggxtwQ" target="_blank"><i class="bi bi-youtube"></i></a>
                  <a href="https://www.facebook.com/YusufMaulanaAripin" target="_blank"><i class="bi bi-facebook"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>yusuf Maulana Aripin S.Ds</h4>
                <span>SERJANA DESAIN</span>
                <p>Seorang guru dari SMK Mahaputra serta sebagai pembimbing Eskul Fotografi
              </p>
              </div>
            </div>
          </div>
        </center>




    </section><!-- End Team Section -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>NEW INFORMATION</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('assets/img/blog/blog-1.jpg' ) }} " class="img-fluid" alt=""></div>
              <span class="post-date">RABU,18 AGUSTUS 2021</span>
              <h3 class="post-title">SEJARAH FOTOGRAFI DARI MASA LAMPAU</h3>
              <a href="{{url ('informasi/sejarah')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('assets/img/blog/blog-2.jpeg' ) }} " class="img-fluid" alt=""></div>
              <span class="post-date">MINGGU,29 FEBUARI 2021</span>
              <h3 class="post-title">PENGERTIAN FOTOGRAFI</h3>
              <a href="{{url ('informasi/pengertian')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('assets/img/blog/blog-3.jpg' ) }} " class="img-fluid" alt=""></div>
              <span class="post-date">SENIN,18 DESEMBER 2021</span>
              <h3 class="post-title">JENIS-JENIS PHOTOGRAFI</h3>
              <a href="{{url ('informasi/jenis')}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

@endsection
