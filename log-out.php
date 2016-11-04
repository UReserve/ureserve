<!DOCTYPE html>
<?php
// set the expiration date to one hour ago
// $cookie_name = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

setcookie("user", "", time() - 3600, "/");

echo 'I set the cookie';
?>
<html>
<body>

<?php

?>

</body>
</html>