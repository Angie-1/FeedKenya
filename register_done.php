
<?php
	include "conn/db_connect.php";
	session_start();
	
		$fullname = $_POST["fullname"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$idnumber = $_POST["idnumber"];
		
		$phonenumber = $_POST["phonenumber"];
		$passwordb = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		$status = '1';
		$password = password_hash($passwordb, PASSWORD_BCRYPT);
		if($fullname!='' && $username!=''&& $email!=''&& $password!=''&& $confirm_password!='')
		{
			if($passwordb == $confirm_password)
			{
				$passwordlength = strlen($passwordb);
			
				if($passwordlength >= '8')
				{
					if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $passwordb) ) 
					{
						$sql = "INSERT INTO users (fullname, username, password, email, phonenumber, idnumber) VALUES ('".$fullname."', '".$username."', '".$password."', '".$email."', '".$phonenumber."', '".$idnumber."')";
						$conn->query($sql);
						$message = 'You have successfully signed up. Now Log in:';
						header("location: index.php?message=".$message."");
					}
					else
					{
						$message = 'Make sure your password has both characters and numbers';
						header("location: register.php?message=".$message."");
					}
				}
				else
				{
					$message = 'Make sure your password length is equal or greater than 8';
					header("location: register.php?message=".$message."");
				}
			}
			else{
				$message = 'Kindly Ensure the password matches';
				header("location: register.php?message=".$message."");
			}
		}
		else
		{
			$message = ' Kindly fill in all the fields';
			header("location: register.php?message=".$message."");
		}
?>