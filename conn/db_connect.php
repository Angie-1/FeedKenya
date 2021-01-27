<?php
	$hostname = 'localhost';
	$dbname = 'autospare';
	$username = 'root';
	$password = '';
	
	//Connect to database
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
?>
