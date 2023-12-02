<div class="user-tbl">
	<?php
				$conn = mysqli_connect("localhost","root","","disasterdb");
				
				$query = $conn->query("SELECT * FROM user");
				
				
				while( $data = mysqli_fetch_array( $query ) ) {
			?>
<div class="user-tbl-list">
			<div class="user-tbl-img">
				<img src="<?php echo $data['usr_image'] ?>" class="img-thumbnail" alt="...">
			</div>
			<h6 class="text-muted">Active</h6>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					info
					</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li class="dropdown-item"><small class="text-muted">Firstname:</small> <?php echo $data['usr_firstname'] ?></li>
					<li class="dropdown-item"><small class="text-muted">Lastname:</small> <?php echo $data['usr_lastname'] ?></li>
					<li class="dropdown-item"><small class="text-muted">Age:</small> <?php echo $data['usr_age'] ?></li>
					<li class="dropdown-item"><small class="text-muted">Email:</small> <?php echo $data['usr_email'] ?></li>
					<li class="dropdown-item"><small class="text-muted">Number:</small> <?php echo $data['usr_contact'] ?></li>
					<li class="dropdown-item"><small class="text-muted">Address:</small> <?php echo $data['usr_addr'] ?></li>
					
					
				</ul>
			</div>
	</div>
			<?php } ?> 		
	
	
</div>