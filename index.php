<!DOCTYPE html>

<html>
<head>
	<title>UReserve</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/styles.css">

	 <!-- Facebook Metadata -->
    <meta property="og:image" content=""/>
    <meta property="og:title" content="" />
    <meta property="og:url" content="h" />
    <meta property="og:description" content="UReserve | Reserve rooms online for the University of Rochester" />
    <meta property="og:site_name" content="" />
    
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand" href="index.html">UReserve</a>
        	</div>
	        <div id="navbar" class="navbar-collapse collapse">
	         	<ul class="nav navbar-nav navbar-right">
	         		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
	         		<li><a href="login_user.php"><span class="glyphicon glyphicon-user"></span></a></li>

	         		<!-- Log out -->
		            <li><a href="log-out.php"><span class="glyphicon glyphicon-off"></span></a></li>
	          	</ul>
	        </div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 sidebar">
				<br/>
				<!-- NEW SEARCH -->
				<div class="row">
					<button type="button" class="header btn btn-primary btn-lg btn-block">
						<span class="glyphicon glyphicon-search"></span><br/>New Search
					</button>
				</div>
				<hr/>
				<!-- UPCOMING -->
				<div class="row">
					<h1 id="upcoming">Upcoming Reservations</h1>
				</div>
				<!-- RESERVATION CARDS -->
				<div class="row reservation">
				<div class="col-md-12 bkg">
					<div class="calendar col-md-3">
						<h2>
							<span class="month">NOV</span>
							<span class="date">09</span>
							<span class="time">8:15P</span>
						</h2>
					</div>
					<div class="info col-md-9">
						<h1>CSB 601</h1>
						<p>UR Women in Computing</p>
					</div>
				</div>
				</div>
				<br/>
				<div class="row reservation">
				<div class="col-md-12 bkg">
					<div class="calendar col-md-3">
						<h2>
							<span class="month">DEC</span>
							<span class="date">12</span>
							<span class="time">10:45A</span>
						</h2>
					</div>
					<div class="info col-md-9">
						<h1>Wilco 122</h1>
						<p>UR Women in Computing</p>
						<p>max 25 &nbsp; projector</p>
					</div>
				</div>
				</div>
			</div>
			<div class="col-md-9 main">
				<!-- <img id="map-placeholder" src="images/bkg.png"></img> -->
			</div>

		
		

		</div>
		<!-- end class row -->



		<!-- LOG IN Modal -->
  		<div class="modal fade" id="login-modal" role="dialog">
    		<div class="modal-dialog">
    
      		<!-- Modal content-->
      		<div class="modal-content">

      			<!-- Modal header -->
		        <div class="modal-header">
		        
		        	<button type="button" class="close" data-dismiss="modal">×</button>

		        	<h4><span class="glyphicon glyphicon-user"></span> Log in</h4>
		        </div>


		        <div class="modal-body">


		        	<!-- Form -->
		        	<form class="login" role="form" action="login_user.php" method="post">


		          	<!-- EMAIL Form group -->
		       		<div class="form-group">

		       			<!-- label and input-->
		       			<label for="inputEmail" >Email Address</label>
						<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email Address" required autofocus>
		              	
		              	
		            </div>


		            <!-- PASSWORD form group -->
		            <div class="form-group">

		            	<!-- Label and input for password -->
						<label for="inputPassword">Password</label>
		              	<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		            </div>

		            <div class="checkbox">
							<label><input type="checkbox" value="remember-me"> Remember Me </label>
					</div>

		            <!-- Log in or submit Button -->
		              <button type="submit" class="btn btn-lg btn-primary">Log in
		                <span class="glyphicon glyphicon-ok"></span>
		              </button>

		              <button type="button" class="btn btn-lg" id="create-account">Create Account
		              </button>

		          </form>
		        </div>

		        <!-- Modal Footer -->
        		<div class="modal-footer">
         			 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			  </div>
      			</div>
      
    		</div>
 		 </div><!-- model div container-->


 		 <!-- CREATE ACCOUNT Modal -->
  		<div class="modal fade" id="create-account-modal" role="dialog">
    		<div class="modal-dialog">
    
      		<!-- Modal content-->
      		<div class="modal-content">

      			<!-- Modal header -->
		        <div class="modal-header">
		        
		        	<button type="button" class="close" data-dismiss="modal">×</button>

		        	<h4><span class="glyphicon glyphicon-user"></span> Create Account</h4>
		        </div>


		        <div class="modal-body">


		        	<!-- Form -->
		        	<form class="form-horizontal" role="form" action="account_confirmation.php" method="post">


		          	<!-- First Name Form group -->
		       		<div class="form-group">
		       			<!-- label and input-->
		       			<label for="firstName">First Name</label>
						<input class="form-control" type="text" name="firstName" placeholder="e.g. Walter" required autofocus>
		            </div>

		            <!-- Last Name Form Group -->
		            <div class="form-group">
		            	 <label for="lastName">Last Name</label>
		            	 <input class="form-control" type="text" name="lastName" placeholder="e.g. White" required>
		            </div>

		            <!-- Email -->
		            <div class="form-group">
		            	<label for="email">Email</label>
		            	<input class="form-control" type="email" name="email" placeholder="e.g. walterwhite@mail.com" required>
		            </div>


		            <!-- PASSWORD -->
		            <div class="form-group">

		            	<!-- Label and input for password -->
						<label for="password">Password</label>
		              	<input class="form-control" type="password" name="password" required>
		            </div>


		            <!-- Confirm Password -->
		            <div class="form-group">
		            	<label for="password">Confirm Password</label>
		            	<input class="form-control" type="password" name="confirmPassword" required>
		            </div>
		            

		          <!-- Submit -->

		              <button type="submit" class="btn btn-lg btn-primary" id="create-account">Create Account <span class="glyphicon glyphicon-ok"></span>
		              </button>

		          </form>
		        </div>

		        <!-- Modal Footer -->
        		<div class="modal-footer">
         			 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			  </div>
      			</div>
      
    		</div>
 		 </div><!-- model div container-->

	</div><!-- end main container -->


<!-- PHP -->
<?php

	//include our file with ureserve class
	include_once("ureserve.php");

	//initialize a new ureserve object
	$object = new ureserve();

	//If connection failed, display an error message
	if( $object->getDB() === null ){
		echo "Connection to your web server failed.";
	}

	

	//Else, continue to show the user their account information
	else {

		if( isset($_COOKIE["user"]) ){ //if cookie has been set

			// java script to indicate user is logged in "Hello " + User's first name, save the user's email as the cookie
			$cookieString = $_COOKIE["user"];
			echo $cookieString;

			echo "<script type='text/javascript'>

				$(function() {
					alert('Cookie: 

					";
			echo $cookieString;

			echo "');
				});

			 	</script>  ";
			
			// mysql call for user's name?

		}

		else{ //there is no cookie


			//javascript to execute jquery pop up modal
			echo <<< EOT
				<script type="text/javascript">

				$(function() {
					alert("You are not logged in! Please log in.");
				});

			   //automatically pops up the modal
			   $(function() {
			    $('#login-modal').modal('show');
			   });

			   //closes log in modal opens create account modal
			   $(function(){
			    $('#create-account').click(function() {
			        $('#login-modal').modal('hide');
			        $('#create-account-modal').modal('show');
			    	});
				});

			 	</script>  

EOT;
			//have the user log in

			//then create cookie with value = email address

		}
	

	}



	?>

</body>
</html>