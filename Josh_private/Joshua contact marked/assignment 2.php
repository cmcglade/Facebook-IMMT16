
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="ss.css">
</head>

<body background="bg.jpg">
<div class="container">

<header>

<form id='register' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='name' >Full Name: </label>
<input type='text' name='name' id='name' maxlength="50" />
<label for='email' >Email Address:</label>
<input type='text' name='email' id='email' maxlength="50" />
 
<label for='username' >UserName:</label>
<input type='text' name='username' id='username' maxlength="50" />
 
<label for='password' >Password:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form><!--you lost some marks becuase you didn;t gather the fields assigned, also some bad styling on your photo
and you didn't compose the response message as assigned, response message was supposed to include
some of the variables-->

<?php

if (isset($_POST['name'])){
  $vara = $_POST['name'];
   $varb = $_POST['email'];
    $varc = $_POST['username'];
     $vard = $_POST['password'];

  echo "<h3>thanks", "Be in touch soon </h3>";

}
?>

   <h1 style="font-size:555%;"> Joshua Shivdarsan </h1>
</header>
  
<nav>
  <ul>
    <li><a href="https://www.facebook.com/joshua.shivdarsan">FACEBOOK</a></li>
    <li><a href="https://www.linkedin.com/in/joshua-shivdarsan-3b168ba6?trk=hp-identity-name">LINKEDIN</a></li>
    <li><a href="https://www.tumblr.com/blog/rjshivsarsan">TUMBLR</a></li>
  </ul>
</nav>

<img src="hs.jpg" style="width:304px; height:400px;">

<article>
  <h1>BACKGROUND</h1>
  <p>My name is Joshua Shivdarsan and I am currently in the interactive media management program at centennial college. I previously graduated from Centennial College as a Law Clerk, a field I have been working in for the past 2 years, real estate law to be exact. I have a professional background which includes extensive customer service in both the retail world as well as legal.</p>
  <p></p>
</article>

<footer>Jrshivdarsan@gmail.com</footer>

</div>

</body>
</html>







