<?php
	$a =  $_POST['text1'];
	$b =  $_POST['text2'];
	$id =  $_POST['ID'];

	$conn = mysqli_connect("locaLhost","root","","practice");
	
	$conn->query("UPDATE user SET username = '$a', password = '$b' WHERE user_id = '$id'");
	

	echo json_encode( 
		array(
			'ID' => $id,
			'username' => $a,
			'password' => $b,
			'message' => "<div class='alert alert-success animated pulse'> <i class='glyphicon glyphicon-ok'> </i> Successfully updated. </div>"		
		) 
	);
?>