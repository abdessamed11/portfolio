<?php

include("../../connect.php");
include("../../interdit.php");

if (isset($_POST['deconnecte'])) {
    unset($_SESSION ['name']);
    header('location: ../../index.php');
  }
//Remplir La liste
$query_type23 = "SELECT * FROM profit";
$result23 = mysqli_query($con,$query_type23);

// suprimer la demande de congé
if(isset($_GET['delete_dc'])){
  $id = $_GET['delete_dc'];
  $sql = "DELETE FROM profit WHERE id = $id";
  $res = mysqli_query($con,$sql);
}
if(isset($_POST['precedent']))
    header("location: ../../home.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profit</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
</head>
<body>
<table class="table1" border=1>
<tr>
            <td class="td1" >id </td>
            <td class="td1">nom</td>
            <td class="td1">prenom</td>
            <td class="td1">email</td>
            <td class="td1">téléphone</td>
            <td class="td1">adresse</td>
            <td class="td1">diplome</td>

        </tr>
<?php
if(mysqli_num_rows($result23)>0 ){

    //var_dump($row);
    while($row22 = mysqli_fetch_assoc($result23) ) {
      ?>
      <tr>
        <td><?=$row22['nom'];?></td>
        <td><?=$row22['prenom'];?></td>
        <td><?=$row22['email'];?></td>
        <td><?=$row22['telephone'];?></td>
        <td><?=$row22['adresse'];?></td>
        <td><?=$row22['diplome'];?></td>

        <td><a class="supp" href="update.php?edit_dc=<?=$row22['id'];?>">Modifier</a></td>

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

    <form action="" method="POST">
        <button class="btn1" type=submit name="precedent">précédent</button>
        <button class="btn2" type=submit name="deconnecte">déconnecté</button>
    </form>

</body>
</html>
