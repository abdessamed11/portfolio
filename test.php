<?php
include("connect.php");
if(isset($_POST['message']))
{
    $name=htmlspecialchars(trim($_POST['name']));
    $email=htmlspecialchars(trim($_POST['email']));
    $objet=htmlspecialchars(trim($_POST['subject']));
    $message=htmlspecialchars(trim($_POST['messge']));
 
  //Date de demande ::
  
  $query_dcongé11 = "INSERT INTO contct(name,email,objet,message)VALUE('$name','$email','$objet','$message')";
 mysqli_query($con,$query_dcongé11);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>portfolio </title>
  
</head>

<body>

<div class="col-lg-8 mt-5 mt-lg-0">

<form action="" method="POST">
					<label for="date_debut">name*</label><br>
					<input id='date_debut' class="field" type="text" name="name" ><br><br>
				  </div>
				  <div>
					<label for="date_fin">email*</label><br>
					<input id='date_fin' class="field" type="text" name="email" ><br><br>
				  </div>
                  <label for="date_debut">objet*</label><br>
					<input id='date_debut' class="field" type="text" name="subject" ><br><br>
				  </div>
				  <div>
					<label for="date_fin">message*</label><br>
					<input id='date_fin' class="field" type="text" name="messge" ><br><br>
				  </div>
					  
					  <div>
					   <button class="btn" type="submit" name="message">Valider</button><br><br>
					  </div>
					  
</form>

</div>

</div>

</div>


</body>

</html>