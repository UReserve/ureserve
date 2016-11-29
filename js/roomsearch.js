$(document).ready(function() {

    // Calls the function to show the rooms
	function callShowData() {
		var value = document.getElementById("search-input").value;
		showData(value);
	}

	// Shows the rooms
	function showData(str) {
        if (str.length == 0) { 
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "display-rooms.php?q=" + str, true);
            xmlhttp.send();
        }
    }
});
