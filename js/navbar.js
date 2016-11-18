$(document).ready(function() {

	// home
	$('body').on('click', '#home', function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('GET', '../home.php', true);
		xmlhttp.send();
	});

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
			xmlhttp.open('POST', '../login_user.php', true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send(data);
		});
	
});