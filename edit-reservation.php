<?php

	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if ($object->getDB() === null) {
		echo "Connection to your web server failed.";
	} else {
		//get variables from get request
		$user = $_COOKIE["user"];
		$user = (string)$user;

		$roomId = $_REQUEST["r"];
		$oldDay = $_REQUEST["o"];
		$newDay = $_REQUEST["n"];

		$object->changeRoomDay($user, $roomId, $oldDay, $newDay);
		
	}

?>
