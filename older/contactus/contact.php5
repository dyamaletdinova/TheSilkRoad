<?php
include("Email.php5"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Phoenix | Contact us</title>
<script src="../modernizr-2.js"></script>
<link rel="stylesheet" href="../foodstyles.css" type="text/css" />
</head>
<body>

<section id="container">

<header>
    <p><img src="../images/logo.jpg" alt="Travel to Asia"/></p>
  </header>

  <div id = "wrapper">
  <nav>
    <ul>
      <li><a href = "../index.htm">Home</a></li>
      <li><a href = "#">Photo Galery</a></li>
      <li><a href = "#">Destinations</a></li>
      <li><a href = "#">Prices</a></li>
      <li><a href = "contactus/contact.php5">Contact Us</a></li>
    </ul>
  </nav>
  </div>

<div id="section_header">
  <div class="container">
    <h2><span>Contact Us</span></h2>
  </div>
</div>
<section id="info">
<div class="contact">
  <div class="container">
      <h3>Contact info</h3>
      <p><span>Address:</span> 321 Awesome Street, New York, NY 17022</p>
      <p><span>Email:</span> info@companyname.com</p>
      <p><span>Phone:</span> +1 800 123 1234</p>
    </section>

    <section id="order2">
      <form id="form" name="form" method="post" onsubmit="return(validate());" action="processContactForm.php5">
        <div class="form_details" >
          <p><label>Name: </label>
          <input type="text" name="firstname" class="text" > </p>       
         
          <p><label>Email: </label>
          <input type="text" class="text" id="email" name="email" required></p>

          <p><label>Subject:</label>       
          <input type="text" class="text" name="subject" > </p>  

          <p><label>Message:</label>      
          <textarea name="message"></textarea></p>  

          <p><button class="btn" type="submit">Send Message</button></p>  

        </div>
      </form>
    </div>
    </section>
  </div>
</div>

<footer>
  <p><span>Planet Hope Office Location:</span><br /><br />
  123 Main Street &bull; Des Moines, IA 123456<br />
   <li><a href = "#">Colonization plan</a></li>
   <li><a href = "#">Photo Galery</a></li>
   <li><a href = "#">Our research</a></li>
   <li><a href = "#">Contact Us</a></li></p>
</footer><!-- end footer section -->
 <div class="copy">Copyright &copy; wdv101.tjkdev.com | Design by Diana Yamaletdinova</div>
</body>
</html>