
<div class="text">Available Evacuation Center</div>
          <div class="loc-flex">
            <div class="loc-box-head">
                        <iframe class="loc-map" src="https://www.google.com/maps?q=10.613426415322568,122.92690831355901&z=15&t=k&output=embed" style="width: 100%; height:100%;"></iframe>
            </div>
            <div class="loc-main">
            <div class="main-loc-bx">
             <div class="loc-main-txt"><h3>Center 1</h3></div>
                <div class="loc-box">
                    <iframe class="loc-map" src="https://www.google.com/maps?q=10.654214,122.928464&z=20&t=k&output=embed" style="width: 100%; height:100%;"></iframe>
                </div>
            </div>
            <div class="main-loc-bx">
             <div class="loc-main-txt"><h3>Center 2</h3></div>
                <div class="loc-box">
                <iframe class="loc-map" src="https://www.google.com/maps?q=10.612855824990534,122.9324528820686&z=20&t=k&output=embed" style="width: 100%; height:100%;"></iframe>
                </div>
            </div>
            <div class="main-loc-bx">
             <div class="loc-main-txt"><h3>Center 3</h3></div>
                <div class="loc-box">
                <iframe class="loc-map" src="https://www.google.com/maps?q=10.611294981206822,122.93156804839937&z=20&t=k&output=embed" style="width: 100%; height:100%;"></iframe>
                </div>
            </div>
            <div class="main-loc-bx">
             <div class="loc-main-txt"><h3>Status</h3></div>
                <div class="loc-box">
                    <div class="stats-loc">
                       <table class="table table-hover">
                            <thead>
                                <th>Center</th>
                                <th>Status</th>
                                <th>Capacity</th>
                            </thead>
                            <tbody>
                              <?php
                              $conn = mysqli_connect("localhost","root","","disasterdb");
                                $query = $conn->query("SELECT * FROM status");
                                while($data = mysqli_fetch_array($query)){
                               ?>
                               <tr>
                                    <td><?php echo $data['stats_name'] ?></td>
                                    <td><?php echo $data['stats_stats'] ?></td>
                                    <td><?php echo $data['stats_amnt'] ?></td>
                                    
                               </tr>
                               <?php } ?>
                            </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
      </div>