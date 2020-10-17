<?php
//test
include("../../connect.php");
include("../../interdit.php");

/////////////////////////////

//Ajouter une formation

if(isset($_POST['Valider']))
{
  //création des variables pour les champs
  $competence=htmlspecialchars(trim($_POST['competence']));
  $pourcentage=htmlspecialchars(trim($_POST['pourcentage']));

  //insertion des champs au tableau form
  $query_competance = "INSERT INTO skills(competent,pourcentage)VALUE('$competence','$pourcentage')";

  if(mysqli_query($con,$query_competance)){
    echo "l'ajout est envoyé";
  }
}

//Modification des formations

if (isset($_GET['edit_dc'])) {
  $_SESSION['id_modif'] = $_GET['edit_dc'];

}

//Remplir La liste
$query_skills = "SELECT * FROM skills";
$result = mysqli_query($con,$query_skills);

//suprimer la demande de congé
if(isset($_GET['delete_dc'])){
  $id = $_GET['delete_dc'];
  $sql = "DELETE FROM skills WHERE id = $id";
  $res = mysqli_query($con,$sql);
  header("location: ajout.php");
}
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
        <p>Ajouter une autre compétence</p>

      </div>
      <div class="col-md-9 register-right">

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Ajouter une autre compétence</h3>
            <div class="row register-form d-flex justify-content-center">
              <div class="col-md-6 ">
                <form action="" method="post">

                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="competence" placeholder="compétence *" value="" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control text-center" name="pourcentage" placeholder="pourcentage*" value="" />
                  </div>

                  <div>
                    <button class="btn btn-primary" type="submit" name="Valider">Valider</button>
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

  <div class="container my-5">

    <table class="table1" border=1>
    <tr>
                <td class="td1 text-center bg-primary" >id </td>
                <td class="td1 text-center bg-primary">Compétance</td>
                <td class="td1 text-center bg-primary">Pourcentage</td>

            </tr>
    <?php



    if(mysqli_num_rows($result)>0 ){


        //var_dump($row);
        while($row = mysqli_fetch_assoc($result) ) {
          ?>
          <tr>

            <td class="p-2"><?=$row['id'];?></td>
            <td class="p-2"><?=$row['competent'];?></td>
            <td class="p-2"><?=$row['pourcentage'];?></td>

            <td><a class="modif btn btn-success" href="modification.php?edit_dc=<?=$row['id'];?>">Modifier</a></td>
            <td><a class="supp btn btn-danger " href="ajout.php?delete_dc=<?=$row['id'];?>">Suprimer</a></td>


          </tr>
          <?php
        }
      }else{
        echo "0 result";
      }

    ?>



            <?php

                // $r=mysqli_query($con,"select * from demande_conge where id=1")
            ?>
        </table>

      <div class="py-4">

        <form action="" method="POST">
            <button class="btn btn-primary" type=submit name="precedent">précédent</button>
        </form>

      </div>


  </div>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
