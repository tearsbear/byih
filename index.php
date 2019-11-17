<?php 
require('function/connect.php');
session_start();

 if(isset($_SESSION['username']) && isset($_COOKIE["playername"])) {
  header("Location: home@" . $_SESSION['username']);
  }
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
    <!--<link href="https://fonts.googleapis.com/css?family=Bangers|Inconsolata|Quicksand" rel="stylesheet">-->
        <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
        
        .conts {
            margin: 0 auto;
    max-width: 1280px;
    width: 70%;
        }
        /* Custom color theme */
:root {
  --f7-theme-color: #693a87;
  --f7-theme-color-rgb: 105, 58, 135;
  --f7-theme-color-shade: #532e6a;
  --f7-theme-color-tint: #7f46a4;
}

.ios .navbar {
    background: transparent;
}

.ios .navbar:after {
    background-color: transparent;
}

          .warna {
color: #748a97;
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


.fade {

    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 4s; /* Firefox < 16 */
        -ms-animation: fadein 4s; /* Internet Explorer */
         -o-animation: fadein 4s; /* Opera < 12.1 */
            animation: fadein 4s;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Firefox < 16 */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
                 @font-face {
    font-family: font;
    src: url(fonts/font.ttf);
 
}


.div-wrapper {
  display: flex;
  justify-content: center;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
}
.div-wrapper img {
 align-self: flex-end;
}
        </style>
  </head>
  <body>
    <!-- App root element -->
    <div id="app">

      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Initial Page, "data-name" contains page name -->
        <div data-name="home" class="page">
             

          <!-- Scrollable page content -->
          <div class="page-content">
              <div style="background-color: #748a97; height: 100%; margin-top: -50px;">
              <br>
                  <center class="fade">
                  <h1 class="dt text-color-white" style="letter-spacing: 2px; font-size: 60px; margin-top: 100px;">byih</h1>
                  <p class="dt text-color-white" style="font-size: 20px; margin-top: -45px;">being yours is healthy</p>
                  <div class="block">
    
                  <a id="scrollTwo" href="#two" class="dt button button-large button-raised bg-color-white warna" style="margin-top: -20px; border-radius: 30px; width: 200px;">continue</a>
                  </div>
                  
                  <img src="image/bgr1.jpg" style="position: absolute; bottom: 0px; left: 0px; width: 100%;">
              </center>
              </div>
              
              <div id="two" style="background-color: #9ba0b6; height: auto; margin-top: 50px;">
                  <br>
                  <br>
                  <br>
                <div class="block">
                <center>
                <h1 class="dt text-color-white" style="letter-spacing: 2px; font-size: 60px; margin-top: -50px;">byih</h1>
                <p class="dt text-color-white" style="font-size: 20px; margin-top: -45px;">being yours is healthy</p>
                </center>    
                </div>  
           
                <div class="list block">
                    <br>
  <ul style="border-radius: 20px;">
    <li>
        <br>
      <div class="item-content" style="margin-top: -20px;">
        <div class="item-media"><i class="f7-icons text-color-red" style="font-size: 40px;">heart_circle_fill</i></i></div>
        <div class="item-inner">
          <div class="item-title poppins" style="margint">Save up some money</div>
          <!--<div class="item-after">CEO</div>-->
        </div>
      </div>
    </li>
    </ul>
    </div>
    
                <div class="list block" style="margin-top: -50px;">
                    <br>
  <ul style="border-radius: 20px; width: 310px;">
    <li>
        <br>
      <div class="item-content" style="margin-top: -20px;">
        <div class="item-media"><i class="f7-icons text-color-blue" style="font-size: 40px;">quote_bubble_fill</i></i></div>
        <div class="item-inner">
          <div class="item-title poppins" style="margint">Reminder our things</div>
          <!--<div class="item-after">CEO</div>-->
        </div>
      </div>
    </li>
    </ul>
    </div>
    
            <div class="list block" style="margin-top: -50px;">
                    <br>
  <ul style="border-radius: 20px; width: 250px;">
    <li>
        <br>
      <div class="item-content" style="margin-top: -20px;">
        <div class="item-media"><i class="f7-icons text-color-orange" style="font-size: 40px;">calendar_badge_plus</i></i></div>
        <div class="item-inner">
          <div class="item-title poppins">Plan anything</div>
          <!--<div class="item-after">CEO</div>-->
        </div>
      </div>
    </li>
    </ul>
    </div>
                <div class="block">
                <a id="scrollThree" href="#three" class="dt button button-large button-raised bg-color-white warna" style="height: 45px; margin-top: -20px; border-radius: 30px; width: 200px;">continue</a>
                </div>
 
                  <img src="image/bgr2.jpg" style="float: right; margin-top: -50px; max-width: 300px;">
                  <div style="height: 250px;"></div> 
                  
              </div>
              
             <div id="three" style="background-image: url(image/bgr3.jpg); background-position: center; height: 100%;">
              <br>
              <br>
              <br>
                  <center class="fade">
                  <h1 class="dt text-color-white" style="letter-spacing: 2px; font-size: 60px; margin-top: 50px;">byih</h1>
                  <p class="dt text-color-white" style="font-size: 20px; margin-top: -45px;">being yours is healthy</p>
                  <div class="block">
    
                <a href="/login/" data-view=".view-main" class="dt button button-large button-raised bg-color-white warna" style="margin-top: -20px; border-radius: 30px; width: 200px;">take me now</a>                  </div>
                  
              </center>
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
        $(document).ready(function(){ 
   $('.bringback').click(function() {
  history.go(-1);
  });
  
  $('#scrollTwo').on('click', function(){
  $(".page-content").animate({ scrollTop: $('#two').offset().top }, 1000);
  });
  
  $('#scrollThree').on('click', function(){
      $$('.page-content').scrollTop(10000, 1000);
//   $(".page-content").animate({ scrollTop: $('#three').offset().top }, 1000);
  });


    // Show preloader before Ajax request
app.preloader.show();

// Perform Ajax request
app.request.get('index.php', function (data) {
  // Hide preloader when Ajax request completed
 setTimeout(function () {
    app.preloader.hide();
  }, 1000);
});
});
    </script>
  </body>
</html>