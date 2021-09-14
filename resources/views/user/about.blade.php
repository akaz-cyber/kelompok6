@extends('layouts.master')
<head>
  <title>About</title>
</head>

@section('content')
<br>
<br>
<!-- ======= Values Section ======= -->
<section id="values" class="values">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>ABOUT US</h2>
    <p>kenapa kalian perlu untuk bergabung dengan eskul fotografi!!</p>
  </header>

  <div class="row">

    <div class="col-lg-4">
      <div class="box" data-aos="fade-up" data-aos-delay="200">
        <img src="{{URL::to('assets/img/kamera-1.png')}}" class="img-fluid" alt="">
        <h3>Mengunjungi tempat-tempat yang berhubungan dengan fotografi</h3>
        <p>jika kalian bergabung akan mendapatkan banyak wawasan dan ilmu tentang fotografi </p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="400">
        <img src="{{URL::to('assets/img/kamera-2.png')}}" class="img-fluid" alt="">
        <h3>Eskul photografi linier dengan mata pelajaran</h3>
        <p>Untuk mempersiapkan untuk ujikom yang akan datang </p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="600">
        <img src="{{URL::to('assets/img/kamera-3.png')}}" class="img-fluid" alt="">
        <h3>Agar siswa atau siswi bisa mengasah skill </h3>
        <p>jadi siswa siswi bisa mempraktekan skill photografy di luar maupun di dalam sekolah</p>
      </div>
    </div>

  </div>

</div>

</section><!-- End Values Section -->
@endsection
