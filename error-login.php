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
    <body>
    <!-- App root element -->
    <div id="app">

      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Initial Page, "data-name" contains page name -->
        <div data-name="login" class="page" style="background-color: #748a97;">
             <!-- Scrollable page content -->
          <div class="page-content">



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
            app.dialog.alert('Username or Password is Wrong', function () {
            window.location = "welcome";
        });
         });
    </script>
    </body>
</html>