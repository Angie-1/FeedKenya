
<?php
	include "conn/db_connect.php";
	session_start();

		$companyname = $_POST["companyname"];
		$password = $_POST["password"];

		$query = "select * from donors where companyname = '".$companyname."'";
		$result = $conn->query($query)->fetch_assoc();
		$stored_secret = $result["password"];
		if (password_verify($password, $stored_secret))
		{
		  echo 'OK';
		  $donors_id = $result["id"];
		  $_SESSION['donors_id'] = $donors_id;
		  header("location: phome.php");
		}
		else
		{
		  $errormessage = "Invalid Credentials!";
		header("location: partnerlogin.php?message=".$errormessage."");
		}


?>

