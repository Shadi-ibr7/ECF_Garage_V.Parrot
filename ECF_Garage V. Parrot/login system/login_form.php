<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   if(empty($_POST['email']) AND empty($_POST['password'])){
      $email = "admin"
      $mdp = "admin1234"

      $email_saisi = htmlspecialchars($_POST['email']);
      $mdp_saisi = htmlspecialchars($_POST['mdp']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['email-saisi'] == 'email' && $row['mdp_saisi'] == 'mdp'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:member_area.php');

   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="entrez votre email">
      <input type="password" name="mdp" required placeholder="entrez votre mot de passe">
      <input type="submit" name="submit" value="connexion" class="form-btn">
   </form>

</div>

</body>
</html>