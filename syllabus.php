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
    <title>Omni Nano - The Curriculum to inspire the scientists, entrepreneurs and engineers of tomorrow!</title>
    <meta content='all' name='robots'>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
    <link href='assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <!-- / required stylesheets -->
    <link href="assets/stylesheets/bootstrap/bootstrap.min.css" media="all" id="bootstrap" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/jednotka_blue.css" media="all" id="colors" rel="stylesheet" type="text/css" />
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
                  Syllabus
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
                  <li><a data-filter=".portfolio-filter-marketing" href="#">Basic Principles</a></li>                  
                  <li><a data-filter=".portfolio-filter-photography" href="#">Nanomaterials</a></li>
                  <li><a data-filter=".portfolio-filter-identity" href="#">Nanomedicine</a></li>
                  <li><a data-filter=".portfolio-filter-webdesign" href="#">Nanoelectronics</a></li>
                </ul>
              </div>
            </div>
            <div class='row portfolio-boxes' id='portfolio-container'>
              <div class='col-sm-6 portfolio-box portfolio-filter-photography portfolio-item'>
                <a href='portfolio_detail.html'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Etiam vestibulum" width="585" height="382" src="assets/images/demo/portfolio/1.jpg" />
                  </div>
                  <h3 class='title'>Introduction to Nanotechnology</h3>
                  <p class='category'>Basic Priniciples</p>
                </a>
              </div>
              <div class='col-sm-6 portfolio-box portfolio-filter-webdesign portfolio-item'>
                <a href='portfolio_detail.html'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Malesuada" width="585" height="382" src="assets/images/demo/portfolio/2.jpg" />
                  </div>
                  <h3 class='title'>Metric System</h3>
                  <p class='category'>Basic Principles</p>
                </a>
              </div>
              <div class='col-sm-6 portfolio-box portfolio-filter-identity portfolio-item'>
                <a href='portfolio_detail.html'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Dictum vulputate" width="585" height="382" src="assets/images/demo/portfolio/3.jpg" />
                  </div>
                  <h3 class='title'>Surface Chemistry</h3>
                  <p class='category'>Nanomaterials</p>
                </a>
              </div>
              <div class='col-sm-6 portfolio-box portfolio-filter-marketing portfolio-item'>
                <a href='portfolio_detail.html'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Semper massa" width="585" height="382" src="assets/images/demo/portfolio/4.jpg" />
                  </div>
                  <h3 class='title'>Better Circuits</h3>
                  <p class='category'>Nanoelectronics</p>
                </a>
              </div>
              <div class='col-sm-6 portfolio-box portfolio-filter-photography portfolio-filter-webdesign portfolio-item'>
                <a href='portfolio_detail.html'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Lorem ipsum" width="585" height="382" src="assets/images/demo/portfolio/5.jpg" />
                  </div>
                  <h3 class='title'>The Future of Drug Delivery</h3>
                  <p class='category'>Nanomedicine</p>
                </a>
              </div>
              <div class='col-sm-6 portfolio-box portfolio-filter-identity portfolio-item'>
                <a href='portfolio_detail.html'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Pellentesque" width="585" height="382" src="assets/images/demo/portfolio/6.jpg" />
                  </div>
                  <h3 class='title'>Interesting Stuff</h3>
                  <p class='category'>Nanofabrication</p>
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
        <?php include 'footer.php' ?>
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
