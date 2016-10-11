<!DOCTYPE html>
<html>
<head>
	<title>UReserve :: Create Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/styles.css">

	 <!-- Facebook Metadata -->
    <meta property="og:image" content=""/>
    <meta property="og:title" content="" />
    <meta property="og:url" content="h" />
    <meta property="og:description" content="UReserve | Reserve rooms online for the University of Rochester" />
    <meta property="og:site_name" content="" />

    <style>
    
	</style>
    
</head>
<body>
	
	


	<div class="container">
		<h1 id="login-logo" class="text-center">UReserve</h1>
					<p class="text-center">Reserve rooms at the University of Rochester</p>

					<hr class="intro-divider">


		<form class="form-horizontal" role="form" action="account_confirmation.php" method="post">
    

      <div class="form-group">
        <label class="control-label col-sm-2" for="firstName">Firstname:</label>
        <div class="col-sm-5">
          <input type="text" name="firstName" placeholder="e.g. Kitty" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="lastName">Lastname:</label>
        <div class="col-sm-5">
          <input type="text" name="lastName" placeholder="e.g. Kat" required>
        </div>
      </div>

 	    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-5">
          <input type="email" name="email" placeholder="e.g. kitkat@myemail.com" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Password:</label>
        <div class="col-sm-5">
          <input type="password" name="password" required>
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-lg btn-danger">Submit</button>
      </div>
      </div>

   
  </form>
	</div>
	

</body>
</html>