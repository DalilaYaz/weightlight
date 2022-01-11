<?php require_once 'includes/nav2.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICON WEIGHTLIGHT -->
    <link rel="icon" type="image/svg" href="images/logo/WL.png" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <!-- utilities.css Représente le code css commun entre les pages -->
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/login.css">
    <title>WeightLight</title>
</head>

<body>


    <div class="flex">

        <form action="" method="">
            <p class="desc1">Bienvenue sur<span class="green"> Weight</span><span class="orange">Light</span>, Connectez vous !</p>

            <div class="field">
                <label for="email">Email</label> <br>
                <input type="email" name="email" id="email" placeholder="Saisir votre email ici">
            </div>

            <div class="field">
                <label for="">Mot de pass</label> <br>
                <input type="password" name="password" id="password" placeholder="Saisir votre mot de pass">
            </div>

            <button type="submit" class="btnPrimary" value="Se Connecter">Se Connecter</button>

            <p class="desc2"> Nouveau utilisateur?<a href="signup.php"><span class="orange"> Inscrivez-vous.</span></a></p>

        </form>

        <img src="images/home/lifestyle.jpg" alt="">

    </div>




</body>

<footer>WeightLight &copy 2022 - IUT Calais</footer>

</html>