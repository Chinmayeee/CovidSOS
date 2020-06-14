<?php

 
$con=mysqli_connect("localhost","root","","db");
if(isset($_POST['add'])) {
	$name = $_POST['name'];
	$age = $_POST['age'];
	$pno = $_POST['pno'];
	$severity = $_POST['severity'];
	$symptoms = $_POST['symptoms'];
	$area = $_POST['area'];
	$hospital=$_POST['hospital'];
	$sql = "insert into DTH (name, age, pno, severity,symptoms,area,hospital) VALUES ('$name','$age','$pno','$severity','$symptoms','$area','$hospital')";
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



		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

		
		
		    <div class="container-fluid bg">
      <div class="row">
        <div class="col-md-5 col-sm-4 col-xs-12"></div>
        <div class="col-md-6 col-sm-4 col-xs-12">
            <form id="log" method="post" action="DTH.php">
              <img class="img" src="images/covid.jpeg">
				<div>
                  <label for="name">NAME</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
				<br>
				<div>
                  <label for="age">AGE</label>
                  <input type="text" class="form-control" name="age" id="age">
                </div>
				<br>
				<div>
                  <label for="pno">PHONE NO</label>
                  <input type="text" class="form-control" name="pno" id="pno">
                </div>
				<br>
				<div>
					<label> Severity </label>
					<select name="severity">
						<option value="1">1(High)</option>
						<option value="2">2(Low)</option>
					</select>
				</div>
				<br>
                <div class="form-group">
                  <label for="symptons">Symptoms</label>
                  <input type="text" name="symptoms" class="form-control" id="symptoms">
                </div>
				<br>
				<div>
                  <label for="area">AREA</label>
                  <input type="text" class="form-control" name="area" id="area">
                </div>
				<br>
				<div>
                  <label for="area">Hospital</label>
                  <input type="text" class="form-control" name="hospital" id="hospital">
                </div>
				<br>
                <button name="add" onclick="alert('Details provided to hospital Successful')" type="submit" class="btn btn-success btn-block">Submit</button>
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