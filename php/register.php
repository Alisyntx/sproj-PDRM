<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'disasterDB');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sanitize and validate user inputs
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$bday = trim($_POST['bday']); // Ensure age is an integer (you may need more validation)
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$addr = mysqli_real_escape_string($conn, $_POST['address']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
$today = date('Y-m-d');
$birthYear = date('Y', strtotime($bday));
$age = date('Y') - $birthYear;
// Check if the username already exists in the database
// bday converter
$checkQuery = "SELECT * FROM user WHERE usr_username = '$username'";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows > 0) {
    // Username is already taken, return an error message
    $response = array(
        'success' => false,
        'message' => "username is already taken"
    );
} else {
    // Username is not taken, proceed with the insertion
    $insertQuery = "INSERT INTO user (usr_firstname, usr_lastname, usr_age, usr_bday, usr_gender, usr_contact, usr_email, usr_addr, usr_username, usr_password)
        VALUES ('$firstname', '$lastname', '$age','$bday','$gender', '$contact', '$email', '$addr', '$username', '$password')";

    if ($conn->query($insertQuery) === TRUE) {
        // Registration successful
        $response = array(
            'success' => true,
            'message' => "Your Sign Up!"
        );
    } else {
        // Registration failed
        $response = array(
            'success' => false,
            'message' => "There was an error to your data"
        );
    }
}

// Close the database connection
mysqli_close($conn);

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
