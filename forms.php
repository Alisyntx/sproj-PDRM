<?php include("php/connection.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/depota.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200;300;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- icon -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<script src="jquery/jquery.js"></script>
<script src="jquery/animates.js"></script>
<script src="jquery/prevent.js"></script>
<script src="jquery/registration.js"></script>
<script src="jquery/newvalidate.js"></script>


<body>
    <div class="main-form-cont">
      <div class="main-half">
        <div class="left-half" id="left-half"></div>
        <div class="right-half" id="right-half">
          <div class="main-btn-rt">
            <button class="button" id="lgn-btn">Log-in</button>
            <button class="button" id="sgn-btn">Sign-up</button>
          </div>
          <div class="head-form">
            <h4 id="head-text">Sign Up</h4>
            <h3 id="error-msg"></h3>
          </div>
          <div class="login-box" id="sgn-box">
            <form id="form1">
              <div class="slide1" id="slide1">
                <div class="user-box">
                    <input type="text" name="firstname" required="">
                    <label>First name</label>
                </div>
                <div class="user-box">
                    <input type="text" name="lastname" required="">
                    <label>Last name</label>
                </div>
                <div class="user-box">
                    <input type="date" id="bday" name="bday" required="">
                    <label>gender</label>
                </div>
                <div class="user-box">
                    <input type="text" name="gender" required="">
                    <label>gender</label>
                </div>
              </div>

              <!-- slide 2 -->

              <div class="slide2" id="slide2">
                <div class="user-box">
                    <input type="number" name="contact" required="">
                    <label>Contact#</label>
                </div>
                <div class="user-box">
                    <input type="text" name="email" required="">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="text" name="address" required="">
                    <label>Address</label>
                </div>
              </div>
              <!-- slide 3 -->
              <div class="slide3" id="slide3">
                <div class="user-box">
                    <input type="text"  name="username" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" id="passwordinp" name="password" required="">
                    <label>Password</label>
                </div>
                <div class="user-box">
                  <input type="password" id="confirmPassword"  name="" required="">
                  <label>Confirm Password</label>
              </div>
              </div>
              <div class="nxt-prv-cont">
              <button href="#" id="submit-js">
                     Sign me
                 <span></span>
              </button>
              </div>
            </form>
            <div class="btn2-cont">
              <button class="btn-nxt" id="btn-nxt">next</button>
              <button class="btn-prv" id="btn-prv">prev</button>
            </div>
          </div>
          <div class="login-box lgn-box" id="lgn-box">
            <form id="form2">
              <div class="slide3" id="slide3">
                <div class="user-box">
                    <input type="text"  name="username" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" id="passwordinp" name="password" required="">
                    <label>Password</label>
                </div>
              </div>
              <div class="nxt-prv-cont">
              <button id="submit-js">
                     Log-in
                 <span></span>
              </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>