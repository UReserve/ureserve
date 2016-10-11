<!DOCTYPE html>
<html>
<head>
	<title>UReserve :: Account Confirmation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/styles.css">

	 <!-- Facebook Metadata -->
    <meta property="og:image" content=""/>
    <meta property="og:title" content="" />
    <meta property="og:url" content="h" />
    <meta property="og:description" content="UReserve | Reserve rooms online for the University of Rochester" />
    <meta property="og:site_name" content="" />

    <style>
    
	</style>
    
</head>
<body>
	<h1 id="login-logo" class="text-center">UReserve</h1>
					<p class="text-center">Reserve rooms at the University of Rochester</p>

					<hr class="intro-divider">



	<?php

	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if( $object->getDB() === null ){
		echo "Connection to your web server failed.";
	}

	//Else, continue to show the user their account information

	else{


		if($_SERVER["REQUEST_METHOD"] == "POST"){ //if form submitted successfully with POST
			$firstName = $_POST["firstName"];
			$lastName = $_POST["lastName"];
			$email = $_POST["email"];
			$password = $_POST["password"];


			//If insert was successful display it to the page! Otherwise say no

			$rows = $object->insertUserData($firstName, $lastName, $email, $password);

			if ($rows != -1)
				echo "Your account was successfully created!";
			else
				echo "Your account failed to be created. Try entering a unique email address.";
		}
	

	}


	?>
</body>
</html>