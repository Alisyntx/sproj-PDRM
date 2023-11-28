<?php 
$conn = mysqli_connect("localhost","root","","disasterdb");
$id = $_POST['akoSiID'];
				
$query = $conn->query("SELECT * FROM status WHERE stats_id = '$id'");

$data = mysqli_fetch_array( $query );
?>

<form id="updateUser">
		<div class="status"> </div>
		<input type="hidden" name="ID" value="<?php echo $id ?>" /> 
		<div class="form-group">
			<label> text </label>
			<input type="text" name="text1" class="form-control" value="<?php echo $data['stats_name'] ?>" /> 
			<select name="text2" class="form-select mt-2" aria-label="Default select example">
				<option value="<?php echo $data['stats_stats']; ?>"><?php echo $data['stats_stats']; ?></option>
				<option value="Available">Available</option>
				<option value="Not Available">Not Available</option>
			</select>
			<input type="text" name="text3" class="form-control mt-2" value="<?php echo $data['stats_amnt'] ?>" /> 
		</div>
		<button type="submit" class="btn btn-primary pull-right mt-3"> 
			<i class="glyphicon glyphicon-floppy-disk"> </i> Save 
		</button>
		<div class="clearfix"> </div>
</form>