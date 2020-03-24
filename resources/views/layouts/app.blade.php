<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
  <meta charset="utf-8">
  <title>Tatham</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700|Lato|Montserrat" rel="stylesheet">
  @auth
      <meta name="api-token" content="{{ auth()->user()->api_token }}">
  @endauth


  <!-- Styles -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <!-- Favicons -->
  <link href="/images/newfavicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700|Michroma|Montserrat" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">

  {{-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= --}}
</head>

<body class="h-100 d-flex flex-column">

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left" style="margin-top:-14px">
        <a href="/#home" class="no-hover-highlight">
        <!-- <img src="images/newfavicon.png" class="" style="margin-top:-16px; height: 50px" alt="" title="" /> -->
        <span style="font-family: 'Montserrat'; letter-spacing:1px; font-size: 2em; font-style: regular">&nbsp;Tatham Inc</span>
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active menu-has-children"><a href="#">Home</a>
            <ul>
                <li><a href="/#home">Home</a></li>
                <li><a href="/#about">About Us</a></li>
                <li><a href="/#bootcamp">Boot Camp</a></li>
                <li><a href="/#clients">Clients</a></li>
                <li><a href="/#contact">Contact Us</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul>
          </li>
          @admin
            <li class="nav-item">
                {{ link_to_route('admin.dashboard', __('dashboard.dashboard'), [], ['class' => 'nav-link']) }}
            </li>
          @endadmin
          @auth
          <li class="nav-item menu-has-children">
            <a href="#">
                {{ Auth::user()->name }}
            </a>
            <ul>
                <li>{{ link_to_route('users.show', __('users.public_profile'), Auth::user(), ['class' => 'dropdown-item']) }}</li>
                <li>{{ link_to_route('users.edit', __('users.settings'), [], ['class' => 'dropdown-item']) }}</li>
                <li class="dropdown-divider"></li>
                <li>
                    <a href="{{ url('/logout') }}"
                        class="dropdown-item"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        @lang('auth.logout')
                    </a>
                    <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
          </li>
          @endauth
          @guest
          <li><a href="/login">Login</a></li>
          @endguest
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
    <div style="padding-top: 97px;" class="pb-3 px-3">
        <div id="app">
          @yield('content')
        </div>
    </div>
  <!--==========================
    Footer
  ============================-->
  <footer style="margin-top: auto;" id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Tatham Inc</strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script charset="ISO-8859-1" src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/waypoints/waypoints.min.js"></script>
  <script src="/lib/counterup/counterup.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>
  <script src="{{ mix('/js/app.js') }}"></script>
  @stack('inline-scripts')

</body>
</html>
