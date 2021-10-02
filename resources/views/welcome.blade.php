@extends('layouts.master')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">EKSTRAKURIKULER PHOTOGRAPHY SMKS MAHAPUTRA CERDAS UTAMA</h1>
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
              <h2>ASAL MULA TERBENTUKNYA ESKUL PHOTOGRAPHY </h2>
              <p>
              <i>pada tahun 2019 didirikan eskul photography dan ternyata ada suatu hari
                pada hari senin itu, jadwal eskul kosong dan di sanalah di adakan eskul photography.
                jadi kenapa ada eskul photography karena linier dengan mata pelajaran produktif nya,multimedia
                di semester satu kelas 11 itu, ada desain grafis percakapan dan di semester dua itu ada materi
                tentang photography. dan juga eskul photography itu buat apa,selain untuk melatih ke tangkasan siswa
                mereka juga akan di bawa ke tempat-tempat yang berhubungan dengan photography. Contoh nya tempat sewa kamera,
                disitulah para siswa dapat melihat berbagai fariasi bentuk kamera dan tidak mungkin sekolah mengadakan pameran
                kamera sejenis itu jadi gunanya eskul photography itu untuk siswa bisa mengunjungi tempat-tempat yang berhubungan
                dengan photography dan memperluas skil yang di punyai siswa itu.
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



      <!-- ======= Values Section ======= -->
    <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>ABOUT US</h2>
        <p>kenapa kalian perlu untuk bergabung dengan eskul photography!!</p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="{{URL::to('assets/img/kamera-1.png')}}" class="img-fluid" alt="">
            <h3>Mengunjungi tempat-tempat yang berhubungan dengan Photography</h3>
            <p>jika kalian bergabung akan mendapatkan banyak wawasan dan ilmu tentang photography </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="{{URL::to('assets/img/kamera-2.png')}}" class="img-fluid" alt="">
            <h3>Eskul Photography linier dengan mata pelajaran</h3>
            <p>Untuk mempersiapkan untuk ujikom yang akan datang </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="{{URL::to('assets/img/kamera-3.png')}}" class="img-fluid" alt="">
            <h3>Agar siswa atau siswi bisa mengasah skill </h3>
            <p>jadi siswa siswi bisa mempraktekan skill photography di luar maupun di dalam sekolah</p>
          </div>
        </div>

      </div>

    </div>
    </section> <!-- End Values Section -->

        <!-- ======= Team Section ======= -->

        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

              <header class="section-header">

                <p>Pembina Ekstrakurikuler</p>
              </header>

                <div class="row gy-4">
                <center>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                      <div class="member-img">
                        <img src="{{URL::to('assets/img/team/pakyusuf.jpeg')}}" class="img-fluid" alt="">
                        <div class="social">
                          <a href="https://www.instagram.com/yusufmaulanaaripin/" target="_blank"><i class="bi bi-instagram"></i></a>
                          <a href="https://www.youtube.com/channel/UCkoVZv0cwx9n-6XIeggxtwQ" target="_blank"><i class="bi bi-youtube"></i></a>
                          <a href="https://www.facebook.com/YusufMaulanaAripin" target="_blank"><i class="bi bi-facebook"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>yusuf Maulana Aripin </h4>
                        <span>sarjana desain grafis</span>
                        <p>Seorang guru dari SMK Mahaputra serta sebagai pembimbing Eskul photography
                      </p>
                      </div>
                    </div>
                </center>
                  </div>


                </div>
                 </div>







          </section>
          <!-- End Team Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Pertanyaan tentang ESKUL PHOTOGRAPHY</p>
          </header>

          <div class="row">
            <div class="col-lg-6">
              <!-- F.A.Q List 1-->
              <div class="accordion accordion-flush" id="faqlist1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                        Hari apa ekskul photography di laksanakan?
                    </button>
                  </h2>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                        setiap hari senin  di adakannya eskul photography
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                        jam berapa kegiatan ekskul photography di laksanakan?
                    </button>
                  </h2>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                        sesudah pulang sekolah jam 15.00 sampai 16.00
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    apakah siswa jurusan RPL boleh untuk bergabung dengan eskul photography?
                    </button>
                  </h2>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      tentu boleh karena eskul ini terbuka untuk semua siswa dan juga banyak murid dari kelas RPL yang masuk ke eskul photography
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-lg-6">

              <!-- F.A.Q List 2-->
              <div class="accordion accordion-flush" id="faqlist2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                      dimanakah tempat pelaksanaan ekskul photography
                    </button>
                  </h2>
                  <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                        tempat kegiatan ekskul photography di sekolah. karena selepas pulang sekolah pada hari senin selama satu jam
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                        apakah ada kegiatan kunjungan di ekskul photography?
                    </button>
                  </h2>
                  <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                        biasanya kunjungan itu di laksanakan setiap 3 bulan sekali juga atau lebih
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </section>
       <!-- End F.A.Q Section -->

    <!-- ======= Recent Blog Posts Section ======= -->

    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>NEW VIDEO GALLERY</p>
        </header>
        <div class="row">
        <div class="col-lg-6">
            <div class="post-box">
             <div class=" responsive-embed-youtube post-img"> <iframe width="100%" height="100%" src="https://www.youtube.com/embed/aIphC7JZbao" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe></div>
                 <h3 class="post-title"> KAMERA NIKON D5100 DAN LENSA KIT 18-55</h3>

             </div>
          </div>

          <div class="col-lg-6">
            <div class="post-box">
                <div class=" responsive-embed-youtube post-img"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/xSnKjT3yNxE"
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                 gyroscope; picture-in-picture" allowfullscreen></iframe></div>
              <h3 class="post-title">10 Tips Memotret Model untuk Pemula</h3>
            </div>
          </div>
          </div>





        </div>

      </div>

    </section>
    <!-- End Recent Blog Posts Section -->


@endsection
