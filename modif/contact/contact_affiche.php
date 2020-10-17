<?php

include("../../connect.php");
include("../../interdit.php");

if (isset($_POST['deconnecte'])) {
    unset($_SESSION ['name']);
    header('location: ../../index.php');
  }
//Remplir La liste
$query_message22 = "SELECT * FROM contct";
$result22 = mysqli_query($con,$query_message22);

// suprimer la demande de congé
if(isset($_GET['delete_dc'])){
  $id = $_GET['delete_dc'];
  $sql = "DELETE FROM contct WHERE id = $id";
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
    <title>resultat</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
</head>
<body>
<table class="table1" border=1>
<tr>
            <td class="td1" >date </td>
            <td class="td1">name</td>
            <td class="td1">email</td>
            <td class="td1">objet</td>
            <td class="td1">message</td>

        </tr>
<?php



if(mysqli_num_rows($result22)>0 ){


    //var_dump($row);
    while($row22 = mysqli_fetch_assoc($result22) ) {
      ?>
      <tr>
        <td><?=$row22['datee'];?></td>
        <td><?=$row22['name'];?></td>
        <td><?=$row22['email'];?></td>
        <td><?=$row22['objet'];?></td>
        <td><?=$row22['message'];?></td>

        <td><a class="supp" href="contact_affiche.php?delete_dc=<?=$row22['id'];?>">Suprimer</a></td>

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
