<?php
include "connect.php";

////////////////////
$query_type = "SELECT * FROM skills ";
$result = mysqli_query($con,$query_type);
///////////////////////////
$query_type1 = "SELECT * FROM form ";
$result1 = mysqli_query($con,$query_type1);
///////////////////////////
$query_type2 = "SELECT * FROM experience_professionelle ";
$result2 = mysqli_query($con,$query_type2);
//////////////////////
$query_type3 = "SELECT * FROM portfolio ";
$result3 = mysqli_query($con,$query_type3);
//////////////////////
if(isset($_POST['envoye']))
{
    $date_demande=date("Y-m-d");
    $name=htmlspecialchars(trim($_POST['name']));
    $email=htmlspecialchars(trim($_POST['email']));
    $objet=htmlspecialchars(trim($_POST['subject']));
    $message=htmlspecialchars(trim($_POST['message']));

  //Date de demande ::

  $query_dconge11 = "INSERT INTO contct(datee,name,email,objet,message)VALUE('$date_demande','$name','$email','$objet','$message')";

 mysqli_query($con,$query_dconge11);


}


?>
