<?php
	$a =  $_POST['text1'];
	$c =  17;

	$conn = mysqli_connect("locaLhost","root","","disasterdb");
	
	$conn->query("INSERT INTO ann(ann_text,ann_usr) VALUES('$a','$c')");
	

	echo json_encode( 
		array(
			'lastID' => $conn->insert_id,
			'username' => $a,
			'admin' => $c,
			'message' => "<div class='alert alert-success animated pulse'> <i class='glyphicon glyphicon-ok'> </i> Successfully saved. </div>"		
		) 
	);
	
	
?>