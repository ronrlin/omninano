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
    <meta content='omni nano, nanotechnology, stem education' name='keywords'>
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
                  Donate
                  <small>Your support can help inspire the next generation of innovators!</small>
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div class='container'>
            <!-- payment flow here, make it like charity|water -->
            <div class="col-sm-12">
              <div class="text-center lead">
                We are educating the students of today about the technologies of tomorrow.
              </div>
            </div>
            <div class="col-sm-12 text-center">
              <div class="lead lead-md">
                <p>Your donation helps support the development of our comprehensive nanotechnology curriculum.</p>
              </div>
            </div>

            <!-- payment flow here -->
            <div class="col-sm-12">
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <div style="display:none">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="XYWY2H4DHZ2VE">
                  <input type="hidden" name="amount" value="42.00">                  
                  <input name="utf8" type="hidden" value="&#x2713;" />
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </div>
                <div class='form-group'>
                  <label>Donation Amount</label>
                  <div class='row'>
                    <div class='col-sm-6 col-md-4 col-lg-4'>
                      <div class='input-group'>
                        <span class='input-group-addon'>
                          &#36;
                        </span>
                        <input class='form-control input-lg text-right' id='input-money' type='text'>
                        <span class='input-group-addon'>.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="input-wrapper email-signup custom-check">
                  <input name="donation_form[email_opt_in]" type="hidden" value="0" />
                  <input checked="checked" id="general_water_donation_form_email_opt_in" name="donation_form[email_opt_in]" type="checkbox" value="1" />
                  <label for="general_water_donation_form_email_opt_in">Send me emails about Omni Nano</label>
                </div>
                <div class='form-actions mg-t-lg'>
                  <div class='row'>
                    <div class='col-sm-6'>
                      <div class='text-center-xs'>
                        <button class="btn btn-contrast" type="submit" formaction="https://www.paypal.com/cgi-bin/webscr" formmethod="post">Give by credit card</button> 
                        <button class="btn btn-contrast" type="submit" formaction="https://www.paypal.com/cgi-bin/webscr" formmethod="post">Give by Paypal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class='row'>
                    <div class='col-sm-6'>
                      <div class='text-center-xs'>
                        <p><strong><a href="">Give by stock or check</a></strong></p>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <hr>
            <div class="col-sm-12 text-center">
              <div class="lead lead-md">
                <p>Not ready to donate?
                Buy Omni Nano gear to <a href="http://www.tvpmarket.com/collections/omni-nano">support</a> our mission.</p>
              </div>
              <div>
                <img width="100%" src="assets/images/misc/omninano-online-store.jpg">
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
                  2015 Omni Nano, a 501(c)3 charitable non-profit organization.  
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
