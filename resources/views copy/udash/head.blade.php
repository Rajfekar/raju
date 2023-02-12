<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <link rel = "icon" href = "images/A1.jpg" type = "image/x-icon">

    <title>RITEE Library</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/dash/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/css/buttons.bootstrap5.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{url('/rit/libdashboard')}}">Ritee Raipur</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="{{url('/rit/libdashboard/log_out')}}"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="{{url('/rit/libdashboard/user_profile')}}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="{{url('/rit/libdashboard/log_out')}}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img style="height:40px" class="app-sidebar__user-avatar"  src="{{'/storage/students/'. $s->image}}" alt="img" onerror=this.src="{{'/images/profile.jfif'}}">
      
        <div>
          <p class="col-md-12">{{$s->name}}</p>
          <p style="font-size:0.7em;" class="col-md-12">
            @if(Session()->has('librarian_id'))
          
             {{"Librarian"}}
            @endif
        </p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/change_pass')}}"><i class="app-menu__icon fa fa-key"></i><span class="app-menu__label">Change Password</span></a></li>
         <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/user_profile')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Update Profile</span></a></li>
         {{-- <li><a class="app-menu__item active" href="{{url('/rit/fdashboard/ct_marks')}}"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">CT Marks</span></a></li> --}}
         <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/book_report')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Book Report</span></a></li>
        <li><a class="app-menu__item active" href="/rit/libdashboard/memberlist"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Member List</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/issuebook')}}"><i class="app-menu__icon fa fa-exchange"></i><span class="app-menu__label">Issue Book</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/issued_books')}}"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">Issue Book Report</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/attendance')}}"><i class="app-menu__icon fa fa-table"></i><span class="app-menu__label">Attendance</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/qrcodelogin')}}"><i class="app-menu__icon fa fa-camera-retro"></i><span class="app-menu__label">Scanner</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/add_member')}}"><i class="app-menu__icon fa fa-user-plus"></i><span class="app-menu__label">Add Member</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/add_book')}}"><i class="app-menu__icon fa fa-cart-plus"></i><span class="app-menu__label">Add Book</span></a></li>
        <li><a class="app-menu__item active" href="{{url('/rit/libdashboard/book_request')}}"><i class="app-menu__icon fa fa-hourglass-half"></i><span class="app-menu__label">Book Request</span></a></li>
        {{-- {{url('/rit/libdashboard/notice')}} --}}
        <li><a class="app-menu__item active disabled" href="{{url('/rit/libdashboard/notice')}}"><i class="app-menu__icon fa fa-commenting"></i><span class="app-menu__label">Notice</span></a></li>
        {{--  --}}
        <li><a  class="app-menu__item active disabled" href="{{url('/rit/libdashboard/qr_code')}}"><i class="app-menu__icon fa fa-barcode"></i><span class="app-menu__label"> QR_CODE</span></a></li>
        
      </ul>
    </aside>
  