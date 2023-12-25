<?php
	$a =  $_POST['gendate'];
	$b =  $_POST['distype'];
	$c =  $_POST['numinju'];
	$d =  $_POST['missper'];
	$e =  $_POST['numdeath'];
	$f =  $_POST['damstruc'];
	$g =  $_POST['disppop'];
	$h =  $_POST['emerres'];

	$conn = mysqli_connect("locaLhost","root","","disasterdb");
	

	$conn->query("INSERT INTO genreport(gen_date,gen_distyp,gen_numinj,gen_misper,gen_numdet,gen_damstr,gen_dispop,gen_res) VALUES('$a','$b','$c','$d','$e','$f','$g','$h')");

	echo json_encode( 
		array(
			'lastID' => $conn->insert_id,
			'a' => $a,
			'b' => $b,
			'c' => $c,
			'd' => $d,
			'e' => $e,
			'f' => $f,
			'g' => $g,
			'h' => $h,
			'message' => "<div class='alert alert-success animated pulse'> <i class='glyphicon glyphicon-ok'> </i> Successfully saved. </div>"		
		)  
	);
?>