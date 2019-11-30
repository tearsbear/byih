<?php
include("function/connect.php");
include("function/periksa.php");
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!-- Color theme for statusbar (Android only) -->
  <!--<meta name="theme-color" content="#2196f3">-->
  <!-- Your app title -->
  <title>byih</title>
  <!-- Path to Framework7 Library Bundle CSS -->
  <link rel="stylesheet" href="css/framework7.bundle.min.css">
  <!-- Path to Framework7 Icons CSS -->
  <link rel="stylesheet" href="css/framework7-icons.css">
  <!-- Path to your custom app styles-->
  <!--<link rel="stylesheet" href="path/to/my-app.css">-->
  <link rel="shorcut icon" href="image/byih.png">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

    .avas {
      width: 120px;
      height: 120px;
      background-size: cover;
      display: block;
      border-radius: 120px;
      -webkit-border-radius: 120px;
      -moz-border-radius: 120px;
      margin-left: 15px;
      margin-top: -25px;
    }

    .fade {

      -webkit-animation: fadein 4s;
      /* Safari, Chrome and Opera > 12.1 */
      -moz-animation: fadein 4s;
      /* Firefox < 16 */
      -ms-animation: fadein 4s;
      /* Internet Explorer */
      -o-animation: fadein 4s;
      /* Opera < 12.1 */
      animation: fadein 4s;
    }

    @keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Firefox < 16 */
    @-moz-keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Internet Explorer */
    @-ms-keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Opera < 12.1 */
    @-o-keyframes fadein {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @font-face {
      font-family: font;
      src: url(fonts/font.ttf);

    }



    .container {
      height: auto;
      box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .19);
      backdrop-filter: blur(5px);
      background-color: rgba(255, 255, 255, 0.15);
      border-radius: 20px;
      margin-top: -10px;
    }


    .warna {
      color: #748a97;
    }

    .warna-bg {
      background-color: #748a97;
    }

    /*     .warna-bg {*/
    /*}*/

    .text-bl {
      color: #cfffff;
    }

    .text-org {
      color: #e0b17d;
    }

    .text-pk {
      color: #d7a398;
    }


    .card-backdrop-in {
      animation: none;
    }


    :root {
      --f7-fab-pressed-bg-color: #748a97;
    }

    .fab-buttons a,
    .fab>a {
      background-color: #748a97;
    }


    .poppins {
      font-family: 'Poppins', sans-serif;
    }

    /*   .two {*/
    /*   font-family: 'Inconsolata', monospace;*/
    /* }*/

    /*   .three {*/
    /*     font-family: 'Bangers', cursive;*/
    /*   }*/

    @font-face {
      font-family: hui;
      src: url(fonts/byih.ttf);

    }

    .dt {
      font-family: hui;
    }

    .swipe-handler {
      height: 16px;
      position: absolute;
      left: 0;
      width: 100%;
      top: 0;
      background: #fff;
      cursor: pointer;
      z-index: 10;
      /* border-radius: 40px !important; */
    }

    .swipe-handler:after {
      content: '';
      width: 36px;
      height: 6px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -18px;
      margin-top: -3px;
      border-radius: 3px;
      background: #666;
    }

    .sheet-calculate {
      --f7-sheet-border-color: transparent;
      border-radius: 20px 20px 0 0;
      overflow: hidden;
    }

    .demo-swiper .swiper-slide {
      font-size: 25px;
      font-weight: 300;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
      color: #000;
    }

    .demo-swiper .swiper-slide {
      margin-top: 10px;
      box-sizing: border-box;
      background-color: #748a97;
      border-radius: 20px;
    }

    .demo-swiper {
      padding-bottom: 50px;
      margin: 0px 0 35px;
      font-size: 18px;
      height: auto;
    }

    .demo-swiper.demo-swiper-auto .swiper-slide {
      width: 85%;
    }

    .demo-swiper.demo-swiper-auto .swiper-slide:nth-child(2n) {
      width: 85%;
    }

    .demo-swiper.demo-swiper-auto .swiper-slide:nth-child(3n) {
      width: 85%;
    }


    .ios .navbar {
      background: transparent;
    }

    .ios .navbar:after {
      background-color: transparent;
    }
  </style>

