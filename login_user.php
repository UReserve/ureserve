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
			
				echo '<br/>
						<!-- NEW SEARCH -->
						<div class="row">
							<button id="new-search" type="button" class="header btn btn-primary btn-lg btn-block">
								<span class="glyphicon glyphicon-search"></span><br/>New Search
							</button>
						</div>
						<hr/>
						<!-- UPCOMING -->
						<div class="row">
							<h1 id="upcoming">Upcoming Reservations</h1>
						</div>
						<!-- RESERVATION CARDS -->
						<div class="row reservation">
						<div class="col-md-12 bkg">
							<div class="calendar col-md-3">
								<h2>
									<span class="month">NOV</span>
									<span class="date">09</span>
									<span class="time">8:15P</span>
								</h2>
							</div>
							<div class="info col-md-9">
								<h1>FUCK YYYYEAAAH BOI</h1>
								<p>UR a motherfucker</p>
							</div>
						</div>
						</div>
				';

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
