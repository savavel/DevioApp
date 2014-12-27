<?php
$servername = "localhost";
$username = "deviox10_app";
$password = "devio123";
$db = "deviox10_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>