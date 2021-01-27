
<?php
	include "conn/db_connect.php";
	session_start();
	
		$fullname = $_POST["fullname"];
		$username = $_POST["username"];
		$telephone = $_POST["telephone"];
		$email = $_POST["email"];
		$companyname = $_POST["companyname"];
		
		$passwordb = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		$password = password_hash($passwordb, PASSWORD_BCRYPT);
		if($fullname!=''&& $username!=''&& $telephone!=''&& $email!=''&& $companyname!=''&& $password!=''&& $confirm_password!='')
		{
			if($passwordb == $confirm_password)
			{
				$passwordlength = strlen($passwordb);
			
				if($passwordlength >= '8')
				{
					if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $passwordb) ) 
					{
						$sql = "INSERT INTO donors (fullname, username, telephone, email, companyname, password) VALUES ('".$fullname."', '".$username."', '".$telephone."', '".$email."', '".$companyname."', '".$password."')";
						$conn->query($sql);
						$message = 'You have successfully signed up. Now Log in:';
						header("location: partners.php?message=".$message."");
					}
					else
					{
						$message = 'Make sure your password has both characters and numbers';
						header("location: pregister.php?message=".$message."");
					}
				}
				else
				{
					$message = 'Make sure your password length is equal or greater than 8';
					header("location: pregister.php?message=".$message."");
				}
			}
			else{
				$message = 'Kindly Ensure the password matches';
				header("location: pregister.php?message=".$message."");
			}
		}
		else
		{
			$message = ' Kindly fill in all the fields';
			header("location: pregister.php?message=".$message."");
		}
?>