<?php

	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if( $object->getDB() === null ){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<h1>Uh oh...</h1>
				<p>Connection to your web server failed.</p>
				<p><button type='button' class='btn btn-danger'><a href='index.html'>Try again</a></button></p>
			</div>";
		}
				
	//Else, continue to show the user their account information
	else{
		if($_SERVER["REQUEST_METHOD"] == "POST"){ //attempt to submit form with POST
			$firstName = $_POST["firstName"];
			$lastName = $_POST["lastName"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirmPassword = $_POST["confirmPassword"];
			$rows = $object->insertUserData($firstName, $lastName, $email, $password, $confirmPassword); //will display success or failure message but doesn't...
		}
	}

?>
