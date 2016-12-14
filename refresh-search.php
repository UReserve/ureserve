<?php

	//get variables from get request
	$building = $_POST['building'];
	$date = $_POST['date'];
	$attendance = $_POST['attendance'];

	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if ($object->getDB() === null) {
		echo "Connection to your web server failed.";
	} else {
		//search for the building
		if ($date === 'none') {
			$object->findAvailableRoom($building);
		} else {
			$object->findAvailableRoomByDay($building, $date);
		}
	}

?>
