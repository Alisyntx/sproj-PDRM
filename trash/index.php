
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="bootstrap/animate.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- fonts -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=EB+Garamond&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ad065ca29c.js" crossorigin="anonymous"></script>   
</head>
<body>
  <script type="text/javascript" src="jquery/jquery.js"></script>
  <!-- <script src="/jquery/indexFunctions.js"></script> -->
  <script src="/jquery/register.js"></script>
  <script src="/jquery/regnew.js"> </script>
  <script src="/jquery/regnew.js"> </script>



   <div class="img-bg container-fluid">
   <nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
   
    <div class="akon">
    <button class="navbar-toggler nav-own" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="logo-own" href="#">DRM</a>
 

    <form class="d-flex src-own col-md-2 " role="search">
      <input class="form-control form-own me-2" type="search" placeholder="Search" aria-label="Search">
    
    </form>
 
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<div class="content0">
</div>
  <div class="content1">
    <h1 class="cnt1-hed1">Pahfakocoy</h1>
    <h3 class="cnt1-hed2">Risk Management System</h3>
    <button  class="cnt1-btn1" id="ctn1-btn1-js">Register</button>
    <button class="cnt1-btn2" id="cnt1-btn2-js">log in</button>
   
  </div>
  <div class="content2" id="content2s">
  </div>
  <div class="reg-form-container container-fluid" id="reg-form-js">
    <form id="form1" class="reg-form-cos" >
          <div class="status-js" id="">check</div>
        <h1 class="reg-head">PHCOY DRM <span><hr></span></h1>
    <div id="slide1">
        <div class="d-flex">
           <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i>
          <input type="text" name="firstname" class="reg-input1 form-control" id="inputfa"
        placeholder="firstname" required>
        </div>

        <div class="d-flex">
           <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i><input type="text" name="lastname" class="reg-input1 form-control" placeholder="Lastname" required>
        </div>

        <div class="d-flex">
           <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i>
           <input type="text" name="age" class="reg-input1 form-control" placeholder="Age" required>
        </div>

        <div class="d-flex">
          <i class="fa-solid fa-venus-mars fa-bounce fa-own1"></i>
          <input type="text" name="gender" class="reg-input1 form-control" placeholder="Gender" required>
        </div>

        <div class="d-flex">
          <i class="fa-solid fa-phone fa-bounce fa-own"></i>
          <input type="text" name="contact" class="reg-input1 form-control" placeholder="Contact#" required>
        </div>

        <div class="d-flex">
          <i class="fa-regular fa-envelope fa-bounce fa-own"></i>
          <input type="text" name="email" class="reg-input1 form-control" placeholder="Email" required>
        </div>

        <div class="d-flex">
          <i class="fa-solid fa-location-dot fa-bounce fa-own2"></i>
          <input type="text" name="address" class="reg-input1 form-control" placeholder="Address" required>
        </div>
    </div>
        <div id="slide2">
          <div class="d-flex">
            <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i>
            <input type="text" name="username" class="reg-input1 form-control" id="inputfa"
          placeholder="username" required>
          </div>
          <div class="d-flex">
          <i class="fa-solid fa-key fa-bounce fa-own"></i>
            <input type="text" name="password" class="reg-input1 form-control" id="inputfa"
          placeholder="password" required>
          </div>
        </div>

        
        <button type="submit" class="reg-btn" id="btn-submit-js"> register

        </button>

        <button class="reg-btn2" name="registerBtn" id="btnSlide">>></button>
    </form>
  </div>
  <div class="reg-form-container container-fluid" id="login-con">
    <form action="" method="post" class="reg-form-cos">
        <h1 class="reg-head">Log in <span><hr></span></h1>
        <div id="slide3">
          <div class="d-flex">
            <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i>
            <input type="text" name="username" class="reg-input1 form-control" id="inputfa"
          placeholder="username" required>
          </div>
          <div class="d-flex">
          <i class="fa-solid fa-key fa-bounce fa-own"></i>
            <input type="text" name="password" class="reg-input1 form-control" id="inputfa"
          placeholder="password" required>
          </div>
        </div>
        <input type="submit" class="reg-btn" id="btn-submit-js" name="loginBtn" value="Log in">
    </form>
  </div>
</div>
 
  


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>