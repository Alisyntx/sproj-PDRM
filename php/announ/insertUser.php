<?php
	$a =  $_POST['text1'];
	$c =  $_POST['session'];

	$conn = mysqli_connect("locaLhost","root","","disasterdb");
	
	$query = $conn->query("SELECT ann.
	ann_id, user.usr_username
				FROM ann
				INNER JOIN user ON ann.ann_usr = user.usr_id");
	$data = mysqli_fetch_array( $query );

	$conn->query("INSERT INTO ann(ann_text,ann_usr) VALUES('$a','$c')");
	

	echo json_encode( 
		array(
			'lastID' => $conn->insert_id,
			'username' => $a,
			'admin' => $data['usr_username'],
			'message' => "<div class='alert alert-success animated pulse'> <i class='glyphicon glyphicon-ok'> </i> Successfully saved. </div>"		
		) 
	);
	
	
?>