<?php
//include headers and side menus
  //include("Email.php5"); 
  include '../mainpage/header.htm';
  include '../mainpage/leftsidemenu.htm';
  include '../mainpage/rightsidemenu.htm';
?>

<section id="order"> <!-- start order -->
<h2><span>Contact us</span></h2>
<br>
<div class="contactusinfo">
<h3>Contact info</h3>
      <h4>US Office:</h4>
      <p><span>Address:</span> 321 Awesome Street, New York, NY 17022</p>
      <p><span>Email:</span> usoffice@companyname.com</p>
      <p><span>Phone:</span> +1 800 123 1234</p>
<br>    
    <h4>Tajikistan Office:</h4>
      <p><span>Address:</span> Rasulova str, 74, Dushanbe, Tajikistan 456895</p>
      <p><span>Email:</span> tjkoffice@companyname.com</p>
      <p><span>Phone:</span> +992 918 598 1234</p>
</div>
<br>

    <section id="contactform">
      <div class="form_details" >
        <form id="form" name="form" method="post" onsubmit="return(validate());" >
          <fieldset><legend class="instruct">Please fill out the form and we will come back to you within a week</legend>
          <p><label>Name:</label>
          <input type="text" name="firstname" class="text" > </p>       
         <br>
          <p><label>Email:</label>
          <input type="text" class="text" id="email" name="email" required></p>
          <br>
          <p><label>Subject:</label>      
          <input type="text" class="text" name="subject" > </p>  
          <br>
          <p><label>Message:</label>      
          <textarea name="message"></textarea></p>  
          </fieldset>
          <p><button class="btn" type="submit" name="submit">Send Message</button></p>  
        </form>
      </div>
    </section>

<br><br>
</section> <!-- end order -->
</section> <!-- end container -->

<?php
//footer
  include '../mainpage/footer.htm';
?>