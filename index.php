<!DOCTYPE html>
<html>
<head>
	<title>Maddix</title>


		<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/examples.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="js/jquery.fullPage.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false,
				css3:false
			});
		});
	</script>

</head>
<body>
	<div id="header">Header</div>
	<div id="fullpage">
		<div class="section active" id="section0">
			<div id="home"><img src="images/logo/Maaddix-03.png" height="100px" width="100px"></div>
		</div>
		<div class="section" id="section1">
		    <div class="slide "><h1>Simple Demo</h1></div>
		    <div class="slide "><h1>Only text</h1></div>
		    <div class="slide"><h1>And text</h1></div>
		    <div class="slide"><h1>And more text</h1></div>
		</div>
		<div class="section" id="section2"><h1>No wraps, no extra markup</h1></div>
		<div class="section" id="section3"><h1>Just the simplest demo ever</h1></div>
	</div>

</body>
</html>