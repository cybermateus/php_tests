
<?php 

session_start();

include 'class.php';

?>

<p> login </p>

<form method="post" action="login.php">
  username: <br>
  <input type="text" name="username"><br>
  password: <br>
  <input type="text" name="password"><br>
  
  <button type="submit" name="login"> login </button>
</form>

<p> or <a href="register.php"> register </a> </p>

<?php 

$conn = new crud;

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password']; // there is no password security set whatsoever, this is purely for testing purposes
    
    $sql = " SELECT * FROM users WHERE username='$username' AND password='$password' ";
    $conn->run_query($sql);
    
    if ($conn->result->num_rows === 1){
        $_SESSION['user'] = $username;
        header ("location index.php");
    }
}





?>
