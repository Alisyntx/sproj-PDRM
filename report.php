
<script src="jquery/report/report.js"></script>
<script src="sms.js"></script>

<div class="report-main-cs" id="rprt">
    <div class="report-list">
        <div class="report-title"> <h4>Issue Report</h4> </div>
                <?php
                    $conn = mysqli_connect("localhost","root","","disasterdb");	
                    $query = $conn->query("SELECT * FROM report INNER JOIN user ON rpt_id_usr = usr_id INNER JOIN reportdesc ON report.rpt_desc_fkid = rpt_desc_id");
                    while( $data = mysqli_fetch_array( $query ) ) {
                ?>  
            <div class="report-usr" id="<?php echo $data['rpt_id']; ?>">
                <div class="report-cont">
                    <i class='bx bxs-message-rounded-error'></i>
                         <h5><?php echo $data['rpt_desc'] ?></h5> 
                </div>
                    <span class="report-footer">
                        <p>
                            <?php echo $data['usr_firstname'] ?>
                            <a href="#" type="button" class="link-secondary view" data-bs-toggle="modal" data-bs-target="#exampleModal" id="<?php echo $data['rpt_id'] ?>"><i class='bx bxs-info-circle'></i></a>             
                        </p>
                    </span>
            </div>
                <?php } ?> 
    </div>
    <div class="sms-main">
        <div class="report-title"> <h4>Message Everyone?</h4> </div>
        <div class="form-container">
            <?php 
                $conn = mysqli_connect("localhost","root","","disasterdb");
                $query = $conn->query("SELECT * FROM user");
            ?>
            <form class="form" id="form-sms">
                <div class="form-group">
                <label for="email">Active Numbers</label>
                 <input type="number" name="number">
                </div>
                <div class="form-group">
                    <label for="textarea">Message</label>
                        <textarea name="message" id="textarea" rows="10" cols="50" required=""></textarea>
                </div>
                <button class="form-submit-btn" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

