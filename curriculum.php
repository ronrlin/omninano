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
    <title>Omni Nano Curriculum</title>
    <meta content='nanotechnology, nanoscience, nanomedicine, nanobiology, nanomaterials, STEM' name='keywords'>
    <meta content='Omni Nano is the nanotechnology curriculum for high school students. ' name='description'>
    <meta content='OmniNano.org' name='author'>
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
    <?php include_once("analyticstracking.php") ?>
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
                  <li><a data-filter=".portfolio-filter-intro-nanoscale" href="#">Introduction to Nanoscale</a></li>
                  <li><a data-filter=".portfolio-filter-investigating-nanoscale" href="#">Investigating Nanomaterials</a></li>
                  <li><a data-filter=".portfolio-filter-applications" href="#">Applications for Nanotechnology</a></li>
                  <li><a data-filter=".portfolio-filter-building" href="#">Building Nanomaterials</a></li>
                </ul>
              </div>
            </div>
            <div class='row portfolio-boxes' id='portfolio-container'>
              <div class='col-sm-4 portfolio-box portfolio-filter-intro-nanoscale portfolio-item'>
                <a href='http://omninano.slides.com/omninano/what-is-nanotechnology#/' target="_blank">
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="An introduction to nanotechnology" width="360" height="235" src="assets/images/misc/omninano-coverslide.jpg" />
                  </div>
                  <h3 class='title'>What is Nanotechnology?</h3>
                  <p class='category'>Introduction to the Nanoscale</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-intro-nanoscale portfolio-item'>
                <a href='http://omninano.slides.com/omninano/what-are-nanomaterials' target="_blank">
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="nanomaterials" width="360" height="235" src="assets/images/misc/bridge-grids.jpg" />
                  </div>
                  <h3 class='title'>What are Nanomaterials?</h3>
                  <p class='category'>Introduction to the Nanoscale</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-intro-nanoscale portfolio-item'>
                <a href='http://omninano.slides.com/omninano/uniquenanoscale' target="_blank">
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="unique at the nanoscale" width="360" height="235" src="assets/images/demo/portfolio/3.jpg" />
                  </div>
                  <h3 class='title'>What's Unique about the Nanoscale?</h3>
                  <p class='category'>Introduction to the Nanoscale</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-investigating-nanoscale portfolio-item'>
                <a href='http://omninano.slides.com/omninano/imagingnano' target="_blank">
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Semper massa" width="360" height="235" src="assets/images/demo/portfolio/9.jpg" />
                  </div>
                  <h3 class='title'>Imaging the Nanoscale</h3>
                  <p class='category'>Investigating Nanomaterials</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-investigating-nanoscale portfolio-item'>
                <a href='http://omninano.slides.com/omninano/properties' target="_blank">
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="properties of nanomaterials" width="360" height="235" src="assets/images/misc/surface-properties.jpg" />
                  </div>
                  <h3 class='title'>Properties of Nanomaterials</h3>
                  <p class='category'>Investigating Nanomaterials</p>
                </a>
              </div>
<!--
              <div class='col-sm-4 portfolio-box portfolio-filter-applications portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Pellentesque" width="360" height="235" src="assets/images/misc/surface-properties.jpg" />
                  </div>
                  <h3 class='title'>High Surface Materials</h3>
                  <p class='category'>Applications for Nanotechnology</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-investigating-nanoscale portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Malesuada" width="360" height="235" src="assets/images/misc/neon.jpg" />
                  </div>
                  <h3 class='title'>Electronic and Optical Properties</h3>
                  <p class='category'>Investigating Nanomaterials</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-applications portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Cullamcorper" width="360" height="235" src="assets/images/misc/leaf-harvest.jpg" />
                  </div>
                  <h3 class='title'>Light and Energy Harvesting</h3>
                  <p class='category'>Applications for Nanotechnology</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-applications portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Etiam posuere" width="360" height="235" src="assets/images/misc/diagnostics.jpg" />
                  </div>
                  <h3 class='title'>Diagnostic Applications in Medicine</h3>
                  <p class='category'>Applications for Nanotechnology</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-building portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Etiam posuere" width="360" height="235" src="assets/images/demo/portfolio/9.jpg" />
                  </div>
                  <h3 class='title'>Self-Assembly</h3>
                  <p class='category'>Building Nanomaterials</p>
                </a>
              </div>
              <div class='col-sm-4 portfolio-box portfolio-filter-building portfolio-item'>
                <a href='portfolio_detail.php'>
                  <div class='image-link'>
                    <i class='fa-icon-search'></i>
                    <img class="img-responsive img-rounded center-block" alt="Etiam posuere" width="360" height="235" src="assets/images/misc/smelting.jpg" />
                  </div>
                  <h3 class='title'>Top-down Fabrication</h3>
                  <p class='category'>Building Nanomaterials</p>
                </a>
              </div>
            -->

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
                  <a class='btn btn-circle btn-medium-light btn-sm' href='https://plus.google.com/u/0/b/101003799219726863352/+OmninanoOrgSTEM/posts'>
                    <i class='fa-icon-google-plus text-dark'></i>
                  </a>
                  <a class='btn btn-circle btn-medium-light btn-sm' href='http://www.facebook.com/omninano.org'>
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
