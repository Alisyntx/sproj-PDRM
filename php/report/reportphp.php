<?php
    $id = $_POST['akoSiID'];
	$conn = mysqli_connect("localhost","root","","disasterdb");	
	
	$query = $conn->query("SELECT * FROM report 
                      INNER JOIN user ON report.rpt_id_usr = user.usr_id 
                      WHERE report.rpt_id = '$id'");
	while($data = mysqli_fetch_array( $query )){
	
?>

<div class="modal-content" id="modal-rpt-cont">
		<div class="modal-header">
        	<h5 class="modal-title" id="exampleModalLabel header-rprt"><?php echo $data['usr_firstname'] ?> 's Report</h5>
       		 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     	</div>
			<div class="modal-body report-body">
				<div class="report-usr">
					<div class="report-cont">
					<i class='bx bxs-message-rounded-error'></i>
					<h5 class="report-text"><?php echo $data['rpt_message'] ?></h5> 
					</div>
					<span class="report-footer">
						<p>
							<?php echo $data['usr_firstname'] ?>
						</p>
					</span>
				</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary delete" data-bs-dismiss="modal" id="<?php echo $data['rpt_id'] ?>">Complete</button>
      </div>
	  <?php
	   }
	  ?>
</div>