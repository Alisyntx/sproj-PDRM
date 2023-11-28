<?php
$conn = mysqli_connect('localhost', 'root', '', 'disasterDB');
$error_message = "";

    if (!$conn) {
    $error_message = "Database connection failed: " . mysqli_connect_error();
    }
    //else {
    // $error_message = "Connection successful.";
    // }

?>