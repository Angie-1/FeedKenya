
<?php
	include "conn/db_connect.php";
	session_start();

		$username = $_POST["username"];
		$password = $_POST["password"];

		$query = "select * from admin where username = '".$username."'";
		$result = $conn->query($query)->fetch_assoc();
		$stored_secret = $result["password"];
		if (password_verify($password, $stored_secret))
		{
		  echo 'OK';
		  $admin_id = $result["id"];
		  $_SESSION['admin_id'] = $admin_id;
		  header("location: ahome.php");
		}
		else
		{
		  $errormessage = "Invalid Credentials!";
		header("location: adminlogin.php?message=".$errormessage."");
		}


?>

