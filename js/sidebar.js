$(document).ready(function() {	

	//////////
	// HOME //
	//////////

	//start a new search,
	$('body').on('click', '#new-search', function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('GET', 'search.php', true);
		xmlhttp.send();
	});

	///////////////////////
	// RESERVATION CARDS //
	///////////////////////

	//edit reservation modal,
	$('body').on('click', '#edit', function() {
		var xmlhttp = new XMLHttpRequest();
		//get data $roomId, $day
		var card = $(this).parent().parent();
	    var room = card.find('.card-title').text();
	    var roomId = $(this).attr('value');
	   
	    var p = card.find('p');
    	var building = p[0].innerHTML;
    	var oldDay = p[1].innerHTML;

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('edit-modal-body').innerHTML = this.responseText;
				$('#edit-modal').modal('show');
			}
		};
		xmlhttp.open("POST", "edit-modal.php?r=" + room +
													"&b=" + building +
													"&o=" + oldDay + 
													"&i=" + roomId, true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send();
	});

	//on edit confirmation,
	$('body').on('click', '#edit-confirm', function() {
		var xmlhttp = new XMLHttpRequest();
		
		//get room id from edit pencil button value
	    var roomId = $('#edit').attr('value');
	    //old day from oldday text
	    var oldDay = $("#day-button").text().toLowerCase();
		//get new day from selected day option
	    var newDay = $("#date option:selected").text().toLowerCase();

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('edit-modal-body').innerHTML = this.responseText;
				$('#edit-modal').modal('hide');
				updateSidebar();
			}
		};

		xmlhttp.open("POST", "edit-reservation.php?r=" + roomId + "&o=" + oldDay + "&n=" + newDay, true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send();
	});


	//delete reservation,
	$('body').on('click', '#delete', function() {
		var xmlhttp = new XMLHttpRequest();
		//get data $roomId, $day
		var card = $(this).parent().parent();
	    var day = card.find('p')[1].innerHTML;
	    var data = 'day=' + day;
	   

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('confirm-delete-modal-content').innerHTML = this.responseText;
				$('#confirm-delete-modal').modal('show');
			}
		};
		xmlhttp.open("POST", "delete-modal.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send(data);
	});

	//on delete confirmation,
	$('body').on('click', '#delete-confirm', function() {
		var xmlhttp = new XMLHttpRequest();
		
		//get data $roomId, $day
	    var roomID = $('#delete').attr("value");
	    var day = $('#day-button').text().toLowerCase();

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				$('#confirm-delete-modal').modal('hide');
				updateSidebar();
				//we should probably make a confirmation window here (eventually)
			}
		};

		xmlhttp.open("POST", "delete-reservation.php?r=" + roomID + "&d=" + day, true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send();
	});

	//update sidebar on reservation change
	var updateSidebar = function () {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "home.php", true);
		xmlhttp.send();
	};

	////////////
	// SEARCH //
	////////////

	//load a new search,
	$('body').on('click', '#refresh-search', function() {
		var xmlhttp = new XMLHttpRequest();
		//get data
		var building 	= $('#building').val();
	    var date 		= $('#date').val();
	    var attendance 	= $('#attendance').val();
	    var data = 'building=' + building + 
	    			'&date=' + date +
	    			'&attendance=' + attendance;
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open("POST", "refresh-search.php?q=" + building, true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send(data);
	});

	//return to home,
	$('body').on('click', '#back', function() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('sidebar').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('GET', 'home.php', true);
		xmlhttp.send();
	});


	




});

	






