<?php
include "Header.php";
//============================================== Connect to MySQL DB
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//============================================== 
include "Footer.php";
?>