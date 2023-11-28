<?php
// Start or resume the existing session
session_start();

// Check if the user is authenticated
if (isset($_SESSION['user'])) {
    // If authenticated, destroy the session to log the user out
    session_destroy();
    header('Location: ../index.php'); // Redirect to the login page
    exit();
} else {
    // If not authenticated, redirect to the login page
    header('Location: error.php');
    exit();
}
?>
