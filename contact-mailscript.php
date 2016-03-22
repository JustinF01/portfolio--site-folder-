<?php

$to='justin@designbiz.co.za';
$subject='New Message From Website';

$name=$_POST['Name'];
$email=$_POST['email'];
$comment=$_POST['comment'];


$message = <<<EMAIL

Name: $name
Email: $email
Message: $comment


EMAIL;
mail($to, $subject, $message, "From:".$email);

$thankYouContact = <<<HTML
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="website development services, web development, web design, graphic design, design portfolio, justin fester, design" />
    <meta name="description" content="The exclusive web and graphic design portfolio, Brought to you by Justin Fester and his team of designers." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Justin Fester|Designer|Developer</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Actor|Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css"> 
    
  </head>
    <body>
        <nav id="mainNav" class="clearfix">
              <div id="logoPlaceholder">
                    <a href="index.php">
                      	<img src="images/portfolio-logo.svg" alt="Eagle Eye Design Studio Logo" id="siteLogo">
                    </a>
              </div>
              <span class="title">Design<br>Studio</span>
              
              <div class="mobileNav">
                  <div class="hamburgerBar"></div>
                  <div class="hamburgerBar"></div>
                  <div class="hamburgerBar"></div>
              </div>
              
              <ul class="navLinks">
                <li class="navItem"><a href="index.html#services">SERVICES</a></li>
                <li class="navItem"><a href="index.html#about">ABOUT</a></li>
                <li class="navItem"><a href="index.html#portfolio">PORTFOLIO</a></li>
                <li class="navItem"><a href="index.html#contact">CONTACT</a></li>
                <li class="needsButton button"><a href="needsAnalysis.php">Needs Analysis</a></li>
              </ul>   
        </nav>
		<section class="thankYou" style="max-width: 1020px; margin: 0 auto; padding: 10%;">
            <h1>Thank you for your message.</h1>
            <p>I will contact you soon.</p>
            <a href="index.php">
                <button class="thankYouButton button" style="width: 100%; padding: 3%; border: none; border-radius: 10px; font-size: 1.125em; margin-top: 5%;">Back To Site</button>
            </a>
        </section>
    </body>
</html> 
HTML;

echo $thankYouContact;


?>