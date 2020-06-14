<?php

 
$con=mysqli_connect("localhost","root","","db");
if(isset($_POST['add'])) {
	$price = $_POST['price'];
	$operator = $_POST['operator'];
	$mileage = $_POST['mileage'];
	$sql = "insert into recharge (operator, phone, amount) VALUES ('$operator', '$price', '$mileage')";
$con->query($sql);
	
}
