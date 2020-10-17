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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>logg</title>
  <link rel="stylesheet" href="asset/css/logg.css">
</head>
<body>

  <div class="form">

      <div class="tab-content">
        <div id="signup">
          <h1>Login</h1>

          <form action="/" method="post">

          <div class="top-row">


          <div class="field-wrap">
            <input name="email" type="email" required placeholder="Email Address"/>
          </div>

          <div class="field-wrap">
            <input name="password" type="password"required placeholder="password"/>
          </div>

          <button type="submit" name="submit" class="button button-block"/>LOGIN</button>

          </form>

        </div>



</div> <!-- /form -->
  <script type="asset/js/logg.js">

  </script>
</body>
</html>
