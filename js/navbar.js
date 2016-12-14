$(document).ready(function() {

	// home
	$('body').on('click', '#home', function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('GET', 'home.php', true);
		xmlhttp.send();
	});

	//account settings modal pops up to log out or delete account
	$('body').on('click', '#account', function() {
		$('#account-modal').modal('show');
	});

	//if user clicks delete account button
	$('body').on('click', '#delete-account', function() {
		//get data
		var email = $(this).attr("value");

		//xml http request
		var xmlhttp = new XMLHttpRequest();

    	xmlhttp.onreadystatechange = function() {

	      	if (this.readyState == 4 && this.status == 200) {
	        	document.getElementById("sidebar").innerHTML = this.responseText;
	     	 }
   	 	};

   	 	//run php script to delete the account from database
    	xmlhttp.open("POST", "delete_account.php?email=" + email, true);
    	xmlhttp.send();

	});//end clicking on delete account button

	// log in user
	$('body').on('click', '#user', function() {
		$('#login-modal').modal('show');
	});

	//create-account modal
	$('#create-account').click(function() {
		$('#login-modal').modal('hide');
		$('#create-account-modal').modal('show');
	});

	//back to log-in modal
	$('#create-account-back').click(function() {
		$('#create-account-modal').modal('hide');
		$('#login-modal').modal('show');
	});

	//on log in submit,
	$('body').on('submit', '.login', function() {
		var xmlhttp = new XMLHttpRequest();
		//get data
		var email = $('#inputEmail').val();
	    var password = $('#inputPassword').val();
	    var data = 'email=' + email + 
	    			'&password=' + password;
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('POST', 'login_user.php', false);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send(data);
	});

	//create account form submit button
	$('body').on('submit', '.create-account', function() {
		event.preventDefault();
		var xmlhttp = new XMLHttpRequest();
		//get data
		var firstName = $('#firstName').val();
		var lastName = $('#lastName').val();
		var email = $('#email').val();
	    var password = $('#password').val();
	    var confirm = $('#confirm-password').val();

	    var data = 	'firstName=' + firstName +
	    			'&lastName=' + lastName + 
	    			'&email=' + email + 
	    			'&password=' + password + 
	    			'&confirm=' + confirm;
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				$('#create-account-modal-body').html(this.responseText);
			}
		};
		xmlhttp.open('POST', 'account_confirmation.php', false);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send(data);
	});


	
});
