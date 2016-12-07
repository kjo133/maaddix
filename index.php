<!DOCTYPE html>
<html>
<head>
	<title>MAADDIX</title>


	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/examples.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/boostrap.min.css">



	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['home', 'secondPage', '3rdPage'],
				menu: '#menu',
				verticalCentered: false,
				css3:false,
				autoScrolling: false

			});
		});
	</script>

</head>
<body>
<!-- navbar-default -->
  <nav class="navbar  navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
              <a class="navbar-brand" href="#"><img src="images/logo/MaaddixLogoWhite.png" alt="Logo"></a>
      </div>
      
      <div  class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left" id="navbarleft">
          <li><a href="#">Home</a></li>
          <li><a href="#">Gallery</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" id="navbarright">
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>



 	<div id="fullpage">
		<div class="section active" id="section0">
		</div>
		<!--ABOUT -->
		<div class="section" id="section1">
			<h1>About Us</h1>
			<div class ="slide active">
				<h2>MAADDIX Mission</h2>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
			<div class ="slide">
				<h2>Partners</h2>
				<p>Name 1<br/>
					Name 2 <br />
					Name 3
				</p>
			</div>
		</div>
		<!-- END ABOUT -->

		<!-- GALLERY -->
		<div class="section" id="section2">

			<h1>Adventure Gallery</h1>
			<div class="container" style="border: solid red;">
				<div class="gallery">
					<a tabindex="1"><img src="images/images/1.jpg"></a>
					<a tabindex="1"><img src="images/images/2.jpg"></a>
					<a tabindex="1"><img src="images/images/3.jpg"></a>
					<a tabindex="1"><img src="images/images/4.jpg"></a>
					<a tabindex="1"><img src="images/images/5.jpg"></a>
					<a tabindex="1"><img src="images/images/6.jpg"></a>
					<a tabindex="1"><img src="images/images/7.jpg"></a>
					<a tabindex="1"><img src="images/images/8.jpg"></a>
					<a tabindex="1"><img src="images/images/9.jpg"></a>
					<a tabindex="1"><img src="images/images/10.jpg"></a>
					<a tabindex="1"><img src="images/images/3.jpg"></a>
				</div>	
			</div>
			<!-- END CONTAINTER -->
		</div>
		<!-- END GALLERY -->


	</div>

	<div id="footer">
		<a class="navbar-brand" href="#"><img src="images/logo/MaaddixLogoWhite.png" alt="Logo"></a>
	</div>






</body>
</html>