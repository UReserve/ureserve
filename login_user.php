<!DOCTYPE html>
<head>



  	 <!-- will get rid of after AJAX, but returns to home page -->
	<meta http-equiv="refresh" content="2;url=index.php"> 

		<!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	    
	    <!-- Boostrap -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	    <!-- jQuery -->
    	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<?php




// echo <<< EOT
// 				<script type="text/javascript">

// 				$(function() {
// 					alert("success");
// 				});

// 			 	</script>  

// EOT;

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

				echo 'Login Successful';

				echo <<< EOT
				<script type="text/javascript">

				$(function() {
					alert("Login Successful! Redirecting to home page.");
				});
				</script>
EOT;
				
			
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

		<div class="container-fluid text-center">

					<div class="col-lg-12 text-center">
						<h2 class="large">Loading . . . </p>

						<img src="images/loading.gif">
					</div>
		</div>

</body>
</html>