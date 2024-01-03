<?php 
$id = $_POST['akoSiID'];				
    $conn = mysqli_connect("localhost","root","","disasterdb");	
    $query = $conn->query("SELECT * FROM report 
    INNER JOIN user ON rpt_id_usr = usr_id 
    INNER JOIN reportdesc ON report.rpt_desc_fkid = rpt_desc_id 
    WHERE rpt_id_usr = $id");
    $data = mysqli_fetch_array( $query );
?> 
<form id="updateUser">
		<div class="status"> </div>
			<input type="hidden" name="ID" value="<?php echo $id ?>" /> 
				<div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> <?php echo $data['rpt_message'] ?></textarea>
                    </div>
				</div>
					<button type="submit" class="btn btn-primary pull-right mt-3"> 
						<i class="glyphicon glyphicon-floppy-disk"> </i> Save 
					</button>
		<div class="clearfix"> </div>
</form>
