
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
  $specialiste=htmlspecialchars(trim($_POST['specialiste']));
  $anne=htmlspecialchars(trim($_POST['anne']));
  $ecole=htmlspecialchars(trim($_POST['ecole']));

  //insertion des champs au tableau experience_profesionnelle
  $query_update = "UPDATE form SET specialiste='$specialiste', anne='$anne', ecole='$ecole' WHERE id = '$id_modif' ";


  if(mysqli_query($con,$query_update)){
    echo "l'ajout est envoyé";
    header("location: ajout.php");
  }
}


//Modification des formations



//Remplir La liste
$query_form = "SELECT * FROM form WHERE id = '$id_modif' ";
$result = mysqli_query($con,$query_form);
$row1 = mysqli_fetch_assoc($result);


if(isset($_POST['precedent']))
    header("location: ../../home.php");



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
        <p>modifier une autre formation</p>

      </div>
      <div class="col-md-9 register-right">

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">modifier une autre formation</h3>
            <div class="row register-form d-flex justify-content-center">
              <div class="col-md-6 ">
                <form action="" method="post">

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="specialiste" placeholder="année de travail *" value="<?=$row1['specialiste'];?>" />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="anne" placeholder="post *" value="<?=$row1['anne'];?>" />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="ecole" placeholder="1ér experience *" value="<?=$row1['ecole'];?>" />
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
