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
				anchors: ['firstPage', 'secondPage', '3rdPage'],
				menu: '#menu',
				verticalCentered: false,
				css3:false

			});
		});
	</script>

</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
              <a class="navbar-brand" href="#"><img src="images/logo/Maaddix-03.jpg" style="height: 50px; width: 50px;" alt="Dispute Bills">
      </a>
      </div>
      
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="#">Home</a></li>
          <li><a href="#">Gallery</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>




<!-- 
	<div id="header">
 		<ul id="menu">
			<li data-menuanchor="firstPage" class="active"><a href="#firstPage">Home</a></li>
			<li data-menuanchor="secondPage"><a href="#secondPage">Gallery</a></li>
			</ul>
			<img src="images/logo/Maaddix-03.jpg" id="logo">
			<ul id="menu">
			<li data-menuanchor="3rdPage"><a href="#3rdPage">About!</a></li>
			</ul>
	</div>
 -->

 	<div id="fullpage">
		<div class="section active" id="section0">
			<!-- <h1>MAADDIX</h1> 
				<div id="home"><img src="images/logo/Maaddix-03.png" height="100px" width="100px"></div>
				-->
		</div>
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
	<div class="section" id="section2">
			<h1>Gallery</h1>
			<div class ="slide">
				<h2>MAADDIX Mission</h2>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ul."</p>
			</div>
			
		</div>


		<!-- END ABOUT -->
	</div>

		<div id="footer">Footer</div>






</body>
</html>