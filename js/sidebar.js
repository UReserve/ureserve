var firstRun = true;

$(document).ready(function() {	

	//start a new search,
	$('.sidebar').on('click', '#new-search', function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("sidebar").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "../search.php", true);
		xmlhttp.send();
	});

	//return to home,
	$('.sidebar').on('click', '#back', function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("sidebar").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "../home.php", true);
		xmlhttp.send();
	});

});
