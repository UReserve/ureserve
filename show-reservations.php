<!DOCTYPE html>
<head>
</head>

<body>

<?php


	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if( $object->getDB() === null ){
		echo "Connection to your web server failed.";
	}
	else{
		
		echo '<br><div class="row">
					<button id="new-search" type="button" class="header btn btn-primary btn-lg btn-block">
						<span class="glyphicon glyphicon-search"></span><br/>New Search
					</button>
				</div><hr/>';


		$email = $_REQUEST["e"];
		
		$object->showReservations($email);

		
	}



?>

		

</body>
</html>