<?PHP 

// set the expiration date to one hour ago
setcookie('id', "", time() - 3600);


header("Location: login.php"); /* Redirect browser to log in page*/

?>