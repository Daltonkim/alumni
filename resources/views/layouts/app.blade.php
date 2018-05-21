<!DOCTYPE html>
            <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=16207774"></script>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumni</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    
<link rel="stylesheet" href="css/css.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>








<link rel="stylesheet" href="css/alumni.css">

    <style>
        body {
            font-family: 'Lato';

        }

        .fa-btn {
            margin-right: 6px;
        }
        #primary-nav .level-1 {
         position: relative;
         float: left;
        list-style: none;
        margin: 0;
       width: 16.66667%;
          padding: 1em 4px;
}
    </style>
<!--header-->
  <div class="title-bar" style="box-sizing: border-box;   background-color: #292c2f; display: block; border-radius">
    <a href="/">
      <div class="container" style="">
        <span class="home-icon"></span><span class="site-title" style="line-height: 1.65; font-weight:20px; box-sizing: border-box; display: block; font-size:50px; height:100px; ; text-align: center; color: white;">Laikipia Alumni</span>
      </div>
    </a>
  </div>

  <nav id="top-nav" role="navigation" style="line-height: 40px; ">
     <div id="primary-nav" style=" border-bottom: 5px solid grey;display: block; float: center; line-height: 24px;
font-weight: 700; box-sizing: border-box;">
<ul class="menu" data-li-count="7" style="position: relative;
display: block;
float: none;
margin: 0 auto; border-bottom: 5px solid grey;">
<li class="first menu-mlid-1495 level-1"><a href="/get-involved">Join Us</a></li>
<li class="menu-mlid-1496 level-1"><a href="/programs-events">Events</a></li>
<li class="menu-mlid-1497 level-1"><a href="/alumni-giving">Alumni Giving</a></li>
<li class="menu-mlid-1499 level-1"><a href="/reunion">Reunion</a></li>
<li class="menu-mlid-1502 level-1"><a href="/membership">Alumni Membership</a></li>
<li class=" menu-mlid-1501 level-1"><a href="/gallery">Gallery</a></li>
</ul></div>    <div id="drawer-nav">
<ul class="menu clearfix" role="menu"><li class="first menu-mlid-1495 level-1"> <a href="/home">Our Home</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1529 level-2"><a href="/home">Home</a></li>
</ul></li>
<li class="menu-mlid-1496 level-1"> <a href="/events">Events</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1498 level-2"><a href="{{ url('/events') }}" title="">Updates</a></li>

</ul></li>
<li class="menu-mlid-1497 level-1"> <a href="/alumnigiving">Alumni Giving</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu">
<li class="last menu-mlid-1535 level-2"><a href="/alumnigiving">Scholarships</a></li>
</ul></li>
<li class="menu-mlid-1499 level-1"> <a href="/reunion">Reunion</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1547 level-2"><a href="reunion" title="">Schedule</a></li>


</ul></li>
<li class="menu-mlid-1502 level-1"> <a href="/membership">Membership</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu">
<li class="menu-mlid-1537 level-2"><a href="/membership">Membership &amp; Privileges</a></li>
</ul></li>
<li class="menu-mlid-1501 level-1"> <a href="/gallery">Gallery</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1538 level-2"><a href="/gallery">Gallery</a></li>

    </ul></li></ul>  </div>
    </nav>    
                

<body id="app-layout" style="border-radius:10px; padding:20px;">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Alumni
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                     <li><a href="{{ url('/view') }}">Search</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; top:10px; left:10px; position:absolute; border-radius:50%;">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-user"></i>Post</a></li>
                                <li><a href="{{ url('/gallery') }}"><i class="fa fa-btn fa-user"></i>Gallery</a></li>
                                <li><a href="{{ url('/donate') }}"><i class="fa fa-btn fa-user"></i>Donate</a></li>
                                <li><a href="{{ url('/view') }}"><i class="fa fa-btn fa-user"></i>Search</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-sign-out"></i>Users</a></li>

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="{{ URL::to('appjas/app.js') }}"></script>
</body>

</html>
