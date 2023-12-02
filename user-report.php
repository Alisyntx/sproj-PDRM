<script src='userajax/user-report.js'></script>
<div class="report-user-cs" id="rprt">
   
    <div class="report-user-list">
    <div class="form-container">
      <?php 
      $conn = mysqli_connect("localhost","root","","disasterdb");
        $query = $conn->query("SELECT * FROM reportdesc");
      ?>
      <form class="form" id="report_issue">
      <input type="hidden" name="user_issue" value="<?php echo $session_user_id = $_SESSION['user_id'];?>">
        <div class="form-group">
          <label for="email">About</label>
         <select name="abt_issue" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
           <?php while($data = mysqli_fetch_array( $query )){ ?>
             <option value="<?php echo $data['rpt_desc_id']; ?>"><?php echo $data['rpt_desc']; ?></option>
           <?php } ?>
         </select>
        </div>
        <div class="form-group">
          <label for="textarea">Report your issue?</label>
          <textarea required="" cols="50" rows="10" id="textarea" name="text_issue"></textarea>
        </div>
        <button type="submit" class="form-submit-btn">Submit</button>
      </form>
      
    </div>
    </div>
</div>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>