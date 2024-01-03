
<script src="../jquery/announ/post-announ.js"></script>
<script src="userajax/user-issueedit.js"></script>


<div class="announ-main-cs">
    <div class="announ-logo">
        <img src="../image/announ1.jpg" alt="">
    </div>
    <div class="announ-cont-main">
        <div class="announ-side">
        <div class="news-ann">
            <div class="news-title">
                <h5>Your Issue</h5>
            </div>
             <div class="news-list">
             <?php
                    $session_user_id = $_SESSION['user_id'];
                    $conn = mysqli_connect("localhost","root","","disasterdb");	
                    $query = $conn->query("SELECT * FROM report 
                    INNER JOIN user ON rpt_id_usr = usr_id 
                    INNER JOIN reportdesc ON report.rpt_desc_fkid = rpt_desc_id 
                    WHERE rpt_id_usr = $session_user_id");
                    while( $data = mysqli_fetch_array( $query ) ) {
                ?>  
            <div class="report-usr" id="<?php echo $data['rpt_id']; ?>">
                <div class="report-contuser" id="report-contuser">
                            <button  type="button" class="btnUserList edit" id="<?php echo $data['rpt_id_usr'] ?>" data-bs-toggle="modal" data-bs-target="#issModal">
                             <?php echo $data['rpt_desc'] ?>
                            </button>
                </div>
                    <span class="report-footer">
                        <p>
                                       
                        </p>
                    </span>
            </div>
                <?php } ?> 
             </div>
        </div>
        </div>
        <div class="announ-right">
          <div class="user-ann-title"><h1>Announcement</h1></div>
          <?php
$conn = mysqli_connect("localhost", "root", "", "disasterdb");
$query = $conn->query("SELECT ann_text, ann_insert FROM ann");

if ($query->num_rows > 0) {
    while ($data = $query->fetch_assoc()) {
      // Specify the format of the time in your database (military time)
    $format = 'Y-m-d H:i:s'; // Adjust this according to your actual format
    
    // Get the current time in the same format as the database
    $current_time = date($format);

    // Calculate the time difference in minutes
    $time_diff = strtotime($current_time) - strtotime($data['ann_insert']);
    $minutes_ago = round($time_diff / 60);
    $final_time = $minutes_ago + 420;
    
        
        if ($final_time < 60) {
            $time_ago = $final_time . ' minutes ago';
        } elseif ($final_time < 1440) {
            $hours_ago = round($final_time / 60);
            $time_ago = $hours_ago . ' hours ago';
        } else {
            $days_ago = round($final_time / 1440);
            $time_ago = $days_ago . ' days ago';
        }

        // Display the content and time difference
        ?>
        <div class="user-post-list">
            <div class="list-cont">
                <i class='bx bxs-message-square-dots'></i>
                <?php echo $data['ann_text']; ?>
            </div>
            <span class="time-ago"><p><?php echo $time_ago; ?></p></span>
        </div>
       
        <?php
    }
} else {
    echo "0 results";
}
?>

                
        </div>
    </div>
</div>

<!-- modal -->
