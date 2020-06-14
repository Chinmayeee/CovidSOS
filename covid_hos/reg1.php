<?php
session_start();
$errorMsg="";
if(isset($_POST['submit']))
{
	//print_r($_POST);die;
	$con=mysqli_connect("localhost","root","","db");
	$query="INSERT INTO `users`(`ID`,`first_name`,`last_name`,`email_id`,`password`)VALUES('NULL','".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email_id']."',MD5('".$_POST['password']."'));";
	if(mysqli_query($con,$query))
	{
		$id=mysqli_insert_id($con);
		$_SESSION['uid']=$id;
		echo "Registration success";
		header("location: login.php");
	}
	else
	{
		echo$errorMsg="Registration Fail";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
     
     { box-sizing: border-box }
html, body {
	min-height:100%;
	background-image:url(bgr.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	display: table;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;	
 
}
body {
  display: table-cell;
  vertical-align: middle;
}
.box1 {
  margin: auto;
  padding: 50px 50px;
  width: 400px;
  min-height: 115px;
  background: #fff;
  border-left: 10px solid #9b2;
  box-shadow: 0 0 20px rgba(0,0,0,.15);
  font: 20px Arial, Helvetica, sans-serif;
  color: black;
}
h2 {
	color: #9b2;
 font-size: 30px;
 margin: 15px 110px;
  line-height: 50px;
}

#first_name {
  top: 5px;
  margin: 0 50px;
  margin-bottom: 20px;
}

#last_name {
  top: 5px;
  margin: 0 50px;
  margin-bottom: 20px;
}

#email_id {
  top: 5px;
  margin: 0 52px;
  margin-bottom: 20px;
}


#password {
  top: 5px;
  margin: 0 53px;
  margin-bottom: 50px;
}

#submit {
color: #9b2;
 background: #fff;
font-family: "proxima nova";
font-size: 20px;
text-align: center;

border: solid 2px #9b2;
border-radius: 30px;
padding: 5px 40px;
position: absolute;
top: 660px;
left: 800px;

transition-duration: 300ms;
}
#submit:hover {
  background-color: #9b2;
	color: #fff;
}


.input {
  
  font-size: 1.125rem;
  line-height: 3rem;
  width: 75%; height: 3rem;
  color: #444;
  background-color: rgba(255,255,255,.9);
  border: 0;
  border-top: 1px solid rgba(255,255,255,0.7);
  padding: 0 1rem;
  font-family: 'Open Sans', sans-serif;
}
</style>
</head>

<body>
<form action="" method="post" name="">
<table>
 
 <div class="box1">

		<h2>Registration</h2>

		<form action="">
    
		<!-- Registration -->
    
		<div class="Registration-form">

			<div>
				<label for="first_name">First name</label>
				<input type="text" name="first_name" id="first_name" value="" required="" placeholder="first_name" class="input" />
			</div>
		
			<div>
				<label for="last_name">Last name</label>
				<input type="text" name="last_name" id="last_name" value="" required="" placeholder="last_name"class="input" />
			</div>
		
			<div>	
				<label for="email_id">Email-id</label>
				<input type="email" name="email_id" id="email_id" value="" required="" placeholder="email_id" class="input" />
			</div>
		
			<div>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" value="" required="" placeholder="password" class="input" />
			</div>

			<div>
					<input type="submit" name="submit" id="submit" value="Submit" />
			</div>	
			
		</div>
 </div>
</form>
</body>
</html>
