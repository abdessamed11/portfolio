<?php
include("back_office.php");

$query_type23 = "SELECT * FROM profit";
$result23 = mysqli_query($con,$query_type23);
$row22 = mysqli_fetch_assoc($result23);

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
  <link href="asset/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="asset/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">

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
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="home.php">Admin</a></li>
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
      <h1><?=$row22['nom'];?> <?=$row22['prenom'];?></h1>
      <h2>I'm a Professional web developpeur</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content pl-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Name:</strong> <?=$row22['nom'];?> <?=$row22['prenom'];?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> <?=$row22['telephone'];?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> <?=$row22['adresse'];?></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> <?=$row22['diplome'];?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <?=$row22['email'];?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                  </ul>
                </div>
              </div>
              <div class="row mt-n4">
                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-simple-smile" style="color: #20b38e;"></i>
                    <span data-toggle="counter-up">65</span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                    <span data-toggle="counter-up">85</span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time" style="color: #2cbdee;"></i>
                    <span data-toggle="counter-up">12</span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-award" style="color: #ffb459;"></i>
                    <span data-toggle="counter-up">15</span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
            <div class="mt-2 text-center">
                <h2 class="p-0 m-0">Compétence</h2>
            </div>
            <div class="skills-content pl-lg-4 row">
              <?php if(mysqli_num_rows($result)>0 ) : ?>
                <?php  while($row = mysqli_fetch_assoc($result) ) : ?>
              <div class="progress col-6">
                    <div >
                      <span class="skill"><?=$row['competent'];?><i class="val"><?=$row['pourcentage'];?>%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?=$row['pourcentage'];?>" aria-valuemin="0" aria-valuemax="<?=$row['pourcentage'];?>"></div>
                      </div>

                    </div>

              </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>

          </div>
        </div>


      </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>My Resume</span>
          <h2>My Resume</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4><?=$row22['nom'];?> <?=$row22['prenom'];?></h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <p>
              <ul>
                <li><?=$row22['adresse'];?></li>
                <li><?=$row22['telephone'];?></li>
                <li><?=$row22['email'];?></li>
              </ul>
              </p>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <?php if(mysqli_num_rows($result1)>0): ?>
              <?php while($row1=mysqli_fetch_assoc($result1)) : ?>
              <h4><?=$row1['specialiste']?></h4>
              <h5><?=$row1['anne']?></h5>
              <p><em><?=$row1['ecole']?></em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
              <?php endwhile; ?>
            <?php endif; ?>
            </div>

          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <?php if(mysqli_num_rows($result2)>0): ?>
              <?php while($row2=mysqli_fetch_assoc($result2)) : ?>
              <h4><?=$row2['post']?></h4>
              <h5><?=$row2['anne']?></h5>
              <p><em>Experion, New York, NY </em></p>
              <p>
              <ul>
                <li><?=$row2['experience1']?></li>
                <li><?=$row2['experience2']?></li>
                <li><?=$row2['experience3']?></li>
                <li><?=$row2['experience4']?></li>
              </ul>
              </p>
            <?php endwhile; ?>
          <?php endif; ?>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End My Resume Section -->

    <!-- ======= My Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>My portfolio</span>
          <h2>My portfolio</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">

          <?php if(mysqli_num_rows($result3)>0): ?>
            <?php while($row3=mysqli_fetch_assoc($result3)) : ?>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0 ">
                <div class="icon-box" >
                <img src="<?=$row3['image']?>" class="card-img-top" alt="...">
                  <h4 class="title"><a href=""><?=$row3['titre']?></a></h4>
                  <p class="description title"><i class='bx bxl-github bx-lg  bx-tada-hover'> <a href="<?=$row3['lien_github']?>">Github</a> </i></p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>







        </div>

      </div>
    </section><!-- End My Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="asset/img/testimonials/abdo.jpg" class="testimonial-img" alt="">
            <h3><?=$row22['nom'];?> <?=$row22['prenom'];?></h3>
            <h4 style="color:#ffb727;"> Développeur full stack</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>

I created websites and worked hard to learn more and more and now I can't wait to bring this passion to the real world.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>


        </div>

      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p><?=$row22['email'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <p><?=$row22['telephone'];?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="" method="post" >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email"  />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet"  />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                 <textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>
                <!-- <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message est envoyé. Merci!</div> -->
              </div>
              <div class="text-center"><button type="submit" name="envoye" class="btn btn-warning">Message envoyé</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->

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
      <div class="copyright">
        &copy; Copyright <strong><span>Massif</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/jquery/jquery.min.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>
  <script src="asset/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="asset/vendor/counterup/counterup.min.js"></script>
  <script src="asset/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

</body>

</html>
