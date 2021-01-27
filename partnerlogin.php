<html>
	<head>
		<style>
	body
{
	background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(img/peep.jpeg);
	height:100vh;
	background-position:center;
	background-size:cover;
	background-attachment:fixed;
	
}
form 
{
	align: center;
}
</style>
	<?php
		if(!empty($_GET['message'])) {
		$message = $_GET['message'];
		}
		else{
			$message = '';
		}
	?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<form method='post' action='p_login.php'>
		<table align="center">
		<br>
			
			<br>
			
			<br>
			
			<br>
			
			<br>
				<br><tr>
					<td><font color="blue"><?php echo $message;?></font></td>
				</tr>
				<tr>
					<td><font color="red">Company Name:</td>
					<td><input type='text' name='companyname'/></td>
				</tr>
				<tr>
					<td><font color="red">Password:</td>
					<td><input type='password' name='password'/></td>
				</tr>
			
				<tr>
					<td>
						<a href="pregister.php">sign up</a>
					</td>
				
					<td>
						<br><button type='submit' name= 'submit'>Log In</button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
