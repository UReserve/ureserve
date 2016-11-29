$(document).ready(function() {	

	//start a new search,
	$('body').on('click', '#new-search', function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('GET', '../search.php', true);
		xmlhttp.send();
	});

	//return to home,
	$('body').on('click', '#back', function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('GET', '../home.php', true);
		xmlhttp.send();
	});

	//load a new search,
	$('body').on('click', '#refresh-search', function() {
		var xmlhttp = new XMLHttpRequest();
		//get data
		var building 	= $('#building').val();
	    var date 		= $('#date').val();
	    var startTime 	= $('#startTime').val();
	    var endTime 	= $('#endTime').val();
	    var attendance 	= $('#attendance').val();
	    var data = 'building=' + building + 
	    			'&date=' + date +
	    			'&startTime=' + startTime + 
	    			'&endTime=' + endTime + 
	    			'&attendance=' + attendance;
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('POST', '../refresh-search.php', true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send(data);
	});

});
