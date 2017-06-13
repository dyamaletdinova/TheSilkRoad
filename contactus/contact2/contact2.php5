<?php
include("Email.php5"); 
?>
<?php
include '../mainpage/header.htm';
include '../mainpage/leftsidemenu.htm';
include '../mainpage/rightsidemenu.htm'
?>
<section id="order"> <!-- start order -->
<h1><span>Contact us</span></h1>
<br>

    <section id="contactform">
        <div class="form_details" >
    <form id="purchases" action="">

<p>Password (optional). By providing a password, you will be offered discounts on future purchases.</p>

<fieldset><legend>Passwords</legend>

<!-- password fields are below -->
<label for = "password">Password</label> 
<input type = "password" name = "password" id = "password" size = "10"  maxlength = "10"/>

<label for = "password2">Confirm Password</label> 
<input type = "password" name = "password2" id = "password2" size = "10"  maxlength = "10"/>
</fieldset> <!-- end passwords -->


<fieldset>
<label for= "shipping">Check if billing and shipping address are the same</label>

<!-- first checkbox is below -->

  <input type = "checkbox" name = "shipping" id = "shipping" value = "shippinglist" checked = "checked" />

</fieldset> 

  
  <fieldset><legend>Title</legend>

<!-- selection list is below -->
    <select name = "title" id = "title">
    <option value = "no">(No title)</option> 
    <option value = "mr">Mr.</option> 
    <option value = "mrs">Mrs.</option>
    <option value = "ms">Ms.</option>
     </select>
  
  </fieldset>


<fieldset><legend>Personal Information</legend>

<!-- text boxes are below -->

<label for = "firstname">First Name</label> 
  <input type = "text" name = "firstname" id = "firstname" size="15" />
  <label for = "lastname">Last Name</label> 
  <input type = "text" name = "lastname" id = "lastname" size="20" />
  <label for = "phone">Phone</label> 
  <input type = "text" name = "phone" id = "phone" size="12" maxlength="12" />
  <label for = "address1">Address Line 1</label> 
  <input type = "text" name = "address1" id = "address1" size="20" />

  <label for = "address2">Address Line 2</label> 
  <input type = "text" name = "address2" id = "address2" size="20" />

  <label for = "city">City</label> 
  <input type = "text" name = "city" id = "city" size="20" />

  <label for = "state">State</label> 
  <input type = "text" name = "state" id = "state" size="2" maxlength="2" />

  <label for = "zip">Zip</label> 
  <input type = "text" name = "zip" id = "zip" size="5" maxlength="5" />

  <label for = "email">Email</label> 
  <input type = "email" name = "email" id = "email" size = "40" maxlength="40" />
  </fieldset>

</fieldset>




<!-- second checkbox is below -->
<label for="offers"> I would like to receive special offers via email.</label>
<input type = "checkbox" name = "offers" id = "shipping" value = "offers" checked = "checked" />


<!-- input buttons are below -->

<input type = "submit" value = "Send Information" class = "button" /> 
<input type = "reset" value = "cancel" class = "button" />


</form>


    </section>




<br><br>
</section> <!-- end order -->
</section> <!-- end container -->

<?php
include '../mainpage/footer.htm';
?>