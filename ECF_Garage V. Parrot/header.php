

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<header class="header">

    <section class="flex">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> garage <span>v.parrot</span></a>

        <nav class="navbar">
            <a href="#home">Accueil</a>
            <a href="#vehicles">Véhicles</a>
            <a href="#services">Services</a>
            <a href="#featured">Vedette</a>
            <a href="#reviews">Avis</a>
            <a href="#contact">contact</a>
        </nav>

        <div id="login-btn">
            <button class="btn">connexion</button>
            <i class="far fa-user"></i>
        </div>

    </section>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>Connexion</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> Mot de passe <a href="#">connectez-vous</a> </p>
        <input type="submit" value="login" class="btn">
    </form>

</div>
