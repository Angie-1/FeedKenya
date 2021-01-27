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

	<p><b><em>The donees are registered here by the admin: </em></b></p>

    <p> <h2>Registration </h2> </p>

		<form method='post' action='aregister_done.php'>
			<table>
				<tr>
					<td><font color="red"><?php echo $message;?></font></td>
				</tr>
				<tr>
					<td>Family Name:</td>
					<td><input type='text' name='familyname'/></td>
				</tr>
				<tr>
					<td>Family Number:</td>
					<td><input type='text' name='familynumber'/></td>
				</tr>

				<tr>
					<td>Problem:</td>
					<td><input type='text' name='problem' required="required"/></td>
				</tr>
				<tr>
					<td>County:</td>
					<td><input type='text' name='county' required="required"/></td>
				</tr>
				
				<tr>
					<td>Amount Needed:</td>
					<td><input type='text' name='amountneeded'/></td>
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