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
	<p align= 'right' colspan = '2'><a href="logout.php">Logout</a></p><br>


<p> <h4> Enter the following details for your donation </h4> </p>

		<form method='post' action='donate_done.php'>
			<table>
				<tr>
					<td><font color="red"><?php echo $message;?></font></td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td><input type='text' name='firstname' required="required"/></td>
				</tr>
				<tr>
					<td>Second Name:</td>
					<td><input type='text' name='secondname' required="required"/></td>
				</tr>

				<tr>
					<td>Amount:</td>
					<td><input type='text' name='amount' required="required"/></td>
				</tr>
				<tr>
					<td>phone number:</td>
					<td><input type='text' name='phonenumber' required="required"/></td>
				</tr>
				
				<tr>
					<td>id number:</td>
					<td><input type='text' name='idnumber' required="required"/></td>
				</tr>

                <tr>
					<td>Need name:</td>
					<td><input type='text' name='needname' required="required"/></td>
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