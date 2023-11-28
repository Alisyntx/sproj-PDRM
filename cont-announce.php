<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example Template</title>
	<!-- css -->
    <link href="css/announ.css" rel="stylesheet">
    <link href="ajax_files/css/bootstrap.css" rel="stylesheet">
	<link href="ajax_files/css/bootstrap-theme.css" rel="stylesheet">
    <link href="ajax_files/css/font-awesome.css" rel="stylesheet">
    <link href="ajax_files/css/datatables-bootstrap3.css" rel="stylesheet">
	 <link href="ajax_files/css/animate.css" rel="stylesheet">
     <link href="css/control.css" rel="stylesheet">
     <link href="css/control-nav.css" rel="stylesheet">
	<!-- js -->	
	<script src="ajax_files/js/jquery.js"></script>
	<script src="ajax_files/js/bootstrap.js"></script>
	<script src="ajax_files/js/jquery.dataTables.js"></script>
	<script src="ajax_files/js/datatables-bootstrap3.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<script src="ajax_files/control.js"></script>
</head>
<body class="body-control">
	<?php include ("control-nav.php") ?>
    <section class="home-section">
      
<script src="post-announ.js"></script>
<div class="announ-main-cs">
    <div class="announ-logo">
        <img src="image/announ1.jpg" alt="">
    </div>
    <div class="announ-cont-main">
        <div class="announ-side">
        
        </div>
        <div class="announ-right">
            <div class="announ-post">
                <div class="announ-icon"></div>
                    <form id="awts" class="input-container">
                    <input type="text" placeholder="Enter your name" name="text1" id="text" class="input-field">
                    <label class="input-label" for="text">announcement</label>
                    <button type="submit" class="btn btn-primary announ-btn" id="postBtn">POST</button>
                    </form>     
                
            </div>
            <div id="tblContainer" class="col-md-6 col-md-offset-3" > 
			<table id="sabaw" class="table">
			<thead>
				<th> ID </th>
				<th> announcement </th>
				<th> user </th>
				<th> Action </th>
			</thead>
			<tbody>
			<?php
				$conn = mysqli_connect("localhost","root","","disasterdb");
				
				$query = $conn->query("SELECT ann.ann_id, ann.ann_text, user.usr_username
				FROM ann
				INNER JOIN user ON ann.ann_usr = user.usr_id");
				
				
				while( $data = mysqli_fetch_array( $query ) ) {
			?>
				<tr id="tr_<?php echo $data['ann_id'] ?>">
					<td> <?php echo $data['ann_id'] ?> </td>
					<td> <?php echo $data['ann_text'] ?> </td>
					<td> <?php echo $data['usr_username'] ?> </td>
					<td> 
						<button class="btn btn-warning edit" id="<?php echo $data['ann_id'] ?>"> 
							
						</button> 
						<button class="btn btn-danger del" id="<?php echo $data['ann_id'] ?>"> 
						
						</button> 
					</td>
				</tr>
			<?php } ?> 			
			</tbody>
		</table>
	</div>
                
        </div>
    </div>
</div>
    </section>
	
















	<div class="control-main">
	<!-- start of edit form modal--->
	<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="exampleModalLabel">Edit User Form</h4>
		  </div>
		  <div class="modal-body">
			 
		  </div>
		  <div class="modal-footer">
			&copy; Developed by: Alilulu!
		  </div>
		</div>
	  </div>
	</div>	
	<!-- end of edit form modal-->
</div>
<script src="css/script/control-nav.js"></script>
</body>
</html>