<body>
  <!-- App root element -->
  <div id="app">

    <!-- Your main view, should have "view-main" class -->
    <div class="view view-main">
      <!-- Initial Page, "data-name" contains page name -->
      <div data-name="home" class="page" style="background-color: #748a97;">

        <!-- FAB Left Top (Yellow) -->
        <div class="fab fab-right-bottom">
          <a href="#">
            <!-- Icons For iOS Theme -->
            <i class="icon f7-icons">menu</i>
            <i class="icon f7-icons">multiply</i>
          </a>
          <!-- FAB speed dial actions -->
          <div class="fab-buttons fab-buttons-top">
            <a href="#" class="fab-label-button popup-open" data-popup=".popup-video">
              <span><i class="icon f7-icons" style="font-size: 20px;">heart_fill</i></span>
              <span class="fab-label poppins">Memories</span>
            </a>
            <a href="#" class="fab-label-button popup-open" data-popup=".popup-polling">
              <span><i class="icon f7-icons" style="font-size: 20px;">star_fill</i></span>
              <span class="fab-label poppins">Reminder</span>
            </a>
            <a href="#" class="fab-label-button sheet-open cacl" data-sheet=".sheet-calculate">
              <span><i class="icon f7-icons" style="font-size: 20px;">chart_bar_alt_fill</i></span>
              <span class="fab-label poppins">Calculate</span>
            </a>

          </div>
        </div>


        <!-- Swipe to step sheet -->
        <div class="sheet-modal sheet-calculate" style="height:auto; --f7-sheet-bg-color: #fff;">
          <div class="sheet-modal-inner">
            <div class="swipe-handler"></div>
            <div class="sheet-modal-swipe-step">
              <div class="display-flex padding justify-content-space-between align-items-center">
                <div style="font-size: 18px"><b class="warna">Total:</b></div>
                <div style="font-size: 22px"><b class="warna">120 Days</b></div>
              </div>
              <div class="padding-horizontal padding-bottom">
                <a class="button button-large button-fill warna-bg">Calculate</a>
                <div class="margin-top text-align-center">Swipe up for more details</div>
              </div>
            </div>
            <div class="block-title block-title-medium margin-top warna">Memories:</div>
            <div class="list no-hairlines">
              <ul>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">Day 1</div>
                    <div class="item-after text-color-black"><b>$200</b></div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">Day 2</div>
                    <div class="item-after text-color-black"><b>$180</b></div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">Day 3</div>
                    <div class="item-after text-color-black"><b>$120</b></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Scrollable page content -->
        <div class="page-content fade">
          <div style="margin-top: -50px; height: auto; background-color: #748a97;">
            <br>

            <div class="block">
              <center>

                <h1 class="dt text-color-white" style="letter-spacing: 2px; font-size: 40px; margin-top: 50px;">byih
                </h1>
                <p class="dt text-color-white" style="font-size: 20px; margin-top: -30px;">being yours is healthy</p>
              </center>
              <div class="container" style="margin-top: 35px;">
                <br>
                <br>
                <div class="row">
                  <div class="col-30">
                    <img src="image/icons.png" class="avas elevation-2">
                  </div>
                  <div class="col-50">
                    <p class="dt text-color-white" style="margin-top: -10px; font-size: 25px;">
                      hello, <?php echo $_SESSION['username']; ?>.
                      <br>
                    </p>
                    <p class="poppins text-color-white" style="margin-top: -15px;">
                      <?php echo date('l, F Y'); ?>
                    </p>
                    <button style="height: 50px; border-radius: 20px 0px 20px 0px;" class="logouts poppins button button-large button-raised text-color-white"> <i class="icon f7-icons" style="font-size: 18px; color: white;">arrow_turn_down_right</i>
                      Logout</button>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
          </div>

          <div class="block" style="margin-top: -30px; height: auto; background-color: #e0b17d; border-radius: 20px 20px 0px 0px;">
            <br>
            <center>

              <div class="block-title poppins warna" style="margin-top: 5px;">Reminder</div>
            </center>
            <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" data-slides-per-view="auto" data-centered-slides="true" class="swiper-container swiper-init demo-swiper demo-swiper-auto">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <center>

                    <h3 class="text-color-white poppins" style="width: auto;">Dinner With Me</h3>
                    <p style="margin-top: 40px; font-size: 15px;" class="text-color-white dt">reminder by jiaan</p>
                    <p style="margin-top: -15px; font-size: 12px;" class="text-color-white">21 minutes ago</p>
                  </center>
                </div>
                <div class="swiper-slide">
                  <center>

                    <h3 class="text-color-white poppins" style="width: auto;">Dinner With Me</h3>
                    <p style="margin-top: 40px; font-size: 15px;" class="text-color-white dt">reminder by jiaan</p>
                    <p style="margin-top: -15px; font-size: 12px;" class="text-color-white">21 minutes ago</p>
                  </center>
                </div>
                <div class="swiper-slide">
                  <center>

                    <h3 class="text-color-white poppins" style="width: auto;">Dinner With Me</h3>
                    <p style="margin-top: 40px; font-size: 15px;" class="text-color-white dt">reminder by jiaan</p>
                    <p style="margin-top: -15px; font-size: 12px;" class="text-color-white">21 minutes ago</p>
                  </center>
                </div>
                <div class="swiper-slide">
                  <center>

                    <h3 class="text-color-white poppins" style="width: auto;">Dinner With Me</h3>
                    <p style="margin-top: 40px; font-size: 15px;" class="text-color-white dt">reminder by jiaan</p>
                    <p style="margin-top: -15px; font-size: 12px;" class="text-color-white">21 minutes ago</p>
                  </center>
                </div>
              </div>
            </div>

            <br>
          </div>

          <div class="block" style="margin-top: -65px; height: auto; background-color: #d7a398; border-radius: 20px 20px 0px 0px;">
            <br>
            <center>

              <div class="block-title poppins warna" style="margin-top: 5px;">Memories</div>
            </center>
            <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" data-slides-per-view="3" class="swiper-container swiper-init demo-swiper">
              <div class="swiper-pagination"></div>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <center>

                    <h3 class="text-color-white poppins" style="width: auto;">Day 1</h3>
                    <p style="margin-top: -5px; font-size: 12px;" class="text-color-white">10 Feb, 2019</p>
                  </center>
                </div>
                <div class="swiper-slide">
                  <center>

                    <h3 class="text-color-white poppins" style="width: auto;">Day 2</h3>
                    <p style="margin-top: -5px; font-size: 12px;" class="text-color-white">10 Feb, 2019</p>
                  </center>
                </div>
                <div class="swiper-slide">
                  <center>

                    <h3 class="text-color-white poppins" style="width: auto;">Day 3</h3>
                    <p style="margin-top: -5px; font-size: 12px;" class="text-color-white">10 Feb, 2019</p>
                  </center>
                </div>
                <div class="swiper-slide">
                  <center>

                    <h3 class="text-color-white poppins" style="width: auto;">Day 4</h3>
                    <p style="margin-top: -5px; font-size: 12px;" class="text-color-white">10 Feb, 2019</p>
                  </center>
                </div>
              </div>
            </div>
            <br>
          </div>



          <div class="block" style="margin-top: -65px; height: auto; background-color: #748a97; border-radius: 20px 20px 0px 0px;">
            <br>
            <center>
              <h1 class="poppins text-color-white">Planning</h1>
            </center>
            <div class="block" style="margin-top: -5px;">
              <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="20" data-slides-per-view="2" class="swiper-container swiper-init demo-swiper demo-swiper-auto">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <center>

                      <h3 class="text-bl poppins" style="width: auto;">Trip to Bali</h3>
                      <p style="margin-top: 40px; font-size: 15px;" class="text-color-white dt">plan by jiaan</p>
                      <p style="margin-top: -15px; font-size: 12px;" class="text-color-white">21 minutes ago</p>
                    </center>
                  </div>
                  <div class="swiper-slide">
                    <center>

                      <h3 class="text-bl poppins" style="width: auto;">Goes to Singapore</h3>
                      <p style="margin-top: 40px; font-size: 15px;" class="text-color-white dt">plan by jiaan</p>
                      <p style="margin-top: -15px; font-size: 12px;" class="text-color-white">21 minutes ago</p>
                    </center>
                  </div>
                  <div class="swiper-slide">
                    <center>

                      <h3 class="text-bl poppins" style="width: auto;">Goes to Iceland</h3>
                      <p style="margin-top: 40px; font-size: 15px;" class="text-color-white dt">reminder by jiaan</p>
                      <p style="margin-top: -15px; font-size: 12px;" class="text-color-white">21 minutes ago</p>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <br>
        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- Path to Framework7 Library Bundle JS-->
  <script type="text/javascript" src="js/framework7.bundle.min.js"></script>
  <!-- Path to your app js-->
  <script type="text/javascript" src="js/myapp.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script>
    $(document).ready(function() {

      // Confirm
      $$('.logouts').on('click', function() {
        app.dialog.confirm('Are you sure want to logout?', function() {
          window.location = "logout";
        });
      });

      $$('.cacl').on('click', function() {
        app.fab.close()
      })

      // Perform Ajax request
      app.preloader.show();
      app.request.get('home.php', function(data) {
        // Hide preloader when Ajax request completed
        setTimeout(function() {
          app.preloader.hide();
        }, 1000);
      });

      // Create swipe-to-step Sheet
      app.sheet.create({
        el: '.sheet-calculate',
        swipeToClose: true,
        swipeToStep: true,
        backdrop: true,
      });

    });
  </script>
</body>

</html>