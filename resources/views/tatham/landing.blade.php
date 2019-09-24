<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tatham Inc</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700|Michroma" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#home" class="no-hover-highlight"><img src="images/alt_logo_002.png" class="" style="margin-top:-9px; height: 50px" alt="" title="" /><span style="margin-left:5px; font-family: 'Michroma'; letter-spacing:1px; font-size: 1.5em; font-weight: bold;">&nbsp;Tatham</span></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#home">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#clients">Clients</a></li>
          <!-- <li><a href="#bootcamp">Bootcamp</a></li> -->
          <!-- <li><a href="#portfolio">Case Studies</a></li> -->
          <li><a href="#team">Team</a></li>
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="home">
    <div class="hero-container">
      <h1>There are two kinds of companies</h1>
      <h1 style="font-weight: normal; text-transform: none"> Those that rely on consultants, and those that don't</h1>
      <h2 style="margin-top: 1.25em">Which do you want to be?</h2>
      <div class="d-flex">
        <a href="/our_approach" style="width: 180px;" class="btn-get-started" target="_blank"> Consult </a>
        <a href="/our_approach" style="width: 180px;" class="btn-get-started" target="_blank"> Solve </a>
      </div>
    </div>
  </section><!-- #home -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">{{ __("tatham.landing_page.section_2_header")}}</h2>
            <p>
              {!! __("tatham.landing_page.section_2_content") !!}
            </p>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>
        <div class="d-flex">
          <div class="icon-box wow fadeInUp mr-3">
            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
            <h4 class="title"><a href="">Focus on the customer</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

          <div class="icon-box wow fadeInUp ml-3" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-photo"></i></div>
            <h4 class="title"><a href="">Ignite (Drive, Calling, etc)</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>
        <div class="d-flex">
          <div class="icon-box wow fadeInUp mr-3" data-wow-delay="0.4s">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="title"><a href="">Self-sufficiency</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="icon-box wow fadeInUp ml-3" data-wow-delay="0.4s">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="title"><a href="">Experiential learning</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">The Prerequisite (PLACEHOLDER) </h3>
          <p class="section-description">The team you go into bootcamp with will not be the same team you leave with</p>

        </div>

        <!-- <div class="row counters"> -->

  				<!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
  				</div> -->

  			<!-- </div> -->

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="clients">
      <div class="container wow fadeIn">
        <div class="section-header" style="margin-bottom: 80px;">
          <h3 class="section-title">Clients</h3>
          <!-- <p class="section-description">Here are some of our clients</p> -->
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp mt-5 mt-lg-0" data-wow-delay="0.2s">
            <div class="box box-shadow">
              <div class="icon"><img style="height: 120px;" src="/images/nasa_logo.png"></div>
              <h4 class="title">Big changes for NASA</h4>
              <p class="description">NASA shortened the time for scientists to access the Hubble Space Telescope from 18 months to 3 weeks and cut costs by $100 million</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp mt-5 mt-lg-0" data-wow-delay="0.4s">
            <div class="box box-shadow">
              <div class="icon"><img style="height: 120px;" src="/images/wells_fargo_logo.png"></div>
              <h4 class="title">Big results, quickly</h4>
              <p class="description">Wells Fargo shortened the time for the central corporate authority to approve projects from 30 days to 1 day </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp mt-5 mt-lg-0" data-wow-delay="0.6s">
            <div class="box box-shadow">
              <div class="icon"><img style="height: 120px;" src="/images/walmart_logo.png"></div>
              <h4 class="title">Change at scale</h4>
              <p class="description">Walmart implemented serveral improvements in their business process, generating in excess of $300,000,000 in additional revenue in the first year </p>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-road"></i></a></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-shopping-bag"></i></a></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- #clients -->

    <!-- <section id="bootcamp">
      <div class="bootcamp-container">
        <div class="section-header" style="margin-bottom: 20px;">
          <h3 class="section-title">Bootcamp</h3>
          <p class="section-description pb-0" style="color: black;">Process-driven, forward thinking</p>
        </div>
        <div class="content">
          <div class="inner-content box-shadow">
            <div>
              <p>In two days, we’ll retrain the brains of your best people and give them a concrete process and ready-to-go tools to apply to your business issues. Change starts tomorrow.</p>
            </div>
            <div class="d-flex justify-content-center mt-5">
              <a target="_blank" class="learn-more" href="/bootcamp"> Learn more </a>
            </div>
          </div>
        </div>
      </div>

    </section> --><!-- #bootcamp -->
    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">How is Tatham different?</h3>
            <p class="cta-text">At Tatham, our approach connects pieces of your strategy puzzle into an unanticipated source of competitive advantage: vastly improved business processes. Your own people, not us, using tribal knowledge culled from the front line of your business, end up delivering results. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="/our_approach" target="_blank">Learn more</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <!-- <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Case Studies</h3>
          <p class="section-description">Do we need any text here?</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
              <li data-filter=".filter-app">Aerospace</li>
              <li data-filter=".filter-card">e-Commerce</li>
              <li data-filter=".filter-logo">Financial</li>
              <li data-filter=".filter-web">Insurance</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>App 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web2.jpg" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app3.jpg" alt="">
              <div class="details">
                <h4>App 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card1.jpg" alt="">
              <div class="details">
                <h4>Card 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card2.jpg" alt="">
              <div class="details">
                <h4>Card 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web3.jpg" alt="">
              <div class="details">
                <h4>Web 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card3.jpg" alt="">
              <div class="details">
                <h4>Card 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app2.jpg" alt="">
              <div class="details">
                <h4>App 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo1.jpg" alt="">
              <div class="details">
                <h4>Logo 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo3.jpg" alt="">
              <div class="details">
                <h4>Logo 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web1.jpg" alt="">
              <div class="details">
                <h4>Web 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo2.jpg" alt="">
              <div class="details">
                <h4>Logo 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section> --> <!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
</br></br>
          <!-- <p class="section-description">We're looking forward to working with you!</p> -->
        </div>
        <div class="row d-flex justify-content-around">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/IMG_6538.jpg" alt=""></div>
              <h4>Cameron Mayer</h4>
              <span>Person</span>
              <div class="social">
                <!-- <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/pres2.jpg" alt=""></div>
              <h4>Michael Tatham</h4>
              <span>Person</span>
              <div class="social">
                <!-- <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/TathamImagePreview1.jpg" alt=""></div>
              <h4>Michael Tatham Sr</h4>
              <span>Person & Advisor</span>
              <div class="social">
                <!-- <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    @include('tatham._landing_contact')

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
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
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  @stack('inline-scripts')

</body>
</html>
