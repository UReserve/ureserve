<?php

	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if( $object->getDB() === null ){
		echo "Connection to your web server failed.";
	}

	//Else, connecting to the database was successful so continue stuff

	else {


		if($_SERVER["REQUEST_METHOD"] == "POST"){ //if form submitted successfully with POST
			$email = $_POST["email"];
			$password = $_POST["password"];
			

			$userAttr = array("firstName", "lastName", "email", "password");

			$numAttr = count($userAttr);

			$didLogin = $object->verifyLogin($email, $password, $userAttr, $numAttr);


			if( $didLogin ){ //If the login was successful

			//set up the cookie
				$cookie_name = "user";
				$cookie_value = $email;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day		
			
			}//end if didLogin
			else{

				echo 'could not login';

				echo <<< EOT
				<script type="text/javascript">

				$(function() {
					alert("Invalid Password. Try again!");
				});
				</script>
EOT;
			}//end else didLogin



		}//end if POST was success sumbitted
	

	}//else



?>
