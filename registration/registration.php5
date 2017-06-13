<?php
  include '../mainpage/header.htm';
  include '../mainpage/leftsidemenu.htm';
  //include '../mainpage/rightsidemenu.htm';
   // error_reporting(E_ALL);
    if( isset($_POST['submit']) )//Checks to see if the form data was entered and submitted to this page, if not then display the form
    {  
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname']; 
      $password = $_POST['password'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $message = "You have submitted the form. Now you can choose your trip!";
    }
    else 
    {
  // if the form has not seen by the user display the form so
  //the user can enter their data.
    $message = "Please enter your information on the form.";
   }

?>
<script src="modernizr-2.js"></script>

<link rel='stylesheet' property='stylesheet' type="text/css" href="../css/cssregistr.css" />

<?php
  if(!isset($_POST['submit']) ) //Checks to see if the form data was entered and submitted to this page, if not then display the form
  {
?>
<section id="order"> <!-- start order -->
  <h2><span>Registration</span></h2>
  <br>
  <div class="form_details" >
    <form id="registrform" method = "post" action="registration.php5">

      <fieldset><legend class="gender">Gender</legend>
        <!-- password fields are below -->
        <input class="radio" type = 'radio' Name ='gender' value= 'male'>Male
        <input class="radio" type = 'radio' Name ='gender' value= 'female'>Female
        <input class="radio" type = 'radio' Name ='gender' value= 'noReply'>No Reply
        <br>
      </fieldset> <!-- end passwords -->
      <br>
        
      <fieldset><legend class="legend">Personal Information</legend>
      <!-- text boxes are below -->
      <label for = "firstname" class = "label" >First Name:</label> 
        <input class = "input" type = "text" name = "firstname" id = "firstname"  />
        <br><br>
        <label for = "lastname" class = "label" >Last Name:</label> 
        <input class = "input" type = "text" name = "lastname" id = "lastname"  />
        <br><br>
        <label for = "phone" class = "label" >Phone:</label> 
        <input class = "input" type = "text" name = "phone" id = "phone" />
        <br><br>
        <label for = "address1" class = "label">Address:</label> 
        <input class = "input" type = "text" name = "address1" id = "address1"/>
        <br><br>
        <label for = "city" class = "label">City:</label> 
        <input class = "input" type = "text" name = "city" id = "city" />
      <br><br>
      <!-- selection list is below -->
          <label for = "State" class = "label" >State:</label>
            <select class = "option" name = "State" id = "State">
              <option value = "IA">IA</option> 
              <option value = "MD">MD</option> 
              <option value = "OH">OH</option>
              <option value = "LA">LA</option>
             </select>
       <br><br>
        <label class = "label" for = "zip">Zip:</label> 
        <input class = "input" type = "text" name = "zip" id = "zip" />
      <br><br>
        <label class = "label" for = "email">Email:</label> 
        <input class = "input" type = "email" name = "email" id = "email"  />
      <br><br>
        <label class = "label" for = "password">Password:</label> 
        <input class = "input" type = "password" name = "password" id = "password" />
        <br><br>
        <label class = "label">About you:</label>      
        <textarea name="message"></textarea>
      </fieldset>
      <br>

      <fieldset><legend class="specialoffers">Special Offers</legend>
      <!-- checkbox is below -->
        <label for= "offers" class = "offers ">Receive special offers via email</label>
        <input class = "checkbox" type = "checkbox" name = "offers" id = "offers" value = "offers" checked = "checked" />
        <br>
        <label for= "offers" class = "offers ">Join online mailing list</label>
        <input class = "checkbox" type = "checkbox" name = "maillist" id = "maillist" value = "maillist">
        <br>
        <label for= "offers" class = "offers ">Remove from contact lists</label>
        <input class = "checkbox" type = "checkbox" name = "contactlist" id = "contactlist" value = "contactlist">
        <br>
      </fieldset>
      <br>

      <fieldset ><legend class = "contactmethod">Preferred contact method</legend>     
        <input class="radio" type = 'radio' name="options" value="Do not need a reply">Do not contact
        <input class="radio" type = 'radio' name="options" value="Phone Call">Phone Call
        <input checked="checked" class="radio" type = 'radio'  value="Email" name="options">Email          
      </fieldset>
      <!-- input buttons are below -->
        <input  type = "submit" name="submit" value = "Register" class = "btn" /> 
      <!-- <input  type = "reset" name= "reset" value = "cancel" class = "btn" />-->
    </form>
  </div>
<?php //The form has been submitted, the data processed, display a confirmation message instead of the form
}
  else 
{
  ?>
  <section id="order"> <!-- start order -->
    <h1><span>Registration</span></h1>
      <br>
      <div class="container">
        <h1>Dear <?php echo $firstname. " " . $lastname; ?>,</h1>
        <h1><?php echo $message; ?></h1>
      </div>
  </section>  

<?php
  }//ends else branch and the if statement
?>
  </section> <!-- end order -->

  <br><br>
</section> <!-- end container -->

<?php
  include '../mainpage/footer.htm';
?>