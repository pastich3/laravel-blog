<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tatham</title>
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
          <li><a href="#bootcamp">Boot Camp</a></li>
          <li><a href="#clients">Clients</a></li>
          <!-- <li><a href="#bootcamp">Bootcamp</a></li> -->
          <!-- <li><a href="#portfolio">Case Studies</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->
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
      <h1 style="font-weight: normal; text-transform: none">There are two kinds of companies:</h1>
      <h1 style="font-weight: normal; text-transform: none"> Those that depend on consultants, and those that don't.</h1>
      <h1 style="font-weight: normal; text-transform: none">Which do you want to be?</h2>
      <div class="d-flex mt-5">
        <a href="/consult" ontouchend="this.onclick=fix" style="width: 165px;" class="btn-get-started" id="consultBtn" target="_blank"> Consult </a>
        <a href="#about" ontouchend="this.onclick=fix" style="width: 165px;" class="btn-get-started" id="innovateBtn"> Innovate </a>
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
              <br>
              {!! __("tatham.landing_page.section_2_content") !!}
            </p>
          </div>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

        <div class="d-flex mt-5 flex-wrap flex-md-nowrap justify-content-center">
        <div class="icon-box wow fadeInUp mr-md-3 mr-0" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-fire"></i></div>
            <h4 class="title"><a href="#call-to-action">Ignite Change</a></h4>
            <p class="description">Creation of buy-in and motivation to ignite transformation efforts.</p>
          </div>
          <div class="icon-box wow fadeInUp ml-md-3 ml-0" data-wow-delay="0.4s">
            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
            <h4 class="title"><a href="#call-to-action">Customer Compass</a></h4>
            <p class="description">Ditch The Roadmap and Grab A Customer Compass </p>
              <ul>
                <li>More comfort with ambiguity</li>
                <li>Enable business to maintain connection to the customer</li>
                <li>Change becomes what you do versus done to you</li>
              </ul>
          </div>
        </div>
        <div class="d-flex mt-5 flex-wrap flex-md-nowrap justify-content-center">
          <div class="icon-box wow fadeInUp mr-md-3 mr-0" data-wow-delay="0.1s">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="title"><a href="#call-to-action">Self-sufficiency</a></h4>
            <p class="description">Don't depend on consultants for survival. <br><br>Rely on consultants to augment your organization in areas where you do not need the expertise on staff. </p>
          </div>

          <div class="icon-box wow fadeInUp ml-md-3 ml-0" data-wow-delay="0.4s">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="title"><a href="#call-to-action">Experiential learning</a></h4>
            <p class="description">A team-building, shared experience that develops a common vision and language for the participants.</p>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left" style="font-size: 20px">
            <h3 class="cta-title">READY FOR WHAT’S NEXT?</h3>
            <p class="cta-text"> Ask us about our proprietary business simulator. We call it Boot Camp for Executives™. Over the years, it has proven to be the critical catalyst for helping our clients to convert strategy into results.</p>
            <p class="cta-text">Boot Camp is a window into the “how”. It is a two day business
simulation designed to let you experience a systematic approach to getting things done
starting with your customers.</p>
            <p class="cta-text"> Our clients remain our most ardent supporters. Take the  next step. Find out why.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact" >Let's talk</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <section id="bootcamp">
      <div class="bootcamp-container">
        <div class="section-header" style="margin-bottom: 20px;">
          <h3 class="section-title">Bootcamp</h3>
          <p class="section-description pb-0" style="color: white;">Process-driven, forward thinking</p>
        </div>
        <div class="content container wow fadeInRight">
          <div class="inner-content box-shadow">
            <div>
              <p>{!! __("tatham.our_story_content.bootcamp_summary")!!}</p>
            </div>
            <div class="d-flex justify-content-center mt-5">
              <a target="_blank" class="learn-more" href="#contact"> Learn more </a>
            </div>
          </div>
        </div>
      </div>

    </section> <!-- #bootcamp -->
    <!-- ==========================
      Facts Section
    ============================-->
    <!-- <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">The Prerequisite </h3>
          <p class="section-description">The team you go into bootcamp with will not be the same team you leave with</p>

        </div> -->

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

      <!-- </div>
    </section>#facts -->

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
      <div class="d-flex justify-content-center mt-5">
        <img class="w-100" style="max-width: 900px" src="images/clients.png">
      </div>
    </section><!-- #clients -->

    <!--==========================
    Call To Action Section
    ============================-->
    <!-- <section id="call-to-action">
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
    </section> --><!-- #call-to-action -->

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
    <!-- <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
</br></br> -->
          <!-- <p class="section-description">We're looking forward to working with you!</p> -->
        <!-- </div>
        <div class="row d-flex justify-content-around">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/IMG_6538.jpg" alt=""></div>
              <h4>Cameron Mayer</h4>
              <span>Person</span>
              <div class="social"> -->
                <!-- <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a> -->
              <!-- </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/pres2.jpg" alt=""></div>
              <h4>Michael Tatham</h4>
              <span>Person</span>
              <div class="social"> -->
                <!-- <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a> -->
              <!-- </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/TathamImagePreview1.jpg" alt=""></div>
              <h4>Michael Tatham Sr</h4>
              <span>Person & Advisor</span>
              <div class="social"> -->
                <!-- <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a> -->
              <!-- </div>
            </div>
          </div> -->

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
        <!-- </div>

      </div> -->
    <!-- </section>#team -->

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

  <script>
    function fix()
    {
      var el = this;
      var par = el.parentNode;
      var next = el.nextSibling;
      par.removeChild(el);
      setTimeout(function() {par.insertBefore(el, next);}, 0)
    }
  </script>
  @stack('inline-scripts')

</body>
</html>
