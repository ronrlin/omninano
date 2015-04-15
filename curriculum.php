<!DOCTYPE html>
<!--
  Name: Jednotka - Multipurpose Website HTML Template
  Author: http://themeforest.net/user/BublinaStudio
  Version: 1.6
-->
<!--[if lt IE 9]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if !IE] -->
<html lang='en'>
  <!-- <![endif] -->
  <head>
    <title>Portfolio – 3 columns | Jednotka - Multipurpose Template</title>
    <meta content='blog, business, clean, multipurpose template, twitter bootstrap 3, responsive' name='keywords'>
    <meta content='Jednotka is multipurpose Twitter Bootstrap 3 template which is suitable for any type of business or online project. ' name='description'>
    <meta content='BublinaStudio.com' name='author'>
    <meta content='all' name='robots'>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
    <link href='assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <!-- / required stylesheets -->
    <link href="assets/stylesheets/bootstrap/bootstrap.min.css" media="all" id="bootstrap" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/jednotka_green.css" media="all" id="colors" rel="stylesheet" type="text/css" />
    <!-- / not required stylesheets -->
    <link href="assets/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class=''>
    <div id='wrapper'>
      <header id='header'>
        <?php include "header.php" ?>
      </header>
      <div id='main' role='main'>
        <div id='main-content-header'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <h1 class='title'>
                  Omni Nano Curriculum
                  <small>Browse the Nanotechnology Curriculum</small>
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div class='container'>
            <div class='row' id='portfolio-filter'>
              <div class='col-sm-12'>
                <ul class='nav nav-pills'>
                  <li class='active'><a data-filter="*" href="#">All</a></li>
                  <li><a data-filter=".portfolio-filter-photography" href="#">Photography</a></li>
                  <li><a data-filter=".portfolio-filter-identity" href="#">Identity</a></li>
                  <li><a data-filter=".portfolio-filter-webdesign" href="#">Webdesign</a></li>
                  <li><a data-filter=".portfolio-filter-marketing" href="#">Marketing</a></li>
                </ul>
              </div>
            </div>
            <div class='row portfolio-boxes' id='portfolio-container'>
              <div class='col-sm-4 portfolio-box portfolio-filter-photography portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Etiam vestibulum" width="360" height="235" src="assets/images/demo/portfolio/1.jpg" />
                  </div>
                  <h3 class='title'>Etiam vestibulum</h3>
                  <p class='category'>Photography</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-webdesign portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Malesuada" width="360" height="235" src="assets/images/demo/portfolio/2.jpg" />
                  </div>
                  <h3 class='title'>Malesuada</h3>
                  <p class='category'>Webdesign</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-identity portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Dictum vulputate" width="360" height="235" src="assets/images/demo/portfolio/3.jpg" />
                  </div>
                  <h3 class='title'>Dictum vulputate</h3>
                  <p class='category'>Identity</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-marketing portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Semper massa" width="360" height="235" src="assets/images/demo/portfolio/4.jpg" />
                  </div>
                  <h3 class='title'>Semper massa</h3>
                  <p class='category'>Marketing</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-photography portfolio-filter-webdesign portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Lorem ipsum" width="360" height="235" src="assets/images/demo/portfolio/5.jpg" />
                  </div>
                  <h3 class='title'>Lorem ipsum</h3>
                  <p class='category'>Photography, Webdesign</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-identity portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Pellentesque" width="360" height="235" src="assets/images/demo/portfolio/6.jpg" />
                  </div>
                  <h3 class='title'>Pellentesque</h3>
                  <p class='category'>Identity</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-webdesign portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Malesuada" width="360" height="235" src="assets/images/demo/portfolio/7.jpg" />
                  </div>
                  <h3 class='title'>Malesuada</h3>
                  <p class='category'>Webdesign</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-marketing portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Cullamcorper" width="360" height="235" src="assets/images/demo/portfolio/8.jpg" />
                  </div>
                  <h3 class='title'>Cullamcorper</h3>
                  <p class='category'>Marketing</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-identity portfolio-filter-marketing portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Etiam posuere" width="360" height="235" src="assets/images/demo/portfolio/9.jpg" />
                  </div>
                  <h3 class='title'>Etiam posuere</h3>
                  <p class='category'>Identity, Marketing</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class='fade' id='scroll-to-top'>
          <i class='fa-icon-chevron-up'></i>
        </div>
      </div>
      <footer id='footer'>
        <div id='footer-main'>
          <div class='container'>
            <div class='row'>
              <div class='col-md-3 col-sm-6 info-box'>
                <div class='logo-container'>
                  <img alt="Jednotka" width="117" height="39" src="assets/images/omni-logo.png" />
                </div>
                <p class='no-mg-b'>We're a non-profit developing the nanotechnology curriculum for high school students.</p>
                <br />
                <p>Omni Nano is here to inspire the scientists, entrepreneurs and engineers of tomorrow.</p>
              </div>
              <div class='col-md-3 col-sm-6 info-box'>
                <h2 class='title'>For Educators</h2>
                <div>
                  <p><a href="educators.php">Discover Program</a></p>
                  <p><a href="educators.php">Bridges Program</a></p>
                  <p><a href="educators.php">The Curriculum</a></p>
                  <p><a href="testimonials.php">Testimonials</a></p>                  
                </div>
                <h2 class='title'>Media Relations</h2>
                <div>
                  <p><a href="press.php">Media Relations</a></p>
                  <p><a href="press.php">Press Releases</a></p>
                  <p><a href="press.php">Press Links</a></p>
                  <p><a href="#">Blog</a></p>                  
                </div>
              </div>
