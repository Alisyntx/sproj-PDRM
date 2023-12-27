<?php 
	$id = $_POST['akoSiID'];
	
	$conn = mysqli_connect("localhost","root","","disasterdb");
				
	$query = $conn->query("DELETE FROM genreport WHERE gen_ID = '$id'");
	
?>