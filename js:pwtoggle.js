$(document).ready(function() {

	//set variables
	var password = $('.table').find('td').eq(3);
	var pwText = password.text();
	var pwText_hidden = '';
	var visible = true;
	
	//set hidden password
	for (c in pwText) {
		pwText_hidden += '●';
	}
	password.text(pwText_hidden);
	visible = false;
	password.append('<span class="glyphicon glyphicon-eye-open" id="showHidePassword"></span>');

	//on click,
	$('.table').on('click', '#showHidePassword', function() {
		console.log("CLICKED");
		if (!visible) {
			password.text(pwText);
			password.append('<span class="glyphicon glyphicon-eye-open" id="showHidePassword"></span>');
			visible = true;
		} else {
			password.text(pwText_hidden);
			password.append('<span class="glyphicon glyphicon-eye-open" id="showHidePassword"></span>');
			visible = false;
		}
	});

});
