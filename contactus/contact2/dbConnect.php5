<?php
	//include "Email.php5";//can be used to send the data of the error to the email
	//error_reporting(E_ALL);//this displays the detailed error

	//	This file contains the PHP coding to connect to the database.  
	//This file uses the mysqli or improved mysql commands and OOP concepts. 
	$hostname = "localhost";	//the name of the server where the database is located.
	$username = "wdv341";//the username on the database.  Usually listed on the cPanel listing of databases
	$database = "wdv341_events";//the name of the database.  
	$password = "school1";//the password of the account or database. 

	//Builds the connection object called $connection and selects the desired database.
	//$mysqli is the connection object created by this command.
	//$mysqli is a variable that contains an open doorway to a valid database. 
	$mysqli = new mysqli($hostname, $username, $password, $database);

	//Check to make sure you properly connected to the database.
	//Display a user friendly error message
	if ( $mysqli->connect_error )
	{
		$message = "OOPS, Failed to connect to MySQL: " . mysqli_connect_error();
		
		//This could be done using the emailer() or for more advanced sites an error management system.
		/*$emailObject = new Email();
		$emailObject->setSubject("Database connection Error");
		$emailObject->setMessage($message);
		$emailObject->sendMail();*/
		exit();
	}		  
	else {
		$message = "The message informs if the connection was established: ";
		$message .= "You are connected to a database!";
	}
?>