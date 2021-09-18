<!doctype html>
<html lang="en">
    <!--head-->
    @include('layouts.table.head')
    <!--end head-->
    <!--navbar-->
    @include('layouts.service.navbar')
    <!--end navabar-->
	<body>

      @yield('jadwal')

    <!--javascript-->
     @include('layouts.table.js')
    <!-- end javascript-->
	</body>
</html>
