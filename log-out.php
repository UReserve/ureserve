<!DOCTYPE html>
<?php
// set the expiration date to one hour ago
// $cookie_name = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

setcookie("user", "", time() - 3600, "/");

// echo 'I set the cookie';
?>
<html>
	<head>
		<!-- will get rid of after AJAX, but returns to home page -->
		<meta http-equiv="refresh" content="1;url=index.php"> 
		<meta charset="UTF-8">
		<!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	    
	    <!-- Bootstrap -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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

		<div class="container-fluid text-center">

			<div class="col-lg-12 text-center">
				<h2 class="large">Loading . . . </p>

				<img src="images/loading.gif">
			</div>
		</div>


	</body>
</html>