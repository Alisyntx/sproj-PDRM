<?php 
	$id = $_POST['akoSiID'];
	
	$conn = mysqli_connect("localhost","root","","disasterdb");
				
	$query = $conn->query("DELETE FROM user WHERE usr_id = '$id'");
	
?>