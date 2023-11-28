
<script src="jquery/announ/post-announ.js"></script>

<div class="announ-main-cs">
    <div class="announ-logo">
        <img src="image/announ1.jpg" alt="">
    </div>
    <div class="announ-cont-main">
        <div class="announ-side">
        <div class="news-ann">
            <div class="news-title">
                <h5>Pdrm News</h5>
            </div>
             <div class="news-list">
                
             </div>
        </div>
        </div>
        <div class="announ-right">
          <div class="user-ann-title"><h1>Announcement</h1></div>
			<?php
				$conn = mysqli_connect("localhost","root","","disasterdb");
				
				$query = $conn->query("SELECT * FROM ann");
				
				
				while( $data = mysqli_fetch_array( $query ) ) {
			?>
				<div class="user-post-list"><i class='bx bxs-message-square-dots'></i> <?php echo $data['ann_text'] ?></div>

			<?php } ?> 			
                
        </div>
    </div>
</div>

<!-- modal -->