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

		echo '<br/>
				<!-- NEW SEARCH -->
				<div class="row">
					<button id="new-search" type="button" class="header btn btn-primary btn-lg btn-block">
						<span class="glyphicon glyphicon-search"></span><br/>New Search
					</button>
				</div>

				<hr/>

				
				';

		$object->showReservations($user);
	}
	
?>