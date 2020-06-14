<?php

$con=mysqli_connect("localhost","root","","db");
$query="SELECT * FROM `dth`";
if(mysqli_query($con,$query))
{
	echo"success";
}
else
{
	echo"failed";
}

?>