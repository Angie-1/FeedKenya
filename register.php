<?php
	include "conn/db_connect.php";
	
	if(!empty($_GET['message'])) {
    $message = $_GET['message'];
	
	}
	else{
		$message = '';
	}
?>
<html>
	<head>
		    <link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/mdb.min.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<form method='post' action='register_done.php'>
			<table>
				<tr>
					<td><font color="red"><?php echo $message;?></font></td>
				</tr>
				<tr>
					<td>Full Name:</td>
					<td><input type='text' name='fullname'/></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type='text' name='username'/></td>
				</tr>

				<tr>
					<td>Email:</td>
					<td><input type='text' name='email' required="required"/></td>
				</tr>
				<tr>
					<td>ID Number:</td>
					<td><input type='text' name='idnumber' required="required"/></td>
				</tr>
				
				</tr>

				<tr>
					<td>AMOUNT:</td>
					<td><input type='text' name='amount'/></td>
				</tr>

				<tr>
				<td>Phone Number:</td>
				<td><input type='text' name='phonenumber'/></td>
			</tr>

				<tr>
					<td>Password:</td>
					<td><input type='password' name='password' id='password'/></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type='password' name='confirm_password' id='confirm_password'/></td>
				</tr>
				
				<tr>
					<td>
						<button type='submit' name= 'submit'>Submit</button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
