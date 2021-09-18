<?php
   include 'functions/main-functions.php';

   $noms=nav();

   $pages = scandir('pages/');
   if(isset($_GET['page']) && !empty($_GET['page']))
    {
        if (in_array($_GET['page'].'.php' ,$pages))
         {
           $page = $_GET['page'];
         }
         else
          {
            $page = "error";
          }
    }
    else
    {
        $page = "home";
    }

    $pages_functions = scandir('functions/');
    if (in_array($page.'.func.php',$pages_functions))
    {
      include 'functions/'.$page.'.func.php';
    }


 ?>


 <!DOCTYPE html>
 <html lang="fr">
 <head>
 	<!-- Meta Tag -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name='copyright' content=''>
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<!-- Title Tag  -->
     <title>Eshop - eCommerce HTML5 Template.</title>
 	<!-- Favicon -->
 	<link rel="icon" type="image/png" href="images/favicon.png">
 	<!-- Web Font -->
 	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

 	<!-- StyleSheet -->

 	<!-- Bootstrap -->
 	<link rel="stylesheet" href="css/bootstrap.css">
 	<!-- Magnific Popup -->
     <link rel="stylesheet" href="css/magnific-popup.min.css">
 	<!-- Font Awesome -->
     <link rel="stylesheet" href="css/font-awesome.css">
 	<!-- Fancybox -->
 	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
 	<!-- Themify Icons -->
     <link rel="stylesheet" href="css/themify-icons.css">
 	<!-- Nice Select CSS -->
     <link rel="stylesheet" href="css/niceselect.css">
 	<!-- Animate CSS -->
     <link rel="stylesheet" href="css/animate.css">
 	<!-- Flex Slider CSS -->
     <link rel="stylesheet" href="css/flex-slider.min.css">
 	<!-- Owl Carousel -->
     <link rel="stylesheet" href="css/owl-carousel.css">
 	<!-- Slicknav -->
     <link rel="stylesheet" href="css/slicknav.min.css">

 	<!-- Eshop StyleSheet -->
 	<link rel="stylesheet" href="css/reset.css">
 	<link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/responsive.css">

    <body>

      <?php
        include "body/topbar.php";
      ?>

        <?php
          include 'pages/'.$page.'.php';
        ?>


      <?php
        include "body/footer.php";
      ?>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script>
        $(document).ready(function(){
          $('.sidenav').sidenav();
          });
      </script>
      <?php
           $pages_js = scandir('js/');
            if (in_array($page.'.func.js',$pages_js))
            {
              ?>
              <script type="text/javascript" src="js/<?= $page ?>.func.js"></script>
              <?php
            }

      ?>
      <!-- Jquery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.js"></script>
      <script src="js/jquery-ui.min.js"></script>
      <!-- Popper JS -->
      <script src="js/popper.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Color JS -->
      <script src="js/colors.js"></script>
      <!-- Slicknav JS -->
      <script src="js/slicknav.min.js"></script>
      <!-- Owl Carousel JS -->
      <script src="js/owl-carousel.js"></script>
      <!-- Magnific Popup JS -->
      <script src="js/magnific-popup.js"></script>
      <!-- Waypoints JS -->
      <script src="js/waypoints.min.js"></script>
      <!-- Countdown JS -->
      <script src="js/finalcountdown.min.js"></script>
      <!-- Nice Select JS -->
      <script src="js/nicesellect.js"></script>
      <!-- Flex Slider JS -->
      <script src="js/flex-slider.js"></script>
      <!-- ScrollUp JS -->
      <script src="js/scrollup.js"></script>
      <!-- Onepage Nav JS -->
      <script src="js/onepage-nav.min.js"></script>
      <!-- Easing JS -->
      <script src="js/easing.js"></script>
      <!-- Active JS -->
      <script src="js/active.js"></script>
    </body>
  </html>
