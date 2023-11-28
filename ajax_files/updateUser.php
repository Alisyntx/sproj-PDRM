<?php
	$a =  $_POST['text1'];
	$b =  $_POST['text2'];
	$c =  $_POST['text3'];
	$d =  $_POST['text4'];
	$e =  $_POST['text5'];
	$f =  $_POST['text6'];
	$g =  $_POST['text7'];
	$h =  $_POST['text8'];
	$i =  $_POST['text9'];
	$id =  $_POST['ID'];

	$conn = mysqli_connect("locaLhost","root","","disasterdb");
	
	$conn->query("UPDATE user SET usr_firstname = '$a', usr_lastname = '$b', usr_age = '$c', usr_gender = '$d',usr_contact = '$e', usr_email = '$f', usr_addr = '$g', usr_username = '$h', usr_password = '$i' WHERE usr_id = '$id'");
	

	echo json_encode( 
		array(
			'ID' => $id,
			'firstname' => $a,
			'lastname' => $b,
			'age' => $c,
			'gender' => $d,
			'contact' => $e,
			'email' => $f,
			'address' => $g,
			'username' => $h,
			'password' => $i,
			'message' => "<div class='alert alert-success animated pulse'> <i class='glyphicon glyphicon-ok'> </i> Successfully updated. </div>"		
		) 
	);
	
	
?>