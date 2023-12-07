<?php 

$userissue = $_POST['user_issue'];
$abtissue = $_POST['abt_issue'];
$textissue = $_POST['text_issue'];

$conn = mysqli_connect("locaLhost","root","","disasterdb");
	
$conn->query("INSERT INTO report(rpt_id_usr,rpt_desc_fkid,rpt_message) VALUES('$userissue','$abtissue','$textissue')");

echo json_encode(
    
    array(
        'message' => '<div class="alert alert-info animated pulse" role="alert">
        Report Submitted!
      </div>'
    )
);
?>


