$(document).ready(function() {
  $('#loginForm').submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: 'login_user.php',
      data: $(this).serialize(),
      success: function(data) {
       	alert("Success for logging in");
      }
    });
  });
});

// Calls the function to show the romos
	function callShowData(){
		alert("Called the callShowData");
		var value = document.getElementById("search-input").value;
		showData(value);
	}

	// Shows the rooms
	function showData(str) {
		alert("Called showData");
		alert(str);
    if (str.length == 0) { 
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      alert("Get under request");
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "display-rooms.php?q=" + str, true);
      xmlhttp.send();
    }
}