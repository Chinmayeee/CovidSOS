<?php

 
$con=mysqli_connect("localhost","root","","db");
if(isset($_POST['add'])) {
	$price = $_POST['price'];
	$operator = $_POST['operator'];
	$mileage = $_POST['mileage'];
	$sql = "insert into recharge (operator, phone, amount) VALUES ('$operator', '$price', '$mileage')";
$con->query($sql);
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Covid SoS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		
			<header id="header">
				<a class="logo" href="index.html">Covid Sos</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
					<section id="banner">
				<div class="inner">
					<h1>Covid SoS</h1>
					<p>A responsive Covid SoS SYSTEM with multi Features.<br /></p>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>


		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.php">Geo Nav</a></li>
					<li><a href="DTH.php">SoS</a></li>

				</ul>
			</nav>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>
<a href ="test.html">click here</a>
<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
   
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
}


</script>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>