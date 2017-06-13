<?php
include 'dbConnect.php5';//connects to the database
		
		date_default_timezone_set('America/Chicago'); 
		//sets the name value pair to the the variables from the users input
        $firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$reason = $_POST['reason'];
		$radio_btn = $_POST['options'];
		$date_contact = date("Y-m-d");
		# get the current time in the proper format for a sql timestamp field
		$time_contact = date("G:i:s");
		$checkbox_btn = implode(', ', $_POST['checkbox']);
		 
		$sql = "INSERT INTO wdv341_contacts (firstName, lastName, email, phone, reason, options, checkbox, date_contact, time_contact ) 
		VALUES ('".$firstName."','".$lastName."','".$email."','".$phone."','".$reason."','".$radio_btn."','".$checkbox_btn."','".$date_contact."','".$time_contact."')";

	//Display the SQL command to see if it correctly formatted.
	//echo "<p>$sql</p>";

//Run the SQL command using the database you connected with
//Test to see if the query was successful or had a problem.
// NOTE The following code is good for testing but not Production applications.
if ($mysqli->query($sql) === TRUE)
{
	$messageSuccess = "Your record has been successfully added to the database";
}
else
{
	echo "<h1>You have encountered a problem.</h1>";
	$messageFail = "You have encountered a problem";
}
mysqli_close($mysqli);	//close the connection once this page is complete.
?>
