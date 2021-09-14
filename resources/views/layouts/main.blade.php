<!DOCTYPE html>
<html lang="en">

    <!--head-->
@include('layouts.template.head')
    <!--end head-->

  <body class="nav-md">
    <!--propile-->
@include('layouts.template.propile')
    <!--end propile-->

    <!--sidebar-->
@include('layouts.template.sidebar')
    <!--end sidebar-->

@include('layouts.template.navigation')
    <!--content-->

<div class="content">
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
         <h3>
            @yield('content')
        </h3>
            </div>
          </div>
        </div>
      </div>
</div>
    <!--end content-->
<!--footer-->
@include('layouts.template.footer')
<!--end footer-->

<!--javascript-->
@include('layouts.template.js')
<!--end javascript-->

  </body>
</html>
