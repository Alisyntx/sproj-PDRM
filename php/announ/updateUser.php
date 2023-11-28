<?php
	
	$a =  $_POST['text1'];
	$c =  $_POST['session'];
	$id =  $_POST['ID'];


	$conn = mysqli_connect("locaLhost","root","","disasterdb");

	$query = $conn->query("SELECT ann.ann_id, user.usr_username
				FROM ann
				INNER JOIN user ON ann.ann_usr = user.usr_id");
	$data = mysqli_fetch_array( $query );
	
	$conn->query("UPDATE ann SET ann_text = '$a' WHERE ann_id = '$id'");
	

	echo json_encode( 
		array(
			'ID' => $id,
			'username' => $a,
			'admin' => $data['usr_username'],
			'message' =>  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Done!</strong> Update Successful
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'	
		) 
	);
	
?>