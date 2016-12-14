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
		$day = $_POST['day'];
		generateModal($roomId, $day);
		
	}



	function generateModal($day) {
		echo '<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">×</button>
		        	<h4><span class="glyphicon glyphicon-trash"></span> Are you sure you want to delete your reservation?</h4>
		        </div>
		        <div class="modal-body">
		        	<div class="btn-group btn-group-justified" role="group" aria-label="...">
		        		<a class="btn btn-default" id="delete-confirm" value="' . $day . '">Yes</a>
		        		<a class="btn btn-danger" data-dismiss="modal">No</a>
		        	</div>
		        </div>';
	}

?>