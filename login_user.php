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
    <meta property="og:url" content="" />
    <meta property="og:description" content="UReserve | Reserve rooms online for the University of Rochester" />
    <meta property="og:site_name" content="" />
    
</head>
<body>

	<div class="container">
		<div class="col-lg-12">

			<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          		<h1 id="login-logo" class="text-center"><a href="index.html">UReserve</a></h1>
          		<p class="text-center white">Reserve rooms at the University of Rochester</p>
        	</div>
	        <div id="navbar" class="navbar-collapse collapse">
	         	<ul class="nav navbar-nav navbar-right">
		            <li><a href="#">Log out <span class="glyphicon glyphicon-off"></span></a></li>
	          	</ul>
	        </div><!--/.navbar-collapse -->

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
					$email = $_POST["email"];
					$password = $_POST["password"];

					//Display the user's information in table form

					//Display the headers of the table
					echo '<table class="table table-striped">
						<thead>
							<tr>
								<th>Firstname</th>
								<th>Lastname</th>
								<th>Email</th>
								<th>Password</th>
							</tr>
						</thead>
						<tbody>';

					$userAttr = array("firstName", "lastName", "email", "password");

					$numAttr = count($userAttr);

					$object->displayUserData($email, $password, $userAttr, $numAttr);

					echo "</tbody></table>";
				}
			}

			?>
			
			<script src="js/jquery-3.1.1.min.js"></script>
			<script src="js/pwtoggle.js"></script>

		</div>
	</div>

</body>
</html>