

<p> register </p>

<form method="post" action="register.php>
  username: <br>
  <input type="text" name="username"><br>
  password: <br>
  <input type="text" name="password"><br>
  <button type="submit" name="register">register</button>
</form>

<p> or <a href="login.php> login </a> </p>

<?php 

include 'class.php'
$conn = new crud;

if (isset($_POST['register])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $check_username = "SELECT * FROM users WHERE username='$username'";
    $conn->run_query($check_username);
    
    if ($conn->result->num_rows === 0){
        $register_user = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $conn->run_query($register_user);
        header ("location: index.php")
    }
}








?>
