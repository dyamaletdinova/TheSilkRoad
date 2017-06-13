<?php 
/**
* used in contact form
*/

class Email {

	//data for the fields
	private $firstName;
	private $lastName;
	private $sentTo = "majestiquedi@mail.ru"; 
	private $sentFrom;
	private $phone;
	private $reason;
	private $other;
	private $radio_btn;
	private $subject;
	private $message;

	/*
	* method that sets the first name
	*/
	public function setFirstName ($inFirstName){
		$this->firstName = $inFirstName;
	}
		public function setLastName ($inLastName){
		$this->lastName = $inLastName;
	}
	/*
	* method that gets the first name
	*/
	public function getFirstName (){
		return $this->firstName;
	}
		public function getLastName (){
		return $this->lastName;
	}

	//set and get for the ful name of the user
	/*
	* method that sets the full name
	*/
	public function setFullName($inFirstName, $inLastName)
	{
		$this->firstName = $inFirstName;
		$this->lastName = $inLastName;	
	}
	/*
	* method that gets the full name
	*/
	public function getFullName()
	{
		return $this->firstName . " " . $this->lastName;	
	}
	//getter and setter for sentTo
	/*
	* method that sets sent to email address
	* not used in this program
	*/
	public function setSentTo ($inEmail)
	{
		$this->sentTo = $inEmail;
	}
	/*
	* method that gets sent to email address
	*/
	public function getSentTo (){
		return $this->sentTo;
	}

	/*
	* method that sets phone number
	*/
	public function setPhone ($inPhone)
	{
		$this->phone = $inPhone;
	}
	/*
	* method that gets phone number
	*/
	public function getPhone (){
		return $this->phone;
	}


	//getter and setter for sentFrom
	/*
	* method that sets the sent From email address
	*/
	public function setSentFrom ($inEmail)
	{
		$this->sentFrom = $inEmail;
	}
	/*
	* method that gets the sent From email address
	*/
	public function getSentFrom ()
	{
		return $this->sentFrom;
	}

	//getter and setter for reason
	/*
	* method that sets the reason for contacting
	*/
	public function setReason ($inReason)
	{
		$this->reason = $inReason;
	}
	/*
	* method that gets the reason for contacting
	*/
	public function getReason ()
	{
		return $this->reason;
	}

	//getter and setter for Other
	/*
	* method that sets the other preferencies of the user
	*/
	public function setOther ($inOther)
	{
		$this->other = $inOther;
	}
	/*
	* method that gets the other preferencies of the user
	*/
	public function getOther ()
	{
		return $this->other;
	}

	//getter and setter for contactMethod
	/*
	* method that sets the prefered contact method
	*/
	public function setContactMethod ($inRadio_btn)
	{
		$this->radio_btn = $inRadio_btn;
	}

	/*
	* method that gets the prefered contact method
	*/
	public function getContactMethod ()
	{
		return $this->radio_btn;
	}

	//getter and setter for subject
	public function setSubject ($inSubject)
	{
		$this->subject = $inSubject;
	}

	public function getSubject ()
	{
		return $this->subject;
	}


	//getter and setter for message
	public function setMessage ($inMessage)
	{
		$this->message = $inMessage;
	}

	public function getMessage ()
	{
		return $this->message;
	}

	/*
	* method that sends email to the owner
	*/
	public function sendMail()
	{
		$checkbox_btn = implode(', ', $_POST['checkbox']);
		$date = date("n/d/Y H:m:s");
		//create a user friendly message to sent to the owner email
		$message = "Reason: ".$_POST["reason"]."\n";
		$message .= "Customer Name: ".$_POST["firstName"]. " ". $_POST["lastName"]."\n";
		$message .= "Customer Email: ".$_POST["email"]."\n";
		$message .= "Customer Phone: ".$_POST["phone"]."\n";
		$message .= "Prefered Contact Method: ".$_POST["options"]."\n";
		$message .= "Other Options: ".$checkbox_btn."\n";
		$message .= "Date: ".$date."\n";
		//WRAP THE MESSAGE
		$messageWraped = wordwrap($message,100,"\n");
		return mail ("majestiquedi@mail.ru", $_POST["reason"], $messageWraped);
	}//end sendMail()

	/*
	* Method to get registration date and time
	*/
	public function setRegistrationDate(){

		$this->displayDate = mktime(0,0,0);//using date() create mkttime stamp
	}

	/*
	* Method to get the display date
	*/
	public function getRegistrationDate(){
		global $displayDate;//tells function to use global variable
		return date("n/d/Y", $this->displayDate);//using date() display 09/24/2015			
	}
}
?> 