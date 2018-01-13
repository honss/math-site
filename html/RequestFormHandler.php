<?php include "starter.html"; ?>
<?php include "navbar.html"; ?>
<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['Name']);
$message = $conn->real_escape_string($_POST['Message']);
$query   = "INSERT into Requests (Name,Message) VALUES('" . $name . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>