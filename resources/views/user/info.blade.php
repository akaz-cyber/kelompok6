@extends('layouts.master')
<head>
  <title>Artikel</title>
</head>
@section('content')
<body>
  <main id="main">
    <br>
    <br>
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="{{URL::to('assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{url ('informasi/sejarah')}}">SEJARAH FOTOGRAFI DARI MASA LAMPAU</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">UNKNOWN</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">agust 18, 2021</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                Sejarah Fotografi dimulai pada abad ke-19. Tahun 1839 merupakan tahun awal
                kelahiran fotografi. Pada saat itu, di Perancis dinyatakan secara resmi bahwa fotografi adalah
                sebuah terobosan teknologi. Saat itu, rekaman dua dimensi seperti yang dilihat mata sudah bisa dibuat permanen....
                </p>
                <div class="read-more">
                  <a href="{{url ('informasi/sejarah')}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">
            <div id="blog2" class="blog2">
              <div class="entry-img">
                <img src="{{URL::to('assets/img/blog/blog-2.jpeg')}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{url('informasi/pengertian')}}">PENGERTIAN FOTOGRAFI</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">UNKNOWN</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">des 3, 2021</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                Kini fotografi secara luas telah diakui sebagai seni, ditampilkan di museum, dihargai oleh kolektor, dibahas oleh para kritikus, dan
                dipelajari dalam kursus sejarah seni. Tetapi pengakuan foto sebagai karya seni sempat mendapat beberapa pertentangan. Hal ini tak terlepas
                dari kenyataan bahwa fotografi menggunakan mesin.
                  </p>
                <div class="read-more">
                  <a href="{{url ('informasi/pengertian')}}">Read More</a>
                </div>
              </div>
              </div>
            </article><!-- End blog entry -->
            <div id="blog3" class="blog3">
            <article class="entry">

              <div class="entry-img">
                <img src="{{URL::to('assets/img/blog/blog-3.jpg')}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{url('informasi/jenis')}}">JENIS-JENIS FOTOGRAFI</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">UNKNOWN</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">jan 4, 2021</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                Bagi kamu yang ingin belajar mendalami bidang fotografi, untuk menjadi fotografer profesional tentunya kamu perlu tahu ilmu
                dasar fotografi seperti jenis-jenis fotografi apa yang ingin benar-benar kamu tekuni. Jenis-jenis fotografi ini bisa membantu
                kamu mengenal keahlian kamu berada di gaya mana. Berikut jenis-jenis fotografi
                  </p>
                <div class="read-more">
                  <a href="{{url ('informasi/jenis')}}">Read More</a>
                </div>
              </div>
              </div>
            </article><!-- End blog entry -->
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#blog">1</a></li>
                <li><a href="#blog2">2</a></li>
                <li><a href="#blog3">3</a></li>
              </ul>
            </div>

          </div>
          <!-- End blog entries list -->

          <div class="col-lg-4">

          @include('layouts.service.recentpost')
            <!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


</body>

</html>
@endsection
