<?php

session_start();
$msg="";
if(isset($_GET['logout']))
{
    session_destroy();
	setcookie("uid", '', time()-7600,"/"); 
	header("Location: home.php");	
}
if(isset($_COOKIE['uid']) && $_COOKIE['uid']!=""){
	
	$_SESSION['uid']=$_COOKIE['uid'];	
	
}
//require_once('header.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>HOME PAGE</title>
	<style>

     { box-sizing: border-box }
html, body {
	min-height:100%;
	background-image:url(abc.gif);
	background-repeat:no-repeat;
	background-size:cover;
	display: table;
    width: 90%;
    height: 100%;	
   
}
body {
  display: table-cell;
  vertical-align: middle;
}
.box3 {
   margin: 0 500px;
  padding: 70px 10px;
  width: 400px;
  min-height: 195px;
  background: #fff;
  border-left: 20px solid #9b2;
  box-shadow: 0 0 20px rgba(0,0,0,.15);
  font: 12px/15px Arial, Helvetica, sans-serif;
  color: black;
  
}
h2 {
  font: 12px/15px Arial, Helvetica, sans-serif;
  color: #9b2;
  font-weight: 100;
  font-size: 40px;
  margin: -10px 70px;
  line-height: 10px;
}
.button1 {
color: #9b2;
font-family: "proxima nova";
font-size: 20px;
text-align: center;

border: solid 2px #9b2;
border-radius: 30px;
padding: 10px 110px;
position: absolute;
top: 399px;

transition-duration: 300ms;
}

.button1:hover {
	background-color: #9b2;
	color: #fff;
}

.button2 {
color: #9b2;
font-family: "proxima nova";
font-size: 20px;
text-align: center;

border: solid 2px #9b2;
border-radius: 30px;
padding: 10px 80px;
position: absolute;	
top: 450px;

transition-duration: 300ms;
}

.button2:hover {
	background-color: #9b2;
	color: #fff;
}


	
</style>
</head>
<body>
<form action="" method="post" name="">
<table>
<div class="box3">
				<h2>Home Page</h2>
				<ul style="list-style-type:none">
				<li>
				<a href="http://localhost/covid/login.php" class="button1">Login</a> 
				</li>
				<li>
				<a href="http://localhost/covid/reg1.php" class="button2">Registration</a>
                </li>
                </ul>     
								                    
			</div>			
		</div>

    </body>
</html>
