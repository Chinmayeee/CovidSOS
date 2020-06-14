<?php
session_start();
$errorMsg="";

if(isset($_POST['submit']))
{
	$email=$_POST['email_id'];
	$pass=md5($_POST['password']);
//$remember=$_POST['remember'];
	$con=mysqli_connect("localhost","root","","db");
		if($con)
		{
			$query="SELECT * FROM `users` where email_id='".$email."' and password='".$pass."'";
			$result=mysqli_query($con, $query);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_assoc($result);
				$_SESSION['uid']=$row['ID'];

				echo "Login successful";
				header("location: http://localhost/covid/html/");
			}else
			{
				echo "Login failed";
				
			}
		}else
		{
		echo "Connection Error";die;
		}
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LOGIN</title>
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
.box {
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

form {
  padding: 70px 100px 100px;
}

#email_id {


  margin: 0 20px;
  margin-bottom: 20px;
}

#password {
  margin: 0 15px;
  margin-bottom: 30px;
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
top: 535x;
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

 <div class="box">
  
	<h2>LOGIN</h2>
  
	<form action="">
    
    <!-- Login -->
    
    <div class="login-form">
      <div>
		<label for="email_id">Email_id</label>
		<input type="email" name="email_id" id="email_id" value="" required="" placeholder="email_id" class="input" />
      </div>
	  <div>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" value="" required="" placeholder="password" class="input" />
      </div>
    </div>
	<tr>
  	<td>
	 <input type="submit" name="submit" id="submit" value="Submit" />
	</td>
	</tr>
</div>
 
</form>
</body>
</html>
