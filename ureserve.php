<?php

	/*
	Class that creates a database with initial tables, inserts and displays user data (and before inserting checks 
	for duplicate unique emails)

	Taking an Object Oriented Approach with PHP to make code cleaner
	*/
	class ureserve {

		/*
	Credentials needed to connect to the web server. 
	For security, these are dummy values that need to be filled out before running our
	script to interact with UReserve. This file is included in our script.

	Please fill in with your local host server name, username, and password to connect to your own local server. And make sure
	you have permission to create databases and tables!

	Will later make it as an include file where you can type in your information.
		*/
		private $host = "localhost";
		private $username = "root";
		private $password = 'mysql';	

		private $db = null; //our PDO object, intially null
		
		
		/*
		
		Constructor: Initialize a PDO (PHP Data Object) that we can use to manipulate our database on our web server.

		This constructor initializes a PDO, connects to the database, and creates a database for the user if it 
		doesn't already exist. Assumes user has permission to create databases. If connection fails, then an error
		is printed out for the user. 

		*/
		function __construct(){ //Note constructor has 2 underscores...
			/*
			Create a new PDO object which takes at most 4 arguments (last one optional)
			'DSN, username, password, and an array of driver options'
			*/
			

			try {

				//Initialize PDO with just host for dns, username and password for now
				$this->db = new PDO("mysql:host={$this->host}", $this->username, $this->password);

				//Set the error attributes to put PDO into exeption mode
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			
    			//Turn off prepares emulation that allows MySQL by default, want to use PDO safely
				$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

				//Create our database if it doesn't already exist (don't want to keep creating it continuously)
				$stmt = "CREATE DATABASE IF NOT EXISTS uReserveDB";

				//Execute our sql statement so we can build the database
				$this->db->exec($stmt);

				//Make sure we can USE our database with our PDO object
				$stmt = "use uReserveDB";

				$this->db->exec($stmt);

				//We connected successfully

				//Build our initial tables in our database
				$this->buildTables();

				//If there are no initial rooms add some
				if ( $this->countRowsInRoom() == 0 ){  
				  	$this->readFiles();
				 }	
				
			}
			catch(PDOException $e){

				//Something went wrong...
				echo $e->getMessage();
			}

		}//end of constructor
		

		//If db is equal to NULL then we did not connect successfully, otherwise, if it's an object, we did connect
		function getDB(){
			return $this->db;
		}//end method getDB

		
		//Builds the initial tables for our database if they don't already exist
		function buildTables(){

			
			$sql = 'CREATE TABLE IF NOT EXISTS User
				(
					id INT NOT NULL AUTO_INCREMENT,
					firstName VARCHAR(255) NOT NULL,
					lastName VARCHAR(255) NOT NULL,
					email VARCHAR(500) NOT NULL UNIQUE,
					password VARCHAR(500) NOT NULL,
					salt VARCHAR(500) NOT NULL,
					PRIMARY KEY(id)
				);CREATE TABLE IF NOT EXISTS Room
				(
					id INT NOT NULL AUTO_INCREMENT,
					room VARCHAR(255) NOT NULL,
					capacity VARCHAR(255) NOT NULL,
					building VARCHAR(255) NOT NULL,
					imageFile VARCHAR(255),
					monday VARCHAR(255),
					tuesday VARCHAR(255),
					wednesday VARCHAR(255),
					thursday VARCHAR(255),
					friday VARCHAR(255),
					saturday VARCHAR(255),
					sunday VARCHAR(255),
					PRIMARY KEY(id)
				);';

			//Execute sql statement and send back to caller to signal success
			
			return $this->db->exec($sql);
			

		}//end method buildTables

		//search function to find capacity
		function searchCapacity($capacity){
			$stmt = $this->db->query("SELECT * FROM Room WHERE capacity>={$capacity};");
			$stmt->execute();

			//if there is a statement returned by database
			if( $stmt->rowCount() > 0 ){

				
				$keys = array();
				$values = array();
				$index = 0;

				//return statement as row variable
				foreach($stmt as $row){
					echo "The building name: " . $row["building"];
					echo "The room name: " . $row["room"];
					echo "The capacity of the room is: " . $row["capacity"]; 
					$keys[$index] = $row["room"];
					$values[$index] = $row["capacity"];

					echo "<br>";

					$index = $index + 1;
				
				}
				
				$buildArr = array_fill_keys($keys, $values);

				
				//print_r($buildArr);
			}//end if
		}

		function getImageFile($id) {
			$id = (string)$id;
			$stmt = $this->db->query("SELECT * FROM Room WHERE id='{$id}'");
			$stmt->execute();

			if( $stmt->rowCount() > 0 ){

				$path = "";

				//return statement as row variable
				foreach($stmt as $row) {

					$path = $row["imageFile"];
				}
				
				return (string)$path;
			}
		}

		//search function to find the necessary rooms
		function searchBuilding($building){

			//allow a back option no matter what
			echo '<h3><a id="new-search"><span class="glyphicon glyphicon-backward"></span> Back</a></h3>
					        	<h1>Search</h1>';

			$stmt = $this->db->query("SELECT * FROM Room WHERE building='{$building}'");
			$stmt->execute();

			//if there is a statement returned by database
			if( $stmt->rowCount() > 0 ){
				
				$keys = array();
				$values = array();
				$index = 0;

				//return statement as row variable
				foreach($stmt as $row) {

					$this->generateCards($row["building"], $row["room"], $row["capacity"], $row["imageFile"], $row["id"]);

					$keys[$index] = $row["room"];
					$values[$index] = $row["capacity"];

					$index = $index + 1;
				}
				
				$buildArr = array_fill_keys($keys, $values);

			} else {
				echo '<div class="row reservation">
					<div class="col-md-12 bkg">
					<h2>No results found for <strong>' . $building . '</strong> :( </h2>
					</div>
				</div>
				<br/>';
			}

		}

		function generateCards( $building, $room, $capacity, $day, $imageFile, $id) {
			echo
				'<div class="row reservation">
					<div class="col-md-12 bkg">
						<div class="card">
							<img class="card-img-top" src="' . $imageFile . '" alt="' . $room . '">
							<div class="card-block">
								<h4 class="dark card-title">' . $room . '</h4>
								<p class="card-text">Building: ' . $building . '&nbsp; Cap: ' . $capacity . '</p>
								<a class="btn btn-primary specific-day-button" id="'. $day . '" value ="' . $id . '">Reserve for ' . strtoupper(substr($day, 0, 1)) . substr($day, 1) . '</a>
							</div>
						</div>
					</div>
				</div>
				<br/>';
		}






		//search function to find capacity
		function findRoomByCapacity($capacity){
			$stmt = $this->db->query("SELECT * FROM Room WHERE capacity>={$capacity};");
			$stmt->execute();

			//if there is a statement returned by database
			if( $stmt->rowCount() > 0 ){

				//return statement as row variable
				foreach($stmt as $row){
	
					$capacityNumber = $row["capacity"];

					//$row["building"]
					//$row["room"];
				}
				
			}//end if


		}//end method findRoomByCapacity







		//Search for reservation with no user
		function findAvailableRoom($building){

			//allow a back option no matter what
			echo '<h3><a id="new-search"><span class="glyphicon glyphicon-backward"></span> Back</a></h3>
					        	<h1>Search</h1>';

			$stmt = $this->db->query("SELECT * FROM Room WHERE building='{$building}'");
			$stmt->execute();
		
			$daysOfWeek = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
			$days = array("M", "T", "W", "Th", "F", "S", "Su");
			$arrlength = count($daysOfWeek);			

			if( $stmt->rowCount() > 0){//if there is a statement returned by database
					
				//return statement as row variable
				foreach($stmt as $row){

					echo
						'<div class="row reservation">
							<div class="col-md-12 bkg">
								<div class="card">
									<img class="card-img-top" src="' . $row["imageFile"] . '" alt="' . $row["room"]. '">
									<div class="card-block">
										<h4 class="card-title">' . $row["room"] . '</h4>
										<p class="card-text">Building: ' . $row["building"] . '&nbsp; Cap: ' . $row["capacity"] . '</p> ';
					
							for($x = 0; $x < $arrlength; $x++) {
							    if( $row[$daysOfWeek[$x]] === NULL ){
							   		//this day is open! and clickable
									echo '<a href="#" class="btn btn-primary reservation-button" value="' . $row["id"] . '">' . $days[$x] . '</a>';
							    } else {
							    	//else, this day is already reserved and disabled
									echo '<a href="#" class="btn btn-danger disabled">' . $days[$x] . '</a>';
							    }
							}

					echo 			'</div>
								</div>
							</div>
						</div>
						<br/>';

				}

			} else {
				echo '<div class="row reservation">
					<div class="col-md-12 bkg">
					<h2>No results found for <strong>' . $building . '</strong> :( </h2>
					</div>
				</div>
				<br/>';
			}

		}//end of method findAvailableRoom

		function isAvailable($roomId, $day) {
			$check = $this->db->query("SELECT * FROM Room WHERE {$day} is NULL AND id={$roomId}");
			$check->execute();

			if( $check->rowCount() > 0){ //if the room on that day IS available,
				return true;
			} else { //otherwise, if the room on that day is NOT available,
				return false;
			}
		}

		//Reserves a room if it is available for the room 
		function reserveRoom($user, $roomId, $day){

			$check = $this->isAvailable($roomId, $day);

			if( $check == true ){ //if the room on that day IS available,
				$result = $this->db->exec("UPDATE Room SET {$day}='{$user}' WHERE id={$roomId}");
				if( $result < 1 ){
					return false;
				}
				else{
					return true;
				}
			} else { //otherwise, if the room on that day is NOT available,
				return false;
			}
		}

		function showReservations($userEmail){

			$stmt = $this->db->query("SELECT * FROM Room");
			$stmt->execute();		
			$daysOfWeek = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
			$days = array("M", "T", "W", "Th", "F", "S", "Su");
			$arrlength = count($daysOfWeek);

			if( $stmt->rowCount() > 0){//if there is a statement returned by database
					
				//run JS for adding info to a specific div
				
				//return statement as row variable
				foreach($stmt as $row){
					

					for($x = 0; $x < $arrlength; $x++) {
						if( $row[$daysOfWeek[$x]] === $userEmail ){

							$dayOfReservation = ucfirst($daysOfWeek[$x]);

							echo '
								<div class="row reservation">

									<div class="col-md-12 bkg">
										<div class="card">
											<div class="card-header">
												<a id="delete" class="glyphicon glyphicon-trash" value="' . $row["id"] . '"></a>
												<a id="edit" class="glyphicon glyphicon-pencil" value="' . $row["id"] . '"></a>
											</div>
											<img class="card-img-top" src="' . $row["imageFile"] . '" alt="">
											<div class="card-block">
												<h4 class="card-title">' . $row["building"] . ' - ' . $row["room"] . '</h4>
												<p class="card-text">Capacity: ' . $row["capacity"] . '
												<p class="not-a-button btn btn-primary" id="day-button">' . $dayOfReservation . '</p>
											</div>
										</div>
									</div>
								</div><br>
								';


							   	// echo "This user has reserved: " . $row["room"];
							   	// echo " for " . 	$daysOfWeek[$x];
						}
					}
				}//end loop

				echo '<script type="text/javascript">

				$(function() {
					$(\'.reservation\').appendTo(\'.upcoming-reservations\');
					

			});</script>';
			}
		}//end of method showReservations


		function changeRoomDay($user, $roomId, $oldDay, $newDay){

			$result = $this->reserveRoom($user, $roomId, $newDay);
			if ($result == true) {
				return $this->unreserveRoom($roomId, $oldDay, $user);
			} else {
				return false;
			}
			
		}//end of method changeRoomDay


		function unreserveRoom($roomId, $day, $user){
			$result = $this->db->exec("UPDATE Room SET {$day}=NULL WHERE id={$roomId}");
			if( $result < 1 ){
				return false;
			} else {
				return true;
			}
		}

		//Search for reservation with no user
		function findAvailableRoomByDay($building, $day){

			//allow a back option no matter what
			echo '<h3><a id="new-search"><span class="glyphicon glyphicon-backward"></span> Back</a></h3>
					        	<h1>Search</h1>';

			$stmt = $this->db->query("SELECT * FROM Room WHERE building='{$building}' AND {$day} is NULL");
			$stmt->execute();		

			if( $stmt->rowCount() > 0){//if there is a statement returned by database
					
				//return statement as row variable
				foreach($stmt as $row){
					$this->generateCards($row["building"], $row["room"], $row["capacity"], $day, $row["imageFile"], $row["id"]);
				}

			} else {
				echo '<div class="row reservation">
					<div class="col-md-12 bkg">
					<h2>No results found for <strong>' . $building . '</strong> :( </h2>
					</div>
				</div>
				<br/>';
			}

		}//end of method findAvailableRoomByDay

		//checks to make sure that the column in table (key) is unique. returns true if not unique, false otherwise
		function isKeyInTable( $key , $tableName , $column ){

			
			$stmt = $this->db->query("SELECT * from {$tableName} WHERE {$column}='{$key}'");
			$stmt->execute();


			if ($stmt->rowCount() != 0 ){  //failure, someone has that email
				echo
					"<div class='alert alert-danger'>
						<h1>Your account failed to be created</h1>
						<p>Someone already has that email. Try entering a unique email address.</p>
						<p><button type='button' class='btn btn-danger'><a href='index.php'>Try again</a></button></p>
					</div>";

				return true; 
			}
				
		}

				function countRowsInRoom(){
			$stmt = $this->db->query("SELECT COUNT(*) as rowNum FROM Room;");
			$stmt->execute();

			foreach($stmt as $row){
				
				return $row["rowNum"];	
			}
			
		}

			function readFiles(){
			$myfile = fopen("rooms.txt", "r") or die("Unable to open file!");


			// Output one character until end-of-file
			while(!feof($myfile)) {

				$nameAndBuildArr = explode("-", fgets($myfile));
				$setUp = fgets($myfile);
				fgets($myfile);
				$maxCapacity = fgets($myfile);
				$imageFile = fgets($myfile);

				$this->insertRoomData($nameAndBuildArr[0], $nameAndBuildArr[1], $maxCapacity, $imageFile);

				fgets($myfile); //a blank new line

				echo "<br>";
				

			}
			fclose($myfile);
		}

		//creates user account
		function insertRoomData($building, $room, $capacity, $imageFile) {

			$result = $this->db->exec("INSERT INTO Room (room, capacity, building, imageFile) VALUES('{$room}', '{$capacity}', '{$building}', '{$imageFile}')");
			$insertId = $this->db->lastInsertId();
			//Return the number of affected rows
			return $insertId;
		}

		function confirmPassword($password, $confirmPassword) {
			if ($password != $confirmPassword) {
				echo
					"<div class='alert alert-danger'>
						<h1>Your account failed to be created</h1>
						<p>Your password confirmation did not match. Make sure you're certain when creating a password.</p>
						<p><button type='button' class='btn btn-danger'><a href='create_account.php'>Try again</a></button></p>
					</div>";
				return true;
			}
		}

		//verifies log in and returns boolean whether they entered the correct password or not
		function verifyLogin ($userEmail , $userPassword, $attrArray , $length) {

			//save the password user entered and prints it
			$enteredPassword = $userPassword;

			//**** CHANGE INTO PREPARE STATMENT
			//mySQL query statement for getting the SALT and PASSWORD
			$stmt = $this->db->query("SELECT * FROM User WHERE email='{$userEmail}'");
			$stmt->execute();
			
			//initialize variables for the SALT nad PASSWORD we will be using to verify login
			$encryptedPassword = "";
			$salt = "";

			//if there is a statement returned by database
			if( $stmt->rowCount() == 1 ){

				//return statement as row variable
				foreach($stmt as $row){
				
					//store the password and salt taken from the tuple returned
        			$encryptedPassword = $row["password"];
        			$salt = $row["salt"];//saves the salt taken from DB

      				
				}
			}//end if

			//salt the newly entered pass
			$enteredPassword .= $salt;
			//hash the salted pass
			$enteredPassword = md5($enteredPassword);
			
			// //print the entered password that is salted and encrypted
			// echo "   re-encrypted password: \t \n";
			// echo $enteredPassword;


			// //print the encrypted password
			// echo "   Encrypted password is!!!\n";
			// echo $encryptedPassword;
			// echo "\n\n";

			//if the newly entered password is equal to encrypted password
			if ($enteredPassword == $encryptedPassword) {
				echo "Password is valid";
				return true;
			}

			//return false if password is invalid
			else {
				echo "Password invalid";
				return false;
				
			}

			
		}//end verifyuser method


		//creates user account
		function insertUserData($firstName, $lastName, $email, $password) {
			
			if( $this->isKeyInTable( $email, 'User', 'email') )
				return -1;
			else{
				$salt = time();//use time as salt
				$password .= $salt;//concatenate salt to password
				$password = md5($password);//hash salted password

				$stmt = $this->db->prepare("INSERT INTO User (firstName, lastName, email, password, salt) VALUES(:firstName, :lastName, :email, :password, :salt)");
				$stmt->execute(array(':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email, ':password' => $password, ':salt' => $salt));


				//Success Alert Message
				echo
					"<div class='alert alert-success' role='alert'>
						<h1>Account was successfully created!</h1>
						<p>Your account with email address: ";
				echo $email;

				echo " was created!</p>
				<p><button type='button' class='btn btn-success'><a href='index.php'>Click here to log in</a></button></p>
					</div>";

				//Return the number of affected rows
				return $stmt->rowCount();
			}
		}

		//deletes user account
		function deleteAccount($email) {

			//delete cookie for user
			setcookie("user", "", time() - 3600, "/");


			//delete all reservations for user
			$stmt = $this->db->query("UPDATE Room SET monday=NULL, tuesday=NULL, wednesday=NULL, thursday=NULL, friday=NULL, saturday=NULL, sunday=NULL");
			$stmt->execute();

			//delete from user table where email = the entered email
			$stmt = $this->db->query("DELETE FROM User WHERE email='{$email}'");
			$stmt->execute();//execute statement

			//echo refresh page
			echo '<meta http-equiv="refresh" content="0">';
		}


		function getFirstName($email) {
			$stmt = $this->db->query("SELECT * FROM User WHERE email='{$email}'");
			$stmt->execute();

			//initialize firstName variable to be returned
			$firstName = "";
			
			//if there is a statement returned by database
			if( $stmt->rowCount() == 1 ){

				//return statement as row variable
				foreach($stmt as $row){
				
				//save first name to variable
        		$firstName = $row["firstName"];
      				
				}
			}//end if
			return $firstName;
		}






		

		//called when user logs in,
		function displayUserData( $userEmail , $userPassword, $attrArray , $length ){

			$stmt = $this->db->query("SELECT * FROM User WHERE email='{$userEmail}' AND password='{$userPassword}'");
			$stmt->execute();

			if( $stmt->rowCount() == 1 ){

				foreach($stmt as $row ){

					echo '<tr>';

					for( $i = 0; $i < $length; $i++ ){
						//store all data into data from current tuple row

        				echo '<td>' . $row[ $attrArray[$i] ] . '</td>';
      				}

     				echo '</tr>';
				}

			}
			
		}



	}//end class ureserve







?>