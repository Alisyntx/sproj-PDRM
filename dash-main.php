<script src="jquery/center/center.js"></script>
<div class="chart-cs" id="main-dash-cont">
          <div class="chart1-cs" id="chart1-js">
            <div class="chart-title">Years Analysis</div>
            <div id="main" style="width: 600px;height:500px;"></div>
            <?php require("graph.php") ?>
   
     
    </script>
            </div>  
            <div class="act-rpts-cs" id="act-rpts-js">
                <div class="center-card1">
                    <h4><i class='bx bxs-user-pin'></i></h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    User
                    </button>
                </div>
                <div class="center-card1">
                    <h4><i class='bx bx-clinic'></i></h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Evacuation
                    </button>
                </div>
                <div class="center-card1">
                    <h4> <i class='bx bxs-comment-detail iconi'></i></h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#announModal">     
                        <marquee behavior="scroll" direction="left">
                        Announcement
                        </marquee>
                    </button>
                </div>
                <div class="center-card1">
                    <h4><i class='bx bxs-report iconi'></i></h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#issueModal">
                    Issue
                    </button>
                </div>
             </div>
        </div>