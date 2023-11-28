<?php 
$conn = mysqli_connect("localhost","root","","disasterdb");
$id = $_POST['akoSiID'];
				
$query = $conn->query("SELECT * FROM user WHERE usr_id = '$id'");


$data = mysqli_fetch_array( $query );
?>

<form id="updateUser">
		<div class="status"> </div>
		<input type="hidden" name="ID" value="<?php echo $id ?>" /> 
		<div class="form-group">
			<label> firstname </label>
			<input type="text" name="text1" class="form-control" value="<?php echo $data['usr_firstname'] ?>" /> 
		</div>
		<div class="form-group">
			<label> lastname </label>
			<input type="text" name="text2" class="form-control" value="<?php echo $data['usr_lastname'] ?>" /> 
		</div>
		<div class="form-group">
			<label> age </label>
			<input type="text" name="text3" class="form-control" value="<?php echo $data['usr_age'] ?>" /> 
		</div>
		<div class="form-group">
			<label> gender </label>
			<input type="text" name="text4" class="form-control" value="<?php echo $data['usr_gender'] ?>" /> 
		</div>
		<div class="form-group">
			<label> contact </label>
			<input type="text" name="text5" class="form-control" value="<?php echo $data['usr_contact'] ?>" /> 
		</div>
		<div class="form-group">
			<label> email </label>
			<input type="text" name="text6" class="form-control" value="<?php echo $data['usr_email'] ?>" /> 
		</div>
		<div class="form-group">
			<label> address </label>
			<input type="text" name="text7" class="form-control" value="<?php echo $data['usr_addr'] ?>" /> 
		</div>
		<div class="form-group">
			<label> username </label>
			<input type="text" name="text8" class="form-control" value="<?php echo $data['usr_username'] ?>" /> 
		</div>
		<div class="form-group">
			<label> Password </label>
			<input type="text" name="text9" class="form-control" value="<?php echo $data['usr_password'] ?>" /> 
		</div>
		
		<button type="submit" class="btn btn-primary pull-right"> 
			<i class="glyphicon glyphicon-floppy-disk"> </i> Save 
		</button>
		<div class="clearfix"> </div>
</form>