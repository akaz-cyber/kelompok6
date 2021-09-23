    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a><i class=""></i> General Update <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{url('dassbord')}}">Jadwal </a></li>
                <li><a href="{{url('subadmin/informasi')}}">Artikel</a></li>
                <li><a href="{{url('admingaleri/galeri')}}">galery</a></li>
                <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </li>
              </ul>
        </div>


      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">

      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>
