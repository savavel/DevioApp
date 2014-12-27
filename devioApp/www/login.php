<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

$username = $data->username;
$password = $data->password;

$sql = "UPDATE users SET password='ItRealyWorks' WHERE email='$username'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    return;
} else {
    echo "Error updating record: " . mysqli_error($conn);
}