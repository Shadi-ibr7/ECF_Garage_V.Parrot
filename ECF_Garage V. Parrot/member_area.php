<?php 
session_start();
if(!$_SESSION['admin_name']){
    header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les membre</title>
</head>
<body>
    
</body>
</html>