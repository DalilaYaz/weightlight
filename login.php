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

<?php

require_once("class/class_bdd.php");

$server = "localhost";
$DBName = "weightlight";
$user = "root";
$pass = "";

$objBDD = new bdd($server, $DBName, $user, $pass);
$objLog = new log("./log/log.txt");
$objLog->writeLog("Connexion vers la base de donnée");
?>
    <div class="flex">

        <form action="" method="">
            <p class="desc1">Bienvenue sur<span class="green"> Weight</span><span class="orange">Light</span>,Connectez vous !</p>

            <div class="field">
                <label for="email">Email</label> <br>
                <input type="email" name="email" id="email" placeholder="Saisir votre email ici">
            </div>

            <div class="field">
                <label for="">Mot de passe</label> <br>
                <input type="password" name="password" id="password" placeholder="Saisir votre mot de pass">
            </div>

            <button type="submit" class="btnPrimary" value="Se Connecter" id="submit">Se Connecter</button>

            <p class="desc2"> Nouveau utilisateur ?<a href="signup.php"><span class="orange"> <a href="signup.php" class="orange">Inscrivez-vous.</a></span></a></p>

        </form>

        <img src="images/home/lifestyle.jpg" alt="">

    </div>
    <?php
    session_start();

    if (isset($_POST['email']) && isset($_POST['password'])) {

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS

    if ($_POST['email'] !== "" && $_POST['password'] !== "") {
        $array = array($_POST['email'], $_POST['password']);
        $requete = "SELECT idUser As nb FROM utilisateur where email = ? and password = ? ";
        $res = $objBDD->select($requete, $array);
        
        if ($res[0]->nb != 0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['idUser'] = $res[0]->nb;
            header('Location: homeuser.php?id_user='.$res[0]->nb);
            $objLog->writeLog("Connexion réussie de l'utilisateur<br>");
        } else {
            header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
            $objLog->writeLog("Erreur de saisie de login ou mot de passe<br>");
        }
    } else {
        header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
        $objLog->writeLog("Erreur login ou mot de passe vide<br>");
    }
}


?>
</body>

<footer>WeightLight &copy 2022 - IUT Calais</footer>

</html>