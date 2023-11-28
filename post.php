<?php
$conn = mysqli_connect('localhost', 'root', '', 'disasterDB');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$announcementText = $_POST['announ-post'];
$session_user_id = 	$_SESSION['user_id'];


	$conn = mysqli_connect("locaLhost","root","","practice");
	
	$conn->query("INSERT INTO announcement(announ_usr,announ_text) VALUES('$announcementText','$session_user_id')");
	

	echo json_encode( 
		array(
			'lastID' => $conn->insert_id,
			'announce' => $announcementText,
			'announ_id' => $session_user_id,
			'message' => "saved"		
		) 
	);
	
	
?>
