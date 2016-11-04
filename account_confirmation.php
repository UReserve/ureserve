<!DOCTYPE html>
<html>
<head>
	<title>UReserve | Account Confirmation</title>
	<meta charset="UTF-8">
	<!-- will get rid of after AJAX, but returns to home page -->
	<!-- <meta http-equiv="refresh" content="2;url=index.php">  -->
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	 <!-- Facebook Metadata -->
    <meta property="og:image" content=""/>
    <meta property="og:title" content="" />
    <meta property="og:url" content="h" />
    <meta property="og:description" content="UReserve | Reserve rooms online for the University of Rochester" />
    <meta property="og:site_name" content="" />
    

    <!-- styles for page -->
	<style>
		body {
			background-color: #00AADD;
		}

		.large {
			color: #fff;
			font-size: 5em;
			font-family: 'Quicksand', sans-serif;
			margin-top: 3%;
			margin-bottom: 0;
		}
		
	</style>


</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 login-content offset">

				

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
						$rows = $object->insertUserData($firstName, $lastName, $email, $password, $confirmPassword); //will display success or failure message

					}
				}

				?>

			</div>
		</div>
	</div>


	

</body>
</html>