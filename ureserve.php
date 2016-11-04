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
				);';
			//Execute sql statement and send back to caller to signal success
			return $this->db->exec($sql);
			
		}//end method buildTables
		//checks to make sure that the column in table (key) is unique. returns true if not unique, false otherwise
		function isKeyInTable( $key , $tableName , $column ){
			
			$stmt = $this->db->query("SELECT * from {$tableName} WHERE {$column}='{$key}'");
			$stmt->execute();
			if ($stmt->rowCount() == 0 ){  //no one has that email currently
			echo "ready for use";
				return false;
			}
			else {
				echo 'someone has that email';
				return true; //someone has that email
			}
				
		}
		function insertUserData(  $firstName, $lastName, $email, $password){
			echo $email;
			if( $this->isKeyInTable( $email, 'User', 'email') )
				return -1;
			else{
				$salt = time();//use time as salt
				$password .= $salt;//concatenate salt to password
				$password = md5($password);//hash salted password
				echo "Password:\n";
				echo $password;


				$stmt = $this->db->prepare("INSERT INTO User (firstName, lastName, email, password, salt) VALUES(:firstName, :lastName, :email, :password, :salt)");
				$stmt->execute(array(':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email, ':password' => $password, ':salt' => $salt));

				//Return the number of affected rows
				return $stmt->rowCount();
			}
		
			
		}
		//called when user logs in,
		function displayUserData( $userEmail , $userPassword, $attrArray , $length ){

			//save the password user entered
			$enteredPassword = $userPassword;
			echo "\nEntered Password: ";
			echo $enteredPassword;//prints it


			$stmt = $this->db->query("SELECT * FROM User WHERE email='{$userEmail}'");
			$stmt->execute();
			//AND password='{$userPassword}'

			$encryptedPassword = "";
			$salt = "";
			if( $stmt->rowCount() == 1 ){
				foreach($stmt as $row ){
					
					
						//store all data into data from current tuple row
        				$myString = $row["password"];
        				$salt = $row["salt"];//saves the salt taken from DB
        				
        				//saves the encryptd password taken from DB
      					$encryptedPassword = $myString;
      					
      					echo '<tr>';
					for( $i = 0; $i < $length; $i++ ){
						//store all data into data from current tuple row
        				echo '<td>' . $row[ $attrArray[$i] ] . '</td>';
      				}
     				echo '</tr>';
				}
			}

			//salt the newly entered pass
			$enteredPassword .= $salt;
			//hash the salted pass
			$enteredPassword = md5($enteredPassword);
			
			//print the entered password that is salted and encrypted
			echo "   re-encrypted password: \t \n";
			echo $enteredPassword;


			//print the encrypted password
			echo "   Encrypted password is!!!\n";
			echo $encryptedPassword;
			echo "\n\n";

			//if the newly entered password is equal to encrypted password
			if ($enteredPassword == $encryptedPassword) {
				echo "  Password is valid";
			}
			else {
				echo "Password invalid";
				
			}



			// $stmt = $this->db->query("SELECT * FROM User WHERE email='{$userEmail}' AND password='{$userPassword}'");
			// $stmt->execute();
			// $stmt = $this->db->query("SELECT * FROM User WHERE email='{$userEmail}'");//temporary query statement
			// $stmt->execute();


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