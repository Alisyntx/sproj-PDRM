<?php
	$a =  $_POST['text1'];
	$b = $_POST['text2'];
	$c = $_POST['text3'];
	$id =  $_POST['ID'];

	$conn = mysqli_connect("locaLhost","root","","disasterdb");
	
	$conn->query("UPDATE status SET stats_name = '$a', stats_stats = '$b', stats_amnt = '$c' WHERE stats_id = '$id'");
	

	echo json_encode( 
		array(
			'ID' => $id,
			'name' => $a,
			'stats' => $b,
			'amnt' => $c,
			'message' => '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Done!</strong> Update Successful
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'		
		) 
	);
	
	
?>