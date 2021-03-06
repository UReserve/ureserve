<!DOCTYPE html>
<head>




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


	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if( $object->getDB() === null ){
		echo "Connection to your web server failed.";
	}
	else{
		echo "connection success";


		

		//$object->findAvailableRoom("Douglass");

		//$object->reserveRoom('jordan', 7, 'monday');
		//$object->showReservations("jordan");

		//$object->unreserveRoom(3, 'sunday', "jordan");

		$object->changeRoomDay('jordan', 7, 'monday', 'friday');
		

		//$object->showReservations("jordan");
		
	}



	



?>

		

</body>
</html>