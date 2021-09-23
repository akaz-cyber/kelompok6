<div class="container body">
    <div class="main_container">
    <div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
    <div class="clearfix"></div>
         <!-- menu profile quick info -->
         <div class="profile clearfix">
           <div class="profile_pic">
             <img src="{{asset('assets/img/logo.png' ) }}" alt="..." class="img-circle profile_img">
           </div>
           <div class="profile_info">
             <span>Welcome,</span>
            <h2> {{auth()->user()->name}}  </h2>

           </div>
         </div>
         <!-- /menu profile quick info -->
         <br />
