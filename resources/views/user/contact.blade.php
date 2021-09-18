@extends('layouts.master')
<head>
  <title>Contact</title>
</head>

@section('content')
<br>
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">

<div class="container" data-aos="fade-up">

    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.096866063062!2d107.57727271487315!3d-6.997873170481926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e94c27f4ee2f%3A0x5cff6a44153d50b4!2sSMK%20Mahaputra%20Cerdas%20Utama%20.%20Yayasan%20Mahaputra!5e0!3m2!1sid!2sid!4v1631760893018!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

<br>
  <div class="row gy-4">

    <div class="col-lg-12">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i  class="bi bi-geo-alt "></i></a>
            <h3>Address</h3></a>
            <p>Sukamukti,<br>Bandung, Jawa Barat 40921</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>0895-6304-68373<br> 08856-2455-4655</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>smksmahaputracerdasutama@gmail.com </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-clock"></i>
            <h3>Open Hours</h3>
            <p>senin - jum'at<br>9.00 - 15.00</p>
          </div>
        </div>
      </div>

    </div>

    {{-- <div class="col-lg-6">
      <form action="{{url('user/contact')}}" method="post" class="box-1">
      <div class="row gy-4">
        {{csrf_field()}}
          <div class="col-md-20 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Yout Name and class" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
          </div>

            <button  class="btn btn-primary" type="submit">Send Message</button>
          </div>

        </div>
      </form> --}}

    </div>

  </div>

</div>

</section><!-- End Contact Section -->
<br>
<br>
@endsection
