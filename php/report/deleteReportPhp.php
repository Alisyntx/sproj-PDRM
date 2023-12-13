<?php 
	$id = $_POST['akoSiID'];
	
	$conn = mysqli_connect("localhost","root","","disasterdb");
				
	$query = $conn->query("DELETE FROM report WHERE rpt_id = '$id'");
?>