$(document).ready(function() {  

// Calls the function to show the rooms
function callShowData(){
  var value = document.getElementById("search-input").value;
  showData(value);
}

function showData(str) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("sidebar").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("POST", "display-rooms.php?q=" + str, true);
  xmlhttp.send();
}

function showRoomsForBuilding(str) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("sidebar").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("POST", "rooms.php?q=" + str, true);
  xmlhttp.send();
}

// Function for clicking buildings to search rooms
$(function(){
    $('.building').click(function(){

      //get id of the clicked building by getting the id attribute of the anchor tag
      var id = $(this).attr('id');

      //show data for the id of the building  string
      showRoomsForBuilding(id);

      //tried to get the color highlighted after clicked but didn't figure it out
      // $('#buildings .graphic #' + id).css('fill', '#89C4F4');
      
      });

  });

});