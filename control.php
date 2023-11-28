<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example Template</title>
	<!-- css -->
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
      <div class="text">Users</div>
	  <div id="tbl" class="tbl-cs" > 
		<table id="sabaw" class="table">
			<thead>
				<th> ID </th>
				<th> firstname </th>
				<th> lastname </th>
				<th> age </th>
				<th> gender </th>
				<th> contact </th>
				<th> email </th>
				<th> address </th>
				<th> action </th>
		
			</thead>
			<tbody>
			<?php
				$conn = mysqli_connect("localhost","root","","disasterdb");
				
				$query = $conn->query("SELECT * FROM user");
				
				while( $data = mysqli_fetch_array( $query ) ) {
			?>
				<tr id="tr_<?php echo $data['usr_id'] ?>">
				<td> <?php echo $data['usr_id'] ?> </td>
					<td> <?php echo $data['usr_firstname'] ?> </td>
					<td> <?php echo $data['usr_lastname'] ?> </td>
					<td> <?php echo $data['usr_age'] ?> </td>
					<td> <?php echo $data['usr_gender'] ?> </td>
					<td> <?php echo $data['usr_contact'] ?> </td>
					<td> <?php echo $data['usr_email'] ?> </td>
					<td> <?php echo $data['usr_addr'] ?> </td>
					<td> <div class="dropdown">
							<button class="btn-action" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								action
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dp-cs" aria-labelledby="dLabel">
							<button class="btn btn-warning edit" id="<?php echo $data['usr_id'] ?>"> 
							<i class='glyphicon glyphicon-pencil'> </i>
						</button> 
						<button class="btn btn-danger del" id="<?php echo $data['usr_id'] ?>"> 
							<i class='glyphicon glyphicon-trash'> </i>
						</button> 
							</ul>
						</div> </td>
				</tr>
			<?php } ?> 			
			</tbody>
		</table>
	</div>
    </section>
    <section class="home-section">
      <div class="text">Users</div>
	  <div id="tbl" class="tbl-cs" > 
		<table id="sabaw" class="table">
			<thead>
				<th> ID </th>
				<th> firstname </th>
				<th> lastname </th>
				<th> age </th>
				<th> gender </th>
				<th> contact </th>
				<th> email </th>
				<th> address </th>
				<th> action </th>
		
			</thead>
			<tbody>
			<?php
				$conn = mysqli_connect("localhost","root","","disasterdb");
				
				$query = $conn->query("SELECT * FROM user");
				
				while( $data = mysqli_fetch_array( $query ) ) {
			?>
				<tr id="tr_<?php echo $data['usr_id'] ?>">
				<td> <?php echo $data['usr_id'] ?> </td>
					<td> <?php echo $data['usr_firstname'] ?> </td>
					<td> <?php echo $data['usr_lastname'] ?> </td>
					<td> <?php echo $data['usr_age'] ?> </td>
					<td> <?php echo $data['usr_gender'] ?> </td>
					<td> <?php echo $data['usr_contact'] ?> </td>
					<td> <?php echo $data['usr_email'] ?> </td>
					<td> <?php echo $data['usr_addr'] ?> </td>
					<td> <div class="dropdown">
							<button class="btn-action" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								action
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dp-cs" aria-labelledby="dLabel">
							<button class="btn btn-warning edit" id="<?php echo $data['usr_id'] ?>"> 
							<i class='glyphicon glyphicon-pencil'> </i>
						</button> 
						<button class="btn btn-danger del" id="<?php echo $data['usr_id'] ?>"> 
							<i class='glyphicon glyphicon-trash'> </i>
						</button> 
							</ul>
						</div> </td>
				</tr>
			<?php } ?> 			
			</tbody>
		</table>
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