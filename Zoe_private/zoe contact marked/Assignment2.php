<!DOCTYPE html>
<html lang="en">
	<!-- Assignment 2 - Contact Page - Zoë Adesina -->
	<head>
		<meta charset="utf-8">
		<title> Zoë Adesina | Book an Appointment </title>
		<link rel="stylesheet" href="Assignment2.css">
	</head>

	<body id="Page">
		<div> <img id='ProfilePicture' src="ProfilePic.jpg" alt="Picture of Zoë Adesina"> </div>
			<h1 id="PageHeading"> Book an Appointment </h1>

	<hr>

		<div>
			<p id="IntroParagraph"> “Be genuinely interested in everyone you meet and everyone you meet will be genuinely interested in you.”
				<br>
			 - Rasheed Ogunlaru </p>
		</div>

	<br>

		<div class="PageSpacing">
			<h2 class="BodyHeading"> Preparing for a meeting </h2>
			<p> If you would like to set up a meeting with Zoë, please ensure that you do the following before the proposed meeting date: </p>
			<ol>
				<li> book an appointment using the form below </li>
				<li> take note of the services you require of Zoë </li>
				<li> follow Zoë on Twitter </li>
			</ol>
			<div id="CheckPortfolio">
				<h3> If you would like to take a look at Zoë's work before booking an appointment, please visit her portfolio at <a id="Link" href="https://memyselfandmediaweb.wordpress.com/" target="_blank"> <span id="LinkStyling"> Me, Myself & Media </span></a> </h3>
			</div>
		</div>

	<hr>
		<div id="Form">
		<form action="#" method='POST' class="PageSpacing">
			<div> <label> First Name: <input type="text" name="firstName" class="FormFields"/> </label> </div>
			<br>
			<div> <label> Last Name: <input type="text" name="lastName" class="FormFields"/> </label> </div>
			<br>
			<div> <label> E-mail: <input type="text" name="email" class="FormFields"> </label> </div>
			<br>
			<div> <label> Phone Number: <input type="number" min="0" max="9999999999" name="phoneNumber" class="FormFields"/> </label> </div>
			<br>
			<!-- This date field is not supported by every browser -->
			<div> <label> Appointment Date: <input type="date" max="2017-12-31" name="appointmentDate" class="FormFields"/> </label> </div>
			<br>
			<!-- This time field is not supported by every browser -->
			<div> <label> Appointment Time: <input type="time" name="appointmentTime" class="FormFields"/> </label> </div>
			<br>
			<div> <label> What would you like to discuss at our meeting? <textarea class="FormFields"> </textarea> </label> </div>
			<br>
			<div> <label> Password <input type="password" name="passWord" class="FormFields"/> </label> </div>
			<br>
			<button type="submit" id="SubmitButton"> Submit </button>
		</form>
		</div>
		
		<div class="PageSpacing">
			<?php
			$var1 = $_POST['firstName'];
			$var2 = $_POST['lastName'];
			$var3 = $_POST ['email'];
			$var4 = $_POST['phoneNumber'];
			$var5 = $_POST ['appointmentDate'];
			$var6 = $_POST ['appointmentTime'];
			echo "
			<h3> Thank you $var1 $var2 for submitting your information. We will contact you shortly at $var3 or $var4 on to inform you whether there is an available appointment for you on $var5 at $var6. </h3>";
			?>
		</div>
	</body>

</html>