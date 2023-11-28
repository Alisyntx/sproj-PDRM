<?php
// Start a new session or resume the existing session
session_start();
$session_user = 	$_SESSION['user'];
$session_user_id = 	$_SESSION['user_id'];
if (empty($_SESSION['user']) || empty($_SESSION['user_id'])) {
    // If not authenticated, redirect to an error page or display an error message
    header('Location: php/error.html'); // Create an "error.php" page for this purpose
    exit();
}

// If the user is authenticated, you can display the dashboard content
// <?php echo $_SESSION['user']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    
    
    <link href="bootstrap/animate.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/weather.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/location.css">
    <link rel="stylesheet" href="css/announ.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/user-css/user-announ.css">
    
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <!-- chart script -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <script src="jquery/upload.js"></script>

    
</head>
<body onload="DefaultScreen()">
    <script src="css/script/anim-dash.js"></script>
    <!-- modalss -->
    <?php include('user-modals.php') ?>
    
    <?php include('dashboard-nav.php') ?>
    </nav>
    <nav class="topnav">
    <div class="text1">user</div>
    <div class="text"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
    <i class='bx bxs-user-circle'></i>
                    </button></div>
    </nav>
    <section class="home" id="homeNav">
       <?php include("user-dash-main.php") ?>
    </section>
   
    <section class="home" id="announNav">
        <?php include("user-announce.php")?>
    </section>

    <section class="home" id="centerNav">
       <?php include ('center.php') ?>
    </section>
    <section class="home" id="weatherNav">
        <?php include("weather.php") ?>
    </section>
    
    
  
    

<script src="jquery/weather.js"></script>
<script src="css/script/nav-script.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="jquery/chart/graph.js"></script>
</body>
</html>
