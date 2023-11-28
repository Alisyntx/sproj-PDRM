<?php 
	$id = $_POST['akoSiID'];
	
	$conn = mysqli_connect("localhost","root","","disasterdb");
				
	$query = $conn->query("DELETE FROM ann WHERE ann_id = '$id'");
	
?>