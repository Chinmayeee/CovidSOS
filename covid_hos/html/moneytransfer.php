<?php

 
$con=mysqli_connect("localhost","root","","db");
if(isset($_POST['add'])) {
	$price = $_POST['price'];
	$operator = $_POST['operator'];
	$mileage = $_POST['mileage'];
	$sql = "insert into money (operator, phone, amount) VALUES ('$operator', '$price', '$mileage')";
$con->query($sql);
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>EWALLET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		
			<header id="header">
				<a class="logo" href="index.html">EWALLET</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
					<section id="banner">
				<div class="inner">
					<h1>EWALLET</h1>
					<p>A responsive Ewallet SYSTEM with multi Features.<br /></p>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>


		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.php">Mobile recharge</a></li>
					<li><a href="DTH.php">Dth Recharge</a></li>
					<li><a href="moneytransfer.php">Money Transfer</a></li>
					<li><a href="Contact.html">Contacts</a></li>
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
            <form id="log" method="post" action="moneytransfer.php">
              <h5>Money Transfer</h5>
              <img class="img" src="images/21.jpg">
                <div>
				<label> BANKS </label>
				<select name="operator">
				<option value="MAH">Maharashtra bank</option>
				<option value="BARODA">bank of baroda</option>
				<option value="SVC">SVC</option>
				<option value="HDFC">hdfc</option>
				<option value="ICICI">ICICI</option>
					</select>
					</div>
				<div>
                  <label for="price">Account no</label>
                  <input type="text" class="form-control" name="price" id="price">
                </div>
                <div class="form-group">
                  <label for="mileage">AMOUNT</label>
                  <input type="text" name="mileage" class="form-control" id="mileage"><br>
                </div>
                <button name="add" onclick="alert('Transfer Successful')" type="submit" class="btn btn-success btn-block">RECHARGE</button>
				
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