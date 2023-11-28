<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user"])) {
    $response = array("status" => "error", "message" => "User not logged in.");
    echo json_encode($response);
    exit();
}

$user_id = $_SESSION["user"];
$conn = mysqli_connect('localhost', 'root', '', 'disasterDB');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "../storage/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is a valid image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $response = array("status" => "error", "message" => "File is not an image.");
        echo json_encode($response);
        exit();
    }

    // Check if the file already exists
    if (file_exists($target_file)) {
        $response = array("status" => "error", "message" => "Sorry, file already exists.");
        echo json_encode($response);
        exit();
    }

    // Check file size
    if ($_FILES["image"]["size"] > 5000000) {
        $response = array("status" => "error", "message" => "Sorry, your file is too large.");
        echo json_encode($response);
        exit();
    }
    
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $response = array("status" => "error", "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        echo json_encode($response);
        exit();
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $response = array("status" => "error", "message" => "Sorry, your file was not uploaded.");
        echo json_encode($response);
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Save file path in the database along with the user ID
            $imagePath = $target_file;
            $sql = "UPDATE user SET usr_image = '$imagePath' WHERE usr_username = '$user_id' ";

            if ($conn->query($sql) === TRUE) {
                $response = array("status" => "success", "message" => "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.");
                echo json_encode($response);
            } else {
                $response = array("status" => "error", "message" => "Error updating database: " . $conn->error);
                echo json_encode($response);
            }
        } else {
            $response = array("status" => "error", "message" => "Sorry, there was an error uploading your file.");
            echo json_encode($response);
        }
    }
}

$conn->close();
?>
