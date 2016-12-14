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
		$room = $_REQUEST["r"];
		$building = $_REQUEST["b"];
		$oldDay = $_REQUEST["o"];
		$roomId = $_REQUEST["i"];

		$path = $object->getImageFile($roomId);

		generateModal($room, $building, $oldDay, $path);


	}

	function generateModal($room, $building, $oldDay, $path) {
		echo '<div class="row modal-reservation reservation">
					<div class="col-md-12 bkg">
					<div class="card">
					<img class="card-img-top" src="' . $path . '" alt="' . $room . '">
		        	<div class="card-block">
						<h4 class="card-title">' . $room . '</h4>
						<p>Building: ' . $building . '</p>
						<div class="input-group">
				            <select class="form-control" id="date">';
								selectoldDay($oldDay);
		echo		      	'</select>
			            	<span class="input-group-addon btn glyphicon glyphicon-calendar"></span>
			          	</div>
			        </div>
			   		</div>
					</div>
					</div>
			        <div class="row">
			          <button id="edit-confirm" type="button" class="btn btn-primary btn-lg btn-block">
			            update reservation <span class="glyphicon glyphicon-refresh"></span>
			          </button>
			        </div>';
	}

	function selectoldDay($day) {
		switch($day) {
			case 'Monday':
				echo '
				    <option value="monday" id="oldDay" selected>Monday</option>
				    <option value="tuesday">Tuesday</option>
				    <option value="wednesday">Wednesday</option>
				    <option value="thursday">Thursday</option>
				    <option value="friday">Friday</option>
				    <option value="saturday">Saturday</option>
				    <option value="sunday">Sunday</option>';
				break;
			case 'Tuesday':
				echo '
				    <option value="monday">Monday</option>
				    <option value="tuesday" id="oldDay" selected>Tuesday</option>
				    <option value="wednesday">Wednesday</option>
				    <option value="thursday">Thursday</option>
				    <option value="friday">Friday</option>
				    <option value="saturday">Saturday</option>
				    <option value="sunday">Sunday</option>';
				break;
			case 'Wednesday':
				echo '
				    <option value="monday">Monday</option>
				    <option value="tuesday">Tuesday</option>
				    <option value="wednesday" id="oldDay" selected>Wednesday</option>
				    <option value="thursday">Thursday</option>
				    <option value="friday">Friday</option>
				    <option value="saturday">Saturday</option>
				    <option value="sunday">Sunday</option>';
				break;
			case 'Thursday':
				echo '
				    <option value="monday">Monday</option>
				    <option value="tuesday">Tuesday</option>
				    <option value="wednesday">Wednesday</option>
				    <option value="thursday" id="oldDay" selected>Thursday</option>
				    <option value="friday">Friday</option>
				    <option value="saturday">Saturday</option>
				    <option value="sunday">Sunday</option>';
				break;
			case 'Friday':
				echo '
				    <option value="monday">Monday</option>
				    <option value="tuesday">Tuesday</option>
				    <option value="wednesday">Wednesday</option>
				    <option value="thursday">Thursday</option>
				    <option value="friday" id="oldDay" selected>Friday</option>
				    <option value="saturday">Saturday</option>
				    <option value="sunday">Sunday</option>';
				break;
			case 'Saturday':
				echo '
				    <option value="monday">Monday</option>
				    <option value="tuesday">Tuesday</option>
				    <option value="wednesday">Wednesday</option>
				    <option value="thursday">Thursday</option>
				    <option value="friday">Friday</option>
				    <option value="saturday" id="oldDay" selected>Saturday</option>
				    <option value="sunday">Sunday</option>';
				break;
			case 'Sunday':
				echo '
				    <option value="monday">Monday</option>
				    <option value="tuesday">Tuesday</option>
				    <option value="wednesday">Wednesday</option>
				    <option value="thursday">Thursday</option>
				    <option value="friday">Friday</option>
				    <option value="saturday">Saturday</option>
				    <option value="sunday" id="oldDay" selected>Sunday</option>';
				break;
		}
	}

?>