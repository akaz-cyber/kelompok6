@extends('layouts.master')
<head>
  <title>Contact</title>
</head>

@section('content')
<br>
<br>
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>CONTACT US</h2>
    <p>FORMULIR PENDAFTARAN</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
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
            <p>smksmahaputracerdasutama@gmail.com</p>
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

    <div class="col-lg-6">
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
      </form>

    </div>

  </div>

</div>

</section><!-- End Contact Section -->
<br>
<br>
@endsection
