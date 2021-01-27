<?php
	include "conn/db_connect.php";
	session_start();
	
		$firstname = $_POST["firstname"];
		$secondname = $_POST["secondname"];
		$amount = $_POST["amount"];
		$phonenumber = $_POST["phonenumber"];
        $idnumber = $_POST["idnumber"];
        $needname = $_POST["needname"];
		
		if($firstname!='' && $secondname!=''&& $amount!=''&& $phonenumber!=''&& $idnumber!=''&& $needname!='')
					{
						$sql = "INSERT INTO donations (firstname, secondname, amount, phonenumber, idnumber, needname) VALUES ('".$firstname."', '".$secondname."', '".$amount."', '".$phonenumber."', '".$idnumber."', '".$needname."')";
						$conn->query($sql);
						$message = 'You have successfully pledged your amount. SEND your amount to paybill 558924';
						
					}
                    else
                    {
                        $message = ' Kindly fill in all the fields';
                        header("location: donate.php?message=".$message."");
                    }
?>
<html>
<head>
</head>
<body>
<p align= 'right' colspan = '2'><a href="logout.php">Logout</a></p><br>

<p><h3>You have successfully pledged your amount. SEND your amount to paybill 558924 </h3></p><br>

<p> <h4>You can also donate with the following bank account: <br>
    KCB account Number 7896752348 <br>
    Account Name  KCB sarit center <br></h4></p>

    <br>
    <br>

<br><b>For more information contact the Admin on : </b><br>
       PHONE NUMBER: 0707690637 <br>
       EMAIL: <a href="http://www.gmail.com">fashitum56@gmail.com</a>

<br>
<p><em> Please remember to logout </em></p>

</body>
</html>