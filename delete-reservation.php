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

		$roomID = $_REQUEST["r"];
		$day = $_REQUEST["d"];
		$user = $_COOKIE["user"];
		$user = (string)$user;

		//run method from PDO object
		$object->unreserveRoom($roomID, $day, $user);

	
	}

?>