`              <div class='col-md-3 col-sm-6 info-box social-box'>
                <h2 class='title'>Support Omni Nano</h2>
                <p><a href="donate.php">Donate</a></p>
                <p><a href="partnerships.php">Corporate Support</a></p>
                <p><a href="about_us.php">Why Omni Nano?</a></p>
                <p><a href="faq.php">FAQ</a></p>
                <p><a href="legal.php">Legal</a></p>
              </div>
              <div class='col-md-3 col-sm-6 info-box'>
                <div>
                  <h2 class='title'>OmniNano.org</h2>
                  <p><a href="">Mission</a></p>
                  <p><a href="about_us.php">About us</a></p>
                  <p><a href="about_us.php">Leadership</a></p>
                  <p><a href="about_us.php">Board of Directors</a></p>
                  <p><a href="partnerships.php">Partnerships</a></p>
                  <p><a href="awards.php">Awards</a></p> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id='footer-copyright'>
          <div class='container'>
            <div class='row'>
              <div class='col-lg-12 clearfix'>
                <p class='copyright'>
                  Copyright
                  &copy;
                  2015 Omni Nano, a 501(c)(3) charitable non-profit organization.  
                </p>
                <div class='links'>
                  Follow us on 
                  <a class='btn btn-circle btn-medium-light btn-sm' href='http://www.twitter.com/omninano'>
                    <i class='fa-icon-twitter text-dark'></i>
                  </a>
                  <a class='btn btn-circle btn-medium-light btn-sm' href='https://plus.google.com/+OmniNano'>
                    <i class='fa-icon-google-plus text-dark'></i>
                  </a>
                  <a class='btn btn-circle btn-medium-light btn-sm' href='http://www.facebook.com/omninano'>
                    <i class='fa-icon-facebook text-dark'></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- / required javascripts -->
    <script src="assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/modernizr/modernizr.custom.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/retina/retina.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/isotope/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/flexslider/jquery.flexslider.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/countdown/countdown.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/nivo_lightbox/nivo-lightbox.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/cycle/jquery.cycle.all.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jednotka.js" type="text/javascript"></script>
    
    <!-- / not required javascripts -->
    <script src="assets/javascripts/demo.js" type="text/javascript"></script>
  </body>
</html>
