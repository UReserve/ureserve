$(document).ready(function() {
  $('#loginform').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: '/class/login.php',
       data: $(this).serialize(),
       success: function(data)
       {
          if (data === 'Login') {
            window.location = '/user-page.php';
          }
          else {
            alert('Invalid Credentials');
          }
       }
   });
 });
})