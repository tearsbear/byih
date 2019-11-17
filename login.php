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

    .warna-bg {
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

        </style>
  </head>
  <body>
    <!-- App root element -->
    <div id="app">

      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Initial Page, "data-name" contains page name -->
        <div data-name="login" class="page" style="background-color: #748a97;">
             <!-- Top Navbar -->
          <div class="navbar">
            <div class="navbar-inner">
            <div class="left">
            <a href="" style="color: white;" class="back">
               <i class="icon icon-back"></i>
          <span class="ios-only">Back</span>
            </a>
        </div>
      <!--<div class="title dt" style="color: white;">by</div>-->
    </div>
  </div>    

          <!-- Scrollable page content -->
          <div class="page-content">
            <img src="image/bgr4.jpg" style="margin-top: -50px; width: 100%; border-radius: 0px 0px 50px 50px;">
            <div class="block">
                <center>
               <h1 class="dt text-color-white" style="letter-spacing: 2px; font-size: 50px; margin-top: -25px;">byih</h1>
                  <p class="dt text-color-white" style="font-size: 18px; margin-top: -40px;">being yours is healthy</p>
                  
                  
                </center>
                
                <form method="POST" class="poppins" autocomplete="off" id="frm" action="check-login.php">
       <div class="list inset no-hairlines-md">
  <ul>
    <li class="item-content item-input">
      <div class="item-media">
         <i class="icon f7-icons" style="color: #748a97;">person</i> 
      </div>
      <div class="item-inner">
        <div class="item-title item-label warna" style="color: #748a97;">Username</div>
        <div class="item-input-wrap four">
          <input type="text" style="color: #e0b17d;" placeholder="Your username" name="username" validate required>
          <span class="input-clear-button"></span>
        </div>
      </div>
    </li>
    </ul>
    </div>

      <div class="list inset no-hairlines-md" style="margin-top: -20px;">
  <ul>
        <li class="item-content item-input">
      <div class="item-media">
         <i class="icon f7-icons" style="color: #748a97;">lock</i>
      </div>
      <div class="item-inner">
        <div class="item-title item-label" style="color: #748a97;">Password</div>
        <div class="item-input-wrap four">
          <input type="password" style="color: #e0b17d;" placeholder="Your password" name="password" validate required>
          <span class="input-clear-button"></span>
        </div>
      </div>
    </li>
    </ul>
    </div>
         
    <div class="block" style="margin-top: -20px;">
       <button type="submit" name="login" class="lgn button button-large button-fill elevation-0 poppins" style="background-color: #e0b17d; border-radius: 30px; height: 50px;">LOGIN</button>
       </div>
       </form>
       
       
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
 
          
//  $("#frm").on('submit',(function() {
//   $.ajax({
//          url: "check-login.php",
//   type: "POST",
//   data:  new FormData(this),
//   contentType: false,
//          cache: false,
//   processData:false,
//   success: function(data)
//       {
//      $("#frm").reset();

//       }
//     });
//  }));
  
    // Show preloader before Ajax request
app.preloader.show();

// Perform Ajax request
app.request.get('login.php', function (data) {
  // Hide preloader when Ajax request completed
 setTimeout(function () {
    app.preloader.hide();
  }, 1000);
});
});
    </script>
  </body>
</html>