<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maaddix</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script> -->
  </head>

  <body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="images/logo/maaddText.png" alt=""></a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#featured">Featured</a></li>
          <li><a target="_blank" href="https://www.instagram.com/ma_addix/"><i class="fa fa-lg fa-instagram"></i></a></li>
          <li><a target="_blank" href="https://www.youtube.com/channel/UCEjYZO3Mw_voTiDboWBl7Sg" ><i class="fa fa-lg fa-youtube"></i></a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>

   <!--   HERO SECTION -->
     <section class="hero">
        <div id="heroLogo">
          <div class="row">
            <div class="mobile col-xs-12 hidden-sm hidden-md hidden-lg">
              <img src="images/logo/Maaddix-logo-small.png"/>
              <h3 style="margin-top: -65px;">A Love Affair With Mountain Air</h3>
            </div>
            <div class="desktop hidden-xs col-sm-12">
              <img  src="images/logo/Maaddix-03.png" />  
               <h3>A Love Affair With Mountain Air</h3> <!--Tab-->
            </div>
          </div>
         <!--  <a href="#about"><img src="images/logo/Maaddix-03.png" ></a>
          <h3>A Love Affair With Mountain Air</h3> -->
        </div> 
     </section>
     <!-- About -->
     <section class="aboutContainer">
       <div>
        <h2>What is MAADDIX?</h2>
        <p>We are a lifestyle brand for all things mountain adventurers.  We love to share beautiful pictures from travelers all over the world.</p>

       </div>
       <div>

        </div>
     </section >
     

<!-- 
     <div class="toFadeIn" id="fadeIn" >
       <h1>FADE THIS IN</h1>
     </div>
 -->

<!-- Photo Gallery -->
    <section class="gallery">
      <h2>Adventure Gallery</h2>
      <div class="galleryWrapper">
        <div class="imageContainer2" id="gallery">
              <!-- <?php 
                $dirname = "images/images/";
                $images = glob($dirname."*.JPG");
                echo $images;
                foreach ($images as $image) {
                  echo '<script>console.log("'.$image.'");</script>';
                  list($width, $height) = getimagesize($image);
                  echo '<script>console.log("width: '.$width.' height: '.$height.'");</script>';
                  
              }
              ?> -->

              <a href="images/images/1.JPG" data-lightbox="example-set"><img class="previewImage" src="images/images/1.JPG"/></a>
              <a href="images/images/2.JPG" class="verticalImage"><img src="images/images/2.JPG" /></a>
              <a href="images/images/3.JPG" class="horizontalImage"><img src="images/images/3.JPG"/></a> 
               <a href="images/images/4.JPG"><img src="images/images/4.JPG"/></a>
               <a href="images/images/5.JPG"><img src="images/images/5.JPG"/></a>
               <a href="images/images/6.JPG" class="verticalImage"><img src="images/images/6.JPG"/></a>
               <a href="images/images/7.JPG"><img src="images/images/7.JPG"/></a>
               <a href="images/images/8.JPG"><img src="images/images/8.JPG"/></a>
               <a href="images/images/9.JPG"><img src="images/images/9.JPG"/></a>
               <a href="images/images/10.JPG"><img src="images/images/10.JPG"/></a>
               <a href="images/images/11.JPG" class="horizontalImage"><img src="images/images/11.JPG"/></a>
               <a href="images/images/12.JPG"><img src="images/images/12.JPG"/></a>
               <a href="images/images/13.JPG" class="verticalImage"><img src="images/images/13.JPG" /></a>
               <a href="images/images/14.JPG" class="horizontalImage"><img src="images/images/14.JPG" /></a>
               <a href="images/images/15.JPG"><img src="images/images/15.JPG"/></a>
               <a href="images/images/16.JPG"><img src="images/images/16.JPG"/></a>
               <a href="images/images/17.JPG" class="verticalImage"><img src="images/images/17.JPG"/></a>
               <a href="images/images/18.JPG"><img src="images/images/18.JPG"/></a>
               <a href="images/images/19.JPG"><img src="images/images/19.JPG"/></a>
               <a href="images/images/20.JPG"><img src="images/images/20.JPG"/></a>
               <a href="images/images/21.JPG"><img src="images/images/21.JPG"/></a>
               <a href="images/images/22.JPG" class="horizontalImage"><img src="images/images/22.JPG"/></a> 
           
            </div>
      </div>
     </section>
     <section class="mainContainer" id="featured">
       <div class="featured">
        <p>Featured Traveler</p>
        <h1><a href="#">Justin Rexroad</a></h1>
        <p>Destination Peru</p>  
       </div>
     </section>

<!-- FOOTER -->
  <footer>
    <div class="container text-center">
      <a target="_blank" href="https://www.instagram.com/ma_addix/"><i class="fa fa-2x fa-instagram"></i></a> &nbsp
      <a target="_blank" href="https://www.youtube.com/channel/UCEjYZO3Mw_voTiDboWBl7Sg"><i class="fa fa-2x fa-youtube"></i></a>
    </div>
  </footer>

    <!-- <script src="js/vendor/jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/fadeIn.js"></script> --> <!-- FADE for phase 2 -->
    <script src="js/bootstrap.js"></script>

    <!-- <script src="js/lightbox.js"></script> -->
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
     <script>
      lightbox.option({
        'disableScrolling': true,
        'alwaysShowNavOnTouchDevices' : true,
        'wrapAround' : true

      });
    </script>
  </body>
</html>
