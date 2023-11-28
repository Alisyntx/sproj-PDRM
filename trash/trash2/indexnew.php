<?php include("php/connection.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
    <link href="bootstrap/animate.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles here -->
    <link rel="stylesheet" href="css/stylenew.css">
    <link rel="stylesheet" href="css/form.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=EB+Garamond&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ad065ca29c.js" crossorigin="anonymous"></script>   
</head>
<body>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script src="/jquery/mainindex.js"></script>
    <script src="/jquery/registration.js"></script>
    <script src="/jquery/newvalidate.js"></script>
    <script src="/jquery/responsive.js"></script>

    <div id="crts-js" class="crts-cs">
    <creattie-embed
        src="jquery/Management.json"
        delay="2"
        speed="100"
        frame_rate="24"
        stroke_width="15"
        trigger="loop"
        style="width:300px;background-color: white">
    </creattie-embed>
    </div>
  <div id="pop-container" class="container">
    <div id="container-lg-js" class="container-all-cs container">
      <div id="container-fade"></div>
       <div class="img-lg-cs" id="img-lg-js"></div>
        <button id="name-lg-js" class="name-lg-cs">DRM</button>
          <h2 id="text-js" class="text-cs">Pahanocoy Disaster Risk Management</h2>
              <div class="con-reg-cs" id="con-reg-js">
                <form id="form1" class="reg-form-cos" >
                  <div class="status-js status-cs"></div>
                    <h1 class="reg-head">PDRM registration<hr></h1>
                      <div id="slide1">
                           <div class="d-flex flex-cos">
                              <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i><input type="text" name="firstname" class="reg-input1 form-control" id="inputfa" placeholder="firstname" required>
                            </div>
                            <div class="d-flex flex-cos">
                              <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i><input type="text" name="lastname" class="reg-input1 form-control" placeholder="Lastname" required>
                            </div>
                            <div class="d-flex flex-cos">
                              <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i>
                              <input type="text" name="age" class="reg-input1 form-control" placeholder="Age" required>
                            </div>    
                            <div class="d-flex flex-cos">
                              <i class="fa-solid fa-location-dot fa-bounce fa-own2"></i>
                              <input type="text" name="address" class="reg-input1 form-control" placeholder="Address" required>
                            </div>            
                      </div>
                      <div id="slide2">
                            <div class="d-flex flex-cos">
                              <i class="fa-solid fa-venus-mars fa-bounce fa-own1"></i>
                              <input type="text" name="gender" class="reg-input1 form-control" placeholder="Gender" required>
                            </div>
                            <div class="d-flex flex-cos">
                              <i class="fa-solid fa-phone fa-bounce fa-own"></i>
                              <input type="text" name="contact" class="reg-input1 form-control" placeholder="Contact#" required>
                            </div>
                            <div class="d-flex flex-cos">
                              <i class="fa-regular fa-envelope fa-bounce fa-own"></i>
                              <input type="text" name="email" class="reg-input1 form-control" placeholder="Email" required>
                            </div>
                            
                      </div>
                      <div id="slide3">
                            
                            <div class="d-flex flex-cos">
                              <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i>
                              <input type="text" name="username" class="reg-input1 form-control"placeholder="username" required>
                            </div>
                            <div class="d-flex">
                              <i class="fa-solid fa-key fa-bounce fa-own"></i>
                              <input type="password" name="password" class="reg-input1 form-control" id="input-strnt" placeholder="password" required><br>
                            </div>
                            <div id="input-wrn-js" class="input-wrn-cs"></div>
                            <div class="d-flex">
                              <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i>
                              <input type="password" class="reg-input1 form-control" id="input-vrfy" placeholder="confirm password" required>
                            </div>
                            <p id="input-vrf-js" class="input-wrn-cs"></p>
                            <div class="d-flex">
                              <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i>
                              <input type="password" class="reg-input1 form-control" id="" placeholder="authentication code" required>
                            </div>

                      </div>
                  <button class="nxt-btn" id="rgs-btn-js">register</button>
                 </form>
                  <button  class="prv-btn" id="prv-btn-js">prev</button>
                  <button class="nxt-btn" id="next-btn-js">next</button>
              </div>
              <div class="con-logn-cs" id="con-logn-js">
                <form id="form2" class="reg-form-cos">
                  <div class="status-js" id=""></div>
                    <h1 class="reg-head">PDRM <span class="span-reg">Log in</span><hr></h1>
                      <div id="slide1">
                           <div class="d-flex flex-cos">
                              <i class="fa-solid fa-circle-user fa-bounce fa-own" id="icon-cos"></i><input type="text" name="username" class="reg-input1 form-control" id="username-js" placeholder="username" required>
                            </div>
                            <div class="d-flex flex-cos">
                              <i class="fa-solid fa-key fa-bounce fa-own"></i><input type="text" name="password" class="reg-input1 form-control" id="inputfa" placeholder="password" required>
                            </div>                
                      </div>
                  <!-- <button class="nxt-btn" id="rgs-btn-js">register</button> -->
                  <input class="nxt-btn" type="submit" id="next-btnlgn-js" placeholder="Log-in">
                 </form>
                 
              </div>
    </div>
        <div id="main-clip-js">   
          <button class="lgn-btn-cs" id="lgn-btn-js">log in</button>
            <div class="clip1-cs" id="clip1-js"></div>
             <div class="clip2-cs" id="clip2-js"></div>
               <div class="clip3-cs" id="clip3-js"></div>
            <!-- second clips -->
          <button class="lgn-btn1-cs" id="lgn-btn1-js">register</button>
            <div class="clip21-cs" id="clip21-js"></div>
              <div class="clip22-cs" id="clip22-js"></div>
                <div class="clip23-cs" id="clip23-js"></div>        
        </div>
  </div>
  <div class="about-cs">
    <div class="about-cnt-bg">
      <div class="about-txt-cs">
        <h2>About us</h2>
        <p>We are a dedicated team of chmsu committed to ensuring the safety and resilience of Pahanocoy, a place we call home. Our Project Disaster Risk Management team is passionate about creating a safer, more secure environment for our community. We believe that proactive disaster management is the key to safeguarding our cherished Pahanocoy against the unexpected.</p>
      </div>
    </div>
      <img class="about-img-cs" src="/image/aboutbg.svg">
  </div>
    <script src="https://creattie.com/js/embed.js?id=adfc0335539d5f5148f7" defer></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="./jquery/mainindex.js"></script>
</body>
</html>