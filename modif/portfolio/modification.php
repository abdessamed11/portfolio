<?php
//test
include("../../connect.php");
include("../../interdit.php");

if (isset($_GET['edit_dc'])) {
  $_SESSION['id_modif'] = $_GET['edit_dc'];
  $id_modif = $_SESSION['id_modif'];

}

/////////////////////////////

//Ajouter une formation

if(isset($_POST['Modifier']))
{
  //création des variables pour les champs
  $image=htmlspecialchars(trim($_POST['image']));
  $titre=htmlspecialchars(trim($_POST['titre']));
  $lien_github=htmlspecialchars(trim($_POST['lien_github']));
  $lien_site=htmlspecialchars(trim($_POST['lien_site']));
  //insertion des champs au tableau form
  $query_update = "UPDATE portfolio SET image='$image', titre='$titre', lien_github='$lien_github', lien_site='$lien_site' WHERE id = '$id_modif' ";

  if(mysqli_query($con,$query_update)){
    echo "l'ajout est envoyé";
  }
  header('location: ajout.php');
}

//Modification des formations



//Remplir La liste
$query_portfolio = "SELECT * FROM portfolio WHERE id = '$id_modif'";
$result = mysqli_query($con,$query_portfolio);
$row1 = mysqli_fetch_assoc($result);


if(isset($_POST['precedent']))
    header("location: ../../home.php");

if(isset($_POST['ajouter'])){
  header("location: formation_ajout.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>portfolio </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/style2.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v2.1.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <div class="container register">
    <div class="row d-flex align-items-center">
      <div class="col-md-3 register-left">

        <h3>Bonjour</h3>
        <p>Modifier le travail</p>

      </div>
      <div class="col-md-9 register-right">

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Modifier le travail</h3>
            <div class="row register-form d-flex justify-content-center">
              <div class="col-md-6 ">
                <form action="" method="post">

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="image" placeholder="Image *" value="<?=$row1['image']?>" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="titre" placeholder="Titre *" value="<?=$row1['titre']?>" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="lien_github" placeholder="lien_github *" value="<?=$row1['lien_github']?>" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="lien_site" placeholder="lien_site *" value="<?=$row1['lien_site']?>" />
                  </div>

                  <div>
                    <button class="btn btn-primary" type="submit" name="Modifier">Modifier</button>
                    <button class="btn btn-danger" type="submit" name="Déconnecté">Déconnecté</button>
                  </div>


                </form>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>


        </table>

      <div class="py-4 container">

        <form action="" method="POST">
            <button class="btn btn-primary" type=submit name="precedent">précédent</button>
        </form>

      </div>


  </div>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
