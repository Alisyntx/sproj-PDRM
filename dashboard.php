<?php
// Start a new session or resume the existing session
session_start();
$session_user = 	$_SESSION['user'];
$session_user_id = 	$_SESSION['user_id'];
if (empty($_SESSION['user']) || empty($_SESSION['user_id'])) {
    // If not authenticated, redirect to an error page or display an error message
    header('Location: forms.php'); // Create an "error.php" page for this purpose
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
    <title>admin dashboard</title>
    <!-- bootstrap -->
    <link href="bootstrap/animate.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/weather.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <!-- custom -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/location.css">
    <link rel="stylesheet" href="css/announ.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/report.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <!-- chart script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="jquery/upload.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <!-- nav-scripts -->
    <script src="css/script/anim-dash.js"></script>
</head>
<body onload="DefaultScreen()">
    <!-- modals -->
    <?php include('modals.php') ?>

    <!-- dashboard navigatopn -->
    <?php include('dashboard-nav.php') ?>

    <nav class="topnav">
        <?php 
        $conn = mysqli_connect("localhost","root","","disasterdb");
        $query = $conn->query("SELECT * FROM user WHERE usr_id = '$session_user_id'");
        $data = mysqli_fetch_array( $query ); 
        ?>
        <div class="text1"><span class="fw-semibold">ADMIN:&nbsp;</span> <?php echo $data['usr_firstname'] ?>  <?php echo $data['usr_lastname'] ?></div>
        <div class="text">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                <i class='bx bxs-user-circle'></i>
            </button>
        </div>
    </nav>

    <section class="home" id="homeNav">
       <?php include("dash-main.php") ?>
    </section>

    <section class="home" id="announNav">
        <?php include("announce.php")?>
    </section>

    <section class="home" id="centerNav">
        <?php include("center.php")?>
    </section>

    <section class="home" id="weatherNav">
        <?php include("weather.php") ?>
    </section>

    <section class="home" id="reportNav">
        <?php include("report.php")?>
    </section>

    <section class="home" id="userNav">
        <?php include("users.php")?>
    </section>

    <section class="home" id="genrepNav">
        <?php include("genreport.php")?>
    </section>
 
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/custom.js"></script>
<script src="jquery/weather.js"></script>
<script src="css/script/nav-script.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="jquery/chart/graph.js"></script>

</body>
</html>
