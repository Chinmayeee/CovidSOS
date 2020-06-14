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


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	
<h3>
Name of the individual:
<h3>
<?php
$abc=$_POST['Name'];
$bcd=$_POST['House'];

$host="localhost";
$user="root";
$pass="";
$db="db";

$con=mysqli_connect($host,$user,$pass,$db);
$sql="insert into register values('".$abc."','".$bcd."')";
if(mysqli_query($con,$sql))
{
	echo"$abc";
}
else
{
	echo"failed";
}
?>
<br>
<h3>
Bed Number Allocated:
<h3>
<?php

function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    $result = array_slice($numbers, 0, $quantity);
	return $result;
}

print_r(randomGen(0,100,1)); //generates 20 unique random numbers

?>

<?php
	// Account details
	$apiKey = urlencode('FifDR7z4pbU-R97ARE92wm1r3SBiPz8Gnal4CyIs4z');
	
	// Message details
	$numbers = array(9168546565,);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('Your Bed has been booked:');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	//echo $response;
?>

<h2> <?php printf("%s",$response) ?>  </h2>


</body>

</html>