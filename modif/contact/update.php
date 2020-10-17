<?php
//test
include("../../connect.php");
include("../../interdit.php");

$id_modif = $_SESSION['id_modif'];

/////////////////////////////

//Ajouter une formation

if(isset($_POST['Modifier']))
{
  //création des variables pour les champs
  $nom=htmlspecialchars(trim($_POST['nom']));
  $prenom=htmlspecialchars(trim($_POST['prenom']));
  $email=htmlspecialchars(trim($_POST['email']));
  $telephone=htmlspecialchars(trim($_POST['telephone']));
  $adresse=htmlspecialchars(trim($_POST['adresse']));
  $diplome=htmlspecialchars(trim($_POST['diplome']));
  //insertion des champs au tableau form
  $query_update = "UPDATE profit SET nom = '$nom', prenom = '$prenom', email = '$email', telephone = '$telephone', adresse = '$adresse', diplome = '$diplome'  WHERE id = '$id_modif' ";

  if(mysqli_query($con,$query_update)){
    echo "La modification est effectuée avec succès";
    header("location: profit.php");
  }
}

//Modification des formations

if (isset($_GET['edit_dc'])) {
  $_SESSION['id_modif'] = $_GET['edit_dc'];

}

//Remplir La liste
$query_profit = "SELECT * FROM profit";
$result = mysqli_query($con,$query_profit);
$row1 = mysqli_fetch_assoc($result);

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
        <p>Ajouter une autre expérience</p>

      </div>
      <div class="col-md-9 register-right">

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">modifier</h3>
            <div class="row register-form d-flex justify-content-center">
              <div class="col-md-6 ">
                <form action="" method="post">

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="nom"  value="<?=$row1['nom'];?>" />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="prenom"  value="<?=$row1['prenom'];?>" />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="email"  value="<?=$row1['email'];?>" />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="telephone"  value="<?=$row1['telephone'];?>" />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="adresse"  value="<?=$row1['adresse'];?>" />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="diplome"  value="<?=$row1['diplome'];?>" />
                  </div>

                  <div>
                    <button class="btn btn-success" type="submit" name="Modifier">Modifier</button>
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


  <script src="assets/js/main.js"></script>

</body>

</html>
