<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css"/>
    <!--great work Ralph, you lost a few marks becuase your footer is floating up over your form,
    needs a little styling tweak-->
</head>
<body>
    <div id="wrapper">
        <div id="container">
        <h1>Hi Let's Keep in touch!</h1>
        <!-- Contact Form -->
        <form method="POST">
                    <label>First Name: </label><br />
                    <input class="input" type="text" name="firstname" placeholder="Enter First name" required/><br /><br />

                    <label>Last Name: </label><br />
                    <input class="input" type="text" name="lastname" placeholder="Enter Last name"  required/><br /><br />

                    <label>Phone: </label><br />
                    <input class="input" type="number" name="phone" placeholder="Enter Phone Number" min="10" required/><br /><br />

                    <label>Password: </label><br />
                    <input class="input" type="password" name="password" placeholder="Enter Password" required/><br /><br />

                    <label>Subject: </label><br />
                    <input class="input" type="text" name="subject" placeholder="Enter Subject of Message" required/><br /><br />

                    <label>Message: </label><br />
                    <textarea class="input" name="message" placeholder="Please leave us your message" rows="6" required></textarea><br /><br />

                    <input class="submit" type="submit" name="submit" value="Send"><br /><br />
        </form>
        <!-- Start of PHP Code Block -->
        <?php
            if(isset($_POST['firstname'])) // check if firstname has value
            {
                $firstname = $_POST['firstname']; //from the input name="firstname"
                $lastname = $_POST['lastname']; //from the input name="lastname"
                $phone = $_POST['phone']; //from the input name="phone"
                $password = $_POST['password']; //from the input name="password"
                $subject = $_POST['subject']; //from the input name="subject"
                $message = $_POST['message']; //from the input name="message"
                echo "<br/>Thank You ", $firstname, " ", $lastname, " for submitting your information. We will contact you soon at ", $phone, " to discuss ", $subject; //return the message
            }
        ?>
        </div>
        <!-- Footer Navigation -->
        <footer>
            <!-- Navigation -->
            <div id="nav">
                <ul>
                    <li><a href="about.html">HOME</a></li>
                    <li><a href="https://uxrtigno.blogspot.ca/">BLOG</a></li>
                    <li><a href="contactform.php">CONTACT</a></li>
                </ul>
            <!-- Copyright  -->    
            </div>
            <div id="copyright">
                <p>&copy; Copyright 2016 All Rights Reserved</p>
            </div>
        </footer>
    </div>
    
</body>
</html>