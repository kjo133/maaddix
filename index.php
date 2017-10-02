<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- <SCRIPT>
function passWord() {
var testV = 1;
var pass1 = prompt('Please Enter Your Password',' ');
while (testV < 3) {
if (!pass1) 
history.go(-1);
if (pass1.toLowerCase() == "m@addixpwd") {
alert('You Got it Right!');
window.open('www.wikihow.com');
break;
} 
testV+=1;
var pass1 = 
prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
}
if (pass1.toLowerCase()!="password" & testV ==3) 
history.go(-1);
return " ";
} 
</SCRIPT>
<CENTER>
<FORM>
<input type="button" value="Enter Protected Area" onClick="passWord()">
</FORM>
</CENTER> -->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maaddix</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  </head>

  <body>
   <nav class="navbar navbar-inverse navbar-static-top">
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
          <li><a target="_blank" href="https://www.instagram.com/ma_addix/"><i class="fa fa-lg fa-instagram"></i></a></li>
          <li><a target="_blank" href="https://www.youtube.com/channel/UCEjYZO3Mw_voTiDboWBl7Sg" ><i class="fa fa-lg fa-youtube"></i></a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>

   <!--   HERO SECTION -->
     <div class="hero">
        <div id="heroLogo">
          <a href="#about"><img src="images/logo/Maaddix-03.png" ></a>
          <h3>A Love Affair With Mountain Air</h3>
        </div> 
     </div>
     <!-- MAIN -->
     <section class="main" id="about">
       <div class="wrapper row">
         <div class="medium-12 column">
          <h1>Our Mission</h1>
          <h2>Mountain Air Addix (MAADDIX) is an apparel-logo lifestyle brand encompassing all mountain adventures and mountain sports.  </h2>
          <br />
           <p>We created this lifestyle brand for all mountain adventurers, for a culture that appreciates all the earth has to offer, and for those that are not ashamed of their love affair with mountain air.  
           <br />
           <br />
           Mountains are not meant to be barriers or hindrances, but meant to be overcome and conquered.  Your mountain is calling, go climb it and share it with MAADDIX.  
           <br/>
           <br/>
              <p style="font-size: 14px;">Founder: Anna Boling
              <br/ >
              <a target="_blank" href="http://www.kevinjolson.com/portfolio" style="color:white;">Web Master: Kevin Olson</a>
              </p>
           </p>
         </div>
       </div>
     </section>

<!-- Photo Gallery -->
     <section class="gallery">
     	<div class="wrapper" id="gallery">
     		<h1>Adventure Gallery</h1>
          <div class="ImageContainer">
            <h2 class="text-center">Check out these awesome views and epic adventures taken by all of our Mountain Air Addix.  <br/> Send us your latest and greatest conquests at <a href='#'>mountainairaddix@gmail.com </a></h2>
            <div class="lightbox-gallery">
                <?php  
                  $dirname = "images/images/";
                  $images = glob($dirname."*.JPG");
                  foreach ($images as $image) {
                    echo '<div><img src="'.$image.'" /></div>';
                  }
                ?>         
            </div>
         </div>
     	</div>
     </section>

<!-- FOOTER -->
  <footer>
    <div class="container text-center">
      <a target="_blank" href="https://www.instagram.com/ma_addix/"><i class="fa fa-2x fa-instagram"></i></a> &nbsp
      <a target="_blank" href="https://www.youtube.com/channel/UCEjYZO3Mw_voTiDboWBl7Sg"><i class="fa fa-2x fa-youtube"></i></a>
    </div>
  </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
