<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="This Is website IT CYBER COMMUNITY">
    <meta name="author" content="TEDI SUSANTO">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>IT CYBER</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/itc-style.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
.android-be-together-section {
  position: relative;
  height: 475px;
  width: auto;
  background-color: #f3f3f3;
  background: url('<?php echo base_url(); ?>assets/images/slide01.jpg') center 30% repeat;
  background-size: cover;
}.android-wear-section {
  position: relative;
  background: url('<?php echo base_url(); ?>assets/images/wear.png') center top no-repeat;
  background-size: cover;
  height: 800px;
}
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <a href="<?php echo base_url(); ?>"><img class="android-logo-image" src="<?php echo base_url(); ?>assets/images/android-logo.png"></a>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Profil</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Artikel</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Software</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Galery</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Portfolio</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Contact</a>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="<?php echo base_url(); ?>assets/images/android-logo.png">
          </span>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="<?php echo base_url(); ?>assets/images/android-logo-white.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Home</a>
          <a class="mdl-navigation__link" href="">Profil</a>
          <a class="mdl-navigation__link" href="">Artikel</a>
          <a class="mdl-navigation__link" href="">Software</a>
          <a class="mdl-navigation__link" href="">Galery</a>
          <a class="mdl-navigation__link" href="">Portfolio</a>
          <a class="mdl-navigation__link" href="">Contact</a>
        </nav>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center" id="banner">
          <img class="logo-itc" src="<?php echo base_url(); ?>assets/img/itclogo.png">
          <div class="logo-font android-slogan text-shadow" id="test">IT CYBER COMMUNITY</div>
          <div class="logo-font android-sub-slogan">Universitas Pamulang</div>
        </div>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast" style="font-weight: 800; line-height: 0px;">ARTIKEL TERBARU</div>
          <div class="android-card-container mdl-grid">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="<?php echo base_url(); ?>assets/images/more-from-1.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Get going on Android</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Make the switch
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
        </div>
        <div class="android-be-together-section mdl-typography--text-center">
          <div class="logo-font who-is">Who on Itcyber?</div>
        </div>
        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>
          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Satellite imagery: © 2014 Astrium, DigitalGlobe</p>
            <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <a class="android-link mdl-typography--font-light" href="">Blog</a>
            <a class="android-link mdl-typography--font-light" href="">Privacy Policy</a>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
    <script type="text/javascript">
      (function(window, $) {
        window.requestAnimFrame = (function(){
          return  window.requestAnimationFrame       ||
                  window.webkitRequestAnimationFrame ||
                  window.mozRequestAnimationFrame    ||
                  function( callback ){
                    window.setTimeout(callback, 1000 / 60);
                  };
        })();
        var y = 0,
          f = 0.22;

        function move() {
          y -= f;
          $('#banner').css('background-position',+ y + 'px');
          requestAnimationFrame(move);
        }
        move();

      })(window, jQuery);
    </script>
    <script>
      $(document).ready(function(){
          $('#test').click(function(){
              console.log("test");
          });
      });
    </script>
  </body>
</html>
