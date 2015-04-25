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
    <!--[if lt IE 9]>
      <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class='contact-page contact-page-wide-map'>
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
                  Contact
                </h1>
                <ol class='breadcrumb'>
                  <li>
                    <a href='index.html'>
                      <i class='fa-icon-home'></i>
                    </a>
                  </li>
                  <li class='active'>Contact</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div id='map-canvas'></div>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <p class='lead text-center no-mg-b'>Quisque nunc sapien, malesuada vitae luctus in, blandit eu erat. Cras fringilla eros eget justo dictum convallis.</p>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-info-sign'></i>
                  <h2>
                    Contact info
                  </h2>
                </div>
                <div class='row text-center'>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-map-marker text-white'></i>
                    </div>
                    <h3>Address</h3>
                    <ul class='list-unstyled'>
                      <li>4567/15 Street name</li>
                      <li>012 34 City name</li>
                      <li>Country name</li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-phone text-white'></i>
                    </div>
                    <h3>Telephone</h3>
                    <ul class='list-unstyled'>
                      <li><a href="tel:+012345678910">+012 345 678 910</a></li>
                      <li><a href="tel:+012345678911">+012 345 678 911</a></li>
                      <li><a href="tel:+012345678911">+012 345 678 911</a></li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-envelope-alt text-white'></i>
                    </div>
                    <h3>E-Mail</h3>
                    <ul class='list-unstyled'>
                      <li><a href="mailto:info@domain.com">info@domain.com</a></li>
                      <li><a href="mailto:support@domain.com">support@domain.com</a></li>
                      <li><a href="mailto:director@domain.com">director@domain.com</a></li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa-icon-time text-white'></i>
                    </div>
                    <h3>Business hours</h3>
                    <ul class='list-unstyled'>
                      <li>
                        Monday - Friday
                        &mdash;
                        <strong>08:00 - 16:00</strong>
                      </li>
                      <li>
                        Saturday
                        &mdash;
                        <strong>Closed</strong>
                      </li>
                      <li>
                        Sunday
                        &mdash;
                        <strong>Closed</strong>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa-icon-envelope-alt'></i>
                  <h2>Contact form</h2>
                </div>
                <form class='form form-validation form-contact' method='post'>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='alert alert-success form-contact-success hidden'>Thanks! Your message has been successfully sent!</div>
                      <div class='alert alert-danger form-contact-error hidden'>Ooops! There was an error sending your message.</div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-6'>
                      <div class='form-group control-group'>
                        <input class='form-control' data-rule-required='true' name='name' placeholder='Name' type='text'>
                        <!-- / this field is required for simple anti spam function, don't remove it! -->
                        <input class='form-control' name='human' placeholder='Are you human?' style='display: none;' type='text'>
                      </div>
                    </div>
                    <div class='col-sm-6'>
                      <div class='form-group control-group'>
                        <input class='form-control' data-rule-email='true' data-rule-required='true' name='email' placeholder='E-Mail' type='email'>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='form-group control-group'>
                        <textarea class='form-control' data-rule-required='true' name='message' placeholder='Your message...'></textarea>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <button class='btn btn-contrast btn-block form-contact-submit' data-loading-text="&lt;i class='fa-icon-refresh fa-icon-spin'&gt;&lt;/i&gt; Sending..." type='submit'>
                        Send message
                      </button>
                    </div>
                  </div>
                </form>
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
    <div class='style-switcher' id='style-switcher'>
      <div class='style-switcher-heading'>
        Style switcher
        <i class='fa-icon-cogs'></i>
      </div>
      <div class='style-switcher-body'>
        <div class='style-switcher-colors'>
          <div class='style-switcher-title'>Colors</div>
          <a class='style-switcher-color orange' data-switch-target='#colors' data-switch-to='jednotka_orange.css' href='#'></a>
          <a class='style-switcher-color blue' data-switch-target='#colors' data-switch-to='jednotka_blue.css' href='#'></a>
          <a class='style-switcher-color green active' data-switch-default data-switch-target='#colors' data-switch-to='jednotka_green.css' href='#'></a>
          <a class='style-switcher-color salmon' data-switch-target='#colors' data-switch-to='jednotka_salmon.css' href='#'></a>
          <a class='style-switcher-color mint' data-switch-target='#colors' data-switch-to='jednotka_mint.css' href='#'></a>
          <a class='style-switcher-color red' data-switch-target='#colors' data-switch-to='jednotka_red.css' href='#'></a>
          <a class='style-switcher-color yellow' data-switch-target='#colors' data-switch-to='jednotka_yellow.css' href='#'></a>
        </div>
        <div class='style-switcher-layouts'>
          <div class='style-switcher-title'>Layout type</div>
          <a class='style-switcher-button active' data-switch-default data-switch-target='body' data-switch-to='removeClass:boxed' href='#'>Wide</a>
          <a class='style-switcher-button' data-switch-target='body' data-switch-to='addClass:boxed' href='#'>Boxed</a>
        </div>
        <div class='style-switcher-reset'>
          <a class='style-switcher-button' data-switch-target='#style-switcher' data-switch-to='reset:defaults' href='#'>Reset to defaults</a>
        </div>
      </div>
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
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script>
      var initializeMap;
      
      initializeMap = function() {
        var iw1, latlng, map, marker, options;
      
        latlng = new google.maps.LatLng(37.331686, -122.030656);
        options = {
          scrollwheel: false,
          zoom: 16,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: true
        };
      
        map = new google.maps.Map(document.getElementById("map-canvas"), options);
      
        marker = new google.maps.Marker({
          position: latlng,
          map: map
        });
      
        iw1 = new google.maps.InfoWindow({
          content: "Here we are!"
        });
      
        return google.maps.event.addListener(marker, "click", function(e) {
          return iw1.open(map, this);
        });
      };
      
      google.maps.event.addDomListener(window, 'load', initializeMap);
    </script>
    <!-- / not required javascripts -->
    <script src="assets/javascripts/demo.js" type="text/javascript"></script>
  </body>
</html>
