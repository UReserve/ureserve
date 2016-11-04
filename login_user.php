<!DOCTYPE html>
<head>

<!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<?php




echo <<< EOT
				<script type="text/javascript">

				$(function() {
					alert("success");
				});

			 	</script>  

EOT;

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

			echo <<< EOT
				<script type="text/javascript">

				$(function() {
					alert("posted log in info");
				});
				</script>
EOT;

			if( $didLogin ){ //If the login was successful

			//set up the cookie
				$cookie_name = "user";
				$cookie_value = $email;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

				// 	if(isset($_COOKIE['remember_user'])){//we set it up
				// 		echo '<script type="text/javascript">

				// $(function() {
				// 	alert("we set up your cookie");
				// });
				// </script>';

				// 	}else{ //the user must have cookies disabled...

				// 	}
			
			}//end if didLogin
			else{

				echo 'could not login';
			}//end else didLogin



		}//end if POST was success sumbitted
	

	}//else



?>

</body>
</html>