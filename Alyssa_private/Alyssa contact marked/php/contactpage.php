<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<link rel="stylesheet" href="../css/contactstyle.css">
</head>
<body>
	<div id="Heading">
		<h1>Secret Mission: Test Two</h1>
		<hr>
	</div>
	<div id="Confirmation_Message">
		<h2>Information Received!</h2>
	</div>
		<img src="../img/secret.jpg" width="200" alt="Secret Mission Image">
	<div id="PHPoutput">
		<?php   
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$tel_number = $_POST['tel_number'];
		$password = $_POST['password'];
		$longer_text = $_POST['longer_text'];
		$animal = $_POST['animal'];
		$Hogwarts_House = $_POST['Hogwarts_House'];
		$first_name = ucfirst(strtolower($first_name));
		$last_name = ucfirst(strtolower($last_name));
		echo "<h3>Thank you <span>$first_name $last_name</span> for submitting your information. We will contact you soon at $tel_number to discuss $longer_text.</h3>";
		echo "<span>Review your information:</span>
		<br>First Name: $first_name
		<br>Last Name: $last_name
		<br>Phone Number: $tel_number
		<br>Password: $password
		<br>You said you prefer: $animal
		<br>Your Hogwarts House: $Hogwarts_House
		";
		?> 
	
	</div>
	<footer>
	<hr>
	<h3>For IMT715 - Dev Tools - Assignment 2 - Nov 11, 2016</h3>
		<p>
			Completed by Alyssa King. For more of my work, please go to <a href="http://itsalyssak.blogspot.com" target="_blank">my blog</a>.
			</p>
	</footer>
</body>
</html>

		