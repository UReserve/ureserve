$(document).ready(function() {



    //make reservations
  $('body').on('click', '.reservation-button', function(){
    var firstName = $('#firstName').text();//taken from span in navbar

    //get id of the searched/clicked building by getting the id attribute of the anchor tag
    var roomID = $(this).attr('value');

    //daysymbol is the M, T, W... symbol which is on the button text
    var daySymbol = $(this).text();

    //day of the week can be taken by using the switch statement in this method
    var dayOfTheWeek = getDayOfTheWeek(daySymbol);

    //call reserve room function
    reserveRoom(firstName, roomID, dayOfTheWeek);


    });//end click reservation button


  $('body').on('click', '.specific-day-button', function() {

    //first name taken from span in the nav bar
    var firstName = $('#firstName').text();

    //the id of this button is the day of the week
    var dayOfTheWeek = $(this).attr('id');

    //the value of the button is the room id
    var roomID = $(this).attr('value');

    //call the reserve room function
    reserveRoom(firstName, roomID, dayOfTheWeek);




  });//end click specific-day-button reservation

});//end document ready function


function getDayOfTheWeek(str) {
  var result = "";

  switch(str) {
    case "M":
        result = "monday";
        break;
    case "T":
        result = "tuesday";
        break;
    case "W":
        result = "wednesday";
        break;
    case "Th":
        result = "thursday";
        break;
    case "F":
        result = "friday";
        break;
    case "S":
        result = "saturday";
        break;
    case "Su":
        result = "sunday";
        break;
    default:
        result="";
  }

  return result;
}


//uses XHR object to asynchronously make request to reserve this room for this day 
function reserveRoom(firstName, roomID, dayOfTheWeek) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("sidebar").innerHTML = this.responseText;
      }
    };

    xmlhttp.open("POST", "reservations.php?n=" + firstName + "&i=" + roomID + "&d=" + dayOfTheWeek, true);
    xmlhttp.send();


}//end reserve room method


function showReservations(email) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("sidebar").innerHTML = this.responseText;
      }
    };

    xmlhttp.open("POST", "show-reservations.php?e=" + email, true);
    xmlhttp.send();
}




