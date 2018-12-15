
<h2> main page </h2>

<?php

session_start();

if (!$_SESSION['user']){
    header ("location: login.php");
}

$user = $_SESSION['user'];
echo "Hello " . $user;

?>

<form method="post" action="index.php">
    <button type="submit" name="logout"> logout </button>
</form>

<?php 

if (isset($_POST['logout'])){
    session_unset();
    header ("location: index.php")
}

?>

