<?php
	// Account details
	$apiKey = urlencode('FifDR7z4pbU-R97ARE92wm1r3SBiPz8Gnal4CyIs4z');
	
	// Message details
	$numbers = array(9168546565,);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('Hello');
 
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
	echo $response;
?>