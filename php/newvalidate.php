<?php
// Start a new session or resume the existing session
session_start(); ob_start();

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'disasterDB');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sanitize and validate user inputs
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password']; // Password is not hashed because we need to compare it to the stored hashed password

// Check if the username exists in the database
$checkQuery = "SELECT usr_id, usr_username, usr_password FROM user WHERE usr_username = '$username'";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows === 1) {
    // Username exists, fetch the stored hashed password and user ID
    $row = $checkResult->fetch_assoc();
    $storedPassword = $row['usr_password'];
    $userId = $row['usr_id'];

    // Verify the provided password against the stored hashed password
    if (password_verify($password, $storedPassword)) {
        // Login successful
        $_SESSION['user_id'] = $userId; // Add user ID to the session
        $_SESSION['user'] = $username;

        if ($username === 'admin') {
            $redirect = 'dashboard.php';
        } else {
            $redirect = 'user-dashboard.php';
        }

        $response = array(
            'success' => true,
            'message' => "Login successful",
            'redirect' => $redirect
        );
    } else {
        // Login failed
        $response = array(
            'success' => false,
            'message' => "Log in failed"
        );
    }
} else {
    // Username doesn't exist in the database
    $response = array(
        'success' => false,
        'message' => "Username does not exist."
    );
}

// Close the database connection
mysqli_close($conn);

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
