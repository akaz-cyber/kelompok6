<!DOCTYPE html>
<html lang="en">

    <!-- head -->
    @include('layouts.service.head')
    <!-- end head -->
    
<body>

  <!-- ======= Header ======= -->
  @include('layouts.service.navbar')
  <!-- End Header -->


  <main id="main">
      @yield('content')
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.service.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- javascript -->
  @include('layouts.service.js')
  <!-- end javascript -->

</body>

</html>