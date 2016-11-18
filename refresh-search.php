<?php

	//get variables from get request
	$building = $_POST['building'];
	$date = $_POST['date'];
	$startTime = $_POST['startTime'];
	$endTime = $_POST['endTime'];
	$attendance = $_POST['attendance'];

	function testGenerateCards($building, $startTime, $endTime) {
		$echoStatement = '<h3><a id="new-search"><span class="glyphicon glyphicon-backward"></span> Back</a></h3>
				        	<h1>Search</h1>';
		$echoStatement .=
				'<div class="row reservation">
					<div class="col-md-12 bkg">
						<div class="calendar col-md-3">
							<h2>
								<span class="month"> Nov </span>
								<span class="date"> 26 </span>
							</h2>
						</div>
						<div class="info col-md-9">
							<h1>' . $building . '</h1>
							<p>' . $startTime . ' - ' . $endTime . '</p>
						</div>
					</div>
					</div>
					<br/>';
		return $echoStatement;
	}

	//run program and echo result for DOM integration
	echo testGenerateCards($building, $startTime, $endTime);

?>
