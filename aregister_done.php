
<?php
	include "conn/db_connect.php";
	session_start();
	
		$familyname = $_POST["familyname"];
		$familynumber = $_POST["familynumber"];
		$problem = $_POST["problem"];
		$county = $_POST["county"];
		$amountneeded = $_POST["amountneeded"];
		
		if($familyname!='' && $familynumber!=''&& $problem!=''&& $county!=''&& $amountneeded!='')
					{
						$sql = "INSERT INTO donee (familyname, familynumber, problem, county, amountneeded) VALUES ('".$familyname."', '".$familynumber."', '".$problem."', '".$county."', '".$amountneeded."')";
						$conn->query($sql);
						$message = 'You have successfully added the donees.';
						
					}
		else
		{
			$message = ' Kindly fill in all the fields';
			header("location: ahome.php?message=".$message."");
		}
?>
<html>
<head>
</head>
<body>
<p align= 'right' colspan = '2'><a href="logout.php">Logout</a></p><br>

<p><h3>Donee has been successfully added </h3></p>

<p> Please logout </p>

</body>
</html>