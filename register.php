<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $conn->query("INSERT INTO users (username, email, password)
                  VALUES ('$username','$email','$password')");

    echo "Registered Successfully!";
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Register</button>
</form>