<!DOCTYPE html>
<html>
<head>
	<title>MAADDIX</title>


		<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/examples.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

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
	<div id="header">
		<ul id="menu">
			<li data-menuanchor="firstPage" class="active"><a href="#firstPage">Home</a></li>
			<li data-menuanchor="secondPage"><a href="#secondPage">Gallery</a></li>
			<li data-menuanchor="3rdPage"><a href="#3rdPage">About</a></li>
			
		</ul>
	</div>



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
		   <!--  <div class="slide "><h1>Simple Demo</h1></div>
		    <div class="slide "><h1>Only text</h1></div>
		    <div class="slide"><h1>And text</h1></div>
		    <div class="slide"><h1>And more text</h1></div> -->
		</div>
<!-- 		<div class="section" id="section2"><h1>No wraps, no extra markup</h1></div>
		<div class="section" id="section3"><h1>Just the simplest demo ever</h1></div> -->
	</div>

		<div id="footer">Footer</div>



</body>
</html>