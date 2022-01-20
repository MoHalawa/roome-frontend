<?php
$servername = "sql5.freemysqlhosting.net:3306";
$username = "sql5466511";
$password = "82pUav4jI8";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>