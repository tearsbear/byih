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

  
  
        .container {
	height: auto;
	box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);	
	border-radius: 20px;
	position: relative;
	z-index: 1;
	background: inherit;
	overflow: hidden;
	margin-top: -10px;
}

.container:before {
	content: "";
	position: absolute;
	background: inherit;
	z-index: -1;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
	filter: blur(10px);
	margin: -20px;
}

         .warna {
color: #748a97;
}

/*     .warna-bg {*/
/*}*/


.card-backdrop-in {
    animation: none;
}


:root {
   --f7-fab-pressed-bg-color: #748a97; 
}

.fab-buttons a, .fab>a {
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

* A bit of demo styles */
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
  <div class="fab fab-right-bottom warna-bg">
    <a href="#">
      <!-- Icons For iOS Theme -->
      <i class="icon f7-icons">plus</i>
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
          
    </div>
  </div>
  
             <!-- Scrollable page content -->
          <div class="page-content fade">
        <div style="margin-top: -50px; height: auto; background-color: #748a97;">
            <br>
        
        <div class="block">
            <center>
                
             <h1 class="dt text-color-white" style="letter-spacing: 2px; font-size: 40px; margin-top: 50px;">byih</h1>
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
                    hello, <?php echo $_SESSION['username'];?>.
                    <br>
                    </p>
                    <p class="poppins text-color-white" style="margin-top: -15px;">
                    <?php echo date('l, F Y'); ?>
                    </p>
                     <button style="height: 50px; border-radius: 20px 0px 0px 0px;" class="logouts poppins button button-large button-raised text-color-white"> <i class="icon f7-icons" style="font-size: 18px; color: white;">arrow_turn_down_right</i> Logout</button>
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
                          
                     <div class="block-title poppins warna" style="margin-top: 5px; margin-left: -3px;">Reminder</div>
                      </center>
                      <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" data-slides-per-view="auto" data-centered-slides="true" class="swiper-container swiper-init demo-swiper demo-swiper-auto">
  <div class="swiper-pagination"></div>
  <div class="swiper-wrapper" style="margin-left: -10px;">
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
                          
                     <div class="block-title poppins warna" style="margin-top: 5px; margin-left: -3px;">Memories</div>
                      </center>
                      <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" data-slides-per-view="3" class="swiper-container swiper-init demo-swiper">
  <div class="swiper-pagination"></div>
  <div class="swiper-wrapper" style="">
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
        <div class="block">
            <div class="row">
            <div class="col">    
            <div class="card card-expandable elevation-1">
  <div class="card-content">
    <div style="background-color: #9aaab4; height: 300px">
      <div class="card-header text-color-white display-block">
        Framework7
        <br>
        <small style="opacity: 0.7">Build Mobile Apps</small>
      </div>
      <a href="#" class="link card-close card-opened-fade-in color-white" style="position: absolute; right: 15px; top: 15px">
        <i class="icon f7-icons">close_round_fill</i>
      </a>
    </div>
    <div class="card-content-padding">
      <p>Framework7 - is a free and open source HTML mobile framework to develop hybrid mobile apps or web apps with iOS or Android (Material) native look and feel. It is also an indispensable prototyping apps tool to show working app prototype as soon as possible in case you need to.</p>
      ...
    </div>
  </div>
</div>      
            </div>
            
            <div class="col">    
            <div class="card card-expandable elevation-1">
  <div class="card-content">
    <div style="background-color: #9aaab4; height: 300px">
      <div class="card-header text-color-white display-block">
        Framework7
        <br>
        <small style="opacity: 0.7">Build Mobile Apps</small>
      </div>
      <a href="#" class="link card-close card-opened-fade-in color-white" style="position: absolute; right: 15px; top: 15px">
        <i class="icon f7-icons">close_round_fill</i>
      </a>
    </div>
    <div class="card-content-padding">
      <p>Framework7 - is a free and open source HTML mobile framework to develop hybrid mobile apps or web apps with iOS or Android (Material) native look and feel. It is also an indispensable prototyping apps tool to show working app prototype as soon as possible in case you need to.</p>
      ...
    </div>
  </div>
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
         $(document).ready(function(){ 
             
             // Confirm
$$('.logouts').on('click', function () {
  app.dialog.confirm('Are you sure want to logout?', function () {
    window.location = "logout";
  });
});

// Perform Ajax request
app.preloader.show();
app.request.get('home.php', function (data) {
  // Hide preloader when Ajax request completed
 setTimeout(function () {
    app.preloader.hide();
  }, 1000);
});

         });
    </script>
    </body>
</html>