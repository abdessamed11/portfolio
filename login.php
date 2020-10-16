<?php
include("connect.php");

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LoginIn</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>


	<div class="container">

		<div class="login-content mx-auto form_login text-center">
			<form class="px-5" action="" method="POST">
				<img src="assets/img/avatar.svg">
				<h2 class="title text-white">Welcome</h2>
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


</body>

</html>
