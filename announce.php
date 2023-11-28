
<script src="jquery/announ/post-announ.js"></script>

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
					<input type="hidden" name="session" value="<?php echo $session_user_id = $_SESSION['user_id'];?>">
                    <input type="text" placeholder="Enter Text" name="text1" id="text" class="input-field">
                    <label class="input-label" for="text">announcement</label>
                    <button type="submit" class="btn btn-primary announ-btn" id="postBtn">POST</button>
                    </form>     
                
            </div>
            <div id="tblContainer" class="" > 
			<table id="annountbl" class="table">
			<thead>
				<th> ID </th>
				<th> announcement </th>
				<th> user </th>
				<th> Action </th>
			</thead>
			<tbody class="scrolltbl">
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
						<button type="button" class="btn btn-warning edit" id="<?php echo $data['ann_id'] ?>" data-bs-toggle="modal"data-bs-target="#exampleModal5"> 
						<i class="bx bxs-message-square-edit"></i>
						</button> 
						<button class="btn btn-danger del" id="<?php echo $data['ann_id'] ?>"> 
						<i class="bx bxs-message-square-minus"></i>
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

<!-- modal -->