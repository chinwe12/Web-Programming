<?php
session_start();//session starts here

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Homepage</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="#"target="_blank">
        <strong>PROJECT</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about_course" target="_blank">About course/project</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about_us" target="_blank">About us</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration.php" target="_blank">Register</span></a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://twitter.com/outlawz_bt" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://github.com/btambaya/CSC313" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fab fa-github mr-2"></i>GitHub
            </a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fab fa-github mr-2"></i>Login
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">
        <h1 class="mb-4">
          <strong>WEB PROGRAMMING</strong>
        </h1>

        <p>
          <strong>CSC 313 PROJECT</strong>
        </p>

        <p class="mb-4 d-none d-md-block">
          <strong>Group one with stroop test.</strong>
        </p>

        <a target="_blank" href="login.php" class="btn btn-outline-white btn-lg">Login
          <i class="fas fa-graduation-cap ml-2"></i>
        </a>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="img/imgone.png" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Stroop Test</h3>
            <p>This project was created by group one of <strong>CSC313</strong> class</p>
            <p><strong>Description:</strong>coloured numbers will a presented at the center of the screen for a peroird of 1 second. participants will be asked to click on the <strong>BOTTON</strong> that matches the colored words.</p>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->
      <a id="about_course"></a>
      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section>
        <h3 class="h3 text-center mb-5">About course/project</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
              </div>
              <div class="col-10">
                <p class="grey-text">This web design project is aomed at strengthening your understanding of the fundamental building blocks of a real website. Projects have been created to allow you the oppurtunity to demonstrate your web design skills.</p>
                <h6 class="feature-title"><strong>General Requirements</strong></h6>
                <ol><li>Header
                  <ul>
                  <li>About course/project</li>
                  <li>About Group</li>
                </li></ul>
                <li>Footer</li>
                <li>User Login/Register</li>
                <li>Display users and their scores</li>
                <li>Add project to <strong>GITHUB</strong></li>
                  

                </ol>
              </div>
            </div>
         
      </section>
      <!--Section: Main features & Quick Start-->
      <a id="about_us"></a>
      <hr class="my-5">

      <!--Section: About us-->
      <section>

        <h2 class="my-5 h3 text-center">About us</h2>
       <div class="row wow fadeIn">
        <div class="col-10">
        <p class="grey-text">We are students of Nile university of Nigeria, studying computer science in faculty of natural and applied sciences(FNAS) 300lvl. This is our CSC313 end of semester project. We are group one in the list. </p>
      </div>
      </div>
        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-4">
            <!--First row-->
            <div class="row" style="height: 20vh">
              <div class="col-2">
                <img src="img/tambaya.jpg" height="80px">
              </div>
              <div class="col-10">
                <h6 class="feature-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ahmad Nurudeen Tambaya</h6>
                <p class="grey-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;161103031</p>
                <p class="grey-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;300lvl student</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->

            <!--First row-->
            <div class="row" style="height: 20vh">
              <div class="col-2">
                <img src="img/avatarfemale.png" height="80px">
              </div>
              <div class="col-10">
                <h6 class="feature-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chinwe Uzegbu</h6>
                <p class="grey-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;123456</p>
                <p class="grey-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;300lvl student</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->

            <!--First row-->
            <div class="row" style="height: 20vh">
              <div class="col-2">
                <img src="img/avatarmale.png" height="80px">
              </div>
              <div class="col-10">
                <h6 class="feature-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bilyaminiu suleiman</h6>
                <p class="grey-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;123456</p>
                <p class="grey-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;300lvl student</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <!--First row-->
            <div class="row" style="height: 20vh">
              <div class="col-2">
                <img src="img/avatarfemale.png" height="80px">
              </div>
              <div class="col-10">
                <h6 class="feature-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maryam mohammed Abdulsalam</h6>
                <p class="grey-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;123456</p>
                <p class="grey-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;300lvl student</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
        </div>
      </div>
    </div>
      </section>
      <!--Section: about us-->

      <hr class="mb-5">

      <!--Section: More-->
  
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://twitter.com/outlawz_bt" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>
      <a href="https://github.com/btambaya/CSC313" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
