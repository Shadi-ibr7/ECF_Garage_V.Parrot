<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css_admin/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Bonjour, <span>admin</span></h3>
      <h1>Bienvenue !</h1>
      <p>Ceci est une page d'administration</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>