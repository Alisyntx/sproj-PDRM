<script src="jquery/center/center.js"></script>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content  modal-cost">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Available</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table table-hover">
                            <thead>
                                <th>Center</th>
                                <th>Status</th>
                                <th>Capacity</th>
                                <th>Update</th>
                            </thead>
                            <tbody id="centertbl">
                              <?php
                              $conn = mysqli_connect("localhost","root","","disasterdb");
                                $query = $conn->query("SELECT * FROM status");
                                while($data = mysqli_fetch_array($query)){
                               ?>
                               <tr id="tr_<?php echo $data['stats_id'] ?>">
                                    <td><?php echo $data['stats_name'] ?></td>
                                    <td><?php echo $data['stats_stats'] ?></td>
                                    <td><?php echo $data['stats_amnt'] ?></td>
                                    <td> 
						<button type="button" class="btn btn-warning edit" id="<?php echo $data['stats_id'] ?>" data-bs-toggle="modal"data-bs-target="#exampleModal6"> 
						<i class='bx bx-edit-alt' style='font-size: 1.5rem;' ></i>
						</button> 
					</td>
                               </tr>
                               <?php } ?>
                            </tbody>
                       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>  
</div>

<!-- user info -->
<div class="modal fade" id="exampleModal2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">User Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="user-info-modmain">
        <?php   
         $conn = mysqli_connect("localhost","root","","disasterdb");
                    $sqlUsr = "Select * from `user` where usr_username = '$session_user'";
                        $resultUsr = $conn->query($sqlUsr);  
                        if($resultUsr->num_rows > 0){  
                            $row_dataUsr = $resultUsr->fetch_assoc();
                        
                            $username = $row_dataUsr['usr_username'];
                            $firstname = $row_dataUsr['usr_firstname'];
                            $lastname = $row_dataUsr['usr_lastname'];
                            $userimage = $row_dataUsr['usr_image'];
                            
                        }              
                ?>
            <div class="left-user-m">
                <div class="user-image">
                <?php
                    if (!empty($userimage)) {
                        echo '<img src="' . $userimage . '" alt="User Image">';
                    } else {
                        echo '<p>No image found for the user.</p>';
                    }
                    ?>
                </div>
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
                    upload
                </button>
            </div>
            <div class="right-user-m">
                <div class="right-info-m">  
                        
                        <h6>Username: <span><?php echo $username; ?></span></h6>
                        <hr>
                        <h6>firstname: <span><?php echo $firstname; ?></span></h6>
                        <hr>
                        <h6>lastname: <span><?php echo $lastname; ?></span></h6>
                </div>
            </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Upload Profile</h5><span id="error-upload"></span>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="error-upload"></div>
      <form class="upl-inp" enctype="multipart/form-data" method="post" id="uploadForm">
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload Image" id="uploadBtn" class="btn btn-secondary">
      </form>

      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>

<!-- user Count -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content  modal-cost">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Users</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php 
        $sql = "SELECT COUNT(usr_username) AS total_users FROM user";

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $totalUsers = $row['total_users'];
                    
        ?>
        <div class="user-count">
          <div class="user-count-cotn">
            <?php echo $totalUsers; ?>
          </div> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>  
</div>


<!-- announcement modal -->

<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content  modal-cost">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ann-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>  
</div>
<!-- center modal -->
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content  modal-cost">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body center-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>  
</div>