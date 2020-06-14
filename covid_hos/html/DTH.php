<?php

 
$con=mysqli_connect("localhost","root","","db");
if(isset($_POST['add'])) {
	$abc = $_POST['price'];
	$def = $_POST['operator'];
	$ghi = $_POST['mileage'];
	$sql = "insert into DTH (operator, phone, amount) VALUES ('$def', '$abc', '$ghi')";
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
				<a class="logo" href="index.html">Covid SoS</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
					<section id="banner">
				<div class="inner">
					<h1>Covid SoS</h1>
					<p>A responsive Covid Sos SYSTEM with multi Features.<br /></p>
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

s

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

		
		
		    <div class="container-fluid bg">
      <div class="row">
        <div class="col-md-5 col-sm-4 col-xs-12"></div>
        <div class="col-md-6 col-sm-4 col-xs-12">
            <form id="log" method="post" action="DTH.php">
              <img class="img" src="images/covid.jpg">
                <div>
				<label> Emergency </label>
				<select name="operator">
				<option value="1">1</option>
				<option value="2">2</option>

					</select>
					</div>
				<div>
                  <label for="price">PHONE NO</label>
                  <input type="text" class="form-control" name="price" id="price">
                </div>
                <div class="form-group">
                  <label for="mileage">Pincode</label>
                  <input type="text" name="mileage" class="form-control" id="mileage"><br>
                </div>
                <button name="add" onclick="alert('Recharge Successful')" type="submit" class="btn btn-success btn-block">Submit</button>
				
            </form>
          </div>
          <div class="col-md-1 col-sm-4 col-xs-12"></div>
        </div>
      </div>
			


			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>