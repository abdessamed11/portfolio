<?php
include("connect.php");

$query_type23 = "SELECT * FROM profit";
$result23 = mysqli_query($con,$query_type23);
$row22 = mysqli_fetch_assoc($result23);

session_start();
if(isset($_POST['submit'])){

    //Récupérer POST ::
    $name=htmlspecialchars(strtolower(trim($_POST['email'])));
    $password=($_POST['password']);

    //Réquête
    $query = "SELECT id FROM login WHERE email='$name' && password='$password'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
    $_SESSION['name']=$name;
      header('location:home.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>portfolio</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
  <link href="asset/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="asset/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- font icon -->
  <link href="asset/vendor/bootstrap/csslogin/elegant-icons-style.css" rel="stylesheet" />
  <link href="asset/vendor/bootstrap/csslogin/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="asset/vendor/bootstrap/csslogin/style-login.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/csslogin/style-responsive.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Laura - v2.1.0
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#resume">Resume</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="login.php">Login</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Page admin</h1>
      <h2>vous devez se connecter pour modifier le portfolio</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= login Section ======= -->

    <div class="login-content container text-center my-5">
      <form action="" method="POST">

        <h2 class="title">Welcome</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <input type="email" placeholder="Email" class="input" name="email" require>
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i">
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <input type="password" placeholder="Password" class="input" name="password" require>
                 </div>
              </div>
                <button class="btn" type=submit name="submit">LoginIn</button>

            </form>
        </div>
    </div>

    </section>
    <!-- ======= login Section ======= -->









  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3><?=$row22['nom'];?> <?=$row22['prenom'];?></h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/jquery/jquery.min.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="asset/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="asset/vendor/counterup/counterup.min.js"></script>
  <script src="asset/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

</body>

</html>
