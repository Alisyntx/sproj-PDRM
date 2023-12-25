<?php 
session_start();
$conn = mysqli_connect("localhost","root","","disasterdb");
$id = $_POST['akoSiID'];				
$query = $conn->query("SELECT * FROM ann WHERE ann_id = '$id'");
$data = mysqli_fetch_array( $query );
?>

<form id="updateUser">
		<div class="status"> </div>
		<input type="hidden" name="ID" value="<?php echo $id ?>" /> 
		<div class="form-group">
			<input type="hidden" name="session" value="<?php echo $session_user_id = $_SESSION['user_id'];?>">
			<label> text </label>
			<input type="text" name="text1" class="form-control" value="<?php echo $data['ann_text'] ?>" /> 
		</div>
		<button type="submit" class="btn btn-primary pull-right mt-3"> 
			<i class="glyphicon glyphicon-floppy-disk"> </i> Save 
		</button>
		<div class="clearfix"> </div>
</form>
