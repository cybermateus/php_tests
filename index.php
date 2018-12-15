
<h2> main page </h2>

<?php

session_start();

if (!$_SESSION['user']){
    header ("location: login.php");
}

$user = $_SESSION['user'];
echo "Hello " . $user;

?>
