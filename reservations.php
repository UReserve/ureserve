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
		
		// get the q parameter from URL
		$n = $_REQUEST["n"];
		$i = $_REQUEST["i"];
		$d = $_REQUEST["d"];

		echo "<h3>Connection success!</h3>";
		echo "<p>The request was made by " . $n . " for room " . $i . " on " . ucwords($d) . " !</p>";
		
		echo '<h3><a id="back"><span class="glyphicon glyphicon-backward"></span> Back</a></h3>

        <h1>Search</h1>  

        <form action="">

          <!-- https://github.com/silviomoreto/bootstrap-select -->
          <div class="input-group">
            <input id="building" type="text" placeholder="Building" class="form-control" />
            <span class="input-group-addon glyphicon glyphicon-home"></span>
          </div>

          <div class="input-group">
            <select class="form-control" id="date">
              <option value="none" selected>Day of the Week</option>
              <option value="monday">Monday</option>
              <option value="tuesday">Tuesday</option>
              <option value="wednesday">Wednesday</option>
              <option value="thursday">Thursday</option>
              <option value="friday">Friday</option>
              <option value="saturday">Saturday</option>
              <option value="sunday">Sunday</option>
            </select>
            <span class="input-group-addon btn glyphicon glyphicon-calendar"></span>
          </div>

          <div class = "input-group">
            <input id="attendance" type="text" class="form-control" placeholder="Attendance"/>
            <span class="input-group-addon glyphicon glyphicon-flag"></span>
          </div>

          <div class = "input-group">
            <span class="input-group-addon glyphicon glyphicon-tag"></span>
            <input type="text" class="form-control" placeholder = "+ Add search tag"/>
          </div>

        </form>

        <br/>

        <div class="row">
          <button id="refresh-search" type="button" class="header btn btn-primary btn-lg btn-block">
            Search <span class="glyphicon glyphicon-refresh"></span>
          </button>
        </div>';
		

		$userEmail = $_COOKIE["user"];
		$userEmail = (string)$userEmail;

		$object->reserveRoom($userEmail, $i, $d);
		
	}



?>

		

</body>
</html>