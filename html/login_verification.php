<?php include "starter.html"; ?>
<?php include "navbar.html"; ?>
<?php
 
require 'connection.php';
$conn    = Connect();
$password = $conn->real_escape_string($_POST['password']);
$query   = "INSERT into Password_attempts (password) VALUES('" . $password . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Nice Try... <br>";
 
$conn->close();
 
?>