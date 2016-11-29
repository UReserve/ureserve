<?php

	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if( $object->getDB() === null ){
		echo "Connection to your web server failed.";
	}

	//else, connecting to the database was successful so continue stuff

	else {


		if($_SERVER["REQUEST_METHOD"] == "POST"){ //if form submitted successfully with POST
			$email = $_POST["email"];
			$password = $_POST["password"];
			

			$userAttr = array("firstName", "lastName", "email", "password");

			$numAttr = count($userAttr);

			$didLogin = $object->verifyLogin($email, $password, $userAttr, $numAttr);


			if ($didLogin){  //If the login was successful

				//set up the cookie
				$cookie_name = "user";
				$cookie_value = $email;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
				//echo sidebar for whatever reservations the user has made
				
			} else {

				echo 'could not login';

			}//end else didLogin

		}//end if POST was success sumbitted
	
	}//else

?>