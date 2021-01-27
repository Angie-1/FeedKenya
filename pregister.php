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
    <form method='post' action='registerpartners.php'>
		<table>
			<tr>
				<td><font color="red"><?php echo $message;?></font></td>
			</tr>
			<tr>
				<td>Full Name:</td>
				<td><input type='text' name='fullname' required="required" /></td>
			</tr>
            <tr>
				<td>User Name:</td>
				<td><input type='text' name='username' required="required"/></td>
			</tr>
			<tr>
				<td>telephone:</td>
				<td><input type='text' name='telephone' required="required"/></td>
			</tr>
			<tr>
				<td>Amount:</td>
				<td><input type='text' name='amount' required="required"/></td>
			</tr>
			<tr>
				<td>company name:</td>
				<td><input type='text' name='companyname' required="required"/></td>
			</tr>
			<tr>
					<td>Email:</td>
					<td><input type='text' name='email' required="required"/></td>
				</tr>
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
					<br><button type='submit' name= 'submit'>Submit</button>
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>
