<!DOCTYPE html>
<html>
<head>
	<title> Contact me! </title>
	</style> -->
	<link rel="stylesheet" href="stylesheet.css">
	</head>

	<!--good work, you lost a few marks for the order of the fields
	on the form, unusual to put username at the top before first and last
	name.-->

	<body>
	<h1>Contact me!</h1>
	<h2>I am here to help you with your interactive media management questions.
</h2>
	<p> <a href= "http://www.facebook.com/fredneumann" target="_blank"> Check my Facebook profile </a>
	</p>
	<p> <a href= "http://fredneumann.blogspot.ca" target="_blank"> You can also visit my blog! </a>
	</p>
	<a><img src="14291721_10153738024022181_7029266321134465357_n.jpg" width="300" alt="Fred's picture"/> 
	</a>
		<h3>
	AND...
</h3>
		Extra! Extra!
	<hr>
	<div > "It's the way<br> how you face life<br> that will set<br> how life will face you."</div>
	<p> I am trying to get to know more about you guys, who visit my page. So I decided to create a "Fred Neumann's Premium Users Central". When you signup, you can be the winner of an original song composed by me to you!The draw will be on December 25th, 2016! You don't wanna miss that!</p>
	

<form method="post">
            	<label for="userName">User Name: <input class="input" type="text" name="userName" id="userName" placeholder="User Name"></label>
            	<p><label for="firstName">First Name: <input class="input" type="text" name="firstName" id="firstName" placeholder="First Name"/></label></p>
            	<label for="lastName">Last Name: <input class="input" type="text" name="lastName" id="lastName" placeholder="Last Name" /></label>		
				<p><label for="telephone">Telephone: <input class="input" type="text" name="telephone" id="telephone" placeholder="telephone"></label></p>
				<p><label for="subject">Subject: <input class="input" type="text" name="subject" id="subject" placeholder="Subject"></label></p>

            	<p><label for="text">Message: </label><br>
            	<textarea class="input" name="text" id="text" placeholder="Leave your message"></textarea></p>
		<p class="submit">
           		 <p><label for="password">Password: <input class="input" type="password" name="password" id="password" placeholder="Your Password"/></label></p>
            	<input type="submit" value="Submit">
		
	</form>



<?php

if (!empty($_POST['userName'])) {
$userName = $_POST['userName'];

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
$subject = $_POST['subject'];
$text = $_POST['text'];
echo "<h3>Thank You ", $firstName, " ", $lastName, " for submitting your information. We will contact you soon at ", $telephone, " to discuss ", $subject, ".";
}
?>
</body>
</html>
