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

		<center>

		<table align="center" border="1px" style="width:600px; line-height:40px;">

				<th>
					Emergency Records
				</th>
				<tr>
					<th>Name</th>
					
					<td>

					<?php


$con=mysqli_connect("localhost","root","","db");
$query="SELECT * FROM dth;";
$result=mysqli_query($con,$query);
$resultcheck=mysqli_num_rows($result);

if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['name']."<br>";
	}
}

?>
	
					</td>
					
					<th>Age</th>
					<td>
					<?php


$con=mysqli_connect("localhost","root","","db");
$query="SELECT * FROM dth;";
$result=mysqli_query($con,$query);
$resultcheck=mysqli_num_rows($result);

if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['age']."<br>";
	}
}

?>
					</td>
					<th>Phone no</th>
					<td>
					<?php


$con=mysqli_connect("localhost","root","","db");
$query="SELECT * FROM dth;";
$result=mysqli_query($con,$query);
$resultcheck=mysqli_num_rows($result);

if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['pno']."<br>";
	}
}

?>
					</td>

					<th>Severity</th>
					<td>
					<?php


$con=mysqli_connect("localhost","root","","db");
$query="SELECT * FROM dth;";
$result=mysqli_query($con,$query);
$resultcheck=mysqli_num_rows($result);

if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['severity']."<br>";
	}
}

?>
					</td>
					


					<th>Symptoms</th>
					<td>
					<?php


$con=mysqli_connect("localhost","root","","db");
$query="SELECT * FROM dth;";
$result=mysqli_query($con,$query);
$resultcheck=mysqli_num_rows($result);

if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['symptoms']."<br>";
	}
}

?>
					</td>
					

					<th>Area</th>
					<td>
					<?php


$con=mysqli_connect("localhost","root","","db");
$query="SELECT * FROM dth;";
$result=mysqli_query($con,$query);
$resultcheck=mysqli_num_rows($result);

if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['area']."<br>";
	}
}

?>
					</td>					

					
					
					<th>Hospital</th>
					<td>
					<?php


$con=mysqli_connect("localhost","root","","db");
$query="SELECT * FROM dth;";
$result=mysqli_query($con,$query);
$resultcheck=mysqli_num_rows($result);

if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['hospital']."<br>";
	}
}

?>
					</td>					
					
				</tr>

		</table>
		
		<form style="text-align:center" action="abc.php" name="myform" onsubmit="return validate()" method="POST">

		<p>WHO YOU WANT TO Register:</p>
	<center>
	<h1>
	Name:
	</h1>
    <input type="text" name="Name" style="width:600px;height:30px;">
	</center>
	<br>
	
	<h1>
	Phone no:
	<h1>
	<center>
    <input type="text" name="House" style="width:600px;height:30px;">
	</center>
	<br>
	
	<input type="submit" value="Submit" id="submit">
  </form> 
	
		</center>
		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>